<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Category</title>
</head>
<body>
    <h1>List Category</h1>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Category Code</th>
                <th>Category Name</th>
                <th>Category Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categories as $category): ?>
            <tr>
                <td><?php echo $category['id'];?></td>
                <td><?php echo $category['cate_code'];?></td>
                <td><?php echo $category['cate_name'];?></td>
                <td><?php echo $category['cate_status'];?></td>
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