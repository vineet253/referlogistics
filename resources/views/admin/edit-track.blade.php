@extends('layouts.admin')

@section('admin-page-content')

                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            
                                            <li class="breadcrumb-item active">Edit Track</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit Track</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                       <form method="POST" action="{{ route('edit-track',['id'=>$id]) }}" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{$id}}">            
                        @include('admin.form.track-form')

                        <!-- end row -->
                        </form>
                        


@endsection 
