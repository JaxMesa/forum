<?php require "template/partials/header.php"; ?>
    <main  id="frm" >
        <div>
            You are on home page!
        </div>
        <?php require "functions.php" ?>
        <a href="/register" class="<?= urlIs("/register") ?>">Register</a>
        <a href="/login" class="<?= urlIs("/login") ?>">Login</a>
    </main>
<?php require "template/partials/footer.php"; ?>