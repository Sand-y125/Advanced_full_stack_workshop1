<x-layouts.app title="Add Course">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Add Course</h1>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to Courses</a>
    </div>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <x-courses.form :course="new \App\Models\Course(['is_active' => true])" button-text="Create Course" />
    </form>

</x-layouts.app>