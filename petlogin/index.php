<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
    function validateForm() {
        var username = document.getElementById("uname").value;
        var password = document.getElementById("password").value;

        if (username.trim() === "" || password.trim() === "") {
            alert("Please enter both username and password.");
            return false; // Prevent form submission
        }

        return true; // Allow form submission
    }
</script>
</head>
<body>
<form action="login.php" method="post" onsubmit="return validateForm()">
    <h2>LOGIN</h2>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label>User Name</label>
    <input type="text" name="uname" id="uname" placeholder="User Name" required><br>

    <label>Password</label>
    <input type="password" name="password" id="password" placeholder="Password" required><br>

    <button type="submit">login</button>
    <a href="signup.php" class="ca">Create an account</a>
</form>



</body>
</html>