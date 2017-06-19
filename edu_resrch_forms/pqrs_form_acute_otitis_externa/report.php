<?php
/**
 * PQRS Acute Otitis Externa Group Direct Data Entry
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
function pqrs_form_acute_otitis_externa_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_acute_otitis_externa", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Acute Otitis Externa Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0091 Acute Otitis Externa (AOE): Topical Therapy:
<li>  <?php echo stripslashes($obj{"Acute_Otitis_Externa0091"});?>  


<?php if ($obj{"Acute_Otitis_Externa0091"} == "4130F") { echo " -- Topical preparations (including OTC) prescribed.  <br>
	<font size=-3>(4130F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0091"} == "4130F:1P") { echo " -- Documentation of medical reason(s) for not prescribing topical preparations (including OTC).  <br>
	<font size=-3>(4130F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0091"} == "4130F:2P") { echo " -- Documentation of patient reason(s) for not prescribing topical preparations (including OTC).  <br>
	<font size=-3>(4130F:2P) (Patient Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0091"} == "4130F:8P") { echo " -- Topical preparations (including OTC) not prescribed, NOS.  <br>
	<font size=-3>(4130F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0093 Acute Otitis Externa (AOE): Systemic Antimicrobial Therapy – Avoidance of Inappropriate Use:
<li>  <?php echo stripslashes($obj{"Acute_Otitis_Externa0093"});?>  


<?php if ($obj{"Acute_Otitis_Externa0093"} == "4132F") { echo " -- Systemic antimicrobial therapy not prescribed.  <br>
	<font size=-3>(4132F) (Performance Met), INVERSE MEASURE</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0093"} == "4131F:1P") { echo " -- Documentation of medical reason(s) for prescribing systemic antimicrobial therapy.  <br>
	<font size=-3>(4131F:1P) (Medical Performance Exclusion), INVERSE MEASURE</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0093"} == "4131F") { echo " -- Systemic antimicrobial therapy prescribed.  <br>
	<font size=-3>(4131F) (Performance Not Met), INVERSE MEASURE</font>"; } ?>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"Acute_Otitis_Externa0130"});?>  


<?php if ($obj{"Acute_Otitis_Externa0130"} == "G8427") { echo " -- Current (or no) medications documented in the patient's medical record.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0130"} == "G8430") { echo " -- Patient is not eligible.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion) (eg, emergent or urgent situation)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0130"} == "G8428") { echo " -- Current list of medications not documented, reason not given.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0131 Pain Assessment and Follow-Up:
<li>  <?php echo stripslashes($obj{"Acute_Otitis_Externa0131"});?>  


<?php if ($obj{"Acute_Otitis_Externa0131"} == "G8730") { echo " -- Pain assessment documented as positive AND a follow-up plan is documented.  <br>
	<font size=-3>(G8730)(Performance Met)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0131"} == "G8731") { echo " -- Pain assessment is documented as negative, no follow-up plan required.  <br>
	<font size=-3>(G8731)(Performance Met)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0131"} == "G8442") { echo " -- Patient is not eligible for a pain assessment.  <br>
	<font size=-3>(G8442) (Other Performance Exclusion) (eg, urgent, emergent situation or patient incapacitated)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0131"} == "G8939") { echo " -- Pain assessment documented as positive, no follow-up plan, patient is not eligible.  <br>
	<font size=-3>(G8939) (Other Performance Exclusion) (urgent, emergent situation or patient incapacitated)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0131"} == "G8732") { echo " -- No documentation of pain assessment, reason not given.  <br>
	<font size=-3>(G8732) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0131"} == "G8509") { echo " -- Pain assessment documented as positive, no follow-up plan, NOS.  <br>
	<font size=-3>(G8509) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0154 Falls: Risk Assessment:
<li>  <?php echo stripslashes($obj{"Acute_Otitis_Externa0154"});?>  


<?php if ($obj{"Acute_Otitis_Externa0154"} == "3288F 1100F") { echo " -- Falls risk assessment documented and patient screened for future fall risk.  <br>
	<font size=-3>(3288F, 1100F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0154"} == "3288F:1P 1100F") { echo " -- Medical reason(s) for not completing a risk assessment and patient screened for future fall risk.  <br>
	<font size=-3>(3288F:1P, 1100F) (Medical Performance Exclusion) (eg, patient not ambulatory)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0154"} == "1101F") { echo " -- Patient screened for future fall risk; no falls or only one fall without injury in the past year.  <br>
	<font size=-3>(1101F) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0154"} == "1101F:8P") { echo " -- Patient not eligible; fall status not documented.  <br>
	<font size=-3>(1101F:8P) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0154"} == "3288F:8P 1100F") { echo " -- Falls risk assessment not completed, NOS, AND patient screened for fall risk.  <br>
	<font size=-3>(3288F:8P, 1100F) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0155 Falls: Plan of Care:
<li>  <?php echo stripslashes($obj{"Acute_Otitis_Externa0155"});?>  


<?php if ($obj{"Acute_Otitis_Externa0155"} == "0518F") { echo " -- Falls plan of care documented.  <br>
	<font size=-3>(0518F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0155"} == "0518F:1P") { echo " -- Documentation of medical reason(s) for no plan of care for falls.  <br>
	<font size=-3>(0518F:1P) (Medical Performance Exclusion) (eg, patient is not ambulatory)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0155"} == "0518F:8P") { echo " -- Plan of care not documented, reason NOS.  <br>
	<font size=-3>(0518F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Acute_Otitis_Externa0226"});?>  


<?php if ($obj{"Acute_Otitis_Externa0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use.  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, NOS.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0317 Preventive Care and Screening: Screening for High Blood Pressure and Follow-Up Documented:
<li>  <?php echo stripslashes($obj{"Acute_Otitis_Externa0317"});?>  


<?php if ($obj{"Acute_Otitis_Externa0317"} == "G8783") { echo " -- Normal blood pressure reading documented, follow-up not required.  <br>
	<font size=-3>(G8783) (Performance Met)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0317"} == "G8950") { echo " -- Pre-Hypertensive or Hypertensive blood pressure reading documented, AND the indicated follow-up is documented.  <br>
	<font size=-3>(G8950) (Performance Met)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0317"} == "G8784") { echo " -- Patient not eligible.  <br>
	<font size=-3>(G8784) (Other Performance Exclusion) (eg, (active diagnosis of hypertension, patient refuses, urgent or emergent situation)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0317"} == "G8785") { echo " -- Blood pressure reading not documented, NOS.  <br>
	<font size=-3>(G8785) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Acute_Otitis_Externa0317"} == "G8952") { echo " -- Pre-Hypertensive or Hypertensive blood pressure reading documented, indicated follow-up not documented, NOS.  <br>
	<font size=-3>(G8952) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
