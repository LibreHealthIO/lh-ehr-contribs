
<?php
//by Art Eaton
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: CPN");
?>
<!DOCTYPE HTML>
<html><head>
<?php html_header_show();?>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
<script type="text/javascript" src="<?php echo $GLOBALS['webroot'].'/interface/forms/CPN'; ?>/modernizr.js"></script>
<script>Modernizr.load({
  test: Modernizr.inputtypes.date,
  nope: [
      'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js',
      'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js',
      'http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/base/jquery-ui.css'
  ],
  complete: function () {
    $('input[type=date]').datepicker({
      dateFormat: 'yyyy-mm-dd'
    });
  }
});
</script>
<script type="text/javascript"
    data-webforms2-support="date"
    data-lang="en"
    src="http://html5form.googlecode.com/svn/trunk/jquery.html5form-1.5-min.js" ></script>
</head>
<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<form method=post action="<?echo $rootdir;?>/forms/CPN/save.php?mode=new" name="my_form">
<br>
<span class="title"><center>Counseling Progress Note</center></span><br><br>
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
<br>
<input type="type="datetime-local" name="datefull" autocomplete="on"> 
       
<b>Start Time:</b>&nbsp;<input type="text" name='data1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>End Time:</b>&nbsp;<input type="text" name='data2'>
<br><br>

<b><u>Participants:  </u></b><br>
<textarea cols=80 rows=1 wrap=virtual name="data3" ></textarea>
<br><br>

<b><u>Contacts Since Last Session:</u></b><br>
<textarea cols=120 rows=3 wrap=virtual name="data4" ></textarea>
<br><br>

<b><u>Treatment Goals/Objectives Addressed:</u></b><br>
<textarea cols=120 rows=3 wrap=virtual name="data5" ></textarea>
<br><br>

<b><u>Therapeutic Interventions:</u></b><br>
<textarea cols=120 rows=7 wrap=virtual name="data6" ></textarea>
<br><br>

<b><u>Session Focus:</u></b><br>
<textarea cols=120 rows=3 wrap=virtual name="data7" ></textarea>
<br><br>

<b>Assessment/Response of Client:</b><br>
<input type=checkbox name='data8'>&nbsp;<b>Engaging</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data9'>&nbsp;<b>Withdrawn</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data10'>&nbsp;<b>Cooperative</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data11'>&nbsp;<b>Defiant</b><br>
<input type=checkbox name='data12'>&nbsp;<b>Flat Affect</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data13'>&nbsp;<b>Anxious/Fearful</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data14'>&nbsp;<b>Happy</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data15'>&nbsp;<b>Sad</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data16'>&nbsp;<b>Angry</b>
<br><br>

<b><u>Progress Toward Treatment Goals:</u></b><br>
<i>including strengths/limitations that impacted achievement</i><br>
<textarea cols=120 rows=3 wrap=virtual name="data17" ></textarea>
<br><br>

<p><b>Risk Assessment:</b><br>
<i>based on the following risk factors</i><br>
<select name="data18" size="3">
<option value="No Noted or Observed Risk" selected>None Noted</option>
<option value="Low Risk">Low Risk</option>
<option value="Moderate Risk">Moderate Risk</option>
<option value="High Risk">High Risk</option>
<option value="Very High Risk">Very High Risk</option>
</select>
<br><br>

<b>Risk Factors:</b><br>
<input type=checkbox name='data19'>&nbsp;<b>Hx of Tx Non-Compliance</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data20'>&nbsp;<b>Hx/Px of Elopement</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data21'>&nbsp;<b>Hx of Multiple Dx</b><br>
<input type=checkbox name='data22'>&nbsp;<b>Prior Inpatient Treatment</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data23'>&nbsp;<b>Prior Homicide or Suicide Attempt</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data24'>&nbsp;<b>Self Injurious</b><br>
<input type=checkbox name='data25'>&nbsp;<b>Current Suicide Ideation</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data26'>&nbsp;<b>Imminent Risk of Harm to Self</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data27'>&nbsp;<b>Threats to Harm Others</b><br>
<input type=checkbox name='data28'>&nbsp;<b>Aggression</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data29'>&nbsp;<b>Current Homicidal Ideation</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data30'>&nbsp;<b>Imminent Risk of Harm to Others</b><br>
<input type=checkbox name='data31'>&nbsp;<b>Sexual Acting Out</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name='data32'>&nbsp;<b>Other Risk Factors Noted</b>
<br><br>

<b><u>Risk Management</u></b><br><?/* prompt plus default text  */?>
<textarea cols=120 rows=7 wrap=virtual name="data33">The current risk is rated as low based on the factors above and it is my clinical judgment that the recommended level of counseling indicated below is sufficient to manage this risk.</textarea>
<br><br>


<b>Plan: </b><br>
<textarea cols=120 rows=1 wrap=virtual  name="data34" ></textarea><br><br>
<br><br>
<b>Next Appointment Date (USE FORMAT YYYY-MM-DD ONLY!):</b>&nbsp;<input type="date" name='data35' autocomplete="on"><br>
<b>Next Appointment Time (USE FORMAT HH:MM:SS ONLY!):</b><br>
Start Time:&nbsp;&nbsp;<input type="text" name='data36'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
End Time:&nbsp;&nbsp;<input type="text" name='data37'>
<br>
<br>

<center><a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link_submit"
 onclick="top.restoreSession()">[Don't Save]</a></center>
<br>
</form>
<?php
formFooter();
?>
