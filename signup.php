<?php require_once("../includes/signup_connect.php"); ?>
<?php require_once("../includes/signup_functions.php"); ?>
<?php require_once("../includes/session.php"); ?>
<?php include_once("../public/home_nav.php"); ?>
<?php include_once("../includes/templates/signup_header.php"); ?>

<?php

    if(isset($_POST["submit"])) {
        $username = ucfirst($_POST["username"]);
        $password = ucfirst($_POST["password"]);
        $full_name = ucfirst($_POST["full_name"]);

        $query = "INSERT INTO users (username, password, full_name) VALUES ('{$username}', '{$password}', '{$full_name}');";

        $result = mysqli_query($connection, $query);

        if($result) {
            redirectTo("login_index.php");
        }

    }
?>


<div class="login-box">

    <div class="login-box-insert">

    <form action="signup_index.php" method="post">


            <label for='username' >Full Name:</label>
            <input type='text' name='full_name' id='full_name' maxlength="60" placeholder="Full Name"/>

            <label for='username' >UserName:</label>
            <input type='text' name='username' id='username' maxlength="20" placeholder="Username"/>

            <label for='password' >Password:</label>
            <input type='password' name='password' id='password' maxlength="60" placeholder="Password" class="input-pass" />

            <input type='submit' name='submit' value='Sign Up' class="submit" />

    </form>

    </div>

</div>


<script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

<?php include_once("../includes/templates/signup_footer.php"); ?>
