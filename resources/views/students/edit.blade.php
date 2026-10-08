@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Edit Student</h1>

```
<a href="{{ route('students.index') }}" class="btn btn-secondary">
    Back to Students
</a>
```

</div>

<form action="{{ route('students.update', $student) }}" method="POST">
    @csrf
    @method('PUT')

```
@include('students._form', [
    'buttonText' => 'Update Student'
])
```

</form>

@endsection
