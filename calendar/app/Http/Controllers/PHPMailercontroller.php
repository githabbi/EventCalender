<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
    
class PHPMailercontroller extends Controller
{   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        return view('contact');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'emailSubject' => 'required',
            'emailBody' => 'required',
        ]);
        $mail = new PHPMailer(true);
        try {
            // Load PHPMailer
            require base_path("vendor/autoload.php");
            // Server settings
            $mail->SMTPDebug = 0;  // Enable verbose debug output
            $mail->isSMTP();  // Send using SMTP
            $mail->Host = env('MAIL_HOST');  // Set the SMTP server to send through
            $mail->SMTPAuth = true;  // Enable SMTP authentication
            $mail->Username = env('MAIL_USERNAME');  // SMTP username
            $mail->Password = env('MAIL_PASSWORD');  // SMTP password
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');  // Enable TLS encryption
            $mail->Port = env('MAIL_PORT');  // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
            // Sender
            $mail->setFrom(env('MAIL_FROM_ADDRESS'),env('MAIL_FROM_NAME'));
    
            // Recipient
            
    
            // Content
            $mail->isHTML(false); // Set to plain text
            $mail->Subject = $request->input('emailSubject');
            $mail->Body = $request->input('emailBody');
    
            if (!$mail->send()) {

                return back()->with("failed", "Email not sent")->withErrors($mail->ErrorInfo);
            } else {
               
                return back()->with("success", "Email has been sent");
            }
        } catch (Exception $e) {
            // Exception occurred
            $errorMessage = "Message could not be sent. Exception: " . $e->getMessage();
            \Log::error($errorMessage);
            return back()->with("error", $errorMessage);
        }
    }
}