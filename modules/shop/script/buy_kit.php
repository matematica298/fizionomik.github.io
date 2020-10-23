<script>
function kit_succes(kit_name, server) {
    Swal.fire({
        position: 'top',
        type: 'success',
        text: 'Вам был выдан кит '+kit_name+' на сервере '+server,
        showConfirmButton: false,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        timer: 5500
    })
}
</script>
<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/rcon.php');
//Code
$server = $_GET['server'];
$kit = $_GET['kit_name'];
$s_num = 0; 
$s_num2 = 0;
foreach ($servers as $item) {
	if($item['title']==$server) {
		$s_num++;
	}
}
foreach ($shop['cats']['kits']['kits'] as $item) {
	if($item['id']==$kit) {
		$s_num2++;
	}
}
if($s_num!=1 || $s_num2!=1){
	die('<script>hz();</script>');
}
$names=$mysqli->query("SELECT `players` FROM `server_online` WHERE `server` LIKE '$server'")->fetch_object()->players;
use Thedudeguy\Rcon;
$rcon = new Rcon($servers[$server]['rcon_host'], $servers[$server]['rcon_port'], $servers[$server]['rcon_password'], $servers[$server]['rcon_timeout']);
if (preg_match("/\b".$login."\b/i", $names) && $rcon->connect()) {		
    if ($rcon->connect()) {  
		if ($money<$shop['cats']['kits']['kits'][$kit]['cost']) {
			die('<script>pay_minus()</script>');
		} else {
			$newbal = $money - $shop['cats']['kits']['kits'][$kit]['cost'];
			$setbal = $mysqli->query("UPDATE dle_users SET `money`='$newbal' WHERE name='$login'");
			if($setbal){
				$rcon->sendCommand("kit ".$shop['cats']['kits']['kits'][$kit]['id']." ".$login);
				$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('0','$login','$server','7','за ".$shop['cats']['kits']['kits'][$kit]['cost']." монет','".time()."','Покупка набора <b>".$shop['cats']['kits']['kits'][$kit]['title']."</b> на сервере <b>".$server."</b>')");
				die("<script>kit_succes('".$shop['cats']['kits']['kits'][$kit]['title']."', '".$server."');</script>");
			}
		}
    } else {
	    die("<script>not_connect();</script>");
	}
} else {
	die("<script>not_serverv2();</script>");
}
?>