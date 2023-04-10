<?php include 'header.php'; ?>

<!-- Main -->
<article id="main">

    <header class="special container">
        <h2>Registration</h2>
        <p>Login <a href='user_login.php'>here</a> if already registered.</p>
    </header>

    <!-- One -->
    <section class="wrapper style4 special container medium">

        <!-- Content -->
        <div class="content">

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $username = trim($_POST['username']);
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);

                $user_data = json_decode(file_get_contents("jsons/user_details.json"), true);
                if ($user_data === null) {
                    $user_data = array();
                }

                $user_exists = false;
                foreach ($user_data as $user) {
                    if ($user['username'] === $username) {
                        $user_exists = true;
                        break;
                    }
                }

                if ($user_exists) {
                    echo "<div class='alert alert-danger'>Username already exists. Use a different username or <a href='user_login.php'>login</a> instead.</div>";
                } else {
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    $new_user = array(
                        "username" => $username,
                        "email" => $email,
                        "password" => $hashed_password
                    );
                    $user_data[] = $new_user;
                    file_put_contents("jsons/user_details.json", json_encode($user_data, JSON_PRETTY_PRINT));
                    echo "<div class='alert alert-success'>Registration successful! Welcome to the club! Please <a href='user_login.php'>login</a>.</div>";
                }
            }
            ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>

    </section>

</article>

<?php include 'footer.php'; ?>