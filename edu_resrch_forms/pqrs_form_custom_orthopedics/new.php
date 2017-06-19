<?php
/**
 * PQRS SCRHIO Orthopedics Group Direct Data Entry
 *
 * Copyright (C) 2016      Suncoast Connection
 *
 * @package librehealthehr
 * @link    http://suncoastconnection.com
 * @author  Suncoast Connection
 * Mozilla Public License Version 2.0, Bryan Lee, <leebc>
 */

include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: SCRHIO Orthopedics");
?>
<html><head>
<?php html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>
<form method=post action="<?php echo $rootdir;?>/forms/pqrs_form_scrhio_orthopedics/save.php?mode=new" name="my_form">
<br>
<span class="title"><center>SCRHIO Orthopedics Quality Reporting</center></span><br><br>
<center><a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
You must EDIT the form after saving and reviewing to finalize
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link_submit"
 onclick="top.restoreSession()">[Don't Save]</a></center>
<br>

<?php $res = sqlStatement("SELECT fname,mname,lname,DOB FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res); ?>
<b><u>Client and Service Information</u></b><br><br>
<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>

<br> <br>

<b><u>Purpose of Form</u></b><br>
<textarea cols=120 rows=3 wrap=virtual name="purpose" >To ensure quality care and reporting on patients with SCRHIO Orthopedics.</textarea>
<br><br>

<table>

<tr>	<td> <br><p><br>
	<b>
	Measure #0021 <a target="_blank" href="#" title="(NQF 0268)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Perioperative Care: Selection of Prophylactic Antibiotic – First OR Second Generation Cephalosporin <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Did this Surgical patient have an order for a first OR second generation cephalosporin for antimicrobial prophylaxis? INSTRUCTIONS: There must be documentation of an order (written order, verbal order, or standing order/protocol) for a first OR second generation cephalosporin for antimicrobial prophylaxis OR documentation that a first OR second generation cephalosporin was given. NOTE: In the event surgery is delayed, as long as the patient is redosed (if clinically appropriate) the numerator coding should be applied. 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0021" value="G9197">Documentation of Order for First or Second Generation Cephalosporin for Antimicrobial Prophylaxis (written order, verbal order, or standing order/protocol) 
	 <a target="_blank" href="#" title="(G9197) (Performance Met) Note: G9197 is provided for antibiotic ordered or antibiotic given. Report G9197 if a first or second generation cephalosporin was given for antimicrobial prophylaxis."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0021" value="G9196">Documentation of medical reason(s) for not ordering a first OR second generation cephalosporin for antimicrobial prophylaxis (e.g., patients enrolled in clinical trials, patients with documented infection prior to surgical procedure of interest, patients who were receiving antibiotics more than 24 hours prior to surgery [except colon surgery patients taking oral prophylactic antibiotics], patients who were receiving antibiotics within 24 hours prior to arrival [except colon surgery patients taking oral prophylactic antibiotics], other medical reason(s)) 
	 <a target="_blank" href="#" title="(G9196) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0021" value="G9198">Order for first OR second generation cephalosporin for antimicrobial prophylaxis was not documented, reason not given. 
	 <a target="_blank" href="#" title="(G9198) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0022 <a target="_blank" href="#" title="(NQF 0271)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Perioperative Care: Discontinuation of Prophylactic Parenteral Antibiotics (Non-Cardiac Procedures) Percentage of non-cardiac surgical patients aged 18 years and older undergoing procedures with the indications for prophylactic parenteral antibiotics AND who received a prophylactic parenteral antibiotic, who have an order for discontinuation of prophylactic parenteral antibiotics within 24 hours of surgical end time'), <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was an order for discontinuation of prophylactic parenteral antibiotics within 24 hours of surgical end time? Numerator Instructions: There must be documentation of order (written order, verbal order, or standing order/protocol) specifying that prophylactic parenteral antibiotic is to be discontinued within 24 hours of surgical end time OR specifying a course of antibiotic administration limited to that 24 hour period (e.g., “to be given every 8 hours for three doses” or for “one time” IV dose orders) OR documentation that prophylactic parenteral antibiotic was discontinued within 24 hours of surgical end time. 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0022" value="4049F 4046F">Documentation of Order for Discontinuation of Prophylactic Parenteral Antibiotics Within 24 Hours of Surgical End Time. 
	 <a target="_blank" href="#" title="(4049F 4046F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0022" value="4049F:1P 4046F">Prophylactic Parenteral Antibiotics not Discontinued for Medical Reasons 
	 <a target="_blank" href="#" title="(4049F:1P 4046F) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0022" value="4042F">Patient not eligible for this measure because patient did not receive prophylactic parenteral antibiotics within specified timeframe 
	 <a target="_blank" href="#" title="(4042F) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0022" value="4049F:8P 4046F">Prophylactic Parenteral Antibiotics not Discontinued, Reason not Otherwise Specified 
	 <a target="_blank" href="#" title="(4049F:8P 4046F) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0023 <a target="_blank" href="#" title="(NQF 0239)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Perioperative Care: Venous Thromboembolism (VTE) Prophylaxis (When Indicated in ALL Patients) Percentage of surgical patients aged 18 years and older undergoing procedures for which venous thromboembolism (VTE) prophylaxis is indicated in all patients, who had an order for Low Molecular Weight Heparin (LMWH), LowDose Unfractionated Heparin (LDUH), adjusted-dose warfarin, fondaparinux or mechanical prophylaxis to be given within 24 hours prior to incision time or within 24 hours after surgery end time. <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Did this surgical patient have an order for LMWH, LDUH, adjusted-dose warfarin, fondaparinux or mechanical prophylaxis to be given within 24 hours prior to incision time or within 24 hours after surgery end time There must be documentation of order (written order, verbal order, or standing order/protocol) for VTE prophylaxis OR documentation that VTE prophylaxis was given. Note: TED hose are not considered Mechanical Prophylaxis <a target="_blank" href="#" title="Note: A single CPT Category II code is provided for VTE prophylaxis ordered or VTE prophylaxis given. If VTE prophylaxis is given, report 4044F."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0023" value="4044F">Documentation that an order was given for venous thromboembolism (VTE) prophylaxis to be given within 24 hours prior to incision time or 24 hours after surgery end time 
	 <a target="_blank" href="#" title="(4044F) (Performance Met:)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0023" value="4044F:1P">VTE Prophylaxis not Ordered for Medical Reasons 
	 <a target="_blank" href="#" title="(4044F:1P) (Medical Performance Exclusion:)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0023" value="4044F:8P">VTE Prophylaxis not Ordered, Reason not Otherwise Specified 
	 <a target="_blank" href="#" title="(4044F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0039 <a target="_blank" href="#" title="(NQF #0046)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Screening for Osteoporosis for Women Aged 65-85 Years of Age <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was a central Dual-energy X-Ray Absorptiometry (DXA) ever performed? 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0039" value="G8399">Patient record includes documented results of a central Dual-energy X-Ray Absorptiometry (DXA). 
	 <a target="_blank" href="#" title="(G8399) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0039" value="G8401">Clinician documented that patient was not an eligible candidate for screening. 
	 <a target="_blank" href="#" title="(G8401) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0039" value="G8400">Patient with central DXA results not documented, reason not given. 
	 <a target="_blank" href="#" title="(G8400) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0046 <a target="_blank" href="#" title="(NQF 0097)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Medication Reconciliation Post-Discharge <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was Medication reconciliation conducted by a prescribing practitioner, clinical pharmacists or registered nurse on or within 30 days of discharge? Applies only to patients with an office visit within 30 days of discharge from an inpatient facility. Definition: Medication Reconciliation – A type of review in which the discharge medications are reconciled with the most recent medication list in the outpatient medical record. Documentation in the outpatient medical record must include evidence of medication reconciliation and the date on which it was performed. Any of the following evidence meets criteria: (1) Documentation of the current medications with a notation that references the discharge medications (e.g., no changes in meds since discharge, same meds at discharge, discontinue all discharge meds), (2) Documentation of the patient’s current medications with a notation that the discharge medications were reviewed, (3) Documentation that the provider “reconciled the current and discharge meds,” (4) Documentation of a current medication list, a discharge medication list and notation that the appropriate practitioner type reviewed both lists on the same date of service, (5) Notation that no medications were prescribed or ordered upon discharge 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0046" value="1111F">Documentation of Reconciliation of Discharge Medication with Current Medication List in the Medical Record 
	 <a target="_blank" href="#" title="(1111F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0046" value="1111F:8P">Discharge Medication not Reconciled with Current Medication List in the Medical Record, Reason Not Otherwise Specified 
	 <a target="_blank" href="#" title="(1111F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0046" value="NA0046">Patient was not discharged from an inpatient facility within the last 30 days. (There are no reporting requirements in this case. 
	 <a target="_blank" href="#" title="(No Reporting Requirement)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0109 -- Osteoarthritis (OA): Function and Pain Assessmenti <a target="_blank" href="#" title="National Quality Strategy"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Patient visits with assessment for level of function and pain documented at each visit. NUMERATOR NOTE: For the purposes of this measure, the method for assessing function and pain is left up to the discretion of the individual clinician and based on the needs of the patient. The assessment may be done via a validated instrument (though one is not required) that measures pain and various functional elements including a patient's ability to perform activities of daily living (ADLs). 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0109" value="1006F">Osteoarthritis Symptoms and Functional Status Assessed (may include the use of a standardized scale or the completion of an assessment questionnaire, such as the SF-36, AAOS Hip & Knee Questionnaire) 
	 <a target="_blank" href="#" title="(1006F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0109" value="1006F:8P">Osteoarthritis Symptoms and Functional Status not Assessed, Reason not Otherwise Specified 
	 <a target="_blank" href="#" title="(1006F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0110 <a target="_blank" href="#" title="NQF 0041"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Preventive Care and Screening: Influenza Immunization <a target="_blank" href="#" title="Quality Strategy Domain: Community/Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Did patients receive an influenza immunization OR reported previous receipt of an influenza immunization? Numerator Instructions: The numerator for this measure can be met by reporting either administration of an influenza vaccination or that the patient reported previous receipt of the current season’s influenza immunization. If the performance of the numerator is not met, a clinician can report a valid performance exclusion for having not administered an influenza vaccination. For clinicians reporting a performance exclusion for this measure, there should be a clear rationale and documented reason for not administering an influenza immunization if the patient did not indicate previous receipt, which could include a medical reason (e.g., patient allergy), patient reason (e.g., patient declined), or system reason (e.g., vaccination not available). The system reason should be indicated only for cases of disruption or shortage of influenza vaccination supply. Definition: Previous Receipt – Receipt of the current season’s influenza immunization from another provider OR from same provider prior to the visit to which the measure is applied (typically, prior vaccination would include influenza vaccine given since August 1st).'), 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0110" value="G8482">Influenza Immunization Administered 
	 <a target="_blank" href="#" title="(G8482) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0110" value="G8482">Influenza Immunization previously received 
	 <a target="_blank" href="#" title="(G8482) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0110" value="G8483">Influenza Immunization not Administered for Documented Reasons (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons) 
	 <a target="_blank" href="#" title="(G8483) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0110" value="G8484">Influenza Immunization not Administered, Reason not Given 
	 <a target="_blank" href="#" title="(G8484) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0111 <a target="_blank" href="#" title="NQF 0043"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Pneumonia Vaccination Status for Older Adults <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Did patients receive a pneumococcal vaccination? NUMERATOR NOTE: While the measure provides credit for adults 65 years of age and older who have ever received either the PCV13 or PPSV23 vaccine (or both), according to ACIP recommendations, patients should receive both vaccines. The order and timing of the vaccinations depends on certain patient characteristics, and are described in more detail in the ACIP recommendations. 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0111" value="4040F">Pneumococcal Vaccination Administered or Previously Received 
	 <a target="_blank" href="#" title="(4040F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0111" value="4040:8P">Pneumococcal Vaccination not Administered or Previously Received,Reason not Otherwise Specified 
	 <a target="_blank" href="#" title="(4040F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0128 <a target="_blank" href="#" title="(NQF #0421)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Preventive Care and Screening: Body Mass Index (BMI) Screening and Follow-Up Plan <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was height and weight measured and recorded within 6 months of the encounter and, if BMI is outside of normal parameters, was a follow-up plan documented? NOTE: Normal parameters: Age 65 years and older BMI &ge; 23 and &lt; 30 kg/m2 Age 18 - 64 years BMI &ge; 18.5 and &lt; 25 kg/m2. <a target="_blank" href="#" title="A patient is not eligible if one or more of the following reasons are documented: Patient is receiving palliative care, is pregnant, refuses BMI measurement, and any other reason documented in the medical record by the provider why BMI measurement was not appropriate."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0128" value="G8420">BMI is documented within normal parameters and no follow-up plan is required. 
	 <a target="_blank" href="#" title="(G8420) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0128" value="G8417">BMI is documented above normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8417) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0128" value="G8418">BMI is documented below normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8418) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0128" value="G8421">BMI not documented and no reason is given. 
	 <a target="_blank" href="#" title="(G8421) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0128" value="G8419">BMI documented outside normal parameters, no follow-up plan documented, NOS. 
	 <a target="_blank" href="#" title="(G8419) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0130 <a target="_blank" href="#" title="(NQF #0419)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Documentation of Current Medications in the Medical Record <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Are current medications documented in the patient's medical record at EACH patient visit during the reporting year? <a target="_blank" href="#" title="Patient’s medications obtained, updated, or reviewed, and documented."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0130" value="G8427">Current (or no) medications documented in the patient's medical record. 
	 <a target="_blank" href="#" title="(G8427) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0130" value="G8430">Patient is not eligible. 
	 <a target="_blank" href="#" title="(G8430) (Other Performance Exclusion) (eg, emergent or urgent situation)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0130" value="G8428">Current list of medications not documented, reason not given. 
	 <a target="_blank" href="#" title="(G8428) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0131 <a target="_blank" href="#" title="(NQF #0420)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Pain Assessment and Follow-Up <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: For each patient visit during the reporting year is there documentation of a pain assessment being done using a standardized tool(s) AND when pain is present is there documentation of a follow-up plan? 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0131" value="G8730">Pain assessment documented as positive AND a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8730)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0131" value="G8731">Pain assessment is documented as negative, no follow-up plan required. 
	 <a target="_blank" href="#" title="(G8731)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0131" value="G8442">Patient is not eligible for a pain assessment. 
	 <a target="_blank" href="#" title="(G8442) (Other Performance Exclusion) (eg, urgent, emergent situation or patient incapacitated)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0131" value="G8939">Pain assessment documented as positive, no follow-up plan, patient is not eligible. 
	 <a target="_blank" href="#" title="(G8939) (Other Performance Exclusion) (urgent, emergent situation or patient incapacitated)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0131" value="G8732">No documentation of pain assessment, reason not given. 
	 <a target="_blank" href="#" title="(G8732) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0131" value="G8509">Pain assessment documented as positive, no follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8509) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0154 <a target="_blank" href="#" title="(NQF: #0101)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Falls: Risk Assessment <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: This is a two-part measure which is paired with Measure #155: Falls: Plan of Care. If the falls risk assessment indicates the patient has documentation of two or more falls in the past year or any fall with injury in the past year #155 should also be reported. Was risk assessment for patient with a history of falls completed within the past 12 months? <a target="_blank" href="#" title="2 or more falls in the past year or any fall with injury in the past year. Documentation of patient reported history of falls is sufficient."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0154" value="3288F 1100F">Falls risk assessment documented and there is documentation of two or more falls in the past year or any fall with injury in the past year 
	 <a target="_blank" href="#" title="(3288F, 1100F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0154" value="3288F:1P 1100F">Medical reason(s) for not completing a risk assessment and there is documentation of two or more falls in the past year or any fall with injury in the past year 
	 <a target="_blank" href="#" title="(3288F:1P, 1100F) (Medical Performance Exclusion) (eg, patient not ambulatory)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0154" value="1101F">Patient screened for future fall risk; no falls or only one fall without injury in the past year. 
	 <a target="_blank" href="#" title="(1101F) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0154" value="1101F:8P">Patient not eligible; fall status not documented. 
	 <a target="_blank" href="#" title="(1101F:8P) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0154" value="3288F:8P 1100F">Falls risk assessment not completed, AND there is documentation of two or more falls in the past year or any fall with injury in the past year. 
	 <a target="_blank" href="#" title="(3288F:8P, 1100F) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0155 <a target="_blank" href="#" title="(NQF: #0101)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Falls: Plan of Care <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was a plan of care for patient with a history of falls documented within 12 months? <a target="_blank" href="#" title="History of falls is defined as 2 or more falls in the past year or any fall with injury in the past year. Documentation of patient reported history of falls is sufficient."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0155" value="0518F">Falls plan of care documented. 
	 <a target="_blank" href="#" title="(0518F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0155" value="0518F:1P">Documentation of medical reason(s) for no plan of care for falls. 
	 <a target="_blank" href="#" title="(0518F:1P) (Medical Performance Exclusion) (eg, patient is not ambulatory)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0155" value="0518F:8P">Plan of care not documented, reason NOS. 
	 <a target="_blank" href="#" title="(0518F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0155" value="NA155">Measure does not apply to this patient. 
	 <a target="_blank" href="#" title="(NA155) (Does not apply to this patient)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0226 <a target="_blank" href="#" title="(NQF #0028)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention <a target="_blank" href="#" title="National Quality Strategy Domain: Community / Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient screened for tobacco use within 24 months AND given tobacco cessation intervention if identified as a tobacco user? <a target="_blank" href="#" title="Tobacco use includes use of any type of tobacco; tobacco cessation intervention includes brief counseling (3 minutes or less), and/or pharmacotherapy."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0226" value="4004F">Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0226" value="1036F">Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0226" value="4004F:1P">Documentation of medical reason(s) for not screening for tobacco use. 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0226" value="4004F:8P">Tobacco screening OR tobacco cessation intervention not performed, NOS. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0238 <a target="_blank" href="#" title="(NQF #0022)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Use of High-Risk Medications in the Elderly <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety NOTE: A lower calculated performance rate for this measure indicates better clinical care or control."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Were any high-risk medications ordered? (see list in CMS Measures Specifications for 238) 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0238" value="G9365">One high-risk medication ordered. 
	 <a target="_blank" href="#" title="(G9365) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0238" value="G9365 G9367">Two or more high-risk medications ordered 
	 <a target="_blank" href="#" title="(G9365 G9367) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0238" value="G9366 G9368">No orders for high risk medications. Does not apply to this patient. 
	 <a target="_blank" href="#" title="(G9366 G9368) (Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0317 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Preventive Care and Screening: Screening for High Blood Pressure and Follow-Up Documented <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health NOTE: BP screening and follow-up must be performed once per measurement period. For patients with Normal blood pressure a follow-up plan is not required."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient screened for high blood pressure and is indicated follow-up documented? 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0317" value="G8783">Normal blood pressure reading documented, follow-up not required. 
	 <a target="_blank" href="#" title="(G8783) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0317" value="G8950">Pre-Hypertensive or Hypertensive blood pressure reading documented, AND the indicated follow-up is documented. 
	 <a target="_blank" href="#" title="(G8950) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0317" value="G8784">Patient not eligible. 
	 <a target="_blank" href="#" title="(G8784) (Other Performance Exclusion) (eg, (active diagnosis of hypertension, patient refuses, urgent or emergent situation)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0317" value="G8785">Blood pressure reading not documented, reason not specified. 
	 <a target="_blank" href="#" title="(G8785) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0317" value="G8952">Pre-Hypertensive or Hypertensive blood pressure reading documented, indicated follow-up not documented, reason not specified. 
	 <a target="_blank" href="#" title="(G8952) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0431 <a target="_blank" href="#" title="(NQF #2152)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Preventive Care and Screening: Unhealthy Alcohol Use: Screening & Brief Counseling <a target="_blank" href="#" title="National Quality Strategy Domain: Community/ Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient screened for unhealthy alcohol use using a systematic screening method AND if identified as unhealthy alcohol users, did they receive counseling? <a target="_blank" href="#" title="Patients screened for unhealthy alcholol use in the last 24 months."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="SCRHIO_Orthopedics0431" value="G9621">Patient identified as an unhealthy alcohol user when screened for unhealthy alcohol use using a systematic screening method and received brief counseling. 
	 <a target="_blank" href="#" title="(G9621) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0431" value="G9622">Patient not identified as an unhealthy alcohol user when screened for unhealthy alcohol use using a systematic screening method. 
	 <a target="_blank" href="#" title="(G9622) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0431" value="G9623">Documentation of medical reason(s) for not screening for unhealthy alcohol use (e.g., limited life expectancy, other medical reasons). 
	 <a target="_blank" href="#" title="(G9623) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="SCRHIO_Orthopedics0431" value="G9624">Patient not screened for unhealthy alcohol screening using a systematic screening method OR patient did not receive brief counseling, reason not given. 
	 <a target="_blank" href="#" title="(G9624) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td>	<p><br><p>	</td> </tr>

<tr>	<td>
	<b>Additional notes and recommendations:</b><br>
	<textarea cols=83 rows=1 wrap=virtual  name="recommendation" ></textarea><br><br>
	<br><br>
</td>	</tr>

<tr>	<td>
	<center><a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
	<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link_submit"
 	onclick="top.restoreSession()">[Don't Save]</a></center>
</td></tr>

</table>

</form>
<?php
formFooter();
?>
