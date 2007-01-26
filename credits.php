<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require 'nhp.php';

doNhpHeader();

echo getSidebarHints();
// echo getSidebarNews();
echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";
?>


<p>
<h1>Website Credits</h1>
This website could not have been created without the help of many volunteers
and contributers. In particular I'd like to thank the following persons:
</p>

<p>
<h2>Dave Ahn</h2>
For providing so generously server hardware and bandwith on which so much of
all netrek resources run.
</p>

<p>
<h2>David Swasey</h2>
For helping running the Draft Leagues.
</p>


<h2>Netrek Authors and Contributors</h2>
Legend:
<ul>
<li>[doc] - documentation
<li>[Vanilla] - Vanilla server source
<li>[COW] - COW client source
<li>[BRMH] - BRMH client source
<li>[N2K] - Netrek 2000 client source
<li>[P2K] - Paradise 2000 client source
<li>[Paradise] - Paradise client source
<li>[INL] - International Netrek League, sTaTbOy!
<li>[DL] - Draft League
<li>[server] - Pickup or league server admin
<li>[JTrek] - JTrek client source
<li>[RSA] - RSA verification source
</ul>

<ul>
<li>	Dave Ahn,
<li>	Karthik Arumugham [server][Vanilla][BRMH][DL],
<li>	Kevin Bernatz,
<li>	James Cameron [Vanilla],
<li>	Terence Chay [doc],
<li>	Terence Chung,
<li>	Lee Crawford,
<li>	Greg Dearing [INL],
<li>	Jonathan Ellis [doc],
<li>	Bert Enderton [doc],
<li>	Chris Guthrie,
<li>	Alec Habig,
<li>	Tedd Hadley,
<li>	Jonathan Hardwick,
<li>	Erik Hietbrink,
<li>	Tom Holub [INL][doc],
<li>	Vincent Louie [doc],
<li>	Andy McFadden [doc][Vanilla],
<li>	Eric Mehlhaff,
<li>	Adrian Moore [doc],
<li>	Jeff Nowakowski,
<li>	J. Mark Noworolski,
<li>	Kevin Oconnor [Vanilla],
<li>	Trent Piepho,
<li>	Jonathan Shekter
<li>	Steve Sheldon,
<li>	Sam Shen [RSA],
<li>	Kurt Siegl [Vanilla][COW],
<li>	Kevin P. Smith,
<li>	Scott Silvey,
<li>	David Swasey [,
<li>	Bob Tanner [server][doc][Vanilla],
<li>	Robert Temple [JTrek],
<li>	Nick Trown [server][doc][Vanilla][RSA],
<li>	Carlos Y. Villalpando [Vanilla][RSA],
<li>	Heiko Wengler,
</ul>
<p>This list has names of all people who have contributed significantly to Netrek.  "Contributions"
include published documentation and/or source code directly related to Netrek (client, server, utilities,
manuals), administration/maintenance of public Netrek servers, hosting of public web or ftp resources
(personal netrek home pages don't count) or anything else that is a public service to the Netrek
community.
</p>
<p>Send additions to Dave Ahn <a href="mailto:ahn@vec.wfubmc.edu">ahn@vec.wfubmc.edu</a></p>
  

<?
echo "</div>\n";
echo getFooter();
?>
