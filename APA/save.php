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
	
$newid = formSubmit("form_apa", $_POST, $_GET["id"], $userauthorized);
//save the cfars form using the forms api to redirect back to encounter
addForm($encounter, "APA New/Established", $newid, "apa", $pid, $userauthorized);
}elseif ($_GET["mode"] == "update") {
sqlInsert("update form_apa set pid = {$_SESSION["pid"]},groupname='".$_SESSION["authProvider"]."',user='".$_SESSION["authUser"]."',authorized=$userauthorized,activity=1, date = NOW(),
  established ='".$_POST["established"]."',
  presenting_problem ='".$_POST["presenting_problem"]."',
  hpi ='".$_POST["hpi"]."',
  pph ='".$_POST["pph"]."',
  pmh1 ='".$_POST["pmh1"]."',
  pmh2='".$_POST["pmh2"]."',
  pmh3 ='".$_POST["pmh3"]."',
  pmh4 ='".$_POST["pmh4"]."',
  pfsh1 ='".$_POST["pfsh1"]."',
  pfsh_notes ='".$_POST["pfsh_notes"]."',
  ros1 ='".$_POST["ros1"]."',
  ros2 ='".$_POST["ros2"]."',
  ros3 ='".$_POST["ros3"]."',
  ros4 ='".$_POST["ros4"]."',
  ros5 ='".$_POST["ros5"]."',
  ros6 ='".$_POST["ros6"]."',
  ros7 ='".$_POST["ros7"]."',
  ros8 ='".$_POST["ros8"]."',
  ros9 ='".$_POST["ros9"]."',
  ros10 ='".$_POST["ros10"]."',
  ros11 ='".$_POST["ros11"]."',
  ros12 ='".$_POST["ros12"]."',
  ros13 ='".$_POST["ros13"]."',
  ros_note1 ='".$_POST["ros_note1"]."',
  ros_note2 ='".$_POST["ros_note2"]."',
  ros_note3 ='".$_POST["ros_note3"]."',
  ros_note4 ='".$_POST["ros_note4"]."',
  ros_note5 ='".$_POST["ros_note5"]."',
  ros_note6 ='".$_POST["ros_note6"]."',
  ros_note7 ='".$_POST["ros_note7"]."',
  ros_note8 ='".$_POST["ros_note8"]."',
  ros_note9 ='".$_POST["ros_note9"]."',
  ros_note10 ='".$_POST["ros_note10"]."',
  ros_note11 ='".$_POST["ros_note11"]."',
  ros_note12 ='".$_POST["ros_note12"]."',
  ros_note13 ='".$_POST["ros_note13"]."',
  personal_exam ='".$_POST["personal_exam"]."',
  vital1 ='".$_POST["vital1"]."',
  vital2 ='".$_POST["vital2"]."',
  vital3 ='".$_POST["vital3"]."',
  vital4 ='".$_POST["vital4"]."',
  vital5 ='".$_POST["vital5"]."',
  vital6 ='".$_POST["vital6"]."',
  vital7 ='".$_POST["vital7"]."',
  appearance ='".$_POST["appearance"]."',
  musculoskeletal ='".$_POST["musculoskeletal"]."',
  gait ='".$_POST["gait"]."',
  speech1 ='".$_POST["speech1"]."',
  speech2 ='".$_POST["speech2"]."',
  speech3 ='".$_POST["speech3"]."',
  speech4 ='".$_POST["speech4"]."',
  speech5 ='".$_POST["speech5"]."',
  speech_notes ='".$_POST["speech_notes"]."',
  thought1 ='".$_POST["thought1"]."',
  thought2 ='".$_POST["thought2"]."',
  thought3 ='".$_POST["thought3"]."',
  thought4 ='".$_POST["thought4"]."',
  thought_notes ='".$_POST["thought_notes"]."',
  associations ='".$_POST["associations"]."',
  psycho1 ='".$_POST["psycho1"]."',
  psycho2 ='".$_POST["psycho2"]."',
  psycho3 ='".$_POST["psycho3"]."',
  psycho4 ='".$_POST["psycho4"]."',
  psycho5 ='".$_POST["psycho5"]."',
  psycho6 ='".$_POST["psycho6"]."',
  psycho_notes ='".$_POST["psycho_notes"]."',
  judge ='".$_POST["judge"]."',
  orient ='".$_POST["orient"]."',
  memory ='".$_POST["memory"]."',
  attention ='".$_POST["attention"]."',
  language ='".$_POST["language"]."',
  knowledge_notes ='".$_POST["knowledge_note"]."',
  knowledge1   ='".$_POST["knowledge1"]."',
  affect_mood ='".$_POST["affect_mood"]."',
  other ='".$_POST["other"]."',
  eval_admit ='".$_POST["eval_admit"]."',
  axis ='".$_POST["axis"]."',
  diagnostic_ruleout ='".$_POST["diagnostic_ruleout"]."',
  diagnostic_formulation ='".$_POST["diagnostic_formulation"]."',
  med_review ='".$_POST["med_review"]."',
  conditions ='".$_POST["conditions"]."',
  plan1 ='".$_POST["plan1"]."',
  plan2 ='".$_POST["plan2"]."',
  plan3 ='".$_POST["plan3"]."',
  plan4 ='".$_POST["plan4"]."',
  percentage1 ='".$_POST["percentage1"]."',
  documentation ='".$_POST["documentation"]."',
finalize ='".$_POST["finalize"]."' where id=$id");}


                        
 //Finish up business.                                           
$_SESSION["encounter"] = $encounter;
formHeader("Redirecting....");
formJump();
formFooter();
?>

