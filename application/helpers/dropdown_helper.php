<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

if (!function_exists('dropdown_pembimbing')) {
	function dropdown_pembimbing()
	{
		$CI = &get_instance();
		$CI->load->database();
		## Menampilkan data
		$CI->db->select('*');
		$CI->db->from('kaprodi');
		$CI->db->where('kaprodi.level', '2');
		$CI->db->order_by('id', 'asc');
		$hasil = $CI->db->get();

		$arr_data[''] = "== Pilih ==";
		if ($hasil->num_rows() > 0) {
			foreach ($hasil->result_array() as $key => $val) {
				$arr_data[$val['id']] = $val['nama'] . ' (' . $val['nip'] . ')';
			}
		}
		return $arr_data;
	}
}

if (!function_exists('dropdown_pelanggan')) {	// Pelanggan
	function dropdown_pelanggan()
	{
		$CI = &get_instance();
		$CI->load->database();
		## Menampilkan data
		$CI->db->select('*');
		$CI->db->from('user');
		$CI->db->order_by('id', 'asc');
		$hasil = $CI->db->get();

		$arr_data[''] = "=== Pilih Pelanggan ===";
		if ($hasil->num_rows() > 0) {
			foreach ($hasil->result_array() as $key => $val) {
				$arr_data[$val['id']] = $val['nama'];
			}
		}
		return $arr_data;
	}
}
if (!function_exists('dropdown_kategori')) { // Kategori
	function dropdown_kategori()
	{
		$CI = &get_instance();
		$CI->load->database();
		## Menampilkan data
		$CI->db->select('*');
		$CI->db->from('kategori');
		$CI->db->order_by('id', 'asc');
		$hasil = $CI->db->get();

		$arr_data[''] = "=== Pilih Kategori===";
		if ($hasil->num_rows() > 0) {
			foreach ($hasil->result_array() as $key => $val) {
				$arr_data[$val['id']] = $val['nama'];
			}
		}
		return $arr_data;
	}
}
// Dropdown Kategori Frontend
if (!function_exists('dropdown_kategori_frontend')) { // Kategori
	function dropdown_kategori_frontend()
	{
		$CI = &get_instance();
		$CI->load->database();
		## Menampilkan data
		$CI->db->select('*');
		$CI->db->from('kategori');
		$CI->db->order_by('id', 'asc');
		$hasil = $CI->db->get();

		$arr_data[''] = "Kategori Produk";
		if ($hasil->num_rows() > 0) {
			foreach ($hasil->result_array() as $key => $val) {
				$arr_data[$val['id']] = $val['nama'];
			}
		}
		return $arr_data;
	}
}

if (!function_exists('dropdown_barang')) {
	function dropdown_barang()
	{
		$CI = &get_instance();
		$CI->load->database();
		## Menampilkan data
		$CI->db->select('*');
		$CI->db->from('barang');
		$CI->db->order_by('id', 'asc');
		$hasil = $CI->db->get();

		$arr_data[''] = "=== Pilih Barang ===";
		if ($hasil->num_rows() > 0) {
			foreach ($hasil->result_array() as $key => $val) {
				$arr_data[$val['id']] = $val['nama_brg'];
			}
		}
		return $arr_data;
	}
}

if (!function_exists('dropdown_karyawan')) {
	function dropdown_karyawan()
	{
		$CI = &get_instance();
		$CI->load->database();
		## Menampilkan data
		$CI->db->select('*');
		$CI->db->from('karyawan');
		$CI->db->order_by('id', 'asc');
		$hasil = $CI->db->get();

		$arr_data[''] = "== Pilih ==";
		if ($hasil->num_rows() > 0) {
			foreach ($hasil->result_array() as $key => $val) {
				$arr_data[$val['id']] = $val['nama'] . ' (' . $val['no_hp'] . ')';
			}
		}
		return $arr_data;
	}
}

if (!function_exists('dropdown_jeniskendaraan')) {
	function dropdown_jeniskendaraan()
	{
		$CI = &get_instance();
		$CI->load->database();
		## Menampilkan data
		$CI->db->select('*');
		$CI->db->from('tarif');
		$CI->db->order_by('id', 'asc');
		$hasil = $CI->db->get();

		$arr_data[''] = "== Pilih ==";
		if ($hasil->num_rows() > 0) {
			foreach ($hasil->result_array() as $key => $val) {
				$arr_data[$val['id']] = $val['nama_kendaraan'] . ' (' . $val['harga'] . ')';
			}
		}
		return $arr_data;
	}
}
