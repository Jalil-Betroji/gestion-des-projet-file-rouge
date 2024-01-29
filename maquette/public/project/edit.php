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
                                    <a href="index.php" class="nav-link active">
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
                            <h1>Modifier projet</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../home.php">Accueil</a> </li>
                                <li class="breadcrumb-item active">Modifier Projet</li>
                            </ol>
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
                                    <h3 class="card-title">Développer les interfaces de l'application de suivi
                                        budgétaire</h3>
                                </div>
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nom</label>
                                            <input name="nom" type="text" class="form-control" id="exampleInputEmail1"
                                                placeholder="Nom"
                                                value="Développer les interfaces de l'application de suivi budgétaire">
                                        </div>
                                        <div class="form-group">
                                            <label for="tagInput">Tags</label>
                                            <select id="tagInput" class="form-control" multiple="multiple">
                                                <option selected value="HTML5">HTML5</option>
                                                <option selected value="JavaScript">JavaScript</option>
                                                <option selected value="UX">UX</option>
                                                <option selected value="UI">UI</option>
                                                <option selected value="CSS3">CSS3</option>
                                                <option selected value="React">React</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea>Ce brief a pour objectif de créer une application de suivi de budget en utilisant React JS</textarea>
                                            <small class="form-text text-muted">Fournissez une description détaillée du
                                                projet.</small>
                                        </div>



                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Secteur</label>
                                            <select name="nom" id="selectProject" class="form-control">
                                                <option value="Development web">Développement Web</option>
                                                <option value="Development web">Développement Mobile</option>
                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label for="referenceEditor">Références</label>
                                            <textarea>
                                            <a href="https://mdbootstrap.com/docs/standard/components/dropdowns/" target="_blank">
                                                Développeur web et web mobile
                                            </a>
                                        </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="referenceEditor1">Contexte De Projet</label>
                                            <textarea>
                                            <h2>Contexte de projet</h2>
                                            <h3><strong>Fonctionnalités élémentaires :</strong></h3>
                                            <p>
                                                <strong>Enregistrement des dépenses : </strong>l'utilisateur peut enregistrer toutes ses dépenses pour 
                                                avoir une vue d'ensemble de ses dépenses. Enregistrement des revenus : l'utilisateur peut
                                                 également enregistrer tous ses revenus pour avoir une vue d'ensemble de ses transactions. 
                                                 Catégorisation des transactions : l'utilisateurl peut catégoriser ses dépenses en fonction 
                                                 de différents critères (alimentation, logement, transport, loisirs, etc.) pour mieux comprendre 
                                                 ses habitudes de dépenses et identifier les domaines où il peut économiser. 
                                                 Suivi du budget : l'application peut aider l'utilisateur à suivre l'évolution de son budget.

                                                <strong>Interfaces :</strong>
                                                <strong>++Page d'accueil :++</strong>

                                                La page d'accueil affiche un aperçu rapide du solde actuel de l'utilisateur,
                                                ainsi que le total des dépenses et le total des revenus. 
                                                La page d'accueil permet aussi à l'utilisateur d'ajouter une nouvelle transaction. 
                                                L'utilisateur devra spécifier le montant, le motif (une brève description), 
                                                la catégorie (logement, alimentation, transport, loisirs, personnel, autres) 
                                                ainsi que son type (dépense ou revenu). La page d'accueil affiche toutes les 
                                                transactions de l'utilisateur, triée par date d'ajout. Les dépenses s'affichent 
                                                en couleur rouge avec un signe "-". Les revenus s'affichent en couleur verte avec 
                                                un signe "+". <strong>++Page de statistiques : (optionnelle)++ </strong>La page de statistiques 
                                                affiche les transactions de l'utilisateur par catégorie et par type sous forme 
                                                tabulaire ou graphique.
                                            </p>


                                        </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Modalités pédagogiques</label>
                                            <input name="Modalités pédagogiques" type="text" class="form-control"
                                                id="exampleInputEmail1" placeholder="Modalités pédagogiques"
                                                value="Travail à faire individuellement en 10 jours">
                                        </div>
                                        <div class="form-group">
                                            <label for="livrable">Type de livrable</label>
                                            <input name="livrable" type="text" class="form-control"
                                                id="exampleInputEmail1" placeholder="Type de livrable"
                                                value="Code source">
                                        </div>
                                        <div class="form-group">
                                            <label for="livrable">Compétences visées</label>
                                            <select name="web-list[]" id="web-list" class="form-control"
                                                multiple="multiple">
                                                <option value="1" selected>C1. Maquetter une application mobile</option>
                                                <option value="2" selected>C2. Manipuler une base de données -
                                                    perfectionnement
                                                </option>
                                                <option value="3">C3. Développer la partie back-end d’une application
                                                    web ou web mobile - perfectionnement</option>
                                                <option value="4">C4. Collaborer à la gestion d’un projet informatique
                                                    et à l’organisation de l’environnement de développement -
                                                    perfectionnement</option>
                                                <option value="5">C5. Développer une application mobile native, avec
                                                    Android et React Native</option>
                                                <option value="6">C6. Préparer et exécuter les plans de tests d’une
                                                    application</option>
                                                <option value="7">C7. Préparer et exécuter le déploiement d’une
                                                    application web et mobile - perfectionnement</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="livrable">Assignée à des personnes spécifiques
                                                (Optionnelle)</label>
                                            <select name="web-list[]" id="web-list1" class="form-control"
                                                multiple="multiple">
                                                <option value="BETROJI Jalil">BETROJI Jalil</option>
                                                <option value="BOUKHAR Soufiane">BOUKHAR Soufiane</option>
                                                <option value="ACHOUA Hamid">ACHOUA Hamid</option>
                                                <option value="LAMCHATAB Amin">LAMCHATAB Amin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="date">Date début</label>
                                            <input name="date" type="date" class="form-control" id="exampleInputEmail1"
                                                placeholder="Date début" value="2023-04-27">
                                        </div>
                                        <div class="form-group">
                                            <label for="date">Date de fin</label>
                                            <input name="date" type="date" class="form-control" id="exampleInputEmail1"
                                                placeholder="Date de fin" value="2023-05-10">
                                        </div>
                                        <form>
                                            <div class="form-group">
                                                <label for="imageInput">Choose Image</label>
                                                <input type="file" class="form-control-file" id="imageInput"
                                                    accept="image/*">
                                            </div>

                                            <button type="submit" class="btn btn-primary">Upload Image</button>
                                        </form>

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
    <!-- Include Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js" refer></script>
    <script>
        // Initialize Quill
        var quill = new Quill('#referenceEditor', {
            theme: 'snow',  // Choose your preferred theme
        });
        var quill1 = new Quill('#referenceEditor1', {
            theme: 'snow',  // Choose your preferred theme
        });

        // Listen for content changes and update the hidden input
        quill.on('text-change', function () {
            document.getElementById('referenceContent').value = quill.root.innerHTML;
        });
        quill1.on('text-change', function () {
            document.getElementById('referenceContent1').value = quill.root.innerHTML;
        });
    </script>
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
            $('#web-list').select2({
                tags: true,
                tokenSeparators: [',', ' '],
                multiple: true
            });
            $('#web-list1').select2({
                tags: true,
                tokenSeparators: [',', ' '],
                multiple: true
            });
            $('#tagInput').select2({
                tags: true,
                tokenSeparators: [',', ' '],
                multiple: true
            });
        });
    </script>