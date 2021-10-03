@extends('layouts.adminLayout')

@section('adminMain')
<div class="content">
<div class="addCategory">
        <div class="title">
          <h2>Add category</h2>
        </div>
  
        <div class="box-add-category">
          <div class="form-category">
            <form action="">
              <div class="input-block name">
                <label for="NameCate">Name Category</label>
                <input type="text" name="namecate" id="NameCate">
              </div>
              <div class="button-cate">
                <button>Add category</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="addCategory">
        <div class="title">
          <h2>Add Price</h2>
        </div>
  
        <div class="box-add-category">
          <div class="form-category">
            <form action="">
              <div class="input-block name">
                <label for="NameCate">Giá bắt đầu</label>
                <input type="text" name="priceStart" id="NameCate">
              </div>
              <div class="input-block name">
                <label for="NameCate">Giá kết thúc</label>
                <input type="text" name="PriceEnd" id="NameCate">
              </div>
              <div class="button-cate">
                <button>Add Price</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="addCategory">
        <div class="title">
          <h2>Add Height</h2>
        </div>
  
        <div class="box-add-category">
          <div class="form-category">
            <form action="">
              <div class="input-block name">
                <label for="NameCate">Height bắt đầu</label>
                <input type="text" name="priceStart" id="NameCate">
              </div>
              <div class="input-block name">
                <label for="NameCate">Height kết thúc</label>
                <input type="text" name="PriceEnd" id="NameCate">
              </div>
              <div class="button-cate">
                <button>Add Height</button>
              </div>
            </form>
          </div>
        </div>
      </div>

</div>
@stop()