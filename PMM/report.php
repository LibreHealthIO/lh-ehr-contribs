
 <?php
//by Art Eaton
include_once("../../globals.php");
include_once("$srcdir/api.inc");
function pmm_report( $pid, $encounter, $cols, $id) {
$count = 0;
$obj = formFetch("form_pmm", $id);
?> 

 <?php html_header_show();?> 
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


<span class="title"><center>Medication Management</center></span><br><br>

 <?php $res = sqlStatement("SELECT fname,mname,lname,ss,street,city,state,postal_code,phone_home,DOB FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res); ?> 
<br>
<TABLE WIDTH=680 CELLPADDING=7 CELLSPACING=0 STYLE="page-break-before: always">
	<COLGROUP>
		<COL WIDTH=370>
	</COLGROUP>
	<COLGROUP>
		<COL WIDTH=92>
		<COL WIDTH=256>
	</COLGROUP>
	<TR>
		<TD COLSPAN=2 WIDTH=680 VALIGN=TOP STYLE="border-top: 1.50pt solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in">
			<P CLASS="western" STYLE="margin-top: 0.13in"><FONT FACE="Calibri, sans-serif"><b>Patient Name:&nbsp;  <?php echo $result['fname'] . '&nbsp;' . $result['mname'] . '&nbsp;' . $result['lname'];?> </B></FONT>
			
			</P>
		</TD>
	</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=680 VALIGN=TOP BGCOLOR="#d9d9d9" STYLE="border-top: 1.50pt solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<H1 CLASS="western" ALIGN=CENTER>Medication Management</H1>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=680 HEIGHT=43 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<H1 CLASS="western" STYLE="margin-bottom: 0.2in"><FONT FACE="Calibri, sans-serif">Chief
				Complaint/Reason for ENCOUNTER:</FONT></H1>
				<P CLASS="western"> <?if ($obj{"presenting_problem"}==""){echo("<font color=red>INCOMPLETE!!!</font>");}else{ echo stripslashes($obj{"presenting_problem"});}?>
								</P>
			</TD>
		</TR>
		
		
		<TR>
			<TD COLSPAN=2 WIDTH=680 HEIGHT=79 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<H1 CLASS="western" STYLE="margin-bottom: 0.2in; font-style: normal">
				<FONT FACE="Arial Narrow, sans-serif" SIZE=1 STYLE="font-size: 8pt">Current
				Medications</FONT></H1>
				<P CLASS="western"> <?php echo stripslashes($obj{"currentmeds"});?> 
								</P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=680 HEIGHT=42 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<H1 CLASS="western" STYLE="margin-bottom: 0.2in; font-style: normal">
				<SPAN STYLE="font-variant: normal"><FONT FACE="Arial Narrow, sans-serif"><FONT SIZE=1 STYLE="font-size: 8pt">ALLERGIES</FONT></FONT></SPAN></H1>
				<P CLASS="western"><?php echo stripslashes($obj{"allergies"});?> 
								</P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=680 HEIGHT=42 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<H1 CLASS="western" STYLE="margin-bottom: 0.2in"><FONT FACE="Calibri, sans-serif">Mental
				Status Exam</FONT></H1>
				<P CLASS="western">Appearance:<BR> <?php  if ($obj{"appearance"}==""){echo("<font color=red>Nothing recorded for this section.</font>");}else{ echo stripslashes($obj{"appearance"});} ?>
								</P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=680 HEIGHT=42 VALIGN=TOP STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding-top: 0in; padding-bottom: 0.02in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">General
				Behavior/Attitude:<BR> <?php  if ($obj{"general"}==""){echo("<font color=red>Nothing recorded for this section.</font>");}else{ echo stripslashes($obj{"general"});} ?>
				</FONT>
				</P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=680 HEIGHT=42 VALIGN=TOP STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding-top: 0in; padding-bottom: 0.02in; padding-left: 0.08in; padding-right: 0.08in">
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Mood/Affect:
				<BR>  <?php  if ($obj{"affect_mood"}==""){echo("<font color=red>Nothing recorded for this section</font>");}else{ echo stripslashes($obj{"affect_mood"});}?>
				</FONT>
				</P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=680 HEIGHT=39 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<UL>
					<P CLASS="western"><FONT FACE="Calibri, sans-serif"><LI>Speech:</LI>
					<BR>
					<?php
					$validate=0;
					 if ($obj{"speech1"} == "on") {echo "Clear/Coherent<BR> ";$validate+=1;} 
					if($obj{"speech2"} == "on") {echo "Slow<BR>";$validate+=1; }
					if($obj{"speech3"} == "on") {echo "Soft-Spoken<BR>";$validate+=1;}
					if ($obj{"speech4"} == "on") {echo "Mumbled/Unclear<BR>";$validate+=1;}
					if ($obj{"speech5"} == "on") {echo "Excessive/Rapid<BR>";$validate+=1;}
					 if ($obj{"speech6"} == "on") {echo "Negative/Critical<BR>";$validate+=1;}
					 if ($validate==0) echo("<font color=red>INCOMPLETE!!!</font>");
					  ?>
					<BR>Note abnormalities: (e.g., perseveration, paucity of language)<BR>
					 <?php echo stripslashes($obj{"speech_notes"});?> </FONT></P>
				</UL>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=680 HEIGHT=39 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<UL>
					<P CLASS="western"><FONT FACE="Calibri, sans-serif"><LI>Thought processes:</LI>
					<?php
					$validate=0;
						 if ($obj{"thought1"} == "on") {echo "No Abnormality<BR>";$validate+=1;}
						 if ($obj{"thought2"} == "on") {echo "Tangential<BR>";$validate+=1;}
						 if ($obj{"thought3"} == "on") {echo "Perseverative/Obsessive<BR>";$validate+=1;}
						 if ($obj{"thought4"} == "on") {echo "Delusions/Hallucinations<BR>";$validate+=1;}
						 if ($validate==0) echo("<font color=red>INCOMPLETE!!!</font>");
						  ?>
					<BR>Note abnormalities: <BR>
					 <?php echo stripslashes($obj{"thought_notes"});?></FONT></P>
				</UL>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=680 HEIGHT=32 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<UL>
					<P CLASS="western"><FONT FACE="Calibri, sans-serif"><LI>Potential for Suicide:</LI>
					<BR>
					<?php
					 if ($obj{"psychoa"} == 1) {echo " None";}
					if ($obj{"psychoa"} == 2) {echo "Mild";}
					 if ($obj{"psychoa"} == 3) {echo "Moderate";}
					 if ($obj{"psychoa"} == 4) {echo "Severe";}
					 if ($obj{"psychoa"} == 0) {echo("<font color=red>INCOMPLETE!!!</font>");}
					  ?>
					  
										</FONT></P>
				</UL>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=680 HEIGHT=36 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<UL>
					<P CLASS="western"><FONT FACE="Calibri, sans-serif"><LI>Potential for Homicide:</LI>
					<BR>
					<?php
				 if ($obj{"psychob"} == 1) {echo "None";}
				if ($obj{"psychob"} == 2) {echo "Mild";}
				if ($obj{"psychob"} == 3) {echo "Moderate";}
				 if ($obj{"psychob"} == 4) {echo "Severe";} 
				if ($obj{"psychob"} == 0) echo("<font color=red>INCOMPLETE!!!</font>"); 
				?>  
										</FONT></P>
				</UL>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=680 HEIGHT=36 VALIGN=TOP STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding-top: 0in; padding-bottom: 0.02in; padding-left: 0.08in; padding-right: 0.08in">
				<UL>
					<P CLASS="western"><FONT FACE="Calibri, sans-serif"><LI>Potential for Violence:</LI>
					<BR>
					<?php
					$validate=0;
				 if ($obj{"psychoc"} == 1) {echo "None";}
				if ($obj{"psychoc"} == 2) {echo "Mild";}
				if ($obj{"psychoc"} == 3) {echo "Moderate";}
				 if ($obj{"psychoc"} == 4) {echo "Severe";}
				 if ($obj{"psychoc"} == 0) echo("<font color=red>INCOMPLETE!!!</font>"); 
				    ?>
					  
										</FONT></P>
				</UL>					
					<P CLASS="western"><FONT FACE="Calibri, sans-serif">Notes:<BR>
				<?php echo stripslashes($obj{"psycho_notes"});?> </FONT></P>					
				
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=680 HEIGHT=42 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Lab Tests Reviewed:<BR>
				<?php
				 if ($obj{"labs"} == "0") {echo "N/A";}
				if ($obj{"labs"} == "1") {echo "Sees Pediatrician";}
				  if ($obj{"labs"} == "2") {echo "Pending";}
				  if ($obj{"labs"} == "3") {echo "Routed";}
				  if ($obj{"labs"} == "4") {echo "Complete";}
				 if ($obj{"labs"} == "5") {echo "Canceled";}
				 if ($obj{"labs"} == NULL) echo("<font color=red>INCOMPLETE!!!</font>"); 
				 ?>
				  </FONT></P>
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Notes:<BR>
				<?php echo stripslashes($obj{"other"});?></FONT></P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=680 HEIGHT=18 BGCOLOR="#d9d9d9" STYLE="border-top: 1.50pt solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<P CLASS="western" ALIGN=CENTER STYLE="text-transform: uppercase">
				<B>Plan</B></P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=680 HEIGHT=42 VALIGN=TOP STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
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
			<TD WIDTH=340 HEIGHT=15 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: none; padding-top: 0.02in; padding-bottom: 0.02in; padding-left: 0.08in; padding-right: 0in">
				<P CLASS="western" ALIGN=CENTER STYLE="text-indent: 0.34in"><FONT FACE="Calibri, sans-serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Diagnoses
				</B></FONT></FONT>
				</P>
			</TD>
			<TD WIDTH=340 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<P CLASS="western" ALIGN=CENTER><FONT FACE="Calibri, sans-serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Treatment
				Plan</B></FONT></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD disabled ROWSPAN=4 WIDTH=340 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: none; padding-top: 0.02in; padding-bottom: 0.02in; padding-left: 0.08in; padding-right: 0in">
				<P CLASS="western" STYLE="margin-bottom: 0in"><FONT FACE="Calibri, sans-serif">Change Notes:
				<BR> <?php echo stripslashes($obj{"diagchange"});?> </FONT></P>
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Current CGAS:<BR>
				 <?php echo stripslashes($obj{"cgas"});?> </FONT></P>
			</TD>
			<TD WIDTH=340 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Medication Changes<BR>
				 <?php echo stripslashes($obj{"medchanges"});?> </FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=340 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Medication Change Reasons:<BR>
				<?php
				 if ($obj{"changereason"} == "1") {echo "No Changes";}
				 if ($obj{"changereason"} == "2") {echo "Medication Adjustment ";}
				 if ($obj{"changereason"} == "3") {echo "Informed Consent Obtained for New Medications/Treatment";}  
				 if ($obj{"changereason"} == "4") {echo "Other";}
				  if ($obj{"changereason"} == 0) echo("<font color=red>INCOMPLETE!!!</font>"); 
				 ?>
				 
				  </FONT></P>
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Other:<BR>
				<?php echo stripslashes($obj{"changeother"});?></FONT></P>
			
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=340 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Labs Ordered for Next Appointment:<BR>
				<?php
				 if ($obj{"laborder"} == "0") {echo "N/A";}
				if ($obj{"laborder"} == "1") {echo "Sees Pediatrician";}
				  if ($obj{"laborder"} == "2") {echo "Pending";}
				  if ($obj{"laborder"} == "3") {echo "Routed";}
				  if ($obj{"laborder"} == "4") {echo "Complete";}
				 if ($obj{"laborder"} == "5") {echo "Canceled";}
				  if ($obj{"laborder"} == NULL) {echo("<font color=red>INCOMPLETE!!!</font>"); }
				 ?>
				  </FONT></P>
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Notes:<BR>
				 <?php echo stripslashes($obj{"labother"});?> </FONT></P>
			
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=340 STYLE="border-top: 1px solid #000000; border-bottom: 1.50pt solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Medication Recommendations are listed in Patient Prescription Record</FONT></P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2 WIDTH=680 HEIGHT=89 VALIGN=TOP STYLE="border: 1.50pt solid #000000; padding: 0.02in 0.08in">
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Follow-up appointment in:<BR>
				 <?php
				  if ($obj{"appt"} == "1") {echo "1-2 Weeks";} 
				 if ($obj{"appt"} == "2") {echo "3-4 Weeks";}
				 if ($obj{"appt"} == "3") {echo "6 Weeks";}
				 if ($obj{"appt"} == "4") {echo "2 Months";} 
				 if ($obj{"appt"} == "5") {echo "3 Months";}
				if ($obj{"appt"} == "6") {echo "Other";}
				 if ($obj{"appt"} == 0) {echo("<font color=red>INCOMPLETE!!!</font>"); }
				?>
				 </FONT></P>
				<P CLASS="western"><FONT FACE="Calibri, sans-serif">Appointment Notes:<BR>
				<?php echo stripslashes($obj{"apptother"});?> </FONT></P>
			</TD>
		</TR>
	
		
</TABLE>
<center>
 <?php if($obj{"finalize"}!="on"){
 echo"<b>This Progress Note is IN PROCESS.</b>";
 }else{echo"This form has been finalized and may not be edited!";}?> 
 </center>
 <?php
}
?> 
