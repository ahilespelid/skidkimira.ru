<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tradecenters extends CI_Controller {
    
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
        if($curcity != $city && uri_string() != 'catalogue/tradecenters')
            $this->Citymodel->goto_correct_city($city);
        if(uri_string() == 'catalogue/tradecenters')
            $city = $curcity;

        $cityinfo = $this->Citymodel->get_city($city);

		$this->load->model('Tradecentersmodel');

        $tc_count = $this->Tradecentersmodel->get_tradecentersCount($city);
        $tc = $this->Tradecentersmodel->get_tradecenters($city,$pagenum);
        

        //print_r($this->db->last_query());
        //print_r($tc);
        
		$data = array(
					'meta'=>
						array(  'title'=>"Магазины, компании и брэнды ".$cityinfo->nameWhich."  : адреса, магазины, официальный сайт. Скидки и распродажи",
                        'description'=>'Все новые компании, магазины и брэнды '.$cityinfo->nameWhich.', официальный сайт а также актуальные  новости, отзывы и адреса магазинов',                  
                        'keywords'=>'распродажа, акции, скидки, дисконт центр, дисконтная карта, отзывы, сток центр, распродажи в '.$cityinfo->nameWhere.', скидки в '.$cityinfo->nameWhere.', конкурс, рекламные акции, распродажа одежды, сток, дисконт, распродажи в '.$cityinfo->nameWhere.', распродажа обуви, промо акции, события, магазин сток, скидки мира, скидкимира, купон, распродажи и скидки, ',
                        'canonical'=>'https://'.$_SERVER['HTTP_HOST'].'/catalogue/tradecenters'),
					'city'=>$city,      
                    'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),   
                    'adverts'=>$this->Advertmodel->get_adverts(),  
                    'searchtype'=>'tc',                                                                      
					'content'=>
						array(
								'title'=>'Торговые центры',
								'tc'=>$tc								
						),
		);
        
        //print_r($companys);
        $this->load->library('pagination');
        $config['num_links'] = 5;
        $config['base_url'] = '/catalogue/tradecenters/city/'.$city.'/p/';
        $config['page_query_string'] = false;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = 6;
        $config['total_rows'] = $tc_count;
        $config['per_page'] = $this->Tradecentersmodel->get_perPage();
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
		$data['content']['pagination'] = str_replace('"/catalogue/tradecenters/city/'.$city.'/p/"','"/catalogue/tradecenters"',$data['content']['pagination']);



        $this->twig->render('tradecenters.twig', $data);
             
    }

    public function details($id){
        $this->load->model('Tradecentersmodel');
        $city=$this->Citymodel->resolve_city();
        $tc = $this->Tradecentersmodel->get_tradecenter($id,$city);

		if(!is_object($tc)){
            show_404();
        }        

        $tc_comp = $this->Tradecentersmodel->get_tradecentercompanies($tc->branch_id,$city);
        //print_r($this->db->last_query());

        $title = $tc->name." : адреса, магазины, официальный сайт. Скидки и распродажи в ".$tc->city_namewhere;
        if($tc->htmlTitle && $tc->htmlTitle != '')
            $title = $tc->htmlTitle;
             
        $description = 'Все новые скидки, акци и распродажи в '.$tc->name.', официальный сайт а также актуальные  новости, отзывы и адреса магазинов &#34;'.$tc->name.'&#34;';
        if($tc->htmlDescription && $tc->htmlDescription != '')
            $description = $tc->htmlDescription;

        $keywords = 'распродажа, акции, скидки, дисконт центр, дисконтная карта, сток центр, распродажи в '.$tc->city_namewhere.', скидки в '.$tc->city_namewhere.', конкурс, рекламные акции, распродажа одежды, сток, дисконт, распродажи в '.$tc->city_namewhere.', распродажа обуви, промо акции, события, магазин сток, скидки мира, скидкимира, купон, распродажи и скидки';
        if($tc->htmlKeywords && $tc->htmlKeywords != '')
            $keywords = $tc->htmlKeywords;

		$canonical = $tc->htmlCanonicalLink;
		if(!$canonical || $canonical == '' || $canonical == null ){
			$canonical = 'https://'.$_SERVER['HTTP_HOST'].'/tcbrand/'.$id;
		}


		$data = array(
					'meta'=>
						array('title'=>$title,
                                'canonical'=>$tc->htmlCanonicalLink,                        
                                'description'=>$description,
                                'keywords'=>$keywords,
                                'canonical'=>$canonical
                            ),
					'city'=>$city,     
                    'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),    
                    'adverts'=>$this->Advertmodel->get_adverts(),
                    'searchtype'=>'tc',    
                    'showleftbanners'=> true,                                                                            
					'content'=>
						array(
								'title'=>$tc->name,
								'tc'=>$tc,	
                                'tc_comp'=>$tc_comp						
						),
		);
                
        $this->twig->render('tradecenter.twig', $data);
        
    }

}
?>