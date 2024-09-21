@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="text-center">Bem-vindo ao Ademir Cortes</h2>
                <div class="row">
                    <div class="col-md-8">
                        <img
                            src="{{ asset('/img/background-tela-inicial.jpg') }}"
                            alt="Barbearia Imagem"
                            class="img-fluid rounded"
                        >
                    </div>
                    <div class="col-md-4">
                        <h3></h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum, quibusdam. Cupiditate tempora vero consectetur deserunt maxime cumque eveniet commodi dignissimos quae possimus minima officiis, velit adipisci at accusantium aperiam placeat quibusdam temporibus, deleniti exercitationem suscipit sequi et voluptates non. Hic tempore, consequatur laudantium vel nihil rem assumenda quos veritatis molestias vero ratione aut modi quam ex delectus dignissimos nesciunt, libero illo officiis asperiores facilis. Porro blanditiis ut ipsum nesciunt molestiae quae ab! Pariatur voluptatum accusamus cum omnis magnam, cupiditate dolorem, quibusdam illo debitis labore ullam molestias sed, distinctio vitae numquam harum porro delectus aliquam. Repellat, cum nemo. At, vero modi?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('css/views/home/home.css') }}">
@endpush
