<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Company;
use Illuminate\Support\Facades\Redirect;

class EmailController extends Controller
{
    public function index(Request $request)
    { $c_data = Company::find(1);
        $testMailData = [
            'name' => $c_data['name'],
            'c_name' => $c_data['c_name'],
            'to' => $c_data['c_email'],
            'c_logo' => $c_data['c_logo'],
            'c_address' => $c_data['c_address'],
            'rname' => $request->name,
           //  'mobile_no' => $mobile_no,
            'email' => $request->email,
           //  'location' => $location,
            'from' => $request->email,
            'message' => $request->message,
            'subject' => $request->subject,
             'title' => 'Test Email From User',
        ];
        // Mail::send('mail.BusinessEnquiry', ['email_data1' => $email_data1], function ($message) use ($email_data1) {
        //     $message->to('singhjaggi77340@gmail.com')->subject($email_data1['subject']);
        //     $message->from($email_data1['from'], $email_data1['name']);
        // });
        // $testMailData = [
        //     'title' => 'Test Email From AllPHPTricks.com',
        //     'body' => 'This is the body of test email.'
        // ];

        Mail::to($c_data['c_email'])->send(new SendMail($testMailData));
        return redirect()->route('/')
                        ->with('success', 'Email has been Sent successfully.');


        // dd('Success! Email has been sent successfully.');
    }
}
