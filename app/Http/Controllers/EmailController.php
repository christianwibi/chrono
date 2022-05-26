<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

class EmailController extends Controller
{
    public function email(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'message' => 'required',
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(["error" => $validator->errors()->first()], 422);
        }
        $email_to=$request->email;
        $message=$request->message;
        $title=$request->name;
        Mail::send([], [], function ($mail) use ($email_to, $message,$title) {
            $mail->from('noreply@lakuemas.com', 'Lakuemas');
            $mail->to($email_to);
            $mail->subject($title);
            $mail->setBody($message, 'text/html');
        });
        return response()->json(
            [
                'success' => true,
                'message' => "Terima kasih atas sarannya",
            ],
            200
        );
    }
}
