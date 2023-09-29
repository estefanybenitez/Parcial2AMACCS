<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('GitHub')</title>

    <link rel="stylesheet" href="/public/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>
    {{-- mostrando el component menu  --}}
    @component('Components.SidebarMenu')
      
    @endcomponent
    
      <div style="margin-left:25%;padding:1px 16px;height:1000px;">
        
        @yield('content')  
        
      </div>
</body>
</html>

@yield('scripts')


