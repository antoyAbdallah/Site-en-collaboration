@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <!-- <small>Written on {{$post->created_at}} by {{$post->user->name}}</small> -->
    <hr>

     <hr />
                    <h4>Commentaires</h4>
                    @include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
                    <hr />
                    <h4>Ajouter un commentaire</h4>
                    <form method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="comment_body" class="form-control" required="true" />
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning" value="Commenter" />
                        </div>
                    </form>

                     <a style="position: fixed;bottom: 0;z-index: 99999; color: #000;" href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
           

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection