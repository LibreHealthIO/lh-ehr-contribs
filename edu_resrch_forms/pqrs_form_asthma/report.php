<?php
/**
 * PQRS Asthma Group Direct Data Entry
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
function pqrs_form_asthma_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_asthma", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Asthma Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0053 Asthma: Pharmacologic Therapy for Persistent Asthma - Ambulatory Care Setting:
<li>  <?php echo stripslashes($obj{"Asthma0053"});?>  


<?php if ($obj{"Asthma0053"} == "1038F 4140F") { echo " -- Inhaled corticosteroids prescribed.  <br>
	<font size=-3>(1038F, 4140F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Asthma0053"} == "4144F") { echo " -- Alternative long-term control medication prescribed.  <br>
	<font size=-3>(4144F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Asthma0053"} == "4140F:2P 1038F") { echo " -- Documentation of patient reason(s) for not prescribing medication.  <br>
	<font size=-3>(4140F:2P, 1038F) (Patient Performance Exclusion) (eg, patient declined, other patient reason).</font>"; } ?>

<?php if ($obj{"Asthma0053"} == "1039F") { echo " -- Intermittent asthma.  <br>
	<font size=-3>(1039F)(Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Asthma0053"} == "4140F:8P 1038F") { echo " -- Medication not prescribed, NOS.  <br>
	<font size=-3>(4140F:8P, 1038F) (Patient Performance Exclusion)</font>"; } ?>
<br><br>
Measure #0110 Preventive Care and Screening: Influenza Immunization:
<li>  <?php echo stripslashes($obj{"Asthma0110"});?>  


<?php if ($obj{"Asthma0110"} == "G8482") { echo " -- Influenza immunization administered or previously received.  <br>
	<font size=-3>(G8482) (Performance Met)</font>"; } ?>

<?php if ($obj{"Asthma0110"} == "G8483") { echo " -- Influenza immunization not administered, reason documented.  <br>
	<font size=-3>(G8483) (Performance Met) (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons)</font>"; } ?>

<?php if ($obj{"Asthma0110"} == "G8484") { echo " -- Influenza immunization was not administered, reason not given.  <br>
	<font size=-3>(G8484) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0128 Preventive Care and Screening: Body Mass Index (BMI) Screening and Follow-Up Plan:
<li>  <?php echo stripslashes($obj{"Asthma0128"});?>  


<?php if ($obj{"Asthma0128"} == "G8420") { echo " -- BMI is documented within normal parameters and no follow-up plan is required.  <br>
	<font size=-3>(G8420) (Performance Met)</font>"; } ?>

<?php if ($obj{"Asthma0128"} == "G8417") { echo " -- BMI is documented above normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8417) (Performance Met)</font>"; } ?>

<?php if ($obj{"Asthma0128"} == "G8418") { echo " -- BMI is documented below normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8418) (Performance Met)</font>"; } ?>

<?php if ($obj{"Asthma0128"} == "G8421") { echo " -- BMI not documented and no reason is given.  <br>
	<font size=-3>(G8421) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Asthma0128"} == "G8419") { echo " -- BMI documented outside normal parameters, no follow-up plan documented, NOS.  <br>
	<font size=-3>(G8419) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"Asthma0130"});?>  


<?php if ($obj{"Asthma0130"} == "G8427") { echo " -- Current (or no) medications documented in the patient's medical record.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"Asthma0130"} == "G8430") { echo " -- Patient is not eligible.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion( (emergent or urgent situation)</font>"; } ?>

<?php if ($obj{"Asthma0130"} == "G8428") { echo " -- Current list of medications not documented, NOS.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Asthma0226"});?>  


<?php if ($obj{"Asthma0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Asthma0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Asthma0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use.  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)</font>"; } ?>

<?php if ($obj{"Asthma0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, NOS.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0402 Tobacco Use and Help with Quitting Among Adolescents:
<li>  <?php echo stripslashes($obj{"Asthma0402"});?>  


<?php if ($obj{"Asthma0402"} == "G9458") { echo " -- Patient documented as tobacco user AND received tobacco cessation intervention if identified as a tobacco user.  <br>
	<font size=-3>(G9458) (Performance Met)</font>"; } ?>

<?php if ($obj{"Asthma0402"} == "G9459") { echo " -- Currently a tobacco non-user.  <br>
	<font size=-3>(G9459)(Performance Met)</font>"; } ?>

<?php if ($obj{"Asthma0402"} == "G9460") { echo " -- Tobacco assessment OR tobacco cessation intervention not performed, NOS.  <br>
	<font size=-3>(G9460) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
