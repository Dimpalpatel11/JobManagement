<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobApplication;
use App\JobReference;
use Validator;
use Illuminate\Support\Facades\Input;
use Session;

class JobController extends Controller
{

    public function submitJobsubmission(Request $request)
    {
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'designation' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'zip_code' => 'required',
            'address_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'ssc_board_name' => 'required',
            'ssc_passing_year' => 'required',
            'ssc_percentage' => 'required',
            'prefered_location' => 'required',
            'notice_period' => 'required',
            'ssc_board_name' => 'required',
            'expected_ctc' => 'required',
            'current_ctc' => 'required',
            'department' => 'required',
        );
        $messages = [
        ];

        $validator = Validator::make(Input::all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $submit = new JobApplication();
            $submit->first_name = $request->first_name;
            $submit->last_name = $request->last_name;
            $submit->email = $request->email;
            $submit->phone_number = $request->phone_number;
            $submit->designation = $request->designation;
            $submit->gender = $request->gender;
            $submit->zip_code = $request->zip_code;
            $submit->address_1 = $request->address_1;
            $submit->address_2 = $request->address_2;
            $submit->date_of_birth = date('y-m-d', strtotime($request->date_of_birth));
            $submit->city = $request->city;
            $submit->state = $request->state;
            $submit->relationship_status = $request->relationship_status;
            $submit->ssc_board_name = $request->ssc_board_name;
            $submit->ssc_passing_year = $request->ssc_passing_year;
            $submit->ssc_percentage = $request->ssc_percentage;
            $submit->hsc_board_name = $request->hsc_board_name;
            $submit->hsc_passing_year = $request->hsc_passing_year;
            $submit->hsc_percentage = $request->hsc_percentage;
            $submit->degree_course_name = $request->degree_course_name;
            $submit->degree_university = $request->degree_university;
            $submit->degree_passing_year = $request->degree_passing_year;
            $submit->degree_percentage = $request->degree_percentage;
            $submit->master_course_name = $request->master_course_name;
            $submit->master_university = $request->master_university;
            $submit->master_passing_year = $request->master_passing_year;
            $submit->master_percentage = $request->master_percentage;
            if(isset($request->known_hindi_languge)){
              $submit->known_hindi_languge = implode(',',$request->known_hindi_languge);
            }else{
              $submit->known_hindi_languge = "";
            }
            if(isset($request->known_english_languge)){
              $submit->known_english_languge = implode(',',$request->known_english_languge);
            }else{
              $submit->known_english_languge = "";
            }
            if(isset($request->known_gujrati_languge)){
              $submit->known_gujrati_languge = implode(',',$request->known_gujrati_languge);
            }else{
              $submit->known_gujrati_languge = "";
            }
            $submit->technology_php = $request->technology_php;
            $submit->technology_mysql = $request->technology_mysql;
            $submit->technology_laravel = $request->technology_laravel;
            $submit->technology_oracle = $request->technology_oracle;
            $submit->prefered_location = $request->prefered_location;
            $submit->notice_period = $request->notice_period;
            $submit->expected_ctc = $request->expected_ctc;
            $submit->current_ctc = $request->current_ctc;
            $submit->department = $request->department;

            if ($submit->save()) {
                  $reference = new JobReference();
                  $reference->job_application_id = $submit->job_application_id;
                  $reference->name = $request->name;
                  $reference->contact_number = $request->contact_number;
                  $reference->relation = $request->relation;
                  $reference->save();

                Session::flash('message', 'Job Submitted Succesfully !');
                Session::flash('alert-class', 'success');
                return redirect('/');

            } else {
                Session::flash('message', 'Oops !! Something went wrong!');
                Session::flash('alert-class', 'error');
                return redirect('/');
            }
        }
    }

    public function Viewjob($id)
    {
        $job = JobApplication::where('job_application_id',$id)->with('jobReference')->first();
        if ($job) {
            return view('viewjob',compact('job'));
        }
    }

    public function editjob($id)
    {
        $job = JobApplication::where('job_application_id',$id)->with('jobReference')->first();
        $known_hindi_languge = explode(",",$job->known_hindi_languge);
        $known_english_languge = explode(",",$job->known_english_languge);
        $known_gujrati_languge = explode(",",$job->known_gujrati_languge);
        if ($job) {
            return view('editJob',compact('job','known_hindi_languge','known_english_languge','known_gujrati_languge'));
        }
    }

    public function editJobsubmission(Request $request)
    {
        $rules = array(
          'first_name' => 'required',
          'last_name' => 'required',
          'designation' => 'required',
          'phone_number' => 'required',
          'email' => 'required',
          'zip_code' => 'required',
          'address_1' => 'required',
          'city' => 'required',
          'state' => 'required',
          'ssc_board_name' => 'required',
          'ssc_passing_year' => 'required',
          'ssc_percentage' => 'required',
          'prefered_location' => 'required',
          'notice_period' => 'required',
          'ssc_board_name' => 'required',
          'expected_ctc' => 'required',
          'current_ctc' => 'required',
          'department' => 'required',
        );
        $messages = [
        ];

        $validator = Validator::make(Input::all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $submit = JobApplication::find($request->job_application_id);
            $submit->first_name = $request->first_name;
            $submit->last_name = $request->last_name;
            $submit->email = $request->email;
            $submit->phone_number = $request->phone_number;
            $submit->designation = $request->designation;
            $submit->gender = $request->gender;
            $submit->zip_code = $request->zip_code;
            $submit->address_1 = $request->address_1;
            $submit->address_2 = $request->address_2;
            $submit->date_of_birth = date('Y-m-d', strtotime($request->date_of_birth));
            $submit->city = $request->city;
            $submit->state = $request->state;
            $submit->relationship_status = $request->relationship_status;
            $submit->ssc_board_name = $request->ssc_board_name;
            $submit->ssc_passing_year = $request->ssc_passing_year;
            $submit->ssc_percentage = $request->ssc_percentage;
            $submit->hsc_board_name = $request->hsc_board_name;
            $submit->hsc_passing_year = $request->hsc_passing_year;
            $submit->hsc_percentage = $request->hsc_percentage;
            $submit->degree_course_name = $request->degree_course_name;
            $submit->degree_university = $request->degree_university;
            $submit->degree_passing_year = $request->degree_passing_year;
            $submit->degree_percentage = $request->degree_percentage;
            $submit->master_course_name = $request->master_course_name;
            $submit->master_university = $request->master_university;
            $submit->master_passing_year = $request->master_passing_year;
            $submit->master_percentage = $request->master_percentage;
            if(isset($request->known_hindi_languge)){
              $submit->known_hindi_languge = implode(',',$request->known_hindi_languge);
            }else{
              $submit->known_hindi_languge = "";
            }
            if(isset($request->known_english_languge)){
              $submit->known_english_languge = implode(',',$request->known_english_languge);
            }else{
              $submit->known_english_languge = "";
            }
            if(isset($request->known_gujrati_languge)){
              $submit->known_gujrati_languge = implode(',',$request->known_gujrati_languge);
            }else{
              $submit->known_gujrati_languge = "";
            }
            $submit->technology_php = $request->technology_php;
            $submit->technology_mysql = $request->technology_mysql;
            $submit->technology_laravel = $request->technology_laravel;
            $submit->technology_oracle = $request->technology_oracle;
            $submit->prefered_location = $request->prefered_location;
            $submit->notice_period = $request->notice_period;
            $submit->expected_ctc = $request->expected_ctc;
            $submit->current_ctc = $request->current_ctc;
            $submit->department = $request->department;

            if ($submit->save()) {
                  $reference = JobReference::where('job_application_id',$submit->job_application_id)->first();
                  if(empty($reference)){
                    $reference = new JobReference();
                  }
                  $reference->job_application_id = $submit->job_application_id;
                  $reference->name = $request->name;
                  $reference->contact_number = $request->contact_number;
                  $reference->relation = $request->relation;
                  $reference->save();

                Session::flash('message', 'Job Updated Succesfully !');
                Session::flash('alert-class', 'success');
                return redirect('/home');

            } else {
                Session::flash('message', 'Oops !! Something went wrong!');
                Session::flash('alert-class', 'error');
                return redirect('/home');
            }
        }
    }

    public function deletejob($id)
    {
        $job = JobApplication::where('job_application_id',$id)->first();
        if ($job->delete()) {
            Session::flash('message', 'Job Deleted !!');
            Session::flash('alert-class', 'warning');
            return redirect('home');
        }
    }

}
