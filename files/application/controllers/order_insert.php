<?php
defined('BASEPATH') OR exit('No direct script access allowed.');

class Order_insert extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Order_model');
    }
    
    public function index(){
           $data['getNewId'] = $this->Order_model->getNewId();
           $this->load->view('order_insert', $data);  
    }

    function insertOrder(){
        
        $items = array(
            "Bermuda" => $this->input->post('1'),
            "Blazer" => $this->input->post('2'),
            "Blusa fem.simples" => $this->input->post('3'),
            "Blusa fem.especial" => $this->input->post('4'),
            "Blusão abrigo esportivo" => $this->input->post('5')
          );
        
          $itemsJSON = json_encode($items);

          $data = array(
              'id_order' => $this->input->post('id_order'),
              'name_clients' => $this->input->post('name_clients'),
              'mail' => $this->input->post('mail'),
              'tel' => $this->input->post('tel'),
              'street' => $this->input->post('street'),
              'district' => $this->input->post('district'),
              'item' => $itemsJSON,
              'status' => $this->input->post('status')
          ); 
        $this->Order_model->insertOrder($data);
        redirect(base_url('order_list'));
    }
}
?>