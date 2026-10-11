<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('form-post')}}" method="post">
        @csrf
        Name : <input type="text" name="name">
        @error('name')
            {{$message}}
        @enderror
        Email : <input type="text" name="email">
        @error('email')
        {{$message}}
        @enderror
        Password : <input type="text" name="password">
        @error('password')
        {{$message}}
        @enderror
        Confirm Password :<input type="password" name="c_password"/>
        @error('c_password')
        {{$message}}
        @enderror
        <button type="submit">Submit</button>
       

    </form>
    
</body>
</html>