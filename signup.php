<?php include_once('header.php'); ?>

<?php include_once('nav.php'); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Sign Up</h2>

                    <?php 
                        include_once("config/Database.php");
                        include_once("class/UserRegister.php");
                        include_once("class/Utils.php");

                        $connectDB = new Database();
                        $db = $connectDB->getConnection();

                        $user = new UserRegister($db);
                        $bs = new Bootstrap();

                        if (isset($_POST['signup'])) {
                            $user->setName($_POST['name']);
                            $user->setEmail($_POST['email']);
                            $user->setPassword($_POST['password']);
                            $user->setConfirmPassword($_POST['confirm_password']);

                            if (!$user->validatePassword()) {
                                $bs->displayAlert("Passwords do not match", "danger");
                            }

                            if (!$user->checkPasswordLength()) {
                                $bs->displayAlert("Password must be at least 6 characters long.", "danger");
                            }

                            if ($user->checkEmail()) {
                                $bs->displayAlert("This email already exists. Please try another.", "danger");
                            }

                            if ($user->createUser()) {
                                $bs->displayAlert("User Created Successfully.", "success");
                            } else {
                                $bs->displayAlert("Failed to create a user.", "danger");
                            }
                        }
                    ?>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" id="confirm_password" aria-describedby="confirm password" placeholder="Confirm your password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="signup" class="btn btn-primary btn-lg">Sign Up</button>
                        </div>
                    </form>

                    <p class="text-center mt-3">Already have an account? <a href="signin.php">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>