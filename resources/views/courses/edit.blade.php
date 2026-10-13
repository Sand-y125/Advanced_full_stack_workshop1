<x-layouts.app title="Edit Course">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Edit Course</h1>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to Courses</a>
    </div>

    <form action="{{ route('courses.update', $course) }}" method="POST">
        @csrf
        @method('PUT')
        <x-courses.form :course="$course" button-text="Update Course" />
    </form>

</x-layouts.app>