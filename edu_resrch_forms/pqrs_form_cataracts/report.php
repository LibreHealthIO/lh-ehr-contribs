<?php
/**
 * PQRS ?Cataracts Group Direct Data Entry
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
function pqrs_form_?cataracts_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_?cataracts", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>?Cataracts Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"?Cataracts0130"});?>  


<?php if ($obj{"?Cataracts0130"} == "G8427") { echo " -- Current (or no) medications documented in the patient's medical record.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"?Cataracts0130"} == "G8430") { echo " -- Patient is not eligible.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion( (emergent or urgent situation)</font>"; } ?>

<?php if ($obj{"?Cataracts0130"} == "G8428") { echo " -- Current list of medications not documented, NOS.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0191 Cataracts: 20/40 or Better Visual Acuity within 90 Days Following Cataract Surgery:
<li>  <?php echo stripslashes($obj{"?Cataracts0191"});?>  


<?php if ($obj{"?Cataracts0191"} == "4175F") { echo " -- Best-corrected visual acuity achieved.  <br>
	<font size=-3>(4175F) (Performance Met)</font>"; } ?>

<?php if ($obj{"?Cataracts0191"} == "4175F:8P") { echo " -- Best-corrected visual acuity of 20/40 or better (distance or near) not achieved reason NOS.  <br>
	<font size=-3>(4175F:8P)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0192 Cataracts: Complications within 30 Days Following Cataract Surgery Requiring Additional Surgical Procedures:
<li>  <?php echo stripslashes($obj{"?Cataracts0192"});?>  


<?php if ($obj{"?Cataracts0192"} == "G8627") { echo " -- Surgical procedure performed within 30 days following cataract surgery for major complications.  <br>
	<font size=-3>(G8627) (Performance Met, INVERSE MEASURE) (eg, retained nuclear fragments, endophthalmitis, dislocated or wrong power IOL, retinal detachment or wound dehiscence).</font>"; } ?>

<?php if ($obj{"?Cataracts0192"} == "G8628") { echo " -- Surgical procedure NOT performed within 30 days following cataract surgery for major complications.  <br>
	<font size=-3>(G8628) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"?Cataracts0226"});?>  


<?php if ($obj{"?Cataracts0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"?Cataracts0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"?Cataracts0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use.  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)</font>"; } ?>

<?php if ($obj{"?Cataracts0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, NOS.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0303 Cataracts: Improvement in Patient’s Visual Function within 90 Days Following Cataract Surgery:
<li>  <?php echo stripslashes($obj{"?Cataracts0303"});?>  


<?php if ($obj{"?Cataracts0303"} == "G0913") { echo " -- Improvement in visual function achieved.  <br>
	<font size=-3>(G0913) (Performance Met)</font>"; } ?>

<?php if ($obj{"?Cataracts0303"} == "G0914") { echo " -- Patient care survey was not completed by patient.  <br>
	<font size=-3>(G0914) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"?Cataracts0303"} == "G0915") { echo " -- Improvement in visual function not achieved.  <br>
	<font size=-3>(G0915) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0304 Cataracts: Patient Satisfaction within 90 Days Following Cataract Surgery:
<li>  <?php echo stripslashes($obj{"?Cataracts0304"});?>  


<?php if ($obj{"?Cataracts0304"} == "G0916") { echo " -- Satisfaction with care achieved.  <br>
	<font size=-3>(G0916) (Performance Met)</font>"; } ?>

<?php if ($obj{"?Cataracts0304"} == "G0917") { echo " -- Patient care survey was not completed by patient.  <br>
	<font size=-3>(G0917) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"?Cataracts0304"} == "G0918") { echo " -- Satisfaction with care not achieved.  <br>
	<font size=-3>(G0918) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0388 Cataract Surgery with Intra-Operative Complications (Unplanned Rupture of Posterior Capsule Requiring Unplanned Vitrectomy):
<li>  <?php echo stripslashes($obj{"?Cataracts0388"});?>  


<?php if ($obj{"?Cataracts0388"} == "G9389") { echo " -- Unplanned rupture of the posterior capsule requiring vitrectomy during cataract surgery.  <br>
	<font size=-3>(G9389) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"?Cataracts0388"} == "G9390") { echo " -- No unplanned rupture of the posterior capsule requiring vitrectomy during cataract surgery.  <br>
	<font size=-3>(G9390) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>
Measure #0389 Cataract Surgery: Difference Between Planned and Final Refraction:
<li>  <?php echo stripslashes($obj{"?Cataracts0389"});?>  


<?php if ($obj{"?Cataracts0389"} == "G9519") { echo " -- Final refraction measure achieved.  <br>
	<font size=-3>(G9519) (Performance Met)</font>"; } ?>

<?php if ($obj{"?Cataracts0389"} == "G9520") { echo " -- Final refraction measure not achieved, reason NOS.  <br>
	<font size=-3>(G9520) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
