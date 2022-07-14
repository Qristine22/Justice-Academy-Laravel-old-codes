<?php

namespace App\Http\Controllers\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\MailSendingRequest;
use App\Mail\ContactMail;

// Models
use App\Models\Header;
use App\Models\SitesLink;
use App\Models\ContactPage;
use App\Models\ContactStaff;

class ContactsController extends Controller
{
    public $headers;
    public $sitesLinks;

    public function getHeader(){
        return $this->headers;
    }
    public function setHeader($headers){
        $this->headers = $headers;
    }
    public function getSitesLinks(){
        return $this->sitesLinks;
    }
    public function setSitesLinks($sitesLinks){
        $this->sitesLinks = $sitesLinks;
    }
    public function __construct(){
        $headers = Header::headers();
        $sitesLinks = SitesLink::all();
        $this->setHeader($headers);
        $this->setSitesLinks($sitesLinks);
    }




    
    
    // contacts *********************************************************************************
    public function contacts(){
        $contactPage = ContactPage::first();
        $contactStaff = ContactStaff::all();

        return view('contacts', [
            'headers' => $this->getHeader(),
            'sitesLinks' => $this->getSitesLinks(),
            'contactPage' => $contactPage,
            'contactStaff' => $contactStaff,
        ]);
    }






    public function sendEmail(MailSendingRequest $request){
        $data = [
            'name' => $request->name,
            'mail' => $request->mail,
            'topic' => $request->topic,
            'content' => $request->content,
        ];

        Mail::to('simon.karapetyan@justiceacademy.am')->send(new ContactMail($data));

        if(app()->getLocale() === 'en'){
            return redirect()->back()->with('success', 'Thanks for sending message');
        }
        elseif(app()->getLocale() === 'ru'){
            return redirect()->back()->with('success', 'Спасибо за отправку сообщения');
        }
        else{
            return redirect()->back()->with('success', 'Շնորհակալություն հաղորդագրություն ուղարկելու համար');
        }
    }
}
