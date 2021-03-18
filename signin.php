<?php
    include_once 'header.php';
?>
    <section class="main_signin_container">
        <section class="main_signin_inner_container">
            <section class="signin_items_container">
                <section class="signin_logo_pic">
                    <img src="pictures/04efb88b5f70dc324f7c28045a8ff08d.png" title="just_park_green_logo" alt="just_park_green_logo">
                </section>
                <form class="input_container_create_acc">
                    <h2>Welcome back! Let`s get you signed in.</h2>
                    <section class="input_create_acc">
                        <h4>Email address</h4>
                        <input type="text" placeholder="example@gmail.com">
                    </section>
                    <section class="input_create_acc">
                        <h4>Password</h4>
                        <input type="text" placeholder="password">
                    </section>
                </form>
                <section class="submit_cancel_forgot_cont">
                    <section class="password_forgot_cont">
                        <a href="#">
                            <p>
                                I`ve forgotten my password
                            </p>
                        </a>
                    </section>
                    <section class="submit_cancel_buttons submit_cancel_buttons_signin">
                        <a href="signup.php">Cancel</a>
                        <button type="submit" name="submit_signin">Sign in</button>
                    </section>
                </section>
            </section>
        </section>
<?php
    include_once 'footer.php';
?>
    </section>
