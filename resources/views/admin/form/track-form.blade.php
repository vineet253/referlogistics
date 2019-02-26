       
         @section('admin-js')
               @include('admin.include.form-js')
     @endsection 
      @section('admin-css')

              @include('admin.include.form-css')
   @endsection 
<style>label{margin-left: 20px;}
#datepicker{width:180px; margin: 0 20px 20px 20px;}
#datepicker > span:hover{cursor: pointer;}
.input-group-addon:last-child {
    border-left: 0;
    border-right: 1px solid #ced4da;
    border-bottom: 1px solid #ced4da;
    border-top: 1px solid #ced4da;
    font-size: 24px;
    padding: 0 6px;
    border-radius: 2px;
}
.datepicker.datepicker-dropdown.dropdown-menu.datepicker-orient-left.datepicker-orient-top {
    top: 183px !important;
}
.timepicker_wrap {
    width: 266px;
    }
    i.fa.fa-clock-o:before {
    content: "\f017";
}
span.input-group-addon.timespan {
    position: absolute;
    top: 0;
    right: 12px;
}
input#timepicker1 {
    position: relative;
}
</style>

      {{ csrf_field() }}
            
<div class="row doc_row1">
  <div class="col-sm-1 col-md-1">
 
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="pdo" value="EPOD" checked>EPOD
  </label>
</div>
  <div class="col-sm-1 col-md-1">   
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="pdo" value="General POD">General POD
  </label>
</div>
<div class="col-sm-2 col-md-2">
  <div class="form-group ">
      <input type="text" class="form-control" id="inputDocket" name="docket_no" placeholder="Docket No" value="{{ isset($docket_no) ? $docket_no : '' }}">
    </div>
  </div>
  <div class="col-sm-2 col-md-2">
  <div class="form-group input-group date" id="datepicker1">
      <input placeholder="Enter Date" type="text" id="date-picker-example" name="enter_date" class="form-control" value="{{ isset($enter_date) ? $enter_date : '' }}"><span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
    </div>

  </div>

    <div class="col-sm-2 col-md-2">
      <div class="form-group input-group date" id="datepicker2">
      <input placeholder="Pickup Date" type="text"" id="date-picker-example" name="pickup_date" class="form-control" value="{{ isset($pickup_date) ? $pickup_date : '' }}"><span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
    </div>
  </div>
    <div class="col-sm-2 col-md-2">
  <div class="form-group">
      <input placeholder="Time" type="text" id="timepicker1" name="pickup_time" class="form-control timepicker" value="{{ isset($pickup_time) ? $pickup_time : '' }}"><span class="input-group-addon timespan"><i class="fa fa-clock-o"></i></span>

    </div>
  </div>
    <div class="col-sm-2 col-md-2">
    <div class="form-group input-group date" id="datepicker3">
      <input placeholder="Exp. Delevery Date" type="text" name="delivery_date" id="date-picker-example" class="form-control" value="{{ isset($delivery_date) ? $delivery_date : '' }}"><span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
    </div>
  </div>
</div>

<div class="row doc_row2">
<div class="col-md-2">
 <select class="form-control form-control-sm" name="client_name">
  <option>Select Client</option>
      <option value="volvo">Volvo</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
</select>
</div>
<div class="col-md-2">
    <div class="form-group ">
      <input type="text" class="form-control" placeholder="Client Docket No" name="client_docket_no" value="{{ isset($client_docket_no) ? $client_docket_no : '' }}">
    </div>

</div>
<div class="col-md-2">
    <div class="form-group ">
      <input type="text" class="form-control" name="origin" placeholder="Origin" value="{{ isset($origin) ? $origin : '' }}">
    </div>
</div>
<div class="col-md-2">
 <select class="form-control form-control-sm" name="pickup_location">
  <option>Select Picup Locations</option>
      <option value="volvo">Volvo</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
</select>
</div>

<div class="col-md-2">
 <select class="form-control form-control-sm" name="destination">
  <option>Select Destination</option>
      <option value="volvo">Volvo</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
</select>
</div>
</div>

<div class="row doc_row3">

 <div class="col-md-2">
 <select class="form-control form-control-sm" name="payment_mode">
  <option>Select Payment Mode</option>
      <option value="volvo">Volvo</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
</select>
</div>
<div class="col-md-2">
 <select class="form-control form-control-sm" name="transport_mode">
  <option>Select Transport Mode</option>
      <option value="volvo">Volvo</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
</select>
</div>
 <div class="col-md-2">
  <label for="comment">Rate Factors:</label>
</div>
  <div class="col-md-6">
    <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="rate_factors" value="Per Kg" checked>Per Kg
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input"  name="rate_factors" value="Per Pack">Per Pack
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="rate_factors" value="FTL">FTL(Full Truck Load)
      </label>
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="rate_factors" value="Per CFT">Per CFT
  </label>
</div>
 
</div>

</div>


<div class="row doc_row4">

<div class="col-md-4 cust_clm">
  <h5>Consignor</h5>
   <div class="form-group ">
<select class="form-control form-control-sm" name="consignor_name">
  <option>Select Consignor</option>
      <option value="volvo">Volvo</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
</select>
</div>
  <div class="form-group ">
      <input type="text" class="form-control" name="consignor_address_one" placeholder="Address Line 1" value="{{ isset($consignor_address_one) ? $consignor_address_one : '' }}">
  </div>
    <div class="form-group ">
      <input type="text" class="form-control" name="consignor_address_two" placeholder="Address Line 2" value="{{ isset($consignor_address_two) ? $consignor_address_two : '' }}">
  </div>
  <div class="form-group ">
      <input type="text" class="form-control" name="consignor_address_pin" placeholder="Pin" value="{{ isset($consignor_address_pin) ? $consignor_address_pin : '' }}">
  </div>
  <div class="form-group ">
      <input type="text" class="form-control" name="consignor_phone" placeholder="Phone" value="{{ isset($consignor_phone) ? $consignor_phone : '' }}">
  </div>

 <div class="form-group ">
      <input type="email" class="form-control" name="consignor_email" placeholder="Emai" value="{{ isset($consignor_email) ? $consignor_email : '' }}">
 </div>
  <div class="form-group ">
      <input type="text" class="form-control" name="consignor_tin" placeholder="CST/LST/TIN" value="{{ isset($consignor_tin) ? $consignor_tin : '' }}">
  </div>
</div>
<div class="col-md-4 cust_clm">
  <h5>Consignee</h5>
  <div class="form-group ">
  <select class="form-control form-control-sm" name="consignee_name">
  <option>Select Consignee</option>
      <option value="volvo">Volvo</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
</select>
</div>
  <div class="form-group ">
      <input type="text" class="form-control" name="consignee_address_one" placeholder="Address Line 1" value="{{ isset($consignee_address_one) ? $consignee_address_one : '' }}">
  </div>
    <div class="form-group ">
      <input type="text" class="form-control" name="consignee_address_two" placeholder="Address Line 2" value="{{ isset($consignee_address_two) ? $consignee_address_two : '' }}">
  </div>
  <div class="form-group ">
      <input type="text" class="form-control" name="consignee_address_pin" placeholder="Pin" value="{{ isset($consignee_address_pin) ? $consignee_address_pin : '' }}">
  </div>
  <div class="form-group ">
      <input type="text" class="form-control" name="consignee_phone" placeholder="Phone" value="{{ isset($consignee_phone) ? $consignee_phone : '' }}">
  </div>

 <div class="form-group ">
      <input type="email" class="form-control" name="consignee_email" placeholder="Emai" value="{{ isset($consignee_email) ? $consignee_email : '' }}">
 </div>
  <div class="form-group ">
      <input type="text" class="form-control" name="consignee_tin" placeholder="CST/LST/TIN" value="{{ isset($consignee_tin) ? $consignee_tin : '' }}">
  </div>
</div>
<div class="col-md-4 cust_clm">
  <h5>Risk Details</h5>
      <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="risk_details" value="Owner Risk" checked>Owner Risk
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="risk_details" value="Carrier Risk">Carrier Risk
  </label>
</div>
<div class="form-group">
  <label for="comment">Insurance:</label>
 <!--  <textarea class="form-control" rows="2" name="insurance" placeholder="Insurance( In case of Owner Risk)" id="comment"></textarea> -->
  <input type="text" class="form-control" name="insurance" placeholder="Insurance" value="{{ isset($insurance) ? $insurance : '' }}">
</div>
<div class="form-group">
  <label for="comment">Rate:</label>
    <input type="text" class="form-control" name="rate" placeholder="Rate" value="{{ isset($rate) ? $rate : '' }}">
</div>

</div>
</div>

<div class="row doc_row5">
  <div class="col-md-3">
  <div class="form-group ">
      <input type="text" class="form-control" name="pvt_marks" placeholder="Pvt Marks" value="{{ isset($pvt_marks) ? $pvt_marks : '' }}">
  </div>
  </div>
  <div class="col-md-3">

    <div class="radio_btn">
  <label><input type="radio" name="cod_noncod" value="COD" checked>COD</label>
</div>
<div class="radio_btn">
  <label><input type="radio" name="cod_noncod" value="NON COD">NO COD</label>
</div>
  </div>
  <div class="col-md-3">
  <div class="form-group ">
      <input type="text" class="form-control" name="cod_amount" placeholder="COD Amount" value="{{ isset($cod_amount) ? $cod_amount : '' }}">
  </div>
  </div>
  <div class="col-md-3">
    
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
    
  </div>
  </div>




                        <div class="row">
                            <div class="col-12">
                                <div class="text-center mb-3">
                                   
                            <button class="ladda-button ladda-button-demo btn btn-success"  data-style="expand-right" type="submit">Save</button>
                                   
                                </div>
                            </div> <!-- end col -->
          
