<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Famous;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\Registration;

class AuthController extends Controller
{
    public function companyregisters()
    {
       return view('pageLogin.company.register');
    }
    public function companyregister(Request $request)
    {
        $validator= $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            'store_owner' => ['required', 'string', 'max:255', 'unique:companies'],
            'username' => ['required', 'string', 'max:255', 'unique:companies'],
            'store_name' => ['required', 'string', 'max:255', 'unique:companies'],
            'phone' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8'],
            ]);


            try {
                $Company=Company::create([
                    'email' => $request->email ,
                    'store_owner' =>  $request->store_owner ,
                    'username' =>  $request->username ,
                    'store_name' =>  $request->store_name ,
                    'bank_IBAN' =>  $request->bank_IBAN ,
                    'phone' =>  $request->phone ,
                    'password' =>  Hash::make($request->password),
                   ]);
                
                $Company = $Company->toArray();


            //     $data = [
            //         "store_owner" => $Company->store_owner,
            //         "username" => $Company->username,
            //         "store_name" => $Company->store_name,

            //    ];
            //    $emails = [

            //     env("MAIL_FROM"),
            //     $Company->email,
            //    ];

                // Mail::send(new Registration($data,$emails));

                // Mail::send('mail', $Company, function($message) use ($Company) {
                //     $message->to($Company['email']);
                //     $message->subject('AKO');
                // });

                alert()->success('Registration completed successfully.', 'Thanks');
                return redirect()->back();

                
            } catch (\Throwable $th) {
                 
            alert()->error('Registration has not been completed', 'Sorry');
            return redirect()->back();
            }
    }


    public function famousregisters()
    {
        $banks=Bank::all();
       return view('pageLogin.famous.register',compact('banks',$banks));
    }
    public function famousregister(Request $request)
    {
        $validator= Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required', 'string'],
            // 'instagram' => ['required', 'string'],
            // 'facebook' => ['required', 'string'],
            // 'twitter' => ['required', 'string'],
        ]);
        if (! $validator->fails()) {
            try {
                $Famous=Famous::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'bank_IBAN' => $request->bank_IBAN,
                    'bank_name' => $request->bank_name,
                    'instagram' => $request->instagram,
                    'snapchat' => $request->snapchat,
                    'youtube' => $request->youtube,
                    'twitter' => $request->twitter,
                    'password' => Hash::make($request->password),
                ]);
                  
                $Famous = $Famous->toArray();
        
                // Mail::send('mail', $Famous, function($message) use ($Famous) {
                //     $message->to($Famous['email']);
                //     $message->subject('AKO');
                // });
    
                alert()->success('Registration completed successfully.', 'Thanks');
                return redirect()->back();
            } catch (\Throwable $th) {
                return $th;
                alert()->error('Registration has not been completed', 'Sorry');
                return redirect()->back();
            }
            
           
        }else{
          
            alert()->error('Registration has not been completed', 'Sorry');
            return redirect()->back();
        }
    }
}
