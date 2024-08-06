<div class="mx-auto py-32 sm:py-48 lg:py-56">
    <div class="text-center">
        <h1 class="mt-2 text-6xl font-bold tracking-tight text-white sm:text-8xl">Bogoraz Law Group</h1>
        <h1 class="mt-4 text-4xl font-bold tracking-tight text-white sm:text-6xl">WHERE LAW MATTERS</h1>
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <div class="relative z-10" role="dialog" aria-modal="true">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-35 transition-opacity" aria-hidden="true"></div>


                <div class="fixed inset-0 z-10 w-screen overflow-y-auto p-4 sm:p-6 md:p-20">
                    <div
                        class="mx-auto max-w-7xl transform divide-y divide-gray-300 overflow-hidden rounded-xl bg-white shadow-2xl ring-1 ring-black ring-opacity-5 transition-all"
                        style="min-width: 1198px; min-height: 600px">
                        <div class="relative mb-4">
                            <nav aria-label="Progress">
                                <ol role="list" class="space-y-4 md:flex md:space-x-8 md:space-y-0">
                                    <li class="md:flex-1">
                                        <!-- Completed Step -->
                                        <a href="#"
                                           class="group flex flex-col border-l-4 @if($step == 1) border-indigo-600 hover:border-indigo-800 @else border-gray-200  hover:border-gray-300 @endif py-2 pl-4  md:border-l-0 md:border-t-4 md:pb-0 md:pl-0 md:pt-4">
                                            <span class="text-sm font-medium">Sign</span>
                                        </a>
                                    </li>
                                    <li class="md:flex-1">
                                        <!-- Current Step -->
                                        <a href="#"
                                           class="flex flex-col border-l-4 @if($step == 2) border-indigo-600 hover:border-indigo-800 @else border-gray-200  hover:border-gray-300 @endif py-2 pl-4 md:border-l-0 md:border-t-4 md:pb-0 md:pl-0 md:pt-4"
                                           aria-current="step">
                                            <span class="text-sm font-medium">Document Overview</span>
                                        </a>
                                    </li>
                                    <li class="md:flex-1">
                                        <!-- Upcoming Step -->
                                        <a href="#"
                                           class="group flex flex-col border-l-4 @if($step == 3) border-indigo-600 hover:border-indigo-800 @else border-gray-200  hover:border-gray-300 @endif  py-2 pl-4 md:border-l-0 md:border-t-4 md:pb-0 md:pl-0 md:pt-4">
                                            <span class="text-sm font-medium">Confirm</span>
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>

                        <div class="transform-gpu divide-x divide-gray-100">


                            @if($step == 1)
                                <div style="min-height: 400px">
                                    <div class="mt-4 text-2xl">
                                        <h1>
                                            Please sign and click "Submit" button to continue
                                        </h1>
                                        <div
                                            x-init="const cnv = document.getElementById('signatureCanvas'); const e_img = cnv.toDataURL(); Livewire.dispatch('setEmptySignatureImage', {value:e_img})"
                                            class="text-center flex justify-center mt-4">
                                            <img width="120" src="{{ asset('assets/img/icons8-signature-64.png') }}"
                                                 alt="">
                                        </div>
                                        @if(session()->has('sign'))
                                            <div class="flex justify-center text-red-500 text-base pt-4">
                                                {{ session('sign') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="flex justify-center mt-10">
                                        @livewire('front.components.drawpad')
                                    </div>
                                </div>
                            @elseif($step == 2)
                                <div id="Iframe-Master-CC-and-Rs "
                                     class="set-margin set-padding set-border set-box-shadow center-block-horiz flex justify-center border">
                                    <iframe allowfullscreen="1"
                                            src="//www.slideshare.net/slideshow/embed_code/key/78NW2yxg5UZMM3"
                                            style="min-width: 1100px; min-height: 600px">
                                        <p style="font-size: 110%;"><em><strong>ERROR: </strong>
                                                An &#105;frame should be displayed here but your browser version does
                                                not support &#105;frames. </em>Please update your browser to its most
                                            recent version and try again.</p>
                                    </iframe>
                                </div>
                            @else


                            @endif


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


@script
<script>
    const submitBtn = document.getElementById('submitBtn');
    submitBtn.addEventListener('click', (e) => {
        const canv = document.getElementById('signatureCanvas');
        const img = canv.toDataURL()

        Livewire.dispatch('setSignatureImage', {value: img})
        Livewire.dispatch('nextStep');
    });
</script>
@endscript
