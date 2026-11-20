<?php
class CustomFunctions {

    public function __construct() {
    
    }

    public static function containsAnyWord(string $sentence, array $words): bool {
        $pattern = '/\b(' . implode('|', array_map('preg_quote', $words)) . ')\b/i';
        return (bool) preg_match($pattern, $sentence);
    }
    public static function replaceLinksWithAnchors($text) {
        return preg_replace_callback(
            '#\bhttps?://[^\s<>()]+#i',
            function($matches) {
                $url = $matches[0];
                $host = parse_url($url, PHP_URL_HOST);
    
                // Extract domain (e.g., youtube.com → Youtube)
                $domainParts = explode('.', $host);
                $mainDomain = $domainParts[count($domainParts) - 2] ?? 'Website';
                $display = ucfirst($mainDomain); // Capitalize first letter
    
                return "<a href=\"$url\" target=\"_blank\" rel=\"noopener noreferrer\">View $display page</a>";
            },
            $text
        );
    }
	
    public static function formatPhone(string $phone): string {
        // Remove any spaces or hyphens first
        $digits = preg_replace('/\D+/', '', $phone);
    
        // Ensure it starts with +254
        if (strpos($phone, '+') === 0) {
            $digits = '+' . $digits;
        }
    
        // Example: +254712345678  →  +254 712 345 678
        if (preg_match('/^\+254(\d{3})(\d{3})(\d{3})$/', $digits, $m)) {
            return "+254 {$m[1]} {$m[2]} {$m[3]}";
        }
    
        // If it's 07XXXXXXXX  →  07X XXX XXX
        if (preg_match('/^0(\d{3})(\d{3})(\d{3})$/', $digits, $m)) {
            return "0{$m[1]} {$m[2]} {$m[3]}";
        }
    
        // If pattern didn't match, return raw
        return $phone;
    }
    public static function isSafeIdentifier(string $name): bool {
        // 1. Must be valid UTF-8
        if (!mb_check_encoding($name, 'UTF-8')) {
            return false;
        }
    
        // 2. Must not contain null bytes or control characters (ASCII < 32 or 127)
        if (preg_match('/[\x00-\x1F\x7F]/', $name)) {
            return false;
        }
    
        // 3. Must match allowed characters: a-z, A-Z, 0-9, underscore (no leading numbers!)
        if (!preg_match('/^[a-zA-Z_][a-zA-Z0-9_]*$/', $name)) {
            return false;
        }
    
        // 4. Optional: prevent overly long names (DB limits: 64 for MySQL identifiers)
        if (strlen($name) > 64) {
            return false;
        }
    
        // 5. Optional: block SQL reserved words (very basic list; customize per DB)
        $reserved = [
            'select', 'from', 'where', 'insert', 'delete', 'update',
            'drop', 'alter', 'table', 'join', 'union', 'into', 'create'
        ];
        if (in_array(strtolower($name), $reserved, true)) {
            return false;
        }
    
        return true;
    }
 
      
    public static function validEmail($email) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
			return true;		
		return false;		
    }
   
    public static function randchars($len = 8, $password=false) {
        $str = '';
       $alphabet = "aAbBcCd2DeEfFg3GhHijJ4kKLm56MnNpPqQr7RsStYu8UvVwWxX8yYzZ";
       $non_pass_chars = "1IloO0";
       if (!$password) {
           $alphabet .= $non_pass_chars;
       }
       
       $b = str_split($alphabet);
       shuffle($b);

       for ($i = 1; $i <= $len ; $i++) { 
           $str .= $b[random_int(0, strlen($alphabet) - 1)];
       }
       return $str;
   }
   public static function randomKey($length = null) {
    // creates a unique key for this customer
    $stringFrom = "0123456789abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRESTUVWXYZ_"; // allowed chars in the password
        if ($length == "" OR !is_numeric($length)){
        $length = 8; 
    }

    //srand(make_seed());

    $i = 0; 
    $password = "";    
    while ($i < $length) { 
        $char = substr($stringFrom, random_int(0, strlen($stringFrom) - 1 ), 1);
        if (!strstr($password, $char)) { 
            $password .= $char;
            $i++;
        }
    }
    return $password;
}

    public static function isStrongPassword($password) {
        // Minimum 8 characters
        if (strlen($password) < 8) {
            return false;
        }
    
        // At least one uppercase letter
        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }
    
        // At least one lowercase letter
        if (!preg_match('/[a-z]/', $password)) {
            return false;
        }
    
        // At least one digit
        if (!preg_match('/[0-9]/', $password)) {
            return false;
        }
    
        // At least one special character
        if (!preg_match('/[\W_]/', $password)) {
            return false;
        }
    
        return true;
    }
    public static function vaildUrl($url) {
        $url = trim($url);
        $url = strtolower($url);
        $url = str_replace(' ', '-', $url);
        return preg_replace('/[^A-Za-z0-9\-]/', '', $url);
    }
    
    public static function SendMail($email, $subject, $body, $company, $filename = '') {
            
            
        $from = $company['c_send_from'];
        $body1 = [];
        if (!is_array($email)) $email = [$email];
        
        if (!is_array($body)) { 
            for ($j = 0; $j < count($email); $j++)  $body1[] = $body;
        } else $body1 = $body;
            
        $messages = []; 
        $i = 0;
        foreach ($email as $rowemail) {     
    	    $messages[] = $body1[$i];
    	    $i++;
        }
            
            
        
         require getenv('DOCUMENT_ROOT') . '/libraries/phpmailer/sendemail.php';
        
         return 'success'; 
       
      
        
        $headers = "From:{$company['c_name']} <{$company['c_send_from']}> \r\n";
        $headers .= "Reply-To: <{$company['c_email']}> \r\n";
        $headers .= "Content-type: text/html; utf-8 \r\n";
        
        return (mail($email, $subject, $message, $headers));          
    } 
    public static function NoSpaceUrl($url) {
        $url = trim($url);
        $url = strtolower($url);
        $url = str_replace('-', '', $url);
        $url = str_replace(' ', '', $url);
        return preg_replace('/[^A-Za-z0-9\-]/', '', $url);
    }
     
    public static function relocate(string $target, $return = false) {
        if ($return) return "<script> window.location.href='" . $target . "'</script>";
        echo "<script> window.location.href='" . $target . "'</script>";
    }
    /**
     * @param string $name  'from _files variable'
     * @param string $name  'given name for saving'
     */
    public static function movefile($name, $nameAs, $direction = '') {
        $_direction = $direction == '' ? 'uploads' : $direction; 
        return (move_uploaded_file($_FILES[$name]['tmp_name'], getenv("DOCUMENT_ROOT") . "/public/assets/$_direction/" . $nameAs));
                 
    }
    public static function hyperlinks($text, $itemid) {
        $preg = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
        //check for urls
        if(preg_match($preg, $text, $url)) {
            return preg_replace($preg, "<a href=/links?id=$itemid&l=".$url[0]." target='_blank'>".$url[0]."</a> ", $text);
        }
        return $text;
        
    }
     

    // get ip address
    public static function getIPAddress() {  
        //whether ip is from the share internet  
         if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
            $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
        //whether ip is from the proxy  
        else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
        }  
    //whether ip is from the remote address  
        else {  
            $ip = $_SERVER['REMOTE_ADDR'];  
         }  
         return $ip;  
    } 

    public static function compress_image($source_url, $destination_url = 'public/assets/uploads/', $quality = 60) {
        $info = getimagesize($source_url);
        if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
        else if ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
        else if ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
        imagejpeg($image, $destination_url, $quality);
       
    }
 
  
   
    
    public static function timeago($date1, $date2 ='') {
        if (empty($date1)) {
            return "1 year ago";
        }
        else if ($date2 == '') {
            $date = $date1;
        } else if (!is_numeric($date2)) {
            $date = strtotime($date2);
        } else {
            $date = $date1;
        }
        
        return CustomFunctions::time_elapsed_string('@' . $date);
    }
      
    public static function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
        
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
    
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
    
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
    
    public static function maskPhoneNumber($phone, $how_many = 6) {  
        // Remove non-numeric characters
        $phone = preg_replace('/\D/', '', $phone);
        
        if (strlen($phone) < $how_many) {
            return '';//"Invalid phone number";
        }
        
        return substr($phone, 0, $how_many) . str_repeat('*', strlen($phone) - $how_many) . substr($phone, -2);
    }
    
    public static function maskEmail($email, $how_many = 4) {  
        $parts = explode('@', $email);
        
        if (strlen($parts[0]) < $how_many) {
            return '';//"Invalid email address";
        }
        
        return substr($parts[0], 0, $how_many) . str_repeat('*', strlen($parts[0]) - $how_many) . '@' . $parts[1];
    }
     

    public static function cleanInput($data, $type = 'string') {
        //basic sanitization
        $data = trim($data);

        //zero is not empty
        if ($data === '0') return '0';
        if (empty($data)) return false;

        switch ($type) {
            case 'email':
                $data = filter_var($data, FILTER_SANITIZE_EMAIL);
                return filter_var($data, FILTER_VALIDATE_EMAIL) ? $data: false;
            case 'int':
                return filter_var($data, FILTER_VALIDATE_INT);
            case 'url':
                $data = filter_var($data, FILTER_SANITIZE_URL);
                return filter_var($data, FILTER_VALIDATE_URL) ? $data: false;
            case 'float':
                return filter_var($data, FILTER_VALIDATE_FLOAT);
            case 'url':
                return filter_var($data, FILTER_VALIDATE_URL);
            case 'string':
            default:
                return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
        }

    }

    public static function validateFields($data, $rules) {
    $errors = [];

    foreach ($rules as $field => $ruleSet) {
        $value = $data[$field] ?? null;
        $errorMessage = $ruleSet['error_message'] ?? "Invalid value for $field";

        // Required check (default = required)
        if (!isset($value)) {
            $errors[] = "$field is required";
            continue;
        }

        // Clean & type validation
        $type = $ruleSet['type'] ?? 'string';
        $cleaned = self::cleanInput($value, $type);

        if ($cleaned === false && $cleaned !== '0') {
            $errors[] = $errorMessage;
            continue;
        }

        // Length validation (strings)
        if ($type === 'string') {
            if (isset($ruleSet['min_length']) && strlen($cleaned) < $ruleSet['min_length']) {
                $errors[] = $errorMessage;
                continue;
            }

            if (isset($ruleSet['max_length']) && strlen($cleaned) > $ruleSet['max_length']) {
                $errors[] = $errorMessage;
                continue;
            }
        }

        // Numeric validations
        if (in_array($type, ['int', 'float'])) {
            if (isset($ruleSet['min']) && $cleaned < $ruleSet['min']) {
                $errors[] = $errorMessage;
                continue;
            }

            if (isset($ruleSet['max']) && $cleaned > $ruleSet['max']) {
                $errors[] = $errorMessage;
                continue;
            }
        }

        // Allowed values
        if (isset($ruleSet['allowed_values']) && !in_array($cleaned, $ruleSet['allowed_values'])) {
            $errors[] = $errorMessage;
            continue;
        }

        // Optional: overwrite with cleaned value
        $data[$field] = $cleaned;
    }

    return empty($errors) ? true : $errors;
} 
public static function mainTemplate() {
    return 
    "
    <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8' />
            <meta name='viewport' content='width=device-width, initial-scale=1.0' />
            <title>Email</title>
        </head> 
        <body style='margin:0; padding:0; background-color:#f4f6f8; font-family:Arial, Helvetica, sans-serif;'>
            <table width='100%' cellpadding='0' cellspacing='0' style='background-color:#f4f6f8; padding:24px 0;'>
            <tr>
                <td align='center'>
                <!-- Container -->
                <table
                    width='100%'
                    cellpadding='0'
                    cellspacing='0'
                    style='max-width:600px; background:#ffffff; border-radius:8px; overflow:hidden;'
                > 
                    <!-- Header -->
                    <tr>
                    <td style='padding:20px 24px; background:#111827; color:#ffffff;'>
                        <h1 style='margin:0; font-size:18px; font-weight:600;'>
                        {{title}}
                        </h1>
                    </td>
                    </tr> 
                    <!-- Body -->
                    <tr>
                    <td style='padding:24px; color:#111827; font-size:14px; line-height:1.6;'>
                        {{body}}
                    </td>
                    </tr> 
                    <!-- Divider -->
                    <tr>
                    <td style='padding:0 24px;'>
                        <hr style='border:none; border-top:1px solid #e5e7eb;' />
                    </td>
                    </tr> 
                    <!-- Footer -->
                    
                    <tr>
                    <td style='padding:16px 24px; font-size:12px; color:#6b7280;'>
                    <p><img src='https://{$_SERVER['SERVER_NAME']}/public/assets/uploads/logo.svg' style='width:374px;height:auto;' /></p>
                        <p style='margin:0;'>
                        Text M State: 218.396.7282 
Call M State: 877.450.3322 <br>
International Calls: 218.210.8088<br>
TTY MN Relay Service: 218.210.8088
                        </p>

                        <p style='margin:0;'>
                        © {{year}} {{sitename}}. All rights reserved.
                        </p>
                        <p style='margin:8px 0 0;'>
                        This email was sent automatically. Please do not reply.
                        </p>
                        
                    </td>
                    </tr> 
                    <!---------------------->
                    
                    
                </table>
                </td>
            </tr>
            </table>
        </body>
        </html>
    ";
}
	
 
public static function linkify($text,  $style = "color:white;text-decoration:underline;", $target = "target='_blank'") {
    // Regular expression to match URLs
    $urlPattern = '/(https?:\/\/[^\s]+)/i';

    // Replace the URLs with HTML anchor tags
    $linkedText = preg_replace_callback($urlPattern, function ($matches ) {
        $url = $matches[0];
        $style = "color:white;text-decoration:underline;"; $target = "target='_blank'";
        $viewurl = str_replace("https://", "", $url );
        return "<a href='$url' style='$style' $target >$viewurl</a>";
    }, $text);

    return $linkedText;
}
 
    
// prepare a get url, add a _GET without breaking existing ones
public static function formatDynamicUrl(string $key, string $value) {
    //Get the current URI parts
    $urlParts = parse_url($_SERVER['REQUEST_URI']); 
    
    // Parse the existing query string into an array ($params)
    $params = [];
    if (isset($urlParts['query'])) {
        parse_str($urlParts['query'], $params);
    }

    // Set or Overwrite the value (prevents ?id=x&id=y)
    $params[$key] = $value;

    // Rebuild the query string and the full path
    $newQuery = http_build_query($params);
    
    return $urlParts['path'] . '?' . $newQuery;
}


public static function uploadFile(string $fileInputName, $file_directory = UPLOADS, $extensionsAllowed = [], $uploadSize = 0) { 
        $allowedExtensions = empty($extensionsAllowed) ? explode(',', IMAGE_EXTENSIONS) : $extensionsAllowed; 

        $maxSize = ($uploadSize > 0) ? $uploadSize : MAX_UPLOAD_SIZE; //1mb
        $uploadName = ($uploadSize > 0) ? ($uploadSize / 1024) .'MB' : MAX_UPLOAD_SIZE_NAME;


          // upload currency logo if provided
                if (isset($_FILES[$fileInputName]) && $_FILES[$fileInputName]['error'] == UPLOAD_ERR_OK) {
                    $fileTmpPath = $_FILES[$fileInputName]['tmp_name'];
                    $fileName = $_FILES[$fileInputName]['name'];
                    $fileSize = $_FILES[$fileInputName]['size'];
                    $fileType = $_FILES[$fileInputName]['type'];
                    $fileNameCmps = explode(".", $fileName);
                    $fileExtension = strtolower(end($fileNameCmps));
                    [$width, $height] = @getimagesize($fileTmpPath) ?? [];
                    
                    if ($width && $height) {  
                        if ($width !== $height) { 
                            //return [true, "Currency logo must be a square."];
                        }
                    }

                    // Sanitize file name and generate unique name
                    $newFileName =  md5(time().rand()) .'.' . $fileExtension;

                    // Check if file has one of the following extensions. 
                    $allowedfileExtensions = $allowedExtensions;
                    if (!in_array($fileExtension, $allowedfileExtensions)) { 
                        return [true, "Upload failed. Allowed file types: " . implode(', ', $allowedfileExtensions)] ;
                    }
                        // Directory in which the uploaded file will be moved
                        $dest_path = $file_directory . $newFileName; 
                        //cap size at 1mb
                        if ($fileSize > $maxSize ) return [true, "Please upload a smaller file not bigger ".$uploadName ];

                        try {
                            if (!extension_loaded('imagick')) {
                                throw new Exception("Imagick not available");
                            }

                            $img = new Imagick($fileTmpPath);  
                            // keep icc profile to avoid flat colors
                            $profiles = $img->getImageProfiles("icc", true);

                            // Strip all metadata
                            $img->stripImage();

                            if (!empty($profiles)) {
                                $img->profileImage("icc", $profiles['icc']);
                            }

                            if (!$img->writeImage($dest_path)) {
                                throw new Exception("Failed to write image");
                            }

                        } catch (Exception $e) {
                            // fallback
                            if (!move_uploaded_file($fileTmpPath, $dest_path)) { 
                                return [true, "There was an error moving the uploaded file.", '', 500];
                              
                            }
                        }
 
                    
                } else {
                    //required 
                    return [true, "Uploaded Image is required"]; 
                }
               
                return [false, $dest_path];
    }

public static function fetchEmails($folder = 'INBOX', $limit = 10)
{
    $host = EMAIL_HOST;
    $username = EMAIL;
    $password = EMAIL_PASSWORD;

    $return = [
            [
                "email_id" => "id_xchfjidsjsjsjsjs",
                "subject"  => "Sample Subject",
                "from"     => "samle@gmail.com",
                "date"     => date("y-m-d"),
                "body"     => "<p>Sample Body</p>"
            ]
    ];
    
    $mailbox = "{{$host}:993/imap/ssl}$folder";

    $inbox = imap_open($mailbox, $username, $password);

    if (!$inbox) {
        throw new Exception('Cannot connect to mail server: ' . imap_last_error());
    }

    $emails = imap_search($inbox, 'ALL');

    $results = [];

    if ($emails) {
        rsort($emails); // newest first
        $emails = array_slice($emails, 0, $limit);

        foreach ($emails as $emailNumber) {

            $overview = imap_fetch_overview($inbox, $emailNumber, 0)[0];

            $body = imap_fetchbody($inbox, $emailNumber, 1.2);
            if (empty($body)) {
                $body = imap_fetchbody($inbox, $emailNumber, 1);
            }

            $results[] = [
                'email_id' => $overview->message_id ?? $emailNumber,
                'subject'  => imap_utf8($overview->subject ?? ''),
                'from'     => imap_utf8($overview->from ?? ''),
                'date'     => $overview->date ?? '',
                'body'     => trim(strip_tags(imap_utf8($body)))
            ];
        }
    }

    imap_close($inbox);

    return $results;
}
    
    //end of class
    
}


