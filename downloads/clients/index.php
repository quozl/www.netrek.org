<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require '../../nhp.php';

doNhpHeader();

echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>

<h1>Netrek Client Software</h1>
<p>
Since the start Netrek was developed according to the Open Source Model,
like for instance Linux, which means
that the Netrek source code is freely available. To prevent cheating, all
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
If you cannot locate a suitable client for your hardware and operating
system in the list below, try the
<a href="http://ftp.netrek.org/pub/netrek/">Netrek Continuum FTP Archive</a>.
</p>

<p><h2>Netrek XP Mod</h2>
Maintainer: <a href="mailto:keyos@keyos.org">Stas Pirogov</a><br>
Version history: <a href="netrekxp_readme.txt">netrekxp_readme.txt</a><br>
Homepage: <a href="http://netrek.keyos.org/">netrek.keyos.org</a><br>
This is currently the most recent and actively developed client. It is focussed
entirely on the windows platform though. It is based on Steve Sheldon's
old Netrek:1999 client, which itself was a fork of the COW client. Do not get confused
by the name, since this client will work on Windows 95, 98, ME, XP, 2000 and 2003.

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
	<td><a href="NetrekXP4403_installer.exe"><tt>NetrekXP4403_installer.exe</tt></a></td>
	<td>4.4.0.3</td>
	<td>Jul 11 2004</td>
	<td>Main site</td>
	<td>2.5 Mb</td>
</tr>
<tr>
	<td><img src="../../img/dl_icon_win.png" width="25" height="22" alt="Windows" /></td>
	<td><a href="http://netrek.keyos.org/netrek.exe"><tt>NetrekXP4403_installer.exe</tt></a></td>
	<td>4.4.0.3</td>
	<td>Jul 11 2004</td>
	<td>Israel</td>
	<td>2.5 Mb</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_win.png" width="25" height="22" alt="Windows" /></td>
	<td><a href="http://enl.netrek.org/clients/NetrekXP4403_installer.exe"><tt>NetrekXP4403_installer.exe</tt></a></td>
	<td>4.4.0.3</td>
	<td>Jul 11 2004</td>
	<td>Netherlands</td>
	<td>2.5 Mb</td>
</tr>
<tr>
	<td><img src="../../img/dl_icon_win.png" width="25" height="22" alt="Windows" /></td>
	<td><a href="playnetrekdotorg_beginner_package.exe"><tt>playnetrekdotorg_beginner_package.exe</tt></a></td>
	<td>4.4.0.2</td>
	<td>Jun 06 2004</td>
	<td>U.S.A.</td>
	<td>1.9 Mb</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_src.gif" width="25" height="22" alt="Source" /></td>
	<td><a href="http://netrek.keyos.org/netrekxpsrc.zip"><tt>netrekxpsrc.zip (sources)</tt></a></td>
	<td>4.4.0.3</td>
	<td>Jul 11 2004</td>
	<td>Israel</td>
	<td>5.4 Mb</td>
</tr>
</table>

<p><h2>Paradise 2000</h2>
Maintainer: <a href="mailto:xyzzy@speakeasy.org">Trent Piepho</a><br>
Version history: <a href="paradise_readme.txt">paradise_readme.txt</a><br>
Homepage: <a href="http://www.speakeasy.org/~xyzzy/netrek/">www.speakeasy.org/~xyzzy/netrek/</a><br>
This is an enhanced version of the Paradise client for Linux. It features
stereo sound effects and a number of new features not found in other clients.
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
	<td><a href="paradise-2000-rc4.tar.gz"><tt>paradise-2000-rc4.tar.gz</tt></a></td>
	<td>RC4</td>
	<td>Jan 03 2005</td>
	<td>Main site</td>
	<td>963 Kb</td>
</tr>
<tr>
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://www.speakeasy.org/~xyzzy/download/paradise-2000-rc4.tar.gz"><tt>paradise-2000-rc4.tar.gz</tt></a></td>
	<td>RC4</td>
	<td>Jan 03 2005</td>
	<td>USA</td>
	<td>963 Kb</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="paradise-2000-rc3.tar.gz"><tt>paradise-2000-rc3.tar.gz</tt></a></td>
	<td>RC3</td>
	<td>Feb 03 2004</td>
	<td>Main site</td>
	<td>2.7 Mb</td>
</tr>
<tr>
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://www.speakeasy.org/~xyzzy/download/paradise-2000-rc3.tar.gz"><tt>paradise-2000-rc3.tar.gz</tt></a></td>
	<td>RC3</td>
	<td>Feb 03 2004</td>
	<td>USA</td>
	<td>2.7 Mb</td>
</tr>
</table>

<p><h2>COW (Client of Win)</h2>
Maintainer: <a href="mailto:007@netrek.org">Kurt Siegl</a><br>
Version history: <a href="http://www.netrek.org/cow/current/README.html">README.html</a><br>
Homepage: <a href="http://cow.netrek.org/">cow.netrek.org</a><br>
COW is a popular client with support for 256 full color
pixmaps.
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
	<td><a href="COW.3.01pl0.linux_glibc23.bz2"><tt>COW.3.01pl0.linux_glibc23.bz2</tt></a></td>
	<td>3.01pl0</td>
	<td>Mar 21 2004</td>
	<td>Main site</td>
	<td>180 Kb</td>
</tr>
<tr>
	<td><img src="../../img/dl_icon_win.png" width="25" height="22" alt="Windows" /></td>
	<td><a href="COW_3_00pl3_win32.zip"><tt>COW_3_00pl3_win32.zip</tt></a></td>
	<td>3.00pl3</td>
	<td>Jan 12 2000</td>
	<td>Main site</td>
	<td>475 Kb</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_solaris.png" width="25" height="22" alt="Solaris" /></td>
	<td><a href="COW.3.00pl3.Solaris2.6.gz"><tt>COW.3.00pl3.Solaris2.6.gz</tt></a></td>
	<td>3.00pl3</td>
	<td>Jan 12 2000</td>
	<td>Main site</td>
	<td>172 Kb</td>
</tr>
<tr>
	<td><img src="../../img/dl_icon_sgi.png" width="25" height="22" alt="SGI" /></td>
	<td><a href="COW.3.00pl3.irix.gz"><tt>COW.3.00pl3.irix.gz</tt></a></td>
	<td>3.00pl3</td>
	<td>Jan 12 2000</td>
	<td>Main site</td>
	<td>193 Kb</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="COW.3.00pl3.linux.gz"><tt>COW.3.00pl3.linux.gz</tt></a></td>
	<td>3.00pl3</td>
	<td>Jan 12 2000</td>
	<td>Main site</td>
	<td>709 Kb</td>
</tr>
<tr>
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="COW.3.00pl3.linux.Small.Screen.gz"><tt>COW.3.00pl3.linux.Small.Screen.gz</tt></a></td>
	<td>3.00pl3</td>
	<td>Jan 12 2000</td>
	<td>Main site</td>
	<td>711 Kb</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="COW.3.00pl3.netbsd.i386.elf.gz"><tt>COW.3.00pl3.netbsd.i386.elf.gz</tt></a></td>
	<td>3.00pl3</td>
	<td>Jan 12 2000</td>
	<td>Main site</td>
	<td>476 Kb</td>
</tr>
<tr>
	<td><img src="../../img/dl_icon_src.gif" width="25" height="22" alt="Source" /></td>
	<td><a href="COW.3.00pl3.tar.gz"><tt>COW.3.00pl3.tar.gz (sources)</tt></a></td>
	<td>3.00pl3</td>
	<td>Jan 12 2000</td>
	<td>Main site</td>
	<td>768 Kb</td>
</tr>
<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_sound.png" width="25" height="22" alt="Sounds" /></td>
	<td><a href="COW-Sound.3.00.tar.gz"><tt>COW-Sound.3.00.tar.gz</tt></a></td>
	<td>3.00</td>
	<td>Feb 28 1998</td>
	<td>Main site</td>
	<td>1128 Kb</td>
</tr>
</table>

<p><h2>BRMH</h2>
Maintainer: <a href="mailto:karthik@karthik.com">Karthik Arumugham</a><br>
Version history: <a href="ftp://ftp.netrek.org/pub/netrek/clients/brmh/src/BRMH-2.4.0-CHANGELOG">BRMH-2.4.0-CHANGELOG</a><br>
Homepage: <a href="ftp://ftp.netrek.org/pub/netrek/clients/brmh/BRMH.html">ftp.netrek.org/pub/netrek/clients/brmh/BRMH.html</a><br>
BRMH is another popular Bronco client. It runs
only under UNIX platforms and has no 256 color support, but veteran
players tend to prefer this lean and fast client.
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
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-PPC-MacOSX-Darwin-7.2.gz"><tt>BRMH-2.4.0-PPC-MacOSX-Darwin-7.2.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Jan 12 2004</td>
	<td>Main site</td>
	<td>161 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_dec.gif" width="25" height="22" alt="Alpha DEC" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-Alpha-Digital_Unix-4.0.gz"><tt>BRMH-2.4.0-Alpha-Digital_Unix-4.0.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Mar 24 2000</td>
	<td>Main site</td>
	<td>219 Kb</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_dec.gif" width="25" height="22" alt="Alpha DEC" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-Alpha-Digital_Unix-4.0-static.gz"><tt>BRMH-2.4.0-Alpha-Digital_Unix-4.0-static.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Mar 24 2000</td>
	<td>Main site</td>
	<td>766 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-Alpha-Linux.gz"><tt>BRMH-2.4.0-Alpha-Linux.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Nov 05 2000</td>
	<td>Main site</td>
	<td>187 Kb</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-Alpha-Linux-static.gz"><tt>BRMH-2.4.0-Alpha-Linux-static.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Nov 05 2000</td>
	<td>Main site</td>
	<td>549 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_ultrix.gif" width="25" height="22" alt="Ultrix" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-MIPS-ultrix44-static.gz"><tt>BRMH-2.4.0-MIPS-ultrix44-static.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Apr 12 2000</td>
	<td>Main site</td>
	<td>373 Kb</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-x86-FreeBSD-3.1.gz"><tt>BRMH-2.4.0-x86-FreeBSD-3.1.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>138 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-x86-FreeBSD-3.1-static.gz"><tt>BRMH-2.4.0-x86-FreeBSD-3.1-static.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>399 Kb</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_hpux.gif" width="25" height="22" alt="HP-UX" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-PA-RISC-HP-UX-10.20.gz"><tt>BRMH-2.4.0-PA-RISC-HP-UX-10.20.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Apr 17 2000</td>
	<td>Main site</td>
	<td>162 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_hpux.gif" width="25" height="22" alt="HP-UX" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-PA-RISC-HP-UX-10.20-static.gz"><tt>BRMH-2.4.0-PA-RISC-HP-UX-10.20-static.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Apr 17 2000</td>
	<td>Main site</td>
	<td>515 Kb</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_aix.gif" width="25" height="22" alt="AIX" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-RS6000-AIX.gz"><tt>BRMH-2.4.0-RS6000-AIX.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>175 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-x86-Linux-libc5.gz"><tt>BRMH-2.4.0-x86-Linux-libc5.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Mar 25 2000</td>
	<td>Main site</td>
	<td>158 Kb</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-x86-Linux-glibc2.gz"><tt>BRMH-2.4.0-x86-Linux-glibc2.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Mar 25 2000</td>
	<td>Main site</td>
	<td>131 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-x86-Linux-glibc2-static.gz"><tt>BRMH-2.4.0-x86-Linux-glibc2-static.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Mar 25 2000</td>
	<td>Main site</td>
	<td>459 Kb</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-PowerPC-Linux.gz"><tt>BRMH-2.4.0-PowerPC-Linux.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>176 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-PowerPC-Linux-static.gz"><tt>BRMH-2.4.0-PowerPC-Linux-static.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>521 Kb</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_linux.png" width="25" height="22" alt="Linux" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-SPARC-Linux-glibc2-static.gz"><tt>BRMH-2.4.0-SPARC-Linux-glibc2-static.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Jun 09 2000</td>
	<td>Main site</td>
	<td>844 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-m68k-NetBSD-1.3.2.gz"><tt>BRMH-2.4.0-m68k-NetBSD-1.3.2.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>137 Kb</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-m68k-NetBSD-1.3.2-static.gz"><tt>BRMH-2.4.0-m68k-NetBSD-1.3.2-static.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>361 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_sgi.png" width="25" height="22" alt="SGI" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-sgi-irix.bin.gz"><tt>BRMH-2.4.0-sgi-irix.bin.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Jul 21 2000</td>
	<td>Main site</td>
	<td>189 Kb</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_sgi.png" width="25" height="22" alt="SGI" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-sgi-irix32.bin.gz"><tt>BRMH-2.4.0-sgi-irix32.bin.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Jul 21 2000</td>
	<td>Main site</td>
	<td>277 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_sgi.png" width="25" height="22" alt="SGI" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-sgi-irix64.bin.gz"><tt>BRMH-2.4.0-sgi-irix64.bin.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Jul 21 2000</td>
	<td>Main site</td>
	<td>224 Kb</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_sunos.gif" width="25" height="22" alt="SunOS" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-sun4-sunos414.gz"><tt>BRMH-2.4.0-sun4-sunos414.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Apr 12 2000</td>
	<td>Main site</td>
	<td>171 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_sunos.gif" width="25" height="22" alt="SunOS" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-sun4-sunos414-static.gz"><tt>BRMH-2.4.0-sun4-sunos414-static.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Apr 12 2000</td>
	<td>Main site</td>
	<td>475 Kb</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_solaris.png" width="25" height="22" alt="Solaris" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-SPARC-Solaris-2.6.gz"><tt>BRMH-2.4.0-SPARC-Solaris-2.6.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>159 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-sparc-openbsd.bin.gz"><tt>BRMH-2.4.0-sparc-openbsd.bin.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Jul 22 2000</td>
	<td>Main site</td>
	<td>181 Kb</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-sparc-openbsd.static.bin.gz"><tt>BRMH-2.4.0-sparc-openbsd.static.bin.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Jul 22 2000</td>
	<td>Main site</td>
	<td>497 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-x86-openbsd.bin.gz"><tt>BRMH-2.4.0-x86-openbsd.bin.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Jul 22 2000</td>
	<td>Main site</td>
	<td>165 Kb</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_bsd.png" width="25" height="22" alt="BSD" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.4.0-x86-openbsd.static.bin.gz"><tt>BRMH-2.4.0-x86-openbsd.static.bin.gz</tt></a></td>
	<td>2.4.0</td>
	<td>Jul 22 2000</td>
	<td>Main site</td>
	<td>460 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_solaris.png" width="25" height="22" alt="Solaris" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.2p3.solaris-x86.bin.gz"><tt>BRMH-2.2p3.solaris-x86.bin.gz</tt></a></td>
	<td>2.2p3</td>
	<td>Oct 07 1996</td>
	<td>Main site</td>
	<td>148 Kb</td>
</tr>

<tr bgcolor="#333333">
	<td><img src="../../img/dl_icon_solaris.png" width="25" height="22" alt="Solaris" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/bin/BRMH-2.2p3.solaris-x86_staticx.bin.gz"><tt>BRMH-2.2p3.solaris-x86_staticx.bin.gz</tt></a></td>
	<td>2.2p3</td>
	<td>Oct 07 1996</td>
	<td>Main site</td>
	<td>226 Kb</td>
</tr>

<tr>
	<td><img src="../../img/dl_icon_src.gif" width="25" height="22" alt="Source" /></td>
	<td><a href="http://ftp.netrek.org/pub/netrek/clients/brmh/src/BRMH-2.4.0.tar.gz"><tt>BRMH-2.4.0.tar.gz (sources)</tt></a></td>
	<td>2.4.0</td>
	<td>Mar 23 2000</td>
	<td>Main site</td>
	<td>287 Kb</td>
</tr>
</table>

<p><h2>TedTurner (Paradise) client</h2>
Maintainer: <a href="mailto:ahn@netrek.org">Dave Ahn</a><br />
The TedTurner client is the latest incarnation of the
Paradise client with 256 color pixmap support.
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
	<td><a href="TedTurner-1.3.1.Darwin.gz"><tt>TedTurner-1.3.1.Darwin.gz</tt></a></td>
	<td>1.3.1</td>
	<td>Aug 27 2001</td>
	<td>Main site</td>
	<td>533 Kb</td>
</tr>
</table>



<?
echo "</div>\n";
echo getFooter();
?>
