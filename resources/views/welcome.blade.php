<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{asset('/css/home.css')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

    @include('header')
        
    <section class="containerAll">

    
<form class="containerItems max-w-sm mx-auto" method="POST" action="/result">

@csrf

<div>




<div style="display:flex; gap: 2em">


<div>



  <label for="pokemon1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your pokemon</label>
<select id="pokemon1" name="pokemon1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>

    
   
<option selected>Choose a Pokemon</option>
@if(isset($data2))
@foreach ( $data2 as $dataa )

    <option value="{{$dataa['name']}}">{{$dataa['name']}}</option>

    @endforeach
    @endif
  </select>
 
  </div>


 <div>
  <label for="pokemon2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Opponent pokemon</label>
<select id="pokemon2" name="pokemon2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>

    
   
<option selected>Choose a Pokemon</option>
@if(isset($data2))
@foreach ( $data2 as $dataa )

    <option value="{{$dataa['name']}}">{{$dataa['name']}}</option>

    @endforeach
    @endif
  </select> 
  </div>
  </div>


<div>

<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">BATTLE</button>
</div>


</div>
</form>
    </section>

 

    </body>
</html>
