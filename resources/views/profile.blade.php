
@section('title','Bienvenue sur votre profile')
@extends('navLink')
@extends('layouts.app')

@section('content')


	<body style="margin-top: 40px; padding-top: 40px; color: #fff; background-image: url(''); background-size: cover; background-position: center;">
	<img src="" alt="" style="width: 500px; height: 500px; float: left; border-radius: 50%; margin-right: 25px;position: fixed; left: -20px; bottom: 0;">	
	<div class="container">


		<div class="row" style="background-color: rgba(0,0,0,0.6); padding-bottom: 100px; margin-top: 100px;">
<img src="/uploads/avatars/{{ auth()->user()->avatar}}" alt="">
			<div class="col-md-10 col col-md-offset-1">
				
				<h3> Bienvenue sur votre profile {{ Auth::user()->name }} </h3>
				<form enctype="multipart/form-data" action="/profile" method="POST"> 
					@csrf
					<label>Selectionner votre photo de profile</label>
					<input type="file" name="avatar">
					<input type="submit" class=" pull-right btn btn-sm btn-primary">
				
				</form>


			</div>
		</div>
	</div>

	</body>
@endsection