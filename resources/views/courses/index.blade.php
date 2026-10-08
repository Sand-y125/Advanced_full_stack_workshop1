@extends('layouts.app')

@section('title', 'Courses')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Courses</h1>

```
<a href="{{ route('courses.create') }}" class="btn btn-primary">
    Add Course
</a>
```

</div>

@if ($courses->count())

```
<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Duration</th>
                <th>Fee</th>
                <th>Difficulty</th>
                <th>Status</th>
                <th width="220">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>

                    <td>{{ $course->name }}</td>

                    <td>
                        {{ $course->duration }} weeks
                    </td>

                    <td>
                        {{ number_format((float) $course->fee, 2) }}
                    </td>

                    <td>
                        {{ $course->difficulty }}
                    </td>

                    <td>
                        @if ($course->is_active)
                            <span class="badge bg-success">
                                Active
                            </span>
                        @else
                            <span class="badge bg-secondary">
                                Inactive
                            </span>
                        @endif
                    </td>

                    <td>
                        <a
                            href="{{ route('courses.show', $course) }}"
                            class="btn btn-sm btn-info"
                        >
                            View
                        </a>

                        <a
                            href="{{ route('courses.edit', $course) }}"
                            class="btn btn-sm btn-warning"
                        >
                            Edit
                        </a>

                        <form
                            action="{{ route('courses.destroy', $course) }}"
                            method="POST"
                            class="d-inline"
                        >
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete this course?')"
                            >
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>

<div class="mt-3">
    {{ $courses->links() }}
</div>
```

@else

```
<div class="alert alert-info">
    No courses found.
</div>
```

@endif

@endsection
