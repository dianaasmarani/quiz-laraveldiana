@extends('layouts.app')

<style>
    img{
        width: 40%;
        margin-left: 30%;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('APLIKASI PERUSAHAAN LISTRIK NEGARA (PLN) SEDERHANA - LARAVEL') }} </div>

                <div class="card-body">
                   <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_PLN.png" alt="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_PLN.png" srcset="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_PLN.png">
                    <marquee behavior="" direction="">Selamat Datang Di Aplikasi Perusahaan Listrik Negara (PLN) Sederhana | &copy; Diana Asmarani Siregar 2022</marquee>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
