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
	
$newid = formSubmit("form_cfars", $_POST, $_GET["id"], $userauthorized);
//save the cfars form using the forms api to redirect back to encounter
addForm($encounter, "FARS/CFARS", $newid, "cfars", $pid, $userauthorized);
}elseif ($_GET["mode"] == "update") {
sqlInsert("update form_cfars set pid = {$_SESSION["pid"]},groupname='".$_SESSION["authProvider"]."',user='".$_SESSION["authUser"]."',authorized=$userauthorized,activity=1, date = NOW(),
purpose ='".$_POST["purpose"]."',
atype ='".$_POST["atype"]."',
species ='".$_POST["species"]."',
sa_hx ='".$_POST["sa_hx"]."',
education ='".$_POST["education"]."',
license_num  = '".$_POST["license_num"]."',
county ='".$_POST["county"]."',
depression ='".$_POST["depression"]."',
anxiety ='".$_POST["anxiety"]."',
hyperactivity ='".$_POST["hyperactivity"]."',
thought_process ='".$_POST["thought_process"]."',
cognitive ='".$_POST["cognitive"]."',
medical  ='".$_POST["medical"]."',
stress ='".$_POST["stress"]."',
substance ='".$_POST["substance"]."',
interpersonal ='".$_POST["interpersonal"]."', 
home ='".$_POST["home"]."',
adl ='".$_POST["adl"]."',
legal ='".$_POST["legal"]."',
works ='".$_POST["works"]."',
self ='".$_POST["self"]."',
dothers ='".$_POST["dothers"]."',
security ='".$_POST["security"]."',
family ='".$_POST["family"]."',
care  ='".$_POST["care"]."',
counselor_id ='".$_POST["counselor_name"]."',
finalize ='".$_POST["finalize"]."' where id=$id");}

if ($_GET["mode"] == "new" AND $_POST["purpose"]<3){
 //get a field that is not autoincrement from the calender events, and increment it to add to a new record.
$inc  = sqlStatement("SELECT MAX(pc_multiple)as multiple FROM openemr_postcalendar_events");
$increment= SqlFetchArray($inc);
$poo=1+$increment['multiple'];
//add next scheduled event to the calender for the clinician and this patient at encounter date plus six months
 sqlStatement("INSERT INTO openemr_postcalendar_events SET " .
 						"pc_catid = 19, " .
 						"pc_multiple = '" .$poo . "', " .
 						"pc_aid = '" . add_escape_custom($_SESSION['authUserID']) . "', " .
						"pc_pid = '" .$_SESSION["pid"] . "', " .
                        "pc_title = '" . add_escape_custom('FARS/CFARS') . "', " .
                        "pc_time = NOW(), " .
                        "pc_hometext = '" . add_escape_custom('FARS/CFARS') . "', " .
                        "pc_comments = '" . add_escape_custom('FARS/CFARS') . "', " .
                        "pc_counter = 0, " .
                        "pc_topic = 1, " .
                        "pc_informant = '" . add_escape_custom($_SESSION['authUserID']) . "', " .
                        "pc_eventDate = '" . date('Y-m-d', strtotime('+6 months')) . "', " .
                        "pc_endDate = '" . add_escape_custom('0000-00-00') . "', " .
                        "pc_duration = 3600, " .
                        "pc_recurrtype = 0, " .
                        "pc_recurrspec = '" . add_escape_custom('a:6:{s:17:"event_repeat_freq";N;s:22:"event_repeat_freq_type";N;s:19:"event_repeat_on_num";s:1:"1";s:19:"event_repeat_on_day";s:1:"0";s:20:"event_repeat_on_freq";s:1:"0";s:6:"exdate";s:0:"";}') . "', " .
                        "pc_recurrfreq = 0, " .
                        "pc_startTime = '" . add_escape_custom('08:00:00') . "', " .
                        "pc_endTime = '" . add_escape_custom('09:00:00') . "', " .
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
 						"dr_message_text = '" . add_escape_custom('FARS/CFARS DUE!') . "', " .
 						"dr_message_sent_date = NOW(), " .
 						"dr_message_due_date = '" . date('Y-m-d', strtotime('+6 months')) . "', " .
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
                        
 //Finish up business.                                           
$_SESSION["encounter"] = $encounter;
formHeader("Redirecting....");
formJump();
formFooter();
?>

