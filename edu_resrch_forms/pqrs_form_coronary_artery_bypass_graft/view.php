<?php
/**
 * PQRS Coronary Artery Bypass Graft Group Direct Data Entry
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

$obj = formFetch("pqrs_form_coronary_artery_bypass_graft", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_coronary_artery_bypass_graft/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Coronary Artery Bypass Graft Quality Reporting</b></center></span><br><br>
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
	Measure #0043 
	 <a target="_blank" href="#" title="(NQF #0134)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Coronary Artery Bypass Graft (CABG): Use of Internal Mammary Artery (IMA) in Patients with Isolated CABG Surgery 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient undergoing isolated CABG receive an IMA graft? 
	 
	<p></b>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0043" value="4110F" <?php if ($obj{"Coronary_Artery_Bypass_Graft0043"} == "4110F") { echo 'checked=checked'; } ?> > IMA graft performed for primary, isolated CABG. 
	 <a target="_blank" href="#" title="(4110F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0043" value="4110F:1P" <?php if ($obj{"Coronary_Artery_Bypass_Graft0043"} == "4110F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not performing an IMA graft for primary, isolated CABG procedure. 
	 <a target="_blank" href="#" title="(4110F:1P) (Medical Performance Exclusion) (eg, subclavian stenosis, previous cardiac or thoracic surgery, previous mediastinal radiation, emergent or salvage procedure, no bypassable left anterior descending artery disease)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0043" value="4110F:8P" <?php if ($obj{"Coronary_Artery_Bypass_Graft0043"} == "4110F:8P") { echo 'checked=checked'; } ?> > IMA graft not performed for primary, isolated CABG procedure, reason NOS. 
	 <a target="_blank" href="#" title="(4110F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0044 
	 <a target="_blank" href="#" title="(NQF #0236)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Coronary Artery Bypass Graft (CABG): Preoperative Beta-Blocker in Patients with Isolated CABG Surgery 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient receive a beta-blocker within 24 hours prior to surgical incision? 
	 
	<p></b>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0044" value="4115F" <?php if ($obj{"Coronary_Artery_Bypass_Graft0044"} == "4115F") { echo 'checked=checked'; } ?> > Beta blocker administered. 
	 <a target="_blank" href="#" title="(4115F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0044" value="4115F:1P" <?php if ($obj{"Coronary_Artery_Bypass_Graft0044"} == "4115F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not administering beta blocker. 
	 <a target="_blank" href="#" title="(4115F:1P) (Medical Performance Exclusion) (eg, not indicated, contraindicated, other medical reason)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0044" value="4115F:8P" <?php if ($obj{"Coronary_Artery_Bypass_Graft0044"} == "4115F:8P") { echo 'checked=checked'; } ?> > Beta blocker not administered, reason NOS. 
	 <a target="_blank" href="#" title="(4115F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0164 
	 <a target="_blank" href="#" title="(NQF #0129)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Coronary Artery Bypass Graft (CABG): Prolonged Intubation 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care NOTE: This is an INVERSE measure. A lower calculated performance rate for this measure indicates better clinical care or control."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did the patient undergoing isolated CABG require intubation &gt; 24 hours following exit from the operating room? 
	 
	<p></b>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0164" value="G8569" <?php if ($obj{"Coronary_Artery_Bypass_Graft0164"} == "G8569") { echo 'checked=checked'; } ?> > Prolonged postoperative intubation (&gt; 24 hrs) required. 
	 <a target="_blank" href="#" title="(G8569) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0164" value="G8570" <?php if ($obj{"Coronary_Artery_Bypass_Graft0164"} == "G8570") { echo 'checked=checked'; } ?> > Prolonged postoperative intubation (&gt; 24 hrs) not required. 
	 <a target="_blank" href="#" title="(G8570) (Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0165 
	 <a target="_blank" href="#" title="(NQF #0130)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Coronary Artery Bypass Graft (CABG): Deep Sternal Wound Infection Rate 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care NOTE: This is an INVERSE measure. A lower calculated performance rate for this measure indicates better clinical care or control."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient, within 30 days postoperative, develop deep sternal wound infection involving muscle, bone, and/or mediastinum require operative intervention? 
	 <a target="_blank" href="#" title="Patient must have ALL of the following conditions: 1.) wound opened with excision of tissue (incision and drainage) or re-exploration of mediastinum, 2.) positive culture unless patient is on antibiotics at time of culture or no culture obtained, and 3.) treatment with antibiotics beyond perioperative prophylaxis."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0165" value="G8571" <?php if ($obj{"Coronary_Artery_Bypass_Graft0165"} == "G8571") { echo 'checked=checked'; } ?> > Development of deep sternal wound infection/mediastinitis. 
	 <a target="_blank" href="#" title="(G8571) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0165" value="G8572" <?php if ($obj{"Coronary_Artery_Bypass_Graft0165"} == "G8572") { echo 'checked=checked'; } ?> > No deep sternal wound infection/mediastinitis. 
	 <a target="_blank" href="#" title="(G8572) (Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0166 
	 <a target="_blank" href="#" title="(NQF #0131)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Coronary Artery Bypass Graft (CABG): Stroke 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care NOTE: This is an INVERSE measure. A lower calculated performance rate for this measure indicates better clinical care or control."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient develop a stroke after undergoing isolated CABG surgery? 
	 <a target="_blank" href="#" title="Any confirmed neurological deficit of abrupt onset caused by a disturbance in blood supply to the brain) that did not resolve within 24 hours."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0166" value="G8573" <?php if ($obj{"Coronary_Artery_Bypass_Graft0166"} == "G8573") { echo 'checked=checked'; } ?> > Stroke following isolated CABG surgery. 
	 <a target="_blank" href="#" title="(G8573) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0166" value="G8574" <?php if ($obj{"Coronary_Artery_Bypass_Graft0166"} == "G8574") { echo 'checked=checked'; } ?> > No stroke following isolated CABG surgery. 
	 <a target="_blank" href="#" title="(G8574) (Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0167 
	 <a target="_blank" href="#" title="(NQF 0114)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Coronary Artery Bypass Graft (CABG): Postoperative Renal Failure 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care NOTE: This is an INVERSE measure. A lower calculated performance rate for this measure indicates better clinical care or control."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient undergoing isolated CABG surgery develop postoperative renal failure or require dialysis? 
	 <a target="_blank" href="#" title="Definition of renal failure/dialysis requirement - patient had acute renal failure or worsening renal function resulting in one of the following: 1) increase of serum creatinine to = 4.0 mg/dL or 3x most recent preoperative creatinine level (acute rise must be at least 0.5 mg/dL), or 2) a new requirement for dialysis postoperatively."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0167" value="G8575" <?php if ($obj{"Coronary_Artery_Bypass_Graft0167"} == "G8575") { echo 'checked=checked'; } ?> > Developed postoperative renal failure or required dialysis. 
	 <a target="_blank" href="#" title="(G8575) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0167" value="G8576" <?php if ($obj{"Coronary_Artery_Bypass_Graft0167"} == "G8576") { echo 'checked=checked'; } ?> > No postoperative renal failure/dialysis not required. 
	 <a target="_blank" href="#" title="(G8576) (Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0168 
	 <a target="_blank" href="#" title="(NQF #0115)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Coronary Artery Bypass Graft (CABG): Surgical Re-Exploration 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care NOTE: This is an INVERSE measure. A lower calculated performance rate for this measure indicates better clinical care or control."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient require a return to the operating room during the current hospitalization for mediastinal bleeding with or without tamponade, graft occlusion, valve dysfunction, or other cardiac reason? 
	 
	<p></b>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0168" value="G8577" <?php if ($obj{"Coronary_Artery_Bypass_Graft0168"} == "G8577") { echo 'checked=checked'; } ?> > Re-exploration required due to mediastinal bleeding. 
	 <a target="_blank" href="#" title="(G8577) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Bypass_Graft0168" value="G8578" <?php if ($obj{"Coronary_Artery_Bypass_Graft0168"} == "G8578") { echo 'checked=checked'; } ?> > Re-exploration not required due to mediastinal bleeding. 
	 <a target="_blank" href="#" title="(G8578) (Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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
