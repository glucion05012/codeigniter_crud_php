<?php
    class Restapi extends CI_Controller{
        
        public function index(){
            $data['title'] = 'Latest Posts';

            $data['articles'] = $this->posts_model->get_posts();
            echo json_encode($data['articles']);
        }

        //db2
        public function db2(){

            $data['customers'] = $this->posts_model->get_posts2();
            echo json_encode($data['customers']);
        }
        
    }
?>