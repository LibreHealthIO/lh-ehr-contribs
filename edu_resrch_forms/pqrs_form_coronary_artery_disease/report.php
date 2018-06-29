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
include_once($GLOBALS["srcdir"]."/api.inc");
function pqrs_form_coronary_artery_disease_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_coronary_artery_disease", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Coronary Artery Disease Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0006 Coronary Artery Disease (CAD): Antiplatelet Therapy:
<li>  <?php echo stripslashes($obj{"Coronary_Artery_Disease0006"});?>  


<?php if ($obj{"Coronary_Artery_Disease0006"} == "4086F") { echo " -- Aspirin or clopidogrel prescribed.  <br>
	<font size=-3>(4086F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0006"} == "4086F:1P") { echo " -- Aspirin or clopidogrel not prescribed, medical reason.  <br>
	<font size=-3>(4086F:1P) (Medical Performance Exclusion) (eg, allergy, intolerance, receiving other thienopyridine therapy, receiving warfarin therapy, bleeding coagulation disorders, other medical reasons)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0006"} == "4086F:2P") { echo " -- Aspirin or clopidogrel not prescribed, patient reason.  <br>
	<font size=-3>(4086F:2P) (Patient Performance Exclusion) (eg, patient declined, other patient reasons)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0006"} == "4086F:3P") { echo " -- Aspirin or clopidogrel not prescribed, syste, reason.  <br>
	<font size=-3>(4086F:3P) (System Performance Exclusion) (eg, lack of drug availability, other reasons attributable to the health care system)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0006"} == "4086F:8P") { echo " -- Aspirin or clopidogrel not prescribed, reason NOS.  <br>
	<font size=-3>(4086F:8P) (System Performance Exclusion)</font>"; } ?>
<br><br>
Measure #0007 Coronary Artery Disease (CAD): Beta-Blocker Therapy – Prior Myocardial Infarction (MI) or Left Ventricular Systolic Dysfunction (LVEF &lt; 40%):
<li>  <?php echo stripslashes($obj{"Coronary_Artery_Disease0007"});?>  


<?php if ($obj{"Coronary_Artery_Disease0007"} == "G9189") { echo " -- Beta-blocker therapy prescribed or currently being taken.  <br>
	<font size=-3>(G9189) (Performance Met)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0007"} == "G9190") { echo " -- Beta-blocker not therapy prescribed, medical reason.  <br>
	<font size=-3>(G9190) (Medical Performance Exclusion) (eg, allergy, intolerance, other medical reasons)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0007"} == "G9191") { echo " -- Beta-blocker therapy not prescribed, patient reason.  <br>
	<font size=-3>(G9191) (Patient Performance Exclusion) (eg, patient declined, other patient reasons)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0007"} == "G9192") { echo " -- Beta-blocker therapy not prescribed, system reason.  <br>
	<font size=-3>(G9192) (System Performance Exclusion) (eg, other reasons attributable to the health care system)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0007"} == "G9188") { echo " -- Beta-blocker therapy not prescribed, reason NOS.  <br>
	<font size=-3>(G9188) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0128 Preventive Care and Screening: Body Mass Index (BMI) Screening and Follow-Up Plan:
<li>  <?php echo stripslashes($obj{"Coronary_Artery_Disease0128"});?>  


<?php if ($obj{"Coronary_Artery_Disease0128"} == "G8420") { echo " -- BMI is documented within normal parameters and no follow-up plan is required.  <br>
	<font size=-3>(G8420) (Performance Met)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0128"} == "G8417") { echo " -- BMI is documented above normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8417) (Performance Met)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0128"} == "G8418") { echo " -- BMI is documented below normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8418) (Performance Met)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0128"} == "G8421") { echo " -- BMI not documented and no reason is given.  <br>
	<font size=-3>(G8421) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0128"} == "G8419") { echo " -- BMI documented outside normal parameters, no follow-up plan documented, NOS.  <br>
	<font size=-3>(G8419) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"Coronary_Artery_Disease0130"});?>  


<?php if ($obj{"Coronary_Artery_Disease0130"} == "G8427") { echo " -- Current (or no) medications documented in the patient's medical record.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0130"} == "G8430") { echo " -- Patient is not eligible.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion( (emergent or urgent situation)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0130"} == "G8428") { echo " -- Current list of medications not documented, NOS.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Coronary_Artery_Disease0226"});?>  


<?php if ($obj{"Coronary_Artery_Disease0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use.  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0226"} == "4004F:8PX") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, NOS.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0242 Coronary Artery Disease (CAD): Symptom Management:
<li>  <?php echo stripslashes($obj{"Coronary_Artery_Disease0242"});?>  


<?php if ($obj{"Coronary_Artery_Disease0242"} == "1010F 0557F 1011F") { echo " -- Severity of angina assessed and plan of care documented.  <br>
	<font size=-3>(1010F, 0557F, 1011F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0242"} == "1010F 1012F") { echo " -- Severity of angina assessed by level of activity and angina absent.  <br>
	<font size=-3>(1010F, 1012F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0242"} == "0557F:1P") { echo " -- Medical reason(s) for not providing plan of care to achieve control of anginal symptoms.  <br>
	<font size=-3>(0557F:1P) (Medical Performance Exclusion) (eg, allergy, intolerance, other medical reasons)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0242"} == "0557F:2P") { echo " -- Patient reason(s) for not providing plan of care to achieve control of anginal symptoms.  <br>
	<font size=-3>(0557F:2P) (Patient Performance Exclusion)(eg, patient declined, other patient reasons)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0242"} == "0557F:3P 1010F 1011F") { echo " -- System reason(s) for not providing plan of care to achieve control of anginal symptoms.  <br>
	<font size=-3>(0557F:3P, 1010F, 1011F) (System Performance Exclusion)(eg, financial reasons, other reasons attributable to the health care system)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0242"} == "0557F:8P 1010F 1011F") { echo " -- Plan of care to achieve control of angina symptoms was not performed, reason NOS.  <br>
	<font size=-3>(0557F:8P, 1010F 1011F) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Disease0242"} == "1010F:8P") { echo " -- Severity of angina not assessed, reason NOS.  <br>
	<font size=-3>(1010F:8P) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
