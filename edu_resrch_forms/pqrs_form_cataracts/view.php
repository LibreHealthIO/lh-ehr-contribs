<?php
/**
 * PQRS ?Cataracts Group Direct Data Entry
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

$obj = formFetch("pqrs_form_?cataracts", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_?cataracts/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>?Cataracts Quality Reporting</b></center></span><br><br>
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
	 <a target="_blank" href="#" title="Patient’s medications obtained, updated, or reviewed, and documented."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="?Cataracts0130" value="G8427" <?php if ($obj{"?Cataracts0130"} == "G8427") { echo 'checked=checked'; } ?> > Current (or no) medications documented in the patient's medical record. 
	 <a target="_blank" href="#" title="(G8427) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="?Cataracts0130" value="G8430" <?php if ($obj{"?Cataracts0130"} == "G8430") { echo 'checked=checked'; } ?> > Patient is not eligible. 
	 <a target="_blank" href="#" title="(G8430) (Other Performance Exclusion( (emergent or urgent situation)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="?Cataracts0130" value="G8428" <?php if ($obj{"?Cataracts0130"} == "G8428") { echo 'checked=checked'; } ?> > Current list of medications not documented, NOS. 
	 <a target="_blank" href="#" title="(G8428) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0191 
	 <a target="_blank" href="#" title="(NQF #0565)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Cataracts: 20/40 or Better Visual Acuity within 90 Days Following Cataract Surgery 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient with a diagnosis of uncomplicated cataract who had cataract surgery, and no significant ocular conditions ihave best-corrected visual acuity of 20/40 or better (distance or near) achieved within 90 days following the cataract surgery? 
	 
	<p></b>


	<input type="radio" name="?Cataracts0191" value="4175F" <?php if ($obj{"?Cataracts0191"} == "4175F") { echo 'checked=checked'; } ?> > Best-corrected visual acuity achieved. 
	 <a target="_blank" href="#" title="(4175F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="?Cataracts0191" value="4175F:8P" <?php if ($obj{"?Cataracts0191"} == "4175F:8P") { echo 'checked=checked'; } ?> > Best-corrected visual acuity of 20/40 or better (distance or near) not achieved reason NOS. 
	 <a target="_blank" href="#" title="(4175F:8P)(Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0192 
	 <a target="_blank" href="#" title="(NQF #0564)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Cataracts: Complications within 30 Days Following Cataract Surgery Requiring Additional Surgical Procedures 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety NOTE: This is an INVERSE measure. A lower calculated performance rate for this measure indicates better clinical care or control."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did complications occur within 30 days following surgery for uncomplicated cataract? 
	 <a target="_blank" href="#" title="Any of the following major complications: retained nuclear fragments, endophthalmitis, dislocated or wrong power IOL, retinal detachment, or wound dehiscence"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="?Cataracts0192" value="G8627" <?php if ($obj{"?Cataracts0192"} == "G8627") { echo 'checked=checked'; } ?> > Surgical procedure performed within 30 days following cataract surgery for major complications. 
	 <a target="_blank" href="#" title="(G8627) (Performance Met, INVERSE MEASURE) (eg, retained nuclear fragments, endophthalmitis, dislocated or wrong power IOL, retinal detachment or wound dehiscence)."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="?Cataracts0192" value="G8628" <?php if ($obj{"?Cataracts0192"} == "G8628") { echo 'checked=checked'; } ?> > Surgical procedure NOT performed within 30 days following cataract surgery for major complications. 
	 <a target="_blank" href="#" title="(G8628) (Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0226 
	 <a target="_blank" href="#" title="(NQF #0028)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community / Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Within the last 12 months: 
	 
	<p></b>


	<input type="radio" name="?Cataracts0226" value="4004F" <?php if ($obj{"?Cataracts0226"} == "4004F") { echo 'checked=checked'; } ?> > Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="?Cataracts0226" value="1036F" <?php if ($obj{"?Cataracts0226"} == "1036F") { echo 'checked=checked'; } ?> > Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="?Cataracts0226" value="4004F:1P" <?php if ($obj{"?Cataracts0226"} == "4004F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not screening for tobacco use. 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="?Cataracts0226" value="4004F:8P" <?php if ($obj{"?Cataracts0226"} == "4004F:8P") { echo 'checked=checked'; } ?> > Tobacco screening OR tobacco cessation intervention not performed, NOS. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0303 
	 <a target="_blank" href="#" title="(NQF #1536)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Cataracts: Improvement in Patient’s Visual Function within 90 Days Following Cataract Surgery 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Person and Caregiver-Centered Experience and Outcomes"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient achieve improvement in visual function within 90 days following cataract surgery? 
	 <a target="_blank" href="#" title="Improvement based on completing a pre-operative and post-operative visual function survey?"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="?Cataracts0303" value="G0913" <?php if ($obj{"?Cataracts0303"} == "G0913") { echo 'checked=checked'; } ?> > Improvement in visual function achieved. 
	 <a target="_blank" href="#" title="(G0913) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="?Cataracts0303" value="G0914" <?php if ($obj{"?Cataracts0303"} == "G0914") { echo 'checked=checked'; } ?> > Patient care survey was not completed by patient. 
	 <a target="_blank" href="#" title="(G0914) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="?Cataracts0303" value="G0915" <?php if ($obj{"?Cataracts0303"} == "G0915") { echo 'checked=checked'; } ?> > Improvement in visual function not achieved. 
	 <a target="_blank" href="#" title="(G0915) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0304 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Cataracts: Patient Satisfaction within 90 Days Following Cataract Surgery 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Person and Caregiver-Centered Experience and Outcomes"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient who had cataract surgery satisfied with their care within 90 days following the cataract surgery? 
	 <a target="_blank" href="#" title="Satisfaction based on completion of the Consumer Assessment of Healthcare Providers and Systems Surgical Care Survey?"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="?Cataracts0304" value="G0916" <?php if ($obj{"?Cataracts0304"} == "G0916") { echo 'checked=checked'; } ?> > Satisfaction with care achieved. 
	 <a target="_blank" href="#" title="(G0916) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="?Cataracts0304" value="G0917" <?php if ($obj{"?Cataracts0304"} == "G0917") { echo 'checked=checked'; } ?> > Patient care survey was not completed by patient. 
	 <a target="_blank" href="#" title="(G0917) (Other Performance Exclusion)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="?Cataracts0304" value="G0918" <?php if ($obj{"?Cataracts0304"} == "G0918") { echo 'checked=checked'; } ?> > Satisfaction with care not achieved. 
	 <a target="_blank" href="#" title="(G0918) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0388 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Cataract Surgery with Intra-Operative Complications (Unplanned Rupture of Posterior Capsule Requiring Unplanned Vitrectomy) 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety NOTE: This is an INVERSE measure. A lower calculated performance rate for this measure indicates better clinical care or control."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient experience an unplanned rupture of the posterior capsule requiring vitrectomy during cataract surgery? 
	 
	<p></b>


	<input type="radio" name="?Cataracts0388" value="G9389" <?php if ($obj{"?Cataracts0388"} == "G9389") { echo 'checked=checked'; } ?> > Unplanned rupture of the posterior capsule requiring vitrectomy during cataract surgery. 
	 <a target="_blank" href="#" title="(G9389) (Performance Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="?Cataracts0388" value="G9390" <?php if ($obj{"?Cataracts0388"} == "G9390") { echo 'checked=checked'; } ?> > No unplanned rupture of the posterior capsule requiring vitrectomy during cataract surgery. 
	 <a target="_blank" href="#" title="(G9390) (Performance Not Met, INVERSE MEASURE)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0389 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Cataract Surgery: Difference Between Planned and Final Refraction 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Did patient undergoing cataract surgery achieve a final refraction within +/- 1.0 diopters of their planned (target) refraction? 
	 <a target="_blank" href="#" title="Include only procedures performed through September 30 of the reporting period."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="?Cataracts0389" value="G9519" <?php if ($obj{"?Cataracts0389"} == "G9519") { echo 'checked=checked'; } ?> > Final refraction measure achieved. 
	 <a target="_blank" href="#" title="(G9519) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="?Cataracts0389" value="G9520" <?php if ($obj{"?Cataracts0389"} == "G9520") { echo 'checked=checked'; } ?> > Final refraction measure not achieved, reason NOS. 
	 <a target="_blank" href="#" title="(G9520) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

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
