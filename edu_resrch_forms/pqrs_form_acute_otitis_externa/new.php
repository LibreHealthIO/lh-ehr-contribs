<?php
/**
 * PQRS Acute Otitis Externa Group Direct Data Entry
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
formHeader("Form: Acute Otitis Externa");
?>
<html><head>
<?php html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>
<form method=post action="<?php echo $rootdir;?>/forms/pqrs_form_acute_otitis_externa/save.php?mode=new" name="my_form">
<br>
<span class="title"><center>Acute Otitis Externa Quality Reporting</center></span><br><br>
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
<textarea cols=120 rows=3 wrap=virtual name="purpose" >To ensure quality care and reporting on patients with Acute Otitis Externa.</textarea>
<br><br>

<table>

<tr>	<td> <br><p><br>
	<b>
	Measure #0091 <a target="_blank" href="#" title="(NQF #0653)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Acute Otitis Externa (AOE): Topical Therapy <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient prescribed topical preparations, including OTC, for AOE? 
	<p></b>


	<input type="radio" name="Acute_Otitis_Externa0091" value="4130F">Topical preparations (including OTC) prescribed. 
	 <a target="_blank" href="#" title="(4130F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0091" value="4130F:1P">Documentation of medical reason(s) for not prescribing topical preparations (including OTC). 
	 <a target="_blank" href="#" title="(4130F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0091" value="4130F:2P">Documentation of patient reason(s) for not prescribing topical preparations (including OTC). 
	 <a target="_blank" href="#" title="(4130F:2P) (Patient Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0091" value="4130F:8P">Topical preparations (including OTC) not prescribed, NOS. 
	 <a target="_blank" href="#" title="(4130F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0093 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Acute Otitis Externa (AOE): Systemic Antimicrobial Therapy – Avoidance of Inappropriate Use <a target="_blank" href="#" title="National Quality Strategy Domain: Efficiency and Cost Reduction//nThis is an Inverse Measure: A lower score is desired."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient diagnosed with Acute Otitis Externa NOT prescribed a systemic antimicrobial therapy? 
	<p></b>


	<input type="radio" name="Acute_Otitis_Externa0093" value="4132F">Systemic antimicrobial therapy not prescribed. 
	 <a target="_blank" href="#" title="(4132F) (Performance Met), INVERSE MEASURE"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0093" value="4131F:1P">Documentation of medical reason(s) for prescribing systemic antimicrobial therapy. 
	 <a target="_blank" href="#" title="(4131F:1P) (Medical Performance Exclusion), INVERSE MEASURE"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0093" value="4131F">Systemic antimicrobial therapy prescribed. 
	 <a target="_blank" href="#" title="(4131F) (Performance Not Met), INVERSE MEASURE"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0130 <a target="_blank" href="#" title="(NQF #0419)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Documentation of Current Medications in the Medical Record <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Are current medications documented in the patient's medical record? <a target="_blank" href="#" title="Patient’s medications obtained, updated, or reviewed, and documented."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Acute_Otitis_Externa0130" value="G8427">Current (or no) medications documented in the patient's medical record. 
	 <a target="_blank" href="#" title="(G8427) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0130" value="G8430">Patient is not eligible. 
	 <a target="_blank" href="#" title="(G8430) (Other Performance Exclusion) (eg, emergent or urgent situation)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0130" value="G8428">Current list of medications not documented, reason not given. 
	 <a target="_blank" href="#" title="(G8428) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0131 <a target="_blank" href="#" title="(NQF #0420)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Pain Assessment and Follow-Up <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient's pain assessed using a standardized tool and documented if pain is present? 
	<p></b>


	<input type="radio" name="Acute_Otitis_Externa0131" value="G8730">Pain assessment documented as positive AND a follow-up plan is documented. 
	 <a target="_blank" href="#" title="(G8730)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0131" value="G8731">Pain assessment is documented as negative, no follow-up plan required. 
	 <a target="_blank" href="#" title="(G8731)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0131" value="G8442">Patient is not eligible for a pain assessment. 
	 <a target="_blank" href="#" title="(G8442) (Other Performance Exclusion) (eg, urgent, emergent situation or patient incapacitated)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0131" value="G8939">Pain assessment documented as positive, no follow-up plan, patient is not eligible. 
	 <a target="_blank" href="#" title="(G8939) (Other Performance Exclusion) (urgent, emergent situation or patient incapacitated)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0131" value="G8732">No documentation of pain assessment, reason not given. 
	 <a target="_blank" href="#" title="(G8732) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0131" value="G8509">Pain assessment documented as positive, no follow-up plan, NOS. 
	 <a target="_blank" href="#" title="(G8509) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0154 <a target="_blank" href="#" title="(NQF: #0101)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Falls: Risk Assessment <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was risk assessment for patient with a history of falls completed within the past 12 months? <a target="_blank" href="#" title="2 or more falls in the past year or any fall with injury in the past year. Documentation of patient reported history of falls is sufficient."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Acute_Otitis_Externa0154" value="3288F 1100F">Falls risk assessment documented and patient screened for future fall risk. 
	 <a target="_blank" href="#" title="(3288F, 1100F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0154" value="3288F:1P 1100F">Medical reason(s) for not completing a risk assessment and patient screened for future fall risk. 
	 <a target="_blank" href="#" title="(3288F:1P, 1100F) (Medical Performance Exclusion) (eg, patient not ambulatory)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0154" value="1101F">Patient screened for future fall risk; no falls or only one fall without injury in the past year. 
	 <a target="_blank" href="#" title="(1101F) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0154" value="1101F:8P">Patient not eligible; fall status not documented. 
	 <a target="_blank" href="#" title="(1101F:8P) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0154" value="3288F:8P 1100F">Falls risk assessment not completed, NOS, AND patient screened for fall risk. 
	 <a target="_blank" href="#" title="(3288F:8P, 1100F) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0155 <a target="_blank" href="#" title="(NQF: #0101)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Falls: Plan of Care <a target="_blank" href="#" title="National Quality Strategy Domain: Communication and Care Coordination"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was a plan of care for patient with a history of falls documented within 12 months? <a target="_blank" href="#" title="History of falls is defined as 2 or more falls in the past year or any fall with injury in the past year. Documentation of patient reported history of falls is sufficient."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Acute_Otitis_Externa0155" value="0518F">Falls plan of care documented. 
	 <a target="_blank" href="#" title="(0518F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0155" value="0518F:1P">Documentation of medical reason(s) for no plan of care for falls. 
	 <a target="_blank" href="#" title="(0518F:1P) (Medical Performance Exclusion) (eg, patient is not ambulatory)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0155" value="0518F:8P">Plan of care not documented, reason NOS. 
	 <a target="_blank" href="#" title="(0518F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0226 <a target="_blank" href="#" title="(NQF #0028)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention <a target="_blank" href="#" title="National Quality Strategy Domain: Community / Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient screened for tobacco use within 24 months AND given tobacco cessation interventionn if identified as a tobacco user? <a target="_blank" href="#" title="Tobacco use includes use of any type of tobacco; tobacco cessation intervention includes brief counseling (3 minutes or less), and/or pharmacotherapy."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Acute_Otitis_Externa0226" value="4004F">Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0226" value="1036F">Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0226" value="4004F:1P">Documentation of medical reason(s) for not screening for tobacco use. 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0226" value="4004F:8P">Tobacco screening OR tobacco cessation intervention not performed, NOS. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0317 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Preventive Care and Screening: Screening for High Blood Pressure and Follow-Up Documented <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health NOTE: BP screening and follow-up must be performed once per measurement period. For patients with Normal blood pressure a follow-up plan is not required."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient screened for high blood pressure and is indicated follow-up documented? 
	<p></b>


	<input type="radio" name="Acute_Otitis_Externa0317" value="G8783">Normal blood pressure reading documented, follow-up not required. 
	 <a target="_blank" href="#" title="(G8783) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0317" value="G8950">Pre-Hypertensive or Hypertensive blood pressure reading documented, AND the indicated follow-up is documented. 
	 <a target="_blank" href="#" title="(G8950) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0317" value="G8784">Patient not eligible. 
	 <a target="_blank" href="#" title="(G8784) (Other Performance Exclusion) (eg, (active diagnosis of hypertension, patient refuses, urgent or emergent situation)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0317" value="G8785">Blood pressure reading not documented, NOS. 
	 <a target="_blank" href="#" title="(G8785) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Acute_Otitis_Externa0317" value="G8952">Pre-Hypertensive or Hypertensive blood pressure reading documented, indicated follow-up not documented, NOS. 
	 <a target="_blank" href="#" title="(G8952) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

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
