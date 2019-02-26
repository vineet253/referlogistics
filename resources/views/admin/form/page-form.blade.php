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

                                

                                    <div class="form-group mb-3">
                                        <label for="product-description">Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="description" id="product-description" rows="5" placeholder="Please enter description" required="">{{ $description or '' }}</textarea>
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

                            <div class="col-lg-6">
                                
                   
                                <div class="card-box">
                                    <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Meta Data</h5>

                                    <div class="form-group mb-3">
                                        <label for="product-meta-title">Meta title</label>
                                        <input type="text" name="meta_title" class="form-control" id="product-meta-title" placeholder="Enter title" value="{{ $meta_title or '' }}">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="product-meta-keywords">Meta Keywords</label>
                                        <input type="text" class="form-control" name="meta_keyword" id="product-meta-keywords" placeholder="Enter keywords" value="{{ $meta_keyword or '' }}">
                                    </div>

                                    <div class="form-group mb-0">
                                        <label for="product-meta-description">Meta Description </label>
                                        <textarea class="form-control" rows="5" name="meta_description" id="product-meta-description" placeholder="Please enter description">{{ $meta_description or '' }}</textarea>
                                    </div>
                                </div> <!-- end card-box -->

                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="text-center mb-3">
                                    <!--<input type="submit" name="submit" class="ladda-button ladda-button-demo btn btn-success"  data-style="zoom-in" value="Save">-->
                            <button class="ladda-button ladda-button-demo btn btn-success"  data-style="expand-right" type="submit">Save</button>
                                   
                                </div>
                            </div> <!-- end col -->
                        </div>