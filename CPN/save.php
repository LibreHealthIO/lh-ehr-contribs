<?php
//by Art Eaton
include_once("../../globals.php");
include_once("$srcdir/api.inc");
include_once("$srcdir/forms.inc");

foreach ($_POST as $k => $var) {
$_POST[$k] = mysql_escape_string($var);
echo "$var\n";
}


if ($encounter == "")
$encounter = date("Ymd");
if ($_GET["mode"] == "new"){
$newid = formSubmit("form_cpn", $_POST, $_GET["id"], $userauthorized);

addForm($encounter, "Counseling Progress Note", $newid, "cpn", $pid, $userauthorized);
}elseif ($_GET["mode"] == "update") {
sqlInsert("update form_cpn set pid = {$_SESSION["pid"]},groupname='".$_SESSION["authProvider"]."',user='".$_SESSION["authUser"]."',authorized=$userauthorized,activity=1, date = NOW(),
data1 ='".$_POST["data1"]."',
data2 ='".$_POST["data2"]."',
data3 ='".$_POST["data3"]."',
data4 ='".$_POST["data4"]."',
data5 ='".$_POST["data5"]."',
data6 ='".$_POST["data6"]."',
data7 ='".$_POST["data7"]."',
data8 ='".$_POST["data8"]."',
data9 ='".$_POST["data9"]."',
data10 ='".$_POST["data10"]."',
data11 ='".$_POST["data11"]."',
data12 ='".$_POST["data12"]."',
data13 ='".$_POST["data13"]."',
data14 ='".$_POST["data14"]."',
data15 ='".$_POST["data15"]."',
data16 ='".$_POST["data16"]."',
data17 ='".$_POST["data17"]."',
data18 ='".$_POST["data18"]."',
data19 ='".$_POST["data19"]."',
data20 ='".$_POST["data20"]."',
data21 ='".$_POST["data21"]."',
data22 ='".$_POST["data22"]."',
data23 ='".$_POST["data23"]."',
data24 ='".$_POST["data24"]."',
data25 ='".$_POST["data25"]."',
data26 ='".$_POST["data26"]."',
data27 ='".$_POST["data27"]."',
data28 ='".$_POST["data28"]."',
data29 ='".$_POST["data29"]."',
data30 ='".$_POST["data30"]."',
data31 ='".$_POST["data31"]."',
data32 ='".$_POST["data32"]."',
data33 ='".$_POST["data33"]."',
data34 ='".$_POST["data34"]."',
data35 ='".$_POST["data35"]."',
data36 ='".$_POST["data36"]."',
data37 ='".$_POST["data37"]."',
finalize ='".$_POST["finalize"]."' where id=$id");
}

if ($_GET["mode"] == "new" AND isset($_POST["data35"])){
 //get a field that is not autoincrement from the calender events, and increment it to add to a new record.
$inc  = sqlStatement("SELECT MAX(pc_multiple)as multiple FROM openemr_postcalendar_events");
$increment= SqlFetchArray($inc);
$poo=1+$increment['multiple'];
//$formattime = 'H:i:s';
//$to_time = DateTime::createFromFormat($formattime, $_POST["data37"]);
//$from_time = DateTime::createFromFormat($formattime, $_POST["data36"]);
//	$minutespast = round(abs($to_time - $from_time) / 60,2);
//add next scheduled event to the calender for the clinician and this patient at encounter date plus six months
 sqlStatement("INSERT INTO openemr_postcalendar_events SET " .
 						"pc_catid = 13, " .
 						"pc_multiple = '" .$poo . "', " .
 						"pc_aid = '" . add_escape_custom($_SESSION['authUserID']) . "', " .
						"pc_pid = '" .$_SESSION["pid"] . "', " .
                        "pc_title = '" . add_escape_custom('Counseling Session') . "', " .
                        "pc_time = NOW(), " .
                        "pc_hometext = '" . add_escape_custom('Counseling Session') . "', " .
                        "pc_comments = '" . add_escape_custom('Counseling Session') . "', " .
                        "pc_counter = 0, " .
                        "pc_topic = 1, " .
                        "pc_informant = '" . add_escape_custom($_SESSION['authUserID']) . "', " .
                        "pc_eventDate  ='".$_POST["data35"]."', " .
                        "pc_endDate = '" . add_escape_custom('0000-00-00') . "', " .
                        "pc_duration = '". add_escape_custom('3600')."', " .
                        "pc_recurrtype = 0, " .
                        "pc_recurrspec = '" . add_escape_custom('a:6:{s:17:"event_repeat_freq";N;s:22:"event_repeat_freq_type";N;s:19:"event_repeat_on_num";s:1:"1";s:19:"event_repeat_on_day";s:1:"0";s:20:"event_repeat_on_freq";s:1:"0";s:6:"exdate";s:0:"";}') . "', " .
                        "pc_recurrfreq = 0, " .
                        "pc_startTime ='".$_POST["data36"]."',  " .
                        "pc_endTime = '".$_POST["data37"]."', " .
                        "pc_eventstatus = 1, " .
                       	"pc_sharing = 1, " .
                        "pc_alldayevent = 0, " .
                        "pc_location = '" . add_escape_custom('a:6:{s:14:"event_location";s:0:"";s:13:"event_street1";s:0:"";s:13:"event_street2";s:0:"";s:10:"event_city";s:0:"";s:11:"event_state";s:0:"";s:12:"event_postal";s:0:"";}') . "', " .
                        "pc_apptstatus = '" . add_escape_custom('-') . "', "  .
                        "pc_prefcatid = 0 ,"  .
                        "pc_facility = 5 ,"  . // FF stuff
                        "pc_billing_location = 3 ");
                        
      //Write a new line to dated reminders to alert clinician when there is a scheduled CFARS ahead of time.                  
    sqlStatement("INSERT INTO dated_reminders SET " . 						
 						"dr_from_id = '" . add_escape_custom($_SESSION['authUserID']) . "', " .
 						"dr_message_text = '" . add_escape_custom('You have a Counseling Appointment!') . "', " .
 						"dr_message_sent_date = NOW(), " .
 						"dr_message_due_date = '".$_POST["data35"]."', " .
						"pid = '" .$_SESSION["pid"] . "', " .
                        "message_priority = 3, " .
                        "message_processed = 0, " . 
                        "processed_date = '" . add_escape_custom('0000-00-00 00:00:00') . "', " .
                        "dr_processed_by = 0 "); 
     //find the id of the last reminder so we can add it to a line for the dated reminders link table.                   
    $inc2  = sqlStatement("SELECT MAX(dr_id)as linknum FROM dated_reminders");
$increment2= SqlFetchArray($inc2);
$poo2=0+$increment2['linknum']; 
//add to dated reminders link table
     sqlStatement("INSERT INTO dated_reminders_link SET " . 						
 						"dr_id = '" .$poo2 . "', " .
 						"to_id = '" . add_escape_custom($_SESSION['authUserID']) . "' " );    }   

$_SESSION["encounter"] = $encounter;
formHeader("Redirecting....");
formJump();
formFooter();
?>
