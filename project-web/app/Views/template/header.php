?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>Pemrograman Web</title>



</head>

<body>
    <header id="header" class="header fixed-top align-items-center d-flex">
        <div class="d-flex align-items-center justify-content-between">
            <i class="bi bi-list toggle-sidebar-btn"></i>
            <a href="dashboard" class="logo d-flex align-items-center">
                <i class="fa fa-hospital" style="font-size: xxx-large; margin: 0px 5px 0px 15px;"></i>
                <span class="d-none d-lg-block">ITKlinik</span>
            </a>
        </div>
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link nav-icon search-bar-toggle " href="https://www.instagram.com">
                        <i class="bi bi-instagram"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-icon search-bar-toggle " href="https://www.facebook.com">
                        <i class="bi bi-facebook"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-icon search-bar-toggle " href="https://www.twitter.com">
                        <i class="bi bi-twitter"></i>
                    </a>
                </li>
                <li class="nav-item pe-3">
                    <a href="logout" class="nav-link nav-profile d-flex align-items-center pe-0">
                        <button type=" button" class="btn btn-outline-danger">Log Out</button>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <aside id="sidebar" class="sidebar">
        <div class="admin">
            <div class="adminPhoto">
                <div class="text-center">
                    <i class="bi bi-person-circle text-black" style="font-size: 80px;"></i>
                </div>
                <div class="text-center text-white" style="padding-bottom: 20px;">
                    <span>Welcome</span>
                </div>

            </div>
        </div>
        <ul class="sidebar-nav" id="sidebar-nav" style="padding-top: 10px;">
            <li class="nav-heading">Menu</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="pelayanan">
                    <i class="fa fa-stethoscope"></i>
                    <span>Jenis Pelayanan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="data-antrian">
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Data Antrian</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="loket">
                    <i class="bi bi-person-workspace"></i>
                    <span>Loket Pelayanan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="report">
                    <i class="bi bi-file-text"></i>
                    <span>Report</span>
                </a>
            </li>
    </aside>