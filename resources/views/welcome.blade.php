<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/index.css') }}" />
    <title>Lab 1 | Homepage</title>
</head>
<body>
    <div class="welcome-card">
        <h1>Lab 1</h1>
        <h2>CRUD User App</h2>
        <nav class="menu">
            <a class="menu-link" href="{{ route('user.index') }}">List of Users</a>
            <a class="menu-link" href="{{ route('user.create') }}">Add New User</a>
        </nav>
    </div>
</body>
</html>
