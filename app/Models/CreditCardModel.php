<?php

namespace App\Models;

use CodeIgniter\Model;

class CreditCardModel extends Model
{
    protected $table = 'credit_card';

    protected $allowedFields = ['data'];

    public function getCreditCardData()
    {
        return $this->findAll();
    }

    public function addCreditCardData($data)
    {
        $credit_card_data = $this->findAll();
        $credit_card_data = $credit_card_data[0]['data'];

        if ($credit_card_data == null) {
            $unserialized_data = [];
        }
        else{
            $unserialized_data = unserialize($credit_card_data);
        }

        array_push($unserialized_data, $data);

        return $this->where(['id' => 1 ])->set(['data' => serialize($unserialized_data)])->update();
    }
}