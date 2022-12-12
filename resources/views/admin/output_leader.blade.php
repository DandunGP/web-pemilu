@extends('layouts.layout')

@section('content')
    <section id="leader">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-center text-white text-title">Ketua Fosti 2022/2023</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row wrap-voting">
                <div class="card leader-card shadow-lg " data-aos="zoom-in" data-aos-duration="800">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('/storage/' . $leader->photo) }}" alt="profile" class="choose-image">
                        </div>
                        <h5 class="card-title text-center">{{ $leader->name }}</h5>
                        <hr>
                        <h5 class="text-center">{{ $leader->user_count }}</h5>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container ">
            <div class="row ">
                <div id="piechart" class="d-flex justify-content-center"></div>
            </div>
        </div> --}}
    </section>
@endsection
