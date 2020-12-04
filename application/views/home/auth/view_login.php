<div class="col-md-6 d-flex flex-column mx-auto">
    <div class="card flex-grow-1 mb-md-0">
        <div class="card-body">
            <h3 class="card-title">Login</h3>
            <?= $this->session->flashdata('message') ?>
            <form action="<?= base_url('login') ?>" method="post">

                <div class="form-group"><label>Email / Username</label>
                    <input type="text" name="user_email" class="form-control" value="<?= set_value('user_email'); ?>">
                    <?= form_error('user_email', '<small class="text-danger ml-1">', '</small>'); ?>
                </div>
                <div class=" form-group"><label>Password</label>
                    <input type="password" name="password" class="form-control">
                    <?= form_error('password', '<small class="text-danger ml-1">', '</small>'); ?>
                </div>

                <!-- <div class="form-group">
                    <label>Password</label>
                    <div class="input-group" id="show_hide_password">
                      <input class="form-control" type="password">
                      <div class="input-group-addon">
                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                      </div>
                    </div>
                  </div> -->

                <button type="submit" class="btn btn-primary mt-4">Login</button>
                <a class="btn btn-default mt-4 float-right" href='<?= base_url('auth/lupa_password') ?>'>Lupa password ?</a><br>

                <div class="text-center mt-5">
                    <p>Belum punya akun? <a href='<?= base_url('register') ?>'>Daftar akun baru</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if($('#show_hide_password input').attr("type") == "text"){
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass( "fa-eye-slash" );
                $('#show_hide_password i').removeClass( "fa-eye" );
            }else if($('#show_hide_password input').attr("type") == "password"){
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass( "fa-eye-slash" );
                $('#show_hide_password i').addClass( "fa-eye" );
            }
        });
    });
</script>