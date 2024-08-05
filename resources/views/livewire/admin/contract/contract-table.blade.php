<div class="px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between sm:items-center mt-8   ">

        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Files</h1>
        </div>
    </div>
    <div class="mt-8 flow-root">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                    <tr>
                        <th scope="col"
                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                            <a wire:click="sort('contracts.name')" href="#" class="group inline-flex">
                                Name
                                <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                                <span
                                    @if($sort_type == 'contracts.name' and $direction == 'desc')
                                        class="ml-2 flex-none rounded
                                                bg-red-50
                                                text-red-900
                                                group-hover:bg-red-100
                                                pt-1"
                                    {{--                            style="background: #f3dbdb; color: #c70707"--}}
                                    @elseif($sort_type == 'contracts.name' and $direction == 'asc')
                                        class="ml-2 flex-none rounded
                                                bg-green-50
                                                text-green-900
                                                group-hover:bg-green-100
                                                pt-1"
                                    {{--                            style="background: #dbf3e5; color: #07c78c"--}}
                                    @else
                                        class="ml-2 flex-none rounded
                                                text-gray-900
                                                group-hover:bg-gray-100
                                                pt-1"
                                        @endif
                                    >
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                             viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4
                                            @if($sort_type == 'contracts.name' and $direction == 'desc')
                                                text-red-900
                                            @elseif($sort_type == 'contracts.name' and $direction == 'asc')
                                                text-green-900
                                            @else
                                                text-gray-900
                                            @endif
                                            ">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M3 7.5L7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5"/>
                                        </svg>
                                    </span>
                            </a>
                        </th>
                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                            <span class="sr-only">Action</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach($list as $item)
                        <tr x-data="{ deleteModal{{ $item->id }}: false }">
                            <td class="whitespace-nowrap py-4 text-sm text-gray-500">
                                {{ $item->name }}
                            </td>
                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-2">
                                <a href="{{ route('admin.document.editor.edit', $item->id) }}"
                                   type="button"
                                   class="inline-flex items-center rounded-md bg-yellow-500 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-yellow-400">
                                    Edit
                                </a>
                                <a x-on:click="deleteModal{{ $item->id }} = true"
                                   type="button"
                                   class="inline-flex items-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-red-300 hover:bg-red-400">
                                    Delete
                                </a>
                                <div
                                    :class="{ 'hidden': ! deleteModal{{ $item->id }} }"
                                    class="relative z-10" aria-labelledby="modal-title" role="dialog"
                                    aria-modal="true">
                                    <div>
                                        <div x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background backdrop, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                        <div class="fixed inset-0 z-10 overflow-y-auto">
                                            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                                <div
                                                    x-transition:enter="ease-out duration-300"
                                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                    x-transition:leave="ease-in duration-200"
                                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                    class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-xl sm:p-6">
                                                    <div>
                                                        <div class="absolute right-0 top-0 hidden pr-4 pt-4 sm:block">
                                                            <button
                                                                x-on:click="deleteModal{{ $item->id }} = false"
                                                                type="button"
                                                                class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                                <span class="sr-only">Close</span>
                                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                                     stroke="currentColor" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="mt-3 text-center sm:mt-5">
                                                            <div>
                                                                <label class="text-base font-semibold text-gray-900 mb-2">Please confirm action</label>
                                                                <p class="mt-3 text-sm leading-6 text-gray-600">Delete Intake File </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-5 sm:mt-4 sm:flex sm:justify-between">
                                                        <button
                                                            x-on:click="deleteModal{{ $item->id }} = false"
                                                            type="button"
                                                            class="inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto sm:w-1/3">
                                                            Close
                                                        </button>
                                                        <div class="inline-flex sm:w-2/3 justify-end">
                                                            <button
                                                                x-on:click="deleteModal{{ $item->id }} = false"
                                                                wire:click="delete({{ $item->id }})"
                                                                type="button"
                                                                class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-400 sm:ml-3 sm:w-auto">
                                                                Delete
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <!-- More people... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
