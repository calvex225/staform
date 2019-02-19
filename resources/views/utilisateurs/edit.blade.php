@extends('layouts.app')

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Paramètre de Compte</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">paramètre</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="{{ url("/maintenance")}}" class="btn pull-right hidden-sm-down btn-success">Voir les activites me concernant</a>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-block">
                <center class="m-t-30"> <img src="assets/images/users/5.jpg" class="img-circle" width="150" />
                    <h4 class="card-title m-t-10">{{ Auth::user()->nom }}</h4>
                    <h6 class="card-subtitle">{{ Auth::user()->entreprise }} {{ Auth::user()->service }}</h6>
                    <div class="row text-center justify-content-md-center">
                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col-md-12">
                        @if(isset($errors))
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {{ implode('', $errors->all(':message')) }}
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
                <form class="form-horizontal form-material" method="POST" action="{{ route('utilisateur.update') }}">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-12">Nom</label>
                        <div class="col-md-12">
                            <input type="text" name="nom" value={{ Auth::user()->nom }} class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">E-mail</label>
                        <div class="col-md-12">
                            <input type="email" value={{ Auth::user()->email }} class="form-control form-control-line" name="email" id="example-email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12">Voulez-vous changer votre mot de passe ?</label>
                                <div class="col-md-12">
                                    <input type="password" name="password" class="form-control form-control-line">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12">Confirmez le nouveau mot de passe</label>
                                <div class="col-md-12">
                                    <input type="password" name="confirmPassword" class="form-control form-control-line">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Profil <em>(Uniquement pour les techniciens)</em></label>
                        <div class="col-md-12">
                            <input type="text" name="profil" value={{ Auth::user()->profil }} class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Service <em>(Uniquement pour les techniciens)</em></label>
                        <div class="col-md-12">
                            <input type="text" name="service" value={{ Auth::user()->service }} class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Entreprise</label>
                        <div class="col-md-12">
                            <input type="text" name="entreprise" value={{ Auth::user()->entreprise }} class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Numero de telephone*</label>
                        <div class="col-md-12">
                            <input type="text" value={{ Auth::user()->phone }} placeholder="+225 99 99 99 99" class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Adresse</label>
                        <div class="col-md-12">
                            <input type="text" name="adresse" value={{ Auth::user()->adresse }} class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Changez votre photo de profil</label>
                        <div class="col-md-12">
                            <input type="text" name="picture" value={{ Auth::user()->picture }} class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="reset" class="btn btn-danger">Abandonnez les modifications</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">Enregistrez les modifications</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@endsection