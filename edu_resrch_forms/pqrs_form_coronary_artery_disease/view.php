<?php
/**
 * PQRS Coronary Artery Disease Group Direct Data Entry
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

$obj = formFetch("pqrs_form_coronary_artery_disease", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_coronary_artery_disease/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Coronary Artery Disease Quality Reporting</b></center></span><br><br>
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
	Measure #0006 
	 <a target="_blank" href="#" title="(NQF #0067)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Coronary Artery Disease (CAD): Antiplatelet Therapy 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient prescribed or are they already taking aspirin or clopidogrel? 
	 
	<p></b>


	<input type="radio" name="Coronary_Artery_Disease0006" value="4086F" <?php if ($obj{"Coronary_Artery_Disease0006"} == "4086F") { echo 'checked=checked'; } ?> > Aspirin or clopidogrel prescribed. 
	 <a target="_blank" href="#" title="(4086F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0006" value="4086F:1P" <?php if ($obj{"Coronary_Artery_Disease0006"} == "4086F:1P") { echo 'checked=checked'; } ?> > Aspirin or clopidogrel not prescribed, medical reason. 
	 <a target="_blank" href="#" title="(4086F:1P) (Medical Performance Exclusion) (eg, allergy, intolerance, receiving other thienopyridine therapy, receiving warfarin therapy, bleeding coagulation disorders, other medical reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0006" value="4086F:2P" <?php if ($obj{"Coronary_Artery_Disease0006"} == "4086F:2P") { echo 'checked=checked'; } ?> > Aspirin or clopidogrel not prescribed, patient reason. 
	 <a target="_blank" href="#" title="(4086F:2P) (Patient Performance Exclusion) (eg, patient declined, other patient reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0006" value="4086F:3P" <?php if ($obj{"Coronary_Artery_Disease0006"} == "4086F:3P") { echo 'checked=checked'; } ?> > Aspirin or clopidogrel not prescribed, syste, reason. 
	 <a target="_blank" href="#" title="(4086F:3P) (System Performance Exclusion) (eg, lack of drug availability, other reasons attributable to the health care system)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0006" value="4086F:8P" <?php if ($obj{"Coronary_Artery_Disease0006"} == "4086F:8P") { echo 'checked=checked'; } ?> > Aspirin or clopidogrel not prescribed, reason NOS. 
	 <a target="_blank" href="#" title="(4086F:8P) (System Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0007 
	 <a target="_blank" href="#" title="(NQF #0070)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Coronary Artery Disease (CAD): Beta-Blocker Therapy – Prior Myocardial Infarction (MI) or Left Ventricular Systolic Dysfunction (LVEF &lt; 40%) 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Were patients with a diagnosis of CAD in the last 12 months and a current or prior LVEF &lt; 40% prescribed beta-blocker therapy? 
	 <a target="_blank" href="#" title="Beta-blocker therapy includes bisoprolol, carvedilol, or sustained release metoprolol succinate."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Coronary_Artery_Disease0007" value="G9189" <?php if ($obj{"Coronary_Artery_Disease0007"} == "G9189") { echo 'checked=checked'; } ?> > Beta-blocker therapy prescribed or currently being taken. 
	 <a target="_blank" href="#" title="(G9189) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0007" value="G9190" <?php if ($obj{"Coronary_Artery_Disease0007"} == "G9190") { echo 'checked=checked'; } ?> > Beta-blocker not therapy prescribed, medical reason. 
	 <a target="_blank" href="#" title="(G9190) (Medical Performance Exclusion) (eg, allergy, intolerance, other medical reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0007" value="G9191" <?php if ($obj{"Coronary_Artery_Disease0007"} == "G9191") { echo 'checked=checked'; } ?> > Beta-blocker therapy not prescribed, patient reason. 
	 <a target="_blank" href="#" title="(G9191) (Patient Performance Exclusion) (eg, patient declined, other patient reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0007" value="G9192" <?php if ($obj{"Coronary_Artery_Disease0007"} == "G9192") { echo 'checked=checked'; } ?> > Beta-blocker therapy not prescribed, system reason. 
	 <a target="_blank" href="#" title="(G9192) (System Performance Exclusion) (eg, other reasons attributable to the health care system)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0007" value="G9188" <?php if ($obj{"Coronary_Artery_Disease0007"} == "G9188") { echo 'checked=checked'; } ?> > Beta-blocker therapy not prescribed, reason NOS. 
	 <a target="_blank" href="#" title="(G9188) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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


	<input type="radio" name="Coronary_Artery_Disease0128" value="G8420" <?php if ($obj{"Coronary_Artery_Disease0128"} == "G8420") { echo 'checked=checked'; } ?> > BMI is documented within normal parameters and no follow-up plan is required. 
	 <a target="_blank" href="#" title="(G8420) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0128" value="G8417" <?php if ($obj{"Coronary_Artery_Disease0128"} == "G8417") { echo 'checked=checked'; } ?> > BMI is documented above normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8417) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0128" value="G8418" <?php if ($obj{"Coronary_Artery_Disease0128"} == "G8418") { echo 'checked=checked'; } ?> > BMI is documented below normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8418) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0128" value="G8421" <?php if ($obj{"Coronary_Artery_Disease0128"} == "G8421") { echo 'checked=checked'; } ?> > BMI not documented and no reason is given. 
	 <a target="_blank" href="#" title="(G8421) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0128" value="G8419" <?php if ($obj{"Coronary_Artery_Disease0128"} == "G8419") { echo 'checked=checked'; } ?> > BMI documented outside normal parameters, no follow-up plan documented, NOS. 
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


	<input type="radio" name="Coronary_Artery_Disease0130" value="G8427" <?php if ($obj{"Coronary_Artery_Disease0130"} == "G8427") { echo 'checked=checked'; } ?> > Current (or no) medications documented in the patient's medical record. 
	 <a target="_blank" href="#" title="(G8427) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0130" value="G8430" <?php if ($obj{"Coronary_Artery_Disease0130"} == "G8430") { echo 'checked=checked'; } ?> > Patient is not eligible. 
	 <a target="_blank" href="#" title="(G8430) (Other Performance Exclusion( (emergent or urgent situation)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0130" value="G8428" <?php if ($obj{"Coronary_Artery_Disease0130"} == "G8428") { echo 'checked=checked'; } ?> > Current list of medications not documented, NOS. 
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


	<input type="radio" name="Coronary_Artery_Disease0226" value="4004F" <?php if ($obj{"Coronary_Artery_Disease0226"} == "4004F") { echo 'checked=checked'; } ?> > Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0226" value="1036F" <?php if ($obj{"Coronary_Artery_Disease0226"} == "1036F") { echo 'checked=checked'; } ?> > Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0226" value="4004F:1P" <?php if ($obj{"Coronary_Artery_Disease0226"} == "4004F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not screening for tobacco use. 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0226" value="4004F:8PX" <?php if ($obj{"Coronary_Artery_Disease0226"} == "4004F:8PX") { echo 'checked=checked'; } ?> > Tobacco screening OR tobacco cessation intervention not performed, NOS. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0242 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Coronary Artery Disease (CAD): Symptom Management 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient evaluated for level of activity and an assessment of anginal symptoms? 
	 
	<p></b>


	<input type="radio" name="Coronary_Artery_Disease0242" value="1010F 0557F 1011F" <?php if ($obj{"Coronary_Artery_Disease0242"} == "1010F 0557F 1011F") { echo 'checked=checked'; } ?> > Severity of angina assessed and plan of care documented. 
	 <a target="_blank" href="#" title="(1010F, 0557F, 1011F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0242" value="1010F 1012F" <?php if ($obj{"Coronary_Artery_Disease0242"} == "1010F 1012F") { echo 'checked=checked'; } ?> > Severity of angina assessed by level of activity and angina absent. 
	 <a target="_blank" href="#" title="(1010F, 1012F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0242" value="0557F:1P" <?php if ($obj{"Coronary_Artery_Disease0242"} == "0557F:1P") { echo 'checked=checked'; } ?> > Medical reason(s) for not providing plan of care to achieve control of anginal symptoms. 
	 <a target="_blank" href="#" title="(0557F:1P) (Medical Performance Exclusion) (eg, allergy, intolerance, other medical reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0242" value="0557F:2P" <?php if ($obj{"Coronary_Artery_Disease0242"} == "0557F:2P") { echo 'checked=checked'; } ?> > Patient reason(s) for not providing plan of care to achieve control of anginal symptoms. 
	 <a target="_blank" href="#" title="(0557F:2P) (Patient Performance Exclusion)(eg, patient declined, other patient reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0242" value="0557F:3P 1010F 1011F" <?php if ($obj{"Coronary_Artery_Disease0242"} == "0557F:3P 1010F 1011F") { echo 'checked=checked'; } ?> > System reason(s) for not providing plan of care to achieve control of anginal symptoms. 
	 <a target="_blank" href="#" title="(0557F:3P, 1010F, 1011F) (System Performance Exclusion)(eg, financial reasons, other reasons attributable to the health care system)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0242" value="0557F:8P 1010F 1011F" <?php if ($obj{"Coronary_Artery_Disease0242"} == "0557F:8P 1010F 1011F") { echo 'checked=checked'; } ?> > Plan of care to achieve control of angina symptoms was not performed, reason NOS. 
	 <a target="_blank" href="#" title="(0557F:8P, 1010F 1011F) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Coronary_Artery_Disease0242" value="1010F:8P" <?php if ($obj{"Coronary_Artery_Disease0242"} == "1010F:8P") { echo 'checked=checked'; } ?> > Severity of angina not assessed, reason NOS. 
	 <a target="_blank" href="#" title="(1010F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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
