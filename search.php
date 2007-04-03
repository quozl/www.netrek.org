<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Each file should set $pagetitle
// 2) Uncomment the Sidebars that are required for this page
// 3) The Header, Menu and Footer must remain untouched
// 4) Add your page content

require 'set_my_root.php';
require 'nhp.php';


function searchGlossary( $searchtext='' )
{
	$fd = fopen (NPH_LOC_FILEROOT."glossary.dat", "r");
	$lowerSearchText = strtolower( $searchtext );
	while (!feof ($fd))
	{
		$buffer = trim(fgets($fd, 4096));

		// Ignore comments, empty lines and lines without ':'
		if ( substr( $buffer, 0, 1 ) != "#" &&
			substr( $buffer, 0, 1 ) != "" &&
			strstr( $buffer, ':' ) )
		{
			$delimeter = strpos( $buffer, ':' );
			$term = substr( $buffer, 0, $delimeter );

			if ( strtolower( $term ) == $lowerSearchText )
			{
				$definition = substr( $buffer, $delimeter + 1 );
				fclose( $fd );
				return "<h2>Matching <a href=\"". NPH_LOC_WEBROOT . "glossary.php\">glossary</a> term</h2>\n<ol><li><a href=\"". NPH_LOC_WEBROOT . "glossary.php\">$term</a><br />\n$definition</li></ol>\n";
			}
		}
	}
	fclose( $fd );
	return "";
}


doNhpHeader();

echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo '</div><div id="content">';

$unfilteredsearchstring = trim( $_GET['s'] );
$searchstring = preg_replace( "/[^\w^ ^-]/", "", $unfilteredsearchstring );

if ( $searchstring != $unfilteredsearchstring )
{
	echo "\n<h1>Search Error</h1>";
	echo "Please enter a search string using only alphanumeric characters!";
}
else if ( $searchstring == "" )
{
	echo "\n<h1>Search Error</h1>";
	echo "Please enter a search string!";
}
else if ( $searchstring == "t" || $searchstring == "T" )	// Special case
{
	echo "\n<h1>Search Results for '" . $searchstring . "'</h1>";
	echo searchGlossary( $searchstring );
}
else if ( strlen( $searchstring ) < 2 )
{
	echo "\n<h1>Search Error</h1>";
	echo "Please hit the keyboard at least 2 times when entering a search string!";
}
else if ( strtolower( $searchstring ) == "netrek" )
{
	echo "\n<h1>Search Results for '" . $searchstring . "'</h1>";
	echo "Duh! Visit the <a href=\"" . NPH_LOC_WEB_HOME .
		"\">Netrek Nexus Homepage</a> for more information about Netrek!";
}
else 
{
	echo "\n<h1>Search Results for '" . $searchstring . "'</h1>";
	echo searchGlossary( $searchstring );
	echo searchWebpageTitles( $searchstring );
	echo searchWebpageContents( $searchstring );
}



echo '</div>';
echo getFooter();
?>
