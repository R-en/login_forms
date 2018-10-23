<?php
        require 'header.php';
?>
    <main>
        <div class="form">
            <h1>Log In</h1>
            <form action="includes/login.inc.php" method="post" name="login">
                <input type="text" name="mailuid" placeholder="Username/Email" required />
                <input type="password" name="pwd" placeholder="Password" required />
                <input name="login_submit" type="submit" value="Login" />
            </form>
            <p>Not registered yet? <a href='signup.php'>Register Here</a></p>
        </div>

    </main>
<?php
        require 'footer.php';
?>