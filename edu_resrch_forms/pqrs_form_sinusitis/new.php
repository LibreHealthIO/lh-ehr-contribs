<?php
/**
 * PQRS Sinusitis Group Direct Data Entry
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
formHeader("Form: Sinusitis");
?>
<html><head>
<?php html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>
<form method=post action="<?php echo $rootdir;?>/forms/pqrs_form_sinusitis/save.php?mode=new" name="my_form">
<br>
<span class="title"><center>Sinusitis Quality Reporting</center></span><br><br>
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
<textarea cols=120 rows=3 wrap=virtual name="purpose" >To ensure quality care and reporting on patients with Sinusitis.</textarea>
<br><br>

<table>

<tr>	<td> <br><p><br>
	<b>
	Measure #0130 <a target="_blank" href="#" title="(NQF #0419)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Documentation of Current Medications in the Medical Record <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Are current medications documented in the patient's medical record? <a target="_blank" href="#" title="Eligible professional attests to documenting in the medical record they obtained, updated, or reviewed the patient’s current medications."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Sinusitis0130" value="G8427">Current medications documented. 
	 <a target="_blank" href="#" title="(G8427) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0130" value="G8430">Eligible professional attests to documenting in the medical record the patient is not eligible for a current list of medications being obtained, updated, or reviewed by the eligible professional. 
	 <a target="_blank" href="#" title="(G8430) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0130" value="G8428">Current list of medications not documented as obtained, updated, or reviewed by the eligible professional, reason not given. 
	 <a target="_blank" href="#" title="(G8428) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0131 <a target="_blank" href="#" title="(NQF #0420)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Pain Assessment and Follow-Up <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was pain assessed using a standardized tool and documented if pain is present? 
	<p></b>


	<input type="radio" name="Sinusitis0131" value="G8730">Pain assessment documented as positive using a standardized tool AND a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8730)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0131" value="G8731">Pain assessment using a standardized tool is documented as negative, no follow-up plan required. 
	 <a target="_blank" href="#" title="(G8731)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0131" value="G8442">Pain assessment NOT documented as being performed, documentation the patient is not eligible for a pain assessment using a standardized tool. 
	 <a target="_blank" href="#" title="(G8442) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0131" value="G8939">Pain assessment documented as positive, follow-up plan not documented, documentation the patient is not eligible. 
	 <a target="_blank" href="#" title="(G8939) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0131" value="G8732">No documentation of pain assessment, reason not given. 
	 <a target="_blank" href="#" title="(G8732) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0131" value="G8509">Pain assessment documented as positive using a standardized tool, follow-up plan not documented, reason not given. 
	 <a target="_blank" href="#" title="(G8509) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0226 <a target="_blank" href="#" title="(NQF #0028)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention <a target="_blank" href="#" title="National Quality Strategy Domain: Community / Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient screened for tobacco use within 24 months AND given tobacco cessation interventionn if identified as a tobacco user? <a target="_blank" href="#" title="Tobacco use includes use of any type of tobacco; tobacco cessation intervention includes brief counseling (3 minutes or less), and/or pharmacotherapy."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Sinusitis0226" value="4004F">Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0226" value="1036F">Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0226" value="4004F:1P">Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons). 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0226" value="4004F:8P">Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0331 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Adult Sinusitis: Antibiotic Prescribed for Acute Sinusitis (Overuse) <a target="_blank" href="#" title="National Quality Strategy Domain: Efficiency and Cost Reduction NOTE: This is an INVERSE measure. A lower calculated performance rate for this measure indicates better clinical care or control. The “Performance Not Met” numerator option for this measure is the representation of the better clinical quality or control."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient prescribed an antiobiotic within 10 days after acute sinusitis/rhinosinusitis systems reported? 
	<p></b>


	<input type="radio" name="Sinusitis0331" value="G9286">Antibiotic regimen prescribed within10 days after onset of symptoms. 
	 <a target="_blank" href="#" title="(G9286) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0331" value="G9505">Antibiotic regimen prescribed within 10 days after onset of symptoms for documented medical reason. 
	 <a target="_blank" href="#" title="(G9505) (Other Performance Exclusion, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0331" value="G9287">Antibiotic regimen not prescribed within 10 days after onset of symptoms. 
	 <a target="_blank" href="#" title="(G9287)(Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0332 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Adult Sinusitis: Appropriate Choice of Antibiotic: Amoxicillin With or Without Clavulanate Prescribed for Patients with Acute Bacterial Sinusitis (Appropriate Use) <a target="_blank" href="#" title="National Quality Strategy Domain: Efficiency and Cost Reduction"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was an antiobitc prescribed to the patient with a diagnosis of acute bacterial sinusitis? 
	<p></b>


	<input type="radio" name="Sinusitis0332" value="G9315">Amoxicillin, with or without clavulanate, prescribed as a first line antibiotic at the time of diagnosis 
	 <a target="_blank" href="#" title="(G9315) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0332" value="G9313">Amoxicillin, with or without clavulanate, not prescribed as first line antibiotic at the time of diagnosis for documented reason (e.g., cystic fibrosis, immotile cilia disorders, ciliary dyskinesia, immune deficiency, prior history of sinus surgery within the past 12 months, anatomic abnormalities, such as deviated nasal septum, resistant organisms, allergy to medication, recurrent sinusitis, chronic sinusitis, or other reasons) 
	 <a target="_blank" href="#" title="(G9313) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0332" value="G9314">Amoxicillin, with or without clavulanate, not prescribed as first line antibiotic at the time of diagnosis, reason not given 
	 <a target="_blank" href="#" title="(G9314)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0333 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Adult Sinusitis: Computerized Tomography (CT) for Acute Sinusitis (Overuse) NOTE: This is an INVERSE measure. A lower calculated performance rate for this measure indicates better clinical care or control. The “Performance Not Met” numerator option for this measure is the representation of the better clinical quality or control. <a target="_blank" href="#" title="National Quality Strategy Domain: Efficiency and Cost Reductionn"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was a CT scan performed within 28 days of an acute sinusitis diagnosis? <a target="_blank" href="#" title="CT scan of the paranasal sinuses ordered at the time of diagnosis or received within 28 days."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Sinusitis0333" value="G9349">CT scan of the paranasal sinuses ordered at the time of diagnosis or received within 28 days after date of diagnosis 
	 <a target="_blank" href="#" title="(G9349) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0333" value="G9348">CT scan of the paranasal sinuses ordered at the time of diagnosis for documented reasons (e.g., persons with sinusitis symptoms lasting at least 7 to 10 days, antibiotic resistance, immunocompromised, recurrent sinusitis, acute frontal sinusitis, acute sphenoid sinusitis, periorbital cellulitis, or other medical). 
	 <a target="_blank" href="#" title="(G9348) (Other Performance Exclusion, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Sinusitis0333" value="G9350">CT scan of the paranasal sinuses not ordered at the time of diagnosis or received within 28 days after date of diagnosis 
	 <a target="_blank" href="#" title="(G9350) (Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

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
