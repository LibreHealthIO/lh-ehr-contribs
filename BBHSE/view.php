<?php
//by Art Eaton
include_once("../../globals.php");
?>
<html><head>
<? html_header_show();?>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
</head>
<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<?php
include_once("$srcdir/api.inc");

$obj = formFetch("form_bbhse", $_GET["id"]);

?>
<form method=post action="<?echo $rootdir?>/forms/bbhse/save.php?mode=update&id=<?echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Brief Status Exam</b></center></span><br><br>
<center>
<? if($obj{"finalize"}!="on" OR ($_SESSION["authUser"] ="ncuddy" OR $_SESSION["authUser"] ="leaton" OR $_SESSION["authUser"] ="Art")){?>
<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[Don't Save Changes]</a><br>
 <input type=checkbox name='finalize' <? if ($obj{"finalize"} == "on") {echo "checked";};?>>&nbsp;<b>Check here to finalize this note:</b><br>
 <?}else{
	  echo"This form has been finalized and may not be edited!<br>";?>
 <a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[RETURN TO ENCOUNTER]</a>
 <?}?>
 </center>
<br></br>

<?php $res = sqlStatement("SELECT date,counselor_id,facility FROM form_encounter WHERE encounter = $encounter");
$encounterdata_array = SqlFetchArray($res); ?>
<?php $res = sqlStatement("SELECT fname,mname,lname,ss,street,city,state,postal_code,phone_home,DOB FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res); ?>
<b><u>Client and Service Information</u></b><br><br>
<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?> 
<br>
<b>Interview Time In:</b>&nbsp;<input type="text" name="itime_in" value="<? echo stripslashes($obj{"itime_in"});?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>Interview Time Out:</b>&nbsp;<input type="text" name="itime_out" value="<? echo stripslashes($obj{"itime_out"});?>">
<br><br>

<b>Documentation Time In:</b>&nbsp;<input type="text" name="dtime_in" value="<? echo stripslashes($obj{"dtime_in"});?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>Documentation Time Out:</b>&nbsp;<input type="text" name="dtime_out" value="<? echo stripslashes($obj{"dtime_out"});?>">
<br><br>

<b><u>Other Location Description:  </u></b><br>
<textarea cols=80 rows=1 wrap=virtual name="location_other_block" ><? echo stripslashes($obj{"location_other_block"});?></textarea>
<br><br>

<br>
<b><u>Purpose of Exam</u></b><br>
<textarea cols=120 rows=3 wrap=virtual name="purpose" ><? echo stripslashes($obj{"purpose"});?></textarea>
<br><br>

<b><u>Mental Status</u></b>
<br><br>
<b>Appearance:</b><br>
<input type=checkbox name='appearance_age' <? if ($obj{"appearance_age"} == "on") {echo "checked";};?>>&nbsp;<b>Stated Age</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='appearance_younger'<? if ($obj{"appearance_younger"} == "on") {echo "checked";};?>>&nbsp;<b>Younger than Stated Age</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='appearance_older'<? if ($obj{"appearance_older"} == "on") {echo "checked";};?>>&nbsp;<b>Older than Stated Age</b><br>
<input type=checkbox name='appearance_underweight'<? if ($obj{"appearance_underweight"} == "on") {echo "checked";};?>>&nbsp;<b>Underweight</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='appearance_petite'<? if ($obj{"appearance_petite"} == "on") {echo "checked";};?>>&nbsp;<b>Petite</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='appearance_average'<? if ($obj{"appearance_average"} == "on") {echo "checked";};?>>&nbsp;<b>Average Size</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='appearance_overweight'<? if ($obj{"appearance_overweight"} == "on") {echo "checked";};?>>&nbsp;<b>Overweight</b>
<br><br>

<b>Coordination/Gait:</b><br>
<input type=checkbox name='coordination_good'<? if ($obj{"coordination_good"} == "on") {echo "checked";};?>>&nbsp;<b>No Difficulty</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='coordination_staggered'<? if ($obj{"coordination_staggered"} == "on") {echo "checked";};?>>&nbsp;<b>Staggered</b><br>
<input type=checkbox name='coordination_shuffled'<? if ($obj{"coordination_shuffled"} == "on") {echo "checked";};?>>&nbsp;<b>Shuffled</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='coordination_clumsy'<? if ($obj{"coordination_clumsy"} == "on") {echo "checked";};?>>&nbsp;<b>Clumsy</b>
<br><br>

<b>Eye Contact:</b><br>
<input type=checkbox name='eye_good' <? if ($obj{"eye_good"} == "on") {echo "checked";};?>>&nbsp;<b>Good</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='eye_brief' <? if ($obj{"eye_brief"} == "on") {echo "checked";};?>>&nbsp;<b>Brief/Fleeting</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='eye_avoid' <? if ($obj{"eye_avoid"} == "on") {echo "checked";};?>>&nbsp;<b>Avoided</b>
<br><br>

<b>Affect (Observed):</b><br>
<input type=checkbox name='affect_normal' <? if ($obj{"affect_normal"} == "on") {echo "checked";};?>>&nbsp;<b>Normal/appropriate</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='affect_euthemic' <? if ($obj{"affect_euthemic"} == "on") {echo "checked";};?>>&nbsp;<b>Euthemic</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='affect_dysthemic' <? if ($obj{"affect_dysthemic"} == "on") {echo "checked";};?>>&nbsp;<b>Dysthemic</b><br>
<input type=checkbox name='affect_flat' <? if ($obj{"affect_flat"} == "on") {echo "checked";};?>>&nbsp;<b>Flat</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='affect_labile' <? if ($obj{"affect_labile"} == "on") {echo "checked";};?>>&nbsp;<b>Vacilating/Labile</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='affect_superficial' <? if ($obj{"affect_superficial"} == "on") {echo "checked";};?>>&nbsp;<b>Superficial/Inconsistent with Mood</b>
<br><br>

<b>Mood (Client's Description):</b><br>
<input type=checkbox name='mood_calm' <? if ($obj{"mood_calm"} == "on") {echo "checked";};?>>&nbsp;<b>Calm</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='mood_happy' <? if ($obj{"mood_happy"} == "on") {echo "checked";};?>>&nbsp;<b>Happy</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='mood_sad' <? if ($obj{"mood_sad"} == "on") {echo "checked";};?>>&nbsp;<b>Sad</b><br>
<input type=checkbox name='mood_angry' <? if ($obj{"mood_angry"} == "on") {echo "checked";};?>>&nbsp;<b>Angry</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='mood_annoyed' <? if ($obj{"mood_annoyed"} == "on") {echo "checked";};?>>&nbsp;<b>Annoyed</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='mood_excited' <? if ($obj{"mood_excited"} == "on") {echo "checked";};?>>&nbsp;<b>Excited</b>
<br><br>

<b><u>Mood Description</u></b><br>
<textarea cols=120 rows=7 wrap=virtual name="mood_description" ><? echo stripslashes($obj{"mood_description"});?></textarea>
<br><br>

<b>Speech/Stream of Thought:</b><br>
<input type=checkbox name='speech_clear' <? if ($obj{"speech_clear"} == "on") {echo "checked";};?>>&nbsp;<b>Clear</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='speech_articulate' <? if ($obj{"speech_articulate"} == "on") {echo "checked";};?>>&nbsp;<b>Articulate</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='speech_unclear' <? if ($obj{"speech_unclear"} == "on") {echo "checked";};?>>&nbsp;<b>Unclear</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='speech_slow' <? if ($obj{"speech_slow"} == "on") {echo "checked";};?>>&nbsp;<b>Slow</b><br>
<input type=checkbox name='speech_soft' <? if ($obj{"speech_soft"} == "on") {echo "checked";};?>>&nbsp;<b>Soft Spoken</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='speech_mumble' <? if ($obj{"speech_soft"} == "on") {echo "checked";};?>>&nbsp;<b>Mumbled</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='speech_excessive' <? if ($obj{"speech_excessive"} == "on") {echo "checked";};?>>&nbsp;<b>Excessive/Rapid</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='speech_negative' <? if ($obj{"speech_negative"} == "on") {echo "checked";};?>>&nbsp;<b>Negative/Critical</b>

<table><tr><td>



<b>Thought Content:<br>
<select name='thought_content'size="3">
<option value="No Abnormality"<?php if ($obj{"thought_content"} == "No Abnormality") { echo'selected="selected"'; } ?> >No Abnormality</option>
<option value="Tangental" <?php if ($obj{'thought_content'} == "Tangental") {echo'selected="selected"'; } ?>>Tangental</option>
<option value="Perserverative/Obsessive" <?php if ($obj{'thought_content'} == "Perserverative/Obsessive") { echo'selected="selected"'; } ?>>Perserverative/Obsessive</option>
<option value="Delusions/Hallucinations" <?php if ($obj{'thought_content'} == "Delusions/Hallucinations") { echo'selected="selected"'; } ?>>Delusions/Hallucinations</option>
</select>
</b>
</td>
<td>
<b>Intellectual Ability:<br>
<select name="intellectual_ability" size="3">
<option value="Below Average" <?php if ($obj{'intellectual_ability'} == 'Below Average') { echo'selected="selected"'; } ?>>Below Average</option>
<option value="Average" <?php if ($obj{'intellectual_ability'} == 'Average') { echo'selected="selected"'; } ?>>Average</option>
<option value="Above Average"<?php if ($obj{'intellectual_ability'} == 'Above Average') { echo'selected="selected"'; } ?>>Above Average</option>
</select>
</b>
</td></tr>

<tr><td>
<b>Attention/Concentration:<br>
<select name="attention_concentration" size="3">
<option value="Alert" <?php if ($obj{'attention_concentration'} == 'Alert') { echo'selected="selected"'; } ?>>Alert</option>
<option value="Oriented" <?php if ($obj{'attention_concentration'} == 'Oriented') { echo'selected="selected"'; } ?>>Oriented</option>
<option value="Inattentive/Distracted"<?php if ($obj{'attention_concentration'} == 'Inattentive/Distracted') { echo'selected="selected"'; } ?>>Inattentive/Distracted</option>
</select>
</b>
</td>
<td>
<b>Recall:<br>
<select name="recall" size="3">
<option value="Adequate Detail"  <?php if ($obj{'recall'} == 'Adequate Detail') { echo'selected="selected"'; } ?>>Adequate Detail</option>
<option value="Sparse Detail" <?php if ($obj{'recall'} == 'Sparse Detail') { echo'selected="selected"'; } ?>>Sparse Detail</option>
<option value="Resisted/Avoided Topics" <?php if ($obj{'recall'} == 'Resisted/Avoided Topics') { echo'selected="selected"'; } ?>>Resisted/Avoided Topics</option>
</select>
</b>
</td></tr>
<tr>
<td>
<b>Memory:<br>
<select name="memory" size="3">
<option value="No Noted Memory Impairment"  <?php if ($obj{'memory'} == 'No Noted Memory Impairment') { echo'selected="selected"'; } ?>>No Impairment Noted</option>
<option value="Short-Term Impairment" <?php if ($obj{'memory'} == 'Short-Term Impairment') { echo'selected="selected"'; } ?>>Short Term Impairment</option>
<option value="Long Term Impairment" <?php if ($obj{'memory'} == 'Long Term Impairment') { echo'selected="selected"'; } ?>>Long Term Impairment</option>
</select>
</b>
</td></tr>

<tr><td>
<b>Insight:<br>
<select name="insight" size="3">
<option value="Good"  <?php if ($obj{'insight'} == 'Good') { echo'selected="selected"'; } ?>>Good</option>
<option value="Fair" <?php if ($obj{'insight'} == 'Fair') { echo'selected="selected"'; } ?>>Fair</option>
<option value="Poor" <?php if ($obj{'insight'} == 'Poor') { echo'selected="selected"'; } ?>>Poor</option>
</select>
</b>
</td>
<td>
<b>Judgment:<br>
<select name="judgment" size="3">
<option value="Good"  <?php if ($obj{'judgment'} == 'Good') { echo'selected="selected"'; } ?>>Good</option>
<option value="Fair" <?php if ($obj{'judgment'} == 'Fair') { echo'selected="selected"'; } ?>>Fair</option>
<option value="Poor" <?php if ($obj{'judgment'} == 'Poor') { echo'selected="selected"'; } ?>>Poor</option>
</select>
</b>
</td></tr>
<tr><td>
<b>Impulse Control:<br>
<select name="impulse_control" size="3">
<option value="Good"  <?php if ($obj{'impulse_control'} == 'Good') { echo'selected="selected"'; } ?>>Good</option>
<option value="Fair" <?php if ($obj{'impulse_control'} == 'Fair') { echo'selected="selected"'; } ?>>Fair</option>
<option value="Poor" <?php if ($obj{'impulse_control'} == 'Poor') { echo'selected="selected"'; } ?>>Poor</option>
</select>
</b>
</td></tr>
<table>
<br><br>


<p><b>Risk Assessment:</b><br>
<select name="risk_assessment" size="3">
<option value="No Noted or Observed Risk"<?php if ($obj{'risk_assessment'} == 'No Noted or Observed Risk') { echo'selected="selected"'; } ?>>None Noted</option>
<option value="Low Risk"<?php if ($obj{'risk_assessment'} == 'Low Risk') { echo'selected="selected"'; } ?>>Low Risk</option>
<option value="Moderate Risk"<?php if ($obj{'risk_assessment'} == 'Moderate Risk') { echo'selected="selected"'; } ?>>Moderate Risk</option>
<option value="High Risk"<?php if ($obj{'risk_assessment'} == 'High Risk') { echo'selected="selected"'; } ?>>High Risk</option>
<option value="Very High Risk"<?php if ($obj{'risk_assessment'} == 'Very High Risk') { echo'selected="selected"'; } ?>>Very High Risk</option>
</select>
</p>


<b>Risk Factors:</b>
<input type=checkbox name='risk_compliance' <? if ($obj{"risk_compliance"} == "on") {echo "checked";};?>>&nbsp;<b>Hx of Tx Non-Compliance</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='risk_elope' <? if ($obj{"risk_elope"} == "on") {echo "checked";};?>>&nbsp;<b>Hx/Px of Elopement</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='risk_multi' <? if ($obj{"risk_multi"} == "on") {echo "checked";};?>>&nbsp;<b>Hx of Multiple Dx</b><br>
<input type=checkbox name='risk_inpatient' <? if ($obj{"risk_inpatient"} == "on") {echo "checked";};?>>&nbsp;<b>Prior Inpatient Treatment</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='risk_hxsuicide' <? if ($obj{"risk_hxsuicide"} == "on") {echo "checked";};?>>&nbsp;<b>Prior Homicide or Suicide Attempt</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='risk_injury' <? if ($obj{"risk_injury"} == "on") {echo "checked";};?>>&nbsp;<b>Self Injurious</b><br>
<input type=checkbox name='risk_suicide' <? if ($obj{"risk_suicide"} == "on") {echo "checked";};?>>&nbsp;<b>Current Suicide Ideation</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='risk_self' <? if ($obj{"risk_self"} == "on") {echo "checked";};?>>&nbsp;<b>Imminent Risk of Harm to Self</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='risk_threat' <? if ($obj{"risk_threat"} == "on") {echo "checked";};?>>&nbsp;<b>Threats to Harm Others</b><br>
<input type=checkbox name='risk_aggression' <? if ($obj{"risk_aggression"} == "on") {echo "checked";};?>>&nbsp;<b>Aggression</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='risk_homicide_ideation' <? if ($obj{"risk_homicide_ideation"} == "on") {echo "checked";};?>>&nbsp;<b>Current Homicidal Ideation</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='risk_harm' <? if ($obj{"risk_harm"} == "on") {echo "checked";};?>>&nbsp;<b>Imminent Risk of Harm to Others</b><br>
<input type=checkbox name='risk_other' <? if ($obj{"risk_other"} == "on") {echo "checked";};?>>&nbsp;<b>Other Risk Factors Noted</b>
<br><br>

<b><u>Risk Management</u></b><br>
<textarea cols=120 rows=7 wrap=virtual name="risk_management"><? echo stripslashes($obj{"risk_management"});?></textarea>
<br><br>

<b><u>Presenting Problems/Symptoms (Behavioral Stability)</u></b><br>
<textarea cols=120 rows=7 wrap=virtual name="presenting_problem" ><? echo stripslashes($obj{"presenting_problem"});?></textarea>
<br><br>

<b><u>Diagnostic Impressions</u></b><br>
<textarea cols=120 rows=7 wrap=virtual name="diagnostic_impressions" ><? echo stripslashes($obj{"diagnostic_impressions"});?></textarea>
<br><br>



<b>Findings:</b>
<br><br>
<b>Axis I</b>
<textarea cols=120 rows=3 wrap=virtual name="axis1" ><? echo stripslashes($obj{"axis1"});?></textarea><br><br>
<b>Axis II</b>
<textarea cols=120 rows=1 wrap=virtual name="axis2" ><? echo stripslashes($obj{"axis2"});?></textarea><br><br>
<b>Axis III</b>
<textarea cols=120 rows=1 wrap=virtual name="axis3" ><? echo stripslashes($obj{"axis3"});?></textarea><br><br>
<b>Axis IV</b>
<textarea cols=120 rows=1 wrap=virtual name="axis4" ><? echo stripslashes($obj{"axis4"});?></textarea><br><br>
<b>Axis V/CGAS</b>
<textarea cols=120 rows=1 wrap=virtual name="axis5" ><? echo stripslashes($obj{"axis5"});?></textarea><br><br>

<b>Eligibility Criteria</b><br><br>
<input type=checkbox name='criteria1' <? if ($obj{"criteria1"} == "on") {echo "checked";};?>>&nbsp;<b>Client has an ICD-9-CM diagnosis in the following range: 294.80, 294.90, 300.00 through 305.90, 307.10, 307.23, 307.50 through 307.70, 308.00 through 312.40, 312.81 through 314.90;</b>
<br><br>
<input type=checkbox name='criteria2' <? if ($obj{"criteria2"} == "on") {echo "checked";};?>>&nbsp;<b>and client is enrolled in Special Education for Seriously Emotionally Disturbed (SED) or Emotionally Handicapped (EH) School Placement</b>
<br><br>
<input type=checkbox name='criteria3' <? if ($obj{"criteria3"} == "on") {echo "checked";};?>>&nbsp;<b>or client has scored a 60 or below on the Axis V Children’s Global Assessment of Functioning Scale within the last 6 months.</b>
<br><br>
<input type=checkbox name='criteria4' <? if ($obj{"criteria4"} == "on") {echo "checked";};?>>&nbsp;<b>OR client has an ICD-9-CM diagnosis of 295.00 through 298.90 (schizophrenia or other psychotic disorders, major depression or bipolar disorder) or 303.00 through 305.90 (substance abuse).</b>
<br><br>
<input type=checkbox name='criteria5' <? if ($obj{"criteria5"} == "on") {echo "checked";};?>>&nbsp;<b>Certification: There is adequate evidence to indicate that the client is AT RISK for a more intensive, restrictive and costly behavioral health placement and the client’s condition and functional level cannot be improved with a less intensive service such as individual or family therapy or group therapy. </b>
<br><br>

<b><u>Risk for Out of Home Placement/TBOS Eligibility:</u></b><br>
<textarea cols=83 rows=1 wrap=virtual  name="tbos_eligibility" ><? echo stripslashes($obj{"tbos_eligibility"});?></textarea>
<br><br>


<b>Recommendation/Plan:</b><br>
<textarea cols=83 rows=1 wrap=virtual  name="recommendation" ><? echo stripslashes($obj{"recommendation"});?></textarea>
<br><br>


<center>
<? if($obj{"finalize"}!="on"OR ($_SESSION["authUser"] ="ncuddy" OR $_SESSION["authUser"] ="leaton" OR $_SESSION["authUser"] ="Art")){?>
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
