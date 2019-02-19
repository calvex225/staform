@extends('layouts.app')

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Ajoutez une Tache a {{ $maintenance->nom }}</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">tache</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="{{ url("/tache/".$maintenance->id) }}" class="btn pull-right hidden-sm-down btn-success">Retournez sur les taches</a>
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
                <form class="form-horizontal form-material" method="post" action="{{ route('tache.store') }}">
                    @csrf
                    <input type="hidden" name="maintenance_id" value="{{ $maintenance->id }}">
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12">Date de debut*</label>
                                <div class="col-md-12">
                                    <input type="date" name="date_debut" class="form-control form-control-line">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-12">Date de fin*</label>
                                <div class="col-md-12">
                                    <input type="date" name="date_fin" class="form-control form-control-line">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Tache attribuee a*</label>
                        <div class="col-sm-12">
                            <select name="attribuee_a" class="form-control form-control-line">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Statut*</label>
                        <div class="col-sm-12">
                            <select name="statut" class="form-control form-control-line">
                                <option value="Pas encore demare">Pas encore demare</option>
                                <option value="En cours">En cours</option>
                                <option value="Termine">Termine</option>
                            </select>
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
