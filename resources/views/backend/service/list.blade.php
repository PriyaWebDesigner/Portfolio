@extends('backend.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Service List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Education Year</th>
                        <th>Title</th>
                        <th>Institute Nmae</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($services as $service)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>
                        <img src="{{asset('backend/images/service/'.$service->image)}}" height="50" width="50">
                      </td>
                    <td>{{$service->service_name}}</td>
                    <td>{{$service->description}}</td>
                    <td>
                      <a href="{{url('admin/edit-service/'.$service->id)}}" class="btn btn-primary">Edit</a>
                      <a href="{{url('/admin/delete-service/'.$service->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@push('js')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
