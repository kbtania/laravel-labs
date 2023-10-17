<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/users.css') }}" />
    <title>Lab 1 | User Details</title>
</head>
<body>
    <nav class="menu">
        <a class="menu-link" href="/">Homepage</a>
        <a class="menu-link" href="{{ route('user.create') }}">New User</a>
    </nav>
    <h1>Profile</h1>
    <!-- <table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date of registration</th>
    </tr>
    <tr>
        <td></td>
    </tr> -->
    </table>
    <div class="profile">
        <img class="avatar" src="https://png.pngtree.com/png-vector/20221117/ourmid/pngtree-user-flat-design-long-shadow-glyph-icon-default-figure-anonymous-vector-png-image_41304650.jpg" alt="">
        <p><span>Name:</span> {{ $user->name }}</p>
        <p><span>Email:</span> {{ $user->email }}</p>
        <p><span>Date of registration:</span> {{ date('d/m/Y',strtotime($user->created_at)) }}</p>
    </div>
</body>
</html>
