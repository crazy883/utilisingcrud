<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="/family/{{$family->id}}" method="post">
@csrf
@method('PATCH')
  Member Firstname: <input type="text" name="firstname" value="{{$family->firstname}}"> <br>
  Member Lastname: <input type="text" name="lastname" value="{{$family->lastname}}"> <br>
  Member Position: <input type="text" name="position" value="{{$family->position}}"> <br>
  <input type="submit" value="Update">
  </form>
  <form  action="/family/{{$family->id}}" method="post">
    @csrf
    @method('PATCH')

        <div>
        <input type="submit" value="Delete">
        </div><br>
    </form>
</body>
</html>