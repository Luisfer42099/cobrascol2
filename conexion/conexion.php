<?php
    class Database{
		public $db;
		public static function connect(){
			$db = new mysqli('213.190.6.179', 'u558315427_hugo', 'Hau2519020', 'u558315427_cobrascol');
			$db->query("SET NAMES 'utf8'");
            return $db;
		}
	}
?>