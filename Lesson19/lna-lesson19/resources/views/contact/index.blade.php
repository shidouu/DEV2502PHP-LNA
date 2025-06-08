<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section class="container my-3">
        <div class="row">
            <div class="col">
                @if (Session::has('message_sent'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('message_sent') }}
                    </div>
                @endif
                <form action="{{ route('contact.sendEmail') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Contact us</h1>
                        </div>
                        <div class="card-body">
                            <div class="md-3">
                                <label for="name" class="form-lable">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="md-3">
                                <label for="email" class="form-lable">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="md-3">
                                <label for="phone" class="form-lable">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="md-3">
                                <label for="msg" class="form-lable">Message</label>
                                <textarea class="form-control" id="msg" name="msg" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-end">
                                <input type="submit" value="Submit" class="btn btn-primary" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
