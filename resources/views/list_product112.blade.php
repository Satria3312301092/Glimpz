    @extends('layout.list112')

    @section('title', 'Ini adalah judul pada meta')
    @section('content')

    
    <div class="grid grid-cols-4 grid-flow-row justify-items-center">
                    @foreach($data as $post)
                    <div class="col-span-1">
                        <div class="card w-60 bg-base-100 mb-8 shadow-xl">
                        <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">{{ $post['produk'] }}</h2>
                        <p>Item {{ $post['id']}}</p>
                        <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
                    </div>

                    
                    @endforeach
                </div>
    @endsection