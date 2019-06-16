@extends('admin.layouts.app') 

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Roles
        <small>Manage Roles</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{ route('roles.index') }}"><i class="fa fa-users"></i>Role</a></li>
        <li class="active">Manage</li>  
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">    

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="display:block">Manage Roles
                      <span class="pull-right" style="display:inline-block">
                      <a class="btn btn-primary btn-sm" href="{{ route('roles.create') }}"> <i class="fa fa-plus"></i> Add New</a>
                      </span> 
                  </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="datatable table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th> 
                      <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($roles as $role)
                    <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ ucfirst($role->name) }}</td> 
                      <td>
                          <div class="button-group">

                            <a href="{{ route('roles.edit', $role->id) }}"><i class="fa fa-pencil-square text-info"></i></a>

                            <form id="delete-form" action="{{ route('roles.destroy', $role->id) }}" method="post" style="display: inline;border:0">  
                              
                              @csrf   
                              @method('DELETE')     
    
                              <button class="text-danger delete" type="submit" style="border:0;background:none">	  
                                <i class="fa fa-trash"></i>    
                              </button>     
                            </form> 

                          </div>    
                      </td>
                    </tr>
                    @endforeach
                   </tbody>
                  
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th> 
                            <th>Actions</th>
                        </tr> 
                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
@endsection 

@section('title', 'Manage Roles')  

@section('scripts') 
<script> 
	$(document).on('click', '.delete', function(e) { 
          
          var form = $(this).parents('form:first'); 

         var confirmed = false;

           e.preventDefault();
          
           swal({
               title : 'Are you sure want to delete?',
               text : "Onec Delete, This will be permanently delete!",
               icon : "warning",
               buttons: true,
               dangerMode : true
           }).then((willDelete) => { 
               if (willDelete) {
                   // window.location.href = link;
                   confirmed = true;

               form.submit();         

               } else {
                   swal("Safe Data!");   
               }
           });
       });
</script>
@endsection 