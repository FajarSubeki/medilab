<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Pemeriksaan Pasien Form</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4 pt-0 pb-2">
                    <?php if (validation_errors()){ ?>
                    <div style="width:500px; background-color:#FCC; padding:5px;">
                        <?php echo validation_errors(); ?> <br>
                    </div>
                    <?php } ?>
                    <br />
                    <form class="form-horizontal form-label-left" method="post"
                        action="<?=base_url()?>index.php/pasienresep/add_patient_checkup_save/">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 ">Nama Pasien</label>
                            <div class="col-md-6 col-sm-6 ">
                                <select onchange="checkNoRekam()" required class="form-control" id="name_patient" name="name">
                                    <option value='' disabled selected>Pilih Pasien</option>
                                    <?php foreach($data_pasien as $sps) { ?>
                                    <option data-name="<?=$sps->nama_pasien?>" value="<?=$sps->no_rekam_medis?>">
                                        <?=$sps->nama_pasien?></option>
                                    <?php } ?>
                                    <input type="text" hidden id="txt_patient_name" name="name" class="form-control"
                                    readonly>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label col-md-2 col-sm-2 label-align-left">No Rekam Medis </span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input required type="text" id="txt_no_rekam_medis" name="no_rekam_medis" class="form-control"
                                    readonly>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-form-label col-md-2 col-sm-2 label-align-left">Anamase </span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input required type="text" id="txt_anamase" name="anamase" class="form-control">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-form-label col-md-2 col-sm-2 label-align-left">Tindakan </span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input required type="text" id="txt_tindakan" name="tindakan" class="form-control">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-form-label col-md-2 col-sm-2 label-align-left">Obat </span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input required type="text" id="txt_obat" name="obat" class="form-control">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 ">Status Pemeriksaan</label>
                            <div class="col-md-6 col-sm-6">
                                <select required class="form-control" name="status">
                                    <option value='' disabled selected>Pilih Status Pemeriksaan</option>
                                    <option value="selesai">Selesai</option>
                                    <option value="belum_selesai">Belum Selesai</option>
                                </select>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label class="col-form-label col-md-2 col-sm-2 label-align-left">Biaya Dokter</span>
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <input required type="text" id="txt_biaya_dokter" name="biaya_dokter" class="form-control">
                            </div>

                        </div>

                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-9 col-sm-9  offset-md-3">
                        <a href="<?=base_url()?>index.php/pasienresep" class="btn btn-danger">Back</a>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script>
function checkNoRekam() {
    var value = $("#name_patient").val();
    var data_name = $("#name_patient option:selected").attr('data-name');
    if (value == null) {
        alert('PILIH PASIEN DULU');
    } else {
        $("#txt_patient_name").val(data_name);
        $("#txt_no_rekam_medis").val(value);
    }

}
</script>