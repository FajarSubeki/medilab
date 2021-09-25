<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">List Patien</h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="<?=base_url()?>index.php/pasien/add_edit"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Patient</a>
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
                                        ID Patient</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Patient Name</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal Lahir</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jenis Kelamin</th>
                                   <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No Hp</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nomor RM</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($data_pasien as $row) {
                                ?>
                                <tr>
                                    <td class="align-middle text-center text-xs"><?php echo $row['id_pasien'];?></td>
                                    <td class="align-middle text-center text-xs">
                                        <h6 class="mb-0 text-xs"><?php echo $row['nama_pasien'];?></h6>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php echo date("d/m/Y", strtotime($row['tgl_lahir']));?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php if($row['jenis_kelamin'] == "l") { echo "Laki-laki"; }else { echo "Perempuan"; }?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                        <?php echo $row['no_tlp'];?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                        <?php echo $row['no_rekam_medis'];?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <a href="<?php echo base_url()?>index.php/pasien/add_edit/<?php echo $row['id_pasien']; ?>" class="text-secondary font-weight-bold text-xs"
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