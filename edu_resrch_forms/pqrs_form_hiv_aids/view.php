<?php
/**
 * PQRS HIV_AIDS Group Direct Data Entry
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

$obj = formFetch("pqrs_form_hiv_aids", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_hiv_aids/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>HIV_AIDS Quality Reporting</b></center></span><br><br>
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
	Measure #0047 
	 <a target="_blank" href="#" title="(NQF #0326)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Care Plan 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was advance care plan or surrogate decision maker documented in the medical record? 
	 <a target="_blank" href="#" title="If patient’s cultural and/or spiritual beliefs preclude a discussion of advance care planning, report 1124F."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="HIV_AIDS0047" value="1123F" <?php if ($obj{"HIV_AIDS0047"} == "1123F") { echo 'checked=checked'; } ?> > Advanced care planning discussed and documented. 
	 <a target="_blank" href="#" title="(1123F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0047" value="1124F" <?php if ($obj{"HIV_AIDS0047"} == "1124F") { echo 'checked=checked'; } ?> > Advanced care planning discussed and documented; patient did not wish or was not able to name a surrogate decision marker or provide an advance care plan, or patient’s cultural and/or spiritual beliefs preclude a discussion of advance care planning. 
	 <a target="_blank" href="#" title="(1124F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0047" value="1123F:8P" <?php if ($obj{"HIV_AIDS0047"} == "1123F:8P") { echo 'checked=checked'; } ?> > Advance care planning not documented, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(1123F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0134 
	 <a target="_blank" href="#" title="(NQF 0418)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Screening for Clinical Depression and Follow-Up Plan 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient screened for clinical depression with a standard screening tool AND if positive, a follow-up plan is documented. 
	 <a target="_blank" href="#" title="Patients aged 12 and older screened for depression with a follow-up plan on the date of the encounter."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="HIV_AIDS0134" value="G8431" <?php if ($obj{"HIV_AIDS0134"} == "G8431") { echo 'checked=checked'; } ?> > Screening for clinical depression is documented as being positive AND a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8431) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0134" value="G8510" <?php if ($obj{"HIV_AIDS0134"} == "G8510") { echo 'checked=checked'; } ?> > Screening for clinical depression is documented as negative, a follow-up plan is not required. 
	 <a target="_blank" href="#" title="(G8510) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0134" value="G8433" <?php if ($obj{"HIV_AIDS0134"} == "G8433") { echo 'checked=checked'; } ?> > Screening for clinical depression not documented, documentation stating the patient is not eligible. 
	 <a target="_blank" href="#" title="(G8433) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0134" value="G8940" <?php if ($obj{"HIV_AIDS0134"} == "G8940") { echo 'checked=checked'; } ?> > Screening for clinical depression documented as positive, a follow-up plan not documented, documentation stating the patient is not eligible 
	 <a target="_blank" href="#" title="(G8940) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0134" value="G8432" <?php if ($obj{"HIV_AIDS0134"} == "G8432") { echo 'checked=checked'; } ?> > Clinical depression screening not documented, reason not given. 
	 <a target="_blank" href="#" title="(G8432) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0134" value="G8511" <?php if ($obj{"HIV_AIDS0134"} == "G8511") { echo 'checked=checked'; } ?> > Screening for clinical depression documented as positive, follow-up plan not documented, reason not given. 
	 <a target="_blank" href="#" title="(G8511) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0160 
	 <a target="_blank" href="#" title="(NQF #0405)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- HIV/AIDS: Pneumocystis Jiroveci Pneumonia (PCP) Prophylaxis 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient prescribed pneumocystis jiroveci pneumonia (PCP) prophylaxis within 3 months of CD4 count below 200 cells/mm3? 
	 <a target="_blank" href="#" title="May include prescription given to the patient for PCP prophylaxis therapy at one or more visits in the 12-month period OR patient already taking PCP prophylaxis therapy as documented in current medication list."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="HIV_AIDS0160" value="G9222 3494F" <?php if ($obj{"HIV_AIDS0160"} == "G9222 3494F") { echo 'checked=checked'; } ?> > Pneumocystis jiroveci pneumonia prophylaxis prescribed within 3 months of low CD4+ cell count below 200 cells/mm3. AND CD4+ cell count &lt; 200 cells/mm3. 
	 <a target="_blank" href="#" title="(G9222, 3494F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0160" value="G9219 3494F" <?php if ($obj{"HIV_AIDS0160"} == "G9219 3494F") { echo 'checked=checked'; } ?> > Pneumocystis jiroveci pneumonia prophylaxis not prescribed within 3 months of low CD4+ cell count below 200 cells/mm3 for medical reason (i.e., patient’s CD4+ cell count above threshold within 3 months after CD4+ cell count below threshold, indicating that the patient’s CD4+ levels are within an acceptable range and the patient does not require PCP prophylaxis). AND CD4+ cell count &lt; 200 cells/mm3. 
	 <a target="_blank" href="#" title="(G9219, 3494F) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0160" value="3495F" <?php if ($obj{"HIV_AIDS0160"} == "3495F") { echo 'checked=checked'; } ?> > CD4+ cell count 200 – 499 cells/mm3. 
	 <a target="_blank" href="#" title="(3495F) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0160" value="3496F" <?php if ($obj{"HIV_AIDS0160"} == "3496F") { echo 'checked=checked'; } ?> > CD4+ cell count = 500 cells/mm3. 
	 <a target="_blank" href="#" title="(3496F) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0160" value="G9217 3494F" <?php if ($obj{"HIV_AIDS0160"} == "G9217 3494F") { echo 'checked=checked'; } ?> > PCP prophylaxis was not prescribed within 3 months of low CD4+ cell count below 200 cells/mm3, reason not given. AND CD4+ cell count &lt; 200 cells/mm3. 
	 <a target="_blank" href="#" title="(G9217, 3494F) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0160" value="3494F:8P" <?php if ($obj{"HIV_AIDS0160"} == "3494F:8P") { echo 'checked=checked'; } ?> > CD4+ cell count not performed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(3494F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0205 
	 <a target="_blank" href="#" title="(NQF #0409)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- HIV/AIDS: Sexually Transmitted Disease Screening for Chlamydia, Gonorrhea, and Syphilis 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient screened for chlamydia, gonorrhea, and syphilis at least once since the diagnosis of HIV infection? 
	 
	<p></b>


	<input type="radio" name="HIV_AIDS0205" value="G9228" <?php if ($obj{"HIV_AIDS0205"} == "G9228") { echo 'checked=checked'; } ?> > Chlamydia, gonorrhea, and syphilis screening results documented (report when results are present for all of the 3 screenings). 
	 <a target="_blank" href="#" title="(G9228) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0205" value="G9229" <?php if ($obj{"HIV_AIDS0205"} == "G9229") { echo 'checked=checked'; } ?> > Chlamydia, gonorrhea, and syphilis screening results not documented (Patient refusal is the only allowed exclusion). 
	 <a target="_blank" href="#" title="(G9229) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0205" value="G9230" <?php if ($obj{"HIV_AIDS0205"} == "G9230") { echo 'checked=checked'; } ?> > Chlamydia, gonorrhea, and syphilis screening not documented as performed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(G9230) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0226 
	 <a target="_blank" href="#" title="(NQF #0028)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community / Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient screened for tobacco use within 24 months AND given tobacco cessation interventionn//nif identified as a tobacco user? 
	 <a target="_blank" href="#" title="Tobacco Use – Includes use of any type of tobacco; Tobacco Cessation Intervention – Includes brief//n counseling (3 minutes or less), and/or pharmacotherapy."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="HIV_AIDS0226" value="4004F" <?php if ($obj{"HIV_AIDS0226"} == "4004F") { echo 'checked=checked'; } ?> > Patient Screened for Tobacco Use, Identified as a User and Received Intervention 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0226" value="1036F" <?php if ($obj{"HIV_AIDS0226"} == "1036F") { echo 'checked=checked'; } ?> > Patient Screened for Tobacco Use and Identified as a Non-User of Tobacco 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0226" value="4004F:1P" <?php if ($obj{"HIV_AIDS0226"} == "4004F:1P") { echo 'checked=checked'; } ?> > Tobacco Screening not Performed for Medical Reasons 
	 <a target="_blank" href="#" title="(4004F:1P) Medical Performance Exclusion"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0226" value="4004F:8P" <?php if ($obj{"HIV_AIDS0226"} == "4004F:8P") { echo 'checked=checked'; } ?> > Tobacco Screening OR Tobacco Cessation Intervention not Performed, Reason Not Otherwise Specified 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0338 
	 <a target="_blank" href="#" title="(NQF #2082)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- HIV Viral Load Suppression 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient's HIV viral load less than 200 copies/mL at last viral load test? 
	 
	<p></b>


	<input type="radio" name="HIV_AIDS0338" value="G9243" <?php if ($obj{"HIV_AIDS0338"} == "G9243") { echo 'checked=checked'; } ?> > Documentation of viral load less than 200 copies/mL. 
	 <a target="_blank" href="#" title="(G9243) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0338" value="G9242" <?php if ($obj{"HIV_AIDS0338"} == "G9242") { echo 'checked=checked'; } ?> > Documentation of viral load equal to or greater than 200 copies/mL or viral load not performed. 
	 <a target="_blank" href="#" title="(G9242) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0339 
	 <a target="_blank" href="#" title="(NQF #2083)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Prescription of HIV Antiretroviral Therapy 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient prescribed HIV antiretroviral therapy during the reporting period? 
	 <a target="_blank" href="#" title="HIV antiretroviral therapy is described as the prescription of at least one U.S. Food and Drug Administration approved HIV antiretroviral medication."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="HIV_AIDS0339" value="G9245" <?php if ($obj{"HIV_AIDS0339"} == "G9245") { echo 'checked=checked'; } ?> > Antiretroviral therapy prescribed. 
	 <a target="_blank" href="#" title="(G9245) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0339" value="G9244" <?php if ($obj{"HIV_AIDS0339"} == "G9244") { echo 'checked=checked'; } ?> > Antiretroviral therapy not prescribed. 
	 <a target="_blank" href="#" title="(G9244) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0340 
	 <a target="_blank" href="#" title="(NQF #2079)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- HIV Medical Visit Frequency 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Efficiency And Cost Reduction"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient have at least one medical visit in each 6 month period of the 24 month measurement period, with a minimum of 60 days between medical visits? 
	 
	<p></b>


	<input type="radio" name="HIV_AIDS0340" value="G9247" <?php if ($obj{"HIV_AIDS0340"} == "G9247") { echo 'checked=checked'; } ?> > Patient had at least one medical visit in each 6 month period of the 24 month measurement period, with a minimum of 60 days between medical visits. 
	 <a target="_blank" href="#" title="(G9247) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="HIV_AIDS0340" value="G9246" <?php if ($obj{"HIV_AIDS0340"} == "G9246") { echo 'checked=checked'; } ?> > Patient did not have at least one medical visit in each 6 month period of the 24 month measurement period, with a minimum of 60 days between medical visits. 
	 <a target="_blank" href="#" title="(G9246) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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
