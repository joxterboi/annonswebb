<?php include 'components/header.php'; ?>
<div id="signupContainer">
    <form id="signUpForm" action="includes/signup.inc.php" method="POST">
        <input type="text" name="firstName" placeholder="Förnamn"><br>
        <input type="text" name="lastName" placeholder="Efternamn"><br>
        <input type="text" name="userEmail" placeholder="E-mail"><br>
        <input type="text" name="uid" placeholder="Användarnamn"><br>
        <input type="password" name="pwd" placeholder="Lösenord"><br>
        <button type="submit" name="signupSubmit">Sign up!</button>
    </form>
</div>

<?php include 'components/footer.php'; ?>