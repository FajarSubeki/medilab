<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Data Obat</h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="<?=base_url()?>index.php/obat/add_edit"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Obat</a>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 m-3 pt-0 pb-2">
                    <?=$this->session->flashdata('msg')?>
                    <div class="table-responsive p-0">
                        <table id="datatables" class="table table-striped table-bordered align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Obat Name</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Category</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Satuan</th>
                                   <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Price</th>
                                   <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($data_obat as $row) {
                                ?>
                                <tr>
                                    <td class="align-middle text-center text-xs"><?php echo $no; ?></td>
                                    <td class="align-middle text-center text-xs">
                                        <h6 class="mb-0 text-xs"><?php echo $row['nama_obat'];?></h6>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php echo $row['kategori_obat'];?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php echo $row['satuan_barang'];?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php echo $row['harga'];?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <a href="<?php echo base_url()?>index.php/obat/add_edit/<?php echo $row['id']; ?>" class="text-secondary font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit Obat">
                                            Edit
                                        </a>
                                        <a href="<?=base_url()?>index.php/obat/delete_data/<?=$row['id'];?>" onclick="return confirm('Are you sure to delete data?')"
                                         class="text-secondary font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Delete Obat">
                                            Delete
                                        </a>
                                    </td>
                                
                                </tr>
                                <?php
                                $no++;} 
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>