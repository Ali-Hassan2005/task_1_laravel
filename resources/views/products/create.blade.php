<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <p><a href='/product'>All products</a>
    <form action="/product" method="post"  >
        @csrf
        @method("POST")
        <table align="center">
            <tr>
                <th>Name:</th>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <th>Size:</th>
                <td><input type="text" name="size" /></td>
            </tr>
            <tr>
                <th>Color:</th>
                <td><input type="text" name="color" /></td>
            </tr>
            <tr>
                <th>Count in stock:</th>
                <td><input type="text" name="count_in_stock" /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Save">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
