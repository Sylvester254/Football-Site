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
        <noscript>
            <link rel="stylesheet" href="assets/css/noscript.css" />
        </noscript>
        <link rel="icon" href="images/logo.png" type="image/png">
        <!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    </head>

    <body class="contact is-preload">
        <div id="page-wrapper">
            <!-- Header -->
            <header id="header">
                <h1 id="logo"><a href="club_details.php">Manchester <span>United</span></a></h1>
                <nav id="nav">
                    <ul>
                        <?php
                        // Store the current page name in a variable
                        $page = basename($_SERVER['PHP_SELF']);

                        // Define an array to map page names to link text
                        $page_titles = array(
                            'index.php' => 'Home',
                            'club_news.php' => 'Club News',
                            'squad.php' => 'Our Squad',
                            'club_history.php' => 'Club History',
                            'club_management.php' => 'Club Management'
                        );

                        // Use a loop to display the navigation links
                        foreach ($page_titles as $url => $title) {
                            // Add the "current" class to the current page link
                            $class = ($page == $url) ? ' class="current"' : '';
                            // Display the link
                            echo "<li$class><a href=\"$url\">" . ($page == $url ? $title : '') . "</a></li>";
                        }
                        ?>
                        <li class="submenu">
                            <a href="#">Discover</a>
                            <ul>
                                <li><a href="club_news.php">Club News</a></li>
                                <li><a href="squad.php">Our Squad</a></li>
                                <li class="submenu">
                                    <a href="#">More</a>
                                    <ul>
                                        <li><a href="club_history.php">Club History</a></li>
                                        <li><a href="club_management.php">Club Management</a></li>
                                    </ul>
                                </li>
                            </ul>
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


            </header>