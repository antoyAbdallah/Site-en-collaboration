@section('title','Contactez-moi !')
@extends('main')

@section('content')


		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<h1>Contactez moi</h1>
					<hr>
					<form action="#">
						<div class="form-group"><label name="email" for="email">Email</label>
							<input name="email"class="form-control" id="email">
						</div>

						<div class="form-group"><label name="email" for="email">Sujet</label>
							<input name="subject"class="form-control" id="subject">
						</div>

						<div class="form-group"><label name="message" for="email">Message</label>
							<textarea id="message" class="form-control" name="message"></textarea> 
<br>
							<input type="submit" value="Envoyer le message" class="btn btn-outline-success">
						</div>
					</form>
				</div>
			</div>
		
			
		</div>
    <div align="center">
      <img style="width: 80%; position: fixed;bottom: 0; max-width: 600px; right: 100px;" src="images/contact.png" alt="">
      </div>
  @endsection