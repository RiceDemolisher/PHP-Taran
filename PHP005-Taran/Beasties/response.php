<?php
/**
 * Created by PhpStorm.
 * User: Taran
 * Date: 19-Dec-18
 * Time: 8:42 AM
 */


//echo "<img src='img/".$_POST['apen'].".jpg'>";



foreach($_POST['apen'] as $aap){
    echo "<img src='img/".$aap.".jpg'>";
}