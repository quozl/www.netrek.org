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

<a name="apt"></a>
<h2>(1) Installing COW using the APT tools</h2>
<br>
<p>If you're running Debian Squeeze, Debian Sid, or Ubuntu Jaunty, you have it easy; all you need to do is pick "netrek-client-cow" from the package list in your system's package manager. Your system will probably even add the package to a Games menu on your desktop for you. In case you're having trouble, you can simply do the following:
<ol>
<li>get to a root shell prompt
<li>enter <tt>"apt-get&nbsp;install&nbsp;-f&nbsp;netrek-client-cow"</tt>
</ol>
</p>



<a name="cow327"></a>
<h2>(2) Installing the COW 3.2.7 .deb package from www.netrek.org</h2>
<br><p>
This has been tested on Debian Etch, Debian Lenny, and Ubuntu Hardy. It should also work on Ubuntu Intrepid. These binaries are provided only for intel processor architectures.
</p>
<ol>
<LI>Download <a href="http://www.netrek.org/files/COW/netrek-client-cow_3.2.7-0_i386.deb">COW 3.2.7 i386</a>
<li>If you are not already, become root, using either "su" or "sudo bash"
<li>Issue the command "dpkg --force-depends -i netrek-client-cow_3.2.7-0_i386.deb"
<li>Issue the command "apt-get install -f netrek-client-cow"
<li>You should now be able to play by simply typing "netrek-client-cow"
</ol>
Note: if you have an amd64 (x86_64) architecture computer, 
you can instead download 
<a href="http://www.netrek.org/files/COW/netrek-client-cow_3.2.7-0_amd64.deb">COW 3.2.7 amd64</a> for amd64 / x86_64 and modify the commands in steps 3 and 4 accordingly. 
</p><br><br>


<a name="cowtarball"></a>
<h2>(3) COW 3.2.7 binary tarball</h2>
<br><p>This binary has been reported to work on some versions of Linux and not others. Also, it includes its own libraries, which means that changes, including security updates, to your operating system's libraries won't apply to Netrek. If it doesn't work for you, try <a href="#sourcebuild">building from source code</a> instead. </p>

<ol>
<LI>Download <a href="http://www.netrek.org/files/COW/netrek-client-cow-3.2.7-i386-portable-0.tar.gz">http://www.netrek.org/files/COW/netrek-client-cow-3.2.7-i386-portable-0.tar.gz</a>
<LI>Unpack using the command "tar -xzf netrek-client-cow-3.2.7-i386-portable-0.tar.gz"
<LI>There should now be a directory called "netrek-client-cow-3.2.7-i386-portable-0" 
<LI>Issue the command "cd netrek-client-cow-3.2.7-i386-portable-0"
<LI>Issue the command "./netrek-client-cow" and you should be playing. 
</oL>

<a name="sourcebuild"></a>
<h2>(4) Building COW from source code</h2>
<br><p>
The wonder that is free software means that if a package that suits
your system doesn't already exist, you can download the source code and 
compile one yourself in a few easy steps. 
<ol>
<LI>Download <a href="http://www.netrek.org/files/COW/netrek-client-cow-3.2.8.tar.gz">COW 3.2.8 source code</a>
<LI>Unpack the file with "tar -xzf netrek-client-cow-3.2.8.tar.gz"
<LI>Issue the command "cd netrek-client-cow-3.2.8"
<LI>Issue the command "./configure"
<LI>Issue the command "make"
<LI>Issue the command "make install"
<LI>If all goes well, your system will produce a playable binary for you and you can play by issuing the command "netrek-client-cow".
</oL>
</p>
<p>
For the above to work, your system will need to have 
certain tools and libraries already installed, but most linux distributions 
provide these. You'll need a compiler such as gcc, the make utility, and the following libraries, including their header files:
<ul>
<li>the C library: libc6
<li>the GNU multiple precision library: libgmp3c2
<li>the Imlib image management library, version 2: libimlib2
<li>SDL, the Simple Direct media Layer, version 1.2: libsdl1.2 and libsdl-mixer1.2
<li>the X11 library: libx11
<li>the X11 pixmap library: libxpm4
<li>the X11 XFree video mode extention library: libxxf86vm1
</ul>


<h2>When you're having problems</h2>
<br><p>
If none of the above works for you, you have two simple choices (besides giving up or switching platforms). You can either ask for help, or you can try a client besides COW.</p>

<h3>Getting Help</h3>
<p>See the <a href="../people/index.html">Communicate section</a> for the most up-to-date options. These will probably include:
<ul>
<li>The <a href="irc://irc.freenode.net/#netrek">#netrek IRC channel, on irc.freenode.net</a><br>
<li>The <a href="http://groups.google.com/group/netrek-forever">netrek-forever</a> google group
<li>The <a href="http://mailman.us.netrek.org/mailman/listinfo/netrek-dev">netrek-dev</a><br>list, where you can reach game developers, server admins, website workers, etc. 
</ul>

<h3>Other clients</h3>
<p>There's a whole bunch of other Linux Netrek clients besides COW. So many, in fact, that we <a href="./linux-not-cow.php">wrote a page about them</a></p>

<p>You can also see all the available downloads at the <a href="../downloads/clients/">full client software page</a> and, for the morbidly curious, there are always the archives of ancient client code, old server code, and code for various utilities sitting around on <a href="http://www.netrek.org/files/archive/">http://www.netrek.org/files/archive/</a> and <a href="http://ftp.netrek.org/pub/netrek/">http://ftp.netrek.org/pub/netrek/</a></p>

<img src="../img/bill-ogg-motivator.jpg">


<?
echo "</div>\n";
echo getFooter();
?>
