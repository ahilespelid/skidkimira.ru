<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Companies extends CI_Controller {

    function __construct(){    
        parent::__construct();
        $this->load->library('twig');
        $this->load->model('Citymodel');  
        $this->load->model('DiscountsModel');
        $this->load->model('Advertmodel');
     //   $this->output->enable_profiler(TRUE);
    }

	public function listing($city=1,$pagenum=1){
		$curcity = $this->Citymodel->resolve_city();
        if($curcity != $city && uri_string() != 'catalogue/company')
            $this->Citymodel->goto_correct_city($city);

        if(uri_string() == 'catalogue/company')
            $city = $curcity;
        $cityinfo = $this->Citymodel->get_city($city);

		$this->load->model('CompanyModel');
        

        $companies_count = $this->CompanyModel->get_companysCount($city);
        $companies = $this->CompanyModel->get_companys($city,$pagenum);
        

		$data = array(
					'meta'=>
						array('title'=>"Магазины, компании и брэнды ".$cityinfo->nameWhich." : адреса, магазины, официальный сайт. Скидки и распродажи",
                        'description'=>'Все новые компании, магазины и брэнды '.$cityinfo->nameWhich.', официальный сайт а также актуальные  новости, отзывы и адреса магазинов',
                        'keywords'=>'распродажа, акции, скидки, дисконт центр, дисконтная карта, отзывы, сток центр, распродажи в '.$cityinfo->nameWhere.', скидки в '.$cityinfo->nameWhere.', конкурс, рекламные акции, распродажа одежды, сток, дисконт, распродажи в '.$cityinfo->nameWhere.', распродажа обуви, промо акции, события, магазин сток, скидки мира, скидкимира, купон, распродажи и скидки, Супермаркеты, ТЦ, Мода и стиль, Техника, электроника, Товары для дома, Красота и здоровье, Спорт товары, Товары для детей',
                        'canonical'=>'https://'.$_SERVER['HTTP_HOST'].'/catalogue/company'),
					'city'=>$city,      
                    'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),     
					'adverts'=>$this->Advertmodel->get_adverts(), 
                    'searchtype'=>'company',                                                                   
					'content'=>
						array(
								'title'=>'Каталог магазинов ('.$companies_count.')',
								'companies'=>$companies								
						),
		);
        
        //print_r($companys);
        $this->load->library('pagination');
        $config['num_links'] = 5;
        $config['base_url'] = '/catalogue/company/city/'.$city.'/p/';
        $config['page_query_string'] = false;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = 6;
        $config['total_rows'] = $companies_count;
        $config['per_page'] = $this->CompanyModel->get_perPage();
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
		$data['content']['pagination'] = str_replace('"/catalogue/company/city/'.$city.'/p/"','"/catalogue/company"',$data['content']['pagination']);



        $this->twig->render('companies.twig', $data);		        
    }

	public function cat($city,$cat=1,$pagenum=1){

		$curcity = $this->Citymodel->resolve_city();
        
        if($curcity != $city && uri_string() != 'catalogue/company/cat/'.$cat)
            $this->Citymodel->goto_correct_city($city);
        if(uri_string() == 'catalogue/company/cat/'.$cat)
            $city = $curcity;            
        $cityinfo = $this->Citymodel->get_city($city);


		$this->load->model('Companymodel');
        
        

        $companies_count = $this->Companymodel->get_companysCount($city,$cat);
        $companies = $this->Companymodel->get_companys($city,$pagenum,$cat);
        $catinfo = $this->Companymodel->get_catinfo($cat);

		$data = array(
					'meta'=>
						array('title'=>"Магазины, компании и брэнды ".$cityinfo->nameWhich." : адреса, магазины, официальный сайт. Скидки и распродажи",
                                'description'=>'Все новые компании, магазины и брэнды '.$cityinfo->nameWhich.', официальный сайт а также актуальные  новости, отзывы и адреса магазинов',
                                'keywords'=>'распродажа, акции, скидки, дисконт центр, дисконтная карта, отзывы, сток центр, распродажи в '.$cityinfo->nameWhere.', скидки в '.$cityinfo->nameWhere.', конкурс, рекламные акции, распродажа одежды, сток, дисконт, распродажи в москве, распродажа обуви, промо акции, события, магазин сток, скидки мира, скидкимира, купон, распродажи и скидки, '.$catinfo->name,
                                'canonical'=>'https://'.$_SERVER['HTTP_HOST'].'/catalogue/company/cat/'.$cat),
					'city'=>$city,   
                    'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),      
                    'adverts'=>$this->Advertmodel->get_adverts(),  
                    'searchtype'=>'company',                               
					'content'=>
						array(
								'title'=>'Каталог магазинов',
								'companies'=>$companies,
                                'cat'=>$catinfo								
						),
		);
		// вывод текста для подкатегорий категории Магазины
			
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
        $config['base_url'] = '/catalogue/company/city/'.$city.'/cat/'.$cat.'/p/';                              
        $config['page_query_string'] = false;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = 8;
        $config['total_rows'] = $companies_count;
        $config['per_page'] = $this->Companymodel->get_perPage();
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



        $this->twig->render('companies.twig', $data);		        
    }    

///*/ ahilespelid ///*/
    public function url($id){
        $this->load->model('Companymodel');
        $city = $this->Citymodel->resolve_city();
        
        try{
            $company = (array)$this->Companymodel->get_companyFull($id,$city);
        } catch (\Exception $e){show_404();}
        //pa($company); exit;
        $red = (!empty($company['urlk']) && !empty($company['urlkCheck'])) ? $company['urlk'] : '/company/'.$id;
        redirect($red, 'location', 301);
    }
///*/ ahilespelid ///*/

    public function details($id){
        $this->load->model('Companymodel');
        $this->load->model('Discountsmodel');
    

		$city = $this->Citymodel->resolve_city();
                
        $company = $this->Companymodel->get_companyFull($id,$city);
        if(!is_object($company)){
            if($company !== false){
                header("Redir: Company city redirrect go");
                if($company != '')
                    redirect('https://'.$company.'.skidkimira.ru/company/'.$id, 'location', 301);
                else
                    redirect('https://skidkimira.ru/company/'.$id, 'location', 301);
            }
            else{
                show_404();
            }
            
        }
        $company_discounts = $this->Companymodel->get_companyDiscounts($id,$city);
        $company_discounts_arch = $this->Companymodel->get_companyDiscountsArchive($id,$city);
        $company_branches = $this->Companymodel->get_companyBranches($id,$city);
        $company_comments = $this->Companymodel->get_companyComments($id);
        $similar_companies = $this->Companymodel->get_similarCompanies($id);

        $similar_discounts = array(); 
        if(isset($company_discounts[0])){
            $similar_discounts = $this->DiscountsModel->get_similar($company_discounts[0]->id,$id,$city);
        }

        $title = $company->name." : адреса, магазины, официальный сайт. Скидки и распродажи в ".$company->city_namewhere;
        if($company->htmlTitle && $company->htmlTitle != '')
            $title = $company->htmlTitle;
             
        $description = 'Все новые скидки, акци и распродажи в '.$company->name.', официальный сайт а также актуальные  новости, отзывы и адреса магазинов &#34;'.$company->name.'&#34;';
        if($company->htmlDescription && $company->htmlDescription != '')
            $description = $company->htmlDescription;

        $keywords = 'распродажа, акции, скидки, дисконт центр, дисконтная карта, сток центр, распродажи в '.$company->city_namewhere.', скидки в '.$company->city_namewhere.', конкурс, рекламные акции, распродажа одежды, сток, дисконт, распродажи в '.$company->city_namewhere.', распродажа обуви, промо акции, события, магазин сток, скидки мира, скидкимира, купон, распродажи и скидки, '.$company->category_name;
        if($company->htmlKeywords && $company->htmlKeywords != '')
            $keywords = $company->htmlKeywords;

		$canonical = $company->htmlCanonicalLink;
		if(!$canonical || $canonical == '' || $canonical == null ){
			$canonical = 'https://'.$_SERVER['HTTP_HOST'].'/company/'.$id;
		}

		$data = array(
					'meta'=>
						array('title'=>$title,
                                'canonical'=>$canonical,
                                'description'=>$description,
                                'keywords'=>$keywords
                        ),
					'city'=>$city,
                    'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),
                    'adverts'=>$this->Advertmodel->get_adverts(),
                    'searchtype'=>'company',                    
                    'showleftbanners'=> true,         
					'content'=>
						array(
								'title'=>'Каталог магазинов',
								'company'=>$company,
                                'companydiscounts'=>$company_discounts,
                                'companydiscountsarchieve'=>$company_discounts_arch,
                                'companybranches' => $company_branches,
                                'companycomments' => $company_comments,
                                'similarcompanies' => $similar_companies,
                                'similardiscounts' =>$similar_discounts			
						),
		);
                
        $this->twig->render('company.twig', $data);
    }

    public function addcomment(){
        if($this->input->method() == 'post'){

            $curldata = array(
                        'secret' => "6LdTyCYTAAAAAGsixmV68moHA8u28LxgIHSZC7UQ",
                        'response' => $this->input->post('g-recaptcha-response')
                    );

            $verify = curl_init();
            curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($verify, CURLOPT_POST, true);
            curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($curldata));
            curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($verify);

            $check = json_decode($response);
            if($check->success){
                $this->load->model('CompanyModel');
                $this->CompanyModel->addComment($this->input->post('company'),$this->input->post('username'),$this->input->post('text'));
            }
            else{
                echo 'robot error';
            }
        }
        else{
            show_404();
        }
    }


	public function companycatalogslisting($city=1,$pagenum=1){
		redirect('/', 'location', 301);	        
    }

	public function companycatalogscat($city,$cat=1,$pagenum=1){
        redirect('/', 'location', 301);
    }    





}