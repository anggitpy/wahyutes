<?php

class Pns_model extends CI_Model {

    public function ambil_data_pns()
    {
        $query = $this->db->from('pns')
                        ->order_by('nama','asc')
                        ->get();
        return $query->result();
    }

    public function save()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp')
        ];
        $this->db->insert('pns', $data);
        return;
    }

    public function ambil_data_per_id($id)
    {
        $query = $this->db->from('pns')
                        ->where('id', $id)->get();
        return $query->row();
    }

    public function update($id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp')
        ];
        $this->db->where('id', $id)
                    ->update('pns', $data);
        return;
    }

    public function delete($id)
    {
        $this->db->where('id', $id)
                ->delete('pns');
        return;
    }

}