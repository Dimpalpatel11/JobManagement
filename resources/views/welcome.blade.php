<!DOCTYPE html>
<html lang="en">
<head>
<!-- Title Page-->
<title>Job</title>
<!-- Required meta tags-->
<meta charset="UTF-8">
<meta name="description" content=""/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('resources/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('resources/assets/datepicker/datepicker3.css') }}" rel="stylesheet">
<style>
  .text-red{color:red;}
  .custom-control-label:after, .custom-control-label:before{content:none;}
</style>
</head>
<body>
<div class="container">
    <div class="col-md-12">
      <center><h3>Job Application Form</h3></center>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
          <form method="POST" id="jobForm" role="form" action="{{route('submitJobsubmission')}}" class="form-horizontal">

            <div class="card">
                <div class="card-header">Job Application Form</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @csrf
                    <div class="col-md-10">
                        <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                           <label  class="col-sm-4 control-label" for="first_name">Full Name <span class="colorRed"> *</span></label>
                           <div class="col-sm-4 jointbox">
                               <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="{{old('first_name')}}"/>
                               @if ($errors->has('first_name'))
                               <span class="help-block alert alert-danger">
                                   <strong>{{ $errors->first('first_name') }}</strong>
                               </span>
                               @endif
                           </div>
                           <div class="col-sm-4 ">
                               <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="{{old('last_name')}}"/>
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
                              <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{old('email')}}"/>
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
                              <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" value="{{old('phone_number')}}"/>
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
                             <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation" value="{{old('designation')}}"/>
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
                                  <input type="radio" id="male" name="gender" value="male" class="custom-control-input" checked>
                                  <label class="custom-control-label" for="male">Male</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="female" name="gender" value="female" class="custom-control-input">
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
                            <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip Code" value="{{old('zip_code')}}"/>
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
                            <textarea class="form-control" id="address_1" name="address_1" placeholder="Address 1" value="{{old('address_1')}}"></textarea>
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
                            <textarea class="form-control" id="address_2" name="address_2" placeholder="Address 2" value="{{old('address_2')}}"></textarea>
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
                            <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" readonly="readonly" placeholder="Date Of Birth" value="{{old('date_of_birth')}}" autocomplete="off"/>
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
                            <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{old('city')}}"/>
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
                              <option value="Gujrat">Gujrat</option>
                              <option value="Surat">Surat</option>
                              <option value="Jamnagar">Jamnagar</option>
                              <option value="Rajkot">Rajkot</option>
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
                              <option value="Single">Single</option>
                              <option value="Married">Married</option>
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
                        <input type="text" class="form-control" id="ssc_board_name" name="ssc_board_name" placeholder="Name of Board" value="{{old('ssc_board_name')}}"/>
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
                        <input type="number" class="form-control" id="ssc_passing_year" name="ssc_passing_year" placeholder="Passing Year" value="{{old('ssc_passing_year')}}"/>
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
                        <input type="number" class="form-control" id="ssc_percentage" name="ssc_percentage" placeholder="Percentage" value="{{old('ssc_percentage')}}"/>
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
                        <input type="text" class="form-control" id="hsc_board_name" name="hsc_board_name" placeholder="Name of Board" value="{{old('hsc_board_name')}}"/>
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
                        <input type="number" class="form-control" id="hsc_passing_year" name="hsc_passing_year" placeholder="Passing Year" value="{{old('hsc_passing_year')}}"/>
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
                        <input type="number" class="form-control" id="hsc_percentage" name="hsc_percentage" placeholder="Percentage" value="{{old('hsc_percentage')}}"/>
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
                        <input type="text" class="form-control" id="degree_course_name" name="degree_course_name" placeholder="Course Name" value="{{old('degree_course_name')}}"/>
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
                        <input type="text" class="form-control" id="degree_university" name="degree_university" placeholder="University" value="{{old('degree_university')}}"/>
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
                        <input type="number" class="form-control" id="degree_passing_year" name="degree_passing_year" placeholder="Passing Year" value="{{old('degree_passing_year')}}"/>
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
                        <input type="number" class="form-control" id="hsc_percentage" name="degree_percentage" placeholder="Percentage" value="{{old('degree_percentage')}}"/>
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
                        <input type="text" class="form-control" id="master_course_name" name="master_course_name" placeholder="Course Name" value="{{old('master_course_name')}}"/>
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
                        <input type="text" class="form-control" id="master_university" name="master_university" placeholder="University" value="{{old('master_university')}}"/>
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
                        <input type="number" class="form-control" id="master_passing_year" name="master_passing_year" placeholder="Passing Year" value="{{old('master_passing_year')}}"/>
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
                        <input type="number" class="form-control" id="master_percentage" name="master_percentage" placeholder="Percentage" value="{{old('master_percentage')}}"/>
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
                    <div class="col-sm-4">

                      <label class="checkbox-inline">
                      <input type="checkbox" id="hindicheckbox" value="" name="" >Hindi
                      </label>
                    </div>
                      <div class="col-sm-8">
                          <label class="checkbox-inline">
                          <input type="checkbox" id="hindiread" value="Read" name="known_hindi_languge[]" disabled>Read
                          </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="hindiwrite" value="Write" name="known_hindi_languge[]" disabled>Write
                          </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="hindispeak" value="Speak" name="known_hindi_languge[]" disabled>Speak
                          </label>
                          @if ($errors->has('known_hindi_languge'))
                          <span class="help-block alert alert-danger">
                              <strong>{{ $errors->first('known_hindi_languge') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group col-sm-12 {{ $errors->has('known_english_languge') ? ' has-error' : '' }}">
                    <div class="col-sm-4">
                      <label class="checkbox-inline">
                      <input type="checkbox" id="englishcheckbox" value="" name="">English
                      </label>
                    </div>
                      <div class="col-sm-8">
                          <label class="checkbox-inline">
                          <input type="checkbox" id="englishread" value="Read" name="known_english_languge[]" disabled>Read
                          </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="englishwrite" value="Write" name="known_english_languge[]" disabled>Write
                          </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="englishspeak" value="Speak" name="known_english_languge[]" disabled>Speak
                          </label>
                          @if ($errors->has('known_english_languge'))
                          <span class="help-block alert alert-danger">
                              <strong>{{ $errors->first('known_english_languge') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group col-sm-12 {{ $errors->has('known_gujrati_languge') ? ' has-error' : '' }}">
                    <div class="col-sm-4">
                      <label class="checkbox-inline">
                      <input type="checkbox" id="gujraticheckbox" value="" name="">Gujrati
                      </label>
                    </div>
                      <div class="col-sm-8">
                          <label class="checkbox-inline">
                          <input type="checkbox" id="gujratiread" value="Read" name="known_gujrati_languge[]" disabled>Read
                          </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="gujratiwrite" value="Write" name="known_gujrati_languge[]" disabled>Write
                          </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="gujratispeak" value="Speak" name="known_gujrati_languge[]" disabled>Speak
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
                    <div class="col-sm-4">
                      <label class="checkbox-inline">
                      <input type="checkbox" id="phpcheckbox" value="" name="">PHP
                      </label>
                    </div>
                      <div class="col-sm-8">
                        <div class="">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Beginner3" name="technology_php" value="Beginner" disabled>
                                <label class="custom-control-label" for="Beginner">Beginner</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Mediator3" name="technology_php" value="Mediator" disabled>
                                <label class="custom-control-label" for="Mediator">Mediator</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Expert3" name="technology_php" value="Expert" disabled>
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
                    <div class="col-sm-4">
                      <label class="checkbox-inline">
                      <input type="checkbox" id="mysqlcheckbox" value="" name="">MYSQL
                      </label>
                    </div>
                      <div class="col-sm-8">
                        <div class="">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Beginner2" name="technology_mysql" value="Beginner" disabled>
                                <label class="custom-control-label" for="Beginner">Beginner</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio"  id="Mediator2" name="technology_mysql" value="Mediator" disabled>
                                <label class="custom-control-label" for="Mediator">Mediator</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio"  id="Expert2" name="technology_mysql" value="Expert" disabled>
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
                    <div class="col-sm-4">
                      <label class="checkbox-inline">
                      <input type="checkbox" id="laravelcheckbox" value="" name="">Laravel
                      </label>
                    </div>
                      <div class="col-sm-8">
                        <div class="">
                          <fieldset id="technology_laravel">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Beginner1" name="technology_laravel" value="Beginner" disabled>
                                <label class="custom-control-label" for="Beginner">Beginner</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Mediator1" name="technology_laravel" value="Mediator" disabled>
                                <label class="custom-control-label" for="Mediator">Mediator</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Expert1" name="technology_laravel" value="Expert" disabled>
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
                    <div class="col-sm-4">
                      <label class="checkbox-inline">
                      <input type="checkbox" id="oraclecheckbox" value="" name="">Oracle
                      </label>
                    </div>
                      <div class="col-sm-8">
                        <div class="" >
                          <fieldset id="technology_oracle">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Beginner" name="technology_oracle" value="Beginner" disabled>
                                <label class="custom-control-label" for="Beginner">Beginner</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Mediator" name="technology_oracle" value="Mediator" disabled>
                                <label class="custom-control-label" for="Mediator">Mediator</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Expert" name="technology_oracle" value="Expert" disabled>
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
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{old('name')}}"/>
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
                      <input type="number" class="form-control" id="contact_number" name="contact_number" placeholder="Name" value="{{old('contact_number')}}"/>
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
                      <input type="text" class="form-control" id="relation" name="relation" placeholder="Name" value="{{old('relation')}}"/>
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
                      <input type="text" class="form-control" id="prefered_location" name="prefered_location" placeholder="Prefered Location" value="{{old('prefered_location')}}"/>
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
                      <input type="text" class="form-control" id="notice_period" name="notice_period" placeholder="Notice Period" value="{{old('notice_period')}}"/>
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
                      <input type="text" class="form-control" id="expected_ctc" name="expected_ctc" placeholder="Expected CTC" value="{{old('expected_ctc')}}"/>
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
                      <input type="text" class="form-control" id="current_ctc" name="current_ctc" placeholder="Current CTC" value="{{old('current_ctc')}}"/>
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
                          <option value="Software">Software</option>
                          <option value="Networking">Networking</option>
                          <option value="Digital Marketing">Digital Marketing</option>
                          <option value="UI/Ux">UI/Ux</option>
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
                    <button type="submit" id="createBtn" class="btn btn-primary" style="margin-bottom:10px;">Register</button>
                </div>
            </div>

            </form>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('resources/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('resources/assets/jQuery-validation-plugin/jquery.validate.js') }}" type="text/javascript"></script>
<script src="{{ asset('resources/assets/jQuery-validation-plugin/additional-methods.js') }}" type="text/javascript"></script>
<script src="{{ asset('resources/assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('resources/assets/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script>
$(document).ajaxStart(function() { Pace.restart(); });

var SITE_URL = "<?php echo URL::to('/'); ?>";
$(document.body).on('click', "#createBtn", function(){
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
    var hindicheckbox = $("#hindicheckbox");
    var englishcheckbox = $("#englishcheckbox");
    var gujraticheckbox = $("#gujraticheckbox");
    var phpcheckbox = $("#phpcheckbox");
    var mysqlcheckbox = $("#mysqlcheckbox");
    var laravelcheckbox = $("#laravelcheckbox");
    var oraclecheckbox = $("#oraclecheckbox");

    hindicheckbox.on('click',checkStatusHindi);
    englishcheckbox.on('click',checkStatusEnglish);
    gujraticheckbox.on('click',checkStatusGujrati);
    phpcheckbox.on('click',checkStatusPhp);
    mysqlcheckbox.on('click',checkStatusMysql);
    laravelcheckbox.on('click',checkStatusLaravel);
    oraclecheckbox.on('click',checkStatusOracle);

    function checkStatusHindi() {
      if($(hindicheckbox).is(':checked'))
      {
          $("#hindiread").prop('disabled', false);
          $("#hindiwrite").prop('disabled', false);
          $("#hindispeak").prop('disabled', false);
      }
      else{
          $("#hindiread").prop('disabled', true);
          $("#hindiwrite").prop('disabled', true);
          $("#hindispeak").prop('disabled', true);
      }
    }

    function checkStatusEnglish() {
      if($(englishcheckbox).is(':checked'))
      {
          $("#englishread").prop('disabled', false);
          $("#englishwrite").prop('disabled', false);
          $("#englishspeak").prop('disabled', false);
      }
      else{
          $("#englishread").prop('disabled', true);
          $("#englishwrite").prop('disabled', true);
          $("#englishspeak").prop('disabled', true);
      }
    }

    function checkStatusGujrati() {
      if($(gujraticheckbox).is(':checked'))
      {
          $("#gujratiread").prop('disabled', false);
          $("#gujratiwrite").prop('disabled', false);
          $("#gujratispeak").prop('disabled', false);
      }
      else{
          $("#gujratiread").prop('disabled', true);
          $("#gujratiwrite").prop('disabled', true);
          $("#gujratispeak").prop('disabled', true);
      }
    }

    function checkStatusPhp() {
      if($(phpcheckbox).is(':checked'))
      {
          $("#Beginner3").prop('disabled', false);
          $("#Mediator3").prop('disabled', false);
          $("#Expert3").prop('disabled', false);
      }
      else{
          $("#Beginner3").prop('disabled', true);
          $("#Mediator3").prop('disabled', true);
          $("#Expert3").prop('disabled', true);
      }
    }

    function checkStatusMysql() {
      if($(mysqlcheckbox).is(':checked'))
      {
          $("#Beginner2").prop('disabled', false);
          $("#Mediator2").prop('disabled', false);
          $("#Expert2").prop('disabled', false);
      }
      else{
          $("#Beginner2").prop('disabled', true);
          $("#Mediator2").prop('disabled', true);
          $("#Expert2").prop('disabled', true);
      }
    }

    function checkStatusLaravel() {
      if($(laravelcheckbox).is(':checked'))
      {
          $("#Beginner1").prop('disabled', false);
          $("#Mediator1").prop('disabled', false);
          $("#Expert1").prop('disabled', false);
      }
      else{
          $("#Beginner1").prop('disabled', true);
          $("#Mediator1").prop('disabled', true);
          $("#Expert1").prop('disabled', true);
      }
    }

    function checkStatusOracle() {
      if($(oraclecheckbox).is(':checked'))
      {
          $("#Beginner").prop('disabled', false);
          $("#Mediator").prop('disabled', false);
          $("#Expert").prop('disabled', false);
      }
      else{
          $("#Beginner").prop('disabled', true);
          $("#Mediator").prop('disabled', true);
          $("#Expert").prop('disabled', true);
      }
    }
  var today = new Date();
  $('#date_of_birth').datepicker({
  format: 'yyyy-mm-dd',
  todayHighlight: true,
  autoclose: true
});
</script>
</body>
</html>
