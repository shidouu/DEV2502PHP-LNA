<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin chi tiết môn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thêm mới thông tin môn</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('monhoc.createSubmit') }}" method="POST">
                    @csrf
                    <div class="input-group input-group-sm -my-3">
                        <span class="input-group-text" id="MaMH">Mã Môn</span>
                        <input type="text" class="form-control" aria-describedby="MaMH" name="MaMH"
                            value="">
                    </div>
                    <div class="input-group input-group-sm -my-3">
                        <span class="input-group-text" id="TenMH">Tên Môn</span>
                        <input type="text" class="form-control" aria-describedby="TenMH" name="TenMH"
                            value="">
                    </div>
                    <div class="input-group input-group-sm -my-3">
                        <span class="input-group-text" id="Sotiet">Số Tiết</span>
                        <input type="number" class="form-control" aria-describedby="Sotiet" name="Sotiet"
                            value="">
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" name="btnSubmit" value="Thêm mới">
                        <a href="/monhoc" class="btn btn-secondary">Trở lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
