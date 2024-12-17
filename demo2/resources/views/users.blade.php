<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user file</title>
</head>
<body>
    <h3>User page</h3>

    @foreach ($user as $id => $value )

        <h3> {{$id}}  {{ $value['name']}} | {{ $value['email']}} | {{ $value['phone']}}  </h3>
        
    @endforeach

</body>
</html>