<?php
// include header
include('header.php');

// unset all session variables
$_SESSION = array();

 // Check if logout is confirmed
    if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
        // Destroy session
        session_destroy();
    } 
?>

<div class="wrapper">
    <div class="form-wrapper">
        <h3>Are you sure you want to log out?</h3><br>
        <div class="form-row">
            <?php
            echo "<a href='index.php'><button class='select-button'>Yes, log me out</button></a><br>";
             echo "<a href='javascript:history.go(-2)'><button class='select-button'>No, take me back</button></a>";
            ?>
        </div>
    </div>
</div>

<?php
// include footer
include('footer.php');
?>