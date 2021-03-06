<?php
$pageTitle = 'Login & Sign up';
include('header.php');
?>
<script>
if (localStorage.getItem('name')) {
    window.location.replace("/");
}
</script>
<div class="container">
    <section id="formHolder">
        <div class="row">

            <!-- Brand Box -->
            <div class="col-md-6 brand">
                <div class="heading mx-auto">
                    <h2 class="ff-azonix">Welcome to Linkus</h2>
                </div>
            </div>
            <!-- Form Box -->
            <div class="col-sm-6 form mx-auto">
                <!-- Login Form -->
                <div class="login form-peice switched">

                    <form class="login-form" onsubmit="userData(event, 'login')">
                        <div id="login-msg"></div>


                        <h2 class="ff-azonix text-dark">Login</h2>


                        <div class="form-group">
                            <label for="loginemail">Email Adderss</label>
                            <input type="email" name="loginemail" id="loginemail" required />
                        </div>
                        <div class="form-group">
                            <label for="loginPassword">Password</label>
                            <input type="password" name="loginPassword" id="loginPassword" required />
                        </div>
                        <div class="CTA">
                            <input type="submit" value="Login"
                                class="btn btn-outline-dark btn-lg rounded-pill px-5 mx-4 mt-3 text-uppercase" />
                            <a href="#" class="switch">I'm New</a>
                        </div>
                    </form>
                </div>
                <!-- End Login Form -->

                <!-- Signup Form -->
                <div class="signup form-peice">

                    <form class="signup-form" onsubmit="userData(event, 'register')">
                        <div id="signup-msg"></div>


                        <h2 class="ff-azonix text-dark">Register</h2>


                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="username" id="name" class="name" />
                            <span class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Adderss</label>
                            <input type="email" name="emailAdress" id="email" class="email" />
                            <span class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="pass" />
                            <span class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="passwordCon">Confirm Password</label>
                            <input type="password" name="passwordCon" id="passwordCon" class="passConfirm" />
                            <span class="error"></span>
                        </div>

                        <div class="CTA">
                            <input type="submit" value="Signup Now" id="submit"
                                class="btn btn-outline-dark btn-lg rounded-pill px-5 mx-4 mt-3 text-uppercase" />
                            <a href="#" class="switch">I have an account</a>
                        </div>
                    </form>
                </div>
                <!-- End Signup Form -->
            </div>
        </div>
    </section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="./js/login.js"></script>
<script src="./js/form.js"></script>