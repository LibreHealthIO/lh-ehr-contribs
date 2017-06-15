<?php
//by Art Eaton
include_once("../../globals.php");
include_once("$srcdir/api.inc");
//formHeader("Form: PMM");
html_header_show();?>
	<STYLE TYPE="text/css">
	<!--
		@page { margin-right: 0.3in; margin-top: 0.2in; margin-bottom: 0.2in }
		P { margin-bottom: 0.08in; direction: ltr; color: #000000; widows: 2; orphans: 2 }
		P.western { font-family: "Frutiger 55 Roman"; font-size: 10pt; so-language: en-US }
		P.cjk { font-family: "Times New Roman", serif; font-size: 10pt }
		P.ctl { font-family: "Frutiger 55 Roman"; font-size: 14pt; so-language: ar-SA }
		H1 { margin-top: 0.04in; margin-bottom: 0in; direction: ltr; text-transform: uppercase; color: #000000; widows: 2; orphans: 2 }
		H1.western { font-family: "Frutiger 55 Roman"; font-size: 10pt; so-language: en-US }
		H1.cjk { font-family: "Times New Roman", serif; font-size: 10pt }
		H1.ctl { font-family: "Arial", sans-serif; font-size: 10pt; so-language: ar-SA }
		A:link { color: #0000ff }
	-->
	</STYLE>

<form method=post action="<?echo $rootdir;?>/forms/PMM/save.php?mode=new" name="my_form">
<br>
<span class="title"><center>Medication Management</center></span><br><br>
<center><a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
You must EDIT the form after saving and reviewing to finalize
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link_submit"
 onclick="top.restoreSession()">[Don't Save]</a></center>
<br>

<?php $res = sqlStatement("SELECT fname,mname,lname,ss,street,city,state,postal_code,phone_home,DOB FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res); 
			
?>
<br>
<TABLE WIDTH=764 CELLPADDING=7 CELLSPACING=0 STYLE="page-break-before: always">
	<COLGROUP>
		<COL WIDTH=370>
	</COLGROUP>
	<COLGROUP>
		<COL WIDTH=92>
		<COL WIDTH=256>
	</COLGROUP>
	<TR>
		<TD COLSPAN=3 WIDTH=746 VALIGN=TOP STYLE="border-top: 1.50pt solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.13in"><FONT FACE="Calibri, sans-serif"><b>Patient Name: </B> &nbsp; <?php echo $result['fname'] . '&nbsp;' . $result['mname'] . '&nbsp;' . $result['lname'];?> </FONT>
			
			</P>
		</TD>
	</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 VALIGN=TOP BGCOLOR="#d9d9d9" STYLE="border-top: 1.50pt solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<H1 CLASS="western" ALIGN=CENTER>Medication Management</H1>

			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=43 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<H1 CLASS="western" STYLE="margin-bottom: 0.2in"><FONT FACE="Calibri, sans-serif">Chief
				Complaint/Reason for ENCOUNTER:</FONT></H1>
				<P CLASS="western"><TEXTAREA NAME="presenting_problem" ROWS=2 COLS=113 WRAP=SOFT STYLE="width: 9.66in; height: 1.00in"></TEXTAREA>
								</P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=79 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<H1 CLASS="western" STYLE="margin-bottom: 0.2in; font-style: normal">
				<FONT FACE="Arial Narrow, sans-serif"><FONT SIZE=1 STYLE="font-size: 8pt">Current
				Medications</FONT></FONT></H1>
				<P CLASS="western"><TEXTAREA NAME="currentmeds" ROWS=2 COLS=113 WRAP=SOFT STYLE="width: 9.66in; height: 1.00in"><?
				$sql2 = "SELECT title, begdate FROM lists WHERE type = 'medication' AND pid = '$pid'";
$result2 = mysql_query($sql2) or die(mysql_error());
$num_results2 = mysql_num_rows($result2);
if ($num_results2 > 0){ 
while ($row2 =(mysql_fetch_array($result2))){echo trim($row2['title'])."=".$row2['begdate']."\n";}
}else{echo "No Recorded Medications";}
?></TEXTAREA>
								</P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=42 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<H1 CLASS="western" STYLE="margin-bottom: 0.2in; font-style: normal">
				<SPAN STYLE="font-variant: normal"><FONT FACE="Arial Narrow, sans-serif"><FONT SIZE=1 STYLE="font-size: 8pt">ALLERGIES</FONT></FONT></SPAN></H1>
				<P CLASS="western"><TEXTAREA NAME="allergies" ROWS=2 COLS=113 WRAP=SOFT STYLE="width: 9.64in; height: 1.00in"><?
				$sql3 = "SELECT title, begdate FROM lists WHERE type = 'allergy' AND pid = '$pid' AND title !='No known allergies or medication allergies'";
$result3 = mysql_query($sql3) or die(mysql_error());
$num_results3 = mysql_num_rows($result3);
if ($num_results3 > 0){ 
while ($row3 =(mysql_fetch_array($result3))){echo trim($row3['title'])."=".$row3['begdate']."\n";}
}else{echo "No Recorded Allergies or Medication Sensitivities";}
?></TEXTAREA>
								</P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=42 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<H1 CLASS="western" STYLE="margin-bottom: 0.2in"><FONT FACE="Calibri, sans-serif">Mental
				Status Exam</FONT></H1>
				<P CLASS="western">Appearance:<BR><TEXTAREA NAME="appearance" ROWS=2 COLS=113 WRAP=SOFT STYLE="width: 9.65in; height: 1.00in"></TEXTAREA>
								</P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=42 VALIGN=TOP STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding-top: 0in; padding-bottom: 0.02in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">General
				Behavior/Attitude:<BR><TEXTAREA NAME="general" ROWS=2 COLS=113 WRAP=SOFT STYLE="width: 9.64in; height: 1.00in"></TEXTAREA>
				</FONT>
				</P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=42 VALIGN=TOP STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding-top: 0in; padding-bottom: 0.02in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0.04in; widows: 0; orphans: 0">
				<FONT FACE="Calibri, sans-serif">Mood/Affect:<TEXTAREA NAME="affect_mood" ROWS=2 COLS=113 WRAP=SOFT STYLE="width: 9.64in; height: 0.46in"></TEXTAREA></FONT></P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=39 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<UL>
					<LI><P CLASS="western"><FONT FACE="Calibri, sans-serif">Speech:
					<BR><INPUT TYPE=CHECKBOX NAME="speech1" STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Clear/Coherent</B>
					<BR><INPUT TYPE=CHECKBOX NAME="speech2" STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Slow</B>
					<BR><INPUT TYPE=CHECKBOX NAME="speech3" STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Soft	Spoken</B>
					<BR><INPUT TYPE=CHECKBOX NAME="speech4" STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Mumbled/Unclear</B>
					<BR><INPUT TYPE=CHECKBOX NAME="speech5" STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Excessive/Rapid</B>
					<BR><INPUT TYPE=CHECKBOX NAME="speech6" STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Negative/Critical</B>
					<BR>Note abnormalities: (e.g., perseveration, paucity of language)<BR>
					<TEXTAREA NAME="speech_notes" ROWS=1 COLS=106 WRAP=SOFT STYLE="width: 9.12in; height: 0.21in"></TEXTAREA></FONT></P>
				</UL>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=39 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<UL>
					<LI><P CLASS="western"><FONT FACE="Calibri, sans-serif">Thought processes:
					<BR><INPUT TYPE=CHECKBOX NAME="thought1" STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>No Abnormality</B>
					<BR><INPUT TYPE=CHECKBOX NAME="thought2" STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Tangential</B>
					<BR><INPUT TYPE=CHECKBOX NAME="thought3" STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Perseverative/Obsessive</B>
					<BR><INPUT TYPE=CHECKBOX NAME="thought4" STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Delusions/Hallucinations</B>
					<BR>Note abnormalities: <BR>
					<TEXTAREA NAME="thought_notes" ROWS=1 COLS=107 WRAP=SOFT STYLE="width: 9.13in; height: 0.21in"></TEXTAREA></FONT></P>
				</UL>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=32 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<UL>
					<LI><P CLASS="western"><FONT FACE="Calibri, sans-serif">Potential for Suicide</FONT><FONT FACE="Calibri, sans-serif">:</FONT>
					<BR><INPUT TYPE=RADIO NAME="psychoa" VALUE=1 STYLE="width: 0.14in; height: 0.14in">None
					&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychoa" VALUE=2 STYLE="width: 0.14in; height: 0.14in">Mild
					 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychoa" VALUE=3 STYLE="width: 0.14in; height: 0.14in">Moderate
					 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychoa" VALUE=4 STYLE="width: 0.14in; height: 0.14in">Severe
										</P>
				</UL>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=36 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<UL>
					<LI><P CLASS="western"><FONT FACE="Calibri, sans-serif">Potential for Homicide</FONT><FONT FACE="Calibri, sans-serif">:</FONT>
					<BR><INPUT TYPE=RADIO NAME="psychob" VALUE=1 STYLE="width: 0.14in; height: 0.14in">None
					&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychob" VALUE=2 STYLE="width: 0.14in; height: 0.14in">Mild
					 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychob" VALUE=3 STYLE="width: 0.14in; height: 0.14in">Moderate
					 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychob" VALUE=4 STYLE="width: 0.14in; height: 0.14in">Severe
										</P>
				</UL>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=36 VALIGN=TOP STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding-top: 0in; padding-bottom: 0.02in; padding-left: 0.08in; padding-right: 0.08in">
				<UL>
					<LI><P CLASS="western"><FONT FACE="Calibri, sans-serif">Potential for Violence</FONT><FONT FACE="Calibri, sans-serif">:</FONT>
					<BR><INPUT TYPE=RADIO NAME="psychoc" VALUE=1 STYLE="width: 0.14in; height: 0.14in">None
					&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychoc" VALUE=2 STYLE="width: 0.14in; height: 0.14in">Mild
					 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychoc" VALUE=3 STYLE="width: 0.14in; height: 0.14in">Moderate
					 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychoc" VALUE=4 STYLE="width: 0.14in; height: 0.14in">Severe
										</P>
				</UL>						
					<P CLASS="western"><FONT FACE="Calibri, sans-serif">Notes:<BR>
				<TEXTAREA NAME="psycho_notes" ROWS=1 COLS=112 WRAP=SOFT STYLE="width: 9.61in; height: 0.21in"></TEXTAREA></FONT></P>					
				
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=42 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Lab Tests Reviewed:<BR>
				<INPUT TYPE=RADIO NAME="labs" VALUE="0" STYLE="width: 0.14in; height: 0.14in">N/A
				&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="labs" VALUE="1" STYLE="width: 0.14in; height: 0.14in">Sees Pediatrician
				 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="labs" VALUE="2" STYLE="width: 0.14in; height: 0.14in">Pending
				 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="labs" VALUE="3" STYLE="width: 0.14in; height: 0.14in">Routed
				 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="labs" VALUE="4" STYLE="width: 0.14in; height: 0.14in">Complete
				&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="labs" VALUE="5" STYLE="width: 0.14in; height: 0.14in">Canceled</FONT></P>
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Notes:<BR>
				<TEXTAREA NAME="other" ROWS=1 COLS=112 WRAP=SOFT STYLE="width: 9.61in; height: 0.21in"></TEXTAREA></FONT></P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=18 BGCOLOR="#d9d9d9" STYLE="border-top: 1.50pt solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<P CLASS="western" ALIGN=CENTER STYLE="text-transform: uppercase">
				<B>Plan</B></P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=42 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<P CLASS="western" STYLE="text-indent: 0.34in"><FONT FACE="Calibri, sans-serif"><b>Informed
				Consent:</b><BR>Information was fully disclosed and discussed
				regarding the nature of the treatment, potential benefits,
				potential risks, and any alternatives to the treatment including:<BR>
				Potential benefits; Risks; Risk of no treatment at all.<br>  Any
				specific comments are noted below.  The individual/guardian
				consented to the proposed medication/treatment.</FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=450 HEIGHT=15 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: none; padding-top: 0.02in; padding-bottom: 0.02in; padding-left: 0.08in; padding-right: 0in">
				<P CLASS="western" ALIGN=CENTER STYLE="text-indent: 0.34in"><FONT FACE="Calibri, sans-serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Diagnoses
				</B></FONT></FONT>
				</P>
			</TD>
			<TD WIDTH=488 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<P CLASS="western" ALIGN=CENTER><FONT FACE="Calibri, sans-serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Treatment
				Plan</B></FONT></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD ROWSPAN=4 WIDTH=450 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: none; padding-top: 0.02in; padding-bottom: 0.02in; padding-left: 0.08in; padding-right: 0in">
				<P CLASS="western" STYLE="margin-bottom: 0in"><FONT FACE="Calibri, sans-serif">Change Notes:
				<BR><TEXTAREA NAME="diagchange" ROWS=5 COLS=51 WRAP=SOFT STYLE="width: 4.51in; height: 3in"></TEXTAREA></FONT></P>
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Current CGAS:<BR>
				<TEXTAREA NAME="cgas" ROWS=1 COLS=51 WRAP=SOFT STYLE="width: 4.5in; height: 0.28in"></TEXTAREA></FONT></P>
			</TD>
			<TD WIDTH=488 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Medication Changes<BR>
				<TEXTAREA NAME="medchanges" ROWS=1 COLS=50 WRAP=SOFT STYLE="width: 4.39in; height: 1in"></TEXTAREA></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=488 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Medication Change Reasons:<BR>
				<INPUT TYPE=RADIO NAME="changereason" VALUE="1" STYLE="width: 0.14in; height: 0.14in">No Changes 
				<BR> <INPUT TYPE=RADIO NAME="changereason" VALUE="2" STYLE="width: 0.14in; height: 0.14in">Medication Adjustment  
				<BR> <INPUT TYPE=RADIO NAME="changereason" VALUE="3" STYLE="width: 0.14in; height: 0.14in">Informed Consent Obtained for New Medications/Treatment  
				<BR> <INPUT TYPE=RADIO NAME="changereason" VALUE="4" STYLE="width: 0.14in; height: 0.14in">Other</FONT></P>
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Other:<BR>
				<TEXTAREA NAME="changeother" ROWS=1 COLS=111 WRAP=SOFT STYLE="width: 4.39in; height: 0.21in"></TEXTAREA></FONT></P>
			
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=488 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Labs Ordered for Next Appointment:<BR>
				<INPUT TYPE=RADIO NAME="laborder" VALUE="0" STYLE="width: 0.14in; height: 0.14in">N/A
				<BR><INPUT TYPE=RADIO NAME="laborder" VALUE="1" STYLE="width: 0.14in; height: 0.14in">Sees Pediatrician 
				<BR> <INPUT TYPE=RADIO NAME="laborder" VALUE="2" STYLE="width: 0.14in; height: 0.14in">Pending  
				<BR> <INPUT TYPE=RADIO NAME="laborder" VALUE="3" STYLE="width: 0.14in; height: 0.14in">Routed 
				<BR> <INPUT TYPE=RADIO NAME="laborder" VALUE="4" STYLE="width: 0.14in; height: 0.14in">complete
				<BR> <INPUT TYPE=RADIO NAME="laborder" VALUE="5" STYLE="width: 0.14in; height: 0.14in">Canceled</FONT></P>
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Notes:<BR>
				<TEXTAREA NAME="labother" ROWS=1 COLS=111 WRAP=SOFT STYLE="width: 4.39in; height: 0.21in"></TEXTAREA></FONT></P>
			
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=488 STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Medication Recommendations are listed in Patient Prescription Record</FONT></P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=89 VALIGN=TOP STYLE="border: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Follow-up appointment in:<BR>
				<INPUT TYPE=RADIO NAME="appt" VALUE="1" STYLE="width: 0.14in; height: 0.14in">1-2 Weeks 
				&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="appt" VALUE="2" STYLE="width: 0.14in; height: 0.14in">3-4 Weeks
				 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="appt" VALUE="3" STYLE="width: 0.14in; height: 0.14in">6 Weeks 
				&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="appt" VALUE="4" STYLE="width: 0.14in; height: 0.14in">2 Months  
				&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="appt" VALUE="5" STYLE="width: 0.14in; height: 0.14in">3 Months 
				&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="appt" VALUE="6" STYLE="width: 0.14in; height: 0.14in">Other</FONT></P>
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Appointment Notes:<BR>
				<TEXTAREA NAME="apptother" ROWS=1 COLS=111 WRAP=SOFT STYLE="width: 9.5in; height: 0.21in"></TEXTAREA></FONT></P>
			</TD>
		</TR>
	
		
</TABLE>
<center><a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link_submit"
 onclick="top.restoreSession()">[Don't Save]</a></center>
<br>
<script language='JavaScript'>
var myEvent = window.attachEvent || window.addEventListener;
var chkevent = window.attachEvent ? 'onbeforeunload' : 'beforeunload'; 

            myEvent(chkevent, function(e) { // For >=IE7, Chrome, Firefox
                var confirmationMessage = 'Are you sure you want to leave the page?';
                  // make IE7, IE8 compatible  Firefox doesn't seem to allow custom messages.
                (e || window.event).returnValue = confirmationMessage;
                return confirmationMessage;
            });
	</script>
		</form>
<?php
formFooter();
?>