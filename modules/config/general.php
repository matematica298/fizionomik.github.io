<?PHP
//Данные для подключения к БД
define ("DBHOST", "localhost");
define ("DBNAME", "u264944_six");
define ("DBUSER", "u264944_six");
define ("DBPASS", "F8k0I7w3");

$core = array(
    "api_key"=> "BcToX3sbwlTNyBkcHB9Yqb0rpQdiSVH58iko", //Ключ для скрипта авторизации
);
$perms = array( 
    "skin"=>"64", //Разрешение обычного скина
    "cloak"=>"64", //Разрешение обычного плаща
    "hd_skin" => "1024", //Разрешение HD скина
    "hd_cloak" => "1024" //Разрешение HD плаща
);
$curs = array(
    "coins"=>"1000",//Сколько коинов стоит одна монета (рубль)
	"start_coins"=>"10000" //Начально е кол-во коинов
);

//Functions
//Склонение слов
function declension_words($n,$words){
    return ($words[($n=($n=$n%100)>19?($n%10):$n)==1?0 : (($n>1&&$n<=4)?1:2)]);
}
?>