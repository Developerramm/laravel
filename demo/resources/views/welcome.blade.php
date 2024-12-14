<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blade template part 2</title>
</head>
<body>

    @include('pages.header',['name' => 'ram kumar'])
    <h1>This is home page </h1>

    @include('pages.footer')
    @include('pages.footer')
    @include('pages.footer')
    @include('pages.footer')
</body>
</html>