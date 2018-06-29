<?php
/**
 * PQRS Oncology Group Direct Data Entry
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

$obj = formFetch("pqrs_form_oncology", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_oncology/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Oncology Quality Reporting</b></center></span><br><br>
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
	Measure #0071 
	 <a target="_blank" href="#" title="(NQF #0387)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Breast Cancer: Hormonal Therapy for Stage IC-IIIC Estrogen Receptor/ Progesterone Receptor (ER/PR) Positive Breast Cancer 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient prescribed tamoxifen or aromatase inhibitor (AI)? 
	 
	<p></b>


	<input type="radio" name="Oncology0071" value="4179F" <?php if ($obj{"Oncology0071"} == "4179F") { echo 'checked=checked'; } ?> > Tamoxifen or aromatase inhibitor (AI) prescribed. 
	 <a target="_blank" href="#" title="(4179F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0071" value="4179F:1P" <?php if ($obj{"Oncology0071"} == "4179F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not prescribing tamoxifen or aromatase inhibitor (eg, patient’s disease has progressed to metastatic, patient is receiving a gonadotropin-releasing hormone analogue, patient has received oophorectomy, patient is receiving radiation or chemotherapy, patient’s diagnosis date was &gt; 5 years from reporting date, patient’s diagnosis date is within 120 days of the end of the 12 month reporting period, other medical reasons). 
	 <a target="_blank" href="#" title="(4179F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0071" value="4179F:2P" <?php if ($obj{"Oncology0071"} == "4179F:2P") { echo 'checked=checked'; } ?> > Documentation of patient reason(s) for not prescribing tamoxifen or aromatase inhibitor (eg, patient refusal, other patient reasons). 
	 <a target="_blank" href="#" title="(4179F:2P) (Patient Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0071" value="4179F:3P" <?php if ($obj{"Oncology0071"} == "4179F:3P") { echo 'checked=checked'; } ?> > Documentation of system reason(s) for not prescribing tamoxifen or aromatase inhibitor (eg, patient is currently enrolled in a clinical trial, other system reasons). 
	 <a target="_blank" href="#" title="(4179F:3P) (Patient Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0071" value="4179F:8P" <?php if ($obj{"Oncology0071"} == "4179F:8P") { echo 'checked=checked'; } ?> > Tamoxifen or aromatase inhibitor not prescribed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4179F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0072 
	 <a target="_blank" href="#" title="(NQF #0385)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Colon Cancer: Chemotherapy for AJCC Stage III Colon Cancer Patients 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient referred or prescribed adjuvant chemotherapy, or previosly received chemotherapy? 
	 <a target="_blank" href="#" title="According to current NCCN guidelines, the following therapies are recommended: 5-FU/LV/oxaliplatin (FOLFOX) or capecitabine/oxaliplatin (CapeOx) (both category 1 and preferred); bolus 5-FU/LV/oxaliplatin (FLOX) (category 1); or single-agent capecitabine or 5-FU/LV in patients felt to be inappropriate for oxaliplatin therapy (NCCN). See clinical recommendation statement for cases where leucovorin is not available."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Oncology0072" value="G8927" <?php if ($obj{"Oncology0072"} == "G8927") { echo 'checked=checked'; } ?> > Adjuvant chemotherapy referred, prescribed or previously received for AJCC Stage III, colon cancer. 
	 <a target="_blank" href="#" title="(G8927) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0072" value="G8928" <?php if ($obj{"Oncology0072"} == "G8928") { echo 'checked=checked'; } ?> > Adjuvant chemotherapy not prescribed or previously received for documented reasons (e.g., medical co-morbidities, diagnosis date more than 5 years prior to the current visit date, patient’s diagnosis date is within 120 days of the end of the 12 month reporting period, patient’s cancer has metastasized, medical contraindication/allergy, poor performance status, other medical reasons, patient refusal, other patient reasons, patient is currently enrolled in a clinical trial that precludes prescription of chemotherapy, other system reasons). 
	 <a target="_blank" href="#" title="(G8928) (Other Performance Exclusions)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0072" value="G8929" <?php if ($obj{"Oncology0072"} == "G8929") { echo 'checked=checked'; } ?> > Adjuvant chemotherapy not prescribed or previously received, reason not given. 
	 <a target="_blank" href="#" title="(G8929) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0110 
	 <a target="_blank" href="#" title="(NQF 0041)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Influenza Immunization 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient receive an influenza immunization for this flu season OR report a previous receipt of an influenza immunization? 
	 <a target="_blank" href="#" title="Patients 6 months and older seen for a visit between October 1 and March 31 OR who reported previous receipt of an influenze immunization."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Oncology0110" value="G8482" <?php if ($obj{"Oncology0110"} == "G8482") { echo 'checked=checked'; } ?> > Influenza immunization administered or previously received. 
	 <a target="_blank" href="#" title="(G8482) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0110" value="G8483" <?php if ($obj{"Oncology0110"} == "G8483") { echo 'checked=checked'; } ?> > Influenza immunization not administered, reason documented. (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons). 
	 <a target="_blank" href="#" title="(G8483) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0110" value="G8484" <?php if ($obj{"Oncology0110"} == "G8484") { echo 'checked=checked'; } ?> > Influenza immunization was not administered, reason not given. 
	 <a target="_blank" href="#" title="(G8484) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0130 
	 <a target="_blank" href="#" title="(NQF #0419)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Documentation of Current Medications in the Medical Record 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Are current medications documented in the patient's medical record? 
	 <a target="_blank" href="#" title="Eligible professional attests to documenting in the medical record they obtained, updated, or reviewed the patient’s current medications."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Oncology0130" value="G8427" <?php if ($obj{"Oncology0130"} == "G8427") { echo 'checked=checked'; } ?> > Current medications documented. 
	 <a target="_blank" href="#" title="(G8427) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0130" value="G8430" <?php if ($obj{"Oncology0130"} == "G8430") { echo 'checked=checked'; } ?> > Eligible professional attests to documenting in the medical record the patient is not eligible for a current list of medications being obtained, updated, or reviewed by the eligible professional. 
	 <a target="_blank" href="#" title="(G8430) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0130" value="G8428" <?php if ($obj{"Oncology0130"} == "G8428") { echo 'checked=checked'; } ?> > Current list of medications not documented as obtained, updated, or reviewed by the eligible professional, reason not given. 
	 <a target="_blank" href="#" title="(G8428) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0143 
	 <a target="_blank" href="#" title="(NQF #0384)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Oncology: Medical and Radiation – Pain Intensity Quantified 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Person and Caregiver-Centered Experience and Outcomes"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient's pain intensity quantified? 
	 <a target="_blank" href="#" title="Pain intensity should be quantified using a standard instrument, such as a 0-10 numerical rating scale, visual analog scale, a categorical scale, or the pictorial scale."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Oncology0143" value="1125F" <?php if ($obj{"Oncology0143"} == "1125F") { echo 'checked=checked'; } ?> > Pain severity quantified; pain present. 
	 <a target="_blank" href="#" title="(1125F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0143" value="1126F" <?php if ($obj{"Oncology0143"} == "1126F") { echo 'checked=checked'; } ?> > Pain severity quantified; no pain present. 
	 <a target="_blank" href="#" title="(1126F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0143" value="1125F:8P" <?php if ($obj{"Oncology0143"} == "1125F:8P") { echo 'checked=checked'; } ?> > Pain severity not documented, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(1125F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0144 
	 <a target="_blank" href="#" title="(NQF #0383)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Oncology: Medical and Radiation – Plan of Care for Pain 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Person and Caregiver-Centered Experience and Outcomes"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was plan of care to address pain documented? 
	 
	<p></b>


	<input type="radio" name="Oncology0144" value="0521F" <?php if ($obj{"Oncology0144"} == "0521F") { echo 'checked=checked'; } ?> > Plan of care to address pain documented. 
	 <a target="_blank" href="#" title="(0521F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0144" value="0521F:8P" <?php if ($obj{"Oncology0144"} == "0521F:8P") { echo 'checked=checked'; } ?> > Plan of care for pain not documented, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(0521F:8P)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0226 
	 <a target="_blank" href="#" title="(NQF #0028)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community / Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient screened for tobacco use within 24 months AND given tobacco cessation interventionn if identified as a tobacco user? 
	 <a target="_blank" href="#" title="Tobacco use includes use of any type of tobacco; tobacco cessation intervention includes brief counseling (3 minutes or less), and/or pharmacotherapy."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Oncology0226" value="4004F" <?php if ($obj{"Oncology0226"} == "4004F") { echo 'checked=checked'; } ?> > Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0226" value="1036F" <?php if ($obj{"Oncology0226"} == "1036F") { echo 'checked=checked'; } ?> > Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0226" value="4004F:1P" <?php if ($obj{"Oncology0226"} == "4004F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons). 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Oncology0226" value="4004F:8P" <?php if ($obj{"Oncology0226"} == "4004F:8P") { echo 'checked=checked'; } ?> > Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified. 
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
