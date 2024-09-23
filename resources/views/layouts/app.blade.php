<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> Main Kata </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{ asset('images/logo.jpg') }}" type="image/x-icon">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
    </head>
    <style>


        .hello{
  margin-top: 5px;
  align-items: center;
  margin-right: 20px;
  font-weight: 600;
  color: white;
}

.container{
  height: 510px;
}

#nav-23 a.nav-link {
  color: white;
  font-weight: 600;
}

a.nav-link {
  color: black;
  font-weight: 600;
}

  header nav {
    display: flex;
  }
  
  header nav a {
    text-decoration: none;
    color: #333;
    margin-right: 20px;
    padding: 5px 10px;
    border-radius: 5px;
  }

  .container-fluid{
    padding: 0px 10px 0px 10px;
  }
  
  header nav a.active {
    background-color: #ddd;
  }
  
p {
  /* padding-top: 5px; */
  text-align: left;
  font-size: 14px;
  font-weight: 700;
  /* margin-bottom: 0; */
}

.poin p{
  margin-bottom: 0px;
}

.describe p, a{
  margin-top: 5px;
  text-align: center;
}

header{
    margin-bottom: 20px;
}

div#penulisan {
    height: 200px;
}

div#output {
    margin-top: 20px;
    margin-left: 10px;
    border: 1px solid;
    width: 97%;
    height: 200px;
}

.tombol{
    /* margin-top: 10px; */
    display: flex;
    justify-content: center;
}

.card-body{
    display: grid;
    row-gap: 10px;
}

#myocd{
    background-color: #ddd;
    border: 1px solid;
    border-radius: 20px;
    text-align: center;
}

.col-8{
    display: grid;
    row-gap: 20px;
}

.container-xxl{
    padding: 10px;
}

header nav {
    display: flex;
    padding: 10px;
    background-color: aquamarine;
        /* height: 50px; */
    display: flex;
  }
  
  header nav a {
    text-decoration: none;
    color: #333;
    margin-right: 20px;
    padding: 5px 10px;
    border-radius: 5px;
  }
  
  header nav a.active {
    background-color: #ddd;
  }
    </style>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
