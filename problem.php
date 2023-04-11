<?php
// include header
include('header.php');

if(isset($_POST['title']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['role'])) {
	$_SESSION['user'] = array(
		'title' => $_POST['title'],
		'first_name' => $_POST['first_name'],
		'last_name' => $_POST['last_name'],
		'role' => $_POST['role']
	);
  }
?>
<!-- problem page content -->
<br>
<a href="logout.php"><button class="logout-button">Logout</button></a>
<div class="wrapper">
    <div class="form-wrapper">
        <h1 class="center-text">Hello <?php echo $_POST['first_name'] . ' ' . $_POST['last_name']; ?>!</h1>
        <hr>
        <h3>Here are your options:</h3>
        <div class="form-row">
            <?php
        // Show specific links based on the role selected
        $role = $_POST['role'];
        if ($role == "admin") {
            echo "<a href='new-account.php'><button class='select-button'>Create New Account</button></a><br>";
            echo "<a href='isnt-working.php'><button class='select-button'>Is Not Working</button></a><br>";
        } else if ($role == "manager") {
            echo "<a href='lost-password.php'><button class='select-button'>Lost Password</button></a><br>";
            echo "<a href='isnt-working.php'><button class='select-button'>Is Not Working</button></a><br>";
        } else if ($role == "ceo") {
            echo "<a href='need-help.php'><button class='select-button'>Need Help</button></a><br>";
            echo "<a href='isnt-working.php'><button class='select-button'>Is Not Working</button></a><br>";
        } else {
            echo "Invalid role selected";
        } ?></div>
    </div>
</div>

<?php
// include footer
include('footer.php');
?>