<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct ( ) {
        parent::__construct ( );
		
		$this->load->library('session');
		$this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in())
		{
            redirect('/auth/login');
            die();           
        }		
		$this->load->library('twig');
		


		//if(!$this->ion_auth->is_admin()){
		//	redirect('/moderator/company', 'refresh');
		//}
		$this->session->set_userdata(array('is_admin' => $this->ion_auth->is_admin()));
		$this->userId = $this->session->userdata('user_id');
	
    }
    
    public function index()
	{
		$this->twig->render('admin/adminLayout.twig');
	}
	

	#Categories

	public function category($id = 0, $action = 'none')
	{
		$this->load->model('/admin/categoryModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Категории";
				$data['records'] = $this->categoryModel->getCategory($id);
				$this->twig->render('admin/category/tables/category.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление категории";
				$data['new'] = true;
				$this->twig->render('admin/category/forms/categoryEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование категории";
					$data['record'] = $this->categoryModel->getCategory($id);
					$this->twig->render('admin/category/forms/categoryEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->categoryModel->removeCategory($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$this->categoryModel->setCategory($result);
			$this->load->model('MenuModel');
			$this->MenuModel->rebuildMenus();			
			if($result == "already exist") {
				http_response_code(406);
			}
		}
	}

	public function categoryCityDescription($id = 0, $action = 'none')
	{
		$this->load->model('/admin/categoryModel');
		$this->load->model('/admin/cityModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Описание категорий по городам";
				$data['records'] = $this->categoryModel->getCategoryCityDescription($id);
				$this->twig->render('admin/category/tables/categoryCityDescription.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление описания категории";
					#Получаем список категорий для подстановки
					$data['categories'] = $this->categoryModel->getCategory(0);
					#Получаем список городов для подстановки
					$data['cities'] = $this->cityModel->getCity(0);
				$data['new'] = true;
				$this->twig->render('admin/category/forms/categoryCityDescriptionEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование описания категории";
						#Получаем список категорий для подстановки
						$data['categories'] = $this->categoryModel->getCategory(0);
						#Получаем список городов для подстановки
						$data['cities'] = $this->cityModel->getCity(0);
					$data['record'] = $this->categoryModel->getCategoryCityDescription($id);
					$this->twig->render('admin/category/forms/categoryCityDescriptionEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->categoryModel->removeCategoryCityDescription($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$this->categoryModel->setCategoryCityDescription($result);
			$this->load->model('MenuModel');
			$this->MenuModel->rebuildMenus();						
			if($result == "already exist") {
				http_response_code(406);
			}
		}
	}

	public function subCategory($id = 0, $action = 'none')
	{
		$this->load->model('/admin/categoryModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Подкатегории";
					#Получаем список категорий для подстановки
					$data['categories'] = $this->categoryModel->getCategory(0);
				$data['records'] = $this->categoryModel->getSubCategory($id);
				$this->twig->render('admin/category/tables/subCategory.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление подкатегории";
					#Получаем список категорий для подстановки
					$data['categories'] = $this->categoryModel->getCategory(0);
				$data['new'] = true;
				$this->twig->render('admin/category/forms/subCategoryEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование подкатегории";
						#Получаем список категорий для подстановки
						$data['categories'] = $this->categoryModel->getCategory(0);
					$data['record'] = $this->categoryModel->getSubCategory($id);
					$this->twig->render('admin/category/forms/subCategoryEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->categoryModel->removeSubCategory($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$this->categoryModel->setSubCategory($result);
			$this->load->model('MenuModel');
			$this->MenuModel->rebuildMenus();						
			if($result == "already exist") {
				http_response_code(406);
			}
		}
	}

	public function subCategoryList($id = 0)
	{
		$this->load->model('/admin/categoryModel');
		$data['subCategories'] = $this->categoryModel->getCategorySubcategory($id);
		$this->twig->render('admin/category/forms/discountSubCategoryCheckboxList.twig', $data);
	}

	public function subCategoryCityDescription($id = 0, $action = 'none')
	{
		$this->load->model('/admin/categoryModel');
		$this->load->model('/admin/cityModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Описание подкатегорий по городам";
				$data['records'] = $this->categoryModel->getSubCategoryCityDescription($id);
				$this->twig->render('admin/category/tables/subCategoryCityDescription.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление описания подкатегории";
					#Получаем список категорий для подстановки
					//$data['categories'] = $this->categoryModel->getCategory(0);
					$data['subCategories'] = $this->categoryModel->getSubCategory(0);
					#Получаем список городов для подстановки
					$data['cities'] = $this->cityModel->getCity(0);
				$data['new'] = true;
				$this->twig->render('admin/category/forms/subCategoryCityDescriptionEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование описания подкатегории";
						#Получаем список категорий для подстановки
						$data['subCategories'] = $this->categoryModel->getSubCategory(0);
						#Получаем список городов для подстановки
						$data['cities'] = $this->cityModel->getCity(0);
					$data['record'] = $this->categoryModel->getSubCategoryCityDescription($id);
					$this->twig->render('admin/category/forms/subCategoryCityDescriptionEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->categoryModel->removeSubCategoryCityDescription($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$this->categoryModel->setSubCategoryCityDescription($result);
			if($result == "already exist") {
				http_response_code(406);
			}
		}
	}

	#Goods

	public function goods($id = 0, $action = 'none')
	{
		$this->load->model('/admin/goodsModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Товары";
				$data['records'] = $this->goodsModel->getGoods($id);
				$this->twig->render('admin/goods/tables/goods.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление товара";
						#Получаем список категорий товаров для подстановки
						$data['goodsSubCategories'] = $this->goodsModel->getGoodsSubCategory(0);
						#Получаем список типов товаров для подстановки
						$data['goodsTypes'] = $this->goodsModel->getGoodsType(0);
						#Получаем список подтипов товаров для подстановки
						$data['goodsSubTypes'] = $this->goodsModel->getGoodsSubType(0);
				$data['new'] = true;
				$this->twig->render('admin/goods/forms/goodsEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование товара";
						#Получаем список категорий товаров для подстановки
						$data['goodsSubCategories'] = $this->goodsModel->getGoodsSubCategory(0);
						#Получаем список типов товаров для подстановки
						$data['goodsTypes'] = $this->goodsModel->getGoodsType(0);
						#Получаем список подтипов товаров для подстановки
						$data['goodsSubTypes'] = $this->goodsModel->getGoodsSubType(0);
					$data['record'] = $this->goodsModel->getGoods($id);
					$this->twig->render('admin/goods/forms/goodsEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->goodsModel->removeGoods($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$this->goodsModel->setGoods($result);
			if($result == "already exist") {
				http_response_code(406);
			}
		}
	}

	public function goodsCategory($id = 0, $action = 'none')
	{
		$this->load->model('/admin/goodsModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Категории товаров";
				$data['records'] = $this->goodsModel->getGoodsCategory($id);
				$this->twig->render('admin/goods/tables/goodsCategory.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление категории товара";
				$data['new'] = true;
				$this->twig->render('admin/goods/forms/goodsCategoryEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование категории товара";
					$data['record'] = $this->goodsModel->getGoodsCategory($id);
					$this->twig->render('admin/goods/forms/goodsCategoryEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->goodsModel->removeGoodsCategory($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$this->goodsModel->setGoodsCategory($result);
			$this->load->model('MenuModel');
			$this->MenuModel->rebuildMenus();						
			if($result == "already exist") {
				http_response_code(406);
			}
		}
	}

	public function goodsSubCategory($id = 0, $action = 'none')
	{
		$this->load->model('/admin/goodsModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Подкатегории товаров";
				$data['records'] = $this->goodsModel->getGoodsSubCategory($id);
				$this->twig->render('admin/goods/tables/goodsSubCategory.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление подкатегории товара";
					#Получаем список подкатегорий товаров для подстановки
					$data['goodsSubCategories'] = $this->goodsModel->getGoodsSubCategory(0);
				$data['new'] = true;
				$this->twig->render('admin/goods/forms/goodsSubCategoryEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование подкатегории товара";
						#Получаем список категорий товаров для подстановки
						$data['goodsCategories'] = $this->goodsModel->getGoodsCategory(0);
					$data['record'] = $this->goodsModel->getGoodsSubCategory($id);
					$this->twig->render('admin/goods/forms/goodsSubCategoryEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->goodsModel->removeGoodsSubCategory($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$this->goodsModel->setGoodsSubCategory($result);
			$this->load->model('MenuModel');
			$this->MenuModel->rebuildMenus();						
			if($result == "already exist") {
				http_response_code(406);
			}
		}
	}

	public function goodsType($id = 0, $action = 'none')
	{
		$this->load->model('/admin/goodsModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Типы товаров";
				$data['records'] = $this->goodsModel->getGoodsType($id);
				$this->twig->render('admin/goods/tables/goodsType.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление типа товара";
					#Получаем список подкатегорий товаров для подстановки
					$data['goodsSubCategories'] = $this->goodsModel->getGoodsSubCategory(0);
				$data['new'] = true;
				$this->twig->render('admin/goods/forms/goodsTypeEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование типа товара";
						#Получаем список подкатегорий товаров для подстановки
						$data['goodsSubCategories'] = $this->goodsModel->getGoodsSubCategory(0);
					$data['record'] = $this->goodsModel->getGoodsType($id);
					$this->twig->render('admin/goods/forms/goodsTypeEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->goodsModel->removeGoodsType($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$this->goodsModel->setGoodsType($result);
			$this->load->model('MenuModel');
			$this->MenuModel->rebuildMenus();						
			if($result == "already exist") {
				http_response_code(406);
			}
		}
	}

	public function goodsSubType($id = 0, $action = 'none')
	{
		$this->load->model('/admin/goodsModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Подтипы товаров";
				$data['records'] = $this->goodsModel->getGoodsSubType($id);
				$this->twig->render('admin/goods/tables/goodsSubType.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление подтипа товара";
					#Получаем список типов товаров для подстановки
					$data['goodsTypes'] = $this->goodsModel->getGoodsType(0);
				$data['new'] = true;
				$this->twig->render('admin/goods/tables/goodsSubTypeEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование подтипа товара";
						#Получаем список типов товаров для подстановки
						$data['goodsTypes'] = $this->goodsModel->getGoodsType(0);
					$data['record'] = $this->goodsModel->getGoodsSubType($id);
					$this->twig->render('admin/goods/forms/goodsSubTypeEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->goodsModel->removeGoodsSubType($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$this->goodsModel->setGoodsSubType($result);
			$this->load->model('MenuModel');
			$this->MenuModel->rebuildMenus();						
			if($result == "already exist") {
				http_response_code(406);
			}
		}
	}

	#City

	public function city($id = 0, $action = 'none')
	{
		$this->load->model('/admin/cityModel');
		$this->load->model('/admin/countryModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Города";
				$data['records'] = $this->cityModel->getCity($id);
				$this->twig->render('admin/city/tables/city.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление города";
					#Получаем список стран для подстановки
					$data['countries'] = $this->countryModel->getCountry(0);
				$data['new'] = true;
				$this->twig->render('admin/city/forms/cityEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование города";
						#Получаем список стран для подстановки
						$data['countries'] = $this->countryModel->getCountry(0);
					$data['record'] = $this->cityModel->getCity($id);
					$this->twig->render('admin/city/forms/cityEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->cityModel->removeCity($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$result = $this->cityModel->setCity($result);
			$this->load->model('MenuModel');
			$this->MenuModel->rebuildMenus();						
			if($result === "already exist") {
				http_response_code(406);
			}
		}
	}

	#Country
	public function country($id = 0, $action = 'none')
	{
		$this->load->model('/admin/countryModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Страны";
				$data['records'] = $this->countryModel->getCountry($id);
				$this->twig->render('admin/country/tables/country.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление страны";
				$data['new'] = true;
				$this->twig->render('admin/country/forms/countryEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование города";
					$data['record'] = $this->countryModel->getCountry($id);
					$this->twig->render('admin/country/forms/countryEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->countryModel->removeCountry($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$result = $this->countryModel->setCountry($result);
			$this->load->model('MenuModel');
			$this->MenuModel->rebuildMenus();						
			if($result === "already exist") {
				http_response_code(406);
			}
		}
	}

	#Shopping
	public function shoppingCategory($id = 0, $action = 'none')
	{
		$this->load->model('/admin/shoppingModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Категории ТЦ";
				$data['records'] = $this->shoppingModel->getShoppingCategory($id);
				$this->twig->render('admin/shopping/tables/shoppingCategory.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление категории ТЦ";
				$data['new'] = true;
				$this->twig->render('admin/shopping/forms/shoppingCategoryEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование категории ТЦ";
					$data['record'] = $this->shoppingModel->getShoppingCategory($id);
					$this->twig->render('admin/shopping/forms/shoppingCategoryEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->shoppingModel->removeShoppingCategory($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$result = $this->shoppingModel->setShoppingCategory($result);
			$this->load->model('MenuModel');
			$this->MenuModel->rebuildMenus();						
			if($result === "already exist") {
				http_response_code(406);
			}
		}
	}

	public function shoppingCenterCompany($id = 0, $action = 'none')
	{
		$this->load->model('/admin/shoppingModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Список команий ТЦ";
				$data['records'] = $this->shoppingModel->getShoppingCenterCompany($id);
				$this->twig->render('admin/shopping/tables/shppingCenterCompany.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление клмании в ТЦ";
				$data['new'] = true;
				$this->twig->render('admin/shopping/forms/shppingCenterCompanyEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование комании в  ТЦ";
					$data['record'] = $this->shoppingModel->getShoppingCenterCompany($id);
					$this->twig->render('admin/shopping/forms/shppingCenterCompanyEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->shoppingModel->removeShoppingCenterCompany($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$result = $this->shoppingModel->setShoppingCenterCompany($result);
			$this->load->model('MenuModel');
			$this->MenuModel->rebuildMenus();						
			if($result === "already exist") {
				http_response_code(406);
			}
		}
	}

	#Coupon
	public function coupon($id = 0, $action = 'none')
	{
		$this->load->model('/admin/couponModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Купоны";
					#Получаем список типов купонов для подстановки
					$data['couponTypes'] = $this->couponModel->getCouponType(0);
					#Получаем список категорий купонов для подстановки
					$data['couponCategories'] = $this->couponModel->getCouponCategory(0);
					#Получаем список компаний купонов для подстановки
					$data['couponAdvCampaigns'] = $this->couponModel->getCouponAdvCampaign(0);
				$data['records'] = $this->couponModel->getCoupon($id);
				$this->twig->render('admin/coupon/tables/coupon.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление купона";
					#Получаем список типов купонов для подстановки
					$data['couponTypes'] = $this->couponModel->getCouponType(0);
					#Получаем список категорий купонов для подстановки
					$data['couponCategories'] = $this->couponModel->getCouponCategory(0);
					#Получаем список компаний купонов для подстановки
					$data['couponAdvCampaigns'] = $this->couponModel->getCouponAdvCampaign(0);
				$data['new'] = true;
				$this->twig->render('admin/coupon/forms/couponEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование купона";
					$data['record'] = $this->couponModel->getCoupon($id);
					$this->twig->render('admin/coupon/forms/couponEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->couponModel->removeCoupon($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$result = $this->couponModel->setCoupon($result);
			if($result === "already exist") {
				http_response_code(406);
			}
		}
	}

	public function couponType($id = 0, $action = 'none')
	{
		$this->load->model('/admin/couponModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Виды купонов";
				$data['records'] = $this->couponModel->getCouponType($id);
				$this->twig->render('admin/coupon/tables/couponType.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление вида купона";
				$data['new'] = true;
				$this->twig->render('admin/coupon/forms/couponTypeEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование вида купона";
					$data['record'] = $this->couponModel->getCouponType($id);
					$this->twig->render('admin/coupon/forms/couponTypeEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->couponModel->removeCouponType($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$result = $this->couponModel->setCouponType($result);
			if($result === "already exist") {
				http_response_code(406);
			}
		}
	}

	public function couponCategory($id = 0, $action = 'none')
	{
		$this->load->model('/admin/couponModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Категории купонов";
				$data['records'] = $this->couponModel->getCouponCategory($id);
				$this->twig->render('admin/coupon/tables/couponCategory.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление катеогрии купонов";
				$data['new'] = true;
				$this->twig->render('admin/coupon/forms/couponCategoryEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование категории купонов";
					$data['record'] = $this->couponModel->getCouponCategory($id);
					$this->twig->render('admin/coupon/forms/couponCategoryEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->couponModel->removeCouponCategory($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$result = $this->couponModel->setCouponCategory($result);
			if($result === "already exist") {
				http_response_code(406);
			}
		}
	}

	public function couponAdvCampaign($id = 0, $action = 'none')
	{
		$this->load->model('/admin/couponModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Комании купонов";
				$data['records'] = $this->couponModel->getCouponAdvCampaign($id);
				$this->twig->render('admin/coupon/tables/couponAdvCampaign.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление компании купонов";
				$data['new'] = true;
				$this->twig->render('admin/coupon/forms/couponAdvCampaignEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование компании купонов";
					$data['record'] = $this->couponModel->getCouponAdvCampaign($id);
					$this->twig->render('admin/coupon/forms/couponAdvCampaignEdit.twig', $data);
				} elseif($action == 'remove') {
					$this->couponModel->removeCouponAdvCampaign($id);
				}
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$result = $this->couponModel->setCouponAdvCampaign($result);
			if($result === "already exist") {
				http_response_code(406);
			}
		}
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
			$data['filterUri'] = "/admin/company/filters/companyFilter.twig";
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
				if(isset($record['citydescription'])){
				$data['records'][$key]['symbols'] = mb_strlen(trim($record['citydescription']),'UTF-8')+mb_strlen(trim($record['name']),'UTF-8');
   				$data['records'][$key]['symbolsHTML'] = mb_strlen(trim(strip_tags($record['citydescription'])),'UTF-8')+mb_strlen(trim($record['name']),'UTF-8');
				}
				else{
					$data['records'][$key]['symbols'] = mb_strlen(trim($record['name']),'UTF-8');
					$data['records'][$key]['symbolsHTML'] = mb_strlen(trim($record['name']),'UTF-8');					
				}

				//$data['records'][$key]['symbols'] = strlen($record['description']);
				//$data['records'][$key]['symbolsHTML'] = strlen(utf8_decode(html_entity_decode($record['description'], ENT_COMPAT, 'utf-8')));
			}
			//echo "<pre>";var_dump($data['records']);echo "</pre>";
			$this->twig->render('admin/company/tables/company.twig', $data);
		} elseif ($this->input->server('REQUEST_METHOD') == 'GET' && empty($_GET['filter'])){
			if($id == 0){
				$data['title'] = "Компании";
				$data['filterUri'] = "/admin/company/filters/companyFilter.twig";
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
				$this->twig->render('admin/company/forms/companyEdit.twig', $data);
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
							}
							
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
					$this->twig->render('admin/company/forms/companyEdit.twig', $data);
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
						->set_output(json_encode(array('url'=>site_url('admin/company/'.$result))));				
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

	public function companyCityDescriptionplain($companyId = 0, $cityId = 0){
		$this->load->model('/admin/companyModel');
		$re =  $this->companyModel->getCompanyCityDescriptionplain($companyId, $cityId);
		echo $re['description'];
	}



	public function shoppingCenter($companyId = 0, $cityId = 0){
		$this->load->model('/admin/companyModel');
		$data['moderatorId'] = $this->userId;
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			$data['shoppingCenters'] = $this->companyModel->getShoppingCenter($cityId);
			$this->twig->render('admin/company/forms/shoppingCenterSelector.twig', $data);
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
			$this->twig->render('admin/company/tables/shoppingCenterBranchoffice.twig', $data);
		} 
	}

	public function companyBranchofficeTable($companyId = 0, $cityId = 0){
		$this->load->model('/admin/companyModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			$data['companyId'] = $companyId;
			#Получаем список адресов компании
			$data['branchoffices'] = $this->companyModel->getCompanyBranchoffice($companyId, $cityId);
			$this->twig->render('admin/branchoffice/tables/branchoffice.twig', $data);
		} 
	}

	public function companyDiscountTable($companyId = 0, $cityId = 0){
		$this->load->model('/admin/discountModel');
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			$data['companyId'] = $companyId;
			#Получаем список акций компании
			$data['discounts'] = $this->discountModel->getCompanyDiscount($companyId, $cityId);
			$this->twig->render('admin/discount/tables/companyDiscount.twig', $data);
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
				$this->twig->render('admin/company/tables/companyCatalog.twig', $data);
			} elseif($action == 'add'){
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
					var_dump($data);
					$this->twig->render('admin/company/forms/companyCatalogEdit.twig', $data);
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
				$this->twig->render('admin/company/forms/companyCatalogImageDiv.twig', $data);
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
				$this->twig->render('admin/company/tables/companyCityDescription.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление описания компании";
				$data['new'] = true;
				$this->twig->render('admin/company/forms/companyCityDescriptionEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование описания компании";
					$data['record'] = $this->companyModel->getCompanyCityDescription($id);
					$this->twig->render('admin/company/forms/companyCityDescriptionEdit.twig', $data);
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
				$this->twig->render('admin/company/forms/companyPhotoDiv.twig', $data);
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
						$data['record'] = array('categoryId'=>$this->branchofficeModel->getOnecategory($companyId));
					    $data['metro'] = $this->branchofficeModel->getMetro(0);
					$this->twig->render('admin/branchoffice/forms/branchofficeEdit.twig', $data);
				} elseif($action == 'edit'){
					$data['title'] = "Редактирование адреса";
                        #Получаем список городов для подстановки
					    $data['cities'] = $this->cityModel->getCity(0);
                        #Получаем список категорий для подстановки
					    $data['categories'] = $this->categoryModel->getCategory(0);
						#Получаем список метро для подстановки
					    $data['metro'] = $this->branchofficeModel->getMetro(0);
                    $data['record'] = $this->branchofficeModel->getBranchoffice($id, $companyId);
                    $this->twig->render('admin/branchoffice/forms/branchofficeEdit.twig', $data);
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
			$data['filterUri'] = "/admin/discount/filters/discountFilter.twig";
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
			//$data['records'] = $this->discountModel->getDiscountFiltered($filter);
			//echo "<pre>";var_dump($data['records']);echo "</pre>";
			$this->twig->render('admin/discount/tables/discountSS.twig', $data);
		} elseif ($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Акции";
				$data['filterUri'] = "/admin/discount/filters/discountFilter.twig";
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
				//$data['records'] = $this->discountModel->getDiscount($id);
				$this->twig->render('admin/discount/tables/discountSS.twig', $data);
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
				$this->twig->render('admin/discount/forms/discountEdit.twig', $data);
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
					$this->twig->render('admin/discount/forms/discountEdit.twig', $data);
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
							->set_output(json_encode(array('url'=>site_url('admin/companyDiscount/'.$data['discount']['companyId'].'/'.$result))));				
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
		->add_column('action', '<a href="'.site_url().'admin/company/$2" target="_blank" class="btn btn-outline yellow btn-sm"><i class="fa fa-pencil-square-o"></i>Ред. Компанию</a>
                <a href="'.site_url().'admin/companyDiscount/$2/$1" target="_blank" class="btn btn-outline purple btn-sm"><i class="fa fa-pencil-square-o"></i>Ред. Акцию</a>
                <a href="#basic" data-toggle="modal" onClick="urlToModal(\'/admin/discount/$1/remove\');" class="btn btn-outline red btn-sm"><i class="fa fa-trash-o"></i> Удалить</a>', 'id, companyId')
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
				
				$this->twig->render('admin/discount/forms/companyDiscountEdit.twig', $data);
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
					$this->twig->render('admin/discount/forms/companyDiscountEdit.twig', $data);
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
				$result = $this->discountModel->setCompanyDiscount($data);
				if($result > 0){
					$this->output
							->set_content_type('application/json')
							->set_output(json_encode(array('url'=>site_url('admin/companyDiscount/'.$companyId.'/'.$result))));				
				}				
			}
		} 
	}

	public function cloneDiscount($companyId = 0, $discountId = 0)
	{
		$this->load->model('/admin/discountModel');
		if($this->input->server('REQUEST_METHOD') == 'POST') {
			set_time_limit (0);
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
				$this->MenuModel->rebuildMenus();							
			}
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

	public function deleteDiscounts()
	{
		$this->load->model('/admin/discountModel');
		if($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST)) {
			if(isset($_POST['data'])){
				$this->discountModel->deleteDiscounts($_POST['data']);
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
				$this->twig->render('admin/discount/forms/discountPhotoDiv.twig', $data);
			} elseif($action == 'remove'){
				$this->discountModel->removeDiscountPhoto($id);
			}
		}
	}



	#User
	public function user($id = 0, $action = 'none')
	{
		$this->load->model('/admin/userModel');
		$data['moderatorId'] = $this->userId;
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			if($id == 0){
				$data['title'] = "Пользователи";
				$data['records'] = $this->userModel->getUser($id);
				$this->twig->render('admin/user/tables/user.twig', $data);
			} elseif($id == -1){
				$data['title'] = "Добавление пользователя";
					$data['types'] = array( 
							array('value' => 'MODERATOR', 'name' => 'Модератор'), 
							array('value' => 'ADMIN', 'name' => 'Администратор')
							);
				$data['new'] = true;
				$data['message'] = $this->session->flashdata('message');
				$this->twig->render('admin/user/forms/userEdit.twig', $data);
			} else {
				if($action == 'none'){
					$data['title'] = "Редактирование пользователя";
					$data['types'] = array( 
							array('value' => 'MODERATOR', 'name' => 'Модератор'), 
							array('value' => 'ADMIN', 'name' => 'Администратор')
							);
					$data['record'] = $this->userModel->getUser($id);
					$this->twig->render('admin/user/forms/userEdit.twig', $data);
				} 
			}
		} elseif($this->input->server('REQUEST_METHOD') == 'POST' && !empty($_POST['data'])) {
			(parse_str($_POST['data'], $result));
			$result = $this->userModel->setUser($result);
			if($result === "already exist") {
				http_response_code(406);
			}
		}
	}

	public function removeUser($id){
		$this->load->model('/admin/userModel');
		$this->userModel->removeUser($id);
		echo 'OK<script>setTimeout (function(){window.opener.location.reload();window.close();}, 200);</script>';
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
		$config['max_size']     = '10000';

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
				$config['width']         = 700;
				$config['height']       = 700;

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
	


	public function advertising(){
		$this->load->model('Advertmodel');
		if($this->input->method() != 'post'){
			$data = array('adverts'=>$this->Advertmodel->get_adverts(),'advertsdescriptions'=>$this->Advertmodel->get_advertsdescriptions());
			$this->twig->render('admin/advertising/adverts_edit.twig', $data);
		}
		else{	
			$advupdate = $this->input->post('adverts',false);
			foreach($advupdate as $key=>$value){
				$this->db->where('place', $key);
				$this->db->update('advertising',array('value'=>$value));
			}
			$this->Advertmodel->update_adverts();
			$data = array('adverts'=>$this->Advertmodel->get_adverts(),'advertsdescriptions'=>$this->Advertmodel->get_advertsdescriptions());
			$data['message'] = "Сохранено!";
			$this->twig->render('admin/advertising/adverts_edit.twig', $data);			

		}
	}

	public function custompages($id=0){
		$this->load->model('Custompagesmodel');
		if($this->input->method() != 'post'){
			if($id == 0){
				$data = array('pages'=>$this->Custompagesmodel->get_pages());
				$this->twig->render('admin/custompages/pages_list.twig', $data);
			}
			else{
				$data = array('page'=>$this->Custompagesmodel->get_page_by_id($id));
				$this->twig->render('admin/custompages/pages_edit.twig', $data);				
			}
		}
		else{	
			if($id == 0 ){
				$pageinsert = array('url'=>$this->input->post('url'),'title'=>$this->input->post('title'),'text'=>$this->input->post('text'));
				$newpage = $this->Custompagesmodel->insert_page($id,$pageinsert);
				$this->Custompagesmodel->update_cached_pages();
				redirect('/admin/custompages/'.$newpage);					
			}
			else{
				$pageupdate = array('url'=>$this->input->post('url'),'title'=>$this->input->post('title'),'text'=>$this->input->post('text'));			
				$this->Custompagesmodel->update_page($id,$pageupdate);
				$this->Custompagesmodel->update_cached_pages();
				$data = array('page'=>$this->Custompagesmodel->get_page_by_id($id));
				$data['message'] = "Сохранено!";
				$this->twig->render('admin/custompages/pages_edit.twig', $data);
			}
				
		}		
	}

	public function custompagedelete($id){
		$this->load->model('Custompagesmodel');
		$this->Custompagesmodel->delpage($id);
		redirect('/admin/custompages');
	}

	public function moderstat(){
		$this->load->model('admin/Moderstatmodel');
		$data = $this->Moderstatmodel->stat();
		$this->twig->render('admin/moderstat/stat.twig',array('stat'=>$data));
	}

	public function moderstatdetail($type,$moder){
		$this->load->model('admin/Moderstatmodel');
		$datarange = false;
		if($this->input->get('startDate')){
			$datarange = array('startDate'=>$this->input->get('startDate'),'endDate'=>$this->input->get('endDate'));
		}
		
		$data = $this->Moderstatmodel->statlist($type,$moder,$datarange);
		//echo '<pre>'.print_R($this->db->last_query(),1).'</pre>';	
		$this->twig->render('admin/moderstat/list.twig',array('list'=>$data,'type'=>$type));		
	}

	public function cleanandcorrectdb(){
		$q = $this->db->query('SELECT COUNT(*) AS num, cityid, companyid FROM companycitydescription GROUP BY cityid, companyid ORDER BY num DESC');
		foreach($q->result() as $c){
			if($c->num > 1){
				$cities = $this->db->order_by('moderateDate','desc')->get_where('companycitydescription',array('companyId'=>$c->companyid,'cityId'=>$c->cityid))->result();
				echo '<br/>city!!!!!!!!<br/>';
				//print_R($cities);
				//echo '<br/>';
				$resulted = false;
				foreach($cities as $city){
					if(!$resulted)
						$resulted = $city;
					else{
						if(strlen($resulted->description) < 30 && strlen($city->description) > 30 )
							$resulted->description = $city->description;
						if(strlen($resulted->descriptionTemplate) < 30 && strlen($city->descriptionTemplate) > 30 )
							$resulted->descriptionTemplate = $city->descriptionTemplate;							
					}
					$this->db->where('id', $city->id);
					$this->db->delete('companycitydescription');
				}
				if($resulted->moderated == 0)
					$resulted->moderated = 1;
				if($resulted->accepted == 0)
					$resulted->accepted = 1;
				$this->db->insert('companycitydescription', $resulted);
				print_R($resulted);				
			}
		}
		$old_companies = $this->db->where('moderated','0')->where('accepted','0')->get('company')->result();
		foreach($old_companies as $company){
          $this->db->delete('discount', array('companyid' => $company->id));
          $this->db->delete('branchoffice', array('companyid' => $company->id));
          $this->db->delete('companycatalog', array('companyid' => $company->id));
          $this->db->delete('companycitydescription', array('companyid' => $company->id));
		  $this->db->delete('company', array('id' => $company->id));
		}
		$this->db->where('moderated','0')->where('accepted','0')->delete('discount');
		$this->db->where('finishDate < \'2014-12-31\'')->delete('discount');
		echo 'old companies cleaned:'.count($old_companies);



	}

}