<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller{
    
    public $config;                                                                                    // Config file with crawler/sitemap options
    public $scanned;                                                                                   // Array containing all scanned pages
    public $site_url_base;                                                                             // The base of the given site url
    public $sitemap_file;                                                                              // File where sitemap is written to.
    public function __construct(){
        parent::__construct();
        $this->load->library('twig');
            $this->config = [    
            "SITE_URL"                       => 'https://'.$_SERVER['SERVER_NAME'].'/',                  // Сайт для обхода и создания карты сайта.
            "ALLOW_EXTERNAL_LINKS"           => false,                                                   // Логическое значение для обхода внешних ссылок. <Пример> Link = https://www.google.com
            "ALLOW_ELEMENT_LINKS"            => false,                                                   // Логическое значение для обхода ссылок с идентификаторами элементов. <Пример> <a href="#section"></a>
            "CRAWL_ANCHORS_WITH_ID"          => '',                                                      // Если задано, поисковый робот будет индексировать только теги привязки с заданным идентификатором. Если вы хотите выполнить обход всех ссылок, установите значение ''. <Пример> <a id="внутренняя ссылка" href="/info"></a> Если для параметра CRAWL_ANCHORS_WITH_ID установлено значение "внутренняя ссылка", будет выполнен обход этой ссылки, но <a id="external-link" href="https://www.google.com"></a> обход не будет выполнен.
            "KEYWORDS_TO_SKIP"               => [],                                                      // Массив с абсолютными ссылками или ключевыми словами для страниц, которые будут пропущены при обходе данного SITE_URL. <Пример> https://student-laptop.nl/info/laptops или вы можете просто ввести student-laptop.nl/info/ и он не будет ничего сканировать в этом каталоге. Старайтесь быть как можно более конкретными, чтобы не пропустить 300 страниц
            "SAVE_LOC"                       => "sitemap.xml",                                           // Местоположение + имя файла, в котором будет сохранена карта сайта.
            "PRIORITY"                       => 1,                                                       // Статическое значение приоритета для карты сайта
            "CHANGE_FREQUENCY"               => "daily",                                                 // Частота статического обновления
            "LAST_UPDATED"                   => date('Y-m-d'),                                           // Дата изменена (сегодняшняя дата)
        ];
            $this->scanned = [];
            $this->site_url_base = parse_url($this->config['SITE_URL'])['scheme'] . "://" . parse_url($this->config['SITE_URL'])['host'];
            $this->sitemap_file = fopen($this->config['SAVE_LOC'], "w");
    }

///*/ ahilespelid ///*/
    public function index(){
        $this->crawlPage($this->config['SITE_URL']);

        pa($this->generateFile($this->scanned));
        //pa($this->config);
        //pa($_SERVER);
        //redirect($red, 'location', 301);
        //$this->twig->render('discounts.twig', $data);
    }

    public function GenerateSitemap(){
        $this->crawlPage($this->config['SITE_URL']);
        $this->generateFile($this->scanned);
    }

    private function getHtml($url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $html = curl_exec($curl);
        curl_close($curl);

        $dom = new DOMDocument();
        @$dom->loadHTML($html);

        return $dom;
    }

    private function crawlPage($page_url){
        $url = filter_var($page_url, FILTER_SANITIZE_URL);
        if(in_array($url, $this->scanned) || !filter_var($page_url, FILTER_VALIDATE_URL)){return;}

        array_push($this->scanned, $page_url);

        $html = $this->getHtml($url);
        $anchors = $html->getElementsByTagName('a');

        foreach($anchors as $a){
            $next_url = $a->getAttribute('href');

            if($this->config['CRAWL_ANCHORS_WITH_ID'] != ""){
                if($a->getAttribute('id') != "" || $a->getAttribute('id') == $this->config['CRAWL_ANCHORS_WITH_ID']){continue;}}

            $base_page_url = explode("?", $page_url)[0];
            
            if(!$this->config['ALLOW_ELEMENT_LINKS']){
                if(substr($next_url, 0, 1) == "#" || $next_url == "/"){continue;}}

            if(!$this->config['ALLOW_EXTERNAL_LINKS']){
                $parsed_url = parse_url($next_url);
                if(isset($parsed_url['host'])){
                    if($parsed_url['host'] != parse_url($this->config['SITE_URL'])['host']){continue;}}}

            if(substr($next_url, 0, 7) != "http://" && substr($next_url, 0, 8) != "https://"){
                $next_url = $this->convertRelativeToAbsolute($base_page_url, $next_url);
            }

            $found = false;
            foreach($this->config['KEYWORDS_TO_SKIP'] as $skip){
                if(strpos($next_url, $skip) || $next_url === $skip){$found = true;}}

            if(!$found){$this->crawlPage($next_url);}
        }
    }

    private function convertRelativeToAbsolute($page_base_url, $link){
        $first_character = substr($link, 0, 1);
        if($first_character == "?" || $first_character == "#"){
            return $page_base_url . $link;
        }elseif($first_character != "/"){
            return $this->site_url_base . "/" . $link;
        }else{
            return $this->site_url_base . $link;
        }
    }

    private function generateFile($pages){
        $xml = '<?xml version="1.0" encoding="UTF-8"?>
        <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <!-- ' . count($pages) . ' total pages-->
        <!-- PHP-sitemap-generator by https://github.com/tristangoossens -->';

        echo count($pages);

        foreach($pages as $page){
            $xml .= "<url><loc>" . $page . "</loc>".
                    "<lastmod>" . $this->config['LAST_UPDATED'] . "</lastmod>".
                    "<changefreq>" . $this->config['CHANGE_FREQUENCY'] . "</changefreq>".
                    "<priority>" . $this->config['PRIORITY'] . "</priority></url>";
        }

        $xml .= "</urlset>";
        $xml = str_replace('&', '&amp;', $xml);

        // Format string to XML
        $dom = new DOMDocument;
        $dom->preserveWhiteSpace = FALSE;
        $dom->loadXML($xml);
        $dom->formatOutput = TRUE;

        // Write XML to file and close it
        fwrite($this->sitemap_file, $dom->saveXML());
        fclose($this->sitemap_file);
    }    
///*/ ahilespelid ///*/
}
