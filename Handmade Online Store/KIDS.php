<?php
    
    session_start();
    ob_start();
    // include header.php file
    
    include ('header.php');
?>

<?php

    /* include mobile */
    include('./Template/kids.php');
    /* include mobile */
?>


<?php
    // include footer.php file
    include ('footer.php');
?>