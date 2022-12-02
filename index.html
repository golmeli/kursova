<?php
require_once __DIR__ . '/boot.php';
//Отправка ID test
session_abort();
session_start();



?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    alert(<?php echo $_SESSION['user_id'] ?>)
	function dologout(){
		$.ajax({
    method: "POST",
    url: "/Карта англиского языка/php/do_logout.php",
    data: {

    }
    })
    .done(function(response) {
     
    })
	}
</script>

<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Карта англиского языка/css/style.css">
    <link rel="stylesheet" href="/Карта англиского языка/css/btn.css">
    <title>CardWords</title>
</head>
<body>

    <div class="header">
        <div class="head">
            <div class="logo">
            <h1 class="logotip">MemoriZe</h1>
            </div>
            <div class="sigIn">
				<?php
                if(!check_auth())
                {
                    // Получим данные пользователя по сохранённому идентификатору
                $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `ID` = :id");
                $stmt->execute(['id' => $_SESSION['user_id']]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                
				if($user)
				{
					print_r('<button class="btnSigIn" onclick="dologout()">Выйти</button>');
				}
				else{
					print_r('<button class="btnSigIn">Войти2</button>');
				}
            }
				?>
            
            </div>
        </div>
    </div>
    <div class="wrap" id="wrap1">
        <div class="card">
          <div class="front"><span>hello</span></div>
          <div class="back"><span>Привет</span></div>
        </div>
      </div>
      <div class="btn" id="btnAdd">
        <button class="openForm" id="openForm">+</button>
      </div>
        <div class="blockcentr" style="display: block;">
            <div class="formavvoda">
                <div class="rain">
                    <div class="border start">
                        <center><label for="frontend">Передняя сторона карточки</label><br>
                        <input name="frontend" type="text" placeholder=""/><br>
                        <label for="backend">Задняя сторона карточки</label><br>
                        <input name="backend" type="text" /><br>
                        <input  class="add" id="ButtonAdd" type="submit" value="Добавить"/></center>
                    </div>
                </div>
            </div>
    </div>
    <script src="/Карта англиского языка/js/js.js"></script>
    <div class="tytoknoall"><div class="blockall"></div></div>
	
</body>
    
</html>