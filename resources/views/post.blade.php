@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Publier quelque chose..</div>
                <div class="card-body">
                    <form method="post" action="{{ route('post.store') }}" file="true" enctype="multipart/form-data">


                        <div class="form-group">
                            <label for="featured_image">Illustration</label>
                            <input name="featured_image" id="featured_image" type="file">
                        </div>


                        <div class="form-group">
                            @csrf
                            <label class="label">Titre de la publication: </label>
                            <input placeholder="Entrez ici votre titre" type="text" name="title" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">Texte de la publication: </label>
                            <textarea placeholder="Écrivez ici votre texte.." name="body" rows="10" cols="30" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="video">Entrez le lien de votre video</label>
                            <input type="text" placeholder="Lien vers votre vidéo" name="video" id="video" />
                        </div>
                        <div class="form-group">
                            <label class="label" for="category">Catégorie: </label>
                            <select name="category" id="category">
                                <option value="Actualités">Actualités</option>
                                <option value="Découverte">Découverte</option>
                                <option value="Histoire">Histoire</option>
                                <option value="English">English</option>
                                <option value="Shimaore">Shimaoré</option>
                                <option value="Français">Français</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
