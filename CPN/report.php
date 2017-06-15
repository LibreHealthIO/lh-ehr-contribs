<?php
//by Art Eaton
include_once("../../globals.php");
include_once($GLOBALS["srcdir"]."/api.inc");
function cpn_report( $pid, $encounter, $cols, $id) {
$count = 0;
$obj = formFetch("form_cpn", $id);
?>

<html><head>
<? html_header_show();?>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
</head>
<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<span class="title"><center><b>Counseling Progress Note</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>
<b><u>Client and Service Information</u></b>
<br><br>
<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br>



<b>Start Time:</b>&nbsp;<? echo stripslashes($obj{"data1"});?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>End Time:</b>&nbsp;<? echo stripslashes($obj{"data2"});?>
<br><br>

<b><u>Participants:  </u></b><br>
<? echo stripslashes($obj{"data3"});?>
<br><br>

<b><u>Contacts Since Last Session:</u></b><br>
<? echo stripslashes($obj{"data4"});?>
<br><br>

<b><u>Treatment Goals/Objectives Addressed:</u></b><br>
<? echo stripslashes($obj{"data5"});?>
<br><br>

<b><u>Therapeutic Interventions:</u></b><br>
<? echo stripslashes($obj{"data6"});?>
<br><br>

<b><u>Session Focus:</u></b><br>
<? echo stripslashes($obj{"data7"});?>
<br><br>

<b>Assessment/Response of Client:</b><br>
 <? if ($obj{"data8"} == "on") {echo "<b>Engaging</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}?>
 <? if ($obj{"data9"} == "on") {echo "<b>Withdrawn</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}?>
 <? if ($obj{"data10"} == "on") {echo "<b>Cooperative</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}?>
 <? if ($obj{"data11"} == "on") {echo "<b>Defiant</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}?>
 <? if ($obj{"data12"} == "on") {echo "<b>Flat Affect</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}?>
 <? if ($obj{"data13"} == "on") {echo "<b>Anxious/Fearful</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}?>
 <? if ($obj{"data14"} == "on") {echo "<b>Happy</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}?>
 <? if ($obj{"data15"} == "on") {echo "<b>Sad</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}?>
 <? if ($obj{"data16"} == "on") {echo "<b>Angry</b>";}?>
<br><br>

<b><u>Progress Toward Treatment Goals:</u></b><br>
<? echo stripslashes($obj{"data17"});?>
<br><br>

<b>Risk Assessment:&nbsp;&nbsp;&nbsp;&nbsp;</b><?echo stripslashes($obj{"data18"});?>
<br><br>


<b>Risk Factors:</b>
<? if ($obj{"data19"} == "on") {echo "Hx of Tx Non-Compliance&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"data21"} == "on") {echo "Hx/Px of Elopement&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"data22"} == "on") {echo "Hx of Multiple Dx&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"data23"} == "on") {echo "Prior Inpatient Treatment&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"data24"} == "on") {echo "Prior Homicide or Suicide Attempt&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"data25"} == "on") {echo "Self Injurious&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"data26"} == "on") {echo "Current Suicide Ideation&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"data27"} == "on") {echo "Imminent Risk of Harm to Self&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"data28"} == "on") {echo "Threats to Harm Others&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"data29"} == "on") {echo "Aggression&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"data30"} == "on") {echo "Current Homicidal Ideation&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"data31"} == "on") {echo "Imminent Risk of Harm to Others&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"data32"} == "on") {echo "Other Risks Noted&nbsp;&nbsp;&nbsp;&nbsp;";}?>
<br><br>

<b><u>Risk Management</u></b><br>
<? echo stripslashes($obj{"data33"});?><br><br>




<b>Plan: </b><br>
<? echo stripslashes($obj{"data34"});?>
<br><br>

Next Appointment Date : <? echo stripslashes($obj{"data35"});?><br>
Next Appointment Start Time : <? echo stripslashes($obj{"data36"});?><br>
Next Appointment End Time : <? echo stripslashes($obj{"data37"});?> <br>
This is the date and time of appointment set at time of writing.  Consult Calendar for current status.







<br><br>
<b>Digital Signature:</b>&nbsp; <?php echo $providerNameRes;}?>
