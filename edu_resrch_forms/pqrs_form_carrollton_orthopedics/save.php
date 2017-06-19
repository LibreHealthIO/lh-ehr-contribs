<?php
/**
 * PQRS Carrollton Orthopedics Group Direct Data Entry
 *
 * Copyright (C) 2016      Suncoast Connection
 *
 * @package librehealthehr
 * @link    http://suncoastconnection.com
 * @author  Suncoast Connection
 * Mozilla Public License Version 2.0, Bryan Lee, <leebc>
 */

include_once("../../globals.php");
include_once("$srcdir/api.inc");
include_once("$srcdir/forms.inc");
foreach ($_POST as $k => $var) {
$_POST[$k] = mysql_escape_string($var);
echo "$var\n";
}
if ($encounter == "")
$encounter = date("Ymd");
if ($_GET["mode"] == "new"){
$newid = formSubmit("pqrs_form_carrollton_orthopedics", $_POST, $_GET["id"], $userauthorized);

addForm($encounter, "Carrollton Orthopedics Checklist", $newid, "pqrs_form_carrollton_orthopedics", $pid, $userauthorized);
}elseif ($_GET["mode"] == "update") {
sqlInsert("update pqrs_form_carrollton_orthopedics set pid = {$_SESSION["pid"]},groupname='".$_SESSION["authProvider"]."',user='".$_SESSION["authUser"]."',authorized=$userauthorized,activity=1, date = NOW(),
purpose ='".$_POST["purpose"]."',
Carrollton_Orthopedics0021='".$_POST["Carrollton_Orthopedics0021"]."',
Carrollton_Orthopedics023='".$_POST["Carrollton_Orthopedics023"]."',
Carrollton_Orthopedics0039='".$_POST["Carrollton_Orthopedics0039"]."',
Carrollton_Orthopedics046='".$_POST["Carrollton_Orthopedics046"]."',
Carrollton_Orthopedics0109='".$_POST["Carrollton_Orthopedics0109"]."',
Carrollton_Orthopedics0128='".$_POST["Carrollton_Orthopedics0128"]."',
Carrollton_Orthopedics0226='".$_POST["Carrollton_Orthopedics0226"]."',
Carrollton_Orthopedics0238='".$_POST["Carrollton_Orthopedics0238"]."',
Carrollton_Orthopedics0431='".$_POST["Carrollton_Orthopedics0431"]."',
recommendation ='".$_POST["recommendation"]."',
finalize ='".$_POST["finalize"]."' where id=$id");
}

if ( $_POST["finalize"] == "on" ) {
        echo "<p>Finalize checked!  Saving CPT2 codes to fee sheet.";
        echo "<br><p><br>";
        $ourLoop = array(
"Carrollton_Orthopedics0021", 
"Carrollton_Orthopedics023", 
"Carrollton_Orthopedics0039", 
"Carrollton_Orthopedics046", 
"Carrollton_Orthopedics0109", 
"Carrollton_Orthopedics0128", 
"Carrollton_Orthopedics0226", 
"Carrollton_Orthopedics0238", 
"Carrollton_Orthopedics0431"); 
	$ourPID=$_SESSION["pid"];
        $ourUser=$_SESSION["authUserID"];
        foreach ($ourLoop as $value) {
                foreach (explode(" ", $_POST[$value]) as $ourCode ) {
                        //echo "<br>DEBUG-- Loop for ".$value." with code ".$ourCode;
                        if ( $ourCode != "" ) {
                                $codesplit=explode(":",$ourCode);
                                $codeBase=$codesplit[0];
                                $codeModifier=$codesplit[1];
                                $query=
                "INSERT INTO `billing` ".
                " ( `date`, `code_type`, `code`, `pid`, ".
                " `provider_id`, `user`, `groupname`, `authorized`, ".
                " `encounter`, `billed`, `activity`, ".
                " `payer_id`, `bill_process`, `modifier`) ".
                " VALUES ".
                " ( NOW(),'CPT2','".$codeBase."','".$ourPID."', ".
                " '".$ourUser."','".$ourUser."','Default','1', ".
                " '".$encounter."','0','1', ".
                " '1','0','".$codeModifier."');";
                        sqlQuery($query);
                        }
                }
        }       // End foreach
}       // End if  finalized

$_SESSION["encounter"] = $encounter;
formHeader("Redirecting....");
formJump();
formFooter();
?>
