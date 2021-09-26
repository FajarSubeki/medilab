<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">User Form
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4 pt-0 pb-2">
                    <br />
                    <div id="pesan_validasi" style="background-color:#FCC; padding:5px; ">
                    </div>
                    <form id='register_user'>
                      <div class="form-group row">
                            <label class="col-form-label col-md-2 col-sm-2 label-align-left">Nama user </span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="txt_nama" name="txt_nama" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2 col-sm-2 label-align-left">Username </span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="txt_username" name="txt_username" class="form-control" readonly>
                            </div>
                            <div class="col-md-2 col-sm-2 ">
                                <a href="javascript:(0)"><img src="<?=base_url()?>assets/img/refresh.png" width="25"
                                        height="25" onclick="check_user()"></a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2 col-sm-2 label-align-left">Level Akses </span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select name="opt_role_askes" class="form-control" id="role" onchange="check_user()">
                                    <option value='' disabled selected>-- Level Akses --</option>
                                    <option value="1">Admin User</option>
                                    <option value="2">Admin MR</option>
                                    <option value="3">Dokter</option>
                                    <option value="4">Pendaftaran</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2 col-sm-2 label-align-left">No. Hp </span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="txt_no_hp" id="txt_no_hp" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2 col-sm-2 label-align-left">Email</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="email" name="txt_email" id="txt_email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2 col-sm-2 label-align-left">Password</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="password" name="txt_password" id="txt_ password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2 col-sm-2 label-align-left">Konfirmasi Password </span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="password" name="txt_konfirm_password" id="txt_konfirm_password"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group row">
                            <div class="offset-md-2">
                                <a class="btn btn-danger" href="<?=base_url()?>index.php/user">Back</a>
                                <button class="btn btn-warning" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>


                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
window.onload = function() {
    $("#pesan_validasi").hide();

};

function check_user() {
    var isi = "";
    var value = $("#role").val();
    if (value == null) {
        alert('ROLE BELUM DI PILIH .. ');
    } else {

        if (value == 1) {
            isi = 'ADMUSR';
        } else if (value == 2) {
            isi = 'ADMMR';
        } else if (value == 3) {
            isi = 'DR-';
        } else if (value == 4) {
            isi = 'PD-';
        }

        $.ajax({
            type: 'POST',
            data: {
                role: value
            },
            url: "<?php echo base_url();?>index.php/user/check_user_auto",
            success: function(data) {
                console.log(data);
                var new_username = isi + data;
                $("#txt_username").val(new_username);
            } // tutup data response
        });
    }
}

$('#register_user').submit(function(e) {
    e.preventDefault();
    var data_input = $('#register_user').serialize();
    $.ajax({
        type: 'POST',
        data: data_input,
        url: "<?php echo base_url();?>index.php/user/proses_simpan",
        success: function(data) {
            // memecah respon dari controller
            var status_validasi = data.substring(0, 7);
            var message = data.substring(7); //SCRIPT DILANJUT KE HALAMAN BERIKUTNYA
            if (status_validasi == "INVALID") {
                //tampilkan pesan pada div #pesan_validasi
                $('#pesan_validasi').html(message).show();
            } // tutup case validasi INVALID
            else if (status_validasi == "VALID") {
                //tampilkan noticed sukses
                alert('USER BERHASIL DI DAFTARKAN .. ');
                //rediect ke halaman lain
                window.location = "<?php echo base_url();?>index.php/user";
            } // tutup case validasi VALID

        } // tutup data response
    }); // tutup ajax
}); // tutup JQUERY
</script>