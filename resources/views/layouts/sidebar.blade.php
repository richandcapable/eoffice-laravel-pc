<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-oCz4P7fI6W6Gq0lYtLZBXuhoqq5Ll7TNh0E+P6TVWOepNlHc/k9Hf4o1enExKE3S" crossorigin="anonymous">
</head>
<body>
    <div id="wrapper">
        <ul class="navbar-nav bg-white sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/visimisi">
                 <div class="sidebar-brand-icon">
                    <img src="img/Banjarbaru.png" width="40" height="50">
                </div>

                <div class="sidebar-brand-icon">
                    <img src="img/logo.png" width="150" height="45">
                </div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="text-gray-600">Admin</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading text-gray-600" style="font-size: 12px;">
                --SICERDAS
            </div>

            <!-- Nav Item - RPJMD -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#s" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span class="text-gray-600">
                        <i class="fas fa-folder"></i>
                        RPJMD
                        <i class="fas fa-chevron-down text-secondary"></i>
                    </span>
                </a>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item text-secondary" href="/visimisi">Visi Misi</a>
                        <a class="collapse-item text-secondary" href="/sasaran">Sasaran</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
    </div>

    <!-- Bootstrap JavaScript and jQuery (Add these scripts at the end of your body tag) -->
</body>
</html>
