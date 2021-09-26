<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">List User</h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="<?=base_url()?>index.php/user/add_edit_user"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New User</a>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 m-3 pt-0 pb-2">
                    <br/>
                    <div class="table-responsive p-0">
                        <table id="datalist" class="table table-striped table-bordered align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        ID User</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Username</th>
                                   <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        User Status</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Access Level</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($user as $view) {
                                ?>
                                <tr>
                                    <td class="align-middle text-center text-xs"><?=$no++?></td>
                                    <td class="align-middle text-center text-xs">
                                        <h6 class="mb-0 text-xs"><?php echo $view->id; ?></h6>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php echo $view->name; ?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php echo $view->username; ?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php echo $view->status_user; ?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-xs">
                                        <p class="text-xs text-secondary mb-0">
                                            <?php if ($view->role == 1) {echo "Admin User" ;       }  
                                                                else if ($view->role == 2) {echo "Admin MR" ;    }
                                                                else if ($view->role == 3) {echo "Dokter" ;      }
                                                                else if ($view->role == 4) {echo "Pendaftaran" ; }  ?>   
                                        </p>
                                    </td>
                                    <!-- <td class="align-middle text-center text-xs">
                                        <a href="<?php echo base_url()?>index.php/pasien/add_edit/<?php echo $row['id_pasien']; ?>" class="text-secondary font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td> -->
                                
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
