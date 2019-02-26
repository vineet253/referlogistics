@extends('layouts.admin')

@section('admin-page-content')

                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            
                                            <li class="breadcrumb-item active">Add Page</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Page</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                       <form method="POST" action="{{ route('add-customer') }}" enctype="multipart/form-data">
                                    
                  @include('admin.form.customer-form')
                        <!-- end row -->
                        </form>
                        


@endsection 
