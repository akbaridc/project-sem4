<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
            <form class="login100-form validate-form" method="POST" action="<?= base_url('auth/register'); ?>">
                <span class="login100-form-title p-b-20">
                    Registration Babeo
                </span>
                <span class="login100-form-avatar">
                    <img src="<?= base_url('assets/login/'); ?>images/logo.png" alt="AVATAR">
                </span>

                <div class="wrap-input100  m-t-20 m-b-15">
                    <input class="input100" type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" value="<?= set_value('nama'); ?>">
                </div>
                <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>

                <div class="wrap-input100  m-t-20 m-b-15">
                    <input class="input100" type="text" name="email" id="email" placeholder="Masukkan Email" value="<?= set_value('email'); ?>">
                </div>
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>

                <div class="wrap-input100  m-t-20 m-b-15">
                    <input class="input100" type="number" name="telepon" id="telepon" placeholder="Masukkan No. Telepon" value="<?= set_value('telepon'); ?>">
                </div>
                <?= form_error('telepon', '<small class="text-danger">', '</small>'); ?>

                <div class="wrap-input100  m-t-20 m-b-15">
                    <input class="input100" type="text" name="username" id="username" placeholder="Masukkan Username" value="<?= set_value('username'); ?>">
                </div>
                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>

                <div class="wrap-input100  m-b-15">
                    <input class="input100" type="password" name="password1" id="password1" placeholder="Password Minimal 6 karakter">
                </div>
                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>

                <div class="wrap-input100  m-b-15">
                    <input class="input100" type="password" name="password2" id="password2" placeholder="Ulangi Password">
                </div>

                <div class="container-login100-form-btn p-t-30">
                    <button class="login100-form-btn" type="submit">
                        Login
                    </button>
                </div>

                <ul class="login-more p-t-80">
                    <li class="m-b-8">
                        <span class="txt1">
                            Forgot
                        </span>

                        <a href="<?= base_url('auth/forgotpassword'); ?>" class="txt2">
                            Password?
                        </a>
                    </li>

                    <li>
                        <span class="txt1">
                            Don’t have an account?
                        </span>

                        <a href="<?= base_url('auth'); ?>" class="txt2">
                            Sign In
                        </a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>