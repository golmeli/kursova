<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <link rel="stylesheet" href="css/autorize.css">
</head>
<body>
    <article class="conteiner">
        <div class="block">
            <section class="block_item block-item">
                <h2 class="block-item_title">У вас уже есть аккаунт?</h2>
                <button class="block-item_btn" id='signin-btn'>Войти</button>
            </section>
            <section class="block_item block-item">
                <h2 class="block-item_title">У вас нет аккаунта?</h2>
                <button class="block-item_btn" id='signup-btn'>Зарегистрируйтесь</button>
            </section>

            <div class="form-box">
                <form action="php/dologin.php"  method="post" class="form form_siginin">
                    <h3 class="form_title">Вход</h3>
                    <p><input type="text" class="form_input" id="username" name="username" placeholder="Логин"></p>
                    <p><input type="password" class="form_input" id="password" name="password" placeholder="Пароль"></p>
                    <p><button class="form_btn" type="">Войти</button></p>
                    <p><a href="#" class="form_forgot">Востановить пароль</a></p>
                </form>


                <form action="php/siginup.php" class="form form_siginup">
                    <h3 class="form_title">Регистрация</h3>
                    <p><input type="email" class="form_input" placeholder="Email" id="email" name="email"></p>
                    <p><input type="text" class="form_input" placeholder="Логин" id="login" name="login"></p>
                    <p><input type="password" class="form_input" placeholder="Пароль" id="pass" name="pass"></p>
                    <p><input type="password" class="form_input" placeholder="Подтвердите пароль"></p>
                    <p><button class="form_btn form_btn_siginup">Зарегистрироваться</button></p>
                    


                </form>
            </div>
        </div>
    </article>
    <script src="js/autoriz.js" defer></script>
</body>
</html>