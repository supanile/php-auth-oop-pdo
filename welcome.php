<?php include_once('header.php'); ?>

<?php include_once('nav.php'); ?>

<?php
if (!isset($_SESSION['userid'])) {
    header("Location: signin.php");
    exit();
}

include_once("config/Database.php");
include_once("class/UserLogin.php");

$connectDB = new Database();
$db = $connectDB->getConnection();

$user = new UserLogin($db);

if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
    $userData = $user->userData($userid);
}
?>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Welcome, <?php echo htmlspecialchars($userData['name']); ?>!</h1>
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Your Profile</h5>
                    <p class="card-text">Email: <?php echo htmlspecialchars($userData['email']); ?></p>
                    <p class="card-text">Member since:
                        <?php
                        if (isset($userData['created_at']) && !empty($userData['created_at'])) {
                            echo date('F j, Y', strtotime($userData['created_at']));
                        } else {
                            echo "Information not available";
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Getting Started</h5>
                    <p class="card-text">Welcome to Authentication System! Here are some things you can do:</p>
                    <ul>
                        <li>Explore our OOP tutorials</li>
                        <li>Join a coding challenge</li>
                        <li>Connect with other learners</li>
                    </ul>
                    <a href="https://github.com/supanile" class="btn btn-primary">Start Learning</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Quick Stats</h5>
                    <p class="card-text">Courses Completed: 0</p>
                    <p class="card-text">Coding Challenges: 0</p>
                    <p class="card-text">Points Earned: 0</p>
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Upcoming Events</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">OOP Basics Webinar - May 15</li>
                        <li class="list-group-item">Code Review Session - May 22</li>
                        <li class="list-group-item">Advanced OOP Workshop - June 5</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>