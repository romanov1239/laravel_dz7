<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Worker</title>
</head>
<body>
<form action="/store-user" method="POST">
    @csrf

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="surname">Surname:</label>
    <input type="text" id="surname" name="surname" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <button type="submit">Submit</button>
</form>
</body>
</html>
