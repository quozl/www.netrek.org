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
servers.<br> If you want to simply play Netrek, you will need to download a
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
	<td><a href="../files/NetrekXP_2006/netrekXP2006v12install.exe"><tt>Netrek XP 2006 v1.2</tt></a></td>
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
	<td>Nice new native Mac client. Requires OS X 10.4 or higher.</td>
</tr>
<tr>
	<td><img src="../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="../files/Paradise_2000/paradise-2000-rc6.tar.gz"><tt>Paradise 2000 RC6</tt></a></td>
        <td>OSS sound effects and other enhancements. <br>No source code available.</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="../files/archive/COW/COW-bin/COW.3.01pl0.linux_glibc23.gz"><tt>Netrek COW v3.01pl10</tt></a></td>
	<td>The classic Netrek client.</td>
</tr>
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
Sturgeon, and Hockey off of the same source base. 
<br><br>
The Vanilla Server code  has now been merged such that it can run Bronco, 
INL, Chaos, Sturgeon, and Hockey. You can get it from:
<ul>
<li>the <a href="http://www.darcs.net/">darcs source code control system</a>, by issuing the command <br><tt>
$ darcs get http://www.netrek.org/repos/netrek-server</tt><br>if you have darcs
installed. This is the best way to go for keeping up to date, because server
patches are issued thru darcs by the developers.</li>
<li><a href="http://sourceforge.net/project/showfiles.php?group_id=968&package_id=3504">Netrek server source</a> at SourceForge.net. Note that CVS at SourceForge is not current, since code is now maintained in darcs, however there will 
probably be current server source code tarballs in the downloads section.
<li>The Debian source package; see Debian instructions below. 
<li>At some point, there should be a tarball in the 
<a href="../files/">files directory of this website.</a>
<li>If all else fails, you can grovel around on <a href="http://quozl.linux.org.au/netrek/">http://quozl.linux.org.au/netrek/</a>.
</ul>

<br>
<b>Binaries</b>
<br><br><p>
Prebuilt server binaries are available for 
Debian Linux ("etch" release on i386 only).<br> 
To access these,  add these lines to your <tt>/etc/apt/sources.list</tt> 
and use your package manager to build or install.
<ul>
<pre>
# Debian Etch (Testing) Netrek Server Vanilla
deb http://quozl.linux.org.au/netrek ./
deb-src http://quozl.linux.org.au/netrek ./
</pre>
</ul>
<p>
There are also binaries for <a href="http://openwrt.org">OpenWRT</a>, so you can run
a server on an "embedded" device such as a home firewall or WiFi Hard Drive. 
See the <a href="http://wiki.us.netrek.org/netrek-dev/OpenWrt">Developer Wiki article.</a>


<br><p>
<h2>Source Code, Old Code, and More</h2>
<br><p>
See the Developer Wiki <a
href="http://wiki.us.netrek.org/netrek-dev/SourceControl">source code control</a>
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
