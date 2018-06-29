<?php
//by Art Eaton
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
	
$newid = formSubmit("form_pmm", $_POST, $_GET["id"], $userauthorized);
//save the pmm form using the forms api to redirect back to encounter
addForm($encounter, "Psy Med Manage", $newid, "pmm", $pid, $userauthorized);
}elseif ($_GET["mode"] == "update") {
sqlInsert("update form_pmm set pid = {$_SESSION["pid"]},groupname='".$_SESSION["authProvider"]."',user='".$_SESSION["authUser"]."',authorized=$userauthorized,activity=1, date = NOW(),
  presenting_problem ='".$_POST["presenting_problem"]."',
  currentmeds ='".$_POST["currentmeds"]."',
  allergies ='".$_POST["allergies"]."',
  appearance ='".$_POST["appearance"]."',
  general ='".$_POST["general"]."',
  affect_mood ='".$_POST["affect_mood"]."',
  speech1 ='".$_POST["speech1"]."',
  speech2 ='".$_POST["speech2"]."',
  speech3 ='".$_POST["speech3"]."',
  speech4 ='".$_POST["speech4"]."',
  speech5 ='".$_POST["speech5"]."',
  speech6 ='".$_POST["speech6"]."',
  speech_notes ='".$_POST["speech_notes"]."',
  thought1 ='".$_POST["thought1"]."',
  thought2 ='".$_POST["thought2"]."',
  thought3 ='".$_POST["thought3"]."',
  thought4 ='".$_POST["thought4"]."',
  thought_notes ='".$_POST["thought_notes"]."',  
  psychoa ='".$_POST["psychoa"]."',
  psychob ='".$_POST["psychob"]."',
  psychoc ='".$_POST["psychoc"]."',
  psycho_notes ='".$_POST["psycho_notes"]."',
  labs ='".$_POST["labs"]."',
  other ='".$_POST["other"]."',
  diagchange ='".$_POST["diagchange"]."',
  cgas ='".$_POST["cgas"]."',
  medchanges ='".$_POST["medchanges"]."',
  changereason ='".$_POST["changereason"]."',
  changeother ='".$_POST["changeother"]."',
  laborder   ='".$_POST["laborder"]."',
  labother ='".$_POST["labother"]."',
  appt ='".$_POST["appt"]."',
  apptother ='".$_POST["apptother"]."',
finalize ='".$_POST["finalize"]."' where id=$id");}                      
 //Finish up business.                                           
$_SESSION["encounter"] = $encounter;
formHeader("Redirecting....");
formJump();
formFooter();
?>

