<?php
/**
 * PQRS Heart Failure Group Direct Data Entry
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
function pqrs_form_heart_failure_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_heart_failure", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Heart Failure Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0005 Heart Failure (HF): Angiotensin-Converting Enzyme (ACE) Inhibitor or Angiotensin Receptor Blocker (ARB) Therapy for Left Ventricular Systolic Dysfunction (LVSD):
<li>  <?php echo stripslashes($obj{"Heart_Failure0005"});?>  


<?php if ($obj{"Heart_Failure0005"} == "4010F 3021F") { echo " -- ACE Inhibitor or ARB therapy prescribed or currently being taken, and LVEF less than 40% or documentation of moderately or severely depressed left ventricular systolic function.  <br>
	<font size=-3>(4010F, 3021F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Heart_Failure0005"} == "4010F:1P") { echo " -- Documentation of medical reason(s) for not prescribing ACE inhibitor or ARB therapy (eg, hypotensive patients who are at immediate risk of cardiogenic shock, hospitalized patients who have experienced marked azotemia, allergy, intolerance, other medical reasons).  <br>
	<font size=-3>(4010F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Heart_Failure0005"} == "4010F:2P") { echo " -- Documentation of patient reason(s) for not prescribing ACE inhibitor or ARB therapy (eg, patient declined, other patient reasons).  <br>
	<font size=-3>(4010F:2P) (Patient Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Heart_Failure0005"} == "4010F:3P 3021F") { echo " -- Documentation of system reason(s) for not prescribing ACE inhibitor or ARB therapy (eg, other system reasons),and LVEF less than 40% or documentation of moderately or severely depressed left ventricular systolic function.  <br>
	<font size=-3>(4010F:3P, 3021F) (System Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Heart_Failure0005"} == "3022F") { echo " -- LVEF greater than or equal to 40% or documentation as normal or mildly depressed left ventricular systolic function.  <br>
	<font size=-3>(3022F)(Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Heart_Failure0005"} == "3021F:8P") { echo " -- LVEF was not performed or documented.  <br>
	<font size=-3>(3021F:8P) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Heart_Failure0005"} == "4010F:8P 3021F") { echo " -- ACE inhibitor or ARB therapy was not prescribed, reason NOS, and LVEF less than 40% or documentation of moderately or severely depressed left ventricular systolic function.  <br>
	<font size=-3>(4010F:8P, 3021F) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0008 Heart Failure (HF): Beta-Blocker Therapy for Left Ventricular Systolic Dysfunction (LVSD):
<li>  <?php echo stripslashes($obj{"Heart_Failure0008"});?>  


<?php if ($obj{"Heart_Failure0008"} == "G8450 G8923") { echo " -- Beta-blocker therapy prescribed, and LVEF &lt; 40% or documentation of moderately or severely depressed left ventricular systolic function.  <br>
	<font size=-3>(G8450, G8923) (Performance Met)</font>"; } ?>

<?php if ($obj{"Heart_Failure0008"} == "G8451 G8923") { echo " -- Beta-Blocker Therapy for LVEF &lt; 40% not prescribed for reasons documented by the clinician (e.g., low blood pressure, fluid overload, asthma, patients recently treated with an intravenous positive inotropic agent, allergy, intolerance, other medical reasons, patient declined, or other reasons attributable to the healthcare system), and LVEF &lt; 40% or documentation of moderately or severely depressed left ventricular systolic function.  <br>
	<font size=-3>(G8451, G8923) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Heart_Failure0008"} == "G8395") { echo " -- LVEF = 40% or documentation as normal or mildly depressed left ventricular systolic function.  <br>
	<font size=-3>(G8395)(Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Heart_Failure0008"} == "G8396") { echo " -- LVEF not performed or documented.  <br>
	<font size=-3>(G8396)(Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Heart_Failure0008"} == "G8452 G8923") { echo " -- Beta-blocker therapy not prescribed, and LVEF &lt; 40% or documentation of moderately or severely depressed left ventricular systolic function.  <br>
	<font size=-3>(G8452, G8923) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0047 Care Plan:
<li>  <?php echo stripslashes($obj{"Heart_Failure0047"});?>  


<?php if ($obj{"Heart_Failure0047"} == "1123F") { echo " -- Advanced care planning discussed and documented.  <br>
	<font size=-3>(1123F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Heart_Failure0047"} == "1124F") { echo " -- Advanced care planning discussed and documented; patient did not wish or was not able to name a surrogate decision marker or provide an advance care plan, or patient’s cultural and/or spiritual beliefs preclude a discussion of advance care planning.  <br>
	<font size=-3>(1124F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Heart_Failure0047"} == "1123F:8P") { echo " -- Advance care planning not documented, reason not otherwise specified.  <br>
	<font size=-3>(1123F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0110 Preventive Care and Screening: Influenza Immunization:
<li>  <?php echo stripslashes($obj{"Heart_Failure0110"});?>  


<?php if ($obj{"Heart_Failure0110"} == "G8482") { echo " -- Influenza immunization administered or previously received.  <br>
	<font size=-3>(G8482) (Performance Met)</font>"; } ?>

<?php if ($obj{"Heart_Failure0110"} == "G8483") { echo " -- Influenza immunization not administered, reason documented. (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons).  <br>
	<font size=-3>(G8483) (Performance Met)</font>"; } ?>

<?php if ($obj{"Heart_Failure0110"} == "G8484") { echo " -- Influenza immunization was not administered, reason not given.  <br>
	<font size=-3>(G8484) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0128 Preventive Care and Screening: Body Mass Index (BMI) Screening and Follow-Up Plan:
<li>  <?php echo stripslashes($obj{"Heart_Failure0128"});?>  


<?php if ($obj{"Heart_Failure0128"} == "G8420") { echo " -- BMI is documented within normal parameters and no follow-up plan is required.  <br>
	<font size=-3>(G8420) (Performance Met)</font>"; } ?>

<?php if ($obj{"Heart_Failure0128"} == "G8417") { echo " -- BMI is documented above normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8417) (Performance Met)</font>"; } ?>

<?php if ($obj{"Heart_Failure0128"} == "G8418") { echo " -- BMI is documented below normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8418) (Performance Met)</font>"; } ?>

<?php if ($obj{"Heart_Failure0128"} == "G8421") { echo " -- BMI not documented and no reason is given.  <br>
	<font size=-3>(G8421) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Heart_Failure0128"} == "G8419") { echo " -- BMI documented outside normal parameters, no follow-up plan documented, no reason given.  <br>
	<font size=-3>(G8419) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"Heart_Failure0130"});?>  


<?php if ($obj{"Heart_Failure0130"} == "G8427") { echo " -- Current medications documented.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"Heart_Failure0130"} == "G8430") { echo " -- Eligible professional attests patient is not eligible for a current list of medications being obtained, updated, or reviewed by the eligible professional.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Heart_Failure0130"} == "G8428") { echo " -- Current list of medications not documented as obtained, updated, or reviewed by the eligible professional, reason not given.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Heart_Failure0226"});?>  


<?php if ($obj{"Heart_Failure0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Heart_Failure0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Heart_Failure0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons).  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Heart_Failure0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
