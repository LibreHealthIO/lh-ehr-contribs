<?php
/**
 * PQRS Coronary Artery Bypass Graft Group Direct Data Entry
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
function pqrs_form_coronary_artery_bypass_graft_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_coronary_artery_bypass_graft", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Coronary Artery Bypass Graft Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0043 Coronary Artery Bypass Graft (CABG): Use of Internal Mammary Artery (IMA) in Patients with Isolated CABG Surgery:
<li>  <?php echo stripslashes($obj{"Coronary_Artery_Bypass_Graft0043"});?>  


<?php if ($obj{"Coronary_Artery_Bypass_Graft0043"} == "4110F") { echo " -- IMA graft performed for primary, isolated CABG.  <br>
	<font size=-3>(4110F)(Performance Met)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Bypass_Graft0043"} == "4110F:1P") { echo " -- Documentation of medical reason(s) for not performing an IMA graft for primary, isolated CABG procedure.  <br>
	<font size=-3>(4110F:1P) (Medical Performance Exclusion) (eg, subclavian stenosis, previous cardiac or thoracic surgery, previous mediastinal radiation, emergent or salvage procedure, no bypassable left anterior descending artery disease)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Bypass_Graft0043"} == "4110F:8P") { echo " -- IMA graft not performed for primary, isolated CABG procedure, reason NOS.  <br>
	<font size=-3>(4110F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0044 Coronary Artery Bypass Graft (CABG): Preoperative Beta-Blocker in Patients with Isolated CABG Surgery:
<li>  <?php echo stripslashes($obj{"Coronary_Artery_Bypass_Graft0044"});?>  


<?php if ($obj{"Coronary_Artery_Bypass_Graft0044"} == "4115F") { echo " -- Beta blocker administered.  <br>
	<font size=-3>(4115F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Bypass_Graft0044"} == "4115F:1P") { echo " -- Documentation of medical reason(s) for not administering beta blocker.  <br>
	<font size=-3>(4115F:1P) (Medical Performance Exclusion) (eg, not indicated, contraindicated, other medical reason)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Bypass_Graft0044"} == "4115F:8P") { echo " -- Beta blocker not administered, reason NOS.  <br>
	<font size=-3>(4115F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0164 Coronary Artery Bypass Graft (CABG): Prolonged Intubation:
<li>  <?php echo stripslashes($obj{"Coronary_Artery_Bypass_Graft0164"});?>  


<?php if ($obj{"Coronary_Artery_Bypass_Graft0164"} == "G8569") { echo " -- Prolonged postoperative intubation (&gt; 24 hrs) required.  <br>
	<font size=-3>(G8569) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Bypass_Graft0164"} == "G8570") { echo " -- Prolonged postoperative intubation (&gt; 24 hrs) not required.  <br>
	<font size=-3>(G8570) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>
Measure #0165 Coronary Artery Bypass Graft (CABG): Deep Sternal Wound Infection Rate:
<li>  <?php echo stripslashes($obj{"Coronary_Artery_Bypass_Graft0165"});?>  


<?php if ($obj{"Coronary_Artery_Bypass_Graft0165"} == "G8571") { echo " -- Development of deep sternal wound infection/mediastinitis.  <br>
	<font size=-3>(G8571) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Bypass_Graft0165"} == "G8572") { echo " -- No deep sternal wound infection/mediastinitis.  <br>
	<font size=-3>(G8572) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>
Measure #0166 Coronary Artery Bypass Graft (CABG): Stroke:
<li>  <?php echo stripslashes($obj{"Coronary_Artery_Bypass_Graft0166"});?>  


<?php if ($obj{"Coronary_Artery_Bypass_Graft0166"} == "G8573") { echo " -- Stroke following isolated CABG surgery.  <br>
	<font size=-3>(G8573) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Bypass_Graft0166"} == "G8574") { echo " -- No stroke following isolated CABG surgery.  <br>
	<font size=-3>(G8574) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>
Measure #0167 Coronary Artery Bypass Graft (CABG): Postoperative Renal Failure:
<li>  <?php echo stripslashes($obj{"Coronary_Artery_Bypass_Graft0167"});?>  


<?php if ($obj{"Coronary_Artery_Bypass_Graft0167"} == "G8575") { echo " -- Developed postoperative renal failure or required dialysis.  <br>
	<font size=-3>(G8575) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Bypass_Graft0167"} == "G8576") { echo " -- No postoperative renal failure/dialysis not required.  <br>
	<font size=-3>(G8576) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>
Measure #0168 Coronary Artery Bypass Graft (CABG): Surgical Re-Exploration:
<li>  <?php echo stripslashes($obj{"Coronary_Artery_Bypass_Graft0168"});?>  


<?php if ($obj{"Coronary_Artery_Bypass_Graft0168"} == "G8577") { echo " -- Re-exploration required due to mediastinal bleeding.  <br>
	<font size=-3>(G8577) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Coronary_Artery_Bypass_Graft0168"} == "G8578") { echo " -- Re-exploration not required due to mediastinal bleeding.  <br>
	<font size=-3>(G8578) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
