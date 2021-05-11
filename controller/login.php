<?php
session_start();
include ('../model/LdapAC.php');

$pass = $_POST['password'];
if(!empty($pass)){
    $ldap = new LdapAC('cn=admin,dc=dawAC,dc=cat');
    var_dump($ldap);
    if($ldap->authUser($pass)){
        $_SESSION["loged"] = true;
        header('Location: ../ldapForm.php');
    }else{
        $_SESSION['loginError'] = 'Login incorrecte';
        header('Location: ../loginForm.php');
    }
}else{
    $_SESSION['loginError'] = 'No pot existir cap camp buit';
    header('Location: ../loginForm.php');
}
?>