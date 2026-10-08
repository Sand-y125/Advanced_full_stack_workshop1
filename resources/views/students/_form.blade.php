<div class="mb-3">
    <label for="name" class="form-label">Name</label>

    <input
        type="text"
        name="name"
        id="name"
        class="form-control @error('name') is-invalid @enderror"
        value="{{ old('name', $student->name ?? '') }}"
        required
    >

    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>

    <input
        type="email"
        name="email"
        id="email"
        class="form-control @error('email') is-invalid @enderror"
        value="{{ old('email', $student->email ?? '') }}"
        required
    >

    @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="mb-3">
    <label for="phone" class="form-label">Phone</label>

    <input
        type="text"
        name="phone"
        id="phone"
        class="form-control @error('phone') is-invalid @enderror"
        value="{{ old('phone', $student->phone ?? '') }}"
        required
    >

    @error('phone')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="mb-3">
    <label for="address" class="form-label">Address</label>

    <textarea
        name="address"
        id="address"
        class="form-control @error('address') is-invalid @enderror"
        rows="3"
        required
    >{{ old('address', $student->address ?? '') }}</textarea>

    @error('address')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="mb-3">
    <label for="date_of_birth" class="form-label">
        Date of Birth
    </label>

    <input
        type="date"
        name="date_of_birth"
        id="date_of_birth"
        class="form-control @error('date_of_birth') is-invalid @enderror"
        value="{{ old('date_of_birth', isset($student) && $student->date_of_birth ? $student->date_of_birth->format('Y-m-d') : '') }}"
        required
    >

    @error('date_of_birth')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">
    {{ $buttonText }}
</button>

<a href="{{ route('students.index') }}" class="btn btn-secondary">
    Cancel
</a>