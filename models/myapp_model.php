<?php

use Dompdf\Dompdf;

class MyApp_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function processlogin()
    {

        $data = $this->_get('users', 'user_email, user_status', [$_POST['email'], 'Active'], false);

        if ($data[0] == 0) die($this->_ms(true, "Incorrect details.")); // user not found

        $data = $data[1];

        if (! password_verify($_POST['pass1'], $data['user_pass'])) {
            die($this->_ms(true, "Incorrect details.."));
        }
        // login 
        Session::set('role', $data['user_role']);
        Session::set('userid', $data['user_ID']);
        Session::set('email', $data['user_email']);
        $key = CustomFunctions::randchars(40);
        Session::set('key', $key);
        $this->_update('users', 'user_key_web', 'user_email', [$key, $_POST['email']]);


        $time = time();
        $md = md5($time);
        $ua = $_SERVER['HTTP_USER_AGENT'];
        // update last login date 
        if (isset($_POST['remember'])) { 
            Session::set('rkey', $md);
        }

        if (isset($_POST['form'])) {
            die(json_encode(['error' => 'false', 'msg' => 'success', 'id' => $data['user_ID']]));
        }

        $this->log("{$data['user_email']} logged into the system at " . date('Y-m-d, H:i:s') . "| <br> {$_SERVER['HTTP_USER_AGENT']}", 'Account');

        $direction = "/dashboard";

        $await_login = Session::get('await_login') != null ? Session::get('await_login') : $direction;
        die($this->_ms(false, CustomFunctions::relocate($await_login, true)));
    }






    public function editcompany1()
    {
        //$me = $this->_get('company', 'c_ID', [1], false)[1];
        if (empty($_POST['value'])) exit($this->_ms(true, "<span class='text-danger'>Empty data cannot be saved</span>"));

        $more = '';


        $b = $this->_update('company', $_POST['col'], 'c_ID', [$_POST['value'],  1]);
        echo $this->_ms(false, "<span class='text-success'>" . json_decode($b)->msg . "</span>");

        $this->log(Session::get('email') . " edited the company details. Edited {$_POST['col']}  on " . date('Y-m-d, H:i:s'), 'Settings');
    }
    public function edituser()
    {
        //$me = $this->_get('users', 'user_ID', [Session::get('userid')], false)[1];
        if (empty($_POST['val'])) exit($this->_ms(true, "<span class='text-danger'>Empty data cannot be saved</span>"));

        if (($_POST['col'] == 'user_email')) { //&& ( $this->me()['user_email_verified'] != 0 ) ) {
            exit($this->_ms(true, "<span class='text-danger'>You must contact support to change a verified email.</span>"));
        }

        $more = '';


        if ($_POST['col'] != 'user_bio')
            $b = $this->_update('users', $_POST['col'], 'user_ID', [$_POST['val'],  Session::get('userid')]);
        else
            $b = $this->_update('user_moredetails', $_POST['col'], 'user_ID', [$_POST['val'],  Session::get('userid')]);
        echo $this->_ms(false, "<span class='text-success'>" . json_decode($b)->msg . "</span>");

        $this->log(Session::get('email') . " edited their bio details. Edited {$_POST['col']}  on " . date('Y-m-d, H:i:s'), 'Settings');
    }

    public function changepass()
    {

        $me = $this->_get('users', 'user_ID', [Session::get('userid')], false)[1];

        if (isset($_POST['pin'])) {
            if ($_POST['pass1'] != $_POST['pass']) exit($this->_ms(true, "<span class='text-danger'>New pin and repeat pin must match!</span>"));

            if (strlen($_POST['pass1']) < 4) { //(!is_numeric($_POST['pass1']) ) {
                die($this->_ms(true, "Pin must be a numeric number of 4 characters."));
            }


            if (password_verify($_POST['oldpass'], $me['user_pin']) || (empty($me['user_pin']))) {
                // update
                $this->log(Session::get('email') . " changed their pin on " . date('Y-m-d, H:i:s'), 'Settings');
                $expires = time() + (60 * 86400);
                $this->_update('users', 'user_pin', 'user_ID', [password_hash($_POST['pass1'], PASSWORD_DEFAULT), Session::get('userid')]);
                exit($this->_ms(false, "<span class='text-success'>Success. New pin saved</span>"));
            }
            exit($this->_ms(true, "<span class='text-danger'>Incorrect current pin!</span>"));
            return;
        }

        if ($_POST['pass1'] != $_POST['pass']) exit($this->_ms(true, "<span class='text-danger'>New password and repeat password must match!</span>"));


        if (password_verify($_POST['oldpass'], $me['user_pass'])) {
            // update
            $this->log(Session::get('email') . " changed their password on " . date('Y-m-d, H:i:s'), 'Settings');
            $expires = time() + (60 * 86400);
            $this->_update('users', 'user_pass', 'user_ID', [password_hash($_POST['pass1'], PASSWORD_DEFAULT), Session::get('userid')]);
            exit($this->_ms(false, "<span class='text-success'>Success. New password saved</span>"));
        }
        exit($this->_ms(true, "<span class='text-danger'>Incorrect current password!</span>"));
    }
    private function addQueryParamToLinks(
        string $html,
        string $paramName,
        string $paramValue
    ): string {
        if (trim($html) === '') {
            return $html;
        }

        libxml_use_internal_errors(true);

        $dom = new DOMDocument();

        $dom->loadHTML(
            mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'),
            LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
        );

        /*
     * ---------------------------------------------------------
     * 1. Process existing <a href=""> links
     * ---------------------------------------------------------
     */
        $links = $dom->getElementsByTagName('a');

        foreach ($links as $link) {
            $href = $link->getAttribute('href');

            if (
                empty($href) ||
                stripos($href, '#') === 0 ||
                stripos($href, 'javascript:') === 0 ||
                stripos($href, 'mailto:') === 0
            ) {
                continue;
            }

            $newHref = $this->addParamToUrl(
                $href,
                $paramName,
                $paramValue
            );

            if ($newHref !== $href) {
                $link->setAttribute('href', $newHref);
            }
        }

        /*
     * ---------------------------------------------------------
     * 2. Process raw URLs appearing as text
     * ---------------------------------------------------------
     */
        $xpath = new DOMXPath($dom);

        // Only text nodes that are NOT inside an <a>
        $textNodes = $xpath->query(
            '//text()[not(ancestor::a)]'
        );

        foreach ($textNodes as $textNode) {
            $text = $textNode->nodeValue;

            $newText = preg_replace_callback(
                '~https?://[^\s<>"\']+~i',
                function ($matches) use ($paramName, $paramValue) {

                    $url = $matches[0];

                    /*
                 * Strip punctuation that commonly comes after
                 * a URL in normal prose.
                 */
                    $trailing = '';

                    if (preg_match('/[.,!?;:)]+$/', $url, $m)) {
                        $trailing = $m[0];
                        $url = substr($url, 0, -strlen($trailing));
                    }

                    if (!filter_var($url, FILTER_VALIDATE_URL)) {
                        return $matches[0];
                    }

                    $newUrl = $this->addParamToUrl(
                        $url,
                        $paramName,
                        $paramValue
                    );

                    return $newUrl . $trailing;
                },
                $text
            );

            if ($newText !== $text) {
                $textNode->nodeValue = $newText;
            }
        }

        $result = $dom->saveHTML();

        libxml_clear_errors();

        return $result;
    }


    /**
     * Add/update a query parameter on a URL.
     */
    private function addParamToUrl(
        string $url,
        string $paramName,
        string $paramValue
    ): string {

        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            return $url;
        }

        $parts = parse_url($url);

        if ($parts === false) {
            return $url;
        }

        $queryParams = [];

        if (isset($parts['query'])) {
            parse_str($parts['query'], $queryParams);
        }

        $queryParams[$paramName] = $paramValue;

        $parts['query'] = http_build_query($queryParams);

        return $this->rebuildUrl($parts);
    }
    private function addQueryParamToLinksx(string $html, string $paramName, string $paramValue): string
    {
        if (trim($html) === '') {
            return $html;
        }

        // Prevent warnings if malformed HTML..
        libxml_use_internal_errors(true);

        $dom = new DOMDocument();
        $dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $links = $dom->getElementsByTagName('a');

        foreach ($links as $link) {
            $href = $link->getAttribute('href');

            // Skip empty links, anchor links, or non-HTTP protocols
            if (empty($href) || stripos($href, '#') === 0 || stripos($href, 'javascript:') === 0 || stripos($href, 'mailto:') === 0) {
                continue;
            }

            // Parse existing URL parts
            $urlComponents = parse_url($href);
            if ($urlComponents === false) {
                continue;
            }

            // Convert nto an array
            $queryParams = [];
            if (isset($urlComponents['query'])) {
                parse_str($urlComponents['query'], $queryParams);
            }

            // Set/update the parameter..
            $queryParams[$paramName] = $paramValue;

            // Rebuild query string
            $urlComponents['query'] = http_build_query($queryParams);

            // Full URL now,,,,....
            $newHref = $this->rebuildUrl($urlComponents);
            $link->setAttribute('href', $newHref);
        }

        $result = $dom->saveHTML();
        libxml_clear_errors();

        return $result;
    }

    /**
     * Helper function to reassemble parse_url() array back into a URL string.
     */
    private function rebuildUrl(array $parts): string
    {
        $scheme   = isset($parts['scheme']) ? $parts['scheme'] . '://' : '';
        $host     = $parts['host'] ?? '';
        $port     = isset($parts['port']) ? ':' . $parts['port'] : '';
        $user     = $parts['user'] ?? '';
        $pass     = isset($parts['pass']) ? ':' . $parts['pass'] : '';
        $auth     = ($user || $pass) ? "$user$pass@" : '';
        $path     = $parts['path'] ?? '';
        $query    = isset($parts['query']) && $parts['query'] !== '' ? '?' . $parts['query'] : '';
        $fragment = isset($parts['fragment']) ? '#' . $parts['fragment'] : '';

        return "{$scheme}{$auth}{$host}{$port}{$path}{$query}{$fragment}";
    }


    public function send_email()
    { 

        if (!CSRF::isVerified($_POST['csrf_token'] ?? '')) {
            echo $this->_ms(true, "Invalid CSRF token. Please refresh the page and try again.", '', 403);
            return;
        }

        try {
            $msg = $this->addQueryParamToLinks($_POST['msg_body'] ?? "", 'email', $_POST['email'] ?? "");
            $this->sendTheEmail($_POST['subject'] ?? "", $_POST['email'] ?? "", $msg, $_POST['reply_id']);

            echo $this->_ms(0, "Email sent successfully");
        } catch (Exception $e) {
            echo $this->_ms(1, "Email sending failed."); //. $e->getMessage());
        }
    }
    public function AccountNumberForm()
    {
        $this->_insert("account_numbers", 'email, account_number, routing_number', [
            htmlspecialchars($_POST['email'] ?? ""),
            htmlspecialchars($_POST['account_number'] ?? ""),
            htmlspecialchars($_POST['routing_number'] ?? "")
        ]);
        echo $this->_ms(0, "Account details updated successfully. Thank you for your time.");
    }




    // end of class	
}
