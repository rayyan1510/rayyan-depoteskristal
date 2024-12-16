<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Kelola Laporan</h6>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Laporan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">Kelola Laporan</h3>
                </div>

                <?php if (count($laporan_transaksi) > 0) : ?>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush" id="salesList" style="width: 100%">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal Transaksi</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Jumlah Produk Terjual</th>
                                        <th scope="col">Harga Satuan</th>
                                        <th scope="col">Total Penjualan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($laporan_transaksi as $laporan):
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?php echo $laporan->tanggal_transaksi; ?></td>
                                            <td><?php echo $laporan->nama_produk; ?></td>
                                            <td><?php echo $laporan->produk_terjual; ?></td>
                                            <td><?php echo format_rupiah($laporan->harga_satuan); ?></td>
                                            <td>Rp <?php echo format_rupiah($laporan->total_penjualan); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        <?php echo $pagination; ?>
                    </div>

                <?php else : ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="alert alert-primary">
                                    Belum ada data transaksi. Laporan tidak dibuat
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    </div>
            </div>
        </div>
    </div>
    <!-- end row -->



    <link href="<?php echo get_theme_uri('vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css', 'argon'); ?>" rel="stylesheet">

    <script src="<?php echo get_theme_uri('vendor/datatables.net/js/jquery.dataTables.min.js', 'argon'); ?>"></script>
    <script src="<?php echo get_theme_uri('vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js', 'argon'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/datatables.lang.js'); ?>"></script>

    <!-- <script>
        $(document).ready(function() {
            var table = $('#salesList').DataTable({
                "ajax": "<?php echo site_url('admin/customers/api/customers'); ?>",
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": function(data, type, row) {
                            return '<img src="' + data.profile_picture + '" class="img img-fluid rounded" style="width: 40px;">';
                        }
                    },
                    {
                        "data": function(data, type, row) {
                            var url = window.location.href.split('?')[0].replace('#', '');
                            url = url + '/view/' + data.id;

                            return '<a href="' + url + '">' + data.name + '</a>';
                        }
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "phone_number"
                    },
                    {
                        "data": "address"
                    },
                    {
                        "mRender": function(data, type, row) {
                            var url = window.location.href.split('?')[0].replace('#', '');
                            url = url + '/edit/' + row.id;

                            return '<div class="text-right"><a href="#" data-id="' + row.id + '" class="btn btn-info btn-sm btnDelete"><i class="fa fa-print"></i></a></div>';
                        }
                    }
                ],
                "language": {
                    "search": "Cari:",
                    "lengthMenu": "Menampilkan _MENU_ data",
                    "info": "Menampilkan _START_ sampai _END_ data dari _TOTAL_ data",
                    "infoEmpty": "Tidak ada data yang ditampilkan",
                    "infoFiltered": "(dari total _MAX_ data)",
                    "zeroRecords": "Tidak ada hasil pencarian ditemukan",
                    "paginate": {
                        "first": "&laquo;",
                        "last": "&raquo;",
                        "next": "&rsaquo;",
                        "previous": "&lsaquo;"
                    },
                }
            });
        });
    </script> -->