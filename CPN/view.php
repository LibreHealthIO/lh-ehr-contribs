<?php
//by Art Eaton
include_once("../../globals.php");
?>
<html><head>
<? html_header_show();?>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
<link rel=stylesheet type="text/css" href="print.css" />
</head>
<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<?php
include_once("$srcdir/api.inc");

$obj = formFetch("form_cpn", $_GET["id"]);

?>
<form method=post action="<?echo $rootdir?>/forms/CPN/save.php?mode=update&id=<?echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Brief Status Exam</b></center></span><br><br>

<center>
<? if($obj{"finalize"}!="on"OR ($_SESSION["authUser"] ="ncuddy" OR $_SESSION["authUser"] ="leaton" OR $_SESSION["authUser"] ="Art")){?>
	<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
	<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 	onclick="top.restoreSession()">[Don't Save Changes]</a><br>
 	<input type=checkbox name='finalize' <? if ($obj{"finalize"} == "on") {echo "checked";};?>>&nbsp;<b>Check here to finalize this note:</b><br>
 <?	}else{
	 	echo"This form has been finalized and may not be edited!<br>";?>
 		<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 		onclick="top.restoreSession()">[RETURN TO ENCOUNTER]</a>
 <?}?>
 </center>
<br></br>
<div class="noprint"><a href="javascript:window.print();">Print This Page</a></div>
<br></br>

<?php $res = sqlStatement("SELECT date,counselor_id,facility FROM form_encounter WHERE encounter = $encounter");
$encounterdata_array = SqlFetchArray($res); ?>
<?php $res = sqlStatement("SELECT fname,mname,lname,ss,street,city,state,postal_code,phone_home,DOB FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res); ?>
<b><u>Client and Service Information</u></b><br><br>
<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?> 
<br>


<b>Start Time:</b>&nbsp;<input type="text" name='data1' value="<? echo stripslashes($obj{"data1"});?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>End Time:</b>&nbsp;<input type="text" name='data2' value="<? echo stripslashes($obj{"data2"});?>">
<br><br>

<b><u>Participants:  </u></b><br>
<textarea cols=80 rows=1 wrap=virtual name="data3" ><? echo stripslashes($obj{"data3"});?></textarea>
<br><br>

<b><u>Contacts Since Last Session:</u></b><br>
<textarea cols=120 rows=3 wrap=virtual name="data4" ><? echo stripslashes($obj{"data4"});?></textarea>
<br><br>

<b><u>Treatment Goals/Objectives Addressed:</u></b><br>
<textarea cols=120 rows=3 wrap=virtual name="data5" ><? echo stripslashes($obj{"data5"});?></textarea>
<br><br>

<b><u>Therapeutic Interventions:</u></b><br>
<textarea cols=120 rows=7 wrap=virtual name="data6" ><? echo stripslashes($obj{"data6"});?></textarea>
<br><br>

<b><u>Session Focus:</u></b><br>
<textarea cols=120 rows=3 wrap=virtual name="data7" ><? echo stripslashes($obj{"data7"});?></textarea>
<br><br>

<b>Assessment/Response of Client:</b><br>
<input type=checkbox name='data8' <? if ($obj{"data8"} == "on") {echo "checked";};?>>&nbsp;<b>Engaging</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data9' <? if ($obj{"data9"} == "on") {echo "checked";};?>>&nbsp;<b>Withdrawn</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data10' <? if ($obj{"data10"} == "on") {echo "checked";};?>>&nbsp;<b>Cooperative</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data11' <? if ($obj{"data11"} == "on") {echo "checked";};?>>&nbsp;<b>Defiant</b><br>
<input type=checkbox name='data12' <? if ($obj{"data12"} == "on") {echo "checked";};?>>&nbsp;<b>Flat Affect</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data13' <? if ($obj{"data13"} == "on") {echo "checked";};?>>&nbsp;<b>Anxious/Fearful</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data14' <? if ($obj{"data14"} == "on") {echo "checked";};?>>&nbsp;<b>Happy</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data15' <? if ($obj{"data15"} == "on") {echo "checked";};?>>&nbsp;<b>Sad</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data16' <? if ($obj{"data16"} == "on") {echo "checked";};?>>&nbsp;<b>Angry</b>
<br><br>

<b><u>Progress Toward Treatment Goals:</u></b><br>
<i>including strengths/limitations that impacted achievement</i><br>
<textarea cols=120 rows=3 wrap=virtual name="data17" ><? echo stripslashes($obj{"data17"});?></textarea>
<br><br>

<p><b>Risk Assessment:</b><br>
<select name="data18" size="3">
<option value="No Noted or Observed Risk"<?php if ($obj{'data18'} == 'No Noted or Observed Risk') { echo'selected="selected"'; } ?>>None Noted</option>
<option value="Low Risk"<?php if ($obj{'data18'} == 'Low Risk') { echo'selected="selected"'; } ?>>Low Risk</option>
<option value="Moderate Risk"<?php if ($obj{'data18'} == 'Moderate Risk') { echo'selected="selected"'; } ?>>Moderate Risk</option>
<option value="High Risk"<?php if ($obj{'data18'} == 'High Risk') { echo'selected="selected"'; } ?>>High Risk</option>
<option value="Very High Risk"<?php if ($obj{'data18'} == 'Very High Risk') { echo'selected="selected"'; } ?>>Very High Risk</option>
</select>
</p>




<b>Risk Factors:</b><br>
<input type=checkbox name='data19' <? if ($obj{"data19"} == "on") {echo "checked";};?>>&nbsp;<b>Hx of Tx Non-Compliance</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data20' <? if ($obj{"data20"} == "on") {echo "checked";};?>>&nbsp;<b>Hx/Px of Elopement</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data21' <? if ($obj{"data21"} == "on") {echo "checked";};?>>&nbsp;<b>Hx of Multiple Dx</b><br>
<input type=checkbox name='data22' <? if ($obj{"data22"} == "on") {echo "checked";};?>>&nbsp;<b>Prior Inpatient Treatment</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data23' <? if ($obj{"data23"} == "on") {echo "checked";};?>>&nbsp;<b>Prior Homicide or Suicide Attempt</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data24' <? if ($obj{"data24"} == "on") {echo "checked";};?>>&nbsp;<b>Self Injurious</b><br>
<input type=checkbox name='data25' <? if ($obj{"data25"} == "on") {echo "checked";};?>>&nbsp;<b>Current Suicide Ideation</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data26' <? if ($obj{"data26"} == "on") {echo "checked";};?>>&nbsp;<b>Imminent Risk of Harm to Self</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data27' <? if ($obj{"data27"} == "on") {echo "checked";};?>>&nbsp;<b>Threats to Harm Others</b><br>
<input type=checkbox name='data28' <? if ($obj{"data28"} == "on") {echo "checked";};?>>&nbsp;<b>Aggression</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data29' <? if ($obj{"data29"} == "on") {echo "checked";};?>>&nbsp;<b>Current Homicidal Ideation</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data30' <? if ($obj{"data30"} == "on") {echo "checked";};?>>&nbsp;<b>Imminent Risk of Harm to Others</b><br>
<input type=checkbox name='data31' <? if ($obj{"data31"} == "on") {echo "checked";};?>>&nbsp;<b>Sexual Acting Out</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data32' <? if ($obj{"data32"} == "on") {echo "checked";};?>>&nbsp;<b>Other Risk Factors Noted</b>
<br><br>

<b><u>Risk Management</u></b><br>
<textarea cols=120 rows=7 wrap=virtual name="data33"><? echo stripslashes($obj{"data33"});?></textarea>
<br><br>


<b>Plan: </b><br>
<textarea cols=120 rows=1 wrap=virtual  name="data34" ><? echo stripslashes($obj{"data34"});?></textarea>
<br><br>

Next Appointment Date : <? echo stripslashes($obj{"data35"});?><br>
Next Appointment Start Time : <? echo stripslashes($obj{"data36"});?><br>
Next Appointment End Time : <? echo stripslashes($obj{"data37"});?> <br>
This is the date and time of appointment set at time of writing.  Edit appointment data in the Calender.



<br><br>




<center>
<? if($obj{"finalize"}!="on"){?>
<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[Don't Save Changes]</a><br>
 <b>You must check the Finalize box at the top of the form to prevent future editing.</b><br>
 <?}else{echo"This form has been finalized and may not be edited!<br>";?>
 <a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[RETURN TO ENCOUNTER]</a>
 <?}?>
 </center>
</form>
<?php
formFooter();
?>
