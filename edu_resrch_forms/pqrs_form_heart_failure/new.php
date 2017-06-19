<?php
/**
 * PQRS Heart Failure Group Direct Data Entry
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
formHeader("Form: Heart Failure");
?>
<html><head>
<?php html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>
<form method=post action="<?php echo $rootdir;?>/forms/pqrs_form_heart_failure/save.php?mode=new" name="my_form">
<br>
<span class="title"><center>Heart Failure Quality Reporting</center></span><br><br>
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
<textarea cols=120 rows=3 wrap=virtual name="purpose" >To ensure quality care and reporting on patients with Heart Failure.</textarea>
<br><br>

<table>

<tr>	<td> <br><p><br>
	<b>
	Measure #0005 <a target="_blank" href="#" title="(NQF #0081)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Heart Failure (HF): Angiotensin-Converting Enzyme (ACE) Inhibitor or Angiotensin Receptor Blocker (ARB) Therapy for Left Ventricular Systolic Dysfunction (LVSD) <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient prescribed or is patient currenty prescribed an ACE Inhibitor or ARB therapy? 
	<p></b>


	<input type="radio" name="Heart_Failure0005" value="4010F 3021F">ACE Inhibitor or ARB therapy prescribed or currently being taken, and LVEF less than 40% or documentation of moderately or severely depressed left ventricular systolic function. 
	 <a target="_blank" href="#" title="(4010F, 3021F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0005" value="4010F:1P">Documentation of medical reason(s) for not prescribing ACE inhibitor or ARB therapy (eg, hypotensive patients who are at immediate risk of cardiogenic shock, hospitalized patients who have experienced marked azotemia, allergy, intolerance, other medical reasons). 
	 <a target="_blank" href="#" title="(4010F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0005" value="4010F:2P">Documentation of patient reason(s) for not prescribing ACE inhibitor or ARB therapy (eg, patient declined, other patient reasons). 
	 <a target="_blank" href="#" title="(4010F:2P) (Patient Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0005" value="4010F:3P 3021F">Documentation of system reason(s) for not prescribing ACE inhibitor or ARB therapy (eg, other system reasons),and LVEF less than 40% or documentation of moderately or severely depressed left ventricular systolic function. 
	 <a target="_blank" href="#" title="(4010F:3P, 3021F) (System Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0005" value="3022F">LVEF greater than or equal to 40% or documentation as normal or mildly depressed left ventricular systolic function. 
	 <a target="_blank" href="#" title="(3022F)(Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0005" value="3021F:8P">LVEF was not performed or documented. 
	 <a target="_blank" href="#" title="(3021F:8P) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0005" value="4010F:8P 3021F">ACE inhibitor or ARB therapy was not prescribed, reason NOS, and LVEF less than 40% or documentation of moderately or severely depressed left ventricular systolic function. 
	 <a target="_blank" href="#" title="(4010F:8P, 3021F) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0008 <a target="_blank" href="#" title="(NQF #0083)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Heart Failure (HF): Beta-Blocker Therapy for Left Ventricular Systolic Dysfunction (LVSD) <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient prescribed a beta-blocker therapy within a 12 month period in an outpatient setting? 
	<p></b>


	<input type="radio" name="Heart_Failure0008" value="G8450 G8923">Beta-blocker therapy prescribed, and LVEF &lt; 40% or documentation of moderately or severely depressed left ventricular systolic function. 
	 <a target="_blank" href="#" title="(G8450, G8923) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0008" value="G8451 G8923">Beta-Blocker Therapy for LVEF &lt; 40% not prescribed for reasons documented by the clinician (e.g., low blood pressure, fluid overload, asthma, patients recently treated with an intravenous positive inotropic agent, allergy, intolerance, other medical reasons, patient declined, or other reasons attributable to the healthcare system), and LVEF &lt; 40% or documentation of moderately or severely depressed left ventricular systolic function. 
	 <a target="_blank" href="#" title="(G8451, G8923) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0008" value="G8395">LVEF = 40% or documentation as normal or mildly depressed left ventricular systolic function. 
	 <a target="_blank" href="#" title="(G8395)(Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0008" value="G8396">LVEF not performed or documented. 
	 <a target="_blank" href="#" title="(G8396)(Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0008" value="G8452 G8923">Beta-blocker therapy not prescribed, and LVEF &lt; 40% or documentation of moderately or severely depressed left ventricular systolic function. 
	 <a target="_blank" href="#" title="(G8452, G8923) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0047 <a target="_blank" href="#" title="(NQF #0326)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Care Plan <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was advance care plan or surrogate decision maker documented in the medical record? <a target="_blank" href="#" title="If patient’s cultural and/or spiritual beliefs preclude a discussion of advance care planning, report 1124F."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Heart_Failure0047" value="1123F">Advanced care planning discussed and documented. 
	 <a target="_blank" href="#" title="(1123F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0047" value="1124F">Advanced care planning discussed and documented; patient did not wish or was not able to name a surrogate decision marker or provide an advance care plan, or patient’s cultural and/or spiritual beliefs preclude a discussion of advance care planning. 
	 <a target="_blank" href="#" title="(1124F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0047" value="1123F:8P">Advance care planning not documented, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(1123F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0110 <a target="_blank" href="#" title="(NQF 0041)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Preventive Care and Screening: Influenza Immunization <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Did patient receive an influenza immunization for this flu season OR report a previous receipt of an influenza immunization? <a target="_blank" href="#" title="Patients 6 months and older seen for a visit between October 1 and March 31 OR who reported previous receipt of an influenze immunization."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Heart_Failure0110" value="G8482">Influenza immunization administered or previously received. 
	 <a target="_blank" href="#" title="(G8482) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0110" value="G8483">Influenza immunization not administered, reason documented. (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons). 
	 <a target="_blank" href="#" title="(G8483) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0110" value="G8484">Influenza immunization was not administered, reason not given. 
	 <a target="_blank" href="#" title="(G8484) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0128 <a target="_blank" href="#" title="(NQF #0421)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Preventive Care and Screening: Body Mass Index (BMI) Screening and Follow-Up Plan <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health NOTE: Normal parameters: Age 65 years and older BMI &ge; 23 and &lt; 30 kg/m2 Age 18 - 64 years BMI &ge; 18.5 and &lt; 25 kg/m2."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was height and weight measured and recorded within 6 months of the encounter and, if BMI is outside of normal parameters, was a follow-up plan documented? <a target="_blank" href="#" title="A patient is not eligible if one or more of the following reasons are documented: Patient is receiving palliative care, is pregnant, refuses BMI measurement, and any other reason documented in the medical record by the provider why BMI measurement was not appropriate."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Heart_Failure0128" value="G8420">BMI is documented within normal parameters and no follow-up plan is required. 
	 <a target="_blank" href="#" title="(G8420) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0128" value="G8417">BMI is documented above normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8417) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0128" value="G8418">BMI is documented below normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8418) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0128" value="G8421">BMI not documented and no reason is given. 
	 <a target="_blank" href="#" title="(G8421) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0128" value="G8419">BMI documented outside normal parameters, no follow-up plan documented, no reason given. 
	 <a target="_blank" href="#" title="(G8419) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0130 <a target="_blank" href="#" title="(NQF #0419)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Documentation of Current Medications in the Medical Record <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Are current medications documented in the patient's medical record? <a target="_blank" href="#" title="Eligible professional they obtained, updated, or reviewed the patient’s current medications."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Heart_Failure0130" value="G8427">Current medications documented. 
	 <a target="_blank" href="#" title="(G8427) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0130" value="G8430">Eligible professional attests patient is not eligible for a current list of medications being obtained, updated, or reviewed by the eligible professional. 
	 <a target="_blank" href="#" title="(G8430) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0130" value="G8428">Current list of medications not documented as obtained, updated, or reviewed by the eligible professional, reason not given. 
	 <a target="_blank" href="#" title="(G8428) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0226 <a target="_blank" href="#" title="(NQF #0028)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention <a target="_blank" href="#" title="National Quality Strategy Domain: Community / Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient screened for tobacco use within 24 months AND given tobacco cessation interventionn if identified as a tobacco user? <a target="_blank" href="#" title="Tobacco use includes use of any type of tobacco; tobacco cessation intervention includes brief counseling (3 minutes or less), and/or pharmacotherapy."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Heart_Failure0226" value="4004F">Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0226" value="1036F">Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0226" value="4004F:1P">Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons). 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Heart_Failure0226" value="4004F:8P">Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

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
