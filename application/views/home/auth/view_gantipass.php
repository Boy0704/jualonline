<div class="col-md-6 d-flex flex-column mx-auto">
    <div class="card flex-grow-1 mb-md-0">
        <div class="card-body">
            <h3 class="card-title">Ganti Password</h3>
            <?= $this->session->flashdata('message') ?>

            <form action="<?= base_url("auth/ganti_password?q=$code") ?>" method="post">
                <!-- <div class=" form-group"><label>Password Baru</label>
                    <input type="password" name="password1" class="form-control">
                    <?= form_error('password1', '<small class="text-danger ml-1">', '</small>'); ?>
                </div> -->

                <!-- <div class=" form-group"><label>Konfirmasi Password Baru</label>
                    <input type="password" name="password2" class="form-control">
                    <?= form_error('password2', '<small class="text-danger ml-1">', '</small>'); ?>
                </div> -->
                <?= form_error('password2', '<small class="text-danger ml-1">', '</small>'); ?>
                <?= form_error('password1', '<small class="text-danger ml-1">', '</small>'); ?>
                <div class="form-group">
                    <label>Password Baru</label>
                    <div class="input-group" id="show_hide_password1">
                      <input class="form-control" type="password" name="password1">
                      <div class="input-group-addon" style="padding: 9px;">
                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                      </div>
                    </div>
                  </div>

                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <div class="input-group" id="show_hide_password2">
                      <input class="form-control" type="password" name="password2">
                      <div class="input-group-addon" style="padding: 9px;">
                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                      </div>
                    </div>
                  </div>

                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Ganti Password</button>


            </form>

        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#show_hide_password1 a").on('click', function(event) {
            event.preventDefault();
            if($('#show_hide_password1 input').attr("type") == "text"){
                $('#show_hide_password1 input').attr('type', 'password');
                $('#show_hide_password1 i').addClass( "fa-eye-slash" );
                $('#show_hide_password1 i').removeClass( "fa-eye" );
            }else if($('#show_hide_password1 input').attr("type") == "password"){
                $('#show_hide_password1 input').attr('type', 'text');
                $('#show_hide_password1 i').removeClass( "fa-eye-slash" );
                $('#show_hide_password1 i').addClass( "fa-eye" );
            }
        });

        $("#show_hide_password2 a").on('click', function(event) {
            event.preventDefault();
            if($('#show_hide_password2 input').attr("type") == "text"){
                $('#show_hide_password2 input').attr('type', 'password');
                $('#show_hide_password2 i').addClass( "fa-eye-slash" );
                $('#show_hide_password2 i').removeClass( "fa-eye" );
            }else if($('#show_hide_password2 input').attr("type") == "password"){
                $('#show_hide_password2 input').attr('type', 'text');
                $('#show_hide_password2 i').removeClass( "fa-eye-slash" );
                $('#show_hide_password2 i').addClass( "fa-eye" );
            }
        });
    });
</script>