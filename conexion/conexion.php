<?php
    class Database{
		public $db;
		public static function connect(){
			$db = new mysqli('localhost', 'u558315427_hugo', 'Hau2519020', 'u558315427_cobrascol');
			$db->query("SET NAMES 'utf8'");
            return $db;
		}
	}
?>