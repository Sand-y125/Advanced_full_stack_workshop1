@props(['course', 'buttonText' => 'Save'])

<x-form-input name="name" label="Course Name" :value="$course->name" required />

<x-form-textarea name="description" label="Description" rows="4" :value="$course->description" required />

<div class="row">
    <div class="col-md-6">
        <x-form-input name="duration" label="Duration (weeks)" type="number"
                      min="1" max="104" :value="$course->duration" required />
    </div>
    <div class="col-md-6">
        <x-form-input name="fee" label="Fee" type="number"
                      step="0.01" min="0" :value="$course->fee" required />
    </div>
</div>

<div class="mb-3">
    <label for="difficulty" class="form-label">Difficulty</label>
    <select name="difficulty" id="difficulty"
            class="form-select @error('difficulty') is-invalid @enderror" required>
        <option value="">Select difficulty</option>
        @foreach (['Easy', 'Medium', 'Hard'] as $level)
            <option value="{{ $level }}" @selected(old('difficulty', $course->difficulty) === $level)>
                {{ $level }}
            </option>
        @endforeach
    </select>
    @error('difficulty')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-check mb-3">
    <input type="hidden" name="is_active" value="0">
    <input type="checkbox" name="is_active" id="is_active" value="1"
           class="form-check-input" @checked(old('is_active', $course->is_active))>
    <label for="is_active" class="form-check-label">Active</label>
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
<a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>