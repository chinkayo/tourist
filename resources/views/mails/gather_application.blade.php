<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Confirmation</title>
</head>
<body>
  Hello {{$user->givenname}}
  <a href="{{route('verify',$user->token)}}">明日は集合日です。</a>
</body>
</html>
