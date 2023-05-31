<?php

namespace App\Models;

use CodeIgniter\Model;

class ReceivedModel extends Model
{
    protected $table = 'received';

    protected $allowedFields = ['eid', 'sender', 'subject', 'message', 'time'];

    public function getReceived($eid = false)
    {
        if ($eid === false) {
            return $this->findAll();
        }
    
        return $this->where(['eid' => $eid])->first();
    }
}