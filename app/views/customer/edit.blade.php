@extends('layout.main')
@section('content')
    <form action="{{route('edit-post/'.$customer->id)}}" method="post">

        name: <input type="text" value="{{$customer->name}}" name="name"><br>
        address: <input type="text"  value="{{$customer->address}}" name="address"><br>
        phone: <input type="text"  value="{{$customer->phone}}" name="phone"><br>
        note: <input type="text"  value="{{$customer->note}}" name="note"><br>

        <button name="xacNhan">xac nhan</button>
    </form>
@endsection
