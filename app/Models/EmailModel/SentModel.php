<?php

namespace App\Models;

use CodeIgniter\Model;

class SentModel extends Model
{
    protected $table = 'sent';

    protected $allowedFields = ['eid', 'receiver', 'subject', 'message', 'time'];

    public function getSent($eid = false)
    {
        if ($eid === false) {
            return $this->orderBy('eid', 'DESC')->findAll();
        }
    
        return $this->where(['eid' => $eid])->first();
    }

    public function deleteSent($eid)
    {
        return $this->where(['eid' => $eid])->delete();
    }

    public function editSent($eid, $data)
    {
        return $this->where(['eid' => $eid])->set($data)->update();
    }
}