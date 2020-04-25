<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
            <form class="login100-form" method="POST" action="<?= base_url('auth/forgotpassword'); ?>">
                <?= $this->session->flashdata('message'); ?>
                <span class="login100-form-title p-b-20">
                    Forgot Password
                </span>
                <span class="login100-form-avatar">
                    <img src="<?= base_url('assets/login/'); ?>images/logo.png" alt="AVATAR">
                </span>
                <div class="wrap-input100 m-t-20 m-b-15">
                    <input class="input100" type="text" name="email" id="email" placeholder="Masukan email anda" value="<?= set_value('email'); ?>">
                </div>
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                <div class="container-login100-form-btn p-t-30">
                    <button class="login100-form-btn" type="submit">
                        Reset Password
                    </button>
                </div>

                <ul class="login-more p-t-80">
                    <li>
                        <span class="txt1">
                            Back to
                        </span>

                        <a href="<?= base_url('auth'); ?>" class="txt2">
                            Login
                        </a>
                        </>
                </ul>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>