<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">List Doctor</h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="<?=base_url()?>index.php/dokter/add_edit"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Doctor</a>
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
                                        Kode Dokter</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama Dokter</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal Lahir</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tempat Lahir</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jenis Kelamin</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No HP</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($data_dokter as $row) {
                                ?>
                                <tr>
                                    <td class="align-middle text-center text-xs"><?=$no?></td>
                                    <td class="align-middle text-center text-xs">
                                        <h6 class="mb-0 text-xs"><?php echo $row['kode_dokter'];?></h6>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php echo $row['nama_dokter'];?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php echo date("d/m/Y", strtotime($row['tanggal_lahir']));?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php echo $row['tempat_lahir'];?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php if($row['jenis_kelamin'] == "L") { echo "Laki-laki"; }
                                                else { echo "Perempuan"; }?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php echo $row['no_hp'];?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <a href="<?php echo base_url()?>index.php/dokter/add_edit/<?php echo $row['kode_dokter']; ?>" class="text-secondary font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
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