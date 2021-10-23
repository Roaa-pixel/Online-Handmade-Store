<?php
    
    session_start();
    ob_start();
    // include header.php file
    
    include ('header.php');
?>

<?php

    /*  include banner area  */
        include ('Template/_banner-area.php');
    /*  include banner area  */

    /*  include top sale section */
        include ('Template/_top-sale.php');
    /*  include top sale section */
    
    /*  include recommendation section */
        $users=mysqli_query($Cart->db->con,"SELECT user_name FROM users WHERE id='$_SESSION[id]'");
        echo $_SESSION['id'];
        $username=mysqli_fetch_array($users);
        if(isset($username)){
            include ('Template/recommendation_template.php');   
        }
    /*  include recommendation section */

    /*  include special price section  */
        include ('Template/_special-price.php');
    /*  include special price section  */

    /*  include banner ads  */
        /* include ('Template/_banner-ads.php'); */
    /*  include banner ads  */

    /*  include new phones section  */
        include ('Template/_new-phones.php');
    /*  include new phones section  */

    /*  include new phones section  */
        include ('Template/portraits.php');
    /*  include new phones section  */

    /*  include blog area  */
        include ('Template/_blogs.php');
    /*  include blog area  */

?>


<?php
    // include footer.php file
    include ('footer.php');
?>