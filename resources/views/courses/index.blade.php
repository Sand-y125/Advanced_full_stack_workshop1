<x-layouts.app title="Courses">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Courses</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">Add Course</a>
    </div>

    @if ($courses->count())
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
                            <td>{{ $course->duration }} weeks</td>
                            <td>{{ number_format((float) $course->fee, 2) }}</td>
                            <td>{{ $course->difficulty }}</td>
                            <td>
                                <span class="badge {{ $course->is_active ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $course->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('courses.show', $course) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('courses.edit', $course) }}" class="btn btn-sm btn-warning">Edit</a>
                                <x-delete-form :action="route('courses.destroy', $course)" />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-3">{{ $courses->links() }}</div>
    @else
        <div class="alert alert-info">No courses found.</div>
    @endif

</x-layouts.app>