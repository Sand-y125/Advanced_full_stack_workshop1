<div class="mb-3">
    <label for="name" class="form-label">Course Name</label>

```
<input
    type="text"
    name="name"
    id="name"
    class="form-control @error('name') is-invalid @enderror"
    value="{{ old('name', $course->name ?? '') }}"
    required
>

@error('name')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
```

</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>

```
<textarea
    name="description"
    id="description"
    rows="4"
    class="form-control @error('description') is-invalid @enderror"
    required
>{{ old('description', $course->description ?? '') }}</textarea>

@error('description')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
```

</div>

<div class="row">

```
<div class="col-md-6 mb-3">
    <label for="duration" class="form-label">
        Duration (weeks)
    </label>

    <input
        type="number"
        name="duration"
        id="duration"
        min="1"
        max="104"
        class="form-control @error('duration') is-invalid @enderror"
        value="{{ old('duration', $course->duration ?? '') }}"
        required
    >

    @error('duration')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-6 mb-3">
    <label for="fee" class="form-label">Fee</label>

    <input
        type="number"
        name="fee"
        id="fee"
        step="0.01"
        min="0"
        class="form-control @error('fee') is-invalid @enderror"
        value="{{ old('fee', $course->fee ?? '') }}"
        required
    >

    @error('fee')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
```

</div>

<div class="mb-3">
    <label for="difficulty" class="form-label">
        Difficulty
    </label>

```
<select
    name="difficulty"
    id="difficulty"
    class="form-select @error('difficulty') is-invalid @enderror"
    required
>
    <option value="">Select difficulty</option>

    @foreach (['Easy', 'Medium', 'Hard'] as $difficulty)
        <option
            value="{{ $difficulty }}"
            @selected(old('difficulty', $course->difficulty ?? '') === $difficulty)
        >
            {{ $difficulty }}
        </option>
    @endforeach
</select>

@error('difficulty')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
```

</div>

<div class="form-check mb-3">

```
<input
    type="hidden"
    name="is_active"
    value="0"
>

<input
    type="checkbox"
    name="is_active"
    id="is_active"
    value="1"
    class="form-check-input"
    @checked(old('is_active', $course->is_active ?? true))
>

<label for="is_active" class="form-check-label">
    Active
</label>
```

</div>

<button type="submit" class="btn btn-primary">
    {{ $buttonText }}
</button>

<a href="{{ route('courses.index') }}" class="btn btn-secondary">
    Cancel
</a>
