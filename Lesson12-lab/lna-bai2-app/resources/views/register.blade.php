<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Training Centre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .error-text {
            color: red;
            font-size: 0.875em;
            margin-top: 5px;
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>

<body class="p-4">
    <div class="container">
        <h2 class="mb-4 text-center">Web Training Centre</h2>
        <form form action="{{ route('register.submit') }}" method="POST" class="needs-validation">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                        placeholder="LeNgocAnh" required>
                    @error('name')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                        placeholder="lna88@gmail.com" required>
                    @error('email')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Gender</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="Male"
                                {{ old('gender') == 'Male' ? 'checked' : '' }} required>
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="Female"
                                {{ old('gender') == 'Female' ? 'checked' : '' }}>
                            <label class="form-check-label">Female</label>
                        </div>
                        @error('gender')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Date of Birth</label>
                    <input type="date" name="dob" class="form-control" required>
                    @error('dob')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="text" name="mobile" class="form-control" value="{{ old('mobile') }}"
                        placeholder="Mobile" required>
                    @error('mobile')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" value="{{ old('address') }}" required>
                    @error('address')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">City</label>
                    <select name="city" class="form-select" required>
                        <option value="">Select</option>
                        <option value="Hanoi" {{ old('city') == 'Hanoi' ? 'selected' : '' }}>Hanoi</option>
                        <option value="Ho Chi Minh" {{ old('city') == 'Ho Chi Minh' ? 'selected' : '' }}>Ho Chi
                            Minh
                        </option>
                    </select>
                    @error('city')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Country</label>
                    <input type="text" name="country" class="form-control" value="{{ old('country') }}" required>
                    @error('country')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Expertise</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="expertise[]" value="HTML" class="form-check-input"
                                {{ is_array(old('expertise')) && in_array('HTML', old('expertise')) ? 'checked' : '' }}>
                            <label class="form-check-label">HTML</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="expertise[]" value="CSS" class="form-check-input"
                                {{ is_array(old('expertise')) && in_array('CSS', old('expertise')) ? 'checked' : '' }}>
                            <label class="form-check-label">CSS</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="expertise[]" value="JavaScript" class="form-check-input"
                                {{ is_array(old('expertise')) && in_array('JavaScript', old('expertise')) ? 'checked' : '' }}>
                            <label class="form-check-label">JavaScript</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="expertise[]" value="jQuery" class="form-check-input"
                                {{ is_array(old('expertise')) && in_array('jQuery', old('expertise')) ? 'checked' : '' }}>
                            <label class="form-check-label">jQuery</label>
                        </div>
                    </div>
                    @error('expertise')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Group</label>
                    <select name="group[]" class="form-select" multiple required>
                        <option value="Family"
                            {{ is_array(old('group')) && in_array('Family', old('group')) ? 'selected' : '' }}>Family
                        </option>
                        <option value="Friend"
                            {{ is_array(old('group')) && in_array('Friend', old('group')) ? 'selected' : '' }}>Friend
                        </option>
                        <option value="Co-Worker"
                            {{ is_array(old('group')) && in_array('Co-Worker', old('group')) ? 'selected' : '' }}>
                            Co-Worker</option>
                        <option value="Neighbour"
                            {{ is_array(old('group')) && in_array('Neighbour', old('group')) ? 'selected' : '' }}>
                            Neighbour</option>
                    </select>
                    @error('group')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        @if (session('success'))
            <div class="success-message">
                Congratulations! <br />
                You have successfully validated the form.
            </div>
        @endif
    </div>

</body>

</html>
