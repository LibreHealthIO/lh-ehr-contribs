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

$obj = formFetch("pqrs_form_diabetes", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_diabetes/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Diabetes Quality Reporting</b></center></span><br><br>
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
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care This is an INVERSE MEASURE: it is desired that performance NOT be met."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: What was the patient's most recent hemoglobin A1c level? 
	 
	<p></b>


	<input type="radio" name="Diabetes0001" value="3044F" <?php if ($obj{"Diabetes0001"} == "3044F") { echo 'checked=checked'; } ?> > Most recent hemoglobin A1c (HbA1c) level &lt; 7.0% 
	 <a target="_blank" href="#" title="(3044F) (Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0001" value="3045F" <?php if ($obj{"Diabetes0001"} == "3045F") { echo 'checked=checked'; } ?> > Most recent hemoglobin A1c (HbA1c) level 7.0 to 9.0% 
	 <a target="_blank" href="#" title="(3045F) (Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0001" value="3046F" <?php if ($obj{"Diabetes0001"} == "3046F") { echo 'checked=checked'; } ?> > Most recent hemoglobin A1c level &gt; 9.0% 
	 <a target="_blank" href="#" title="(3046F) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0001" value="3046F:8P" <?php if ($obj{"Diabetes0001"} == "3046F:8P") { echo 'checked=checked'; } ?> > Hemoglobin A1c level was not performed during the measurement period (12 months) 
	 <a target="_blank" href="#" title="(3046F:8P) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0110 
	 <a target="_blank" href="#" title="(NQF 0041)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Influenza Immunization 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient receive an influenza immunization for this flu season OR report a previous receipt of an influenza immunization? 
	 
	<p></b>


	<input type="radio" name="Diabetes0110" value="G8482" <?php if ($obj{"Diabetes0110"} == "G8482") { echo 'checked=checked'; } ?> > Influenza immunization administered or previously received 
	 <a target="_blank" href="#" title="(G8482) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0110" value="G8483" <?php if ($obj{"Diabetes0110"} == "G8483") { echo 'checked=checked'; } ?> > Influenza immunization not administered, reason documented (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons) 
	 <a target="_blank" href="#" title="(G8483) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0110" value="G8484" <?php if ($obj{"Diabetes0110"} == "G8484") { echo 'checked=checked'; } ?> > Influenza immunization was not administered, reason not given 
	 <a target="_blank" href="#" title="(G8484) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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


	<input type="radio" name="Diabetes0117" value="2022F" <?php if ($obj{"Diabetes0117"} == "2022F") { echo 'checked=checked'; } ?> > Dilated retinal eye exam with interpretation by an ophthalmologist or optometrist documented and reviewed 
	 <a target="_blank" href="#" title="(2022F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0117" value="2024F" <?php if ($obj{"Diabetes0117"} == "2024F") { echo 'checked=checked'; } ?> > Seven standard field stereoscopic photos with interpretation by an ophthalmologist or optometrist documented and reviewed 
	 <a target="_blank" href="#" title="(2024F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0117" value="2026F" <?php if ($obj{"Diabetes0117"} == "2026F") { echo 'checked=checked'; } ?> > Eye imaging validated to match diagnosis from seven standard field stereoscopic photos results documented and reviewed 
	 <a target="_blank" href="#" title="(2026F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0117" value="3072F" <?php if ($obj{"Diabetes0117"} == "3072F") { echo 'checked=checked'; } ?> > Low risk for retinopathy (no evidence of retinopathy in the prior year) &#8225 
	 <a target="_blank" href="#" title="(3072F) (Performance Met)&lt;br&gt; &#8225 NOTE: This code can only be used if the encounter was during the measurement period because it indicates that the patient had &quot;no evidence of retinopathy in the prior year&quot;. This code definition indicates results were negative, therefore a result is not required."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0117" value="2022F:8P" <?php if ($obj{"Diabetes0117"} == "2022F:8P") { echo 'checked=checked'; } ?> > Dilated eye exam was not performed, reason not otherwise specified 
	 <a target="_blank" href="#" title="(2022F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0119 
	 <a target="_blank" href="#" title="(NQF 0062)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Diabetes: Medical Attention for Nephropathy 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did the patient receive a nephropathy screening test or have evidence of nephropathy? 
	 
	<p></b>


	<input type="radio" name="Diabetes0119" value="3060F" <?php if ($obj{"Diabetes0119"} == "3060F") { echo 'checked=checked'; } ?> > Positive microalbuminuria test result documented and reviewed 
	 <a target="_blank" href="#" title="(3060F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0119" value="3061F" <?php if ($obj{"Diabetes0119"} == "3061F") { echo 'checked=checked'; } ?> > Negative microalbuminuria test result documented and reviewed 
	 <a target="_blank" href="#" title="(3061F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0119" value="3062F" <?php if ($obj{"Diabetes0119"} == "3062F") { echo 'checked=checked'; } ?> > Positive macroalbuminuria test result documented and reviewed 
	 <a target="_blank" href="#" title="(3062F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0119" value="3066F" <?php if ($obj{"Diabetes0119"} == "3066F") { echo 'checked=checked'; } ?> > Documentation of treatment for nephropathy (e.g. patient receiving dialysis, patient being treated for ESRD, CRF, ARF, or renal insufficiency, any visit to a nephrologist) 
	 <a target="_blank" href="#" title="(3066F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0119" value="G8506" <?php if ($obj{"Diabetes0119"} == "G8506") { echo 'checked=checked'; } ?> > Patient receiving angiotensin converting enzyme (ACE) inhibitor or angiotensin receptor blocker (ARB) therapy 
	 <a target="_blank" href="#" title="(G8506) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0119" value="3060F:8P" <?php if ($obj{"Diabetes0119"} == "3060F:8P") { echo 'checked=checked'; } ?> > Nephropathy screening was not performed, reason not otherwise specified 
	 <a target="_blank" href="#" title="(3060F with 8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0126 
	 <a target="_blank" href="#" title="(NQF 0417)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Diabetes Mellitus: Diabetic Foot and Ankle Care, Peripheral Neuropathy -- Neurological Evaluation 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did the patient have a lower extremity neurological exam performed at least once within the last 12 months? 
	 
	<p></b>


	<input type="radio" name="Diabetes0126" value="G8404" <?php if ($obj{"Diabetes0126"} == "G8404") { echo 'checked=checked'; } ?> > Lower extremity neurological exam performed and documented 
	 <a target="_blank" href="#" title="(G8404) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0126" value="G8405" <?php if ($obj{"Diabetes0126"} == "G8405") { echo 'checked=checked'; } ?> > Lower extremity neurological exam not performed 
	 <a target="_blank" href="#" title="(G8405) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0226 
	 <a target="_blank" href="#" title="(NQF #0028)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community / Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient screened for tobacco use within 24 months AND given tobacco cessation interventionn if identified as a tobacco user? 
	 <a target="_blank" href="#" title="Tobacco use includes use of any type of tobacco; tobacco cessation intervention includes brief counseling (3 minutes or less), and/or pharmacotherapy."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Diabetes0226" value="4004F" <?php if ($obj{"Diabetes0226"} == "4004F") { echo 'checked=checked'; } ?> > Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0226" value="1036F" <?php if ($obj{"Diabetes0226"} == "1036F") { echo 'checked=checked'; } ?> > Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0226" value="4004F:1P" <?php if ($obj{"Diabetes0226"} == "4004F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons). 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Diabetes0226" value="4004F:8P" <?php if ($obj{"Diabetes0226"} == "4004F:8P") { echo 'checked=checked'; } ?> > Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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
