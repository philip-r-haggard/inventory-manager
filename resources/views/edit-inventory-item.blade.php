<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="/edit-inventory-item/{{$item->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="equipment_number" value="{{$item->equipment_number}}">
        <input type="text" name="equipment_type" value="{{$item->equipment_type}}">
        <input type="text" name="equipment" value="{{$item->equipment}}">
        <input type="text" name="room" value="{{$item->room}}">
        <button>Save Changes</button>
    </form>
</body>
</html>