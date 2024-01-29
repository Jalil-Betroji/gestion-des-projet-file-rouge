<?php include_once '../layouts/head.php' ?>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <?php include_once '../layouts/nav.php' ?>
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
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
                  <a href="../project/index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tous les Projets</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="projectManagment.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Gestion des projets</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="../tasks/index.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Tâches
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../members/index.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Membres
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../teams/index.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Équipes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../labels/index.php" class="nav-link">
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
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Membres</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../home.php">Accueil</a></li>
                <li class="breadcrumb-item active">Membres</li>
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
            <div class="d-flex justify-content-between">

              <div class="input-group" style="width:auto;">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="projectFilter">
                    <i class="fa-solid fa-filter text-dark pr-2"></i>
                  </label>
                </div>

                <select class="custom-select" id="projectFilter">
                  <option selected disabled>Filtrer par group</option>
                  <option value="projet3">DWB 101</option>
                  <option value="projet3">DWB 102</option>
                  <option value="projet2">DWB 103</option>
                  <option value="projet2">DWB 104</option>
                  <option value="projet2">DMB 101</option>
                  <option value="projet2">DMB 102</option>
                  <option value="projet2">DMB 103</option>
                  <option value="projet2">DMB 104</option>
                </select>
                <div class="input-group mx-3" style="width:auto;">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="projectFilter">
                      <i class="fa-solid fa-calendar-days"></i>
                    </label>
                  </div>

                  <select class="custom-select" id="projectFilter">
                    <option selected disabled>Filtrer par année</option>
                    <option value="projet3">2023/2024</option>
                    <option value="projet3">2022/2023</option>
                    <option value="projet2">2021/2022</option>
                  </select>
                </div>
              </div>

              <div class=" p-0">
                <div class="input-group input-group-sm ">
                  <input type="text" name="table_search" class="form-control" placeholder="Search" id="membersSearch">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="card-body p-0">
            <?php include_once 'table.php' ?>
            <div class="card-footer clearfix" id="example2_paginate">
              <ul class="pagination pagination-sm m-0 float-right">

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