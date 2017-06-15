<?php
//by Art Eaton
include_once("../../globals.php");
include_once($GLOBALS["srcdir"]."/api.inc");
function cfars_report( $pid, $encounter, $cols, $id) {
$count = 0;
$tick =0;
$obj = formFetch("form_cfars", $id);
?>

<html><head>
<? html_header_show();?>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
</head>
<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>

<span class="title"><center><b>Functional Assessment Rating Scale</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); 
?>
<b><u>Client and Service Information</u></b>
<br><br>
<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>
<b>Purpose:</b>&nbsp;<?if ($obj{"purpose"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{ echo stripslashes($obj{"purpose"});}?><br>
<? if ($obj{"atype"} == "2") {/*start FARS SECTION*/
echo("<b>Assessment Type: FARS<br>");}
if ($obj{"atype"} == "1") {
echo("<b>Assessment Type: CFARS<br>");}
if ($obj{"atype"} == "0") {
echo("<b>Assessment Type: UNKNOWN!!!!!!<b><br>");}?>

<b>Ethnicity:</b>&nbsp;<? echo stripslashes($obj{"species"});?><br>
<b>Substance Abuse Hx:</b>&nbsp;<? echo stripslashes($obj{"sa_hx"});?><br>
<b>Evaluator Education:</b>&nbsp;<? if ($obj{"education"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"education"});}?><br>

<? if ($obj{"atype"} == "2") {/*start FARS SECTION*/?>
<b>Evaluator FARS #:</b>&nbsp;<? if ($obj{"license_num"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"license_num"});}?><br>
<? }else{?>
<b>Evaluator CFARS #:</b>&nbsp;<? if ($obj{"license_num"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"license_num"});}?><br>
<? }?>


<b>County:</b>&nbsp;<? echo stripslashes($obj{"county"});?><br><br>

<b>Depression:</b>&nbsp;<? if ($obj{"depression"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"depression"});}?><br>
<b>Anxiety:</b>&nbsp;<? if ($obj{"anxiety"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"anxiety"});}?><br>
<b>Hyperactivity:</b>&nbsp;<? if ($obj{"hyperactivity"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"hyperactivity"});}?><br>
<b>Thought process:</b>&nbsp;<? if ($obj{"thought_process"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"thought_process"});}?><br>
<b>Cognitive:</b>&nbsp;<? if ($obj{"cognitive"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"cognitive"});}?><br>
<b>Medical :</b>&nbsp;<? if ($obj{"medical"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"medical"});}?><br>
<b>Stress:</b>&nbsp;<? if ($obj{"stress"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"stress"});}?><br>
<b>Substance Abuse:</b>&nbsp;<? if ($obj{"substance"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"substance"});}?><br>
<b>Interpersonal:</b>&nbsp;<? if ($obj{"interpersonal"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"interpersonal"});}?><br> 
<b>Home:</b>&nbsp;<? if ($obj{"home"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"home"});}?><br>
<b>ADL:</b>&nbsp;<? if ($obj{"adl"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"adl"});}?><br>
<b>Legal:</b>&nbsp;<? if ($obj{"legal"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"legal"});}?><br>
<b>Work School:</b>&nbsp;<? if ($obj{"works"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"works"});}?><br>
<b>Danger to Self:</b>&nbsp;<? if ($obj{"self"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"self"});}?><br>
<b>Danger to Others:</b>&nbsp;<? if ($obj{"dothers"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"dothers"});}?><br>
<b>Security:</b>&nbsp;<?if ($obj{"security"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{ echo stripslashes($obj{"security"});}?><br><BR>
<? if ($obj{"atype"} == "2") {/*start FARS SECTION*/?>
<b>Family:</b>&nbsp;<? if ($obj{"family"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"family"});}?><br>
<b>Self Care :</b>&nbsp;<? if ($obj{"care"}<1){echo("<font color=red>INCOMPLETE!!!</font>");}else{echo stripslashes($obj{"care"});}?><br>
<?}/*END FARS SECTION*/?>
<b>Evaluator:</b>&nbsp;<? echo stripslashes($obj{"counselor_name"});?>
<? }?>
