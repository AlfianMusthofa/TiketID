$(document).ready(function () {
  $('.btn-domestik').on('click', function () {
    $('.btn-domestik').removeClass('.active');
    $('.btn-domestik').css('backgroundColor', 'transparent');
    $('.btn-domestik').css('color', '#303135');
    $('.btn-domestik').css('border', '1px solid #bfbfbf');
    $(this).addClass('.active');
    $(this).css('backgroundColor', '#cce6ff');
    $(this).css('color', '#007bff');
    $(this).css('border', '1px solid #007bff');

    const cate = $(this).html();

    $.getJSON('json/destinasi.json', function (data) {
      let content = '';
      $.each(data, function (j, data) {
        if (cate == data.cate) {
          content += `<img src="img/destinasi/${data.img}" alt="">`
        }
      })
      $('.domestik #row').html(content);
    })
  })
  $('.btn-domestik:first').trigger('click');
})

$(document).ready(function () {
  fetch('json/fetch.php')
    .then(response => response.json())
    .then(data => {
      const row1 = data.row1;
      let content = '';
      $.each(row1, function (index, item) {

        const id = item.id;
        const cardImage = item.cardImage;
        const cardTitle = item.cardTitle;
        const cardDate = item.cardDate;
        const cardAirlinesImage = item.cardAirlinesImage;
        const cardAirlinesName = item.cardAirlinesName;
        const cardPrice = item.cardPrice;

        content += `<a href="#?id=${id}">
                <div class="card">
                    <img src="img/tempat1/${cardImage}" alt="">
                    <div class="caption">
                        <h4 class="card-title">${cardTitle}</h4>
                        <div class="sub-caption">
                            <p class="date">${cardDate}</p>
                            <div class="airlines">
                                <img src="img/tempat1/${cardAirlinesImage}" alt="">
                                <p class="airlines-name">${cardAirlinesName}</p>
                            </div>
                            <p class="kelas">Bisnis</p>
                        </div>
                        <div class="price">
                            <p>Mulai dari</p>
                            <h3>${cardPrice}</h3>
                        </div>
                    </div>
                    <div class="banner">
                        <p>Inter Deals</p>
                    </div>
                </div>
            </a>`
      })
      $('#inter').html(content);
    })
})

// $(document).ready(function () {
//     $('.btn-container2').on('click', function () {
//         $('.btn-container2').removeClass('.active');
//         $('.btn-container2').css('backgroundColor', 'transparent');
//         $('.btn-container2').css('color', '#303135');
//         $('.btn-container2').css('border', '1px solid #bfbfbf');
//         $(this).addClass('.active');
//         $(this).css('backgroundColor', '#cce6ff');
//         $(this).css('color', '#007bff');
//         $(this).css('border', '1px solid #007bff');

//         let cityname = $(this).html();
//         let content = '';

//         fetch('json/fetch.php')
//             .then(response => response.json())
//             .then(data => {
//                 const row2 = data.row2;

//                 $.each(row2, function (index, item) {

//                     const id = item.id;
//                     const img = item.img;
//                     const name = item.name;
//                     const address = item.address;
//                     const lp = item.lp;
//                     const np = item.np;
//                     const cityName = item.cityName;

//                     if (cityname == cityName) {
//                         content += `<a href="<?= BASEURL ?>/home/detail/<?= $data['id'] ?>">
//                             <div class="card">
//                                 <img src="img/container2/${img}" alt="">
//                                 <div class="caption">
//                                     <h3 class="card-title">${name}</h3>
//                                     <div class="sub-caption">
//                                         <div class="rating">
//                                             <div class="star">
//                                                 <i class="fa-solid fa-star"></i>
//                                                 <i class="fa-solid fa-star"></i>
//                                                 <i class="fa-solid fa-star"></i>
//                                                 <i class="fa-solid fa-star"></i>
//                                             </div>
//                                             <div class="address">
//                                                 <p>${address}</p>
//                                             </div>
//                                         </div>
//                                         <div class="review">
//                                             <div class="logo">
//                                                 <i class="fa-solid fa-award"></i>
//                                             </div>
//                                             <div class="sub-review">
//                                                 <p>3/5 (1200 review)</p>
//                                             </div>
//                                         </div>
//                                         <div class="price">
//                                             <p>${lp}</p>
//                                             <h3>${np}</h3>
//                                         </div>
//                                     </div>
//                                 </div>
//                             </div>
//                         </a>`
//                     }
//                 })
//                 $('#container2').html(content);
//             })

//             .catch(error => {
//                 console.error('Terjadi kesalahan:', error)
//             })
//     })

//     $('.btn-container2:first').trigger('click');
// })

$(document).ready(function () {
  $('.btn-container3').on('click', function () {
    $('.btn-container3').removeClass('.active');
    $('.btn-container3').css('background', 'transparent');
    $('.btn-container3').css('border', '1px solid #bfbfbf');
    $('.btn-container3').css('color', '#303135');
    $(this).addClass('.active');
    $(this).css('background', '#cce6ff');
    $(this).css('color', '#007bff');
    $(this).css('border', '1px solid #007bff');

    let cityname = $(this).html();
    let content = '';

    fetch('json/fetch.php')
      .then(response => response.json())
      .then(data => {
        const row3 = data.row3;

        $.each(row3, function (index, item) {
          const id = item.id;
          const img = item.img;
          const name = item.name;
          const address = item.address;
          const lp = item.lp;
          const np = item.np;
          const cityName = item.cityName;

          if (cityname == cityName) {
            content += `<a href="#?id=${id}">
                            <div class="card">
                                <img src="img/container3/${img}" alt="">
                                <div class="caption">
                                    <h3 class="card-title">${name}</h3>
                                    <div class="sub-caption">
                                        <div class="rating">
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="address">
                                                <p>${address}</p>
                                            </div>
                                        </div>
                                        <div class="review">
                                            <div class="logo">
                                                <i class="fa-solid fa-award"></i>
                                            </div>
                                            <div class="sub-review">
                                                <p>3/5 (1200 review)</p>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <p>${lp}</p>
                                            <h3>${np}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>`
          }
        })
        $('#container3').html(content);
      })

  })
  $('.btn-container3:first').trigger('click');
})

$(document).ready(function () {
  $('.button-panduan').on('click', function () {
    $('.button-panduan').removeClass('.active');
    $('.button-panduan').css('backgroundColor', 'transparent');
    $('.button-panduan').css('color', '#303135');
    $('.button-panduan').css('border', '1px solid #bfbfbf');
    $(this).addClass('.active');
    $(this).css('backgroundColor', '#cce6ff');
    $(this).css('color', '#007bff');
    $(this).css('border', '1px solid #007bff');

    let c = $(this).html();

    $.getJSON('json/infoPanduan.json', function (data) {
      let content = '';
      $.each(data, function (j, data) {
        if (data.cat == c) {
          content += `<img src="img/infoPanduan/${data.image}" alt="">`;
        }
      })
      $('.panduan .row').html(content);
    });
  })
  $('.button-panduan:first').trigger('click');
})

$(document).ready(function () {
  fetch('json/fetch.php')
    .then(response => response.json())
    .then(data => {
      const row4 = data.row4;

      let content = '';
      $.each(row4, function (index, item) {
        const id = item.id;
        const date = item.date;
        const img = item.img;
        const name = item.name;
        const address = item.address;
        const price = item.price;
        content += `<a href="#?id=${id}">
                <div class="card">
                <img src="img/container4/${img}" alt="">
                    <div class="caption">
                        <div class="date">
                            <p>${date}</p>
                        </div>
                        <div class="event-name">
                            <h4>${name}</h4>
                        </div>
                        <div class="address">
                            <p>${address}</p>
                        </div>
                        <div class="price">
                            <h3>${price}</h3>
                        </div>
                    </div>
                </div>
            </a>`
      })
      $('.konser .row').html(content);
    })
})

function changePlaceholder() {
  const inputElement = document.querySelector('#searchInput');
  const placeholders = ["Staycation di Bandung", "Tur ke Bali", "Event di Jakarta"];
  let counter = 0;

  setInterval(() => {
    inputElement.placeholder = placeholders[counter];
    counter = (counter + 1) % placeholders.length;
  }, 1500)
}
changePlaceholder();


// Layer 2 ToDo
$(document).ready(function () {
  $.getJSON('json/todo1.json', function (data) {
    $.each(data, function (i, data) {
      $('#todo1').append(`<div class="box">
            <a href="${data.id}">
                <img src="img/todo/${data.img}" alt="">
                <div class="caption">
                    <h4 class="title">${data.title}</h4>
                    <div class="address">
                        <p>${data.address}</p>
                    </div>
                    <div class="review">
                        <p>4/5 (1.200 review)</p>
                    </div>
                    <div class="price">
                        <h4>${data.price}</h4>
                    </div>
                </div>
            </a>
        </div>`)
    });
  })
})