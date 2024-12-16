<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pembayaran Saya</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><?php echo anchor(base_url(), 'Home'); ?></li>
                        <li class="breadcrumb-item active">Pembayaran</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content Header -->

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <!-- row 1 -->
            <div class="row">
                <div class="col-12">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header">
                            <?php echo anchor('customer/payments/confirm', 'Tambah Pembayaran'); ?>
                        </div>
                        <!-- End Card Header -->
                        <!-- Card Body -->
                        <div class="card-body<?php echo (count($payments) > 0) ? ' p-0' : ''; ?>">
                            <?php if (count($payments) > 0) : ?>
                                <div class="table-responsive">
                                    <table class="table table-striped m-0">
                                        <tr class="bg-primary">
                                            <th scope="col">No.</th>
                                            <th scope="col">Order</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        <?php
                                        $no = 1;
                                        foreach ($payments as $payment) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <!-- <td><?php echo $payment->id; ?></td> -->
                                                <td><?php echo anchor('customer/payments/view/' . $payment->id, '#' . $payment->order_number); ?></td>
                                                <td><?php echo $payment->payment_date; ?></td>
                                                <td><?php echo get_payment_status($payment->payment_status); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            <?php else : ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="alert alert-info">
                                            Belum ada data pembayaran
                                        </div>

                                        <?php echo anchor('customer/payments/confirm', 'Konfirmasi pembayaran baru'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if ($pagination) : ?>
                            <div class="card-footer">
                                <?php echo $pagination; ?>
                            </div>
                        <?php endif; ?>

                        <!-- End Card Body -->
                    </div>
                    <!-- End Card -->
                </div>
            </div>
            <!-- End Row 1 -->
        </div>
        <!-- End Container Fluid -->

        <!-- 
        <div class="card card-primary">

        </div> -->
    </section>

</div>