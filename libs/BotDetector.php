<?php
require "{$_SERVER['DOCUMENT_ROOT']}/libraries/JayBizzleCrawlerDetect/vendor/autoload.php";
use Jaybizzle\CrawlerDetect\CrawlerDetect;

class BotDetector
{
    public static function isBot(): bool
    {
        $detector = new CrawlerDetect;
        return $detector->isCrawler();
    }
  
    public static function isBotDetected(): bool
    {
        if (!isset($_SERVER['HTTP_USER_AGENT'])) {
            return false; // No user-agent to test, assume it's not a bot
        }
    
        $bots = [
            'bot', 'crawl', 'spider', 'slurp', 'curl', 'wget', 'python', 'libwww',
            'facebookexternalhit', 'facebot', 'pingdom', 'ahrefs', 'mj12bot',
            'semrush', 'yandex', 'baidu', 'bingpreview', 'duckduckgo', 'archive.org_bot',
            'googlebot', 'adsbot', 'applebot', 'linkedinbot', 'discordbot', 'telegrambot',
            'bytespider', 'ClaudeBot', 'OpenAI', 'GPTBot', 'Sogou', 'ZoominfoBot'
        ];
    
        $pattern = '/' . implode('|', array_map('preg_quote', $bots)) . '/i';
        return (bool) preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
    }
    
    public static function isBotDetected1() {

        if ( preg_match('/abacho|accona|duckduckgo|skype|java|sogou|acoi|AddThis|AdsBot|ahoy|AhrefsBot|AISearchBot|alexa|altavista|anthill|appie|applebot|arale|araneo|AraybOt|ariadne|arks|aspseek|ATN_Worldwide|Atomz|baiduspider|baidu|bbot|bingbot|bing|Bjaaland|BlackWidow|BotLink|bot|boxseabot|bspider|calif|CCBot|ChinaClaw|christcrawler|CMC\/0\.01|combine|confuzzledbot|contaxe|CoolBot|cosmos|crawler|crawlpaper|crawl|curl|cusco|cyberspyder|cydralspider|dataprovider|digger|DIIbot|DotBot|downloadexpress|DragonBot|DuckDuckBot|dwcp|EasouSpider|ebiness|ecollector|elfinbot|esculapio|ESI|esther|eStyle|Ezooms|facebookexternalhit|facebook|facebot|fastcrawler|FatBot|FDSE|FELIX IDE|fetch|fido|find|Firefly|fouineur|Freecrawl|froogle|gammaSpider|gazz|gcreep|geona|Getterrobo-Plus|get|girafabot|golem|googlebot|\-google|grabber|GrabNet|griffon|Gromit|gulliver|gulper|hambot|havIndex|hotwired|htdig|HTTrack|ia_archiver|iajabot|IDBot|Informant|InfoSeek|InfoSpiders|INGRID\/0\.1|inktomi|inspectorwww|Internet Cruiser Robot|irobot|Iron33|JBot|jcrawler|Jeeves|jobo|KDD\-Explorer|KIT\-Fireball|ko_yappo_robot|label\-grabber|larbin|legs|libwww-perl|linkedin|Linkidator|linkwalker|Lockon|logo_gif_crawler|Lycos|m2e|majesticsEO|marvin|mattie|mediafox|mediapartners|MerzScope|MindCrawler|MJ12bot|mod_pagespeed|moget|Motor|msnbot|muncher|muninn|MuscatFerret|MwdSearch|NationalDirectory|naverbot|NEC\-MeshExplorer|NetcraftSurveyAgent|NetScoop|NetSeer|newscan\-online|nil|none|Nutch|ObjectsSearch|Occam|openstat.ru\/Bot|packrat|pageboy|ParaSite|patric|pegasus|perlcrawler|phpdig|piltdownman|Pimptrain|pingdom|pinterest|pjspider|PlumtreeWebAccessor|PortalBSpider|psbot|rambler|Raven|RHCS|RixBot|roadrunner|Robbie|robi|RoboCrawl|robofox|Scooter|Scrubby|Search\-AU|searchprocess|search|SemrushBot|Senrigan|seznambot|Shagseeker|sharp\-info\-agent|sift|SimBot|Site Valet|SiteSucker|skymob|SLCrawler\/2\.0|slurp|snooper|solbot|speedy|spider_monkey|SpiderBot\/1\.0|spiderline|spider|suke|tach_bw|TechBOT|TechnoratiSnoop|templeton|teoma|titin|topiclink|twitterbot|twitter|UdmSearch|Ukonline|UnwindFetchor|URL_Spider_SQL|urlck|urlresolver|Valkyrie libwww\-perl|verticrawl|Victoria|void\-bot|Voyager|VWbot_K|wapspider|WebBandit\/1\.0|webcatcher|WebCopier|WebFindBot|WebLeacher|WebMechanic|WebMoose|webquest|webreaper|webspider|webs|WebWalker|WebZip|wget|whowhere|winona|wlm|WOLP|woriobot|WWWC|XGET|xing|yahoo|YandexBot|YandexMobileBot|yandex|yeti|Zeus/i', $_SERVER['HTTP_USER_AGENT'])
        ) {
            return true; // 'Above given bots detected'
        }
        return false;
} 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

}
