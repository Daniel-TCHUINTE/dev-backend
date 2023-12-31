<?php
include_once('connexion.php');

$action = isset($_POST['action']) ? $_POST['action'] : '';


/** Register */

if($action == 'register'){
    $firstName = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $lastName = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirmPassword = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';

    if($status == 'teacher'){
        $registerSql = $bdd->prepare('INSERT INTO enseignants (id_ens,nom,prenom,email,password_ens,create_at,update_at) VALUES(:id_ens,:nom,:prenom,:email,:password_ens,:create_at,:update_at)');

        $registerSql->execute(array(
            'id_ens'=> NULL,
            'nom'=> $lastName,
            'prenom'=> $firstName,
            'email'=> $email,
            'password_ens'=> sha1($password),
            'create_at'=> date('Y-m-d'),
            'update_at'=> date('Y-m-d'),
        ));

        echo 'Register successful';
    }
    elseif($status == 'student'){

    }

}