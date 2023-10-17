<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Users</h1>
    <div>
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
                <a href="{{ route('user.edit', ['user' => $user]) }}">Edit</a>
            </td>
            <td>
                <form method="post" action="{{ route('user.destroy', ['user'=>$user]) }}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" />
                </form>
            </td>
            <td>
                <a href="{{ route('user.show', ['user' => $user]) }}">Details</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
