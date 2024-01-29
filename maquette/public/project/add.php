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
                            <h1>Projets</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Ajouter Projet</li>
                                <li class="breadcrumb-item"><a href="./index.html">Accueil</a> </li>
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
                                    <h3 class="card-title">Ajouter un projet</h3>
                                </div>
                                <form>
                                    <div class="card-body" id="addProjectForm">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nom</label>
                                            <input name="nom" type="text" class="form-control" id="exampleInputEmail1"
                                                placeholder="Nom">
                                        </div>
                                        <div class="form-group">
                                            <label for="tagInput">Tags</label>
                                            <select id="tagInput" class="form-control" multiple="multiple"></select>
                                        </div>


                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea></textarea>
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
                                        </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="referenceEditor1">Contexte De Projet</label>
                                            <textarea>
                                        </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Modalités pédagogiques</label>
                                            <input name="Modalités pédagogiques" type="text" class="form-control"
                                                id="exampleInputEmail1" placeholder="Modalités pédagogiques">
                                        </div>
                                        <div class="form-group">
                                            <label for="livrable">Type de livrable</label>
                                            <input name="livrable" type="text" class="form-control"
                                                id="exampleInputEmail1" placeholder="Type de livrable">
                                        </div>
                                        <div class="form-group">
                                            <label for="livrable">Compétences visées</label>
                                            <select name="web-list[]" id="web-list" class="form-control"
                                                multiple="multiple">
                                                <option value="1">C1. Maquetter une application mobile</option>
                                                <option value="2">C2. Manipuler une base de données - perfectionnement
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
                                                placeholder="Date début">
                                        </div>
                                        <div class="form-group">
                                            <label for="date">Date de fin</label>
                                            <input name="date" type="date" class="form-control" id="exampleInputEmail1"
                                                placeholder="Date de fin">
                                        </div>
                                        <div class="form-group" id="sprintToAppendOn">
                                            <label for="livrable">Sprints(Optionnelle)</label>
                                            <select name="sprint" id="sprint" class="form-control">
                                                <option value="Choisir le nombre de sprints" selected>Choisir le nombre
                                                    de sprints</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
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
        const sprintBtn = document.getElementById('sprint');
        const addProjectForm = document.getElementById('addProjectForm');
        const sprintToAppendOn = document.getElementById('sprintToAppendOn');

        sprintBtn.addEventListener('change', () => {
            // Clear existing content under sprintToAppendOn
            sprintToAppendOn.innerHTML = '';

            for (let i = 1; i <= sprintBtn.value; i++) {
                // Create elements
                const nameLabel = document.createElement('label');
                nameLabel.setAttribute('for', `exampleInputEmail1-${i}`);
                nameLabel.textContent = `Nom de sprint ${i}`;

                const nameInput = document.createElement('input');
                nameInput.setAttribute('name', 'nom');
                nameInput.setAttribute('type', 'text');
                nameInput.setAttribute('class', 'form-control');
                nameInput.setAttribute('id', `exampleInputEmail1-${i}`);
                nameInput.setAttribute('placeholder', 'Nom');

                const descriptionLabel = document.createElement('label');
                descriptionLabel.setAttribute('for', `description-${i}`);
                descriptionLabel.textContent = `Sprint ${i} Description`;

                const descriptionTextarea = document.createElement('textarea');

                const formGroup1 = document.createElement('div');
                formGroup1.setAttribute('class', 'form-group');
                formGroup1.appendChild(nameLabel);
                formGroup1.appendChild(nameInput);

                const formGroup2 = document.createElement('div');
                formGroup2.setAttribute('class', 'form-group');
                descriptionTextarea.setAttribute('id', `sprint${i}`)
                formGroup2.appendChild(descriptionLabel);
                formGroup2.appendChild(descriptionTextarea);

                // Append form groups to sprintToAppendOn
                sprintToAppendOn.appendChild(formGroup1);
                sprintToAppendOn.appendChild(formGroup2);
                tinymce.init({
                    selector: `#sprint${i}`,
                    // Other TinyMCE configurations...
                });
            }
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
            $(document).ready(function () {
                $('#tagInput').select2({
                    tags: true,
                    tokenSeparators: [',', ' '],
                    multiple: true
                });
            });
        });
    </script>