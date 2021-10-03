@extends('layouts.layout')
@section('title','product')
@section('productJs')
<script type="text/javascript" src="{{asset('layout/Js/product.js')}}"></script>
@endSection
@section('mains')
<div class="body-product">
  <section class="product-slide">
    <div class="slide-box">
      <div class="slide-container">
        <div class="slide-image">
          <img src="{{asset('layout/Img/Kimetsu.no.Yaiba.full.png')}}" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section class="product-box">
    <div class="title-sort">
      <div class="title-product">
        <h2>Tất cả sản phẩm</h2>
      </div>
      <div class="sort">
        <div class="sort-product">
          <p>
            <i class="fas fa-sort-alpha-down"></i>
            <span class="sortPr">Sắp xếp</span>
          </p>
        </div>
        <div class="list-sort">
          <ul>
            <li>
              <span class="check-sort check"></span>
              <span class="sortPr" data-sort='tang'><a href="sorts?sort=tang">Giá : tăng dần</a> </span>
            </li>
            <li>
              <span class="check-sort check"></span>
              <span class="sortPr" data-sort='giam'><a href="sorts?sort=giam">Giá : giản dần</a> </span>
            </li>
            <li>
              <span class="check-sort check"></span>
              <span class="sortPr" data-sort='az'><a href="sorts?sort=az">Tên : A - Z</a> </span>
            </li>
            <li>
              <span class="check-sort check"></span>
              <span class="sortPr" data-sort='za'><a href="sorts?sort=za">Tên : Z - A</a> </span>
            </li>
            <li>
              <span class="check-sort check"></span>
              <span class="sortPr" data-sort='moi'><a href="sorts?sort=moi">Mới nhất</a> </span>
            </li>
            <li>
              <span class="check-sort check"></span>
              <span class="sortPr" data-sort='cu'><a href="sorts?sort=cu">Cũ nhất</a> </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="prouduct-filter">
      <div class="filter-adv">
        <div class="name-filter">
        <a href="{{route('product')}}"> <i class="fas fa-filter"></i> <span>bộ lọc</span></a> 
        </div>
        <div class="sort-price">
          <div class="sort-product">
            <p><i class="fas fa-sort-alpha-down"></i> <span>Giá</span></p>
          </div>
          <div class="list-sort-price">
            <ul>
              <li>
                <span class="check-price check"></span>
                <span class="checkPrice" data-price="0;100000"><a href="CheckPrice?priceStart=0&priceEnd=100000">Dưới 100.000</a>  đ</span>
              </li>
              <li>
                <span class="check-price check"></span>
                <span class="checkPrice" data-price="100000;500000"><a href="CheckPrice?priceStart=100000&priceEnd=5000000">100.000đ - 500.000</a>  đ</span>
              </li>
              <li>
                <span class="check-price check"></span>
                <span class="checkPrice" data-price="500000;1000000"> <a href="CheckPrice?priceStart=500000&priceEnd=10000000">500.000đ - 1.000.000</a> đ</span>
              </li>
              <li>
                <span class="check-price check"></span>
                <span class="checkPrice" data-price="1000000;0"><a href="CheckPrice?priceStart=1000000&priceEnd=0">Trên 1.000.000 </a> đ</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="sort-kind">
          <div class="sort-product">
            <p>
              <i class="fas fa-sort-alpha-down"></i> <span>Thể loại</span>
            </p>
          </div>
          <div class="list-sort-kind">
            <ul>
              <li>
                <span class="check-kind check "></span>
                <span class="sortKinds" data-kinds='chibi'><a href="sortKinds?kind=chibi"> Chibi</a></span>
              </li>
              <li>
                <span class="check-kind check"></span>
                <span class="sortKinds" data-kinds='action'><a href="sortKinds?kind=action"> Action</a></span>
              </li>
              <li>
                <span class="check-kind check"></span>
                <span class="sortKinds" data-kinds='scale'> <a href="sortKinds?kind=scale">Scale</a> </span>
              </li>
              <li>
                <span class="check-kind check"></span>
                <span class="sortKinds" data-kinds='BB'><a href="sortKinds?kind=BB">BB</a> </span>
              </li>
            </ul>
          </div>
        </div>

        <div class="sort-size">
          <div class="sort-product">
            <p>
              <i class="fas fa-sort-alpha-down"></i>
              <span>Kích thước</span>
            </p>
          </div>
          <div class="list-sort-size">
            <ul>
              <li>
                <span class="check-size check"></span>
                <span class="sortSizes" data-size="0;10"><a href="sortSizes?sizeStart=0&sizeEnd=10">Dưới 10cm</a> </span>
              </li>
              <li>
                <span class="check-size check"></span>
                <span class="sortSizes" data-size="10;20"><a href="sortSizes?sizeStart=10&sizeEnd=20">10cm - 20cm</a> </span>
              </li>
              <li>
                <span class="check-size check"></span>
                <span class="sortSizes" data-size="20;30"><a href="sortSizes?sizeStart=20&sizeEnd=30">20cm - 30cm</a> </span>
              </li>
              <li>
                <span class="check-size check"></span>
                <span class="sortSizes" data-size="30;0"><a href="sortSizes?sizeStart=30&sizeEnd=0">Trên 30cm</a> </span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="product-box-container">
  <div class="box-prominent">
      <div class="box-container product-attention">
        @foreach ($productList as $product)
        <x-product idDetails="{{ $product['id_pro'] }}" name="{{ $product['name_pro'] }}" img="{{ $product['image'] }}" price="{{ ($product['price_new'] === null ) ? $product['price_old'] : $product['price_new'] }}" raiting="{{ $product['danhgia'] === null ? 5 :$product['danhgia'] }}"  soluong="{{ $product['soluong'] }}" />
        @endforeach
      </div>
    </div>
    <div class="page-divide">
      {!! $productList->appends(request() -> all()) -> render() !!}
    </div>
  </section>

  <section class="prodcut-customer">
    <div class="title">
      <h2>Chắc bạn sẽ chú ý</h2>
    </div>
    <div class="customer-attention">
      <div class="swiper mySwiper-product">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="attention-row">
              <div class="attention-left">
                <div class="attention-box">
                  @foreach ($productCate['action'] as $product)
                  <x-categoryProductComponent idDetails="{{ $product['id_pro'] }}" name="{{ $product['name_pro'] }}" price="{{ $product['price_new'] }}" img="{{ $product['image'] }}" soluong="{{ $product['soluong'] }}"/>
                  @endforeach

                </div>
              </div>
              <div class="attention-right">
                <div class="attention-box-big">
                  <div class="attention-box-img">
                    <img src="{{asset('layout/Img/Fate.jpg')}} " alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="attention-row">
              <div class="attention-left">
                <div class="attention-box">

                  @foreach ($productCate['scale'] as $product)
                  <x-categoryProductComponent idDetails="{{ $product['id_pro'] }}" name="{{ $product['name_pro'] }}" price="{{ $product['price_new'] }}" img="{{ $product['image'] }}" soluong="{{ $product['soluong'] }}" />
                  @endforeach

                </div>
              </div>
              <div class="attention-right">
                <div class="attention-box-big">
                  <div class="attention-box-img">
                    <img src="{{asset('layout/Img/Fate.jpg')}} " alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="attention-row">
              <div class="attention-left">
                <div class="attention-box">
                  @foreach ($productCate['chibi'] as $product)
                  <x-categoryProductComponent idDetails="{{ $product['id_pro'] }}" name="{{ $product['name_pro'] }}" price="{{ $product['price_new'] }}" img="{{ $product['image'] }}" soluong="{{ $product['soluong'] }}" />
                  @endforeach
                </div>
              </div>
              <div class="attention-right">
                <div class="attention-box-big">
                  <div class="attention-box-img">
                    <img src="{{asset('layout/Img/Fate.jpg')}} " alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next dechodep"></div>
        <div class="swiper-button-prev dechodep"></div>
      </div>
    </div>
  </section>
</div>
@stop()
