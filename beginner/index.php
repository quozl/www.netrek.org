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

<h1>Beginner Section</h1>

<p>
There are many good sources of information on Netrek.
<A href="../clueguides">Various FAQs, help files, and guides</a> are available to help Netrek
players of all skill levels. If you are new to Netrek and want to get
started, begin with the steps below. 
If after reading through these materials you
still have questions, <a href="../people/">contact the Netrek
community</a> for further help!
</p>


<h2>
Are you a new player? Follow these simple steps to get started with
Netrek!</h2>
<ol>
<h2><li>
	Download and install a client for your platform. </h2>
        <UL>
        <LI>For Windows users, download
	<a href="../files/NetrekXP_2009/netrekinstall2009v1.exe">Netrek
  XP 2009</a>
        <LI>For Windows users with slow Internet links, the
	<a href="../files/NetrekXP_Mod/NetrekXPMod-4.4.0.4.installer.exe">Netrek
	XP Mod</a> client is only 2.4 MB to download, vs 8.9 MB for XP 2009
        <LI>For Mac users, download 
         <a href="../files/MacTrek/MacTrek-1.4.0.zip">MacTrek</a>
        <!-- <LI>For Linux users, download 
         <a href="../files/Paradise_2000/paradise-2000-rc6.tar.gz">Paradise 2000</a> -->
        </UL>
</li>
<br>

<h2><li>
	Read the <a href="newbie.php">Netrek Newbie Manual</a>.</h2>
        And remember that there's lots more <a href="../clueguides">fine documentation</a> 
        to check out later.
</li>
<br><br>

<h2><li>
	Start your client and select a server to play on from the list.</h2>
        <tt>continuum.us.netrek.org</tt> and <tt>pickled.netrek.org</tt>
        are the main pickup servers.
</li>
<br><br>

<h2><li>
	Thanks for your interest in Netrek</h2>
        Now go kick some butt! 
</li>
</ol>
</h2>



<?
echo "</div>\n";
echo getFooter();
?>
