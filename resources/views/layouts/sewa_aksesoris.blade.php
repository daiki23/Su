@extends('layouts/template')
    
  @section('title', 'Sewa')

  @section('content')
    <div class="container" style="margin-top: 60px;">

      <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/home">Home</a>
        </li>
        <li class="breadcrumb-item active">Sewa</li>
      </ol> -->

      <!-- Page Heading/Breadcrumbs -->
      <div class="row text-center">
        <div class="col-lg-10 mx-auto">
          <h2>Pilih Produk</h2>
          <br>
        </div>
        <div class="col-md-5 col-lg-3 col-xl-4 mx-auto">
          <a class="btn btn-block btn-lg btn-primary" href="/sewa/aksesoris">Tampilkan Semua</a>
        </div>
      </div>

      <div class="row">
        <div class="product-top" style="margin-bottom: 50px">
            <div class="product-one">
              @foreach($aksesoris as $item)
              <div class="col-md-3 product-left">
                <div class="product-main product-main-alert simpleCart_shelfItem">

                  <!-- Berdasar Kondisi -->
                  @if($item->status=='tersedia')
                  <div class="alert alert-success alert-product" id="tersedia">
                    <strong>Tersedia</strong>
                  </div>
                  @else
                  <div class="alert alert-danger alert-product" id="tidak_tersedia">
                    <strong>Tidak Tersedia</strong>
                  </div>
                  
                  @endif  
                  <a class="mask" href="/detil/aksesoris/{{$item->id}}">
                    <img class="img-responsive zoom-img" src="{{ URL::to('/image/' . $item->gambar) }}"   />
                  </a>
                  <div class="product-bottom text-center">
                    <h3>{{ $item->jenis }}</h3>
                    <p>{{ $item->tipe }}</p>
                    <h4><span class=" item_price">{{ $item->harga_sewa }}</span></h4>
                  </div>
                </div>
              </div>
              @endforeach

              <div class="clearfix"></div>
            </div>   
          </div>

      </div>
    </div>
  @endsection
