<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-dark text-white">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-mb-4 border-bottom bg-dark text-white" >
      <a href="/" class="d-flex align-items-center text-white text-decoration-none">
        
        <span class="fs-4">it.rooms</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
      <a class="me-3 py-2 text-white text-decoration-none" href="/">Главная</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/about">О нас</a>
      </nav>
      <a class="btn btn-warning" href="/review">Отзывы</a>


    </div>

<div class='container'>
@yield('main_content')

</div>

</body>
</html>