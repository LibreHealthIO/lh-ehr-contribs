<?php
/**
 * PQRS Cardiovascular Prevention Group Direct Data Entry
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
function pqrs_form_cardiovascular_prevention_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_cardiovascular_prevention", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Cardiovascular Prevention Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"Cardiovascular_Prevention0130"});?>  


<?php if ($obj{"Cardiovascular_Prevention0130"} == "G8427") { echo " -- Current (or no) medications documented in the patient's medical record.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0130"} == "G8430") { echo " -- Patient is not eligible.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion( (emergent or urgent situation)</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0130"} == "G8428") { echo " -- Current list of medications not documented, NOS.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0204 Ischemic Vascular Disease (IVD): Use of Aspirin or Another Antithrombotic:
<li>  <?php echo stripslashes($obj{"Cardiovascular_Prevention0204"});?>  


<?php if ($obj{"Cardiovascular_Prevention0204"} == "G8598") { echo " -- Aspirin or another antithrombotic therapy used.  <br>
	<font size=-3>(G8598) (Performance Met)</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0204"} == "G8599") { echo " -- Aspirin or another antithrombotic therapy not used, reason not given.  <br>
	<font size=-3>(G8599) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Cardiovascular_Prevention0226"});?>  


<?php if ($obj{"Cardiovascular_Prevention0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use.  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, NOS.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0236 Controlling High Blood Pressure:
<li>  <?php echo stripslashes($obj{"Cardiovascular_Prevention0236"});?>  


<?php if ($obj{"Cardiovascular_Prevention0236"} == "G8752 G8754") { echo " -- Most recent systolic blood pressure &lt; 140 mmHg AND Most recent diastolic blood pressure &lt; 90 mmHg  <br>
	<font size=-3>(G8752 G8754) (Performance Met)</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0236"} == "G8753 G8754") { echo " -- Most recent systolic blood pressure &ge; 140 mmHg AND Most recent diastolic blood pressure &lt; 90 mmHg  <br>
	<font size=-3>(G8753 G8754) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0236"} == "G8752 G8755") { echo " -- Most recent systolic blood pressure &lt; 140 mmHg AND Most recent diastolic blood pressure &ge; 90 mmHg  <br>
	<font size=-3>(G8752 G8755) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0236"} == "G8753 G8755") { echo " -- Most recent systolic blood pressure &ge; 140 mmHg AND Most recent diastolic blood pressure &ge; 90 mmHg  <br>
	<font size=-3>(G8753 G8755) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0236"} == "G8756") { echo " -- Blood Pressure Measurement not Documented, Reason not Given  <br>
	<font size=-3>(G8756) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0317 Preventive Care and Screening: Screening for High Blood Pressure and Follow-Up Documented:
<li>  <?php echo stripslashes($obj{"Cardiovascular_Prevention0317"});?>  


<?php if ($obj{"Cardiovascular_Prevention0317"} == "G8783") { echo " -- Normal blood pressure reading documented, follow-up not required.  <br>
	<font size=-3>(G8783) (Performance Met)</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0317"} == "G8950") { echo " -- Pre-Hypertensive or Hypertensive blood pressure reading documented, AND the indicated follow-up is documented.  <br>
	<font size=-3>(G8950) (Performance Met)</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0317"} == "G8784") { echo " -- Patient not eligible.  <br>
	<font size=-3>(G8784) (Other Performance Exclusion) (eg, active diagnosis of hypertension, patient refuses, urgent or emergent situation)</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0317"} == "G8785") { echo " -- Blood pressure reading not documented, reason not given.  <br>
	<font size=-3>(G8785) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0317"} == "G8952") { echo " -- Pre-Hypertensive or Hypertensive blood pressure reading documented, indicated follow-up not documented, reason not given.  <br>
	<font size=-3>(G8952) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0438 Statin Therapy for the Prevention and Treatment of Cardiovascular Disease:
<li>  <?php echo stripslashes($obj{"Cardiovascular_Prevention0438"});?>  


<?php if ($obj{"Cardiovascular_Prevention0438"} == "G9664)") { echo " -- Patient is a current statin therapy user or received a prescriptionfor statin therapy.  <br>
	<font size=-3>(G9664) (Performance Met)</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0438"} == "G9667") { echo " -- Documentation of medical reason(s) for not currently being a statin therapy user or receive an order.  <br>
	<font size=-3>(G9667) (Medical Performance Exclusion) (eg, adverse effect, allergy or intolerance to statin medication therapy, pregnancy breastfeeding, patients who are receiving palliative care, active liver, hepatic disease, ESRD, or diabetes).</font>"; } ?>

<?php if ($obj{"Cardiovascular_Prevention0438"} == "G9665") { echo " -- Patients who are not currently statin therapy users or did not receive an order for statin therapy.  <br>
	<font size=-3>(G9665) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
