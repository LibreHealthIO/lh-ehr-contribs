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
include_once($GLOBALS["srcdir"]."/api.inc");
function pqrs_form_scrhio_orthopedics_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_scrhio_orthopedics", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>SCRHIO Orthopedics Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0021 Perioperative Care: Selection of Prophylactic Antibiotic – First OR Second Generation Cephalosporin:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0021"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0021"} == "G9197") { echo " -- Documentation of Order for First or Second Generation Cephalosporin for Antimicrobial Prophylaxis (written order, verbal order, or standing order/protocol)  <br>
	<font size=-3>(G9197) (Performance Met) Note: G9197 is provided for antibiotic ordered or antibiotic given. Report G9197 if a first or second generation cephalosporin was given for antimicrobial prophylaxis.</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0021"} == "G9196") { echo " -- Documentation of medical reason(s) for not ordering a first OR second generation cephalosporin for antimicrobial prophylaxis (e.g., patients enrolled in clinical trials, patients with documented infection prior to surgical procedure of interest, patients who were receiving antibiotics more than 24 hours prior to surgery [except colon surgery patients taking oral prophylactic antibiotics], patients who were receiving antibiotics within 24 hours prior to arrival [except colon surgery patients taking oral prophylactic antibiotics], other medical reason(s))  <br>
	<font size=-3>(G9196) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0021"} == "G9198") { echo " -- Order for first OR second generation cephalosporin for antimicrobial prophylaxis was not documented, reason not given.  <br>
	<font size=-3>(G9198) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0022 Perioperative Care: Discontinuation of Prophylactic Parenteral Antibiotics (Non-Cardiac Procedures) Percentage of non-cardiac surgical patients aged 18 years and older undergoing procedures with the indications for prophylactic parenteral antibiotics AND who received a prophylactic parenteral antibiotic, who have an order for discontinuation of prophylactic parenteral antibiotics within 24 hours of surgical end time'),:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0022"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0022"} == "4049F 4046F") { echo " -- Documentation of Order for Discontinuation of Prophylactic Parenteral Antibiotics Within 24 Hours of Surgical End Time.  <br>
	<font size=-3>(4049F 4046F) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0022"} == "4049F:1P 4046F") { echo " -- Prophylactic Parenteral Antibiotics not Discontinued for Medical Reasons  <br>
	<font size=-3>(4049F:1P 4046F) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0022"} == "4042F") { echo " -- Patient not eligible for this measure because patient did not receive prophylactic parenteral antibiotics within specified timeframe  <br>
	<font size=-3>(4042F) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0022"} == "4049F:8P 4046F") { echo " -- Prophylactic Parenteral Antibiotics not Discontinued, Reason not Otherwise Specified  <br>
	<font size=-3>(4049F:8P 4046F) (Medical Performance Exclusion)</font>"; } ?>
<br><br>
Measure #0023 Perioperative Care: Venous Thromboembolism (VTE) Prophylaxis (When Indicated in ALL Patients) Percentage of surgical patients aged 18 years and older undergoing procedures for which venous thromboembolism (VTE) prophylaxis is indicated in all patients, who had an order for Low Molecular Weight Heparin (LMWH), LowDose Unfractionated Heparin (LDUH), adjusted-dose warfarin, fondaparinux or mechanical prophylaxis to be given within 24 hours prior to incision time or within 24 hours after surgery end time.:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0023"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0023"} == "4044F") { echo " -- Documentation that an order was given for venous thromboembolism (VTE) prophylaxis to be given within 24 hours prior to incision time or 24 hours after surgery end time  <br>
	<font size=-3>(4044F) (Performance Met:)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0023"} == "4044F:1P") { echo " -- VTE Prophylaxis not Ordered for Medical Reasons  <br>
	<font size=-3>(4044F:1P) (Medical Performance Exclusion:)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0023"} == "4044F:8P") { echo " -- VTE Prophylaxis not Ordered, Reason not Otherwise Specified  <br>
	<font size=-3>(4044F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0039 Screening for Osteoporosis for Women Aged 65-85 Years of Age:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0039"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0039"} == "G8399") { echo " -- Patient record includes documented results of a central Dual-energy X-Ray Absorptiometry (DXA).  <br>
	<font size=-3>(G8399) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0039"} == "G8401") { echo " -- Clinician documented that patient was not an eligible candidate for screening.  <br>
	<font size=-3>(G8401) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0039"} == "G8400") { echo " -- Patient with central DXA results not documented, reason not given.  <br>
	<font size=-3>(G8400) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0046 Medication Reconciliation Post-Discharge:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0046"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0046"} == "1111F") { echo " -- Documentation of Reconciliation of Discharge Medication with Current Medication List in the Medical Record  <br>
	<font size=-3>(1111F) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0046"} == "1111F:8P") { echo " -- Discharge Medication not Reconciled with Current Medication List in the Medical Record, Reason Not Otherwise Specified  <br>
	<font size=-3>(1111F:8P) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0046"} == "NA0046") { echo " -- Patient was not discharged from an inpatient facility within the last 30 days. (There are no reporting requirements in this case.  <br>
	<font size=-3>(No Reporting Requirement)</font>"; } ?>
<br><br>
Measure #0109 Osteoarthritis (OA): Function and Pain Assessmenti:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0109"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0109"} == "1006F") { echo " -- Osteoarthritis Symptoms and Functional Status Assessed (may include the use of a standardized scale or the completion of an assessment questionnaire, such as the SF-36, AAOS Hip & Knee Questionnaire)  <br>
	<font size=-3>(1006F) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0109"} == "1006F:8P") { echo " -- Osteoarthritis Symptoms and Functional Status not Assessed, Reason not Otherwise Specified  <br>
	<font size=-3>(1006F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0110 Preventive Care and Screening: Influenza Immunization:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0110"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0110"} == "G8482") { echo " -- Influenza Immunization Administered  <br>
	<font size=-3>(G8482) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0110"} == "G8482") { echo " -- Influenza Immunization previously received  <br>
	<font size=-3>(G8482) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0110"} == "G8483") { echo " -- Influenza Immunization not Administered for Documented Reasons (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons)  <br>
	<font size=-3>(G8483) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0110"} == "G8484") { echo " -- Influenza Immunization not Administered, Reason not Given  <br>
	<font size=-3>(G8484) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0111 Pneumonia Vaccination Status for Older Adults:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0111"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0111"} == "4040F") { echo " -- Pneumococcal Vaccination Administered or Previously Received  <br>
	<font size=-3>(4040F) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0111"} == "4040:8P") { echo " -- Pneumococcal Vaccination not Administered or Previously Received,Reason not Otherwise Specified  <br>
	<font size=-3>(4040F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0128 Preventive Care and Screening: Body Mass Index (BMI) Screening and Follow-Up Plan:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0128"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0128"} == "G8420") { echo " -- BMI is documented within normal parameters and no follow-up plan is required.  <br>
	<font size=-3>(G8420) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0128"} == "G8417") { echo " -- BMI is documented above normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8417) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0128"} == "G8418") { echo " -- BMI is documented below normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8418) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0128"} == "G8421") { echo " -- BMI not documented and no reason is given.  <br>
	<font size=-3>(G8421) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0128"} == "G8419") { echo " -- BMI documented outside normal parameters, no follow-up plan documented, NOS.  <br>
	<font size=-3>(G8419) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0130"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0130"} == "G8427") { echo " -- Current (or no) medications documented in the patient's medical record.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0130"} == "G8430") { echo " -- Patient is not eligible.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion) (eg, emergent or urgent situation)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0130"} == "G8428") { echo " -- Current list of medications not documented, reason not given.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0131 Pain Assessment and Follow-Up:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0131"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0131"} == "G8730") { echo " -- Pain assessment documented as positive AND a follow-up plan is documented.  <br>
	<font size=-3>(G8730)(Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0131"} == "G8731") { echo " -- Pain assessment is documented as negative, no follow-up plan required.  <br>
	<font size=-3>(G8731)(Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0131"} == "G8442") { echo " -- Patient is not eligible for a pain assessment.  <br>
	<font size=-3>(G8442) (Other Performance Exclusion) (eg, urgent, emergent situation or patient incapacitated)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0131"} == "G8939") { echo " -- Pain assessment documented as positive, no follow-up plan, patient is not eligible.  <br>
	<font size=-3>(G8939) (Other Performance Exclusion) (urgent, emergent situation or patient incapacitated)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0131"} == "G8732") { echo " -- No documentation of pain assessment, reason not given.  <br>
	<font size=-3>(G8732) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0131"} == "G8509") { echo " -- Pain assessment documented as positive, no follow-up plan is documented.  <br>
	<font size=-3>(G8509) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0154 Falls: Risk Assessment:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0154"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0154"} == "3288F 1100F") { echo " -- Falls risk assessment documented and there is documentation of two or more falls in the past year or any fall with injury in the past year  <br>
	<font size=-3>(3288F, 1100F) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0154"} == "3288F:1P 1100F") { echo " -- Medical reason(s) for not completing a risk assessment and there is documentation of two or more falls in the past year or any fall with injury in the past year  <br>
	<font size=-3>(3288F:1P, 1100F) (Medical Performance Exclusion) (eg, patient not ambulatory)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0154"} == "1101F") { echo " -- Patient screened for future fall risk; no falls or only one fall without injury in the past year.  <br>
	<font size=-3>(1101F) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0154"} == "1101F:8P") { echo " -- Patient not eligible; fall status not documented.  <br>
	<font size=-3>(1101F:8P) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0154"} == "3288F:8P 1100F") { echo " -- Falls risk assessment not completed, AND there is documentation of two or more falls in the past year or any fall with injury in the past year.  <br>
	<font size=-3>(3288F:8P, 1100F) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0155 Falls: Plan of Care:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0155"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0155"} == "0518F") { echo " -- Falls plan of care documented.  <br>
	<font size=-3>(0518F) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0155"} == "0518F:1P") { echo " -- Documentation of medical reason(s) for no plan of care for falls.  <br>
	<font size=-3>(0518F:1P) (Medical Performance Exclusion) (eg, patient is not ambulatory)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0155"} == "0518F:8P") { echo " -- Plan of care not documented, reason NOS.  <br>
	<font size=-3>(0518F:8P) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0155"} == "NA155") { echo " -- Measure does not apply to this patient.  <br>
	<font size=-3>(NA155) (Does not apply to this patient)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0226"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use.  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, NOS.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0238 Use of High-Risk Medications in the Elderly:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0238"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0238"} == "G9365") { echo " -- One high-risk medication ordered.  <br>
	<font size=-3>(G9365) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0238"} == "G9365 G9367") { echo " -- Two or more high-risk medications ordered  <br>
	<font size=-3>(G9365 G9367) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0238"} == "G9366 G9368") { echo " -- No orders for high risk medications. Does not apply to this patient.  <br>
	<font size=-3>(G9366 G9368) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>
Measure #0317 Preventive Care and Screening: Screening for High Blood Pressure and Follow-Up Documented:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0317"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0317"} == "G8783") { echo " -- Normal blood pressure reading documented, follow-up not required.  <br>
	<font size=-3>(G8783) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0317"} == "G8950") { echo " -- Pre-Hypertensive or Hypertensive blood pressure reading documented, AND the indicated follow-up is documented.  <br>
	<font size=-3>(G8950) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0317"} == "G8784") { echo " -- Patient not eligible.  <br>
	<font size=-3>(G8784) (Other Performance Exclusion) (eg, (active diagnosis of hypertension, patient refuses, urgent or emergent situation)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0317"} == "G8785") { echo " -- Blood pressure reading not documented, reason not specified.  <br>
	<font size=-3>(G8785) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0317"} == "G8952") { echo " -- Pre-Hypertensive or Hypertensive blood pressure reading documented, indicated follow-up not documented, reason not specified.  <br>
	<font size=-3>(G8952) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0431 Preventive Care and Screening: Unhealthy Alcohol Use: Screening & Brief Counseling:
<li>  <?php echo stripslashes($obj{"SCRHIO_Orthopedics0431"});?>  


<?php if ($obj{"SCRHIO_Orthopedics0431"} == "G9621") { echo " -- Patient identified as an unhealthy alcohol user when screened for unhealthy alcohol use using a systematic screening method and received brief counseling.  <br>
	<font size=-3>(G9621) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0431"} == "G9622") { echo " -- Patient not identified as an unhealthy alcohol user when screened for unhealthy alcohol use using a systematic screening method.  <br>
	<font size=-3>(G9622) (Performance Met)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0431"} == "G9623") { echo " -- Documentation of medical reason(s) for not screening for unhealthy alcohol use (e.g., limited life expectancy, other medical reasons).  <br>
	<font size=-3>(G9623) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"SCRHIO_Orthopedics0431"} == "G9624") { echo " -- Patient not screened for unhealthy alcohol screening using a systematic screening method OR patient did not receive brief counseling, reason not given.  <br>
	<font size=-3>(G9624) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
