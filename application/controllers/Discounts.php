<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discounts extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->library('twig');
        $this->load->model('Citymodel');
        $this->load->model('DiscountsModel');
        $this->load->model('Advertmodel');
        //$this->output->enable_profiler(TRUE);
    }
    public function listing($isactual = 1, $pagenum = 1)
    {

        $city = $this->Citymodel->resolve_city();
        $cityinfo = $this->Citymodel->get_city($city); 


        $discountscount = $this->DiscountsModel->get_discounsCount($city);
        
        $discounts = $this->DiscountsModel->get_discounts($city, $pagenum);

        //$this->pa($discountscount);
        //$this->pa($pagenum);
        //$this->pa($city);
        //$this->pa($discounts);  
        
        $keywords = array();

        foreach ($discounts as $dscnt) {
            $keywords[] = $dscnt->name;

        }

        $data = array(
            'meta' =>
                array(
                    'title' => "Акции и скидки, официальный сайт, каталог",
                    'description' => 'Официальный сайт, скидки, акции и распродажи ' . $cityinfo->nameWhich,
                    'keywords' => implode(',', $keywords),
                    'canonical' => 'https://' . $_SERVER['HTTP_HOST'] . '/catalogue/discount'),
            'city' => $city,
            'lastdiscounts' => $this->DiscountsModel->get_lastDiscounts($city),
            'adverts' => $this->Advertmodel->get_adverts(),
            'searchtype' => 'discount',
            'content' =>
                array(
                    'title' => 'Акции и скидки (' . $discountscount . ')',
                    'discounts' => $discounts

                ),
            'additional' => array('promotextbtm' => '<h3>Скидки, акции, распродажи ' . $cityinfo->nameWhich . '</h3>') // шаблонный текст для категории
        );


        $this->load->library('pagination');
        $config['num_links'] = 5;
        $config['base_url'] = '/catalogue/discount/actual/' . $isactual . '/p/';
        $config['page_query_string'] = false;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = 6;
        $config['total_rows'] = $discountscount;
        $config['per_page'] = $this->DiscountsModel->get_perPage();
        $config['first_link'] = '<span aria-hidden="true"><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i></span>';
        $config['prev_link'] = 'предыдущая';
        $config['next_link'] = 'следующая →';
        $config['last_link'] = '';

        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $data['content']['pagination'] = $this->pagination->create_links();
        $data['content']['pagination'] = str_replace('"/catalogue/discount/actual/1/p/"', '"/catalogue/discount"', $data['content']['pagination']);


        $this->twig->render('discounts.twig', $data);
    }

    public function cat($cat = null, $isactual = 1, $pagenum = 1)
    {

        $city = $this->Citymodel->resolve_city();;
        $cityinfo = $this->Citymodel->get_city($city);

        $catinfo = $this->DiscountsModel->get_catinfo($cat);

        $discounts = $this->DiscountsModel->get_discounts($city, $pagenum, 'cat', $cat);
        //print_r($this->db->last_query());
        $keywords = array();

        foreach ($discounts as $dscnt) {
            $keywords[] = $dscnt->name;
        }

        $title = $this->DiscountsModel->get_catCustomTitle($catinfo, $pagenum, $cityinfo, "Акции и скидки  " . $catinfo->name . " " . $cityinfo->nameWhich);
        $description = $this->DiscountsModel->get_catCustomDescription($catinfo, $pagenum, $cityinfo, 'Акции и скидки, официальный сайт, каталог, а также актуальные  новости, отзывы и адреса магазинов.');
        $keywords = $this->DiscountsModel->get_catCustomKeywords($catinfo, $pagenum, $cityinfo, implode(',', $keywords));

        $discountscount = $this->DiscountsModel->get_discounsCount($city, 'cat', $cat);

        if ($pagenum > 1) {
            $catinfo->top_text = '';
            $catinfo->bottom_text = '';
        } else {
            $catinfo->top_text = str_replace('%city%', $cityinfo->name, $catinfo->top_text);
            $catinfo->bottom_text = str_replace('%city%', $cityinfo->name, $catinfo->bottom_text);
        }

        $data = array(
            'meta' =>
                array('title' => $title,
                    'description' => $description,
                    'keywords' => $keywords,
                    'canonical' => 'https://' . $_SERVER['HTTP_HOST'] . '/catalogue/discount/cat/' . $cat
                ),
            'city' => $city,
            'lastdiscounts' => $this->DiscountsModel->get_lastDiscounts($city),
            'adverts' => $this->Advertmodel->get_adverts(),
            'searchtype' => 'discount',
            'content' =>
                array(
                    'title' => $catinfo->name . ' (' . $discountscount . ')',
                    'discounts' => $discounts,
                    'cat' => $catinfo

                ),
            //'additional'=>array('promotextbtm'=> print_r($cat))
        );
// вывод текста для подкатегорий категории Акции и Скидки

        switch ($cat) {
            case 2:
                $data['add'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 1');
                break;
            case 3:
                $data['add'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 2');
                break;
            case 4:
                $data['add'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 3');
                break;
            case 5:
                $data['add'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 4');
                break;
            case 6:
                $data['add'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 5');
                break;
            case 7:
                $data['add'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 6');
                break;
            case 8:
                $data['add'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 7');
                break;
            case 9:
                $data['add'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 8');
                break;
            case 10:
                $data['add'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 9');
                break;
            case 11:
                $data['add'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 10');
                break;
            case 12:
                $data['add'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 11');
                break;
            case 13:
                $data['add'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 12');
                break;
            case 14:
                $data['add'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 13');
                break;
            case 16:
                $data['add'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            default:
                $data['add'] = array('promotextbtm' => 'прочее');
                break;
        }


        $this->load->library('pagination');
        $config['num_links'] = 5;
        $config['base_url'] = '/catalogue/discount/cat/' . $cat . '/actual/' . $isactual . '/p/';
        $config['page_query_string'] = false;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = 8;
        $config['total_rows'] = $discountscount;
        $config['per_page'] = $this->DiscountsModel->get_perPage();
        $config['first_link'] = '<span aria-hidden="true"><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i></span>';
        $config['prev_link'] = 'предыдущая';
        $config['next_link'] = 'следующая →';
        $config['last_link'] = '';

        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $data['content']['pagination'] = $this->pagination->create_links();
        $data['content']['pagination'] = str_replace('"/catalogue/discount/cat/' . $cat . '/actual/1/p/"', '"/catalogue/discount/cat/' . $cat . '"', $data['content']['pagination']);


        $this->twig->render('discounts.twig', $data);
    }

    public function subcat($subcat = null, $isactual = 1, $pagenum = 1)
    {
        $city = $this->Citymodel->resolve_city();

        $cityinfo = $this->Citymodel->get_city($city);

        $catinfo = $this->DiscountsModel->get_subcatinfo($subcat);

        $discounts = $this->DiscountsModel->get_discounts($city, $pagenum, 'subcat', $subcat);

        $keywords = array();

        foreach ($discounts as $dscnt) {
            $keywords[] = $dscnt->name;

        }
        $discountscount = $this->DiscountsModel->get_discounsCount($city, 'subcat', $subcat);

        $data = array(
            'meta' =>
                array('title' => "Акции и скидки, официальный сайт, каталог",
                    'description' => 'Официальный сайт, скидки, акции и распродажи ' . $cityinfo->nameWhich,
                    'keywords' => implode(',', $keywords),
                    'canonical' => 'https://' . $_SERVER['HTTP_HOST'] . '/catalogue/discount/subcat/' . $subcat),
            'city' => $city,
            'lastdiscounts' => $this->DiscountsModel->get_lastDiscounts($city),
            'adverts' => $this->Advertmodel->get_adverts(),
            'searchtype' => 'discount',
            'content' =>
                array(
                    'title' => $catinfo->name . '(' . $discountscount . ')',
                    'discounts' => $discounts,
                    'subcat' => $catinfo,
                    'cat' => array('id' => $catinfo->categoryId)

                ),
        );
// вывод текста для подкатегорий категории Акции и Скидки			
        switch ($subcat) {
            case 5:  //одежда
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 1');
                break;
            case 6:  //обувь
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 2');
                break;
            case 7:  //акс
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 3');
                break;
            case 8: // нижнее белье
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 4');
                break;
            case 9:  // юва
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 5');
                break;
            case 10:  //детская одежа и обувь
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 6');
                break;
            case 11: //игрушки и игры
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 7');
                break;
            case 12:  //товары для малышей
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 8');
                break;
            case 41: //активный отдых
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 9');
                break;
            case 42:  //фитнес
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 10');
                break;
            case 13:  //косметика и парфюмерия
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 11');
                break;
            case 14:  //аптеки
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 12');
                break;
            case 15:  //салонам красоты
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 13');
                break;
            case 16: // фитнес
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 17: // мед клиники
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 18: // спа
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 19: // оптика
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 47: // сауны
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 20: // автосалоны
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 21: // автосервис
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 22: // автомойки
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 23: // автозапчасти
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 24: // такси прокат
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 25: // быт техника
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 26: // аудио
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 27:// комп
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 28: // телефоны
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 29: // оргтехника
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 30: // мебель
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 31: // ремонт
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 32: // химчистка
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 34: // ремонт быт техники
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 35: // озеленение
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 222: // клининг услуги
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 36: // подарки
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 37: // цветы
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 38: // турфирмы
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 39: // авиа
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 40: // гостиницы
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 43: // развлекательные центры
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 46: // рестораны
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 223: // продукты
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 48: // муз товары
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 51: // разное
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 52: // фото
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            case 49: // зоотовары
                $data['addsubtext'] = array('promotextbtm' => '<h3>' . $catinfo->name . ' скидка 14');
                break;
            default:
                $data['addsubtext'] = array('promotextbtm' => 'прочее');
                break;
        }


        $this->load->library('pagination');
        $config['num_links'] = 5;
        $config['base_url'] = '/catalogue/discount/subcat/' . $subcat . '/actual/' . $isactual . '/p/';
        $config['page_query_string'] = false;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = 8;
        $config['total_rows'] = $discountscount;
        $config['per_page'] = $this->DiscountsModel->get_perPage();
        $config['first_link'] = '<span aria-hidden="true"><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i></span>';
        $config['prev_link'] = 'предыдущая';
        $config['next_link'] = 'следующая →';
        $config['last_link'] = '';

        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $data['content']['pagination'] = $this->pagination->create_links();

        $data['content']['pagination'] = str_replace('"/catalogue/discount/subcat/' . $subcat . '/actual/1/p/"', '"/catalogue/discount/subcat/' . $subcat . '"', $data['content']['pagination']);


        $this->twig->render('discounts.twig', $data);

    }
///*/ ahilespelid ///*/
    public function url($id){
        $this->load->model('DiscountsModel');
        try{
            $discount = (array)$this->DiscountsModel->get_discount($id);
        } catch (\Exception $e){show_404();}
        //pa($discount); exit;       
        $red = (!empty($discount['urlMore']) && !empty($discount['urlCheck'])) ? $discount['urlMore'] : '/discount/'.$id;
        redirect($red, 'location', 301);
    }
///*/ ahilespelid ///*/
    public function details($id)
    {
        $this->load->model('DiscountsModel');
        $this->load->model('CompanyModel');

        $discount = $this->DiscountsModel->get_discount($id);
        if (!is_object($discount)) {
            show_404();
        }

        $city = $this->Citymodel->resolve_city();

        if ($discount->cityId != $city) {
            $this->Citymodel->goto_correct_city($discount->cityId);
        }

        $company = $this->CompanyModel->get_company($discount->companyId);
        $company_discounts = $this->CompanyModel->get_companyDiscounts($discount->companyId, $discount->cityId);
        $company_branches = $this->CompanyModel->get_companyBranches($discount->companyId, $discount->cityId);
        $similar_discounts = $this->DiscountsModel->get_similar($id, $discount->companyId, $city);

        //print_r($company_discounts);


        $title = ($discount->name ? $discount->name . ', скидки ' . $company->name . ', ' . $discount->citynamewhere : $company->name);
        if ($discount->htmlTitle && $discount->htmlTitle != '')
            $title = $discount->htmlTitle;

        $description = 'Акции и скидки, официальный сайт ' . $company->name . ' в ' . $company->name;

        $keywords = ($discount->description ? $discount->description : $company->description);
        if ($discount->htmlKeywords && $discount->htmlKeywords != '')
            $keywords = $discount->htmlKeywords;

        $canonical = '';//$discount->htmlCanonicalLink; // something adds company canonical to the DB, disabled this feature;
        if (!$canonical || $canonical == '' || $canonical == null) {
            $canonical = 'https://' . $_SERVER['HTTP_HOST'] . '/discount/' . $id;
        }

        $data = array(
            'meta' =>
                array('title' => $title, 'description' => $description, 'keywords' => $keywords, 'canonical' => $canonical
                ),
            'city' => $this->Citymodel->resolve_city(),
            'lastdiscounts' => $this->DiscountsModel->get_lastDiscounts($city),
            'adverts' => $this->Advertmodel->get_adverts(),
            'showleftbanners' => true,
            'searchtype' => 'discount',
            'content' =>
                array(
                    'title' => $discount->name,
                    'discount' => $discount,
                    'similar_discounts' => $similar_discounts,
                    'company' => $company,
                    'companydiscounts' => $company_discounts,
                    'companybranches' => $company_branches
                )
        );
        $this->twig->render('discount.twig', $data);

    }


    function tc($tc, $isactual = 1, $pagenum = 1)
    {
        $this->load->model('Tradecentersmodel');

        $city = $this->Citymodel->resolve_city();

        $cityinfo = $this->Citymodel->get_city($city);

        $tcinfo = $this->Tradecentersmodel->get_tradecenter($tc, $city);

        $discounts = $this->DiscountsModel->get_tcDiscounts($tcinfo->branch_id, $city, $pagenum);
        //print_r($this->db->last_query());
        $keywords = array();

        foreach ($discounts as $dscnt) {
            $keywords[] = $dscnt->name;

        }
        $discountscount = $this->DiscountsModel->get_tcDiscountsCount($tcinfo->branch_id, $city);

        $data = array(
            'meta' =>
                array('title' => "Акции и скидки, официальный сайт, каталог",
                    'description' => 'Официальный сайт, скидки, акции и распродажи ' . $cityinfo->nameWhich,
                    'keywords' => implode(',', $keywords),
                    'canonical' => 'https://' . $_SERVER['HTTP_HOST'] . '/catalogue/discount/tc/' . $tc),
            'city' => $city,
            'lastdiscounts' => $this->DiscountsModel->get_lastDiscounts($city),
            'adverts' => $this->Advertmodel->get_adverts(),
            'searchtype' => 'discount',
            'content' =>
                array(
                    'title' => 'Каталог скидок (' . $discountscount . ')',
                    'discounts' => $discounts
                ),
        );


        $this->load->library('pagination');
        $config['num_links'] = 5;
        $config['base_url'] = '/catalogue/discount/tc/' . $tc . '/actual/' . $isactual . '/p/';
        $config['page_query_string'] = false;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = 8;
        $config['total_rows'] = $discountscount;
        $config['per_page'] = $this->DiscountsModel->get_perPage();
        $config['first_link'] = '<span aria-hidden="true"><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i></span>';
        $config['prev_link'] = 'предыдущая';
        $config['next_link'] = 'следующая →';
        $config['last_link'] = '';

        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $data['content']['pagination'] = $this->pagination->create_links();
        $data['content']['pagination'] = str_replace('"/catalogue/discount/tc/' . $tc . '/actual/1/p/"', '"/catalogue/discount/tc/' . $tc . '"', $data['content']['pagination']);


        $this->twig->render('discounts.twig', $data);
    }
}
