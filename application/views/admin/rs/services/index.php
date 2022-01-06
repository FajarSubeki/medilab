<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Data Services</h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="<?=base_url()?>index.php/services/add_edit"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Services</a>
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
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Title</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Descriptions</th>
                                   <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($data_services as $row) {
                                ?>
                                <tr>
                                    <td class="align-middle text-center text-xs"><?php echo $no; ?></td>                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php echo $row['title'];?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php echo $row['description'];?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <a href="<?php echo base_url()?>index.php/services/add_edit/<?php echo $row['kode_services']; ?>" class="text-secondary font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit Services">
                                            Edit
                                        </a>
                                        <a href="<?=base_url()?>index.php/services/delete_data/<?=$row['kode_services'];?>" onclick="return confirm('Are you sure to delete data?')"
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