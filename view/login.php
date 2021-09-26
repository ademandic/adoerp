<?php

require __DIR__ . '/header.php';

$error = end(explode('/', Route::parse_url()));
?>
<div id="main">
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Giriş yap!</h3>
                <?php if($error=='error'): ?>
                <p class="login_error">Kullanıcı adı veya Parola hatalı!</p>
                <?php endif; ?>
                <form action="<?=URL_PREFIX?>/login" method="post">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Kullanıcı Adı" required />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Şifre" required />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Giriş" />
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd">Şifrenimi unuttun?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require __DIR__ . '/footer.php';

?>