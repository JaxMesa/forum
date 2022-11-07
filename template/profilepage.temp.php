<?php require "template/partials/header.php"; ?>
    <main>
        <div>
            You are on profile page!
        </div>
        <?php require "functions.php" ?>
        <a href="/" class="<?= urlIs("/") ?>">Log out</a>
    </main> 

<?php require "template/partials/footer.php"; ?>