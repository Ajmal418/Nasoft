@extends('layout.defult')
@section('content')
<div class="card_position">
    <div class="card" style="width: 18rem;" >
        <div class="bg-secondary p-2  text-center ">
            <h4><b> UPSELL #2</b></h4>
        </div>
        <img src="/product_3.jpg" class="card-img-top" alt="product">
        <div class="card-body d-flex justify-content-center flex-column">
            <div class="d-flex justify-content-between">
                <input type="hidden" value="{{ session()->get('id')}}" id="member_id">
                <div>
                    <h5>IPHONE 13</h5>
                </div>
                <div>
                   <h5>52000 $</h5>
                </div>
            </div>
          <button type="button" class=" btn card-title text-center p-2 btn-danger" id="btn_submit">ADD TO MY ORDER</button>
            <a href={{url('/orderlist')}} class="d-flex justify-content-center">no Thanks</a>
        </div>
      </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
<script>
$('#btn_submit').click(function(){
   
    id=document.getElementById("member_id").value;
    let data={
        product:"IPHONE 13",
        price:"800",
        foreign_key:id
    }
    console.log(data)
    $.ajax({
            url: "{{url('/upsell_2add')}}",
            data: data,
            type: "POST",
            success: function(result) {
                window.location.href = "{{url('/orderlist')}}";
                window.history.pushState("{{url('/orderlist')}}");
                // $('#Modal').modal('hide', document.location.reload())
                // document.location.reload();


            }



        });
})
</script>
@endsection