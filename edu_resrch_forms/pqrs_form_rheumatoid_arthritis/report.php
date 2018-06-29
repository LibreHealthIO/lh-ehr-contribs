<?php
/**
 * PQRS Rheumatoid Arthritis Group Direct Data Entry
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
function pqrs_form_rheumatoid_arthritis_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_rheumatoid_arthritis", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Rheumatoid Arthritis Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0108 Rheumatoid Arthritis (RA): Disease Modifying Anti-Rheumatic Drug (DMARD) Therapy:
<li>  <?php echo stripslashes($obj{"Rheumatoid_Arthritis0108"});?>  


<?php if ($obj{"Rheumatoid_Arthritis0108"} == "4187F") { echo " -- Disease modifying anti-rheumatic drug therapy prescribed, dispensed, or administered.  <br>
	<font size=-3>(4187F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0108"} == "4187F:1P") { echo " -- Documentation of medical reason(s) for not prescribing, dispensing, or administering disease modifying anti-rheumatic drug therapy (ie, patients with a diagnosis of HIV or pregnancy)  <br>
	<font size=-3>(4187F:1P)(Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0108"} == "4187F:8P") { echo " -- Disease modifying anti-rheumatic drug therapy was not prescribed, dispensed, or administered, reason not otherwise specified.  <br>
	<font size=-3>(4187F:8P)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0128 Preventive Care and Screening: Body Mass Index (BMI) Screening and Follow-Up Plan:
<li>  <?php echo stripslashes($obj{"Rheumatoid_Arthritis0128"});?>  


<?php if ($obj{"Rheumatoid_Arthritis0128"} == "G8420") { echo " -- BMI is documented within normal parameters and no follow-up plan is required.  <br>
	<font size=-3>(G8420) (Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0128"} == "G8417") { echo " -- BMI is documented above normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8417) (Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0128"} == "G8418") { echo " -- BMI is documented below normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8418) (Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0128"} == "G8421") { echo " -- BMI not documented and no reason is given.  <br>
	<font size=-3>(G8421) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0128"} == "G8419") { echo " -- BMI documented outside normal parameters, no follow-up plan documented, no reason given  <br>
	<font size=-3>(G8419) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0131 Pain Assessment and Follow-Up:
<li>  <?php echo stripslashes($obj{"Rheumatoid_Arthritis0131"});?>  


<?php if ($obj{"Rheumatoid_Arthritis0131"} == "G8730") { echo " -- Pain assessment documented as positive using a standardized tool AND a follow-up plan is documented.  <br>
	<font size=-3>(G8730)(Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0131"} == "G8731") { echo " -- Pain assessment using a standardized tool is documented as negative, no follow-up plan required.  <br>
	<font size=-3>(G8731)(Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0131"} == "G8442") { echo " -- Pain assessment NOT documented as being performed, documentation the patient is not eligible for a pain assessment using a standardized tool.  <br>
	<font size=-3>(G8442) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0131"} == "G8939") { echo " -- Pain assessment documented as positive, follow-up plan not documented, documentation the patient is not eligible.  <br>
	<font size=-3>(G8939) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0131"} == "G8732") { echo " -- No documentation of pain assessment, reason not given.  <br>
	<font size=-3>(G8732) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0131"} == "G8509") { echo " -- Pain assessment documented as positive using a standardized tool, follow-up plan not documented, reason not given.  <br>
	<font size=-3>(G8509) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0176 Rheumatoid Arthritis (RA): Tuberculosis Screening:
<li>  <?php echo stripslashes($obj{"Rheumatoid_Arthritis0176"});?>  


<?php if ($obj{"Rheumatoid_Arthritis0176"} == "3455F 4195F") { echo " -- TB screening performed and results interpreted within six months prior to initiation of first-time biologic disease modifying anti-rheumatic drug therapy for RA. AND Patient receiving first-time biologic disease modifying anti-rheumatic drug therapy for rheumatoid arthritis.  <br>
	<font size=-3>(3455F, 4195F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0176"} == "3455F:1P 4195F") { echo " -- Documentation of medical reason for not screening for TB or interpreting results (ie, patient positive for TB and documentation of past treatment; patient who has recently completed a course of anti-TB therapy). AND Patient receiving first-time biologic disease modifying anti-rheumatic drug therapy for rheumatoid arthritis.  <br>
	<font size=-3>(3455F:1P, 4195F)(Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0176"} == "4196F") { echo " -- Patient not receiving first-time biologic disease modifying anti-rheumatic drug therapy for rheumatoid arthritis.  <br>
	<font size=-3>(4196F)(Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0176"} == "3455F:8P 4195F") { echo " -- TB screening not performed or results not interpreted, reason not otherwise specified. AND Patient receiving first-time biologic disease modifying anti-rheumatic drug therapy for rheumatoid arthritis.  <br>
	<font size=-3>(3455F:8P, 4195F) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0177 Rheumatoid Arthritis (RA): Periodic Assessment of Disease Activity:
<li>  <?php echo stripslashes($obj{"Rheumatoid_Arthritis0177"});?>  


<?php if ($obj{"Rheumatoid_Arthritis0177"} == "3470F") { echo " -- Rheumatoid arthritis (RA) disease activity, low.  <br>
	<font size=-3>(3470F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0177"} == "3471F") { echo " -- Rheumatoid arthritis (RA) disease activity, moderate.  <br>
	<font size=-3>(3471F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0177"} == "3472F") { echo " -- Rheumatoid arthritis (RA) disease activity, high.  <br>
	<font size=-3>(3472F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0177"} == "3470F") { echo " -- Disease activity not assessed and classified, reason not otherwise specified.  <br>
	<font size=-3>(3470F:8P)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0178 Rheumatoid Arthritis (RA): Functional Status Assessment:
<li>  <?php echo stripslashes($obj{"Rheumatoid_Arthritis0178"});?>  


<?php if ($obj{"Rheumatoid_Arthritis0178"} == "1170F") { echo " -- Functional status assessed.  <br>
	<font size=-3>(1170F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0178"} == "1170F:8P") { echo " -- Functional status not assessed, reason not otherwise specified.  <br>
	<font size=-3>(1170F:8P)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0179 Rheumatoid Arthritis (RA): Assessment and Classification of Disease Prognosis:
<li>  <?php echo stripslashes($obj{"Rheumatoid_Arthritis0179"});?>  


<?php if ($obj{"Rheumatoid_Arthritis0179"} == "3475F") { echo " -- Disease prognosis for rheumatoid arthritis assessed, poor prognosis documented.  <br>
	<font size=-3>(3475F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0179"} == "3476F") { echo " -- Disease prognosis for rheumatoid arthritis assessed, good prognosis documented.  <br>
	<font size=-3>(3476F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0179"} == "3475F:8P") { echo " -- Disease prognosis for rheumatoid arthritis not assessed and classified, reason not otherwise specified.  <br>
	<font size=-3>(3475F:8P)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0180 Rheumatoid Arthritis (RA): Glucocorticoid Management:
<li>  <?php echo stripslashes($obj{"Rheumatoid_Arthritis0180"});?>  


<?php if ($obj{"Rheumatoid_Arthritis0180"} == "4192F") { echo " -- Patient not receiving glucocorticoid therapy.  <br>
	<font size=-3>(4192F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0180"} == "4193F") { echo " -- Patient receiving &lt; 10 mg daily prednisone (or equivalent), or RA activity is worsening, or glucocorticoid use is for less than 6 months.  <br>
	<font size=-3>(4193F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0180"} == "4194F 0540F") { echo " -- Patient receiving = 10 mg daily prednisone (or equivalent) for longer than 6 months, and improvement or no change in disease activity. AND Glucocorticoid Management Plan documented.  <br>
	<font size=-3>(4194F, 0540F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0180"} == "0540F:1P 4194F") { echo " -- Documentation of medical reason(s) for not documenting glucocorticoid management plan (ie, glucocorticoid prescription is for a medical condition other than RA). AND Patient receiving = 10 mg daily prednisone (or equivalent) for longer than 6 months, and improvement or no change in disease activity.  <br>
	<font size=-3>(0540F:1P, 4194F)(Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0180"} == "4194F:8P") { echo " -- Glucocorticoid dose was not documented, reason not otherwise specified.  <br>
	<font size=-3>(4194F:8P)(Performance Not Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0180"} == "0540F:8P 4194F") { echo " -- Glucocorticoid management plan not documented, reason not otherwise specified. AND Patient receiving = 10 mg daily prednisone (or equivalent) for longer than 6 months, and improvement or no change in disease activity.  <br>
	<font size=-3>(0540F:8P, 4194F)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0337 Tuberculosis Prevention for Psoriasis, Psoriatic Arthritis and Rheumatoid Arthritis Patients on a Biological Immune Response Modifier:
<li>  <?php echo stripslashes($obj{"Rheumatoid_Arthritis0337"});?>  


<?php if ($obj{"Rheumatoid_Arthritis0337"} == "G9359") { echo " -- Documentation of negative or managed positive TB screen with further evidence that TB is not active.  <br>
	<font size=-3>(G9359)(Performance Met)</font>"; } ?>

<?php if ($obj{"Rheumatoid_Arthritis0337"} == "G9360") { echo " -- No documentation of negative or managed positive TB screen.  <br>
	<font size=-3>(G9360)(Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
