@extends('layouts.user')

@section('header')
<style>
    #hero{
        background: url('{{asset('user/images/122.jpg')}}') top center;
        background-repeat: no-repeat;
        width:100%;
        background-size:cover;
    }
    .form-control:focus {
      box-shadow: none;
    }
    .form-control::placeholder {
      font-size: 0.95rem;
      color: #aaa;
      font-style: italic;
    }
    .article{
      line-height: 1.6;
      font-size: 15px;
    } 
    .shopee-btn {
        background-color: #F85E5E;
        color: white;
    }
    .tokopedia-btn {
        background-color: #03AC0E;
        color: white;
    }
    .destination-card {
        transition: transform 0.3s ease;
    }
    .destination-card:hover {
        transform: scale(1.05);
    }
    .full-img {
        height: 250px;
        background-size: cover;
        background-position: center;
        border-radius: 10px;
    }
</style>     
@endsection

@section('hero')
    <h1>Karya Santri, Kebanggaan Bersama</h1>
    <h2>Dukung kreativitas santri kami dengan produk berkualitas yang dibuat dengan hati.</h2>
@endsection

@section('content')
    <section id="contact">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="row container">
                    <div class="col-sm-9">
                        @if (empty(request()->segment(2)))
                            <div class="row justify-content-left">
                                @foreach ($destinations as $destination)
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <a href="{{route('destination.show', $destination->slug)}}" class="decoration-none destination-card">
                                            <div class="row">
                                                <div class="col-12 full-img" style="background-image: url('{{asset('destinations_image/'.$destination->image)}}')"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col px-0 pt-2">
                                                    <h4 style="color: #666666 !important;">{{$destination->title}}</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div> 
                                @endforeach
                            </div>
                        @else
                            @component('user.component.single_destination', ['destination'=> $destinations])
                            @endcomponent
                        @endif
                    </div>
                    
                    <div class="col-sm-3 mt-5">
                        <form action="{{route('destination')}}" class="mt-5">
                            <div class="input-group mb-4 border rounded-pill shadow-lg" style="border-radius:10px; box-shadow: 3px 3px 8px grey;">
                                <input type="text" name="s" value="{{Request::get('s')}}" placeholder="Produk Lainnya?" class="form-control bg-none border-0" style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                                <div class="input-group-append border-0">
                                    <button type="submit" class="btn text-success"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        
                        <div class="mb-3 font-weight-bold">Other Posts</div>
                        @foreach ($other as $item)
                            <div>
                                <a href="{{route('destination.show', [$item->slug])}}"> 
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> 
                                    {{$item->title}}
                                </a>
                                <hr>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="mt-3 d-flex justify-content-between">
                    <a href="#" class="btn shopee-btn">
                        <i class="fa fa-shopping-cart mr-2"></i>Beli di Shopee
                    </a>
                    <a href="#" class="btn tokopedia-btn">
                        <i class="fa fa-shopping-cart mr-2"></i>Beli di Tokopedia
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection