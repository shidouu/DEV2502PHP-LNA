<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account-List</title>
</head>

<body>
    <h1>Account-Getall</h1>
    <hr>
    <table border="1px" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>#</th>
                <th>UserName</th>
                <th>Password</th>
                <th>FullName</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Username }}</td>
                    <td>{{ $item->Password }}</td>
                    <td>{{ $item->Fullname }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
