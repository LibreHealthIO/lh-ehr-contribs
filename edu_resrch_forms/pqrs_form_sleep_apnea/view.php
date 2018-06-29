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
require_once($GLOBALS['fileroot']."/library/acl.inc");
?>
<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>
<?php
include_once("$srcdir/api.inc");

$obj = formFetch("pqrs_form_sleep_apnea", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_sleep_apnea/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Sleep Apnea Quality Reporting</b></center></span><br><br>
<center>
<?php if($obj{"finalize"}!="on" OR acl_check('admin', 'super') ){?>
<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[Don't Save Changes]</a><br>
 <input type=checkbox name='finalize' <?php if ($obj{"finalize"} == "on") {echo "checked";};?>>&nbsp;<b>Check here to finalize this note and add CPT2 codes to fee sheet:</b><br>
 <?php }else{
	  echo"This form has been finalized and may not be edited!<br>";?>
 <a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[RETURN TO ENCOUNTER]</a>
 <?php }?>
 </center>
<br>

<table>
<?php $res = sqlStatement("SELECT fname,mname,lname,DOB FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res); ?>

<tr>	<td>
<b><u>Client and Service Information</u></b><br><br>
<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?> 
</td>	</tr>

<tr>	<td>	<br>
<b><u>Purpose of Form</u></b><br>
<textarea cols=120 rows=3 wrap=virtual name="purpose" ><?php  echo stripslashes($obj{"purpose"});?></textarea>
<br><br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0128 
	 <a target="_blank" href="#" title="(NQF #0421)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Body Mass Index (BMI) Screening and Follow-Up Plan 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health NOTE: Normal parameters: Age 65 years and older BMI &ge; 23 and &lt; 30 kg/m2 Age 18 - 64 years BMI &ge; 18.5 and &lt; 25 kg/m2."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Within 6 months: Was height and weight measured and recorded and, indicated, was a follow-up plan documented? 
	 <a target="_blank" href="#" title="Ineligiblility: Patient is receiving palliative care, is pregnant, refuses BMI measurement, and any other reason documented in the medical record by the provider why BMI measurement was not appropriate."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Sleep_Apnea0128" value="G8420" <?php if ($obj{"Sleep_Apnea0128"} == "G8420") { echo 'checked=checked'; } ?> > BMI is documented within normal parameters and no follow-up plan is required. 
	 <a target="_blank" href="#" title="(G8420) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0128" value="G8417" <?php if ($obj{"Sleep_Apnea0128"} == "G8417") { echo 'checked=checked'; } ?> > BMI is documented above normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8417) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0128" value="G8418" <?php if ($obj{"Sleep_Apnea0128"} == "G8418") { echo 'checked=checked'; } ?> > BMI is documented below normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8418) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0128" value="G8421" <?php if ($obj{"Sleep_Apnea0128"} == "G8421") { echo 'checked=checked'; } ?> > BMI not documented and NOS. 
	 <a target="_blank" href="#" title="(G8421) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0128" value="G8419" <?php if ($obj{"Sleep_Apnea0128"} == "G8419") { echo 'checked=checked'; } ?> > BMI documented outside normal parameters, no follow-up plan documented, NOS. 
	 <a target="_blank" href="#" title="(G8419) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0130 
	 <a target="_blank" href="#" title="(NQF #0419)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Documentation of Current Medications in the Medical Record 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Are current medications documented in the patient's medical record? 
	 <a target="_blank" href="#" title="Patient’s medications obtained, updated, or reviewed, and documented."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Sleep_Apnea0130" value="G8427" <?php if ($obj{"Sleep_Apnea0130"} == "G8427") { echo 'checked=checked'; } ?> > Current (or no) medications documented in the patient's medical record. 
	 <a target="_blank" href="#" title="(G8427) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0130" value="G8430" <?php if ($obj{"Sleep_Apnea0130"} == "G8430") { echo 'checked=checked'; } ?> > Patient is not eligible. 
	 <a target="_blank" href="#" title="(G8430) (Other Performance Exclusion( (emergent or urgent situation)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0130" value="G8428" <?php if ($obj{"Sleep_Apnea0130"} == "G8428") { echo 'checked=checked'; } ?> > Current list of medications not documented, NOS. 
	 <a target="_blank" href="#" title="(G8428) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0226 
	 <a target="_blank" href="#" title="(NQF #0028)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community / Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Within the last 12 months: 
	 
	<p></b>


	<input type="radio" name="Sleep_Apnea0226" value="4004F" <?php if ($obj{"Sleep_Apnea0226"} == "4004F") { echo 'checked=checked'; } ?> > Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0226" value="1036F" <?php if ($obj{"Sleep_Apnea0226"} == "1036F") { echo 'checked=checked'; } ?> > Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0226" value="4004F:1P" <?php if ($obj{"Sleep_Apnea0226"} == "4004F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not screening for tobacco use. 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0226" value="4004F:8P" <?php if ($obj{"Sleep_Apnea0226"} == "4004F:8P") { echo 'checked=checked'; } ?> > Tobacco screening OR tobacco cessation intervention not performed, NOS. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0276 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Sleep Apnea: Assessment of Sleep Symptoms 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was documentation of an assessment of sleep symptoms performed for patients with a diagnosis of obstructive sleep apnea? 
	 <a target="_blank" href="#" title="Assessment including presence or absence of snoring and daytime sleepiness."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Sleep_Apnea0276" value="G8839" <?php if ($obj{"Sleep_Apnea0276"} == "G8839") { echo 'checked=checked'; } ?> > Sleep apnea symptoms assessed. 
	 <a target="_blank" href="#" title="(G8839) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0276" value="G8840" <?php if ($obj{"Sleep_Apnea0276"} == "G8840") { echo 'checked=checked'; } ?> > Documentation for not documenting an assessment of sleep symptoms. 
	 <a target="_blank" href="#" title="(G8840) (Other Performance Exclusion) (eg, patient didn’t have initial daytime sleepiness, visited between initial testing and initiation of therapy)."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0276" value="G8841" <?php if ($obj{"Sleep_Apnea0276"} == "G8841") { echo 'checked=checked'; } ?> > Sleep apnea symptoms not assessed, NOS. 
	 <a target="_blank" href="#" title="(G8841) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0277 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Sleep Apnea: Severity Assessment at Initial Diagnosis 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient have an apnea hypopnea index (AHI) or a respiratory disturbance index (RDI) measured at the time of initial diagnosis? 
	 
	<p></b>


	<input type="radio" name="Sleep_Apnea0277" value="G8842" <?php if ($obj{"Sleep_Apnea0277"} == "G8842") { echo 'checked=checked'; } ?> > AHI or RDI measured at the time of initial diagnosis. 
	 <a target="_blank" href="#" title="(G8842) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0277" value="G8843" <?php if ($obj{"Sleep_Apnea0277"} == "G8843") { echo 'checked=checked'; } ?> > Documentation of reason(s) for not measuring an AHI or RDI at the time of initial diagnosis. 
	 <a target="_blank" href="#" title="(G8843) (Other Performance Exclusion) (eg, psychiatric disease, dementia, patient declined, financial, insurance coverage, test ordered but not yet completed)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0277" value="G8844" <?php if ($obj{"Sleep_Apnea0277"} == "G8844") { echo 'checked=checked'; } ?> > AHI or RDI not measured at the time of initial diagnosis, NOS. 
	 <a target="_blank" href="#" title="(G8844) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0278 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Sleep Apnea: Positive Airway Pressure Therapy Prescribed 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient with moderate or severe obstructive sleep apnea prescribed with positive airway pressure therapy? 
	 <a target="_blank" href="#" title="Moderate or severe obstructive sleep apnea (AHI or RDI of 15 or greater)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Sleep_Apnea0278" value="G8845 G8846" <?php if ($obj{"Sleep_Apnea0278"} == "G8845 G8846") { echo 'checked=checked'; } ?> > Positive airway pressure therapy prescribed. 
	 <a target="_blank" href="#" title="(G8845, G8846) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0278" value="G8848" <?php if ($obj{"Sleep_Apnea0278"} == "G8848") { echo 'checked=checked'; } ?> > Mild obstructive sleep apnea. 
	 <a target="_blank" href="#" title="(G8848) (Other Performance Exclusion) (AHI or RDI of less than 15)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0278" value="G8849 G8846" <?php if ($obj{"Sleep_Apnea0278"} == "G8849 G8846") { echo 'checked=checked'; } ?> > Documentation of reason(s) for not prescribing positive airway pressure therapy. 
	 <a target="_blank" href="#" title="(G8849, G8846) (Other Performance Exclusion) (eg, patient unable to tolerate, alternative therapies used, patient declined, financial, insurance coverage)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0278" value="G8850 G8846" <?php if ($obj{"Sleep_Apnea0278"} == "G8850 G8846") { echo 'checked=checked'; } ?> > Positive airway pressure therapy not prescribed, NOS. 
	 <a target="_blank" href="#" title="(G8850, G8846) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0279 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Sleep Apnea: Assessment of Adherence to Positive Airway Pressure Therapy 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient adherence to positive airway pressure therapy objectively measured? 
	 
	<p></b>


	<input type="radio" name="Sleep_Apnea0279" value="G8851 G8852" <?php if ($obj{"Sleep_Apnea0279"} == "G8851 G8852") { echo 'checked=checked'; } ?> > Measurement of adherence to positive airway pressure therapy, documented. 
	 <a target="_blank" href="#" title="(G8851, G8852)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0279" value="G8853" <?php if ($obj{"Sleep_Apnea0279"} == "G8853") { echo 'checked=checked'; } ?> > Positive airway pressure therapy not prescribed. 
	 <a target="_blank" href="#" title="(G8853)(Other Performance Exclusion)."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0279" value="G8854 G8852" <?php if ($obj{"Sleep_Apnea0279"} == "G8854 G8852") { echo 'checked=checked'; } ?> > Documentation of reason(s) for not objectively measuring adherence.. AND Positive airway pressure therapy was prescribed. 
	 <a target="_blank" href="#" title="(G8854, G8852)(Other Performance Exclusion) (eg, patient didn’t bring data from CPAP, therapy not yet initiated, not available on machine)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Sleep_Apnea0279" value="G8855 G8852" <?php if ($obj{"Sleep_Apnea0279"} == "G8855 G8852") { echo 'checked=checked'; } ?> > Measurement of adherence to positive airway pressure therapy not performed, NOS. 
	 <a target="_blank" href="#" title="(G8855, G8852)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

	<tr>	<td>
		<b>Additional notes and recommendations:</b><br>
		<textarea cols=83 rows=1 wrap=virtual  name="recommendation" ><?php echo stripslashes($obj{"recommendation"});?></textarea>
	</td>	</tr>
</table>
<br><br>

<center>
<?php if($obj{"finalize"}!="on" OR acl_check('admin', 'super') ) {?>
<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[Don't Save Changes]</a><br>
 <b>You must check the Finalize box at the top of the form to prevent future editing.</b><br>
 <?php }else{echo"This form has been finalized and may not be edited!<br>";?>
 <a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[RETURN TO ENCOUNTER]</a>
 <?php }?>
 </center>
</form>
<?php
formFooter();
?>
