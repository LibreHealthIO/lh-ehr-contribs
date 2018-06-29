<?php
//by Art Eaton CFARS
include_once("../../globals.php");
include_once("$srcdir/api.inc");
?>
<html><head>
<? html_header_show();?>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
</head>
<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>

<?php

$obj = formFetch("form_cfars", $_GET["id"]);
?>

<form method=post action="<?echo $rootdir?>/forms/cfars/save.php?mode=update&id=<?echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Functional Assessment Rating Scale</b></center></span><br><br>
<center>
<? if($obj{"finalize"}==="off"OR ($_SESSION["authUser"] ==="ncuddy" OR $_SESSION["authUser"] ==="leaton" OR $_SESSION["authUser"] ==="Art")){?>
<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link" onclick="top.restoreSession()">[Don't Save Changes]</a>
<br>

 <input type=checkbox name='finalize' <? if ($obj{"finalize"} == "on") {echo "checked";};?>>&nbsp;<b>Check here to finalize this form:</b><br>
 <?}else{
		 echo"This form has been finalized and may not be edited!<br>";?>
 		<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link" onclick="top.restoreSession()">[RETURN TO ENCOUNTER]</a>
 <?}?>
 </center>
<br></br>

<?php $res = sqlStatement("SELECT date,counselor_id,facility FROM form_encounter WHERE encounter = $encounter");
$encounterdata_array = SqlFetchArray($res); ?>
<?php $res = sqlStatement("SELECT fname,mname,lname,ss,street,city,state,postal_code,phone_home,DOB FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res); ?>

<b><u>Client and Service Information</u></b><br><br>
<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?> 
<br>


<b><u>Demographics</u></b>
<br><br>
<b>Assessment Purpose:</b><br>
<input type="radio" name="purpose" value="1" <? if ($obj{"purpose"} == "1") {echo "checked";}?>>Admission
<input type="radio" name="purpose" value="2" <? if ($obj{"purpose"} == "2") {echo "checked";}?>>Six Month
<input type="radio" name="purpose" value="3" <? if ($obj{"purpose"} == "3") {echo "checked";}?>>Planned Dicharge
<input type="radio" name="purpose" value="4" <? if ($obj{"purpose"} == "4") {echo "checked";}?>>Immediate Discharge
<br><br>

<b>Assessment Type:</b><br>
<input type="radio" name="atype" value="1" <? if ($obj{"atype"} == "1") {echo "checked";}?>>CFARS
<input type="radio" name="atype" value="2" <? if ($obj{"atype"} == "2") {echo "checked";}?>>FARS

<br><br>

<b>Ethnicity:</b><br>
<input type="radio" name="species" value="0" <? if ($obj{"species"} == "0") {echo "checked";}?>>Declined to Answer
<input type="radio" name="species" value="1" <? if ($obj{"species"} == "1") {echo "checked";}?>>Caucasian
<input type="radio" name="species" value="2" <? if ($obj{"species"} == "2") {echo "checked";}?>>Black
<input type="radio" name="species" value="3" <? if ($obj{"species"} == "3") {echo "checked";}?>>Asian/Pacific Islander<br>
<input type="radio" name="species" value="4" <? if ($obj{"species"} == "4") {echo "checked";}?>>Latin
<input type="radio" name="species" value="5" <? if ($obj{"species"} == "5") {echo "checked";}?>>West Indian
<input type="radio" name="species" value="6" <? if ($obj{"species"} == "6") {echo "checked";}?>>East Indian
<input type="radio" name="species" value="7" <? if ($obj{"species"} == "7") {echo "checked";}?>>Multiethnic
<br><br>

<b>Substance Abuse History:</b><br>
<input type="radio" name="sa_hx" value="0" <? if ($obj{"sa_hx"} == "0") {echo "checked";}?>>No
<input type="radio" name="sa_hx" value="1" <? if ($obj{"sa_hx"} == "1") {echo "checked";}?>>Yes
<br><br>

<b>Evaluation Date</b><br>
<?php echo $encounterdata_array['date'];?>
<br><br>

<b>Evaluator Education:</b><br>
<input type="radio" name="education" value="1" <? if ($obj{"education"} == "1") {echo "checked";}?>>Associates/Tech
<input type="radio" name="education" value="2" <? if ($obj{"education"} == "2") {echo "checked";}?>>Bachelors
<input type="radio" name="education" value="3" <? if ($obj{"education"} == "3") {echo "checked";}?>>Masters
<input type="radio" name="education" value="4" <? if ($obj{"education"} == "4") {echo "checked";}?>>Licensed
<br><br>


<b>Evaluator CFARS/FARS Number</b><br>
<textarea cols=50 rows=1 wrap=virtual name="license_num" ><? echo stripslashes($obj{"license_num"});?></textarea><br><br>


<b>Evaluator Name:</b>&nbsp;<? echo stripslashes($obj{"counselor_name"});?>
<br><br>

<b>County of Service:</b><br>
<input type="radio" name="county" value="1" <? if ($obj{"county"} == "1") {echo "checked";}?>>Pinellas
<input type="radio" name="county" value="2" <? if ($obj{"county"} == "2") {echo "checked";}?>>Pasco
<input type="radio" name="county" value="3" <? if ($obj{"county"} == "3") {echo "checked";}?>>Hillsborough
<input type="radio" name="county" value="4" <? if ($obj{"county"} == "4") {echo "checked";}?>>Manatee
<input type="radio" name="county" value="5" <? if ($obj{"county"} == "5") {echo "checked";}?>>Sarasota
<input type="radio" name="county" value="6" <? if ($obj{"county"} == "6") {echo "checked";}?>>Hernando
<input type="radio" name="county" value="7" <? if ($obj{"county"} == "7") {echo "checked";}?>>Polk
<br><br>

<b><u>RATINGS</u></b>

<br><br>
<b>Depression:</b><br>

<input type="radio" name="depression" value="1" <? if ($obj{"depression"} == "1") {echo "checked";}?>>1
<input type="radio" name="depression" value="2" <? if ($obj{"depression"} == "2") {echo "checked";}?>>2
<input type="radio" name="depression" value="3" <? if ($obj{"depression"} == "3") {echo "checked";}?>>3
<input type="radio" name="depression" value="4" <? if ($obj{"depression"} == "4") {echo "checked";}?>>4
<input type="radio" name="depression" value="5" <? if ($obj{"depression"} == "5") {echo "checked";}?>>5
<input type="radio" name="depression" value="6" <? if ($obj{"depression"} == "6") {echo "checked";}?>>6
<input type="radio" name="depression" value="7" <? if ($obj{"depression"} == "7") {echo "checked";}?>>7
<input type="radio" name="depression" value="8" <? if ($obj{"depression"} == "8") {echo "checked";}?>>8
<input type="radio" name="depression" value="9" <? if ($obj{"depression"} == "9") {echo "checked";}?>>9


<br><br>
<b>Anxiety:</b><br>

<input type="radio" name="anxiety" value="1" <? if ($obj{"anxiety"} == "1") {echo "checked";}?>>1
<input type="radio" name="anxiety" value="2" <? if ($obj{"anxiety"} == "2") {echo "checked";}?>>2
<input type="radio" name="anxiety" value="3" <? if ($obj{"anxiety"} == "3") {echo "checked";}?>>3
<input type="radio" name="anxiety" value="4" <? if ($obj{"anxiety"} == "4") {echo "checked";}?>>4
<input type="radio" name="anxiety" value="5" <? if ($obj{"anxiety"} == "5") {echo "checked";}?>>5
<input type="radio" name="anxiety" value="6" <? if ($obj{"anxiety"} == "6") {echo "checked";}?>>6
<input type="radio" name="anxiety" value="7" <? if ($obj{"anxiety"} == "7") {echo "checked";}?>>7
<input type="radio" name="anxiety" value="8" <? if ($obj{"anxiety"} == "8") {echo "checked";}?>>8
<input type="radio" name="anxiety" value="9" <? if ($obj{"anxiety"} == "9") {echo "checked";}?>>9



<br><br>
<b>Hyperactivity:</b><br>

<input type="radio" name="hyperactivity" value="1" <? if ($obj{"hyperactivity"} == "1") {echo "checked";}?>>1
<input type="radio" name="hyperactivity" value="2" <? if ($obj{"hyperactivity"} == "2") {echo "checked";}?>>2
<input type="radio" name="hyperactivity" value="3" <? if ($obj{"hyperactivity"} == "3") {echo "checked";}?>>3
<input type="radio" name="hyperactivity" value="4" <? if ($obj{"hyperactivity"} == "4") {echo "checked";}?>>4
<input type="radio" name="hyperactivity" value="5" <? if ($obj{"hyperactivity"} == "5") {echo "checked";}?>>5
<input type="radio" name="hyperactivity" value="6" <? if ($obj{"hyperactivity"} == "6") {echo "checked";}?>>6
<input type="radio" name="hyperactivity" value="7" <? if ($obj{"hyperactivity"} == "7") {echo "checked";}?>>7
<input type="radio" name="hyperactivity" value="8" <? if ($obj{"hyperactivity"} == "8") {echo "checked";}?>>8
<input type="radio" name="hyperactivity" value="9" <? if ($obj{"hyperactivity"} == "9") {echo "checked";}?>>9



<br><br>
<b>Thought Process:</b><br>

<input type="radio" name="thought_process" value="1" <? if ($obj{"thought_process"} == "1") {echo "checked";}?>>1
<input type="radio" name="thought_process" value="2" <? if ($obj{"thought_process"} == "2") {echo "checked";}?>>2
<input type="radio" name="thought_process" value="3" <? if ($obj{"thought_process"} == "3") {echo "checked";}?>>3
<input type="radio" name="thought_process" value="4" <? if ($obj{"thought_process"} == "4") {echo "checked";}?>>4
<input type="radio" name="thought_process" value="5" <? if ($obj{"thought_process"} == "5") {echo "checked";}?>>5
<input type="radio" name="thought_process" value="6" <? if ($obj{"thought_process"} == "6") {echo "checked";}?>>6
<input type="radio" name="thought_process" value="7" <? if ($obj{"thought_process"} == "7") {echo "checked";}?>>7
<input type="radio" name="thought_process" value="8" <? if ($obj{"thought_process"} == "8") {echo "checked";}?>>8
<input type="radio" name="thought_process" value="9" <? if ($obj{"thought_process"} == "9") {echo "checked";}?>>9



<br><br>
<b>Cognitive Performance:</b><br>

<input type="radio" name="cognitive" value="1" <? if ($obj{"cognitive"} == "1") {echo "checked";}?>>1
<input type="radio" name="cognitive" value="2" <? if ($obj{"cognitive"} == "2") {echo "checked";}?>>2
<input type="radio" name="cognitive" value="3" <? if ($obj{"cognitive"} == "3") {echo "checked";}?>>3
<input type="radio" name="cognitive" value="4" <? if ($obj{"cognitive"} == "4") {echo "checked";}?>>4
<input type="radio" name="cognitive" value="5" <? if ($obj{"cognitive"} == "5") {echo "checked";}?>>5
<input type="radio" name="cognitive" value="6" <? if ($obj{"cognitive"} == "6") {echo "checked";}?>>6
<input type="radio" name="cognitive" value="7" <? if ($obj{"cognitive"} == "7") {echo "checked";}?>>7
<input type="radio" name="cognitive" value="8" <? if ($obj{"cognitive"} == "8") {echo "checked";}?>>8
<input type="radio" name="cognitive" value="9" <? if ($obj{"cognitive"} == "9") {echo "checked";}?>>9



<br><br>
<b>Medical/Physical:</b><br>

<input type="radio" name="medical" value="1" <? if ($obj{"medical"} == "1") {echo "checked";}?>>1
<input type="radio" name="medical" value="2" <? if ($obj{"medical"} == "2") {echo "checked";}?>>2
<input type="radio" name="medical" value="3" <? if ($obj{"medical"} == "3") {echo "checked";}?>>3
<input type="radio" name="medical" value="4" <? if ($obj{"medical"} == "4") {echo "checked";}?>>4
<input type="radio" name="medical" value="5" <? if ($obj{"medical"} == "5") {echo "checked";}?>>5
<input type="radio" name="medical" value="6" <? if ($obj{"medical"} == "6") {echo "checked";}?>>6
<input type="radio" name="medical" value="7" <? if ($obj{"medical"} == "7") {echo "checked";}?>>7
<input type="radio" name="medical" value="8" <? if ($obj{"medical"} == "8") {echo "checked";}?>>8
<input type="radio" name="medical" value="9" <? if ($obj{"medical"} == "9") {echo "checked";}?>>9



<br><br>
<b>Traumatic Stress:</b><br>

<input type="radio" name="stress" value="1" <? if ($obj{"stress"} == "1") {echo "checked";}?>>1
<input type="radio" name="stress" value="2" <? if ($obj{"stress"} == "2") {echo "checked";}?>>2
<input type="radio" name="stress" value="3" <? if ($obj{"stress"} == "3") {echo "checked";}?>>3
<input type="radio" name="stress" value="4" <? if ($obj{"stress"} == "4") {echo "checked";}?>>4
<input type="radio" name="stress" value="5" <? if ($obj{"stress"} == "5") {echo "checked";}?>>5
<input type="radio" name="stress" value="6" <? if ($obj{"stress"} == "6") {echo "checked";}?>>6
<input type="radio" name="stress" value="7" <? if ($obj{"stress"} == "7") {echo "checked";}?>>7
<input type="radio" name="stress" value="8" <? if ($obj{"stress"} == "8") {echo "checked";}?>>8
<input type="radio" name="stress" value="9" <? if ($obj{"stress"} == "9") {echo "checked";}?>>9



<br><br>
<b>Substance Abuse:</b><br>

<input type="radio" name="substance" value="1" <? if ($obj{"substance"} == "1") {echo "checked";}?>>1
<input type="radio" name="substance" value="2" <? if ($obj{"substance"} == "2") {echo "checked";}?>>2
<input type="radio" name="substance" value="3" <? if ($obj{"substance"} == "3") {echo "checked";}?>>3
<input type="radio" name="substance" value="4" <? if ($obj{"substance"} == "4") {echo "checked";}?>>4
<input type="radio" name="substance" value="5" <? if ($obj{"substance"} == "5") {echo "checked";}?>>5
<input type="radio" name="substance" value="6" <? if ($obj{"substance"} == "6") {echo "checked";}?>>6
<input type="radio" name="substance" value="7" <? if ($obj{"substance"} == "7") {echo "checked";}?>>7
<input type="radio" name="substance" value="8" <? if ($obj{"substance"} == "8") {echo "checked";}?>>8
<input type="radio" name="substance" value="9" <? if ($obj{"substance"} == "9") {echo "checked";}?>>9

<br><br>
<b>Interpersonal Relationships:</b><br>

<input type="radio" name="interpersonal" value="1" <? if ($obj{"interpersonal"} == "1") {echo "checked";}?>>1
<input type="radio" name="interpersonal" value="2" <? if ($obj{"interpersonal"} == "2") {echo "checked";}?>>2
<input type="radio" name="interpersonal" value="3" <? if ($obj{"interpersonal"} == "3") {echo "checked";}?>>3
<input type="radio" name="interpersonal" value="4" <? if ($obj{"interpersonal"} == "4") {echo "checked";}?>>4
<input type="radio" name="interpersonal" value="5" <? if ($obj{"interpersonal"} == "5") {echo "checked";}?>>5
<input type="radio" name="interpersonal" value="6" <? if ($obj{"interpersonal"} == "6") {echo "checked";}?>>6
<input type="radio" name="interpersonal" value="7" <? if ($obj{"interpersonal"} == "7") {echo "checked";}?>>7
<input type="radio" name="interpersonal" value="8" <? if ($obj{"interpersonal"} == "8") {echo "checked";}?>>8
<input type="radio" name="interpersonal" value="9" <? if ($obj{"interpersonal"} == "9") {echo "checked";}?>>9


<br><br>
<b>Home Behavior/Family Relationships:</b><br>

<input type="radio" name="home" value="1" <? if ($obj{"home"} == "1") {echo "checked";}?>>1
<input type="radio" name="home" value="2" <? if ($obj{"home"} == "2") {echo "checked";}?>>2
<input type="radio" name="home" value="3" <? if ($obj{"home"} == "3") {echo "checked";}?>>3
<input type="radio" name="home" value="4" <? if ($obj{"home"} == "4") {echo "checked";}?>>4
<input type="radio" name="home" value="5" <? if ($obj{"home"} == "5") {echo "checked";}?>>5
<input type="radio" name="home" value="6" <? if ($obj{"home"} == "6") {echo "checked";}?>>6
<input type="radio" name="home" value="7" <? if ($obj{"home"} == "7") {echo "checked";}?>>7
<input type="radio" name="home" value="8" <? if ($obj{"home"} == "8") {echo "checked";}?>>8
<input type="radio" name="home" value="9" <? if ($obj{"home"} == "9") {echo "checked";}?>>9



<br><br>
<b>ADL Functioning:</b><br>

<input type="radio" name="adl" value="1" <? if ($obj{"adl"} == "1") {echo "checked";}?>>1
<input type="radio" name="adl" value="2" <? if ($obj{"adl"} == "2") {echo "checked";}?>>2
<input type="radio" name="adl" value="3" <? if ($obj{"adl"} == "3") {echo "checked";}?>>3
<input type="radio" name="adl" value="4" <? if ($obj{"adl"} == "4") {echo "checked";}?>>4
<input type="radio" name="adl" value="5" <? if ($obj{"adl"} == "5") {echo "checked";}?>>5
<input type="radio" name="adl" value="6" <? if ($obj{"adl"} == "6") {echo "checked";}?>>6
<input type="radio" name="adl" value="7" <? if ($obj{"adl"} == "7") {echo "checked";}?>>7
<input type="radio" name="adl" value="8" <? if ($obj{"adl"} == "8") {echo "checked";}?>>8
<input type="radio" name="adl" value="9" <? if ($obj{"adl"} == "9") {echo "checked";}?>>9



<br><br>
<b>Socio-Legal:</b><br>

<input type="radio" name="legal" value="1" <? if ($obj{"legal"} == "1") {echo "checked";}?>>1
<input type="radio" name="legal" value="2" <? if ($obj{"legal"} == "2") {echo "checked";}?>>2
<input type="radio" name="legal" value="3" <? if ($obj{"legal"} == "3") {echo "checked";}?>>3
<input type="radio" name="legal" value="4" <? if ($obj{"legal"} == "4") {echo "checked";}?>>4
<input type="radio" name="legal" value="5" <? if ($obj{"legal"} == "5") {echo "checked";}?>>5
<input type="radio" name="legal" value="6" <? if ($obj{"legal"} == "6") {echo "checked";}?>>6
<input type="radio" name="legal" value="7" <? if ($obj{"legal"} == "7") {echo "checked";}?>>7
<input type="radio" name="legal" value="8" <? if ($obj{"legal"} == "8") {echo "checked";}?>>8
<input type="radio" name="legal" value="9" <? if ($obj{"legal"} == "9") {echo "checked";}?>>9



<br><br>
<b>Work/School:</b><br>

<input type="radio" name="works" value="1" <? if ($obj{"works"} == "1") {echo "checked";}?>>1
<input type="radio" name="works" value="2" <? if ($obj{"works"} == "2") {echo "checked";}?>>2
<input type="radio" name="works" value="3" <? if ($obj{"works"} == "3") {echo "checked";}?>>3
<input type="radio" name="works" value="4" <? if ($obj{"works"} == "4") {echo "checked";}?>>4
<input type="radio" name="works" value="5" <? if ($obj{"works"} == "5") {echo "checked";}?>>5
<input type="radio" name="works" value="6" <? if ($obj{"works"} == "6") {echo "checked";}?>>6
<input type="radio" name="works" value="7" <? if ($obj{"works"} == "7") {echo "checked";}?>>7
<input type="radio" name="works" value="8" <? if ($obj{"works"} == "8") {echo "checked";}?>>8
<input type="radio" name="works" value="9" <? if ($obj{"works"} == "9") {echo "checked";}?>>9



<br><br>
<b>Danger to Self:</b><br>

<input type="radio" name="self" value="1" <? if ($obj{"self"} == "1") {echo "checked";}?>>1
<input type="radio" name="self" value="2" <? if ($obj{"self"} == "2") {echo "checked";}?>>2
<input type="radio" name="self" value="3" <? if ($obj{"self"} == "3") {echo "checked";}?>>3
<input type="radio" name="self" value="4" <? if ($obj{"self"} == "4") {echo "checked";}?>>4
<input type="radio" name="self" value="5" <? if ($obj{"self"} == "5") {echo "checked";}?>>5
<input type="radio" name="self" value="6" <? if ($obj{"self"} == "6") {echo "checked";}?>>6
<input type="radio" name="self" value="7" <? if ($obj{"self"} == "7") {echo "checked";}?>>7
<input type="radio" name="self" value="8" <? if ($obj{"self"} == "8") {echo "checked";}?>>8
<input type="radio" name="self" value="9" <? if ($obj{"self"} == "9") {echo "checked";}?>>9



<br><br>
<b>Danger to Others:</b><br>

<input type="radio" name="dothers" value="1" <? if ($obj{"dothers"} == "1") {echo "checked";}?>>1
<input type="radio" name="dothers" value="2" <? if ($obj{"dothers"} == "2") {echo "checked";}?>>2
<input type="radio" name="dothers" value="3" <? if ($obj{"dothers"} == "3") {echo "checked";}?>>3
<input type="radio" name="dothers" value="4" <? if ($obj{"dothers"} == "4") {echo "checked";}?>>4
<input type="radio" name="dothers" value="5" <? if ($obj{"dothers"} == "5") {echo "checked";}?>>5
<input type="radio" name="dothers" value="6" <? if ($obj{"dothers"} == "6") {echo "checked";}?>>6
<input type="radio" name="dothers" value="7" <? if ($obj{"dothers"} == "7") {echo "checked";}?>>7
<input type="radio" name="dothers" value="8" <? if ($obj{"dothers"} == "8") {echo "checked";}?>>8
<input type="radio" name="dothers" value="9" <? if ($obj{"dothers"} == "9") {echo "checked";}?>>9



<br><br>
<b>Security/Management Needs:</b><br>

<input type="radio" name="security" value="1" <? if ($obj{"security"} == "1") {echo "checked";}?>>1
<input type="radio" name="security" value="2" <? if ($obj{"security"} == "2") {echo "checked";}?>>2
<input type="radio" name="security" value="3" <? if ($obj{"security"} == "3") {echo "checked";}?>>3
<input type="radio" name="security" value="4" <? if ($obj{"security"} == "4") {echo "checked";}?>>4
<input type="radio" name="security" value="5" <? if ($obj{"security"} == "5") {echo "checked";}?>>5
<input type="radio" name="security" value="6" <? if ($obj{"security"} == "6") {echo "checked";}?>>6
<input type="radio" name="security" value="7" <? if ($obj{"security"} == "7") {echo "checked";}?>>7
<input type="radio" name="security" value="8" <? if ($obj{"security"} == "8") {echo "checked";}?>>8
<input type="radio" name="security" value="9" <? if ($obj{"security"} == "9") {echo "checked";}?>>9


<? if ($obj{"atype"} == "2") {/*start FARS SECTION*/?>
<br><br>
<b>FARS:  Family Environment</b><br>

<input type="radio" name="family" value="1" <? if ($obj{"family"} == "1") {echo "checked";}?>>1
<input type="radio" name="family" value="2" <? if ($obj{"family"} == "2") {echo "checked";}?>>2
<input type="radio" name="family" value="3" <? if ($obj{"family"} == "3") {echo "checked";}?>>3
<input type="radio" name="family" value="4" <? if ($obj{"family"} == "4") {echo "checked";}?>>4
<input type="radio" name="family" value="5" <? if ($obj{"family"} == "5") {echo "checked";}?>>5
<input type="radio" name="family" value="6" <? if ($obj{"family"} == "6") {echo "checked";}?>>6
<input type="radio" name="family" value="7" <? if ($obj{"family"} == "7") {echo "checked";}?>>7
<input type="radio" name="family" value="8" <? if ($obj{"family"} == "8") {echo "checked";}?>>8
<input type="radio" name="family" value="9" <? if ($obj{"family"} == "9") {echo "checked";}?>>9



<br><br>
<b>FARS:  Self Care</b><br>

<input type="radio" name="care" value="1" <? if ($obj{"care"} == "1") {echo "checked";}?>>1
<input type="radio" name="care" value="2" <? if ($obj{"care"} == "2") {echo "checked";}?>>2
<input type="radio" name="care" value="3" <? if ($obj{"care"} == "3") {echo "checked";}?>>3
<input type="radio" name="care" value="4" <? if ($obj{"care"} == "4") {echo "checked";}?>>4
<input type="radio" name="care" value="5" <? if ($obj{"care"} == "5") {echo "checked";}?>>5
<input type="radio" name="care" value="6" <? if ($obj{"care"} == "6") {echo "checked";}?>>6
<input type="radio" name="care" value="7" <? if ($obj{"care"} == "7") {echo "checked";}?>>7
<input type="radio" name="care" value="8" <? if ($obj{"care"} == "8") {echo "checked";}?>>8
<input type="radio" name="care" value="9" <? if ($obj{"care"} == "9") {echo "checked";}?>>9
<?}/*END FARS SECTION*/?>
<br><br>



<center>
<? if($obj{"finalize"}!="on"){?>
<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[Don't Save Changes]</a><br>
 <b>You must check the Finalize box at the top of the form to prevent future editing.</b><br>
 <?}else{echo"This form has been finalized and may not be edited!<br>";?>
 <a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[RETURN TO ENCOUNTER]</a>
 <?}?>
 </center>
</form>
<?php
formFooter();
?>
