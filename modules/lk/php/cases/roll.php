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
         <div class="casesRollete">
                        <div class="casesRolleteArrow"></div>
                        <div class="roll" id="rolle" style="min-width: 4544px; right: 0px;">
<?php
$num=0;
$num_i=0;
foreach ($cases[$server] as $item) {
    $rand_keys = array_rand($cases[$server], 10);
	foreach ($rand_keys as $key) {
		$num++;
		if ($cases[$server][$key]['type']==1) {
	      echo '<img id="item_'.$num.'" src="/uploads/shop/items/'.$cases[$server][$key]['title'].'.png" title="'.$cases[$server][$key]['title'].'">';
		} elseif ($cases[$server][$key]['type']==2) {
			echo '<img src="/uploads/cases/econs.png" title="'.$cases[$server][$key]['title'].'">';
		} elseif ($cases[$server][$key]['type']==3) {
			echo '<img src="/uploads/cases/monets1.png" title="'.$cases[$server][$key]['title'].'">';
		}
		$num_i++;
		if ($num_i==77) {
			echo '<script>var item_give = "'.$cases[$server][$key]['title'].'", item_a="'.$cases[$server][$key]['amount'].'";</script>';
		}
	}
}
?>
                        </div>
                    </div>
                    
                    <div id="giftItemInfo" style="display: block;">
                        Вы получили: <b id="caseitem">Открытие...</b>
                        
                        <br>
                        
                        Чтобы получить предмет используйте команду на сервере <b>/cart gui</b>
                        
                        <br><br><br>
                        <a  onclick="roll(); return false;" id="repeatOpenCaseButton" class="smcui-button" style="margin-right: 0px; display: none;"><i class="fa fa-key" aria-hidden="true"></i>&nbsp;&nbsp;Открываем ещё раз?</a>
                    </div>
                    
<?php
$num = $num*7-314;
?>                  
<script>
var roll_px = 1;
var roll_st = 0;
function rolling(roll_px) {
    document.getElementById('rolle').style.right = roll_px+'px';
}
<?php
if ($type == 1) {
	echo 'document.getElementById("item_66").src = "/uploads/shop/items/'.$title.'.png";
          document.getElementById("item_66").title = "'.$title.' ('.$amount.' шт.)";';
} elseif ($type == 2) {
	echo 'document.getElementById("item_66").src = "/uploads/cases/econs.png";
          document.getElementById("item_66").title = "'.$amount.' эконов";';
} elseif ($type == 3) {
	echo 'document.getElementById("item_66").src = "/uploads/cases/monets1.png";
          document.getElementById("item_66").title = "'.$amount.' монет";';
}
?>  
setInterval(function() {
  if ('<?php echo $num?>' > roll_px) {
      rolling(roll_px);
  } else {
	  if (roll_st!=1) {
		  document.getElementById("caseitem").innerHTML = '<?php echo $title;?> (<?php echo $amount;?> шт.)';
		  //document.getElementById("repeatOpenCaseButton").style.display = ''; 
	      document.getElementById('rolle').style.right = '3885px';
		  <?php
		  if ($type == 1) {
		      echo 'case_give();';
		  } elseif ($type == 2) {
			  echo 'case_give_e();';
		  } elseif ($type == 3) {
			  echo 'case_give_m();';
		  }
		  ?>  
		  roll_st = 1;
	  }
  }
  if (('<?php echo $num?>'/1.5) < roll_px) {
	if (('<?php echo $num?>'/1.2) < roll_px) {
		if (('<?php echo $num?>'/1.05) < roll_px) {
			roll_px = roll_px +1;
		} else {
			roll_px = roll_px +3;
		}
	 } else {
		roll_px = roll_px +5;
	 }
  } else {
        roll_px = roll_px +10;
  }
}, 1);
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
	    showConfirmButton: false,
        timer: 4500
    }).then((result) => {
		location.reload()
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
	    showConfirmButton: false,
        timer: 4500
    }).then((result) => {
		location.reload()
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
	    showConfirmButton: false,
        timer: 4500
    }).then((result) => {
		location.reload()
    })
}
</script>