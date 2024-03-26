<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @auth
    <p>Congrats! You are logged in!</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>
    </form>

    <div style="border: 3px solid black;">
        <h2>Create a New Inventory Item</h2>
        <form action="/create-inventory-item" method="POST">
            @csrf
            <input type="text" name="equipment_number" placeholder="equipment_number">
            <input type="text" name="equipment_type" placeholder="equipment_type">
            <input type="text" name="equipment" placeholder="equipment">
            <input type="text" name="room" placeholder="room">
            <button>Save Inventory Item</button>
        </form>
    </div>

    <div style="border: 3px solid black;">
        <h2>All Inventory Items</h2>
        @foreach ($items as $item)
        <div style="background-color: gray; padding: 10px; margin: 10px;">
            <h3>{{$item['equipment_number']}} for {{$item->user->name}}</h3>
            {{$item['equipment']}}
            <p><a href="/edit-inventory-item/{{$item->id}}">Edit</a></p>
            <form action="/delete-inventory-item/{{$item->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>
        @endforeach
    </div>

    @else
    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name" style="color: black;">
            <input name="email" type="text" placeholder="email" style="color: black;">
            <input name="password" type="password" placeholder="password"  style="color: black;">
            <button style="border: 3px solid white;">Register</button>
        </form>
    </div>
    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="name" style="color: black;">
            <input name="loginpassword" type="password" placeholder="password" style="color: black;">
            <button style="border: 3px solid white;">Log in</button>
        </form>
    </div>
    @endauth


</body>
</html>