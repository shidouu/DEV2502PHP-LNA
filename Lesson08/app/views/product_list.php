<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product</title>
</head>
<body>
    <h1>List Product</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Image</th>
                <th>Status</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
            <tr>
                <td><?php echo $product['id'];?></td>
                <td><?php echo $product['Name'];?></td>
                <td><?php echo $product['Quantity'];?></td>
                <td><?php echo $product['Price'];?></td>
                <td><?php echo $product['Image'];?></td>
                <td><?php echo $product['status'];?></td>
                <td><?php echo $product['category_id'];?></td>
                <td>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php?id=<?php echo $product['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>