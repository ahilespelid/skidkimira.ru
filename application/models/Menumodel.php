<?php
class MenuModel extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();  
    }

    function get_discountsMenu($type){
        if($type == "discounts") return $this->db->select('id,name')->where('type','sale')->get('category')->result();
    }

    function get_discountsSubMenu($id)
    {
        return $this->db->select('id,name')->where('categoryId',$id)->get('subcategory')->result();
    }

    function rebuildMenus(){
        $this->load->helper('file');        
        $discounts = $this->MenuModel->get_discountsMenu('discounts');
        $discountsmenu = $this->twig->render('parts/menus/menu.twig',array('menulink'=>'catalogue/discount/cat','menu'=>$discounts),true);
        write_file('./application/views/parts/menus/discounts.html', $discountsmenu, 'w');
        foreach($discounts as $subcat){
            $submenu = $this->MenuModel->get_discountsSubMenu($subcat->id);
            $discountssubmenu = $this->twig->render('parts/menus/submenu.twig',array('menulink'=>'catalogue/discount/cat','menu'=>$discounts,'submenulink'=>'catalogue/discount/subcat','submenu'=>$submenu,'activeid'=>$subcat->id),true);
            write_file('./application/views/parts/menus/discounts'.$subcat->id.'.html', $discountssubmenu, 'w');
        }

        $this->db->select('city.id,city.name,country.name AS country');
        $this->db->join('country','city.countryid = country.id');
        $this->db->order_by('country.id','asc');
        $this->db->order_by('city.name','asc');
        $cities = $this->db->get('city')->result();
        $citiesmenu = $this->twig->render('parts/menus/cities.twig',array('cities'=>$cities),true);
        write_file('./application/views/parts/menus/cities.html', $citiesmenu, 'w');

        $this->db->select('distinct category.name, category.id',false)
        ->join('company','company.categoryid = category.id','left')
        ->where('company.id is not null')
        ->where('category.type','sale');
        $companycategories = $this->db->get('category')->result();
        $companymenu = $this->twig->render('parts/menus/menu_without_sub.twig',array('menulink'=>'catalogue/company/cat','menu'=>$companycategories),true);
        write_file('./application/views/parts/menus/companies.html', $companymenu, 'w');



        $this->load->model('Brandmodel');
        $brandcategories = $this->Brandmodel->get_brandCategories();
        $brandmenu = $this->twig->render('parts/menus/menu_without_sub.twig',array('menulink'=>'catalogue/brands/cat','menu'=>$brandcategories),true);
        write_file('./application/views/parts/menus/brands.html', $brandmenu, 'w');




        $this->db->select('distinct category.name, category.id',false)
        ->join('company','company.categoryid = category.id','left')
        ->where('company.id is not null')
        ->where('category.type','sale')
        ->where('company.haswebshop',1);
        $webshopscategories = $this->db->get('category')->result();
        $webshopsmenu = $this->twig->render('parts/menus/menu.twig',array('menulink'=>'catalogue/webshops/cat','menu'=>$webshopscategories),true);
        write_file('./application/views/parts/menus/webshops.html', $webshopsmenu, 'w');
        /*foreach($webshopscategories as $subcat){
            //$submenu = $this->MenuModel->get_discountsSubMenu($subcat->id);
            $this->db->select('distinct subcategory.name, subcategory.id',false)
                    ->join('category','subcategory.categoryid = category.id','left')
                    ->join('company','company.categoryid = category.id','left')
                    ->where('subcategory.categoryId',$subcat->id)
                    ->where('company.id is not null')
                    ->where('category.type','sale')
                    ->where('company.haswebshop',1);        
            $submenu = $this->db->get('subcategory')->result();            
            $webshopssubmenu = $this->twig->render('parts/menus/submenu.twig',array('menulink'=>'catalogue/webshops/cat','menu'=>$webshopscategories,'submenulink'=>'catalogue/webshops/subcat','submenu'=>$submenu,'activeid'=>$subcat->id),true);
            write_file('./application/views/parts/menus/webshops'.$subcat->id.'.html', $webshopssubmenu, 'w');
        }*/

        $this->db->select('distinct category.name, category.id',false)
        ->join('company','company.categoryid = category.id','left')
        ->where('company.id is not null')
        ->where('category.type','sale');
        $companycategories = $this->db->get('category')->result();
        $companymenu = $this->twig->render('parts/menus/menu_without_sub.twig',array('menulink'=>'catalogue/companycatalogs/cat','menu'=>$companycategories),true);
        write_file('./application/views/parts/menus/companycatalogs.html', $companymenu, 'w');



    }

}
?>