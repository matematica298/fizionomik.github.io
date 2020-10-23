<script>
function change_success() {
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
        title: 'Префикс успешно изменён',
	    showConfirmButton: false,
        timer: 1500
    })
}
function not_perms() {
    Swal.fire({
        position: 'top',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        type: 'error',
        text: 'Не достаточно прав для смены префикса!',
        showConfirmButton: false,
        timer: 3500
    })
}
</script>
<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//Code
if (ceil($_POST['prefix'])<0 || ceil($_POST['prefix'])>15 || $_POST['prefix']=='') {
	die('<script>ex_error();</script>');
}
if (ceil($_POST['nick'])<0 || ceil($_POST['nick'])>15 || $_POST['nick']=='') {
	die('<script>ex_error();</script>');
}
if (ceil($_POST['msg'])<0 || ceil($_POST['msg'])>15 || $_POST['msg']=='') {
	die('<script>ex_error();</script>');
}
$s_num = 0;
foreach ($servers as $server) {
	if($server['title']==$_POST['p_server']) {
		$s_num++;
	}
}
if($s_num!=1){
	die('<script>ex_error()</script>');
}
$don = "donate_".$_POST['p_server'];
$donate=$mysqli->query("SELECT `donate_".$_POST['p_server']."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$don;
if ($donates[$donate]['chat']=="true") {
	$chat_p = 1;	
}
if ($chat_p!=1) {
	die('<script>not_perms();</script>');
}
$don = "donate_".$_POST['p_server'];
$donate=$mysqli->query("SELECT `donate_".$_POST['p_server']."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$don;
$mysqli_i = new mysqli(DBHOST,DBUSER,DBPASS,$servers[$_POST['p_server']]['db_base']);
$mysqli_i->set_charset("utf8");
$change_0=$mysqli_i->query("DELETE FROM `permissions` WHERE `name` LIKE '$uuid' AND `type` = 1");
$change_1=$mysqli_i->query("INSERT INTO `permissions`(`id`, `name`, `type`, `permission`, `world`, `value`) VALUES ('','$uuid','1','prefix', '','&f[".$chat['colors'][$_POST['prefix']]['mc'].$donates[$donate]['title']."&f]".$chat['colors'][$_POST['nick']]['mc']." ')");
$change_2=$mysqli_i->query("INSERT INTO `permissions`(`id`, `name`, `type`, `permission`, `world`, `value`) VALUES ('','$uuid','1','suffix', '','".$chat['colors'][$_POST['msg']]['mc']."')");
if ($change_0 && $change_1 && $change_2) {
    die('<script>change_success()</script>');
}
