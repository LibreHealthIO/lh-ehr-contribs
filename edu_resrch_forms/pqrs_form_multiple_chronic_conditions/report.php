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
include_once($GLOBALS["srcdir"]."/api.inc");
function pqrs_form_multiple_chronic_conditions_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_multiple_chronic_conditions", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Multiple Chronic Conditions Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0047 Care Plan:
<li>  <?php echo stripslashes($obj{"Multiple_Chronic_Conditions0047"});?>  


<?php if ($obj{"Multiple_Chronic_Conditions0047"} == "1123F") { echo " -- Advanced care planning discussed and surrogate decision maker documented.  <br>
	<font size=-3>(1123F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0047"} == "1124F") { echo " -- Advanced care planning discussed and documented and no surrogate decision maker documented.  <br>
	<font size=-3>(1124F) (Performance Met) (eg, patient did not wish or was not able to name a surrogate decision marker or provide an advance care plan, or patient’s cultural and/or spiritual beliefs preclude a discussion of advance care planning.)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0047"} == "1123F:8P") { echo " -- Advance care planning not documented, reason NOS.  <br>
	<font size=-3>(1123F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0110 Preventive Care and Screening: Influenza Immunization:
<li>  <?php echo stripslashes($obj{"Multiple_Chronic_Conditions0110"});?>  


<?php if ($obj{"Multiple_Chronic_Conditions0110"} == "G8482") { echo " -- Influenza immunization administered or previously received.  <br>
	<font size=-3>(G8482) (Performance Met)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0110"} == "G8483") { echo " -- Influenza immunization not administered, reason documented.  <br>
	<font size=-3>(G8483) (Performance Met) (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0110"} == "G8484") { echo " -- Influenza immunization was not administered, reason not given.  <br>
	<font size=-3>(G8484) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0128 Preventive Care and Screening: Body Mass Index (BMI) Screening and Follow-Up Plan:
<li>  <?php echo stripslashes($obj{"Multiple_Chronic_Conditions0128"});?>  


<?php if ($obj{"Multiple_Chronic_Conditions0128"} == "G8420") { echo " -- BMI is documented within normal parameters and no follow-up plan is required.  <br>
	<font size=-3>(G8420) (Performance Met)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0128"} == "G8417") { echo " -- BMI is documented above normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8417) (Performance Met)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0128"} == "G8418") { echo " -- BMI is documented below normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8418) (Performance Met)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0128"} == "G8421") { echo " -- BMI not documented and no reason is given.  <br>
	<font size=-3>(G8421) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0128"} == "G8419") { echo " -- BMI documented outside normal parameters, no follow-up plan documented, NOS.  <br>
	<font size=-3>(G8419) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"Multiple_Chronic_Conditions0130"});?>  


<?php if ($obj{"Multiple_Chronic_Conditions0130"} == "G8427") { echo " -- Current (or no) medications documented in the patient's medical record.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0130"} == "G8430") { echo " -- Patient is not eligible.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion( (emergent or urgent situation)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0130"} == "G8428") { echo " -- Current list of medications not documented, NOS.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0131 Pain Assessment and Follow-Up:
<li>  <?php echo stripslashes($obj{"Multiple_Chronic_Conditions0131"});?>  


<?php if ($obj{"Multiple_Chronic_Conditions0131"} == "G8730") { echo " -- Pain assessment documented as positive AND a follow-up plan is documented.  <br>
	<font size=-3>(G8730)(Performance Met)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0131"} == "G8731") { echo " -- Pain assessment is documented as negative, no follow-up plan required.  <br>
	<font size=-3>(G8731)(Performance Met)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0131"} == "G8442") { echo " -- Patient is not eligible for a pain assessment.  <br>
	<font size=-3>(G8442) (Other Performance Exclusion)(urgent, emergent situation or patient incapacitated)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0131"} == "G8939") { echo " -- Pain assessment documented as positive, no follow-up plan, patient is not eligible.  <br>
	<font size=-3>(G8939) (Other Performance Exclusion) (urgent, emergent situation or patient incapacitated)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0131"} == "G8732") { echo " -- No documentation of pain assessment, reason not given.  <br>
	<font size=-3>(G8732) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0131"} == "G8509") { echo " -- Pain assessment documented as positive, no follow-up plan, NOS.  <br>
	<font size=-3>(G8509) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0134 Preventive Care and Screening: Screening for Clinical Depression and Follow-Up Plan:
<li>  <?php echo stripslashes($obj{"Multiple_Chronic_Conditions0134"});?>  


<?php if ($obj{"Multiple_Chronic_Conditions0134"} == "G8431") { echo " -- Screening for clinical depression is documented as being positive AND a follow-up plan is documented.  <br>
	<font size=-3>(G8431) (Performance Met)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0134"} == "G8510") { echo " -- Screening for clinical depression is documented as negative, a follow-up plan is not required.  <br>
	<font size=-3>(G8510) (Performance Met)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0134"} == "G8433") { echo " -- Screening for clinical depression not documented, patient is not eligible.  <br>
	<font size=-3>(G8433) (Other Performance Exclusion) (eg, urgent or emergent situation, actived diagnosis of depression, incapacitated or patient refuses)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0134"} == "G8940") { echo " -- Screening for clinical depression documented as positive, a follow-up plan not documented, patient is not eligible.  <br>
	<font size=-3>(G8940) (Other Performance Exclusion) (eg, urgent or emergent situation, actived diagnosis of depression, incapacitated or patient refuses)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0134"} == "G8432") { echo " -- Clinical depression screening not documented, reason NOS.  <br>
	<font size=-3>(G8432) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0134"} == "G8511") { echo " -- Screening for clinical depression documented as positive, follow-up plan not documented, reason NOS.  <br>
	<font size=-3>(G8511) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0154 Falls: Risk Assessment:
<li>  <?php echo stripslashes($obj{"Multiple_Chronic_Conditions0154"});?>  


<?php if ($obj{"Multiple_Chronic_Conditions0154"} == "3288F 1100F") { echo " -- Falls risk assessment documented.  <br>
	<font size=-3>(3288F, 1100F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0154"} == "3288F:1P 1100F") { echo " -- Documentation of medical reason(s) for not completing a risk assessment for falls.  <br>
	<font size=-3>(3288F:1P, 1100F) (Medical Performance Exclusion) (ie, patient not ambulatory)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0154"} == "1101F") { echo " -- Patient screened for future fall risk; documentation of no falls in the past year or only one fall without injury in the past year.  <br>
	<font size=-3>(1101F) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0154"} == "1101F:8P") { echo " -- Patient not eligible; fall status not documented.  <br>
	<font size=-3>(1101F:8P) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0154"} == "3288F:8P 1100F") { echo " -- Falls risk assessment not completed, reason NOS.  <br>
	<font size=-3>(3288F:8P, 1100F) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0155 Falls: Plan of Care:
<li>  <?php echo stripslashes($obj{"Multiple_Chronic_Conditions0155"});?>  


<?php if ($obj{"Multiple_Chronic_Conditions0155"} == "0518F") { echo " -- Falls plan of care documented.  <br>
	<font size=-3>(0518F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0155"} == "0518F:1P") { echo " -- Documentation of medical reason(s) for no plan of care for falls  <br>
	<font size=-3>(0518F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0155"} == "0518F:8P") { echo " -- Plan of care not documented, reason not otherwise specified.  <br>
	<font size=-3>(0518F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0238 Use of High-Risk Medications in the Elderly:
<li>  <?php echo stripslashes($obj{"Multiple_Chronic_Conditions0238"});?>  


<?php if ($obj{"Multiple_Chronic_Conditions0238"} == "G9365") { echo " -- One high-risk medication ordered.  <br>
	<font size=-3>(G9365) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Multiple_Chronic_Conditions0238"} == "G9366") { echo " -- One high-risk medication not ordered.  <br>
	<font size=-3>(G9366) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
