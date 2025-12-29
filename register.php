<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register  | User Management</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
    <main class="container">
        <h1 class="page-title">Register</h1>
        <form action="insert.php" method="post" name= "user_form">
             <div class="field-group">
                <label for="fname">Full Name </label>
                <input type="text" id="fname" name="fname" value="" required>
            </div>
            <div class="field-group">
                <label for="uname">Username </label>
                <input type="text" id="uname" name="uname" value="" required>
            </div>
            <div class="field-group">
                <label for="uname"> E-Mail</label>
                <input type="text" id="email" name="email" value="" required >
            </div>
            <div class="field-group">
                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="pwd" value="" required>
            </div>
            <div class="field-group">
                <label for="cpwd">Confirm Password</label>
                <input type="password" id="cpwd" name="cpwd" value="" required>
            </div>
            <div class="field-group">
                <input type="checkbox" id="agree" name="agree">
                <label for="agree">I agree to the <a href= "" title= "terms and conditions">terms and conditions</a></label>
            </div>
            <button type="submit" name="submit" class="btn">Register</button>
        </form>
        <div class="btn-group">
            <hr>
            <span class= "note">
            Already have an account? <a href="login.php" 
            class="text-link">Login User &rarr;</a>
            </span><br><br>
            <a href="index.php" class= "text-Link"> &larr; Back to Home</a>
        </div>
    </main>
</body>
</html>