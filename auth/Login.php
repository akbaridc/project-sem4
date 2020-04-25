<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
            <form class="login100-form" method="POST" action="<?= base_url('auth'); ?>">
                <?= $this->session->flashdata('message'); ?>
                <span class="login100-form-title p-b-20">
                    Welcome Babeo
                </span>
                <span class="login100-form-avatar">
                    <img src="<?= base_url('assets/login/'); ?>images/logo.png" alt="AVATAR">
                </span>
                <div class="wrap-input100 m-t-20 m-b-15">
                    <input class="input100" type="text" name="username" id="username" placeholder="Username" value="<?= set_value('username'); ?>">
                </div>
                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                <div class="wrap-input100 m-b-15">
                    <input class="input100" type="password" name="password" id="password" placeholder="Password">
                </div>
                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
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

                        <a href="<?= base_url('auth/register'); ?>" class="txt2">
                            Sign In
                        </a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>