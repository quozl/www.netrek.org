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

<h1>COW</h1>
<p>
There are a number of Netrek clients for Linux. COW is the most actively maintained and most stable. COW is available as a Debian package for Debian and Ubuntu, as an ebuild for Gentoo, as source code you can compile yourself, and there's a tarball of the binaries and libraries. Other clients listed further down the page are <a href="#netrek-client-pygame">netrek-client-pygame</a> (new client written in Python), <a href="#paradise">Paradise 2.99</a> and <a href="#p2k">Paradise 2000</a> (available as stand-alone binaries, just download and run), and <a href="#brmh">BRMH</a>.</p>

<h2>COW for Debian and Ubuntu</h2>
<p>This has been tested on Debian Etch and Lenny, and Ubuntu Hardy.
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

<h2>COW 3.2.7 for Gentoo</h2>
<p>
A gentoo ebuild is available at <a href="http://www.inthewings.net/ebuild/portage/games-simulation/netrek-client-cow/net">http://www.inthewings.net/ebuild/portage/games-simulation/netrek-client-cow/net</a>
</p>

<h2>COW Source tarball</h2>
<p>

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


<h2>COW binary tarball</h2>
<ol>
<LI>Download <a href="http://www.netrek.org/files/COW/netrek-client-cow-3.2.7-i386-portable-0.tar.gz">http://www.netrek.org/files/COW/netrek-client-cow-3.2.7-i386-portable-0.tar.gz</a>
<LI>Unpack using the command "tar -xzf netrek-client-cow-3.2.7-i386-portable-0.tar.gz"
<LI>There should now be a directory called "netrek-client-cow-3.2.7-i386-portable-0" 
<LI>Issue the command "cd netrek-client-cow-3.2.7-i386-portable-0"
<LI>Issue the command "./netrek-client-cow" and you should be playing. 
<LI>Caveats: This binary has been reported to work on some versions of Linux and not others. Also, it includes its own libraries, which means that changes, including security updates, to your operating system's libraries won't apply to Netrek. 
</oL>



<a name="netrek-client-pygame"></a>
<h1>netrek-client-pygame</h1>
<p>
netrek-client-pygame is an all new client written in the Python programming language, using the pygame toolkit. It's still bleeding edge, under active development. You can try it out at <a href="http://www.netrek.org/files/netrek-client-pygame/netrek-client-pygame-0.4.tar.gz">http://www.netrek.org/files/netrek-client-pygame/netrek-client-pygame-0.4.tar.gz</a>. You'll need python 2.5 and the pygame package installed. Bug reports welcome!
</p>

<a name="paradise"></a>
<h1>Paradise 2.99</h1>
<p>
Paradise 2.99 is an oldie but a goodie; unmaintained for a long time, this build still works (as of Fall 2008 on Debian). It has a few features COW doesn't, and some people prefer the way it looks. Get it at <a href="http://www.netrek.org/files/Paradise/paradise-2.99-intel-linux.dynamic.bin.gz">http://www.netrek.org/files/Paradise/paradise-2.99-intel-linux.dynamic.bin.gz</a>, then just unpack and run.

<a name="p2k"></a>
<h1>Paradise 2000</h1>
<p>
Paradise 2000 is the most featureful Linux client; it has det circles, AGRIcaps, warp streaks, a nice directional sound system (though based on OSS, not ALSA), and many other tweaks, and is built as a static binary. Unfortunately, it is the only piece of Netrek software that you cannot download the source code to, and the current build (rc6) expired on Jan 1, 2008. You can download it at <a href="http://www.netrek.org/files/Paradise_2000/paradise-2000-rc6.tar.gz">http://www.netrek.org/files/Paradise_2000/paradise-2000-rc6.tar.gz</a>. When starting it, you'll need to use the -o flag to override the expiration check. </p>

<a name="brmh"></a>
<h1>BRMH</h1>

<p>
This client goes back to the dawn of time, but the maintainer claims that a new build (version 2.5) will be out shortly. It's lean and fast, and the previous builds are available at <a href="http://www.netrek.org/downloads/clients/">the full client download listing page</a> but probably won't work unless you have a pretty old system installation.</p>



<?
echo "</div>\n";
echo getFooter();
?>
