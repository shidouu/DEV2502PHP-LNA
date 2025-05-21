<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông Tin Chi Tiết Khoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thông tin chi tiết khoa</h3>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <b>Mã Khoa:</b>{{ $khoa->MaKH }}
                </p>
                <p>
                    <b>Tên Khoa:</b>{{ $khoa->TenKH }}
                </p>
            </div>
            <div class="card-footer">
                <a href="/khoa" class="btn btn-primary">Back</a>
            </div>
        </div>
    </section>
</body>

</html>
