<?
$from_email='admin@termosphera.info'; //Емейл сайта зарегестрированого на хостинге
//$to = 'mail@fb123.ru, klinkovmark@gmail.com'; //емейлы, на который будут приходить заказы 'coolyabine@ya.ru', указывать через ","
$to = 'termosfera@inbox.ru, martyrhymes@gmail.com';
//$to = 'vsappalach@gmail.com';
$admin_mail_title='Заявка с сайта "Термосфера"'; // Заголовок письма для админа

/*Сюда вписываем тело письма для админа при успешной отправке*/
$admin_types= array(
    'callback' => 'заявка из блока перезвоните мне',
    'gorinich' => 'заявка из блока Банная печь Горыныч-3',
    'plus' => 'заявка из блока плюсы продольного горения',
    'buy' => 'заявка из блока Заказать печь',
    'camin' => 'заявка из блока Камин',
    'schema' => 'заявка из блока схема фундамента',
    'reply' => 'заявка из блока отзывы о нас',
    'montag' => 'заявка из блока Монтаж печи',
);

$fields  = array("name"=>"ИМЯ:",
                 "phone"=>"ТЕЛЕФОН:");

				 
// ROISTAT BEGIN 
$phone = $_POST['phone'];
$phone  = preg_replace('~[^0-9]+~', '', $phone);
$today = date('d.m.Y H:i:s');				 
$name = $_POST['name'];				 
$roistatData = array(
    'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
    'key'     => 'NTYyODM6NTM5MTE6OTY1MDAzN2Q5N2Y3NWM4Nzg1NjdjZGE1NzNmYzJmYzQ=',
    'title'   => 'Новая заявка с формы "Оставить заявку" сайта горыныч-3.рф',
    // 'title'   => $today . ' горыныч-3.рф',
    'comment' => null,
    'name'    => $name,
    'email'   => null,
    'phone'   => $phone,
    'fields'  => array(
        'ASSIGNED_BY_ID'    => 14, 
        'UF_CRM_1518603492' => 'Оставить заявку'
    ),
);
    
file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));
// ROISTAT END 

$admin_text = $admin_types[$_POST['post_type']].'<br/>';
$return = array("status"=>false,"text"=>"Ошибка, не все данные залонены верно!");
foreach($_POST as $key=>$value)
{
    if(isset($fields[$key]))
        $admin_text.=$fields[$key]." ".$value."<br />";
}
$headers =  'MIME-Version: 1.0' . "\r\n".
            'Content-type: text/html; charset=UTF-8' . "\r\n".
            'From: '. $from_email . "\r\n".
            'Reply-To: '.$from_email . "\r\n";
            
mail($to, $admin_mail_title, $admin_text, $headers);
    $return = array("status"=>true,"text"=>"Спасибо! Ваша заявка принята");

die(json_encode($return));