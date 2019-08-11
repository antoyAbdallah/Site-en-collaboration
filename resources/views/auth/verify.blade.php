@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifier votre adresse E-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nouveau lien de vérification vient de vous être envoyé par mail.') }}
                        </div>
                    @endif

                    {{ __("Avant de commencer, cherchez le lien envoyé par E-mail") }}
                    {{ __('Toujours rien? Cliquez de nouveau sur ce bouton') }}, <a href="{{ route('verification.resend') }}">{{ __('Cliquez ici pour envoyer un autre lien') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
