<?php
/**
 * PQRS Dementia Group Direct Data Entry
 *
 * Copyright (C) 2016      Suncoast Connection
 *
 * @package librehealthehr
 * @link    http://suncoastconnection.com
 * @author  Suncoast Connection
 * Mozilla Public License Version 2.0, Bryan Lee, <leebc>
 */

include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: Dementia");
?>
<html><head>
<?php html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>
<form method=post action="<?php echo $rootdir;?>/forms/pqrs_form_dementia/save.php?mode=new" name="my_form">
<br>
<span class="title"><center>Dementia Quality Reporting</center></span><br><br>
<center><a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
You must EDIT the form after saving and reviewing to finalize
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link_submit"
 onclick="top.restoreSession()">[Don't Save]</a></center>
<br>

<?php $res = sqlStatement("SELECT fname,mname,lname,DOB FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res); ?>
<b><u>Client and Service Information</u></b><br><br>
<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>

<br> <br>

<b><u>Purpose of Form</u></b><br>
<textarea cols=120 rows=3 wrap=virtual name="purpose" >To ensure quality care and reporting on patients with Dementia.</textarea>
<br><br>

<table>

<tr>	<td> <br><p><br>
	<b>
	Measure #0047 <a target="_blank" href="#" title="(NQF #0326)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Care Plan <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was advance care plan or surrogate decision maker documented in the medical record? <a target="_blank" href="#" title="If patient’s cultural and/or spiritual beliefs preclude a discussion of advance care planning, report 1124F."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Dementia0047" value="1123F">Advanced care planning discussed and documented. 
	 <a target="_blank" href="#" title="(1123F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0047" value="1124F">Advanced care planning discussed and documented; patient did not wish or was not able to name a surrogate decision marker or provide an advance care plan, or patient’s cultural and/or spiritual beliefs preclude a discussion of advance care planning. 
	 <a target="_blank" href="#" title="(1124F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0047" value="1123F:8P">Advance care planning not documented, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(1123F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0134 <a target="_blank" href="#" title="(NQF 0418)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Preventive Care and Screening: Screening for Clinical Depression and Follow-Up Plan <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient screened for clinical depression with a standard screening tool AND if positive, a follow-up plan is documented. <a target="_blank" href="#" title="Patients aged 12 and older screened for depression with a follow-up plan on the date of the encounter."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Dementia0134" value="G8431">Screening for clinical depression is documented as being positive AND a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8431) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0134" value="G8510">Screening for clinical depression is documented as negative, a follow-up plan is not required. 
	 <a target="_blank" href="#" title="(G8510) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0134" value="G8433">Screening for clinical depression not documented, documentation stating the patient is not eligible. 
	 <a target="_blank" href="#" title="(G8433) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0134" value="G8940">Screening for clinical depression documented as positive, a follow-up plan not documented, documentation stating the patient is not eligible. 
	 <a target="_blank" href="#" title="(G8940) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0134" value="G8432">Clinical depression screening not documented, reason not given 
	 <a target="_blank" href="#" title="(G8432) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0134" value="G8511">Screening for clinical depression documented as positive, follow-up plan not documented, reason not given 
	 <a target="_blank" href="#" title="(G8511) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0280 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Dementia: Staging of Dementia <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient's severity of dementia classified as mild, moderate or severe at least once within a 12 month period? 
	<p></b>


	<input type="radio" name="Dementia0280" value="1490F">Dementia severity classified, mild. 
	 <a target="_blank" href="#" title="(1490F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0280" value="1491F">Dementia severity classified, moderate. 
	 <a target="_blank" href="#" title="(1491F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0280" value="1493F">Dementia severity classified, severe. 
	 <a target="_blank" href="#" title="(1493F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0280" value="1490F:8P">Dementia severity not classified, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(1490F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0281 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Dementia: Cognitive Assessment <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient's assessment of cognition results reviewed at least once within a 12 month period? 
	<p></b>


	<input type="radio" name="Dementia0281" value="1494F">Cognition assessed and reviewed. 
	 <a target="_blank" href="#" title="(1494F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0281" value="1494F:1P">Documentation of medical reason(s) for not assessing cognition (eg, patient with very advanced stage dementia, other medical reason). 
	 <a target="_blank" href="#" title="(1494F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0281" value="1494F:2P">Documentation of patient reason(s) for not assessing cognition. 
	 <a target="_blank" href="#" title="(1494F:2P) (Patient Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0281" value="1494F:8P">Cognition not assessed and reviewed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(1494F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0282 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Dementia: Functional Status Assessment <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient's functional status performed and the results reviewed at least once within a 12 month period? 
	<p></b>


	<input type="radio" name="Dementia0282" value="1175F">Functional status for dementia assessed and results reviewed. 
	 <a target="_blank" href="#" title="(1175F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0282" value="1175F:1P">Documentation of medical reason(s) for not assessing and reviewing functional status for dementia (eg, patient is severely impaired and caregiver knowledge is limited, other medical reason). 
	 <a target="_blank" href="#" title="(1175F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0282" value="1175F:8P">Functional status for dementia not assessed and results not reviewed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(1175F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0283 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Dementia: Neuropsychiatric Symptom Assessment <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was an assessment of neuropsychiatric symptoms performed and results reviewed at least once in a 12 month period? 
	<p></b>


	<input type="radio" name="Dementia0283" value="1181F">Neuropsychiatric symptoms assessed and results reviewed. 
	 <a target="_blank" href="#" title="(1181F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0283" value="1181F:8P">Neuropsychiatric symptoms not assessed and results not reviewed, reason NOS. 
	 <a target="_blank" href="#" title="(1181F:8P) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0284 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Dementia: Management of Neuropsychiatric Symptoms <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Did patient receive or were recommended to receive an intervention for neuropsychiatric symptoms within a 12 month period? 
	<p></b>


	<input type="radio" name="Dementia0284" value="G8947 4525F">One or more neuropsychiatric symptoms and neuropsychiatric intervention ordered. 
	 <a target="_blank" href="#" title="(G8947, 4525F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0284" value="G8947 4526F">One or more neuropsychiatric symptoms and neuropsychiatric intervention received. 
	 <a target="_blank" href="#" title="(G8947 4526F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0284" value="G8948">No neuropsychiatric symptoms. 
	 <a target="_blank" href="#" title="(G8948) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0284" value="G8947 4525F:8P">One or more neuropsychiatric symptoms and neuropsychiatric intervention not ordered, reason NOS. 
	 <a target="_blank" href="#" title="(G8947, 4525F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0284" value="4526F:8P">Neuropsychiatric intervention not received, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4526F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0286 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Dementia: Counseling Regarding Safety Concerns <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patients or their caregiver(s) counseled or referred for counseling regarding safety concerns within a 12 month period? 
	<p></b>


	<input type="radio" name="Dementia0286" value="6101F">Safety counseling for dementia provided. 
	 <a target="_blank" href="#" title="(6101F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0286" value="6102F">Safety counseling for dementia ordered. 
	 <a target="_blank" href="#" title="(6102F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0286" value="6101F:1P">Documentation of medical reason(s) for not providing counseling regarding safety concerns (eg, patient in palliative care, other medical reason). 
	 <a target="_blank" href="#" title="(6101F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0286" value="6102F:1P">Documentation of medical reason(s) for not ordering safety counseling (eg, patient in palliative care, other medical reason). 
	 <a target="_blank" href="#" title="(6102F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0286" value="6101F:8P">Safety counseling for dementia not provided, reason NOS. 
	 <a target="_blank" href="#" title="6101F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0286" value="6102F:8P">Safety counseling for dementia not ordered, reason NOS. 
	 <a target="_blank" href="#" title="(6102F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0287 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Dementia: Counseling Regarding Risks of Driving <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient or their caregiver(s) counseled regarding the risks of driving and the alternatives to driving at least once within a 12 month period? 
	<p></b>


	<input type="radio" name="Dementia0287" value="6110F">Counseling provided regarding risks of driving and the alternatives to driving. 
	 <a target="_blank" href="#" title="(6110F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0287" value="6110F:1P">Documentation of medical reason(s) for not counseling regarding the risks of driving (eg, patient is no longer driving, other medical reason). 
	 <a target="_blank" href="#" title="(6110F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0287" value="6110F:8P">Counseling regarding risks of driving and alternatives to driving not performed, reason NOS. 
	 <a target="_blank" href="#" title="(6110F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0288 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Dementia: Caregiver Education and Support <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient's caregiver(s) provided with education on dementia disease management and health behavior changes AND referred to additional resources for support within a 12 month period? 
	<p></b>


	<input type="radio" name="Dementia0288" value="4322F">Caregiver provided with education and referred to additional resources for support. 
	 <a target="_blank" href="#" title="(4322F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0288" value="4322F:1P">Documentation of medical reason(s) for not providing the caregiver with education or referring to additional sources for support (eg, patient does not have a caregiver, other medical reason). 
	 <a target="_blank" href="#" title="(4322F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Dementia0288" value="4322F:8P">Caregiver not provided with education and not referred to additional resources for support, reason NOS. 
	 <a target="_blank" href="#" title="(4322F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td>	<p><br><p>	</td> </tr>

<tr>	<td>
	<b>Additional notes and recommendations:</b><br>
	<textarea cols=83 rows=1 wrap=virtual  name="recommendation" ></textarea><br><br>
	<br><br>
</td>	</tr>

<tr>	<td>
	<center><a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
	<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link_submit"
 	onclick="top.restoreSession()">[Don't Save]</a></center>
</td></tr>

</table>

</form>
<?php
formFooter();
?>
