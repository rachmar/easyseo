<?php

namespace App\Http\Livewire\Pages\PhoneNumbers;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Integrations\SignalWire;
use App\Models\Company;

class CallHistoryReport extends Component
{   
    public $phoneNumbers = [];

    public ?string $currentRecording = null;

    public ?string $currentPlayButton = null;

    protected $listeners = [
        'refreshComponent' => '$refresh',
        'playRecordingEnded' => 'playRecordingEnded'
    ];

    public bool $readyToPlay = false;

    public int $numOfCall = 0;


    public Company $selectedCompany;

    public function mount(Request $request, $company)
    {   
        $this->selectedCompany = Company::where('id', $company)->first();
        $this->phoneNumbers = json_decode($request->calls, true);
        $this->numOfCall = count($this->phoneNumbers ?? []);

    }

    public function render()
    {   
        return view('livewire.pages.phone-numbers.call-history-report', [
            'calls' => $this->phoneNumbers,
        ]);
    }

    public function playRecordingEnded()
    {
        $this->readyToPlay = false; 
    }


    public function paymentReport()
    {
        dd('Connect stripe payment');
    }
    
    public function playRecording(string $currentPlayButton, string $recordingUri)
    {   
        $this->currentRecording = null;

        $this->readyToPlay = false;

        $this->playRecording = true;

        $this->currentPlayButton = $currentPlayButton;
        
        $recordings = SignalWire::http($this->selectedCompany, $recordingUri);

        if (isset($recordings['recordings']) && count($recordings['recordings']) > 0) {
            $currentRecording = array_pop($recordings['recordings']);
            if (isset($currentRecording['uri'])) {
                $lastJsonPos = strrpos($currentRecording['uri'], '.json');
                $this->currentRecording = 'https://'.$this->selectedCompany->space_url.substr_replace($currentRecording['uri'], '.mp3', $lastJsonPos);
            }
        }

        $this->readyToPlay = true;

        $this->playRecording = false; 

        $this->dispatchBrowserEvent('playAudio');

        $this->dispatchBrowserEvent('refreshComponent');

    }

}
