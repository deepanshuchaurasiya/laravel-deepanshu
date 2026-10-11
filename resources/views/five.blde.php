<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('five-post')}}" method="post">
       @csrf
       Name:<input type ="text"name="name";
       @error('name')
       {{message}}
       @enderror
       email:<input type ="text"name="email";
       @error('email')
       {{message}}
       @enderror
</form>
    
</body>
</html>