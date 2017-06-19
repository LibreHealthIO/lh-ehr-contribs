<?php
/**
 * PQRS Diabetic Retinopathy Group Direct Data Entry
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
function pqrs_form_diabetic_retinopathy_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_diabetic_retinopathy", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Diabetic Retinopathy Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0001 Diabetes: Hemoglobin A1c Poor Control:
<li>  <?php echo stripslashes($obj{"Diabetic_Retinopathy0001"});?>  


<?php if ($obj{"Diabetic_Retinopathy0001"} == "3044F") { echo " -- Most recent hemoglobin A1c (HbA1c) level &lt; 7.0%  <br>
	<font size=-3>(3044F) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0001"} == "3045F") { echo " -- Most recent hemoglobin A1c (HbA1c) level 7.0 to 9.0%  <br>
	<font size=-3>(3045F) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0001"} == "3046F") { echo " -- Most recent hemoglobin A1c level &gt; 9.0%  <br>
	<font size=-3>(3046F) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0001"} == "3046F:8P") { echo " -- Hemoglobin A1c level was not performed during the measurement period (12 months)  <br>
	<font size=-3>(3046F:8P) (Performance Met, INVERSE MEASURE)</font>"; } ?>
<br><br>
Measure #0018 Diabetic Retinopathy: Documentation of Presence or Absence of Macular Edema and Level Care of Severity of Retinopathy:
<li>  <?php echo stripslashes($obj{"Diabetic_Retinopathy0018"});?>  


<?php if ($obj{"Diabetic_Retinopathy0018"} == "2021F") { echo " -- Dilated macular or fundus exam performed, including documentation of the presence or absence of macular edema and level of severity of retinopathy.  <br>
	<font size=-3>(2021F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0018"} == "2021F:1P") { echo " -- Documentation of medical reason(s) for not performing a dilated macular or fundus examination.  <br>
	<font size=-3>(2021F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0018"} == "2021F:2P") { echo " -- Documentation of patient reason(s) for not performing a dilated macular or fundus examination.  <br>
	<font size=-3>(2021F:2P) (Patient Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0018"} == "2021F:8P") { echo " -- Dilated macular or fundus exam was not performed, reason not otherwise specified.  <br>
	<font size=-3>(2021F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0019 Diabetic Retinopathy: Communication with the Physician Managing Ongoing Diabetes Care:
<li>  <?php echo stripslashes($obj{"Diabetic_Retinopathy0019"});?>  


<?php if ($obj{"Diabetic_Retinopathy0019"} == "5010F G8397") { echo " -- Findings of dilated macular or fundus exam communicated to the physician managing the diabetes care.\Dilated macular or fundus exam performed, including documentation of the presence or absence of macular edema and level of severity of retinopathy.  <br>
	<font size=-3>(5010F, G8397) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0019"} == "5010F:1P") { echo " -- Documentation of medical reason(s) for not communicating the findings of the dilated macular or fundus exam to the physician.  <br>
	<font size=-3>(5010F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0019"} == "5010F:2P G8397") { echo " -- Documentation of patient reason(s) for not communicating the findings to the physician. Dilated macular or fundus exam performed, including documentation of the presence or absence of macular edema AND level of severity of retinopathy.  <br>
	<font size=-3>(5010F:2P, G8397) (Patient Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0019"} == "G8398") { echo " -- Dilated macular or fundus exam not performed.  <br>
	<font size=-3>(G8398) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0019"} == "5010F G8397") { echo " -- Findings of dilated macular or fundus exam were not communicated to the physician, reason NOS. Dilated macular or fundus exam performed, including documentation of the presence or absence of macular edema AND level of severity of retinopathy.  <br>
	<font size=-3>(5010F:8P, (G8397) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0117 Diabetes: Eye Exam:
<li>  <?php echo stripslashes($obj{"Diabetic_Retinopathy0117"});?>  


<?php if ($obj{"Diabetic_Retinopathy0117"} == "2022F") { echo " -- Dilated retinal eye exam with interpretation by an ophthalmologist or optometrist documented and reviewed  <br>
	<font size=-3>(2022F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0117"} == "2024F") { echo " -- Seven standard field stereoscopic photos with interpretation by an ophthalmologist or optometrist documented and reviewed  <br>
	<font size=-3>(2024F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0117"} == "2026F") { echo " -- Eye imaging validated to match diagnosis from seven standard field stereoscopic photos results documented and reviewed  <br>
	<font size=-3>(2026F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0117"} == "3072F") { echo " -- Low risk for retinopathy (no evidence of retinopathy in the prior year) &#8225  <br>
	<font size=-3>(3072F) (Performance Met)&lt;br&gt; &#8225 NOTE: This code can only be used if the encounter was during the measurement period because it indicates that the patient had &quot;no evidence of retinopathy in the prior year&quot;. This code definition indicates results were negative, therefore a result is not required.</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0117"} == "2022F:8P") { echo " -- Dilated eye exam was not performed, reason not otherwise specified  <br>
	<font size=-3>(2022F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"Diabetic_Retinopathy0130"});?>  


<?php if ($obj{"Diabetic_Retinopathy0130"} == "G8427") { echo " -- Current medications documented.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0130"} == "G8430") { echo " -- Eligible professional attests to documenting in the medical record the patient is not eligible for a current list of medications being obtained, updated, or reviewed by the eligible professional.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0130"} == "G8428") { echo " -- Current list of medications not documented as obtained, updated, or reviewed by the eligible professional, reason not given.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Diabetic_Retinopathy0226"});?>  


<?php if ($obj{"Diabetic_Retinopathy0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons).  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, reason NOS.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0317 Preventive Care and Screening: Screening for High Blood Pressure and Follow-Up Documented:
<li>  <?php echo stripslashes($obj{"Diabetic_Retinopathy0317"});?>  


<?php if ($obj{"Diabetic_Retinopathy0317"} == "G8783") { echo " -- Normal blood pressure reading documented, follow-up not required.  <br>
	<font size=-3>(G8783) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0317"} == "G8950") { echo " -- Pre-Hypertensive or hypertensive blood pressure reading documented, and the indicated follow-up is documented.  <br>
	<font size=-3>(G8950) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0317"} == "G8784") { echo " -- Patient not eligible (e.g., documentation the patient is not eligible due to active diagnosis of hypertension, patient refuses, urgent or emergent situation, documentation the patient is not eligible).  <br>
	<font size=-3>(G8784) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0317"} == "G8785") { echo " -- Blood pressure reading not documented, reason not given.  <br>
	<font size=-3>(G8785) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Diabetic_Retinopathy0317"} == "G8952") { echo " -- Pre-Hypertensive or Hypertensive blood pressure reading documented, indicated follow-up not documented, reason not given.  <br>
	<font size=-3>(G8952) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
