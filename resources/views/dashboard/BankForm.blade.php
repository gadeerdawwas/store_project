@extends('dashboard.include.layout')
@push('plugin-styles')
@endpush
@section('content')
<main class="app-content">
  <div class="col-md-15">
    <div class="tile">
      <h3 class="tile-title">Add Bank Name</h3>
      <div class="tile-body">
        <form class="form-horizontal" action="{{route('admin.banks.store')}}" method="POST">
          @csrf
          <div class="form-group row">
            <label class="control-label col-md-3">Bank Name</label>
            <div class="col-md-8">
              <input class="form-control" required name="name" type="text" placeholder="Name">
            </div>
          </div>

          <div class="tile-footer">
            <div class="row">
              <div class="col-md-8 col-md-offset-3">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</main>
@endsection

@push('custom-scripts')

<script src="{{asset('dashboard/js/plugins/pace.min.js')}}"></script>
<!-- Page specific javascripts-->
<!-- Data table plugin-->
<script type="text/javascript" src="{{asset('dashboard/js/plugins/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/js/plugins/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
<!-- Google analytics script-->
<script type="text/javascript">
  if (document.location.hostname == 'pratikborsadiya.in') {
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-72504830-1', 'auto');
    ga('send', 'pageview');
  }
</script>
@endpush
