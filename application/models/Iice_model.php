<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Iice_model extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
		}

        function join3table($table1, $table2, $table3, $att1, $att2, $att3, $isi1)
        {
            $query = $this->db->query('SELECT * FROM '.$table1.' INNER JOIN '.$table2.' ON '.$table1.'.'.$att1.' = '.$table2.'.'.$att2.' INNER JOIN '.$table3.' ON '.$table3.'.'.$att1.' = '.$table2.'.'.$att2.' WHERE '.$table1.'.'.$att3.' = '.$isi1);
            return $query;
        }

        function where1($table, $att1, $isi1)
        {
            $query = $this->db->query('SELECT *FROM '. $table .' WHERE '. $att1 .'=' . $isi1);
            return $query;
        }
	}
	
