<x-layouts.app title="Students">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Students</h1>

        <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
    </div>

    @if ($students->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Date of Birth</th>
                        <th width="220">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->date_of_birth->format('Y-m-d') }}</td>
                            <td>
                                <a href="{{ route('students.show', $student) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-warning">Edit</a>
                                <x-delete-form :action="route('students.destroy', $student)" />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-3">{{ $students->links() }}</div>
    @else
        <div class="alert alert-info">No students found.</div>
    @endif

</x-layouts.app>