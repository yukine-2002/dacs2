<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin list Customer</title>
    <link rel="stylesheet" href="{{asset('layout/Css/admin/admin.css')}}" />
    <link rel="stylesheet" href="{{asset('layout/Css/admin/adminProduct.css')}}" />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  </head>
  <body>
    <input type="checkBox" id="check" />
    <header>
      <label for="check"><i class="fas fa-bars" id="slidebar_btn"></i></label>
      <div class="left_area">
        <h3>Admin Page</h3>
      </div>
      <div class="right_area">
        <a href="" class="logout_btn">Logout</a>
      </div>
    </header>

    <div class="slidebar">
      <div class="profile_info">
        <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" class="profile_imgae" alt="" />
        <h4>Gái xinh</h4>
      </div>
      <div class="menu">
        <div class="item">
          <a class="sub-btn" href="#"
            ><i class="fa fa-desktop"></i><span>Dashboard</span>
            <i class="fas fa-angle-right dropdown"></i
          ></a>
          <div class="sub-menu">
            <a href="" class="sub-item"
              ><i class="fab fa-slideshare"></i></i><span>Edit slide</span></a
            >
            <a href="" class="sub-item"
              ><i class="fas fa-text-width"></i></i><span>Edit content</span></a
            >
            <a href="" class="sub-item"
              ><i class="fab fa-wordpress"></i></i><span>Edit logo</span></a
            >
          </div>
        </div>
        <div class="item">
          <a class="sub-btn" href="#"
            ><i class="fas fa-indent"></i><span>ProductSort</span></i
          > <i class="fas fa-angle-right dropdown"> </i
            ></a>
            <div class="sub-menu">
              <a href="{{route('adminSort')}}" class="sub-item"
                ><i class="fas fa-clipboard-list"></i><span>List Sort</span></a
              >
              <a href="{{route('adminAddLisstSort')}}" class="sub-item"
                ><i class="fas fa-plus-square"></i></i><span>Add Sort</span></a
              >
            </div>
        </div>
        <div class="item">
          <a class="sub-btn" href="#"
            ><i class="fas fa-swatchbook"></i></i><span>Product</span>
            <i class="fas fa-angle-right dropdown"> </i
          ></a>
          <div class="sub-menu">
            <a href="{{route('adminListProduct')}}" class="sub-item"
              ><i class="fas fa-clipboard-list"></i><span>List product</span></a
            >
            <a href="{{route('adminProduct')}}" class="sub-item"
              ><i class="fas fa-plus-square"></i></i><span>Add product</span></a
            >
            <a href="" class="sub-item"
              ><i class="fas fa-star-half-alt"></i></i><span>Rate Product</span></a
            >
          </div>
        </div>
        <div class="item">
          <a class="" href="{{route('adminCustomer')}}"
            ><i class="fas fa-user-cog"></i></i><span>Customer</span
            ></a>
        </div>
        <div class="item">
          <a  href="{{route('adminOrder')}}"
            ><i class="fa fa-info-circle"></i><span>Order</span
            ></a>
         
        </div>
        <div class="item">
          <a href="#"><i class="fa fa-sliders-h"></i><span>Settings</span></a>
        </div>
      </div>
    </div>

    @yield('adminMain')
    <script src="{{asset('layout/Js/admin.js')}}"></script>
  </body>
</html>