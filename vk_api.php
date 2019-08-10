if (!isset($_REQUEST)) {
    return;
}

//Строка для подтверждения адреса сервера из настроек Callback API
$confirmationToken = '2e3b9126';

//Ключ доступа сообщества
$token = '8c9bd7643d0ff4ae75cc0f30db3e002a20c13a113f588d2b0d9ac2f52db2a5b16a0636f246c1c24005b76';

// Secret key
$secretKey = 'lol';

//Получаем и декодируем уведомление
$data = json_decode(file_get_contents('php://input'));

// проверяем secretKey
if(strcmp($data->secret, $secretKey) !== 0 && strcmp($data->type, 'confirmation') !== 0)
    return;
