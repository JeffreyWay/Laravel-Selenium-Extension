<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/form-endpoint">
        {{ csrf_field() }}

        <input type="text" name="message">
        <button type="submit">Submit</button>
    </form>
</body>
</html>