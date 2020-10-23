<script>
function not_case() {
    Swal.fire({
        position: 'top',
        title: 'У вас нет кейсов!',
		showConfirmButton: false,
		showCloseButton: true,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        type: 'error'
   })
}
</script>
<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
if ($cases_1<1) {
	die('<script>not_case()</script>');
} else {
	$newcase = $cases_1-1;
	$mysqli->query("UPDATE dle_users SET `cases`='$newcase' WHERE name='$login'");
}
$server = $_POST['server'];
$rand = rand(0, 70);
$title = $cases[$server][$rand]['title'];
$type = $cases[$server][$rand]['type'];
$id = $cases[$server][$rand]['id'];
$amount = $cases[$server][$rand]['amount'];
if ($type == 2 || $type == 3) {
	$amount = rand(($amount/2), $amount);
	if ($type == 2) {
		$newecons = $econs+$amount;
		$mysqli->query("UPDATE dle_users SET `econs`='$newecons' WHERE name='$login'");
	} elseif ($type == 3) {
		$newmoney = $money+$amount;
		$mysqli->query("UPDATE dle_users SET `money`='$newmoney' WHERE name='$login'");
	}
} elseif ($type == 1) {
	$give=$mysqli->query("INSERT INTO `$server`(`id`, `nickname`, `item_id`, `item_amount`) VALUES ('0','$login','$id','$amount')");
}

?>          
<script>
function case_give() {
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
		imageUrl: '/uploads/shop/items/<?php echo $title;?>.png',
        imageHeight: 70,
        text: 'Вы получили из кейса <?php echo $title;?> (<?php echo $amount;?> шт.)',
	    confirmButtonText: 'Открыть ещё!',
		showCloseButton: true
    }).then((result) => {
        if (result.value) {
            fast_roll();
        }
    })
}
function case_give_e() {
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
        text: 'Вы получили из кейса <?php echo $amount;?> эконов',
	    confirmButtonText: 'Открыть ещё!',
		showCloseButton: true
    }).then((result) => {
        if (result.value) {
            fast_roll();
        }
    })
}
function case_give_m() {
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
        text: 'Вы получили из кейса <?php echo $amount;?> монет',
	    confirmButtonText: 'Открыть ещё!',
		showCloseButton: true
    }).then((result) => {
        if (result.value) {
            fast_roll();
        }
    })
}
</script>
<?php
if ($type == 1) {
echo '<script>case_give();</script>';
		  } elseif ($type == 2) {
			  echo '<script>case_give_e();</script>';
		  } elseif ($type == 3) {
			  echo '<script>case_give_m();</script>';
		  }
?>    