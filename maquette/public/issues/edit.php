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
                            <a href="../members/index.php" class="nav-link">
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


        <div class="content-wrapper" style="min-height: 1302.4px;">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <a href="index.php" class="btn btn-default float-right">
                                Reteur</a>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Modifier un Problème</h3>
                                </div>
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nom</label>
                                            <input name="nom" type="text" class="form-control" id="exampleInputEmail1"
                                                placeholder="Nom"
                                                value="gestion de rendez-vous / recherche sa marche pas bug new_issue">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Description</label>
                                            <textarea>
                                            gestion de rendez-vous / recherche sa marche pas bug new_issue
                                            </textarea>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Asignées</label>
                                            <select name="nom" id="selectMembers" class="form-control" multiple>
                                                <option value="BETROJI Jalil">BETROJI Jalil</option>
                                                <option value="BOUKHAR Soufiane">BOUKHAR Soufiane</option>
                                                <option value="ACHOUA Hamid">ACHOUA Hamid</option>
                                                <option value="LAMCHATAB Amine">LAMCHATAB Amine</option>
                                                <option value="BEN NASAR Adnan">BEN NASAR Adnan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Projet</label>
                                            <select name="nom" id="selectProject" class="form-control">
                                                <option value="CNMH" selected>CNMH</option>
                                                <option value="LMS">LMS</option>
                                                <option value="E-Commerce">E-Commerce</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Priority</label>
                                            <select name="nom" id="priority" class="form-control">
                                                <option value="P0" selected>P0</option>
                                                <option value="P1">P1</option>
                                                <option value="P2">P2</option>
                                            </select>
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
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#Issues').select2({
                tags: true,
                tokenSeparators: [',', ' '],
                multiple: true
            });
            $('#selectMembers').select2({
                tags: true,
                tokenSeparators: [',', ' '],
                multiple: true
            });
            $('#priority').select2({
                tags: true,
                tokenSeparators: [',', ' '],
                multiple: true
            });
        });
    </script>