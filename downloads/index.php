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

echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>

<h1>Download Netrek Software</h1>
<p>
Netrek software is mostly divided into two categories: clients and
servers.<br> If you want to play Netrek, you will need to download a
client, but you don't need the server.
<br>There are also a few utilities; you can find them on 
the <a href="./clients/">full client download listing page</a>.
</p>

<h2>Netrek Client Software</h2>
<p>
There are various Netrek clients. Different people prefer
different clients, and all clients work with Bronco, INL, Hockey, Chaos,
and Sturgeon servers. 
</p>
<p>
The most recent clients are:

<table border="0" bgcolor="#444444">
<tr>
	<td width="30">OS</td>
	<td >Client</td>
	<td >Notes</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../img/dl_icon_win.png" width="25" height="22" alt="Windows" /></td>
	<td><a href="../files/NetrekXP_2010/netrekinstall2010v1.exe"><tt>Netrek XP 2010 v1.0</tt></a></td>
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
	<td><a href="http://www.netrek.org/files/MacTrek/MacTrek-1_5_0.zip"><tt>MacTrek-1_5_0.zip</tt></a></td>
<td>Nice new native Mac client. Should work under OS X 10.5 Leopard and 10.6 Snow Leopard on PPC or Intel, Tiger users may need to go <a href="http://www.netrek.org/files/MacTrek/MacTrek-1.4.0.zip">here for version 1.4.</a></td>
</tr>

<tr>
	<td><img src="../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="../downloads/linux.php"><tt>Several to choose from</tt></a></td>
        <td>See the list of fine choices.</td>
</tr>


<!-- <tr>
	<td><a href="../files/Paradise_2000/paradise-2000-rc6.tar.gz"><tt>Paradise 2000 RC6</tt></a></td>
        <td>OSS sound effects and other enhancements. <br>No source code available.</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="../files/archive/COW/COW-bin/COW.3.01pl0.linux_glibc23.gz"><tt>Netrek COW v3.01pl10</tt></a></td>
	<td>The classic Netrek client.</td>
</tr> -->

</table>


<br><br><p>
There are a bunch of older clients (COW for Windows, BRMH and TedTurner for
Unixes including Mac OS X) available on the 
<a href="./clients/">full client download listing page</a>.
<br>And if you want the really ancient stuff, it's on the <a href="http://ftp.netrek.org/pub/netrek/clients/">ftp server</a>, or possibly the 
<a href="../files/">files directory of this website.</a>
</p>

<h2>Netrek Server Software</h2>
If you want to run your own server, you'll need server code.
Almost all server code has now been merged; you can run Bronco, INL, Chaos,
Sturgeon, and Hockey from the same source. 
<br><br>
You can get the latest release from
<a href="http://www.netrek.org/files/Vanilla/">http://www.netrek.org/files/Vanilla/</a><p>
<br><br>
See <a
href="http://vanilla.netrek.org/">http://vanilla.netrek.org/</a> or
the <a href="http://wiki.us.netrek.org/">the wiki</a> for more detail.

<br><p>
<h2>Source Code, Old Code, and More</h2>
<br><p>
See the Developer Wiki <a
href="http://wiki.netrek.org/index.php/SourceControl">source code control</a>
page for where to find source code for various Netrek programs.
<br><p>
<font color="yellow">If
you are interested in contributing to Netrek, please check out the</font> <a href="../developer/">Netrek Software Development</a><font color="yellow"> 
page.
</font>
</p>

The <a href="http://ftp.netrek.org/pub/netrek/">Netrek Continuum FTP archive</a> is an archive containing almost all known Netrek software,
including mirrors of several Netrek FTP sites in the U.S. and Europe
past and present. 
</p>


<?
echo "</div>\n";
echo getFooter();
?>
