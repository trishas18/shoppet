<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="signup-check.php" method="post" onsubmit="return validateForm()">
    <h2>SIGN UP</h2>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <?php if (isset($_GET['success'])) { ?>
        <p class="success"><?php echo $_GET['success']; ?></p>
    <?php } ?>

    <label>Name</label>
    <?php if (isset($_GET['name'])) { ?>
        <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
    <?php } else { ?>
        <input type="text" name="name" placeholder="Name"><br>
    <?php } ?>

    <label>User Name</label>
    <?php if (isset($_GET['uname'])) { ?>
        <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
    <?php } else { ?>
        <input type="text" name="uname" placeholder="User Name"><br>
    <?php } ?>

    <label>Password</label>
    <input type="password" name="password" placeholder="Password" id="password"><br>

    <label>Re-enter Password</label>
    <input type="password" name="re_password" placeholder="Re-enter Password" id="re_password"><br>

    <button type="submit">Sign Up</button>
    <a href="index.php" class="ca">Already have an account?</a>
</form>

<script>
    function validateForm() {
        var name = document.getElementsByName("name")[0].value;
        var username = document.getElementsByName("uname")[0].value;
        var password = document.getElementById("password").value;
        var rePassword = document.getElementById("re_password").value;

        if (name.trim() === "" || username.trim() === "" || password.trim() === "" || rePassword.trim() === "") {
            alert("Please fill in all fields.");
            return false; // Prevent form submission
        }

        if (password !== rePassword) {
            alert("Passwords do not match.");
            return false; // Prevent form submission
        }

        return true; // Allow form submission
    }
</script>

</body>
</html>