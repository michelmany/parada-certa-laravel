<?php

namespace ParadaCerta\Http\Controllers\Front;

use Illuminate\Http\Request;

use ParadaCerta\Http\Requests;
use ParadaCerta\Http\Controllers\Controller;

class ContatoController extends Controller
{
    public function create()
    {
        return view('front.contato');
    }

    public function send(Request $request)
    {
        $this->email = $request->get('email');

        \Mail::send('emails.contato',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'website' => $request->get('website'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->setReplyTo($this->email);
                $message->from('form@autoescolaparadacerta.com.br');
                $message->to('contato@autoescolaparadacerta.com.br', 'Auto Escola Parada Certa')->subject('Mensagem através do site Auto Escola Parada Certa');
            });

    }
}
