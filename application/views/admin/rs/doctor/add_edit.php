<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Doctor Form
                                <?php if($dokter) { echo "Edit"; } else { echo "Registration"; } ?></h6>
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
                        action="<?=base_url()?>index.php/dokter/add_edit_save/<?php if($dokter) { echo $dokter[0]->kode_dokter; } ?>"
                        enctype="multipart/form-data">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 ">Kode Dokter</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input readonly type="text" class="form-control" placeholder="Kode Dokter" name="kode"
                                    value="<?php if($dokter) { echo $dokter[0]->kode_dokter; } else { echo $kode_dk; } ?>"
                                    <?php if($dokter) { echo "readonly"; }?>>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">No Izin</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" placeholder="No Izin" name="no_izin"
                                    value="<?php if($dokter) { echo $dokter[0]->no_izin; }?>">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Nama Dokter</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" placeholder="Nama Dokter" name="nama"
                                    value="<?php if($dokter) { echo $dokter[0]->nama_dokter; } ?>">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Spesialis</label>
                            <div class="col-md-9 col-sm-9 ">
                                <select class="form-control" name="sps">
                                    <option value='' disabled selected>Pilih Spesialis Dokter</option>
                                    <?php foreach($data_sps_dokter as $sps) { ?>
                                    <option value="<?=$sps->kode_spesialis?>"
                                        <?php if($dokter != '') { if($sps->kode_spesialis == $dokter[0]->kode_spesialis){ echo "selected"; }} ?>>
                                        <?=$sps->bidang_spesialis?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Status Dokter</label>
                            <div class="col-md-9 col-sm-9 ">
                                <select class="form-control" name="status">
                                    <option value='' disabled selected>Pilih Status Dokter</option>
                                    <option value="active"
                                        <?php if($dokter != '') { if ($dokter[0]->status_dokter == 'active'){ echo "selected"; } } ?>>
                                        Active</option>
                                    <option value="non-active"
                                        <?php if($dokter != '') { if ($dokter[0]->status_dokter == 'non-active'){ echo "selected"; }} ?>>
                                        Non Active</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Tanggal Lahir</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="tgl_lahir"
                                    value="<?php if($dokter) { echo $dokter[0]->tanggal_lahir; } ?>">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Tanggal Join</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="tgl_join"
                                    value="<?php if($dokter) { echo $dokter[0]->tgl_join; } ?>">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Tempat Lahir</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir"
                                    value="<?php if($dokter) { echo $dokter[0]->tempat_lahir; } ?>">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Alamat</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" placeholder="Alamat" name="alamat"
                                    value="<?php if($dokter) { echo $dokter[0]->alamat_tinggal; } ?>">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">No HP</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" placeholder="No HP" name="hp"
                                    value="<?php if($dokter) { echo $dokter[0]->no_hp; } ?>">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Jenis Kelamin</label>
                            <div class="col-md-9 col-sm-9 ">
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="flat" value="l" checked name="jk"
                                            <?php if($dokter) { if($dokter[0]->jenis_kelamin == 'L') { echo "checked"; } } ?>>
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="flat" name="jk" value="p"
                                            <?php if($dokter) { if($dokter[0]->jenis_kelamin == 'P') { echo "checked"; } } ?>>
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Upload Foto</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="file" class="form-control" name="foto">
                            </div>
                        </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-9 col-sm-9  offset-md-3">
                        <a href="<?=base_url()?>index.php/dokter" class="btn btn-danger">Back</a>
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