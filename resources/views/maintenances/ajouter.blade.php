@extends('layouts.app')

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Ajoutez une Mission de Maintenance</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">maintenance</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a href="{{ route('maintenance.index') }}" class="btn pull-right hidden-sm-down btn-success">Liste des Maintenances</a>
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
                                        <ul>
                                            @foreach($errors->all(':message') as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                    <form class="form-horizontal form-material" method="post" action="{{ route('maintenance.store') }}">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">Nom*</label>
                            <div class="col-md-12">
                                <input type="text" name="nom" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Description</label>
                            <div class="col-md-12">
                                <textarea name="description" class="form-control form-control-line"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Site*</label>
                            <div class="col-sm-12">
                                <select name="id_site" class="form-control form-control-line">
                                    @foreach($sites as $site)
                                        <option value="{{ $site->id }}">{{ $site->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Statut*</label>
                            <div class="col-sm-12">
                                <select name="statut" class="form-control form-control-line">
                                    <option value="Pas Ouvert">Pas Ouvert</option>
                                    <option value="En Cours">En Cours</option>
                                    <option value="Termine">Termine</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Etat*</label>
                            <div class="col-sm-12">
                                <select name="etat" class="form-control form-control-line">
                                    <option value="Pas de Statut">Pas de Statut</option>
                                    <option value="approuve">Travail Approuve</option>
                                    <option value="non approuve">Travail Non approuve</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Commentaire</label>
                            <div class="col-md-12">
                                <textarea name="commentaire" class="form-control form-control-line"></textarea>
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
