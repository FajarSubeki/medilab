<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Pemberian Obat Form</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4 pt-2 pb-2">
                    <form class="form-horizontal form-label-left" method="post"
                        action="<?=base_url()?>index.php/pasienresep/add_obat/<?=$data_pasien[0]['id_data_pemeriksaan']?>">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 ">Nama Obat</label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" id="obat" onkeyup="cekobat()" required class="form-control"
                                    value="<?php if($data_obat) { echo $data_obat[0]->nama_obat; } ?>"
                                    placeholder="Nama Obat" name="nama_obat">
                                <input type="hidden"
                                    id="id_obat" name="id_obat">
                                <input type="hidden" id="id_pemberian_obat" name="id_pemberian_obat"
                                    value="<?php if($data_obat) { echo $data_obat[0]->id; } ?>">
                                <div class="obat-result" id="obat-result"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 ">QTY</label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" required
                                    value="<?php if($data_obat) { echo $data_obat[0]->qty; } ?>" placeholder="QTY"
                                    name="qty">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 ">Status</label>
                            <div class="col-md-6 col-sm-6">
                                <select required class="form-control" required name="status">
                                    <option value='' disabled selected>Pilih Status</option>
                                    <option value="ready"
                                        <?php if($data_obat) { if($data_obat[0]->status == 'ready') { echo "selected"; } }?>>
                                        Ready</option>
                                    <option value="not_ready"
                                        <?php if($data_obat) { if($data_obat[0]->status == 'not_ready') { echo "selected"; } }?>>
                                        Not Ready</option>
                                </select>
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