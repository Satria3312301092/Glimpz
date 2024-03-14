@extends('layout.list')

@section('title', 'Belajar tailwind')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

<table>
    <thead>
        <th>ID</th>
        <th>Produk</th>
    </thead>
    <tbody>
        @foreach($data as $post)
        <tr>
            <td>{{ $post['id'] }}</td>
            <td>{{ $post['produk'] }}</td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection
