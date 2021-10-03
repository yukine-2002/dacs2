
@extends('layouts.layout')
@section('title','user')
@section('cssUser')
<link rel="stylesheet" href="{{asset('layout/Css/user/user.css')}}">
@stop()
@section('mains')
<div class="box-user">
    <div class="user-img">
        <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" alt="">
    </div>

    <div class="user-info">
        <div class="user-infor-form">
        @if(session('id_cus')&&session('fullname')&&session('email')&&session('dates')&&session('cmnd')&&session('adress')&&session('sdt'))
            <div class="user-infor-col">
                <div class="info_current">
                       <input type="text" class="getName" data-action='updateName' value="{{session('fullname')}}" disabled>
                </div>
                <div class="edit">
                    <button class="choose-edit edit-name">Sửa</button>
                    <button class="choose-save none save-name">lưu</button>
                </div>
            </div>

            <div class="user-infor-col">
                <div class="info_current">
                       <input type="email" class="getName"  data-action='updateEmail' name="email" value="{{session('email')}}" disabled>
                </div>
                <div class="edit">
                    <button class="choose-edit edit-email">Sửa</button>
                    <button class="choose-save none save-name">lưu</button>
                </div>
            </div>

            <div class="user-infor-col">
                <div class="info_current">
                       <input type="date" class="getName"  data-action='updatedates' name="date" value="{{session('dates')}}" disabled>
                </div>
                <div class="edit">
                    <button class="choose-edit edit-date">Sửa</button>
                    <button class="choose-save none save-name">lưu</button>
                </div>
            </div>

            <div class="user-infor-col">
                <div class="info_current">
                       <input type="text" class="getName" data-action='updateAdress' name="adress" value="{{session('adress')}}" disabled>
                </div>
                <div class="edit">
                    <button class="choose-edit edit-adress">Sửa</button>
                    <button class="choose-save none save-adress">lưu</button>
                </div>
            </div>

            <div class="user-infor-col">
                <div class="info_current">
                       <input type="text" class="getName" name="sdt" data-action='updateSdt' value="{{session('sdt')}}" disabled>
                </div>
                <div class="edit">
                    <button class="choose-edit edit-sdt">Sửa</button>
                    <button class="choose-save none save-sdt">lưu</button>
                </div>
            </div>
            <div class="user-infor-col">
                <div class="info_current">
                       <input type="text" class="getName" name="cmnd" data-action='updateCmnd' value="{{session('cmnd')}}" disabled>
                </div>
                <div class="edit">
                    <button class="choose-edit edit-cmnd">Sửa</button>
                    <button class="choose-save none save-cmnd">lưu</button>
                </div>
            </div>
        @endif
        @if( !session()-> has('sdt') && !session()-> has('email')&& !session()-> has('dates') && !session()-> has('cmnd') )   
        <div class="titles">
            <h3>Bạn chưa cung cấp đầy đủ thông tin !!!</h3>
            <i>Vui lòng nhập đầy đủ thông tin để thuận tiện cho việc mua hàng</i>
        </div>
        <div class="form-submit-info">
            <form action="{{route('updateUser')}}" method="GET">
            @CSRF
            <input type="hidden" name="id_per" value="{{session('id')}}">
            <div class="user-infor-col">
                <div class="info_current">
                       <input type="text" name="fullname" placeholder="Họ và tên">
                </div>
              
            </div>

            <div class="user-infor-col">
                <div class="info_current">
                       <input type="email" name="email" placeholder="Email">
                </div>
               
            </div>

            <div class="user-infor-col">
                <div class="info_current">
                       <input type="date" name="date" >
                </div>
            
            </div>

            <div class="user-infor-col">
                <div class="info_current">
                       <input type="text" name="adress" placeholder="Địa chỉ">
                </div>
               
            </div>

            <div class="user-infor-col">
                <div class="info_current">
                       <input type="text" name="sdt" placeholder="Số điện thoại">
                </div>
                
            </div>
            <div class="user-infor-col">
                <div class="info_current">
                       <input type="text" name="cmnd" placeholder="Chứng minh nhân dân">
                </div>
                
            </div>
            <div class="update">
                <input type="submit" value="Cập nhật">
            </div>
            </form>
        </div>
        @endif

        </div>
    </div>
</div>
<script>
$('.choose-edit').on('click',function(){
    $(this).parent().prev().children().prop('disabled',false);
    $(this).toggleClass('none');
    $(this).next().removeClass('none');
})
$('.choose-save').on('click',function(){
   var value =  $(this).parent().prev().children().val();
   var action =  $(this).parent().prev().children().data('action');
    $.ajax({
        url:'updateCurrent',
        data:{
            'action':action,
            'value':value
        }
    }).done(function(data){
        console.log(data)
    })
    $(this).parent().prev().children().prop('disabled',true);
    $(this).toggleClass('none');
    $(this).prev().removeClass('none');
})
</script>
@stop() 