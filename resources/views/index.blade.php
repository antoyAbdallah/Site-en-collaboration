@extends('layouts.app')
@extends('navLink')
@section('content')
@extends('layouts.master')
 <h2>Toutes les publications</h2>



<div class="container" style="margin-top: 200px;">
    <div class="row justify-content-center" style="bac">
        <div class="col-md-14">
<div class="showcase"></div>

                @foreach($posts as $post)
                <p class="title">{{$post->title}}</p>
                <p class="category">{{$post->category}}</p>
                <div class="post">
                        <a href="{{ route('post.show', $post->id) }}"><img src="{{ asset('images/' . $post->image) }}" alt="">
                        </a>

                        <div class="textExtract">
                            <p class="">
                               
                            </p>
                        </div>
                </div>

                @endforeach

         
        </div>
    </div>

</div>




    

</div>

@endsection


