<html>
	<body>
		<h2>Log in</h2>
		<form id="login" action="login.php" method="post">
			<dl>
				<dt>Name</dt>       <dd><input type="text" name="name" /></dd>
				<dt>Password</dt>   <dd><input type="password" name="password" /></dd>
				<dt> </dt>          <dd><input type="submit" value="Log in" id ="login"/></dd>
			</dl>
		</form>
		<?php
			if(isset($_POST['login']))
				print_r($POST);
		?>
	</body>
</html>