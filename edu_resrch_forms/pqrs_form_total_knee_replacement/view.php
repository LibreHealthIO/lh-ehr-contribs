<?php
/**
 * PQRS Total Knee Replacement Group Direct Data Entry
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

$obj = formFetch("pqrs_form_total_knee_replacement", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_total_knee_replacement/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Total Knee Replacement Quality Reporting</b></center></span><br><br>
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
	Measure #0130 
	 <a target="_blank" href="#" title="(NQF #0419)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Documentation of Current Medications in the Medical Record 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Are current medications documented in the patient's medical record? 
	 <a target="_blank" href="#" title="Eligible professional attests to documenting in the medical record they obtained, updated, or reviewed the patient’s current medications."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Total_Knee_Replacement0130" value="G8427" <?php if ($obj{"Total_Knee_Replacement0130"} == "G8427") { echo 'checked=checked'; } ?> > Current medications documented. 
	 <a target="_blank" href="#" title="(G8427) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Total_Knee_Replacement0130" value="G8430" <?php if ($obj{"Total_Knee_Replacement0130"} == "G8430") { echo 'checked=checked'; } ?> > Eligible professional attests to documenting in the medical record the patient is not eligible for a current list of medications being obtained, updated, or reviewed by the eligible professional. 
	 <a target="_blank" href="#" title="(G8430) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Total_Knee_Replacement0130" value="G8428" <?php if ($obj{"Total_Knee_Replacement0130"} == "G8428") { echo 'checked=checked'; } ?> > Current list of medications not documented as obtained, updated, or reviewed by the eligible professional, reason not given. 
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
	 <a target="_blank" href="#" title="Tobacco use includes use of any type of tobacco; tobacco cessation intervention includes brief counseling (3 minutes or less), and/or pharmacotherapy."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Total_Knee_Replacement0226" value="4004F" <?php if ($obj{"Total_Knee_Replacement0226"} == "4004F") { echo 'checked=checked'; } ?> > Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Total_Knee_Replacement0226" value="1036F" <?php if ($obj{"Total_Knee_Replacement0226"} == "1036F") { echo 'checked=checked'; } ?> > Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Total_Knee_Replacement0226" value="4004F:1P" <?php if ($obj{"Total_Knee_Replacement0226"} == "4004F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons). 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Total_Knee_Replacement0226" value="4004F:8P" <?php if ($obj{"Total_Knee_Replacement0226"} == "4004F:8P") { echo 'checked=checked'; } ?> > Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0350 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Total Knee Replacement: Shared Decision-Making: Trial of Conservative (Non-surgical) Therapy 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Were alternatives discussed and documented and did patient share in decision making for their total knee replacement? 
	 
	<p></b>


	<input type="radio" name="Total_Knee_Replacement0350" value="G9296" <?php if ($obj{"Total_Knee_Replacement0350"} == "G9296") { echo 'checked=checked'; } ?> > Patients with documented shared decision-making including discussion of conservative (non-surgical) therapy (e.g., NSAIDs, analgesics, weight loss, exercise, injections) prior to the procedure. 
	 <a target="_blank" href="#" title="(G9296) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Total_Knee_Replacement0350" value="G9297" <?php if ($obj{"Total_Knee_Replacement0350"} == "G9297") { echo 'checked=checked'; } ?> > Shared decision-making including discussion of conservative (non-surgical) therapy (e.g. NSAIDs, analgesics, weight loss, exercise, injections) prior to the procedure not documented, reason not given. 
	 <a target="_blank" href="#" title="(G9297) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0351 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Total Knee Replacement: Venous Thromboembolic and Cardiovascular Risk Evaluation 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient evaluated for risk factors prior to the TKR procedure? 
	 <a target="_blank" href="#" title="Presence or absence of venous thromboembolic and cardiovascular risk factors within 30 days prior to the procedure (e.g., history of DVT, PE, MI, arrhythmia and stroke)."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Total_Knee_Replacement0351" value="G9298" <?php if ($obj{"Total_Knee_Replacement0351"} == "G9298") { echo 'checked=checked'; } ?> > Patients who are evaluated for venous thromboembolic and cardiovascular risk factors within 30 days prior to the procedure (e.g. history of DVT, PE, MI, arrhythmia and stroke). 
	 <a target="_blank" href="#" title="(G9298) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Total_Knee_Replacement0351" value="G9299" <?php if ($obj{"Total_Knee_Replacement0351"} == "G9299") { echo 'checked=checked'; } ?> > Patients who are not evaluated for venous thromboembolic and cardiovascular risk factors within 30 days prior to the procedure including (e.g. history of DVT, PE, MI, arrhythmia and stroke), reason not given. 
	 <a target="_blank" href="#" title="(G9299) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0352 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Total Knee Replacement: Preoperative Antibiotic Infusion with Proximal Tourniquet 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient have the prophylactic antibiotic completely infused prior to the inflation of the proximal tourniquet? 
	 
	<p></b>


	<input type="radio" name="Total_Knee_Replacement0352" value="G9301" <?php if ($obj{"Total_Knee_Replacement0352"} == "G9301") { echo 'checked=checked'; } ?> > Patients who had the prophylactic antibiotic completely infused prior to the inflation of the proximal tourniquet. 
	 <a target="_blank" href="#" title="(G9301) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Total_Knee_Replacement0352" value="G9300" <?php if ($obj{"Total_Knee_Replacement0352"} == "G9300") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not completely infusing the prophylactic antibiotic prior to the inflation of the proximal tourniquet (e.g., a tourniquet was not used). 
	 <a target="_blank" href="#" title="(G9300) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Total_Knee_Replacement0352" value="G9302" <?php if ($obj{"Total_Knee_Replacement0352"} == "G9302") { echo 'checked=checked'; } ?> > Prophylactic antibiotic not completely infused prior to the inflation of the proximal tourniquet, reason not given. 
	 <a target="_blank" href="#" title="(G9302) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0353 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Total Knee Replacement: Identification of Implanted Prosthesis in Operative Report 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient's operative report identify the prosthetic implant specifications including the prosthetic implant manufacturer, the brand name of the prosthetic implant and the size of each prosthetic implant? 
	 
	<p></b>


	<input type="radio" name="Total_Knee_Replacement0353" value="G9304" <?php if ($obj{"Total_Knee_Replacement0353"} == "G9304") { echo 'checked=checked'; } ?> > Operative report identifies the prosthetic implant specifications including the prosthetic implant manufacturer, the brand name of the prosthetic implant and the size of each prosthetic implant. 
	 <a target="_blank" href="#" title="(G9304) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Total_Knee_Replacement0353" value="G9303" <?php if ($obj{"Total_Knee_Replacement0353"} == "G9303") { echo 'checked=checked'; } ?> > Operative report does not identify the prosthetic implant specifications including the prosthetic implant manufacturer, the brand name of the prosthetic implant and the size of each prosthetic implant, reason not given. 
	 <a target="_blank" href="#" title="(G9303) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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
