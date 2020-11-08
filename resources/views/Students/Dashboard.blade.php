<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>this home page</title>
</head>
<body>
    Welcome to Student Dashboard Board
    <a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"
 ><i class="feather icon-power"></i> Log Out</a>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
     @csrf
 </form>
</body>
</html>
