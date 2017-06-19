<?php
/**
 * PQRS Rheumatoid Arthritis Group Direct Data Entry
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
formHeader("Form: Rheumatoid Arthritis");
?>
<html><head>
<?php html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>
<form method=post action="<?php echo $rootdir;?>/forms/pqrs_form_rheumatoid_arthritis/save.php?mode=new" name="my_form">
<br>
<span class="title"><center>Rheumatoid Arthritis Quality Reporting</center></span><br><br>
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
<textarea cols=120 rows=3 wrap=virtual name="purpose" >To ensure quality care and reporting on patients with Rheumatoid Arthritis.</textarea>
<br><br>

<table>

<tr>	<td> <br><p><br>
	<b>
	Measure #0108 <a target="_blank" href="#" title="(NQF #0054)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Rheumatoid Arthritis (RA): Disease Modifying Anti-Rheumatic Drug (DMARD) Therapy <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient prescribed, dispensed, or administered at least one disease modifying anti-rheumatic drug (DMARD) during the measurement period? <a target="_blank" href="#" title="May include prescription given to the patient for DMARD therapy at one or more visits in the 12-month period OR patient already taking DMARD therapy as documented in current medication list."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Rheumatoid_Arthritis0108" value="4187F">Disease modifying anti-rheumatic drug therapy prescribed, dispensed, or administered. 
	 <a target="_blank" href="#" title="(4187F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0108" value="4187F:1P">Documentation of medical reason(s) for not prescribing, dispensing, or administering disease modifying anti-rheumatic drug therapy (ie, patients with a diagnosis of HIV or pregnancy) 
	 <a target="_blank" href="#" title="(4187F:1P)(Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0108" value="4187F:8P">Disease modifying anti-rheumatic drug therapy was not prescribed, dispensed, or administered, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4187F:8P)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0128 <a target="_blank" href="#" title="(NQF 0421)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Preventive Care and Screening: Body Mass Index (BMI) Screening and Follow-Up Plan <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population HealthnNOTE: Normal parameters:nAge 65 years and older BMI 23 and &lt; 30 kg/m2n"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Age 18 - 64 years BMI &ge; 18.5 and &lt; 25 kg/m2 <a target="_blank" href="#" title="Was height and weight measured and recorded within 6 months of the encounter?"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Rheumatoid_Arthritis0128" value="G8420">BMI is documented within normal parameters and no follow-up plan is required. 
	 <a target="_blank" href="#" title="(G8420) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0128" value="G8417">BMI is documented above normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8417) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0128" value="G8418">BMI is documented below normal parameters and a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8418) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0128" value="G8421">BMI not documented and no reason is given. 
	 <a target="_blank" href="#" title="(G8421) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0128" value="G8419">BMI documented outside normal parameters, no follow-up plan documented, no reason given 
	 <a target="_blank" href="#" title="(G8419) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0131 <a target="_blank" href="#" title="(NQF 0420)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Pain Assessment and Follow-Up <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was pain assessed using a standardized tool and documented if pain is present? <a target="_blank" href="#" title="Documentation of pain assessment for patients aged 18 and older."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Rheumatoid_Arthritis0131" value="G8730">Pain assessment documented as positive using a standardized tool AND a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8730)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0131" value="G8731">Pain assessment using a standardized tool is documented as negative, no follow-up plan required. 
	 <a target="_blank" href="#" title="(G8731)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0131" value="G8442">Pain assessment NOT documented as being performed, documentation the patient is not eligible for a pain assessment using a standardized tool. 
	 <a target="_blank" href="#" title="(G8442) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0131" value="G8939">Pain assessment documented as positive, follow-up plan not documented, documentation the patient is not eligible. 
	 <a target="_blank" href="#" title="(G8939) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0131" value="G8732">No documentation of pain assessment, reason not given. 
	 <a target="_blank" href="#" title="(G8732) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0131" value="G8509">Pain assessment documented as positive using a standardized tool, follow-up plan not documented, reason not given. 
	 <a target="_blank" href="#" title="(G8509) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0176 <a target="_blank" href="#" title="(NQF#0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Rheumatoid Arthritis (RA): Tuberculosis Screening <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Is patient for whom a TB screening was performed and results interpreted within 6 months prior to receiving a first course of therapy using a biologic disease-modifying anti-rheumatic drug? <a target="_blank" href="#" title="Includes Adalimunab, Etanercept, Infliximab, Abatacept, Anakinra (Rituximab is excluded)."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Rheumatoid_Arthritis0176" value="3455F 4195F">TB screening performed and results interpreted within six months prior to initiation of first-time biologic disease modifying anti-rheumatic drug therapy for RA. AND Patient receiving first-time biologic disease modifying anti-rheumatic drug therapy for rheumatoid arthritis. 
	 <a target="_blank" href="#" title="(3455F, 4195F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0176" value="3455F:1P 4195F">Documentation of medical reason for not screening for TB or interpreting results (ie, patient positive for TB and documentation of past treatment; patient who has recently completed a course of anti-TB therapy). AND Patient receiving first-time biologic disease modifying anti-rheumatic drug therapy for rheumatoid arthritis. 
	 <a target="_blank" href="#" title="(3455F:1P, 4195F)(Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0176" value="4196F">Patient not receiving first-time biologic disease modifying anti-rheumatic drug therapy for rheumatoid arthritis. 
	 <a target="_blank" href="#" title="(4196F)(Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0176" value="3455F:8P 4195F">TB screening not performed or results not interpreted, reason not otherwise specified. AND Patient receiving first-time biologic disease modifying anti-rheumatic drug therapy for rheumatoid arthritis. 
	 <a target="_blank" href="#" title="(3455F:8P, 4195F) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0177 <a target="_blank" href="#" title="(NQF#0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Rheumatoid Arthritis (RA): Periodic Assessment of Disease Activity <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Did patient with a rheumatoid arthritis diagnosis undergo an assessment and classification of disease activity within 12 months? <a target="_blank" href="#" title="Patients with disease activity assessed by a standardized descriptive or numeric scale or composite index and classified into one of the following categories: low, moderate or high, at least once within 12 months."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Rheumatoid_Arthritis0177" value="3470F">Rheumatoid arthritis (RA) disease activity, low. 
	 <a target="_blank" href="#" title="(3470F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0177" value="3471F">Rheumatoid arthritis (RA) disease activity, moderate. 
	 <a target="_blank" href="#" title="(3471F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0177" value="3472F">Rheumatoid arthritis (RA) disease activity, high. 
	 <a target="_blank" href="#" title="(3472F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0177" value="3470F">Disease activity not assessed and classified, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(3470F:8P)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0178 <a target="_blank" href="#" title="(NQF#0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Rheumatoid Arthritis (RA): Functional Status Assessment <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Did patient with diagnosis of rheumatoid arthritis (RA) undergo a functional status assessment at least once within 12 months? 
	<p></b>


	<input type="radio" name="Rheumatoid_Arthritis0178" value="1170F">Functional status assessed. 
	 <a target="_blank" href="#" title="(1170F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0178" value="1170F:8P">Functional status not assessed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(1170F:8P)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0179 <a target="_blank" href="#" title="(NQF#0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Rheumatoid Arthritis (RA): Assessment and Classification of Disease Prognosis <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Did patient with diagnosis of rheumatoid arthritis (RA) undergo an assessment and classification of disease prognosis at least once within 12 months? <a target="_blank" href="#" title="Patients with at least one documented assessment and classification (good/poor) of disease prognosis utilizing clinical markers of poor prognosis within 12 months."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Rheumatoid_Arthritis0179" value="3475F">Disease prognosis for rheumatoid arthritis assessed, poor prognosis documented. 
	 <a target="_blank" href="#" title="(3475F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0179" value="3476F">Disease prognosis for rheumatoid arthritis assessed, good prognosis documented. 
	 <a target="_blank" href="#" title="(3476F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0179" value="3475F:8P">Disease prognosis for rheumatoid arthritis not assessed and classified, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(3475F:8P)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0180 <a target="_blank" href="#" title="(NQF#0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Rheumatoid Arthritis (RA): Glucocorticoid Management <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Did patient with diagnosis of rheumatoid arthritis (RA) undergo assessment for glucocorticoid use and, for those on prolonged doses of prednisone = 10 mg daily (or equivalent) with improvement or no change in disease activity, documentation of glucocorticoid management plan within 12 months. <a target="_blank" href="#" title="Patients aged 18 and older."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Rheumatoid_Arthritis0180" value="4192F">Patient not receiving glucocorticoid therapy. 
	 <a target="_blank" href="#" title="(4192F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0180" value="4193F">Patient receiving &lt; 10 mg daily prednisone (or equivalent), or RA activity is worsening, or glucocorticoid use is for less than 6 months. 
	 <a target="_blank" href="#" title="(4193F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0180" value="4194F 0540F">Patient receiving = 10 mg daily prednisone (or equivalent) for longer than 6 months, and improvement or no change in disease activity. AND Glucocorticoid Management Plan documented. 
	 <a target="_blank" href="#" title="(4194F, 0540F)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0180" value="0540F:1P 4194F">Documentation of medical reason(s) for not documenting glucocorticoid management plan (ie, glucocorticoid prescription is for a medical condition other than RA). AND Patient receiving = 10 mg daily prednisone (or equivalent) for longer than 6 months, and improvement or no change in disease activity. 
	 <a target="_blank" href="#" title="(0540F:1P, 4194F)(Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0180" value="4194F:8P">Glucocorticoid dose was not documented, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4194F:8P)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0180" value="0540F:8P 4194F">Glucocorticoid management plan not documented, reason not otherwise specified. AND Patient receiving = 10 mg daily prednisone (or equivalent) for longer than 6 months, and improvement or no change in disease activity. 
	 <a target="_blank" href="#" title="(0540F:8P, 4194F)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0337 <a target="_blank" href="#" title="(NQF#0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Tuberculosis Prevention for Psoriasis, Psoriatic Arthritis and Rheumatoid Arthritis Patients on a Biological Immune Response Modifier <a target="_blank" href="#" title="National Quality Strategy Domain: Effecitve Clincal Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Does patient record inclue documented negative annual TB screening or documentation of the management of a positive TB screening test with no evidence of active tuberculosis through use of radiographic imaging (i.e., chest x-ray, CT)? 
	<p></b>


	<input type="radio" name="Rheumatoid_Arthritis0337" value="G9359">Documentation of negative or managed positive TB screen with further evidence that TB is not active. 
	 <a target="_blank" href="#" title="(G9359)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Rheumatoid_Arthritis0337" value="G9360">No documentation of negative or managed positive TB screen. 
	 <a target="_blank" href="#" title="(G9360)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

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
