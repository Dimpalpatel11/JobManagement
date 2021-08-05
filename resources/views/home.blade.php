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
            <div class="card">
                <div class="card-header">{{ __('Job Applications') }}</div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-body">
                  @if(count($jobs) > 0)
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($jobs as $job)
                      <tr>
                        <td>{{$job->job_application_id}}</td>
                        <td>{{$job->first_name}}</td>
                        <td>{{$job->last_name}}</td>
                        <td> <a href="{{route('editJob',$job->job_application_id)}}" class="btn btn-primary">Edit</a> <a href="{{route('viewJob',$job->job_application_id)}}" class="btn btn-info">View</a> <a href="{{route('deleteJob',$job->job_application_id)}}" class="btn btn-danger">Delete</a> </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @else
                  <div class="col-md-12">
                    <h3 style="text-align:center;">You have not uploaded any Blogs</h3>
                  </div>

                  @endif
                </div>
            </div>
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

@endsection
