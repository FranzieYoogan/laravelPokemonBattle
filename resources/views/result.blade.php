<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('/css/results.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>


</head>
<body>

@include('header')

<section class="containerAll">



@if(isset($data11) && isset($data22))


<div>
<h1>HP: {{$data11}}</h1>
<h1>ATT: {{$data33}}</h1>
<h1>DEF: {{$data55}}</h1>
</div>


<div>
<h1>HP: {{$data22}}</h1>
<h1>ATT: {{$data44}}</h1>
<h1>DEF: {{$data66}}</h1>
</div>



@endif


</section>

<section class="containerWin">



@if(isset($win))

<div class="containerWin2" style="position:relative">

<h1 class="titleStyle">{{$win}}</h1>
<img src="{{$sprite1}}" alt="">


</div>

@endif

</section>
</body>
</html>