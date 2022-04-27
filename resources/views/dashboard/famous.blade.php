@extends('dashboard.include.layout')
@push('plugin-styles')
@endpush
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
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>BANK Name</th>
                                        <th>IBAN Bank</th>
                                        {{-- <th>Social Media Account</th> --}}
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($famouses as $famous)
                                        <tr>
                                            <td>{{ $famous->first_name }} </td>

                                            <td>{{ $famous->last_name }}</td>
                                            <td>{{ $famous->email }}</td>
                                            <td>{{ $famous->phone }}</td>
                                            <td>{{ $famous->bank_name }}</td>
                                            <td>{{ $famous->bank_IBAN }}</td>
                                            <td>
                                                @if ($famous->status == 0)
                                                    <span class="badge badge-danger">Not Aprove</span><span>
                                                    @elseif ($famous->status == 1)
                                                        <span class="badge badge-success">Aprove</span><span>
                                                        @elseif ($famous->status == 2)
                                                            <span class="badge badge-primary">Call done</span><span>
                                                            @elseif ($famous->status == 3)
                                                                <span class="badge badge-info">An appointment</span><span>
                                                                @else
                                                                    <span class="badge badge-warning">Contract
                                                                        Done</span><span>
                                                @endif



                                            </td>



                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                        data-target="#exampleModaldelete{{ $famous->id }}" title=" حذف"><i
                                                            class="fa fa-lg fa-trash"></i></button>


                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                        data-target="#exampleModalconvert{{ $famous->id }}"
                                                        title=" تعديل ">
                                                        <i class="fa fa-lg fa-edit"></i> </button>

                                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                                        data-target="#exampleModalshow{{ $famous->id }}" title=" تعديل ">
                                                        <i class="fa fa-lg fa-eye"></i> </button>

                                                </div>

                                            </td>

                                            <div class="modal fade" id="exampleModaldelete{{ $famous->id }}"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <form
                                                                action="{{ route('admin.famouses.destroy', $famous->id) }}"
                                                                method="post">
                                                                @method('delete')
                                                                @csrf
                                                                <h5 class="modal-title" id="exampleModalLabel"> Delete
                                                                </h5>


                                                                <div class="modal-body">
                                                                    Are sure of the deleting process ?
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Confirmation</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="modal fade" id="exampleModalconvert{{ $famous->id }}"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-body">
                                                            <form
                                                                action="{{ route('admin.famouses.update', $famous->id) }}"
                                                                method="post">
                                                                @method('put')

                                                                @csrf
                                                                <h5 class="modal-title" id="exampleModalLabel"> Update
                                                                    Status </h5>
                                                                <br>
                                                                <div class="form-group">
                                                                    <select class="form-control" name="status"
                                                                        id="exampleSelect1">
                                                                        <option value="0"
                                                                            @if ($famous->status == 0) selected @endif>
                                                                            Not aprove</option>
                                                                        <option value="1"
                                                                            @if ($famous->status == 1) selected @endif>
                                                                            Aprove</option>
                                                                        <option value="2"
                                                                            @if ($famous->status == 2) selected @endif>
                                                                            Call done </option>
                                                                        <option value="3"
                                                                            @if ($famous->status == 3) selected @endif>
                                                                            An appointment</option>
                                                                        <option value="4"
                                                                            @if ($famous->status == 4) selected @endif>
                                                                            Contract Done</option>
                                                                    </select>
                                                                </div>




                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Confirmation</button>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="exampleModalshow{{ $famous->id }}"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-body">
                                                            <form action="" method="post">
                                                                @method('put')

                                                                @csrf
                                                                <h5 class="modal-title" id="exampleModalLabel"> Social
                                                                    Media Accounts </h5>
                                                                <br>
                                                                <div class="form-group">
                                                                    <div class="btn-group">
                                                                       <h4>
                                                                        <span class="badge badge-info">
                                                                          Facebook:
                                                                      </span>

                                                                      {{ $famous->facebook }}
                                                                       </h4>
                                                                    </div>
                                                                    <br>

                                                                    <div class="btn-group">
                                                                      <h4>
                                                                        <span class="badge badge-warning">
                                                                          Instagram:
                                                                      </span>

                                                                      {{ $famous->instagram }}
                                                                      </h4>
                                                                    </div>
                                                                    <br>

                                                                    <div class="btn-group">
                                                                        <h4>
                                                                          <span class="badge badge-primary">
                                                                            Twitter:
                                                                        </span>

                                                                        {{ $famous->twitter }}
                                                                        </h4>
                                                                    </div>

                                                                </div>




                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                   
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="">
                            <div class="row">

                                <div class="col-md-7 col-sm-7">
                                    <div class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_paginate">
                                        {{ $famouses->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection

@push('custom-scripts')
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('dashboard/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dashboard/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $('#sampleTable').DataTable();
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
        if (document.location.hostname == 'pratikborsadiya.in') {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-72504830-1', 'auto');
            ga('send', 'pageview');
        }
    </script>
@endpush
