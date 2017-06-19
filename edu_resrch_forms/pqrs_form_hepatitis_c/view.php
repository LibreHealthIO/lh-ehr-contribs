<?php
/**
 * PQRS Hepatitis C Group Direct Data Entry
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

$obj = formFetch("pqrs_form_hepatitis_c", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_hepatitis_c/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Hepatitis C Quality Reporting</b></center></span><br><br>
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
	Measure #0084 
	 <a target="_blank" href="#" title="(NQF #0395)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Hepatitis C: Ribonucleic Acid (RNA) Testing Before Initiating Treatment -- National Quality Strategy Domain 
	 <a target="_blank" href="#" title="Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient's quantitative HCV RNA testing performed within 12 months prior to initiation of antiviral treatment? 
	 
	<p></b>


	<input type="radio" name="Hepatitis_C0084" value="G9203 G9205" <?php if ($obj{"Hepatitis_C0084"} == "G9203 G9205") { echo 'checked=checked'; } ?> > RNA testing for hepatitis C documented as performed within 12 months prior to initiation of antiviral treatment for hepatitis C, and patient starting antiviral treatment for hepatitis C during the measurement period. 
	 <a target="_blank" href="#" title="(G9203, G9205)(Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0084" value="G9499" <?php if ($obj{"Hepatitis_C0084"} == "G9499") { echo 'checked=checked'; } ?> > Patient did not start or is not receiving antiviral treatment for hepatitis C during the measurement period. 
	 <a target="_blank" href="#" title="(G9499) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0084" value="G9204 G9205" <?php if ($obj{"Hepatitis_C0084"} == "G9204 G9205") { echo 'checked=checked'; } ?> > RNA testing for hepatitis C was not documented as performed within 12 months prior to initiation of antiviral treatment for hepatitis C, reason not given, and patient starting antiviral treatment for hepatitis C during the measurement period. 
	 <a target="_blank" href="#" title="(G9204, G9205) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0085 
	 <a target="_blank" href="#" title="(NQF #0396)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Hepatitis C: Hepatitis C Virus (HCV) Genotype Testing Prior to Treatment National 
	 <a target="_blank" href="#" title="Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient start antiviral treatment within the 12 month reporting period for whom hepatitis C virus (HCV) genotype testing was performed within 12 months prior to initiation of antiviral treatment? 
	 
	<p></b>


	<input type="radio" name="Hepatitis_C0085" value="G9207 G9206" <?php if ($obj{"Hepatitis_C0085"} == "G9207 G9206") { echo 'checked=checked'; } ?> > Hepatitis C genotype testing documented as performed within 12 months prior to initiation of antiviral treatment for hepatitis C, and patient starting antiviral treatment for hepatitis C during the measurement period. 
	 <a target="_blank" href="#" title="(G9207, G9206) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0085" value="G8458" <?php if ($obj{"Hepatitis_C0085"} == "G8458") { echo 'checked=checked'; } ?> > Clinician documented that patient is not an eligible candidate for genotype testing; patient not receiving antiviral treatment for hepatitis C during the measurement period (e.g. genotype test done prior to the reporting period, patient declines, patient not a candidate for antiviral treatment). 
	 <a target="_blank" href="#" title="(G8458) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0085" value="G9208 G9206" <?php if ($obj{"Hepatitis_C0085"} == "G9208 G9206") { echo 'checked=checked'; } ?> > Hepatitis C genotype testing was not documented as performed within 12 months prior to initiation of antiviral treatment for hepatitis C, reason not given, and patient starting antiviral treatment for hepatitis C during the measurement period. 
	 <a target="_blank" href="#" title="(G9208, G9206) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0087 
	 <a target="_blank" href="#" title="(NQF #0398)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Hepatitis C: Hepatitis C Virus (HCV) Ribonucleic Acid (RNA) Testing Between 4–12 Weeks After Initiation of Treatment 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was quantitative HCV RNA testing performed at no greater than 12 weeks from the initiation of antiviral treatment? 
	 
	<p></b>


	<input type="radio" name="Hepatitis_C0087" value="G9209 G8461" <?php if ($obj{"Hepatitis_C0087"} == "G9209 G8461") { echo 'checked=checked'; } ?> > Hepatitis C quantitative RNA testing documented as performed between 4-12 weeks after the initiation of antiviral treatment, and patient receiving antiviral treatment for hepatitis C during the measurement period. 
	 <a target="_blank" href="#" title="(G9209, G8461) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0087" value="G9210 G8461" <?php if ($obj{"Hepatitis_C0087"} == "G9210 G8461") { echo 'checked=checked'; } ?> > Hepatitis C quantitative RNA testing not performed between 4-12 weeks after the initiation of antiviral treatment for documented reason(s) (e.g., patients whose treatment was discontinued during the testing period prior to testing, other medical reasons, patient declined, other patient reasons), and patient receiving antiviral treatment for hepatitis C during the measurement period. 
	 <a target="_blank" href="#" title="(G9210, G8461) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0087" value="G8460" <?php if ($obj{"Hepatitis_C0087"} == "G8460") { echo 'checked=checked'; } ?> > Clinician documented that patient is not an eligible candidate for quantitative RNA testing; patient not receiving antiviral treatment for Hepatitis C. 
	 <a target="_blank" href="#" title="(G8460) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0087" value="G9211 G8461" <?php if ($obj{"Hepatitis_C0087"} == "G9211 G8461") { echo 'checked=checked'; } ?> > Hepatitis C quantitative RNA testing was not documented as performed between 4-12 weeks after the initiation of antiviral treatment, reason not given, patient receiving antiviral treatment for hepatitis C during the measurement period. 
	 <a target="_blank" href="#" title="(G9211, G8461) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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


	<input type="radio" name="Hepatitis_C0130" value="G8427" <?php if ($obj{"Hepatitis_C0130"} == "G8427") { echo 'checked=checked'; } ?> > Current medications documented. 
	 <a target="_blank" href="#" title="(G8427) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0130" value="G8430" <?php if ($obj{"Hepatitis_C0130"} == "G8430") { echo 'checked=checked'; } ?> > Eligible professional attests to documenting in the medical record the patient is not eligible for a current list of medications being obtained, updated, or reviewed by the eligible professional. 
	 <a target="_blank" href="#" title="(G8430) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0130" value="G8428" <?php if ($obj{"Hepatitis_C0130"} == "G8428") { echo 'checked=checked'; } ?> > Current list of medications not documented as obtained, updated, or reviewed by the eligible professional, reason not given. 
	 <a target="_blank" href="#" title="(G8428) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0183 
	 <a target="_blank" href="#" title="(NQF #0399)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Hepatitis C: Hepatitis A Vaccination 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient receive at least one injection of hepatitis A vaccine, have documented immunity to hepatitis A? 
	 
	<p></b>


	<input type="radio" name="Hepatitis_C0183" value="4148F" <?php if ($obj{"Hepatitis_C0183"} == "4148F") { echo 'checked=checked'; } ?> > Hepatitis A vaccine injection administered or previously received. 
	 <a target="_blank" href="#" title="(4148F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0183" value="3215F" <?php if ($obj{"Hepatitis_C0183"} == "3215F") { echo 'checked=checked'; } ?> > Patient has documented immunity to hepatitis A. 
	 <a target="_blank" href="#" title="(3215F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0183" value="4148F:1P" <?php if ($obj{"Hepatitis_C0183"} == "4148F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not administering at least one injection of hepatitis A vaccine (eg, allergy or intolerance to a known component of the vaccine, other medical reasons). 
	 <a target="_blank" href="#" title="(4148F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0183" value="4148F:2P" <?php if ($obj{"Hepatitis_C0183"} == "4148F:2P") { echo 'checked=checked'; } ?> > Documentation of patient reason(s) for not administering at least one injection of hepatitis A vaccine (eg, patient declined, insurance coverage, other patient reasons). 
	 <a target="_blank" href="#" title="(4148F:2P) (Patient Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0183" value="4148F:8P" <?php if ($obj{"Hepatitis_C0183"} == "4148F:8P") { echo 'checked=checked'; } ?> > Hepatitis A vaccine not received, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4148F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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


	<input type="radio" name="Hepatitis_C0226" value="4004F" <?php if ($obj{"Hepatitis_C0226"} == "4004F") { echo 'checked=checked'; } ?> > Patient screened for tobacco use AND received tobacco cessation intervention (counseling, pharmacotherapy, or both), if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0226" value="1036F" <?php if ($obj{"Hepatitis_C0226"} == "1036F") { echo 'checked=checked'; } ?> > Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0226" value="4004F:1P" <?php if ($obj{"Hepatitis_C0226"} == "4004F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not screening for tobacco use (eg, limited life expectancy, other medical reasons). 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0226" value="4004F:8P" <?php if ($obj{"Hepatitis_C0226"} == "4004F:8P") { echo 'checked=checked'; } ?> > Tobacco screening OR tobacco cessation intervention not performed, reason not otherwise specified. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0390 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Hepatitis C: Discussion and Shared Decision Making Surrounding Treatment Options 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Person and Caregiver-Centered Experience and Outcomes"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did the physician review the range of treatment options appropriate to patient's genotype and demonstrate a shared decision making approach with the patient? 
	 
	<p></b>


	<input type="radio" name="Hepatitis_C0390" value="G9399" <?php if ($obj{"Hepatitis_C0390"} == "G9399") { echo 'checked=checked'; } ?> > Documentation of a discussion that includes all of the following: treatment choices appropriate to genotype, risks and benefits, evidence of effectiveness, and patient preferences toward the outcome of the treatment. 
	 <a target="_blank" href="#" title="(G9399) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0390" value="G9400" <?php if ($obj{"Hepatitis_C0390"} == "G9400") { echo 'checked=checked'; } ?> > Documentation reason(s) for not discussing treatment options. Medical reasons: Patient is not a candidate for treatment due to advanced physical or mental health comorbidity (including active substance use); currently receiving antiviral treatment; successful antiviral treatment (with sustained virologic response) prior to reporting period; other documented medical reasons. Patient reasons: Patient unable or unwilling to participate in the discussion or other patient reasons. 
	 <a target="_blank" href="#" title="(G9400) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0390" value="G9401" <?php if ($obj{"Hepatitis_C0390"} == "G9401") { echo 'checked=checked'; } ?> > No documentation of a discussion that includes all of the following: treatment choices appropriate to genotype, risks and benefits, evidence of effectiveness, and patient preferences toward treatment. 
	 <a target="_blank" href="#" title="(G9401) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0401 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Hepatitis C: Screening for Hepatocellular Carcinoma (HCC) in Patients with Cirrhosis 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did chronic hepatitis C cirrhosis patient undergo abdominal imaging with either ultrasound, contrast enhanced CT or MRI for hepatocellular carcinoma (HCC) at least once within the 12 month reporting period? 
	 
	<p></b>


	<input type="radio" name="Hepatitis_C0401" value="G9455" <?php if ($obj{"Hepatitis_C0401"} == "G9455") { echo 'checked=checked'; } ?> > Patient underwent abdominal imaging with ultrasound, contrast enhanced CT or contrast MRI for HCC. 
	 <a target="_blank" href="#" title="(G9455) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0401" value="G9456" <?php if ($obj{"Hepatitis_C0401"} == "G9456") { echo 'checked=checked'; } ?> > Documentation of medical or patient reason(s) for not ordering or performing screening for HCC. Medical reason: Comorbid medical conditions with expected survival &lt;5 years, hepatic decompensation and not a candidate for liver transplantation, or other medical reasons. Patient reasons: Patient declined or other patient reasons (e.g., cost of tests, time related to accessing testing equipment). 
	 <a target="_blank" href="#" title="(G9456) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Hepatitis_C0401" value="G9457" <?php if ($obj{"Hepatitis_C0401"} == "G9457") { echo 'checked=checked'; } ?> > Patient did not undergo abdominal imaging and did not have a documented reason for not undergoing abdominal imaging in the reporting period. 
	 <a target="_blank" href="#" title="(G9457) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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
