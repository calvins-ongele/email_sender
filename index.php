<?php 
    ini_set('memory_limit', '512M');
    set_time_limit(300); // ini_set('max_execution_time', '300');
    require __DIR__ . "/vendor/autoload.php";

    //environment variables
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();


    require 'config.php';
    require 'util/Auth.php';
    $is_under_maintenace = 0;
    $approved_ips = ['41.90.210.158', '41.90.210.124', '41.90.211.21'];


    if (strpos($_SERVER['REQUEST_URI'], '.php') !== false) {
        die("
                <!DOCTYPE html> <html> <head> <title>404 -  Not Found</title> <style>html, body { height: 100%; } </style> </head>
                    <body style='background:black'> <iframe src='/not-found' style='height:100vh;height:100%!important;width:100%;'></iframe> </body> </html>");
    }

    $url = "http://";
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') $url = "https://";


    // Append the host(domain name, ip) to the URL.   
    $url .= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL   
    $url .= $_SERVER['REQUEST_URI'];
 
    $valid_url = str_replace('www.', '', $_SERVER["HTTP_HOST"]);
    $no_security = explode(':', $url)[0];
    

       
    if ($valid_url !== 'localhost') { 
 
        if ((strpos($url, 'www') === false) || ($no_security === 'http')) {  
            header("Location: https://www." . $valid_url . $_SERVER["REQUEST_URI"], true, 301);
            return;
        }  
    } 


    if ($is_under_maintenace && (!in_array($_SERVER['REMOTE_ADDR'], $approved_ips))) {

        die("
            <!DOCTYPE html>
            <html>
                <head>
                    <title>{$_SERVER['HTTP_HOST']}</title>
                </head>
                <body style='background:black'>
                    <center>
                        <section style='margin-top:16%;'>
                            <h1 style='color:white;'>{$_SERVER['HTTP_HOST']} is under Maintenance </h>
                            
                            <h1 style='color:red'>Check back in ONE HOUR </h1>
                            
                            <p>Your IP {$_SERVER['REMOTE_ADDR']} is blocked. </p>
                        </section>
                    </center>
                </body>
            </html>");
    }


    spl_autoload_register("autoload");
 
    function autoload(string $class_name)
    {
        $class_path = PATH . $class_name . ".php";
        if (file_exists($class_path))
            require PATH . $class_name . ".php";
    }

    $app = new App();
    $app->init();
