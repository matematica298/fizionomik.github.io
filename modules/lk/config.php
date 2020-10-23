<?php
/*

		Автор: FlipFlare ( https://vk.com/iv.trufanov )
	
		По любым вопросам обращайтесь к автору данного кода https://vk.com/iv.trufanov
*/
error_reporting( E_ERROR );

///////////////////////////
///         CORE        ///
///////////////////////////
$core = array(
    "api_key"=> "BcToX3sbwlTNyBkcHB9Yqb0rpQdiSVH58iko", //Ключ для скрипта авторизации
);
$mysql = array(
    "db"=>"u264944_six", //Имя бд
    "host"=>"localhost", //Адресс бд
    "user" => "u264944_six", //Юзер бд
    "pass" => "F8k0I7w3" //Пороль бд
);
$curs = array(
    "coins"=>"1000",//Сколько коинов стоит одна монета (рубль)
	"start_coins"=>"10000" //Начально е кол-во коинов
);
$unban_data = array(
    "cost"=>"50", //Первоначальная цена разбана
	"cost_plus"=>"50" //+ к последующим ценам
);
$perms = array( 
    "skin"=>"64", //Разрешение обычного скина
    "cloak"=>"64", //Разрешение обычного плаща
    "hd_skin" => "1024", //Разрешение HD скина
    "hd_cloak" => "1024" //Разрешение HD плаща
);

///////////////////////////
///       ПЕРИОДЫ       ///
///////////////////////////
$periods = array( //Периоды на которые можно брать привелегию
  array(
   "title" => "30 ДНЕЙ", //Имя
   "id" => 1, //ID
   "time" => 30, //Время в днях
   "costx" => 1, //Скидка
  ),
  array(
   "title" => "60 ДНЕЙ", 
   "id" => 2,
   "time" => 60, 
   "costx" => 0.8, //Скидка 20%
  ),
  array(
   "title" => "90 ДНЕЙ",
   "id" => 3,   
   "time" => 90, 
   "costx" => 0.7, 
  ),
  array(
   "title" => "НАВСЕГДА", 
   "id" => 4,
   "time" => -1, 
   "costx" => 1, 
  ),
);
///////////////////////////
///        СЕРВЕРА      ///
///////////////////////////
$servers = array( //Сервера
 "SpaceWay" => array (
   "title" => "SpaceWay", //Имя сервера
   "db_host" => $mysql['host'], //БД ХОСТЬ
   "db_user" => $mysql['user'], //БД ЮЗЕР
   "db_pass" => $mysql['pass'], //БД ПАССВОРД
   "db_u264944_six" => "galaxy", //ИМЯ БД
   "rcon_host" => "localhost", //РКОН ХОСТ
   "rcon_port" => 25590, //РКОН ПОРТ
   "rcon_password" => "302067zx", //РКОН ПОРОЛЬ
   "rcon_timeout" => 3, //НЕ ТРОГАТЬ
  )
);
///////////////////////////
///        ДОНАТЫ       ///
///////////////////////////
$donates = array(//Донаты
"vip" => array (
 "title" => "VIP", //Название доната
 "pex" => "vip", //Имя в плагине (Pex)
 "cost" => 50, //Цена
 "price" => 0, //Скидка
 "cloak"=> true, //Можно ли ставить плащ
 "hd_skin" => false, //Можно ли ставить HD скин
 "hd_cloak" => false //Можно ли ставить HD плащ
),
"premium" => array (
 "title" => "PREMIUM", 
 "pex" => "premium", 
 "cost" => 100,
 "price" => 0, 
 "cloak"=> true, 
 "hd_skin" => false, 
 "hd_cloak" => false 
),
"elite" => array (
 "title" => "ELITE", 
 "pex" => "elite", 
 "cost" => 200,
 "price" => 0, 
 "cloak"=> true, 
 "hd_skin" => true, 
 "hd_cloak" => true 
),
"luxury" => array (
 "title" => "LUXURY", 
 "pex" => "luxury", 
 "cost" => 400,
 "price" => 0,
 "cloak"=> true, 
 "hd_skin" => true, 
 "hd_cloak" => true 
),
"extra" => array (
 "title" => "EXTRA",
 "pex" => "extra",  
 "cost" => 800,
 "price" => 0,
 "cloak"=> true, 
 "hd_skin" => true, 
 "hd_cloak" => true 
),
"sponsor" => array (
 "title" => "SPONSOR",
 "pex" => "sponsor", 
 "cost" => 1500, 
 "price" => 0,
 "cloak"=> true, 
 "hd_skin" => true, 
 "hd_cloak" => true 
)
);
///////////////////////////
///        КЕЙСЫ        ///
///////////////////////////
$everyday_case_name = "Ежедневный"; //Имя ежедневного кейса
$case_coins_dableprice = 1200; //Результат произведение этого числа и цены = цена кейса в коинах
$cases = array(
    "SpaceWay" => array (
        "everyday" => array (
        "title" => "Ежедневный", //Имя кейса
        "name" => "everyday", //Название кейса в плагине
        "cost" => 2, //Цена в рублях
        "img" => "everyday.png", //Картинка кейса
        "img_kit"=> "everyday_kit.png"
		),
		"dirt" => array (
        "title" => "Обыкновенный", 
        "name" => "dirt", 
        "cost" => 7, 
        "img" => "dirt.png",
        "img_kit"=> "dirt.png"
		),
		"advent" => array (
        "title" => "Кристальный", 
        "name" => "advent", 
        "cost" => 12, 
        "img" => "advent.png",
        "img_kit"=> "advent_kit.png"
		),
		"nano" => array (
        "title" => "Изумрудный", 
        "name" => "nano", 
        "cost" => 25, 
        "img" => "nano.png",
        "img_kit"=> "nano_kit.png"
		),
		"space" => array (
        "title" => "Космический", 
        "name" => "space", 
        "cost" => 59, 
        "img" => "space.png",
        "img_kit"=> "space_kit.png"
		),
		"quant" => array (
        "title" => "СОКРОВИЩНИЦА", 
        "name" => "quant", 
        "cost" => 95, 
        "img" => "quant.png",
        "img_kit"=> "quant_kit.png"
		)
    )
);
?>