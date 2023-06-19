@extends('layout.defult')
@section('content')
<div class="card_position">
    <div class="card" style="width: 18rem;" >
        <div class="bg-secondary p-2  text-center ">
            <h4><b> UPSELL #1</b></h4>
        </div>
        <img src="/product_2.webp" class="card-img-top" alt="product">
        <div class="card-body d-flex justify-content-center flex-column">
            <div class="d-flex justify-content-between">
                <input type="hidden" value="{{ session()->get('id')}}" id="member_id">
                <div>
                    <h5>Lakme</h5>
                </div>
                <div>
                   <h5>520 $ </h5>
                </div>
            </div>
          <button type="button" class=" btn card-title text-center p-2 btn-danger" id="btn_submit">ADD TO MY ORDER</button>
            <a href={{url('/upsell_2')}} class="d-flex justify-content-center">no Thanks</a>
        </div>
      </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
<script>
$('#btn_submit').click(function(){
   id=document.getElementById("member_id").value;
    
    let data={
        product:"Lakme",
        price:"50",
        foreign_key:id
    }
    console.log(data)
    $.ajax({
            url: "{{url('/upsell_1add')}}",
            data: data,
            type: "POST",
            success: function(result) {
                window.location.href = "{{url('/upsell_2')}}";
                window.history.pushState("{{url('/upsell_2')}}");
                // $('#Modal').modal('hide', document.location.reload())
                // document.location.reload();


            }



        });
})
</script>
@endsection