<?php
/**
 * PQRS Diabetes Group Direct Data Entry
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
function pqrs_form_diabetes_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_diabetes", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Diabetes Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0001 Diabetes: Hemoglobin A1c Poor Control:
<li>  <?php echo stripslashes($obj{"Diabetes0001"});?>  


<?php if ($obj{"Diabetes0001"} == "3044F") { echo " -- Most recent hemoglobin A1c (HbA1c) level &lt; 7.0%  <br>
	<font size=-3>(3044F) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Diabetes0001"} == "3045F") { echo " -- Most recent hemoglobin A1c (HbA1c) level 7.0 to 9.0%  <br>
	<font size=-3>(3045F) (Performance Not Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Diabetes0001"} == "3046F") { echo " -- Most recent hemoglobin A1c level &gt; 9.0%  <br>
	<font size=-3>(3046F) (Performance Met, INVERSE MEASURE)</font>"; } ?>

<?php if ($obj{"Diabetes0001"} == "3046F:8P") { echo " -- Hemoglobin A1c level was not performed during the measurement period (12 months)  <br>
	<font size=-3>(3046F:8P) (Performance Met, INVERSE MEASURE)</font>"; } ?>
<br><br>
Measure #0110 Preventive Care and Screening: Influenza Immunization:
<li>  <?php echo stripslashes($obj{"Diabetes0110"});?>  


<?php if ($obj{"Diabetes0110"} == "G8482") { echo " -- Influenza immunization administered or previously received  <br>
	<font size=-3>(G8482) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetes0110"} == "G8483") { echo " -- Influenza immunization not administered, reason documented (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons)  <br>
	<font size=-3>(G8483) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetes0110"} == "G8484") { echo " -- Influenza immunization was not administered, reason not given  <br>
	<font size=-3>(G8484) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0117 Diabetes: Eye Exam:
<li>  <?php echo stripslashes($obj{"Diabetes0117"});?>  


<?php if ($obj{"Diabetes0117"} == "2022F") { echo " -- Dilated retinal eye exam with interpretation by an ophthalmologist or optometrist documented and reviewed  <br>
	<font size=-3>(2022F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetes0117"} == "2024F") { echo " -- Seven standard field stereoscopic photos with interpretation by an ophthalmologist or optometrist documented and reviewed  <br>
	<font size=-3>(2024F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetes0117"} == "2026F") { echo " -- Eye imaging validated to match diagnosis from seven standard field stereoscopic photos results documented and reviewed  <br>
	<font size=-3>(2026F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetes0117"} == "3072F") { echo " -- Low risk for retinopathy (no evidence of retinopathy in the prior year) &#8225  <br>
	<font size=-3>(3072F) (Performance Met)&lt;br&gt; &#8225 NOTE: This code can only be used if the encounter was during the measurement period because it indicates that the patient had &quot;no evidence of retinopathy in the prior year&quot;. This code definition indicates results were negative, therefore a result is not required.</font>"; } ?>

<?php if ($obj{"Diabetes0117"} == "2022F:8P") { echo " -- Dilated eye exam was not performed, reason not otherwise specified  <br>
	<font size=-3>(2022F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0119 Diabetes: Medical Attention for Nephropathy:
<li>  <?php echo stripslashes($obj{"Diabetes0119"});?>  


<?php if ($obj{"Diabetes0119"} == "3060F") { echo " -- Positive microalbuminuria test result documented and reviewed  <br>
	<font size=-3>(3060F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetes0119"} == "3061F") { echo " -- Negative microalbuminuria test result documented and reviewed  <br>
	<font size=-3>(3061F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetes0119"} == "3062F") { echo " -- Positive macroalbuminuria test result documented and reviewed  <br>
	<font size=-3>(3062F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetes0119"} == "3066F") { echo " -- Documentation of treatment for nephropathy (e.g. patient receiving dialysis, patient being treated for ESRD, CRF, ARF, or renal insufficiency, any visit to a nephrologist)  <br>
	<font size=-3>(3066F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetes0119"} == "G8506") { echo " -- Patient receiving angiotensin converting enzyme (ACE) inhibitor or angiotensin receptor blocker (ARB) therapy  <br>
	<font size=-3>(G8506) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetes0119"} == "3060F:8P") { echo " -- Nephropathy screening was not performed, reason not otherwise specified  <br>
	<font size=-3>(3060F with 8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0126 Diabetes Mellitus: Diabetic Foot and Ankle Care, Peripheral Neuropathy -- Neurological Evaluation:
<li>  <?php echo stripslashes($obj{"Diabetes0126"});?>  


<?php if ($obj{"Diabetes0126"} == "G8404") { echo " -- Lower extremity neurological exam performed and documented  <br>
	<font size=-3>(G8404) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetes0126"} == "G8405") { echo " -- Lower extremity neurological exam not performed  <br>
	<font size=-3>(G8405) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Diabetes0226"});?>  


<?php if ($obj{"Diabetes0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetes0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Diabetes0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons).  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Diabetes0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
