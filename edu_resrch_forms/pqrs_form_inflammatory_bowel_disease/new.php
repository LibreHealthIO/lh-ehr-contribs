<?php
/**
 * PQRS Inflammatory Bowel Disease Group Direct Data Entry
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
formHeader("Form: Inflammatory Bowel Disease");
?>
<html><head>
<?php html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>
<form method=post action="<?php echo $rootdir;?>/forms/pqrs_form_inflammatory_bowel_disease/save.php?mode=new" name="my_form">
<br>
<span class="title"><center>Inflammatory Bowel Disease Quality Reporting</center></span><br><br>
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
<textarea cols=120 rows=3 wrap=virtual name="purpose" >To ensure quality care and reporting on patients with Inflammatory Bowel Disease.</textarea>
<br><br>

<table>

<tr>	<td> <br><p><br>
	<b>
	Measure #0110 <a target="_blank" href="#" title="(NQF 0041)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Preventive Care and Screening: Influenza Immunization <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Did patient receive an influenza immunization for this flu season OR report a previous receipt of an influenza immunization? <a target="_blank" href="#" title="Patients 6 months and older seen for a visit between October 1 and March 31 OR who reported previous receipt of an influenze immunization."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Inflammatory_Bowel_Disease0110" value="G8482">Influenza immunization administered or previously received. 
	 <a target="_blank" href="#" title="(G8482) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0110" value="G8483">Influenza immunization not administered, reason documented. (e.g., patient allergy or other medical reasons, patient declined or other patient reasons, vaccine not available or other system reasons). 
	 <a target="_blank" href="#" title="(G8483) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0110" value="G8484">Influenza immunization was not administered, reason not given. 
	 <a target="_blank" href="#" title="(G8484) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0111 <a target="_blank" href="#" title="(NQF #0043)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Pneumonia Vaccination Status for Older Adults <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health//nNOTE: While the measure provides credit for adults 65 years of age and older who have ever received either the PCV13 or PPSV23 vaccine (or both), according to ACIP recommendations, patients should receive both vaccines. The order and timing of the vaccinations depends on certain patient characteristics, and are described in more detail in the ACIP recommendations."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Did patient ever receive a pneumococcal vaccination? 
	<p></b>


	<input type="radio" name="Inflammatory_Bowel_Disease0111" value="4040F">Pneumococcal vaccine administered or previously received. 
	 <a target="_blank" href="#" title="(4040F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0111" value="4040F:8P">Pneumococcal vaccine was not administered or previously received, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4040F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0226 <a target="_blank" href="#" title="(NQF #0028)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention <a target="_blank" href="#" title="National Quality Strategy Domain: Community / Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient screened for tobacco use within 24 months AND given tobacco cessation interventionn if identified as a tobacco user? <a target="_blank" href="#" title="Tobacco use includes use of any type of tobacco; tobacco cessation intervention includes brief counseling (3 minutes or less), and/or pharmacotherapy."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Inflammatory_Bowel_Disease0226" value="4004F">Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0226" value="1036F">Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0226" value="4004F:1P">Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons). 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0226" value="4004F:8P">Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0270 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Inflammatory Bowel Disease (IBD): Preventive Care: Corticosteroid Sparing Therapy <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient prescribed a corticosteroid sparing therapy (e.g., thiopurines, methotrexate, or biologic agents)? 
	<p></b>


	<input type="radio" name="Inflammatory_Bowel_Disease0270" value="G9467 4142F">Corticosteroid sparing therapy prescribed. AND Patient who received or are receiving corticosteroids greater than or equal to 10 mg/day of prednisone equivalents for 60 or greater consecutive days or a single prescription equating to 600mg prednisone or greater for all fills within the last twelve months. 
	 <a target="_blank" href="#" title="(G9467, 4142F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0270" value="4142F:1P">Documentation of medical reason(s) for not treating with corticosteroid sparing therapy (e.g., benefits of continuing steroid therapy outweigh the risk of continuing steroid therapy or initiating steroid sparing therapy, patient is receiving the first course of corticosteroids for the treatment of IBD). 
	 <a target="_blank" href="#" title="(4142F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0270" value="G9467 4142F:2P">Documentation of patient reason(s) for not treating with corticosteroid sparing therapy (eg, patient refuses to initiate steroid sparing therapy). AND Patient who have received or are receiving corticosteroids greater than or equal to 10 mg/day of prednisone equivalents for 60 or greater consecutive days or a single prescription equating to 600mg prednisone or greater for all fills within the last twelve months. 
	 <a target="_blank" href="#" title="(G9467, 4142F:2P) (Patient Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0270" value="G9468">Patient not receiving corticosteroids greater than or equal to 10 mg/day of prednisone equivalents for 60 or greater consecutive days or a single prescription equating to 600mg prednisone or greater for all fills. 
	 <a target="_blank" href="#" title="(G9468) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0270" value="G9467 4142F:8P">Corticosteroid sparing therapy not prescribed, reason not otherwise specified. AND Patient who have received or are receiving corticosteroids greater than or equal to 10 mg/day of prednisone equivalents for 60 or greater consecutive days or a single prescription equating to 600mg prednisone or greater for all fills within the last twelve months. 
	 <a target="_blank" href="#" title="(G9467, 4142F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0271 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Inflammatory Bowel Disease (IBD): Preventive Care: Corticosteroid Related Iatrogenic Injury – Bone Loss Assessment <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Did the patient received doses of corticosteroids greater than or equal to 10 mg/day of prednisone equivalents for 60 or greater consecutive days (or a single prescription equating to 600mg prednisone or greater) for all fills and was patient documented for risk of bone loss during the reporting year or the pervious calendar year? <a target="_blank" href="#" title="Definitions: Corticosteroids - Prednisone equivalents used expressly for the treatment of IBD and not for other indications (including premedication before anti-TNF therapy, non-IBD indications) can be determined using the following: 1 mg of prednisone = 1 mg of prednisolone; 5 mg of cortisone; 4 mg of hydrocortisone; 0.8 mg of triamcinolone; 0.8 mg of methylprednisolone; 0.15 mg of dexamethasone; 0.15 mg of betamethasone. Documented - Documentation that an assessment for risk of bone loss has been performed or ordered. This includes, but is not limited to, review of systems and medication history, and ordering of Central Dual-energy X-Ray Absorptiometry (DXA) scan."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Inflammatory_Bowel_Disease0271" value="G8861 G9469">Within the past 2 years, Central Dual-energy X-Ray Absorptiometry (DXA) ordered and documented review of systems and medication history or pharmacologic therapy (other than minerals/vitamins) for osteoporosis prescribed. AND Patients who have received or are receiving corticosteroids greater than or equal to 10 mg/day of prednisone equivalents for 60 or greater consecutive days or a single prescription equating to 600mg prednisone or greater for all fills. 
	 <a target="_blank" href="#" title="(G8861, G9469) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0271" value="G9470">Patients not receiving corticosteroids greater than or equal to 10 mg/day of prednisone equivalents for 60 or greater consecutive days or a single prescription equating to 600mg prednisone or greater for all fills. 
	 <a target="_blank" href="#" title="(G9470) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0271" value="G9472 G9469">Within the past 2 years, Central Dual-energy X-Ray Absorptiometry (DXA) not ordered and documented, no review of systems and no medication history or pharmacologic therapy (other than minerals/vitamins) for osteoporosis prescribed. AND Patients who have received or are receiving corticosteroids greater than or equal to 10 mg/day of prednisone equivalents for 60 or greater consecutive days or a single prescription equating to 600mg prednisone or greater for all fills. 
	 <a target="_blank" href="#" title="(G9472, G9469) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0274 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Inflammatory Bowel Disease (IBD): Testing for Latent Tuberculosis (TB) Before Initiating Anti-TNF (Tumor Necrosis Factor) Therapy <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Was patient screened for TB prior to receiving anti-TNF therapy? <a target="_blank" href="#" title="TB screening performed and results interpreted within 6 months prior to therapy."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Inflammatory_Bowel_Disease0274" value="3510F G8868">Documentation that tuberculosis (TB) screening test performed and results interpreted. AND Patients receiving a first course of anti-TNF therapy. 
	 <a target="_blank" href="#" title="(3510F, G8868) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0274" value="6150F">Patients not receiving a first course of anti-TNF (tumor necrosis factor) therapy. 
	 <a target="_blank" href="#" title="(6150F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0274" value="3510F:1P">Documentation of medical reason(s) for not performing TB screening test within 6 months prior to receiving a first course of anti-TNF therapy (eg, patient positive for TB and documentation of past treatment; patient recently completed course of anti-TB therapy). 
	 <a target="_blank" href="#" title="(3510F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0274" value="3510F:2P G8868">Documentation of patient reason(s) for not performing TB screening test within 6 months prior to receiving a first course of anti-TNF therapy (eg, patient declined). AND Patients receiving a first course of anti-TNF therapy. 
	 <a target="_blank" href="#" title="(3510F:2P, G8868) (Patient Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0274" value="3510F:8P G8868">TB screening test not performed within 6 months prior to receiving a first course of anti-TNF therapy, reason not otherwise specified. AND Patients receiving a first course of anti-TNF therapy. 
	 <a target="_blank" href="#" title="(3510F:8P, G8868) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

<tr>	<td> <br><p><br>
	<b>
	Measure #0275 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> -- Inflammatory Bowel Disease (IBD): Assessment of Hepatitis B Virus (HBV) Status Before Initiating Anti-TNF (Tumor Necrosis Factor) Therapy <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	</b>
	<p><b>
	Question: Did patient have Hepatitis B Virus (HBV) status assessed prior to receiving anti-TNF therapy? <a target="_blank" href="#" title="HBV status assessed and results interpreted within one year prior to anti_TNF therapy."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Inflammatory_Bowel_Disease0275" value="3517F">Hepatitis B Virus (HBV) status assessed and results interpreted within one year prior to receiving a first course of anti-TNF (tumor necrosis factor) therapy. 
	 <a target="_blank" href="#" title="(3517F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0275" value="G8869">Patient has documented immunity to hepatitis B and is receiving a first course of anti-TNF therapy. 
	 <a target="_blank" href="#" title="(G8869) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0275" value="G9504">Documented reason for not assessing Hepatitis B Virus (HBV) status (e.g. patient not receiving a first course of anti-TNF therapy, patient declined) within one year prior to first course of anti-TNF therapy. 
	 <a target="_blank" href="#" title="(G9504) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>


	<input type="radio" name="Inflammatory_Bowel_Disease0275" value="3517F:8P">Hepatitis B Virus (HBV) status not assessed and results interpreted within one year prior to receiving a first course of anti-TNF (tumor necrosis factor) therapy, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(3517F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 	<br>

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
