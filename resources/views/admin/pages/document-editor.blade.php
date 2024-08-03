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


            <div class="py-5">
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
                </div>


            </div>
    </main>
@endsection
