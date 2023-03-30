<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SendGrid;
use SendGrid\Mail\Mail;
use \Symfony\Component\HttpFoundation\Response;

class MailController extends Controller
{
    public function index() {
        return view('mail');
    }

    public function send(Request $request) {
        $request->validate([
            'email'    => 'required',
            'subject'  => 'required',
            'contents' => 'required',
        ]);

        $email = new Mail();
        $email->setFrom('laravel-test@example.com', 'ララベルメールテストチーム');
        $email->setSubject($request->subject);
        $email->addTo($request->email);
        $email->addContent("text/plain", $request->contents);

        $sendgrid = new SendGrid(env('SENDGRID_API_KEY'));

        $response = $sendgrid->send($email);
        if ($response->statusCode() == Response::HTTP_ACCEPTED) {
            return view('mail', ['successMessage' => '送信できました！']);
        } else {
            return view('mail', ['errorMessage' => '送信失敗しました！']);
        }
    }
}