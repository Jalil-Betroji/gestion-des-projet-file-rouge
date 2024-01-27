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
                                    <a href="../project/index.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tous les Projets</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../projects/web/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Projets Web</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../projects/mobile/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Projets Mobiles</p>
                                    </a>
                                </li>

                            </ul>
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


            <section class="content fullWidth">


                <div class="card ">
                    <div role="row" class="Box-sc-g0xbh4-0 krLHWI" style="display: flex; width: 100%;">
                        <div colspan="1" role="cell" class="Box-sc-g0xbh4-0"
                            style="display: inline-block; box-sizing: border-box; width: 60px; position: relative; min-width: 60px; height: 34px;">
                        </div>
                        <div role="columnheader" aria-colspan="1" colspan="1" class="Box-sc-g0xbh4-0 jAzdJt readonly"
                            data-testid="TableColumnHeader{id: Title}" aria-sort="none"
                            style="display: inline-block; box-sizing: border-box; width: 330px; position: relative; min-width: 330px; height: 34px;">
                            <div class="Box-sc-g0xbh4-0 hPNYPR"><span class="Text-sc-17v1xeu-0 ewHzJo">Title</span>
                                <div class="Box-sc-g0xbh4-0 PoRnp"><button data-component="IconButton" type="button"
                                        aria-label="Title column options" data-testid="Title-column-menu-trigger"
                                        id=":r34:" aria-haspopup="true" tabindex="0" data-size="small"
                                        data-no-visuals="true" class="types__StyledButton-sc-ws60qy-0 fWMZzh"><svg
                                            aria-hidden="true" focusable="false" role="img"
                                            class="octicon octicon-kebab-horizontal" viewBox="0 0 16 16" width="16"
                                            height="16" fill="currentColor"
                                            style="display: inline-block; user-select: none; vertical-align: text-bottom; overflow: visible;">
                                            <path
                                                d="M8 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3ZM1.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm13 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z">
                                            </path>
                                        </svg></button></div>
                            </div>
                        </div>
                        <div role="columnheader" aria-colspan="1" colspan="1" class="Box-sc-g0xbh4-0 jAzdJt readonly"
                            data-testid="TableColumnHeader{id: 72326910}" aria-sort="none"
                            style="display: inline-block; box-sizing: border-box; width: 86px; position: relative; min-width: 86px; height: 34px;">
                            <div class="Box-sc-g0xbh4-0 ewdlSd"><span class="Text-sc-17v1xeu-0 ewHzJo">Priorité</span>
                                <div class="Box-sc-g0xbh4-0 PoRnp">
                                    <div data-testid="grouped-label-Priorité" class="Box-sc-g0xbh4-0 PWfdx"><svg
                                            aria-hidden="true" focusable="false" role="img" class="Octicon-sc-9kayk9-0"
                                            viewBox="0 0 16 16" width="16" height="16" fill="currentColor"
                                            style="display: inline-block; user-select: none; vertical-align: text-bottom; overflow: visible;">
                                            <path
                                                d="M16 10.75v2.5A1.75 1.75 0 0 1 14.25 15H1.75A1.75 1.75 0 0 1 0 13.25v-2.5C0 9.784.784 9 1.75 9h12.5c.966 0 1.75.784 1.75 1.75Zm0-8v2.5A1.75 1.75 0 0 1 14.25 7H1.75A1.75 1.75 0 0 1 0 5.25v-2.5C0 1.784.784 1 1.75 1h12.5c.966 0 1.75.784 1.75 1.75Zm-1.75-.25H1.75a.25.25 0 0 0-.25.25v2.5c0 .138.112.25.25.25h12.5a.25.25 0 0 0 .25-.25v-2.5a.25.25 0 0 0-.25-.25Zm0 8H1.75a.25.25 0 0 0-.25.25v2.5c0 .138.112.25.25.25h12.5a.25.25 0 0 0 .25-.25v-2.5a.25.25 0 0 0-.25-.25Z">
                                            </path>
                                        </svg></div><button data-component="IconButton" type="button"
                                        aria-label="Priorité column options" data-testid="Priorité-column-menu-trigger"
                                        id=":r36:" aria-haspopup="true" tabindex="0" data-size="small"
                                        data-no-visuals="true" class="types__StyledButton-sc-ws60qy-0 fWMZzh"><svg
                                            aria-hidden="true" focusable="false" role="img"
                                            class="octicon octicon-kebab-horizontal" viewBox="0 0 16 16" width="16"
                                            height="16" fill="currentColor"
                                            style="display: inline-block; user-select: none; vertical-align: text-bottom; overflow: visible;">
                                            <path
                                                d="M8 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3ZM1.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm13 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z">
                                            </path>
                                        </svg></button>
                                </div>
                            </div>
                        </div>
                        <div role="columnheader" aria-colspan="1" colspan="1" class="Box-sc-g0xbh4-0 jAzdJt readonly"
                            data-testid="TableColumnHeader{id: Status}" aria-sort="descending"
                            style="display: inline-block; box-sizing: border-box; width: 118px; position: relative; min-width: 118px; height: 34px;">
                            <div class="Box-sc-g0xbh4-0 ewdlSd"><span class="Text-sc-17v1xeu-0 ewHzJo">Status</span>
                                <div class="Box-sc-g0xbh4-0 PoRnp"><button type="button"
                                        aria-label="Change sort direction to ascending"
                                        data-testid="sorted-label-Status" data-size="small" data-no-visuals="true"
                                        class="types__StyledButton-sc-ws60qy-0 gVtBPS"
                                        style="--button-color: fg.muted;"><span data-component="buttonContent"
                                            class="Box-sc-g0xbh4-0 kkrdEu"><span data-component="text"><span
                                                    style="display: inline-flex; align-items: center; vertical-align: text-bottom;"><svg
                                                        aria-hidden="true" focusable="false" role="img"
                                                        class="octicon octicon-sort-desc" viewBox="0 0 16 16" width="16"
                                                        height="16" fill="currentColor"
                                                        style="display: inline-block; user-select: none; vertical-align: text-bottom; overflow: visible;">
                                                        <path
                                                            d="M0 4.25a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5H.75A.75.75 0 0 1 0 4.25Zm0 4a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 0 1.5H.75A.75.75 0 0 1 0 8.25Zm0 4a.75.75 0 0 1 .75-.75h2.5a.75.75 0 0 1 0 1.5H.75a.75.75 0 0 1-.75-.75ZM13.5 10h2.25a.25.25 0 0 1 .177.427l-3 3a.25.25 0 0 1-.354 0l-3-3A.25.25 0 0 1 9.75 10H12V3.75a.75.75 0 0 1 1.5 0V10Z">
                                                        </path>
                                                    </svg></span></span></span></button><button
                                        data-component="IconButton" type="button" aria-label="Status column options"
                                        data-testid="Status-column-menu-trigger" id=":r38:" aria-haspopup="true"
                                        tabindex="0" data-size="small" data-no-visuals="true"
                                        class="types__StyledButton-sc-ws60qy-0 fWMZzh"><svg aria-hidden="true"
                                            focusable="false" role="img" class="octicon octicon-kebab-horizontal"
                                            viewBox="0 0 16 16" width="16" height="16" fill="currentColor"
                                            style="display: inline-block; user-select: none; vertical-align: text-bottom; overflow: visible;">
                                            <path
                                                d="M8 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3ZM1.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm13 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z">
                                            </path>
                                        </svg></button></div>
                            </div>
                        </div>
                        <div role="columnheader" aria-colspan="1" colspan="1" class="Box-sc-g0xbh4-0 jAzdJt readonly"
                            data-testid="TableColumnHeader{id: 71007654}" aria-sort="none"
                            style="display: inline-block; box-sizing: border-box; width: 129px; position: relative; min-width: 129px; height: 34px;">
                            <div class="Box-sc-g0xbh4-0 hPNYPR"><span class="Text-sc-17v1xeu-0 ewHzJo">Phase</span>
                                <div class="Box-sc-g0xbh4-0 PoRnp"><button data-component="IconButton" type="button"
                                        aria-label="Phase column options" data-testid="Phase-column-menu-trigger"
                                        id=":r3a:" aria-haspopup="true" tabindex="0" data-size="small"
                                        data-no-visuals="true" class="types__StyledButton-sc-ws60qy-0 fWMZzh"><svg
                                            aria-hidden="true" focusable="false" role="img"
                                            class="octicon octicon-kebab-horizontal" viewBox="0 0 16 16" width="16"
                                            height="16" fill="currentColor"
                                            style="display: inline-block; user-select: none; vertical-align: text-bottom; overflow: visible;">
                                            <path
                                                d="M8 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3ZM1.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm13 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z">
                                            </path>
                                        </svg></button></div>
                            </div>
                        </div>
                        <div role="columnheader" aria-colspan="1" colspan="1" class="Box-sc-g0xbh4-0 jAzdJt readonly"
                            data-testid="TableColumnHeader{id: Assignees}" aria-sort="none"
                            style="display: inline-block; box-sizing: border-box; width: 148px; position: relative; min-width: 148px; height: 34px;">
                            <div class="Box-sc-g0xbh4-0 hPNYPR"><span class="Text-sc-17v1xeu-0 ewHzJo">Assignees</span>
                                <div class="Box-sc-g0xbh4-0 PoRnp"><button data-component="IconButton" type="button"
                                        aria-label="Assignees column options"
                                        data-testid="Assignees-column-menu-trigger" id=":r3c:" aria-haspopup="true"
                                        tabindex="0" data-size="small" data-no-visuals="true"
                                        class="types__StyledButton-sc-ws60qy-0 fWMZzh"><svg aria-hidden="true"
                                            focusable="false" role="img" class="octicon octicon-kebab-horizontal"
                                            viewBox="0 0 16 16" width="16" height="16" fill="currentColor"
                                            style="display: inline-block; user-select: none; vertical-align: text-bottom; overflow: visible;">
                                            <path
                                                d="M8 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3ZM1.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm13 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z">
                                            </path>
                                        </svg></button></div>
                            </div>
                        </div>
                        <div role="columnheader" aria-colspan="1" colspan="1" class="Box-sc-g0xbh4-0 jAzdJt readonly"
                            data-testid="TableColumnHeader{id: Repository}" aria-sort="none"
                            style="display: inline-block; box-sizing: border-box; width: 185px; position: relative; min-width: 185px; height: 34px;">
                            <div class="Box-sc-g0xbh4-0 hPNYPR"><span class="Text-sc-17v1xeu-0 ewHzJo">Repository</span>
                                <div class="Box-sc-g0xbh4-0 PoRnp"><button data-component="IconButton" type="button"
                                        aria-label="Repository column options"
                                        data-testid="Repository-column-menu-trigger" id=":r3e:" aria-haspopup="true"
                                        tabindex="0" data-size="small" data-no-visuals="true"
                                        class="types__StyledButton-sc-ws60qy-0 fWMZzh"><svg aria-hidden="true"
                                            focusable="false" role="img" class="octicon octicon-kebab-horizontal"
                                            viewBox="0 0 16 16" width="16" height="16" fill="currentColor"
                                            style="display: inline-block; user-select: none; vertical-align: text-bottom; overflow: visible;">
                                            <path
                                                d="M8 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3ZM1.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm13 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z">
                                            </path>
                                        </svg></button></div>
                            </div>
                        </div>
                        <div role="columnheader" aria-colspan="1" colspan="1" class="Box-sc-g0xbh4-0 jAzdJt readonly"
                            data-testid="TableColumnHeader{id: Linked pull requests}" aria-sort="none"
                            style="display: inline-block; box-sizing: border-box; width: 173px; position: relative; min-width: 173px; height: 34px;">
                            <div class="Box-sc-g0xbh4-0 hPNYPR"><span class="Text-sc-17v1xeu-0 ewHzJo">Linked pull
                                    requests</span>
                                <div class="Box-sc-g0xbh4-0 PoRnp"><button data-component="IconButton" type="button"
                                        aria-label="Linked pull requests column options"
                                        data-testid="Linked pull requests-column-menu-trigger" id=":r3g:"
                                        aria-haspopup="true" tabindex="0" data-size="small" data-no-visuals="true"
                                        class="types__StyledButton-sc-ws60qy-0 fWMZzh"><svg aria-hidden="true"
                                            focusable="false" role="img" class="octicon octicon-kebab-horizontal"
                                            viewBox="0 0 16 16" width="16" height="16" fill="currentColor"
                                            style="display: inline-block; user-select: none; vertical-align: text-bottom; overflow: visible;">
                                            <path
                                                d="M8 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3ZM1.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm13 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z">
                                            </path>
                                        </svg></button></div>
                            </div>
                        </div>
                        <div role="columnheader" aria-colspan="1" tabindex="-1" colspan="1"
                            data-testid="TableColumnHeader{id: add-column}" class="Box-sc-g0xbh4-0 jAzdJt"
                            style="display: inline-block; box-sizing: border-box; width: 50px; position: relative; min-width: 50px; height: 34px;">
                            <div>
                                <button data-component="IconButton" type="button"
                                    aria-label="Add field" data-testid="column-visibility-menu-trigger"
                                    data-size="small" data-no-visuals="true"
                                    ></button>
                                </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <?php include_once '../layouts/footer.php' ?>