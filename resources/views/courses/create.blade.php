@extends('layouts.app')

@section('title', 'Add Course')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Add Course</h1>

```
<a href="{{ route('courses.index') }}" class="btn btn-secondary">
    Back to Courses
</a>
```

</div>

<form action="{{ route('courses.store') }}" method="POST">
    @csrf

```
@include('courses._form', [
    'buttonText' => 'Create Course'
])
```

</form>

@endsection
