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

    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>All Academic Session Data</h3>
                </div>
                {{--show message--}}
                @include("layouts._message")

            </div>
            <form class="mg-b-20">
                <div class="row gutters-8">
                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by ID ..." class="form-control">
                    </div>
                    <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Name ..." class="form-control">
                    </div>
                    <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Phone ..." class="form-control">
                    </div>
                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table display data-table text-nowrap">
                    <thead>
                    <tr>
                        <th>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input checkAll">
                                <label class="form-check-label">ID</label>
                            </div>
                        </th>
                        <th>Academic Session</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Action</th>

                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @php($SrNo = 1)
                        @foreach($academicSessions as $key => $ac)
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">{{ $academicSessions->firstItem() + $key }}</label>
                            </div>
                        </td>
                        <td>{{ $ac->session_name }}</td>
                        <td>{{ $ac->start_date }}</td>
                        <td>{{ $ac->end_date }}</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ route('academicSession.edit',$ac->id) }}"><i
                                                class="fas fa-times text-orange-red"></i>Edit</a>

                                    <form action="{{ route('academicSession.destroy',$ac->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="dropdown-item" style="cursor: pointer" onclick="return confirm('Are you sure want to delete?')"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Delete</button>

                                    </form>
                                  </div>
                            </div>
                        </td>
                            @endforeach
                    </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    {{ $academicSessions->render() }}
                </div>
            </div>
        </div>
    </div>
@endsection