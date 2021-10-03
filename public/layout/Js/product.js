function resize() {
  if (window.innerWidth < 1000) {
    console.log("<1000");
  }
  // console.log("height: ", window.innerHeight, "px");
  // console.log("width: ", window.innerWidth, "px");
}
window.onresize = resize;
if (window.innerWidth < 1000) {
  document.querySelector(".sort-price").addEventListener("click", () => {
    document.querySelector(".list-sort-price").classList.toggle("class-vip");
    console.log(1);
  });
  document.querySelector(".sort-kind").addEventListener("click", () => {
    document.querySelector(".list-sort-kind").classList.toggle("class-vip");
    console.log(1);
  });
  document.querySelector(".sort-size").addEventListener("click", () => {
    document.querySelector(".list-sort-size").classList.toggle("class-vip");
    console.log(1);
  });
}

// $('.sortSizes').unbind('click').on('click', function() {
//   $('.sortSizes').removeClass('activePr');
//   $(this).toggleClass('activePr');
//   var sizes = $(this).data('size');
//   const re = /\s*(?:;|$)\s*/;
//   var sizeArr = sizes.split(re);
//   sortSizes(sizeArr);
// })

// function sortSizes(sort) {
//   $.ajax({
//     type: "GET",
//     url: 'sortSizes?sizeStart=' + sort[0] + '&sizeEnd=' + sort[1]
//   }).done(function(data) {
//     $('.product-box-container').html(data);
//   }).fail(function(jqXHR, textStatus, errorThrown) {
//     console.log(textStatus + ': ' + errorThrown);
//   })
// }

// $('.sortKinds').unbind('click').on('click', function() {
//   $('.sortKinds').removeClass('activePr');
//   $(this).toggleClass('activePr');
//   var sortKind = $(this).data('kinds');
//   sortKinds(sortKind);
// })

// function sortKinds(sort) {
//   $.ajax({
//     type: "GET",
//     url: 'sortKinds?kind=' + sort

//   }).done(function(data) {
//     $('.product-box-container').html(data);
//   }).fail(function(jqXHR, textStatus, errorThrown) {
//     console.log(textStatus + ': ' + errorThrown);
//   })
// }

// $('.sortPr').unbind('click').on('click', function() {
  
//   $('.sortPr').removeClass('activePr');
//   $(this).toggleClass('activePr');
//   var sort = $(this).data('sort');
//   sorts(sort);
// })

// function sorts(sort) {
//   $.ajax({
//     type: "GET",
//     url: 'sorts?sort=' + sort
//   }).done(function(data) {
//     $('.product-box-container').html(data);
//   }).fail(function(jqXHR, textStatus, errorThrown) {
//     console.log(textStatus + ': ' + errorThrown);
//   })
// }

// $('.checkPrice').unbind('click').on('click', function() {
//   $('.checkPrice').removeClass('activePr');
//   $(this).toggleClass('activePr');
//   var price = $(this).data('price');
//   const re = /\s*(?:;|$)\s*/;
//   var data = price.split(re);
//   var url = 'CheckPrice?priceStart=' + data[0] + '&priceEnd=' + data[1];
//   $.ajax({
//     type: "GET",
//     url: url
//   }).done(
//     function(data) {
//       $('.product-box-container').html(data);
//     }
//   ).fail(function(jqXHR, textStatus, errorThrown) {
//     console.log(textStatus + ': ' + errorThrown);
//   })
// });

