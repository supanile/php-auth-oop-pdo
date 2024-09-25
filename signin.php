<?php include_once('header.php'); ?>

<?php include_once('nav.php'); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Sign In</h2>

                    <?php 
                        include_once("config/Database.php");
                        include_once("class/UserLogin.php");
                        include_once("class/Utils.php");

                        $connectDB = new Database();
                        $db = $connectDB->getConnection();

                        $user = new UserLogin($db);
                        $bs = new Bootstrap();

                        if (isset($_POST['signin'])) {
                            $user->setEmail($_POST['email']);
                            $user->setPassword($_POST['password']);

                            if ($user->emailNotExists()) {
                                $bs->displayAlert("Email does not exist", "danger");
                            } else {
                                if ($user->verifyPassword()) {
                                    $bs->displayAlert("Login successful", "success");
                                } else {
                                    $bs->displayAlert("Incorrect password", "danger");
                                }
                            }
                        }
                    ?>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter your password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="signin" class="btn btn-primary btn-lg">Sign In</button>
                        </div>
                    </form>

                    <p class="text-center mt-3">Don't have an account yet? <a href="signup.php">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>