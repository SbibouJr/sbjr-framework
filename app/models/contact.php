<?php /*
***************************************************
***************************************************
***************** MODEL / CONTACT *****************
***************************************************
***************************************************
*/
$send = null;
if(isset($_GET["send"])){
	$send = $_GET["send"] ? "Message envoyé" : "Votre message n'a pas pu etre envoyé" ;
}