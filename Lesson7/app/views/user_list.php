<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
</head>
<body>
    <h1>List User</h1>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>FullName</th>
                <th>UserName</th>
                <th>Password</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?php echo $user['id'];?></td>
                <td><?php echo $user['fullname'];?></td>
                <td><?php echo $user['username'];?></td>
                <td><?php echo $user['password'];?></td>
                <td><?php echo $user['status'];?></td>
                <td>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>