<x-layouts.app title="Add Student">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Add Student</h1>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to Students</a>
    </div>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <x-students.form :student="new \App\Models\Student()" button-text="Create Student" />
    </form>

</x-layouts.app>