<?php require "template/partials/header.php"; ?>
    <div id = "frm">  
        <h1>Log in</h1>
        <?php require "scripts.php"; ?>
        <?php require "functions.php"; ?>
        <form name="f1" action="<?php urlIs("/profilepage")?>" onsubmit="return validation()" method="POST">  
            <p>  
                <label> Username: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>
            <p>
                Still not a member? <a href="/register">Sign up</a>
            </p>
            <p>
                Want something else? <a href="/">Go back</a>
            </p>  
        </form>  
    </div>  
<?php require "template/partials/footer.php"; ?>