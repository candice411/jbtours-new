========================================
DRBCounter
http://www.dbscripts.net/counter/

By Don B

Version 1.0
========================================

Requirements
------------

PHP 4.4 or higher

    * It is strongly recommended that register_globals be set to off 
      in your php.ini file.
    * AllowOverride must be enabled for the directory where the counter 
      script is installed in your Apache httpd.config file.

Installation
------------

1) Extract the ZIP file into the desired destination folder on your website.
   Optionally, you may rename the "counter" folder to whatever name is 
   desired; you will need to change the path in the require_once() call
   in example.php to reflect this change.

2) Modify the settings in config.php to match your environment and desired 
   configuration.  This is where you will define and customize your counters.
   Detailed descriptions of the settings are included in the comments within 
   that file.

3) Confirm that the /data subfolder has write permissions enabled.  On UNIX 
   servers, this is accomplished using the "chmod" command.

4) Add the counter code to the desired PHP pages on your website.  The included 
   example.php file demonstrates how to do this.

Upgrade
-------

If you are already running DRBCounter and need to upgrade to the latest 
version, you must perform the following steps.

1) Backup your config.php file, and the contents of your "data" folder.

2) Extract the ZIP file into the desired destination folder on your website, 
   overwriting the existing files.  If you renamed the "counter" folder, 
   you may need to copy the files into the correctly named folder.
   
3) Replace your config.php file, and the "data" folder contents.
   
Uninstall
---------

You can uninstall DRBCounter by following the steps below.

Please note that ALL DATA WILL BE LOST if you uninstall!

1) Delete the subfolder where you put the DRBCounter 
   files from your webserver.
   
2) Remove any references to DRBCounter from the pages in your website.

Customization
-------------

The included example.php file demostrates how to add a counter to almost 
any ordinary PHP page.  See config.php for the available customization 
options.

Modifying PHP files other than config.php is not recommended, as this may 
make it difficult or impossible to upgrade to newer versions of DRBCounter 
in the future.

License
-------

To use DRBCounter free of charge, all that I ask is that the "Powered by..." link 
on the counter text not be removed or altered.

You may not distribute code modifications to DRBCounter without permission from 
the author.

DRBCounter is provided "as is", without warrant of any kind, either 
expressed or implied. 

Version History
---------------
1.0
	* Initial public release
