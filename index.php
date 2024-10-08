<!DOCTYPE html>
<html>
<link rel="stylesheet" href="stylesheet.css"/>

<div class="container">
    <div class="curved_shape"></div>
    <div class="curved_shape2"></div>

    <div class="form_box login">
        <h2 class="animation" style="--D:0; --S:21;"> Login </h2>
        <form action="register.php">
            <div class="input_box animation" style="--D:1; --S:22;">
                <input type="text" required spellcheck="false">
                <label for="">Username</label>
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="input_box animation" style="--D:2; --S:23;">
                <input type="password" required>
                <label for="">Password</label>
                <i class="fa-solid fa-lock"></i>
            </div>

            <div class="input_box animation" style="--D:3;--S:24;">
                <button class="btn" type="submit">Login</button>
            </div>

            <div class="reg_link animation" style="--D:4;--S:25;">
                <p>
                    Create an account <a href="#" class="signuplink">Sign Up</a>
                </p>
            </div>
        </form>
    </div>

    <div class="info_content Login">
        <h2 class="animation" style="--D:0;--S:20;">Welcome Back</h2>
        <p class="animation" style="--D:1;--S:21;">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, harum.
        </p>
    </div>

    <!-- signup -->

    <div class="form_box signup">
        <h2 class="animation" style="--li:17; --S:0;"> Registration </h2>
        <form action="register.php">
            <div class="input_box animation" style="--li:18; --S:1;">
                <input type="text" required spellcheck="false">
                <label for="">Username</label>
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="input_box animation" style="--li:19; --S:2;">
                <input type="password" required>
                <label for="">Password</label>
                <i class="fa-solid fa-lock"></i>
            </div>

            <div class="input_box animation" style="--li:20;--S:3;">
                <button class="btn" type="submit">Regiter</button>
            </div>

            <div class="reg_link animation" style="--li:21;--S:4;">
                <p>
                    Already a member? <a href="#" class="signinlink">Log In</a>
                </p>
            </div>
        </form>
    </div>

    <div class="info_content signup">
        <h2 class="animation" style="--li:17;--S:0;"> Registration Form</h2>
        <p class="animation" style="--li:18;--S:1;">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, harum.
        </p>
    </div>

</div>
<script src="script.js"></script>
