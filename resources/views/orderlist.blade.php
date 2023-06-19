@extends('layout.defult')
@section('content')
<div class="container">
    <div>
        
        <table class="table">
            <input type="hidden" value="{{ session()->get('id')}}" id="member_id">
            <thead>
                <tr>
                    <th>id</th>
                    <th>order</th>
                    <th>price(USD)</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @foreach ($data as $item)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$item->product_name}}</td>
                    <td>{{$item->price}}</td>
                   </tr>
                   @php $i++; @endphp  
                @endforeach
               
            </tbody>
        </table>
    </div>

</div>
@endsection