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
include_once($GLOBALS["srcdir"]."/api.inc");
function pqrs_form_carrollton_orthopedics_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_carrollton_orthopedics", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Carrollton Orthopedics Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0021 Perioperative Care: Selection of Prophylactic Antibiotic – First OR Second Generation Cephalosporin:
<li>  <?php echo stripslashes($obj{"Carrollton_Orthopedics0021"});?>  


<?php if ($obj{"Carrollton_Orthopedics0021"} == "G9197") { echo " -- Documentation of Order for First or Second Generation Cephalosporin for Antimicrobial Prophylaxis (written order, verbal order, or standing order/protocol)  <br>
	<font size=-3>(G9197) (Performance Met) Note: G9197 is provided for antibiotic ordered or antibiotic given. Report G9197 if a first or second generation cephalosporin was given for antimicrobial prophylaxis.</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0021"} == "G9196") { echo " -- Documentation of medical reason(s) for not ordering a first OR second generation cephalosporin for antimicrobial prophylaxis (e.g., patients enrolled in clinical trials, patients with documented infection prior to surgical procedure of interest, patients who were receiving antibiotics more than 24 hours prior to surgery [except colon surgery patients taking oral prophylactic antibiotics], patients who were receiving antibiotics within 24 hours prior to arrival [except colon surgery patients taking oral prophylactic antibiotics], other medical reason(s))  <br>
	<font size=-3>(G9196) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0021"} == "G9198") { echo " -- Order for first OR second generation cephalosporin for antimicrobial prophylaxis was not documented, reason not given.  <br>
	<font size=-3>(G9198) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #023 Perioperative Care: Venous Thromboembolism (VTE) Prophylaxis (When Indicated in ALL Patients) Percentage of surgical patients aged 18 years and older undergoing procedures for which venous thromboembolism (VTE) prophylaxis is indicated in all patients, who had an order for Low Molecular Weight Heparin (LMWH), LowDose Unfractionated Heparin (LDUH), adjusted-dose warfarin, fondaparinux or mechanical prophylaxis to be given within 24 hours prior to incision time or within 24 hours after surgery end time.:
<li>  <?php echo stripslashes($obj{"Carrollton_Orthopedics023"});?>  


<?php if ($obj{"Carrollton_Orthopedics023"} == "4044F") { echo " -- Documentation that an order was given for venous thromboembolism (VTE) prophylaxis to be given within 24 hours prior to incision time or 24 hours after surgery end time  <br>
	<font size=-3>(4044F) (Performance Met:)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics023"} == "4044F:1P") { echo " -- VTE Prophylaxis not Ordered for Medical Reasons  <br>
	<font size=-3>(4044F:1P) (Medical Performance Exclusion:)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics023"} == "4044F:8P") { echo " -- VTE Prophylaxis not Ordered, Reason not Otherwise Specified  <br>
	<font size=-3>(4044F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0039 Screening for Osteoporosis for Women Aged 65-85 Years of Age:
<li>  <?php echo stripslashes($obj{"Carrollton_Orthopedics0039"});?>  


<?php if ($obj{"Carrollton_Orthopedics0039"} == "G8399") { echo " -- Patient record includes documented results of a central Dual-energy X-Ray Absorptiometry (DXA).  <br>
	<font size=-3>(G8399) (Performance Met)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0039"} == "G8401") { echo " -- Clinician documented that patient was not an eligible candidate for screening.  <br>
	<font size=-3>(G8401) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0039"} == "G8400") { echo " -- Patient with central DXA results not documented, reason not given.  <br>
	<font size=-3>(G8400) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #046 Medication Reconciliation Post-Discharge:
<li>  <?php echo stripslashes($obj{"Carrollton_Orthopedics046"});?>  


<?php if ($obj{"Carrollton_Orthopedics046"} == "1111F") { echo " -- Documentation of Reconciliation of Discharge Medication with Current Medication List in the Medical Record  <br>
	<font size=-3>(1111F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics046"} == "1111F:8P") { echo " -- Discharge Medication not Reconciled with Current Medication List in the Medical Record, Reason Not Otherwise Specified  <br>
	<font size=-3>(1111F:8P) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics046"} == "NA0046") { echo " -- Patient was not discharged from an inpatient facility within the last 30 days. (There are no reporting requirements in this case.  <br>
	<font size=-3>(No Reporting Requirement)</font>"; } ?>
<br><br>
Measure #0109 Osteoarthritis (OA): Function and Pain Assessmenti:
<li>  <?php echo stripslashes($obj{"Carrollton_Orthopedics0109"});?>  


<?php if ($obj{"Carrollton_Orthopedics0109"} == "1006F") { echo " -- Osteoarthritis Symptoms and Functional Status Assessed (may include the use of a standardized scale or the completion of an assessment questionnaire, such as the SF-36, AAOS Hip & Knee Questionnaire)  <br>
	<font size=-3>(1006F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0109"} == "1006F:8P") { echo " -- Osteoarthritis Symptoms and Functional Status not Assessed, Reason not Otherwise Specified  <br>
	<font size=-3>(1006F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0128 Preventive Care and Screening: Body Mass Index (BMI) Screening and Follow-Up Plan:
<li>  <?php echo stripslashes($obj{"Carrollton_Orthopedics0128"});?>  


<?php if ($obj{"Carrollton_Orthopedics0128"} == "G8420") { echo " -- BMI is documented within normal parameters and no follow-up plan is required.  <br>
	<font size=-3>(G8420) (Performance Met)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0128"} == "G8417") { echo " -- BMI is documented above normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8417) (Performance Met)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0128"} == "G8418") { echo " -- BMI is documented below normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8418) (Performance Met)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0128"} == "G8421") { echo " -- BMI not documented and no reason is given.  <br>
	<font size=-3>(G8421) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0128"} == "G8419") { echo " -- BMI documented outside normal parameters, no follow-up plan documented, NOS.  <br>
	<font size=-3>(G8419) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Carrollton_Orthopedics0226"});?>  


<?php if ($obj{"Carrollton_Orthopedics0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use.  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, NOS.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0238 Use of High-Risk Medications in the Elderly:
<li>  <?php echo stripslashes($obj{"Carrollton_Orthopedics0238"});?>  


<?php if ($obj{"Carrollton_Orthopedics0238"} == "G9365") { echo " -- One high-risk medication ordered.  <br>
	<font size=-3>(G9365) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0238"} == "G9365 G9367") { echo " -- Two or more high-risk medications ordered  <br>
	<font size=-3>(G9365 G9367) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0238"} == "G9366 G9368") { echo " -- No orders for high risk medications. Does not apply to this patient.  <br>
	<font size=-3>(G9366 G9368) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>
Measure #0431 Preventive Care and Screening: Unhealthy Alcohol Use: Screening & Brief Counseling:
<li>  <?php echo stripslashes($obj{"Carrollton_Orthopedics0431"});?>  


<?php if ($obj{"Carrollton_Orthopedics0431"} == "G9621") { echo " -- Patient identified as an unhealthy alcohol user when screened for unhealthy alcohol use using a systematic screening method and received brief counseling.  <br>
	<font size=-3>(G9621) (Performance Met)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0431"} == "G9622") { echo " -- Patient not identified as an unhealthy alcohol user when screened for unhealthy alcohol use using a systematic screening method.  <br>
	<font size=-3>(G9622) (Performance Met)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0431"} == "G9623") { echo " -- Documentation of medical reason(s) for not screening for unhealthy alcohol use (e.g., limited life expectancy, other medical reasons).  <br>
	<font size=-3>(G9623) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Carrollton_Orthopedics0431"} == "G9624") { echo " -- Patient not screened for unhealthy alcohol screening using a systematic screening method OR patient did not receive brief counseling, reason not given.  <br>
	<font size=-3>(G9624) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
