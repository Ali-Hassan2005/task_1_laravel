<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <p><a href='/product'>All products</a>
    <form action= "/product/{{$product ->id}}" method="post">
        @csrf
        @method("PUT")
        <table align="center">
            <tr>
                <th>Name:</th>
                <td><input type="text" name="name" value={{$product ->name}} /></td>
            </tr>
            <tr>
                <th>Size:</th>
                <td><input type="text" name="size" value={{$product ->size}} /></td>
            </tr>
            <tr>
                <th>Color:</th>
                <td><input type="text" name="color" value={{$product ->color}} /></td>
            </tr>
            <tr>
                <th>Count in stock:</th>
                <td><input type="text" name="count_in_stock" value={{$product ->count_in_stock}} /></td>
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