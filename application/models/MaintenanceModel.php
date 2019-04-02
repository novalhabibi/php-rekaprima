<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaintenaceModel extends CI_Model
{
    public $_table = "maintenances";




    public function getAll()
    {
        return $this->db-get($this->_table)->result();
    }
}
