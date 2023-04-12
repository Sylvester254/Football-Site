<?php
session_start();
?>

<!DOCTYPE HTML>
<html>

    <head>
        <title>Manchester United Squad</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/custom.css" />
        <noscript>
            <link rel="stylesheet" href="assets/css/noscript.css" />
        </noscript>
        <link rel="icon" href="images/logo.png" type="image/png">
        
         <!-- Add the Bootstrap CSS link -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
    </head>

    <body class="contact is-preload">
        <div id="page-wrapper">
            <!-- Header -->
<header id="header" class="container-fluid">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h1 id="logo"><a href="club_details.php">Manchester <span>United</span></a></h1>
            </div>
            <div class="col">
                <nav id="nav" class="text-right">
                    <ul class="list-unstyled d-inline-flex mb-0">
                       <li class="current"><a href="club_details.php">Home</a></li>
                        <li class="submenu">
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="navbarDropdown">Discover</a>
                                <ul class="custom-dropdown-menu">
                                    <li><a href="club_news.php">Club News</a></li>
                                    <li><a href="squad.php">Our Squad</a></li>
                                    <li><a href="club_history.php">Club History</a></li>
                                    <li><a href="club_management.php">Club Management</a></li>
                                </ul>
                            </li>                
                         </li>
                        <li>
                            <?php if (isset($_SESSION['username'])): ?>
                                <span>Welcome,
                                    <?php echo $_SESSION['username']; ?>
                                </span>
                                <a href="logout.php" class="button primary">Sign Out</a>
                            <?php else: ?>
                                <a href="user_login.php" class="button primary">Sign Up</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
</div>