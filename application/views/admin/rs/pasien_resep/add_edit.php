<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Biodata Patient</h6>
                        </div>
                        <div class="col-6 text-end">
                            <a class="btn bg-gradient-dark mb-0"
                                href="<?=base_url()?>index.php/pasienresep/report/<?=$data_pasien[0]['id_data_pemeriksaan']?>"><i
                                    class="fas fa-download"></i>&nbsp;&nbsp;Download Report</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4 pt-0 pb-2">
                    <br />
                    <div class="table-responsive p-0">
                        <table id="datatables" class="table table-striped table-bordered align-items-center mb-0">
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">ID Checkup</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_pasien[0]['id_data_pemeriksaan']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Medical ID</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_pasien[0]['no_rekam_medis']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Patient Name</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_pasien[0]['nama_pasien']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Gender</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_pasien[0]['jenis_kelamin']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Address</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_pasien[0]['alamat']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Phone Number</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_pasien[0]['no_tlp']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Anamase</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_pasien[0]['anamase']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Diagnosics</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_pasien[0]['diagnosis']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Action</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_pasien[0]['tindakan']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Obat</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_pasien[0]['obat']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Date Checkup</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=date("d/m/Y", strtotime($data_pasien[0]['tanggal_periksa']))?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Status</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=strtoupper($data_pasien[0]['status_pemeriksaan'])?>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Obat Patien Recept <label
                                    style="color:blue;"><b><?php if($cek_copy_only) {?> COPY ONLY <?php } ?></label></b>
                            </h6>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target=".bs-example-modal-lg"><i class="fa fa-plus-square"></i> Tambah
                                Obat</button>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4 pt-0 pb-5">
                    <?php 
                    if($cek_copy_only) { ?>
                    <a href="<?=base_url()?>index.php/pasienresep/update_status_resep/<?=$data_pasien[0]['id_data_pemeriksaan']?>?status=no copy only"
                        class="btn bg-gradient-dark mb-3" title="unset copy only resep">Unset Copy Only Resep</a>
                    <?php } else { ?>
                    <a href="<?=base_url()?>index.php/pasienresep/update_status_resep/<?=$data_pasien[0]['id_data_pemeriksaan']?>?status=copy only"
                        class="btn bg-gradient-dark mb-3" title="set copy only resep">Set Copy Only Resep</a>
                    <?php }
                    ?>
                    <div class="table-responsive p-0">
                        <table id="datatables" class="table table-striped table-bordered align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Obat Name</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        QTY</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Price</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Total Price</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                  $no = 0;
                                  $tot_all = 0;
                                  $status_resep = 'COMPLETE';
                                  $qty_obat = 0;
                                  foreach($data_obat as $row) {
                                    $no++;
                                    if($row['status'] != 'ready') {
                                      $status_resep = 'INCOMPLETE';
                                      $total = 0;
                                      $tot_all += 0;
                                    } else {
                                      $total = $row['harga']*$row['qty'];
                                      $tot_all += $row['harga']*$row['qty'];
                                    }

                                    $qty_obat += $row['qty'];
                                
                                  ?>
                                <tr>
                                    <td class="align-middle text-center text-xs"><?php echo $no; ?></td>
                                    <td class="align-middle text-center text-xs"><?php echo $row['nama_obat'];?></td>
                                    <td class="align-middle text-center text-xs">
                                        <?php echo strtoupper($row['status']);?></td>
                                    <td class="align-middle text-center text-xs">
                                        <?php echo number_format($row['qty']);?></td>
                                    <td class="align-middle text-center text-xs">Rp.
                                        <?php echo number_format($row['harga']);?></td>
                                    <td class="align-middle text-center text-xs">Rp.
                                        <?php echo number_format($total);?></td>
                                    <td class="align-middle text-center text-xs">
                                        <a href="javascript:(0)" class="text-secondary font-weight-bold text-xs"
                                            title="edit" data-toggle="modal" data-target=".bs-example-modal-lg"
                                            onclick="edit_obat('<?=$row['id']?>', '<?=$row['kode_barang']?>', '<?=$row['nama_obat']?>', '<?=$row['qty']?>', '<?=$row['status']?>')">Edit</a>
                                        <a href="<?=base_url()?>index.php/pasienresep/delete_obat/<?=$row['id'];?>/<?=$data_pasien[0]['id_data_pemeriksaan']?>"
                                            onclick="return confirm('Are you sure to delete data?')"
                                            class="text-secondary font-weight-bold text-xs" title="delete">Delete</a>
                                    </td>
                                </tr>
                                <?php
                              
                                  }
                                  if($no == 0) {
                                    $status_resep = '';
                                  } else {
                                    if(!$cek_copy_only) {
                                      $data = array(
                                        "status_resep" => $status_resep
                                      );
                                      $this->db->where("id_data_pemeriksaan", $data_pasien[0]['id_data_pemeriksaan']);
                                      $this->db->update("tbl_riwayat_pemberian_obat", $data);
                                    }
                                  } 
                          
                          ?>
                            </tbody>
                            <tfoot>
                                <td class="align-middle text-center text-xs" colspan="2"><b>Total</b></td>
                                <td class="align-middle text-center text-xs"><b><?=$status_resep?></b></td>
                                <td class="align-middle text-center text-xs" style="text-align:right">
                                    <b><?=$qty_obat?></b>
                                </td>
                                <td class="align-middle text-center text-xs"><b></b></td>
                                <td class="align-middle text-center text-xs" style="text-align:right"><b>Rp.
                                        <?=number_format($tot_all)?></b></td>
                                <td class="align-middle text-center text-xs"></td>
                            </tfoot>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Form Pemberian Obat</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="form-horizontal form-label-left" method="post"
                action="<?=base_url()?>index.php/pasienresep/add_obat/<?=$data_pasien[0]['id_data_pemeriksaan']?>">
                <div class="modal-body">
                    <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Nama Obat</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" placeholder="Nama Obat" name="obat" required
                                onkeyup="cekobat()" id="obat">
                            <input type="hidden" id="id_obat" name="id_obat">
                            <input type="hidden" id="id_pemberian_obat" name="id_pemberian_obat" value=''>
                            <div class="obat-result" id="obat-result"></div>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">QTY</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="number" class="form-control" id="qty" placeholder="QTY" name="qty" required>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Status</label>
                        <div class="col-md-9 col-sm-9 ">
                            <select class="form-control" name="status" id="status">
                                <option value="ready">Ready</option>
                                <option value="not ready">Not Ready</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function edit_obat(id, id_obat, nama, qty, status) {
    $("#obat").val(nama);
    $("#id_pemberian_obat").val(id);
    $("#id_obat").val(id_obat);
    $("#qty").val(qty);
    $("#status").val(status);
}

function cekobat() {
    var search = $("#obat").val();
    // console.log(obat);

    if (search == '') {
        $("#obat-result").hide();
    } else {
        $("#obat-result").show();
    }
    console.log(search);
    $('#obat-result').html('');
    $.ajax({
        type: "GET",
        url: "<?=base_url()?>index.php/pasienresep/getobat?search=" + search,
        success: function(data) {
            $("#obat-result").html(data);
        }
    });
}

function setValue(id, name) {
    $('#obat-result').html('');
    $('#id_obat').val(id);
    $('#obat').val(name);
}
</script>