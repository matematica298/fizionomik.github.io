<script>
function delete_success() {
    Swal.fire({
		position: 'top',
        type: 'success',
        title: 'Установлен стандартный префикс',
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
</script>
<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//Code
$s_num = 0;
foreach ($servers as $server) {
	if($server['title']==$_POST['p_server']) {
		$s_num++;
	}
}
if($s_num!=1){
	die('<script>ex_error()</script>');
}
$mysqli_i = new mysqli(DBHOST,DBUSER,DBPASS,$servers[$_POST['p_server']]['db_base']);
$mysqli_i->set_charset("utf8");
$change_0=$mysqli_i->query("DELETE FROM `permissions` WHERE `name` LIKE '$uuid' AND `type` = 1");
if ($change_0) {
	die('<script>delete_success()</script>');
}