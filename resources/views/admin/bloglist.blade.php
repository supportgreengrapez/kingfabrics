@extends('admin.layout.appadmin')

@section('content') 
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="contnt">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  
                  <div class=" col-lg-4 pull-right">
                  <div class="search">
                          <div class="input-group stylish-input-group ">
                      <input type="text" class="form-control input" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                  </div>
                  </div>
                  <div class="creat_admin">
                          <a href="{{URL('/')}}/admin-create-a-post">Create a Post</a>
                   </div>
                  </div>
                  <div class="x_panel">
                    <div class="x_content">
                      <table id="datatable" class="table table-bordered">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Post title</th>
                         
                           
                            <th>Actions</th>
                          </tr>
                        </thead>
  
  
                        <tbody>
                          @if(count($result)>0)
                          @foreach($result as $results)
                          <tr>
                            <td>{{$results->id}}</td>
                            <td>{{$results->title}}</td>
                    
                          <td><a href="{{url('/')}}/admin-blog-edit/{{$results->id}}">edit</a>  <a href="{{url('/')}}/admin-delete-blog-post/{{$results->id}}" onclick="return confirm('Are you sure?')">delete</a> </td>
                          </tr>
                          
                          @endforeach
                         @endif
                         
                        </tbody>
                      </table>
                      
                    </div>
                  </div>
                </div>
              
              </div>
              <div class="clearfix"></div>
  
            </div>
           </div>
          </div>
        <!-- /page content -->
      </div>

    <!-- jQuery -->
    <script src="{{URL('/')}}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{URL('/')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{URL('/')}}/build/js/custom.min.js"></script>

    <script>
        function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("datatable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
        } else {
        tr[i].style.display = "none";
        }
        }}
        }
        </script>
  </body>
  @endsection
</html>
