<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('students.index') }}">Training Institute</a>

        <div class="navbar-nav">
            <a class="nav-link {{ request()->routeIs('students.*') ? 'active' : '' }}"
               href="{{ route('students.index') }}">Students</a>

            <a class="nav-link {{ request()->routeIs('courses.*') ? 'active' : '' }}"
               href="{{ route('courses.index') }}">Courses</a>
        </div>
    </div>
</nav>