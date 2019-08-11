@extends('navLink')
@extends('layouts.app')

<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>
@section('content')
<body>
    
<h2 style="color: #fff; line-height: 65px;">{{$post->category}}</h2>
<div class="container" style="margin-top: 150px; z-index: 1;">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-body">
                     <small>{{$post->category}}</small>
                    <p style="font-size: 2em;"><b>{{ $post->title }}</b></p>
                    <small>{{$post->created_at}}</small>
                    <a href="{{$post->video}}"><img style="width: 100%;" src="{{ asset('images/' . $post->image) }}" alt="">
                    </a>
                    <p style="text-align: justify; font-size: 2em; margin-top: 40px;">
                        {!! nl2br( $post->body )!!}
                    </p>
                    <hr />
                    <h4>Commentaires</h4>
                    @include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
                    <hr />
                    <h4>Ajouter un commentaire</h4>
                    <form method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="comment_body" class="form-control" required="true" placeholder="Ajoutez un commentaire à la publication ici.." />
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning" value="Commenter" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
@endsection
