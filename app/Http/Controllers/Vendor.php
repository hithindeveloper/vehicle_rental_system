<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Vendor_model;

class Vendor extends Controller
{

    //used to check a user exists or not
    public function user_check(Request $request)
    {
      $phone = $_GET['phone'];
      if (Vendor_model::where('contact_number', '=',$phone)->count() > 0) {
        echo 'ok';
     }
     else
     {
        echo 'exists';
     }
      
    }

    //used to login user and vendor
    public function login_check(Request $request)
    {


    }


    //used to register vendor
    public function insert_vendor(Request $request)
    {   
        $validator = Validator::make(
            $request->all(),
            [
                'company_name' => 'required',
                'contact_person' => 'required',
                'phone' => 'required|digits:10',
                'email_id' => 'required|email',
                'id_proof' => 'required',
                'id_proof_number' => 'required',
                'password' => 'required',
                'rpassword' => 'required|same:password',
                'id_proof_upload' => 'required|mimes:pdf',
            ],
            [
                'company_name.required' => 'Please Fill your company name.',
                'contact_person.required' => 'Please Fill your contact person name',
                'phone.required' => 'Please enter a phone number',
                'phone.digits' => 'Please enter a valid phone number',
                'email_id.required' => 'Please enter a email id',
                'email_id.email' => 'Please enter a valid email id',
                'id_proof.required' => "please select a id proof to submit",
                'id_proof_number.required' => "please enter a id proof number",
                'id_proof_upload.required' => 'please select a id proof to upload',
                'password.required' => 'Please enter a password',
                'rpassword.required' => 'Please enter the password again',
                'rpassword.same' => 'Please enter the same password',
                'id_proof_upload.mimes' => "please select a pdf document to upload"
            ]
        );
        if ($validator->fails()) {
         
            $company_name = $request->old('company_name');
            $contact_person = $request->old('contact_person');
            $phone = $request->old('phone');
            $email_id = $request->old('email_id');
            $company_description = $request->old('company_description');
            $id_proof = $request->old('id_proof');
            $id_proof_number = $request->old('id_proof_number');
            $id_proof_upload = $request->old('id_proof_upload');
            $password = $request->old('password');
            $rpassword = $request->old('rpassword');
            return
                redirect()->back()->withErrors($validator)->withInput();
        } else {
            $data = $validator->safe();
            $image = $request->file('id_proof_upload');
            $origninal_file_name=$image;
            $ext = $image->extension();
            $file_name = time().'.'.$image->extension();
            $large_image_destination ='public/uploads/';
            $status= $image->move($large_image_destination,$file_name);
            $uploaded_file = $large_image_destination.$file_name;
            $vendor_record = array(
                'company_name'=>$data->company_name,
                'contact_person'=>$data->contact_person,
                'contact_number'=>$data->phone,
                'email_id'=>$data->email_id,
                'description'=>trim($request->input('company_description')),
                'id_proof_type'=>$data->id_proof,
                'id_proof_number'=>$data->id_proof_number,
                'id_proof_file'=>$uploaded_file,
                'password'=>md5($data->password)
            );
            $id = Vendor_model::insertGetId($vendor_record);
            if($id>1)
            {
                return redirect()->route('login', ['vendor']);
            }
        }
       
    }
}
