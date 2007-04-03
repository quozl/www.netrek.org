<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) T5Bhe Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require '../../nhp.php';

doNhpHeader();

echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>

<!-- Note: graphics used for email addresses use #fbd331 as foreground color,
       and the font is 16-pixel tall "FreeSerif Italic". Done with gimp 
       on a debian box. -->

<h1>Netrek Client Software</h1>
<p>
Since the start Netrek has been developed according to an Open Source Model, 
which means that the Netrek source code is freely available. 
To prevent cheating, all
official client binaries authenticate themselves via RSA to the server.
They are called "blessed" clients. Select your favorite official Netrek client
from the lists below.
</p>

<p>
Minimum requirements for Netrek are a minimum screen resolution of 1024x768
and preferably a sturdy three-button mouse. Netrek can be played over a
modem without any problems, but a faster internet connection is recommended.
The lower your round trip time (lag) to the server, the better is your
responsiveness.
</p>

<p>
Clients:
<ul>
<li><a href="#xp2006">Netrek XP 2006</a> (Windows 98 thru Vista)
<li><a href="#mactrek">MacTrek</a> (OS X 10.4, PPC or Intel)
<li><a href="#p2k">Paradise 2000</a> (Linux intel, glibc 2.3)
<li><a href="#cow">COW</a>  (Linux, other Unixes)
<li><a href="#brmh">BRMH</a> (many unixes, including OS X)
<li><a href="#xpmod">Netrek XP Mod</a> (Windows 2000, XP, maybe Vista)
<li><a href="#tt">TedTurner</a> (OS X, other Unixes)
</ul>
Also see the <a href="#ancient">end notes</a> 
about ancient client and server code archives. 

<br>



<a name="xp2006"></a><p><h2>Netrek XP 2006</h2>

<table>
<tr><td>Maintainer: <td>Bill Balcerski<br><img src="../../img/bill-email.png" /><br>
<tr><td>Homepage: <td><a href="http://netrek.cvs.sourceforge.net/netrek/client/netrekxp/">http://netrek.cvs.sourceforge.net/netrek/client/netrekxp/</a><br>
<tr><td>Version history: <td><a href=""></a><br>
<tr><td>Source Code Repository:&nbsp; <td>CVS at <a href="http://netrek.cvs.sourceforge.net/netrek/client/netrekxp/">http://netrek.cvs.sourceforge.net/netrek/client/netrekxp/</a>
<tr><td>Lineage: <td>Berkeley + Rick's Moo => BRM -> COW -> Netrek:1999 -> XP Mod -> XP 2006<br>
</table>

<br><p>
This is the most recent and actively developed Windows client. It includes
lots of newbie-friendly graphic aids, like "det circles" and "lock lines".
<br>It also can do 50 frames per second. 
If you run windows 98 or ME, <a href="http://netrek.cvs.sourceforge.net/*checkout*/netrek/client/netrekxp/resources/docs/README%20for%20Win95%2C%20Win98%2C%20and%20WinME.TXT">see the docs</a> for configuration info. 

<br><p>
<table border="0" bgcolor="#444444">
<tr>
	<td width="30">OS</td>
	<td width="350">Filename</td>
	<td width="65">Version</td>
	<td width="85">Date</td>
	<td width="75">Location</td>
	<td width="50">Size</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_win.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="../../files/NetrekXP_2006/netrekXP2006v12install.exe">netrekXP2006v12install.exe</a></td>
	<td>1.2</td>
	<td>Mar 05 2007</td>
	<td>Main site</td>
	<td>8.1 MB</td>
</tr>
<tr>
	<td><img src="../../img/dl_icon_src.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="../../files/NetrekXP_2006/netrekXP2006src-v1.2.zip">netrekXP2006src-v1.2.zip</a></td>
	<td>1.2</td>
	<td>Mar 05 2007</td>
	<td>Main Site</td>
	<td>13.9 MB</td>
</tr>
</table>
<br><p>
The latest version of XP 2006 is also available from <a href="http://www.playnetrek.org">playnetrek.org</a>. Older versions are archived at <a href="http://www.netrek.org/files/NetrekXP_2006/">http://www.netrek.org/files/NetrekXP_2006/</a>.

<a name="mactrek"></a><p><h2>MacTrek</h2>

<table>
<tr><td>Maintainer: <td> Chris Lukassen<br><img src="../../img/mactrek-email.png" />
<tr><td>Homepage: <td><a href="http://mactrek.sourceforge.net/">http://mactrek.sourceforge.net</a><br>
<tr><td>Version history:<td><a href="http://mactrek.sourceforge.net/News/News.html">http://mactrek.sourceforge.net/News/News.html</a><br>
<tr><td>Source Code Repository:&nbsp; <td>SVN (SubVersioN) at <a href="http://mactrek.svn.sourceforge.net/viewvc/mactrek/">http://mactrek.svn.sourceforge.net/viewvc/mactrek/</a>
<tr><td>Lineage: <td> JTrek -> MacTrek
</table>

<br><p>
This is a new and exciting client. It's the first all-native Mac client ever,
so it looks and works like Mac software instead of like traditional Unix
software. While you can play just fine with a one-button mouse, 
more is better. There are <a href="http://downloads.sourceforge.net/mactrek/MacTrek-Trailer-large.mov?modtime=1169048369&big_mirror=0">large (25 MB)</a> and <a href="http://downloads.sourceforge.net/mactrek/MacTrek-Trailer-small.mov?modtime=1169048387&big_mirror=0">small (8.3 MB)</a> versions of a "trailer" 
movie you can watch. This client is evolving pretty quickly, so visiting
the <a href="http://sourceforge.net/project/showfiles.php?group_id=165507">sourceforge download page</a> may get you a more up to date
copy than what we have listed here. 

<br><p>
<table border="0" bgcolor="#444444">
<tr>
	<td width="30">OS</td>
	<td width="350">Filename</td>
	<td width="65">Version</td>
	<td width="85">Date</td>
	<td width="75">Location</td>
	<td width="50">Size</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_macosx.png" width="25" height="22" alt="Mac" /></td>
	<td><a href="http://downloads.sourceforge.net/mactrek/MacTrek-1.1.0.dmg?modtime=1167061197&big_mirror=0">MacTrek-1.1.0.dmg</a>	<td>1.1.0</td>
	<td>Dec 19 2006</td>
	<td>Sourceforge</td>
	<td>28 MB</td>
</tr>
<tr>
	<td><img src="../../img/dl_icon_macosx.png" width="25" height="22" alt="Mac" /></td>
	<td><a href="http://downloads.sourceforge.net/mactrek/MacTrek-1.1.1RC2.zip?modtime=1174039766&big_mirror=0">MacTrek-1.1.1RC2.zip</a>
	<td>1.1.1 RC2</td>
	<td>Mar 16 2007</td>
	<td>Sourceforge</td>
	<td>16 MB</td>
</tr>
</table>


<a name="p2k"></a><p><h2>Paradise 2000</h2>
<table>
<tr><td>Maintainer:<td>Trent Piepho<br><img src="../../img/xyzzy-email.png" /> </a><br>
<tr><td>Homepage: <td><a href="http://www.speakeasy.org/~xyzzy/netrek/">www.speakeasy.org/~xyzzy/netrek/</a><br>
<tr><td>Version history: <td><a href="http://www.speakeasy.org/~xyzzy/netrek/README">README</a>
<tr><td>Lineage:<td>Paradise/TedTurner -> Paradise 2000
</table>
<br><p>
This is an enhanced version of the Paradise client for Linux. It features
stereo sound effects (OSS sound system) and pioneered several innovative
features such as the Refit and Repair timer. Graphics aren't exciting
by PC gamer standards, but
are very efficient. It is built against glibc 2.3 for Linux on the intel
architecture only. 
<table border="0" bgcolor="#444444">
<tr>
	<td width="30">OS</td>
	<td width="350">Filename</td>
	<td width="65">Version</td>
	<td width="85">Date</td>
	<td width="75">Location</td>
	<td width="50">Size</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="../../files/Paradise_2000/paradise-2000-rc6.tar.gz">paradise-2000-rc6.tar.gz</a></td>
	<td>RC6</td>
	<td>Dec 31 2006</td>
	<td>Main site</td>
	<td>1.4 MB</td>
</tr>
<tr>
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://www.speakeasy.org/~xyzzy/download/paradise-2000-rc4.tar.gz">paradise-2000-rc6.tar.gz</a></td>
	<td>RC6</td>
	<td>Dec 13 2006</td>
	<td>Author's site</td>
	<td>1.4 MB</td>
</tr>
</table>
<br><p>Older versions of this client are archived on netrek.org at <a href="../../files/Paradise_2000/">http://www.netrek.org/files/Paradise_2000</a> and on the author's site at <a href="http://www.speakeasy.org/~xyzzy/download/paradise/">http://www.speakeasy.org/~xyzzy/download/paradise/</a>. Source code is not available for this client. The build is only blessed for one
year, so older builds will not work with servers that require RSA. 


<a name="cow"></a><p><h2>COW</h2>
<table>
<tr><td>Maintainer: <td>James Cameron<br>
<tr><td>Homepage: <td>None currently; <a href="../../clueguides/index.php#cowdocs">Docs are in the Clueguides section</a> of this website<br>
<tr><td>Version history: <td><a href="../../clueguides/cowdocs/ChangeLog">ChangeLog</a> (cached 24-Mar-2007)<br>also see <a href="../../clueguides/index.php#cowdocs">docs section</a>
<tr><td>Source Code Repository:&nbsp;<td>darcs from http://www.netrek.org/repos/netrek-client-cow/
<tr><td>Lineage: <td>Berkeley + Rick's Moo => BRM -> COW<td>
</table>
<br><p>
COW was one of the main netrek clients back in the unix days of netrek. 
No builds have been published for some time, but the codebase
is maintained. The Linux release below (3.01 p10 glibc 2.3) still 
works fine. It is likely that Debian Linux packages will be released
soon after the release of Debian <i>etch</i>. You can, however, build
it yourself; 
 <a href="http://wiki.us.netrek.org/netrek-dev/Building/Compiling_HOWTOs">see the instructions for downloading and
building directions</a> on the development wiki.
<br><p>
COW was eventually ported to Windows, forming the basis for all later
Windows clients. You don't want to go there except out of morbid retro
curiousity.
<br><p>
<table border="0" bgcolor="#444444">
<tr>
	<td width="30">OS</td>
	<td width="350">Filename</td>
	<td width="65">Version</td>
	<td width="85">Date</td>
	<td width="75">Location</td>
	<td width="50">Size</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="COW.3.01pl0.linux_glibc23.bz2">COW.3.01pl0.linux_glibc23.bz2</a></td>
	<td>3.01pl0</td>
	<td>Mar 21 2004</td>
	<td>Main site</td>
	<td>180 KB</td>
</tr>
<tr>
	<td><img src="../../img/dl_icon_win.png" width="25" height="22" alt="Windows" /></td>
	<td><a href="COW_3_00pl3_win32.zip">COW_3_00pl3_win32.zip</a></td>
	<td>3.00pl3</td>
	<td>Jan 12 2000</td>
	<td>Main site</td>
	<td>475 KB</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_solaris.png" width="25" height="22" alt="Solaris" /></td>
	<td><a href="COW.3.00pl3.Solaris2.6.gz">COW.3.00pl3.Solaris2.6.gz</a></td>
	<td>3.00pl3</td>
	<td>Jan 12 2000</td>
	<td>Main site</td>
	<td>172 KB</td>
</tr>
<tr>
	<td><img src="../../img/dl_icon_sgi.png" width="25" height="22" alt="SGI" /></td>
	<td><a href="COW.3.00pl3.irix.gz">COW.3.00pl3.irix.gz</a></td>
	<td>3.00pl3</td>
	<td>Jan 12 2000</td>
	<td>Main site</td>
	<td>193 KB</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="COW.3.00pl3.linux.gz">COW.3.00pl3.linux.gz</a></td>
	<td>3.00pl3</td>
	<td>Jan 12 2000</td>
	<td>Main site</td>
	<td>709 KB</td>
</tr>
<tr>
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="COW.3.00pl3.linux.Small.Screen.gz">COW.3.00pl3.linux.Small.Screen.gz</a></td>
	<td>3.00pl3</td>
	<td>Jan 12 2000</td>
	<td>Main site</td>
	<td>711 KB</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="COW.3.00pl3.netbsd.i386.elf.gz">COW.3.00pl3.netbsd.i386.elf.gz</a></td>
	<td>3.00pl3</td>
	<td>Jan 12 2000</td>
	<td>Main site</td>
	<td>476 KB</td>
</tr>
<tr>
	<td><img src="../../img/dl_icon_src.gif" width="25" height="22" alt="Source" /></td>
	<td><a href="COW.3.00pl3.tar.gz">COW.3.00pl3.tar.gz (sources)</a></td>
	<td>3.00pl3</td>
	<td>Jan 12 2000</td>
	<td>Main site</td>
	<td>768 KB</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_sound.png" width="25" height="22" alt="Sounds" /></td>
	<td><a href="COW-Sound.3.00.tar.gz">COW-Sound.3.00.tar.gz</a></td>
	<td>3.00</td>
	<td>Feb 28 1998</td>
	<td>Main site</td>
	<td>1128 KB</td>
</tr>
</table>







<a name="brmh"></a><p><h2>BRMH</h2>
<table>
<tr><td>Maintainer: <td>Karthik Arumugham<br><img src="../../img/karthik-email.png" /><br>
<tr><td>Homepage: <td><a href="ftp://ftp.netrek.org/pub/netrek/clients/brmh/BRMH.html">ftp.netrek.org/pub/netrek/clients/brmh/BRMH.html</a><br>
<tr><td>Version history: <td><a href="ftp://ftp.netrek.org/pub/netrek/clients/brmh/src/BRMH-2.4.0-CHANGELOG">BRMH-2.4.0-CHANGELOG</a><br>
<tr><td>Source Code Repository:<td>CVS at <a href="http://netrek.cvs.sourceforge.net/netrek/client/brmh/">http://netrek.cvs.sourceforge.net/netrek/client/brmh/</a>
<tr><td>Lineage:<td>Berkeley + Rick's Moo => BRM -> BRMH
</table>
<br><p>
BRMH was the other popular Unix client. If you have an old unix box, there
are more builds available than for any other client, so you are more likely
to find something that works. There is also a relatively recent OS X build,
so if you use a Mac and want a traditional client, it's the way to go. 
Despite the minimalism (no 256 color support), some veteran players do
in fact prefer this lean and fast client.
<br><p>
<table border="0" bgcolor="#444444">
<tr>
	<td width="30">OS</td>
	<td width="350">Filename</td>
	<td width="65">Version</td>
	<td width="85">Date</td>
	<td width="75">Location</td>
	<td width="50">Size</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_macosx.png" width="25" height="22" alt="MacOSX" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-PPC-MacOSX-Darwin-7.2.gz">BRMH-2.4.0-PPC-MacOSX-Darwin-7.2.gz</a></td>
	<td>2.4.0</td>
	<td>Jan 12 2004</td>
	<td>Main site</td>
	<td>161 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_dec.gif" width="25" height="22" alt="Alpha DEC" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-Alpha-Digital_Unix-4.0.gz">BRMH-2.4.0-Alpha-Digital_Unix-4.0.gz</a></td>
	<td>2.4.0</td>
	<td>Mar 24 2000</td>
	<td>Main site</td>
	<td>219 KB</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_dec.gif" width="25" height="22" alt="Alpha DEC" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-Alpha-Digital_Unix-4.0-static.gz">BRMH-2.4.0-Alpha-Digital_Unix-4.0-static.gz</a></td>
	<td>2.4.0</td>
	<td>Mar 24 2000</td>
	<td>Main site</td>
	<td>766 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-Alpha-Linux.gz">BRMH-2.4.0-Alpha-Linux.gz</a></td>
	<td>2.4.0</td>
	<td>Nov 05 2000</td>
	<td>Main site</td>
	<td>187 KB</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-Alpha-Linux-static.gz">BRMH-2.4.0-Alpha-Linux-static.gz</a></td>
	<td>2.4.0</td>
	<td>Nov 05 2000</td>
	<td>Main site</td>
	<td>549 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_ultrix.gif" width="25" height="22" alt="Ultrix" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-MIPS-ultrix44-static.gz">BRMH-2.4.0-MIPS-ultrix44-static.gz</a></td>
	<td>2.4.0</td>
	<td>Apr 12 2000</td>
	<td>Main site</td>
	<td>373 KB</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-x86-FreeBSD-3.1.gz">BRMH-2.4.0-x86-FreeBSD-3.1.gz</a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>138 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-x86-FreeBSD-3.1-static.gz">BRMH-2.4.0-x86-FreeBSD-3.1-static.gz</a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>399 KB</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_hpux.gif" width="25" height="22" alt="HP-UX" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-PA-RISC-HP-UX-10.20.gz">BRMH-2.4.0-PA-RISC-HP-UX-10.20.gz</a></td>
	<td>2.4.0</td>
	<td>Apr 17 2000</td>
	<td>Main site</td>
	<td>162 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_hpux.gif" width="25" height="22" alt="HP-UX" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-PA-RISC-HP-UX-10.20-static.gz">BRMH-2.4.0-PA-RISC-HP-UX-10.20-static.gz</a></td>
	<td>2.4.0</td>
	<td>Apr 17 2000</td>
	<td>Main site</td>
	<td>515 KB</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_aix.gif" width="25" height="22" alt="AIX" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-RS6000-AIX.gz">BRMH-2.4.0-RS6000-AIX.gz</a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>175 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-x86-Linux-libc5.gz">BRMH-2.4.0-x86-Linux-libc5.gz</a></td>
	<td>2.4.0</td>
	<td>Mar 25 2000</td>
	<td>Main site</td>
	<td>158 KB</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-x86-Linux-glibc2.gz">BRMH-2.4.0-x86-Linux-glibc2.gz</a></td>
	<td>2.4.0</td>
	<td>Mar 25 2000</td>
	<td>Main site</td>
	<td>131 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-x86-Linux-glibc2-static.gz">BRMH-2.4.0-x86-Linux-glibc2-static.gz</a></td>
	<td>2.4.0</td>
	<td>Mar 25 2000</td>
	<td>Main site</td>
	<td>459 KB</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-PowerPC-Linux.gz">BRMH-2.4.0-PowerPC-Linux.gz</a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>176 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-PowerPC-Linux-static.gz">BRMH-2.4.0-PowerPC-Linux-static.gz</a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>521 KB</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-SPARC-Linux-glibc2-static.gz">BRMH-2.4.0-SPARC-Linux-glibc2-static.gz</a></td>
	<td>2.4.0</td>
	<td>Jun 09 2000</td>
	<td>Main site</td>
	<td>844 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-m68k-NetBSD-1.3.2.gz">BRMH-2.4.0-m68k-NetBSD-1.3.2.gz</a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>137 KB</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-m68k-NetBSD-1.3.2-static.gz">BRMH-2.4.0-m68k-NetBSD-1.3.2-static.gz</a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>361 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_sgi.png" width="25" height="22" alt="SGI" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-sgi-irix.bin.gz">BRMH-2.4.0-sgi-irix.bin.gz</a></td>
	<td>2.4.0</td>
	<td>Jul 21 2000</td>
	<td>Main site</td>
	<td>189 KB</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_sgi.png" width="25" height="22" alt="SGI" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-sgi-irix32.bin.gz">BRMH-2.4.0-sgi-irix32.bin.gz</a></td>
	<td>2.4.0</td>
	<td>Jul 21 2000</td>
	<td>Main site</td>
	<td>277 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_sgi.png" width="25" height="22" alt="SGI" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-sgi-irix64.bin.gz">BRMH-2.4.0-sgi-irix64.bin.gz</a></td>
	<td>2.4.0</td>
	<td>Jul 21 2000</td>
	<td>Main site</td>
	<td>224 KB</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_sunos.gif" width="25" height="22" alt="SunOS" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-sun4-sunos414.gz">BRMH-2.4.0-sun4-sunos414.gz</a></td>
	<td>2.4.0</td>
	<td>Apr 12 2000</td>
	<td>Main site</td>
	<td>171 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_sunos.gif" width="25" height="22" alt="SunOS" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-sun4-sunos414-static.gz">BRMH-2.4.0-sun4-sunos414-static.gz</a></td>
	<td>2.4.0</td>
	<td>Apr 12 2000</td>
	<td>Main site</td>
	<td>475 KB</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_solaris.png" width="25" height="22" alt="Solaris" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-SPARC-Solaris-2.6.gz">BRMH-2.4.0-SPARC-Solaris-2.6.gz</a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>159 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-sparc-openbsd.bin.gz">BRMH-2.4.0-sparc-openbsd.bin.gz</a></td>
	<td>2.4.0</td>
	<td>Jul 22 2000</td>
	<td>Main site</td>
	<td>181 KB</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-sparc-openbsd.static.bin.gz">BRMH-2.4.0-sparc-openbsd.static.bin.gz</a></td>
	<td>2.4.0</td>
	<td>Jul 22 2000</td>
	<td>Main site</td>
	<td>497 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-x86-openbsd.bin.gz">BRMH-2.4.0-x86-openbsd.bin.gz</a></td>
	<td>2.4.0</td>
	<td>Jul 22 2000</td>
	<td>Main site</td>
	<td>165 KB</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-x86-openbsd.static.bin.gz">BRMH-2.4.0-x86-openbsd.static.bin.gz</a></td>
	<td>2.4.0</td>
	<td>Jul 22 2000</td>
	<td>Main site</td>
	<td>460 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_solaris.png" width="25" height="22" alt="Solaris" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.2p3.solaris-x86.bin.gz">BRMH-2.2p3.solaris-x86.bin.gz</a></td>
	<td>2.2p3</td>
	<td>Oct 07 1996</td>
	<td>Main site</td>
	<td>148 KB</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_solaris.png" width="25" height="22" alt="Solaris" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.2p3.solaris-x86_staticx.bin.gz">BRMH-2.2p3.solaris-x86_staticx.bin.gz</a></td>
	<td>2.2p3</td>
	<td>Oct 07 1996</td>
	<td>Main site</td>
	<td>226 KB</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_src.gif" width="25" height="22" alt="Source" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/src/BRMH-2.4.0.tar.gz">BRMH-2.4.0.tar.gz (sources)</a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>287 KB</td>
</tr>
</table>

<a name="xpmod"></a><p><h2>Netrek XP Mod</h2>

<table>
<tr><td>Maintainer: <td>Stas Pirogov<br><img src="../../img/keyos-email.png" />
<tr><td>Homepage: <td><a href="http://netrek.keyos.org/">netrek.keyos.org</a><br>
<tr><td>Version history: <td>on homepage, or at <a href="../../files/NetrekXP_Mod/NetrekXP_Mod_README.txt">NetrekXP_Mod_README.txt</a><br>
<tr><td>Source Code Repository:&nbsp;<td>None active; zip of source downloadable
<tr><td>Lineage: <td>Berkeley + Rick's Moo => BRM -> COW -> Netrek:1999 -> XP Mod
</table>
<br><p>
There are no plans to further develop this client, with version 4.4.0.4
of May 06, 2006 as the final release. <br>It works just fine on Windows 
2000 and XP (and probably Vista), and is a tiny download if you have
a slow link. 
<br><br>

<table border="0" bgcolor="#444444">
<tr>
	<td width="30">OS</td>
	<td width="350">Filename</td>
	<td width="65">Version</td>
	<td width="85">Date</td>
	<td width="75">Location</td>
	<td width="50">Size</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_win.png" width="25" height="22" alt="Windows" /></td>
	<td><a href="../../files/NetrekXP_Mod/NetrekXP4404_installer.exe">NetrekXP4404_installer.exe</a></td>
	<td>4.4.0.4</td>
	<td>May 06, 2006</td>
	<td>Main site</td>
	<td>2.5 MB</td>
</tr>
<tr bgcolor="#444444">
	<td><img src="../../img/dl_icon_win.png" width="25" height="22" alt="Windows" /></td>
	<td><a href="http://netrek.keyos.org/netrek-4.4.0.4.exe">NetrekXP4404_installer.exe</a></td>
	<td>4.4.0.4</td>
	<td>May 06, 2006</td>
	<td>Israel</td>
	<td>2.5 MB</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_win.png" width="25" height="22" alt="Windows" /></td>
	<td><a href="../../files/NetrekXPMod-4.4.0.4.bin.zip">NetrekXPMod-4.4.0.4.bin.zip</a></td>
	<td>4.4.0.4</td>
	<td>May 06, 2006</td>
	<td>Main site</td>
	<td>2.2 MB</td>
</tr>
<tr bgcolor="#444444">
	<td><img src="../../img/dl_icon_win.png" width="25" height="22" alt="Windows" /></td>
<td><a href="http://netrek.keyos.org/netrek-4.4.0.4.zip">netrek-4.4.0.4.zip</a></td>
	<td>4.4.0.4</td>
	<td>May 06, 2006</td>
	<td>Israel</td>
	<td>2.2 MB</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_src.png" width="25" height="22" alt="Windows" /></td>
	<td><a href="../../files/NetrekXPMod-4.4.0.4.src.zip">NetrekXPMod-4.4.0.4.src.zip</a> (source code)</td>
	<td>4.4.0.4</td>
	<td>May 06, 2006</td>
	<td>Main site</td>
	<td>6.7 MB</td>
</tr>
<tr bgcolor="#444444">
	<td><img src="../../img/dl_icon_src.png" width="25" height="22" alt="Windows" /></td>
<td><a href="http://netrek.keyos.org/netrekxpsrc-4.4.0.4.zip">netrekxpsrc-4.4.0.4.zip</a> (source code)</td>
	<td>4.4.0.4</td>
	<td>May 06, 2006</td>
	<td>Israel</td>
	<td>6.7 MB</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_win.png" width="25" height="22" alt="Windows" /></td>
	<td><a href="NetrekXP4403_installer.exe">NetrekXP4403_installer.exe</a></td>
	<td>4.4.0.3</td>
	<td>Jul 11 2004</td>
	<td>Main site</td>
	<td>2.5 MB</td>
</tr>
<tr bgcolor="#444444">
	<td><img src="../../img/dl_icon_win.png" width="25" height="22" alt="Windows" /></td>
	<td><a href="http://netrek.keyos.org/netrek.exe">NetrekXP4403_installer.exe</a></td>
	<td>4.4.0.3</td>
	<td>Jul 11 2004</td>
	<td>Israel</td>
	<td>2.5 MB</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_src.gif" width="25" height="22" alt="Source" /></td>
	<td><a href="http://netrek.keyos.org/netrekxpsrc.zip">netrekxpsrc.zip</a> (source code)</td>
	<td>4.4.0.3</td>
	<td>Jul 11 2004</td>
	<td>Israel</td>
	<td>5.4 MB</td>
</tr>
<tr bgcolor="#444444">
	<td><img src="../../img/dl_icon_win.png" width="25" height="22" alt="Windows" /></td>
	<td><a href="playnetrekdotorg_beginner_package.exe">playnetrekdotorg_beginner_package.exe</a></td>
	<td>4.4.0.2</td>
	<td>Jun 06 2004</td>
	<td>U.S.A.</td>
	<td>1.9 MB</td>
</tr>
</table>


<a name="tt"></a><p><h2>TedTurner (Paradise) client</h2>
<table>
<tr><td>Maintainer: <td>Dave Ahn
<tr><td>Homepage: <td>none currently
<tr><td>Version history: <td><a href="http://www.netrek.org/files/archive/TedTurner/ChangeLog">http://www.netrek.org/files/archive/TedTurner/ChangeLog</a>
<tr><td>Source Code Repository:&nbsp; <td>None active; tarballs at <a href="http://www.netrek.org/files/archive/TedTurner/src/">http://www.netrek.org/files/archive/TedTurner/src/ </a>
<tr><td>Lineage: <td>Paradise -> TedTurner<br>
</table>
<br><p>
The TedTurner client is the latest incarnation of the
Paradise client with 256 color pixmap support. No one has touched
it in years, but the Mac build probably still works if you want
to try playing Paradise from a Mac. The archives should still
have source code if you want to do a new build.
<br><p>
<table border="0" bgcolor="#444444">
<tr>
	<td width="30">OS</td>
	<td width="350">Filename</td>
	<td width="65">Version</td>
	<td width="85">Date</td>
	<td width="75">Location</td>
	<td width="50">Size</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_macosx.png" width="25" height="22" alt="MacOSX" /></td>
	<td><a href="TedTurner-1.3.1.Darwin.gz">TedTurner-1.3.1.Darwin.gz</a></td>
	<td>1.3.1</td>
	<td>Aug 27 2001</td>
	<td>Main site</td>
	<td>533 KB</td>
</tr>
</table>

<a name="ancient"></a><p><h2>Archival Clients and Server Code</h2></a>
<br><p>
There is a small pile of old client code, old server code, and
code for various utilities sitting around on <a href="../../files/archive/">http://www.netrek.org/files/archive/</a> and <a href="http://ftp.netrek.org/pub/netrek/">http://ftp.netrek.org/pub/netrek/</a>. If you want 
code for xtrek, jtrek, trekhopd, or any of that other ancient stuff,
check around there, <a href="../../people">ask people</a>, or <a href="../../developer">look into the other developer resources</a>


<?
echo "</div>\n";
echo getFooter();
?>
