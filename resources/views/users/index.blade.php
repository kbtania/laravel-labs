<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/users.css') }}" />
    <title>Lab1 | Users</title>
</head>
<body>
    <nav class="menu">
        <a class="menu-link" href="/">Homepage</a>
        <a class="menu-link" href="{{ route('user.create') }}">New User</a>
    </nav>
    <h1>Users List</h1>
    <div class="alert">
        @if(session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
            <th>Action</th>
            <th>Profile</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id}}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>
            <td>
                <a class="edit-btn" href="{{ route('user.edit', ['user' => $user]) }}">Edit</a>
            </td>
            <td>
                <form method="post" action="{{ route('user.destroy', ['user'=>$user]) }}">
                    @csrf
                    @method('delete')
                    <input class="delete-btn" type="submit" value="Delete" />
                </form>
            </td>
            <td>
                <a class="details-btn" href="{{ route('user.show', ['user' => $user]) }}">Details</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
