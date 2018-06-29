<?php
/**
 * PQRS HIV_AIDS Group Direct Data Entry
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
function pqrs_form_hiv_aids_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_hiv_aids", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>HIV_AIDS Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0047 Care Plan:
<li>  <?php echo stripslashes($obj{"HIV_AIDS0047"});?>  


<?php if ($obj{"HIV_AIDS0047"} == "1123F") { echo " -- Advanced care planning discussed and documented.  <br>
	<font size=-3>(1123F) (Performance Met)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0047"} == "1124F") { echo " -- Advanced care planning discussed and documented; patient did not wish or was not able to name a surrogate decision marker or provide an advance care plan, or patient’s cultural and/or spiritual beliefs preclude a discussion of advance care planning.  <br>
	<font size=-3>(1124F) (Performance Met)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0047"} == "1123F:8P") { echo " -- Advance care planning not documented, reason not otherwise specified.  <br>
	<font size=-3>(1123F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0134 Preventive Care and Screening: Screening for Clinical Depression and Follow-Up Plan:
<li>  <?php echo stripslashes($obj{"HIV_AIDS0134"});?>  


<?php if ($obj{"HIV_AIDS0134"} == "G8431") { echo " -- Screening for clinical depression is documented as being positive AND a follow-up plan is documented.  <br>
	<font size=-3>(G8431) (Performance Met)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0134"} == "G8510") { echo " -- Screening for clinical depression is documented as negative, a follow-up plan is not required.  <br>
	<font size=-3>(G8510) (Performance Met)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0134"} == "G8433") { echo " -- Screening for clinical depression not documented, documentation stating the patient is not eligible.  <br>
	<font size=-3>(G8433) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0134"} == "G8940") { echo " -- Screening for clinical depression documented as positive, a follow-up plan not documented, documentation stating the patient is not eligible  <br>
	<font size=-3>(G8940) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0134"} == "G8432") { echo " -- Clinical depression screening not documented, reason not given.  <br>
	<font size=-3>(G8432) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0134"} == "G8511") { echo " -- Screening for clinical depression documented as positive, follow-up plan not documented, reason not given.  <br>
	<font size=-3>(G8511) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0160 HIV/AIDS: Pneumocystis Jiroveci Pneumonia (PCP) Prophylaxis:
<li>  <?php echo stripslashes($obj{"HIV_AIDS0160"});?>  


<?php if ($obj{"HIV_AIDS0160"} == "G9222 3494F") { echo " -- Pneumocystis jiroveci pneumonia prophylaxis prescribed within 3 months of low CD4+ cell count below 200 cells/mm3. AND CD4+ cell count &lt; 200 cells/mm3.  <br>
	<font size=-3>(G9222, 3494F) (Performance Met)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0160"} == "G9219 3494F") { echo " -- Pneumocystis jiroveci pneumonia prophylaxis not prescribed within 3 months of low CD4+ cell count below 200 cells/mm3 for medical reason (i.e., patient’s CD4+ cell count above threshold within 3 months after CD4+ cell count below threshold, indicating that the patient’s CD4+ levels are within an acceptable range and the patient does not require PCP prophylaxis). AND CD4+ cell count &lt; 200 cells/mm3.  <br>
	<font size=-3>(G9219, 3494F) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0160"} == "3495F") { echo " -- CD4+ cell count 200 – 499 cells/mm3.  <br>
	<font size=-3>(3495F) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0160"} == "3496F") { echo " -- CD4+ cell count = 500 cells/mm3.  <br>
	<font size=-3>(3496F) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0160"} == "G9217 3494F") { echo " -- PCP prophylaxis was not prescribed within 3 months of low CD4+ cell count below 200 cells/mm3, reason not given. AND CD4+ cell count &lt; 200 cells/mm3.  <br>
	<font size=-3>(G9217, 3494F) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0160"} == "3494F:8P") { echo " -- CD4+ cell count not performed, reason not otherwise specified.  <br>
	<font size=-3>(3494F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0205 HIV/AIDS: Sexually Transmitted Disease Screening for Chlamydia, Gonorrhea, and Syphilis:
<li>  <?php echo stripslashes($obj{"HIV_AIDS0205"});?>  


<?php if ($obj{"HIV_AIDS0205"} == "G9228") { echo " -- Chlamydia, gonorrhea, and syphilis screening results documented (report when results are present for all of the 3 screenings).  <br>
	<font size=-3>(G9228) (Performance Met)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0205"} == "G9229") { echo " -- Chlamydia, gonorrhea, and syphilis screening results not documented (Patient refusal is the only allowed exclusion).  <br>
	<font size=-3>(G9229) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0205"} == "G9230") { echo " -- Chlamydia, gonorrhea, and syphilis screening not documented as performed, reason not otherwise specified.  <br>
	<font size=-3>(G9230) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"HIV_AIDS0226"});?>  


<?php if ($obj{"HIV_AIDS0226"} == "4004F") { echo " -- Patient Screened for Tobacco Use, Identified as a User and Received Intervention  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0226"} == "1036F") { echo " -- Patient Screened for Tobacco Use and Identified as a Non-User of Tobacco  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0226"} == "4004F:1P") { echo " -- Tobacco Screening not Performed for Medical Reasons  <br>
	<font size=-3>(4004F:1P) Medical Performance Exclusion</font>"; } ?>

<?php if ($obj{"HIV_AIDS0226"} == "4004F:8P") { echo " -- Tobacco Screening OR Tobacco Cessation Intervention not Performed, Reason Not Otherwise Specified  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0338 HIV Viral Load Suppression:
<li>  <?php echo stripslashes($obj{"HIV_AIDS0338"});?>  


<?php if ($obj{"HIV_AIDS0338"} == "G9243") { echo " -- Documentation of viral load less than 200 copies/mL.  <br>
	<font size=-3>(G9243) (Performance Met)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0338"} == "G9242") { echo " -- Documentation of viral load equal to or greater than 200 copies/mL or viral load not performed.  <br>
	<font size=-3>(G9242) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0339 Prescription of HIV Antiretroviral Therapy:
<li>  <?php echo stripslashes($obj{"HIV_AIDS0339"});?>  


<?php if ($obj{"HIV_AIDS0339"} == "G9245") { echo " -- Antiretroviral therapy prescribed.  <br>
	<font size=-3>(G9245) (Performance Met)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0339"} == "G9244") { echo " -- Antiretroviral therapy not prescribed.  <br>
	<font size=-3>(G9244) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0340 HIV Medical Visit Frequency:
<li>  <?php echo stripslashes($obj{"HIV_AIDS0340"});?>  


<?php if ($obj{"HIV_AIDS0340"} == "G9247") { echo " -- Patient had at least one medical visit in each 6 month period of the 24 month measurement period, with a minimum of 60 days between medical visits.  <br>
	<font size=-3>(G9247) (Performance Met)</font>"; } ?>

<?php if ($obj{"HIV_AIDS0340"} == "G9246") { echo " -- Patient did not have at least one medical visit in each 6 month period of the 24 month measurement period, with a minimum of 60 days between medical visits.  <br>
	<font size=-3>(G9246) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
