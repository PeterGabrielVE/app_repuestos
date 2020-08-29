@extends('layouts.index')

@section('content')
@include('products.create')
@include('products.view')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    INVENTARIO
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PRODUCTOS
                            </h2>
                            <a class="btn btn-success boton-add" title="Add" id="add_product">
                                <i class="material-icons">add</i>
                            </a>  
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                         <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>CODIGO</th>
                                            <th>PRECIO</th>
                                            <th>DISP</th>
                                            <th>EMPAQ</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>CODIGO</th>
                                            <th>PRECIO</th>
                                            <th>DISP</th>
                                            <th>EMPAQ</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($product as $key => $value)
                                        <tr>
                                            <td>{{ $value->id  }}</td>
                                            <td>{{ $value->nombre  }}</td>
                                            <td>{{ $value->codigo  }}</td>
                                            <td>{{ $value->precio  }}</td>
                                            <td>
                                                @if(($value->existencia)=='0' )
                                                <span class="badge badge-danger r-5">Agotado</span>
                                                @elseif(($value->existencia)=='1' )
                                                <span class="badge badge-warning r-5">Baja Existencia</span>
                                                 @elseif(($value->existencia)=='2' )
                                                 <span class="badge badge-success r-5">Disponible</span>
                                                @endif
                                            <td>{{ $value->empaque  }}
                                                 <span>PZAS</span>
                                            </td>
                                            <td>
                                              
                                                <a class="btn btn-warning" title="Edit" href="{{ route('product.show',$value->id) }}">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a class="btn btn-danger" title="Delete" href="{{ route('product.delete',$value->id) }}">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                         <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>CODIGO</th>
                                            <th>PRECIO</th>
                                            <th>DISP</th>
                                            <th>EMPAQ</th>
                                         </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>CODIGO</th>
                                            <th>PRECIO</th>
                                            <th>DISP</th>
                                            <th>EMPAQ</th>
                                        </tr>
                                    </tfoot>
                                     <tbody>
                                        @foreach($product as $key => $value)
                                        <tr>
                                            <td>{{ $value->id  }}</td>
                                            <td>{{ $value->nombre  }}</td>
                                            <td>{{ $value->codigo  }}</td>
                                            <td>{{ $value->precio  }}</td>
                                            <td>  @if(($value->existencia)=='0' )
                                                <span class="badge badge-danger r-5">Agotado</span>
                                                @elseif(($value->existencia)=='1' )
                                                <span class="badge badge-warning r-5">Baja Existencia</span>
                                                 @elseif(($value->existencia)=='2' )
                                                 <span class="badge badge-success r-5">Disponible</span>
                                                @endif
                                            </td>
                                            <td>{{ $value->empaque  }}
                                                <span>PZAS</span>
                                            </td>
                                           
                                             
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script>


$(document).ready(function(){

    $("#add_category").click(function(){
          $("#create").modal("show");
    });

    $("#add_product").click(function(){
          $("#createProduct").modal("show");
    });


});


  
    function showView(id){
            console.log(id);
          $("#view_Category").modal("show");
           $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
            $.ajax({
                type: "GET",
                url:"{{ url('/categories/view') }}/"+id,
                dataType:'json',
                success: function(data){
                    console.log(data);
                    $("#view_title").val(data['title']);
                    $("#view_description").val(data['description']);
                    
                }
            });

    };// function show vista


    function showEdit(id){
            console.log(id);
          $('#category_id').val(id);
          $("#editCategory").modal("show");
           $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
            $.ajax({
                type: "GET",
                url:"{{ url('/categories/view') }}/"+id,
                dataType:'json',
                success: function(data){
                    console.log(data);
                    $("#edit_title").val(data['title']);
                    $("#edit_description").val(data['description']);
                    
                }
            });

    };// function show edit


    function deleteCategory(id){
            console.log(id);
         
           $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
            $.ajax({
                type: "GET",
                url:"{{ url('/categories/remove') }}/"+id,
                dataType:'json',
                success: function(data){
                    console.log(data);
                     window.location.href = "{{URL::to('categories.list')}}"
                    
                }
            });

    };// function delete

    function showViewProduct(id){
            console.log(id);
          $("#viewProduct").modal("show");
          
           $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
            $.ajax({
                type: "GET",
                url:"{{ url('/product/view') }}/"+id,
                dataType:'json',
                success: function(data){
                    console.log(data);
                    $("#view_ptitle").val(data['title']);
                    $("#view_pdescription").val(data['description']);
                    $("#view_pcategories").val(data['category_id']);
                   
                }
            });

    };// function show vista

    function showEditProduct(id){
            console.log(id);
          $('#product_id').val(id);
          $("#editProduct").modal("show");
           $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
            $.ajax({
                type: "GET",
                url:"{{ url('/products/view') }}/"+id,
                dataType:'json',
                success: function(data){
                    console.log(data);
                    $("#editar_title").val(data.title);
                    $("#editar_description").val(data['description']);
                    $("#edit_pcategories").val(data['category_id']);
                    $("#product_id").val(data['id']);
                    
                }
            });

    };// function show edit


     function deleteProduct(id){
            console.log(id);
         
           $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
            $.ajax({
                type: "GET",
                url:"{{ url('/products/remove') }}/"+id,
                dataType:'json',
                success: function(data){
                    console.log(data);
                     window.location.href = "{{URL::to('categories.list')}}"
                    
                }
            });

    };// function delete
    
    jQuery(document).ready(function(){

     jQuery('#viewEdit').click(function(e){

        var id =  this.value;
        console.log(id);
             
    }); //edit
 



    jQuery('#ajaxEditSubmit').click(function(e){

                var id =  $('#category_id').val();
               e.preventDefault();
               $(this).html('Sending..');

               $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  data: $('#categoryEditForm').serialize(),
                  url:"{{ url('/categories/edit') }}/"+id,
                  method: 'post',
                  dataType: 'json',
                  success: function(r){

                     $('#categoryEditForm').trigger("reset");
                     $('#ajaxEditSubmit').html('Save Data');

                     $('#editCategory').modal('hide');
                    
                      window.location.href = "{{URL::to('categories.list')}}"
                      

                    

                  },
                 error :function( data ) {
                    console.log('Error:', data);
                    if( data.status === 422 ) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                        
                      
                        $('#ajaxEditSubmit').html('Save Data');
                            if($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    console.log(key+ " " +value);
                                    
                                    
                                });
                            }
                        });
                      }}
                });
            }); //edit


        jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $(this).html('Sending..');

               $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  data: $('#categoryForm').serialize(),
                  url:"{{ url('/categories/add') }}",
                  method: 'post',
                  dataType: 'json',
                  success: function(r){

                     $('#categoryForm').trigger("reset");
                     $('#ajaxSubmit').html('Save Data');

                     $('#create').modal('hide');
                    
                      window.location.href = "{{URL::to('categories.list')}}"
                      

                    

                  },
                 error :function( data ) {
                    console.log('Error:', data);
                    if( data.status === 422 ) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                        
                      
                        $('#ajaxSubmit').html('Save Data');
                            if($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    console.log(key+ " " +value);
                                    
                                    
                                });
                            }
                        });
                      }}
                });
            });// aggregar category

        jQuery('#ajaxProductSubmit').click(function(e){
               e.preventDefault();
               $(this).html('Sending..');

               $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  data: $('#productForm').serialize(),
                  url:"{{ url('/products/add') }}",
                  method: 'post',
                  dataType: 'json',
                  success: function(r){

                     $('#productForm').trigger("reset");
                     $('#ajaxProductSubmit').html('Save Data');

                     $('#createProduct').modal('hide');
                    
                      window.location.href = "{{URL::to('categories.list')}}"
                      

                    

                  },
                 error :function( data ) {
                    console.log('Error:', data);
                    if( data.status === 422 ) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                        
                      
                        $('#ajaxProductSubmit').html('Save Data');
                            if($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    console.log(key+ " " +value);
                                    
                                    
                                });
                            }
                        });
                      }}
                });
            });// aggregar category

        jQuery('#ajaxEditProductSubmit').click(function(e){

                var id =  $('#product_id').val();
               e.preventDefault();
               $(this).html('Sending..');

               $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  data: $('#productEditForm').serialize(),
                  url:"{{ url('/products/edit') }}/"+id,
                  method: 'post',
                  dataType: 'json',
                  success: function(r){

                     $('#productEditForm').trigger("reset");
                     $('#ajaxEditProductSubmit').html('Save Data');

                     $('#editProduct').modal('hide');
                    
                      window.location.href = "{{URL::to('categories.list')}}"
                      

                    

                  },
                 error :function( data ) {
                    console.log('Error:', data);
                    if( data.status === 422 ) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                        
                      
                        $('#ajaxEditSubmit').html('Save Data');
                            if($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    console.log(key+ " " +value);
                                    
                                    
                                });
                            }
                        });
                      }}
                });
            }); //edit


})





</script>


@endsection




