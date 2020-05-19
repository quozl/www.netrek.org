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

//echo getSidebarDownload();
//echo getSidebarNews();
echo getSidebarHints();
//echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";
?>

<!-- Caching. 
   We should add caches of some of the dead sites if we can get
   them from archive.org or whereever. I'm gonna list some here:
<li>
	<a href="http://nl.netrek.org/">Dutch 
	Netrek Startpage</a> - Netrek in Dutch.
	</li>

	<a href="http://www.coe.uncc.edu/~drh/NetrekTshirt.html">Netrek T-Shirt Offer</a> - Picture 
	of the old Netrek T-shirt from '96. It is no longer available, but 
	there is a snapshot of the shirt.
	</li>
<li>
	<a href="http://www.ecst.csuchico.edu/~mirage/macros.html">Echo Mirage's Macro Page</a> - Lots 
	of neat Netrek macros. 
	</li>
<li>
	<a href="http://www3.sympatico.ca/mfurrow/netrek/">Caradhras'
	Netrek page</a> - Clean looking appetiser for the game of netrek.
	</li>
    
-->


<h1>Linkfest</h1>
<p>
The following are miscellaneous Netrek related links. 
</p>





<p><h2>Misc links</h2>
<ul>

<!-- Facefiles are broken...
        <li>
	<a href="http://facefiles.netrek.org/">Netrek Face 
	Files</a> - Gallery of scanned photos of 
	Netrek players. Sign up yourself as well!
	</li> -->

<li>    <A href="http://www.playnetrek.org">PlayNetrek.org</a> - 
	The home of the Netrek <a href="http://www.playnetrek.org/smf/">web forums</a>, client downloads and flash tutorials,
        and other trekish goodness.

<li>    <A href="http://wiki.netrek.org">The Netrek Wiki</a> - 
	Netrek Player and Developer Wiki.

<li>    <A href="http://gytha.oggthebase.org/">Yoda's gytha page</a> - 
	Info about the new Python-based multiplatform client, gytha. 

<!--    <li>
	<a href="http://netrek.hwy.com.au/">Netrek in Australia</a> - 
	A website to serve the community of Netrek players in Australia.

	</li> -->
<li>
	<a href="http://members.tripod.com/~netrek/">Netrek: 
	Outpost</a> - Sulman Syed's contribution: a 
	compilation of Netrek resources. 
	</li>

<li>	<a href="http://www.continuum.us.netrek.org/">Netrek Continuum</a> -
	A big collection of netrek stuff; cluefiles, intros, etc. 
	</li>
 
<li>    <a href="http://paradise.netrek.org">Paradise.Netrek.Org</a> - the home of Netrek Paradise. Not very active. 
        </li>

<li>	<a href="http://vismod.media.mit.edu/vismod/demos/netrek/index.html">Netrek
	Collective</a> - A project at MIT to build advanced interfaces for
	Netrek. Pretty neat.
	</li>
</ul>


<p><h2>Netrek meetings</h2>
<ul>
<li>
	<a href="http://www.shadowhunter.org/gatherings/nasg95/">NASG '95: Austria</a> - 
	Pictures from the Netrek Addicts Summer Gathering in Austria.
	</li>
<li>
	<a href="http://www.shadowhunter.org/gatherings/nasg96/">NASG 
	'96: Sundsvall</a> -
	Pictures from the Netrek Addicts Summer Gathering in Sundsvall, Sweden.
	</li>
<li>
	<a href="http://www.shadowhunter.org/gatherings/dnasg96/">DNASG '96: Amsterdam</a> - Dutch Netrek 
	Addicts Summer Gathering in the Netherlands. 
	</li>
<li>
	<a href="http://www.shadowhunter.org/gatherings/dnawg96/">DNAWG 
	'96: Amsterdam</a> - Pictures from the Dutch Netrek 
	Addicts Winter Gathering in the Netherlands. 
	</li>
<li>
	<a href="http://www.shadowhunter.org/gatherings/nasg97/">NASG 
	'97: Amsterdam</a> -
	Netrek Addict Summer Gathering in Europe. The largest event so far!
	</li>
<li>
	<a href="http://www.shadowhunter.org/gatherings/nasg98/">NASG '98: Amsterdam</a> -
	Netrek Addict Summer Gathering in Europe. 
	</li>
<li>
	<a href="http://www.shadowhunter.org/gatherings/nawg99/">NAWG '99: London</a> -
	Netrek Addicts Winter Gathering in London, England, Jan. '99. 
	</li>
<li>
	<a href="http://www.shadowhunter.org/gatherings/nasg99/">NASG '99: Gothenburg</a> - NASG in Gothenburg, 
	Sweden, August '99. 
	</li>
</ul>


<p><h2>Personal and Team Netrek home pages</h2>
In no particular order. 
<ul>

<li>
	<a href="http://web.mit.edu/madpit/www/netrek/">DOOSH! 
	- Netrek</a> - Subby's personal home page.
	</li>

<li>
	Team <a href="http://www.shadowhunter.org/rookies2/">Rookies 2</a>
	</li>
<li>
	Team <a href="http://www.ping.de/~sven/netrek/ET.html">EuroTwinks</a>
	</li>
<li>
	<a href="http://www.cc.utah.edu/~bj0038/netrek/">Bret 
	Jordan's Netrek Home Page</a> - A ~1997 player's site, with some
        documentation on it, scores for his characters, etc. 
	</li>

<li>
	<a href="http://free.prohosting.com/~jthirsk/netrek/">Netrek Home Site of Mifiq</a> - 
	Mifiq's personal Netrek page.
	</li>

<li>
	<a href="http://www.mindspring.com/~rickwood/schmack_foo/index.html">Team SchmackFoo</a>
	</li>

<li>
	<a href="http://www.dtek.chalmers.se/~d8samol/cthns.html">Chalmers Local Netrek Home Page</a>
	</li>
</ul>


<?php
echo "</div>\n";
echo getFooter();
?>
