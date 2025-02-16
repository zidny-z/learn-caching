@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-xl font-bold mb-4">Data Employee</h1>
        <livewire:employee-table wire:key="employee-table" />
    </div>
@endsection
