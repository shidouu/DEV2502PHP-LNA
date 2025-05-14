<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .error-text {
            color: red;
            font-size: 0.875em;
        }
    </style>
</head>

<body class="p-4">
    <div class="w-100" style="max-width: 600px;">
        <div class="container">
            <h2 class="mb-4">Registration Form</h2>
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('register.submit') }}" method="POST" class="needs-validation">
                @csrf

                <div class="mb-3 row">
                    <label class="form-label col-sm-3">User id:</label>
                    <div class="col-sm-9">
                        <input type="text" name="userid" class="form-control" value="{{ old('userid') }}">
                        @error('userid')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="form-label col-sm-3">Password:</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" class="form-control">
                        @error('password')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="form-label col-sm-3">Name:</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="form-label col-sm-3">Address:</label>
                    <div class="col-sm-9">
                        <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                        @error('address')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="form-label col-sm-3">Country:</label>
                    <div class="col-sm-9">
                        <select name="country" class="form-select">
                            <option value="default">Please select a country</option>
                            <option value="Vietnam" {{ old('country') == 'Vietnam' ? 'selected' : '' }}>Vietnam</option>
                            <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>USA</option>
                        </select>
                        @error('country')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="form-label col-sm-3">ZIP Code:</label>
                    <div class="col-sm-9">
                        <input type="text" name="zip" class="form-control" value="{{ old('zip') }}">
                        @error('zip')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="form-label col-sm-3">Email:</label>
                    <div class="col-sm-9">
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                        @error('email')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="form-label col-sm-3">Sex:</label>
                    <div class="col-sm-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sex" value="Male"
                                {{ old('sex') == 'Male' ? 'checked' : '' }}>
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sex" value="Female"
                                {{ old('sex') == 'Female' ? 'checked' : '' }}>
                            <label class="form-check-label">Female</label>
                        </div>
                        @error('sex')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="form-label col-sm-3">Language:</label>
                    <div class="col-sm-9">
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="language[]" value="English" class="form-check-input"
                                {{ is_array(old('language')) && in_array('English', old('language')) ? 'checked' : '' }}>
                            <label class="form-check-label">English</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="language[]" value="Non English" class="form-check-input"
                                {{ is_array(old('language')) && in_array('Non English', old('language')) ? 'checked' : '' }}>
                            <label class="form-check-label">Non English</label>
                        </div>
                        @error('language')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="form-label col-sm-3">About:</label>
                    <div class="col-sm-9">
                        <textarea name="about" class="form-control" rows="4">{{ old('about') }}</textarea>
                        @error('about')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
