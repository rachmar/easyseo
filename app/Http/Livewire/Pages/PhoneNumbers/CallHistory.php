<?php

namespace App\Http\Livewire\Pages\PhoneNumbers;

use App\Integrations\SignalWire;
use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\LengthAwarePaginator;

class CallHistory extends Component
{
    use WithPagination;

    public $selectAll = false;

    public $selectedItems = [];
    
    public $phoneNumbers = []; // Your custom array of users

    public $sortField = 'name'; // Default sorting field

    public $sortDirection = 'asc'; // Default sorting direction

    public bool $readyToDisplayCalls = false;

    public bool $readyToPlay = false;

    public bool $playRecording = false;

    public ?string $currentRecording = null;

    public ?string $currentPlayButton = null;

    public Company $selectedCompany;

    public int $numOfCall = 0;

    public int $numOfUniqueCall = 0;

    protected $listeners = [
        'refreshComponent' => '$refresh',
        'playRecordingEnded' => 'playRecordingEnded'
    ];


    public function mount($company)
    {
        $this->selectedCompany = Company::where('id', $company)->first();
        $calls = SignalWire::http($this->selectedCompany, '/api/laml/2010-04-01/Accounts/'.$this->selectedCompany->project_id.'/Calls??Status=completed');
        $this->phoneNumbers = collect($calls['calls'] ?? []);
    }

    public function sortBy($field)
    {   
        if ($field === $this->sortField) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function updatedSelectAll($value)
    {   
        if ($value) {
            $this->selectedItems = collect($this->phoneNumbers)->pluck('sid')->all();
        } else {
            $this->selectedItems = [];
        }
    }

    public function render()
    {   

        $sortedUsers = $this->phoneNumbers ?? [];
        
        if ($this->sortDirection === 'desc') {
            $sortedUsers =  $sortedUsers->sortByDesc($this->sortField);
        }else{
            $sortedUsers =  $sortedUsers->sortBy($this->sortField);
        }
        
        $sortedUsers =  $sortedUsers->all();

        $perPage = 10; // Display 10 users per page
        $currentPage = $this->page ?: 1;
        $offset = ($currentPage - 1) * $perPage;

        $paginatedUsers = new LengthAwarePaginator(
            array_slice($sortedUsers, $offset, $perPage, true),
            count($sortedUsers),
            $perPage,
            $currentPage,
            ['path' => request()->url()]
        );

        return view('livewire.pages.phone-numbers.call-history', [
            'calls' => $paginatedUsers,
        ]);
    }

    public function generateReport()
    {
        dd($this->selectedItems);
    }

}
