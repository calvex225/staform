@extends('layouts.app')

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Ajoutez un groupe electrogène</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Groupe electrogène</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a href="{{ url("/electrogene") }}" class="btn pull-right hidden-sm-down btn-success">Liste des groupes electrogènes</a>
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
                                        {!! implode('', $errors->all(':message')) !!}
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                    <form class="form-horizontal form-material" method="POST" action="{{ route('electrogene.store') }}">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">Code*</label>
                            <div class="col-md-12">
                                <input type="text" name="code" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Type*</label>
                            <div class="col-sm-12">
                                <select name="type" class="form-control form-control-line">
                                    <option>Chef de Projet</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Marque*</label>
                            <div class="col-md-12">
                                <input type="text" name="marque" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="puissance" class="col-md-12">Puissance*</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control form-control-line" name="puissance" id="puissance">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Utilisation*</label>
                            <div class="col-md-12">
                                <textarea name="utilisation" class="form-control form-control-line"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Site Concerne</label>
                            <div class="col-sm-12">
                                <select name="id_site" class="form-control form-control-line">
                                    @foreach ($sites as $site)
                                    <option value="{{ $site->id }}">{{ $site->nom }}</option>
                                    @endforeach
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
