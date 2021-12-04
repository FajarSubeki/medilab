<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0"> 
                                <?php if($services) { echo "Edit"; } else { echo "Tambah"; } ?> Services</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4 pt-2 pb-2">
                    <?php if (validation_errors()){ ?>
                    <div style="width:500px; background-color:#FCC; padding:5px;">
                        <?php echo validation_errors(); ?> <br>
                    </div>
                    <?php } ?>
                    <br />
                    <form class="form-horizontal form-label-left" method="post"
                        action="<?=base_url()?>index.php/services/add_edit_save/<?php if($services) { echo $services[0]->kode_services; } ?>"
                        enctype="multipart/form-data">

                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Kode Services</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input readonly type="text" class="form-control" placeholder="Kode Services" name="kode"
                                    value="<?php if($services) { echo $services[0]->kode_services; } else { echo $kode_sv; } ?>"
                                    <?php if($services) { echo "readonly"; }?>>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Title Services</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" placeholder="Title Services" name="title"
                                    value="<?php if($services) { echo $services[0]->title; } ?>">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Deskripsi Services</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" placeholder="Deskripsi Services" name="description"
                                    value="<?php if($services) { echo $services[0]->description; }?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Upload Foto</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="file" class="form-control" name="foto">
                            </div>
                        </div>
                    
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                                <a href="<?=base_url()?>index.php/services" class="btn btn-danger">Back</a>
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