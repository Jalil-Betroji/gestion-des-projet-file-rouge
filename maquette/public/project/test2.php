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
                        <li class="nav-item active menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Projets
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="project/index.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tous les Projets</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="projects/web/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Projets Web</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="projects/mobile/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Projets Mobiles</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="members/index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Membres
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
                            <a href="labels/index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Labels
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper ">
            <!-- Content Header (Page header) -->
            <section class="content-header kanban">
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
            <section class="content fullWidth">

                <!-- Default box -->
                <div class="card ">
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
                    <div class="card-body p-0 ">
                        <!-- test start -->
                        <div class="">
                            <div class="btn-group">
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
                            <div class="project-tasks border-top">
                                <div class="project-column mx-2 my-2">
                                    <div class="btn-group my-2">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">
                                            Assignées
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Labels</a></li>
                                            <li><a class="dropdown-item" href="#">Statuts</a></li>
                                        </ul>
                                    </div>
                                    <div class="card p-3 membersList">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="../assets/imgs/25231.png" alt=""
                                                        style="width: 20px; height: 20px;" class="rounded-circle">
                                                </div>
                                                <h3 class="mb-0">Betroji Jalil</h3>
                                            </div>
                                            <span class="badge bg-secondary">2</span>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="../assets/imgs/25231.png" alt=""
                                                        style="width: 20px; height: 20px;" class="rounded-circle">
                                                </div>
                                                <h3 class="mb-0">Ben NASAR Adnan</h3>
                                            </div>
                                            <span class="badge bg-secondary">2</span>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="../assets/imgs/25231.png" alt=""
                                                        style="width: 20px; height: 20px;" class="rounded-circle">
                                                </div>
                                                <h3 class="mb-0">ACHOUA Hamid</h3>
                                            </div>
                                            <span class="badge bg-secondary">2</span>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="../assets/imgs/25231.png" alt=""
                                                        style="width: 20px; height: 20px;" class="rounded-circle">
                                                </div>
                                                <h3 class="mb-0">Boukhar Soufiane</h3>
                                            </div>
                                            <span class="badge bg-secondary">2</span>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="../assets/imgs/25231.png" alt=""
                                                        style="width: 20px; height: 20px;" class="rounded-circle">
                                                </div>
                                                <h3 class="mb-0">Lamchatab Amin</h3>
                                            </div>
                                            <span class="badge bg-secondary">2</span>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="../assets/imgs/25231.png" alt=""
                                                        style="width: 20px; height: 20px;" class="rounded-circle">
                                                </div>
                                                <h3 class="mb-0">LHARAK Adnan</h3>
                                            </div>
                                            <span class="badge bg-secondary">2</span>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="../assets/imgs/25231.png" alt=""
                                                        style="width: 20px; height: 20px;" class="rounded-circle">
                                                </div>
                                                <h3 class="mb-0">BOUIK Hussien</h3>
                                            </div>
                                            <span class="badge bg-secondary">2</span>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="../assets/imgs/25231.png" alt=""
                                                        style="width: 20px; height: 20px;" class="rounded-circle">
                                                </div>
                                                <h3 class="mb-0">ZAANI Hamza</h3>
                                            </div>
                                            <span class="badge bg-secondary">2</span>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="../assets/imgs/25231.png" alt=""
                                                        style="width: 20px; height: 20px;" class="rounded-circle">
                                                </div>
                                                <h3 class="mb-0">GRAIN Reda</h3>
                                            </div>
                                            <span class="badge bg-secondary">2</span>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="../assets/imgs/25231.png" alt=""
                                                        style="width: 20px; height: 20px;" class="rounded-circle">
                                                </div>
                                                <h3 class="mb-0">SARSRI Imrane</h3>
                                            </div>
                                            <span class="badge bg-secondary">2</span>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="../assets/imgs/25231.png" alt=""
                                                        style="width: 20px; height: 20px;" class="rounded-circle">
                                                </div>
                                                <h3 class="mb-0">ASSAID Amina</h3>
                                            </div>
                                            <span class="badge bg-secondary">2</span>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="../assets/imgs/25231.png" alt=""
                                                        style="width: 20px; height: 20px;" class="rounded-circle">
                                                </div>
                                                <h3 class="mb-0">DAIFANE Yasmine</h3>
                                            </div>
                                            <span class="badge bg-secondary">2</span>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="../assets/imgs/25231.png" alt=""
                                                        style="width: 20px; height: 20px;" class="rounded-circle">
                                                </div>
                                                <h3 class="mb-0">FAIZ Safae</h3>
                                            </div>
                                            <span class="badge bg-secondary">2</span>
                                        </div>
                                        <hr class="my-3">
                                    </div>
                                </div>
                                <div class="project-column-todo fullBoardContainer">
                                    <div class='project-column-todo-1 mt-2 my-2 parent-div'>
                                        <div class='project-column-heading my-2'>
                                            <h2 class='project-column-heading__title'>À Faire</option>
                                        </div>
                                        <div class='task draggable' draggable='true'>
                                            <div class='task__tags'>
                                                <div class="task__tags">
                                                    <a href="" class="issue_mention">
                                                        <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                                                        Besoin <span>#3</span>
                                                    </a>
                                                    <img src="../assets/imgs/25231.png" alt=""
                                                        class="issue_mention_img">

                                                </div>
                                            </div>
                                            <p>Konsep hero title yang menarik</p>
                                            <div class='task__stats'>
                                                <span>P0</span>
                                                <span><time datetime="2021-11-24T20:00:00"><i
                                                            class="fas fa-flag mx-2"></i>Nov 24 /<span
                                                            class="changedAt"><i class="fa-solid fa-pen"></i></span>

                                                    </time></span>
                                                <span class='task__livrable'><a href=""><i
                                                            class="fa-solid fa-code-branch"></i></a></span>
                                            </div>

                                        </div>

                                        <div class='task draggable' draggable='true'>
                                            <div>
                                                <a href="" class="issue_mention">
                                                    <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                                                    Besoin <span>#3</span>
                                                </a>

                                            </div>
                                            <p>Icon di section our services</p>
                                            <div class='task__stats'>
                                                <span>P0</span>
                                                <span><time datetime="2021-11-24T20:00:00"><i
                                                            class="fas fa-flag mx-2"></i>Nov 24 /<span
                                                            class="changedAt"><i class="fa-solid fa-pen"></i></span>

                                                    </time></span>
                                                <span class='task__livrable'><a href=""><i
                                                            class="fa-solid fa-code-branch"></i></a></span>
                                            </div>
                                        </div>

                                        <div class='task draggable' draggable='true'>
                                            <div class="task__tags">
                                                <a href="" class="issue_mention">
                                                    <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                                                    Besoin <span>#3</span>
                                                </a>
                                                <img src="../assets/imgs/25231.png" alt="" class="issue_mention_img">

                                            </div>
                                            <p>Konsep hero title yang menarik</p>
                                            <div class='task__stats'>
                                                <span><time datetime="2021-11-24T20:00:00"><i
                                                            class="fas fa-flag"></i>Nov
                                                        24</time></span>
                                                <span><i class="fas fa-comment"></i>2</span>
                                                <span><i class="fas fa-paperclip"></i>3</span>
                                                <span class='task__livrable'><a href=""><i
                                                            class="fa-solid fa-code-branch"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='project-column-doing mx-2 my-2 parent-div'>
                                        <div class='project-column-heading my-2'>
                                            <h2 class='project-column-heading__title'>En Cours</h2>
                                        </div>

                                        <div class='task draggable' draggable='true'>
                                            <div class="task__tags">
                                                <a href="" class="issue_mention en_cours">
                                                    <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                                                    Besoin <span>#3</span>
                                                </a>
                                                <img src="../assets/imgs/25231.png" alt="" class="issue_mention_img">

                                            </div>
                                            <p>Replace lorem ipsum text in the final designs</p>
                                            <div class='task__stats'>
                                                <span>P0</span>
                                                <span><time datetime="2021-11-24T20:00:00"><i
                                                            class="fas fa-flag mx-2"></i>Nov 24 /<span
                                                            class="changedAt"><i class="fa-solid fa-pen"></i></span>

                                                    </time></span>
                                                <span class='task__livrable'><a href=""><i
                                                            class="fa-solid fa-code-branch"></i></a></span>
                                            </div>
                                        </div>

                                        <div class='task draggable' draggable='true'>
                                            <div class="task__tags">
                                                <a href="" class="issue_mention en_cours">
                                                    <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                                                    Besoin <span>#3</span>
                                                </a>
                                                <img src="../assets/imgs/25231.png" alt="" class="issue_mention_img">

                                            </div>
                                            <p>Create and generate the custom SVG illustrations.</p>
                                            <div class='task__stats'>
                                                <span>P0</span>
                                                <span><time datetime="2021-11-24T20:00:00"><i
                                                            class="fas fa-flag mx-2"></i>Nov 24 /<span
                                                            class="changedAt"><i class="fa-solid fa-pen"></i></span>

                                                    </time></span>
                                                <span class='task__livrable'><a href=""><i
                                                            class="fa-solid fa-code-branch"></i></a></span>
                                            </div>
                                        </div>

                                        <div class='task draggable' draggable='true'>
                                            <div class="task__tags">
                                                <a href="" class="issue_mention en_cours">
                                                    <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                                                    Besoin <span>#3</span>
                                                </a>
                                                <img src="../assets/imgs/25231.png" alt="" class="issue_mention_img">

                                            </div>
                                            <p>Proof read the legal page and check for and loopholes</p>
                                            <div class='task__stats'>
                                                <span>P0</span>
                                                <span><time datetime="2021-11-24T20:00:00"><i
                                                            class="fas fa-flag mx-2"></i>Nov 24 /<span
                                                            class="changedAt"><i class="fa-solid fa-pen"></i></span>

                                                    </time></span>
                                                <span class='task__livrable'><a href=""><i
                                                            class="fa-solid fa-code-branch"></i></a></span>
                                            </div>
                                        </div>

                                        <div class='task draggable' draggable='true'>
                                            <div class="task__tags">
                                                <a href="" class="issue_mention en_cours">
                                                    <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                                                    Besoin <span>#3</span>
                                                </a>
                                                <img src="../assets/imgs/25231.png" alt="" class="issue_mention_img">

                                            </div>
                                            <p>Create the landing page graphics for the hero slider.</p>
                                            <div class='task__stats'>
                                                <span>P0</span>
                                                <span><time datetime="2021-11-24T20:00:00"><i
                                                            class="fas fa-flag mx-2"></i>Nov 24 /<span
                                                            class="changedAt"><i class="fa-solid fa-pen"></i></span>

                                                    </time></span>
                                                <span class='task__livrable'><a href=""><i
                                                            class="fa-solid fa-code-branch"></i></a></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='project-column-validation mx-2 my-2 parent-div'>
                                        <div class='project-column-heading my-2'>
                                            <h2 class='project-column-heading__title'>En Validation</h2>
                                        </div>

                                        <div class='task draggable' draggable='true'>
                                            <div class="task__tags">
                                                <a href="" class="issue_mention envalidation">
                                                    <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                                                    Besoin <span>#3</span>
                                                </a>
                                                <img src="../assets/imgs/25231.png" alt="" class="issue_mention_img">

                                            </div>
                                            <p>Check the company we copied doesn't think we copied them.</p>
                                            <div class='task__stats'>
                                                <span>P0</span>
                                                <span><time datetime="2021-11-24T20:00:00"><i
                                                            class="fas fa-flag mx-2"></i>Nov 24 /<span
                                                            class="changedAt"><i class="fa-solid fa-pen"></i></span>

                                                    </time></span>
                                                <span class='task__livrable'><a href=""><i
                                                            class="fa-solid fa-code-branch"></i></a></span>
                                            </div>
                                        </div>
                                        <div class='task draggable' draggable='true'>
                                            <div class="task__tags">
                                                <a href="" class="issue_mention envalidation">
                                                    <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                                                    Besoin <span>#3</span>
                                                </a>
                                                <img src="../assets/imgs/25231.png" alt="" class="issue_mention_img">

                                            </div>
                                            <p>Design the about page.</p>
                                            <div class='task__stats'>
                                                <span>P0</span>
                                                <span><time datetime="2021-11-24T20:00:00"><i
                                                            class="fas fa-flag mx-2"></i>Nov 24 /<span
                                                            class="changedAt"><i class="fa-solid fa-pen"></i></span>

                                                    </time></span>
                                                <span class='task__livrable'><a href=""><i
                                                            class="fa-solid fa-code-branch"></i></a></span>
                                            </div>
                                        </div>
                                        <div class='task draggable' draggable='true'>
                                            <div class="task__tags">
                                                <a href="" class="issue_mention envalidation">
                                                    <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                                                    Besoin <span>#3</span>
                                                </a>
                                                <img src="../assets/imgs/25231.png" alt="" class="issue_mention_img">

                                            </div>
                                            <p>Move that one image 5px down to make Phil Happy.</p>
                                            <div class='task__stats'>
                                                <span>P0</span>
                                                <span><time datetime="2021-11-24T20:00:00"><i
                                                            class="fas fa-flag mx-2"></i>Nov 24 /<span
                                                            class="changedAt"><i class="fa-solid fa-pen"></i></span>

                                                    </time></span>
                                                <span class='task__livrable'><a href=""><i
                                                            class="fa-solid fa-code-branch"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='project-column-done mx-2 my-2 parent-div'>
                                        <div class='project-column-heading my-2'>
                                            <h2 class='project-column-heading__title'>Terminé</h2>
                                        </div>

                                        <div class='task draggable' draggable='true'>
                                            <div class="task__tags">
                                                <a href="" class="issue_mention done">
                                                    <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                                                    Besoin <span>#3</span>
                                                </a>
                                                <img src="../assets/imgs/25231.png" alt="" class="issue_mention_img">

                                            </div>
                                            <p>Send Advert illustrations over to production company.</p>
                                            <div class='task__stats'>
                                                <span>P0</span>
                                                <span><time datetime="2021-11-24T20:00:00"><i
                                                            class="fas fa-flag mx-2"></i>Nov 24 /<span
                                                            class="changedAt"><i class="fa-solid fa-pen"></i></span>

                                                    </time></span>
                                                <span class='task__livrable'><a href=""><i
                                                            class="fa-solid fa-code-branch"></i></a></span>
                                            </div>
                                        </div>

                                        <div class='task draggable' draggable='true'>
                                            <div class="task__tags">
                                                <a href="" class="issue_mention done">
                                                    <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                                                    Besoin <span>#3</span>
                                                </a>
                                                <img src="../assets/imgs/25231.png" alt="" class="issue_mention_img">

                                            </div>
                                            <p>Dawn wants to move the text 3px to the right.</p>
                                            <div class='task__stats'>
                                                <span>P0</span>
                                                <span><time datetime="2021-11-24T20:00:00"><i
                                                            class="fas fa-flag mx-2"></i>Nov 24 /<span
                                                            class="changedAt"><i class="fa-solid fa-pen"></i></span>

                                                    </time></span>
                                                <span class='task__livrable'><a href=""><i
                                                            class="fa-solid fa-code-branch"></i></a></span>
                                            </div>
                                        </div>

                                        <div class='task draggable' draggable='true'>
                                            <div class="task__tags">
                                                <a href="" class="issue_mention done">
                                                    <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                                                    Besoin <span>#3</span>
                                                </a>
                                                <img src="../assets/imgs/25231.png" alt="" class="issue_mention_img">

                                            </div>
                                            <p>Amend the contract details.</p>
                                            <div class='task__stats'>
                                                <span>P0</span>
                                                <span>
                                                    <time datetime="2021-11-24T20:00:00"><i
                                                            class="fas fa-flag mx-2"></i>Nov 24 /<span
                                                            class="changedAt"><i class="fa-solid fa-pen"></i></span>

                                                    </time>
                                                </span>
                                                <span class='task__livrable'><a href=""><i
                                                            class="fa-solid fa-code-branch"></i></a>
                                                </span>
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
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include_once '../layouts/footer.php' ?>