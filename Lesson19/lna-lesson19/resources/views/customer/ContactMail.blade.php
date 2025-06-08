<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Customer Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <section class="container my-3 py-3">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h1>Thông tin đăng ký khách hàng</h1>
                    </div>
                    <div class="card-body">
                        <p><strong>ID:</strong> {{ $details['id'] }}</p>
                        <p><strong>Name:</strong> {{ $details['name'] }}</p>
                        <p><strong>Email:</strong> {{ $details['email'] }}</p>
                        <p><strong>Phone:</strong> {{ $details['phone'] }}</p>
                        <p><strong>Address:</strong> {{ $details['address'] }}</p>
                        <p><strong>Status:</strong> {{ $details['status'] }}</p>
                        <p><strong>Picture:</strong><br />
                            @if (!empty($details['picture']))
                                <img src="{{ asset('storage/' . $details['picture']) }}" alt="Picture"
                                    style="max-width: 200px; max-height: 200px;" />
                            @else
                                Chưa có ảnh
                            @endif
                        </p>
                    </div>
                    <div class="card-footer">
                        <small>Cảm ơn bạn đã đăng ký!</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
