<?php
// include header
include('header.php');
?>
<!-- Index page content -->
<br>
<a href="logout.php"><button class="logout-button">Logout</button></a>
<div class="wrapper">
    <div class="form-wrapper">
        <!-- Form with 4 fields: title, first_name, last_name, and role -->
        <form action="problem.php" method="POST">
            <h1 class="center-text">Welcome To IT Support System</h1>
            <div class="form-row">
                <select name="title" title="theTitle">
                    <option value="mr">Mr</option>
                    <option value="mrs">Mrs</option>
                    <option value="ms">Ms</option>
                    <option value="dr">Dr</option>
                </select>
                <input name="first_name" title="first_name" type="text" placeholder="First Name">
                <input name="last_name" title="last_name" type="text" placeholder="Last Name">
                <select name="role" title="role" class="iinline-row">
                    <option value="admin">Admin</option>
                    <option value="manager">Manager</option>
                    <option value="ceo">CEO</option>
                </select>
                <input type="submit" name="submit" value="Submit" class="submit-button">
            </div>
        </form>
    </div>
</div>

<?php
// include footer
include('footer.php');
?>