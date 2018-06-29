<?php
/**
 * PQRS Chronic Obstructive Pulmonary Disease Group Direct Data Entry
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
function pqrs_form_chronic_obstructive_pulmonary_disease_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_chronic_obstructive_pulmonary_disease", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Chronic Obstructive Pulmonary Disease Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0047 Care Plan:
<li>  <?php echo stripslashes($obj{"Chronic_Obstructive_Pulmonary_Disease0047"});?>  


<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0047"} == "1123F") { echo " -- Discussed and documented.  <br>
	<font size=-3>(1123F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0047"} == "1124F") { echo " -- Discussed and documented, patient did not wish to participate.  <br>
	<font size=-3>(1124F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0047"} == "1123F:8P") { echo " -- Advance care planning not nocumented, reason NOS.  <br>
	<font size=-3>(1123F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0051 Chronic Obstructive Pulmonary Disease (COPD): Spirometry Evaluation:
<li>  <?php echo stripslashes($obj{"Chronic_Obstructive_Pulmonary_Disease0051"});?>  


<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0051"} == "3023F") { echo " -- Spirometry results documented and reviewed.  <br>
	<font size=-3>(3023F) (Performance Met)nSpirometry results documented and reviewed.</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0051"} == "3023F:1P") { echo " -- Documentation of medical reason(s) for not documenting and reviewing spirometry results.  <br>
	<font size=-3>(3023F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0051"} == "3023F:2P") { echo " -- Documentation of patient reason(s) for not documenting and reviewing spirometry results.  <br>
	<font size=-3>(3023F:2P) (Patient Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0051"} == "3023F:3P") { echo " -- Documentation of system reason for not documenting and reviewing spirometry results.  <br>
	<font size=-3>(3023F:3P) (System Performance Exclusion)nDocumentation of system reason.</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0051"} == "3023F:8P") { echo " -- Spirometry results not documented and reviewed, reason NOS.  <br>
	<font size=-3>(3023F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0052 Chronic Obstructive Pulmonary Disease (COPD): Inhaled Bronchodilator Therapy:
<li>  <?php echo stripslashes($obj{"Chronic_Obstructive_Pulmonary_Disease0052"});?>  


<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0052"} == "4025F") { echo " -- Inhaled bronchodilator prescribed and FEV1 &lt; 60%.  <br>
	<font size=-3>(4025F, G8924) (Performance Met)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0052"} == "4025F:1P") { echo " -- Inhaled bronchodilator not prescribed and FEV1 &lt; 60%; medical reason(s) documented.  <br>
	<font size=-3>(4025F:1P, G8924) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0052"} == "4025F:2P") { echo " -- Inhaled bronchodilator not prescribed and FEV1 &lt; 60%; patient reason(s) documented.  <br>
	<font size=-3>(4025F:2P, G8924) (Patient Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0052"} == "4025F:3P") { echo " -- Inhaled bronchodilator not prescribed and FEV1 &lt; 60%; system reason(s) documented.  <br>
	<font size=-3>(4025F:3P, G8924) (System Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0052"} == "G8925") { echo " -- FEV1 &ge; 60% predicted or patient does not have COPD symptoms.  <br>
	<font size=-3>(G8925) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0052"} == "G8926") { echo " -- Spirometry test not performed or documented, reason NOS.  <br>
	<font size=-3>(G8926) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0052"} == "4025F:8P") { echo " -- Inhaled bronchodilator not prescribed and FEV1 &lt; 60%, reason NOS.  <br>
	<font size=-3>(4025F:8P, G8924) (Performance Not Met)nInhaled bronchodilator not prescribed, reason not otherwise specified.</font>"; } ?>
<br><br>
Measure #0110 Preventive Care and Screening: Influenza Immunization:
<li>  <?php echo stripslashes($obj{"Chronic_Obstructive_Pulmonary_Disease0110"});?>  


<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0110"} == "G8482") { echo " -- Influenza immunization administered or previously received.  <br>
	<font size=-3>(G8482) (Performance Met)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0110"} == "G8483") { echo " -- Influenza immunization not administered, reason documented.  <br>
	<font size=-3>(G8483) (Performance Met) (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0110"} == "G8484") { echo " -- Influenza immunization was not administered, reason not given.  <br>
	<font size=-3>(G8484) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0111 Pneumonia Vaccination Status for Older Adults:
<li>  <?php echo stripslashes($obj{"Chronic_Obstructive_Pulmonary_Disease0111"});?>  


<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0111"} == "4040F") { echo " -- Pneumococcal vaccine administered or previously received.  <br>
	<font size=-3>(4040F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0111"} == "4040F:8P") { echo " -- Pneumococcal vaccine was not administered or previously received, reason NOS.  <br>
	<font size=-3>(4040F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"Chronic_Obstructive_Pulmonary_Disease0130"});?>  


<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0130"} == "G8427") { echo " -- Current (or no) medications documented in the patient's medical record.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0130"} == "G8430") { echo " -- Patient is not eligible.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion( (emergent or urgent situation)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0130"} == "G8428") { echo " -- Current list of medications not documented, NOS.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Chronic_Obstructive_Pulmonary_Disease0226"});?>  


<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use.  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)</font>"; } ?>

<?php if ($obj{"Chronic_Obstructive_Pulmonary_Disease0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, NOS.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
