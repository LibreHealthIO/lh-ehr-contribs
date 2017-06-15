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
$newid = formSubmit("form_bbhse", $_POST, $_GET["id"], $userauthorized);

addForm($encounter, "Brief Status Exam", $newid, "bbhse", $pid, $userauthorized);
}elseif ($_GET["mode"] == "update") {
sqlInsert("update form_bbhse set pid = {$_SESSION["pid"]},groupname='".$_SESSION["authProvider"]."',user='".$_SESSION["authUser"]."',authorized=$userauthorized,activity=1, date = NOW(),
itime_in ='".$_POST["itime_in"]."',
itime_out ='".$_POST["itime_out"]."',
dtime_in ='".$_POST["dtime_in"]."',
dtime_out ='".$_POST["dtime_out"]."',
location_other_block ='".$_POST["location_other_block"]."',
purpose ='".$_POST["purpose"]."',
appearance_age ='".$_POST["appearance_age"]."',
appearance_younger ='".$_POST["appearance_younger"]."',
appearance_older ='".$_POST["appearance_older"]."',
appearance_underweight ='".$_POST["appearance_underweight"]."',
appearance_petite ='".$_POST["appearance_petite"]."',
appearance_average ='".$_POST["appearance_average"]."',
appearance_overweight ='".$_POST["appearance_overweight"]."',
coordination_good ='".$_POST["coordination_good"]."',
coordination_staggered ='".$_POST["coordination_staggered"]."',
coordination_shuffled ='".$_POST["coordination_shuffled"]."',
coordination_clumsy ='".$_POST["coordination_clumsy"]."',
eye_good ='".$_POST["eye_good"]."',
eye_brief ='".$_POST["eye_brief"]."',
eye_avoid ='".$_POST["eye_avoid"]."',
affect_normal ='".$_POST["affect_normal"]."',
affect_euthemic ='".$_POST["affect_euthemic"]."',
affect_dysthemic ='".$_POST["affect_dysthemic"]."',
affect_flat ='".$_POST["affect_flat"]."',
affect_labile ='".$_POST["affect_labile"]."',
affect_superficial ='".$_POST["affect_superficial"]."',
mood_calm ='".$_POST["mood_calm"]."',
mood_happy ='".$_POST["mood_happy"]."',
mood_sad ='".$_POST["mood_sad"]."',
mood_angry ='".$_POST["mood_angry"]."',
mood_annoyed ='".$_POST["mood_annoyed"]."',
mood_excited ='".$_POST["mood_excited"]."',
mood_description ='".$_POST["mood_description"]."',
speech_clear ='".$_POST["speech_clear"]."',
speech_articulate ='".$_POST["speech_articulate"]."',
speech_unclear ='".$_POST["speech_unclear"]."',
speech_slow ='".$_POST["speech_slow"]."',
speech_soft ='".$_POST["speech_soft"]."',
speech_mumble ='".$_POST["speech_mumble"]."',
speech_excessive ='".$_POST["speech_excessive"]."',
speech_negative ='".$_POST["speech_negative"]."',
thought_content ='".$_POST["thought_content"]."',
intellectual_ability ='".$_POST["intellectual_ability"]."',
attention_concentration ='".$_POST["attention_concentration"]."',
recall ='".$_POST["recall"]."',
memory ='".$_POST["memory"]."',
insight ='".$_POST["insight"]."',
judgment='".$_POST["judgment"]."',
impulse_control='".$_POST["impulse_control"]."',
risk_assessment ='".$_POST["risk_assessment"]."',
risk_compliance ='".$_POST["risk_compliance"]."',
risk_elope ='".$_POST["risk_elope"]."',
risk_multi ='".$_POST["risk_multi"]."',
risk_inpatient ='".$_POST["risk_inpatient"]."',
risk_hxsuicide ='".$_POST["risk_hxsuicide"]."',
risk_injury ='".$_POST["risk_injury"]."',
risk_suicide ='".$_POST["risk_suicide"]."',
risk_self ='".$_POST["risk_self"]."',
risk_threat ='".$_POST["risk_threat"]."',
risk_aggression ='".$_POST["risk_aggression"]."',
risk_homicide_ideation ='".$_POST["risk_homicide_ideation"]."',
risk_harm ='".$_POST["risk_harm"]."',
risk_other ='".$_POST["risk_other"]."',
risk_management ='".$_POST["risk_management"]."',
presenting_problem ='".$_POST["presenting_problem"]."',
diagnostic_impressions ='".$_POST["diagnostic_impressions"]."',
axis1 ='".$_POST["axis1"]."',
axis2 ='".$_POST["axis2"]."',
axis3 ='".$_POST["axis3"]."',
axis4 ='".$_POST["axis4"]."',
axis5 ='".$_POST["axis5"]."',
criteria1 ='".$_POST["criteria1"]."',
criteria2 ='".$_POST["criteria2"]."',
criteria3 ='".$_POST["criteria3"]."',
criteria4 ='".$_POST["criteria4"]."',
criteria5 ='".$_POST["criteria5"]."',
tbos_eligibility ='".$_POST["tbos_eligibility"]."',
recommendation ='".$_POST["recommendation"]."',
finalize ='".$_POST["finalize"]."' where id=$id");
}
$_SESSION["encounter"] = $encounter;
formHeader("Redirecting....");
formJump();
formFooter();
?>
