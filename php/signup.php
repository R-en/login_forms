<?php
        require 'header.php';
?>

    <main class=" mt-3">
        <div>
            <section>
                <h1>Sign Up</h1>
                <form action="includes/signup.inc.php">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd_repeat" placeholder="Repeat Password">
                    <input type="submit"  name="signup_submit" value="Sign Up">
                </form>
            </section>
        </div>
    </main>
<?php
        require 'footer.php';
?>