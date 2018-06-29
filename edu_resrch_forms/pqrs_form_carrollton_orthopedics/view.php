<?php
/**
 * PQRS Carrollton Orthopedics Group Direct Data Entry
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

$obj = formFetch("pqrs_form_carrollton_orthopedics", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_carrollton_orthopedics/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Carrollton Orthopedics Quality Reporting</b></center></span><br><br>
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
	Measure #0021 
	 <a target="_blank" href="#" title="(NQF 0268)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Perioperative Care: Selection of Prophylactic Antibiotic – First OR Second Generation Cephalosporin 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did this Surgical patient have an order for a first OR second generation cephalosporin for antimicrobial prophylaxis? INSTRUCTIONS: There must be documentation of an order (written order, verbal order, or standing order/protocol) for a first OR second generation cephalosporin for antimicrobial prophylaxis OR documentation that a first OR second generation cephalosporin was given. NOTE: In the event surgery is delayed, as long as the patient is redosed (if clinically appropriate) the numerator coding should be applied. 
	 
	<p></b>


	<input type="radio" name="Carrollton_Orthopedics0021" value="G9197" <?php if ($obj{"Carrollton_Orthopedics0021"} == "G9197") { echo 'checked=checked'; } ?> > Documentation of Order for First or Second Generation Cephalosporin for Antimicrobial Prophylaxis (written order, verbal order, or standing order/protocol) 
	 <a target="_blank" href="#" title="(G9197) (Performance Met) Note: G9197 is provided for antibiotic ordered or antibiotic given. Report G9197 if a first or second generation cephalosporin was given for antimicrobial prophylaxis."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0021" value="G9196" <?php if ($obj{"Carrollton_Orthopedics0021"} == "G9196") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not ordering a first OR second generation cephalosporin for antimicrobial prophylaxis (e.g., patients enrolled in clinical trials, patients with documented infection prior to surgical procedure of interest, patients who were receiving antibiotics more than 24 hours prior to surgery [except colon surgery patients taking oral prophylactic antibiotics], patients who were receiving antibiotics within 24 hours prior to arrival [except colon surgery patients taking oral prophylactic antibiotics], other medical reason(s)) 
	 <a target="_blank" href="#" title="(G9196) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0021" value="G9198" <?php if ($obj{"Carrollton_Orthopedics0021"} == "G9198") { echo 'checked=checked'; } ?> > Order for first OR second generation cephalosporin for antimicrobial prophylaxis was not documented, reason not given. 
	 <a target="_blank" href="#" title="(G9198) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #023 
	 <a target="_blank" href="#" title="(NQF 0239)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Perioperative Care: Venous Thromboembolism (VTE) Prophylaxis (When Indicated in ALL Patients) Percentage of surgical patients aged 18 years and older undergoing procedures for which venous thromboembolism (VTE) prophylaxis is indicated in all patients, who had an order for Low Molecular Weight Heparin (LMWH), LowDose Unfractionated Heparin (LDUH), adjusted-dose warfarin, fondaparinux or mechanical prophylaxis to be given within 24 hours prior to incision time or within 24 hours after surgery end time. 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did this surgical patient have an order for LMWH, LDUH, adjusted-dose warfarin, fondaparinux or mechanical prophylaxis to be given within 24 hours prior to incision time or within 24 hours after surgery end time There must be documentation of order (written order, verbal order, or standing order/protocol) for VTE prophylaxis OR documentation that VTE prophylaxis was given. Note: TED hose are not considered Mechanical Prophylaxis 
	 <a target="_blank" href="#" title="Note: A single CPT Category II code is provided for VTE prophylaxis ordered or VTE prophylaxis given. If VTE prophylaxis is given, report 4044F."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Carrollton_Orthopedics023" value="4044F" <?php if ($obj{"Carrollton_Orthopedics023"} == "4044F") { echo 'checked=checked'; } ?> > Documentation that an order was given for venous thromboembolism (VTE) prophylaxis to be given within 24 hours prior to incision time or 24 hours after surgery end time 
	 <a target="_blank" href="#" title="(4044F) (Performance Met:)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics023" value="4044F:1P" <?php if ($obj{"Carrollton_Orthopedics023"} == "4044F:1P") { echo 'checked=checked'; } ?> > VTE Prophylaxis not Ordered for Medical Reasons 
	 <a target="_blank" href="#" title="(4044F:1P) (Medical Performance Exclusion:)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics023" value="4044F:8P" <?php if ($obj{"Carrollton_Orthopedics023"} == "4044F:8P") { echo 'checked=checked'; } ?> > VTE Prophylaxis not Ordered, Reason not Otherwise Specified 
	 <a target="_blank" href="#" title="(4044F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0039 
	 <a target="_blank" href="#" title="(NQF #0046)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Screening for Osteoporosis for Women Aged 65-85 Years of Age 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was a central Dual-energy X-Ray Absorptiometry (DXA) ever performed? 
	 
	<p></b>


	<input type="radio" name="Carrollton_Orthopedics0039" value="G8399" <?php if ($obj{"Carrollton_Orthopedics0039"} == "G8399") { echo 'checked=checked'; } ?> > Patient record includes documented results of a central Dual-energy X-Ray Absorptiometry (DXA). 
	 <a target="_blank" href="#" title="(G8399) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0039" value="G8401" <?php if ($obj{"Carrollton_Orthopedics0039"} == "G8401") { echo 'checked=checked'; } ?> > Clinician documented that patient was not an eligible candidate for screening. 
	 <a target="_blank" href="#" title="(G8401) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0039" value="G8400" <?php if ($obj{"Carrollton_Orthopedics0039"} == "G8400") { echo 'checked=checked'; } ?> > Patient with central DXA results not documented, reason not given. 
	 <a target="_blank" href="#" title="(G8400) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #046 
	 <a target="_blank" href="#" title="(NQF 0097)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Medication Reconciliation Post-Discharge 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was Medication reconciliation conducted by a prescribing practitioner, clinical pharmacists or registered nurse on or within 30 days of discharge? Applies only to patients with an office visit within 30 days of discharge from an inpatient facility. Definition: Medication Reconciliation – A type of review in which the discharge medications are reconciled with the most recent medication list in the outpatient medical record. Documentation in the outpatient medical record must include evidence of medication reconciliation and the date on which it was performed. Any of the following evidence meets criteria: (1) Documentation of the current medications with a notation that references the discharge medications (e.g., no changes in meds since discharge, same meds at discharge, discontinue all discharge meds), (2) Documentation of the patient’s current medications with a notation that the discharge medications were reviewed, (3) Documentation that the provider “reconciled the current and discharge meds,” (4) Documentation of a current medication list, a discharge medication list and notation that the appropriate practitioner type reviewed both lists on the same date of service, (5) Notation that no medications were prescribed or ordered upon discharge 
	 
	<p></b>


	<input type="radio" name="Carrollton_Orthopedics046" value="1111F" <?php if ($obj{"Carrollton_Orthopedics046"} == "1111F") { echo 'checked=checked'; } ?> > Documentation of Reconciliation of Discharge Medication with Current Medication List in the Medical Record 
	 <a target="_blank" href="#" title="(1111F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics046" value="1111F:8P" <?php if ($obj{"Carrollton_Orthopedics046"} == "1111F:8P") { echo 'checked=checked'; } ?> > Discharge Medication not Reconciled with Current Medication List in the Medical Record, Reason Not Otherwise Specified 
	 <a target="_blank" href="#" title="(1111F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics046" value="NA0046" <?php if ($obj{"Carrollton_Orthopedics046"} == "NA0046") { echo 'checked=checked'; } ?> > Patient was not discharged from an inpatient facility within the last 30 days. (There are no reporting requirements in this case. 
	 <a target="_blank" href="#" title="(No Reporting Requirement)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0109 
	 
	 -- Osteoarthritis (OA): Function and Pain Assessmenti 
	 <a target="_blank" href="#" title="National Quality Strategy"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Patient visits with assessment for level of function and pain documented at each visit. NUMERATOR NOTE: For the purposes of this measure, the method for assessing function and pain is left up to the discretion of the individual clinician and based on the needs of the patient. The assessment may be done via a validated instrument (though one is not required) that measures pain and various functional elements including a patient's ability to perform activities of daily living (ADLs). 
	 
	<p></b>


	<input type="radio" name="Carrollton_Orthopedics0109" value="1006F" <?php if ($obj{"Carrollton_Orthopedics0109"} == "1006F") { echo 'checked=checked'; } ?> > Osteoarthritis Symptoms and Functional Status Assessed (may include the use of a standardized scale or the completion of an assessment questionnaire, such as the SF-36, AAOS Hip & Knee Questionnaire) 
	 <a target="_blank" href="#" title="(1006F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0109" value="1006F:8P" <?php if ($obj{"Carrollton_Orthopedics0109"} == "1006F:8P") { echo 'checked=checked'; } ?> > Osteoarthritis Symptoms and Functional Status not Assessed, Reason not Otherwise Specified 
	 <a target="_blank" href="#" title="(1006F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0128 
	 <a target="_blank" href="#" title="(NQF #0421)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Body Mass Index (BMI) Screening and Follow-Up Plan 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was height and weight measured and recorded within 6 months of the encounter and, if BMI is outside of normal parameters, was a follow-up plan documented? NOTE: Normal parameters: Age 65 years and older BMI &ge; 23 and &lt; 30 kg/m2 Age 18 - 64 years BMI &ge; 18.5 and &lt; 25 kg/m2. 
	 <a target="_blank" href="#" title="A patient is not eligible if one or more of the following reasons are documented: Patient is receiving palliative care, is pregnant, refuses BMI measurement, and any other reason documented in the medical record by the provider why BMI measurement was not appropriate."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Carrollton_Orthopedics0128" value="G8420" <?php if ($obj{"Carrollton_Orthopedics0128"} == "G8420") { echo 'checked=checked'; } ?> > BMI is documented within normal parameters and no follow-up plan is required. 
	 <a target="_blank" href="#" title="(G8420) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0128" value="G8417" <?php if ($obj{"Carrollton_Orthopedics0128"} == "G8417") { echo 'checked=checked'; } ?> > BMI is documented above normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8417) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0128" value="G8418" <?php if ($obj{"Carrollton_Orthopedics0128"} == "G8418") { echo 'checked=checked'; } ?> > BMI is documented below normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8418) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0128" value="G8421" <?php if ($obj{"Carrollton_Orthopedics0128"} == "G8421") { echo 'checked=checked'; } ?> > BMI not documented and no reason is given. 
	 <a target="_blank" href="#" title="(G8421) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0128" value="G8419" <?php if ($obj{"Carrollton_Orthopedics0128"} == "G8419") { echo 'checked=checked'; } ?> > BMI documented outside normal parameters, no follow-up plan documented, NOS. 
	 <a target="_blank" href="#" title="(G8419) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0226 
	 <a target="_blank" href="#" title="(NQF #0028)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community / Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient screened for tobacco use within 24 months AND given tobacco cessation intervention if identified as a tobacco user? 
	 <a target="_blank" href="#" title="Tobacco use includes use of any type of tobacco; tobacco cessation intervention includes brief counseling (3 minutes or less), and/or pharmacotherapy."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Carrollton_Orthopedics0226" value="4004F" <?php if ($obj{"Carrollton_Orthopedics0226"} == "4004F") { echo 'checked=checked'; } ?> > Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0226" value="1036F" <?php if ($obj{"Carrollton_Orthopedics0226"} == "1036F") { echo 'checked=checked'; } ?> > Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0226" value="4004F:1P" <?php if ($obj{"Carrollton_Orthopedics0226"} == "4004F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not screening for tobacco use. 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0226" value="4004F:8P" <?php if ($obj{"Carrollton_Orthopedics0226"} == "4004F:8P") { echo 'checked=checked'; } ?> > Tobacco screening OR tobacco cessation intervention not performed, NOS. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0238 
	 <a target="_blank" href="#" title="(NQF #0022)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Use of High-Risk Medications in the Elderly 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety NOTE: A lower calculated performance rate for this measure indicates better clinical care or control."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Were any high-risk medications ordered? (see list in CMS Measures Specifications for 238) 
	 
	<p></b>


	<input type="radio" name="Carrollton_Orthopedics0238" value="G9365" <?php if ($obj{"Carrollton_Orthopedics0238"} == "G9365") { echo 'checked=checked'; } ?> > One high-risk medication ordered. 
	 <a target="_blank" href="#" title="(G9365) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0238" value="G9365 G9367" <?php if ($obj{"Carrollton_Orthopedics0238"} == "G9365 G9367") { echo 'checked=checked'; } ?> > Two or more high-risk medications ordered 
	 <a target="_blank" href="#" title="(G9365 G9367) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0238" value="G9366 G9368" <?php if ($obj{"Carrollton_Orthopedics0238"} == "G9366 G9368") { echo 'checked=checked'; } ?> > No orders for high risk medications. Does not apply to this patient. 
	 <a target="_blank" href="#" title="(G9366 G9368) (Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0431 
	 <a target="_blank" href="#" title="(NQF #2152)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Unhealthy Alcohol Use: Screening & Brief Counseling 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/ Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient screened for unhealthy alcohol use using a systematic screening method AND if identified as unhealthy alcohol users, did they receive counseling? 
	 <a target="_blank" href="#" title="Patients screened for unhealthy alcholol use in the last 24 months."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Carrollton_Orthopedics0431" value="G9621" <?php if ($obj{"Carrollton_Orthopedics0431"} == "G9621") { echo 'checked=checked'; } ?> > Patient identified as an unhealthy alcohol user when screened for unhealthy alcohol use using a systematic screening method and received brief counseling. 
	 <a target="_blank" href="#" title="(G9621) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0431" value="G9622" <?php if ($obj{"Carrollton_Orthopedics0431"} == "G9622") { echo 'checked=checked'; } ?> > Patient not identified as an unhealthy alcohol user when screened for unhealthy alcohol use using a systematic screening method. 
	 <a target="_blank" href="#" title="(G9622) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0431" value="G9623" <?php if ($obj{"Carrollton_Orthopedics0431"} == "G9623") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not screening for unhealthy alcohol use (e.g., limited life expectancy, other medical reasons). 
	 <a target="_blank" href="#" title="(G9623) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Carrollton_Orthopedics0431" value="G9624" <?php if ($obj{"Carrollton_Orthopedics0431"} == "G9624") { echo 'checked=checked'; } ?> > Patient not screened for unhealthy alcohol screening using a systematic screening method OR patient did not receive brief counseling, reason not given. 
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
