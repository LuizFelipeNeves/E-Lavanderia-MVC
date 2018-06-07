<?php

    Class Order_model extends CI_Model{
        function __construct(){
            parent::__construct();            
        }

        function getAllNewOrder(){
            $condition = "status = 'Novo' ORDER BY datei DESC";
            $this->db->select('*');
            $this->db->from('orders');
            $this->db->where($condition);

            return $this->db->get();
        }

        function getNewId(){

            $this->db->select("MAX(`id_order`) AS 'lastId'");
            $this->db->from('orders');  

            return $this->db->get()->row()->lastId + 1;
        }

        function getAllOrder(){
            $this->db->select('*');
            $this->db->from('orders');

            return $this->db->get();
        }
		function getOrderID($_id){
            $this->db->select('*');
            $this->db->from('orders');
			$this->db->where('id_order = ', $_id);
            return $this->db->get();
        }

        function insertOrder($_data){
            $this->db->insert('orders',$_data);
        }
		function updateOrder($_data, $_id){
			$this->db->where('`id_order` = ', $_id);
			$this->db->update('orders',$_data);
		}

        function updateStatus($_data, $_condition){
            $this->db->where($_condition);
            $this->db->update('orders', $_data);
        }

        function deleteOrder($_id){
            $this->db->where('id_order', $_id);
            $this->db->delete('orders');
        }
		function printOrder($_id){
			$array = $this->Order_model->getOrderID($_id)->result_array();
			$this->output->set_content_type('application/json')->set_output(json_encode($array));
			/*print_r(json_encode($array));*/
        }
		function downloadOrder($_id){
			$array = $this->Order_model->getOrderID($_id)->result_array();	
			header('Content-Type: application/json');
			header('Content-Disposition: attachment; filename=order.json');
			header('Cache-Control: must-rSomething is wrongidate');
			file_put_contents('php://output', json_encode($array)); 
        }
    }
?>