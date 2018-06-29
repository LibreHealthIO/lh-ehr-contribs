<?php
/**
 * PQRS OPEIR Group Direct Data Entry
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
function pqrs_form_opeir_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_opeir", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>OPEIR Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0359 Optimizing Patient Exposure to Ionizing Radiation: Utilization of a Standardized Nomenclature for Computed Tomography (CT) Imaging Description:
<li>  <?php echo stripslashes($obj{"OPEIR0359"});?>  


<?php if ($obj{"OPEIR0359"} == "G9318") { echo " -- Imaging study named according to standardized nomenclature.  <br>
	<font size=-3>(G9318)(Performance Met)</font>"; } ?>

<?php if ($obj{"OPEIR0359"} == "G9319") { echo " -- Imaging study not named according to standardized nomenclature, reason not given.  <br>
	<font size=-3>(G9319)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0360 Optimizing Patient Exposure to Ionizing Radiation: Count of Potential High Dose Radiation Imaging Studies: Computed Tomography (CT) and Cardiac Nuclear Medicine Studies:
<li>  <?php echo stripslashes($obj{"OPEIR0360"});?>  


<?php if ($obj{"OPEIR0360"} == "G9321") { echo " -- Count of previous CT (any type of CT) and cardiac nuclear medicine (myocardial perfusion) studies documented in the 12-month period prior to the current study.  <br>
	<font size=-3>(G9321)(Performance Met)</font>"; } ?>

<?php if ($obj{"OPEIR0360"} == "G9322") { echo " -- Count of previous CT and cardiac nuclear medicine (myocardial perfusion) studies not documented in the 12-month period prior to the current study, reason not given.  <br>
	<font size=-3>(G9322)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0361 Optimizing Patient Exposure to Ionizing Radiation: Reporting to a Radiation Dose Index Registry:
<li>  <?php echo stripslashes($obj{"OPEIR0361"});?>  


<?php if ($obj{"OPEIR0361"} == "G9327") { echo " -- CT studies performed reported to a radiation dose index registry with all necessary data elements.  <br>
	<font size=-3>(G9327)(Performance Met)</font>"; } ?>

<?php if ($obj{"OPEIR0361"} == "G9326") { echo " -- CT studies performed not reported to a radiation dose index registry, reason not given.  <br>
	<font size=-3>(G9326)(Performance Not Met)</font>"; } ?>

<?php if ($obj{"OPEIR0361"} == "G9324") { echo " -- All necessary data elements not included, reason not given.  <br>
	<font size=-3>(G9324)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0362 Optimizing Patient Exposure to Ionizing Radiation: Computed Tomography (CT) Images Available for Patient Follow-up and Comparison Purposes:
<li>  <?php echo stripslashes($obj{"OPEIR0362"});?>  


<?php if ($obj{"OPEIR0362"} == "G9340") { echo " -- Final report documented that DICOM format image data available to non-affiliated external healthcare facilities or entities on a secure, media free, reciprocally searchable basis with patient authorization for at least a 12-month period after the study.  <br>
	<font size=-3>(G9340)(Performance Met)</font>"; } ?>

<?php if ($obj{"OPEIR0362"} == "G9329") { echo " -- DICOM format image data available to non-affiliated external healthcare facilities or entities on a secure, media free, reciprocally searchable basis with patient authorization for at least a 12-month period after the study not documented in final report, reason not given.  <br>
	<font size=-3>(G9329)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0363 Optimizing Patient Exposure to Ionizing Radiation: Search for Prior Computed Tomography (CT) Studies Through a Secure, Authorized, Media-Free, Shared Archive:
<li>  <?php echo stripslashes($obj{"OPEIR0363"});?>  


<?php if ($obj{"OPEIR0363"} == "G9341") { echo " -- Search conducted for prior patient CT studies completed at non-affiliated external healthcare facilities or entities within the past 12-months and are available through a secure, authorized, media-free, shared archive prior to an imaging study being performed.  <br>
	<font size=-3>(G9341)(Performance Met)</font>"; } ?>

<?php if ($obj{"OPEIR0363"} == "G9344") { echo " -- Due to system reasons search not conducted for DICOM format images for prior patient CT imaging studies completed at non-affiliated external healthcare facilities or entities within the past 12 months that are available through a secure, authorized, media-free, shared archive (e.g., non-affiliated external healthcare facilities or entities does not have archival abilities through a shared archival system).  <br>
	<font size=-3>(G9344)(System Performance Exclusion)</font>"; } ?>

<?php if ($obj{"OPEIR0363"} == "G9342") { echo " -- Search not conducted prior to an imaging study being performed for prior patient CT studies completed at non-affiliated external healthcare facilities or entities within the past 12-months and are available through a secure, authorized, media-free, shared archive, reason not given.  <br>
	<font size=-3>(G9342)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0364 Optimizing Patient Exposure to Ionizing Radiation: Appropriateness: Follow-up CT Imaging for Incidentally Detected Pulmonary Nodules According to Recommended Guidelines:
<li>  <?php echo stripslashes($obj{"OPEIR0364"});?>  


<?php if ($obj{"OPEIR0364"} == "G9345") { echo " -- Follow-up recommendations documented according to recommended guidelines for incidentally detected pulmonary nodules (e.g., follow-up CT imaging studies needed or that no follow-up is needed) based at a minimum on nodule size AND patient risk factors.  <br>
	<font size=-3>(G9345)(Performance Met)</font>"; } ?>

<?php if ($obj{"OPEIR0364"} == "G9347") { echo " -- Follow-up recommendations not documented according to recommended guidelines for incidentally detected pulmonary nodules, reason not given.  <br>
	<font size=-3>(G9347)(Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
