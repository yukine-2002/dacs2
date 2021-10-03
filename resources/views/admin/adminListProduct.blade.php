@extends('layouts.adminLayout')

@section('adminMain')
<div class="content">
    <div class="title">
        <h2>List product</h2>
    </div>
    <div class="messger" style="width: 100%;text-align:center">
        @if(session('messeger'))
        <p style="color: brown;">{{session('messeger')}}</p>
        @endif
    </div>
    <div class="search-peoduct">
        <form action="#">
            <div class="input-search">
                <input type="search" name="search-product" id="search">
            </div>
            <div class="button-search">
                <button><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
    <div class="table-product">
        <div class="list-product-all">
            <table class="tblone">
                <thead>
                    <tr>
                        <th width='5%'>STT</th>
                        <th width="15%">Name</th>
                        <th width="10%">Image</th>
                        <th width="15%">Price</th>
                        <th width="10%">category</th>
                        <th width="15%">Made in</th>
                        <th width="25%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=1;
                    @endphp
                    @foreach($productList as $productLists)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{ $productLists['name_pro']}}</td>
                        <td><img src="{{asset('layout/Img')}}/{{ $productLists['image']}}" alt="" /></td>
                        <td> {{ number_format(($productLists['price_new'] == null ) ? $productLists['price_old'] : $productLists['price_new'], 0, '', ',')   }} VND</td>
                        @if( $productLists['id_Cate'] === 1)
                        <td>Action figure</td>
                        @endif
                        @if($productLists['id_Cate'] === 2)
                        <td>Chibi Figure</td>
                        @endif
                        @if($productLists['id_Cate'] === 3)
                        <td>Scale figure</td>
                        @endif
                        @if($productLists['id_Cate'] === 4)
                        <td>BB figure</td>
                        @endif
                        <td>{{ $productLists['xuatsu'] }}</td>
                        <td>
                            <div class='btn-action'>
                                <div class="delete btn-delete"><a data-idd="{{ $productLists['id_pro'] }}" href="#">Delete</a></div>
                                <div class="edit btn-edit"><a data-ide="{{ $productLists['id_pro'] }}" href="#">Edit</a></div>
                                <div class="edit btn-img"><a data-idi="{{ $productLists['id_pro'] }}" href="#">Thêm ảnh</a></div>
                            </div>
                        </td>
                    </tr>
                    @php
                    $i++;
                    @endphp
                    @endforeach
                </tbody>

            </table>
        </div>

        <div class="page-divide">
            {!! $productList->appends(request() -> all()) -> render() !!}
        </div>
    </div>

    <div id="model-img">
        <div class="addPRoduct add">
            <div class="title">
                <h2>Image</h2>
            </div>
            <div class="form-add-product">
                <form action="{{route('addactionImg')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="" class="imgId">
                    <div class="inline-block">
                        <div class="image block-input">
                            <label for="image">Image 1</label>
                            <input type="file" name="Editimage1" />
                            <div id="showImg1"></div>
                        </div>
                    </div>
                    <div class="inline-block">
                        <div class="image block-input">
                            <label for="image">Image 2</label>
                            <input type="file" name="Editimage2" />
                            <div id="showImg2"></div>
                        </div>
                    </div>
                    <div class="inline-block">
                        <div class="image block-input">
                            <label for="image">Image 3</label>
                            <input type="file" name="Editimage3" />
                            <div id="showImg3"></div>
                        </div>
                    </div>
                    <div class="submit-product">
                        <button class="add-product">Lưu</button>
                    </div>
                </form>
                <div class="submit-product">
                    <button class="Thoat">Thoát</button>
                </div>
            </div>
        </div>
    </div>

    <div id="model">
        <div class="addPRoduct add">
            <div class="title">
                <h2>Edit product</h2>
            </div>
            <div class="form-add-product">
                <form action="{{route('updateProduct')}}" name="Edit-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="EditID">
                    <div class="inline-block">
                        <div class="Name block-input">
                            <label for="Name">Name</label>
                            <input type="text" name="EditName" id="Name" />
                        </div>
                        <div class="price block-input">
                            <label for="price">Price Old</label>
                            <input type="text" name="priceOld" id="priceOld" required />
                        </div>
                        <div class="price block-input">
                            <label for="price">Price new</label>
                            <input type="text" name="priceNew" id="priceNew" required />
                        </div>
                    </div>
                    <div class="inline-block">
                        <div class="image block-input">
                            <label for="image">Image</label>
                            <input type="file" name="Editimage" id="images" />
                            <div id="showImg"></div>
                        </div>
                        <div class="category block-input">
                            <label for="category">Category</label>
                            <select name="Editcategory" id="category">
                                @foreach($category as $categorys)
                                <option value="{{$categorys['id_cate']}}">{{$categorys['name_cate']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="inline-block">
                        <div class="size block-input">
                            <label for="size">Size</label>
                            <input type="text" name="Editsize" id="size" required />
                        </div>
                        <div class="madein block-input">
                            <label for="madein">Số lượng</label>
                            <input type="text" name="Soluong" id="soluong" required />
                        </div>
                        <div class="madein block-input">
                            <label for="madein">Made in</label>
                            <input type="text" name="Editmadein" id="madein" />
                        </div>
                    </div>
                    <div class="description">
                        <label for="editor">description</label>
                        <textarea id="editor" cols="50" rows="50" name="EditDescription"></textarea>
                    </div>
                    <div class="submit-product">
                        <button class="add-product">Lưu</button>
                    </div>
                </form>
                <div class="submit-product">
                    <button class="Thoat">Thoát</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    function image(tag, data) {
        var img = document.createElement("IMG");
        img.height = 100;
        img.width = 100;
        img.src = `{{asset('layout/Img')}}/${data}`;
        $(tag).html(img);
    }
    $('body').on('click', '.btn-img', function() {
        $('#model-img').addClass('showModel');
        var ids = $(this).children().data('idi');
        $('.imgId').val(ids);
        $.ajax({
            url: "{{route('addProductImg')}}",
            type: "get",
            data: {
                'id': ids,
            }
        }).done(function(data) {

            image('#showImg1', data.img1)
            image('#showImg2', data.img2)
            image('#showImg3', data.img3)
        })
    })

    $("#search").on("keyup", function() {
        var value = $(this).val();
        $.ajax({
            type: "get",
            url: '{{ route("searchProduct") }}',
            data: {
                search: value,
            },
            success: function(data) {
                var html = "";
                data.map((key, index) => {
                    html += "<tr>";
                    html += "<td>";
                    html += index + 1;
                    html += "</td>";
                    html += "<td>";
                    html += key.name_pro;
                    html += "</td>";
                    html += "<td>";
                    html += `<img src="{{asset("layout/Img")}}/${key.image}">`;
                    html += "</td>";
                    html += "<td>";
                    html += key.price_new === null ? key.price_old : key.price_new;
                    html += "</td>";
                    html += "<td>";
                    html +=
                        key.id_Cate === 1 ?
                        "Action figure" :
                        key.id_Cate === 2 ?
                        "Chibi Figure" :
                        key.id_Cate === 3 ?
                        "Scale figure" :
                        "BB figure";
                    html += "</td>";
                    html += "<td>";
                    html += key.xuatsu;
                    html += "</td>";
                    html += "<td>";
                    html += `<div class='btn-action'>
                                      <div class="delete btn-delete"><a data-idd="${key.id_pro}" href="#">Delete</a></div>
                                      <div class="edit btn-edit"><a data-ide="${key.id_pro}" href="#">Edit</a></div>
                                  </div>`;
                    html += "</td>";
                    html += "<tr>";
                });
                $("tbody").html(html);
            },
        });
    });
    $("body").on("click", "table .btn-edit", function() {
        var ide = $(this).children().data("ide");
        console.log(1);
        $("#model").addClass("showModel");
        $("#EditID").val(ide);
        $.ajax({
            url: "{{route('showInf')}}",
            type: "get",
            data: {
                id: ide,
            },
        }).done(function(data) {
            console.log(data);
            $("#Name").val(data.name_pro);
            $("#priceOld").val(data.price_old);
            $("#priceNew").val(data.price_new);
            $("#size").val(data.chieucao);
            $("#soluong").val(data.soluong);
            $("#madein").val(data.xuatsu);
            $("#category").val(data.id_Cate);
            CKEDITOR.instances["editor"].setData(data.mieuta);
            image("#showImg", data.image);
        });
    });
    $("body").on("click", "table .btn-delete", function() {
        var idd = $(this).children().data("idd");
        var that = this;
        $.ajax({
            url: "{{route('deleteProduct')}}",
            type: "get",
            data: {
                id: idd,
            },
        }).done(function(data) {
            console.log(data);
            $(that).parent().parent().parent().remove();
        });
    });
    $("body").on("click", ".Thoat", function() {
        $("#model, #model-img").removeClass("showModel");
    });
</script>
<script>
    CKEDITOR.replace("editor", {
        filebrowserUploadUrl: "{{asset('layout/ckeditor/ck_upload.php')}}",
        filebrowserUploadMethod: "form",
    });
</script>
@stop()