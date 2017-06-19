<?php
/**
 * PQRS Multiple Chronic Conditions Group Direct Data Entry
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

$obj = formFetch("pqrs_form_multiple_chronic_conditions", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_multiple_chronic_conditions/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Multiple Chronic Conditions Quality Reporting</b></center></span><br><br>
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
	Question: Was advance care plan or surrogate decision maker documented in the medical record? 
	 <a target="_blank" href="#" title="If patient’s cultural and/or spiritual beliefs preclude a discussion of advance care planning, report 1124F."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Multiple_Chronic_Conditions0047" value="1123F" <?php if ($obj{"Multiple_Chronic_Conditions0047"} == "1123F") { echo 'checked=checked'; } ?> > Advanced care planning discussed and surrogate decision maker documented. 
	 <a target="_blank" href="#" title="(1123F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0047" value="1124F" <?php if ($obj{"Multiple_Chronic_Conditions0047"} == "1124F") { echo 'checked=checked'; } ?> > Advanced care planning discussed and documented and no surrogate decision maker documented. 
	 <a target="_blank" href="#" title="(1124F) (Performance Met) (eg, patient did not wish or was not able to name a surrogate decision marker or provide an advance care plan, or patient’s cultural and/or spiritual beliefs preclude a discussion of advance care planning.)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0047" value="1123F:8P" <?php if ($obj{"Multiple_Chronic_Conditions0047"} == "1123F:8P") { echo 'checked=checked'; } ?> > Advance care planning not documented, reason NOS. 
	 <a target="_blank" href="#" title="(1123F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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


	<input type="radio" name="Multiple_Chronic_Conditions0110" value="G8482" <?php if ($obj{"Multiple_Chronic_Conditions0110"} == "G8482") { echo 'checked=checked'; } ?> > Influenza immunization administered or previously received. 
	 <a target="_blank" href="#" title="(G8482) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0110" value="G8483" <?php if ($obj{"Multiple_Chronic_Conditions0110"} == "G8483") { echo 'checked=checked'; } ?> > Influenza immunization not administered, reason documented. 
	 <a target="_blank" href="#" title="(G8483) (Performance Met) (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0110" value="G8484" <?php if ($obj{"Multiple_Chronic_Conditions0110"} == "G8484") { echo 'checked=checked'; } ?> > Influenza immunization was not administered, reason not given. 
	 <a target="_blank" href="#" title="(G8484) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0128 
	 <a target="_blank" href="#" title="(NQF #0421)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Body Mass Index (BMI) Screening and Follow-Up Plan 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health NOTE: Normal parameters: Age 65 years and older BMI &ge; 23 and &lt; 30 kg/m2 Age 18 - 64 years BMI &ge; 18.5 and &lt; 25 kg/m2."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was height and weight measured and recorded within 6 months of the encounter and, if BMI is outside of normal parameters, was a follow-up plan documented? 
	 <a target="_blank" href="#" title="A patient is not eligible if one or more of the following reasons are documented: Patient is receiving palliative care, is pregnant, refuses BMI measurement, and any other reason documented in the medical record by the provider why BMI measurement was not appropriate."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Multiple_Chronic_Conditions0128" value="G8420" <?php if ($obj{"Multiple_Chronic_Conditions0128"} == "G8420") { echo 'checked=checked'; } ?> > BMI is documented within normal parameters and no follow-up plan is required. 
	 <a target="_blank" href="#" title="(G8420) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0128" value="G8417" <?php if ($obj{"Multiple_Chronic_Conditions0128"} == "G8417") { echo 'checked=checked'; } ?> > BMI is documented above normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8417) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0128" value="G8418" <?php if ($obj{"Multiple_Chronic_Conditions0128"} == "G8418") { echo 'checked=checked'; } ?> > BMI is documented below normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8418) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0128" value="G8421" <?php if ($obj{"Multiple_Chronic_Conditions0128"} == "G8421") { echo 'checked=checked'; } ?> > BMI not documented and no reason is given. 
	 <a target="_blank" href="#" title="(G8421) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0128" value="G8419" <?php if ($obj{"Multiple_Chronic_Conditions0128"} == "G8419") { echo 'checked=checked'; } ?> > BMI documented outside normal parameters, no follow-up plan documented, NOS. 
	 <a target="_blank" href="#" title="(G8419) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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


	<input type="radio" name="Multiple_Chronic_Conditions0130" value="G8427" <?php if ($obj{"Multiple_Chronic_Conditions0130"} == "G8427") { echo 'checked=checked'; } ?> > Current (or no) medications documented in the patient's medical record. 
	 <a target="_blank" href="#" title="(G8427) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0130" value="G8430" <?php if ($obj{"Multiple_Chronic_Conditions0130"} == "G8430") { echo 'checked=checked'; } ?> > Patient is not eligible. 
	 <a target="_blank" href="#" title="(G8430) (Other Performance Exclusion( (emergent or urgent situation)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0130" value="G8428" <?php if ($obj{"Multiple_Chronic_Conditions0130"} == "G8428") { echo 'checked=checked'; } ?> > Current list of medications not documented, NOS. 
	 <a target="_blank" href="#" title="(G8428) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0131 
	 <a target="_blank" href="#" title="(NQF #0420)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Pain Assessment and Follow-Up 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient's pain assessed using a standardized tool and documented if pain is present? 
	 
	<p></b>


	<input type="radio" name="Multiple_Chronic_Conditions0131" value="G8730" <?php if ($obj{"Multiple_Chronic_Conditions0131"} == "G8730") { echo 'checked=checked'; } ?> > Pain assessment documented as positive AND a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8730)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0131" value="G8731" <?php if ($obj{"Multiple_Chronic_Conditions0131"} == "G8731") { echo 'checked=checked'; } ?> > Pain assessment is documented as negative, no follow-up plan required. 
	 <a target="_blank" href="#" title="(G8731)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0131" value="G8442" <?php if ($obj{"Multiple_Chronic_Conditions0131"} == "G8442") { echo 'checked=checked'; } ?> > Patient is not eligible for a pain assessment. 
	 <a target="_blank" href="#" title="(G8442) (Other Performance Exclusion)(urgent, emergent situation or patient incapacitated)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0131" value="G8939" <?php if ($obj{"Multiple_Chronic_Conditions0131"} == "G8939") { echo 'checked=checked'; } ?> > Pain assessment documented as positive, no follow-up plan, patient is not eligible. 
	 <a target="_blank" href="#" title="(G8939) (Other Performance Exclusion) (urgent, emergent situation or patient incapacitated)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0131" value="G8732" <?php if ($obj{"Multiple_Chronic_Conditions0131"} == "G8732") { echo 'checked=checked'; } ?> > No documentation of pain assessment, reason not given. 
	 <a target="_blank" href="#" title="(G8732) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0131" value="G8509" <?php if ($obj{"Multiple_Chronic_Conditions0131"} == "G8509") { echo 'checked=checked'; } ?> > Pain assessment documented as positive, no follow-up plan, NOS. 
	 <a target="_blank" href="#" title="(G8509) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0134 
	 <a target="_blank" href="#" title="(NQF #0418)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Screening for Clinical Depression and Follow-Up Plan 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient screened for clinical depression with a standard screening tool AND if positive, was a follow-up plan documented? 
	 <a target="_blank" href="#" title="The name of the age appropriate standardized depression screening tool utilized must be documented in the medical record. The depression screening must be reviewed and addressed in the office of the provider filing the code on the date of the encounter."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Multiple_Chronic_Conditions0134" value="G8431" <?php if ($obj{"Multiple_Chronic_Conditions0134"} == "G8431") { echo 'checked=checked'; } ?> > Screening for clinical depression is documented as being positive AND a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8431) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0134" value="G8510" <?php if ($obj{"Multiple_Chronic_Conditions0134"} == "G8510") { echo 'checked=checked'; } ?> > Screening for clinical depression is documented as negative, a follow-up plan is not required. 
	 <a target="_blank" href="#" title="(G8510) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0134" value="G8433" <?php if ($obj{"Multiple_Chronic_Conditions0134"} == "G8433") { echo 'checked=checked'; } ?> > Screening for clinical depression not documented, patient is not eligible. 
	 <a target="_blank" href="#" title="(G8433) (Other Performance Exclusion) (eg, urgent or emergent situation, actived diagnosis of depression, incapacitated or patient refuses)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0134" value="G8940" <?php if ($obj{"Multiple_Chronic_Conditions0134"} == "G8940") { echo 'checked=checked'; } ?> > Screening for clinical depression documented as positive, a follow-up plan not documented, patient is not eligible. 
	 <a target="_blank" href="#" title="(G8940) (Other Performance Exclusion) (eg, urgent or emergent situation, actived diagnosis of depression, incapacitated or patient refuses)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0134" value="G8432" <?php if ($obj{"Multiple_Chronic_Conditions0134"} == "G8432") { echo 'checked=checked'; } ?> > Clinical depression screening not documented, reason NOS. 
	 <a target="_blank" href="#" title="(G8432) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0134" value="G8511" <?php if ($obj{"Multiple_Chronic_Conditions0134"} == "G8511") { echo 'checked=checked'; } ?> > Screening for clinical depression documented as positive, follow-up plan not documented, reason NOS. 
	 <a target="_blank" href="#" title="(G8511) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0154 
	 <a target="_blank" href="#" title="(NQF: #0101)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Falls: Risk Assessment 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was risk assessment for patient with a history of falls completed within the past 12 months? 
	 <a target="_blank" href="#" title="History of falls is defined as 2 or more falls in the past year or any fall with injury in the past year. Documentation of patient reported history of falls is sufficient."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Multiple_Chronic_Conditions0154" value="3288F 1100F" <?php if ($obj{"Multiple_Chronic_Conditions0154"} == "3288F 1100F") { echo 'checked=checked'; } ?> > Falls risk assessment documented. 
	 <a target="_blank" href="#" title="(3288F, 1100F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0154" value="3288F:1P 1100F" <?php if ($obj{"Multiple_Chronic_Conditions0154"} == "3288F:1P 1100F") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not completing a risk assessment for falls. 
	 <a target="_blank" href="#" title="(3288F:1P, 1100F) (Medical Performance Exclusion) (ie, patient not ambulatory)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0154" value="1101F" <?php if ($obj{"Multiple_Chronic_Conditions0154"} == "1101F") { echo 'checked=checked'; } ?> > Patient screened for future fall risk; documentation of no falls in the past year or only one fall without injury in the past year. 
	 <a target="_blank" href="#" title="(1101F) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0154" value="1101F:8P" <?php if ($obj{"Multiple_Chronic_Conditions0154"} == "1101F:8P") { echo 'checked=checked'; } ?> > Patient not eligible; fall status not documented. 
	 <a target="_blank" href="#" title="(1101F:8P) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0154" value="3288F:8P 1100F" <?php if ($obj{"Multiple_Chronic_Conditions0154"} == "3288F:8P 1100F") { echo 'checked=checked'; } ?> > Falls risk assessment not completed, reason NOS. 
	 <a target="_blank" href="#" title="(3288F:8P, 1100F) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0155 
	 <a target="_blank" href="#" title="(NQF: #0101)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Falls: Plan of Care 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was a plan of care for patient with a history of falls documented within 12 months? 
	 <a target="_blank" href="#" title="History of falls is defined as 2 or more falls in the past year or any fall with injury in the past year. Documentation of patient reported history of falls is sufficient."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Multiple_Chronic_Conditions0155" value="0518F" <?php if ($obj{"Multiple_Chronic_Conditions0155"} == "0518F") { echo 'checked=checked'; } ?> > Falls plan of care documented. 
	 <a target="_blank" href="#" title="(0518F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0155" value="0518F:1P" <?php if ($obj{"Multiple_Chronic_Conditions0155"} == "0518F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for no plan of care for falls 
	 <a target="_blank" href="#" title="(0518F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0155" value="0518F:8P" <?php if ($obj{"Multiple_Chronic_Conditions0155"} == "0518F:8P") { echo 'checked=checked'; } ?> > Plan of care not documented, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(0518F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0238 
	 <a target="_blank" href="#" title="(NQF #0022)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Use of High-Risk Medications in the Elderly 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety NOTE: A lower calculated performance rate for this measure indicates better clinical care or control."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was at least one high-risk medication ordered? 
	 
	<p></b>


	<input type="radio" name="Multiple_Chronic_Conditions0238" value="G9365" <?php if ($obj{"Multiple_Chronic_Conditions0238"} == "G9365") { echo 'checked=checked'; } ?> > One high-risk medication ordered. 
	 <a target="_blank" href="#" title="(G9365) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Multiple_Chronic_Conditions0238" value="G9366" <?php if ($obj{"Multiple_Chronic_Conditions0238"} == "G9366") { echo 'checked=checked'; } ?> > One high-risk medication not ordered. 
	 <a target="_blank" href="#" title="(G9366) (Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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
