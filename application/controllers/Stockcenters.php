<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stockcenters extends CI_Controller {

    function __construct(){    
        parent::__construct();
        $this->load->library('twig');
        $this->load->model('Citymodel');  
        $this->load->model('DiscountsModel');
        $this->load->model('Advertmodel');
        //$this->output->enable_profiler(TRUE);
    }



	public function listing($city=1,$pagenum=1){
        $curcity = $this->Citymodel->resolve_city();
        if($curcity != $city && uri_string() != 'catalogue/stockcenters')
            $this->Citymodel->goto_correct_city($city);
        if(uri_string() == 'catalogue/stockcenters')
            $city = $curcity;
        $cityinfo = $this->Citymodel->get_city($city);


		$this->load->model('Stockcentersmodel');

        $companies_count = $this->Stockcentersmodel->get_stockcentersCount($city);
        $companies = $this->Stockcentersmodel->get_stockcenters($city,$pagenum);
        //print_r($this->db->last_query());
		$data = array(
					'meta'=>
						array('title'=>"Дисконт и Сток центры ".$cityinfo->nameWhich." : адреса, магазины, официальный сайт. Скидки и распродажи",'description'=>'Все Дисконт и Сток центры '.$cityinfo->nameWhich.' , официальный сайт а также актуальные  новости, отзывы и адреса магазинов','keywords'=>'распродажа, акции, скидки, дисконт центр, дисконтная карта, отзывы, сток центр, распродажи в '.$cityinfo->nameWhere.', скидки в '.$cityinfo->nameWhere.', конкурс, рекламные акции, распродажа одежды, сток, дисконт, распродажи в '.$cityinfo->nameWhere.', распродажа обуви, промо акции, события, магазин сток, скидки мира, скидкимира, купон, распродажи и скидки, Мода и стиль, Товары для дома, Спорт товары, Прочее',
                        'canonical'=>'https://'.$_SERVER['HTTP_HOST'].'/catalogue/stockcenters'),
					'city'=>$city,      
                    'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),   
                    'searchtype'=>'company',                      
                    'adverts'=>$this->Advertmodel->get_adverts(),                                                   
					'content'=>
						array(
								'title'=>'Дисконт и сток центры',
								'tc'=>$companies								
						),
		);
        
        //print_r($companys);
        $this->load->library('pagination');
        $config['num_links'] = 5;
        $config['base_url'] = '/catalogue/stockcenters/city/'.$city.'/p/';
        $config['page_query_string'] = false;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = 6;
        $config['total_rows'] = $companies_count;
        $config['per_page'] = $this->Stockcentersmodel->get_perPage();
        $config['first_link']  = '<span aria-hidden="true"><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i></span>';
        $config['prev_link']  = 'предыдущая';
        $config['next_link']  = 'следующая →';
        $config['last_link']  = '';

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
		$data['content']['pagination'] = str_replace('"/catalogue/stockcenters/city/'.$city.'/p/"','"/catalogue/stockcenters"',$data['content']['pagination']);



        $this->twig->render('webshops.twig', $data);		        
    }

	public function cat($city,$cat=1,$pagenum=1){
		$this->load->model('Stockcentersmodel');
        
		$curcity = $this->Citymodel->resolve_city();
        if($curcity != $city)
            $this->Citymodel->goto_correct_city($city);
        $cityinfo = $this->Citymodel->get_city($city);

        

        $companies_count = $this->Stockcentersmodel->get_companysCount($city,$cat);
        $companies = $this->Stockcentersmodel->get_companys($city,$pagenum,$cat);
        $catinfo = $this->Stockcentersmodel->get_catinfo($cat);

		$data = array(
					'meta'=>
						array('title'=>"Магазины, компании и брэнды ".$cityinfo->nameWhich." : адреса, магазины, официальный сайт. Скидки и распродажи",
                                'description'=>'Все новые компании, магазины и брэнды '.$cityinfo->nameWhich.', официальный сайт а также актуальные  новости, отзывы и адреса магазинов',
                                'keywords'=>'распродажа, акции, скидки, дисконт центр, дисконтная карта, отзывы, сток центр, распродажи в Москве, скидки в '.$cityinfo->nameWhere.', конкурс, рекламные акции, распродажа одежды, сток, дисконт, распродажи в москве, распродажа обуви, промо акции, события, магазин сток, скидки мира, скидкимира, купон, распродажи и скидки, Мода и стиль',
                                'canonical'=>'https://'.$_SERVER['HTTP_HOST'].'/catalogue/stockcenters/cat/'.$cat),
					'city'=>$city,     
                    'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),   
                    'searchtype'=>'company',                      
                    'adverts'=>$this->Advertmodel->get_adverts(),                                                            
					'content'=>
						array(
								'title'=>'Дисконт и сток центры',
								'tc'=>$companies,
                                'cat'=>$catinfo								
						),
		);
        
        //print_r($companys);
        $this->load->library('pagination');
        $config['num_links'] = 5;
        $config['base_url'] = '/catalogue/company/city/'.$city.'/cat/'.$cat.'/p/';                              
        $config['page_query_string'] = false;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = 8;
        $config['total_rows'] = $companies_count;
        $config['per_page'] = $this->Stockcentersmodel->get_perPage();
        $config['first_link']  = '<span aria-hidden="true"><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i></span>';
        $config['prev_link']  = 'предыдущая';
        $config['next_link']  = 'следующая →';
        $config['last_link']  = '';

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
		$data['content']['pagination'] = str_replace('"/catalogue/company/city/'.$city.'/cat/'.$cat.'/p/"','"/catalogue/company/cat/'.$cat.'"',$data['content']['pagination']);



        $this->twig->render('webshops.twig', $data);		        
    }    


}