<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Use Validator Class
use Illuminate\Support\Facades\Validator;
//Use Mail Class
use Illuminate\Support\Facades\Mail;
//Use Model SendMail
use App\Mail\SendMail;
//Use Exception Class
use Exception;

class ApiSendMailController extends Controller
{
    //
    //Create send_feedback function
	function send_feedback(Request $request) {

		//Create response variable for response message
		$response = array();

		$response['message'] = "";

		//Check validate request
		$validateData = Validator::make($request->all(), [
			'name'		=> 'bail|required', 
			'email'		=> 'bail|required|email', 
			'phone'	    => 'bail|required|numeric',
			'subject'	=> 'bail|required',
			'message'	=> 'bail|required',
			'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
		]);

		//Get all error in validate request
		$errors = $validateData->errors();

		//if the number of errors isn't more than zero
		if (!(count($errors->all()) > 0 )) {

			//Enter data request to variable array data
			$gcaptcha = 'g-recaptcha-response';
			$data = array(
				'name' 		=> $request->name, 
				'email'		=> $request->email, 
				'phone'		=> $request->phone, 
				'subject'	=> $request->subject, 
				'message'	=> $request->message,
				'g-recaptcha-response'=> $request->$gcaptcha,
				//Send Request is send_feedback
				'request'	=> 'send_feedback'
			);

			// dd($data);

			//Try to send Email
			try {
				//Send Email with model of email SendEmail and with variable data
				//Change * to Your Email
				Mail::to(env('APP_EMAIL'))->send(new SendMail($data));

				//Check if sending email failure
				if (!Mail::failures()) {
					//Give response message success if success to send email
					$response['message'] = "success";
				} else {
					//Give response message failed if failed to send email
					$response['message'] = "failed";
				}

			} catch (Exception $e) {
				//Give response message error if failed to send email
				$response['message'] = $e->getMessage();
			}

		} else {

			//Give response message error if the number of errors more than zero
			foreach ($errors->all() as $e) {
				$response['message'] .= $e . ', ';
			}

			$response['message'] .= "All Input Cannot Be Empty!";
		}

		//encode json variable response
		echo json_encode($response);

    	}
}
