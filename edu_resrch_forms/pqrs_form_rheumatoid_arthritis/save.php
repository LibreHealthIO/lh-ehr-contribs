<?php
/**
 * PQRS Rheumatoid Arthritis Group Direct Data Entry
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
$newid = formSubmit("pqrs_form_rheumatoid_arthritis", $_POST, $_GET["id"], $userauthorized);

addForm($encounter, "Rheumatoid Arthritis Checklist", $newid, "pqrs_form_rheumatoid_arthritis", $pid, $userauthorized);
}elseif ($_GET["mode"] == "update") {
sqlInsert("update pqrs_form_rheumatoid_arthritis set pid = {$_SESSION["pid"]},groupname='".$_SESSION["authProvider"]."',user='".$_SESSION["authUser"]."',authorized=$userauthorized,activity=1, date = NOW(),
purpose ='".$_POST["purpose"]."',
Rheumatoid_Arthritis0108='".$_POST["Rheumatoid_Arthritis0108"]."',
Rheumatoid_Arthritis0128='".$_POST["Rheumatoid_Arthritis0128"]."',
Rheumatoid_Arthritis0131='".$_POST["Rheumatoid_Arthritis0131"]."',
Rheumatoid_Arthritis0176='".$_POST["Rheumatoid_Arthritis0176"]."',
Rheumatoid_Arthritis0177='".$_POST["Rheumatoid_Arthritis0177"]."',
Rheumatoid_Arthritis0178='".$_POST["Rheumatoid_Arthritis0178"]."',
Rheumatoid_Arthritis0179='".$_POST["Rheumatoid_Arthritis0179"]."',
Rheumatoid_Arthritis0180='".$_POST["Rheumatoid_Arthritis0180"]."',
Rheumatoid_Arthritis0337='".$_POST["Rheumatoid_Arthritis0337"]."',
recommendation ='".$_POST["recommendation"]."',
finalize ='".$_POST["finalize"]."' where id=$id");
}

if ( $_POST["finalize"] == "on" ) {
        echo "<p>Finalize checked!  Saving CPT2 codes to fee sheet.";
        echo "<br><p><br>";
        $ourLoop = array(
"Rheumatoid_Arthritis0108", 
"Rheumatoid_Arthritis0128", 
"Rheumatoid_Arthritis0131", 
"Rheumatoid_Arthritis0176", 
"Rheumatoid_Arthritis0177", 
"Rheumatoid_Arthritis0178", 
"Rheumatoid_Arthritis0179", 
"Rheumatoid_Arthritis0180", 
"Rheumatoid_Arthritis0337"); 
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
