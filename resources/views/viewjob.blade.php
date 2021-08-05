@extends('layouts.app')

@section('content')
<div class="container">
<center><h3>Detail of Job Applications</h3></center>
  <div class="card">
      <div class="card-body">
        <table class="table">
          </thead>
          <tbody>
            <tr>
                <td><strong>First Name</strong></td>
                <td class="text-primary">{{$job->first_name}}</td>
            </tr>
            <tr>
                <td><strong>Last Name</strong></td>
                <td class="text-primary">{{$job->last_name}}</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td class="text-primary">{{$job->email}}</td>
            </tr>
            <tr>
               <td><strong>Phone Number</strong></td>
               <td class="text-primary">{{$job->phone_number}}</td>
            </tr>
            <tr>
                <td><strong>Designation</strong></td>
                <td class="text-primary">{{$job->designation}}</td>
            </tr>
            <tr>
                <td><strong>Address 1</strong></td>
                <td class="text-primary">{{$job->address_1}}</td>
            </tr>
            <tr>
                <td><strong>Address 2</strong></td>
                <td class="text-primary">{{$job->address_2}}</td>
            </tr>
            <tr>
               <td><strong>City</strong></td>
               <td class="text-primary">{{$job->city}}</td>
            </tr>
            <tr>
                <td><strong>State</strong></td>
                <td class="text-primary">{{$job->state}}</td>
            </tr>
            <tr>
                <td><strong>Gender</strong></td>
                <td class="text-primary">{{$job->gender}}</td>
            </tr>
            <tr>
                <td><strong>Zip code</strong></td>
                <td class="text-primary">{{$job->zip_code}}</td>
            </tr>
            <tr>
               <td><strong>Relationship Status</strong></td>
               <td class="text-primary">{{$job->relationship_status}}</td>
            </tr>
            <tr>
                <td><strong>DOB</strong></td>
                <td class="text-primary">{{$job->date_of_birth}}</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>

  <div class="card">
      <div class="card-header">{{ __('SSC Result') }}</div>
      <div class="card-body">
        <table class="table">
          </thead>
          <tbody>
            <tr>
                <td><strong>Board name</strong></td>
                <td class="text-primary">{{$job->ssc_board_name}}</td>
            </tr>
            <tr>
                <td><strong>Passing Year</strong></td>
                <td class="text-primary">{{$job->ssc_passing_year}}</td>
            </tr>
            <tr>
                <td><strong>Percentage</strong></td>
                <td class="text-primary">{{$job->ssc_percentage}}</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>

  <div class="card">
      <div class="card-header">{{ __('HSC Result') }}</div>
      <div class="card-body">
        <table class="table">
          </thead>
          <tbody>
            <tr>
                <td><strong>Board name</strong></td>
                <td class="text-primary">{{$job->hsc_board_name}}</td>
            </tr>
            <tr>
                <td><strong>Passing Year</strong></td>
                <td class="text-primary">{{$job->hsc_passing_year}}</td>
            </tr>
            <tr>
                <td><strong>Percentage</strong></td>
                <td class="text-primary">{{$job->hsc_percentage}}</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>

  <div class="card">
      <div class="card-header">{{ __('Bachlor Degree') }}</div>
      <div class="card-body">
        <table class="table">
          </thead>
          <tbody>
            <tr>
                <td><strong>Course name</strong></td>
                <td class="text-primary">{{$job->degree_course_name}}</td>
            </tr>
            <tr>
                <td><strong>University</strong></td>
                <td class="text-primary">{{$job->degree_university}}</td>
            </tr>
            <tr>
                <td><strong>Passing Year</strong></td>
                <td class="text-primary">{{$job->degree_passing_year}}</td>
            </tr>
            <tr>
                <td><strong>Percentage</strong></td>
                <td class="text-primary">{{$job->degree_percentage}}</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>

  <div class="card">
      <div class="card-header">{{ __('Master Degree') }}</div>
      <div class="card-body">
        <table class="table">
          </thead>
          <tbody>
            <tr>
                <td><strong>Course name</strong></td>
                <td class="text-primary">{{$job->master_course_name}}</td>
            </tr>
            <tr>
                <td><strong>University</strong></td>
                <td class="text-primary">{{$job->master_university}}</td>
            </tr>
            <tr>
                <td><strong>Passing Year</strong></td>
                <td class="text-primary">{{$job->master_passing_year}}</td>
            </tr>
            <tr>
                <td><strong>Percentage</strong></td>
                <td class="text-primary">{{$job->master_percentage}}</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>

  <div class="card">
      <div class="card-header">{{ __('Language Known') }}</div>
      <div class="card-body">
        <table class="table">
          </thead>
          <tbody>
            <tr>
                <td><strong>Hindi</strong></td>
                <td class="text-primary">{{$job->known_hindi_languge}}</td>
            </tr>
            <tr>
                <td><strong>English</strong></td>
                <td class="text-primary">{{$job->known_english_languge}}</td>
            </tr>
            <tr>
                <td><strong>Gujrati</strong></td>
                <td class="text-primary">{{$job->known_gujrati_languge}}</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>

  <div class="card">
      <div class="card-header">{{ __('Technology you know') }}</div>
      <div class="card-body">
        <table class="table">
          </thead>
          <tbody>
            <tr>
                <td><strong>PHP</strong></td>
                <td class="text-primary">{{$job->technology_php}}</td>
            </tr>
            <tr>
                <td><strong>Mysql</strong></td>
                <td class="text-primary">{{$job->technology_mysql}}</td>
            </tr>
            <tr>
                <td><strong>Laravel</strong></td>
                <td class="text-primary">{{$job->technology_laravel}}</td>
            </tr>
            <tr>
                <td><strong>Oracle</strong></td>
                <td class="text-primary">{{$job->technology_oracle}}</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
@if(isset($job['jobReference']))
  <div class="card">
      <div class="card-header">{{ __('Reference Contact') }}</div>
      <div class="card-body">
        <table class="table">
          </thead>
          <tbody>
            @if(isset($job['jobReference']->name))
            <tr>
                <td><strong>Name</strong></td>
                <td class="text-primary">{{$job['jobReference']->name}}</td>
            </tr>
            @endif
            @if(isset($job['jobReference']->contact_number))
            <tr>
                <td><strong>Contact number</strong></td>
                <td class="text-primary">{{$job['jobReference']->contact_number}}</td>
            </tr>
            @endif
            @if(isset($job['jobReference']->relation))
            <tr>
                <td><strong>Relation</strong></td>
                <td class="text-primary">{{$job['jobReference']->relation}}</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
  </div>
@endif
  <div class="card">
      <div class="card-header">{{ __('Preferences') }}</div>
      <div class="card-body">
        <table class="table">
          </thead>
          <tbody>
            <tr>
                <td><strong>Prefered location</strong></td>
                <td class="text-primary">{{$job->prefered_location}}</td>
            </tr>
            <tr>
                <td><strong>Notice period</strong></td>
                <td class="text-primary">{{$job->notice_period}}</td>
            </tr>
            <tr>
                <td><strong>Expected ctc</strong></td>
                <td class="text-primary">{{$job->expected_ctc}}</td>
            </tr>
            <tr>
                <td><strong>Current ctc</strong></td>
                <td class="text-primary">{{$job->current_ctc}}</td>
            </tr>
            <tr>
                <td><strong>Department</strong></td>
                <td class="text-primary">{{$job->department}}</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>

</div>
@endsection
