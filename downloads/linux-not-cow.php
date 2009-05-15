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


<a name="notcow"></a>
<h2>Other Linux Netrek Clients</h2>

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
