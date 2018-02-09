<?php include 'components/header.php'; ?>

<form id="signUpForm" action="includes/signup.inc.php" method="POST">
    <input type="text" name="firstName" placeholder="Förnamn">
    <input type="text" name="lastName" placeholder="Efternamn">
    <input type="text" name="userEmail" placeholder="E-mail">
    <input type="text" name="uid" placeholder="Användarnamn">
    <input type="password" name="pwd" placeholder="Lösenord">
    <button type="submit" name="signupSubmit">Sign up!</button>
</form>

<?php include 'components/footer.php'; ?>