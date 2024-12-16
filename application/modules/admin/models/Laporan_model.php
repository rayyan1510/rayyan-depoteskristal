<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Fungsi untuk mengambil data dari view tanpa ongkir
    public function get_transactions_without_shipping($limit, $start)
    {
        $query = $this->db->query("
            SELECT 
                tanggal_transaksi, 
                nama_produk, 
                produk_terjual, 
                harga_satuan, 
                total_penjualan
            FROM 
                view_laporan_penjualan_tanpa_ongkir
            LIMIT $start, $limit
        ");
        return $query->result(); // Mengembalikan data sebagai array objek
    }

    // Fungsi untuk mengambil data dari view dengan ongkir Dan biaya lainnya
    public function get_transactions_with_shipping($limit, $start)
    {
        $query = $this->db->query("
            SELECT 
                tanggal_transaksi, 
                nama_produk, 
                produk_terjual, 
                harga_satuan, 
                total_penjualan
            FROM 
                view_laporan_penjualan_dengan_ongkir
            LIMIT $start, $limit
        ");

        return $query->result(); // Mengembalikan data sebagai array objek
    }

    // Fungsi untuk menghitung jumlah total transaksi tanpa ongkir
    public function count_transactions_without_shipping()
    {
        $query = $this->db->query("
            SELECT COUNT(*) AS total
            FROM view_laporan_penjualan_tanpa_ongkir
        ");
        $result = $query->row();
        return $result->total; // Mengembalikan jumlah total transaksi
    }

    // Fungsi untuk menghitung jumlah total transaksi dengan ongkir
    public function count_transactions_with_shipping()
    {
        $query = $this->db->query("
            SELECT COUNT(*) AS total
            FROM view_laporan_penjualan_dengan_ongkir
        ");
        $result = $query->row();
        return $result->total; // Mengembalikan jumlah total transaksi
    }
}
