<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    private function rules(?int $id = null): array
    {
        return [
            'name' => 'required|string|max:255',

            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('students', 'email')->ignore($id),
            ],

            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'date_of_birth' => 'required|date|before:today',
        ];
    }

    public function index()
    {
        $students = Student::latest()->paginate(10);

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());

        $student = Student::create($validated);

        return redirect()
            ->route('students.index')
            ->with(
                'success',
                "Student {$student->name} created successfully!"
            );
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate(
            $this->rules($student->id)
        );

        $student->update($validated);

        return redirect()
            ->route('students.index')
            ->with(
                'success',
                "Student {$student->name} updated successfully!"
            );
    }

    public function destroy(Student $student)
    {
        $name = $student->name;

        $student->delete();

        return redirect()
            ->route('students.index')
            ->with(
                'success',
                "Student {$name} deleted successfully!"
            );
    }
}

