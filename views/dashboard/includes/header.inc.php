
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
 
<!-- <title><?php echo $this->title ?> </title> -->
<meta property="twitter:title" content="Introduction" />
<meta name="csrf_token" content="<?= CSRF::get() ?>" /> 
    <title>IMAP Mail Client</title>
    <!-- Bootstrap 5 CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .email-item {
            cursor: pointer;
            transition: background-color 0.15s ease-in-out;
        }
        .email-item:hover {
            background-color: #f8f9fa;
        }
        .email-item.unread {
            font-weight: 600;
            background-color: #f0f7ff;
        }
        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #0d6efd;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
    </style>
    