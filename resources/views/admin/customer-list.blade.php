@extends('layouts.admin')
   @section('admin-js')
            
            @include('admin.include.table-js')
            <script type="text/javascript">
                    $(document).ready(function(){
       
                            $(document).on('click', 'a.table-id', function(e){
                                var customerId = $(this).data('id');
                                //var route = $(this).data('route');
                                var route ='delete-customer';
                                SwalDelete(customerId,route);
                                e.preventDefault();
                            });
        
                    });

               
       </script>
            
     @endsection 
      @section('admin-css')
            
             @include('admin.include.table-css')
            
     
   @endsection 

@section('admin-page-content')

                        
                        
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">

                                </div>
                            </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                            <li class="breadcrumb-item active">Customers</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Customers</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                      
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                               @include('admin.include.notification')
                                 
                                <div class="card-box">

                                        <div class="row mb-2">

                                            <div class="col-sm-4">
                                        
<a href="{{route('add-customer')}}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle mr-1"></i> Add Customers</a>

                                            </div>
                                         
                                        </div>

                                    <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
                                        <thead>
                                        <tr>
                                            <th>S. No</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Firm</th>
                                            <th class="hidden-sm">Action</th>
                                            <th>Edit/Delete</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                            
                                            @foreach($customers as $customer)
                                        <tr>
                                            <td><b>{{$loop->iteration}}</b></td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-body">
                                                    
                                                    {{$customer->name}}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-body">
                                                    
                                                    {{$customer->code}}
                                                </a>
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);" class="text-body">
                                                    
                                                    {{$customer->firm}}
                                                </a>
                                            </td>

                                            <td>
                                               @if($customer->status==1)
                                                <span class="badge text-success bg-soft-success">Enable</span>
                                               @else
                                                <span class="badge bg-soft-danger text-danger">Disable</span>
                                               @endif
                                            </td>

                                              <td>
                                                 <a href="{{ route('edit-customer',['id'=>$customer->id])}}" class="action-icon text-success"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                        
                                                        <a href="javascript:void(0)" id="delete_product" class="action-icon text-danger table-id" data-id="{{$customer->id}}" data-route="delete-customer"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>

                                                    @endforeach
                                    

                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

    
@endsection
   
    