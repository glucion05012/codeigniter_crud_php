<?php
class Posts_model extends CI_Model{
    public function __construct(){
        $this->load->database();
        //db2
        $this->db2 = $this->load->database('mydb', TRUE);
    }

    public function get_posts(){
        //$this->db->order_by('id', 'DESC');
        $query = $this->db->get('articles');
        return $query->result_array();
    }

    //db2
    public function get_posts2(){
        $query = $this->db2->query('SELECT * FROM customers');
        return $query->result_array();
    }

    public function read_posts($id){
        // $query = $this->db->query('SELECT * FROM articles WHERE id ='.$id);
        $query = $this->db->get_where('articles', array('id' => $id));
        return $query->row_array();
    }

     public function create_posts(){
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
        );

        return $this->db->insert('articles', $data);
        
    }

    public function delete_posts($id){
        $this->db->where('id', $id);
        $this->db->delete('articles');
        return true;
    }

    public function update_posts(){
         $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
        );

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('articles', $data);
    }
}