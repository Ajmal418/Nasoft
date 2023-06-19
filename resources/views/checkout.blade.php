@extends('layout.defult')
@section('content')
<div class="container">
    <div class="text-center">
      <h4>CheckOut Form</h4>
      <p>xyz</p>
    </div>
    <div class="row">
      <div class="col-8">
        <div>
          <h4>Builling adress</h4>
          <form class="row g-3"  id="form"   >
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">First name</label>
              <input type="text" class="form-control" id="fname" name="fname" required>
              <label id="fname_error" class="error_field"></label>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lname" name="lname" required>
              <label id="lname_error" class="error_field"></label>
            </div>
            <div class="col-12">
            <label for="inputPassword4" class="form-label">Username</label>
            <div class="input-group">
            <div class="input-group-text">@</div>
            <input type="text" class="form-control" id="Username" name="Username" placeholder="Username" required>
          </div> 
          <label id="Username_error" class="error_field"></label>    
            </div>
            <div class="col-12">
              <label for="" class="form-label">Email  <span>(optional)</span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">

            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="adress" placeholder="1234 Main St" required>
              <label id="address_error" class="error_field"></label>
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Address 2 <span>(optional)</span></label>
              <input type="text" class="form-control" id="address_2" name="address_2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
              
               <label for="inputcountry" class="form-label">country</label>
              <select  class="form-select" name="country" id="country">
                 <option value="" selected>choose..</option>
                <option value="1" >Dubai</option>
                 <option value="2">UK</option>
                  <option value="3">India</option>
                </select>
              <label id="country_error" class="error_field"></label>
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <select  class="form-select" name="state" id="state" >
                <option value="" selected>choose..</option>
                <option value="1" >Dehli</option>
                 <option value="2">Chenai</option>
                  <option value="3">Mumbai</option>
              </select>
              <label id="state_error" class="error_field"></label>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="pincode" name="pincode" required>
              <label id="pincode_error" class="error_field"></label>
            </div>
            <hr class="border border-dark">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Shipping_address_is_the_same_as_my_billing_address" id="user_check2">
              <label class="form-check-label" for="flexCheckDefault">
                Shipping address is the same as my billing address
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="save_this_information_for_next_time " id="user_check1" >
              <label class="form-check-label" for="flexCheckChecked">
                save this information for next time 
              </label>
            </div>
            <hr class="border border-dark">
            <p class="text-bold">Payment</p>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="Payment_type" id="Payment_type" value="1" >
              <label class="form-check-label" for="flexRadioDefault1">Credit card</label>
              <label id="Payment_type_error" class="error_field"></label>
              
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="Payment_type" id="Payment_type"  value="2" >
              <label class="form-check-label" for="flexRadioDefault2"> Debit card</label>
              <label id="Payment_type_error" class="error_field"></label>
           </div>
           <div class="form-check">
            <input class="form-check-input" type="radio" name="Payment_type" id="Payment_type" value="3">
            <label class="form-check-label" for="flexRadioDefault2"> Paypal </label>
            <label id="Payment_type_error" class="error_field"></label>
         </div>
         <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Name On card </label>
          <input type="text" class="form-control" id="card_name" name="card_name" required>
          <span> full name as display on card</span>
          <label id="card_name_error" class="error_field"></label>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Credit Card Number</label>
          <input type="number" class="form-control" id="card_no" name="card_no" minlength="16" maxlength="18" required>
          <label id="card_no_error" class="error_field"></label>

        </div>
        <div class="col-md-3">
          <label for="inputEmail4" class="form-label">Expiration </label>
          <input type="number" class="form-control" id="expiration" name="expiration" placeholder="MM/YY" required>
          <label id="expiration_error" class="error_field"></label>

        </div>
        <div class="col-md-3">
          <label for="cvv" class="form-label">CVV</label>
          <input type="number" class="form-control" id="cvv" name="cvv" minlength="3" maxlength="4" required>
          <label id="cvv_error" class="error_field"></label>
        </div>
         <hr class="border border-dark">
        <div class="col-12 d-grid ">
          <button type="button"  class="btn btn-primary insrtbtn btn_submit">continue to checkout</button>
        </div>
      </form>

    </div>
  </div>
  <div class="col-4">
    <div>
      <h4>Your Cart</h4>
      <div class="bg-white border border-dark mb-4 ">
        <div class="row px-4 py-2">
            <img src="/product_1.jpg" class="card-img-top" alt="product">
           <div class="col-md-10">
            <h4>jonson baby</h4>
          <span class="text-gray">Johnson's baby powder absorbs excess moisture and keeps baby's skin comfortable and dry · Johnson's baby powder is dermatologist tested and hypoallergenic </span>
         </div>
         <div class="col-md-2">
            <h4><b class="">$20</b></h4>
          
            
         </div> 
        </div>
      </div>
      <div class="bg-white border border-dark ">
        <div class="row px-4 py-2">
           <div class="col-md-10">
            <h5>Total(USD)</h5>
          </div>
         <div class="col-md-2">
            <h5><b class="">$20</b></h5>
          
            
         </div> 
        </div>
      </div>
    </div>
  </div>


</div>

</div>

<input type="button" class="" id="btn_submit" value="test">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
 <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
    var is_error=false;
    $(document).ready(function(){ 

        $('.btn_submit').on('click', function(event) {

            
            event.preventDefault();
           
            // $('.error_field').html('')
            var fname=$('#fname').val()
            var lname=$('#fname').val()
            var Username=$('#Username').val()
            var email=$('#email').val()
            var address=$('#address').val()
            var address_2=$('#address_2').val()
            var pincode=$('#pincode').val()
            var state=$('#state').val()
            var country=$('#country').val()
            var cvv=$('#cvv').val()
            var expiration=$('#expiration').val()
            var card_name=$('#card_name').val()
            var card_no=$('#card_no').val()
            // var Payment_type=$('#Payment_type').val()
            var Payment_type=$('input[name="Payment_type"]:checked').val()
           console.log(state,'hey')
            console.log(card_no,'hdhdhhd')
        //     return false ;
            if(fname==''){
                $('#fname_error').html('please insert first name')
                is_error=true;
            }else{
                $('#fname_error').html('')
            }
            if(lname==''){
                $('#lname_error').html('please insert last name')
                is_error=true;
            }else{
                $('#lname_error').html('')
            }
             if(expiration==''){
                $('#expiration_error').html('please insert card expiration')
                is_error=true;
            }else{
                $('#expiration_error').html('')
            }
             if(Username==''){
                $('#Username_error').html('please insert Username')
                is_error=true;
            }else{
                $('#Username_error').html('')
            }
             if(address==''){
                $('#address_error').html('please insert address')
                is_error=true;
            }else{
                $('#address_error').html('')
            }
             if(pincode==''){
                $('#pincode_error').html('please insert pincode')
                is_error=true;
            }else{
                $('#pincode_error').html('')
            }
             if(country==''){
                $('#country_error').html('please select country')
                is_error=true;
            }else{
                $('#country_error').html('')
            }
             if(state==''){
                $('#state_error').html('please select state')
                is_error=true;
            }else{
                $('#state_error').html('')
            }
             if(cvv==''){
                $('#cvv_error').html('please insert cvv')
                is_error=true;
            }else{
                $('#cvv_error').html('')
            }
             if(card_name==''){
                $('#card_name_error').html('please insert card name')
                is_error=true;
            }else{
                $('#card_name_error').html('')
            }
             if(card_no=='' ){
                $('#card_no_error').html('invalid number')
                is_error=true;
            }else{
                $('#card_no_error').html('')
            }
             if(Payment_type==''){
                $('#Payment_type_error').html('please insert Payment_type')
                is_error=true;
            }else{
                $('#Payment_type_error').html('')
            }
            
            if(!is_error){
            
  
                let data ={
                    fname:fname,
                    lname:lname,
                    Username:Username,
                    email:email,
                    address:address,
                    address_2:address_2,
                    country:country,
                    pincode:pincode,
                    state:state,
                    card_name:card_name,
                    card_no:card_no,
                    Payment_type:Payment_type,
                    cvv:cvv,
                    expiration:expiration
           }
           console.log(data);
          $.ajax({
            url: "{{url('/memberinfo')}}",
            data: data,
            type: "POST",
            success: function(result) {

                window.location.href = "{{url('/upsell_1')}}";
                window.history.pushState("{{url('/upsell_1')}}");
                


            }



        });

            }

        });

    });




// function form(event){
    
//         event.preventDefault();

  
//         let {state,country,lname,fname,Username,email,address,address_2,pincode,cvv,expiration,card_name,card_no,Payment_type,user_check2,user_check1}=event.target
  
//           // 
    
      
  
//           let data ={
//             fname:fname.value,
//             lname:lname.value,
//             Username:Username.value,
//             email:email.value,
//             address:address.value,
//             address_2:address_2.value,
//             country:country.value,
//             pincode:pincode.value,
//             state:state.value,
//             card_name:card_name.value,
//             card_no:card_no.value,
//             Payment_type:Payment_type.value,
//             cvv:cvv.value,
//             expiration:expiration.value,
//              user_check2:user_check2.value,
//             user_check1:user_check1.value
//           }
//         console.log(data);
          
 
        
//         $.ajax({
//             url: "{{url('/memberinfo')}}",
//             data: data,
//             type: "POST",
//             success: function(result) {
//                 window.location.href = "{{url('/upsell_1')}}";
//                 window.history.pushState("{{url('/upsell_1')}}");
//                 // $('#Modal').modal('hide', document.location.reload())
//                 // document.location.reload();


//             }



//         });
  
//     } 
</script>
@endsection

@push('scripts')
@endpush