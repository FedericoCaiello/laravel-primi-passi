
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    @foreach ($database as $cd)
      <div class="cd">
          <img src="{{$cd['poster']}}">
          <h4>{{$cd["title"]}}</h4>
          <small>{{$cd['author']}}</small>
          <small>{{$cd['year']}}</small>
      </div>
    @endforeach

  </body>
</html>
