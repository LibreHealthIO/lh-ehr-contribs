<?php
/**
 * PQRS Parkinsons Group Direct Data Entry
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
function pqrs_form_parkinsons_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_parkinsons", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Parkinsons Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0047 Care Plan:
<li>  <?php echo stripslashes($obj{"Parkinsons0047"});?>  


<?php if ($obj{"Parkinsons0047"} == "1123F") { echo " -- Advanced Care Planning discussed and documented.  <br>
	<font size=-3>(1123F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Parkinsons0047"} == "1124F") { echo " -- Advanced care planning discussed and documented; patient did not wish or was not able to name a surrogate decision marker or provide an advance care plan. Patient’s cultural and/or spiritual beliefs preclude a discussion of advance care planning.  <br>
	<font size=-3>(1124F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Parkinsons0047"} == "1123F:8P") { echo " -- Advance Care Planning not Documented, Reason not Otherwise Specified.  <br>
	<font size=-3>(1123F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0289 Parkinson’s Disease: Annual Parkinson’s Disease Diagnosis Review:
<li>  <?php echo stripslashes($obj{"Parkinsons0289"});?>  


<?php if ($obj{"Parkinsons0289"} == "1400F") { echo " -- Parkinson’s disease diagnosis reviewed.  <br>
	<font size=-3>(1400F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Parkinsons0289"} == "1400F:8P") { echo " -- Parkinson’s disease diagnosis was not reviewed, reason not otherwise specified.  <br>
	<font size=-3>(1400F:8P)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0290 Parkinson’s Disease: Psychiatric Disorders or Disturbances Assessment:
<li>  <?php echo stripslashes($obj{"Parkinsons0290"});?>  


<?php if ($obj{"Parkinsons0290"} == "3700F") { echo " -- Psychiatric disorders or disturbances assessed.  <br>
	<font size=-3>(3700F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Parkinsons0290"} == "3700F:8P") { echo " -- Psychiatric disorders or disturbances not assessed, reason not otherwise specified.  <br>
	<font size=-3>(3700F:8P)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0291 Parkinson’s Disease: Cognitive Impairment or Dysfunction Assessment:
<li>  <?php echo stripslashes($obj{"Parkinsons0291"});?>  


<?php if ($obj{"Parkinsons0291"} == "3720F") { echo " -- Cognitive impairment or dysfunction assessed.  <br>
	<font size=-3>(3720F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Parkinsons0291"} == "3720F") { echo " -- Cognitive impairment or dysfunction was not assessed, reason not otherwise specified.  <br>
	<font size=-3>(3720F:8P)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0292 Parkinson’s Disease: Querying about Sleep Disturbances:
<li>  <?php echo stripslashes($obj{"Parkinsons0292"});?>  


<?php if ($obj{"Parkinsons0292"} == "4328F") { echo " -- Patient (or caregiver) queried about sleep disturbances.  <br>
	<font size=-3>(4328F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Parkinsons0292"} == "4328F:1P") { echo " -- Documentation of medical reason(s) for not querying about sleep disturbances  <br>
	<font size=-3>(4328F:1P)(Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Parkinsons0292"} == "4328F:8P") { echo " -- Patient (or caregiver) not queried about sleep disturbances, reason not otherwise specified.  <br>
	<font size=-3>(4328F:8P)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0293 Parkinson’s Disease: Rehabilitative Therapy Options:
<li>  <?php echo stripslashes($obj{"Parkinsons0293"});?>  


<?php if ($obj{"Parkinsons0293"} == "4400F") { echo " -- Rehabilitative therapy options discussed with patient (or caregiver).  <br>
	<font size=-3>(4400F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Parkinsons0293"} == "4400F:1P") { echo " -- Documentation of medical reason(s) for not discussing rehabilitative therapy options with patient (or caregiver).  <br>
	<font size=-3>(4400F:1P)(Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Parkinsons0293"} == "4400F:8P") { echo " -- Rehabilitative therapy options not discussed with patient (or caregiver), reason not otherwise specified.  <br>
	<font size=-3>(4400F:8P)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0294 Parkinson’s Disease: Parkinson’s Disease Medical and Surgical Treatment Options Reviewed -- National Quality Strategy Domain:
<li>  <?php echo stripslashes($obj{"Parkinsons0294"});?>  


<?php if ($obj{"Parkinsons0294"} == "4325F") { echo " -- Medical and surgical treatment options reviewed with patient (or caregiver).  <br>
	<font size=-3>(4325F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Parkinsons0294"} == "4325F:1P") { echo " -- Medical and surgical treatment options not reviewed with patient (or caregiver) for medical reasons (eg, patient is unable to respond and no informant is available).  <br>
	<font size=-3>(4325F:1P)(Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Parkinsons0294"} == "4325F:8P") { echo " -- Medical and surgical treatment options not reviewed with patient (or caregiver), reasons not otherwise specified.  <br>
	<font size=-3>(4325F:8P)(Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
