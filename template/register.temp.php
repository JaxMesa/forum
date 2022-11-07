<?php require "template/partials/header.php"; ?>
    <form>
        <div>
            You are on register page!
        </div>
        <?php require "functions.php" ?>
        <a href="/" class="<?= urlIs("/") ?>">Go back</a>
        <div>
            <label for="fname">Username:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Password:</label>
            <input type="text" id= "lname" name="lname"><br><br>
            <input type="submit" value="Submit">
        </div>
    </form>

<?php require "template/partials/footer.php"; ?>