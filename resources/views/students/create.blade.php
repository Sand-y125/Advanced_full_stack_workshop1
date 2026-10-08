@extends('layouts.app')

@section('title', 'Add Student')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Add Student</h1>

    <a href="{{ route('students.index') }}" class="btn btn-secondary">
        Back to Students
    </a>
</div>

<form action="{{ route('students.store') }}" method="POST">
    @csrf

    @include('students._form', [
        'buttonText' => 'Create Student'
    ])
</form>

@endsection