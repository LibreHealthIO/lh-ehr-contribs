<?php
/**
 * PQRS Chronic Obstructive Pulmonary Disease Group Direct Data Entry
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

$obj = formFetch("pqrs_form_chronic_obstructive_pulmonary_disease", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_chronic_obstructive_pulmonary_disease/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Chronic Obstructive Pulmonary Disease Quality Reporting</b></center></span><br><br>
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
	 <a target="_blank" href="#" title="(NQF #0326)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Care Plan 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was advanced care planning discussed and documented in the medical record? 
	 <a target="_blank" href="#" title="Advance care plan or surrogate decision maker must be documented in the medical record."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0047" value="1123F" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0047"} == "1123F") { echo 'checked=checked'; } ?> > Discussed and documented. 
	 <a target="_blank" href="#" title="(1123F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0047" value="1124F" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0047"} == "1124F") { echo 'checked=checked'; } ?> > Discussed and documented, patient did not wish to participate. 
	 <a target="_blank" href="#" title="(1124F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0047" value="1123F:8P" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0047"} == "1123F:8P") { echo 'checked=checked'; } ?> > Advance care planning not nocumented, reason NOS. 
	 <a target="_blank" href="#" title="(1123F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0051 
	 <a target="_blank" href="#" title="(NQF #0091)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Chronic Obstructive Pulmonary Disease (COPD): Spirometry Evaluation 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Were the patient's most recent spirometry results (FEV1 and FEV1/FVC) documented in the medical record? 
	 
	<p></b>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0051" value="3023F" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0051"} == "3023F") { echo 'checked=checked'; } ?> > Spirometry results documented and reviewed. 
	 <a target="_blank" href="#" title="(3023F) (Performance Met)nSpirometry results documented and reviewed."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0051" value="3023F:1P" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0051"} == "3023F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not documenting and reviewing spirometry results. 
	 <a target="_blank" href="#" title="(3023F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0051" value="3023F:2P" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0051"} == "3023F:2P") { echo 'checked=checked'; } ?> > Documentation of patient reason(s) for not documenting and reviewing spirometry results. 
	 <a target="_blank" href="#" title="(3023F:2P) (Patient Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0051" value="3023F:3P" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0051"} == "3023F:3P") { echo 'checked=checked'; } ?> > Documentation of system reason for not documenting and reviewing spirometry results. 
	 <a target="_blank" href="#" title="(3023F:3P) (System Performance Exclusion)nDocumentation of system reason."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0051" value="3023F:8P" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0051"} == "3023F:8P") { echo 'checked=checked'; } ?> > Spirometry results not documented and reviewed, reason NOS. 
	 <a target="_blank" href="#" title="(3023F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0052 
	 <a target="_blank" href="#" title="(NQF #0102)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Chronic Obstructive Pulmonary Disease (COPD): Inhaled Bronchodilator Therapy 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient prescribed inhaled bronchodilator therapy? 
	 
	<p></b>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0052" value="4025F" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0052"} == "4025F") { echo 'checked=checked'; } ?> > Inhaled bronchodilator prescribed and FEV1 &lt; 60%. 
	 <a target="_blank" href="#" title="(4025F, G8924) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0052" value="4025F:1P" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0052"} == "4025F:1P") { echo 'checked=checked'; } ?> > Inhaled bronchodilator not prescribed and FEV1 &lt; 60%; medical reason(s) documented. 
	 <a target="_blank" href="#" title="(4025F:1P, G8924) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0052" value="4025F:2P" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0052"} == "4025F:2P") { echo 'checked=checked'; } ?> > Inhaled bronchodilator not prescribed and FEV1 &lt; 60%; patient reason(s) documented. 
	 <a target="_blank" href="#" title="(4025F:2P, G8924) (Patient Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0052" value="4025F:3P" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0052"} == "4025F:3P") { echo 'checked=checked'; } ?> > Inhaled bronchodilator not prescribed and FEV1 &lt; 60%; system reason(s) documented. 
	 <a target="_blank" href="#" title="(4025F:3P, G8924) (System Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0052" value="G8925" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0052"} == "G8925") { echo 'checked=checked'; } ?> > FEV1 &ge; 60% predicted or patient does not have COPD symptoms. 
	 <a target="_blank" href="#" title="(G8925) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0052" value="G8926" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0052"} == "G8926") { echo 'checked=checked'; } ?> > Spirometry test not performed or documented, reason NOS. 
	 <a target="_blank" href="#" title="(G8926) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0052" value="4025F:8P" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0052"} == "4025F:8P") { echo 'checked=checked'; } ?> > Inhaled bronchodilator not prescribed and FEV1 &lt; 60%, reason NOS. 
	 <a target="_blank" href="#" title="(4025F:8P, G8924) (Performance Not Met)nInhaled bronchodilator not prescribed, reason not otherwise specified."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0110 
	 <a target="_blank" href="#" title="(NQF 0041)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Influenza Immunization 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient receive an influenza immunization for this flu season OR report a previous receipt of an influenza immunization? 
	 
	<p></b>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0110" value="G8482" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0110"} == "G8482") { echo 'checked=checked'; } ?> > Influenza immunization administered or previously received. 
	 <a target="_blank" href="#" title="(G8482) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0110" value="G8483" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0110"} == "G8483") { echo 'checked=checked'; } ?> > Influenza immunization not administered, reason documented. 
	 <a target="_blank" href="#" title="(G8483) (Performance Met) (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0110" value="G8484" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0110"} == "G8484") { echo 'checked=checked'; } ?> > Influenza immunization was not administered, reason not given. 
	 <a target="_blank" href="#" title="(G8484) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0111 
	 <a target="_blank" href="#" title="(NQF #0043)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Pneumonia Vaccination Status for Older Adults 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Healthi"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient ever receive a pneumococcal vaccination? 
	 
	<p></b>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0111" value="4040F" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0111"} == "4040F") { echo 'checked=checked'; } ?> > Pneumococcal vaccine administered or previously received. 
	 <a target="_blank" href="#" title="(4040F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0111" value="4040F:8P" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0111"} == "4040F:8P") { echo 'checked=checked'; } ?> > Pneumococcal vaccine was not administered or previously received, reason NOS. 
	 <a target="_blank" href="#" title="(4040F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0130 
	 <a target="_blank" href="#" title="(NQF #0419)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Documentation of Current Medications in the Medical Record 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Are current medications documented in the patient's medical record? 
	 <a target="_blank" href="#" title="Patient’s medications obtained, updated, or reviewed, and documented."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0130" value="G8427" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0130"} == "G8427") { echo 'checked=checked'; } ?> > Current (or no) medications documented in the patient's medical record. 
	 <a target="_blank" href="#" title="(G8427) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0130" value="G8430" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0130"} == "G8430") { echo 'checked=checked'; } ?> > Patient is not eligible. 
	 <a target="_blank" href="#" title="(G8430) (Other Performance Exclusion( (emergent or urgent situation)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0130" value="G8428" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0130"} == "G8428") { echo 'checked=checked'; } ?> > Current list of medications not documented, NOS. 
	 <a target="_blank" href="#" title="(G8428) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0226 
	 <a target="_blank" href="#" title="(NQF #0028)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community / Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Within the last 12 months: 
	 
	<p></b>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0226" value="4004F" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0226"} == "4004F") { echo 'checked=checked'; } ?> > Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0226" value="1036F" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0226"} == "1036F") { echo 'checked=checked'; } ?> > Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0226" value="4004F:1P" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0226"} == "4004F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not screening for tobacco use. 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Chronic_Obstructive_Pulmonary_Disease0226" value="4004F:8P" <?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0226"} == "4004F:8P") { echo 'checked=checked'; } ?> > Tobacco screening OR tobacco cessation intervention not performed, NOS. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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
