<?php

namespace App\Models;
use CodeIgniter\Model;

class M_apotek extends Model
{
	public function tampil($table, $by){
		return $this->db->table($table)
						->orderby($by, 'desc')
						->get()
						->getResult();
	}
	public function join($table, $table2, $on){
		return $this->db->table($table)
						->join($table2,$on)
						->get()
						->getResult();
	}
	public function filter($table, $table2, $on, $filter1, $filter2, $awal, $akhir){
		return $this->db->table($table)
						->join($table2,$on)
						->where($filter1,$awal)
						->where($filter2,$akhir)
						->get()
						->getResult();
	}
	public function input($table, $data){
		return $this->db->table($table)
						->insert($data);
	}
	// public function input($table1, $data1, $table2, $data2) {
    // $this->db->transStart();
    // try {
    //     $this->db->table($table1)->insert($data1);        
    //     $this->db->table($table2)->insert($data2);
    //     $this->db->transComplete();
        
    //     return true; // Optional: Return true on success
    // } catch (Exception $e) {
    //     // Rollback if there's an error
    //     $this->db->transRollback();
    //     throw $e; // Rethrow the exception to handle it in the calling function
    // }
// }

	public function hapus($table, $data){
		return $this->db->table($table)
						->delete($data);
	}
	public function getWhere($table, $where){
		return $this->db->table($table)
						->getWhere($where)
						->getRow();
	}

	function edit($table, $data, $where)
	{
		return $this->db->table($table)
						->update($data, $where);
	}
}