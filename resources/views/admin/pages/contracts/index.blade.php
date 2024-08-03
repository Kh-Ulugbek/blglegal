@extends('admin.layouts.app')

@section('content')
    <main class="flex-1 bg-white m-4 pt-4">
        @livewire('admin.contract.contract-table')
    </main>
@endsection
