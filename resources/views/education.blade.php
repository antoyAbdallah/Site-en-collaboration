@extends('layouts.app')
@section('title','Apprendre')
@section('content')

<div class="container" style="margin-top: 100px;"></div>
<h2 style="">Puisque le savoir est une arme alors soyons armés ! </h2>
	<table class="table table-striped">
        <thead>
           
            
        </thead>
        <tbody>
        <tr>
           <td> <img style="width: 300px;" src="images/1554948542.jpg" alt=""></td>
            <td style="font-size: 1.7em;">titre</td>
            <td>
                <a href="/post/show/1" class="btn btn-primary">Voir +</a>
            </td>
        </tr>

        <tr>
           <td> <img style="width: 300px;" src="images/1554936372.jpg" alt=""></td>
            <td style="font-size: 1.7em;">titre</td>
            <td>
                <a href="/post/show/2" class="btn btn-primary">Voir +</a>
            </td>
        </tr>

        <tr>
           <td> <img style="width: 300px;" src="images/1554948542.jpg" alt=""></td>
            <td style="font-size: 1.7em;">titre</td>
            <td>
                <a href="/post/show/1" class="btn btn-primary">Voir +</a>
            </td>
        </tr>
        </tbody>

    </table>
@endsection