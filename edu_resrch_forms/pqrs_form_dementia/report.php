<?php
/**
 * PQRS Dementia Group Direct Data Entry
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
function pqrs_form_dementia_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_dementia", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Dementia Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0047 Care Plan:
<li>  <?php echo stripslashes($obj{"Dementia0047"});?>  


<?php if ($obj{"Dementia0047"} == "1123F") { echo " -- Advanced care planning discussed and documented.  <br>
	<font size=-3>(1123F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0047"} == "1124F") { echo " -- Advanced care planning discussed and documented; patient did not wish or was not able to name a surrogate decision marker or provide an advance care plan, or patient’s cultural and/or spiritual beliefs preclude a discussion of advance care planning.  <br>
	<font size=-3>(1124F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0047"} == "1123F:8P") { echo " -- Advance care planning not documented, reason not otherwise specified.  <br>
	<font size=-3>(1123F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0134 Preventive Care and Screening: Screening for Clinical Depression and Follow-Up Plan:
<li>  <?php echo stripslashes($obj{"Dementia0134"});?>  


<?php if ($obj{"Dementia0134"} == "G8431") { echo " -- Screening for clinical depression is documented as being positive AND a follow-up plan is documented.  <br>
	<font size=-3>(G8431) (Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0134"} == "G8510") { echo " -- Screening for clinical depression is documented as negative, a follow-up plan is not required.  <br>
	<font size=-3>(G8510) (Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0134"} == "G8433") { echo " -- Screening for clinical depression not documented, documentation stating the patient is not eligible.  <br>
	<font size=-3>(G8433) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Dementia0134"} == "G8940") { echo " -- Screening for clinical depression documented as positive, a follow-up plan not documented, documentation stating the patient is not eligible.  <br>
	<font size=-3>(G8940) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Dementia0134"} == "G8432") { echo " -- Clinical depression screening not documented, reason not given  <br>
	<font size=-3>(G8432) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Dementia0134"} == "G8511") { echo " -- Screening for clinical depression documented as positive, follow-up plan not documented, reason not given  <br>
	<font size=-3>(G8511) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0280 Dementia: Staging of Dementia:
<li>  <?php echo stripslashes($obj{"Dementia0280"});?>  


<?php if ($obj{"Dementia0280"} == "1490F") { echo " -- Dementia severity classified, mild.  <br>
	<font size=-3>(1490F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0280"} == "1491F") { echo " -- Dementia severity classified, moderate.  <br>
	<font size=-3>(1491F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0280"} == "1493F") { echo " -- Dementia severity classified, severe.  <br>
	<font size=-3>(1493F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0280"} == "1490F:8P") { echo " -- Dementia severity not classified, reason not otherwise specified.  <br>
	<font size=-3>(1490F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0281 Dementia: Cognitive Assessment:
<li>  <?php echo stripslashes($obj{"Dementia0281"});?>  


<?php if ($obj{"Dementia0281"} == "1494F") { echo " -- Cognition assessed and reviewed.  <br>
	<font size=-3>(1494F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0281"} == "1494F:1P") { echo " -- Documentation of medical reason(s) for not assessing cognition (eg, patient with very advanced stage dementia, other medical reason).  <br>
	<font size=-3>(1494F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Dementia0281"} == "1494F:2P") { echo " -- Documentation of patient reason(s) for not assessing cognition.  <br>
	<font size=-3>(1494F:2P) (Patient Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Dementia0281"} == "1494F:8P") { echo " -- Cognition not assessed and reviewed, reason not otherwise specified.  <br>
	<font size=-3>(1494F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0282 Dementia: Functional Status Assessment:
<li>  <?php echo stripslashes($obj{"Dementia0282"});?>  


<?php if ($obj{"Dementia0282"} == "1175F") { echo " -- Functional status for dementia assessed and results reviewed.  <br>
	<font size=-3>(1175F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0282"} == "1175F:1P") { echo " -- Documentation of medical reason(s) for not assessing and reviewing functional status for dementia (eg, patient is severely impaired and caregiver knowledge is limited, other medical reason).  <br>
	<font size=-3>(1175F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Dementia0282"} == "1175F:8P") { echo " -- Functional status for dementia not assessed and results not reviewed, reason not otherwise specified.  <br>
	<font size=-3>(1175F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0283 Dementia: Neuropsychiatric Symptom Assessment:
<li>  <?php echo stripslashes($obj{"Dementia0283"});?>  


<?php if ($obj{"Dementia0283"} == "1181F") { echo " -- Neuropsychiatric symptoms assessed and results reviewed.  <br>
	<font size=-3>(1181F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0283"} == "1181F:8P") { echo " -- Neuropsychiatric symptoms not assessed and results not reviewed, reason NOS.  <br>
	<font size=-3>(1181F:8P) (Performance Met)</font>"; } ?>
<br><br>
Measure #0284 Dementia: Management of Neuropsychiatric Symptoms:
<li>  <?php echo stripslashes($obj{"Dementia0284"});?>  


<?php if ($obj{"Dementia0284"} == "G8947 4525F") { echo " -- One or more neuropsychiatric symptoms and neuropsychiatric intervention ordered.  <br>
	<font size=-3>(G8947, 4525F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0284"} == "G8947 4526F") { echo " -- One or more neuropsychiatric symptoms and neuropsychiatric intervention received.  <br>
	<font size=-3>(G8947 4526F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0284"} == "G8948") { echo " -- No neuropsychiatric symptoms.  <br>
	<font size=-3>(G8948) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Dementia0284"} == "G8947 4525F:8P") { echo " -- One or more neuropsychiatric symptoms and neuropsychiatric intervention not ordered, reason NOS.  <br>
	<font size=-3>(G8947, 4525F:8P) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Dementia0284"} == "4526F:8P") { echo " -- Neuropsychiatric intervention not received, reason not otherwise specified.  <br>
	<font size=-3>(4526F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0286 Dementia: Counseling Regarding Safety Concerns:
<li>  <?php echo stripslashes($obj{"Dementia0286"});?>  


<?php if ($obj{"Dementia0286"} == "6101F") { echo " -- Safety counseling for dementia provided.  <br>
	<font size=-3>(6101F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0286"} == "6102F") { echo " -- Safety counseling for dementia ordered.  <br>
	<font size=-3>(6102F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0286"} == "6101F:1P") { echo " -- Documentation of medical reason(s) for not providing counseling regarding safety concerns (eg, patient in palliative care, other medical reason).  <br>
	<font size=-3>(6101F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Dementia0286"} == "6102F:1P") { echo " -- Documentation of medical reason(s) for not ordering safety counseling (eg, patient in palliative care, other medical reason).  <br>
	<font size=-3>(6102F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Dementia0286"} == "6101F:8P") { echo " -- Safety counseling for dementia not provided, reason NOS.  <br>
	<font size=-3>6101F:8P) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Dementia0286"} == "6102F:8P") { echo " -- Safety counseling for dementia not ordered, reason NOS.  <br>
	<font size=-3>(6102F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0287 Dementia: Counseling Regarding Risks of Driving:
<li>  <?php echo stripslashes($obj{"Dementia0287"});?>  


<?php if ($obj{"Dementia0287"} == "6110F") { echo " -- Counseling provided regarding risks of driving and the alternatives to driving.  <br>
	<font size=-3>(6110F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0287"} == "6110F:1P") { echo " -- Documentation of medical reason(s) for not counseling regarding the risks of driving (eg, patient is no longer driving, other medical reason).  <br>
	<font size=-3>(6110F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Dementia0287"} == "6110F:8P") { echo " -- Counseling regarding risks of driving and alternatives to driving not performed, reason NOS.  <br>
	<font size=-3>(6110F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0288 Dementia: Caregiver Education and Support:
<li>  <?php echo stripslashes($obj{"Dementia0288"});?>  


<?php if ($obj{"Dementia0288"} == "4322F") { echo " -- Caregiver provided with education and referred to additional resources for support.  <br>
	<font size=-3>(4322F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Dementia0288"} == "4322F:1P") { echo " -- Documentation of medical reason(s) for not providing the caregiver with education or referring to additional sources for support (eg, patient does not have a caregiver, other medical reason).  <br>
	<font size=-3>(4322F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Dementia0288"} == "4322F:8P") { echo " -- Caregiver not provided with education and not referred to additional resources for support, reason NOS.  <br>
	<font size=-3>(4322F:8P) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
