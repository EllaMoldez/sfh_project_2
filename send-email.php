<?php
// include header
include('header.php');
?>
<!-- send email page content -->
<br>
<a href="logout.php"><button class="logout-button">Logout</button></a>
<div class="wrapper">
    <div class="form-wrapper">
        <?php
        if ($_POST['emailType'] == 'newAccount') {
        echo 'New account has been created successfully.';
        } elseif ($_POST['emailType'] == 'lostPassword') {
        echo 'Kindly check your inbox for the link to reset your password.';
        }
        ?>
    </div>
</div>


<?php
// include footer
include('footer.php');
?>