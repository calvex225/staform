@extends('layouts.app')

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Liste des Utilisateurs</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">utilisateur</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
        <a href="{{ url("/utilisateur/create")}}" class="btn pull-right hidden-sm-down btn-success">Ajoutez un Utilisateur</a>
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
                    <div class="table-responsive m-t-40">
                        <table class="table stylish-table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->nom }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td class="text-left">
                                            <a href="#"><i class="fa fa-edit m-r-10"></i></a>
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