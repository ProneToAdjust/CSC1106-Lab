<?php

namespace App\Controllers;

use App\Models\EmailModel\SentModel;
use App\Models\EmailModel\ReceivedModel;

class Email extends BaseController
{
    public function index($mode = 'inbox', $eid = false){   
        $sentModel = model(SentModel::class);
        $receivedModel = model(ReceivedModel::class);

        if ($eid) {
            return view('email/view', [
                'email' => $sentModel->getSent($eid)
            ]);
        }
        else {
            $data = [
                'mode' => 'Sent',
                'emails' => $sentModel->getSent(),
                'email_msg' => ''
            ];
        }

        return view('email/index', $data);
    }

    public function send_email(){
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('email/send_email', ['title' => 'Send Email']);
        }

        $post = $this->request->getPost(['to', 'subject', 'message']);

        if (! $this->validateData($post, [
            'to' => 'required|max_length[50]|valid_email|min_length[3]',
            'subject'  => 'required|max_length[100]|min_length[10]',
            'message'  => 'required|max_length[500]|min_length[10]'
        ])) {
            // The validation fails, so returns the form.
            return view('email/send_email');
        }

        $sentModel = model(SentModel::class);

        $sentModel->save([
            'receiver' => $post['to'],
            'subject'  => $post['subject'],
            'message'  => $post['message'],
        ]);

        return redirect()->to('/email/sent');
    }

    public function delete_email($eid){
        $sentModel = model(SentModel::class);

        $sentModel->deleteSent($eid);

        return redirect()->to('/email/sent');

    }

    public function edit_email($eid=false){
        helper('form');

        $sentModel = model(SentModel::class);

        $data = [
            'email' => $sentModel->getSent($eid)
        ];

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('email/edit_email', $data);
        }

        $post = $this->request->getPost(['to', 'subject', 'message']);

        if (! $this->validateData($post, [
            'to' => 'required|max_length[50]|valid_email|min_length[3]',
            'subject'  => 'required|max_length[100]|min_length[10]',
            'message'  => 'required|max_length[500]|min_length[10]'
        ])) {
            $data = [
                'email' => [
                    'eid' => $eid,
                    'receiver' => $post['to'],
                    'subject'  => $post['subject'],
                    'message'  => $post['message'],
                ]
            ];
            // The validation fails, so returns the form.
            return view('email/edit_email', $data);
        }

        // update sent table
        $sentModel->editSent($eid, [
            'receiver' => $post['to'],
            'subject'  => $post['subject'],
            'message'  => $post['message'],
        ]);

        return redirect()->to('/email/sent');
    }
}