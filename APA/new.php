
<?php
//by Art Eaton
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: APA");
 html_header_show();
 ?>
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

<BODY LANG="en-US" TEXT="#000000" LINK="#0000ff" DIR="LTR" <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<form method=post action="<?echo $rootdir;?>/forms/APA/save.php?mode=new" name="my_form">
<br>
<span class="title"><center>New or Established Outpatient</center></span><br><br>
<center><a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
You must EDIT the form after saving and reviewing to finalize
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link_submit"
 onclick="top.restoreSession()">[Don't Save]</a></center>
<br>

<?php $res = sqlStatement("SELECT fname,mname,lname,DOB FROM patient_data WHERE pid = $pid");
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
			<P CLASS="western" STYLE="margin-top: 0.13in"><FONT FACE="Calibri, sans-serif"><b>Patient Name:&nbsp; </B><?php echo $result['fname'] . '&nbsp;' . $result['mname'] . '&nbsp;' . $result['lname'];?> </FONT>
			
			</P>
		</TD>
	</TR>
	<TR>
	<TD>
<input type=checkbox name='established'>&nbsp;<b>Established Patient?</b><br>
</TD>
</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 VALIGN=TOP BGCOLOR="#d9d9d9" STYLE="border-top: 1.50pt solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<H1 CLASS="western" ALIGN=CENTER>History</H1>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=33 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<H1 CLASS="western"><FONT FACE="Calibri, sans-serif">Chief
			Complaint/Reason for ENCOUNTER:</FONT></H1>
			<P CLASS="western">
			<textarea cols=120 rows=2 wrap=virtual name="presenting_problem"></textarea>

			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=69 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<H1 CLASS="western"><FONT FACE="Calibri, sans-serif">HPI </FONT>(<FONT FACE="Arial Narrow, sans-serif"><FONT SIZE=1 STYLE="font-size: 8pt"><I>(</I></FONT></FONT><SPAN STYLE="font-variant: normal"><FONT FACE="Arial Narrow, sans-serif"><FONT SIZE=1 STYLE="font-size: 8pt"><I>1-3
			elements - Brief; 4+ elements &ndash; Extended </I></FONT></FONT></SPAN><FONT FACE="Arial Narrow, sans-serif"><FONT SIZE=1 STYLE="font-size: 8pt"><I>)</I></FONT></FONT></H1>
			<textarea cols=120 rows=2 wrap=virtual name="hpi"></textarea>
			<H1 CLASS="western" STYLE="font-variant: normal; font-weight: normal">
			<FONT FACE="Calibri, sans-serif">Elements:  Location, Quality,
			Severity, Duration, Timing, Content, Modifying Factors, Associated
			Signs &amp; Symptoms</FONT></H1>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=32 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<H1 CLASS="western"><FONT FACE="Calibri, sans-serif"><SPAN LANG="en-US">PAST
			PSYCHIATRIC HISTORY: (New Patient Only)</SPAN></FONT><FONT FACE="Calibri, sans-serif"><FONT SIZE=1 STYLE="font-size: 8pt"><I><SPAN STYLE="font-weight: normal">
			</SPAN></I></FONT></FONT><SPAN STYLE="font-variant: normal"><FONT FACE="Arial Narrow, sans-serif"><FONT SIZE=1 STYLE="font-size: 8pt"><I>(1
			history area &ndash; Pertinent; 2-3 history areas &ndash;
			Complete)</I></FONT></FONT></SPAN></H1>
			<textarea cols=120 rows=2 wrap=virtual name="pph"></textarea>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=32 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<H1 CLASS="western"><FONT FACE="Calibri, sans-serif">Past Medical
			History: (NEW PATIENT only)</FONT></H1>
			<P CLASS="western" STYLE="margin-bottom: 0in"><FONT FACE="Calibri, sans-serif">Diagnoses:<br>
			 <textarea cols=120 rows=2 wrap=virtual name="pmh1"></textarea> </P>       </FONT>
			</P>
			<P CLASS="western" STYLE="margin-bottom: 0in"><FONT FACE="Calibri, sans-serif">Medications:<br>
			 <textarea cols=120 rows=2 wrap=virtual name="pmh2"></textarea> </P>       </FONT>
			</P>
			<P CLASS="western" STYLE="margin-bottom: 0in"><FONT FACE="Calibri, sans-serif">Allergies:<br>
			 <textarea cols=120 rows=2 wrap=virtual name="pmh3"></textarea> </P>       </FONT>
			</P>
			<P CLASS="western" STYLE="margin-bottom: 0in"><FONT FACE="Calibri, sans-serif">Surgeries:<br>
			 <textarea cols=120 rows=2 wrap=virtual name="pmh4"></textarea> </P>       </FONT>
			</P>
			<BR>
			
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=32 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<H1 CLASS="western"><FONT FACE="Calibri, sans-serif"><SPAN LANG="en-US">Past
			Family, Social, History (PFSH):</SPAN></FONT></H1>
			
			<input type=checkbox name='pfsh1'>&nbsp;<b>No Changes?(Established patient)</b><br>
			<textarea cols=120 rows=2 wrap=virtual name="pfsh_notes"></textarea>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=2 WIDTH=746 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<P CLASS="western" STYLE="margin-bottom: 0in; border: 1px solid #000000; padding: 0.01in 0.06in">
			<FONT FACE="Calibri, sans-serif"><B>REVIEW OF SYSTEMS &amp; ACTIVE
			MEDICAL PROBLEMS                         NOTES IF POSITIVE</B></FONT></P>
			<P CLASS="western" STYLE="margin-bottom: 0in; border: 1px solid #000000; padding: 0.01in 0.06in">
			<FONT FACE="Arial Narrow, sans-serif"><FONT SIZE=1 STYLE="font-size: 8pt"><I><B>(1
			system -  Problem Pertinent; 2-9 systems &ndash; Extended; 10 or
			more systems or some systems noted as &rdquo;all others negative&rdquo;-
			 Complete)</B></I></FONT></FONT></P></TD>
	</TR>
	
<TR>
<TD COLSPAN=1 WIDTH=40 HEIGHT=1 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">	
			<b>Constitutional  :</b>
<input type="radio" name="ros1" value="0">NEG
<input type="radio" name="ros1" value="1">POS</TD><TD STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
<textarea cols=72 rows=1 wrap=virtual name="ros_note1"></textarea><BR>
</TD>
	</TR>
<TR>
<TD COLSPAN=1 WIDTH=50 HEIGHT=1 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">	

			<b>Eyes  :</b>
<input type="radio" name="ros2" value="0">NEG
<input type="radio" name="ros2" value="1">POS</TD><TD STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
<textarea cols=72 rows=1 wrap=virtual name="ros_note2"></textarea><BR>
</TD>
	</TR>
<TR>
<TD COLSPAN=1 WIDTH=50 HEIGHT=1 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">	


			<b>ENMT  :</b>
<input type="radio" name="ros3" value="0">NEG
<input type="radio" name="ros3" value="1">POS</TD><TD STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
<textarea cols=72 rows=1 wrap=virtual name="ros_note3"></textarea><BR>
</TD>
	</TR>

<TR>
<TD COLSPAN=1 WIDTH=50 HEIGHT=1 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">	

			<b>Cardiovascular  :</b>
<input type="radio" name="ros4" value="0">NEG
<input type="radio" name="ros4" value="1">POS</TD><TD STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
<textarea cols=72 rows=1 wrap=virtual name="ros_note4"></textarea><BR>
</TD>
	</TR>

<TR>
<TD COLSPAN=1 WIDTH=50 HEIGHT=1 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">	

			<b>Respiratory  :</b>
<input type="radio" name="ros5" value="0">NEG
<input type="radio" name="ros5" value="1">POS</TD><TD STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
<textarea cols=72 rows=1 wrap=virtual name="ros_note5"></textarea><BR>
</TD>
	</TR>

<TR>
<TD COLSPAN=1 WIDTH=50 HEIGHT=1 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">	

			<b>Gastrointestinal  :</b>
<input type="radio" name="ros6" value="0">NEG
<input type="radio" name="ros6" value="1">POS</TD><TD STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
<textarea cols=72 rows=1 wrap=virtual name="ros_note6"></textarea><BR>
</TD>
	</TR>

<TR>
<TD COLSPAN=1 WIDTH=50 HEIGHT=1 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">	

			<b>Genitourinary  :</b>
<input type="radio" name="ros7" value="0">NEG
<input type="radio" name="ros7" value="1">POS</TD><TD STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
<textarea cols=72 rows=1 wrap=virtual name="ros_note7"></textarea><BR>
</TD>
	</TR>

<TR>
<TD COLSPAN=1 WIDTH=50 HEIGHT=1 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">	

			<b>Muscular  :</b>
<input type="radio" name="ros8" value="0">NEG
<input type="radio" name="ros8" value="1">POS</TD><TD STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
<textarea cols=72 rows=1 wrap=virtual name="ros_note8"></textarea><BR>
</TD>
	</TR>

<TR>
<TD COLSPAN=1 WIDTH=50 HEIGHT=1 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">	

			<b>Integumentary  :</b>
<input type="radio" name="ros9" value="0">NEG
<input type="radio" name="ros9" value="1">POS</TD><TD STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
<textarea cols=72 rows=1 wrap=virtual name="ros_note9"></textarea><BR>
</TD>
	</TR>

<TR>
<TD COLSPAN=1 WIDTH=50 HEIGHT=1 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">	

			<b>Neurological  :</b>
<input type="radio" name="ros10" value="0">NEG
<input type="radio" name="ros10" value="1">POS</TD><TD STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
<textarea cols=72 rows=1 wrap=virtual name="ros_note10"></textarea><BR>
</TD>
	</TR>

<TR>
<TD COLSPAN=1 WIDTH=50 HEIGHT=1 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">	

			<b>Endocrine  :</b>
<input type="radio" name="ros11" value="0">NEG
<input type="radio" name="ros11" value="1">POS</TD><TD STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
<textarea cols=72 rows=1 wrap=virtual name="ros_note11"></textarea><BR>
</TD>
	</TR>

<TR>
<TD COLSPAN=1 WIDTH=50 HEIGHT=1 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">	

			<b>Hemotological/Lymphatic  :</b>
<input type="radio" name="ros12" value="0">NEG
<input type="radio" name="ros12" value="1">POS</TD><TD STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
<textarea cols=72 rows=1 wrap=virtual name="ros_note12"></textarea><BR>
</TD>
	</TR>

<TR>
<TD COLSPAN=1 WIDTH=50 HEIGHT=1 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">	

			<b>Allergies/Immune  :</b>
<input type="radio" name="ros13" value="0">NEG
<input type="radio" name="ros13" value="1">POS</TD><TD STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
<textarea cols=72 rows=1 wrap=virtual name="ros_note13"></textarea><BR>
</TD>
	</TR>
	
	
	
	
	
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=4 VALIGN=TOP BGCOLOR="#d9d9d9" STYLE="border-top: 1.50pt solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<H1 CLASS="western" ALIGN=CENTER>Psychiatric Specialty Examination</H1>
		</TD>
		</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=150 HEIGHT=1 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">	

			<b>Patient Personally Examined?  :</b>
<input type="radio" name="personal_exam" value="0">No &nbsp;&nbsp;
<input type="radio" name="personal_exam" value="1">Yes</TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=1 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<H1 LANG="en-US" CLASS="western" ALIGN=CENTER STYLE="font-variant: normal">
			<FONT FACE="Arial Narrow, sans-serif"><FONT SIZE=1 STYLE="font-size: 8pt"><I>(1-5
			bullets- Problem Focused; at least 6 bullets Expanded Problem
			Focused; at least 9 bullets - Detailed; all bullets- Comprehensive
			Exam)</I></FONT></FONT></H1>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=58 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<UL>
				
				</SPAN><FONT FACE="Calibri, sans-serif">Vital Signs (any 3 or
				more of the 7 listed):</FONT>
				</H1>
			</UL>
			<H1 CLASS="western" STYLE="font-variant: normal; font-weight: normal">
			<FONT FACE="Calibri, sans-serif">Blood Pressure: <br>
			(Sitting/Standing) <input type="text" name="vital1">&nbsp;&nbsp;
			(Supine) <input type="text" name="vital2">&nbsp;&nbsp;
			Pulse:(Rate/Regularity)  <input type="text" name="vital3"><BR></FONT><BR>
			</H1>
			<H1 CLASS="western" STYLE="font-variant: normal; font-weight: normal">
			<FONT FACE="Calibri, sans-serif">
			Temp:  <input type="text" name="vital4">&nbsp;&nbsp;
			 &nbsp;&nbsp;
			 Respiration:<input type="text" name="vital5"><BR>
			Height <input type="text" name="vital6">&nbsp;&nbsp; Weight <input type="text" name="vital7"></FONT></H1>
			<P CLASS="western"><BR>
			</P>
		</TD>
	</TR>
	
	
	
	
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=34 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<UL>
				<LI>
				<P CLASS="western" STYLE="margin-bottom: 0in"><FONT FACE="Calibri, sans-serif">General Appearance and
				Manner:  (e.g., development, nutrition, body habitus,
				deformities, attention to grooming)
			 <textarea cols=120 rows=2 wrap=virtual name="appearance"></textarea> </P>       </FONT>
			</P>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=52 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<UL>
				<LI>
				
				<P CLASS="western" STYLE="margin-bottom: 0in"><FONT FACE="Calibri, sans-serif">Musculoskeletal:  Assessment of muscle strength and tone (e.g., flaccid, cog wheel, spastic) (note any atrophy or abnormal movements)
			 <textarea cols=120 rows=1 wrap=virtual name="musculoskeletal"></textarea> </P>       </FONT>
			</P>
			</UL>
			<UL>
			<LI><P CLASS="western" STYLE="margin-bottom: 0in">   <FONT FACE="Calibri, sans-serif">(and/or)  Examination of gait and station:<BR><textarea cols=120 rows=1 wrap=virtual name="gait"></textarea></FONT></P>
		</UL></TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=29 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<UL>
				<LI><P><FONT FACE="Calibri, sans-serif">Speech:  Check if
				normal:<BR>
				<input type=checkbox name='speech1'>&nbsp;<b>Rate</b><br>
				<input type=checkbox name='speech2'>&nbsp;<b>Volume</b><br>
				<input type=checkbox name='speech3'>&nbsp;<b>Articulation</b><br>
				<input type=checkbox name='speech4'>&nbsp;<b>Coherence</b><br>
				<input type=checkbox name='speech5'>&nbsp;<b>Spontaneity</b><br>
				
				Note abnormalities: (e.g., perseveration, paucity of language)<BR>
				
				<textarea cols=120 rows=1 wrap=virtual name="speech_notes"></textarea></FONT></P>
			</UL>
		</TD>
	</TR>
	
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=29 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<UL>
				<LI><P><FONT FACE="Calibri, sans-serif">Thought processes:  Check if normal:<BR>
				<input type=checkbox name='thought1'>&nbsp;<b>Associations</b><br>
				<input type=checkbox name='thought2'>&nbsp;<b>Processes</b><br>
				<input type=checkbox name='thought3'>&nbsp;<b>Abstraction</b><br>
				<input type=checkbox name='thought4'>&nbsp;<b>Computation</b><br>
				Note abnormalities: <BR>
				<textarea cols=120 rows=1 wrap=virtual name="thought_notes"></textarea></FONT></P>
				</UL>
		</TD>
	</TR>	
	
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=65 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<UL>
				<LI><P><FONT FACE="Calibri, sans-serif">
				Description of associations (e.g., loose, tangential, circumstantial, intact):<BR>
				
				<textarea cols=120 rows=1 wrap=virtual name="associations"></textarea></FONT></P>
			</UL>
		</TD>
	</TR>	
	

	
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=29 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<UL>
				<LI><P><FONT FACE="Calibri, sans-serif">Abnormal or Psychotic Thoughts:  Check if Present:<BR>
				<input type=checkbox name='psycho1'>&nbsp;<b>Hallucinations</b><br>
				<input type=checkbox name='psycho2'>&nbsp;<b>Delusions</b><br>
				<input type=checkbox name='psycho3'>&nbsp;<b>Preoccupation with Violence</b><br>
				<input type=checkbox name='psycho4'>&nbsp;<b>Homicidal Ideation</b><br>
				<input type=checkbox name='psycho5'>&nbsp;<b>Suicidal Ideation</b><br>
				<input type=checkbox name='psycho6'>&nbsp;<b>Obsessions</b><br>
				Description of abnormal
				or psychotic thoughts: <BR>
				<textarea cols=120 rows=1 wrap=virtual name="psycho_notes"></textarea></FONT></P>
				</UL>
		</TD>
	</TR>
	
	
	
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=29 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<UL>
				<LI><P><FONT FACE="Calibri, sans-serif">Description of patient&rsquo;s
				judgment  and insight:<BR>
				<textarea cols=120 rows=1 wrap=virtual name="judge"></textarea></FONT></P>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=19 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<UL>
				<LI><P><FONT FACE="Calibri, sans-serif">Orientation:<BR>
				<textarea cols=120 rows=1 wrap=virtual name="orient"></textarea></FONT></P>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=22 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<UL>
				<LI><P><FONT FACE="Calibri, sans-serif">Memory (Recent/Remote):<BR>
				<textarea cols=120 rows=1 wrap=virtual name="memory"></textarea></FONT></P>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=22 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<UL>
				<LI><P><FONT FACE="Calibri, sans-serif">Attention/Concentration:<BR>
				<textarea cols=120 rows=1 wrap=virtual name="attention"></textarea></FONT></P>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=22 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<UL>
				<LI><P><FONT FACE="Calibri, sans-serif">Language:<BR>
				<textarea cols=120 rows=1 wrap=virtual name="language"></textarea></FONT></P>
			</UL>
		</TD>
	</TR>
	
	
	
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=22 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<UL>
				<LI><P><FONT FACE="Calibri, sans-serif">Fund of knowledge:<BR>
				<textarea cols=120 rows=1 wrap=virtual name="knowledge_notes"></textarea></FONT><BR>
				<input type="radio" name="knowledge1" value="1">Intact &nbsp;&nbsp;&nbsp;
				<input type="radio" name="knowledge1" value="0">Inadequate
				</P>
			</UL>
		</TD>
	</TR>
	
	
	
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=26 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<UL>
				<LI><P><FONT FACE="Calibri, sans-serif">Mood and affect:<BR>
				<textarea cols=120 rows=1 wrap=virtual name="affect_mood"></textarea></FONT></P>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=32 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<P><FONT FACE="Calibri, sans-serif">Other Findings (e.g. cognitive
			screens, etc.):<BR>
				<textarea cols=120 rows=1 wrap=virtual name="other"></textarea></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=8 BGCOLOR="#d9d9d9" STYLE="border-top: 1.50pt solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<P CLASS="western" ALIGN=CENTER STYLE="text-transform: uppercase"><B>MEDICAL
			 DECISION  MAKING</B></P>
		</TD>
		
		
		<TR VALIGN=TOP>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=32 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding-top: 0.02in; padding-bottom: 0.02in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" STYLE="text-indent: 0.34in; margin-bottom: 0in">
			<FONT FACE="Calibri, sans-serif"><BR>
			Problems/Conditions:  (Indicate New/Established, Status, and Comorbidities for ESTABLISHED Patient)<BR>
				<textarea cols=120 rows=1 wrap=virtual name="conditions"></textarea></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD ROWSPAN=2 WIDTH=370 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
			<P CLASS="western" STYLE="margin-bottom: 0in"><FONT FACE="Calibri, sans-serif">Need for Admission/Evaluation:  (For New Outpatient)<BR>
				<textarea cols=50 rows=1 wrap=virtual name="eval_admit"></textarea></FONT></P>
			
		</TD>
		<TD COLSPAN=2 WIDTH=362 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<P CLASS="western" ALIGN=CENTER STYLE="margin-left: -0.34in; text-indent: 0.34in">
			<FONT FACE="Calibri, sans-serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Data</B></FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD COLSPAN=2 WIDTH=370 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<P CLASS="western" STYLE="margin-bottom: 0in"><FONT FACE="Calibri, sans-serif">Medical
			Records/Labs/Diagnostic Tests Reviewed:<BR>
				<textarea cols=50 rows=1 wrap=virtual name="med_review"></textarea></FONT></P>
			<P CLASS="western"> <FONT FACE="Calibri, sans-serif"><FONT SIZE=2 STYLE="font-size: 11pt"><BR></FONT></FONT><BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=362 HEIGHT=5 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
			<P CLASS="western" ALIGN=CENTER STYLE="margin-left: -0.34in; text-indent: 0.34in">
			<FONT FACE="Calibri, sans-serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Diagnoses
			</B></FONT></FONT>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=370 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<P CLASS="western" ALIGN=CENTER><FONT FACE="Calibri, sans-serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Treatment
			Plan</B></FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD ROWSPAN=2 WIDTH=362 HEIGHT=29 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
			<P CLASS="western" STYLE="margin-bottom: 0in"><FONT FACE="Calibri, sans-serif">Axis
			I-V:<BR>
				<textarea cols=50 rows=1 wrap=virtual name="axis"></textarea></FONT></P>
			
			<P CLASS="western"><FONT FACE="Calibri, sans-serif">Rule outs:<BR>
				<textarea cols=50 rows=1 wrap=virtual name="diagnostic_ruleout"></textarea></FONT></P>
		</TD>
		<TD COLSPAN=2 WIDTH=370 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<P CLASS="western"><FONT FACE="Calibri, sans-serif">Intervention/Psychotherapy<BR>
				<textarea cols=50 rows=1 wrap=virtual name="plan1"></textarea></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD COLSPAN=2 WIDTH=362 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<P CLASS="western">
			<FONT FACE="Calibri, sans-serif">Medication<BR>
				<textarea cols=50 rows=1 wrap=virtual name="plan2"></textarea></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD ROWSPAN=2 WIDTH=370 HEIGHT=27 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
			<P CLASS="western"><FONT FACE="Calibri, sans-serif">Formulation:<BR>
				<textarea cols=50 rows=1 wrap=virtual name="diagnostic_formulation"></textarea></FONT></P>
		</TD>
		<TD COLSPAN=2 WIDTH=362 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<P CLASS="western"><FONT FACE="Calibri, sans-serif">Labs/Radiology/Tests/Consultation<BR>
				<textarea cols=50 rows=1 wrap=virtual name="plan3"></textarea></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD COLSPAN=2 WIDTH=370 STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<P CLASS="western"><FONT FACE="Calibri, sans-serif">Other<BR>
				<textarea cols=50 rows=1 wrap=virtual name="plan4"></textarea></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=3 WIDTH=746 HEIGHT=80 VALIGN=TOP STYLE="border: 1.50pt solid #000000; padding: 0in 0.08in">
			<P CLASS="western"><FONT FACE="Calibri, sans-serif">Greater than
			50% of time spent in counseling/coordination of care? <input type=checkbox name='percentage1'><br>
			
			Documentation<BR>
				<textarea cols=120 rows=1 wrap=virtual name="documentation"></textarea></FONT></P>
		</TD>
	</TR>
</TABLE>
<center><a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link_submit"
 onclick="top.restoreSession()">[Don't Save]</a></center>
<br>
<script language='JavaScript'>
var myEvent = window.attachEvent || window.addEventListener;
var chkevent = window.attachEvent ? 'onbeforeunload' : 'beforeunload'; /// make IE7, IE8 compitable  Firefox doesn't seem to allow custom messages.

            myEvent(chkevent, function(e) { // For >=IE7, Chrome, Firefox
                var confirmationMessage = 'Are you sure you want to leave the page?';  // a space
                (e || window.event).returnValue = confirmationMessage;
                return confirmationMessage;
            });
	</script>
<br>
</form>
<?php
formFooter();
?>
</BODY>
</HTML>