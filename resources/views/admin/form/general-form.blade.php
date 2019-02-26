         @section('admin-js')
               @include('admin.include.form-js')
     @endsection 
      @section('admin-css')
              @include('admin.include.form-css')
   @endsection 


      {{ csrf_field() }}
            <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                                    <div class="form-group mb-3">
                                        <label for="product-name">Name <span class="text-danger">*</span></label>
                                        <input type="text" id="product-name" name="name" class="form-control" placeholder="e.g : about us, privacy policy" value="{{ $name or '' }}" required="">
                                    </div>

                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

               
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <!--<input type="submit" name="submit" class="ladda-button ladda-button-demo btn btn-success"  data-style="zoom-in" value="Save">-->
                            <button class="ladda-button ladda-button-demo btn btn-success pull-left"  data-style="expand-right" type="submit">Save</button>
                                   
                                </div>
                            </div> <!-- end col -->
                        </div>