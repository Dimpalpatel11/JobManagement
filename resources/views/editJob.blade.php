@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session('message'))
            <div class="alert alert-{{session('alert-class')}} text-center">
              <span>{{session('message')}}</span>
            </div>
            @endif
            <form method="POST" id="jobForm" role="form" action="{{route('editJobsubmission')}}" class="form-horizontal">

              <div class="card">
                  <div class="card-header">Edit Job Application Form</div>
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
                      @csrf
                      <input type="hidden" name="job_application_id" value="{{$job->job_application_id}}">
                      <div class="col-md-10">
                          <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                             <label  class="col-sm-4 control-label" for="first_name">Full Name <span class="colorRed"> *</span></label>
                             <div class="col-sm-4 jointbox">
                                 <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="{{$job->first_name}}"/>
                                 @if ($errors->has('first_name'))
                                 <span class="help-block alert alert-danger">
                                     <strong>{{ $errors->first('first_name') }}</strong>
                                 </span>
                                 @endif
                             </div>
                             <div class="col-sm-4 ">
                                 <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="{{$job->last_name}}"/>
                                 @if ($errors->has('last_name'))
                                 <span class="help-block alert alert-danger">
                                     <strong>{{ $errors->first('last_name') }}</strong>
                                 </span>
                                 @endif
                             </div>
                         </div>

                         <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label  class="col-sm-4 control-label" for="email">Email <span class="colorRed"> *</span></label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$job->email}}"/>
                                @if ($errors->has('email'))
                                <span class="help-block alert alert-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label  class="col-sm-4 control-label" for="phone_number">Phone Number <span class="colorRed"> *</span></label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" value="{{$job->phone_number}}"/>
                                @if ($errors->has('phone_number'))
                                <span class="help-block alert alert-danger">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('designation') ? ' has-error' : '' }}">
                           <label  class="col-sm-4 control-label" for="designation">Designation <span class="colorRed"> *</span></label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation" value="{{$job->designation}}"/>
                               @if ($errors->has('designation'))
                               <span class="help-block alert alert-danger">
                                   <strong>{{ $errors->first('designation') }}</strong>
                               </span>
                               @endif
                           </div>
                       </div>

                       <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                          <label  class="col-sm-4 control-label" for="gender">Gender <span class="colorRed"> *</span></label>
                          <div class="col-sm-8">
                            <div class="">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="male" name="gender" value="male" class="custom-control-input" @if($job->gender == 'male') checked @endif>
                                    <label class="custom-control-label" for="male">Male</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="female" name="gender" value="female" class="custom-control-input" @if($job->gender == 'female') checked @endif>
                                    <label class="custom-control-label" for="female">Female</label>
                                </div>
                            </div>
                              @if ($errors->has('gender'))
                              <span class="help-block alert alert-danger">
                                  <strong>{{ $errors->first('gender') }}</strong>
                              </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group {{ $errors->has('zip_code') ? ' has-error' : '' }}">
                          <label class="col-sm-4 control-label" for="zip_code">Zip Code <span class="colorRed"> *</span></label>
                          <div class="col-sm-8">
                              <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip Code" value="{{$job->zip_code}}"/>
                              @if ($errors->has('zip_code'))
                              <span class="help-block alert alert-danger">
                                  <strong>{{ $errors->first('zip_code') }}</strong>
                              </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group {{ $errors->has('address_1') ? ' has-error' : '' }}">
                          <label class="col-sm-4 control-label" for="address_1">Address 1 <span class="colorRed"> *</span></label>
                          <div class="col-sm-8">
                              <textarea class="form-control" id="address_1" name="address_1" placeholder="Address 1">{{$job->address_1}}</textarea>
                              @if ($errors->has('address_1'))
                              <span class="help-block alert alert-danger">
                                  <strong>{{ $errors->first('address_1') }}</strong>
                              </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group {{ $errors->has('address_2') ? ' has-error' : '' }}">
                          <label class="col-sm-4 control-label" for="address_2">Address 2 <span class="colorRed"> *</span></label>
                          <div class="col-sm-8">
                              <textarea class="form-control" id="address_2" name="address_2" placeholder="Address 2">{{$job->address_2}}</textarea>
                              @if ($errors->has('address_2'))
                              <span class="help-block alert alert-danger">
                                  <strong>{{ $errors->first('address_2') }}</strong>
                              </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                          <label for="" class="col-sm-4 control-label">Date Of Birth <span class="fa fa-calendar"></span><span class="text-danger"> *</span></label>
                          <div class="col-sm-8">
                              <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" readonly="readonly" placeholder="Date Of Birth" value="{{$job->date_of_birth}}" autocomplete="off"/>
                              @if ($errors->has('date_of_birth'))
                              <span class="help-block alert alert-danger">
                                  <strong>{{ $errors->first('date_of_birth') }}</strong>
                              </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                          <label for="" class="col-sm-4 control-label">City<span class="text-danger"> *</span></label>
                          <div class="col-sm-8">
                              <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{$job->city}}"/>
                              @if ($errors->has('city'))
                              <span class="help-block alert alert-danger">
                                  <strong>{{ $errors->first('city') }}</strong>
                              </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                          <label for="" class="col-sm-4 control-label">state<span class="text-danger"> *</span></label>
                          <div class="col-sm-8">
                            <select class="form-control" name="state" id="state">
                                <option value="Gujrat" @if($job->state == 'Gujrat') selected @endif>Gujrat</option>
                                <option value="Surat" @if($job->state == 'Surat') selected @endif>Surat</option>
                                <option value="Jamnagar" @if($job->state == 'Jamnagar') selected @endif>Jamnagar</option>
                                <option value="Rajkot" @if($job->state == 'Rajkot') selected @endif>Rajkot</option>
                            </select>
                              @if ($errors->has('state'))
                              <span class="help-block alert alert-danger">
                                  <strong>{{ $errors->first('state') }}</strong>
                              </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('relationship_status') ? ' has-error' : '' }}">
                          <label for="" class="col-sm-4 control-label">relationship_status<span class="text-danger"> *</span></label>
                          <div class="col-sm-8">
                            <select class="form-control" name="relationship_status" id="relationship_status">
                                <option value="Single" @if($job->relationship_status == 'Single') selected @endif>Single</option>
                                <option value="Married" @if($job->relationship_status == 'Married') selected @endif>Married</option>
                            </select>
                              @if ($errors->has('relationship_status'))
                              <span class="help-block alert alert-danger">
                                  <strong>{{ $errors->first('relationship_status') }}</strong>
                              </span>
                              @endif
                          </div>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="card" style="margin:10px 0px;">
                <div class="com-sm-12" style="padding:10px 15px;">
                  <h4>SSC Result</h4>
                    <div class="form-group col-sm-4 {{ $errors->has('ssc_board_name') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Name of Board<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="ssc_board_name" name="ssc_board_name" placeholder="Name of Board" value="{{$job->ssc_board_name}}"/>
                            @if ($errors->has('ssc_board_name'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('ssc_board_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-sm-4 {{ $errors->has('ssc_passing_year') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Passing Year<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="ssc_passing_year" name="ssc_passing_year" placeholder="Passing Year" value="{{$job->ssc_passing_year}}"/>
                            @if ($errors->has('ssc_passing_year'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('ssc_passing_year') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-sm-4 {{ $errors->has('ssc_percentage') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Percentage<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="ssc_percentage" name="ssc_percentage" placeholder="Percentage" value="{{$job->ssc_percentage}}"/>
                            @if ($errors->has('ssc_percentage'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('ssc_percentage') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="com-sm-12" style="padding:10px 15px;">
                  <h4>HSC Result</h4>
                    <div class="form-group col-sm-4 {{ $errors->has('hsc_board_name') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Name of Board<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="hsc_board_name" name="hsc_board_name" placeholder="Name of Board" value="{{$job->hsc_board_name}}"/>
                            @if ($errors->has('hsc_board_name'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('hsc_board_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-sm-4 {{ $errors->has('hsc_passing_year') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Passing Year<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="hsc_passing_year" name="hsc_passing_year" placeholder="Passing Year" value="{{$job->hsc_passing_year}}"/>
                            @if ($errors->has('hsc_passing_year'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('hsc_passing_year') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-sm-4 {{ $errors->has('hsc_percentage') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Percentage<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="hsc_percentage" name="hsc_percentage" placeholder="Percentage" value="{{$job->hsc_percentage}}"/>
                            @if ($errors->has('hsc_percentage'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('hsc_percentage') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="com-sm-12" style="padding:10px 15px;">
                  <h4>Bachlor Degree</h4>
                    <div class="form-group col-sm-3 {{ $errors->has('degree_course_name') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Course Name<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="degree_course_name" name="degree_course_name" placeholder="Course Name" value="{{$job->degree_course_name}}"/>
                            @if ($errors->has('degree_course_name'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('degree_course_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-sm-3 {{ $errors->has('degree_university') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">University<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="degree_university" name="degree_university" placeholder="University" value="{{$job->degree_university}}"/>
                            @if ($errors->has('degree_university'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('degree_university') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-sm-3 {{ $errors->has('degree_passing_year') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Passing Year<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="degree_passing_year" name="degree_passing_year" placeholder="Passing Year" value="{{$job->degree_passing_year}}"/>
                            @if ($errors->has('degree_passing_year'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('degree_passing_year') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-sm-3 {{ $errors->has('degree_percentage') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Percentage<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="hsc_percentage" name="degree_percentage" placeholder="Percentage" value="{{$job->degree_percentage}}"/>
                            @if ($errors->has('degree_percentage'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('degree_percentage') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="com-sm-12" style="padding:10px 15px;">
                  <h4>Master Degree</h4>
                    <div class="form-group col-sm-3 {{ $errors->has('master_course_name') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Course Name<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="master_course_name" name="master_course_name" placeholder="Course Name" value="{{$job->master_course_name}}"/>
                            @if ($errors->has('master_course_name'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('master_course_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-sm-3 {{ $errors->has('master_university') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">University<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="master_university" name="master_university" placeholder="University" value="{{$job->master_university}}"/>
                            @if ($errors->has('master_university'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('master_university') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-sm-3 {{ $errors->has('master_passing_year') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Passing Year<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="master_passing_year" name="master_passing_year" placeholder="Passing Year" value="{{$job->master_passing_year}}"/>
                            @if ($errors->has('master_passing_year'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('master_passing_year') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-sm-3 {{ $errors->has('master_percentage') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Percentage<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="master_percentage" name="master_percentage" placeholder="Percentage" value="{{$job->master_percentage}}"/>
                            @if ($errors->has('master_percentage'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('master_percentage') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
              </div>

              <div class="card" style="margin:10px 0px;">
                <div class="com-sm-12" style="padding:10px 15px;">
                  <h4>Language Known</h4>
                    <div class="form-group col-sm-12 {{ $errors->has('known_hindi_languge') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Hindi<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                            <label class="checkbox-inline">
                            <input type="checkbox" value="Read" name="known_hindi_languge[]" @if(in_array("Read",$known_hindi_languge)) checked @endif>Read
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" value="Write" name="known_hindi_languge[]" @if(in_array("Write",$known_hindi_languge)) checked @endif>Write
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" value="Speak" name="known_hindi_languge[]" @if(in_array("Speak",$known_hindi_languge)) checked @endif>Speak
                            </label>
                            @if ($errors->has('known_hindi_languge'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('known_hindi_languge') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('known_english_languge') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">English<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                            <label class="checkbox-inline">
                            <input type="checkbox" value="Read" name="known_english_languge[]" @if(in_array("Read",$known_english_languge)) checked @endif>Read
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" value="Write" name="known_english_languge[]" @if(in_array("Write",$known_english_languge)) checked @endif>Write
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" value="Speak" name="known_english_languge[]" @if(in_array("Speak",$known_english_languge)) checked @endif>Speak
                            </label>
                            @if ($errors->has('known_english_languge'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('known_english_languge') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('known_gujrati_languge') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Gujrati<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                            <label class="checkbox-inline">
                            <input type="checkbox" value="Read" name="known_gujrati_languge[]" @if(in_array("Read",$known_gujrati_languge)) checked @endif>Read
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" value="Write" name="known_gujrati_languge[]" @if(in_array("Write",$known_gujrati_languge)) checked @endif>Write
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" value="Speak" name="known_gujrati_languge[]" @if(in_array("Speak",$known_gujrati_languge)) checked @endif>Speak
                            </label>
                            @if ($errors->has('known_gujrati_languge'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('known_gujrati_languge') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
              </div>

              <div class="card" style="margin:10px 0px;">
                <div class="com-sm-12" style="padding:10px 15px;">
                  <h4>Technology you know</h4>
                    <div class="form-group col-sm-12 {{ $errors->has('technology_php') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">PHP<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <div class="">
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="Beginner3" name="technology_php" value="Beginner" @if($job->technology_php == 'Beginner') checked @endif>
                                  <label class="custom-control-label" for="Beginner">Beginner</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="Mediator3" name="technology_php" value="Mediator" @if($job->technology_php == 'Mediator') checked @endif>
                                  <label class="custom-control-label" for="Mediator">Mediator</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="Expert3" name="technology_php" value="Expert" @if($job->technology_php == 'Expert') checked @endif>
                                  <label class="custom-control-label" for="Expert">Expert</label>
                              </div>
                          </div>
                            @if ($errors->has('technology_php'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('technology_php') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('technology_mysql') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Mysql<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <div class="">
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="Beginner2" name="technology_mysql" value="Beginner" @if($job->technology_mysql == 'Beginner') checked @endif>
                                  <label class="custom-control-label" for="Beginner">Beginner</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio"  id="Mediator2" name="technology_mysql" value="Mediator" @if($job->technology_mysql == 'Mediator') checked @endif>
                                  <label class="custom-control-label" for="Mediator">Mediator</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio"  id="Expert2" name="technology_mysql" value="Expert" @if($job->technology_mysql == 'Expert') checked @endif>
                                  <label class="custom-control-label" for="Expert">Expert</label>
                              </div>
                          </div>
                            @if ($errors->has('technology_mysql'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('technology_mysql') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('technology_laravel') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Laravel<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <div class="">
                            <fieldset id="technology_laravel">
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="Beginner1" name="technology_laravel" value="Beginner" @if($job->technology_laravel == 'Beginner') checked @endif >
                                  <label class="custom-control-label" for="Beginner">Beginner</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="Mediator1" name="technology_laravel" value="Mediator" @if($job->technology_laravel == 'Mediator') checked @endif>
                                  <label class="custom-control-label" for="Mediator">Mediator</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="Expert1" name="technology_laravel" value="Expert" @if($job->technology_laravel == 'Expert') checked @endif>
                                  <label class="custom-control-label" for="Expert">Expert</label>
                              </div>
                              </fieldset>
                          </div>
                            @if ($errors->has('technology_laravel'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('technology_laravel') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('technology_oracle') ? ' has-error' : '' }}">
                        <label for="" class="col-sm-4 control-label">Oracle<span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                          <div class="" >
                            <fieldset id="technology_oracle">
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="Beginner" name="technology_oracle" value="Beginner" @if($job->technology_oracle == 'Beginner') checked @endif>
                                  <label class="custom-control-label" for="Beginner">Beginner</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="Mediator" name="technology_oracle" value="Mediator" @if($job->technology_oracle == 'Mediator') checked @endif>
                                  <label class="custom-control-label" for="Mediator">Mediator</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="Expert" name="technology_oracle" value="Expert" @if($job->technology_oracle == 'Expert') checked @endif>
                                  <label class="custom-control-label" for="Expert">Expert</label>
                              </div>
                            </fieldset>
                          </div>
                            @if ($errors->has('technology_oracle'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('technology_oracle') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
              </div>

              <div class="card" style="margin:10px 0px;">
                <div class="com-sm-12" style="padding:10px 15px;">
                  <h4>Reference Contact</h4>

                  <div class="form-group col-sm-4 {{ $errors->has('name') ? ' has-error' : '' }}">
                      <label for="" class="col-sm-4 control-label">Name<span class="text-danger"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="@if(isset($job['jobReference']->name)) {{$job['jobReference']->name}} @else @endif"/>
                          @if ($errors->has('name'))
                          <span class="help-block alert alert-danger">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group col-sm-4 {{ $errors->has('contact_number') ? ' has-error' : '' }}">
                      <label for="" class="col-sm-4 control-label">Contact number<span class="text-danger"> *</span></label>
                      <div class="col-sm-8">
                        <input type="number" class="form-control" id="contact_number" name="contact_number" placeholder="Name" value="@if(isset($job['jobReference']->contact_number)){{$job['jobReference']->contact_number}}@else @endif"/>
                          @if ($errors->has('contact_number'))
                          <span class="help-block alert alert-danger">
                              <strong>{{ $errors->first('contact_number') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group col-sm-4 {{ $errors->has('relation') ? ' has-error' : '' }}">
                      <label for="" class="col-sm-4 control-label">Relation<span class="text-danger"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="relation" name="relation" placeholder="Name" value="@if(isset($job['jobReference']->relation)) {{$job['jobReference']->relation}} @else @endif"/>
                          @if ($errors->has('relation'))
                          <span class="help-block alert alert-danger">
                              <strong>{{ $errors->first('relation') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>
                </div>

              </div>

              <div class="card" style="margin:10px 0px;">
                <div class="com-sm-12" style="padding:10px 15px;">
                  <h4>Preferences</h4>

                  <div class="form-group col-sm-4 {{ $errors->has('prefered_location') ? ' has-error' : '' }}">
                      <label for="" class="col-sm-4 control-label">Prefered Location<span class="text-danger"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="prefered_location" name="prefered_location" placeholder="Prefered Location" value="{{$job->prefered_location}}"/>
                          @if ($errors->has('prefered_location'))
                          <span class="help-block alert alert-danger">
                              <strong>{{ $errors->first('prefered_location') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group col-sm-4 {{ $errors->has('notice_period') ? ' has-error' : '' }}">
                      <label for="" class="col-sm-4 control-label">Notice Period<span class="text-danger"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="notice_period" name="notice_period" placeholder="Notice Period" value="{{$job->notice_period}}"/>
                          @if ($errors->has('notice_period'))
                          <span class="help-block alert alert-danger">
                              <strong>{{ $errors->first('notice_period') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group col-sm-4 {{ $errors->has('expected_ctc') ? ' has-error' : '' }}">
                      <label for="" class="col-sm-4 control-label">Expected CTC<span class="text-danger"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="expected_ctc" name="expected_ctc" placeholder="Expected CTC" value="{{$job->expected_ctc}}"/>
                          @if ($errors->has('expected_ctc'))
                          <span class="help-block alert alert-danger">
                              <strong>{{ $errors->first('expected_ctc') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group col-sm-4 {{ $errors->has('current_ctc') ? ' has-error' : '' }}">
                      <label for="" class="col-sm-4 control-label">Current CTC<span class="text-danger"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="current_ctc" name="current_ctc" placeholder="Current CTC" value="{{$job->current_ctc}}"/>
                          @if ($errors->has('current_ctc'))
                          <span class="help-block alert alert-danger">
                              <strong>{{ $errors->first('current_ctc') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group col-sm-4 {{ $errors->has('department') ? ' has-error' : '' }}">
                      <label for="" class="col-sm-4 control-label">Department<span class="text-danger"> *</span></label>
                      <div class="col-sm-8">
                        <select class="form-control" name="department" id="department">
                            <option value="Software" @if($job->department =='Software') selected @endif>Software</option>
                            <option value="Networking" @if($job->department =='Networking') selected @endif>Networking</option>
                            <option value="Digital Marketing" @if($job->department =='Digital Marketing') selected @endif>Digital Marketing</option>
                            <option value="UI/Ux" @if($job->department =='UI/Ux') selected @endif>UI/Ux</option>
                        </select>
                          @if ($errors->has('department'))
                          <span class="help-block alert alert-danger">
                              <strong>{{ $errors->first('department') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>
                </div>
              </div>
              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" id="update" class="btn btn-primary">Update</button>
                  </div>
              </div>
              </form>
        </div>
    </div>
</div>
@endsection
@section('script')
@if(Session::has('message'))
    <script>
        $(function() {
        toastr.{{ Session::get('alert-class') }}('{{ Session::get('message') }}');
        });
    </script>
@endif
<script src="{{ asset('resources/assets/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script>
$(document).ajaxStart(function() { Pace.restart(); });

var SITE_URL = "<?php echo URL::to('/'); ?>";
$(document.body).on('click', "#update", function(){
        if ($("#jobForm").length){
            $("#jobForm").validate({
            errorElement: 'span',
                    errorClass: 'text-red',
                    ignore: [],
                    rules: {
                      "first_name":{
                          required:true,
                      },
                      "last_name":{
                          required:true,
                      },
                      "designation":{
                          required:true,
                      },
                      "phone_number":{
                          required:true,
                          number:true,
                      },
                      "email":{
                        required:true,
                        email:true,
                      },
                      "address_1":{
                        required:true,
                      },
                      "city":{
                        required:true,
                      },
                      "state":{
                        required:true,
                      },
                      "ssc_board_name":{
                        required:true,
                      },
                      "ssc_passing_year":{
                        required:true,
                      },
                      "ssc_percentage":{
                        required:true,
                      },
                      "prefered_location":{
                        required:true,
                      },
                      "notice_period":{
                        required:true,
                      },
                      "expected_ctc":{
                        required:true,
                      },
                      "current_ctc":{
                        required:true,
                      },
                      "department":{
                        required:true,
                      },
                  },
                  messages: {
                       "email":{
                            required:"Please enter email.",
                            remote:"Provided email already used by some one.",
                        },
                        "first_name":{
                          required:"Please enter first name.",
                        },
                        "last_name":{
                          required:"Please enter Last name.",
                        },
                        "designation":{
                          required:"Please enter Designation.",
                        },
                        "phone_number":{
                          required:"Please enter Phone number",
                        },
                        "address_1":{
                          required:"Please enter Address.",
                        },
                        "city":{
                          required:"Please enter City.",
                        },
                        "state":{
                          required:"Please enter State.",
                        },
                        "ssc_board_name":{
                          required:"Please enter SSC Board Name.",
                        },
                        "ssc_passing_year":{
                          required:"Please enter SSC Passing Year.",
                        },
                        "ssc_percentage":{
                          required:"Please enter SSC Percentage.",
                        },
                        "prefered_location":{
                          required:"Please enter Prefered Location.",
                        },
                        "notice_period":{
                          required:"Please enter Notice Period.",
                        },
                        "expected_ctc":{
                          required:"Please enter Expected CTC.",
                        },
                        "current_ctc":{
                          required:"Please enter Current CTC.",
                        },
                        "department":{
                          required:"Please enter Department.",
                        },
                    },
                    errorPlacement: function(error, element) {
                        if(element.is('select')){
                            error.appendTo(element.closest("div"));
                        }else{
                            error.insertAfter(element.closest(".form-control"));
                        }
                    },
            });
        }
    });

  var today = new Date();
  $('#date_of_birth').datepicker({
  format: 'yyyy-mm-dd',
  todayHighlight: true,
  autoclose: true
});
</script>
@endsection
