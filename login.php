<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header class="site-header">
        <span class="brand">AirAsia Rewards</span>
    </header>

    <main>
        <section class="form-card login-card">
            <h1>Member Login</h1>

            <!-- Static site: the form simply moves the user to the gift card list -->
            <form action="card-list.php" method="post">
                <div class="form-field">
                    <label for="userName">Username</label>
                    <input type="text" id="userName" name="userName" placeholder="Enter username" required>
                </div>

                <div class="form-field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </section>
    </main>

    <footer class="site-footer">
        <p>&copy; 2026 AirAsia Rewards Redemption System</p>
    </footer>
</body>

</html>
