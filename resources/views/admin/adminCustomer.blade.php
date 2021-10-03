@extends('layouts.adminLayout')

@section('adminMain')
<div class="content">
<div class="title">
        <h2>List Customer</h2>
      </div>
      <div class="search-peoduct">
        <form action="#">
          <div class="input-search">
            <input type="search" name="search-product" id="search-product">
          </div>
          <div class="button-search">
            <button><i class="fas fa-search"></i></button>
          </div>
        </form>
      </div>
      <div class="table-product">
        <div class="list-product-all">
          <table class="tblone">
            <tr>
              <th width='5%'>STT</th>
              <th width="15%">Name</th>
              <th width="10%">Ngày sinh</th>
              <th width="20%">Địa chỉ</th>
              <th width="10%">SDT</th>
              <th width="10%">CMND</th>
              <th width="15%">Action</th>
            </tr>
            <tbody class="showinfo">
                 @php 
              $i=1;
            @endphp
            @foreach($customer as $customers)
            <tr>
              <td>{{$i}}</td>
              <td>{{ $customers['fullname']}}</td>
              <td>{{ $customers['dates']}}</td>
              <td>{{ $customers['adress']}}</td>
              <td>0{{ $customers['sdt']}}</td>
              <td>{{ $customers['cmnd']}}</td>
              <td><div class='btn-action' ><div class="delete-use delete" data-idd="{{ $customers['id_per']}}" ><a href="#">Delete</a></div><div  class="edit btn-info" data-ide="{{ $customers['id_per']}}"><a  href="#">Account</a></div></div></td>
            </tr>
            @php 
              $i++;
            @endphp
          @endforeach

            </tbody>
         
            </table>
        </div>
        <div class="page-divide">
          {!! $customer->appends(request() -> all()) -> render() !!}
        </div>
      </div>
      <div id="model-customer">
              <div class="addPRoduct add">
                <div class="title">
                  <h2>Info customer</h2>
                </div>
                <div class="form-add-product" style="color: black;">
                    <div class="list-product-all">
                        <table class="tblone">
                          <tr>
                            <th width="15%">Username</th>
                            <th width="10%">Provider</th>
                            <th width="10%">QQ</th>
                            <th width="20%">Number order</th>
                          </tr>
                          <tbody class="showIf">

                          </tbody>
                        
                          </table>
                      </div>
                </div>
        </div>
    </div>
</div>

<script>
  $('body').on('click','.btn-info',function(){
    var id = $(this).data('ide');
    $('#model-customer').addClass('showModel');
    $.ajax({
      url:"{{route('adminCustomergetInf')}}",
      method:'get',
      data:{
        'id':id
      }
    }).done(function(data){
      
      var html = '';
      html +='<tr>';
      html +='<td>';
      html += data.info.username;
      html += '</td>';
      html +='<td>';
      html += data.info.provider;
      html += '</td>';
      html +='<td>';
      html += data.info.quyen === 1 ? 'nomal' : 'amin';
      html += '</td>';
      html +='<td>';
      html += data.total;
      html += '</td>';
      html +='</tr>';
    $('.showIf').html(html)

    })
  })

  $('#search-product').on('keyup',function(){
    var value = $(this).val();
    $.ajax({
      url:"{{route('adminCustomersearchInf')}}",
      method:'get',
      data:{
        'search':value
      }
    }).done(function(data){
      console.log(data)
      var html = '';
      data.map(function(value,index){
        html +='<tr>';
        html +='<td>';
        html += index;
        html += '</td>';
        html +='<td>';
        html += value.fullname;
        html += '</td>';
        html +='<td>';
        html += value.dates;
        html += '</td>';
        html +='<td>';
        html += value.adress;
        html += '</td>';
        html +='<td>';
        html += value.sdt;
        html += '</td>';
        html +='<td>';
        html += value.cmnd;
        html += '</td>';
        html +='<td>';
        html += `<div class='btn-action' ><div class="delete" data-idd="${value.id_per}" ><a href="#">Delete</a></div><div  class="edit btn-info" data-ide="${value.id_per}"><a  href="#">Account</a></div></div>`;
        html += '</td>';
        html +='</tr>';
      })
    $('.showinfo').html(html);
    })
  })
  $('body').on('click','.delete-use',function(){
    var id = $(this).data('idd');
    var that = this;

    $.ajax({
      url:"{{route('adminCustomerdestroy')}}",
      method:'get',
      data:{
        'id':id
      }
    }).done(function(data){
      $(that).parent().parent().parent().remove();
    })
  })
</script>
@stop()