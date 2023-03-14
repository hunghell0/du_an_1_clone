@extends('layout.main')
@section('content')
   <form action="{{route('add-post')}}" method="post">

   name: <input type="text" name="name"><br>
   address: <input type="text" name="address"><br>
   phone: <input type="text" name="phone"><br>
   note: <input type="text" name="note"><br>

<button name="xacNhan">xac nhan</button>
   </form>
@endsection
