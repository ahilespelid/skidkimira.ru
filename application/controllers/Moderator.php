<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Moderator extends CI_Controller {

	public function __construct ( ) {
        parent::__construct ( );
		
		$this->load->library('session');
		$this->load->library('ion_auth');	
		$this->load->library('twig');
        if (!$this->ion_auth->logged_in())
		{
            redirect('/auth');
            die();           
        }

		/*if($this->ion_auth->is_admin()){
			redirect('/admin', 'refresh');
		}*/
		$this->userId = $this->session->userdata('user_id');						
    }
    
    public function index()
	{
		$this->twig->render('moderator/moderatorLayout.twig');
	}

	#Company
	public function company($id = 0, $action = 'none')
	{
		$this->load->model('/admin/companyModel');
		$this->load->model('/admin/discountModel');
		$this->load->model('/admin/categoryModel');
		$this->load->model('/admin/userModel');
		$this->load->model('/admin/cityModel');
		$data['companyId'] = $id;
		$data['moderatorId'] = $this->userId;
		if($this->input->server('REQUEST_METHOD') == 'GET' && !empty($_GET['filter'])){
			$filter = $_GET;
			unset($filter['filter']);
			foreach($filter as $key => $value){
				if($value == ''){
					if($value =! 0){
						unset($filter[$key]);
					}
				}
			}
			$data['title'] = "Компании";
			$data['filter'] = $filter;
			$data['filterUri'] = "/moderator/company/filters/companyFilter.twig";
			$data['filterable'] = true;
				#Получаем список городов для подстановки
				$data['cities'] = $this->cityModel->getCity(0);
				#Получаем список модераторов для подстановки
				$data['moderators'] = $this->userModel->getModerator(0);
				#Получаем список категорий для подстановки
				$data['categories'] = $this->categoryModel->getCategory(0);
				$data['specialities'] = array(array('value' => 'construction', 'name' => 'Строительство'), 
							array('value' => 'sale', 'name' => 'Торговля'), 
							array('value' => 'services', 'name' => 'Сфера услуг'));
				$data['companyTypes'] = array('Company' => 'Компания', 'Brand' => 'Брэнд', 'ShoppingCenterBrand' => 'Торговый центр');
				$data['hasStockCenterValues'] = array(array('value' => '1', 'name' => 'есть'), array('value' => '0', 'name' => 'нет'));
				$data['hasWebShopValues'] = array(array('value' => '1', 'name' => 'есть'), array('value' => '0', 'name' => 'нет'));
				//echo "<pre>";var_dump($filter);echo "</pre>";
			$data['records'] = $this->companyModel->getCompanyFiltered($filter);
			foreach ($data['records'] as $key => $record) {
				$data['records'][$key]['symbols'] = strlen($record['description']);
				$data['records'][$key]['symbolsHTML'] = strlen(utf8_decode(html_entity_decode($record['description'], ENT_COMPAT, 'utf-8')));
			}
			//echo "<pre>";var_dump($data['records']);echo "</pre>";
			$this->twig->render('moderator/company/tables/company.twig', $data);
		} elseif ($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Компании";
				$data['filterUri'] = "/moderator/company/filters/companyFilter.twig";
				$data['filterable'] = true;
					#Получаем список городов для подстановки
					$data['cities'] = $this->cityModel->getCity(0);
					#Получаем список модераторов для подстановки
					$data['moderators'] = $this->userModel->getModerator(0);
					#Получаем список категорий для подстановки
					$data['categories'] = $this->categoryModel->getCategory(0);
					$data['specialities'] = array(array('value' => 'construction', 'name' => 'Строительство'), 
							array('value' => 'sale', 'name' => 'Торговля'),
							array('value' => 'services', 'name' => 'Сфера услуг'));
					$data['companyTypes'] = array('Company' => 'Компания', 'Brand' => 'Брэнд', 'ShoppingCenterBrand' => 'Торговый центр');
					$data['hasStockCenterValues'] = array(array('value' => '1', 'name' => 'есть'), array('value' => '0', 'name' => 'нет'));
					$data['hasWebShopValues'] = array(array('value' => '1', 'name' => 'есть'), array('value' => '0', 'name' => 'нет'));
				//$data['records'] = $this->companyModel->getCompany($id);
				//foreach ($data['records'] as $key => $record) {
				//	$data['records'][$key]['symbols'] = strlen($record['description']);
				//	$data['records'][$key]['symbolsHTML'] = strlen(utf8_decode(html_entity_decode($record['description'], ENT_COMPAT, 'utf-8')));
				//}
				$this->twig->render('admin/company/tables/companySS.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление компании";
					#Получаем список городов для подстановки
					$data['cities'] = $this->cityModel->getCity(0);
					$data['companyTypes'] = array('Company' => 'Компания', 'Brand' => 'Брэнд', 'ShoppingCenterBrand' => 'Торговый центр');
					#Получаем список категорий для подстановки
					$data['categories'] = $this->categoryModel->getCategory(0);
					#Получаем список фотографий
					$data['companyPhotos'] = $this->companyModel->getCompanyPhoto($id);
					$data['specialities'] = array(array('value' => 'construction', 'name' => 'Строительство'), 
						array('value' => 'sale', 'name' => 'Торговля'), 
						array('value' => 'services', 'name' => 'Сфера услуг'));
				$data['new'] = true;
				$this->twig->render('moderator/company/forms/companyEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование компании";
					#Получаем список городов для подстановки
					$data['cities'] = $this->cityModel->getCity(0);
						$data['companyCityBranchofficeCount'] = $this->companyModel->getCompanyCityBranchofficeCount($id);
					$data['companyCityDiscountCount'] = $this->companyModel->getCompanyCityDiscountCount($id);
					#Получаем список описаний компании по городам
					$data['companyCityDescriptionList'] = $this->companyModel->getCompanyCityDescriptionList($id);
						foreach ($data['cities']  as $key => $city) {
							$match = false;
							foreach ($data['companyCityDescriptionList'] as $cityDesc) {
								if($city['id'] == $cityDesc['CityId']){
									$match = true;
								} else {
								}
							}
							if($match){
								$data['cities'][$key]['name'] = $city['name'].' (есть описание)';
							
							foreach ($data['companyCityBranchofficeCount'] as $cityBranchofficeCount) {
								if($city['id'] == $cityBranchofficeCount['cityId']){
									$data['cities'][$key]['name'] .= '('.$cityBranchofficeCount['cityCount'].' адр.)';
								}
							}

							foreach ($data['companyCityDiscountCount'] as $cityBranchofficeCount) {
								if($city['id'] == $cityBranchofficeCount['cityId']){
									$data['cities'][$key]['name'] .= '(есть акции)';
								}
							}								
							}
						}
					#Получаем список категорий для подстановки
					$data['categories'] = $this->categoryModel->getCategory(0);
					#Получаем каталоги компании
					$data['companyCatalogs'] = $this->companyModel->getCompanyCatalogList($id);
					#Получаем список фотографий
					$data['companyPhotos'] = $this->companyModel->getCompanyPhoto($id);
					$data['companyTypes'] = array('Company' => 'Компания', 'Brand' => 'Брэнд', 'ShoppingCenterBrand' => 'Торговый центр');
						$data['specialities'] = array(array('value' => 'construction', 'name' => 'Строительство'), 
							array('value' => 'sale', 'name' => 'Торговля'), 
							array('value' => 'services', 'name' => 'Сфера услуг'));
					$data['record'] = $this->companyModel->getCompany($id);
					//echo "<pre>";var_dump($data);echo "</pre>";
					$this->twig->render('moderator/company/forms/companyEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->companyModel->removeCompany($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			if(isset($result['CompanyId'])){
				$result['id'] = $result['CompanyId'];
				unset($result['CompanyId']);			
			}			
			$result = $this->companyModel->setCompany($result);
			if($result === "already exist") {
				http_response_code(406);
			}
			if($result > 0){
				$this->output
						->set_content_type('application/json')
						->set_output(json_encode(array('url'=>site_url('moderator/company/'.$result))));				
			}			
		} 
	}

	public function companyCityDescription($companyId = 0, $cityId = 0){
		$this->load->model('/admin/companyModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			$data = $this->companyModel->getCompanyCityDescription($companyId, $cityId);
			//echo $data['description'];
			echo json_encode($data);
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$result = $this->companyModel->setCompanyCityDescription($result);
			if($result === "already exist") {
				http_response_code(406);
			}
		}
	}

	public function shoppingCenter($companyId = 0, $cityId = 0){
		$this->load->model('/admin/companyModel');
		$data['moderatorId'] = $this->userId;
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			$data['shoppingCenters'] = $this->companyModel->getShoppingCenter($cityId);
			$this->twig->render('moderator/company/forms/shoppingCenterSelector.twig', $data);
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			//(parse_str($_POST['data'], $result));
			$result = $this->companyModel->setCompanyShoppingCenter($companyId, $_POST['data']);
						$this->load->model('MenuModel');
			$this->MenuModel->rebuildMenus();	
			if($result === "already exist") {
				http_response_code(406);
			}
		}
	}

	public function companyShoppingCenterBranchoffice($companyId = 0){
		$this->load->model('/admin/companyModel');
		if($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST)) {
			if(isset($_POST['add'])){
				$data['add'] = $_POST['add'];
			}
			if(isset($_POST['remove'])){
				$data['remove'] = $_POST['remove'];
			}
			if(isset($data)){
				//var_dump($data);
				$this->companyModel->setCompanyShoppingCenter($companyId, $data);
			}
		}
	}

	public function shoppingCenterBranchoffice($companyId = 0, $cityId = 0, $shoppingCenterId = 0){
		$this->load->model('/admin/companyModel');
		$this->load->model('/admin/shoppingModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			#Получаем список офисов ТЦ
			$data['shoppingCenterBranchoffices'] = $this->companyModel->getShoppingCenterBranchoffice($shoppingCenterId, $cityId);
			#Получаем список привязок компании к офиса ТЦ
			$data['companyShoppingCenterBranchoffices'] = $this->companyModel->getCompanyShoppingCenterBranchoffice($companyId, $cityId, $shoppingCenterId);
			#Получаем список категорий  ТЦ
			$data['shoppingCategories'] = $this->shoppingModel->getShoppingCategory(0);
			#Выбираем привязанные офисы
			foreach($data['companyShoppingCenterBranchoffices'] as $arr){
				$match = false;
				foreach ($data['shoppingCenterBranchoffices']  as $key => $subcat) {
					if($subcat['branchofficeId'] == $arr['ShoppingCenterId']){
						$data['shoppingCenterBranchoffices'][$key]['checked'] = true;
						$data['shoppingCenterBranchoffices'][$key]['ShoppingCategoryId'] = $arr['ShoppingCategoryId'];
					}
				}
			}
			$this->twig->render('moderator/company/tables/shoppingCenterBranchoffice.twig', $data);
		} 
	}

	public function companyBranchofficeTable($companyId = 0, $cityId = 0){
		$this->load->model('/admin/companyModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			$data['companyId'] = $companyId;
			#Получаем список адресов компании
			$data['branchoffices'] = $this->companyModel->getCompanyBranchoffice($companyId, $cityId);
			$this->twig->render('moderator/branchoffice/tables/branchoffice.twig', $data);
		} 
	}

	public function companyDiscountTable($companyId = 0, $cityId = 0){
		$this->load->model('/admin/discountModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			$data['companyId'] = $companyId;
			#Получаем список акций компании
			$data['discounts'] = $this->discountModel->getCompanyDiscount($companyId, $cityId);
			$this->twig->render('moderator/discount/tables/companyDiscount.twig', $data);
		} 
	}

	public function companyCatalog($id = 0, $action = 'none')
	{
		$this->load->model('/admin/companyModel');
		$data['moderatorId'] = $this->userId;
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Каталоги товаров";
				$data['records'] = $this->companyModel->getCompanyCatalog($id);
				$this->twig->render('moderator/company/tables/companyCatalog.twig', $data);
			} elseif($id == -1){
$data['cName'] = $this->companyModel->getCompany($id);
				$data['title'] = "Добавление каталога ".$data['cName']['name'];
				#получаем список уже существующих каталогов
				$result = $this->companyModel->getCompanyCatalogMaxName($id);
				$data['name'] = $result['nameNum'] + 1;
				$data['new'] = true;
				$this->twig->render('admin/company/forms/companyCatalogEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование каталога";
					$data['record'] = $this->companyModel->getCompanyCatalog($id);
					$this->twig->render('moderator/company/forms/companyCatalogEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->companyModel->removeCompanyCatalog($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$result = $this->companyModel->setCompanyCatalog($result);
			$this->load->model('MenuModel');
			$this->MenuModel->rebuildMenus();		
			if($result === "already exist") {
				http_response_code(406);
			}
		}
	}

	public function companyCatalogImage($id = 0, $action = 'none')
	{
		$this->load->model('/admin/companyModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id != 0 && $action == 'none'){
				$data['companyCatalogImages'] = $this->companyModel->getCompanyCatalogImage($id);
				$this->twig->render('moderator/company/forms/companyCatalogImageDiv.twig', $data);
			} elseif($action == 'remove'){
				$this->companyModel->removeCompanyCatalogImage($id);
			}
		}
	}

	public function companyCityDescription_($id = 0, $action = 'none')
	{
		$this->load->model('/admin/companyModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Описание компаний по городам";
				$data['records'] = $this->companyModel->getCompanyCityDescription($id);
				$this->twig->render('moderator/company/tables/companyCityDescription.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление описания компании";
				$data['new'] = true;
				$this->twig->render('moderator/company/forms/companyCityDescriptionEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование описания компании";
					$data['record'] = $this->companyModel->getCompanyCityDescription($id);
					$this->twig->render('moderator/company/forms/companyCityDescriptionEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->companyModel->removeCompanyCityDescription($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$result = $this->companyModel->setCompanyCityDescription($result);
			if($result === "already exist") {
				http_response_code(406);
			}
		}
	}

	public function companyPhoto($id = 0, $action = 'none')
	{
		$this->load->model('/admin/companyModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id != 0 && $action == 'none'){
				$data['title'] = "Фотографии компаний";
				$data['companyPhotos'] = $this->companyModel->getCompanyPhoto($id);
				$this->twig->render('moderator/company/forms/companyPhotoDiv.twig', $data);
			} elseif($action == 'remove'){
				$this->companyModel->removeCompanyPhoto($id);
			}
		}
	}

	public function publishCompany()
	{
		$this->load->model('/admin/companyModel');
		if($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST)) {
			if(isset($_POST['data'])){
				$this->companyModel->publishCompany($_POST['data']);
			}
		}
	}

	public function unpublishCompany()
	{
		$this->load->model('/admin/companyModel');
		if($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST)) {
			if(isset($_POST['data'])){
				$this->companyModel->unpublishCompany($_POST['data']);
			}
		}
	}


	#Branchoffice
	public function branchoffice($companyId = 0, $id = 0, $action = 'edit')
	{
		$this->load->model('/admin/branchofficeModel');
		$this->load->model('/admin/companyModel');
		$this->load->model('/admin/categoryModel');
		$this->load->model('/admin/cityModel');
		$data['moderatorId'] = $this->userId;
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			$data['companyId'] = $companyId;
			if($action == 'add'){
					$data['new'] = true;
                    $data['title'] = "Добавление адреса";
						#Получаем список городов для подстановки
					    $data['cities'] = $this->cityModel->getCity(0);
                        #Получаем список категорий для подстановки
					    $data['categories'] = $this->categoryModel->getCategory(0);
						#Получаем список метро для подстановки
					    $data['metro'] = $this->branchofficeModel->getMetro(0);
					$this->twig->render('moderator/branchoffice/forms/branchofficeEdit.twig', $data);
				} elseif($action == 'edit'){
					$data['title'] = "Редактирование адреса";
                        #Получаем список городов для подстановки
					    $data['cities'] = $this->cityModel->getCity(0);
                        #Получаем список категорий для подстановки
					    $data['categories'] = $this->categoryModel->getCategory(0);
						#Получаем список метро для подстановки
					    $data['metro'] = $this->branchofficeModel->getMetro(0);
                    $data['record'] = $this->branchofficeModel->getBranchoffice($id, $companyId);
                    $this->twig->render('moderator/branchoffice/forms/branchofficeEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->branchofficeModel->removeCompanyBranchoffice($id);
				}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$result = $this->branchofficeModel->setCompanyBranchoffice($result);
			if($result === "already exist") {
				http_response_code(406);
			}
		}
	}



	#Discount
	public function discount($id = 0, $action = 'none')
	{
		$this->load->model('/admin/discountModel');
		$this->load->model('/admin/companyModel');
		$this->load->model('/admin/categoryModel');
		$this->load->model('/admin/userModel');
		$this->load->model('/admin/cityModel');
		$data['discountId'] = $id;
		$data['moderatorId'] = $this->userId;
		if($this->input->server('REQUEST_METHOD') == 'GET' && !empty($_GET['filter'])){
			$filter = $_GET;
			unset($filter['filter']);
			foreach($filter as $key => $value){
				if($value == ''){
					if($value =! 0){
						unset($filter[$key]);
					}
				}
			}
			$data['title'] = "Акции";
			$data['filter'] = $filter;
			$data['filterUri'] = "/moderator/discount/filters/discountFilter.twig";
			$data['filterable'] = true;
				#Получаем список городов для подстановки
				$data['cities'] = $this->cityModel->getCity(0);
				#Получаем список модераторов для подстановки
				$data['moderators'] = $this->userModel->getModerator();
				#Получаем список категорий для подстановки
				$data['categories'] = $this->categoryModel->getCategory(0);
				$data['specialities'] = array(array('value' => 'construction', 'name' => 'Строительство'), 
							array('value' => 'sale', 'name' => 'Торговля'), 
							array('value' => 'services', 'name' => 'Сфера услуг'));
			$data['records'] = $this->discountModel->getDiscountFiltered($filter);
			//echo "<pre>";var_dump($data['records']);echo "</pre>";
			$this->twig->render('moderator/discount/tables/discount.twig', $data);
		} elseif ($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Акции";
				$data['filterUri'] = "/moderator/discount/filters/discountFilter.twig";
				$data['filterable'] = true;
					#Получаем список городов для подстановки
					$data['cities'] = $this->cityModel->getCity(0);
					#Получаем список модераторов для подстановки
					$data['moderators'] = $this->userModel->getModerator();
					#Получаем список категорий для подстановки
					$data['categories'] = $this->categoryModel->getCategory(0);
					$data['specialities'] = array(array('value' => 'construction', 'name' => 'Строительство'), 
							array('value' => 'sale', 'name' => 'Торговля'), 
							array('value' => 'services', 'name' => 'Сфера услуг'));
				$data['records'] = $this->discountModel->getDiscount($id);
				$this->twig->render('moderator/discount/tables/discount.twig', $data);
			} elseif($id == -1){
					$data['title'] = "Добавление акции";
					#Получаем список компаний для подстановки
					$companies = $this->companyModel->getCompanyOnlyList();
					$temp = array();
					foreach($companies as $k=>$v) {
						$temp[$k] = strtolower($v['name']);
					}
					asort($temp);
					$data['companies'] = array();
					foreach($temp as $key=>$val) {
						$data['companies'][$key] = $companies[$key];
					}

					#Получаем список городов для подстановки
					$data['cities'] = $this->cityModel->getCity(0);
					#Получаем список категорий для подстановки
					$data['categories'] = $this->categoryModel->getCategory(0);
					$data['specialities'] = array(array('value' => 'construction', 'name' => 'Строительство'), 
						array('value' => 'sale', 'name' => 'Торговля'), 
						array('value' => 'services', 'name' => 'Сфера услуг'));
				$data['new'] = true;
				$this->twig->render('moderator/discount/forms/discountEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование акции";
					$data['record'] = $this->discountModel->getDiscount($id);
					#Получаем список городов для подстановки
					$data['cities'] = $this->cityModel->getCity(0);
					#Получаем список категорий для подстановки
					$data['categories'] = $this->categoryModel->getCategory(0);
					
					if(isset($data['record']['categoryId'])){
						#Получаем список подкатегорий 
						$data['subCategories'] = $this->categoryModel->getCategorySubcategory($data['record']['categoryId']);
					}	
					#Получаем список категорий акции
					$data['discountSubCategories'] = $this->discountModel->getDiscountSubCategory($id);
					foreach($data['discountSubCategories'] as $arr){
						$match = false;
						foreach ($data['subCategories']  as $key => $subcat) {
							if($subcat['id'] == $arr['subCategoryId']){
								$data['subCategories'][$key]['checked'] = true;
							}
						}
					}
					#Получаем список фотографий
					$data['discountPhotos'] = $this->discountModel->getDiscountPhoto($id);
						$data['specialities'] = array(array('value' => 'construction', 'name' => 'Строительство'), 
							array('value' => 'sale', 'name' => 'Торговля'), 
							array('value' => 'services', 'name' => 'Сфера услуг'));
					//echo "<pre>";var_dump($data['subCategories']);echo "</pre>";
					//echo "<pre>";var_dump($data['discountSubCategories']);echo "</pre>";
					$this->twig->render('moderator/discount/forms/discountEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->discountModel->removeDiscount($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
				(parse_str($_POST['data'], $data['discount']));
				unset($data['discount']['_wysihtml5_mode']);
				if(isset($_POST['add'])){
					$data['add'] = $_POST['add'];
				}
				if(isset($_POST['remove'])){
					$data['remove'] = $_POST['remove'];
				}
				if(isset($data)){
					$result = $this->discountModel->setDiscount($data);
					if($result > 0){
						$this->output
								->set_content_type('application/json')
								->set_output(json_encode(array('url'=>site_url('moderator/companyDiscount/'.$data['companyId'].'/'.$result))));				
					}											
				}
			}
		} 
	

 	public function discountTable()
    {
        $this->load->library('Datatables');
			$filter = $_GET;
			$filtering = array();
			unset($filter['filter']);
			foreach($filter as $key => $value){
				if($value != '' && in_array($key,array('name','companyName','cityId','speciality','categoryId','siteUserId','moderated','accepted'))){
						$filtering[$key]=$value;
				}
			}

         if(!empty($filtering['name'])){
             $this->datatables->where('discount.name like "%'.$filtering['name'].'%"');
         }
         if(!empty($filtering['companyName'])){
             $this->datatables->where('company.name like "%'.$filtering['companyName'].'%"');
         }
         if(!empty($filtering['cityId'])){
                $this->datatables->where('discount.cityId', $filtering['cityId']);
         }
         if(!empty($filtering['speciality'])){
                $this->datatables->where('company.speciality', $filtering['speciality']);
         }
         if(!empty($filtering['categoryId'])){
                $this->datatables->where('discount.categoryId', $filtering['categoryId']);
         }
         if(!empty($filtering['siteUserId'])){
             $this->datatables->where('discount.moderatorId', $filtering['siteUserId']);
         }
         if(isset($filtering['moderated'])){
             $this->datatables->where('discount.moderated', $filtering['moderated']);
         }
         if(isset($filtering['accepted'])){
             $this->datatables->where('discount.accepted', $filtering['accepted']);
         }

		$this->datatables
		->select('discount.id, discount.name, startDate, finishDate, discount.accepted')
		->from('discount')
		->join('company','company.id = discount.companyId','left')
		->select('company.id as companyId, company.name as companyName')
		->join('category','category.id = discount.categoryId','left')
		->select('category.name as categoryName')		
        ->join('siteuser','siteuser.id = discount.moderatorId','left')
		->select('siteuser.email as siteuserEmail')
		->add_column('action', '<a href="'.site_url().'moderator/company/$2" target="_blank" class="btn btn-outline yellow btn-sm"><i class="fa fa-pencil-square-o"></i>Ред. Компанию</a>
                <a href="'.site_url().'moderator/companyDiscount/$2/$1" target="_blank" class="btn btn-outline purple btn-sm"><i class="fa fa-pencil-square-o"></i>Ред. Акцию</a>
                <a href="#basic" data-toggle="modal" onClick="urlToModal(\'/moderator/discount/$1/remove\');" class="btn btn-outline red btn-sm"><i class="fa fa-trash-o"></i> Удалить</a>', 'id, companyId')
		->add_column('DT_RowId', '$1','id');
		$this->datatables->unset_column('id');
		
		$this->datatables->unset_column('companyId');
		$data = $this->datatables->generate();
$this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));				
		$this->db->reset_query();
    }

	
	public function companyDiscount($companyId = 0, $id = 0, $action = 'none')
	{
		$this->load->model('/admin/discountModel');
		$this->load->model('/admin/companyModel');
		$this->load->model('/admin/categoryModel');
		$this->load->model('/admin/userModel');
		$this->load->model('/admin/cityModel');
		$data['discountId'] = $id;
		$data['moderatorId'] = $this->userId;
		if ($this->input->server('REQUEST_METHOD') == 'GET'){
			if($action == 'add'){
				$data['cName'] = $this->companyModel->getCompanyName($companyId);
				$data['companyId'] = $companyId;
				$data['company'] = $this->companyModel->getCompany($companyId);
				$data['title'] = "Добавление акции для компании - ".$data['cName']['name'];
					#Получаем список городов для подстановки
					$data['companyCities'] = $this->cityModel->getCompanyCity($companyId);
					#Получаем список категорий для подстановки
					$data['categories'] = $this->categoryModel->getCategory(0);
					$data['subCategories'] = $this->categoryModel->getCategorySubcategory($data['categories'][0]['id']);

					$data['specialities'] = array(array('value' => 'construction', 'name' => 'Строительство'), 
						array('value' => 'sale', 'name' => 'Торговля'), 
						array('value' => 'services', 'name' => 'Сфера услуг'));
				$data['new'] = true;
				$this->twig->render('moderator/discount/forms/companyDiscountEdit.twig', $data);
			} elseif($action == 'none'){
					$data['cName'] = $this->companyModel->getCompanyName($companyId);
					$data['companyId'] = $companyId;
					$data['title'] = "Редактирование акции компании - ".$data['cName']['name'];
					$data['record'] = $this->discountModel->getDiscount($id);
					#Получаем список городов для подстановки
					$data['companyCities'] = $this->cityModel->getCompanyCity($companyId);
					#Получаем список категорий для подстановки
					$data['categories'] = $this->categoryModel->getCategory(0);
					if(isset($data['record']['categoryId'])){
						#Получаем список подкатегорий 
						$data['subCategories'] = $this->categoryModel->getCategorySubcategory($data['record']['categoryId']);
					}	
					#Получаем список категорий акции
					$data['discountSubCategories'] = $this->discountModel->getDiscountSubCategory($id);
					foreach($data['discountSubCategories'] as $arr){
						$match = false;
						foreach ($data['subCategories']  as $key => $subcat) {
							if($subcat['id'] == $arr['subCategoryId']){
								$data['subCategories'][$key]['checked'] = true;
							}
						}
					}
					#Получаем список фотографий
					$data['discountPhotos'] = $this->discountModel->getDiscountPhoto($id);
						$data['specialities'] = array(array('value' => 'construction', 'name' => 'Строительство'), 
							array('value' => 'sale', 'name' => 'Торговля'), 
							array('value' => 'services', 'name' => 'Сфера услуг'));
					//echo "<pre>";var_dump($data['subCategories']);echo "</pre>";
					//echo "<pre>";var_dump($data['discountSubCategories']);echo "</pre>";
					$this->twig->render('moderator/discount/forms/companyDiscountEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->discountModel->removeDiscount($id);
				}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $data['discount']));
			unset($data['discount']['_wysihtml5_mode']);
			if(isset($_POST['add'])){
				$data['add'] = $_POST['add'];
			}
			if(isset($_POST['remove'])){
				$data['remove'] = $_POST['remove'];
			}
			if(isset($data)){
				//var_dump($data);
				$result = $this->discountModel->setCompanyDiscount($data);
				if($result > 0){
					$this->output
							->set_content_type('application/json')
							->set_output(json_encode(array('url'=>site_url('moderator/companyDiscount/'.$data['discount']['companyId'].'/'.$result))));				
				}								
			}
		} 
	}

	public function cloneDiscount($companyId = 0, $discountId = 0)
	{
		$this->load->model('/admin/discountModel');
		if($this->input->server('REQUEST_METHOD') == 'POST') {
			if($companyId != 0 && $discountId != 0){
				$result = $this->discountModel->cloneDiscount($companyId, $discountId);
				if($result === "none") {
					http_response_code(406);
				}
			}
		}
	}
	
	public function cloneAllDiscounts()
	{
		ini_set('max_execution_time', 0);
		$this->load->model('/admin/discountModel');
		if($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->discountModel->cloneAllDiscounts();
		}
	}


	public function saveDiscountSubCategories($id = 0)
	{
		$this->load->model('/admin/discountModel');
		if($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST)) {
			if(isset($_POST['add'])){
				$data['add'] = $_POST['add'];
			}
			if(isset($_POST['remove'])){
				$data['remove'] = $_POST['remove'];
			}
			//var_dump($data);
			if(isset($data)){
				$this->discountModel->setDiscountSubCategory($id, $data);
				$this->load->model('MenuModel');
				$this->MenuModel->rebuildMenus();						}
		}
	}

	public function publishDiscount()
	{
		$this->load->model('/admin/discountModel');
		if($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST)) {
			if(isset($_POST['data'])){
				$this->discountModel->publishDiscount($_POST['data']);
			}
		}
	}

	public function unpublishDiscount()
	{
		$this->load->model('/admin/discountModel');
		if($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST)) {
			if(isset($_POST['data'])){
				$this->discountModel->unpublishDiscount($_POST['data']);
			}
		}
	}

	public function discountPhoto($id = 0, $action = 'none')
	{
		$this->load->model('/admin/discountModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id != 0 && $action == 'none'){
				$data['title'] = "Фотографии компаний";
				$data['discountPhotos'] = $this->discountModel->getDiscountPhoto($id);
				$this->twig->render('moderator/discount/forms/discountPhotoDiv.twig', $data);
			} elseif($action == 'remove'){
				$this->discountModel->removeDiscountPhoto($id);
			}
		}
	}


	#Upload

	public function doUploadImage()
	{
		!empty($_POST['companyCatalogName']) ? $companyCatalogName = $_POST['companyCatalogName'] : $companyCatalogName = '';
		!empty($_POST['companyCatalogCompanyId']) ? $companyCatalogCompanyId = $_POST['companyCatalogCompanyId'] : $companyCatalogCompanyId = '';
		!empty($_POST['id']) ? $id = $_POST['id'] : $id = '';
		if(isset($_POST['imageUploadType'])){
			$imageUploadType = "";
			$imageUploadType = $_POST['imageUploadType'];
			$this->load->model('/admin/companyModel');
			$this->load->model('/admin/discountModel');
			switch($imageUploadType){
				case "companyLogo":
					$config['upload_path'] = './images/company/';
					break;
				case "companyPhoto":
					$config['upload_path'] = './images/company/';
					break;
				case "discountLogo":
					$config['upload_path'] = './images/discount/';
					break;
				case "discountPhoto":
					$config['upload_path'] = './images/discount/';
					break;
				case "companyCatalogLogo":
					if (!file_exists('./images/company_catalogs/'.$id.'/'.$companyCatalogName.'/')) {
						mkdir('./images/company_catalogs/'.$id.'/'.$companyCatalogName.'/', 0777, true);
					}
					$config['upload_path'] = './images/company_catalogs/'.$id.'/'.$companyCatalogName.'/';
					break;
				case "companyCatalogImage":
					if (!file_exists('./images/company_catalogs/'.$companyCatalogCompanyId.'/'.$companyCatalogName.'/')) {
						mkdir('./images/company_catalogs/'.$companyCatalogCompanyId.'/'.$companyCatalogName.'/', 0777, true);
					}
					$config['upload_path'] = './images/company_catalogs/'.$companyCatalogCompanyId.'/'.$companyCatalogName.'/';
					break;
				default:
					$config['upload_path'] = './images/';
					break;
			}
		}
		$this->load->helper(array('form', 'url'));
		$config['encrypt_name'] 		= true;
		$config['allowed_types']        = 'jpg|jpeg|png';

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('userfile')){
			$error = array('error' => $this->upload->display_errors());
			$this->output->append_output(json_encode($error));
			//$this->twig->render('/admin/parts/uploadError.twig', $error);
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$this->output->append_output(json_encode($data));
			//$this->load->view('/admin/parts/uploadSuccess.twig', $data);
			if(isset($_POST['id'])){
				switch($imageUploadType){
					case "companyLogo":
						$this->companyModel->setCompanyLogo($id, $data['upload_data']['file_name']);
						break;
					case "companyPhoto":
						$this->companyModel->setCompanyImage($id, $data['upload_data']['file_name']);
						break;
					case "discountLogo":
						$this->discountModel->setDiscountLogo($id, $data['upload_data']['file_name']);
						break;
					case "discountPhoto":
						$this->discountModel->setDiscountImage($id, $data['upload_data']['file_name']);
						break;
					case "companyCatalogLogo":
						$this->companyModel->setCompanyCatalogLogo($id, $companyCatalogName, $data['upload_data']['file_name']);
						break;
					case "companyCatalogImage":
						$this->companyModel->setCompanyCatalogImage($id, $companyCatalogCompanyId, $companyCatalogName, $data['upload_data']['file_name']);
						break;
					}
				}
							if(filesize($config['upload_path'].DIRECTORY_SEPARATOR.$data['upload_data']['file_name']) > 50000 ){
				$config['image_library'] = 'gd2';
				$config['source_image'] = $config['upload_path'].DIRECTORY_SEPARATOR.$data['upload_data']['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = TRUE;
				$config['width']         = 500;
				$config['height']       = 300;

				$this->load->library('image_lib', $config);

				if ( ! $this->image_lib->resize())
				{
						$this->output->append_output($this->image_lib->display_errors());
				}
			}

		}
    }
	
		#Comments
	public function comments()
	{
		$this->load->model('/admin/userModel');
		$data['title'] = "Комментарии";
		$data['records'] = $this->userModel->getComments();
		$this->twig->render('admin/user/tables/comments.twig', $data);
	}

	public function newCommentsCount()
	{
		$this->load->model('/admin/userModel');
		$count = $this->userModel->getNewCommentsCount();
		echo $count['newCommentsCount'];
	}

	public function acceptComment($id)
	{
		$data['moderatorId'] = $this->userId;
		$data['date'] = date("Y-m-d");
		$this->load->model('/admin/userModel');
		$this->userModel->acceptComment($id, $data);
	}

	public function declineComment($id)
	{
		$data['moderatorId'] = $this->userId;
		$data['date'] = date("Y-m-d");
		$this->load->model('/admin/userModel');
		$this->userModel->declineComment($id, $data);
	}
	


}