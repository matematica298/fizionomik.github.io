<?php
/*

		
		ИНФОРМАЦИЯ:
			Мультилист UTF-8
			Автор: Fleynaro(faicraft)
			Сайт http://fleynaro.ru/
			Группа ВК: http://vk.com/fleynaro_prods
		
		ОГРАНИЧЕНИЯ:
			Запрещено использовать весь код или его части в сторонних скриптах без разрешения автора!
			Запрещено любым способом распространять данный PHP файл на других ресурсах, кроме Вашего проекта!
		
		ВНИМАНИЕ!
			Если данный файл не является конфигурационным, то при отсутствии у Вас знаний и навыков
			программирования на языке PHP любое Ваше здесь изменение может привести к нестабильной работе Личного Кабинета.
			Редактируйте данный код только при указании тех. поддержки, оказываемой автором данного скрипта!
		
		По любым вопросам обращайтесь к автору данного кода http://vk.com/fleynaro или в группу ВК http://vk.com/fleynaro_prods
		
	
*/

	
	
	$banlist_cfg = array(
		
		/* СЕРВЕРЫ */
		'server'	=>	array(
			
			//Укажите данные от БД
			array(
				'name'	=> 'LavaTech',
				
				'db'	=> array(
					'host'	=> '127.0.0.1',
					'name'	=> '',
					'user'	=> 'root',
					'pass'	=> '',
					'char'	=> 'utf8',
					
					'tablename'	=>	'bans'
				)
			)/*,
			array(
				'name'	=> 'HiTech',
				
				'db'	=> array(
					'host'	=> '127.0.0.1',
					'name'	=> 'lk',
					'user'	=> 'root',
					'pass'	=> '',
					'char'	=> 'utf8',
					
					'tablename'	=>	'banlist2'
				)
			),
			array(
				'name'	=> 'HiTech 2',
				
				'db'	=> array(
					'link'	=>	1,	//использовать базу сервера "HiTech"
					'tablename'	=>	'banlist2'
				)
			)
			
			*/
			
			
			/*
				Примечания:
				Если у вас несколько серверов, и все они расположены в разных БД, используйте несколько блоков array(...) через запятую для подключения сервера к каждой базе данных(сначала раскомментируйте 2 блока: hitech, hitech 2)
				Если у вас одна база данных, а в ней несколько таблиц, то используйте несколько блоков array(...) с параметром: 'link'	=>	[Порядковый номер сервера]			(См. пример выше, сервер 'HiTech 2')
			*/
		),
		
		/* ТАБЛИЦА */
		'table'	=>	array(
			
			//Колонки
			'column'	=>	array(
				//Имя колонки в БД  |  Имя колонки на русском(допустим HTML)  |  Доступна ли для сортировки |  Доступна ли для поиска	|  Тип отображения(подроб. внизу)	|	Ширина столбца
				array('server_', 	'Сервер', 		true, 	true,	false, 									"10%"),	//используется, если вы хотите отобразить столбик с названием серверов, которые указаны сверху в блоке 'server'
				//array('name', 		'Игрок', 		true, 	true, 	array('as_name', array("{name}", 8)), 	"15%"), //или это, или вариант внизу
				array('name', 		'Игрок', 		true, 	true, 	array('as_html', '<span onclick="banlist.formLinkByClient(\'{col-name}\')">{name}</span>', 'name' => array('as_name', array("{name}", 8))), 	"15%"),
				//array('banner', 	'Забанил',		true, 	true,	array('as_name', array("{name}", 8)), 	"15%"), //или это, или вариант внизу
				array('banner', 	'Забанил',		true, 	true,	array('as_html', '<a href="/user/{col-name}/">{name}</a>', 'name' => array('as_name', array("{name}", 8))), 	"15%"),
				array('reason', 	'Причина', 		true, 	false, 	array('as_name', array("{name}", 10)), 	"20%"),
				array('time', 		'Бан получен', 	true, 	false, 	array('as_time', 1), 					"20%"),
				array('expires', 	'Разбан', 		true, 	false, 	array('as_futureTime', 1), 				"20%"),
				//array('', 			'Ссылка', 		false, 	false, 	array('as_html', "<a onclick='banlist.formLink(\"{col-name}\")'>Link</a>"), "20%"),
				
				
				
				
				/*
					//Тип отображения колонок
					array('as_name', array("{name}", 8))												- отобразить колонку, как никнейм/название. Аргументы: первый - html текст с переменной {name}, второй - макс. длина ника/названия
					array('as_time', 1)																	- отобразить колонку, как пройденное время. Аргумент: во сколько раз секунда меньше хранимой в данной колонке единицы времени
					array('as_futureTime', 1)															- отобразить колонку, как будущее время. Аргумент: во сколько раз секунда меньше хранимой в данной колонке единицы времени
					array('as_html', "<b stlye='color:#fff'>{text}:{key} | {col-name}</b>", 'key'=>5) 	- отобразить колонку, как html текст. Аргументы: html текст с переменной {text}, далее - аргументы с ключем('ключ' => значение, в html коде "текст... {ключ} текст..."). Переменные col-[имя колонки EN] - содержимое колонки(например: {col-name}, {col-id}). Внимание! Ковычки, используемые в html атрибутах, должны быть одинарными: '
					array('as_case', array('<b>{value}</b>', 'рублей', 'рубля', 'рубль'))				- отобразить колонку, как пару "числ.значение-падеж". Аргументы: первый - html текст с числовой переменной {value}, остальные - падежи(родит. множ, родит. единств, имени. ед)
					false																				- отобразить колонку обычным образом
				*/
			),
			
			//Макс. кол-во параметров, по которым можно сортировать
			'sortMax'		=>	3,
			//Сортировка по умолчанию, false - выключить
			'sortDefault'	=>	false, //array('[имя колонки в БД] ASC/DESC'), где ASC - сортировка по возрастающей, DESC - по убывающей. Например: 		'sortDefault'	=>	array('name DESC', 'time ASC'),
			
			//Поиск
			'search'	=>	array(
				
				//Мин./Макс. кол-во символов для поиска
				'input'		=>	array(2, 20),
				//Разрешенные символы
				'symbols'	=>	'а-я a-z 0-9',
				//Через сколько милисекунд(1 сек = 1000 мс) отобразить список записей по запросу
				'update'	=>	300,
				//Поиск по умолчанию, false или '' - выключить
				'default'	=> 	'' //введите запрос, например: 'default'	=> 	'fleynaro'
			)
		
		),
		
		/* ШАБЛОН */
		'template'	=>	array(
			
			//Файл index шаблона
			'index'		=>	'template/index.tpl',
			//КОДИРОВКА ВАШЕГО САЙТА. utf-8 или windows-1251
			'charset'	=>	'utf-8',
			//Ширина листа
			'width'		=>	'600px'
		
		),
		
		/* ВЫВОД */
		'output'	=>	array(
			
			//Встраивание в шаблон методом include. 'auto' - определяется автоматически, true - всегда да, false - всегда нет
			'including'				=>	'auto',
			
			//AJAX прокрутка. Настройки блока
			'ajaxScrolling'			=>	array(
				//Включить ajax прокрутку
				'enable'		=>	false
				
			),
			
			//Макс. кол-во записей на страницу
			'maxRowsOnPage'			=> 	20,
			//Страница по дефолту
			'defaultPage'			=>  1,
			//Дефолтные значения по GET/POST запросу(например, открытие страницы мультилиста через ?page=3, или сортировка через ?sort=32&sortType=16)
			'showByRequest'			=>	false,
			//Выделить строчку среди других по следующему критерию
			'selectRow'			=>	array(
				//Номер колонки от 0. false - все колонки.
				'column'		=>	1,
				//Значение по умолчанию. false - нет значения по умолчанию.
				'default'		=> 	false,
				//GET запрос. Укажите здесь название ключа(например, selectName), который будет выглядеть так: ?[ключ]=[значение](например, ?selectName=Fleynaro). false - не выделять через запрос
				'keyName'		=>	'selectName'
			),
			//Отключить верхние селекторы
			'topSelectors'			=>	true,
			//Выбор кол-ва отображаемых блоков за раз. Укажите здесь число n, чтобы предоставить пользователю выбор из n вариантов, где выбранный вариант отобразит n блоков, то есть n * maxRowsOnPage строк. Если 0, то нет выбора кол-ва выгружаемых блоков за раз.
			'rowsOnPageSelector'	=>	3,
			//Выбор кол-ва отображаемых строк. false - выключить.
			'rowsOnPageSelectorEx'	=>	array(30, 50, 100),
			//Выбор кол-ва отображаемых строк(верхний параметр) по дефолту. -1 - не выбирать
			'rowsOnPageSelectorDef'	=>	-1,
			//Кол-во милисекунд(1 сек = 1000 мс), через которое будет происходить автообновление текущей страницы банлиста. 0 - выключить автообновление
			'autoupdate'			=>	30000
			
		),
		
		/* ПОСТРАНИЧНАЯ НАВИГАЦИЯ */
		'pageNav'	=>	array(
			
			//Макс. кол-во кнопок(ук. нечетное кол-во)
			'maxButtons'	=>	7
		
		)
		
	
	);

?>