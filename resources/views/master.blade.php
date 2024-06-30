<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body  >
    <div class="position-relative  h-screen w-screen bg-slate-300">
        <header class="position-absolute top-0 bg-slate-100 h-[50px]  flex justify-start space-x-3 items-center ">
            <h4 class="font-bold">Nav Bar</h4>
            <p>Home</p>
            <p>link</p>
        </header>
        @yield('content')
        <footer class="position-absolute bottom-0 bg-slate-500 flex justify-center " >This is Fotter</footer>
    </div>
  
</body>
</html>
