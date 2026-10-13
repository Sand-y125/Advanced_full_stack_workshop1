<x-layouts.app title="Edit Student">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Edit Student</h1>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to Students</a>
    </div>

    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        <x-students.form :student="$student" button-text="Update Student" />
    </form>

</x-layouts.app>