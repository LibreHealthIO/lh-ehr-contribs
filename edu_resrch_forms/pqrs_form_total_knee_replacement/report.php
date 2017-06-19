<?php
/**
 * PQRS Total Knee Replacement Group Direct Data Entry
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
function pqrs_form_total_knee_replacement_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_total_knee_replacement", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Total Knee Replacement Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"Total_Knee_Replacement0130"});?>  


<?php if ($obj{"Total_Knee_Replacement0130"} == "G8427") { echo " -- Current medications documented.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"Total_Knee_Replacement0130"} == "G8430") { echo " -- Eligible professional attests to documenting in the medical record the patient is not eligible for a current list of medications being obtained, updated, or reviewed by the eligible professional.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Total_Knee_Replacement0130"} == "G8428") { echo " -- Current list of medications not documented as obtained, updated, or reviewed by the eligible professional, reason not given.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Total_Knee_Replacement0226"});?>  


<?php if ($obj{"Total_Knee_Replacement0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Total_Knee_Replacement0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Total_Knee_Replacement0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons).  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Total_Knee_Replacement0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0350 Total Knee Replacement: Shared Decision-Making: Trial of Conservative (Non-surgical) Therapy:
<li>  <?php echo stripslashes($obj{"Total_Knee_Replacement0350"});?>  


<?php if ($obj{"Total_Knee_Replacement0350"} == "G9296") { echo " -- Patients with documented shared decision-making including discussion of conservative (non-surgical) therapy (e.g., NSAIDs, analgesics, weight loss, exercise, injections) prior to the procedure.  <br>
	<font size=-3>(G9296) (Performance Met)</font>"; } ?>

<?php if ($obj{"Total_Knee_Replacement0350"} == "G9297") { echo " -- Shared decision-making including discussion of conservative (non-surgical) therapy (e.g. NSAIDs, analgesics, weight loss, exercise, injections) prior to the procedure not documented, reason not given.  <br>
	<font size=-3>(G9297) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0351 Total Knee Replacement: Venous Thromboembolic and Cardiovascular Risk Evaluation:
<li>  <?php echo stripslashes($obj{"Total_Knee_Replacement0351"});?>  


<?php if ($obj{"Total_Knee_Replacement0351"} == "G9298") { echo " -- Patients who are evaluated for venous thromboembolic and cardiovascular risk factors within 30 days prior to the procedure (e.g. history of DVT, PE, MI, arrhythmia and stroke).  <br>
	<font size=-3>(G9298) (Performance Met)</font>"; } ?>

<?php if ($obj{"Total_Knee_Replacement0351"} == "G9299") { echo " -- Patients who are not evaluated for venous thromboembolic and cardiovascular risk factors within 30 days prior to the procedure including (e.g. history of DVT, PE, MI, arrhythmia and stroke), reason not given.  <br>
	<font size=-3>(G9299) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0352 Total Knee Replacement: Preoperative Antibiotic Infusion with Proximal Tourniquet:
<li>  <?php echo stripslashes($obj{"Total_Knee_Replacement0352"});?>  


<?php if ($obj{"Total_Knee_Replacement0352"} == "G9301") { echo " -- Patients who had the prophylactic antibiotic completely infused prior to the inflation of the proximal tourniquet.  <br>
	<font size=-3>(G9301) (Performance Met)</font>"; } ?>

<?php if ($obj{"Total_Knee_Replacement0352"} == "G9300") { echo " -- Documentation of medical reason(s) for not completely infusing the prophylactic antibiotic prior to the inflation of the proximal tourniquet (e.g., a tourniquet was not used).  <br>
	<font size=-3>(G9300) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Total_Knee_Replacement0352"} == "G9302") { echo " -- Prophylactic antibiotic not completely infused prior to the inflation of the proximal tourniquet, reason not given.  <br>
	<font size=-3>(G9302) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0353 Total Knee Replacement: Identification of Implanted Prosthesis in Operative Report:
<li>  <?php echo stripslashes($obj{"Total_Knee_Replacement0353"});?>  


<?php if ($obj{"Total_Knee_Replacement0353"} == "G9304") { echo " -- Operative report identifies the prosthetic implant specifications including the prosthetic implant manufacturer, the brand name of the prosthetic implant and the size of each prosthetic implant.  <br>
	<font size=-3>(G9304) (Performance Met)</font>"; } ?>

<?php if ($obj{"Total_Knee_Replacement0353"} == "G9303") { echo " -- Operative report does not identify the prosthetic implant specifications including the prosthetic implant manufacturer, the brand name of the prosthetic implant and the size of each prosthetic implant, reason not given.  <br>
	<font size=-3>(G9303) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
