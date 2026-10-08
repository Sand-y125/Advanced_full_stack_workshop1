@extends('layouts.app')

@section('title', 'Course Details')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Course Details</h1>

```
<div>
    <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning">
        Edit
    </a>

    <a href="{{ route('courses.index') }}" class="btn btn-secondary">
        Back
    </a>
</div>
```

</div>

<div class="card">
    <div class="card-body">

```
    <dl class="row mb-0">

        <dt class="col-sm-3">Course Name</dt>
        <dd class="col-sm-9">
            {{ $course->name }}
        </dd>

        <dt class="col-sm-3">Description</dt>
        <dd class="col-sm-9">
            {{ $course->description }}
        </dd>

        <dt class="col-sm-3">Duration</dt>
        <dd class="col-sm-9">
            {{ $course->duration }} weeks
        </dd>

        <dt class="col-sm-3">Fee</dt>
        <dd class="col-sm-9">
            {{ number_format((float) $course->fee, 2) }}
        </dd>

        <dt class="col-sm-3">Difficulty</dt>
        <dd class="col-sm-9">
            {{ $course->difficulty }}
        </dd>

        <dt class="col-sm-3">Status</dt>
        <dd class="col-sm-9">
            @if ($course->is_active)
                <span class="badge bg-success">
                    Active
                </span>
            @else
                <span class="badge bg-secondary">
                    Inactive
                </span>
            @endif
        </dd>

    </dl>

</div>
```

</div>

@endsection
