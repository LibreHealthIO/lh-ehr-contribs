<?php
/**
 * PQRS Oncology Group Direct Data Entry
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
function pqrs_form_oncology_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_oncology", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Oncology Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0071 Breast Cancer: Hormonal Therapy for Stage IC-IIIC Estrogen Receptor/ Progesterone Receptor (ER/PR) Positive Breast Cancer:
<li>  <?php echo stripslashes($obj{"Oncology0071"});?>  


<?php if ($obj{"Oncology0071"} == "4179F") { echo " -- Tamoxifen or aromatase inhibitor (AI) prescribed.  <br>
	<font size=-3>(4179F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Oncology0071"} == "4179F:1P") { echo " -- Documentation of medical reason(s) for not prescribing tamoxifen or aromatase inhibitor (eg, patient’s disease has progressed to metastatic, patient is receiving a gonadotropin-releasing hormone analogue, patient has received oophorectomy, patient is receiving radiation or chemotherapy, patient’s diagnosis date was &gt; 5 years from reporting date, patient’s diagnosis date is within 120 days of the end of the 12 month reporting period, other medical reasons).  <br>
	<font size=-3>(4179F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Oncology0071"} == "4179F:2P") { echo " -- Documentation of patient reason(s) for not prescribing tamoxifen or aromatase inhibitor (eg, patient refusal, other patient reasons).  <br>
	<font size=-3>(4179F:2P) (Patient Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Oncology0071"} == "4179F:3P") { echo " -- Documentation of system reason(s) for not prescribing tamoxifen or aromatase inhibitor (eg, patient is currently enrolled in a clinical trial, other system reasons).  <br>
	<font size=-3>(4179F:3P) (Patient Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Oncology0071"} == "4179F:8P") { echo " -- Tamoxifen or aromatase inhibitor not prescribed, reason not otherwise specified.  <br>
	<font size=-3>(4179F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0072 Colon Cancer: Chemotherapy for AJCC Stage III Colon Cancer Patients:
<li>  <?php echo stripslashes($obj{"Oncology0072"});?>  


<?php if ($obj{"Oncology0072"} == "G8927") { echo " -- Adjuvant chemotherapy referred, prescribed or previously received for AJCC Stage III, colon cancer.  <br>
	<font size=-3>(G8927) (Performance Met)</font>"; } ?>

<?php if ($obj{"Oncology0072"} == "G8928") { echo " -- Adjuvant chemotherapy not prescribed or previously received for documented reasons (e.g., medical co-morbidities, diagnosis date more than 5 years prior to the current visit date, patient’s diagnosis date is within 120 days of the end of the 12 month reporting period, patient’s cancer has metastasized, medical contraindication/allergy, poor performance status, other medical reasons, patient refusal, other patient reasons, patient is currently enrolled in a clinical trial that precludes prescription of chemotherapy, other system reasons).  <br>
	<font size=-3>(G8928) (Other Performance Exclusions)</font>"; } ?>

<?php if ($obj{"Oncology0072"} == "G8929") { echo " -- Adjuvant chemotherapy not prescribed or previously received, reason not given.  <br>
	<font size=-3>(G8929) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0110 Preventive Care and Screening: Influenza Immunization:
<li>  <?php echo stripslashes($obj{"Oncology0110"});?>  


<?php if ($obj{"Oncology0110"} == "G8482") { echo " -- Influenza immunization administered or previously received.  <br>
	<font size=-3>(G8482) (Performance Met)</font>"; } ?>

<?php if ($obj{"Oncology0110"} == "G8483") { echo " -- Influenza immunization not administered, reason documented. (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons).  <br>
	<font size=-3>(G8483) (Performance Met)</font>"; } ?>

<?php if ($obj{"Oncology0110"} == "G8484") { echo " -- Influenza immunization was not administered, reason not given.  <br>
	<font size=-3>(G8484) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"Oncology0130"});?>  


<?php if ($obj{"Oncology0130"} == "G8427") { echo " -- Current medications documented.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"Oncology0130"} == "G8430") { echo " -- Eligible professional attests to documenting in the medical record the patient is not eligible for a current list of medications being obtained, updated, or reviewed by the eligible professional.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Oncology0130"} == "G8428") { echo " -- Current list of medications not documented as obtained, updated, or reviewed by the eligible professional, reason not given.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0143 Oncology: Medical and Radiation – Pain Intensity Quantified:
<li>  <?php echo stripslashes($obj{"Oncology0143"});?>  


<?php if ($obj{"Oncology0143"} == "1125F") { echo " -- Pain severity quantified; pain present.  <br>
	<font size=-3>(1125F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Oncology0143"} == "1126F") { echo " -- Pain severity quantified; no pain present.  <br>
	<font size=-3>(1126F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Oncology0143"} == "1125F:8P") { echo " -- Pain severity not documented, reason not otherwise specified.  <br>
	<font size=-3>(1125F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0144 Oncology: Medical and Radiation – Plan of Care for Pain:
<li>  <?php echo stripslashes($obj{"Oncology0144"});?>  


<?php if ($obj{"Oncology0144"} == "0521F") { echo " -- Plan of care to address pain documented.  <br>
	<font size=-3>(0521F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Oncology0144"} == "0521F:8P") { echo " -- Plan of care for pain not documented, reason not otherwise specified.  <br>
	<font size=-3>(0521F:8P)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Oncology0226"});?>  


<?php if ($obj{"Oncology0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Oncology0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Oncology0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons).  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Oncology0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
