<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách tin tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section class="container border my-3">
        <h1>Danh sách tin tức</h1>
        <div class="row justify-content-between">
            @foreach ($news as $item)
                <div class="card m-3" style="width: 18rem">
                    <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ Str::before($item->description, '.') }}</p>
                        <a href="/news-detail-{{ $item->id }}" class="card-link">Chi tiết</a>
                        <a href="/news-edit-{{ $item->id }}" class="card-link">Sửa</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</body>

</html>
