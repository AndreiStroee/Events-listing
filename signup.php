<?php
require "header.php";
?>



<!-- <main>
        <section class="section-default">
        <h1>Signup</h1>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username" required>
            <input type="text" name="mail" placeholder="E-mail" required>
            <input type="password" name="pwd" placeholder="Password" required>
            <input type="password" name="pwd-repeat" placeholder="Repeat password" required>
            <button type="submit" name="signup-submit">Signup</button>
        </form>
        </section>
    </main> -->
<style type="text/css">
    .form-control,
    .form-control:focus,
    .input-group-addon {
        border-color: #e1e1e1;
    }

    .form-control,
    .btn {
        border-radius: 3px;
    }

    .signup-form {
        width: 390px;
        margin: 0 auto;
        padding: 70px 0;
    }

    .signup-form form {
        color: #999;
        border-radius: 3px;
        margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .signup-form h2 {
        color: #333;
        font-weight: bold;
        margin-top: 0;
    }

    .signup-form hr {
        margin: 0 -30px 20px;
    }

    .signup-form .form-group {
        margin-bottom: 20px;
    }

    .signup-form label {
        font-weight: normal;
        font-size: 13px;
    }

    .signup-form .form-control {
        min-height: 38px;
        box-shadow: none !important;
    }

    .signup-form .input-group-addon {
        max-width: 42px;
        text-align: center;
    }

    .signup-form input[type="checkbox"] {
        margin-top: 2px;
    }

    .signup-form .btn {
        font-size: 16px;
        font-weight: bold;
        background: #faad9e;
        border: none;
        min-width: 140px;
    }

    .signup-form .btn:hover,
    .signup-form .btn:focus {
        background: #ca7766;
        outline: none;
    }

    .signup-form a {
        color: #fff;
        text-decoration: underline;
    }

    .signup-form a:hover {
        text-decoration: none;
    }

    .signup-form form a {
        color: #ca7766;
        text-decoration: none;
    }

    .signup-form form a:hover {
        text-decoration: underline;
    }

    .signup-form .fa {
        font-size: 21px;
        margin-right: 10px;
    }

    .signup-form .fa-paper-plane {
        font-size: 15px;
    }

    .signup-form .fa-check {
        color: #fff;
        left: 17px;
        top: 18px;
        font-size: 7px;
        position: absolute;
    }
</style>



<main>
    <div class="signup-form">
    <?php
        if (isset($_GET['error'])) {
            if ($_GET['error']=='emptyfields') {

                echo '<p class="signuperror" style="color:#c32">Fill in all the fields</p>';

            }
            else if ($_GET['error'] == "invalidemailuid") {

                echo '<p class="signuperror" style="color:#c32">Invalid username&email</p>';

            }
            else if ($_GET['error'] == "invaliduid") {

                echo '<p class="signuperror" style="color:#c32">Invalid username</p>';

            }
            else if ($_GET['error'] == "invalidemail") {

                echo '<p class="signuperror" style="color:#c32">Invalid email</p>';

            }
            else if ($_GET['error'] == "passwordcheck") {

                echo '<p class="signuperror" style="color:#c32">Your passwords do not match!</p>';
            }
            else if ($_GET['error'] == "usertaken") {

                echo '<p class="signuperror" style="color:#c32">Username is already taken!</p>';
            }
            else if ($_GET['error'] == "emailtaken") {

                echo '<p class="signuperror" style="color:#c32">E-mail is already taken!</p>';
            }
            else if ($_GET['signup'] == "succes") {
                echo '<p class="signupsucces" style=:color:#3a4">Signup successful!</p>';
            }
        }
    ?>
        <form class="form-signup" action="includes/signup.inc.php" method="post">
            <h2>Sign Up</h2>
            <p>Please fill in this form to create an account!</p>
            <hr>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="uid" placeholder="Username">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="pwd" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-lock"></i>
                        <i class="fa fa-check"></i>
                    </span>
                    <input type="password" class="form-control" name="pwd-repeat" placeholder="Confirm Password">
                </div>
            </div>
            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg" name="signup-submit">Sign Up</button>
            </div>
        </form>
</main>



<?php
require "footer.php";
?>