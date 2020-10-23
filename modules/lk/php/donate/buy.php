<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/rcon.php');
//Vars
$donate = $_POST['donate'];
$server = $_POST['server'];
$period = $_POST['period'];
?>
<script>
function buy_success2() {
    Swal.fire({
        position: 'top',
        type: 'success',
        title: 'Покупка успешно совершена!',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        showConfirmButton: false,
        timer: 1500
    })
}
function buy_success3() {
    Swal.fire({
        position: 'top',
        type: 'success',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Донат успешно продлён!',
        showConfirmButton: false,
        timer: 1500
    })
}
</script>
<?php
//Code
$balance=$mysqli->query("SELECT `money` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->money;
$don_1 = "donate_".$server;
$don_t = "donate_time_".$server;
$donate_1=$mysqli->query("SELECT `donate_".$server."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$don_1;
$donate_t=$mysqli->query("SELECT `donate_time_".$server."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$don_t;
$price = $donates[$donate]['cost'] * $donates[$donate]['price'] * $periods[$period]['costx'] *  $periods[$period]['id'];
$cost = ceil($donates[$donate]['cost'] * $periods[$period]['costx'] *  $periods[$period]['id'] - $price);
use Thedudeguy\Rcon;
$rcon = new Rcon($servers[$server]['rcon_host'], $servers[$server]['rcon_port'], $servers[$server]['rcon_password'], $servers[$server]['rcon_timeout']);
if (!$rcon->connect()) {
    die("<script>not_connect();</script>");
}
if ($balance<$cost) {
	die('<script>pay_minus()</script>');
} else {
    if ($rcon->connect()) {  
	    $newbal= $balance-$cost;
        $setbal = $mysqli->query("UPDATE dle_users SET `money`='$newbal' WHERE name='$login'");
	    if($setbal){

				if ($donates[$donate]['cost']>$donates[$donate_1]['cost']) {
						$dontime = time() + $periods[$period]['time']*86400;
				        $setdon = $mysqli->query("UPDATE dle_users SET `donate_".$server."`='$donate' WHERE name='$login'");
				    } elseif ($donates[$donate]['cost']==$donates[$donate_1]['cost']) {
						$dontime = $donate_t + $periods[$period]['time']*86400;
				        $setdon = $mysqli->query("UPDATE dle_users SET `donate_".$server."`='$donate' WHERE name='$login'");
					} else {
						die('<script>infinity_error()</script>');
	 			   }				

			$settime = $mysqli->query("UPDATE dle_users SET `donate_time_".$server."`='$dontime' WHERE name='$login'");
			if ($settime) {
                $rcon->sendCommand("pex user ".$login." group set ".$donate);
				$mysqli_i = new mysqli(DBHOST,DBUSER,DBPASS,$servers[$server]['db_base']);
                $mysqli_i->set_charset("utf8");
                $mysqli_i->query("DELETE FROM `permissions` WHERE `name` LIKE '$uuid' AND `type` = 1");
			    if ($donates[$donate]['cost']==$donates[$donate_1]['cost']) {
					$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('0','$login','-1','8','".$periods[$period]['title']."','".time()."','Продление <b>".$donates[$donate]['title']."</b> на сервере <b>".$_POST['server']."</b>')");
					die('<script>buy_success3()</script>');
				} else {
					$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('0','$login','-1','8','".$periods[$period]['title']."','".time()."','Покупка <b>".$donates[$donate]['title']."</b> на сервере <b>".$_POST['server']."</b>')");
				    die('<script>buy_success2()</script>');
				}
			}
		} else {
			echo $periods[$period]['time'];
			die('<script>hz()</script>');
		}
    } else {
        die('<script>not_connect()</script>');
    }
}
?>