<?php
/**
 * PQRS Diabetic Retinopathy Group Direct Data Entry
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

$obj = formFetch("pqrs_form_diabetic_retinopathy", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_diabetic_retinopathy/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Diabetic Retinopathy Quality Reporting</b></center></span><br><br>
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
	Measure #0001 
	 <a target="_blank" href="#" title="(NQF 0059)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Diabetes: Hemoglobin A1c Poor Control 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical CarenThis is an INVERSE MEASURE: it is desired that performance NOT be met."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: What was the patient's most recent hemoglobin A1c level? 
	 
	<p></b>


	<input type="radio" name="Diabetic_Retinopathy0001" value="3044F" <?php if ($obj{"Diabetic_Retinopathy0001"} == "3044F") { echo 'checked=checked'; } ?> > Most recent hemoglobin A1c (HbA1c) level &lt; 7.0% 
	 <a target="_blank" href="#" title="(3044F) (Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0001" value="3045F" <?php if ($obj{"Diabetic_Retinopathy0001"} == "3045F") { echo 'checked=checked'; } ?> > Most recent hemoglobin A1c (HbA1c) level 7.0 to 9.0% 
	 <a target="_blank" href="#" title="(3045F) (Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0001" value="3046F" <?php if ($obj{"Diabetic_Retinopathy0001"} == "3046F") { echo 'checked=checked'; } ?> > Most recent hemoglobin A1c level &gt; 9.0% 
	 <a target="_blank" href="#" title="(3046F) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0001" value="3046F:8P" <?php if ($obj{"Diabetic_Retinopathy0001"} == "3046F:8P") { echo 'checked=checked'; } ?> > Hemoglobin A1c level was not performed during the measurement period (12 months) 
	 <a target="_blank" href="#" title="(3046F:8P) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0018 
	 <a target="_blank" href="#" title="(NQF #0088)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Diabetic Retinopathy: Documentation of Presence or Absence of Macular Edema and Level Care of Severity of Retinopathy 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient have a dialated macular or fundus exam performed including documentation of retinopathy and macular edema? 
	 
	<p></b>


	<input type="radio" name="Diabetic_Retinopathy0018" value="2021F" <?php if ($obj{"Diabetic_Retinopathy0018"} == "2021F") { echo 'checked=checked'; } ?> > Dilated macular or fundus exam performed, including documentation of the presence or absence of macular edema and level of severity of retinopathy. 
	 <a target="_blank" href="#" title="(2021F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0018" value="2021F:1P" <?php if ($obj{"Diabetic_Retinopathy0018"} == "2021F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not performing a dilated macular or fundus examination. 
	 <a target="_blank" href="#" title="(2021F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0018" value="2021F:2P" <?php if ($obj{"Diabetic_Retinopathy0018"} == "2021F:2P") { echo 'checked=checked'; } ?> > Documentation of patient reason(s) for not performing a dilated macular or fundus examination. 
	 <a target="_blank" href="#" title="(2021F:2P) (Patient Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0018" value="2021F:8P" <?php if ($obj{"Diabetic_Retinopathy0018"} == "2021F:8P") { echo 'checked=checked'; } ?> > Dilated macular or fundus exam was not performed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(2021F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0019 
	 <a target="_blank" href="#" title="(NQF #0089)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Diabetic Retinopathy: Communication with the Physician Managing Ongoing Diabetes Care 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Were the patient's results for dilated macular or fundus exam communicated to the physician managing the patient's diabetes care? 
	 
	<p></b>


	<input type="radio" name="Diabetic_Retinopathy0019" value="5010F G8397" <?php if ($obj{"Diabetic_Retinopathy0019"} == "5010F G8397") { echo 'checked=checked'; } ?> > Findings of dilated macular or fundus exam communicated to the physician managing the diabetes care.\Dilated macular or fundus exam performed, including documentation of the presence or absence of macular edema and level of severity of retinopathy. 
	 <a target="_blank" href="#" title="(5010F, G8397) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0019" value="5010F:1P" <?php if ($obj{"Diabetic_Retinopathy0019"} == "5010F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not communicating the findings of the dilated macular or fundus exam to the physician. 
	 <a target="_blank" href="#" title="(5010F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0019" value="5010F:2P G8397" <?php if ($obj{"Diabetic_Retinopathy0019"} == "5010F:2P G8397") { echo 'checked=checked'; } ?> > Documentation of patient reason(s) for not communicating the findings to the physician. Dilated macular or fundus exam performed, including documentation of the presence or absence of macular edema AND level of severity of retinopathy. 
	 <a target="_blank" href="#" title="(5010F:2P, G8397) (Patient Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0019" value="G8398" <?php if ($obj{"Diabetic_Retinopathy0019"} == "G8398") { echo 'checked=checked'; } ?> > Dilated macular or fundus exam not performed. 
	 <a target="_blank" href="#" title="(G8398) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0019" value="5010F G8397" <?php if ($obj{"Diabetic_Retinopathy0019"} == "5010F G8397") { echo 'checked=checked'; } ?> > Findings of dilated macular or fundus exam were not communicated to the physician, reason NOS. Dilated macular or fundus exam performed, including documentation of the presence or absence of macular edema AND level of severity of retinopathy. 
	 <a target="_blank" href="#" title="(5010F:8P, (G8397) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0117 
	 <a target="_blank" href="#" title="(NQF 0055)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Diabetes: Eye Exam 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did the patient receive an eye screening for diabetic retinal disease this year? 
	 <a target="_blank" href="#" title="A retinal or dilated eye exam by an eye care professional this year or had no evidence of retinopathy in an eye exam in the previous year."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Diabetic_Retinopathy0117" value="2022F" <?php if ($obj{"Diabetic_Retinopathy0117"} == "2022F") { echo 'checked=checked'; } ?> > Dilated retinal eye exam with interpretation by an ophthalmologist or optometrist documented and reviewed 
	 <a target="_blank" href="#" title="(2022F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0117" value="2024F" <?php if ($obj{"Diabetic_Retinopathy0117"} == "2024F") { echo 'checked=checked'; } ?> > Seven standard field stereoscopic photos with interpretation by an ophthalmologist or optometrist documented and reviewed 
	 <a target="_blank" href="#" title="(2024F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0117" value="2026F" <?php if ($obj{"Diabetic_Retinopathy0117"} == "2026F") { echo 'checked=checked'; } ?> > Eye imaging validated to match diagnosis from seven standard field stereoscopic photos results documented and reviewed 
	 <a target="_blank" href="#" title="(2026F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0117" value="3072F" <?php if ($obj{"Diabetic_Retinopathy0117"} == "3072F") { echo 'checked=checked'; } ?> > Low risk for retinopathy (no evidence of retinopathy in the prior year) &#8225 
	 <a target="_blank" href="#" title="(3072F) (Performance Met)&lt;br&gt; &#8225 NOTE: This code can only be used if the encounter was during the measurement period because it indicates that the patient had &quot;no evidence of retinopathy in the prior year&quot;. This code definition indicates results were negative, therefore a result is not required."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0117" value="2022F:8P" <?php if ($obj{"Diabetic_Retinopathy0117"} == "2022F:8P") { echo 'checked=checked'; } ?> > Dilated eye exam was not performed, reason not otherwise specified 
	 <a target="_blank" href="#" title="(2022F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0130 
	 <a target="_blank" href="#" title="(NQF #0419)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Documentation of Current Medications in the Medical Record 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Are current medications documented in the patient's medical record? 
	 <a target="_blank" href="#" title="Eligible professional attests to documenting in the medical record they obtained, updated, or reviewed the patient’s current medications."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Diabetic_Retinopathy0130" value="G8427" <?php if ($obj{"Diabetic_Retinopathy0130"} == "G8427") { echo 'checked=checked'; } ?> > Current medications documented. 
	 <a target="_blank" href="#" title="(G8427) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0130" value="G8430" <?php if ($obj{"Diabetic_Retinopathy0130"} == "G8430") { echo 'checked=checked'; } ?> > Eligible professional attests to documenting in the medical record the patient is not eligible for a current list of medications being obtained, updated, or reviewed by the eligible professional. 
	 <a target="_blank" href="#" title="(G8430) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0130" value="G8428" <?php if ($obj{"Diabetic_Retinopathy0130"} == "G8428") { echo 'checked=checked'; } ?> > Current list of medications not documented as obtained, updated, or reviewed by the eligible professional, reason not given. 
	 <a target="_blank" href="#" title="(G8428) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0226 
	 <a target="_blank" href="#" title="(NQF #0028)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community / Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient screened for tobacco use within 24 months AND given tobacco cessation interventionn if identified as a tobacco user? 
	 <a target="_blank" href="#" title="Tobacco use includes use of any type of tobacco; tobacco cessation intervention includes brief counseling and/or pharmacotherapy."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Diabetic_Retinopathy0226" value="4004F" <?php if ($obj{"Diabetic_Retinopathy0226"} == "4004F") { echo 'checked=checked'; } ?> > Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0226" value="1036F" <?php if ($obj{"Diabetic_Retinopathy0226"} == "1036F") { echo 'checked=checked'; } ?> > Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0226" value="4004F:1P" <?php if ($obj{"Diabetic_Retinopathy0226"} == "4004F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons). 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0226" value="4004F:8P" <?php if ($obj{"Diabetic_Retinopathy0226"} == "4004F:8P") { echo 'checked=checked'; } ?> > Tobacco screening OR tobacco cessation intervention not performed, reason NOS. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0317 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Screening for High Blood Pressure and Follow-Up Documented 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient screened for high blood pressure and is indicated follow-up documented? 
	 
	<p></b>


	<input type="radio" name="Diabetic_Retinopathy0317" value="G8783" <?php if ($obj{"Diabetic_Retinopathy0317"} == "G8783") { echo 'checked=checked'; } ?> > Normal blood pressure reading documented, follow-up not required. 
	 <a target="_blank" href="#" title="(G8783) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0317" value="G8950" <?php if ($obj{"Diabetic_Retinopathy0317"} == "G8950") { echo 'checked=checked'; } ?> > Pre-Hypertensive or hypertensive blood pressure reading documented, and the indicated follow-up is documented. 
	 <a target="_blank" href="#" title="(G8950) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0317" value="G8784" <?php if ($obj{"Diabetic_Retinopathy0317"} == "G8784") { echo 'checked=checked'; } ?> > Patient not eligible (e.g., documentation the patient is not eligible due to active diagnosis of hypertension, patient refuses, urgent or emergent situation, documentation the patient is not eligible). 
	 <a target="_blank" href="#" title="(G8784) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0317" value="G8785" <?php if ($obj{"Diabetic_Retinopathy0317"} == "G8785") { echo 'checked=checked'; } ?> > Blood pressure reading not documented, reason not given. 
	 <a target="_blank" href="#" title="(G8785) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetic_Retinopathy0317" value="G8952" <?php if ($obj{"Diabetic_Retinopathy0317"} == "G8952") { echo 'checked=checked'; } ?> > Pre-Hypertensive or Hypertensive blood pressure reading documented, indicated follow-up not documented, reason not given. 
	 <a target="_blank" href="#" title="(G8952) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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
