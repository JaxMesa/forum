<?php require "template/partials/header.php"; ?>
    <h1>Log in</h1>
    <form method="get" action="mysql/register.sql.php">
        <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
        </div>
        <div class="input-group">
        <button type="submit" class="btn" name="login_user">Log in</button>
        </div>
        <p>
            Already a member? <a href="/">Sign in</a>
        </p>
        <p>
            Want something else? <a href="/">Go back</a>
        </p>
    </form>
<?php require "template/partials/footer.php"; ?>