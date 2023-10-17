<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create New User</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('user.store') }}">
        @csrf
        @method('post')
        <div>
            <label for="name">Name:</label><br>
            <input type="text" name="name" placeholder="Enter your name...">
        </div>
        <div>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="Enter your email...">
        </div>
        <div>
            <label for="password">Password:</label><br>
            <input type="password" name="password" placeholder="Enter your password...">
        </div>
        <div>
            <input type="submit" value="Create New User" />
        </div>
    </form>
</body>
</html>
