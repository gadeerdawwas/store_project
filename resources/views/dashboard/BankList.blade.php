@extends('dashboard.include.layout')
@push('plugin-styles')
@endpush
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list">Bank</i></h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
            </ul>
        </div>
        <p><a class="btn btn-primary icon-btn" href="{{ route('admin.banks.create') }}"><i class="fa fa-plus"></i>Add Item
            </a></p>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">

                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th> Name </th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($banks as $bank)
                                        <tr>
                                            <td>{{ $bank->name }} </td>




                                            <td>
                                                {{-- <div class="btn-group"> --}}
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#exampleModaldelete{{ $bank->id }}" title=" حذف"><i
                                                        class="fa fa-lg fa-trash"></i></button>


                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#exampleModalconvert{{ $bank->id }}" title=" تعديل ">
                                                    <i class="fa fa-lg fa-edit"></i> </button>

                                                {{-- </div> --}}

                                            </td>

                                            <div class="modal fade" id="exampleModaldelete{{ $bank->id }}"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.banks.destroy', $bank->id) }}"
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


                                            <div class="modal fade" id="exampleModalconvert{{ $bank->id }}"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">

                                                        <div class="col-md-15">
                                                            <div class="tile">
                                                                <h3 class="tile-title">Update Bank Name</h3>
                                                                <div class="tile-body">
                                                                    <form class="form-horizontal"
                                                                        action="{{ route('admin.banks.update', $bank->id) }}"
                                                                        method="POST">
                                                                        @method('put')
                                                                        @csrf
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-3">Bank
                                                                                Name</label>
                                                                            <div class="col-md-8">
                                                                                <input class="form-control" required
                                                                                    name="name" type="text"
                                                                                    placeholder="Name" value="{{$bank->name}}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="tile-footer">
                                                                            <div class="row">
                                                                                <div class="col-md-8 col-md-offset-3">
                                                                                    <button class="btn btn-primary"
                                                                                        type="submit"><i
                                                                                            class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
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
