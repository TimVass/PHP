<?php
    if (isset($_POST['admin_login'])){

        $pass = getPostParam('password');
        if($pass == ADMIN_PASSWORD){

            $_SESSION['authenticated'] = true;

        }else{
            echo 'Error';
        }
    }
?>

<h1>Admin</h1>


<?php

if (!isAuthenticated()){
    include 'scripts/admin/login-form.php';
    return;
}

include 'scripts/admin/contact-form-admin.php';

?>