﻿<?PHP header("Content-Type: text/html; charset=UTF-8",true);
if(!defined('INITIALIZED'))
	exit;
$main_content .= '
<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
<TR><TD BGCOLOR="#505050" ALIGN=center CLASS=white><B>Contact Information</B></TD></TR>
<TR><TD BGCOLOR="#D4C0A1"><TABLE BORDER=0 CELLPADDING=8>
<TR><TD>Company Website:</TD><TD><A HREF="www.cipsoft.com">www.cipsoft.com</A></TD></TR>
<TR><TD>Managing Director:</TD><TD>Marco Oliveira</TD></TR>
</TABLE></TD></TR>
</TABLE><BR><BR>

<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
<TR><TD BGCOLOR="#505050" ALIGN=center CLASS=white><B>Disclaimer</B></TD></TR>
<TR><TD BGCOLOR="#D4C0A1"><TABLE BORDER=0 CELLPADDING=8><TR><TD>
'.htmlspecialchars($config['server']['serverName']) .' disclaims all warranties for the up-to-dateness, correctness,
completeness or quality of the information presented on this website.
'.htmlspecialchars($config['server']['serverName']) .' is not liable for any lost profits or special, incidental
or consequential damages arising out of the use or not-use of the presented
information. '.htmlspecialchars($config['server']['serverName']) .' reserves the right to supplement, change or
delete parts of the website or the whole website, or even to close the
service temporarily or finally.
</TD></TR><TR><TD>
The following of our websites contain links to other pages on the internet:
tibia.com, tibia.net, tibia.org as well as all connected
subdomains. We would like to expressly emphasise the fact that '.htmlspecialchars($config['server']['serverName']) .'
has no influence whatsoever on the design or the content of any of the
websites to which these links refer. For this reason '.htmlspecialchars($config['server']['serverName']) .' cannot
take responsibility for the up-to-dateness, correctness, completeness or
general quality of the information supplied by these websites. Also,
'.htmlspecialchars($config['server']['serverName']) .' expressly disassociates itself from any content presented on
said websites. This declaration applies to any link to external websites to
be found on one or more of '.htmlspecialchars($config['server']['serverName']) .' website, as well as to any kind of
content these external websites may contain.
</TD></TR></TABLE></TD></TR>
</TABLE>

    <br/><br/>
    <table width="100%" border="0" cellspacing="1" cellpadding="4" >
      <tr><td bgcolor="#505050" class="white" colspan="3" ><b>'.htmlspecialchars($config['server']['serverName']) .' Members</b></td></tr>
      <tr bgcolor="#D4C0A1" ><td width="100%" ><b>Name</b></td><td><b>Group</b></td><td>&#160;</td></tr>
	  
      <tr bgcolor="#F1E0C6" ><td>Marco Oliveira</td><td><nobr>Communit Manager</nobr></td><td><TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0><FORM ACTION=/index.php?subtopic=characters METHOD=post><TR><TD>
<INPUT TYPE=hidden NAME=name VALUE="Marco Oliveira">
<INPUT TYPE=image NAME="ADM Support" ALT="Marco Oliveira" SRC="'.$layout_name.'/images/global/buttons\sbutton_view.gif" BORDER=0 WIDTH=120 HEIGHT=18>
</TD></TR></FORM></TABLE>
</td></tr>  </table>
';
?>