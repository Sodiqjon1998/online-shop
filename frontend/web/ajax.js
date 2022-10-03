$(document).ready(function (){
    $("#shorter").change(function (e){
        e.preventDefault();
        let sum = $(this).val();
        console.log(sum);
        let div = '';
        let div1 = '';

        $.ajax({
            url: "/category/index",
            data: {qiy:sum},
            type: "GET",
            success: function (res){
                var data = res.data;

                data.forEach(item => {
                    div = div + "<div class='col-md-4 col-sm-6'>" +
                        "<div class='single-product'>" +
                            "<div class='pro-img'>" +
                                "<a href='product-page.html'>" +
                                    "<img class='primary-img' src='"+item.img+"' alt='single-product'>"+
                                "</a>" +
                                "<div class='quick-view'>" +
                                    "<a href='#' data-toggle='modal' data-target='#myModal'>" +
                                    "<i class='pe-7s-look'>" + "</i>" +
                                    "quick view" + "</a>" +
                                "</div>" +
                                "<span class='sticker-new'>" +" new "+ "</span>"+
                            "</div>" +
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            "<div class='pro-content text-center'>"+
                                "<h4>" +
                                    "<a href='product-page.html'>"+item.title+ "</a>" +
                                "</h4>"+
                                "<p class='price'>" + "<span>$" +item.price + "</span>" + "</p>"+
                                "<div class='action-links2'>" +
                                    "<a data-toggle='tooltip' title='Add to Cart' href='cart.html'>" + "add to cart" +"</a>" +
                                "</div>"+
                            "</div>"+
                            <!-- Product Content End -->
                        "</div>"+
                        <!-- Single Product End -->
                    "</div>"
                });

                data.forEach(item =>{
                   div1 = div1 + "<div class='main-single-product fix'>" +
                       "<div class='col-sm-4'>" +
                           <!-- Single Product Start -->
                           "<div class='single-product'>" +
                               <!-- Product Image Start -->
                               "<div class='pro-img'>" +
                                   "<a href='product-page.html'>" +
                                       "<img class='primary-img' src='"+item.img+"' alt='single-product'>"+
                                   "</a>" +
                                   "<div class='quick-view'>" +
                                       "<a href='#' data-toggle='modal' data-target='#myModal'>" +
                                            "<i class='pe-7s-look'>"+"</i>"+"quick view"+
                                        "</a>"+
                                   "</div>" +
                                   "<span class='sticker-new'>" + "new " + "</span>" +
                               "</div>"+
                           "</div>"+
                       "</div>"+
                       "<div class='col-sm-8'>"+
                           "<div class='thubnail-desc fix'>"+
                               "<h4 class='product-header'>" +
                                   "<a href='product-page.html'>"+item.title+"</a>" +
                                "</h4>"+
                               "<div class='pro-price mb-15'>"+
                                   "<ul class='pro-price-list'>" +
                                       "<li class='price'>$" + item.price + "</li>" +
                                       "<li class='mtb-50'>" +
                                           "<p>"
                                                + item.content+
                                            "</p>"+
                                       "</li>"+
                                   "</ul>"+
                               "</div>"+
                               "<div class='product-button-actions'>"+
                                   "<button class='add-to-cart' data-toggle='tooltip' title='Add to Cart'>"+
                                        "add to cart"+
                                   "</button>"+
                                   "<a href='wish-list.html' data-toggle='tooltip' title='Add to Wishlist' class='same-btn mr-15'>"+
                                        "<i class='pe-7s-like'>"+"</i>"+
                                    "</a>"+
                                   "<button data-toggle='tooltip' title='Compare this Product' class='same-btn'>"+
                                        "<i class='pe-7s-repeat'>"+"</i>"+
                                    "</button>"+
                               "</div>"+
                           "</div>"+
                       "</div>"+
                   "</div>"
                });
                $(".itemRes2").html(div1);
                $(".itemRes").html(div);
            }
        });
    });







    $("#limit").change(function (e){
        e.preventDefault();
        let sum = $(this).val();
        console.log(sum);
        let div = '';
        let div1 = '';

        $.ajax({
            url: "/category/limit",
            data: {qiy:sum},
            type: "GET",
            success: function (res){
                var data = res.data;

                data.forEach(item => {
                    div = div + "<div class='col-md-4 col-sm-6'>" +
                        "<div class='single-product'>" +
                        "<div class='pro-img'>" +
                        "<a href='product-page.html'>" +
                        "<img class='primary-img' src='"+item.img+"' alt='single-product'>"+
                        "</a>" +
                        "<div class='quick-view'>" +
                        "<a href='#' data-toggle='modal' data-target='#myModal'>" +
                        "<i class='pe-7s-look'>" + "</i>" +
                        "quick view" + "</a>" +
                        "</div>" +
                        "<span class='sticker-new'>" +" new "+ "</span>"+
                        "</div>" +
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        "<div class='pro-content text-center'>"+
                        "<h4>" +
                        "<a href='product-page.html'>"+item.title+ "</a>" +
                        "</h4>"+
                        "<p class='price'>" + "<span>$" +item.price + "</span>" + "</p>"+
                        "<div class='action-links2'>" +
                        "<a data-toggle='tooltip' title='Add to Cart' href='cart.html'>" + "add to cart" +"</a>" +
                        "</div>"+
                        "</div>"+
                        <!-- Product Content End -->
                        "</div>"+
                        <!-- Single Product End -->
                        "</div>"
                });

                $(".itemRes").html(div);

                data.forEach(item =>{
                    div1 = div1 + "<div class='main-single-product fix'>" +
                        "<div class='col-sm-4'>" +
                        <!-- Single Product Start -->
                        "<div class='single-product'>" +
                        <!-- Product Image Start -->
                        "<div class='pro-img'>" +
                        "<a href='product-page.html'>" +
                        "<img class='primary-img' src='"+item.img+"' alt='single-product'>"+
                        "</a>" +
                        "<div class='quick-view'>" +
                        "<a href='#' data-toggle='modal' data-target='#myModal'>" +
                        "<i class='pe-7s-look'>"+"</i>"+"quick view"+
                        "</a>"+
                        "</div>" +
                        "<span class='sticker-new'>" + "new " + "</span>" +
                        "</div>"+
                        "</div>"+
                        "</div>"+
                        "<div class='col-sm-8'>"+
                        "<div class='thubnail-desc fix'>"+
                        "<h4 class='product-header'>" +
                        "<a href='product-page.html'>"+item.title+"</a>" +
                        "</h4>"+
                        "<div class='pro-price mb-15'>"+
                        "<ul class='pro-price-list'>" +
                        "<li class='price'>$" + item.price + "</li>" +
                        "<li class='mtb-50'>" +
                        "<p>"
                        + item.content+
                        "</p>"+
                        "</li>"+
                        "</ul>"+
                        "</div>"+
                        "<div class='product-button-actions'>"+
                        "<button class='add-to-cart' data-toggle='tooltip' title='Add to Cart'>"+
                        "add to cart"+
                        "</button>"+
                        "<a href='wish-list.html' data-toggle='tooltip' title='Add to Wishlist' class='same-btn mr-15'>"+
                        "<i class='pe-7s-like'>"+"</i>"+
                        "</a>"+
                        "<button data-toggle='tooltip' title='Compare this Product' class='same-btn'>"+
                        "<i class='pe-7s-repeat'>"+"</i>"+
                        "</button>"+
                        "</div>"+
                        "</div>"+
                        "</div>"+
                        "</div>"
                });
                $(".itemRes2").html(div1);
            }
        });
    });
});