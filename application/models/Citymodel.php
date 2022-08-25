<?php
ini_set('display_errors',0);
class Citymodel extends CI_Model
{

    public $cities = array();

    function get_cities()
    {

        if (empty($this->cities)) {
            $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));

            if (!$this->cities = $this->cache->get('cities')) {
                $cities = array();
                foreach ($this->db->select('id,name,nameWhere,nameWhich,subDomain')->get('city')->result() as $city) {
                    $cities[$city->id] = $city;
                }
                $this->cities = $cities;
                $this->cache->save('cities', $cities, 600);
            }
        }
        return $this->cities;
    }

    function get_city($id)
    {
        $cities = $this->Citymodel->get_cities();
        return $cities[$id];
    }


    function resolve_city()
    {
        $cities = $this->Citymodel->get_cities();

        $domain = $_SERVER['HTTP_HOST'];
/*
        if (substr_count($domain, '.') > 2) {
            $subdomain = substr($domain, 0, strpos($domain, '.skidkimira.ru'));
            $subdomain = substr($subdomain, strrpos($subdomain, '.') + 1);
            $redirrection = "https://" . $subdomain . ".skidkimira.ru" . $_SERVER['REQUEST_URI'];
            header("HTTP/1.1 301 Moved Permanently");
            header("City Redirrect go");
            header("Location: " . $redirrection);
            exit();
        }

        if (strpos($domain, ':') > 0) {
            $domain = substr($domain, 0, strpos($domain, ':'));
            $domain .= '.ru';
        }
*/
        $domains_exploded = explode('.', $domain);

        if (count($domains_exploded) == 1 || count($domains_exploded) == 2)///CHANGE HERE
            return 1;
        else {
            foreach ($cities as $key => $cityvalue) {
                if ($cityvalue->subDomain == $domains_exploded[0]) {
                    return $key;
                }
            }

            show_404();
        }
    }

    function goto_correct_city($id)
    {
        $cities = $this->Citymodel->get_cities();

        if ($id != 1) {
            // version 1 before NeoAge
            //$url = 'http://' . $cities[$id]->subDomain . ".skidkimira.ru/" . uri_string();

            // version 2
            /*
            $scheme = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
            $domain_names = explode('.', $_SERVER['HTTP_HOST']);
            $tld = array_pop($domain_names);
            $sld = array_pop($domain_names);
            $url = $scheme . $cities[$id]->subDomain . '.' . $sld . '.' . $tld . '/' . uri_string();
            */

            $scheme = parse_url(base_url(), PHP_URL_SCHEME);
            $host = implode('.', array(
                $cities[$id]->subDomain,
                parse_url(base_url(), PHP_URL_HOST)
            ));
            $url = $scheme . '://' . $host . '/' . uri_string();

        } else {
            $url = base_url() . uri_string();
        }

        redirect($url, 'auto', 301);
        die();
    }

    function get_fist_companycityurl($id)
    {
        $companycity = $this->db->select('cityid')->limit(1)->order_by('cityid', 'asc')->get_where('companycitydescription', array('companyid' => $id))->row()->cityid;
        $cities = $this->Citymodel->get_cities();
        if ($companycity != 1)
            return $cities[$companycity]->subDomain . '.';
        else
            return '';
    }

}

?>