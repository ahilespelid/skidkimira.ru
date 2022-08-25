<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct(){    
        parent::__construct();
		$this->load->library('twig');
        $this->load->model('Citymodel');  
		$this->load->model('DiscountsModel');
		$this->load->model('Advertmodel');
		
        //$this->output->enable_profiler(TRUE);
    }


	public function index()
	{

		$city = $this->Citymodel->resolve_city();
        $cityinfo = $this->Citymodel->get_city($city);

		if($city == 1)
			$total = $this->DiscountsModel->get_discounsCount();
		else 
			$total = $this->DiscountsModel->get_discounsCount($city);
		$titles =  array('распродажа', 'распродажи', 'распродаж');
	    $cases = array (2, 0, 1, 1, 1, 2);
    	$total_text =  number_format($total,0,'',' ')." ".$titles[ ($total%100 > 4 && $total %100 < 20) ? 2 : $cases[min($total%10, 5)] ];


		
		$this->twig->render('html.twig',
				array(
					'meta'=>
						array('title'=>"Скидки и распродажи в магазинах ".$cityinfo->nameWhich,
						'description'=>'Все новые скидки, акци и распродажи магазинов '.$cityinfo->nameWhich.', а также актуальные  новости и адреса  компаний',
						'keywords'=>'распродажа, акции, скидки, дисконт центр, дисконтная карта, сток центр, распродажи в '.$cityinfo->nameWhere.', скидки в '.$cityinfo->nameWhere.', конкурс, рекламные акции, распродажа одежды, сток, дисконт, распродажи в москве, распродажа обуви, промо акции, события, магазин сток, горячие события, события, купон, распродажи и скидки',
						'canonical'=>'https://'.$_SERVER['HTTP_HOST'].'/'),
					'city'=>$city,
					'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city),
					'adverts'=>$this->Advertmodel->get_adverts(),
					'searchtype'=>'discount', 
                    'showleftbanners'=> true,					
					'content'=>
						array(
								'title'=>'В каталоге <a href="/catalogue/discount"> '.$total_text.'</a>',
								'categories'=> $this->DiscountsModel->get_discounsCategories()
						),
					'additional'=>array('promotextbtm'=>'<h3>Скидки и распродажи '.$cityinfo->nameWhich.'</h3>
				<p>Если Вы обожаете покупать много, а платить мало, если для Вас имеет большое значение не только сама покупка, но и ее стоимость, то совершайте максимум возможных покупок, используя самую полную информацию о скидках и распродажах на нашем высокоинформативном сайте!</p><br>
				<p>У нас Вы сможете  узнать о том, как и где можно выгодно покупать. Одна первоклассная распродажа - и у Вас новый шикарный гардероб! Еще одна серьезная скидка – и ваш дом украшает элегантная мягкая мебель или современная бытовая техника по более доступной цене!  Причем эти все неожиданные преференции наступают за счет средств, заранее отложенных на покупку.</p><br>
				<p>Утверждение о том, что скидки и распродажи '.$cityinfo->nameWhich.' позволяют покупать товар по самым низким ценам в наше время имеет особое значение.  И тот, кто в числе первых успевает узнать о планируемых скидках и распродажах, тот всегда покупает все, что хочется по самым привлекательным ценам!</p>'),
				
				'smth'=>array('smthText'=>'<h4>Каталог '.$cityinfo->nameWhich.'</h4>') //шаблон на главной
				
				)
		);
		//$this->load->view('welcome_message');
	}

	public function notfound(){
		show_404();
	}

	public function rebuildMenus(){
			$this->load->model('MenuModel');
			$this->MenuModel->rebuildMenus();
	}

	public function custompage($url){
		$this->load->model('Custompagesmodel');
		$page = $this->Custompagesmodel->get_page($url);
		$city = $this->Citymodel->resolve_city();
		if($page){
			$this->twig->render('custompage.twig',array(
				'meta'=>array('title'=>$page->title),
				'page'=>$page,
				'adverts'=>$this->Advertmodel->get_adverts(),
				'lastdiscounts'=> $this->DiscountsModel->get_lastDiscounts($city)
				));
		}
		else{
			show_404();
		}

	}

	public function tohome(){
		redirect('/');
	}	
}
