<?php
/**
 * PQRS Inflammatory Bowel Disease Group Direct Data Entry
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
function pqrs_form_inflammatory_bowel_disease_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_inflammatory_bowel_disease", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Inflammatory Bowel Disease Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0110 Preventive Care and Screening: Influenza Immunization:
<li>  <?php echo stripslashes($obj{"Inflammatory_Bowel_Disease0110"});?>  


<?php if ($obj{"Inflammatory_Bowel_Disease0110"} == "G8482") { echo " -- Influenza immunization administered or previously received.  <br>
	<font size=-3>(G8482) (Performance Met)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0110"} == "G8483") { echo " -- Influenza immunization not administered, reason documented. (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons).  <br>
	<font size=-3>(G8483) (Performance Met)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0110"} == "G8484") { echo " -- Influenza immunization was not administered, reason not given.  <br>
	<font size=-3>(G8484) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0111 Pneumonia Vaccination Status for Older Adults:
<li>  <?php echo stripslashes($obj{"Inflammatory_Bowel_Disease0111"});?>  


<?php if ($obj{"Inflammatory_Bowel_Disease0111"} == "4040F") { echo " -- Pneumococcal vaccine administered or previously received.  <br>
	<font size=-3>(4040F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0111"} == "4040F:8P") { echo " -- Pneumococcal vaccine was not administered or previously received, reason not otherwise specified.  <br>
	<font size=-3>(4040F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Inflammatory_Bowel_Disease0226"});?>  


<?php if ($obj{"Inflammatory_Bowel_Disease0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons).  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0270 Inflammatory Bowel Disease (IBD): Preventive Care: Corticosteroid Sparing Therapy:
<li>  <?php echo stripslashes($obj{"Inflammatory_Bowel_Disease0270"});?>  


<?php if ($obj{"Inflammatory_Bowel_Disease0270"} == "G9467 4142F") { echo " -- Corticosteroid sparing therapy prescribed. AND Patient who received or are receiving corticosteroids greater than or equal to 10 mg/day of prednisone equivalents for 60 or greater consecutive days or a single prescription equating to 600mg prednisone or greater for all fills within the last twelve months.  <br>
	<font size=-3>(G9467, 4142F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0270"} == "4142F:1P") { echo " -- Documentation of medical reason(s) for not treating with corticosteroid sparing therapy (e.g., benefits of continuing steroid therapy outweigh the risk of continuing steroid therapy or initiating steroid sparing therapy, patient is receiving the first course of corticosteroids for the treatment of IBD).  <br>
	<font size=-3>(4142F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0270"} == "G9467 4142F:2P") { echo " -- Documentation of patient reason(s) for not treating with corticosteroid sparing therapy (eg, patient refuses to initiate steroid sparing therapy). AND Patient who have received or are receiving corticosteroids greater than or equal to 10 mg/day of prednisone equivalents for 60 or greater consecutive days or a single prescription equating to 600mg prednisone or greater for all fills within the last twelve months.  <br>
	<font size=-3>(G9467, 4142F:2P) (Patient Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0270"} == "G9468") { echo " -- Patient not receiving corticosteroids greater than or equal to 10 mg/day of prednisone equivalents for 60 or greater consecutive days or a single prescription equating to 600mg prednisone or greater for all fills.  <br>
	<font size=-3>(G9468) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0270"} == "G9467 4142F:8P") { echo " -- Corticosteroid sparing therapy not prescribed, reason not otherwise specified. AND Patient who have received or are receiving corticosteroids greater than or equal to 10 mg/day of prednisone equivalents for 60 or greater consecutive days or a single prescription equating to 600mg prednisone or greater for all fills within the last twelve months.  <br>
	<font size=-3>(G9467, 4142F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0271 Inflammatory Bowel Disease (IBD): Preventive Care: Corticosteroid Related Iatrogenic Injury – Bone Loss Assessment:
<li>  <?php echo stripslashes($obj{"Inflammatory_Bowel_Disease0271"});?>  


<?php if ($obj{"Inflammatory_Bowel_Disease0271"} == "G8861 G9469") { echo " -- Within the past 2 years, Central Dual-energy X-Ray Absorptiometry (DXA) ordered and documented review of systems and medication history or pharmacologic therapy (other than minerals/vitamins) for osteoporosis prescribed. AND Patients who have received or are receiving corticosteroids greater than or equal to 10 mg/day of prednisone equivalents for 60 or greater consecutive days or a single prescription equating to 600mg prednisone or greater for all fills.  <br>
	<font size=-3>(G8861, G9469) (Performance Met)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0271"} == "G9470") { echo " -- Patients not receiving corticosteroids greater than or equal to 10 mg/day of prednisone equivalents for 60 or greater consecutive days or a single prescription equating to 600mg prednisone or greater for all fills.  <br>
	<font size=-3>(G9470) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0271"} == "G9472 G9469") { echo " -- Within the past 2 years, Central Dual-energy X-Ray Absorptiometry (DXA) not ordered and documented, no review of systems and no medication history or pharmacologic therapy (other than minerals/vitamins) for osteoporosis prescribed. AND Patients who have received or are receiving corticosteroids greater than or equal to 10 mg/day of prednisone equivalents for 60 or greater consecutive days or a single prescription equating to 600mg prednisone or greater for all fills.  <br>
	<font size=-3>(G9472, G9469) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0274 Inflammatory Bowel Disease (IBD): Testing for Latent Tuberculosis (TB) Before Initiating Anti-TNF (Tumor Necrosis Factor) Therapy:
<li>  <?php echo stripslashes($obj{"Inflammatory_Bowel_Disease0274"});?>  


<?php if ($obj{"Inflammatory_Bowel_Disease0274"} == "3510F G8868") { echo " -- Documentation that tuberculosis (TB) screening test performed and results interpreted. AND Patients receiving a first course of anti-TNF therapy.  <br>
	<font size=-3>(3510F, G8868) (Performance Met)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0274"} == "6150F") { echo " -- Patients not receiving a first course of anti-TNF (tumor necrosis factor) therapy.  <br>
	<font size=-3>(6150F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0274"} == "3510F:1P") { echo " -- Documentation of medical reason(s) for not performing TB screening test within 6 months prior to receiving a first course of anti-TNF therapy (eg, patient positive for TB and documentation of past treatment; patient recently completed course of anti-TB therapy).  <br>
	<font size=-3>(3510F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0274"} == "3510F:2P G8868") { echo " -- Documentation of patient reason(s) for not performing TB screening test within 6 months prior to receiving a first course of anti-TNF therapy (eg, patient declined). AND Patients receiving a first course of anti-TNF therapy.  <br>
	<font size=-3>(3510F:2P, G8868) (Patient Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0274"} == "3510F:8P G8868") { echo " -- TB screening test not performed within 6 months prior to receiving a first course of anti-TNF therapy, reason not otherwise specified. AND Patients receiving a first course of anti-TNF therapy.  <br>
	<font size=-3>(3510F:8P, G8868) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0275 Inflammatory Bowel Disease (IBD): Assessment of Hepatitis B Virus (HBV) Status Before Initiating Anti-TNF (Tumor Necrosis Factor) Therapy:
<li>  <?php echo stripslashes($obj{"Inflammatory_Bowel_Disease0275"});?>  


<?php if ($obj{"Inflammatory_Bowel_Disease0275"} == "3517F") { echo " -- Hepatitis B Virus (HBV) status assessed and results interpreted within one year prior to receiving a first course of anti-TNF (tumor necrosis factor) therapy.  <br>
	<font size=-3>(3517F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0275"} == "G8869") { echo " -- Patient has documented immunity to hepatitis B and is receiving a first course of anti-TNF therapy.  <br>
	<font size=-3>(G8869) (Performance Met)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0275"} == "G9504") { echo " -- Documented reason for not assessing Hepatitis B Virus (HBV) status (e.g. patient not receiving a first course of anti-TNF therapy, patient declined) within one year prior to first course of anti-TNF therapy.  <br>
	<font size=-3>(G9504) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Inflammatory_Bowel_Disease0275"} == "3517F:8P") { echo " -- Hepatitis B Virus (HBV) status not assessed and results interpreted within one year prior to receiving a first course of anti-TNF (tumor necrosis factor) therapy, reason not otherwise specified.  <br>
	<font size=-3>(3517F:8P) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
