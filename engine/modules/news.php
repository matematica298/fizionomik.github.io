<?php
if( ! defined( 'DATALIFEENGINE' ) ) {die( "Hacking attempt!" );}

$news = json_decode(file_get_contents('https://api.vk.com/method/wall.get?owner_id=-68415084&count=16&v=5.74&access_token=ccce27d3c7056f221a65a2de76e99304e1a2e962cc1b1698900a1547c3080001ebfe9d4dba408bc79b4b2'), true)['response'];
$i = 1;
foreach($news['items'] as $n) {
	$tpl->set('{img}', '/templates/simpleminecraft/images/news/news'.rand(1,4).'.png'); //Картиночка, если атачмен передан нулевой
	$tpl->set('{id}', $i++);
	$tpl->set('{date}', date('d.m.Y в H:i',$n['date']));
	$tpl->load_template('shortstory.tpl'); 
	$tpl->set('{news}', mb_strimwidth($n['text'], 0, 350, "...")); 
	foreach($n['attachments'] as $item) {
		$tpl->set('{img}', $item['photo']['photo_604']); 
	}
    
    if ($item['photo']['photo_604'] == null){
        $tpl->set('{img}', '/templates/simpleminecraft/images/news/news'.rand(1,4).'.png'); //Картиночка, если атачмен передан нулевой
    }
	$tpl->set('{likes}', $n['likes']['count']);
	$tpl->set('{view}', $n['views']['count']);
	$tpl->set('{comment}', $n['comments']['count']);
	$tpl->set('{post}', $n['id']);
	$tpl->compile('content'); 
}

$tpl->clear();

?>