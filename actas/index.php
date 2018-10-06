<?php
session_start();
session_name('amhawebsite');

if( $_SESSION[ 'congreso_user' ] )
{
    header( "Location: ../files/modules/web/congreso_actas.php" );

}else{

    header( "Location: ../files/modules/web/congreso_login.php" );

}

die();
