<?php
/**
 * PQRS Preventive Care Group Direct Data Entry
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

$obj = formFetch("pqrs_form_preventive_care", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_preventive_care/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Preventive Care Quality Reporting</b></center></span><br><br>
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
	Measure #0039 
	 <a target="_blank" href="#" title="(NQF #0046)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Screening for Osteoporosis for Women Aged 65-85 Years of Age 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was a central Dual-energy X-Ray Absorptiometry (DXA) performed? 
	 
	<p></b>


	<input type="radio" name="Preventive_Care0039" value="G8399" <?php if ($obj{"Preventive_Care0039"} == "G8399") { echo 'checked=checked'; } ?> > Patient record includes documented results of a central Dual-energy X-Ray Absorptiometry (DXA). 
	 <a target="_blank" href="#" title="(G8399) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0039" value="G8401" <?php if ($obj{"Preventive_Care0039"} == "G8401") { echo 'checked=checked'; } ?> > Clinician documented that patient was not an eligible candidate for screening. 
	 <a target="_blank" href="#" title="(G8401) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0039" value="G8400" <?php if ($obj{"Preventive_Care0039"} == "G8400") { echo 'checked=checked'; } ?> > Patient with central DXA results not documented, reason not given. 
	 <a target="_blank" href="#" title="(G8400) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0048 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Urinary Incontinence: Assessment of Presence or Absence of Urinary Incontinence in Women Aged 65 Years and Older 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient assessed for the presence or absence of urinary incontinence within 12 months? 
	 <a target="_blank" href="#" title="Definition: Urinary Incontinence – Any involuntary leakage of urine."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Preventive_Care0048" value="1090F" <?php if ($obj{"Preventive_Care0048"} == "1090F") { echo 'checked=checked'; } ?> > Presence or absence of urinary incontinence assessed. 
	 <a target="_blank" href="#" title="(1090F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0048" value="1090F:1P" <?php if ($obj{"Preventive_Care0048"} == "1090F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not assessing for the presence or absence of urinary incontinence. 
	 <a target="_blank" href="#" title="(1090F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0048" value="1090F:8P" <?php if ($obj{"Preventive_Care0048"} == "1090F:8P") { echo 'checked=checked'; } ?> > Presence or absence of urinary incontinence not assessed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(1090F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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


	<input type="radio" name="Preventive_Care0110" value="G8482" <?php if ($obj{"Preventive_Care0110"} == "G8482") { echo 'checked=checked'; } ?> > Influenza immunization administered or previously received. 
	 <a target="_blank" href="#" title="(G8482) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0110" value="G8483" <?php if ($obj{"Preventive_Care0110"} == "G8483") { echo 'checked=checked'; } ?> > Influenza immunization not administered, reason documented. (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons). 
	 <a target="_blank" href="#" title="(G8483) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0110" value="G8484" <?php if ($obj{"Preventive_Care0110"} == "G8484") { echo 'checked=checked'; } ?> > Influenza immunization was not administered, reason not given. 
	 <a target="_blank" href="#" title="(G8484) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0111 
	 <a target="_blank" href="#" title="(NQF #0043)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Pneumonia Vaccination Status for Older Adults 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health NOTE: While the measure provides credit for adults 65 years of age and older who have ever received either the PCV13 or PPSV23 vaccine (or both),according to ACIP recommendations, patients should receive both vaccines. The order and timing of the vaccinations depends on certain patient characteristics,and are described in more detail in the ACIP recommendations."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient ever receive a pneumococcal vaccination? 
	 
	<p></b>


	<input type="radio" name="Preventive_Care0111" value="4040F" <?php if ($obj{"Preventive_Care0111"} == "4040F") { echo 'checked=checked'; } ?> > Pneumococcal vaccine administered or previously received. 
	 <a target="_blank" href="#" title="(4040F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0111" value="4040F:8P" <?php if ($obj{"Preventive_Care0111"} == "4040F:8P") { echo 'checked=checked'; } ?> > Pneumococcal vaccine was not administered or previously received, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4040F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0112 
	 <a target="_blank" href="#" title="(NQF #2372)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Breast Cancer Screening 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care NOTE: Patients with one or more mammograms any time on or between October 1, 27 months prior to December 31 of the measurement period, not to precede the patient’s 50th birthday."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Are the patient's mammography results documented and reviewed? 
	 <a target="_blank" href="#" title="Patient's mammogram results documented and reviewed within 27 months."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Preventive_Care0112" value="3014F" <?php if ($obj{"Preventive_Care0112"} == "3014F") { echo 'checked=checked'; } ?> > Screening mammography results documented and reviewed. 
	 <a target="_blank" href="#" title="(3014F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0112" value="3014F:1P" <?php if ($obj{"Preventive_Care0112"} == "3014F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not performing a mammogram (i.e., women who had a bilateral mastectomy or two unilateral mastectomies). 
	 <a target="_blank" href="#" title="(3014F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0112" value="3014F:1P" <?php if ($obj{"Preventive_Care0112"} == "3014F:1P") { echo 'checked=checked'; } ?> > Screening mammography results were not documented and reviewed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(3014F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0113 
	 <a target="_blank" href="#" title="(NQF #0034)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Colorectal Cancer Screening 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care/"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was the patient screened for colorectal cancer? 
	 <a target="_blank" href="#" title="Patients with one or more screenings for colorectal cancer. Appropriate screenings are defined by any one of the following criteria below: Fecal occult blood test (FOBT) during the measurement period Flexible sigmoidoscopy during the measurement period or the four years prior to the measurement period Colonoscopy during the measurement period or the nine years prior to the measurement period"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Preventive_Care0113" value="3071F" <?php if ($obj{"Preventive_Care0113"} == "3071F") { echo 'checked=checked'; } ?> > Colorectal cancer screening results documented and reviewed. 
	 <a target="_blank" href="#" title="(3071F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0113" value="3071F:1P" <?php if ($obj{"Preventive_Care0113"} == "3071F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not performing a colorectal cancer screening (i.e., diagnosis of colorectal cancer or total colectomy). 
	 <a target="_blank" href="#" title="(3071F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0113" value="3071F:8P" <?php if ($obj{"Preventive_Care0113"} == "3071F:8P") { echo 'checked=checked'; } ?> > Colorectal cancer screening results were not documented and reviewed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(3071F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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


	<input type="radio" name="Preventive_Care0128" value="G8420" <?php if ($obj{"Preventive_Care0128"} == "G8420") { echo 'checked=checked'; } ?> > BMI is documented within normal parameters and no follow-up plan is required. 
	 <a target="_blank" href="#" title="(G8420) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0128" value="G8417" <?php if ($obj{"Preventive_Care0128"} == "G8417") { echo 'checked=checked'; } ?> > BMI is documented above normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8417) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0128" value="G8418" <?php if ($obj{"Preventive_Care0128"} == "G8418") { echo 'checked=checked'; } ?> > BMI is documented below normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8418) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0128" value="G8421" <?php if ($obj{"Preventive_Care0128"} == "G8421") { echo 'checked=checked'; } ?> > BMI not documented and no reason is given. 
	 <a target="_blank" href="#" title="(G8421) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0128" value="G8419" <?php if ($obj{"Preventive_Care0128"} == "G8419") { echo 'checked=checked'; } ?> > BMI documented outside normal parameters, no follow-up plan documented, no reason given. 
	 <a target="_blank" href="#" title="(G8419) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0134 
	 <a target="_blank" href="#" title="(NQF #0418)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Screening for Clinical Depression and Follow-Up Plan 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient screened for clinical depression with a standard screening tool AND if positive, a follow-up plan is documented? 
	 <a target="_blank" href="#" title="Patients aged 12 and older screened for depression with a follow-up plan on the date of the encounter."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Preventive_Care0134" value="G8431" <?php if ($obj{"Preventive_Care0134"} == "G8431") { echo 'checked=checked'; } ?> > Screening for clinical depression is documented as being positive AND a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8431) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0134" value="G8510" <?php if ($obj{"Preventive_Care0134"} == "G8510") { echo 'checked=checked'; } ?> > Screening for clinical depression is documented as negative, a follow-up plan is not required. 
	 <a target="_blank" href="#" title="(G8510) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0134" value="G8433" <?php if ($obj{"Preventive_Care0134"} == "G8433") { echo 'checked=checked'; } ?> > Screening for clinical depression not documented, documentation stating the patient is not eligible. 
	 <a target="_blank" href="#" title="(G8433) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0134" value="G8940" <?php if ($obj{"Preventive_Care0134"} == "G8940") { echo 'checked=checked'; } ?> > Screening for clinical depression documented as positive, a follow-up plan not documented, documentation stating the patient is not eligible. 
	 <a target="_blank" href="#" title="(G8940) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0134" value="G8432" <?php if ($obj{"Preventive_Care0134"} == "G8432") { echo 'checked=checked'; } ?> > Clinical depression screening not documented, reason not given. 
	 <a target="_blank" href="#" title="(G8432) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0134" value="G8511" <?php if ($obj{"Preventive_Care0134"} == "G8511") { echo 'checked=checked'; } ?> > Screening for clinical depression documented as positive, follow-up plan not documented, reason not given. 
	 <a target="_blank" href="#" title="(G8511) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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


	<input type="radio" name="Preventive_Care0226" value="4004F" <?php if ($obj{"Preventive_Care0226"} == "4004F") { echo 'checked=checked'; } ?> > Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0226" value="1036F" <?php if ($obj{"Preventive_Care0226"} == "1036F") { echo 'checked=checked'; } ?> > Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0226" value="4004F:1P" <?php if ($obj{"Preventive_Care0226"} == "4004F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons). 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0226" value="4004F:8P" <?php if ($obj{"Preventive_Care0226"} == "4004F:8P") { echo 'checked=checked'; } ?> > Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0431 
	 <a target="_blank" href="#" title="(NQF #2152)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Unhealthy Alcohol Use: Screening & Brief Counseling 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/ Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient screened for unhelathy alcohol use using a systamtic screening method AND those identified as unhealthy alcohol users receive counseling? 
	 <a target="_blank" href="#" title="Patients screened for unhealthy alcholol use in the last 24 months."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Preventive_Care0431" value="G9621" <?php if ($obj{"Preventive_Care0431"} == "G9621") { echo 'checked=checked'; } ?> > Patient identified as an unhealthy alcohol user when screened for unhealthy alcohol use using a systematic screening method and received brief counseling. 
	 <a target="_blank" href="#" title="(G9621) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0431" value="G9622" <?php if ($obj{"Preventive_Care0431"} == "G9622") { echo 'checked=checked'; } ?> > Patient not identified as an unhealthy alcohol user when screened for unhealthy alcohol use using a systematic screening method. 
	 <a target="_blank" href="#" title="(G9622) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0431" value="G9623" <?php if ($obj{"Preventive_Care0431"} == "G9623") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not screening for unhealthy alcohol use (e.g., limited life expectancy, other medical reasons). 
	 <a target="_blank" href="#" title="(G9623) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Preventive_Care0431" value="G9624" <?php if ($obj{"Preventive_Care0431"} == "G9624") { echo 'checked=checked'; } ?> > Patient not screened for unhealthy alcohol screening using a systematic screening method OR patient did not receive brief counseling, reason not given. 
	 <a target="_blank" href="#" title="(G9624) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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
