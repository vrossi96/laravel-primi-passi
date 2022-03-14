<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous'/>
   <title>Home</title>
</head>
<body>
   <div class="container">
      <div class="row">
         <div class="col-12 text-center">
            <h1>HOME</h1>
         </div>
         <div class="col-6 offset-3">
            <ul class="list-group list-group-horizontal d-flex justify-content-between">
               @foreach ($pages as $link)
                  <li class="list-group-item border-0"><a class="btn btn-primary" href="{{ route($link['route']) }}">{{$link['name']}}</a></li>
               @endforeach
            </ul>
         </div>
      </div>
   </div>
</body>
</html>