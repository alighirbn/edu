<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Basic\Employee\Employee;
use Illuminate\Http\Request;


class GuestController extends Controller
{

    public function employeelogin(Request $request){
        $loginData = $request->validate([
            'job_number'=>'required|string',
            'employee_password'=>'required|min:8'
        ]);
        $employee = Employee::with([

            'get_job_title',
            'get_contract_type',
            'get_academic_achievement',
            'get_assignment_type',
            'get_facility.get_main_section_id',
            'get_marital_status',
            'get_children_count',
            'get_last_payroll',


        ])->where('job_number', $loginData['job_number'])->where('employee_password', $loginData['employee_password'])->first();
        if(!$employee ){
            return response()->json([
                'success' => false ,
                'message' => 'المعلومات المدخلة غير صحيحة يرجى التأكد من الرقم الوظيفي وكلمة السر',
                
            ],401);
        }
        
        return response()->json([
            'success' => true,
            'employee' => $employee,
            
        ]);
    }

    public function employeepassword(Request $request){
        $loginData = $request->validate([
            'job_number'=>'required|string',
            'employee_password'=>'required|min:8',
            '_password'=>'required|min:8',
        ]);
        $employee = Employee::where('job_number', $loginData['job_number'])->where('employee_password', $loginData['employee_password'])->first();
        if(!$employee ){
            return response()->json([
                'success' => false ,
                'message' => 'المعلومات المدخلة غير صحيحة',
                
            ],401);
        }else{
            $employee->update(['employee_password' => $loginData['_password']]);
            return response()->json([
                'success' => true,
                'message' => 'تم تغيير كلمة السر بنجاح',
                
            ]);
        }
        
        
    }

    public function employeeupdate(Request $request){
        $loginData = $request->validate([
            'job_number'=>'required',
            'employee_password'=>'required|min:8',
            'mother_name'=>'required|string',
            'mother_father_name'=>'required|string',
            'mother_grandfather_name'=>'required|string',
            'mother_surname'=>'required|string',
            'date_of_birth'=>'required',
            'place_of_birth'=>'required|string',
            'first_husband_name'=>'required|string',
            'husband_father_name'=>'required|string',
            'husband_grandfather_name'=>'required|string',
            'husband_surname'=>'required|string',
            'employee_phone_number'=>'required',
            'employee_email'=>'required|string',

            //job info
            'appointment_ministerial_order_number'=> 'required',
            'appointment_ministerial_order_date'=> 'required',
            'appointment_administrative_order_number'=> 'required',
            'appointment_administrative_order_date'=> 'required',
            'appointment_first_initiation_number'=> 'required',
            'appointment_first_initiation_date'=> 'required',
            // acadimic info
            'last_year_of_graduation'=>'required',
            'last_name_of_the_university'=>'required',
            'last_name_of_the_college'=>'required',
            'last_major'=>'required',
            'last_certificate_of_appointment_mark'=>'required',

            // national card info
            'national_card_number'=>'required',
            'national_card_date_of_issue'=>'required',
            'national_card_issuing_authority'=>'required',
            'national_card_family_number' =>'required',

            // housing card info
            'housing_card_number'=>'required',
            'housing_card_date_of_issue'=>'required',
            'housing_card_issuing_authority'=>'required',
            'housing_card_residence_address'=>'required',
            'housing_card_governorate'=>'required',
            'housing_card_district'=>'required',
            'housing_card_neighborhood'=>'required',
            'housing_card_house_number'=>'required',
            'housing_card_nearest_point_of_reference'=>'required',
            'housing_card_mukhtar_name'=>'required',
            
        ]);
        
            $employee_edit = Employee::where('job_number', $loginData['job_number'])->where('employee_password', $loginData['employee_password'])->first();
            if(!$employee_edit ){
                return response()->json([
                    'success' => false ,
                    'message' => 'المعلومات المدخلة غير صحيحة',
                    
                ],401);
            }else{
                $employee_edit->update([
                    // basic info
                    'mother_name'=> $loginData['mother_name'],
                    'mother_father_name'=> $loginData['mother_father_name'],
                    'mother_grandfather_name'=> $loginData['mother_grandfather_name'],
                    'mother_surname'=> $loginData['mother_surname'],
                    'date_of_birth'=> $loginData['date_of_birth'],
                    'place_of_birth'=> $loginData['place_of_birth'],
                    'first_husband_name'=> $loginData['first_husband_name'],
                    'husband_father_name'=> $loginData['husband_father_name'],
                    'husband_grandfather_name'=> $loginData['husband_grandfather_name'],
                    'husband_surname'=> $loginData['husband_surname'],
                    'employee_phone_number'=> $loginData['employee_phone_number'],
                    'employee_email'=> $loginData['employee_email'],
                    
                     //job info
                    'appointment_ministerial_order_number'=> $loginData['appointment_ministerial_order_number'],
                    'appointment_ministerial_order_date'=> $loginData['appointment_ministerial_order_date'],
                    'appointment_administrative_order_number'=> $loginData['appointment_administrative_order_number'],
                    'appointment_administrative_order_date'=> $loginData['appointment_administrative_order_date'],
                    'appointment_first_initiation_number'=> $loginData['appointment_first_initiation_number'],
                    'appointment_first_initiation_date'=> $loginData['appointment_first_initiation_date'],
                    // acadimic info
                    'last_year_of_graduation' => $loginData['last_year_of_graduation'],
                    'last_name_of_the_university'=> $loginData['last_name_of_the_university'],
                    'last_name_of_the_college'=> $loginData['last_name_of_the_college'],
                    'last_major'=> $loginData['last_major'],
                    'last_certificate_of_appointment_mark'=> $loginData['last_certificate_of_appointment_mark'],

                     // national card info
                    'national_card_number'=> $loginData['national_card_number'],
                    'national_card_date_of_issue'=> $loginData['national_card_date_of_issue'],
                    'national_card_issuing_authority'=> $loginData['national_card_issuing_authority'],
                    'national_card_family_number'=> $loginData['national_card_family_number'],

                     // housing card info
                    'housing_card_number'=> $loginData['housing_card_number'],
                    'housing_card_date_of_issue'=> $loginData['housing_card_date_of_issue'],
                    'housing_card_issuing_authority'=> $loginData['housing_card_issuing_authority'],
                    'housing_card_residence_address'=> $loginData['housing_card_residence_address'],
                    'housing_card_governorate'=> $loginData['housing_card_governorate'],
                    'housing_card_district'=> $loginData['housing_card_district'],
                    'housing_card_neighborhood'=> $loginData['housing_card_neighborhood'],
                    'housing_card_house_number'=> $loginData['housing_card_house_number'],
                    'housing_card_nearest_point_of_reference'=> $loginData['housing_card_nearest_point_of_reference'],
                    'housing_card_mukhtar_name'=> $loginData['housing_card_mukhtar_name'],
                    
                    ]);
                $employee = Employee::with([
    
                'get_job_title',
                'get_contract_type',
                'get_academic_achievement',
                'get_assignment_type',
                'get_facility.get_main_section_id',
                'get_marital_status',
                'get_children_count',
                'get_last_payroll',
                 ])->where('job_number', $loginData['job_number'])->where('employee_password', $loginData['employee_password'])->first();
               
                 return response()->json([
                    'success' => true,
                    'message' => 'تم تحديث البيانات بنجاح',
                    'employee' => $employee,
                ]);
            }
        
    }


}

