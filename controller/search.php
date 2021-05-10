<?php
session_start();
include('../model/LdapAC.php');

if(isset($_SESSION['resultats'])){
    unset($_SESSION['resultats']);
}

$ldap = new LdapAC();
$filtre = '(&(objectclass=inetOrgPerson)';

if(!empty($_POST['cn'])){
    $aux = $_POST['cn'];
    $filtre = $filtre . '(cn=' . $aux . ')';
}

if(!empty($_POST['sn'])){
    $aux = $_POST['sn'];
    $filtre = $filtre . '(sn=' . $aux . ')';
}

if(!empty($_POST['telefon'])){
    $aux = $_POST['telefon'];
    $filtre = $filtre . '(Telephone=' . $aux . ')';
}

if(!empty($_POST['mobil'])){
    $aux = $_POST['mobil'];
    $filtre = $filtre . '(mobile=' . $aux . ')';
}

if(!empty($_POST['email'])){
    $aux = $_POST['email'];
    $filtre = $filtre . '(email=' . $aux . ')';
}

if(!empty($_POST['o'])){
    $aux = $_POST['o'];
    $filtre = $filtre . '(o=' . $aux . ')';
}

if(!empty($_POST['grup'])){
    $group = $_POST['grup'];
    //$filtre = $filtre . '(grup=$aux)';
}else{
    $group = "";
}

$filtre = $filtre . ')';

$resultats = $ldap->search($filtre,$group);
$_SESSION['filtre'] = $filtre;
$_SESSION['resultats'] = $resultats;
header('Location: ../ldapForm.php');
?>