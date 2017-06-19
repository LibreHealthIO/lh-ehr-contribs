<?php
/**
 * PQRS OPEIR Group Direct Data Entry
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

$obj = formFetch("pqrs_form_opeir", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_opeir/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>OPEIR Quality Reporting</b></center></span><br><br>
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
	Measure #0359 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Optimizing Patient Exposure to Ionizing Radiation: Utilization of a Standardized Nomenclature for Computed Tomography (CT) Imaging Description 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was the CT imaging report with the imaging study named according to a standardized nomenclature and the standardized nomenclature is used in institution’s computer systems? 
	 <a target="_blank" href="#" title="Standardized nomenclature is used in institution’s computer systems, including but not limited to computerized physician ordering system, charge master, radiology information system and electronic health record."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="OPEIR0359" value="G9318" <?php if ($obj{"OPEIR0359"} == "G9318") { echo 'checked=checked'; } ?> > Imaging study named according to standardized nomenclature. 
	 <a target="_blank" href="#" title="(G9318)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="OPEIR0359" value="G9319" <?php if ($obj{"OPEIR0359"} == "G9319") { echo 'checked=checked'; } ?> > Imaging study not named according to standardized nomenclature, reason not given. 
	 <a target="_blank" href="#" title="(G9319)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0360 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Optimizing Patient Exposure to Ionizing Radiation: Count of Potential High Dose Radiation Imaging Studies: Computed Tomography (CT) and Cardiac Nuclear Medicine Studies 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Are all known previous CT and cardiac nuclear medicine (myocardial perfusion) studies the patient has received in the 12-month period prior to the current study as a count that includes studies from the Radiology Information System, patient-provided radiological history or other source? 
	 
	<p></b>


	<input type="radio" name="OPEIR0360" value="G9321" <?php if ($obj{"OPEIR0360"} == "G9321") { echo 'checked=checked'; } ?> > Count of previous CT (any type of CT) and cardiac nuclear medicine (myocardial perfusion) studies documented in the 12-month period prior to the current study. 
	 <a target="_blank" href="#" title="(G9321)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="OPEIR0360" value="G9322" <?php if ($obj{"OPEIR0360"} == "G9322") { echo 'checked=checked'; } ?> > Count of previous CT and cardiac nuclear medicine (myocardial perfusion) studies not documented in the 12-month period prior to the current study, reason not given. 
	 <a target="_blank" href="#" title="(G9322)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0361 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Optimizing Patient Exposure to Ionizing Radiation: Reporting to a Radiation Dose Index Registry 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was computed tomography (CT) study reported to a radiation dose index registry and include at a minimum selected data elements? 
	 <a target="_blank" href="#" title="Detailed information regarding the patient demographic and scanner data elements can be found in the Dose Index Registry Data Dictionary available on the American College of Radiology (ACR) Web site."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="OPEIR0361" value="G9327" <?php if ($obj{"OPEIR0361"} == "G9327") { echo 'checked=checked'; } ?> > CT studies performed reported to a radiation dose index registry with all necessary data elements. 
	 <a target="_blank" href="#" title="(G9327)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="OPEIR0361" value="G9326" <?php if ($obj{"OPEIR0361"} == "G9326") { echo 'checked=checked'; } ?> > CT studies performed not reported to a radiation dose index registry, reason not given. 
	 <a target="_blank" href="#" title="(G9326)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="OPEIR0361" value="G9324" <?php if ($obj{"OPEIR0361"} == "G9324") { echo 'checked=checked'; } ?> > All necessary data elements not included, reason not given. 
	 <a target="_blank" href="#" title="(G9324)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0362 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Optimizing Patient Exposure to Ionizing Radiation: Computed Tomography (CT) Images Available for Patient Follow-up and Comparison Purposes 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Does the final report for CT studies document that DICOM format image data are available to non-affiliated external healthcare facilities or entities on a secure, media-free, reciprocally searchable basis with patient authorization for at least a 12-month period after the study? 
	 <a target="_blank" href="#" title="Radiology images that are transmitted electronically ONLY, not images recorded on film, CD, or other imaging transmittal form."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="OPEIR0362" value="G9340" <?php if ($obj{"OPEIR0362"} == "G9340") { echo 'checked=checked'; } ?> > Final report documented that DICOM format image data available to non-affiliated external healthcare facilities or entities on a secure, media free, reciprocally searchable basis with patient authorization for at least a 12-month period after the study. 
	 <a target="_blank" href="#" title="(G9340)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="OPEIR0362" value="G9329" <?php if ($obj{"OPEIR0362"} == "G9329") { echo 'checked=checked'; } ?> > DICOM format image data available to non-affiliated external healthcare facilities or entities on a secure, media free, reciprocally searchable basis with patient authorization for at least a 12-month period after the study not documented in final report, reason not given. 
	 <a target="_blank" href="#" title="(G9329)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0363 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Optimizing Patient Exposure to Ionizing Radiation: Search for Prior Computed Tomography (CT) Studies Through a Secure, Authorized, Media-Free, Shared Archive 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Does the final report of CT study document that a search for DICOM format images was conducted for prior patient CT imaging studies completed at non-affiliated external healthcare facilities or entities within the past 12-months and are available through a secure, authorized, media-free, shared archive prior to an imaging study being performed? 
	 <a target="_blank" href="#" title="Radiology images that are transmitted electronically ONLY, not images recorded on film, CD, or other imaging transmittal form."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="OPEIR0363" value="G9341" <?php if ($obj{"OPEIR0363"} == "G9341") { echo 'checked=checked'; } ?> > Search conducted for prior patient CT studies completed at non-affiliated external healthcare facilities or entities within the past 12-months and are available through a secure, authorized, media-free, shared archive prior to an imaging study being performed. 
	 <a target="_blank" href="#" title="(G9341)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="OPEIR0363" value="G9344" <?php if ($obj{"OPEIR0363"} == "G9344") { echo 'checked=checked'; } ?> > Due to system reasons search not conducted for DICOM format images for prior patient CT imaging studies completed at non-affiliated external healthcare facilities or entities within the past 12 months that are available through a secure, authorized, media-free, shared archive (e.g., non-affiliated external healthcare facilities or entities does not have archival abilities through a shared archival system). 
	 <a target="_blank" href="#" title="(G9344)(System Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="OPEIR0363" value="G9342" <?php if ($obj{"OPEIR0363"} == "G9342") { echo 'checked=checked'; } ?> > Search not conducted prior to an imaging study being performed for prior patient CT studies completed at non-affiliated external healthcare facilities or entities within the past 12-months and are available through a secure, authorized, media-free, shared archive, reason not given. 
	 <a target="_blank" href="#" title="(G9342)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0364 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Optimizing Patient Exposure to Ionizing Radiation: Appropriateness: Follow-up CT Imaging for Incidentally Detected Pulmonary Nodules According to Recommended Guidelines 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Communication And Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Does final report document follow-up recommendations for incidentally detected pulmonary nodules (e.g., follow-up CT imaging studies needed or that no follow-up is needed) based at a minimum on nodule size AND patient risk factors? 
	 <a target="_blank" href="#" title="Follow-up Recommendations - No follow-up recommended in the final CT report OR follow-up is recommended within a designated time frame in the final CT report. Recommendations noted in the final CT report should be in accordance with recommended guidelines."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="OPEIR0364" value="G9345" <?php if ($obj{"OPEIR0364"} == "G9345") { echo 'checked=checked'; } ?> > Follow-up recommendations documented according to recommended guidelines for incidentally detected pulmonary nodules (e.g., follow-up CT imaging studies needed or that no follow-up is needed) based at a minimum on nodule size AND patient risk factors. 
	 <a target="_blank" href="#" title="(G9345)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="OPEIR0364" value="G9347" <?php if ($obj{"OPEIR0364"} == "G9347") { echo 'checked=checked'; } ?> > Follow-up recommendations not documented according to recommended guidelines for incidentally detected pulmonary nodules, reason not given. 
	 <a target="_blank" href="#" title="(G9347)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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
