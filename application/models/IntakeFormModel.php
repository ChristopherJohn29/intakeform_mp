<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class IntakeFormModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function save(array $params) : int
	{
		$this->db->insert('home_visit_request', $params);

		return $this->db->insert_id();
	}

	public function getSuperMd(){

		$this->db->select('*');
        $this->db->where('provider_supervising_MD', 1);
		$this->db->where('provider_inactive !=', 1);
        $this->db->from('provider');
        $result = $this->db->get()->result_array();

        return $result;
	}


}