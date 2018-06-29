<?php
/**
 * PQRS Sinusitis Group Direct Data Entry
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
$newid = formSubmit("pqrs_form_sinusitis", $_POST, $_GET["id"], $userauthorized);

addForm($encounter, "Sinusitis Checklist", $newid, "pqrs_form_sinusitis", $pid, $userauthorized);
}elseif ($_GET["mode"] == "update") {
sqlInsert("update pqrs_form_sinusitis set pid = {$_SESSION["pid"]},groupname='".$_SESSION["authProvider"]."',user='".$_SESSION["authUser"]."',authorized=$userauthorized,activity=1, date = NOW(),
purpose ='".$_POST["purpose"]."',
Sinusitis0130='".$_POST["Sinusitis0130"]."',
Sinusitis0131='".$_POST["Sinusitis0131"]."',
Sinusitis0226='".$_POST["Sinusitis0226"]."',
Sinusitis0331='".$_POST["Sinusitis0331"]."',
Sinusitis0332='".$_POST["Sinusitis0332"]."',
Sinusitis0333='".$_POST["Sinusitis0333"]."',
recommendation ='".$_POST["recommendation"]."',
finalize ='".$_POST["finalize"]."' where id=$id");
}

if ( $_POST["finalize"] == "on" ) {
        echo "<p>Finalize checked!  Saving CPT2 codes to fee sheet.";
        echo "<br><p><br>";
        $ourLoop = array(
"Sinusitis0130", 
"Sinusitis0131", 
"Sinusitis0226", 
"Sinusitis0331", 
"Sinusitis0332", 
"Sinusitis0333"); 
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
