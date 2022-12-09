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

}