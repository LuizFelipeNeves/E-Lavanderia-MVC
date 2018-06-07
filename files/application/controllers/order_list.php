<?php
defined('BASEPATH') OR exit('No direct script access allowed.');

class Order_list extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('Order_model');
    }

    public function index(){
		$data['listOrder'] = $this->Order_model->getAllOrder();
        $this->load->view('order_list', $data);
    }

    public function updateStatus(){
        $data['status'] = $this->input->post('status_modal_update');
        $condition['id_order'] = $this->input->post('id_order_update');

        $this->Order_model->updateStatus($data, $condition);

        redirect(base_url('order_list'));
    }

    public function deleteOrder(){
        $id = $this->input->post('id_order_delete');
        
        $this->Order_model->deleteOrder($id);

        redirect(base_url('order_list'));
	}
	
	public function printOrder(){
		
        $id = $this->input->post('id_order_print');
        
        $this->Order_model->printOrder($id);

    }
	public function downloadOrder(){
		
        $id = $this->input->post('id_order_download');
        
        $this->Order_model->downloadOrder($id);
    }
}
?>