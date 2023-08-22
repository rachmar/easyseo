
<main>
    
    <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="#" class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                            <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                            Dashboard
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Companies</a>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All Companies</h1>
            </div>
            <div class="sm:flex">
                <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                    <form class="lg:pr-3" action="#" method="GET">
                        <label for="companies-search" class="sr-only">Search</label>
                        <div class="relative mt-1 lg:w-64 xl:w-96">
                            <input type="text" name="email" id="companies-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search for companies" autocomplete="false">
                        </div>
                    </form>
                    <div class="flex pl-0 mt-3 space-x-3 sm:pl-3 sm:mt-0">
                       <a href="#" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M18.85 1.1A1.99 1.99 0 0 0 17.063 0H2.937a2 2 0 0 0-1.566 3.242L6.99 9.868 7 14a1 1 0 0 0 .4.8l4 3A1 1 0 0 0 13 17l.01-7.134 5.66-6.676a1.99 1.99 0 0 0 .18-2.09Z"/>
                            </svg>
                            Filters
                        </a>
                        <a href="#" wire:click="generateReport" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg>
                            Generate Report
                        </a>
                    </div>
                </div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                    <button type="button" wire:click="create" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-primary-800">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Add Company
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <x-organisms.table id="example">
                        <x-molecules.tables.thead>
                            <tr>
                                <x-atoms.tables.th>
                                    <x-atoms.forms.checkbox wire:model="selectAll" id="checkbox-all" />
                                </x-atoms.tables.th>
                                <x-atoms.tables.th wire:click="sortBy('from')">
                                    From @if($sortField === 'from') <span>{!! $sortDirection === 'asc' ? '&#x25B2;' : '&#x25BC;' !!}</span> @endif
                                </x-atoms.tables.th>
                                <x-atoms.tables.th wire:click="sortBy('to')" >
                                    To @if($sortField === 'to') <span>{!! $sortDirection === 'asc' ? '&#x25B2;' : '&#x25BC;' !!}</span> @endif
                                </x-atoms.tables.th>
                                <x-atoms.tables.th wire:click="sortBy('duration')" >
                                    Duration @if($sortField === 'duration') <span>{!! $sortDirection === 'asc' ? '&#x25B2;' : '&#x25BC;' !!}</span> @endif
                                </x-atoms.tables.th>
                                <x-atoms.tables.th>Recording</x-atoms.tables.th>
                                <x-atoms.tables.th wire:click="sortBy('price')" >
                                    Price @if($sortField === 'price') <span>{!! $sortDirection === 'asc' ? '&#x25B2;' : '&#x25BC;' !!}</span> @endif
                                </x-atoms.tables.th>
                                <x-atoms.tables.th wire:click="sortBy('created_at')" >
                                    Created At @if($sortField === 'created_at') <span>{!! $sortDirection === 'asc' ? '&#x25B2;' : '&#x25BC;' !!}</span> @endif
                                </x-atoms.tables.th>
                            </tr>
                        </x-molecules.tables.thead>
                        <x-molecules.tables.tbody>

                            <audio id="playAudio" class="hidden">
                                <source src="{{ $currentRecording }}" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>

                            @foreach ($calls as $call)
                                <tr>
                                    <x-atoms.tables.td>
                                        <x-atoms.forms.checkbox id="checkbox-{{$call['sid']}}" wire:model="selectedItems" value="{{ $call['sid'] }}"/>
                                    </x-atoms.tables.td>
                                    <x-atoms.tables.td>{{ $call['from'] }}</x-atoms.tables.td>
                                    <x-atoms.tables.td>{{ $call['to'] }}</x-atoms.tables.td>
                                    <x-atoms.tables.td>{{ $call['duration'] }}</x-atoms.tables.td>
                                    <x-atoms.tables.td>
                                        @php
                                            $class = "inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700";
                                            if(($currentPlayButton == $call['sid']) && $readyToPlay){
                                                $class = 'inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 sm:w-auto dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800';
                                            }

                                            if(($currentPlayButton == $call['sid']) && !$currentRecording){
                                                $class = 'inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg  bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 sm:w-auto dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800';
                                            }
                                        @endphp
                                        <div class="flex items-center">
                                        <button wire:click="playRecording('{{ $call['sid'] }}', '{{ $call['subresource_uris']['recordings'] }}')" class="{{ $class }}">
                                            @if( ($currentPlayButton == $call['sid']) && $currentRecording)
                                                @if ($playRecording)
                                                    Loading
                                                @elseif ($readyToPlay)
                                                    <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 16">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m2.707 14.293 5.586-5.586a1 1 0 0 0 0-1.414L2.707 1.707A1 1 0 0 0 1 2.414v11.172a1 1 0 0 0 1.707.707Z"/>
                                                    </svg> Listening
                                                @else
                                                    Play Audio
                                                @endif
                                            @elseif( ($currentPlayButton == $call['sid']) && !$currentRecording)
                                                No Audio
                                            @else
                                                Play Audio
                                            @endif
                                        </button>
                                    </x-atoms.tables.td>
                                    <x-atoms.tables.td>{{ $call['price'] }}</x-atoms.tables.td>
                                    <x-atoms.tables.td>{{ $call['date_created'] }}</x-atoms.tables.td>

                                </tr>
                            @endforeach
                        </x-molecules.tables.tbody>
                    </x-organisms.table>
        </div>
    </div>
    
    {{ $calls->links('livewire.custom-pagination') }}
    
</main>

