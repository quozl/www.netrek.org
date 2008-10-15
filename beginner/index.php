<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require '../set_my_root.php';
require '../nhp.php';

doNhpHeader();

echo getSidebarDownload();
echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>

<ol>
<h1><li>
	Download and install a client for your platform. </h1><br>


<table border="0" bgcolor="#444444">
<tr>
	<td width="30">OS</td>
	<td >Client</td>
	<td >Notes</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../img/dl_icon_win.png" width="25" height="22" alt="Windows" /></td>
	<td><a href="../files/NetrekXP_2009/netrekinstall2009v1.exe"><tt>Netrek XP 2009 v1.0</tt></a></td>
	<td>Newest and flashiest windows client.<br>Can do 50 frames per second and yet it will run on Windows 98.</td>
</tr>
<tr>
	<td><img src="../img/dl_icon_win.png" width="25" height="22" alt="Windows" /></td>
	<td><a href="../files/NetrekXP_Mod/NetrekXPMod-4.4.0.4.installer.exe"><tt>Netrek XP Mod v4.4.0.4</tt></a></td>
<td>A slightly older windows client, good if your Internet link is slow, since it's only a 2.4 MB download. 
</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../img/dl_icon_macosx.png" width="25" height="22" alt="Mac OS X" /></td>
	<td><a href="http://www.netrek.org/files/MacTrek/MacTrek-1.4.0.zip"><tt>MacTrek-1.4.0.zip</tt></a></td>
<td>Nice new native Mac client. OS X 10.4 (Tiger) suggested, may have problems under 10.5 (Leopard)</td>
</tr>

<tr>
	<td><img src="../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="../downloads/linux.php"><tt>Several to choose from</tt></a></td>
        <td>See the list of fine choices.</td>
</tr>
</table>
</li>
<br>

<h1><li>
	Read the <a href="newbie.php">Netrek Newbie Manual</a>.</h1>
        And remember that there's lots more <a href="../clueguides">fine documentation</a> 
        to check out later.
</li>
<br><br>

<h1><li>
	Start your client and select a server to play on from the list.</h1>
        <tt>pickled.netrek.org</tt> and <tt>continuum.us.netrek.org</tt> 
        are the main pickup servers.
</li>
<br><br>

</ol>
</h2>

<p>
There are many good sources of information on Netrek.
<A href="../clueguides">Various FAQs, help files, and guides</a> are available to help Netrek
players of all skill levels. If you are new to Netrek and want to get
started, begin with the steps above. 
If after reading through these materials you
still have questions, <a href="../people/">contact the Netrek
community</a> for further help!
</p>




<?
echo "</div>\n";
echo getFooter();
?>
