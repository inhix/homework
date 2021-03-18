<?php
session_start();

if (empty($_SESSION['auth'])) { ?>
    <p style='color: red'>You can't access this page. Please login first!</p>
    <form action="index.php" method="POST">
        <p><input type="submit" value="Go back to login page" name="back2index"/></p>
    </form>
<?php } else { ?>
    <p><b>You are on page 2</b></p>
    <p><a href="1.php">Go to page 1</a></p>
    <p><a href="3.php">Go to page 3</a></p>
    <p><a href="logout.php">Logout</a></p>
<?php } ?>
</body>
</html>
