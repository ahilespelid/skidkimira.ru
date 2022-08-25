<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands extends CI_Controller {
    function __construct(){    
        parent::__construct();
		$this->load->library('twig');
        $this->load->model('Citymodel');
		$this->load->model('DiscountsModel');  
        $this->load->model('Advertmodel');		
        //$this->output->enable_profiler(TRUE);
    }

	public function listing($city=1,$ispage=false,$pagenum=0){
		$curcity = $this->Citymodel->resolve_city();
        if($curcity != $city && uri_string() != 'catalogue/brands')
            $this->Citymodel->goto_correct_city($city);
        if(uri_string() == 'catalogue/brands')
            $city = $curcity;            
        $cityinfo = $this->Citymodel->get_city($city);


		$this->load->model('Brandmodel');
		$data = array(
					'meta'=>
						array('title'=>"Каталог брендов города ". $cityinfo->nameWhich .". Брендовые акции, скидки, распродажи на сайте Skidkimira",
						'description'=>'Горячие скидки и акции брендов города '. $cityinfo->nameWhich .'. Брендовые распродажи на Skidkimira',
						'keywords'=>'брендовые скидки '.$cityinfo->nameWhich . ', брендовые акции города '.$cityinfo->nameWhich .', распродажи '.$cityinfo->nameWhich,
						'canonical'=>'https://'.$_SERVER['HTTP_HOST'].'/catalogue/catalogue/brands'),
					'city'=>$city,		
					'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),
                    'searchtype'=>'brand',       							
					'adverts'=>$this->Advertmodel->get_adverts(),         		
					'content'=>
						array(
							'brands'=>$this->Brandmodel->get_brands($city)
						),
					'additional'=>array('promotextbtm'=>'<h3>Скидки, акции, распродажи всех брендов '. $cityinfo->nameWhich .'</h3>') // шаблонный текст для категории
		);
		

        $this->twig->render('brands.twig', $data);

	}

	public function cat($cat){
		$city = $this->Citymodel->resolve_city();
		$this->load->model('Brandmodel');
		$categories = $this->Brandmodel->get_brandCategories();
		$category = array();
		$cityinfo = $this->Citymodel->get_city($city);
		foreach($categories as $cat_tmp){
			
			if($cat_tmp['id'] == $cat){
				$category = $cat_tmp;
			}
		}
		if(empty($category)){
			show_404();
		}
		else{
			//print_R($category);
			$brands = $this->Brandmodel->get_brandsFromCategory($category['id']);
			//print_R($brands);
			$data = array(
			'meta' =>
						array(	'title'=>$category['name']. " - каталог брендовых акций, скидок, распродаж на сайте Skidkimira",
								'description'=>'Свежие скидки и акции из категории "'. $category['name'] .'". в городе '.$cityinfo->name.'. Распродажи на Skidkimira',
								'keywords'=>$category['name'] .' скидки '.$cityinfo->nameWhich . ',' .$category['name'] . ' брендовые акции города '.$cityinfo->nameWhich .','  .$category['name'] . ' распродажи '.$cityinfo->nameWhich,
								'canonical'=>'https://'.$_SERVER['HTTP_HOST'].'/catalogue/brands/cat/'.$cat),
						'city'=>$city,	
						'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),		
						'adverts'=>$this->Advertmodel->get_adverts(),    
						'searchtype'=>'brand',     				
						'content'=>
							array(
								'brands'=>$brands,
								'cattitle'=>$category['name']
							),
					//'additional'=>array('promotextbtm'=> print_r($category).'<h3>'.$category['name'].' - скидки, распродажи, акции брендов города '.$cityinfo->nameWhich.'</h3>') // шаблонный текст для категории
			);
			/************вывод разного текста для подкатегорий брендов*****************/
			switch($category['id']) {
				case 'clothes': 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$category['name'].' скидка 1');
					break;
				case 'shoes': 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$category['name'].' скидка 2');
					break;
				case 'accessories': 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$category['name'].' скидка 3');
					break;
				case 'sport': 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$category['name'].' скидка 4');
					break;
				case 'toiletry': 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$category['name'].' скидка 5');
					break;
				case 'furniture': 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$category['name'].' скидка 6');
					break;
				case 'children': 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$category['name'].' скидка 7');
					break;
				case 'electro': 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$category['name'].' скидка 8');
					break;
				case 'auto': 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$category['name'].' скидка 9');
					break;
				case 'jewelry': 
					$data['additional'] = array ('promotextbtm'=> '<h3>'.$category['name'].' скидка 10');
					break;				
				default: 
					$data['additional'] = array ('promotextbtm'=> 'прочее');
					break;
			}

			 $this->twig->render('brands.twig', $data);

		}
	}

	public function details($id){
		$this->load->model('Brandmodel');
		$brand = $this->Brandmodel->get_brand($id);
		$city = $this->Citymodel->resolve_city();
		$cityinfo = $this->Citymodel->get_city($city);
		if(!is_object($brand)){
            show_404();
        }
		$brandcompanies = $this->Brandmodel->get_brandCompany($id);

		$canonical = $brand->htmlCanonicalLink;
		if(!$canonical || $canonical == '' || $canonical == null ){
			$canonical = 'https://'.$_SERVER['HTTP_HOST'].'/brand/'.$id;
		}

		$data = array(
					'meta'=>
						array('title'=>$brand->name. ' - скидки, акции, распродажи в городе '.$cityinfo->nameWhich. ' на сайте Skidkimira',
						'description'=>$brand->name.' - действующие скидки и акции можно найти на сайте Skidkimira. '.$brand->name.' - многочисленные распродажи в городе ' .$cityinfo->name,
						'keywords'=>$brand->name.' скидки в городе '.$cityinfo->nameWhich. ','.$brand->name.' скидки в городе '.$cityinfo->nameWhich,
						'canonical'=>$canonical),
					'city'=>$city,			
					'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),			
					'adverts'=>$this->Advertmodel->get_adverts(),        
					'searchtype'=>'brand', 
					'content'=>
						array(
							'brand'=>$brand,
							'brandcompanies'=>$this->Brandmodel->get_brandCompany($id),
							'similarbrands'=>$this->Brandmodel->get_similar($id)
						),'additional'=>array('promotextbtm'=>'<h3>Бренд '.$brand->name.' - скидки, акции, распродажи в городе '.$cityinfo->name.'</h3>') // шаблонный текст для категории
		);		

		$this->twig->render('brand.twig', $data);
	}

}
