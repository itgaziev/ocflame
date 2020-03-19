<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $data['title'] ?></title>
    <? foreach ($data['links'] as $link): ?>
        <link href="<?= $link['href'] ?>" rel="<?= $link['rel'] ?>" <?= ($link['type']) ? 'type="'. $links['type'] .'"' : '' ?>>
    <? endforeach; ?>
    <? foreach ($data['styles'] as $style): ?>
        <link href="<?= $style['href'] ?>" rel="<?= $style['rel'] ?>">
    <? endforeach; ?>
    <? foreach ($data['scripts'] as $script): ?>
        <script src="<?= $script ?>"></script>
    <? endforeach; ?>
</head>
<body>
<div class="all-content-wrapper">
    <header>
        <nav class="navbar navbar-default">
            <!-- Search Bar -->
            <div class="search-bar">
                <div class="search-icon">
                    <i class="material-icons">search</i>
                </div>
                <input type="text" placeholder="Start typing...">
                <div class="close-search js-close-search">
                    <i class="material-icons">close</i>
                </div>
            </div>
            <!-- #END# Search Bar -->

            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="material-icons">swap_vert</i>
                    </button>
                    <a href="javascript:void(0);" class="left-toggle-left-sidebar js-left-toggle-left-sidebar">
                        <i class="material-icons">menu</i>
                    </a>
                    <!-- Logo -->
                    <a class="navbar-brand" href="/admin/">
                        <span class="logo-minimized">CMS</span>
                        <span class="logo">OC Flame CMS</span>
                    </a>
                    <!-- #END# Logo -->
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="javascript:void(0);" class="toggle-left-sidebar js-toggle-left-sidebar">
                                <i class="material-icons">menu</i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Call Search -->
                        <li>
                            <a href="javascript:void(0);" class="js-search" data-close="true">
                                <i class="material-icons">search</i>
                            </a>
                        </li>
                        <!-- #END# Call Search -->

                        <!-- Notifications -->
                        <li class="dropdown notification-menu">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="label-count">7</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">NOTIFICATIONS</li>
                                <li class="body">
                                    <ul class="menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-success">
                                                    <i class="material-icons">person_add</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>12 new members joined</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 14 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="javascript:void(0);">Смотреть все уведомления</a>
                                </li>
                            </ul>
                        </li>
                        <!-- #END# Notifications -->

                        <!-- User Menu -->
                        <li class="dropdown user-menu">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="/admin/assets/images/avatars/face2.jpg" alt="User Avatar" />
                                <span class="hidden-xs">Brandon Sanchez</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">
                                    <img src="/admin/assets/images/avatars/face2.jpg" alt="User Avatar" />
                                    <div class="user">
                                        Brandon Sanchez
                                        <div class="title">Front-end Developer</div>
                                    </div>
                                </li>
                                <li class="body">
                                    <ul>
                                        <li>
                                            <a href="../miscellaneous/profile.html">
                                                <i class="material-icons">account_circle</i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="material-icons">lock_open</i> Change Password
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <div class="row clearfix">
                                        <div class="col-xs-5">
                                            <a href="../examples/locked-screen.html" class="btn btn-default btn-sm btn-block">Log Off</a>
                                        </div>
                                        <div class="col-xs-2"></div>
                                        <div class="col-xs-5">
                                            <a href="javascript:void(0);" class="btn btn-default btn-sm btn-block">Log Out</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- #END# User Menu -->
                        <li class="pull-right">
                            <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">
                                <i class="material-icons">more_vert</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>