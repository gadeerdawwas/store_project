@extends('dashboard.include.layout')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list">Famous</i></h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th> Store Name </th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Username</th>
                                        <th>Store Name</th>
                                        <th>IBAN Bank</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($companies as $company)
                                        <tr>
                                          <td>{{$company->store_owner}} </td>

                                            <td>{{$company->email}}</td>
                                            <td>{{$company->phone}}</td>
                                            <td>{{$company->username}}</td>
                                            <td>{{$company->store_name}}</td>
                                            <td>{{$company->bank_IBAN}}</td>
                                            <td>{{$company->status}}</td>
                                        
                                        
                                            {{-- <td>
                                                <div class="form-group">
                                                    <select class="form-control" id="exampleSelect1">
                                                        <option>Aprove</option>
                                                        <option>Not aprove</option>
                                                        <option>Call done </option>
                                                        <option>An appointment</option>
                                                        <option>Contract Done</option>
                                                    </select>
                                                </div>
                                            </td> --}}
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-primary" href="#">
                                                        <i class="fa fa-lg fa-edit"></i>
                                                    </a>
                                                    
                                                    <a class="btn btn-danger" href="#"><i
                                                            class="fa fa-lg fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="">
                          <div class="row">
                           
                            <div class="col-md-7 col-sm-7">
                                <div class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_paginate">
                                    {{ $companies->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
