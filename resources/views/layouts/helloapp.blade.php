<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('top_title')</title>
  <style>
    body{display: flex;flex-direction: column;min-height: 100vh;margin: 0 auto;
    width:800;
    }
    header{height: 100px;background: #deb887;}
    div{display: flex;flex: 1;}
    nav{width: 150px;background: #fafad2;}
    main{flex: 1;background: #ffffe0;}
    aside{width: 200px;background: #fafad2;}
    footer{height: 100px; text-align: right;background: #deb887;}
    @media screen and (max-width:900;){
      body{width: 100%;}
    }
  </style>
</head>
<body>
  <header>
  <h1>@yield('top_title')</h1>
  </header>
  
  <div class="content">
    <nav></nav>
    <main>@yield('content')</main>
    <aside></aside>
  </div>
  <footer>
    @yield('footer')
  </footer>
</body>
</html>