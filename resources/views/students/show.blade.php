<x-layouts.app title="Student Details">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Student Details</h1>

        <div>
            <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <dl class="row mb-0">
                <dt class="col-sm-3">Name</dt>
                <dd class="col-sm-9">{{ $student->name }}</dd>

                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9">{{ $student->email }}</dd>

                <dt class="col-sm-3">Phone</dt>
                <dd class="col-sm-9">{{ $student->phone }}</dd>

                <dt class="col-sm-3">Address</dt>
                <dd class="col-sm-9">{{ $student->address }}</dd>

                <dt class="col-sm-3">Date of Birth</dt>
                <dd class="col-sm-9">{{ $student->date_of_birth->format('d M Y') }}</dd>

                <dt class="col-sm-3">Age</dt>
                <dd class="col-sm-9">{{ $student->age ?? 'Not available' }}</dd>
            </dl>
        </div>
    </div>

</x-layouts.app>