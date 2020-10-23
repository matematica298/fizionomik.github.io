<?php
$periods = array( //Периоды на которые можно брать привелегию
  array(
   "title" => "30 дней", //Имя
   "id" => 1, //ID
   "time" => 30, //Время в днях
   "costx" => 1, //Скидка
  ),
  array(
   "title" => "60 дней", 
   "id" => 2,
   "time" => 60, 
   "costx" => 0.8, //Скидка 20%
  ),
  array(
   "title" => "90 дней",
   "id" => 3,   
   "time" => 90, 
   "costx" => 0.7, 
  )
);
$donates = array(//Донаты
"vip" => array (
 "title" => "VIP", //Название доната
 "pex" => "vip", //Имя в плагине (Pex)
 "cost" => 149, //Цена
 "price" => 0, //Скидка
 "cloak"=> true, //Можно ли ставить плащ
 "hd_skin" => false, //Можно ли ставить HD скин
 "hd_cloak" => false, //Можно ли ставить HD плащ
 "chat" => false
),
"premium" => array (
 "title" => "Premium", 
 "pex" => "premium", 
 "cost" => 239,
 "price" => 0, 
 "cloak"=> true, 
 "hd_skin" => true, 
 "hd_cloak" => true,
 "chat" => false
),
"grand" => array (
 "title" => "Grand", 
 "pex" => "grand", 
 "cost" => 429,
 "price" => 0, 
 "cloak"=> true, 
 "hd_skin" => true, 
 "hd_cloak" => true,
 "chat" => false
),
"ultra" => array (
 "title" => "Ultra", 
 "pex" => "ultra", 
 "cost" => 990,
 "price" => 0,
 "cloak"=> true, 
 "hd_skin" => true, 
 "hd_cloak" => true,
 "chat" => true
)
);