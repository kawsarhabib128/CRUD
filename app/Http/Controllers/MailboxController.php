<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class MailboxController extends Controller
{
    public function mailbox()
    {
        return view('admin.pages.mailbox.mailbox');
    } 
    public function compose()
    {
        return view('admin.pages.mailbox.compose');
    } 
    public function read_mail()
    {
        return view('admin.pages.mailbox.read_mail');
    }
}
