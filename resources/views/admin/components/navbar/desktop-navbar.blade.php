<div class="hidden lg:fixed lg:inset-y-0 lg:flex lg:w-64 lg:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex flex-grow flex-col overflow-y-auto bg-cyan-700 pb-4 pt-5">
        <div class="flex flex-shrink-0 items-center px-4">
            <img class="h-16 w-auto" src="{{ asset('assets/img/logo.png') }}" alt="blglegal logo">
        </div>
        <nav class="mt-5 flex flex-1 flex-col divide-y divide-cyan-800 overflow-y-auto" aria-label="Sidebar">
            <div class="space-y-1 px-2">
                <!-- Current: "bg-cyan-800 text-white", Default: "text-cyan-100 hover:bg-cyan-600 hover:text-white" -->
                <a
                    wire:navigate
                    href="{{ route('admin.dashboard') }}" class="@if(request()->route()->getName() == 'admin.dashboard') bg-cyan-800 text-white @else text-cyan-100 hover:bg-cyan-600 hover:text-white @endif group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6" aria-current="page">
                    <svg class="mr-4 h-6 w-6 flex-shrink-0 text-cyan-200" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    Home
                </a>
                <a
                    wire:navigate
                    href="{{ route('admin.intake') }}" class="@if(request()->route()->getName() == 'admin.intake') bg-cyan-800 text-white @else text-cyan-100 hover:bg-cyan-600 hover:text-white @endif group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-4 h-6 w-6 flex-shrink-0 text-cyan-200">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                    </svg>
                    Intake
                </a>
                <a
                    wire:navigate
                    href="{{ route('admin.document.editor') }}" class="@if(request()->route()->getName() == 'admin.document.editor') bg-cyan-800 text-white @else text-cyan-100 hover:bg-cyan-600 hover:text-white @endif group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-4 h-6 w-6 flex-shrink-0 text-cyan-200">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                    </svg>
                    Document Editor
                </a>
            </div>
            {{--            <div class="mt-6 pt-6">--}}
            {{--                <div class="space-y-1 px-2">--}}
            {{--                    <a href="#" class="group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6 text-cyan-100 hover:bg-cyan-600 hover:text-white">--}}
            {{--                        <svg class="mr-4 h-6 w-6 text-cyan-200" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">--}}
            {{--                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />--}}
            {{--                        </svg>--}}
            {{--                        Settings--}}
            {{--                    </a>--}}
            {{--                    <a href="#" class="group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6 text-cyan-100 hover:bg-cyan-600 hover:text-white">--}}
            {{--                        <svg class="mr-4 h-6 w-6 text-cyan-200" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">--}}
            {{--                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />--}}
            {{--                        </svg>--}}
            {{--                        Help--}}
            {{--                    </a>--}}
            {{--                    <div x-data="{ open: false }">--}}
            {{--                        <button type="button"--}}
            {{--                                class="group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6 text-cyan-100 hover:bg-cyan-600 hover:text-white w-full"--}}
            {{--                                aria-controls="sub-menu-2" @click="open = !open" aria-expanded="false"--}}
            {{--                                x-bind:aria-expanded="open.toString()">--}}
            {{--                            <svg class="mr-4 h-5 w-5 shrink-0 text-white" x-state:on="Expanded"--}}
            {{--                                 x-state:off="Collapsed"--}}
            {{--                                 :class="{ 'rotate-90 text-gray-500': open, 'text-gray-400': !(open) }"--}}
            {{--                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
            {{--                                <path fill-rule="evenodd"--}}
            {{--                                      d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"--}}
            {{--                                      clip-rule="evenodd"></path>--}}
            {{--                            </svg>--}}
            {{--                            Notifications--}}
            {{--                        </button>--}}
            {{--                        <ul x-description="Expandable link section, show/hide based on state." class="mt-1 px-2"--}}
            {{--                            id="sub-menu-2"--}}
            {{--                            x-show="open"--}}
            {{--                            x-transition:enter="transition ease-out duration-100"--}}
            {{--                            x-transition:enter-start="transform opacity-0 scale-95"--}}
            {{--                            x-transition:enter-end="transform opacity-100 scale-100"--}}
            {{--                            x-transition:leave="transition ease-in duration-75"--}}
            {{--                            x-transition:leave-start="transform opacity-100 scale-100"--}}
            {{--                            x-transition:leave-end="transform opacity-0 scale-95"--}}
            {{--                            style="display: none;">--}}

            {{--                            <li>--}}
            {{--                                <a--}}
            {{--                                    class="hover:bg-cyan-600 block rounded-md py-2 pr-2 pl-9 text-sm leading-6 text-white">"Profile--}}
            {{--                                    updated" Email</a>--}}
            {{--                            </li>--}}

            {{--                            <li>--}}
            {{--                                <a--}}
            {{--                                    class="hover:bg-cyan-600 block rounded-md py-2 pr-2 pl-9 text-sm leading-6 text-white">"Create--}}
            {{--                                    Password" Email</a>--}}
            {{--                            </li>--}}

            {{--                            <li>--}}
            {{--                                <a--}}
            {{--                                    class="hover:bg-cyan-600 block rounded-md py-2 pr-2 pl-9 text-sm leading-6 text-white">"New--}}
            {{--                                    Advisor" Email</a>--}}
            {{--                            </li>--}}
            {{--                        </ul>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </nav>
    </div>
</div>
