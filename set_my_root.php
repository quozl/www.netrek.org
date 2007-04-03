<?php
  // The nexus php code in nhp.php needs to know its local disk path root,
  // and its url. To make this portable, as a kludge we break it out into
  // this seperate file, which can vary from server to server. This file
  // has to be "require"'d in the pages calling nhp.php, which is also kinda
  // gross. 
  //
  // At some point, with a bit more php clue, we can insert an if-then
  // below to automatically determine which of several known hosts the code
  // is running on, at which point this file can be distributed between hosts.
  //
  // At present, however, we need to keep this file unrecorded in darcs
  // so that the master site doesn't get overwritten. Ugh. 
  //

  /* original from genocide.netrek.org */
  /* define('NPH_LOC_FILEROOT',      '/var/www/genocide.netrek.org/'); */
  /* define('NPH_LOC_WEBROOT',       '/'); */

  /* works on akb's desktop */
  /*     define('NPH_LOC_FILEROOT',	'/var/www/'); */
  /*     define('NPH_LOC_WEBROOT',	'/'); */

  /* akb cucs   */
  /*  define('NPH_LOC_FILEROOT',	'/home/bressen/html/netrek/'); */
   /* define('NPH_LOC_WEBROOT',	'http://www1.cs.columbia.edu/~bressen/netrek/'); */

/*   define('NPH_LOC_FILEROOT',	'/var/www/');  */
/*     define('NPH_LOC_WEBROOT',	'/'); */

  /* production: www.netrek.org */
   define('NPH_LOC_FILEROOT',      '/var/www/www.netrek.org/'); 
   define('NPH_LOC_WEBROOT',       '/'); 

?>