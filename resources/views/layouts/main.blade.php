<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- LINK TO BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </head>
  <body>

    <header>
              <ul class="nav nav-pills nav-fill">

                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('posts.index')}}">Posts</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{route('posts.create')}}">Create New Post</a>
                  </li>

              </ul>
    </header>

    @yield('section-1', 'missing content')


  </body>
</html>
