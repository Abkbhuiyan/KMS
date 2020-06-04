@extends('layouts.mad.master')
@section('title','Admin Dashboard')
@section('content')
    <div class="breadcrumbs-area">
        <h3>Academic Session</h3>
        <ul>
            <li>
                <a href="{{ route("dashboard.index") }}">Home</a>
            </li>
            <li>Academic Session</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-4-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Academic Session</h3>
                        </div>
                    </div>
                    <form class="new-added-form" action="{{route('academicSession.update',$academicSession->id)}}" method="post">
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col-12-xxxl col-lg-12 col-12 form-group">
                                <label>Session Name</label>
                                <input {{ old('session_name') }} name="session_name" value="{{ old('name',isset($academicSession->session_name)?$academicSession->session_name:null) }}"  type="text" class="form-control">
                                @error('session_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Session Start</label>
                                <input {{ old('start_date') }} name="start_date" value="{{ old('name',isset($academicSession->start_date)?$academicSession->start_date:null) }}" type="date" class="form-control">
                                @error('start_date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Session End</label>
                                <input {{ old('end_date') }} name="end_date" value="{{ old('name',isset($academicSession->end_date)?$academicSession->end_date:null) }}" type="date" class="form-control">
                                @error('end_date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <input type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" value="Update">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection