<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        verify_session('admin');

        $this->load->model(array(
            'laporan_model' => 'laporan'
        ));
    }

    public function index()
    {
        $params['title'] = 'Laporan';

        // Konfigurasi pagination
        $config['base_url'] = site_url('admin/laporan/index');
        $config['total_rows'] = $this->laporan->count_transactions_with_shipping();
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = floor($choice);

        // Pengaturan tampilan pagination
        $config['first_link']       = '«';
        $config['last_link']        = '»';
        $config['next_link']        = '›';
        $config['prev_link']        = '‹';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        // Memuat library pagination
        $this->load->library('pagination', $config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        // Mendapatkan data transaksi tanpa ongkir (per halaman)
        $laporan_transaksi['laporan_transaksi'] = $this->laporan->get_transactions_without_shipping($config['per_page'], $page);
        $laporan_transaksi['pagination'] = $this->pagination->create_links();

        // Menampilkan view
        $this->load->view('header', $params);
        $this->load->view('laporan/laporan', $laporan_transaksi);
        $this->load->view('footer');
    }
}
