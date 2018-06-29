<?php
/**
 * PQRS Parkinsons Group Direct Data Entry
 *
 * Copyright (C) 2016      Suncoast Connection
 *
 * @package librehealthehr
 * @link    http://suncoastconnection.com
 * @author  Suncoast Connection
 * Mozilla Public License Version 2.0, Bryan Lee, <leebc>
 */

include_once("../../globals.php");
require_once($GLOBALS['fileroot']."/library/acl.inc");
?>
<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>
<?php
include_once("$srcdir/api.inc");

$obj = formFetch("pqrs_form_parkinsons", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_parkinsons/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Parkinsons Quality Reporting</b></center></span><br><br>
<center>
<?php if($obj{"finalize"}!="on" OR acl_check('admin', 'super') ){?>
<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[Don't Save Changes]</a><br>
 <input type=checkbox name='finalize' <?php if ($obj{"finalize"} == "on") {echo "checked";};?>>&nbsp;<b>Check here to finalize this note and add CPT2 codes to fee sheet:</b><br>
 <?php }else{
	  echo"This form has been finalized and may not be edited!<br>";?>
 <a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[RETURN TO ENCOUNTER]</a>
 <?php }?>
 </center>
<br>

<table>
<?php $res = sqlStatement("SELECT fname,mname,lname,DOB FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res); ?>

<tr>	<td>
<b><u>Client and Service Information</u></b><br><br>
<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?> 
</td>	</tr>

<tr>	<td>	<br>
<b><u>Purpose of Form</u></b><br>
<textarea cols=120 rows=3 wrap=virtual name="purpose" ><?php  echo stripslashes($obj{"purpose"});?></textarea>
<br><br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0047 
	 <a target="_blank" href="#" title="(NQF 0326)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Care Plan 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was advanced care planning discussed and documented in the medical record? 
	 <a target="_blank" href="#" title="Advance care plan or surrogate decision maker must be documented in the medical record."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Parkinsons0047" value="1123F" <?php if ($obj{"Parkinsons0047"} == "1123F") { echo 'checked=checked'; } ?> > Advanced Care Planning discussed and documented. 
	 <a target="_blank" href="#" title="(1123F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Parkinsons0047" value="1124F" <?php if ($obj{"Parkinsons0047"} == "1124F") { echo 'checked=checked'; } ?> > Advanced care planning discussed and documented; patient did not wish or was not able to name a surrogate decision marker or provide an advance care plan. Patient’s cultural and/or spiritual beliefs preclude a discussion of advance care planning. 
	 <a target="_blank" href="#" title="(1124F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Parkinsons0047" value="1123F:8P" <?php if ($obj{"Parkinsons0047"} == "1123F:8P") { echo 'checked=checked'; } ?> > Advance Care Planning not Documented, Reason not Otherwise Specified. 
	 <a target="_blank" href="#" title="(1123F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0289 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Parkinson’s Disease: Annual Parkinson’s Disease Diagnosis Review 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient have an annual assessment including a review of current medications (e.g., medications that can produce Parkinson-like signs or symptoms) and a review for the presence of atypical features (e.g., falls at presentation and early in the disease course, poor response to levodopa, symmetry at onset, rapid progression [to Hoehn and Yahr stage 3 in 3 years], lack of tremor or dysautonomia)? 
	 <a target="_blank" href="#" title="Patient assessed at least annually."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Parkinsons0289" value="1400F" <?php if ($obj{"Parkinsons0289"} == "1400F") { echo 'checked=checked'; } ?> > Parkinson’s disease diagnosis reviewed. 
	 <a target="_blank" href="#" title="(1400F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Parkinsons0289" value="1400F:8P" <?php if ($obj{"Parkinsons0289"} == "1400F:8P") { echo 'checked=checked'; } ?> > Parkinson’s disease diagnosis was not reviewed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(1400F:8P)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0290 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Parkinson’s Disease: Psychiatric Disorders or Disturbances Assessment 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient assessed for psychiatric disorders or disturbances (e.g., psychosis, depression, anxiety disorder, apathy, or impulse control disorder). Patient assessed at least annually. 
	 
	<p></b>


	<input type="radio" name="Parkinsons0290" value="3700F" <?php if ($obj{"Parkinsons0290"} == "3700F") { echo 'checked=checked'; } ?> > Psychiatric disorders or disturbances assessed. 
	 <a target="_blank" href="#" title="(3700F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Parkinsons0290" value="3700F:8P" <?php if ($obj{"Parkinsons0290"} == "3700F:8P") { echo 'checked=checked'; } ?> > Psychiatric disorders or disturbances not assessed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(3700F:8P)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0291 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Parkinson’s Disease: Cognitive Impairment or Dysfunction Assessment 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient assessed for cognitive impairment or dysfunction at least annually? 
	 
	<p></b>


	<input type="radio" name="Parkinsons0291" value="3720F" <?php if ($obj{"Parkinsons0291"} == "3720F") { echo 'checked=checked'; } ?> > Cognitive impairment or dysfunction assessed. 
	 <a target="_blank" href="#" title="(3720F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Parkinsons0291" value="3720F" <?php if ($obj{"Parkinsons0291"} == "3720F") { echo 'checked=checked'; } ?> > Cognitive impairment or dysfunction was not assessed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(3720F:8P)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0292 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Parkinson’s Disease: Querying about Sleep Disturbances 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient, or caregiver(s), as appropriate) were queried about sleep disturbances at least annually? 
	 
	<p></b>


	<input type="radio" name="Parkinsons0292" value="4328F" <?php if ($obj{"Parkinsons0292"} == "4328F") { echo 'checked=checked'; } ?> > Patient (or caregiver) queried about sleep disturbances. 
	 <a target="_blank" href="#" title="(4328F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Parkinsons0292" value="4328F:1P" <?php if ($obj{"Parkinsons0292"} == "4328F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not querying about sleep disturbances 
	 <a target="_blank" href="#" title="(4328F:1P)(Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Parkinsons0292" value="4328F:8P" <?php if ($obj{"Parkinsons0292"} == "4328F:8P") { echo 'checked=checked'; } ?> > Patient (or caregiver) not queried about sleep disturbances, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4328F:8P)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0293 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Parkinson’s Disease: Rehabilitative Therapy Options 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Were rehabilitative therapy options (e.g., physical, occupational, or speech therapy) discussed at least annually with patient who underwent rehabilitative therapy, (or caregiver(s), as appropriate), discussed at least annually? 
	 
	<p></b>


	<input type="radio" name="Parkinsons0293" value="4400F" <?php if ($obj{"Parkinsons0293"} == "4400F") { echo 'checked=checked'; } ?> > Rehabilitative therapy options discussed with patient (or caregiver). 
	 <a target="_blank" href="#" title="(4400F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Parkinsons0293" value="4400F:1P" <?php if ($obj{"Parkinsons0293"} == "4400F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not discussing rehabilitative therapy options with patient (or caregiver). 
	 <a target="_blank" href="#" title="(4400F:1P)(Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Parkinsons0293" value="4400F:8P" <?php if ($obj{"Parkinsons0293"} == "4400F:8P") { echo 'checked=checked'; } ?> > Rehabilitative therapy options not discussed with patient (or caregiver), reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4400F:8P)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0294 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Parkinson’s Disease: Parkinson’s Disease Medical and Surgical Treatment Options Reviewed -- National Quality Strategy Domain 
	 <a target="_blank" href="#" title="Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient have Parkinson’s disease treatment options (e.g., non-pharmacological treatment, pharmacological treatment, or surgical treatment) reviewed at least once annually? 
	 
	<p></b>


	<input type="radio" name="Parkinsons0294" value="4325F" <?php if ($obj{"Parkinsons0294"} == "4325F") { echo 'checked=checked'; } ?> > Medical and surgical treatment options reviewed with patient (or caregiver). 
	 <a target="_blank" href="#" title="(4325F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Parkinsons0294" value="4325F:1P" <?php if ($obj{"Parkinsons0294"} == "4325F:1P") { echo 'checked=checked'; } ?> > Medical and surgical treatment options not reviewed with patient (or caregiver) for medical reasons (eg, patient is unable to respond and no informant is available). 
	 <a target="_blank" href="#" title="(4325F:1P)(Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Parkinsons0294" value="4325F:8P" <?php if ($obj{"Parkinsons0294"} == "4325F:8P") { echo 'checked=checked'; } ?> > Medical and surgical treatment options not reviewed with patient (or caregiver), reasons not otherwise specified. 
	 <a target="_blank" href="#" title="(4325F:8P)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

	<tr>	<td>
		<b>Additional notes and recommendations:</b><br>
		<textarea cols=83 rows=1 wrap=virtual  name="recommendation" ><?php echo stripslashes($obj{"recommendation"});?></textarea>
	</td>	</tr>
</table>
<br><br>

<center>
<?php if($obj{"finalize"}!="on" OR acl_check('admin', 'super') ) {?>
<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[Don't Save Changes]</a><br>
 <b>You must check the Finalize box at the top of the form to prevent future editing.</b><br>
 <?php }else{echo"This form has been finalized and may not be edited!<br>";?>
 <a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[RETURN TO ENCOUNTER]</a>
 <?php }?>
 </center>
</form>
<?php
formFooter();
?>
