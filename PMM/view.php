<!DOCTYPE HTML>
 <?php
//by Art Eaton PMM
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: PMM");
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
 <?php
$obj = formFetch("form_pmm", $_GET["id"]);
?> 

<form method=post action=" <?echo $rootdir?> /forms/PMM/save.php?mode=update&id= <?echo $_GET["id"];?> " name="my_form">
<span class="title"><center>Medication Management</center></span><br><br>
<center>

 <? if($obj{"finalize"}!="on"OR ($_SESSION["authUser"] ==="ncuddy" OR $_SESSION["authUser"] ==="leaton" OR $_SESSION["authUser"] ==="Art")){?> 
	<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
	<a href=" <?php echo $GLOBALS['form_exit_url']; ?> " class="link" onclick="top.restoreSession()">[Don't Save Changes]</a>
 	<br>
 	
 	<input type=checkbox name='finalize' <? if ($obj{"finalize"} == "on") {echo "checked";};?> >&nbsp;<b>Check here to finalize this note:</b><br>
 <?	}else{
	 	echo"This form has been finalized and may not be edited!<br>";?> 
 		<a href=" <?php echo $GLOBALS['form_exit_url']; ?> " class="link" onclick="top.restoreSession()">[RETURN TO ENCOUNTER]</a>
 <?}?> 
 </center>
<br><br>

<div class="noprint"><a href="javascript:window.print();">Print This Page</a></div>
<br><br>

 <?php $res = sqlStatement("SELECT fname,mname,lname,ss,street,city,state,postal_code,phone_home,DOB FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res); ?> 
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
			<P CLASS="western" STYLE="margin-top: 0.13in"><FONT FACE="Calibri, sans-serif"><b>Patient Name:&nbsp; </B> <?php echo $result['fname'] . '&nbsp;' . $result['mname'] . '&nbsp;' . $result['lname'];?> </FONT>
			
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
				<P CLASS="western"><TEXTAREA NAME="presenting_problem" ROWS=2 COLS=113 WRAP=SOFT STYLE="width: 9.66in; height: 1.00in"> <? echo stripslashes($obj{"presenting_problem"});?> </TEXTAREA>
								</P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=79 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<H1 CLASS="western" STYLE="margin-bottom: 0.2in; font-style: normal">
				<FONT FACE="Arial Narrow, sans-serif"><FONT SIZE=1 STYLE="font-size: 8pt">Current
				Medications</FONT></FONT></H1>
				<P CLASS="western"><TEXTAREA NAME="currentmeds" ROWS=2 COLS=113 WRAP=SOFT STYLE="width: 9.66in; height: 1.00in"> <? echo stripslashes($obj{"currentmeds"});?> </TEXTAREA>
								</P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=42 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<H1 CLASS="western" STYLE="margin-bottom: 0.2in; font-style: normal">
				<SPAN STYLE="font-variant: normal"><FONT FACE="Arial Narrow, sans-serif"><FONT SIZE=1 STYLE="font-size: 8pt">ALLERGIES</FONT></FONT></SPAN></H1>
				<P CLASS="western"><TEXTAREA NAME="allergies" ROWS=2 COLS=113 WRAP=SOFT STYLE="width: 9.64in; height: 1.00in"> <? echo stripslashes($obj{"allergies"});?> </TEXTAREA>
								</P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=42 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<H1 CLASS="western" STYLE="margin-bottom: 0.2in"><FONT FACE="Calibri, sans-serif">Mental
				Status Exam</FONT></H1>
				<P CLASS="western">Appearance:<BR><TEXTAREA NAME="appearance" ROWS=2 COLS=113 WRAP=SOFT STYLE="width: 9.65in; height: 1.00in"> <? echo stripslashes($obj{"appearance"});?> </TEXTAREA>
								</P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=42 VALIGN=TOP STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding-top: 0in; padding-bottom: 0.02in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">General
				Behavior/Attitude:<BR><TEXTAREA NAME="general" ROWS=2 COLS=113 WRAP=SOFT STYLE="width: 9.64in; height: 1.00in"> <? echo stripslashes($obj{"general"});?> </TEXTAREA>
				</FONT>
				</P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=42 VALIGN=TOP STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding-top: 0in; padding-bottom: 0.02in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western" STYLE="margin-top: 0.04in; widows: 0; orphans: 0">
				<FONT FACE="Calibri, sans-serif"><FONT SIZE=3>Mood/Affect:<TEXTAREA NAME="affect_mood" ROWS=2 COLS=113 WRAP=SOFT STYLE="width: 9.64in; height: 0.46in"> <? echo stripslashes($obj{"affect_mood"});?> </TEXTAREA></FONT></FONT></P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=39 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<UL>
					<LI><P CLASS="western"><FONT FACE="Calibri, sans-serif">Speech:
					<BR><INPUT TYPE=CHECKBOX NAME="speech1" <? if ($obj{"speech1"} == "on") {echo "checked";};?> STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Clear/Coherent</B>
					<BR><INPUT TYPE=CHECKBOX NAME="speech2" <? if ($obj{"speech2"} == "on") {echo "checked";};?> STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Slow</B>
					<BR><INPUT TYPE=CHECKBOX NAME="speech3" <? if ($obj{"speech3"} == "on") {echo "checked";};?> STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Soft	Spoken</B>
					<BR><INPUT TYPE=CHECKBOX NAME="speech4" <? if ($obj{"speech4"} == "on") {echo "checked";};?> STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Mumbled/Unclear</B>
					<BR><INPUT TYPE=CHECKBOX NAME="speech5" <? if ($obj{"speech5"} == "on") {echo "checked";};?> STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Excessive/Rapid</B>
					<BR><INPUT TYPE=CHECKBOX NAME="speech6" <? if ($obj{"speech6"} == "on") {echo "checked";};?> STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Negative/Critical</B>
					<BR>Note abnormalities: (e.g., perseveration, paucity of language)<BR>
					<TEXTAREA NAME="speech_notes" ROWS=1 COLS=106 WRAP=SOFT STYLE="width: 9.12in; height: 0.21in"> <? echo stripslashes($obj{"speech_notes"});?> </TEXTAREA></FONT></P>
					</LI>
				</UL>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=39 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<UL>
					<LI><P CLASS="western"><FONT FACE="Calibri, sans-serif">Thought processes:
					<BR><INPUT TYPE=CHECKBOX NAME="thought1" <? if ($obj{"thought1"} == "on") {echo "checked";};?> STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>No Abnormality</B>
					<BR><INPUT TYPE=CHECKBOX NAME="thought2" <? if ($obj{"thought2"} == "on") {echo "checked";};?> STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Tangential</B>
					<BR><INPUT TYPE=CHECKBOX NAME="thought3" <? if ($obj{"thought3"} == "on") {echo "checked";};?> STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Perseverative/Obsessive</B>
					<BR><INPUT TYPE=CHECKBOX NAME="thought4" <? if ($obj{"thought4"} == "on") {echo "checked";};?> STYLE="width: 0.14in; height: 0.14in">&nbsp;<B>Delusions/Hallucinations</B>
					<BR>Note abnormalities: <BR>
					<TEXTAREA NAME="thought_notes" ROWS=1 COLS=107 WRAP=SOFT STYLE="width: 9.13in; height: 0.21in"> <? echo stripslashes($obj{"thought_notes"});?> </TEXTAREA></FONT></P>
					</LI>
				</UL>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=32 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<UL>
					<LI>
					<P CLASS="western"><FONT FACE="Calibri, sans-serif">Potential for Suicide</FONT><FONT FACE="Calibri, sans-serif">:</FONT>
					<BR>
					                                     <INPUT TYPE=RADIO NAME="psychoa" VALUE=1 <?php if ($obj{"psychoa"} == 1) {echo " checked ='checked'";}?> >None
					&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychoa" VALUE=2 <?php if ($obj{"psychoa"} == 2) {echo " checked ='checked'";}?> >Mild
					 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychoa" VALUE=3 <?php if ($obj{"psychoa"} == 3) {echo " checked ='checked'";}?> >Moderate
					 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychoa" VALUE=4 <?php if ($obj{"psychoa"} == 4) {echo " checked ='checked'";}?> >Severe
					 
										</P>
										
				</LI>					
				</UL>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=36 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<UL>
					<LI><P CLASS="western"><FONT FACE="Calibri, sans-serif">Potential for Homicide</FONT><FONT FACE="Calibri, sans-serif">:</FONT>
					<BR><INPUT TYPE=RADIO NAME="psychob" VALUE=1 <?php if ($obj{"psychob"} == 1) {echo " checked ='checked'";}?> STYLE="width: 0.14in; height: 0.14in">None
					&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychob" VALUE=2 <?php if ($obj{"psychob"} == 2) {echo " checked ='checked'";}?> STYLE="width: 0.14in; height: 0.14in">Mild
					 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychob" VALUE=3 <?php if ($obj{"psychob"} == 3) {echo " checked ='checked'";}?> STYLE="width: 0.14in; height: 0.14in">Moderate
					 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychob" VALUE=4 <?php if ($obj{"psychob"} == 4) {echo " checked ='checked'";}?> STYLE="width: 0.14in; height: 0.14in">Severe
					 
										</P>
					</LI>					
				</UL>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=36 VALIGN=TOP STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding-top: 0in; padding-bottom: 0.02in; padding-left: 0.08in; padding-right: 0.08in">
				<UL>
					<LI><P CLASS="western"><FONT FACE="Calibri, sans-serif">Potential for Violence</FONT><FONT FACE="Calibri, sans-serif">:</FONT>
					<BR><INPUT TYPE=RADIO NAME="psychoc" VALUE=1 <?php if ($obj{"psychoc"} == 1) {echo " checked ='checked'";}?> STYLE="width: 0.14in; height: 0.14in">None
					&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychoc" VALUE=2 <?php if ($obj{"psychoc"} == 2) {echo " checked ='checked'";}?> STYLE="width: 0.14in; height: 0.14in">Mild
					 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychoc" VALUE=3 <?php if ($obj{"psychoc"} == 3) {echo " checked ='checked'";}?> STYLE="width: 0.14in; height: 0.14in">Moderate
					 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="psychoc" VALUE=4 <?php if ($obj{"psychoc"} == 4) {echo " checked ='checked'";}?> STYLE="width: 0.14in; height: 0.14in">Severe
					  
										</P>
					</LI>					
				</UL>						
					<P CLASS="western"><FONT FACE="Calibri, sans-serif">Notes:<BR>
				<TEXTAREA NAME="psycho_notes" ROWS=1 COLS=112 WRAP=SOFT STYLE="width: 9.61in; height: 0.21in"> <? echo stripslashes($obj{"psycho_notes"});?> </TEXTAREA></FONT></P>					
				
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=942 HEIGHT=42 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Lab Tests Reviewed:<BR>
				<INPUT TYPE=RADIO NAME="labs" VALUE="0" <? if ($obj{"labs"} == "0") {echo "checked ='checked'";}?> STYLE="width: 0.14in; height: 0.14in">N/A
				&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="labs" VALUE="1" <? if ($obj{"labs"} == "1") {echo "checked ='checked'";}?> STYLE="width: 0.14in; height: 0.14in">Sees Pediatrician
				 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="labs" VALUE="2" <? if ($obj{"labs"} == "2") {echo "checked ='checked'";}?> STYLE="width: 0.14in; height: 0.14in">Pending
				 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="labs" VALUE="3" <? if ($obj{"labs"} == "3") {echo "checked ='checked'";}?> STYLE="width: 0.14in; height: 0.14in">Routed
				 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="labs" VALUE="4" <? if ($obj{"labs"} == "4") {echo "checked ='checked'";}?> STYLE="width: 0.14in; height: 0.14in">Complete
				&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="labs" VALUE="5" <? if ($obj{"labs"} == "5") {echo "checked ='checked'";}?> STYLE="width: 0.14in; height: 0.14in">Canceled</FONT></P>
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Notes:<BR>
				<TEXTAREA NAME="other" ROWS=1 COLS=112 WRAP=SOFT STYLE="width: 9.61in; height: 0.21in"> <? echo stripslashes($obj{"other"});?> </TEXTAREA></FONT></P>
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
				<P CLASS="western" STYLE="text-indent: 0.34in"><FONT FACE="Calibri, sans-serif">Informed
				Consent:<BR>Information was fully disclosed and discussed
				regarding the nature of the treatment, potential benefits,
				potential risks, and any alternatives to the treatment including:
				Potential benefits; Risks; Risk of no treatment at all.  Any
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
				<BR><TEXTAREA NAME="diagchange" ROWS=5 COLS=51 WRAP=SOFT STYLE="width: 4.51in; height: 3in"> <? echo stripslashes($obj{"diagchange"});?> </TEXTAREA></FONT></P>
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Current CGAS:<BR>
				<TEXTAREA NAME="cgas" ROWS=1 COLS=51 WRAP=SOFT STYLE="width: 4.5in; height: 0.28in"> <? echo stripslashes($obj{"cgas"});?> </TEXTAREA></FONT></P>
			</TD>
			<TD WIDTH=488 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Medication Changes<BR>
				<TEXTAREA NAME="medchanges" ROWS=1 COLS=50 WRAP=SOFT STYLE="width: 4.39in; height: 1in"> <? echo stripslashes($obj{"medchanges"});?> </TEXTAREA></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=488 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Medication Change Reasons:<BR>
				<INPUT TYPE=RADIO NAME="changereason" VALUE="1" <? if ($obj{"changereason"} == "1") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">No Changes 
				<BR> <INPUT TYPE=RADIO NAME="changereason" VALUE="2" <? if ($obj{"changereason"} == "2") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">Medication Adjustment  
				<BR> <INPUT TYPE=RADIO NAME="changereason" VALUE="3" <? if ($obj{"changereason"} == "3") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">Informed Consent Obtained for New Medications/Treatment  
				<BR> <INPUT TYPE=RADIO NAME="changereason" VALUE="4" <? if ($obj{"changereason"} == "4") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">Other</FONT></P>
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Other:<BR>
				<TEXTAREA NAME="changeother" ROWS=1 COLS=111 WRAP=SOFT STYLE="width: 4.39in; height: 0.21in"> <? echo stripslashes($obj{"changeother"});?> </TEXTAREA></FONT></P>
			
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=488 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Labs Ordered for Next Appointment:<BR>
				<INPUT TYPE=RADIO NAME="laborder" VALUE="0" <? if ($obj{"laborder"} == "0") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">N/A
				<BR><INPUT TYPE=RADIO NAME="laborder" VALUE="1" <? if ($obj{"laborder"} == "1") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">Sees Pediatrician 
				<BR> <INPUT TYPE=RADIO NAME="laborder" VALUE="2" <? if ($obj{"laborder"} == "2") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">Pending  
				<BR> <INPUT TYPE=RADIO NAME="laborder" VALUE="3" <? if ($obj{"laborder"} == "3") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">Routed 
				<BR> <INPUT TYPE=RADIO NAME="laborder" VALUE="4" <? if ($obj{"laborder"} == "4") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">complete
				<BR> <INPUT TYPE=RADIO NAME="laborder" VALUE="5" <? if ($obj{"laborder"} == "5") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">Canceled</FONT></P>
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Notes:<BR>
				<TEXTAREA NAME="labother" ROWS=1 COLS=111 WRAP=SOFT STYLE="width: 4.39in; height: 0.21in"> <? echo stripslashes($obj{"labother"});?> </TEXTAREA></FONT></P>
			
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
				<INPUT TYPE=RADIO NAME="appt" VALUE="1" <? if ($obj{"appt"} == "1") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">1-2 Weeks 
				&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="appt" VALUE="2" <? if ($obj{"appt"} == "2") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">3-4 Weeks  
				&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="appt" VALUE="3" <? if ($obj{"appt"} == "3") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">6 Weeks
				 &nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="appt" VALUE="4" <? if ($obj{"appt"} == "4") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">2 Months 
				&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="appt" VALUE="5" <? if ($obj{"appt"} == "5") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">3 Months 
				&nbsp;&nbsp;&nbsp; <INPUT TYPE=RADIO NAME="appt" VALUE="6" <? if ($obj{"appt"} == "6") {echo "checked";}?> STYLE="width: 0.14in; height: 0.14in">Other</FONT></P>
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Appointment Notes:<BR>
				<TEXTAREA NAME="apptother" ROWS=1 COLS=111 WRAP=SOFT STYLE="width: 9.5in; height: 0.21in"> <? echo stripslashes($obj{"apptother"});?> </TEXTAREA></FONT></P>
			</TD>
		</TR>
	
		
</TABLE>

<center>
 <? if($obj{"finalize"}!="on"){?> 
<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href=" <?php echo $GLOBALS['form_exit_url']; ?> " class="link"
 onclick="top.restoreSession()">[Don't Save Changes]</a><br>
 <b>You must check the Finalize box at the top of the form to prevent future editing.</b><br>
 <?}else{echo"This form has been finalized and may not be edited!<br>";?> 
 <a href=" <?php echo $GLOBALS['form_exit_url']; ?> " class="link"
 onclick="top.restoreSession()">[RETURN TO ENCOUNTER]</a>
 <?}?> 
 </center>
</form>
 <?php
formFooter();
?> 

