<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Menghitung total jumlah pembayaran yang ada di tabel 'payments'.
    public function count_all_payments()
    {
        return $this->db->get('payments')->num_rows();
    }

    // Menjumlahkan total pembayaran sukses dengan memfilter berdasarkan status pesanan.
    // Status yang dianggap sukses adalah 3 dan 4.
    public function sum_success_payment()
    {
        return $this->db->select('SUM(total_price) as total_payment')->where('order_status', 4)->or_where('order_status', 3)->get('orders')->row()->total_payment;
    }

    public function payment_overview()
    {
        $data = $this->db->query("
            SELECT p.*, o.order_number, c.name, c.profile_picture, o.user_id
            FROM payments p
            JOIN orders o
	            ON o.id = p.order_id
            JOIN customers c
	            ON c.user_id = o.user_id
            WHERE p.payment_status = '1'
            LIMIT 5")->result();

        return $data;
    }

    // Memperbarui status pembayaran dan mengatur status pesanan menjadi 2.
    // Digunakan untuk memproses perubahan status secara bersamaan.
    public function set_payment_status($id, $status, $order)
    {
        $this->db->where('id', $order)->update('orders', array('order_status' => 2));

        return $this->db->where('id', $id)->update('payments', array('payment_status' => $status));
    }

    // Mengambil semua data pembayaran dengan paginasi.
    // Data diurutkan berdasarkan tanggal pembayaran secara menurun.
    public function get_all_payments($limit, $start)
    {
        $payments = $this->db->query("
            SELECT p.id, p.payment_date, p.order_id, p.payment_price, p.payment_status as status, o.order_number, c.name AS customer
            FROM payments p
            JOIN orders o
                ON o.id = p.order_id
            JOIN customers c
                ON c.user_id = o.user_id
            ORDER BY p.payment_date DESC
        ");

        return $payments->result();
    }

    // Mengecek apakah pembayaran dengan ID tertentu ada di tabel 'payments'.
    // Mengembalikan TRUE jika ada, FALSE jika tidak ada.
    public function is_payment_exist($id)
    {
        return ($this->db->where('id', $id)->get('payments')->num_rows() > 0) ? TRUE : FALSE;
    }

    // Mengambil data detail pembayaran berdasarkan ID tertentu.
    // Data termasuk informasi pesanan dan pelanggan terkait.
    public function payment_data($id)
    {
        $payment = $this->db->query("
            SELECT p.*, o.order_number, c.name AS customer
            FROM payments p
            JOIN orders o
                ON o.id = p.order_id
            JOIN customers c
                ON c.user_id = o.user_id
            WHERE p.id = '$id'
        ");

        return $payment->row();
    }

    // Mengambil data pembayaran berdasarkan ID pengguna.
    // Data mencakup informasi pelanggan, status pembayaran, dan nomor pesanan.
    public function payment_by($id)
    {
        $payments = $this->db->query("
            SELECT p.id, p.payment_date, p.order_id, p.payment_price, p.payment_status as status, o.order_number, c.name AS customer, p.payment_status
            FROM payments p
            JOIN orders o
                ON o.id = p.order_id
            JOIN customers c
                ON c.user_id = o.user_id
            WHERE o.user_id = '$id'
        ");

        return $payments->result();
    }
}
