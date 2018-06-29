<?php
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: BPA");
?>
<html><head>
<?php html_header_show();?>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
</head>
<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<form method=post action="<?echo $rootdir;?>/forms/bpa/save.php?mode=new" name="my_form">
<br>
<span class="title"><center>Counseling Assessment</center></span><br><br>
<center><a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
You must EDIT the form after saving and reviewing to finalize
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link_submit"
 onclick="top.restoreSession()">[Don't Save]</a></center>
<br>
<?php $res = sqlStatement("SELECT date,counselor_id,facility FROM form_encounter WHERE encounter = $encounter");
$encounterdata_array = SqlFetchArray($res); ?>
<?php $res = sqlStatement("SELECT fname,mname,lname,ss,street,city,state,postal_code,phone_home,DOB FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res); ?>
<b><u>Client and Service Information</u></b><br><br>
<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br /><br />

<b>Reason for Seeking Treatment/Treatment Status:</b><br />
<em>(Include referral source and reason, services requested.)</em><br />
<textarea cols=120 rows=2 wrap=virtual name="reason_seeking"></textarea><br /><br />

<b>Presenting Problems/Symptoms:</b> <em>(Include specific behaviors and/or symptoms, age of onset, duration, frequency, and severity.)</em><br />
<textarea cols=120 rows=2 wrap=virtual name="presenting_problem"></textarea><br /><br />

<b>Personal and Family History</b> <em>(Include child/family factors that may have contributed to need for services; child welfare involvement including reason for removal of child; family history of criminal charges, mental health diagnoses or substance abuse and any family history of treatment.)<br />
<textarea cols=120 rows=2 wrap=virtual name="personal_family_history"></textarea><br /><br />

<b><u>Mental Status</u></b>
<br><br>
<table>
<tr>
<td>
<b>Appearance:</b><br>
<input type=checkbox name='appearance_age'>&nbsp;<b>Stated Age</b><br>
<input type=checkbox name='appearance_younger'>&nbsp;<b>Younger than Stated Age</b><br>
<input type=checkbox name='appearance_older'>&nbsp;<b>Older than Stated Age</b><br>
<input type=checkbox name='appearance_underweight'>&nbsp;<b>Underweight</b><br>
<input type=checkbox name='appearance_petite'>&nbsp;<b>Petite</b><br>
<input type=checkbox name='appearance_average'>&nbsp;<b>Average Size</b><br>
<input type=checkbox name='appearance_overweight'>&nbsp;<b>Overweight</b><br><br>
</td>
<td>
<b>Coordination/Gait:</b><br>
<input type=checkbox name='coordination_good'>&nbsp;<b>No Difficulty</b><br>
<input type=checkbox name='coordination_staggered'>&nbsp;<b>Staggered</b><br>
<input type=checkbox name='coordination_shuffled'>&nbsp;<b>Shuffled</b><br>
<input type=checkbox name='coordination_clumsy'>&nbsp;<b>Clumsy</b><br><br>
</td>
</tr>
<tr>
<td>
<b>Eye Contact:</b><br>
<input type=checkbox name='eye_good'>&nbsp;<b>Good</b><br>
<input type=checkbox name='eye_brief'>&nbsp;<b>Brief/Fleeting</b><br>
<input type=checkbox name='eye_avoid'>&nbsp;<b>Avoided</b><br><br>
</td>
<td>
<b>Affect (Observed):</b><br>
<input type=checkbox name='affect_normal'>&nbsp;<b>Normal/appropriate</b><br>
<input type=checkbox name='affect_euthymic'>&nbsp;<b>Euthymic</b><br>
<input type=checkbox name='affect_dysthymic'>&nbsp;<b>Dysthymic</b><br>
<input type=checkbox name='affect_flat'>&nbsp;<b>Flat</b><br>
<input type=checkbox name='affect_labile'>&nbsp;<b>Vacilating/Labile</b><br>
<input type=checkbox name='affect_superficial'>&nbsp;<b>Superficial/Inconsistent with Mood</b><br><br>
</td>
</tr>
<tr>
<td>
<b>Mood (Client's Description):</b><br>
<input type=checkbox name='mood_calm'>&nbsp;<b>Calm</b><br>
<input type=checkbox name='mood_happy'>&nbsp;<b>Happy</b><br>
<input type=checkbox name='mood_irritated'>&nbsp;<b>Irritated/Agitated</b><br>
<input type=checkbox name='mood_anxious'>&nbsp;<b>Anxious</b><br>
<input type=checkbox name='mood_sad'>&nbsp;<b>Sad</b><br>
<input type=checkbox name='mood_angry'>&nbsp;<b>Angry</b><br>
<input type=checkbox name='mood_excited'>&nbsp;<b>Excited</b><br>
<input type=checkbox name='mood_appropriate_to_topic'>&nbsp;<b>Appropriate to Topic of Conversation</b><br>
<input type=checkbox name='mood_inappropriate_to_topic'>&nbsp;<b>Inappropriate to Topic of Conversation</b><br><br>
</td>
<td>
<b>Speech/Stream of Thought:</b><br>
<input type=checkbox name='speech_clear'>&nbsp;<b>Clear</b><br>
<input type=checkbox name='speech_articulate'>&nbsp;<b>Articulate</b><br>
<input type=checkbox name='speech_unclear'>&nbsp;<b>Unclear</b><br>
<input type=checkbox name='speech_slow'>&nbsp;<b>Slow</b><br>
<input type=checkbox name='speech_soft'>&nbsp;<b>Soft Spoken</b><br>
<input type=checkbox name='speech_mumble'>&nbsp;<b>Mumbled</b><br>
<input type=checkbox name='speech_excessive'>&nbsp;<b>Excessive/Rapid</b><br>
<input type=checkbox name='speech_negative'>&nbsp;<b>Negative/Critical</b><br><br>
</td>
</tr>
<tr>
<td>
<b>Thought Content:<br>
<select name="thought_content" size="4">
<option value="No Abnormality" selected>No Abnormality</option>
<option value="Tangental">Tangental</option>
<option value="Perserverative/Obsessive">Perserverative/Obsessive</option>
<option value="Delusions/Hallucinations">Delusions/Hallucinations</option>
</select>
</b>
</td>
<td>
<b>Intellectual Ability:<br>
<select name="intellectual_ability" size="3">
<option value="Below Average">Below Average</option>
<option value="Average" selected>Average</option>
<option value="Above Average">Above Average</option>
</select>
</b>
</td>
</tr>

<tr>
<td>
<b>Attention/Concentration:<br>
<select name="attention_concentration" size="3">
<option value="Alert">Alert</option>
<option value="Oriented" selected>Oriented</option>
<option value="Inattentive/Distracted">Inattentive/Distracted</option>
</select>
</b>
</td>
<td>
<b>Recall:<br>
<select name="recall" size="6">
<option value="Adequate Detail" selected>Adequate Detail</option>
<option value="Sparse Detail">Sparse Detail</option>
<option value="Resisted/Avoided Topics">Resisted/Avoided Topics</option>
<option value="No Noted Memory Impairment">No Noted Memory Impairment</option>
<option value="Short-Term Impairment">Short-Term Impairment</option>
<option value="Long-Term Impairment">Long-Term Impairment</option>
</select>
</b>
</td></tr>
<tr>
<td>
<b>Memory:<br>
<select name="memory" size="3">
<option value="No Noted Memory Impairment" selected>No Impairment Noted</option>
<option value="Short-Term Impairment">Short Term Impairment</option>
<option value="Long Term Impairment">Long Term Impairment</option>
</select>
</b>
</td>
<td>
<b>Insight:<br>
<select name="insight" size="3">
<option value="Good" selected>Good</option>
<option value="Fair">Fair</option>
<option value="Poor">Poor</option>
</select>
</b>
</td>
</tr>

<tr>
<td>
<b>Judgment:<br>
<select name="judgment" size="3">
<option value="Good" selected>Good</option>
<option value="Fair">Fair</option>
<option value="Poor">Poor</option>
</select>
</b>
</td>
<td>
<b>Impulse Control:<br>
<select name="impulse_control" size="3">
<option value="Good" selected>Good</option>
<option value="Fair">Fair</option>
<option value="Poor">Poor</option>
</select>
</b>
</td>
</tr>
</table>
<br><br>

<p><b>Risk Assessment:</b><br>
<select name="risk_assessment" size="4">
<option value="No Noted or Observed Risk" selected>None Noted</option>
<option value="Low Risk">Low Risk</option>
<option value="Moderate Risk">Moderate Risk</option>
<option value="High Risk">High Risk</option>
<option value="Very High Risk">Very High Risk</option>
</select>
<br><br>

<b>Risk Factors:</b><br>
<input type=checkbox name='risk_compliance'>&nbsp;<b>Hx of Tx Non-Compliance</b><br>
<input type=checkbox name='risk_elope'>&nbsp;<b>Hx/Px of Elopement</b><br>
<input type=checkbox name='risk_multi'>&nbsp;<b>Hx of Multiple Dx</b><br>
<input type=checkbox name='risk_inpatient'>&nbsp;<b>Prior Inpatient Treatment</b><br>
<input type=checkbox name='risk_hxsuicide'>&nbsp;<b>Prior Homicide or Suicide Attempt</b><br>
<input type=checkbox name='risk_injury'>&nbsp;<b>Self Injurious</b><br>
<input type=checkbox name='risk_suicide'>&nbsp;<b>Current Suicide Ideation</b><br>
<input type=checkbox name='risk_self'>&nbsp;<b>Imminent Risk of Harm to Self</b><br>
<input type=checkbox name='risk_threat'>&nbsp;<b>Threats to Harm Others</b><br>
<input type=checkbox name='risk_aggression'>&nbsp;<b>Aggression</b><br>
<input type=checkbox name='risk_homicide_ideation'>&nbsp;<b>Current Homicidal Ideation</b><br>
<input type=checkbox name='risk_harm'>&nbsp;<b>Imminent Risk of Harm to Others</b><br>
<input type=checkbox name='risk_other'>&nbsp;<b>Other Risk Factors Noted</b><br><br>

<b><u>Risk Management</u></b> <em>(Include thorough evaluation of risk factors above and steps taken to manage the risk.)</em><br><?/* prompt plus default text  */?>
<textarea cols=120 rows=7 wrap=virtual name="risk_management">The current risk is rated as low based on the factors above and it is my clinical judgment that the recommended level of counseling indicated below is sufficient to manage this risk.</textarea>
<br><br>

<b><u>Diagnostic Impressions</u>  </b><i>Include criteria for all diagnosis provided based on clinical interview with primary caretaker/observation of caregiver-child relationship</i><br>
<textarea cols=120 rows=7 wrap=virtual name="diagnostic_impressions" ></textarea>
<br><br>

<b>Findings:</b>
<br><br>
<b>Axis I</b><br>
<textarea cols=120 rows=3 wrap=virtual name="axis1" ></textarea><br><br>
<b>Axis II</b><br>
<textarea cols=120 rows=1 wrap=virtual name="axis2" ></textarea><br><br>
<b>Axis III</b><br>
<textarea cols=120 rows=1 wrap=virtual name="axis3" ></textarea><br><br>
<b>Axis IV</b><br>
<textarea cols=120 rows=1 wrap=virtual name="axis4" ></textarea><br><br>
<b>Axis V/CGAS</b><br>
<textarea cols=120 rows=1 wrap=virtual name="axis5" ></textarea><br><br>

<b>Eligibility Criteria</b><br><br>
<input type=checkbox name='criteria1'>&nbsp;<b>Client has an ICD-9-CM diagnosis in the following range: 294.80, 294.90, 300.00 through 305.90, 307.10, 307.23, 307.50 through 307.70, 308.00 through 312.40, 312.81 through 314.90;</b>
<br><br>
<input type=checkbox name='criteria2'>&nbsp;<b>and client is enrolled in Special Education for Seriously Emotionally Disturbed (SED) or Emotionally Handicapped (EH) School Placement</b>
<br><br>
<input type=checkbox name='criteria3'>&nbsp;<b>or client has scored a 60 or below on the Axis V Children's Global Assessment of Functioning Scale within the last 6 months</b>
<br><br>
<input type=checkbox name='criteria4'>&nbsp;<b>OR client has an ICD-9-CM diagnosis of 295.00 through 298.90 (schizophrenia or other psychotic disorders, major depression or bipolar disorder) or 303.00 through 305.90 (substance abuse).</b>
<br><br>
<input type=checkbox name='criteria5'>&nbsp;<b>Certification: There is adequate evidence to indicate that the client is AT RISK for a more intensive, restrictive and costly behavioral health placement and the client's condition and functional level cannot be improved with a less intensive service such as individual or family therapy or group therapy.</b>
<br><br>

<b>Recommendation/Plan:</b>
<br><i>Indicate the number and type of therapy hours/units recommended per week to meet the client's needs based on chronicity and severity of the presenting problems(s). Consider the types (individual, parent, family) and locations (home, school, community) of sessions that will be required.<i><br>
<textarea cols=83 rows=1 wrap=virtual  name="recommendation" ></textarea><br><br>
<br><br>

<center><a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link_submit"
 onclick="top.restoreSession()">[Don't Save]</a></center>
<br>
</form>
<?php
formFooter();
?>
