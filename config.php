<?php 

// define a default path constant
define('PATH', getenv('DOCUMENT_ROOT') . '/email_system/libs/');
define('ROOT', getenv('DOCUMENT_ROOT') . '/'); 
 $rui = explode('/',$_SERVER['REQUEST_URI'] )[1] ?? 'dashboard';
 $rui = explode('?',$rui)[0];      
        
//define('DASHBOARD', getenv('DOCUMENT_ROOT') . '/views/dashboard/');
define('ADMIN', getenv('DOCUMENT_ROOT') . "/email_system/views/{$rui}/");
define("DASHBOARD", ADMIN);
define('PROFILE_NAV', "{$rui}" );

define('SERVER', $_ENV['DB_HOST']);
define('USERNAME', $_ENV['DB_USER']);
define('PASSWORD',$_ENV['DB_PASS']);
define('DBNAME', $_ENV['DB_NAME']);
define('CODE_VERSION', '1.0.0.0');
define('SYSTEM', "public/assets/system/");
define('UPLOADS', "public/assets/uploads/");
define('CLASS_NAME', $rui);  
define("WEBSITE","https://{$_SERVER['SERVER_NAME']}"); 
define("MAX_UPLOAD_SIZE", (5242880) ); //5mbs //calc: $maxSize = 1 * 1024 * 1024; //1mb
define('MAX_UPLOAD_SIZE_NAME', '5MBs');
define('VIDEO_EXTENSIONS', "webm,mkv,flv,vob,ogv,ogg,rrc,gifv,mng,mov,avi,qt,wmv,yuv,rm,asf,amv,mp4,m4p,m4v,mpg,mp2,mpeg,mpe,mpv,m4v,svi,3gp,3g2,mxf,roq,nsv,flv,f4v,f4p,f4a,f4b,mod");
define("IMAGE_EXTENSIONS", "jpg,jpeg,png,gif,webp");
define("RESEND_API_KEY", $_ENV['RESEND_API_KEY']);

define("EMAIL", $_ENV['EMAIL']);
define("EMAIL_PASSWORD", $_ENV['EMAIL_PASSWORD']);
define("EMAIL_HOST", $_ENV['EMAIL_HOST']);