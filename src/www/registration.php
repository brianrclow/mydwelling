<?php session_start();?>
<?php 
    $page='support';
    include("header.php");
?>

<h1>Registration</h1>

<section>
            <form id="registration" method="POST" action="requests/registration-handler.php">
                <table>
                    <tr>
                        <td><label for="query">Username:</label></td>
                        <td>
                        <input type="text" id="username" name="username" required="true">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="query">Email:</label></td>
                        <td>
                        <input type="text" id="query" name="email" required="true">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="query">Password:</label></td>
                        <td>
                        <input type="password" id="query" name="password" required="true">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="query">Password Again:</label></td>
                        <td>
                        <input type="password" id="query" name="passwordAgain" required="true">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input type="submit" value="Register">
                        </td>
                    </tr>
                </table>
            </form>
            <?php
            $valid = isset($_GET['valid']) ? $_GET['valid'] : true;
            if($valid == 'false') { ?>
                <span><?php print_r($_SESSION['error']); ?></span>
            <?php }
            ?>
        </section>