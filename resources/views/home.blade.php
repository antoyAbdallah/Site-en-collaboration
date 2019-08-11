@extends('layouts.app')
@section('content')
@extends('pages.mySite')
@section('title','Hello Mayotte !')


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
     
  </head>


  <body>


    <section class="myFooter bg-black py-4 text-center">

        <div class="container">
          <p class="mb-0 font-weight-bold d-inline-block">Vivez Mayotte différemment..<span class="text-primary fs-0">&hearts;</span> avec </p><a class="text-white ml-2" href="https://themewagon.com/">Hello Mayotte</a>
        </div>
        <!-- end of .container-->

      </section>


  </body>

</html>



@endsection
