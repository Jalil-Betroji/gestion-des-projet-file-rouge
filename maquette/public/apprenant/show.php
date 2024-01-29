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
                                <p>Tâches</p>
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
                            <h1>Détails de projet</h1>
                        </div>
                        <div class="col-sm-6">
                            <a href="index.php" class="btn btn-default float-right"><i class="far fa-edit"></i>
                                Reteur</a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="d-flex">
                            <div class=" mx-2 w-75">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="img-container">
                                                    <img src="../assets/imgs/project.jpg" alt="team member"
                                                        class="w-100 mb-4 rounded">
                                                </div>
                                                <h3>Développer les interfaces de l'application de suivi budgétaire</h3>
                                            </div>
                                            <div class="col-12">
                                                <div>
                                                    <button class="btn bg-assignee">Assignée</button>
                                                    <div class="d-flex my-3">
                                                        <span class="teacherIcon">IB</span>
                                                        <div class="mx-2">
                                                            <p title="Fatin Chebab" class="teacherName">Imane Bouziane
                                                            </p>
                                                            <p class="creationDate">créé : 25/04/23</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <p>Ce brief a pour objectif de créer une application de suivi de budget
                                                    en
                                                    utilisant React JS</p>
                                                <ul class="d-flex projectShowUl">
                                                    <li>
                                                        <div class="projectTags">
                                                            <span class="tags">
                                                                HTML5
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="projectTags">
                                                            <span class="tags">
                                                                JavaScript
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="projectTags">
                                                            <span class="tags">
                                                                UX
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="projectTags">
                                                            <span class="tags">
                                                                UI
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="projectTags">
                                                            <span class="tags">
                                                                CSS3
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="projectTags">
                                                            <span class="tags">
                                                                React
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <h3>Secteur</h3>
                                            <ul class="d-flex projectShowUl col-12">
                                                <li>
                                                    <div class="projectTags">
                                                        <span class="tags">
                                                            Développement Web
                                                        </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <h3>Références</h3>
                                            <div class="col-12">
                                                <ul class="d-flex projectShowUl">
                                                    <li>
                                                        <div class="projectTags">
                                                            <a href="https://mdbootstrap.com/docs/standard/components/dropdowns/"
                                                                class="tags" target="_blank">
                                                                Développeur web et web
                                                                mobile
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <h3>Contexte de projet</h3>
                                            <div class="col-12">
                                                <h3><strong>Fonctionnalités élémentaires :</strong></h3>
                                                <p>Enregistrement des dépenses : l'utilisateur peut enregistrer toutes
                                                    ses
                                                    dépenses pour avoir une vue d'ensemble de ses dépenses.
                                                    Enregistrement des revenus : l'utilisateur peut également
                                                    enregistrer
                                                    tous ses revenus pour avoir une vue d'ensemble de ses transactions.
                                                    Catégorisation des transactions : l'utilisateurl peut catégoriser
                                                    ses
                                                    dépenses en fonction de différents critères (alimentation, logement,
                                                    transport, loisirs, etc.) pour mieux comprendre ses habitudes de
                                                    dépenses et identifier les domaines où il peut économiser.
                                                    Suivi du budget : l'application peut aider l'utilisateur à suivre
                                                    l'évolution de son budget.</p>
                                                <h3><strong>Interfaces :</strong></h3>
                                                <strong>++Page d'accueil :++</strong>
                                                <p>La page d'accueil affiche un aperçu rapide du solde actuel de
                                                    l'utilisateur, ainsi que le total des dépenses et le total des
                                                    revenus.
                                                    La page d'accueil permet aussi à l'utilisateur d'ajouter une
                                                    nouvelle
                                                    transaction. L'utilisateur devra spécifier le montant, le motif (une
                                                    brève description), la catégorie (logement, alimentation, transport,
                                                    loisirs, personnel, autres) ainsi que son type (dépense ou revenu).
                                                    La page d'accueil affiche toutes les transactions de l'utilisateur,
                                                    triée par date d'ajout. Les dépenses s'affichent en couleur rouge
                                                    avec
                                                    un signe "-". Les revenus s'affichent en couleur verte avec un signe
                                                    "+".
                                                    <strong>++Page de statistiques : (optionnelle)++</strong>

                                                    La page de statistiques affiche les transactions de l'utilisateur
                                                    par
                                                    catégorie et par type sous forme tabulaire ou graphique.
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <h3>Modalités pédagogiques</h3>
                                            <div class="col-12">

                                                <p>Travail à faire individuellement en 10 jours</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <h3>Livrables</h3>
                                            <div class="col-12">

                                                <p>Code source</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card w-25" style="height: 100vh;">
                                <div class="card-body">
                                    <div">
                                        <h2>Compétences visées</h2>
                                        <ul>
                                            <li class="d-flex flex-column evaluationLevel my-4">
                                                <p>C1. Maquetter une application mobile</p>
                                                <ol>
                                                    <li>
                                                        <span>niveau 1
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>niveau 2
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>niveau 3
                                                        </span>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li class="d-flex flex-column evaluationLevel">
                                                <p>C2. Manipuler une base de données - perfectionnement
                                                </p>
                                                <ol>
                                                    <li>
                                                        <span>
                                                            niveau 1
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            niveau 2
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            niveau 3
                                                        </span>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ul>
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