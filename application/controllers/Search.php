<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    


    function __construct(){    
        parent::__construct();
        $this->load->library('twig');
        //$this->output->enable_profiler(TRUE);
    }

    function index(){
        if($this->input->get('searchtype') == 'discount'){
            redirect('http://'.$_SERVER['HTTP_HOST'].'/catalogue/discount/name/'.$this->input->get('search'));
        }
        else if($this->input->get('searchtype') == 'company'){
            redirect('http://'.$_SERVER['HTTP_HOST'].'/catalogue/companycatalogs/name/'.$this->input->get('search'));
        }
        else if($this->input->get('searchtype') == 'tc'){
            redirect('http://'.$_SERVER['HTTP_HOST'].'/catalogue/tradecenters/name/'.$this->input->get('search'));
        }        
        else if($this->input->get('searchtype') == 'brand'){
            redirect('http://'.$_SERVER['HTTP_HOST'].'/catalogue/brands/name/'.$this->input->get('search'));
        }                
    }

    function discount($name){
        $name = urldecode($name);
        $this->load->model('Citymodel');  
        $this->load->model('DiscountsModel');
        $this->load->model('Advertmodel');

        
		$city = $this->Citymodel->resolve_city();
        $cityinfo = $this->Citymodel->get_city($city);        

        $discounts = $this->DiscountsModel->get_discounts_byname($city,$name);
        //print_r($this->db->last_query());
        $keywords = array();

        foreach($discounts as $dscnt){
            $keywords[] = $dscnt->name;
            
        }

		$data = array(
					'meta'=>
						array('title'=>"Актуальные скидки и распродажи  в магазинах ".$cityinfo->nameWhich." адреса магазинов.",
                        'description'=>'Все новые скидки, акци и распродажи в в магазинах '.$cityinfo->nameWhich.', официальный сайт, а также актуальные  новости, отзывы и адреса магазинов',
                        'keywords'=>implode(',',$keywords).', распродажа, акции, скидки, дисконт центр, дисконтная карта, сток центр, распродажи в Москве, скидки в Москве, конкурс, рекламные акции, распродажа одежды, сток, отзывы, дисконт, распродажи в москве, распродажа обуви, промо акции, события, магазин сток, скидки мира, скидкимира, купон, распродажи и скидки, Игрушки, игры, Одежда, Аксессуары, Бытовая техника, Компьютеры, оргтехника, Мебель, интерьер, Обувь, Зоотовары, Активный отдых, Детская одежда и обувь, Ювелирные изделия, украшения, часы, Товары для малышей и будущих мам, Косметика, парфюмерия, Нижнее бельё',
                        'canonical'=>'https://'.$_SERVER['HTTP_HOST'].'/catalogue/discount/name/'.$name),
					'city'=>$city,      
                    'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),   
                    'adverts'=>$this->Advertmodel->get_adverts(),     
                    'searchtype'=>'discount',                                 
					'content'=>
						array(
								'title'=>'Акции и скидки ('.count($discounts).')',
								'discounts'=>$discounts 
								
						),
		);

		$this->twig->render('discounts.twig', $data);        
    }

    function company($name){
        $name = urldecode($name);
        $this->load->model('Citymodel');  
        $this->load->model('CompanyModel');
        $this->load->model('DiscountsModel');
        $this->load->model('Advertmodel');        
		$city = $this->Citymodel->resolve_city();
        
        $cityinfo = $this->Citymodel->get_city($city);

		$this->load->model('CompanyModel');
            
        $companies = $this->CompanyModel->get_companys_byname($city,$name);
        
		$data = array(
					'meta'=>
						array('title'=>"Магазины, компании и брэнды ".$cityinfo->nameWhich." : адреса, магазины, официальный сайт. Скидки и распродажи",
                        'description'=>'Все новые компании, магазины и брэнды '.$cityinfo->nameWhich.', официальный сайт а также актуальные  новости, отзывы и адреса магазинов',
                        'keywords'=>'распродажа, акции, скидки, дисконт центр, дисконтная карта, отзывы, сток центр, распродажи в '.$cityinfo->nameWhere.', скидки в '.$cityinfo->nameWhere.', конкурс, рекламные акции, распродажа одежды, сток, дисконт, распродажи в '.$cityinfo->nameWhere.', распродажа обуви, промо акции, события, магазин сток, скидки мира, скидкимира, купон, распродажи и скидки, Супермаркеты, ТЦ, Мода и стиль, Техника,электроника, Товары для дома, Красота и здоровье, Спорт товары, Товары для детей',
                        'canonical'=>'https://'.$_SERVER['HTTP_HOST'].'/catalogue/companycatalogs/name/'.$name),
					'city'=>$city,      
                    'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),     
					'adverts'=>$this->Advertmodel->get_adverts(), 
                    'searchtype'=>'company',                                                                   
					'content'=>
						array(
								'title'=>'Каталог магазинов ('.count($companies).')',
								'companies'=>$companies								
						),
		);

        $this->twig->render('companies.twig', $data);	        
    }    

    function tc($name){
        $name = urldecode($name);        
        $this->load->model('Citymodel');  
        $this->load->model('CompanyModel');
        $this->load->model('DiscountsModel');
        $this->load->model('Advertmodel');                
        $city = $this->Citymodel->resolve_city();

        $cityinfo = $this->Citymodel->get_city($city);

		$this->load->model('Tradecentersmodel');

        
        $tc = $this->Tradecentersmodel->get_tradecenters_byname($city,$name);

		$data = array(
					'meta'=>
						array(  'title'=>"Магазины, компании и брэнды ".$cityinfo->nameWhich."  : адреса, магазины, официальный сайт. Скидки и распродажи",
                        'description'=>'Все новые компании, магазины и брэнды '.$cityinfo->nameWhich.', официальный сайт а также актуальные  новости, отзывы и адреса магазинов',                  
                        'keywords'=>'распродажа, акции, скидки, дисконт центр, дисконтная карта, отзывы, сток центр, распродажи в '.$cityinfo->nameWhere.', скидки в '.$cityinfo->nameWhere.', конкурс, рекламные акции, распродажа одежды, сток, дисконт, распродажи в '.$cityinfo->nameWhere.', распродажа обуви, промо акции, события, магазин сток, скидки мира, скидкимира, купон, распродажи и скидки, ',
                        'canonical'=>'https://'.$_SERVER['HTTP_HOST'].'/catalogue/tradecenters/name/'.$name),
                        
					'city'=>$city,      
                    'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),   
                    'adverts'=>$this->Advertmodel->get_adverts(),  
                    'searchtype'=>'tc',                                                                      
					'content'=>
						array(
								'title'=>'Торговые центры ('.count($tc).')',
								'tc'=>$tc								
						),
		);


        $this->twig->render('tradecenters.twig', $data);        
    }

    function brands($name){
        $name = urldecode($name);        
        $this->load->model('Citymodel');          
        $this->load->model('DiscountsModel');
        $this->load->model('Advertmodel');
        $this->load->model('Brandmodel');

        $city = $this->Citymodel->resolve_city();

        $cityinfo = $this->Citymodel->get_city($city);

		

		$brands = $this->Brandmodel->get_brands_byname($name,$city);
		
        //print_R($brands);
        $data = array(
                    'meta'=>
                        array('title'=>"Каталог брендов",'description'=>'','keywords'=>'',
                        'canonical'=>'https://'.$_SERVER['HTTP_HOST'].'/catalogue/brands/name/'.$name),
                    'city'=>$city,	
                    'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),		
                    'adverts'=>$this->Advertmodel->get_adverts(),    
                    'searchtype'=>'brand',     				
                    'content'=>
                        array(
                            'brands'=>$brands,
                            'cattitle'=>'Поиск по брендам'
                        )
        );

		 $this->twig->render('brands.twig', $data);

		        
    }            
}
?>