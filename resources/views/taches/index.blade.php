@extends('layouts.app')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Liste des tâches</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Tâches</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a href="{{ url("/tache/".$maintenance->id."/create") }}" class="btn pull-right hidden-sm-down btn-success">Ajoutez une tâche</a>
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
                            Maintenance : {{ $maintenance->nom }}
                        </div>
                    </div>
                    <div class="table-responsive m-t-40">
                        <table class="table stylish-table">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Date début</th>
                                <th>Date fin</th>
                                <th>Cree Par</th>
                                <th>Attribuee A</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($taches as $tache)
                                <tr>
                                    <td>{{ $tache->nom }}</td>
                                    <td>{{ $tache->description }}</td>
                                    <td>{{ $tache->date_debut }}</td>
                                    <td>{{ $tache->date_fin }}</td>
                                    <td>{{ $tache->user->nom }}</td>
                                    <td>{{ $tache->user2->nom }}</td>
                                    <td>{{ $tache->status }}</td>
                                    <td class="text-left">
                                        <a href="{{ url("/photo/".$tache->id) }}"><i class="fa fa-eye m-r-10"></i></a>
                                        <a href="#"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
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
