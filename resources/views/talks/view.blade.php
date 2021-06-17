@extends ('layout')

<style>
.invalid-feedback
{
	display: block !important;
}
table th{
    text-align: center;
}
.text-center{
    text-align: center;
}
.text-right{
    text-align: right;
    padding-bottom: 20px;
}
</style>

@section ('content')
        
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Talks</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                @if ($message = Session::get('success'))
                <div class="col-md-12 alert alert-success">
                {{ $message }}
                </div>
                @endif
                <div class="col-md-12 text-right" style="display: flex;">
                    <div class="col-md-4 offset-1">
                        <select class="form-control" name="speaker" id="speaker" onchange="load_talks();">
                            <option value="">Select Speaker</option>
                            @foreach ($speakers as $speaker)
                            <option value="{{ $speaker->id }}">{{ $speaker->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 offset-1">
                        <select class="form-control" name="tag" id="tag" onchange="load_talks();">
                            <option value="">Select Tag</option>
                            @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <a class="col-md-2" href="{{ route('add_talk') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Talk</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th nowrap>SI No.</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Speaker</th>
                            <th>Events</th>
                            <th>Participants</th>
                            <th>Tags</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody id="table_body">
                    
                    </tbody>
                </table>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
@endsection

<script>
window.onload = function() {
    load_talks();
}
</script>