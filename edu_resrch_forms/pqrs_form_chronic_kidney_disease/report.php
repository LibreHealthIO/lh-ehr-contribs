<?php
/**
 * PQRS ?Chronic Kidney Disease Group Direct Data Entry
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
function pqrs_form_?chronic_kidney_disease_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_?chronic_kidney_disease", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>?Chronic Kidney Disease Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0047 Care Plan:
<li>  <?php echo stripslashes($obj{"?Chronic_Kidney_Disease0047"});?>  


<?php if ($obj{"?Chronic_Kidney_Disease0047"} == "1123F") { echo " -- Advanced care planning discussed and surrogate decision maker documented.  <br>
	<font size=-3>(1123F) (Performance Met)</font>"; } ?>

<?php if ($obj{"?Chronic_Kidney_Disease0047"} == "1124F") { echo " -- Advanced care planning discussed and no surrogate decision maker documented.  <br>
	<font size=-3>(1124F) (Performance Met) (patient did not wish or was not able to name a surrogate decision maker or provide an advance care plan)</font>"; } ?>

<?php if ($obj{"?Chronic_Kidney_Disease0047"} == "1123F:8P") { echo " -- Advance care planning not documented, reason NOS.  <br>
	<font size=-3>(1123F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0110 Preventive Care and Screening: Influenza Immunization:
<li>  <?php echo stripslashes($obj{"?Chronic_Kidney_Disease0110"});?>  


<?php if ($obj{"?Chronic_Kidney_Disease0110"} == "G8482") { echo " -- Influenza immunization administered or previously received.  <br>
	<font size=-3>(G8482) (Performance Met)</font>"; } ?>

<?php if ($obj{"?Chronic_Kidney_Disease0110"} == "G8483") { echo " -- Influenza immunization not administered, reason documented.  <br>
	<font size=-3>(G8483) (Performance Met)(e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons).</font>"; } ?>

<?php if ($obj{"?Chronic_Kidney_Disease0110"} == "G8484") { echo " -- Influenza immunization was not administered, reason not given.  <br>
	<font size=-3>(G8484) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0121 Adult Kidney Disease: Laboratory Testing:
<li>  <?php echo stripslashes($obj{"?Chronic_Kidney_Disease0121"});?>  


<?php if ($obj{"?Chronic_Kidney_Disease0121"} == "G8725") { echo " -- Patient had a fasting lipid profile performed at least once within a 12-month period.  <br>
	<font size=-3>(G8725) (Peformance Met)</font>"; } ?>

<?php if ($obj{"?Chronic_Kidney_Disease0121"} == "G8726") { echo " -- Clinician has documented reason for not performing fasting lipid profile.  <br>
	<font size=-3>(G8726)(Other Performance Exclusion) (eg, patient declined, other patient reasons)</font>"; } ?>

<?php if ($obj{"?Chronic_Kidney_Disease0121"} == "G8728") { echo " -- Fasting lipid profile not performaned, reason NOS.  <br>
	<font size=-3>(G8728) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0122 Adult Kidney Disease: Blood Pressure Management:
<li>  <?php echo stripslashes($obj{"?Chronic_Kidney_Disease0122"});?>  


<?php if ($obj{"?Chronic_Kidney_Disease0122"} == "G8476") { echo " -- Systolic measurement of &lt; 140 mmHg and a diastolic measurement of &lt; 90 mmHg.  <br>
	<font size=-3>(G8476) (Performance Met)</font>"; } ?>

<?php if ($obj{"?Chronic_Kidney_Disease0122"} == "G8477 0513F") { echo " -- Systolic measurement of &ge; 140 mmHg and/or a diastolic measurement of &ge; 90 mmHg and plan of care documented.  <br>
	<font size=-3>(G8477, 0513F)(Performance Met)</font>"; } ?>

<?php if ($obj{"?Chronic_Kidney_Disease0122"} == "G8478") { echo " -- Blood pressure measurement not performed or documented, reason NOS.  <br>
	<font size=-3>(G8478) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"?Chronic_Kidney_Disease0122"} == "G8477 0513F:8P") { echo " -- Systolic measurement of &ge; 140 mmHg and/or a diastolic measurement of &ge; 90 mmHg AND plan of care, reason NOS.  <br>
	<font size=-3>(G8477, 0513F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"?Chronic_Kidney_Disease0130"});?>  


<?php if ($obj{"?Chronic_Kidney_Disease0130"} == "G8427") { echo " -- Current (or no) medications documented in the patient's medical record.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"?Chronic_Kidney_Disease0130"} == "G8430") { echo " -- Patient is not eligible.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion, emergent or urgent situation)</font>"; } ?>

<?php if ($obj{"?Chronic_Kidney_Disease0130"} == "G8428") { echo " -- Current list of medications not documented, NOS.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"?Chronic_Kidney_Disease0226"});?>  


<?php if ($obj{"?Chronic_Kidney_Disease0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"?Chronic_Kidney_Disease0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"?Chronic_Kidney_Disease0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use.  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)</font>"; } ?>

<?php if ($obj{"?Chronic_Kidney_Disease0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, NOS.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
