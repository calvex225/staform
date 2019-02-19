<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li>
                        <a href="{{ url('/') }}" class="waves-effect"><i class="fa fa-dashboard m-r-10" aria-hidden="true"></i>Tableau de bord</a>
                    </li>
                    <li>
                        <a href="{{ url('/site') }}" class="waves-effect"><i class="fa fa-map-marker m-r-10" aria-hidden="true"></i>Sites <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li>
                                <a href="{{ url('/sitetype') }}" class="waves-effect">Types de Site</a>
                            </li>
                            <li>
                                <a href="{{ url('/sitetype/create') }}" class="waves-effect">Ajouter un type</a>
                            </li>
                            <li>
                                <a href="{{ url('/site') }}" class="waves-effect">Liste des sites</a>
                            </li>
                            <li>
                                <a href="{{ url('/site/create') }}" class="waves-effect">Ajouter un site</a>
                            </li>
                            <li>
                                <a href="{{ url('/electrogene') }}" class="waves-effect">Groupes Électrogènes</a>
                            </li>
                            <li>
                                <a href="{{ url('/electrogene/create') }}" class="waves-effect">Ajouter un Groupe E.</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/maintenance') }}" class="waves-effect"><i class="fa fa-magic m-r-10" aria-hidden="true"></i>Maintenances <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li>
                                <a href="{{ url('/maintenance') }}" class="waves-effect">Liste des maintenances</a>
                            </li>
                            <li>
                                <a href="{{ url('/maintenance/create') }}" class="waves-effect">Ajouter une activites</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/utilisateur') }}" class="waves-effect"><i class="fa fa-users m-r-10" aria-hidden="true"></i>Utilisateurs <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li>
                                <a href="{{ url('/utilisateur') }}" class="waves-effect">Liste des utilisateurs</a>
                            </li>
                            <li>
                                <a href="{{ url('/utilisateur/create') }}" class="waves-effect">Ajouter un utilisateur</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/rapport') }}" class="waves-effect"><i class="fa fa-file-pdf-o m-r-10" aria-hidden="true"></i>Rapports</a>
                    </li>
                    <li>
                        <a href="{{ url('/utilisateur/'.auth()->user()->id.'/edit') }}" class="waves-effect"><i class="fa fa-cog m-r-10" aria-hidden="true"></i>Paramètres</a>
                    </li>
                </ul>
                <div class="text-center m-t-30">
                    <a href="mailto:mlalie@gmail.com" class="btn btn-danger">Contactez l'Admin</a>
                </div>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
