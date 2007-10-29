<?php

/* ob_gzhandler() is intended to be used as a callback function for
   ob_start() to help facilitate sending gz-encoded data to web browsers
   that support compressed web pages. Before ob_gzhandler()  actually
   sends compressed data, it determines what type of content encoding
   the browser will accept ("gzip", "deflate" or none at all) and will
   return its output accordingly. All browsers are supported since it's
   up to the browser to send the correct header saying that it accepts
   compressed web pages. */
/* ob_start("ob_gzhandler");*/


/* testing value from genocide, dating back to shadowhunter's dev work */
/* define('NPH_LOC_WEBROOT',     'http://www.netrek.org/img/tmp/nhp-beta/');*/

/* OK, this code really wants an absolute filesystem and url root for the
   site. This makes it not very portable. I may try to fix this later,
   but right now I am performing a kludge. --akb 11-mar-2007 */


/* original from genocide.netrek.org */
/* define('NPH_LOC_FILEROOT',      '/var/www/genocide.netrek.org/'); */
/* define('NPH_LOC_WEBROOT',       '/'); */

/* works on akb's desktop */
/*       define('NPH_LOC_FILEROOT',	'/var/www/'); */
/*       define('NPH_LOC_WEBROOT',	'/'); */


/* akb cucs */
/*   define('NPH_LOC_FILEROOT',	'/home/bressen/html/netrek/'); */
/*   define('NPH_LOC_WEBROOT',	'http://www1.cs.columbia.edu/~bressen/netrek/'); */



define('NPH_LOC_SEARCHURL',	NPH_LOC_WEBROOT.'search.php');

/*define('NPH_LOC_FAVICON',	'http://www.netrek.org/favicon.ico');*/
define('NPH_LOC_FAVICON',	'/favicon.ico');
define('NHP_AUTHOR',		'Erik Hietbrink');

define('NPH_LOC_IMGBASE',	NPH_LOC_WEBROOT.'img/');
define('NPH_LOC_IMGADS',	NPH_LOC_IMGBASE.'ads/');

define('NPH_LOC_WEB_HOME',	NPH_LOC_WEBROOT);
define('NPH_LOC_WEB_ABOUT',	NPH_LOC_WEBROOT.'about/');
define('NPH_LOC_WEB_DOWNLOADS',	NPH_LOC_WEBROOT.'downloads/');
define('NPH_LOC_WEB_DLFILES',	NPH_LOC_WEBROOT.'files/');
define('NPH_LOC_WEB_DEVELOPER',	NPH_LOC_WEBROOT.'developer/');
define('NPH_LOC_WEB_BEGINNER',	NPH_LOC_WEBROOT.'beginner/');
define('NPH_LOC_WEB_CLUEGUIDES',	NPH_LOC_WEBROOT.'clueguides/');
define('NPH_LOC_WEB_SERVERS',	NPH_LOC_WEBROOT.'servers/');
define('NPH_LOC_WEB_LEAGUES',	NPH_LOC_WEBROOT.'leagues/');
define('NPH_LOC_WEB_PEOPLE',	NPH_LOC_WEBROOT.'people/');
define('NPH_LOC_WEB_LINKS',	NPH_LOC_WEBROOT.'links/');
define('NPH_LOC_WEB_CINEMA',	NPH_LOC_WEBROOT.'cinema2/');
define('NPH_LOC_WEB_NEWS',	NPH_LOC_WEBROOT.'news.php');
define('NPH_LOC_WEB_FEEDBACK',	'mailto:netrek-web@mirror.to');
define('NPH_LOC_WEB_ADVERTISE',	NPH_LOC_WEBROOT.'advertise.html');

/* depending on error_level setting of server, php can toss errors
   if you access an undefined variable. kludging around. --akb 11-mar-2007 */
if (isset($GET['print'])) {
      $UNDERSCORE_GET_PRINT= $GET['print'];
 }
 else {
       $UNDERSCORE_GET_PRINT="no";
 }
if (isset($GET['ads'])) {
      $UNDERSCORE_GET_ADS= $GET['ads'];
 }
 else {
       $UNDERSCORE_GET_ADS="no";
 }

/* ok, there are unset vars all over shadowhunter's code; I'm just turning
 off the notices. -- akb 11-mar-2007 */
error_reporting(E_ALL ^ E_NOTICE ^E_WARNING);



/* Add your page: filename and then parentfilename, title, author (optional) */
$siteparentlist = array(
	"/" => array(
			"/",
			"Netrek Nexus Homepage"
	),

//       	"test.php" => array(
//			"/",
//			"HTML and CSS testing page"
//	 ), 


	"about/" => array(
			"/",
			"About Netrek"
	),

//	"about/index2.php" => array(
//			"/",
//			"About Netrek"
//	),

	"about/akira-history-of-ogg.php" => array(
			"about/",
			"The Origin of Ogging",
			"",
			""
	),

	"about/akira-history-of-ogg-sources.php" => array(
			"about/",
			"Sources for Origin of Ogging",
			"",
			""
	),

	"about/history_overall.php" => array(
			"about/",
			"Netrek Overall History",
			"Andy McFadden",
			"May 01 1994"
	),

	"about/history_servers.php" => array(
			"about/",
			"Public Netrek Server History",
			"Andy McFadden",
			"May 09 1994"
	),

	"about/history_timeline.php" => array(
			"about/",
			"Netrek Timeline",
			"Andy McFadden",
			"Jan 18 1995"
	),

	"about/leagues.php" => array(
			"about/",
			"Netrek League History",
			"",
			""
	),


	"about/wired_article.php" => array(
			"about/",
			"Wired Article: The First Online Sports Game",
			"Kevin Kelly, WIRED Magazine",
			"Dec 1993"
	),

	"about/internet_als_nintendo.php" => array(
			"about/",
			"UNIX-Info Article: Netrek: het Internet als Nintendo",
			"Ferry van het Groenewoud",
			"Nov 03 1994"
	),

	"beginner/" => array(
			"/",
			"Beginner Section"
	),

	"beginner/keymapping.php" => array(
			"beginner/",
			"Customizing the Keymap"
	),

	"beginner/joes-flash-tutorial/joee-tutorial.php" => array(
			"beginner/",
			"Flash Tutorial for Windows Clients"
	),

	"beginner/macros.php" => array(
			"beginner/",
			"Messaging Macros"
	),

	"beginner/messaging.php" => array(
			"beginner/",
			"In-Game Messaging"
	),

	"beginner/newbie.php" => array(
			"beginner/",
			"Netrek Newbie Manual"
	),

	"beginner/newbie-part2.php" => array(
			"beginner/",
			"Netrek Newbie Manual: Appendices"
	),

	"beginner/quickstartguide.php" => array(
			"beginner/",
			"Netrek Ultra-Short Startup Page"
	),

	"clueguides/" => array(
			"/",
			"Clue Guides"
	),

	//	"clueguides/cow-manual.php" => array(
	//			"clueguides/",
	//			"Manual for the COW client",
	//			"Bret Jordan (Redshirt)",
	//			"September 1995"
	//	),

	"clueguides/dantesdogfightguide.php" => array(
			"clueguides/",
			"Dantes Dogfight Guide",
			"Dante",
			"October 2007"
	),

	"clueguides/dantes_tb3/keymap2.php" => array(
			"clueguides/",
			"Dantes Dogfight Guide",
			"Dante",
			"October 2007"
	),

	"clueguides/greyelf.php" => array(
			"clueguides/",
			"Grey Elf's Guide to Taking Planets"
	),

	"clueguides/hammond-dfguide.php" => array(
			"clueguides/",
			"Lance's Dogfight Guide"
	),


	"clueguides/kiaclueguide.php" => array(
			"clueguides/",
			"KIA's Clue Guide",
			"Jan Sandorf",
			"June 07 1995"
	),

	"clueguides/redshirtguides/" => array(
			"clueguides/",
			"Red Shirt's Guides to Netrek",
			"Bert Enderton",
			"1995"
	),

	"clueguides/redshirtguides/advice.php" => array(
			"clueguides/redshirtguides/",
			"Strategic Advice",
			"Bert Enderton",
			"March 03 1995"
	),

	"clueguides/redshirtguides/gameworkings.php" => array(
			"clueguides/redshirtguides/",
			"How the Game Works",
			"Bert Enderton",
			"1995"
	),

	"clueguides/redshirtguides/jihadgameplan.php" => array(
			"clueguides/redshirtguides/",
			"Buddhist Jihad game-plan",
			"Bert Enderton",
			"1995"
	),

	"clueguides/redshirtguides/clueoutlines.php" => array(
			"clueguides/redshirtguides/",
			"Outline of clues for beginners",
			"Bert Enderton",
			"April 1995"
	),

	"clueguides/redshirtguides/antibombinggameplan.php" => array(
			"clueguides/redshirtguides/",
			"Game-plan with anti-bombing",
			"Bert Enderton",
			"June 06 1993"
	),

	"clueguides/redshirtguides/proverbs.php" => array(
			"clueguides/redshirtguides/",
			"Netrek Proverbs",
			"Bert Enderton",
			"1995"
	),

	"clueguides/redshirtguides/tao.php" => array(
			"clueguides/redshirtguides/",
			"Tao of netrek",
			"Bert Enderton",
			"1995"
	),

	"clueguides/ships/" => array(
			"clueguides/",
			"Ship Types"
	),

	//	"clueguides/ships/sc.php" => array(
	//			"clueguides/ships/",
	//			"Playing SC"
	//	),

	"downloads/" => array(
			"/",
			"Downloads"
	),

	/*	"downloads/customize.php" => array(
			"downloads/",
			"Netrekrc Configuration Tool",
			"<a href=\"mailto:netrek-web@mirror.to\"></a>"
	), */

	"downloads/clients/" => array(
			"downloads/",
			"Client Software"
	),

	"developer/" => array(
			"/",
			"Netrek Software Development"
	),

	"servers/" => array(
			"/",
			"Servers"
	),

	"servers/machines.php" => array(
			"servers/",
			"Specific Netrek Servers"
	),

	"servers/metaservers.php" => array(
			"servers/",
			"Metaservers"
	),

	"servers/variants.php" => array(
			"servers/",
			"Types of Netrek"
	),

	"servers/inl_server_guide.php" => array(
			"servers/",
			"Users Guide to the INL Server",
			"Andrew Markiel (Grey Elf)",
			"May 07 1998"
	),

	"leagues/" => array(
			"/",
			"Netrek Leagues"
	),

	"leagues/inl/statboy/" => array(
			"leagues/",
			"INL sTaTbOy! Archives"
	),

	"people/" => array(
			"/",
			"Communicate"
	),

	"cinema2/" => array(
			"/",
			"Netrek Cinema"
	),

	"cinema2/takefile/" => array(
			"cinema2/",
			"The Netrek Take File",
			"Andrew Moore",
			"October 23 1998"
	),

	"news.php" => array(
			"/",
			"News Archive"
	),

	"credits.php" => array(
			"/",
			"Website Credits"
	),

	"search.php" => array(
			"/",
			"Search Results"
	),

	"glossary.php" => array(
			"/",
			"Netrek Glossary"
	),

	"links/" => array(
			"/",
			"Miscellaneous Links"
	)
);

/* define('NPH_SITELIST',		$siteparentlist);*/

$titletext = "";

function doNhpHeader()
{
	$submenu = getSubmenu();
	global $titletext;
        echo getHeader($titletext);
	echo getMenu();
	echo $submenu;
	echo "\n<div id=\"sidebar\">";
	echo getSidebarScreenshot();
	echo getSidebarSearch();
};


function getSubmenu()
{
	/* Determine the current webpath+filename */
	$filename = $_SERVER['SCRIPT_FILENAME'];
	if (strncmp($filename, NPH_LOC_FILEROOT, strlen(NPH_LOC_FILEROOT)) != 0)
	{
		return "<p>There is something wrong in nhp.php with the NPH_LOC_FILEROOT configuration or the webserver configuration</p>\n";
	}
	$filename = substr($filename, strlen(NPH_LOC_FILEROOT) );
	if (substr($filename, -9) == "index.php") { $filename = substr($filename, 0, -9); }

	/* Do nothing if we're in the root */
	if ($filename == "") {return "";}
	
	$lastModified = date( "F d Y", getlastmod() );
	
	/* Now recursively keep finding parent menu entries */
	global $siteparentlist;
	global $titletext;
	while ($done == "")
	{
		$var = $siteparentlist[$filename];
		if ($var == "")
		{
			return "<p>There is something wrong in nhp.php with the \$siteparentlist configuration for this file ($filename)</p>\n";
		}
		if ($titletext == "")
		{
			$titletext = $var[1];
			$author = $var[2];	// can be empty!
			if( $var[3] != "" ) { $lastModified = $var[3]; } // can be empty. Used to overrule in case of old archived docs
		}
		$pathlist = "/ <a href=\"".NPH_LOC_WEBROOT."$filename\">$var[1]</a>\n" . $pathlist;
		if ($var[0] == "/") $done = "yes";
		else $filename = $var[0];
	}
	
	if ( $titletext ) { $titletext = " - " . $titletext; }

	if ( $author )
	{
		return "\n<div id=\"submenu\">\n<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td>Location: <a href=\"".NPH_LOC_WEBROOT."\">Home</a>\n$pathlist</td><td align=\"right\">Author: $author, updated: $lastModified</td></tr></table></div>\n";
	}
	else
	{
		return "\n<div id=\"submenu\">\n<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td>Location: <a href=\"".NPH_LOC_WEBROOT."\">Home</a>\n$pathlist</td><td align=\"right\">Updated: $lastModified</td></tr></table></div>\n";
		//return "<div id=\"submenu\">Location: <a href=\"".NPH_LOC_WEBROOT."\">Home</a>\n$pathlist</div>\n";
	}
};


function getHeader($title)
{
	//$text = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
	$text = "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\">
<html>
<head>
	<title>Netrek Nexus$title</title>
	<meta http-equiv=\"content-type\" content=\"text/html; charset=ISO-8859-1\">
	<meta name=\"description\" content=\"Netrek is a free online game with a Star Trek Theme. Up to 16 online players battle in space for dominion over the galaxy. Game is available for download for Windows, Mac, and Linux.\">
	<meta name=\"keywords\" content=\"free online game,free,online,download,space,star trek,multi-player,mac,linux,windows,netrek\">
	<meta name=\"author\" content=\"".NHP_AUTHOR."\">
	<link rel=\"shortcut icon\" href=\"".NPH_LOC_FAVICON."\">";

	global $UNDERSCORE_GET_PRINT;
if ($UNDERSCORE_GET_PRINT != "yes") 
	{
		return "$text
	<link rel=\"stylesheet\" type=\"text/css\" href=\"".NPH_LOC_WEBROOT."style.css\">
</head>
<body>
<div id=\"title\">
<a href=\"".NPH_LOC_WEB_HOME."\"><img src=\"".NPH_LOC_IMGBASE."nexus800.jpg\" alt=\"NETREK NEXUS\"></a>
</div>
";
	}
	else
	{
		return "$text
	<link rel=\"stylesheet\" type=\"text/css\" href=\"".NPH_LOC_WEBROOT."print.css\">
</head>
<body OnLoad=\"javascript:print()\">
<h1>NETREK NEXUS Homepage</h1>";
	}
}


function getMenu()
{
  /*	if ($_GET['print'] == "yes") { return ""; } */
	global $UNDERSCORE_GET_PRINT;
	if ($UNDERSCORE_GET_PRINT == "yes") { return ""; } 


	// Workaround for MSIE non-conformace to XML standards...
	$msieClutter = "";
	if ( strstr( $_SERVER['HTTP_USER_AGENT'], "MSIE" ) )
	{
		$msieClutter = " onMouseover=\"this.style.backgroundColor='#b0b0ff'\" onMouseout=\"this.style.backgroundColor='#000000'\"";
	}

	return "
<div id=\"menu\">
<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
<tr valign=\"middle\">
	<td$msieClutter><a href=\"".NPH_LOC_WEB_HOME."\"><img src=\"".NPH_LOC_IMGBASE."home.gif\" alt=\"Home\" width=\"23\" height=\"18\"></a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_BEGINNER."\">Get&nbsp;Started</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_DOWNLOADS."\">Downloads</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_CLUEGUIDES."\">Clue&nbsp;Guides</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_PEOPLE."\">Communicate</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_SERVERS."\">Servers</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_LEAGUES."\">Leagues</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_DEVELOPER."\">Developers</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_ABOUT."\">History</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_LINKS."\">Links</a></td>
	<th></th>
</tr>
</table>
</div>
";

/*		
	return "
<div id=\"menu\">
<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
<tr valign=\"middle\">
	<td$msieClutter><a href=\"".NPH_LOC_WEB_HOME."\"><img src=\"".NPH_LOC_IMGBASE."home.gif\" alt=\"Home\" width=\"23\" height=\"18\"></a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_BEGINNER."\">Get&nbsp;Started</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_DOWNLOADS."\">Downloads</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_CLUEGUIDES."\">Clue&nbsp;Guides</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_PEOPLE."\">Communicate</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_SERVERS."\">Servers</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_LEAGUES."\">Leagues</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_ABOUT."\">History</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_DEVELOPER."\">Developers</a></td>
	<td$msieClutter><a href=\"".NPH_LOC_WEB_LINKS."\">Links</a></td>
	<th width=\"100%\"></th>
</tr>
</table>
</div>
";
*/
}


function getSidebarScreenshot()
{
	global $UNDERSCORE_GET_PRINT;
	if ($UNDERSCORE_GET_PRINT == "yes") { return ""; }

	// So far we have 43 screenshot images. All png format.
	$var = rand(1,43);
	return "
<h1>Screenshot</h1>
<a href=\"".NPH_LOC_WEB_CINEMA."\"><img src=\"".NPH_LOC_IMGBASE."scrshots/scrshot$var.png\" width=\"200\" height=\"185\" alt=\"\"></a><br>
More screenshots can be found in the <a href=\"".NPH_LOC_WEB_CINEMA."\">Cinema</a> section.
";
}


function getSidebarDownload()
{
	global $UNDERSCORE_GET_PRINT;
	if ($UNDERSCORE_GET_PRINT == "yes") { return ""; }

	return "
<h1>Download Now!</h1>
<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
<tr><td><img src=\"".NPH_LOC_IMGBASE."dl_icon_win.png\" width=\"25\" height=\"22\" alt=\"\"></td><td>&nbsp;<a href=\"".NPH_LOC_WEB_DLFILES."NetrekXP_2006/netrekXP2006v13install.exe\">Netrek XP 2006</a> (8.3 MB)</td></tr>
<tr><td><img src=\"".NPH_LOC_IMGBASE."dl_icon_win.png\" width=\"25\" height=\"22\" alt=\"\"></td><td>&nbsp;<a href=\"".NPH_LOC_WEB_DLFILES."NetrekXP_Mod/NetrekXP4404_installer.exe\">Netrek XP Mod 4.4.0.4</a> (small, fewer features) (2.4 MB)</td></tr>
<tr><td><img src=\"".NPH_LOC_IMGBASE."dl_icon_macosx.png\" width=\"25\" height=\"22\" alt=\"\"></td><td>&nbsp;<a href=\"".NPH_LOC_WEB_DLFILES."MacTrek/MacTrek-1.4.0.zip\">MacTrek</a> (26 MB)</td></tr>
<tr><td><img src=\"".NPH_LOC_IMGBASE."dl_icon_linux.png\" width=\"25\" height=\"22\" alt=\"\"></td><td>&nbsp;<a href=\"".NPH_LOC_WEB_DLFILES."Paradise_2000/paradise-2000-rc6.tar.gz\">Paradise 2000</a> (1.4 MB)</td></tr>
</table>
<p>Find other clients, servers, and more in the <a href=\"".NPH_LOC_WEB_DOWNLOADS."\">Download</a> section.</p>
";
}


function getSidebarSearch()
{
	global $UNDERSCORE_GET_PRINT;
	if ($UNDERSCORE_GET_PRINT == "yes") { return ""; }

	return "<br><br>
<h1>Search</h1>
<form method=\"get\" action=\"".NPH_LOC_SEARCHURL."\">
<p><input type=\"text\" size=\"20\" name=\"s\"></p>
</form>
";
}


function getSidebarColofon()
{
	return "
<h1>Colofon</h1>
Webmasters: 
<a href=\"mailto:netrek-web@mirror.to\">Netrek Webmasters</a> Comments and suggestions
as well as articles are welcomed!

<p>
For anyone wanting to donate to help pay for the current download.com
listing, please click on the button below. Thanks!
</p>
<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\">
<p>
<input type=\"hidden\" name=\"cmd\" value=\"_xclick\">
<input type=\"hidden\" name=\"business\" value=\"joe@playnetrek.org\">
<input type=\"hidden\" name=\"item_name\" value=\"Download.com listing\">
<input type=\"hidden\" name=\"no_note\" value=\"1\">
<input type=\"hidden\" name=\"currency_code\" value=\"USD\">
<input type=\"hidden\" name=\"tax\" value=\"0\">
<input type=\"image\" src=\"".NPH_LOC_IMGBASE."paypal_button.png\" name=\"submit\" alt=\"PayPal\">
</p>
</form>

<p>
Advertise your netrek page on this site! Submit
us your 468x60 banner and an url!
</p>

";

//<input type=\"image\" src=\"https://www.paypal.com/en_US/i/btn/x-click-but04.gif\" border=\"0\" name=\"submit\" alt=\"Make payments with PayPal - it's fast, free and secure!\">
}


function getSidebarHints()
{
  //	global $UNDERSCORE_GET_PRINT;
  //	if ($UNDERSCORE_GET_PRINT == "yes") { return ""; }

  //	if ($UNDERSCORE_GET_PRINT == "no") { return ""; }

	$fd = fopen (NPH_LOC_FILEROOT."hints.dat", "r");
	while (!feof ($fd))
	{
		$buffer = trim(fgets($fd, 4096));
		// Ignore comments and empty lines
		if (substr($buffer, 0, 1) != "#" && substr($buffer, 0, 1) != "")
		{
			$lines[] = $buffer;
		}
	}
	fclose ($fd);
	$var = rand(0, count($lines) - 1);
	$hint = $lines[$var];

	return "
<h1>Did you know?</h1>
$hint<p></p>
";
}


function getSidebarNews()
{
	$counter = 0;
	
	$months = array("01" => "Jan", 
			"02" => "Feb",
			"03" => "Mar",
			"04" => "Apr",
			"05" => "May",
			"06" => "Jun",
			"07" => "Jul",
			"08" => "Aug",
			"09" => "Sep",
			"10" => "Oct",
			"11" => "Nov",
			"12" => "Dec" );

	$fd = fopen (NPH_LOC_FILEROOT."news.dat", "r");
	while (!feof ($fd) && $counter < 3)
	{
		$buffer = trim(fgets($fd, 4096));
		
		// Ignore comments and empty lines
		if (substr($buffer, 0, 1) != "#" && substr($buffer, 0, 1) != "")
		{
			$lines[] = $buffer;
			$counter++;
		}
	}
	fclose ($fd);

	$var = "\n<h1>News</h1>\n";

	foreach ($lines as $entry)
	{
		$datecode = substr($entry, 0, 8);
		$datestr = substr($entry, 6, 2)."-".$months[substr($entry, 4, 2)]."-".substr($entry, 0, 4);
		$msg = ltrim(substr($entry, 8));
		$var = $var."<h2><a href=\"".NPH_LOC_WEB_NEWS."#$datecode\">$datestr</a></h2>\n$msg\n\n";
	}

	return $var."<p>
If you have news for us, don't hesitate to <a href=\"".NPH_LOC_WEB_FEEDBACK."\">contact us</a>.
You can browse the <a href=\"".NPH_LOC_WEB_NEWS."\">news archive</a> for past items.
</p>
";
}


function getFooter()
{
	global $UNDERSCORE_GET_PRINT;
	global $UNDERSCORE_GET_ADS;
        $adstring="";
	if ( $UNDERSCORE_GET_ADS != "no" && $UNDERSCORE_GET_PRINT != "yes")
	{

	// todo: how to make this global?
	$advertisements = array(
	//	0 => array(	"img" => NPH_LOC_IMGADS."playnetrekorg.jpg",
	//			"text" => "description",
	//			"url" => "http://www.playnetrek.org/" ),
	//	0 => array(	"img" => "http://facefiles.netrek.org/ad.jpg",
	//			"text" => "Sign up at the Netrek Face Files!",
	//			"url" => "http://facefiles.netrek.org/" ),
		0 => array(	"img" => NPH_LOC_IMGADS."facefiles.jpg",
				"text" => "Sign up at the Netrek Face Files!",
				"url" => "http://facefiles.netrek.org/" ),
	//	1 => array(	"img" => "http://www.spreadfirefox.com/community/images/affiliates/Banners/468x60/rediscover.png",
	//			"text" => "Rediscover the Web: Get FireFox!",
	//			"url" => "http://spreadfirefox.com/community/?q=affiliates&id=0&t=53" )
		1 => array(	"img" => NPH_LOC_IMGADS."firefox.png",
				"text" => "Rediscover the Web: Get FireFox!",
				"url" => "http://www.getfirefox.com/" )
		);

	$var = rand(0, count($advertisements) - 1);
	$adimg = $advertisements[$var]["img"];
	$adtext = $advertisements[$var]["text"];
	$adurl = $advertisements[$var]["url"];
	$adstring = "<a href=\"$adurl\"><img src=\"$adimg\" width=\"468\" height=\"60\" alt=\"Ad: $adtext\"></a><br>";
	}

	return "
<div id=\"footer\">$adstring<br>
Website design &copy; 2004,2005 by ".NHP_AUTHOR.". The content of the netrek home page is copyrighted by their respective authors.
Please send feedback to <a href=\"" . NPH_LOC_WEB_FEEDBACK . "\">netrek-web@mirror.to</a>.
</div>

</body>
</html>
";
}


function searchWebpageTitles( $searchtext='' )
{
	global $siteparentlist;
	$resultstring = "";
	reset($siteparentlist);
        while ($entry = current($siteparentlist))
	{
		if ( stristr($entry[1], $searchtext) !== FALSE )
		{
			$resultstring = $resultstring . "<li><a href=\"" . NPH_LOC_WEBROOT .
					key($siteparentlist) . "\">" . preg_replace( "/($searchtext)/i",
					"<font color=\"#FFF85F\"><b>\\0</b></font>", $entry[1] ) .
					"</a></li>\n";
			/*$resultstring = $resultstring . "<li><a href=\"" . NPH_LOC_WEBROOT .
					key($siteparentlist) . "\">" . str_ireplace( $searchtext,
					"<font color=\"#FFF85F\"><b>$searchtext</b></font>", $entry[1] ) .
					"</a></li>\n";*/
		}
		next($siteparentlist);
	}

	if ( $resultstring == "")
	{
		return "";
	}
	
	return "<h2>Matching web page titles</h2>\n<ol>$resultstring</ol>";
};


function convertHtmlToText( $text='' )
{
	// This will remove HTML tags, javascript sections
	// and white space. It will also convert some
	// common HTML entities to their text equivalent.

	$tagsearch = array (
		"'<\?.*?\?>'si",			// Strip out PHP code
		"'<script[^>]*?>.*?</script>'si",	// Strip out javascript
		"'<!--.*?-->'si",			// Strip out comments
                "'<[\/\!]*?[^<>]*?>'si",          // Strip out HTML tags
                "'([\r\n])[\s]+'",                // Strip out white space
                "'&(quot|#34);'i",                // Replace HTML entities
                "'&(amp|#38);'i",
                "'&(lt|#60);'i",
                "'&(gt|#62);'i",
                "'&(nbsp|#160);'i",
                "'&(iexcl|#161);'i",
                "'&(cent|#162);'i",
                "'&(pound|#163);'i",
                "'&(copy|#169);'i",
                "'&#(\d+);'e");                    // evaluate as php

	$tagreplace = array ("",
                "",
                "",
                "",
                "\\1",
                "\"",
                "&",
                "<",
                ">",
                " ",
                chr(161),
                chr(162),
                chr(163),
                chr(169),
                "chr(\\1)");

	return preg_replace($tagsearch, $tagreplace, $text);
}


function searchWebpageContents( $searchtext='' )
{
	global $siteparentlist;
	$resultstring = "";
	reset($siteparentlist);

        while ($entry = current($siteparentlist))
	{
		// Open and search only the files mentioned in the site index
		$filename = NPH_LOC_FILEROOT . key($siteparentlist);
		if ( substr($filename, -1) == "/" )
		{
			$filename .= "index.php";
		}

		$filesize = filesize( $filename );
		//echo $filename . ": " . $filesize . " bytes<br>";
		if ( $filesize != "" )
		{
			$fd = fopen( $filename, "r" );
			$content = fread( $fd, $filesize );
			fclose ( $fd );

			$content = convertHtmlToText( $content );

			if ( stristr($content, $searchtext) !== FALSE )
			{
				$lowerContent = strtolower( $content );
				$lowerSearchtext = strtolower( $searchtext );
				$hitCount = substr_count( $lowerContent, $lowerSearchtext );
				//echo "hitCount: $hitCount<br>";

				// Try to include the first line of the page upto a max of 30 chars
				$start = 0;
				$end   = min( 50, strpos( $lowerContent, "." ) );
				if ( $end == "" ) $end = min( 50, strlen( $content ) );
				$result = "";
				$pos = strpos( $lowerContent, $lowerSearchtext );
				$hitsPrinted = 0;

				// now try to summarize the content string to only text around the first few hits
				while ( $hitsPrinted < $hitCount && strlen( $result ) < 255 )
				{
				  //echo "<br>result: $result<br>";
				  //echo "length: ".strlen( $result )."<br>";
				  //echo "start: $start<br>";
				  //echo "end: $end<br>";
				  //echo "pos: $pos<br>";
				  //echo "lowercontent: $lowerContent<br>";
				 // Find start and end of scentence in which the match was found upto 40 chars back
				  $lineBegin = max( $pos - 40, strrpos( $lowerContent, ".", $pos ), 0 );
				  //$lineBegin = max( $pos - 40, strpos( $lowerContent, ".", $pos ), 0 );
                                        //echo "lowercontent: $lowerContent<br>";
					$lineEnd   = min( $pos + 50, strpos( $lowerContent, ".", $pos + 1) );
					if ( $lineEnd == "" ) $lineEnd = min( $pos + 50, strlen( $content ) );
					//echo "lineBegin: $lineBegin<br>";
					//echo "lineEnd: $lineEnd<br>";
					//echo "substr: " . substr( $content, $start, $end - $start ) . "<br>";
					
					if ( $lineBegin <= $end )
					{
						$end = $lineEnd;
					}
					else
					{
						$result .= substr( $content, $start, $end - $start ) . " <b>...</b> ";
						$start = $lineBegin;
						$end = $lineEnd;
					}
					$pos = strpos( $lowerContent, $lowerSearchtext, $pos + 1 );
					$hitsPrinted++;
				}
				$result .= substr( $content, $start, $end - $start ) . " <b>...</b> ";


				$resultstring .= "<li><a href=\"" . NPH_LOC_WEBROOT .
					key($siteparentlist) . "\">" . $entry[1] . "</a>. " . $hitCount . " hits.<br>" .
					preg_replace( "/($searchtext)/i",
					"<font color=\"#FFF85F\"><b>\\0</b></font>", $result ) .
					"</li>\n";
			}
		}
		next( $siteparentlist );
	}

	if ( $resultstring == "")
	{
		return "";
	}
	
	return "<h2>Matching web page contents</h2>\n<ol>$resultstring</ol>";
};




?>
