@extends('layout.main')
@section('content')
    <h3><a href="{{route('login')}}">Dang nhap</a></h3>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Note</th>

    <th><a href="{{route('add')}}">them</a></th>

    </thead>
    <tbody>
         @foreach($customers as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->name }}</td>
                <td>{{ $c->phone }}</td>
                <td>{{ $c->address }}</td>
                <td>{{ $c->note }}</td>
                <th>
                    <a href="{{route('edit/'.$c->id)}}">Sửa</a>
                    <a onclick="return confirm('Bạn có chắc chắn xóa không ?')" href="{{ route('delete/'.$c->id)}}">Xóa</a>
                </th>
            </tr>
        @endforeach
    </tbody>

</table>
@endsection
