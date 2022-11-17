<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт</title>
</head>
<body >
    <div class="wrapper">
 
            
        <div class="header">
            <div class="header__label">     
                <a href="#">Звук</a>
            </div>

            <ul class="navbar">
                <li class="navbar__item"><a href="index.php">Главная</a></li>
                <li class="navbar__item"><a href="#part1">О нас</a></li>
                <li class="navbar__item"><a href="#part2">Обратная связь</a></li>
                <li class="navbar__item"><a href="#" id="myBtn" >Вход</a></li>
                <li class="navbar__item"><a href="login.html">Регистрация</a></li>
                <div id="myModal" class="modal" >
        <div class="modal-content">
            <div class="modal_header">
                <span class="close">&times;</span>
                <p class="modal-text">Авторизация</p>
               <form action="auth.php" method="post">
                <input type="text" class="form_control" name="login" id="Login" placeholder="Введите логин"><br> 
                <input type="password" class="form_control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success" type="submit">Войти</button>
                <p class="vhod">У вас нет аккаунт?<a href="ad.php" class="vhod">Регистрация</a></p>
               </form>
            </div>
            
        </div>
    </div>
    <script src="/assets/js/main.js"></script>
            </ul>
        </div>
    </div>
    <main class="main">
       
        <div class="sidebar__left">
            <div class="content">
                <h2 id="part1">Студия звукозаписии IYN-inc</h2>
                <div class="box_content">
                    <p>Iyg-imc 10 лет компания занимает высокие позиции по всей стране</p>
                </div>
                <div class="box_content2">
                    <p>У нас большое количество инструментво для высокого качество записи</p>
                </div>
                <div class="box_content3">
                    <p>Нашей студии доверяют многие артисты</p>
                </div>
                <div class="box_content4">
                    <p>Адрес студии Ленина 6</p>
                    <p>Понедельник - Суббота 10:15 - 22:00</p>
                    <p>Иван Иванов мастер,Сергей Сергеевич помощник</p>
                </div>
            </div>
        </div>
        <div class="middle_content">
            <div class="playlist">
                <h2>Музыка которая была создана в нашей студии</h2>
                <ul class="sound">
                <iframe src="https://8tracks.com/mixes/8108187/player_v3_universal" width="250" height="200" style="border: 0px none;"></iframe>
                    <p class="_8t_embed_p" style="font-size: 11px; line-height: 12px;"></p>
                <iframe src="https://8tracks.com/mixes/4974906/player_v3_universal" width="250" height="200" style="border: 0px none;"></iframe>
                    <p class="_8t_embed_p" style="font-size: 11px; line-height: 12px;"></p>
                <iframe src="https://8tracks.com/mixes/6878124/player_v3_universal" width="250" height="200" style="border: 0px none;"></iframe>
                    <p class="_8t_embed_p" style="font-size: 11px; line-height: 12px;"></p>
                <iframe src="https://8tracks.com/mixes/7186144/player_v3_universal" width="250" height="200" style="border: 0px none;"></iframe>
                    <p class="_8t_embed_p" style="font-size: 11px; line-height: 12px;"></p>
                <iframe src="https://8tracks.com/mixes/7474884/player_v3_universal" width="250" height="200" style="border: 0px none;"></iframe>
                    <p class="_8t_embed_p" style="font-size: 11px; line-height: 12px;"></p>
                <iframe src="https://8tracks.com/mixes/6870453/player_v3_universal" width="250" height="200" style="border: 0px none;"></iframe>
                    <p class="_8t_embed_p" style="font-size: 11px; line-height: 12px;"></p>
                </ul>
                </div>
        </div>
        <div class="forms">
            <div class="forms_obs" id="part2">
                <h2>Оставьте данные мы с вами свяжемся</h2>
                <input type="text" class="form_input" placeholder="Как вас зовут?">
                <input type="text" class="form_input" placeholder="Ваш телефон номер">
                <button class="btn" type="submit">отправить</button>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer_conent">
        <ul >
            <li><a href="index.php">Главное</a></li>
            <li><a href="#part1">О нас</a></li>
            <li><a href="#">Войти</a></li>
            <li><a href="login.html">Регистрация</a></li>
        </ul>
        </div>
        
    </footer>
</body>
</html>