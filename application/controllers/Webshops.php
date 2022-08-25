<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webshops extends CI_Controller {
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
        if($curcity != $city && uri_string() != 'catalogue/webshops')
            $this->Citymodel->goto_correct_city($city);
        if(uri_string() == 'catalogue/webshops')
            $city = $curcity;
        $cityinfo = $this->Citymodel->get_city($city);
        
		$this->load->model('Webshopsmodel');

        $tc_count = $this->Webshopsmodel->get_webshopsCount($city);
        //print_R($this->db->last_query());
        $tc = $this->Webshopsmodel->get_webshops($city,$pagenum);
        //print_r($tc_count);
        //print_r($tc);
        
		$data = array(
					'meta'=>
						array('title'=>"Интернет Магазины ".$cityinfo->nameWhich." : адреса, магазины, официальный сайт. Скидки и распродажи на Skidkimira",
                        'description'=>'Все интернет магазины'.$cityinfo->nameWhich.', официальный сайт, а также актуальные  новости, отзывы и адреса магазинов на Skidkimira',
                        'keywords'=>'распродажа, акции, скидки, дисконт центр, дисконтная карта, отзывы, сток центр, распродажи в '.$cityinfo->nameWhere.', скидки в '.$cityinfo->nameWhere.', конкурс, рекламные акции, распродажа одежды, сток, дисконт, распродажи в москве, распродажа обуви, промо акции, события, магазин сток, скидки мира, скидкимира, купон, распродажи и скидки, Супермаркеты, ТЦ ',
                        'canonical'=>'https://'.$_SERVER['HTTP_HOST'].'/catalogue/webshops'),
					'city'=>$city,          
                    'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),   
                    'adverts'=>$this->Advertmodel->get_adverts(),
                    'searchtype'=>'company',                                                                      
					'content'=>
						array(
								'title'=>'Интернет магазины',
								'tc'=>$tc								
						),
					'additional'=>array('promotextbtm'=>'<h3>Скидки, акции, распродажи в интернет-магазинах '.$cityinfo->nameWhich.'</h3>') // шаблонный текст для категории
		);
        
        //print_r($companys);
        $this->load->library('pagination');
        $config['num_links'] = 5;
        $config['base_url'] = '/catalogue/webshops/city/'.$city.'/p/';
        $config['page_query_string'] = false;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = 6;
        $config['total_rows'] = $tc_count;
        $config['per_page'] = $this->Webshopsmodel->get_perPage();
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
		$data['content']['pagination'] = str_replace('"/catalogue/webshops/city/'.$city.'/p/"','"/catalogue/webshops"',$data['content']['pagination']);



        $this->twig->render('webshops.twig', $data);
             
    }


	public function cat($city=1,$cat=1,$pagenum=1){
        $curcity = $this->Citymodel->resolve_city();
        if($curcity != $city && uri_string() != 'catalogue/webshops/cat/'.$cat)
            $this->Citymodel->goto_correct_city($city);
        if(uri_string() == 'catalogue/webshops/cat/'.$cat)
            $city = $curcity;
        $cityinfo = $this->Citymodel->get_city($city);

		$this->load->model('Webshopsmodel');
        $this->load->model('Companymodel');
        
        

        $tc_count = $this->Webshopsmodel->get_webshopsCount($city,$cat);
        //print_R($this->db->last_query());
        $tc = $this->Webshopsmodel->get_webshops($city,$pagenum,$cat);        

        $catinfo = $this->Companymodel->get_catinfo($cat);
       
		$data = array(
					'meta'=>
						array('title'=>"Интернет Магазины ".$cityinfo->nameWhich." : адреса, магазины, официальный сайт. Скидки и распродажи на сайте Skidkimira",
                        'description'=>'Все интернет магазины '.$cityinfo->nameWhich.', официальный сайт а также актуальные  новости, отзывы и адреса магазинов',
                        'keywords'=>'распродажа, акции, скидки, дисконт центр, дисконтная карта, отзывы, сток центр, распродажи в '.$cityinfo->nameWhere.', скидки в '.$cityinfo->nameWhere.', конкурс, рекламные акции, распродажа одежды, сток, дисконт, распродажи в москве, распродажа обуви, промо акции, события, магазин сток, скидки мира, скидкимира, купон, распродажи и скидки, Супермаркеты, ТЦ ',
                        'canonical'=>'https://'.$_SERVER['HTTP_HOST'].'/catalogue/webshops/cat/'.$cat),
					'city'=>$city,    
                    'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),        
                    'adverts'=>$this->Advertmodel->get_adverts(),        
                    'searchtype'=>'company',                                                               
					'content'=>
						array(
								'title'=>'Интернет магазины',
								'tc'=>$tc,
                                'cat'=>$catinfo								
						),				
					//'additional'=>array('promotextbtm'=>'<h3>Скидки, акции, распродажи в категории '.$catinfo->name.'</h3>') // шаблонный текст для категории
		);
		// вывод текста для подкатегорий категории Интернет-магазины
			
			switch($cat) {
				case 2: 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$catinfo->name.' скидка 1');
					break;
				case 3: 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$catinfo->name.' скидка 2');
					break;
				case 4: 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$catinfo->name.' скидка 3');
					break;
				case 5: 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$catinfo->name.' скидка 4');
					break;
				case 6: 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$catinfo->name.' скидка 5');
					break;
				case 7: 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$catinfo->name.' скидка 6');
					break;
				case 8: 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$catinfo->name.' скидка 7');
					break;
				case 9: 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$catinfo->name.' скидка 8');
					break;
				case 10: 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$catinfo->name.' скидка 9');
					break;
				case 11: 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$catinfo->name.' скидка 10');
					break;
				case 12: 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$catinfo->name.' скидка 11');
					break;
				case 13: 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$catinfo->name.' скидка 12');
					break;
				case 14: 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$catinfo->name.' скидка 13');
					break;
				case 16: 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$catinfo->name.' скидка 14');
					break;					
				default: 
					$data['additional'] = array ('promotextbtm'=> 'прочее');
					break;
			}
        
        //print_r($companys);
        $this->load->library('pagination');
        $config['num_links'] = 5;
        $config['base_url'] = '/catalogue/webshops/city/'.$city.'/cat/'.$cat.'/p/';                              
        $config['page_query_string'] = false;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = 8;
        $config['total_rows'] = $tc_count;
        $config['per_page'] = $this->Webshopsmodel->get_perPage();
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
		$data['content']['pagination'] = str_replace('"/catalogue/webshops/city/'.$city.'/cat/'.$cat.'/p/"','"/catalogue/webshops/cat/'.$cat.'"',$data['content']['pagination']);



        $this->twig->render('webshops.twig', $data);		        
    }    


	public function subcat($city=1,$subcat=5,$pagenum=1){
		$subcat = $this->db->get_where('subcategory',array('id'=>$subcat))->row();
        redirect('/catalogue/webshops/cat/'.$subcat->categoryId);        
    }    


}
?>