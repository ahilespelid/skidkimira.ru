<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City extends CI_Controller {

    public function change(){
        if($this->input->method() != 'post'){
            show_404();   
        }
        else{
            $this->load->library('user_agent');
            $this->load->model('Citymodel');

            if($this->input->post('city') == $this->Citymodel->resolve_city()) {
                $this->output->append_output(json_encode(array('nochange' => true)));
            }
            else {
                $city = $this->Citymodel->get_city($this->input->post('city'));
                $scheme = parse_url(base_url(), PHP_URL_SCHEME);
                $host = '';

                if (!empty($city->subDomain)) {
                    $host = implode('.', array(
                        $city->subDomain,
                        parse_url(base_url(), PHP_URL_HOST)
                    ));
                }
                else {
                    $host = parse_url(base_url(), PHP_URL_HOST);
                }

                $url = $scheme . '://' . $host . '/';
                $this->output->append_output(json_encode(array('url' => $url)));
            }
 
        }
    }
    public function test(){
        $this->load->model('Citymodel');
        print_r($this->Citymodel->resolve_city());
    }
}
?>