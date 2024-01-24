<?php include_once '../layouts/head.php' ?>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once './layouts/nav.php' ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../home.php" class="brand-link d-flex flex-column align-items-center">
                <img src="/public/assets/imgs/solicode_tanger_cover.jpg" alt="AdminLTE Logo" class="brand-image"
                    style="opacity: .8">
                <p class="brand-text font-weight-light">Gestion des Projets</p>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Projets
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="projects.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tous les Projets</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Projets Web</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Projets Mobiles</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item active">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Équipes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Technique</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fonctionnel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Conception</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Codage</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Test</p>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <li class="nav-item">
                            <a href="projectManagment.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Gestion de projet
                                </p>
                            </a>
                    </ul>

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Projets</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="home.php">Accueil</a></li>
                                <li class="breadcrumb-item active">Projet 1</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>


            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">

                        <div class="input-group w-25">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="projectFilter">
                                    <i class="fa-solid fa-filter text-dark pr-2"></i>
                                </label>
                            </div>

                            <select class="custom-select" id="projectFilter">
                                <option selected disabled>Filtrer par projet</option>
                                <option value="projet3">Projet 1</option>
                                <option value="projet3">Projet 2</option>
                                <option value="projet2">Projet 3</option>
                                <option value="projet2">Projet 4</option>
                            </select>
                        </div>

                    </div>
                    <div class="card-body p-0">
                        <!-- test start -->
                        <div class="kanban">
                            <div class="btn-group kanban">
                                <button class="btn btn-light border-0 rounded-0" id="btnTable1"><svg aria-hidden="true"
                                        focusable="false" role="img" class="mx-2" viewBox="0 0 16 16" width="16"
                                        height="19" fill="currentColor"
                                        style="display: inline-block; user-select: none; vertical-align: text-bottom; overflow: visible;">
                                        <path
                                            d="M1.75 0h12.5C15.216 0 16 .784 16 1.75v12.5A1.75 1.75 0 0 1 14.25 16H1.75A1.75 1.75 0 0 1 0 14.25V1.75C0 .784.784 0 1.75 0ZM1.5 1.75v12.5c0 .138.112.25.25.25h12.5a.25.25 0 0 0 .25-.25V1.75a.25.25 0 0 0-.25-.25H1.75a.25.25 0 0 0-.25.25ZM11.75 3a.75.75 0 0 1 .75.75v7.5a.75.75 0 0 1-1.5 0v-7.5a.75.75 0 0 1 .75-.75Zm-8.25.75a.75.75 0 0 1 1.5 0v5.5a.75.75 0 0 1-1.5 0ZM8 3a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5A.75.75 0 0 1 8 3Z">
                                        </path>
                                    </svg>Board</button>
                                <button class="btn btn-default border-0 rounded-0" id="btnTable2">
                                    <i class="fa-solid fa-list"></i>
                                    List
                                </button>
                                <button class="btn btn-default border-0 rounded-0" id="btnTable3">
                                    <svg aria-hidden="true" focusable="false" role="img"
                                        class="Octicon-sc-9kayk9-0 ddnvSG" viewBox="0 0 16 16" width="16" height="16"
                                        fill="currentColor"
                                        style="display: inline-block; user-select: none; vertical-align: text-bottom; overflow: visible;">
                                        <path
                                            d="M0 1.75C0 .784.784 0 1.75 0h12.5C15.216 0 16 .784 16 1.75v12.5A1.75 1.75 0 0 1 14.25 16H1.75A1.75 1.75 0 0 1 0 14.25ZM6.5 6.5v8h7.75a.25.25 0 0 0 .25-.25V6.5Zm8-1.5V1.75a.25.25 0 0 0-.25-.25H6.5V5Zm-13 1.5v7.75c0 .138.112.25.25.25H5v-8ZM5 5V1.5H1.75a.25.25 0 0 0-.25.25V5Z">
                                        </path>
                                    </svg>
                                    Backlog</button>
                                <button class="btn btn-default border-0 rounded-0" id="btnTable3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <rect x="0" y="0" width="20" height="20" fill="none" stroke="none" />
                                        <path fill="black"
                                            d="M3 11a7 7 0 0 1 13.79-1.71c.476.228.882.576 1.18 1.006a8 8 0 1 0-13.63 6.359a.5.5 0 0 0 .707-.707A6.976 6.976 0 0 1 3 11m11.637-1.874A5.002 5.002 0 0 0 5 11c0 1.378.558 2.627 1.46 3.531a.5.5 0 0 0 .708-.706a4 4 0 1 1 6.57-4.253a2.99 2.99 0 0 1 .899-.446M8 11a2 2 0 1 1 4 0a2 2 0 0 1-4 0m2-1a1 1 0 1 0 0 2a1 1 0 0 0 0-2m7.5 2a2 2 0 1 1-4 0a2 2 0 0 1 4 0m1.5 4.5c0 1.245-1 2.5-3.5 2.5S12 17.75 12 16.5a1.5 1.5 0 0 1 1.5-1.5h4a1.5 1.5 0 0 1 1.5 1.5" />
                                    </svg>
                                    Standup</button>
                            </div>


                            <div class="table-container">
                                <!-- Table content will be dynamically replaced here -->
                            </div>
                        </div>
                        <!-- test -->
                        <div class="card-footer clearfix" id="example2_paginate">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="paginate_button page-item previous disabled" id="example2_previous">
                                    <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0"
                                        class="page-link">Précédent</a>
                                </li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0"
                                        class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0"
                                        class="page-link">2</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0"
                                        class="page-link">3</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0"
                                        class="page-link">4</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0"
                                        class="page-link">5</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0"
                                        class="page-link">6</a>
                                </li>
                                <li class="paginate_button page-item next" id="example2_next">
                                    <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0"
                                        class="page-link">Suivant</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include_once '../layouts/footer.php' ?>