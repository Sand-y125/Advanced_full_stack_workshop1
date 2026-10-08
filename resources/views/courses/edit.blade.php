@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Edit Course</h1>

```
<a href="{{ route('courses.index') }}" class="btn btn-secondary">
    Back to Courses
</a>
```

</div>

<form action="{{ route('courses.update', $course) }}" method="POST">
    @csrf
    @method('PUT')

```
@include('courses._form', [
    'buttonText' => 'Update Course'
])
```

</form>

@endsection
