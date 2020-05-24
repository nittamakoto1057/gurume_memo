<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('top_title')</title>
  <style>
    .footer{text-align: right;}
  </style>
</head>
<body>
  <h1>@yield('top_title')</h1>
  
  <div class="content">
    @yield('content')
  </div>
  <div class="footer">
    @yield('footer')
  </div>
</body>
</html>