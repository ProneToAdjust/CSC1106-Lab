<?php

namespace App\Controllers;

class CreditCard extends BaseController
{
    public function index()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('credit_card/index');
        }

        $post = $this->request->getPost(['card_number', 'month', 'year']);

        if (! $this->validateData($post, [
            'card_number' => 'required|numeric|min_length[16]',
            'month'  => 'required|numeric|exact_length[2]',
            'year'  => 'required|numeric|exact_length[4]'
        ])) {
            // The validation fails, so returns the form.
            return view('credit_card/index');
        }
        
        $creditCardModel = model(CreditCardModel::class);

        $creditCardModel->addCreditCardData([
            'card_number' => $post['card_number'],
            'month' => $post['month'],
            'year' => $post['year']
        ]);

        return view('credit_card/success');
    }
}