<?php
//by Art Eaton
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: CFARS");
?>
<html><head>
<?php html_header_show();?>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
</head>
<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<form method=post action="<?echo $rootdir;?>/forms/CFARS/save.php?mode=new" name="my_form">
<br>
<span class="title"><center>Functional Assessment Rating Scale</center></span><br><br>
 
<?php $datequery = sqlStatement("SELECT date FROM form_encounter WHERE encounter = $encounter");
$encdate = SqlFetchArray($datequery);

$old_date = strtotime($encdate['date']);
$todays_date = strtotime(date("Ymd"));
if($old_date+(86400*3) < $todays_date) {
echo ("It is not permitted to enter a CFARS form in an encounter that is dated earlier than 3 days prior to today's date.  Please create a current encounter to enter your form, and contact supervision to delete this encounter.");
} else {

?>

<center><a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
You must EDIT the form after saving and reviewing to finalize
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link_submit"
 onclick="top.restoreSession()">[Don't Save]</a></center>
<br>
<?php
echo "<input type='hidden' name='counselor_id' value='" . $_SESSION['authUserID'] . "'>";
$counselor_id = $_SESSION['authUserID'];				
			?>
			
<?php $res = sqlStatement("SELECT date,counselor_id,facility FROM form_encounter WHERE encounter = $encounter");
$encounterdata_array = SqlFetchArray($res); ?>
<?php $res = sqlStatement("SELECT fname,mname,lname,ss,street,city,state,postal_code,phone_home,DOB FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res); ?>
<?php $res2 = sqlStatement("SELECT id,fname,mname,lname,valedictory,fars,cfars FROM users WHERE id = $counselor_id");
$result2 = SqlFetchArray($res2); ?>

<b><u>Client and Service Information</u></b><br><br>
<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br><br>


<b><u>Demographics</u></b>
<br><br>
<b>Assessment Purpose:</b><br>
<input type="radio" name="purpose" value="1">Admission
<input type="radio" name="purpose" value="2">Six Month
<input type="radio" name="purpose" value="3">Planned Dicharge
<input type="radio" name="purpose" value="4">Immediate Discharge
<br><br>

<b>Assessment Type:</b><br>
<input type="radio" name="atype" value="1">CFARS
<input type="radio" name="atype" value="2">FARS
<br><br>

<b>Ethnicity:</b><br>
<input type="radio" name="species" value="0">Declined to Answer
<input type="radio" name="species" value="1">Caucasian
<input type="radio" name="species" value="2">Black
<input type="radio" name="species" value="3">Asian/Pacific Islander<br>
<input type="radio" name="species" value="4">Latin
<input type="radio" name="species" value="5">West Indian
<input type="radio" name="species" value="6">East Indian
<input type="radio" name="species" value="7">Multiethnic
<br><br>

<b>Substance Abuse History:</b><br>
<input type="radio" name="sa_hx" value="0">No
<input type="radio" name="sa_hx" value="1">Yes
<br><br>

<b>Evaluation Date</b><br>
<?php echo $encounterdata_array['date'];?>
<br><br>

<b>Evaluator Education:</b><br>
<input type="radio" name="education" value="1">Associates/Tech
<input type="radio" name="education" value="2">Bachelors
<input type="radio" name="education" value="3">Masters
<input type="radio" name="education" value="4">Licensed
<br><br>


<b>Evaluator Name</b><br>
<textarea cols=50 rows=1 wrap=virtual name="counselor_name" ><?php echo $result2['fname'] . '&nbsp;' . $result2['lname'] . '&nbsp;' . $result2['valedictory'];?></textarea>
<br><br>

<b>Evaluator's FARS/CFARS Numbers </b><br>
<i>(Select correct one.  If you number is not displayed contact Admin.  You may manually enter a number when "editing" later.)</i><br>
<select name="license_num" size="2">
<?php echo "<option value='" . stripslashes($result2['fars']) . "'>";?>FARS# <?php echo stripslashes($result2['fars']);?></option>
<?php echo "<option value='" . stripslashes($result2['cfars']) . "'>";?>CFARS# <?php echo stripslashes($result2['cfars']);?></option>
</select>

<br><br>



<b>County of Service:</b><br>
<input type="radio" name="county" value="1">Pinellas
<input type="radio" name="county" value="2">Pasco
<input type="radio" name="county" value="3">Hillsborough
<input type="radio" name="county" value="4">Manatee
<input type="radio" name="county" value="5">Sarasota
<input type="radio" name="county" value="6">Hernando
<input type="radio" name="county" value="7">Polk
<br><br>

<b><u>RATINGS</u></b>
<br><br>
<TABLE WIDTH=50% CELLPADDING=4 CELLSPACING=0>
	<COL WIDTH=14*>
	<COL WIDTH=14*>
	<COL WIDTH=14*>
	<COL WIDTH=14*>
	<COL WIDTH=14*>
	<COL WIDTH=14*>
	<COL WIDTH=14*>
	<COL WIDTH=14*>
	<COL WIDTH=14*>
	<TR VALIGN=TOP>
		<TD WIDTH=11% STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.04in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<P LANG="zxx" ALIGN=CENTER>None</P>
		</TD>
		<TD COLSPAN=3 WIDTH=33% STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.04in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<P LANG="zxx" ALIGN=CENTER>Slight</P>
		</TD>
		<TD WIDTH=11% STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.04in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<P LANG="zxx" ALIGN=CENTER>Moderate</P>
		</TD>
		<TD COLSPAN=3 WIDTH=33% STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.04in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<P LANG="zxx" ALIGN=CENTER>Severe</P>
		</TD>
		<TD WIDTH=11% STYLE="border: 1px solid #000000; padding: 0.04in">
			<P LANG="zxx" ALIGN=CENTER>Extreme</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=11% STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<P LANG="zxx" ALIGN=CENTER>1</P>
		</TD>
		<TD WIDTH=11% STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<P LANG="zxx" ALIGN=CENTER>2</P>
		</TD>
		<TD WIDTH=11% STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<P LANG="zxx" ALIGN=CENTER>3</P>
		</TD>
		<TD WIDTH=11% STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<P LANG="zxx" ALIGN=CENTER>4</P>
		</TD>
		<TD WIDTH=11% STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<P LANG="zxx" ALIGN=CENTER>5</P>
		</TD>
		<TD WIDTH=11% STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<P LANG="zxx" ALIGN=CENTER>6</P>
		</TD>
		<TD WIDTH=11% STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<P LANG="zxx" ALIGN=CENTER>7</P>
		</TD>
		<TD WIDTH=11% STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<P LANG="zxx" ALIGN=CENTER>8</P>
		</TD>
		<TD WIDTH=11% STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0.04in">
			<P LANG="zxx" ALIGN=CENTER>9</P>
		</TD>
	</TR>
</TABLE>

<br><br>
<b>Depression:</b><br>

<input type="radio" name="depression" value="1">1
<input type="radio" name="depression" value="2">2
<input type="radio" name="depression" value="3">3
<input type="radio" name="depression" value="4">4
<input type="radio" name="depression" value="5">5
<input type="radio" name="depression" value="6">6
<input type="radio" name="depression" value="7">7
<input type="radio" name="depression" value="8">8
<input type="radio" name="depression" value="9">9
<br><br>

<b>Anxiety:</b><br>

<input type="radio" name="anxiety" value="1">1
<input type="radio" name="anxiety" value="2">2
<input type="radio" name="anxiety" value="3">3
<input type="radio" name="anxiety" value="4">4
<input type="radio" name="anxiety" value="5">5
<input type="radio" name="anxiety" value="6">6
<input type="radio" name="anxiety" value="7">7
<input type="radio" name="anxiety" value="8">8
<input type="radio" name="anxiety" value="9">9
<br><br>

<b>Hyperactivity:</b><br>

<input type="radio" name="hyperactivity" value="1">1
<input type="radio" name="hyperactivity" value="2">2
<input type="radio" name="hyperactivity" value="3">3
<input type="radio" name="hyperactivity" value="4">4
<input type="radio" name="hyperactivity" value="5">5
<input type="radio" name="hyperactivity" value="6">6
<input type="radio" name="hyperactivity" value="7">7
<input type="radio" name="hyperactivity" value="8">8
<input type="radio" name="hyperactivity" value="9">9
<br><br>

<b>Thought Process:</b><br>

<input type="radio" name="thought_process" value="1">1
<input type="radio" name="thought_process" value="2">2
<input type="radio" name="thought_process" value="3">3
<input type="radio" name="thought_process" value="4">4
<input type="radio" name="thought_process" value="5">5
<input type="radio" name="thought_process" value="6">6
<input type="radio" name="thought_process" value="7">7
<input type="radio" name="thought_process" value="8">8
<input type="radio" name="thought_process" value="9">9
<br><br>

<b>Cognitive Performance:</b><br>

<input type="radio" name="cognitive" value="1">1
<input type="radio" name="cognitive" value="2">2
<input type="radio" name="cognitive" value="3">3
<input type="radio" name="cognitive" value="4">4
<input type="radio" name="cognitive" value="5">5
<input type="radio" name="cognitive" value="6">6
<input type="radio" name="cognitive" value="7">7
<input type="radio" name="cognitive" value="8">8
<input type="radio" name="cognitive" value="9">9
<br><br>

<b>Medical/Physical:</b><br>

<input type="radio" name="medical" value="1">1
<input type="radio" name="medical" value="2">2
<input type="radio" name="medical" value="3">3
<input type="radio" name="medical" value="4">4
<input type="radio" name="medical" value="5">5
<input type="radio" name="medical" value="6">6
<input type="radio" name="medical" value="7">7
<input type="radio" name="medical" value="8">8
<input type="radio" name="medical" value="9">9
<br><br>

<b>Traumatic Stress:</b><br>

<input type="radio" name="stress" value="1">1
<input type="radio" name="stress" value="2">2
<input type="radio" name="stress" value="3">3
<input type="radio" name="stress" value="4">4
<input type="radio" name="stress" value="5">5
<input type="radio" name="stress" value="6">6
<input type="radio" name="stress" value="7">7
<input type="radio" name="stress" value="8">8
<input type="radio" name="stress" value="9">9
<br><br>

<b>Substance Abuse:</b><br>

<input type="radio" name="substance" value="1">1
<input type="radio" name="substance" value="2">2
<input type="radio" name="substance" value="3">3
<input type="radio" name="substance" value="4">4
<input type="radio" name="substance" value="5">5
<input type="radio" name="substance" value="6">6
<input type="radio" name="substance" value="7">7
<input type="radio" name="substance" value="8">8
<input type="radio" name="substance" value="9">9
<br><br>

<b>Interpersonal Relationships:</b><br>

<input type="radio" name="interpersonal" value="1">1
<input type="radio" name="interpersonal" value="2">2
<input type="radio" name="interpersonal" value="3">3
<input type="radio" name="interpersonal" value="4">4
<input type="radio" name="interpersonal" value="5">5
<input type="radio" name="interpersonal" value="6">6
<input type="radio" name="interpersonal" value="7">7
<input type="radio" name="interpersonal" value="8">8
<input type="radio" name="interpersonal" value="9">9
<br><br>

<b>Home Behavior(CFARS)/Family Relationships(FARS):</b><br>

<input type="radio" name="home" value="1">1
<input type="radio" name="home" value="2">2
<input type="radio" name="home" value="3">3
<input type="radio" name="home" value="4">4
<input type="radio" name="home" value="5">5
<input type="radio" name="home" value="6">6
<input type="radio" name="home" value="7">7
<input type="radio" name="home" value="8">8
<input type="radio" name="home" value="9">9
<br><br>

<b>ADL Functioning:</b><br>

<input type="radio" name="adl" value="1">1
<input type="radio" name="adl" value="2">2
<input type="radio" name="adl" value="3">3
<input type="radio" name="adl" value="4">4
<input type="radio" name="adl" value="5">5
<input type="radio" name="adl" value="6">6
<input type="radio" name="adl" value="7">7
<input type="radio" name="adl" value="8">8
<input type="radio" name="adl" value="9">9
<br><br>

<b>Socio-Legal:</b><br>

<input type="radio" name="legal" value="1">1
<input type="radio" name="legal" value="2">2
<input type="radio" name="legal" value="3">3
<input type="radio" name="legal" value="4">4
<input type="radio" name="legal" value="5">5
<input type="radio" name="legal" value="6">6
<input type="radio" name="legal" value="7">7
<input type="radio" name="legal" value="8">8
<input type="radio" name="legal" value="9">9
<br><br>

<b>Work/School:</b><br>

<input type="radio" name="works" value="1">1
<input type="radio" name="works" value="2">2
<input type="radio" name="works" value="3">3
<input type="radio" name="works" value="4">4
<input type="radio" name="works" value="5">5
<input type="radio" name="works" value="6">6
<input type="radio" name="works" value="7">7
<input type="radio" name="works" value="8">8
<input type="radio" name="works" value="9">9
<br><br>

<b>Danger to Self:</b><br>

<input type="radio" name="self" value="1">1
<input type="radio" name="self" value="2">2
<input type="radio" name="self" value="3">3
<input type="radio" name="self" value="4">4
<input type="radio" name="self" value="5">5
<input type="radio" name="self" value="6">6
<input type="radio" name="self" value="7">7
<input type="radio" name="self" value="8">8
<input type="radio" name="self" value="9">9
<br><br>

<b>Danger to Others:</b><br>

<input type="radio" name="dothers" value="1">1
<input type="radio" name="dothers" value="2">2
<input type="radio" name="dothers" value="3">3
<input type="radio" name="dothers" value="4">4
<input type="radio" name="dothers" value="5">5
<input type="radio" name="dothers" value="6">6
<input type="radio" name="dothers" value="7">7
<input type="radio" name="dothers" value="8">8
<input type="radio" name="dothers" value="9">9
<br><br>

<b>Security/Management Needs:</b><br>

<input type="radio" name="security" value="1">1
<input type="radio" name="security" value="2">2
<input type="radio" name="security" value="3">3
<input type="radio" name="security" value="4">4
<input type="radio" name="security" value="5">5
<input type="radio" name="security" value="6">6
<input type="radio" name="security" value="7">7
<input type="radio" name="security" value="8">8
<input type="radio" name="security" value="9">9
<br><br>

<b>FARS:  Family Environment</b><br>

<input type="radio" name="family" value="1">1
<input type="radio" name="family" value="2">2
<input type="radio" name="family" value="3">3
<input type="radio" name="family" value="4">4
<input type="radio" name="family" value="5">5
<input type="radio" name="family" value="6">6
<input type="radio" name="family" value="7">7
<input type="radio" name="family" value="8">8
<input type="radio" name="family" value="9">9
<br><br>

<b>FARS:  Self Care</b><br>

<input type="radio" name="care" value="1">1
<input type="radio" name="care" value="2">2
<input type="radio" name="care" value="3">3
<input type="radio" name="care" value="4">4
<input type="radio" name="care" value="5">5
<input type="radio" name="care" value="6">6
<input type="radio" name="care" value="7">7
<input type="radio" name="care" value="8">8
<input type="radio" name="care" value="9">9
<br><br>






<center><a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link_submit"
 onclick="top.restoreSession()">[Don't Save]</a></center>
<br>
</form>
<?php
}
formFooter();
?>
