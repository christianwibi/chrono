<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

class EmailController extends Controller
{
    public function contactme(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'message' => 'required',
            'name' => 'required',
        ]);
        info($request);

        if ($validator->fails()) {
            return response()->json(["error" => $validator->errors()->first()], 422);
        }
        $email_from=$request->email;
        $message=$request->message;
        $title=$request->name;
        Mail::send([], [], function ($mail) use ($email_from, $message,$title) {
            $mail->from($email_from);
            $mail->to('info@sarimukti.my.id', 'Sarimukti');
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
