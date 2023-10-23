<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello PD !!!!!!!!!!!</h1>

    <!--Comme du PHP -->
    @if(count($films))
        @foreach($films as @film)
            <h1>{{$pokemon->nom}}</h1>
            <img src="{{$film->photos}}">
        @eandforeach
    @else



</body>
</html>