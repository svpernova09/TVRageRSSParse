TVRageRSSParse
==============

Block of PHP to do simple RSS Parsing from TVRage.com

Simple script uses simplexml_load_file() (http://php.net/manual/en/function.simplexml-load-file.php) to load the URL of the RSS feed. 
* Simply login to your TVRage.com account and click on the "Favorite+" button. 
* Then go to http://www.tvrage.com/rss.php and look under "Personalized RSS Feed", I use the URL in "This will show today's schedule of all the shows in...". 
* Take that URL and replace YOUR-TV-RAGE-RSS-URL in the tvrage-block.php script. 
* Then run the block.