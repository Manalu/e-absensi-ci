<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	function __construct()
	{	
		// MODUL DIBUAT BY KATON G BAGASKARA
		parent::__construct();
	}

   // INSERT DATA
	function insert($table = '', $data = '')
	{
		$this->db->insert($table, $data);
	}

	function insert_last($table = '', $data = '')
	{
		$this->db->insert($table, $data);

		return $this->db->insert_id();
	}

	// MENDAPATKAN SEMUA ISI TABLE
	function get_all($table)
	{
		$this->db->from($table);
		return $this->db->get();
	}

	// MENDAPATKAN SEMUA ISI TABLE, SECARA ORDER
	function get_all_order($table = NULL, $order = NULL)
	{
		$this->db->from($table);
		$this->db->order_by($order);
		return $this->db->get();
	}

	// MENDAPATKAN ISI TABLE YG SESUAI KONDISI
	function get_where($table = null, $where = null)
	{
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get();
	}

	function select_all($select, $table)
	{
		$this->db->select($select);
		$this->db->from($table);
		return $this->db->get();
	}

	function select_where($select, $table, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get();
	}

	function update($table = null, $data = null, $where = null)
	{
		$this->db->update($table, $data, $where);
	}

	function delete($table = null, $where = null)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function report($where = '')
	{
		$this->db->select(array('o.id_order AS id_order', 'fullname', 'kota', 'total', 'SUM(biaya) AS biaya'));

		$this->db->from('t_order o JOIN t_detail_order do ON (o.id_order = do.id_order) JOIN t_users u ON (o.id_user = u.id_user)');
		$this->db->where($where);
		$this->db->group_by('o.id_order');

		return $this->db->get();
	}

	function count($table='')
	{
		return $this->db->count_all($table);
	}

	function count_where($table='', $where = '')
	{
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->count_all_results();
	}

	function last($table, $limit, $order)
	{
		$this->db->from($table);
		$this->db->limit($limit);
		$this->db->order_by($order, 'DESC');

		return $this->db->get();
	}
	function like_after($table = null, $where = null, $column=null, $string = null)
	{
		$this->db->from($table);
		$this->db->where($where);
		$this->db->like($column, $string, 'after'); //pendukung%

		return $this->db->get();
	}
	function filter_date($table = null, $month=null, $year=null, $column=null, $query=null) {
		$this->db->from($table);
		$this->db->where('MONTH('.$column.')',$month);
		$this->db->where('YEAR('.$column.')',$year);
		$this->db->where($query);
		return $this->db->get();
	}
}
