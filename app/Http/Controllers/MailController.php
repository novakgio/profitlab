<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subscriber;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class MailController extends Controller
{
    
    public static $mail;

    public function __construct(){
        self::$mail = new PHPMailer(true);
        self::$mail->SMTPDebug =0;
        self::$mail->CharSet = 'UTF-8';                       
        self::$mail->isSMTP();                                      
        self::$mail->Host = 'smtp.zoho.com'; 
        self::$mail->SMTPAuth = true;                               
        self::$mail->Username = 'info@profitlab.ge';                
        self::$mail->Password = 'marika77';                          
        self::$mail->SMTPSecure = 'ssl';                           
        self::$mail->Port = 465; 
        
        
    }




    public function sendAdmin(Request $request){
        $success=true;
        $mailConstructor = new MailController();
        self::$mail->setFrom("info@profitlab.ge", $request->email);
        self::$mail->addAddress('info@profitlab.ge');
        self::$mail->AddCC('mmchedlidze@profitlab.ge', 'Profit Lab');
        
        self::$mail->isHTML(true);                                
        self::$mail->Subject = 'New Message From Profit Lab';
        $txt = "Name:    ".$request->name."<br>";
        $txt.= "Text:    ".$request->message."<br>";
        $txt.="Mobile:  ".$request->mobile."<br>";
        $txt.="Email:   ".$request->email;
        self::$mail->Body = $txt;
        if(!self::$mail->send()){
            $success=false;
        }
        
        return compact('success');
    }


    public static function sendAll($url){
       
    	$allEmails = Subscriber::all();
    	$emailView = view('admin.email');
        
    	foreach($allEmails as $to){
    		$data=[
                'url'=>$url
            ];
            $mailConstructor = new MailController();
            $emailView->with($data);
            
            self::$mail->setFrom('info@profitlab.ge', 'info@profitlab.ge');
            self::$mail->addAddress($to->email);
            
            self::$mail->isHTML(true);                                
            self::$mail->Subject = 'PRofit Lab-მა დაამატა ახალი სიახლე';
            self::$mail->Body    = $emailView;
            self::$mail->send();
        }
    }
}

        
