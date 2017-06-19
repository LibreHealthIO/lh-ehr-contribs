<?php
/**
 * PQRS Sleep Apnea Group Direct Data Entry
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
function pqrs_form_sleep_apnea_report( $pid, $encounter, $cols, $id) {

$obj = formFetch("pqrs_form_sleep_apnea", $id);
?>

<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>

<span class="title"><center><b>Sleep Apnea Group PQRS Measures</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>


<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>

<b><u>Purpose:</u></b><br>
<?php echo stripslashes($obj{"purpose"});?><br><br>
<br><br>
Measure #0128 Preventive Care and Screening: Body Mass Index (BMI) Screening and Follow-Up Plan:
<li>  <?php echo stripslashes($obj{"Sleep_Apnea0128"});?>  


<?php if ($obj{"Sleep_Apnea0128"} == "G8420") { echo " -- BMI is documented within normal parameters and no follow-up plan is required.  <br>
	<font size=-3>(G8420) (Performance Met)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0128"} == "G8417") { echo " -- BMI is documented above normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8417) (Performance Met)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0128"} == "G8418") { echo " -- BMI is documented below normal parameters and a follow-up plan is documented.  <br>
	<font size=-3>(G8418) (Performance Met)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0128"} == "G8421") { echo " -- BMI not documented and NOS.  <br>
	<font size=-3>(G8421) (Performance Not Met)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0128"} == "G8419") { echo " -- BMI documented outside normal parameters, no follow-up plan documented, NOS.  <br>
	<font size=-3>(G8419) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0130 Documentation of Current Medications in the Medical Record:
<li>  <?php echo stripslashes($obj{"Sleep_Apnea0130"});?>  


<?php if ($obj{"Sleep_Apnea0130"} == "G8427") { echo " -- Current (or no) medications documented in the patient's medical record.  <br>
	<font size=-3>(G8427) (Performance Met)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0130"} == "G8430") { echo " -- Patient is not eligible.  <br>
	<font size=-3>(G8430) (Other Performance Exclusion( (emergent or urgent situation)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0130"} == "G8428") { echo " -- Current list of medications not documented, NOS.  <br>
	<font size=-3>(G8428) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0226 Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention:
<li>  <?php echo stripslashes($obj{"Sleep_Apnea0226"});?>  


<?php if ($obj{"Sleep_Apnea0226"} == "4004F") { echo " -- Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user.  <br>
	<font size=-3>(4004F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0226"} == "1036F") { echo " -- Current tobacco non-user.  <br>
	<font size=-3>(1036F) (Performance Met)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0226"} == "4004F:1P") { echo " -- Documentation of medical reason(s) for not screening for tobacco use.  <br>
	<font size=-3>(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0226"} == "4004F:8P") { echo " -- Tobacco screening OR tobacco cessation intervention not performed, NOS.  <br>
	<font size=-3>(4004F:8P) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0276 Sleep Apnea: Assessment of Sleep Symptoms:
<li>  <?php echo stripslashes($obj{"Sleep_Apnea0276"});?>  


<?php if ($obj{"Sleep_Apnea0276"} == "G8839") { echo " -- Sleep apnea symptoms assessed.  <br>
	<font size=-3>(G8839) (Performance Met)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0276"} == "G8840") { echo " -- Documentation for not documenting an assessment of sleep symptoms.  <br>
	<font size=-3>(G8840) (Other Performance Exclusion) (eg, patient didn’t have initial daytime sleepiness, visited between initial testing and initiation of therapy).</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0276"} == "G8841") { echo " -- Sleep apnea symptoms not assessed, NOS.  <br>
	<font size=-3>(G8841) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0277 Sleep Apnea: Severity Assessment at Initial Diagnosis:
<li>  <?php echo stripslashes($obj{"Sleep_Apnea0277"});?>  


<?php if ($obj{"Sleep_Apnea0277"} == "G8842") { echo " -- AHI or RDI measured at the time of initial diagnosis.  <br>
	<font size=-3>(G8842) (Performance Met)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0277"} == "G8843") { echo " -- Documentation of reason(s) for not measuring an AHI or RDI at the time of initial diagnosis.  <br>
	<font size=-3>(G8843) (Other Performance Exclusion) (eg, psychiatric disease, dementia, patient declined, financial, insurance coverage, test ordered but not yet completed)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0277"} == "G8844") { echo " -- AHI or RDI not measured at the time of initial diagnosis, NOS.  <br>
	<font size=-3>(G8844) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0278 Sleep Apnea: Positive Airway Pressure Therapy Prescribed:
<li>  <?php echo stripslashes($obj{"Sleep_Apnea0278"});?>  


<?php if ($obj{"Sleep_Apnea0278"} == "G8845 G8846") { echo " -- Positive airway pressure therapy prescribed.  <br>
	<font size=-3>(G8845, G8846) (Performance Met)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0278"} == "G8848") { echo " -- Mild obstructive sleep apnea.  <br>
	<font size=-3>(G8848) (Other Performance Exclusion) (AHI or RDI of less than 15)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0278"} == "G8849 G8846") { echo " -- Documentation of reason(s) for not prescribing positive airway pressure therapy.  <br>
	<font size=-3>(G8849, G8846) (Other Performance Exclusion) (eg, patient unable to tolerate, alternative therapies used, patient declined, financial, insurance coverage)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0278"} == "G8850 G8846") { echo " -- Positive airway pressure therapy not prescribed, NOS.  <br>
	<font size=-3>(G8850, G8846) (Performance Not Met)</font>"; } ?>
<br><br>
Measure #0279 Sleep Apnea: Assessment of Adherence to Positive Airway Pressure Therapy:
<li>  <?php echo stripslashes($obj{"Sleep_Apnea0279"});?>  


<?php if ($obj{"Sleep_Apnea0279"} == "G8851 G8852") { echo " -- Measurement of adherence to positive airway pressure therapy, documented.  <br>
	<font size=-3>(G8851, G8852)(Performance Met)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0279"} == "G8853") { echo " -- Positive airway pressure therapy not prescribed.  <br>
	<font size=-3>(G8853)(Other Performance Exclusion).</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0279"} == "G8854 G8852") { echo " -- Documentation of reason(s) for not objectively measuring adherence.. AND Positive airway pressure therapy was prescribed.  <br>
	<font size=-3>(G8854, G8852)(Other Performance Exclusion) (eg, patient didn’t bring data from CPAP, therapy not yet initiated, not available on machine)</font>"; } ?>

<?php if ($obj{"Sleep_Apnea0279"} == "G8855 G8852") { echo " -- Measurement of adherence to positive airway pressure therapy not performed, NOS.  <br>
	<font size=-3>(G8855, G8852)(Performance Not Met)</font>"; } ?>
<br><br>

<b>Additional notes and recommendations:</b><br>
<?php echo stripslashes($obj{"recommendation"});}?>
</html>
