<?php

// メール情報
// メールホスト名・gmailでは smtp.gmail.com
define('MAIL_HOST','smtp.gmail.com');

// メールユーザー名・アカウント名・メールアドレスを@込でフル記述
define('MAIL_USERNAME','メアド');

// メールパスワード・上で記述したメールアドレスに即したパスワード
define('MAIL_PASSWORD','パスワード');

// SMTPプロトコル(sslまたはtls)
define('MAIL_ENCRPT','ssl');

// 送信ポート(ssl:465, tls:587)
define('SMTP_PORT', 465);

// メールアドレス・ここではメールユーザー名と同じでOK
define('MAIL_FROM','メアド');

// 表示名
define('MAIL_FROM_NAME','クラウドファンディングM@STER');

// メールタイトル
define('MAIL_SUBJECT','新規会員登録メール認証のお願い');

