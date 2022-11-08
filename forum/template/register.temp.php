<?php require "template/partials/header.php"; ?>
    <div id="frm" >
        <h1>Registration</h1>
        <form method="post" action="mysql/process.sql.php" >
            <p class="input-group">
                <label>Username:</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </p>
            <p class="input-group">
                <label>Password:</label>
                <input type="password" name="password">
            </p>
            <p class="input-group">   
                <button type="submit" id="btn" class="btn" name="reg_user">Register</button>
            </p>
            <p>
                Already a member? <a href="/login">Sign in</a>
            </p>
            <p>
                Want something else? <a href="/">Go back</a>
            </p>
        </form>
    </div>
<?php require "template/partials/footer.php"; ?>