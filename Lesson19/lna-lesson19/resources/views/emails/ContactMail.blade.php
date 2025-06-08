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
    <section class="container my-3 py-3">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h1>Contact Message</h1>
                    </div>
                    <div class="card-body">
                        <p>Name:<b>{{ $details['name'] }}</b></p>
                        <p>Email:<b>{{ $details['email'] }}</b></p>
                        <p>Phone:<b>{{ $details['phone'] }}</b></p>
                        <p>Message:<b>{{ $details['msg'] }}</b></p>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
