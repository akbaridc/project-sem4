<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
            <form class="login100-form" method="POST" action="<?= base_url('auth/changePassword'); ?>">
                <?= $this->session->flashdata('message'); ?>
                <span class="login100-form-title">
                    Reset Password for
                </span>
                <h5 class="p-b-40 " style="text-align: center"><?= $this->session->userdata('reset_email'); ?></h5>
                <span class="login100-form-avatar">
                    <img src="<?= base_url('assets/login/'); ?>images/logo.png" alt="AVATAR">
                </span>
                <div class="wrap-input100 m-t-20 m-b-15">
                    <input class="input100" type="password" name="password1" id="password1" placeholder="Masukan password baru">
                </div>
                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                <div class="wrap-input100 m-t-20 m-b-15">
                    <input class="input100" type="password" name="password2" id="password2" placeholder="Ulangi Password">
                </div>
                <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                <div class="container-login100-form-btn p-t-30">
                    <button class="login100-form-btn" type="submit">
                        Change Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>