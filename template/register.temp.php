<?php require "template/partials/header.php"; ?>
    <h1>Registration</h1>
    <form method="post" action="mysql/process.sql.php">
        <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
        </div>
        <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
        </div>
        <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
            Already a member? <a href="/">Sign in</a>
        </p>
        <p>
            Want something else? <a href="/">Go back</a>
        </p>
    </form>
<?php require "template/partials/footer.php"; ?>