<?php include_once '../layouts/head.php' ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
    .circular-progress {
        position: relative;
        height: 250px;
        width: 250px;
        border-radius: 50%;
        display: grid;
        place-items: center;
    }

    .statistique-card {
        position: relative;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: 0.25rem;
        padding: 1rem;
    }

    .circular-progress:before {
        content: "";
        position: absolute;
        height: 75%;
        width: 75%;
        background-color: #ffffff;
        border-radius: 50%;
    }

    .value-container {
        position: relative;
        font-family: "Poppins", sans-serif;
        font-size: 50px;
        color: #231c3d;
    }

    .user-icon {
        padding: 0.8rem;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include_once '../layouts/nav.php' ?>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="home.php" class="brand-link d-flex flex-column align-items-center text-decoration-none">
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
                                    <a href="index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tous les Projets</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="projectManagment.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Réalisation</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="teams/index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Équipes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="teams/index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Taches</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="d-flex col-sm-6">
                            <span class="user-icon rounded-circle bg-indigo mr-2">JB</span>
                            <div>
                                <span class="d-flex flex-column">
                                    <span>Bonjour <strong>BETROJI Jalil</strong></span>

                                    <span>Bienvenu sur solicode</span>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="content pb-3">
                <div class="container-fluid h-100">
                    <div class="card">
                        <div class="card-body p-0">
                            <h1 class="m-3">Ma promo</h1>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="../assets/imgs/S.png" alt="Solicoders Logo"
                                        style="width:10rem;height:15rem;">
                                </div>
                                <div class="col-md-6 row">
                                    <div class="col-12 top-div">
                                        <h1>SOLICODERS</h1>
                                        <small>Promo dev mobile Solicode 23/24</small>
                                    </div>
                                    <div class="col-12 d-flex">
                                        <div class="d-flex align-items-center mr-4">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span class="ml-2">INT, MAROC</span>
                                        </div>
                                        <div class="d-flex align-items-center mr-4">
                                            <i class="fas fa-users"></i>
                                            <span class="ml-2">Apprenants</span>
                                        </div>
                                        <div class="d-flex align-items-center mr-4">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span class="ml-2">18/09/2023 au 18/08/2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="card">
                        <h1 class="m-3">Les statistiques de la promo</h1>
                        <div class="d-flex justify-content-around mb-3">
                            <div>
                                <div class="circular-progress" id="skills">
                                    <div class="value-container" id="skills-value">0%</div>
                                </div>
                                <div class="text-center">
                                    <a class="btn btn-primary w-75 mt-3">Compétence validées</a>
                                </div>
                            </div>
                            <div>
                                <div class="circular-progress" id="validatedProject">
                                    <div class="value-container" id="project-value">0%</div>
                                </div>
                                <div class="text-center">
                                    <a class="btn btn-primary w-75 mt-3">Projets validées</a>
                                </div>
                            </div>

                            <div>
                                <div class="circular-progress" id="tasksCorrected">
                                    <div class="value-container" id="tasksValue">0%</div>
                                </div>
                                <div class="text-center">
                                    <a class="btn btn-primary w-75 mt-3">Tâches validées</a>
                                </div>
                            </div>

                            <div>
                                <div>

                                </div>
                                <div class="circular-progress" id="projet-PFE">
                                    <div class="value-container" id="pfe-value">0%</div>
                                </div>
                                <div class="text-center">
                                    <a class="btn btn-primary w-75 mt-3">Mon taux de réussite</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container-fluid">
                    <div class="card">
                        <h1 class="m-3">Les projets de ma promo</h1>
                        <div class="d-flex justify-content-around gap-3 px-3">
                            <div class="card p-0 rounded w-100">
                                <img src="../assets/imgs/project.jpg" alt="" class="img-fluid rounded-top"
                                    style="height:200px;">
                                <h2 class="p-2">CNMH</h2>
                                <p class="p-2">Développer une application web qui répond aux 6 compétences visées du
                                    référentiel (C1,C2,C3,C5,C6,C7)</p>

                            </div>
                            <div class="card p-0 rounded w-100">
                                <img src="../assets/imgs/project.jpg" alt="" class="img-fluid rounded-top"
                                    style="height:200px;">
                                <h2 class="p-2">LMS</h2>
                                <p class="p-2">Ce projet a pour objectif de créer une application de suivi de budget en
                                    utilisant React JS</p>

                            </div>
                            <div class="card P-0 rounded w-100">
                                <img src="../assets/imgs/project.jpg" alt="" class="img-fluid rounded-top"
                                    style="height:200px;">
                                <h2 class="p-2">E-Commerce</h2>
                                <p class="p-2">Il s'agit de créer un plugin WordPress permettant de créer et
                                    personnaliser
                                    un formulaire de contact.</p>

                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <a href="index.php" class="btn btn-primary">Tous les projets</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php include_once '../layouts/footer.php' ?>

        <script src="../assets/statistique.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>