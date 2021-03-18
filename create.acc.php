<?php
    include_once 'header.php';
?>
    <section class="create_acc_main_container">
<!--        <section class="asdsdsda">-->
        <section class="create_acc_items_container">
            <section class="logo_pic_create_acc">
                <img src="pictures/04efb88b5f70dc324f7c28045a8ff08d.png" title="just_park_green_logo" alt="just_park_green_logo">
            </section>
            <form class="input_container_create_acc" action="includes/signup.inc.php" method="post">
                <h2>Create an account to continue</h2>
                <section class="input_create_acc">
                    <h4>First name</h4>
                    <input type="text" placeholder="First name" name="first name">
                </section>
                <section class="input_create_acc">
                    <h4>Surename</h4>
                    <input type="text" placeholder="Surename" name="last name">
                </section>
                <section class="input_create_acc">
                    <h4>Email address</h4>
                    <input type="email" placeholder="example@mail.com" name="email">
                </section>
                <section class="input_create_acc">
                    <h4>Password</h4>
                    <input type="password" placeholder="Password" name="password" class="createAccPassword">
                </section>
            </form>
            <section class="terms_and_conditions_create_acc">
                <p>
                    Please choose a secure password (at least 8 characters)
                </p>
                <p>
                    By proceeding with creating an account you agree to the JustPark <a href="#">Terms &amp; Conditions</a> and <a href="#">Privacy Policy.</a>
                </p>
            </section>
            <section class="submit_cancel_buttons">
                <a href="signup.php">Cancel</a>
<!--                <button type="submit" name="submit_create" onclick="countPasswordLength()">Create account</button>-->
                <input type="submit" name="submit_create" value="Create account" onclick="countPasswordLength()">
            </section>
        </section>
<!--        </section>-->
<?php
    include_once 'footer.php';
?>
    </section>
