<?php
/**
 * PQRS Hepatitis C Group Direct Data Entry
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
function pqrs_form_hepatitis_c_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_hepatitis_c", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Hepatitis C Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0084 Hepatitis C: Ribonucleic Acid (RNA) Testing Before Initiating Treatment -- National Quality Strategy Domain:
<li>  <?php echo stripslashes($obj{"Hepatitis_C0084"});?>  


<?php if ($obj{"Hepatitis_C0084"} == "G9203 G9205") { echo " -- RNA testing for hepatitis C documented as performed within 12 months prior to initiation of antiviral treatment for hepatitis C, and patient starting antiviral treatment for hepatitis C during the measurement period.  <br>
	<font size=-3>(G9203, G9205)(Performance Met)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0084"} == "G9499") { echo " -- Patient did not start or is not receiving antiviral treatment for hepatitis C during the measurement period.  <br>
	<font size=-3>(G9499) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0084"} == "G9204 G9205") { echo " -- RNA testing for hepatitis C was not documented as performed within 12 months prior to initiation of antiviral treatment for hepatitis C, reason not given, and patient starting antiviral treatment for hepatitis C during the measurement period.  <br>
	<font size=-3>(G9204, G9205) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0085 Hepatitis C: Hepatitis C Virus (HCV) Genotype Testing Prior to Treatment National:
<li>  <?php echo stripslashes($obj{"Hepatitis_C0085"});?>  


<?php if ($obj{"Hepatitis_C0085"} == "G9207 G9206") { echo " -- Hepatitis C genotype testing documented as performed within 12 months prior to initiation of antiviral treatment for hepatitis C, and patient starting antiviral treatment for hepatitis C during the measurement period.  <br>
	<font size=-3>(G9207, G9206) (Performance Met)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0085"} == "G8458") { echo " -- Clinician documented that patient is not an eligible candidate for genotype testing; patient not receiving antiviral treatment for hepatitis C during the measurement period (e.g. genotype test done prior to the reporting period, patient declines, patient not a candidate for antiviral treatment).  <br>
	<font size=-3>(G8458) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0085"} == "G9208 G9206") { echo " -- Hepatitis C genotype testing was not documented as performed within 12 months prior to initiation of antiviral treatment for hepatitis C, reason not given, and patient starting antiviral treatment for hepatitis C during the measurement period.  <br>
	<font size=-3>(G9208, G9206) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0087 Hepatitis C: Hepatitis C Virus (HCV) Ribonucleic Acid (RNA) Testing Between 4–12 Weeks After Initiation of Treatment:
<li>  <?php echo stripslashes($obj{"Hepatitis_C0087"});?>  


<?php if ($obj{"Hepatitis_C0087"} == "G9209 G8461") { echo " -- Hepatitis C quantitative RNA testing documented as performed between 4-12 weeks after the initiation of antiviral treatment, and patient receiving antiviral treatment for hepatitis C during the measurement period.  <br>
	<font size=-3>(G9209, G8461) (Performance Met)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0087"} == "G9210 G8461") { echo " -- Hepatitis C quantitative RNA testing not performed between 4-12 weeks after the initiation of antiviral treatment for documented reason(s) (e.g., patients whose treatment was discontinued during the testing period prior to testing, other medical reasons, patient declined, other patient reasons), and patient receiving antiviral treatment for hepatitis C during the measurement period.  <br>
	<font size=-3>(G9210, G8461) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0087"} == "G8460") { echo " -- Clinician documented that patient is not an eligible candidate for quantitative RNA testing; patient not receiving antiviral treatment for Hepatitis C.  <br>
	<font size=-3>(G8460) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0087"} == "G9211 G8461") { echo " -- Hepatitis C quantitative RNA testing was not documented as performed between 4-12 weeks after the initiation of antiviral treatment, reason not given, patient receiving antiviral treatment for hepatitis C during the measurement period.  <br>
	<font size=-3>(G9211, G8461) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"Hepatitis_C0130"});?>  


<?php if ($obj{"Hepatitis_C0130"} == "G8427") { echo " -- Current medications documented.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0130"} == "G8430") { echo " -- Eligible professional attests to documenting in the medical record the patient is not eligible for a current list of medications being obtained, updated, or reviewed by the eligible professional.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0130"} == "G8428") { echo " -- Current list of medications not documented as obtained, updated, or reviewed by the eligible professional, reason not given.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0183 Hepatitis C: Hepatitis A Vaccination:
<li>  <?php echo stripslashes($obj{"Hepatitis_C0183"});?>  


<?php if ($obj{"Hepatitis_C0183"} == "4148F") { echo " -- Hepatitis A vaccine injection administered or previously received.  <br>
	<font size=-3>(4148F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0183"} == "3215F") { echo " -- Patient has documented immunity to hepatitis A.  <br>
	<font size=-3>(3215F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0183"} == "4148F:1P") { echo " -- Documentation of medical reason(s) for not administering at least one injection of hepatitis A vaccine (eg, allergy or intolerance to a known component of the vaccine, other medical reasons).  <br>
	<font size=-3>(4148F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0183"} == "4148F:2P") { echo " -- Documentation of patient reason(s) for not administering at least one injection of hepatitis A vaccine (eg, patient declined, insurance coverage, other patient reasons).  <br>
	<font size=-3>(4148F:2P) (Patient Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0183"} == "4148F:8P") { echo " -- Hepatitis A vaccine not received, reason not otherwise specified.  <br>
	<font size=-3>(4148F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Hepatitis_C0226"});?>  


<?php if ($obj{"Hepatitis_C0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons).  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0390 Hepatitis C: Discussion and Shared Decision Making Surrounding Treatment Options:
<li>  <?php echo stripslashes($obj{"Hepatitis_C0390"});?>  


<?php if ($obj{"Hepatitis_C0390"} == "G9399") { echo " -- Documentation of a discussion that includes all of the following: treatment choices appropriate to genotype, risks and benefits, evidence of effectiveness, and patient preferences toward the outcome of the treatment.  <br>
	<font size=-3>(G9399) (Performance Met)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0390"} == "G9400") { echo " -- Documentation reason(s) for not discussing treatment options. Medical reasons: Patient is not a candidate for treatment due to advanced physical or mental health comorbidity (including active substance use); currently receiving antiviral treatment; successful antiviral treatment (with sustained virologic response) prior to reporting period; other documented medical reasons. Patient reasons: Patient unable or unwilling to participate in the discussion or other patient reasons.  <br>
	<font size=-3>(G9400) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0390"} == "G9401") { echo " -- No documentation of a discussion that includes all of the following: treatment choices appropriate to genotype, risks and benefits, evidence of effectiveness, and patient preferences toward treatment.  <br>
	<font size=-3>(G9401) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0401 Hepatitis C: Screening for Hepatocellular Carcinoma (HCC) in Patients with Cirrhosis:
<li>  <?php echo stripslashes($obj{"Hepatitis_C0401"});?>  


<?php if ($obj{"Hepatitis_C0401"} == "G9455") { echo " -- Patient underwent abdominal imaging with ultrasound, contrast enhanced CT or contrast MRI for HCC.  <br>
	<font size=-3>(G9455) (Performance Met)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0401"} == "G9456") { echo " -- Documentation of medical or patient reason(s) for not ordering or performing screening for HCC. Medical reason: Comorbid medical conditions with expected survival &lt;5 years, hepatic decompensation and not a candidate for liver transplantation, or other medical reasons. Patient reasons: Patient declined or other patient reasons (e.g., cost of tests, time related to accessing testing equipment).  <br>
	<font size=-3>(G9456) (Other Performance Exclusion)</font>"; } ?>

<?php if ($obj{"Hepatitis_C0401"} == "G9457") { echo " -- Patient did not undergo abdominal imaging and did not have a documented reason for not undergoing abdominal imaging in the reporting period.  <br>
	<font size=-3>(G9457) (Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
