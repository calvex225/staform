@extends('layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Ajouter un Site</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">site</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="{{ url("/site")}}" class="btn pull-right hidden-sm-down btn-success">Voir les Sites</a>
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
                <form class="form-horizontal form-material" method="POST" action="{{ route('site.store') }}">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-12">Reference de la Zone*</label>
                        <div class="col-md-12">
                            <input type="text" name="reference" class="form-control form-control-line" placeholder="Code aplha-numerique, 5 characteres maximum">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Nom*</label>
                        <div class="col-md-12">
                            <input type="text" name="nom" class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label class="col-sm-12">Type de site*</label>
                                <div class="col-sm-12">
                                    <select name="id_sitetype" class="form-control form-control-line">
                                        @foreach ($site_types as $site_type)
                                        <option value="{{ $site_type->id }}">{{ $site_type->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-center">
                            <a href="{{ url("/sitetype/create")}}" class="btn pull-right hidden-sm-down btn-primary">Ajouter un nouveau type de site</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="zone" class="col-md-12">Zone*</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-line" name="zone" id="zone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Coordonees GPS*</label>
                        <div class="col-md-12">
                            <input type="text" name="coordonnees_gps" class="form-control form-control-line">
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
