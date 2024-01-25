<?php include_once '../layouts/head.php' ?>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once '../layouts/nav.php' ?>
        <!-- /.navbar -->
        <!-- aside -->
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
                <!-- <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Projets</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Ajouter Projet</li>
                                <li class="breadcrumb-item"><a href="./index.html">Accueil</a> </li>
                            </ol>
                        </div>
                    </div>
                </div> -->
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Modifier un Équipe</h3>
                                </div>
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nom</label>
                                            <input name="nom" type="text" class="form-control" id="exampleInputEmail1"
                                                placeholder="Nom" value="Technique">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Description</label>
                                            <input name="description" type="text" class="form-control"
                                                id="exampleInputPassword1" placeholder="Description"
                                                value="L'équipe de codage est responsable de la mise en œuvre des fonctionnalités définies dans les spécifications du projet. Les développeurs travaillent en étroite collaboration avec l'équipe technique pour écrire, tester et déployer le code source du logiciel.">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Les membres</label>
                                            <select name="nom" id="selectMembers" class="form-control"
                                                multiple></select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Projet</label>
                                            <select name="nom" id="selectProject" class="form-control"></select>
                                        </div>

                                    </div>

                                    <div class="card-footer">
                                        <a href="./index.html" class="btn btn-default">Annuler</a>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>

    </div>

    <?php include_once '../layouts/footer.php' ?>
    <script type="module" src="../assets/teams.js"></script>