<?php include_once '../layouts/head.php' ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include_once './layouts/nav.php' ?>
        <style>
            .table-wrapper {

                overflow-y: scroll;
                overflow-x: scroll;
                height: fit-content;
                max-height: 66.4vh;
                padding-bottom: 20px;

            }

            .project-column {
                grid-column: 1/4 !important;
            }

            .project-column-backlog {
                grid-column: 4/13 !important;
            }

            table {
                min-width: max-content;
            }

            table th {
                position: sticky;
                top: 0px;
                text-align: center;
                font-weight: normal;
                border: 1.5px solid black;
                background-color: white;
            }

            table th,
            table td {

                padding: 15px;
                padding-top: 10px;
                padding-bottom: 10px;

            }

            table td {
                text-align: left;

                font-size: 15px;
                border: 1px solid rgb(177, 177, 177);
                padding-left: 20px;

            }

            .membersList {
                height: 69vh;
            }

            .content-wrapper.kanban {
                height: 100%;
            }
        </style>

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
                            <a href="index.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Projets
                                </p>
                            </a>

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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1>Projets</h1>
                        </div>
                        <div class="col-sm-6 d-none d-sm-block">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                <li class="breadcrumb-item active">Projet 1</li>
                            </ol>
                        </div>
                        <div class="input-group w-25 mt-4">
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
                </div>
            </section>

            <section class="content pb-3">
                <div class="container-fluid h-100">
                    <div class="card">
                        <div class="card-body p-0 ">
                            <!-- test start -->
                            <div class="">
                                <div class="btn-group">
                                    <a class="btn bg-false border-0 rounded-0" id="btnTable1"
                                        href="projectManagment.php"><svg aria-hidden="true" focusable="false" role="img"
                                            class="mx-2" viewBox="0 0 16 16" width="16" height="19" fill="currentColor"
                                            style="display: inline-block; user-select: none; vertical-align: text-bottom; overflow: visible;">
                                            <path
                                                d="M1.75 0h12.5C15.216 0 16 .784 16 1.75v12.5A1.75 1.75 0 0 1 14.25 16H1.75A1.75 1.75 0 0 1 0 14.25V1.75C0 .784.784 0 1.75 0ZM1.5 1.75v12.5c0 .138.112.25.25.25h12.5a.25.25 0 0 0 .25-.25V1.75a.25.25 0 0 0-.25-.25H1.75a.25.25 0 0 0-.25.25ZM11.75 3a.75.75 0 0 1 .75.75v7.5a.75.75 0 0 1-1.5 0v-7.5a.75.75 0 0 1 .75-.75Zm-8.25.75a.75.75 0 0 1 1.5 0v5.5a.75.75 0 0 1-1.5 0ZM8 3a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5A.75.75 0 0 1 8 3Z">
                                            </path>
                                        </svg>Board</a>

                                    <a class="btn bg-active border-0 rounded-0" id="btnTable3" href="backlog.php">
                                        <svg aria-hidden="true" focusable="false" role="img"
                                            class="Octicon-sc-9kayk9-0 ddnvSG" viewBox="0 0 16 16" width="16"
                                            height="16" fill="currentColor"
                                            style="display: inline-block; user-select: none; vertical-align: text-bottom; overflow: visible;">
                                            <path
                                                d="M0 1.75C0 .784.784 0 1.75 0h12.5C15.216 0 16 .784 16 1.75v12.5A1.75 1.75 0 0 1 14.25 16H1.75A1.75 1.75 0 0 1 0 14.25ZM6.5 6.5v8h7.75a.25.25 0 0 0 .25-.25V6.5Zm8-1.5V1.75a.25.25 0 0 0-.25-.25H6.5V5Zm-13 1.5v7.75c0 .138.112.25.25.25H5v-8ZM5 5V1.5H1.75a.25.25 0 0 0-.25.25V5Z">
                                            </path>
                                        </svg>
                                        Backlog</a>
                                    <!-- <button class="btn bg-false border-0 rounded-0" id="btnTable2">
                                        <i class="fa-solid fa-list"></i>
                                        List
                                    </button>
                                    <button class="btn bg-false border-0 rounded-0" id="btnTable3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20">
                                            <rect x="0" y="0" width="20" height="20" fill="none" stroke="none" />
                                            <path fill="black"
                                                d="M3 11a7 7 0 0 1 13.79-1.71c.476.228.882.576 1.18 1.006a8 8 0 1 0-13.63 6.359a.5.5 0 0 0 .707-.707A6.976 6.976 0 0 1 3 11m11.637-1.874A5.002 5.002 0 0 0 5 11c0 1.378.558 2.627 1.46 3.531a.5.5 0 0 0 .708-.706a4 4 0 1 1 6.57-4.253a2.99 2.99 0 0 1 .899-.446M8 11a2 2 0 1 1 4 0a2 2 0 0 1-4 0m2-1a1 1 0 1 0 0 2a1 1 0 0 0 0-2m7.5 2a2 2 0 1 1-4 0a2 2 0 0 1 4 0m1.5 4.5c0 1.245-1 2.5-3.5 2.5S12 17.75 12 16.5a1.5 1.5 0 0 1 1.5-1.5h4a1.5 1.5 0 0 1 1.5 1.5" />
                                        </svg>
                                        Standup</button> -->
                                </div>
                                <div class="project-tasks border-top">
                                    <div class="project-column mx-2 my-2">

                                        <div class="card p-3 membersList">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <img src="../assets/imgs/25231.png" alt=""
                                                            style="width: 25px; height: 25px;" class="rounded-circle">
                                                    </div>
                                                    <h3 class="ml-1 mb-0">Betroji Jalil</h3>
                                                </div>
                                                <span class="badge bg-secondary">2</span>
                                            </div>
                                            <hr class="my-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <img src="../assets/imgs/25231.png" alt=""
                                                            style="width: 25px; height: 25px;" class="rounded-circle">
                                                    </div>
                                                    <h3 class="ml-1 mb-0">Ben NASAR Adnan</h3>
                                                </div>
                                                <span class="badge bg-secondary">2</span>
                                            </div>
                                            <hr class="my-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <img src="../assets/imgs/25231.png" alt=""
                                                            style="width: 25px; height: 25px;" class="rounded-circle">
                                                    </div>
                                                    <h3 class="ml-1 mb-0">ACHOUA Hamid</h3>
                                                </div>
                                                <span class="badge bg-secondary">2</span>
                                            </div>
                                            <hr class="my-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <img src="../assets/imgs/25231.png" alt=""
                                                            style="width: 25px; height: 25px;" class="rounded-circle">
                                                    </div>
                                                    <h3 class="ml-1 mb-0">Boukhar Soufiane</h3>
                                                </div>
                                                <span class="badge bg-secondary">2</span>
                                            </div>
                                            <hr class="my-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <img src="../assets/imgs/25231.png" alt=""
                                                            style="width: 25px; height: 25px;" class="rounded-circle">
                                                    </div>
                                                    <h3 class="ml-1 mb-0">Lamchatab Amin</h3>
                                                </div>
                                                <span class="badge bg-secondary">2</span>
                                            </div>
                                            <hr class="my-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <img src="../assets/imgs/25231.png" alt=""
                                                            style="width: 25px; height: 25px;" class="rounded-circle">
                                                    </div>
                                                    <h3 class="ml-1 mb-0">LHARAK Adnan</h3>
                                                </div>
                                                <span class="badge bg-secondary">2</span>
                                            </div>
                                            <hr class="my-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <img src="../assets/imgs/25231.png" alt=""
                                                            style="width: 25px; height: 25px;" class="rounded-circle">
                                                    </div>
                                                    <h3 class="ml-1 mb-0">BOUIK Hussien</h3>
                                                </div>
                                                <span class="badge bg-secondary">2</span>
                                            </div>
                                            <hr class="my-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <img src="../assets/imgs/25231.png" alt=""
                                                            style="width: 25px; height: 25px;" class="rounded-circle">
                                                    </div>
                                                    <h3 class="ml-1 mb-0">ZAANI Hamza</h3>
                                                </div>
                                                <span class="badge bg-secondary">2</span>
                                            </div>
                                            <hr class="my-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <img src="../assets/imgs/25231.png" alt=""
                                                            style="width: 25px; height: 25px;" class="rounded-circle">
                                                    </div>
                                                    <h3 class="ml-1 mb-0">GRAIN Reda</h3>
                                                </div>
                                                <span class="badge bg-secondary">2</span>
                                            </div>
                                            <hr class="my-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <img src="../assets/imgs/25231.png" alt=""
                                                            style="width: 25px; height: 25px;" class="rounded-circle">
                                                    </div>
                                                    <h3 class="ml-1 mb-0">SARSRI Imrane</h3>
                                                </div>
                                                <span class="badge bg-secondary">2</span>
                                            </div>
                                            <hr class="my-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <img src="../assets/imgs/25231.png" alt=""
                                                            style="width: 25px; height: 25px;" class="rounded-circle">
                                                    </div>
                                                    <h3 class="ml-1 mb-0">ASSAID Amina</h3>
                                                </div>
                                                <span class="badge bg-secondary">2</span>
                                            </div>
                                            <hr class="my-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <img src="../assets/imgs/25231.png" alt=""
                                                            style="width: 25px; height: 25px;" class="rounded-circle">
                                                    </div>
                                                    <h3 class="ml-1 mb-0">DAIFANE Yasmine</h3>
                                                </div>
                                                <span class="badge bg-secondary">2</span>
                                            </div>
                                            <hr class="my-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <img src="../assets/imgs/25231.png" alt=""
                                                            style="width: 25px; height: 25px;" class="rounded-circle">
                                                    </div>
                                                    <h3 class="ml-1 mb-0">FAIZ Safae</h3>
                                                </div>
                                                <span class="badge bg-secondary">2</span>
                                            </div>
                                            <hr class="my-3">
                                        </div>
                                    </div>
                                    <div class="project-column-backlog fullBoardContainer">
                                        <div class='my-2 customTableBackground'>
                                            <div class="outer-wrapper">
                                                <div class="table-wrapper">
                                                    <table class="table table-striped border">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    Tache
                                                                </th>
                                                                <th class="text-center" style="width: 10%">
                                                                    Priority <i class="fa-solid fa-sort"></i>
                                                                </th>
                                                                <th class="text-center" style="width: 20%">
                                                                    Status
                                                                </th>
                                                                <th class="text-center" style="width: 20%">
                                                                    Assigns
                                                                </th>
                                                                <th class="text-center" style="width: 20%">
                                                                    Depot
                                                                </th>
                                                            </tr>

                                                        </thead>
                                                        <tbody id="backlogTable">
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-danger">
                                                                        P0
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BETROJI Jalil</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-warning">
                                                                        P1
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BOUKHAR Soufiane</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-danger">
                                                                        P0
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BETROJI Jalil</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-warning">
                                                                        P1
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BOUKHAR Soufiane</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-danger">
                                                                        P0
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BETROJI Jalil</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-warning">
                                                                        P1
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BOUKHAR Soufiane</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-danger">
                                                                        P0
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BETROJI Jalil</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-warning">
                                                                        P1
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BOUKHAR Soufiane</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-danger">
                                                                        P0
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BETROJI Jalil</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-warning">
                                                                        P1
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BOUKHAR Soufiane</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-danger">
                                                                        P0
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BETROJI Jalil</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-warning">
                                                                        P1
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BOUKHAR Soufiane</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-danger">
                                                                        P0
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BETROJI Jalil</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-warning">
                                                                        P1
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BOUKHAR Soufiane</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-danger">
                                                                        P0
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BETROJI Jalil</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                    gestion de rendez-vous / recherche sa marche pas bug
                                                                    new_issue

                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="badge bg-warning">
                                                                        P1
                                                                    </span>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <span class="badge bg-secondary">
                                                                        A Faire
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="d-flex">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                        <p>BOUKHAR Soufiane</p>
                                                                    </div>
                                                                </td>
                                                                <td class="project-state text-center">
                                                                    <a href="https://www.google.com" target="_blank">
                                                                        <img src="../assets/imgs/25231.png" alt=""
                                                                            class="mx-2"
                                                                            style="width: 20px; height: 20px;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="table-container">
                                <!-- Table content will be dynamically replaced here -->
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>

    <?php include_once '../layouts/footer.php' ?>
    <script type="module" src="../assets/backlog.js"></script>