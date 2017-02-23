<?php

      /**
      *
      *   Defines the command to perform FTP RAWLIST 
      * 
        @file RAWLIST.php
      * @package php_curl_rest/plugins/FTP
      * @version 1.0.0
      * @author Olivier Lutzwiller 
      * @note 
      *		1.0 - 22.02.2017 - First version  
      **/
      
      class FTP_RAWLIST
      {
      
	    /** @var string command Name of the command in Upercase should be the same after _ in classname */
	    public $command;
	    
	    /** @var FTP_curl_client plugin  instance of the plugin this command is issued */
	    protected $plugin;
	    
	    /** @var string version  the version of the command , should be compatible with version_compare() format*/
	    public $version;
      
          /**
	    @name FTP_RAWLIST
	    @param FTP_curl_client $plugin instance of the plugin this command is issued
	    **/
	    function FTP_RAWLIST(&$plugin) {
	    //---------------------------
		  $this->plugin=&$plugin;
		  $this->command="RAWLIST";
		  $this->version="1.0.0";
	    }
      
	    function FTP_RAWLIST_run(&$success,$data,$extra) {
	   //------------------------------------------------------	
		    $remoteDir=$data;
		   $items=$this->plugin->rawList($remoteDir,$success);
		   return $items;
	    }
      
      
      }


?>