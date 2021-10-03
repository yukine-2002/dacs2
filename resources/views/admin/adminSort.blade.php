@extends('layouts.adminLayout')

@section('adminMain')
<div class="content">
<div class="list_category">
        <div class="title">
            <h2>List category</h2>
          </div>
          <div class="table-product">
            <div class="list-product-all">
              <table class="tblone">
                <tr>
                  <th >Num</th>
                  <th >Name</th>
                  <th >Action</th>
                </tr>
              
                <tr>
                  <td>01</td>
                  <td>Scale figure</td>
                  <td><div class='btn-action' ><div class="delete"><a href="#">Delete</a></div><div class="edit edit-cate"><a href="#">Edit</a></div></div></td>
                </tr>
    
                <tr>
                    <td>02</td>
                    <td>Action figure</td>
                    <td><div class='btn-action' ><div class="delete"><a href="#">Delete</a></div><div class="edit edit-cate"><a href="#">Edit</a></div></div></td>
                  </tr>
    
                  <tr>
                    <td>03</td>
                    <td>Chibi figure</td>
                    <td><div class='btn-action' ><div class="delete"><a href="#">Delete</a></div><div class="edit edit-cate"><a href="#">Edit</a></div></div></td>
                  </tr>
                </table>
            </div>
    
            <div class="page-divide">
              <div class="pagination">
              <a href="#">«</a>
              <a href="#">1</a>
              <a class="active" href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#">6</a>
              <a href="#">»</a>
            </div>
            </div>
          </div> 
    </div>
    
    <div class="ListHeight">
        <div class="title">
            <h2>List Sort Height</h2>
          </div>
          <div class="table-product">
            <div class="list-product-all">
              <table class="tblone">
                <tr>
                  <th >Num</th>
                  <th >Height</th>
                  <th >Action</th>
                </tr>
              
                <tr>
                  <td>01</td>
                  <td>0 - 10 cm</td>
                  <td><div class='btn-action' ><div class="delete"><a href="#">Delete</a></div><div class="edit edit-height"><a href="#">Edit</a></div></div></td>
                </tr>
    
                <tr>
                    <td>02</td>
                    <td>10 - 20 cm</td>
                    <td><div class='btn-action' ><div class="delete"><a href="#">Delete</a></div><div class="edit edit-height"><a href="#">Edit</a></div></div></td>
                  </tr>
    
                  <tr>
                    <td>03</td>
                    <td>20 - 30 cm</td>
                    <td><div class='btn-action' ><div class="delete"><a href="#">Delete</a></div><div class="edit edit-height"><a href="#">Edit</a></div></div></td>
                  </tr>
                </table>
            </div>
    
            <div class="page-divide">
              <div class="pagination">
              <a href="#">«</a>
              <a href="#">1</a>
              <a class="active" href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#">6</a>
              <a href="#">»</a>
            </div>
            </div>
          </div>
    
    </div>

    <div class="ListPrice">
        <div class="title">
            <h2>List sort Price</h2>
          </div>
          <div class="table-product">
            <div class="list-product-all">
              <table class="tblone">
                <tr>
                  <th >Num</th>
                  <th >Price</th>
                  <th >Action</th>
                </tr>
              
                <tr>
                  <td>01</td>
                  <td>0 -> 500.000</td>
                  <td><div class='btn-action' ><div class="delete"><a href="#">Delete</a></div><div class="edit edit-price"><a href="#">Edit</a></div></div></td>
                </tr>
    
                <tr>
                    <td>02</td>
                    <td>500.000 -> 1.000.000</td>
                    <td><div class='btn-action' ><div class="delete"><a href="#">Delete</a></div><div class="edit edit-price"><a href="#">Edit</a></div></div></td>
                  </tr>
    
                  <tr>
                    <td>03</td>
                    <td>1.000.000 -> 2.000.000</td>
                    <td><div class='btn-action' ><div class="delete"><a href="#">Delete</a></div><div class="edit edit-price"><a href="#">Edit</a></div></div></td>
                  </tr>
                </table>
            </div>
    
            <div class="page-divide">
              <div class="pagination">
              <a href="#">«</a>
              <a href="#">1</a>
              <a class="active" href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#">6</a>
              <a href="#">»</a>
            </div>
            </div>
          </div>
    
    </div>

    <div id="model-cate">
        <div class="title">
          <h2>Edit category</h2>
        </div>
  
        <div class="box-add-category">
          <div class="form-category">
            <form action="">
              <div class="input-block name">
                <label for="NameCateEdit">Name Category</label>
                <input type="text" name="namecateedit" id="NameCateEdit">
              </div>
              <div class="button-cate">
                <button>edit</button>
              </div>
            </form>
          </div>
        </div>
    </div>

     <div id="model-height">
        <div class="title">
          <h2>Edit Height</h2>
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
                  <button>edit Height</button>
                </div>
              </form>
            </div>
          </div>
    </div>

    <div id="model-price">
        <div class="title">
          <h2>Edit Price</h2>
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
                  <button>edit</button>
                </div>
              </form>
            </div>
          </div>
    </div>
</div>
@stop()