<?php
/**
 * PQRS General Surgery Group Direct Data Entry
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
function pqrs_form_general_surgery_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_general_surgery", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>General Surgery Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"General_Surgery0130"});?>  


<?php if ($obj{"General_Surgery0130"} == "G8427") { echo " -- Current medications documented.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"General_Surgery0130"} == "G8430") { echo " -- Eligible professional attests the patient is not eligible for a current list of medications being obtained, updated, or reviewed by the eligible professional.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"General_Surgery0130"} == "G8428") { echo " -- Current list of medications not documented as obtained, updated, or reviewed by the eligible professional, reason not given.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"General_Surgery0226"});?>  


<?php if ($obj{"General_Surgery0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"General_Surgery0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"General_Surgery0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons).  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"General_Surgery0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0354 Anastomotic Leak Intervention:
<li>  <?php echo stripslashes($obj{"General_Surgery0354"});?>  


<?php if ($obj{"General_Surgery0354"} == "G9306") { echo " -- Intervention for presence of leak of endoluminal contents through an anastomosis required.  <br>
	<font size=-3>(G9306) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"General_Surgery0354"} == "G9305") { echo " -- Intervention for presence of leak of endoluminal contents through an anastomosis not required.  <br>
	<font size=-3>(G9305) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>
Measure #0355 Unplanned Reoperation within the 30 Day Postoperative Period:
<li>  <?php echo stripslashes($obj{"General_Surgery0355"});?>  


<?php if ($obj{"General_Surgery0355"} == "G9308") { echo " -- Unplanned return to the operating room for a surgical procedure, for any reason, within 30 days of the principal operative procedure.  <br>
	<font size=-3>(G9308) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"General_Surgery0355"} == "G9307") { echo " -- No return to the operating room for a surgical procedure, for any reason, within 30 days of the principal operative procedure.  <br>
	<font size=-3>(G9307)(Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>
Measure #0356 Unplanned Hospital Readmission within 30 Days of Principal Procedure:
<li>  <?php echo stripslashes($obj{"General_Surgery0356"});?>  


<?php if ($obj{"General_Surgery0356"} == "G9310") { echo " -- Unplanned hospital readmission within 30 days of principal procedure.  <br>
	<font size=-3>(G9310) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"General_Surgery0356"} == "G9309") { echo " -- No unplanned hospital readmission within 30 days of principal procedure.  <br>
	<font size=-3>(G9309) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>
Measure #0357 Surgical Site Infection (SSI):
<li>  <?php echo stripslashes($obj{"General_Surgery0357"});?>  


<?php if ($obj{"General_Surgery0357"} == "G9312") { echo " -- Surgical site infection.  <br>
	<font size=-3>(G9312) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"General_Surgery0357"} == "G9311") { echo " -- No surgical site infection.  <br>
	<font size=-3>(G9311)(Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>
Measure #0358 Patient-Centered Surgical Risk Assessment and Communication:
<li>  <?php echo stripslashes($obj{"General_Surgery0358"});?>  


<?php if ($obj{"General_Surgery0358"} == "G9316") { echo " -- Documentation of patient-specific risk assessment with a risk calculator based on multi-institutional clinical data, the specific risk calculator used, and communication of risk assessment from risk calculator with the patient or family.  <br>
	<font size=-3>(G9316) (Performance Met)</font>"; } ?>

<?php if ($obj{"General_Surgery0358"} == "G9317") { echo " -- Documentation of patient-specific risk assessment with a risk calculator based on multi-institutional clinical data, the specific risk calculator used, and communication of risk assessment from risk calculator with the patient or family not completed.  <br>
	<font size=-3>(G9317)(Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
