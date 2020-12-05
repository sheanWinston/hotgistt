<?php
include "main-header.php";
?>

<!-- Breadcrumb -->
<section class="breadcrumb-outer text-center bg-orange">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Login/Register Page</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login/Register Page</li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- BreadCrumb Ends -->

<section class="login">
    <div class="container">
        <?php
        if (isset($_GET['msg'])) {
            ?>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center ">
                <p class="text-warning"> <?php echo $_GET['msg'] ?> </p>
            </div>
        </div>
        <?php
        }
        ?>
        <div class="row">
            <div class="col-md-6">
                <div class="login-form">
                    <form action="login_action.php" method="POST" >
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-title">
                                    <h2>Login</h2>
                                    <p>Register if you don't have an account.</p>
                                </div>
                            </div>
                            <div class="form-group col-xs-12">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="Name1"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group col-xs-12">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" id="email1"
                                    placeholder="Enter correct password">
                            </div>

                            <div class="col-xs-12">
                                <div class="comment-btn mar-bottom-20">
                                    <button class="btn btn-blog">Login</button>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox-outer pull-left">
                                    <input type="checkbox" name="vehicle2" value="Car"> Remember Me?
                                </div>
                                <div class="login-accounts pull-right">
                                    <a href="forgot-password.html" class="forgotpw">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="register-form">
                    <form method="POST" action="register_action.php">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-title">
                                    <h2>Register</h2>
                                    <p>Enter your details to be a member.</p>
                                </div>
                            </div>
                            <div class="form-group col-xs-12">
                                <label>Name:</label>
                                <input type="text" class="form-control" name="name" id="Name"
                                    placeholder="Enter full name">
                            </div>
                            <div class="form-group col-xs-12">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="abc@xyz.com">
                            </div>
                            <div class="form-group col-xs-12">
                                <label>Phone Number:</label>
                                <input type="text" class="form-control" name="phone" id="date1"
                                    placeholder="Select Date">
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Select Password :</label>
                                <input type="password" class="form-control" name="password" id="date"
                                    placeholder="Enter Password">
                            </div>
                            <div class="form-group col-xs-6 col-left-padding">
                                <label>Confirm Password :</label>
                                <input type="password" class="form-control" name="c_password" id="phnumber"
                                    placeholder="Re-enter Password">
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox-outer">
                                    <input type="checkbox" name="vehicle2" value="Car"> I agree to the <a href="#">terms
                                        and conditions.</a>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="comment-btn mar-top-30">
                                    <button type="submit" class="btn btn-blog">Register Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "main-footer.php";
?>