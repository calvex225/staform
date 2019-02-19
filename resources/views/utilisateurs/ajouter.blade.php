@extends('layouts.app')

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Enregistrer un Utilisateur</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">enregistrement</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a href="{{ url("/utilisateur")}}" class="btn pull-right hidden-sm-down btn-success">Voir les Utilisateurs</a>
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
        <div class="col-md-12">
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
                    <form class="form-horizontal form-material" method="POST" action="{{ route('utilisateur.store') }}">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-12">Role*</label>
                            <div class="col-sm-12">
                                <select name="role" class="form-control form-control-line">
                                    <option>Chef de Projet</option>
                                    <option>Technicien</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Matricule <em>(Uniquement pour les techniciens)</em></label>
                            <div class="col-md-12">
                                <input type="text" name="matricule" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Nom *</label>
                            <div class="col-md-12">
                                <input type="text" name="nom" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">E-mail*</label>
                            <div class="col-md-12">
                                <input type="email" class="form-control form-control-line" name="email" id="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Mot de passe*</label>
                            <div class="col-md-12">
                                <input type="password" name="password" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Profil <em>(Uniquement pour les techniciens)</em></label>
                            <div class="col-md-12">
                                <input type="text" name="profil" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Service <em>(Uniquement pour les techniciens)</em></label>
                            <div class="col-md-12">
                                <input type="text" name="service" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Entreprise</label>
                            <div class="col-md-12">
                                <input type="text" name="entreprise" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Numero de telephone</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="+225 99 99 99 99" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Enregistrez</button>
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