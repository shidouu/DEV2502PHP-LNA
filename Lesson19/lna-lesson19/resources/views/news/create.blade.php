<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới tin tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="card-body">
                    <form action="{{ route('news.create_post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h1>Thêm mới tin tức</h1>
                            </div>
                            <div class="card-body">
                                <div class="md-3">
                                    <label for="title" class="form-lable">Title</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                                <div class="md-3">
                                    <label for="description" class="form-lable">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                </div>
                                <div class="md-3">
                                    <label for="content" class="form-lable">Content</label>
                                    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                                </div>
                                <div class="md-3">
                                    <label for="image" class="form-lable">Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <div class="md-3">
                                    <label for="status" class="form-lable">Status</label>
                                    <input type="radio" id="rdActive" name="status" checked value="1">
                                    <label for="rdActive" class="form-lable">Active</label>
                                    <input type="radio" id="rdNoActive" name="status" value="0">
                                    <label for="rdNoActive" class="form-lable">Active</label>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" />
                                <a href="/news"class="btn btn-secondary">Quay lại</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
