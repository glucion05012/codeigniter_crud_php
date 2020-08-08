<?php
    class Posts extends CI_Controller{
        
        public function index(){
            $data['title'] = 'Latest Posts';

            $data['articles'] = $this->posts_model->get_posts();
            // echo json_encode($data['articles']);

            $this->load->view('templates/header');
            $this->load->view('posts/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($id = NULL){
            $data['articles'] = $this->posts_model->read_posts($id);

            if(empty($data['articles'])){
                show_404();
            }
        
            $this->load->view('templates/header');
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer');
        
        }

        public function create(){
           $data['title'] = 'Create Posts';
        
            $this->form_validation->set_rules('title', 'Title',
                    'required');
            $this->form_validation->set_rules('description', 'Description',
                    'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('posts/create', $data);
                $this->load->view('templates/footer');
            }else{
                $this->posts_model->create_posts();

                $this->session->set_flashdata('successmsg', 'Posts successfully created!');
                redirect('posts');
            }

        }

        public function delete($id){
            $this->posts_model->delete_posts($id);
            $this->session->set_flashdata('deletemsg', 'Posts successfully deleted!');
            redirect('posts');
        }

        public function edit($id){
            $data['articles'] = $this->posts_model->read_posts($id);

            
            if(empty($data['articles'])){
                show_404();
            }
        
            $data['title'] = 'Edit Posts';

            $this->load->view('templates/header');
            $this->load->view('posts/edit', $data);
            $this->load->view('templates/footer');
        
        }

        public function update(){
            $this->posts_model->update_posts();
            $this->session->set_flashdata('successmsg', 'Posts successfully updated!');
            redirect('posts');
        }

        
    }
?>