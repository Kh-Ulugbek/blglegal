@extends('admin.layouts.app')

@section('content')

    <div class="py-5">
        <div class="main-container">
            <div class="editor-container editor-container_document-editor" id="editor-container">
                <div class="editor-container__menu-bar" id="editor-menu-bar"></div>
                <div class="editor-container__toolbar" id="editor-toolbar"></div>
                <div class="editor-container__editor-wrapper">
                    <div class="editor-container__editor"><div id="editor"></div></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')

@endpush
