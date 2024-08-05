@extends('admin.layouts.app')

@section('content')
    <main class="flex-1 bg-white m-4 pt-4">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between sm:items-center mt-8   ">

                <div class="sm:flex-auto text-center">
                    <h1 class="font-semibold leading-6 text-gray-900 text-3xl">Contract Editor</h1>
                </div>
            </div>
        </div>


        <form action="{{ route('admin.document.editor.update', $item->id) }}" id="myForm" method="post" class="py-5">
            @csrf
            @method('post')
            <div class="main-container">
                <div class="editor-container editor-container_document-editor" id="editor-container">
                    <div class="editor-container__menu-bar" id="editor-menu-bar"></div>
                    <div class="editor-container__toolbar" id="editor-toolbar"></div>
                    <div class="editor-container__editor-wrapper">
                        <div class="editor-container__editor">
                            <div id="editor">{!! $item->content !!}</div>
                        </div>
                    </div>
                </div>
                <textarea name="content" class="hidden" id="content"></textarea>
                <div class="text-end mt-4">
                    <button id="btnSubmit" type="button"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </main>
@endsection

@push('scripts')
    <script type="module" src="{{ URL::asset('js/main.js') }}"></script>

@endpush
