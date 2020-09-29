<?php

class Home extends CI_Controller {

    public function index()
    {
        $this->load->model('Pns_model');

        $data['pns'] = $this->Pns_model->ambil_data_pns();

        $this->load->view('index', $data);
    }

    public function create()
    {
        $this->load->view('create');
    }   
    
    public function save()
    {
        $this->load->model('Pns_model');

        $this->Pns_model->save();

        redirect('home/index');

    }
    

    public function edit($id)
    {
        $this->load->model('Pns_model');

        $data['pns'] = $this->Pns_model->ambil_data_per_id($id);

        $this->load->view('edit', $data);
    }

    public function update($id)
    {
        $this->load->model('Pns_model');

        $this->Pns_model->update($id);

        redirect('home/index');

    }

    public function delete($id)
    {
        $this->load->model('Pns_model');

        $this->Pns_model->delete($id);

        redirect('home/index');

    }

}