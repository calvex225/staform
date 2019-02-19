@extends('layouts.auth')

@section('content')
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="card justify-content-center">
            <div class="card-header">
                <h3 class="text-themecolor card-title">Vérifier votre adresse e-mail</h3>
            </div>
            <div class="card-body" style="margin-top:25px; margin-bottom:40px">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Un nouveau lien de vérification a été envoyé a votre adresse mail.') }}
                    </div>
                @endif

                {{ __('Avant de continuer, veuillez consulter vos e-mails pour récupérer le lien de vérification.') }}
                {{ __('Si vous n\'avez pas reçu l\'email') }}, <a href="{{ route('verification.resend') }}">{{ __('cliquer ici pour demander un nouveau lien') }}</a>.
            </div>
        </div>
    </div>
</div>
<!-- Row -->
@endsection