@if($soluong !== '0')
<div class="box">
  <div class="imageBox">
    <img src="{{asset('layout/Img/')}}/{{ $img }}" alt="" />
    <ul class="action">
      <a href="">
        <li>
          <i class="fas fa-heart"></i>
          <span>Thêm danh sách </span>
        </li>
      </a>
      <div class="cartCt" data-value="{{ $idDetails }}" >
        <li>
          <i class="fas fa-cart-plus"></i>
          <span class="idPcart" >Thêm cào giỏ hàng</span>
        </li>
      </div>
      <a href="detailProduct/{{$idDetails}}">
        <li>
          <i class="fas fa-eye"></i>
          <span>xem sản phẩm</span>
        </li>
      </a>
    </ul>
  </div>

  <div class="contents">
    <div class="productName">
      <h3>{{ $name }}</h3>
    </div>
    <div class="price_raiting">
      <div class="price">
        <h5>{{ $price }} VND</h5>
      </div>
      <div class="raiting">
      @for($i = 1 ; $i<= 5 ; $i++)
            @if( FLOOR($raiting) >= $i)
              <i class="fas fa-star vang"></i>
            @endif
            @if( FLOOR($raiting) < $i)
              <i class="fas fa-star"></i>
            @endif
          @endfor
      </div>
    </div>
  </div>
</div>
@endif

@if($soluong === '0')
<div class="box">
  <div class="imageBox">
    <img src="{{asset('layout/Img/')}}/{{ $img }}" alt="" />
    <ul class="action">
      <a href="">
        <li>
          <i class="fas fa-heart"></i>
          <span>Thêm danh sách </span>
        </li>
      </a>
      <div  data-value="#" >
        <li>
          <i class="fas fa-cart-plus"></i>
          <span class="idPcart" >Sản phẩm hết hàng</span>
        </li>
      </div>
      <a href="detailProduct/{{$idDetails}}">
        <li>
          <i class="fas fa-eye"></i>
          <span>xem sản phẩm</span>
        </li>
      </a>
    </ul>
  </div>

  <div class="contents">
    <div class="productName">
      <h3>{{ $name }}</h3>
      <p style="color: red;">Sản phẩm hết hàng</p>
    </div>
    <div class="price_raiting">
      <div class="price">
        <h5>{{ $price }} VND</h5>
      </div>
      <div class="raiting">
        @if($raiting === '1')
        <i class="fas fa-star"></i>
        @endif
        @if($raiting === '2')
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        @endif
        @if($raiting === '3')
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        @endif
        @if($raiting === '4')
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        @endif
        @if($raiting === '5')
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        @endif
      </div>
    </div>
  </div>
</div>
@endif