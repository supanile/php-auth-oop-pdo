<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication System - OOP Learning</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #007bff, #0056b3);
            padding: 100px 0;
        }
        .feature-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .card {
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>

<?php include_once('header.php'); ?>

<?php include_once('nav.php'); ?>

<div class="container-fluid p-0">
    <!-- Hero Section -->
    <div class="hero-section text-white py-5 mb-5">
        <div class="container">
            <h1 class="display-3 fw-bold">Authentication System</h1>
            <p class="lead">Empowering your development journey with Object-Oriented Programming</p>
            <a href="https://github.com/supanile" class="btn btn-light btn-lg mt-3">Learn More</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <section id="about" class="mb-5">
                    <h2 class="display-5 mb-4">About Us</h2>
                    <p class="lead">We are passionate about teaching Object-Oriented Programming principles and helping developers build robust, scalable applications.</p>
                </section>

                <section id="features" class="mb-5">
                    <h2 class="display-5 mb-4">Key Features</h2>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card h-100 text-center">
                                <div class="card-body">
                                    <i class="fas fa-lock feature-icon text-primary"></i>
                                    <h5 class="card-title">Encapsulation</h5>
                                    <p class="card-text">Learn to bundle data and methods that operate on that data within a single unit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card h-100 text-center">
                                <div class="card-body">
                                    <i class="fas fa-sitemap feature-icon text-primary"></i>
                                    <h5 class="card-title">Inheritance</h5>
                                    <p class="card-text">Understand how to create new classes based on existing classes for code reusability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card h-100 text-center">
                                <div class="card-body">
                                    <i class="fas fa-random feature-icon text-primary"></i>
                                    <h5 class="card-title">Polymorphism</h5>
                                    <p class="card-text">Master the ability to use a single interface for different underlying forms.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4 shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Get Started</h5>
                        <p class="card-text">Ready to begin your OOP journey? Sign up now!</p>
                        <a href="signup.php" class="btn btn-primary btn-lg">Sign Up</a>
                    </div>
                </div>
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Already a member?</h5>
                        <p class="card-text">Access your account and continue learning.</p>
                        <a href="signin.php" class="btn btn-outline-primary btn-lg">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>