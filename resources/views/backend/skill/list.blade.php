@extends('backend.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Education List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Skill Name</th>
                        <th>Percentage</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($skills as $skill)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$skill->skill_name}}</td>
                    <td>{{$skill->percentage}}</td>
                    <td>
                      <a href="{{url('/admin/edit-skill/'.$skill->id)}}" class="btn btn-primary">Edit</a>
                      <a href="{{url('/admin/delete-skill/'.$skill->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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
