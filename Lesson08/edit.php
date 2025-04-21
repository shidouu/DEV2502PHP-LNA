<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="method">
        <table border="1">
            <tr>
                <th>
                    <label for="id">ID:</label>
                    <input type="number" id="id" name="id">
                </th>
            </tr>
            <tr>
                <th>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
                </th>
            </tr>
            <tr>
                <th>
                    <label for="Quantity">Quantity:</label>
                    <input type="text" id="Quantity" name="Quantity">
                </th>
            </tr>
            <tr>
                <th>
                    <label for="Price">Price:</label>
                    <input type="text" id="Price" name="Price">
                </th>
            </tr>
            <tr>
                <th>
                    <label for="Status">Status:</label>
                    <input type="text" id="Status" name="Status">
                </th>
            </tr>
            <tr>
                <th>
                    <label for="Category_id">Category_Id:</label>
                    <input type="text" id="Category_id" name="Category_id">
                </th>
            </tr>
            <tr>
                <td><button type="submit" name="save">Save</button></td>
            </tr>
        </table>
    </form>
</body>
</html>