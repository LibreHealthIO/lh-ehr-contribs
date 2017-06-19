<?php
/**
 * PQRS Preventive Care Group Direct Data Entry
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
function pqrs_form_preventive_care_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_preventive_care", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Preventive Care Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0039 Screening for Osteoporosis for Women Aged 65-85 Years of Age:
<li>  <?php echo stripslashes($obj{"Preventive_Care0039"});?>  


<?php if ($obj{"Preventive_Care0039"} == "G8399") { echo " -- Patient record includes documented results of a central Dual-energy X-Ray Absorptiometry (DXA).  <br>
	<font size=-3>(G8399) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0039"} == "G8401") { echo " -- Clinician documented that patient was not an eligible candidate for screening.  <br>
	<font size=-3>(G8401) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Preventive_Care0039"} == "G8400") { echo " -- Patient with central DXA results not documented, reason not given.  <br>
	<font size=-3>(G8400) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0048 Urinary Incontinence: Assessment of Presence or Absence of Urinary Incontinence in Women Aged 65 Years and Older:
<li>  <?php echo stripslashes($obj{"Preventive_Care0048"});?>  


<?php if ($obj{"Preventive_Care0048"} == "1090F") { echo " -- Presence or absence of urinary incontinence assessed.  <br>
	<font size=-3>(1090F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0048"} == "1090F:1P") { echo " -- Documentation of medical reason(s) for not assessing for the presence or absence of urinary incontinence.  <br>
	<font size=-3>(1090F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Preventive_Care0048"} == "1090F:8P") { echo " -- Presence or absence of urinary incontinence not assessed, reason not otherwise specified.  <br>
	<font size=-3>(1090F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0110 Preventive Care and Screening: Influenza Immunization:
<li>  <?php echo stripslashes($obj{"Preventive_Care0110"});?>  


<?php if ($obj{"Preventive_Care0110"} == "G8482") { echo " -- Influenza immunization administered or previously received.  <br>
	<font size=-3>(G8482) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0110"} == "G8483") { echo " -- Influenza immunization not administered, reason documented. (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons).  <br>
	<font size=-3>(G8483) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0110"} == "G8484") { echo " -- Influenza immunization was not administered, reason not given.  <br>
	<font size=-3>(G8484) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0111 Pneumonia Vaccination Status for Older Adults:
<li>  <?php echo stripslashes($obj{"Preventive_Care0111"});?>  


<?php if ($obj{"Preventive_Care0111"} == "4040F") { echo " -- Pneumococcal vaccine administered or previously received.  <br>
	<font size=-3>(4040F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0111"} == "4040F:8P") { echo " -- Pneumococcal vaccine was not administered or previously received, reason not otherwise specified.  <br>
	<font size=-3>(4040F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0112 Breast Cancer Screening:
<li>  <?php echo stripslashes($obj{"Preventive_Care0112"});?>  


<?php if ($obj{"Preventive_Care0112"} == "3014F") { echo " -- Screening mammography results documented and reviewed.  <br>
	<font size=-3>(3014F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0112"} == "3014F:1P") { echo " -- Documentation of medical reason(s) for not performing a mammogram (i.e., women who had a bilateral mastectomy or two unilateral mastectomies).  <br>
	<font size=-3>(3014F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Preventive_Care0112"} == "3014F:1P") { echo " -- Screening mammography results were not documented and reviewed, reason not otherwise specified.  <br>
	<font size=-3>(3014F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0113 Colorectal Cancer Screening:
<li>  <?php echo stripslashes($obj{"Preventive_Care0113"});?>  


<?php if ($obj{"Preventive_Care0113"} == "3071F") { echo " -- Colorectal cancer screening results documented and reviewed.  <br>
	<font size=-3>(3071F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0113"} == "3071F:1P") { echo " -- Documentation of medical reason(s) for not performing a colorectal cancer screening (i.e., diagnosis of colorectal cancer or total colectomy).  <br>
	<font size=-3>(3071F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Preventive_Care0113"} == "3071F:8P") { echo " -- Colorectal cancer screening results were not documented and reviewed, reason not otherwise specified.  <br>
	<font size=-3>(3071F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0128 Preventive Care and Screening: Body Mass Index (BMI) Screening and Follow-Up Plan:
<li>  <?php echo stripslashes($obj{"Preventive_Care0128"});?>  


<?php if ($obj{"Preventive_Care0128"} == "G8420") { echo " -- BMI is documented within normal parameters and no follow-up plan is required.  <br>
	<font size=-3>(G8420) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0128"} == "G8417") { echo " -- BMI is documented above normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8417) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0128"} == "G8418") { echo " -- BMI is documented below normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8418) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0128"} == "G8421") { echo " -- BMI not documented and no reason is given.  <br>
	<font size=-3>(G8421) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0128"} == "G8419") { echo " -- BMI documented outside normal parameters, no follow-up plan documented, no reason given.  <br>
	<font size=-3>(G8419) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0134 Preventive Care and Screening: Screening for Clinical Depression and Follow-Up Plan:
<li>  <?php echo stripslashes($obj{"Preventive_Care0134"});?>  


<?php if ($obj{"Preventive_Care0134"} == "G8431") { echo " -- Screening for clinical depression is documented as being positive AND a follow-up plan is documented.  <br>
	<font size=-3>(G8431) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0134"} == "G8510") { echo " -- Screening for clinical depression is documented as negative, a follow-up plan is not required.  <br>
	<font size=-3>(G8510) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0134"} == "G8433") { echo " -- Screening for clinical depression not documented, documentation stating the patient is not eligible.  <br>
	<font size=-3>(G8433) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Preventive_Care0134"} == "G8940") { echo " -- Screening for clinical depression documented as positive, a follow-up plan not documented, documentation stating the patient is not eligible.  <br>
	<font size=-3>(G8940) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Preventive_Care0134"} == "G8432") { echo " -- Clinical depression screening not documented, reason not given.  <br>
	<font size=-3>(G8432) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0134"} == "G8511") { echo " -- Screening for clinical depression documented as positive, follow-up plan not documented, reason not given.  <br>
	<font size=-3>(G8511) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Preventive_Care0226"});?>  


<?php if ($obj{"Preventive_Care0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons).  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Preventive_Care0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0431 Preventive Care and Screening: Unhealthy Alcohol Use: Screening & Brief Counseling:
<li>  <?php echo stripslashes($obj{"Preventive_Care0431"});?>  


<?php if ($obj{"Preventive_Care0431"} == "G9621") { echo " -- Patient identified as an unhealthy alcohol user when screened for unhealthy alcohol use using a systematic screening method and received brief counseling.  <br>
	<font size=-3>(G9621) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0431"} == "G9622") { echo " -- Patient not identified as an unhealthy alcohol user when screened for unhealthy alcohol use using a systematic screening method.  <br>
	<font size=-3>(G9622) (Performance Met)</font>"; } ?>

<?php if ($obj{"Preventive_Care0431"} == "G9623") { echo " -- Documentation of medical reason(s) for not screening for unhealthy alcohol use (e.g., limited life expectancy, other medical reasons).  <br>
	<font size=-3>(G9623) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Preventive_Care0431"} == "G9624") { echo " -- Patient not screened for unhealthy alcohol screening using a systematic screening method OR patient did not receive brief counseling, reason not given.  <br>
	<font size=-3>(G9624) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
