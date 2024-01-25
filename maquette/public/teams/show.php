<!DOCTYPE html>
<html lang="fr">
<?php include_once '../layouts/head.php' ?>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once '../layouts/nav.php' ?>
        <!-- /.navbar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="home.php" class="brand-link d-flex flex-column align-items-center">
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
                        <li class="nav-item active">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Projets
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="project/index.php" class="nav-link">
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

                        <li class="nav-item">
                            <a href="teams/index.php" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Équipes</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>



        <div class="content-wrapper" style="min-height: 1302.4px;">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Détails d'Équipe</h1>
                        </div>
                        <div class="col-sm-6">
                            <a href="edit.php" class="btn btn-default float-right"><i class="far fa-edit"></i>
                                Modifier</a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="img-container">
                                                <img src="../assets/imgs/project.jpg"
                                                    alt="team member" class="w-100 mb-4">
                                            </div>
                                            <h2>Nom : Technique</h2>
                                        </div>
                                        <div class="col-8">
                                           
                                            <div class="member_desc">
                                                <h3>Description d'équipe :</h3>
                                                <p>
                                                    L'équipe de codage est responsable de la mise en œuvre des
                                                    fonctionnalités définies dans les spécifications du projet.
                                                    Les développeurs travaillent en étroite collaboration avec l'équipe
                                                    technique pour écrire, tester et déployer le code source du
                                                    logiciel.

                                                </p>
                                                <h2>les membres :</h2>
                                                <div class="d-flex">
                                                    <ul class="list-unstyled">
                                                        <li class="mb-2"><img src="../assets/imgs/25231.png"
                                                                style="width:20px;height:20px;">
                                                            BETROJI Jalil</li>
                                                        <li class="mb-2"><img src="../assets/imgs/25231.png"
                                                                style="width:20px;height:20px;">
                                                            BOUKHAR Soufiane
                                                        </li>
                                                        <li class="mb-2"><img src="../assets/imgs/25231.png"
                                                                style="width:20px;height:20px;">
                                                            ACHOUA Hamid
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled mx-4">
                                                        <li class="mb-2"><img src="../assets/imgs/25231.png"
                                                                style="width:20px;height:20px;">
                                                            LAMCHATAB Amin
                                                        </li>
                                                        <li class="mb-2"><img src="../assets/imgs/25231.png"
                                                                style="width:20px;height:20px;">
                                                            BEN NASAR Adnan
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>

                                            <div class="member_desc">
                                                

                                                <h4>Progrès des projets</h4>
                                                <!-- progressbar starts -->
                                                <div class="progress-holder">
                                                    <div class="barWrapper">
                                                        <span class="progressText"><b>CNMH</b></span>
                                                        <div class="progress">
                                                            <div class="bg-success" role="progressbar"
                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 80%;">
                                                            </div>
                                                            <span class="popOver" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="80%"></span>
                                                        </div>
                                                    </div>
                                                    <div class="barWrapper">
                                                        <span class="progressText"><b>LMS</b></span>
                                                        <div class="progress">
                                                            <div class="bg-warning" role="progressbar"
                                                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 25%;">
                                                            </div>
                                                            <span class="popOver" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="95%"></span>
                                                        </div>
                                                    </div>
                                                    <div class="barWrapper">
                                                        <span class="progressText"><b>E-Commerce</b></span>
                                                        <div class="progress">
                                                            <div class="bg-primary" role="progressbar"
                                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 75%;">
                                                            </div>
                                                            <span class="popOver" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="85%"></span>
                                                        </div>
                                                    </div>
                        
                                                </div>
                                                <!-- progressbar ends -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>
    <?php include_once '../layouts/footer.php' ?>