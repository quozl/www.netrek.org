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
<p>If you're running Debian or Ubuntu, pick "netrek-client-cow" from the package list in your system's package manager. This will add the package to a Games menu. Or do it manually: see <a href="http://wiki.netrek.org/index.php/ClientInstallDebian">ClientInstallDebian</a> on the Wiki.

<a name="cowtarball"></a>
<h2>(2) COW 3.2.7 binary tarball</h2>
<br><p>This binary has been reported to work on some versions of Linux and not others. Also, it includes its own libraries, which means that changes, including security updates, to your operating system's libraries won't apply to Netrek. If it doesn't work for you, try <a href="#sourcebuild">building from source code</a> instead. </p>

<ol>
<LI>Download <a href="http://www.netrek.org/files/COW/netrek-client-cow-3.2.7-i386-portable-0.tar.gz">http://www.netrek.org/files/COW/netrek-client-cow-3.2.7-i386-portable-0.tar.gz</a>
<LI>Unpack using the command "tar -xzf netrek-client-cow-3.2.7-i386-portable-0.tar.gz"
<LI>There should now be a directory called "netrek-client-cow-3.2.7-i386-portable-0" 
<LI>Issue the command "cd netrek-client-cow-3.2.7-i386-portable-0"
<LI>Issue the command "./netrek-client-cow" and you should be playing. 
</oL>

<a name="sourcebuild"></a>
<h2>(3) Building COW from source code</h2>
<br><p>
See <a href="http://wiki.netrek.org/index.php/Building#netrek-client-cow">Building netrek-client-cow</a> on the Wiki.

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
