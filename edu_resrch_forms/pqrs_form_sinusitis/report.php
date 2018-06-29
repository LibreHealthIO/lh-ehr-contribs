<?php
/**
 * PQRS Sinusitis Group Direct Data Entry
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
function pqrs_form_sinusitis_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_sinusitis", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Sinusitis Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"Sinusitis0130"});?>  


<?php if ($obj{"Sinusitis0130"} == "G8427") { echo " -- Current medications documented.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"Sinusitis0130"} == "G8430") { echo " -- Eligible professional attests to documenting in the medical record the patient is not eligible for a current list of medications being obtained, updated, or reviewed by the eligible professional.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Sinusitis0130"} == "G8428") { echo " -- Current list of medications not documented as obtained, updated, or reviewed by the eligible professional, reason not given.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0131 Pain Assessment and Follow-Up:
<li>  <?php echo stripslashes($obj{"Sinusitis0131"});?>  


<?php if ($obj{"Sinusitis0131"} == "G8730") { echo " -- Pain assessment documented as positive using a standardized tool AND a follow-up plan is documented.  <br>
	<font size=-3>(G8730)(Performance Met)</font>"; } ?>

<?php if ($obj{"Sinusitis0131"} == "G8731") { echo " -- Pain assessment using a standardized tool is documented as negative, no follow-up plan required.  <br>
	<font size=-3>(G8731)(Performance Met)</font>"; } ?>

<?php if ($obj{"Sinusitis0131"} == "G8442") { echo " -- Pain assessment NOT documented as being performed, documentation the patient is not eligible for a pain assessment using a standardized tool.  <br>
	<font size=-3>(G8442) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Sinusitis0131"} == "G8939") { echo " -- Pain assessment documented as positive, follow-up plan not documented, documentation the patient is not eligible.  <br>
	<font size=-3>(G8939) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Sinusitis0131"} == "G8732") { echo " -- No documentation of pain assessment, reason not given.  <br>
	<font size=-3>(G8732) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Sinusitis0131"} == "G8509") { echo " -- Pain assessment documented as positive using a standardized tool, follow-up plan not documented, reason not given.  <br>
	<font size=-3>(G8509) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Sinusitis0226"});?>  


<?php if ($obj{"Sinusitis0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Sinusitis0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Sinusitis0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons).  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Sinusitis0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0331 Adult Sinusitis: Antibiotic Prescribed for Acute Sinusitis (Overuse):
<li>  <?php echo stripslashes($obj{"Sinusitis0331"});?>  


<?php if ($obj{"Sinusitis0331"} == "G9286") { echo " -- Antibiotic regimen prescribed within10 days after onset of symptoms.  <br>
	<font size=-3>(G9286) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Sinusitis0331"} == "G9505") { echo " -- Antibiotic regimen prescribed within 10 days after onset of symptoms for documented medical reason.  <br>
	<font size=-3>(G9505) (Other Performance Exclusion, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Sinusitis0331"} == "G9287") { echo " -- Antibiotic regimen not prescribed within 10 days after onset of symptoms.  <br>
	<font size=-3>(G9287)(Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>
Measure #0332 Adult Sinusitis: Appropriate Choice of Antibiotic: Amoxicillin With or Without Clavulanate Prescribed for Patients with Acute Bacterial Sinusitis (Appropriate Use):
<li>  <?php echo stripslashes($obj{"Sinusitis0332"});?>  


<?php if ($obj{"Sinusitis0332"} == "G9315") { echo " -- Amoxicillin, with or without clavulanate, prescribed as a first line antibiotic at the time of diagnosis  <br>
	<font size=-3>(G9315) (Performance Met)</font>"; } ?>

<?php if ($obj{"Sinusitis0332"} == "G9313") { echo " -- Amoxicillin, with or without clavulanate, not prescribed as first line antibiotic at the time of diagnosis for documented reason (e.g., cystic fibrosis, immotile cilia disorders, ciliary dyskinesia, immune deficiency, prior history of sinus surgery within the past 12 months, anatomic abnormalities, such as deviated nasal septum, resistant organisms, allergy to medication, recurrent sinusitis, chronic sinusitis, or other reasons)  <br>
	<font size=-3>(G9313) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Sinusitis0332"} == "G9314") { echo " -- Amoxicillin, with or without clavulanate, not prescribed as first line antibiotic at the time of diagnosis, reason not given  <br>
	<font size=-3>(G9314)(Performance Not Met)</font>"; } ?>
<br><br>
Measure #0333 Adult Sinusitis: Computerized Tomography (CT) for Acute Sinusitis (Overuse) NOTE: This is an INVERSE measure. A lower calculated performance rate for this measure indicates better clinical care or control. The “Performance Not Met” numerator option for this measure is the representation of the better clinical quality or control.:
<li>  <?php echo stripslashes($obj{"Sinusitis0333"});?>  


<?php if ($obj{"Sinusitis0333"} == "G9349") { echo " -- CT scan of the paranasal sinuses ordered at the time of diagnosis or received within 28 days after date of diagnosis  <br>
	<font size=-3>(G9349) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Sinusitis0333"} == "G9348") { echo " -- CT scan of the paranasal sinuses ordered at the time of diagnosis for documented reasons (e.g., persons with sinusitis symptoms lasting at least 7 to 10 days, antibiotic resistance, immunocompromised, recurrent sinusitis, acute frontal sinusitis, acute sphenoid sinusitis, periorbital cellulitis, or other medical).  <br>
	<font size=-3>(G9348) (Other Performance Exclusion, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Sinusitis0333"} == "G9350") { echo " -- CT scan of the paranasal sinuses not ordered at the time of diagnosis or received within 28 days after date of diagnosis  <br>
	<font size=-3>(G9350) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
