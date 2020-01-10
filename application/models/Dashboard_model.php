<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/**
 *

 */
class Dashboard_model extends CI_Model
{


    public function get_ita_ebit()
    {
        $rs = $this->db
            ->get("ita_ebit")
            ->result();
        return $rs;
    }
}