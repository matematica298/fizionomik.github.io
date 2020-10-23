<?PHP
$shop = array(
    "url"=> "/shop",
    "cats" => array( 
        "kits" => array (
            "title" => "Наборы ресурсов", 
			"id" => "kits",
			"kits" => array (
			    "pro" => array (
				    "title" => "Pro",
					"id" => "pro",
					"cost" => ceil(119)
				),
				"advanced" => array (
				    "title" => "Advanced",
					"id" => "advanced",
					"cost" => ceil(239)
				),
				"ultimate" => array (
				    "title" => "Ultimate",
					"id" => "ultimate",
					"cost" => ceil(490)
				)
			)
        ),
		"items" => array (
            "title" => "Магазин предметов",
			"id" => "items"
        ),
		"rg" => array (
            "title" => "Аренда региона",
			"id" => "rg",
			"cmd" => "scl load",
			"schematic_dir" => "town/",
			"cmd_hologram" => "hd reload",
			"maps" => array (
			  "DTM" => array(
			    "map" => 'https://http://six.u-studio.su/dtm-map/?worldname=world&mapname=surface&zoom=5&x=3052&y=64&z=960'
				)
			),
			"regions" => array (
			  "DTM" => array ( 
			    "town_plot_0_1" => array (
			        "region" => "town_plot_0_1",
					"tp" => "3047 64 937",
					"title" => "Стартовый дом #1",
					"cost_econs" => 40000,
					"img" => 'plot_1.png',
					"cost_money" => 10,
					"size" => '41 на 21 на 256 (220000 блоков)',
					"schematic" => "plot_1",
					"args" => "world 3048 0 925",
					"hd" => "town_plot_0_1"
			    ),
				"town_plot_0_2" => array (
			        "region" => "town_plot_0_2",
					"tp" => "3047 64 959",
					"title" => "Стартовый дом #2",
					"cost_econs" => 40000,
					"img" => 'plot_1.png',
					"cost_money" => 10,
					"size" => '41 на 21 на 256 (220000 блоков)',
					"schematic" => "plot_1",
					"args" => "world 3048 0 947",
					"hd" => "town_plot_0_2"
			    ),
				"town_plot_0_3" => array (
			        "region" => "town_plot_0_3",
					"tp" => "3047 64 981",
					"title" => "Стартовый дом #3",
					"cost_econs" => 40000,
					"img" => 'plot_1.png',
					"cost_money" => 10,
					"size" => '41 на 21 на 256 (220000 блоков)',
					"schematic" => "plot_1",
					"args" => "world 3048 0 969",
					"hd" => "town_plot_0_3"
			    ),
				"town_plot_0_4" => array (
			        "region" => "town_plot_0_4",
					"tp" => "3047 64 1002",
					"title" => "Стартовый дом #4",
					"cost_econs" => 40000,
					"img" => 'plot_1.png',
					"cost_money" => 10,
					"size" => '41 на 21 на 256 (220000 блоков)',
					"schematic" => "plot_1",
					"args" => "world 3048 0 991",
					"hd" => "town_plot_0_4"
			    ),
				"town_plot_1_1" => array (
			        "region" => "town_plot_1_1",
					"tp" => "3110 64 936",
					"title" => "Модерн дом #1",
					"cost_econs" => 80000,
					"img" => 'plot_2.png',
					"cost_money" => 15,
					"size" => '65 на 27 на 256 (450000 блоков)',
					"schematic" => "plot_2",
					"args" => "world 3095 0 925",
					"hd" => "town_plot_1_1"
			    ),
				"town_plot_1_2" => array (
			        "region" => "town_plot_1_2",
					"tp" => "3110 64 964",
					"title" => "Модерн дом #2",
					"cost_econs" => 80000,
					"img" => 'plot_2.png',
					"cost_money" => 15,
					"size" => '65 на 27 на 256 (450000 блоков)',
					"schematic" => "plot_2",
					"args" => "world 3095 0 953",
					"hd" => "town_plot_1_2"
			    ),
				"town_plot_1_3" => array (
			        "region" => "town_plot_1_3",
					"tp" => "3110 64 992",
					"title" => "Модерн дом #3",
					"cost_econs" => 80000,
					"img" => 'plot_2.png',
					"cost_money" => 15,
					"size" => '65 на 27 на 256 (450000 блоков)',
					"schematic" => "plot_2",
					"args" => "world 3095 0 981",
					"hd" => "town_plot_1_3"
			    ),
				"town_plot_2_1" => array (
			        "region" => "town_plot_2_1",
					"tp" => "3043 64 893",
					"title" => "Продвинутый дом #1",
					"cost_econs" => 120000,
					"img" => 'plot_3.png',
					"cost_money" => 20,
					"size" => '60 на 40 на 256 (615000 блоков)',
					"schematic" => "plot_3",
					"args" => "world 3044 0 876",
					"hd" => "town_plot_2_1"
			    ),
				"town_plot_2_2" => array (
			        "region" => "town_plot_2_2",
					"tp" => "3043 64 851",
					"title" => "Продвинутый дом #2",
					"cost_econs" => 120000,
					"img" => 'plot_3.png',
					"cost_money" => 20,
					"size" => '60 на 40 на 256 (615000 блоков)',
					"schematic" => "plot_3",
					"args" => "world 3044 0 834",
					"hd" => "town_plot_2_2"
			    ),
				"town_plot_3_1" => array (
			        "region" => "town_plot_3_1",
					"tp" => "3072 64 786",
					"title" => "Дом-база #1",
					"cost_econs" => 200000,
					"img" => 'plot_4.png',
					"cost_money" => 25,
					"size" => '43 на 67 на 256 (740000 блоков)',
					"schematic" => "plot_4",
					"args" => "world 3044 0 766",
					"hd" => "town_plot_3_1"
			    ),
				"town_plot_3_2" => array (
			        "region" => "town_plot_3_2",
					"tp" => "3112 64 787",
					"title" => "Дом-база #2",
					"cost_econs" => 200000,
					"img" => 'plot_4.png',
					"cost_money" => 25,
					"size" => '43 на 67 на 256 (740000 блоков)',
					"schematic" => "plot_4",
					"args" => "world 3094 0 766",
					"hd" => "town_plot_3_2"
			    )
			  )
		    ),
			"biomes"  => array (
			  array(
                "title" => "Стандартный",
                "id" => 0, 
				"code" => 'scrubland',
              ),
			  array(
                "title" => "Лес",
                "id" => 1, 
				"code" => 'forest',
              ),
			  array(
                "title" => "Пустыня",
                "id" => 2, 
				"code" => 'desert',
              ),
			  array(
                "title" => "Равнина",
                "id" => 3, 
				"code" => 'plains',
              ),
			  array(
                "title" => "Болото",
                "id" => 4, 
				"code" => 'swampland',
              ),
			  array(
                "title" => "Джунгли",
                "id" => 5, 
				"code" => 'jungle',
              ),
			  array(
                "title" => "Тайга",
                "id" => 6, 
				"code" => 'taiga',
              )
			),
			"periods" => array (
			  array(
                "title" => "1 неделя", //Имя
                "id" => 0, //ID
				"costx" => 1,
				"type" => 1,
                "time" => 7, //Время в днях
              ),
			  array(
                "title" => "2 недели", //Имя
                "id" => 1, //ID
				"costx" => 2,
				"type" => 1,
                "time" => 14, //Время в днях
              ),
			  array(
                "title" => "3 недели", //Имя
                "id" => 2, //ID
				"costx" => 3,
				"type" => 1,
                "time" => 21, //Время в днях
              ),
			  array(
                "title" => "1 месяц (30 дней)", //Имя
                "id" => 3, //ID
				"costx" => 4,
				"type" => 1,
                "time" => 30, //Время в днях
              ),
			  array(
                "title" => "1 неделя", //Имя
                "id" => 4, //ID
				"costx" => 1,
				"type" => 2,
                "time" => 7, //Время в днях
              ),
			  array(
                "title" => "2 недели", //Имя
                "id" => 5, //ID
				"costx" => 2,
				"type" => 2,
                "time" => 14, //Время в днях
              ),
			  array(
                "title" => "3 недели", //Имя
                "id" => 6, //ID
				"costx" => 3,
				"type" => 2,
                "time" => 21, //Время в днях
              ),
			  array(
                "title" => "1 месяц (30 дней)", //Имя
                "id" => 7, //ID
				"costx" => 4,
				"type" => 2,
                "time" => 30, //Время в днях
              )
			)
        ),
		"tc" => array (
            "title" => "Исследования и аспекты",
			"id" => "rg"
        )
    )
);