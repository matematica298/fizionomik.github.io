<?php
//1 - ITEM, 2 - ECON, 3 - MONEY
$cases = array( //кейсы
 "Galaxy" => array (
        array(
           "title" => "Камень", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 64,
           "id" => 1
        ),
		array(
           "title" => "Блок с травой", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 64,
           "id" => 2
        ),
		array(
           "title" => "Дуб", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 64,
           "id" => 17
        ),
		array(
           "title" => "Ель", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 64,
           "id" => '17:1'
        ),
		array(
           "title" => "Берёза", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 64,
           "id" => '17:2'
        ),
		array(
           "title" => "Тропическое дерево", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 64,
           "id" => '17:3'
        ),
		array(
           "title" => "Гравий", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 64,
           "id" => 13
        ),
		array(
           "title" => "Губка", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => 19
        ),
		array(
           "title" => "Стекло", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 32,
           "id" => 20
        ),
		array(
           "title" => "Шерсть", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 16,
           "id" => 35
        ),
		array(
           "title" => "Алмаз", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => 264
        ),
		array(
           "title" => "Железный слиток", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 16,
           "id" => 265
        ),
		array(
           "title" => "Золотой слиток", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => 266
        ),
		array(
           "title" => "Медный слиток", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 16,
           "id" => 4111
        ),
		array(
           "title" => "Оловянный слиток", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 16,
           "id" => '4111:1'
        ),
		array(
           "title" => "Бронзовый слиток", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => '4111:2'
        ),
		array(
           "title" => "Слиток закалённого железа", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => '4111:3'
        ),
		array(
           "title" => "Слиток урана", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 4,
           "id" => '4303:11'
        ),
		array(
           "title" => "Уголь", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 32,
           "id" => 263
        ),
		array(
           "title" => "Лазурит", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 16,
           "id" => '351:4'
        ),
		array(
           "title" => "Красная пыль", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 32,
           "id" => 331
        ),
		array(
           "title" => "Звезда Ада", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 399
        ),
		array(
           "title" => "Кожа", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => 334
        ),
		array(
           "title" => "Призвать существо - Житель", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '383:120'
        ),
		array(
           "title" => "Призвать существо - Курица", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '383:93'
        ),
		array(
           "title" => "Призвать существо - Овца", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '383:91'
        ),
		array(
           "title" => "Призвать существо - Корова", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '383:92'
        ),
		array(
           "title" => "Призвать существо - Свинья", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '383:90'
        ),
		array(
           "title" => "Генератор", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 2,
           "id" => 194
        ),
		array(
           "title" => "Солнечная панель", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '194:3'
        ),
		array(
           "title" => "Ветрогенератор", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '194:4'
        ),
		array(
           "title" => "Основной корпус механизма", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 202
        ),
		array(
           "title" => "Продвинутый корпус механизма", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '202:12'
        ),
		array(
           "title" => "Электропечь", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '202:2'
        ),
		array(
           "title" => "Дробитель", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '202:3'
        ),
		array(
           "title" => "Экстрактор", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '202:4'
        ),
		array(
           "title" => "Компрессор", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '202:5'
        ),
		array(
           "title" => "Личный сейф", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 209
        ),
		array(
           "title" => "Алмазный бур", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 4147
        ),
		array(
           "title" => "Электропила", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 4149
        ),
		array(
           "title" => "Резина", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 16,
           "id" => 4097
        ),
		array(
           "title" => "Саженец гевеи", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 4,
           "id" => 177
        ),
		array(
           "title" => "Улучшенная солнечная панель", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 228
        ),
		array(
           "title" => "Кристалл истинного кварца", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => 4341
        ),
		array(
           "title" => "Изменчивый кристалл", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => '4341:7'
        ),
		array(
           "title" => "Вычислительный пресс для высекателя", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '4341:13'
        ),
		array(
           "title" => "Инженерный пресс для высекателя", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '4341:14'
        ),
		array(
           "title" => "Логический пресс для высекателя", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '4341:15'
        ),
		array(
           "title" => "Кремниевый пресс для высекателя", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '4341:19'
        ),
		array(
           "title" => "Зарядник", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 247
        ),
		array(
           "title" => "Высекатель", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 245
        ),
		array(
           "title" => "МЭ сундук", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 410
        ),
		array(
           "title" => "Пасека", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 4,
           "id" => 471
        ),
		array(
           "title" => "Сундук пчеловода", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 2,
           "id" => 472
        ),
		array(
           "title" => "Анализатор пчёл", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 2
        ),
		array(
           "title" => "Анализатор деревьев", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 4428
        ),
		array(
           "title" => "Проверенная рамка", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 2,
           "id" => 4434
        ),
		array(
           "title" => "Электродвигатель", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 2,
           "id" => 493
        ),
		array(
           "title" => "Эконы", 
		   "type" => 2,
		   "img" => 1,
		   "amount" => 10000,
           "id" => 2
        ),
		array(
           "title" => "Монеты", 
		   "type" => 3,
		   "img" => 1,
		   "amount" => 10,
           "id" => 2
        ),
		
    ),
	"DTM" => array (
        array(
		"title" => "Камень",
		"type" => 1,
		"img" => 1,
		"amount" => 64,
		"id" => '1'
		),
		array(
		"title" => "Блок с травой",
		"type" => 1,
		"img" => 1,
		"amount" => 64,
		"id" => '2'
		),
		array(
		"title" => "Дуб",
		"type" => 1,
		"img" => 1,
		"amount" => 64,
		"id" => '17'
		),
		array(
		"title" => "Ель",
		"type" => 1,
		"img" => 1,
		"amount" => 64,
		"id" => '17:1'
		),
		array(
		"title" => "Берёза",
		"type" => 1,
		"img" => 1,
		"amount" => 64,
		"id" => '17:2'
		),
		array(
		"title" => "Тропическое дерево",
		"type" => 1,
		"img" => 1,
		"amount" => 64,
		"id" => '17:3'
		),
		array(
		"title" => "Гравий",
		"type" => 1,
		"img" => 1,
		"amount" => 64,
		"id" => '13'
		),
		array(
		"title" => "Губка",
		"type" => 1,
		"img" => 1,
		"amount" => 8,
		"id" => '19'
		),
		array(
		"title" => "Стекло",
		"type" => 1,
		"img" => 1,
		"amount" => 32,
		"id" => '20'
		),
		array(
		"title" => "Шерсть",
		"type" => 1,
		"img" => 1,
		"amount" => 16,
		"id" => '35'
		),
		array(
		"title" => "Алмаз",
		"type" => 1,
		"img" => 1,
		"amount" => 8,
		"id" => '264'
		),
		array(
		"title" => "Железный слиток",
		"type" => 1,
		"img" => 1,
		"amount" => 16,
		"id" => '265'
		),
		array(
		"title" => "Золотой слиток",
		"type" => 1,
		"img" => 1,
		"amount" => 8,
		"id" => '266'
		),
		array(
		"title" => "Медный слиток",
		"type" => 1,
		"img" => 1,
		"amount" => 16,
		"id" => '4184'
		),
		array(
		"title" => "Оловянный слиток",
		"type" => 1,
		"img" => 1,
		"amount" => 16,
		"id" => '4184:1'
		),
		array(
		"title" => "Бронзовый слиток",
		"type" => 1,
		"img" => 1,
		"amount" => 8,
		"id" => '4184:2'
		),
		array(
		"title" => "Слиток закалённого железа",
		"type" => 1,
		"img" => 1,
		"amount" => 8,
		"id" => '4184:3'
		),
		array(
		"title" => "Слиток урана",
		"type" => 1,
		"img" => 1,
		"amount" => 4,
		"id" => '4376:11'
		),
		array(
		"title" => "Уголь",
		"type" => 1,
		"img" => 1,
		"amount" => 32,
		"id" => '263'
		),
		array(
		"title" => "Лазурит",
		"type" => 1,
		"img" => 1,
		"amount" => 16,
		"id" => '351:4'
		),
		array(
		"title" => "Красная пыль",
		"type" => 1,
		"img" => 1,
		"amount" => 32,
		"id" => '331'
		),
		array(
		"title" => "Звезда Ада",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => 399
		),
		array(
		"title" => "Кожа",
		"type" => 1,
		"img" => 1,
		"amount" => 8,
		"id" => '334'
		),
		array(
		"title" => "Призвать существо - Житель",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '383:120'
		),
		array(
		"title" => "Призвать существо - Курица",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '383:93'
		),
		array(
		"title" => "Призвать существо - Овца",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '383:91'
		),
		array(
		"title" => "Призвать существо - Корова",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '383:92'
		),
		array(
		"title" => "Призвать существо - Свинья",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '383:90'
		),
		array(
		"title" => "Генератор",
		"type" => 1,
		"img" => 1,
		"amount" => 2,
		"id" => 194
		),
		array(
		"title" => "Солнечная панель",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '194:3'
		),
		array(
		"title" => "Ветрогенератор",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '194:4'
		),
		array(
		"title" => "Основной корпус механизма",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '202'
		),
		array(
		"title" => "Продвинутый корпус механизма",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '202:12'
		),
		array(
		"title" => "Электропечь",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '202:2'
		),
		array(
		"title" => "Дробитель",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '202:3'
		),
		array(
		"title" =>
		"Экстрактор",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '202:4'
		),
		array(
		"title" => "Компрессор",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '202:5'
		),
		array(
		"title" => "Личный сейф",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '209'
		),
		array(
		"title" => "Алмазный бур",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '4220:1'
		),
		array(
		"title" => "Электропила",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '4222:1'
		),
		array(
		"title" => "Резина",
		"type" => 1,
		"img" => 1,
		"amount" => 16,
		"id" => '4170'
		),
		array(
		"title" => "Саженец гевеи",
		"type" => 1,
		"img" => 1,
		"amount" => 4,
		"id" => '177'
		),
		array(
		"title" => "Улучшенная солнечная панель",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '229'
		),
		array(
		"title" => "Кристалл истинного кварца",
		"type" => 1,
		"img" => 1,
		"amount" => 8,
		"id" => '4413'
		),
		array(
		"title" => "Изменчивый кристалл",
		"type" => 1,
		"img" => 1,
		"amount" => 8,
		"id" => '4413:7'
		),
		array(
		"title" => "Вычислительный пресс для высекателя",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '4413:13'
		),
		array(
		"title" => "Инженерный пресс для высекателя",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '4413:14'
		),
		array(
		"title" => "Логический пресс для высекателя",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '4413:15'
		),
		array(
		"title" => "Кремниевый пресс для высекателя",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => '4413:19'
		),
		array(
		"title" => "Зарядник",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => 247
		),
		array(
		"title" => "Высекатель",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => 245
		),
		array(
		"title" => "МЭ сундук",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => 410
		),
		array(
		"title" => "Пасека",
		"type" => 1,
		"img" => 1,
		"amount" => 4,
		"id" => 1635
		),
		array(
		"title" => "Сундук пчеловода",
		"type" => 1,
		"img" => 1,
		"amount" => 2,
		"id" => 1636
		),
		array(
		"title" => "Анализатор пчёл",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => 5923
		),
		array(
		"title" => "Анализатор деревьев",
		"type" => 1,
		"img" => 1,
		"amount" => 1,
		"id" => 5944
		),
		array(
		"title" => "Проверенная рамка",
		"type" => 1,
		"img" => 1,
		"amount" => 2,
		"id" => 5929
		),
		array(
		"title" => "Электродвигатель",
		"type" => 1,
		"img" => 1,
		"amount" => 2,
		"id" => 1657
		),
		array(
		"title" => "Эконы",
		"type" => 2,
		"img" => 1,
		"amount" => 10000,
		"id" => 2
		),
		array(
		"title" => "Монеты",
		"type" => 3,
		"img" => 1,
		"amount" => 10,
		"id" => 2
		),
    ),
	"SkyTechnoMagic" => array (
        array(
           "title" => "Камень", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 64,
           "id" => 1
        ),
		array(
           "title" => "Блок с травой", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 64,
           "id" => 2
        ),
		array(
           "title" => "Дуб", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 64,
           "id" => 17
        ),
		array(
           "title" => "Ель", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 64,
           "id" => '17:1'
        ),
		array(
           "title" => "Берёза", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 64,
           "id" => '17:2'
        ),
		array(
           "title" => "Тропическое дерево", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 64,
           "id" => '17:3'
        ),
		array(
           "title" => "Гравий", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 64,
           "id" => 13
        ),
		array(
           "title" => "Губка", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => 19
        ),
		array(
           "title" => "Стекло", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 32,
           "id" => 20
        ),
		array(
           "title" => "Шерсть", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 16,
           "id" => 35
        ),
		array(
           "title" => "Алмаз", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => 264
        ),
		array(
           "title" => "Железный слиток", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 16,
           "id" => 265
        ),
		array(
           "title" => "Золотой слиток", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => 266
        ),
		array(
           "title" => "Бронзовый слиток", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => '4758:73'
        ),
		array(
           "title" => "Оловянный слиток", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => '4758:65'
        ),
		array(
           "title" => "Медный слиток", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => '4758:64'
        ),
		array(
           "title" => "Слиток закалённого железа", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => '4111:3'
        ),
		array(
           "title" => "Слиток урана", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => '4303:11'
        ),
		array(
           "title" => "Уголь", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 64,
           "id" => 263
        ),
		array(
           "title" => "Лазурит", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 16,
           "id" => '351:4'
        ),
		array(
           "title" => "Красная пыль", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 16,
           "id" => 331
        ),
		array(
           "title" => "Светящаяся пыль", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 16,
           "id" => 348
        ),
		array(
           "title" => "Кожа", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => 334
        ),
		array(
           "title" => "Призвать существо - Житель", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '383:120'
        ),
		array(
           "title" => "Призвать существо - Курица", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '383:93'
        ),
		array(
           "title" => "Призвать существо - Корова", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '383:92'
        ),
		array(
           "title" => "Призвать существо - Свинья", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '383:90'
        ),
		array(
           "title" => "Призвать существо - Овца", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '383:91'
        ),
		array(
           "title" => "Генератор", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 194
        ),
		array(
           "title" => "Солнечная панель", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '194:3'
        ),
		array(
           "title" => "Ветрогенератор", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '194:4'
        ),
		array(
           "title" => "Основной корпус механизма", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 202
        ),
		array(
           "title" => "Продвинутый корпус механизма", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '202:12'
        ),
		array(
           "title" => "Дробитель", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '202:3'
        ),
		array(
           "title" => "Компрессор", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '202:5'
        ),
		array(
           "title" => "Экстрактор", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '202:4'
        ),
		array(
           "title" => "Улучшенная солнечная панель", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 229
        ),
		array(
           "title" => "Сундук пчеловода", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 2,
           "id" => 928
        ),
		array(
           "title" => "Углепластик", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 4,
           "id" => 266
        ),
		array(
           "title" => "Композит", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 4,
           "id" => 4128
        ),
		array(
           "title" => "Алмазный бур", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 4147
        ),
		array(
           "title" => "Электропила", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 4149
        ),
		array(
           "title" => "Саженец гевеи", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 2,
           "id" => 177
        ),
		array(
           "title" => "Анализатор пчёл", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 4995
        ),
		array(
           "title" => "Анализатор деревьев", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 5016
        ),
		array(
           "title" => "Кристалл истинного кварца", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => 4340
        ),
		array(
           "title" => "Изменчивый кристалл", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 8,
           "id" => '4340:7'
        ),
		array(
           "title" => "Вычислительный пресс для высекателя", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '4340:13'
        ),
		array(
           "title" => "Инженерный пресс для высекателя", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '4340:14'
        ),
		array(
           "title" => "Логический пресс для высекателя", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '4340:15'
        ),
		array(
           "title" => "Кремниевый пресс для высекателя", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => '4340:19'
        ),
		array(
           "title" => "Зарядник", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 247
        ),
		array(
           "title" => "Высекатель", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 245
        ),
		array(
           "title" => "МЭ сундук", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 410
        ),
		array(
           "title" => "Пасека", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 927
        ),
		array(
           "title" => "Электродвигатель", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 1,
           "id" => 949
        ),
		array(
           "title" => "Дубовое сито", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 3,
           "id" => 1456
        ),
		array(
           "title" => "Дубовая бочка", 
		   "type" => 1,
		   "img" => 1,
		   "amount" => 3,
           "id" => 1450
        ),
		array(
           "title" => "Эконы", 
		   "type" => 2,
		   "img" => 1,
		   "amount" => 10000,
           "id" => 2
        ),
		array(
           "title" => "Монеты", 
		   "type" => 3,
		   "img" => 1,
		   "amount" => 10,
           "id" => 2
        ),
	)
);
