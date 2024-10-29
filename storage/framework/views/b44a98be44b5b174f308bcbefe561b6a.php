<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nashik School of Excellence</title>

        <!-- Bootstrap 5 CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet">

        <!-- Bootstrap Icons CDN -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

        <!-- Google Font - Poppins -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

        <!-- External CSS -->
        <link rel="stylesheet" href="./public/assets/css/style.css">
    </head>

    <body>

        <!-- Navbar -->
        <nav class="navbar sticky-top navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand text-white" href="#">
                    <img src="<?php echo e(('public/assets/images/NIT-logo.png')); ?>"
                        alt="Nashik School Logo" width="50">
                </a>
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('/')); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('/aboutpage')); ?>">About us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('/admissionpage')); ?>">Admissions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo e(route('/facilitiespage')); ?>">Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('/schedulevisitpage')); ?>">More</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('/morefaqpage')); ?>">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('/moreparentpage')); ?>">More-parents</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav><?php /**PATH C:\xampp\htdocs\NIT_School\resources\views/Front/layout/navbar.blade.php ENDPATH**/ ?>