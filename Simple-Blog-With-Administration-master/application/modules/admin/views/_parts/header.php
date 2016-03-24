<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administration Panel</title>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-tagsinput.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/custum.css') ?>">
        <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?= base_url() ?>">Blog Home</a></li>
                            <?php if ($this->session->userdata('logged_in')) { ?>
                                <li><a href="<?= base_url('admin') ?>">Admin Home</a></li>
                                <li><a href="<?= base_url('admin/allPosts') ?>">Edit Posts</a></li>
                            <?php } ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><?= $this->session->userdata('logged_in') ? '<a href="' . base_url('admin/logout') . '">Logout</a>' : '' ?></li>
                        </ul>
                    </div>
                </div>
            </nav>
