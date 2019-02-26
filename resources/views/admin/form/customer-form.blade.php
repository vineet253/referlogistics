         @section('admin-js')
               @include('admin.include.form-js')
     @endsection 
      @section('admin-css')
              @include('admin.include.form-css')
   @endsection 


      {{ csrf_field() }}
            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card-box">
                                    <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Customer</h5>

                                    <div class="form-group mb-3">
                                        <label for="product-name">Customer Name <span class="text-danger">*</span></label>
                                        <input type="text" id="product-name" name="name" class="form-control" placeholder="e.g : xyz" value="{{ isset($name) ? $name : '' }}" required="">
                                    </div>



                                    <div class="form-group mb-3">
                                        <label for="product-name">Customer Code <span class="text-danger">*</span></label>
                                        <input type="text" id="product-name" name="code" class="form-control" placeholder="e.g : 123" value="{{ isset($code) ? $code : '' }}" required="">
                                    </div>


                                    <div class="form-group mb-3">
                                        <label for="product-name">Firm Name <span class="text-danger">*</span></label>
                                        <input type="text" id="product-name" name="firm" class="form-control" placeholder="e.g : xyz" value="{{ isset($firm) ? $firm : '' }}" required="">
                                    </div>
                                

                                           

                                    <div class="form-group mb-3">
                                        <label for="product-category">Status <span class="text-danger">*</span></label>
                                        <select class="form-control select2" id="staus" name="status">
                                           @isset($status)
                                                    <option value="1" @if($status==1)selected="selected" @endif>Enable</option>
                                                    <option value="0" @if($status==0)selected="selected" @endif>Disable</option>     
                                            @else
                                                <option value="1">Enable</option>
                                                 <option value="0">Disable</option>     
                                            @endisset

                                        </select>
                                    </div>

                          

                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                           
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="text-center mb-3">
                                   
                            <button class="ladda-button ladda-button-demo btn btn-success"  data-style="expand-right" type="submit">Save</button>
                                   
                                </div>
                            </div> <!-- end col -->
                        </div>