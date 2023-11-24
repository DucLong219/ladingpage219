<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" href="./asset/css/bootstrap.min.css">
<link rel="stylesheet" href="./asset/css/stylelading.css">
<link rel="stylesheet" href="./asset/css/stylemobile.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<body>
    <header class="row m-0 p-0">
        <div class="col-xl-6 col-md-12 col-lg-6" id="header_left">
            <div class="logo-food ">
                <img class="img-logo-food" src="./asset/img/logo-khoaikhau-food.png" alt="logo-khoaikhau-food">
            </div>
            <div class="logo-pr-food mt-2 pt-5">
                <img class="img-pr-food" src="./asset/img/pr-food.png" alt="pr-food">
            </div>
            <div class="mt-5">
                <button class="order-food scrollButton">Đặt hàng</button>
            </div>
        </div>
        <div class="col-xl-6 col-md-12 col-lg-6 m-0 p-0" id="header_right">
            <div class="logo-crab float-end">
                <img class="img-logo-crab" src="./asset/img/logo-crab.png" alt="logo-crab">
            </div>
        </div>
        <div class="pr-food-mobile col-md-12 m-0 p-0" id="pr_food_mobile">
            <img class="img-pr-food-mobile" src="./asset/img/pr-food-mobile.png" alt="pr-food">
        </div>
        <div class="my-5">
            <button class="w-100 scrollButton order-food-mobile btn-order-food">Đặt hàng</button>
        </div>
    </header>
    <div class="bg-section" id="section_1">
        <div class="container main-container py-5">
            <div class="des-food d-flex flex-column align-items-center">
                <div class="fresh-crab-mobile d-none">
                    <img class="img-fresh-crab" src="./asset/img/fresh-crab-24h.png" alt="fresh-crab">
                </div>
                <div class="title-des color-vtp">
                    <h3><span class="fw-bolder">Cua Cà Mau nổi tiếng với những thớ thịt săn chắc, hương vị thơm ngon hòa quyện với vị ngọt thanh tự nhiên</span></h3>
                </div>
                <div class="txt-des mt-3">
                    <p class="fs-16">
                        Cua Cà Mau phù hợp để chế biến thành nhiều món ăn ngon, hấp dẫn cho gia đình và người thân yêu, chứa hàm lượng dinh dưỡng cao, tốt cho sức khỏe. Cua được nhập trực tiếp từ vựa uy tín, đảm bảo nguồn gốc và chất lượng, kết hợp dịch vụ giao hàng tận nhà nhanh chóng để gia đình bạn tận hưởng món Cua tươi sống và đúng vị.
                    </p>
                </div>
            </div>
            <div class="fresh-crab mt-5">
                <img class="img-fresh-crab" src="./asset/img/fresh-crab-24h.png" alt="fresh-crab">
            </div>
            <div class="slide-crab-fresh">
                <div class="slider-container slideshow mt-5">
                    <h3 class="text-center my-5"><span class="title-food">CUA SỐNG</span></h3>
                    <div class="slides1">
                        <img class="img-slide" src="./asset/img/fresh-crab-1.png" alt="crab-1">
                        <img class="img-slide" src="./asset/img/fresh-crab-2.png" alt="crab-1">
                        <img class="img-slide" src="./asset/img/fresh-crab-3.png" alt="crab-1">
                        <img class="img-slide" src="./asset/img/fresh-crab-4.png" alt="crab-1">
                        <img class="img-slide" src="./asset/img/fresh-crab-5.png" alt="crab-1">
                        <img class="img-slide" src="./asset/img/fresh-crab-6.png" alt="crab-1">
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-bg" id="section_2">
        <div class="container container-bg ">
            <div class="slide-crab-food mt-5">
                <div class="slideshow mt-5">
                    <h3 class="text-center my-5"><span class="title-food">MÓN ĂN TỪ CUA</span></h3>
                    <div class="slides2">
                        <img class="img-slide" src="./asset/img/crab-food-1.png" alt="crab-1">
                        <img class="img-slide" src="./asset/img/crab-food-2.png" alt="crab-1">
                        <img class="img-slide" src="./asset/img/crab-food-3.png" alt="crab-1">
                        <img class="img-slide" src="./asset/img/crab-food-4.png" alt="crab-1">
                        <img class="img-slide" src="./asset/img/crab-food-5.png" alt="crab-1">
                    </div>
                </div>

            </div>
            <div class="w-100 my-5 d-flex flex-column align-items-center">
                <div class="title-des-2">
                    <h3><span>Viettel Post cam kết hàng chuẩn từ các Vựa hải sản uy tín nhất khu vực Nam Căn, Ngọc Hiển. Mang hương vị biển cả từ vựa tới bàn ăn mọi gia đình Việt!</span></h3>
                </div>
            </div>
            <div class="form-order" id="form_order">
                <form action="">
                    <h3 class="text-center my-5"><span class="title-food">Đặt hàng ngay</span></h3>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Họ và tên" require>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Số điện thoại" require>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4">
                            <input type="text" class="form-control" name="city" id="city" placeholder="Tỉnh/Thành phố">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" name="district" id="district" placeholder="Quận/huyện">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" name="wards" id="wards" placeholder="Phường/xã">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <input type="text" class="form-control" name="address" id="address" placeholder="Địa chỉ nhận hàng (Số nhà/Đường/Thôn...)">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <input type="text" class="form-control" name="typeCrab" id="address" placeholder="Loại cua">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="countOrder" id="countOrder" placeholder="Số lượng">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <input type="text" class="form-control" name="referralCode" id="referralCode" placeholder="Mã giới thiệu">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <textarea maxlength="200" class="form-control" name="noteOrder" id="noteOrder" rows="4" cols="37" placeholder="Ghi chú đơn hàng"></textarea>
                        </div>
                    </div>
                    <div class="price-form py-4 mt-5 d-flex justify-content-between">
                        <div class="fs-4">Thành tiền</div>
                        <div class="fw-bolder fs-6"><span class="fs-2 color-vtp">0</span>đ</div>
                    </div>
                    <div class="my-5 d-flex flex-column align-items-center">
                        <button class="w-75 btn-order-food" type="submit">Đặt hàng</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
            <div class="txt-ft phone-khoaikhau">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path d="M16.0531 0C24.8321 0 32.0097 7.23538 32.0001 16.0723C32.0001 24.8417 24.7549 32.0096 15.9084 32C7.14864 32 -0.00963755 24.7453 9.73989e-06 15.8891C9.73989e-06 7.17756 7.25476 0 16.0531 0ZM21.6389 25.0154C22.6904 25.0539 22.8834 24.9478 24.2147 23.5876C25.5557 22.2273 25.054 20.2015 23.2403 19.6034C22.7001 19.4297 22.1405 19.3429 21.6099 19.1403C20.3461 18.6676 19.3139 18.9376 18.407 19.9409C18.2334 20.1338 17.751 20.2399 17.5002 20.1531C14.8375 19.2462 13.0238 17.4326 11.9337 14.8471C11.6829 14.2489 11.7118 13.8148 12.2424 13.371C13.0431 12.6957 13.2747 11.8082 12.9756 10.7953C12.773 10.1103 12.609 9.40615 12.3871 8.72119C11.9337 7.33198 10.4287 6.63732 9.17456 7.21616C7.70818 7.89147 6.84957 9.41569 7.04252 11.0268C7.06181 11.1811 7.08111 11.3355 7.1004 11.4898C7.88183 18.9858 14.1043 24.7742 21.6389 25.0154Z" fill="white" />
                    <path d="M21.6389 25.0154C14.1044 24.7742 7.8722 18.9762 7.10041 11.4899C7.08112 11.3355 7.06182 11.1812 7.04253 11.0268C6.84958 9.41572 7.70819 7.89149 9.17457 7.21618C10.4287 6.63734 11.9337 7.332 12.3871 8.72121C12.609 9.40617 12.773 10.1103 12.9756 10.7953C13.2747 11.8179 13.0432 12.7054 12.2424 13.371C11.7118 13.8148 11.6829 14.249 11.9337 14.8471C13.0142 17.4326 14.8279 19.2463 17.5002 20.1531C17.7607 20.2399 18.2334 20.1338 18.407 19.9409C19.3139 18.9376 20.3462 18.6676 21.6099 19.1403C22.1405 19.3333 22.7001 19.4297 23.2403 19.6034C25.054 20.1919 25.5557 22.2273 24.2147 23.5876C22.8834 24.9382 22.6904 25.0443 21.6389 25.0154Z" fill="#E61C37" />
                </svg> &nbsp; 0972666368
            </div>
            <div class="txt-ft website-khoaikhau">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path d="M16.0531 0C24.8322 0 32.0098 7.23538 32.0001 16.0723C32.0001 24.8417 24.7549 32.0096 15.9084 32C7.14864 32 -0.00963755 24.7453 9.73989e-06 15.8891C9.73989e-06 7.17756 7.25479 0 16.0531 0ZM21.6389 25.0154C22.6904 25.0539 22.8834 24.9478 24.2147 23.5876C25.5557 22.2273 25.0541 20.2015 23.2404 19.6034C22.7001 19.4297 22.1406 19.3429 21.61 19.1403C20.3462 18.6676 19.3139 18.9376 18.4071 19.9409C18.2334 20.1338 17.751 20.2399 17.5002 20.1531C14.8376 19.2462 13.0238 17.4326 11.9337 14.8471C11.6829 14.2489 11.7118 13.8148 12.2424 13.371C13.0431 12.6957 13.2747 11.8082 12.9756 10.7953C12.773 10.1103 12.609 9.40615 12.3872 8.72119C11.9337 7.33198 10.4287 6.63732 9.17459 7.21616C7.70821 7.89147 6.84963 9.41569 7.04258 11.0268C7.06187 11.1811 7.08117 11.3355 7.10046 11.4898C7.88189 18.9858 14.1043 24.7742 21.6389 25.0154Z" fill="white" />
                    <path d="M21.6388 25.0154C14.1043 24.7742 7.8722 18.9762 7.10041 11.4899C7.08112 11.3355 7.06183 11.1812 7.04253 11.0268C6.84959 9.41572 7.70816 7.89149 9.17454 7.21618C10.4287 6.63734 11.9337 7.332 12.3871 8.72121C12.609 9.40617 12.773 10.1103 12.9756 10.7953C13.2746 11.8179 13.0431 12.7054 12.2424 13.371C11.7118 13.8148 11.6828 14.249 11.9337 14.8471C13.0142 17.4326 14.8279 19.2463 17.5002 20.1531C17.7606 20.2399 18.2334 20.1338 18.407 19.9409C19.3139 18.9376 20.3461 18.6676 21.6099 19.1403C22.1405 19.3333 22.7001 19.4297 23.2403 19.6034C25.054 20.1919 25.5557 22.2273 24.2147 23.5876C22.8834 24.9382 22.6904 25.0443 21.6388 25.0154Z" fill="white" />
                    <path d="M16.1496 27.4756C9.95599 27.5238 4.86226 22.4301 4.9105 16.1786C4.95873 9.89826 9.95604 5.26747 15.5322 4.99735C22.3721 4.67899 27.4755 10.1587 27.408 16.3522C27.3405 22.4204 22.3817 27.5045 16.1592 27.4659L16.1496 27.4756ZM16.1303 18.5036C16.931 18.5036 17.7317 18.5036 18.5325 18.5036C18.6868 18.5036 18.764 18.4457 18.793 18.301C18.8026 18.2528 18.8219 18.195 18.8219 18.1467C18.928 17.2688 18.9859 16.4006 18.9184 15.513C18.8894 15.0886 18.8508 14.664 18.8026 14.2492C18.7736 14.008 18.7254 13.9887 18.4842 13.9887C16.9503 13.9887 15.4067 13.9887 13.8728 13.9887C13.5255 13.9887 13.5062 13.9886 13.458 14.3359C13.3422 15.2909 13.2844 16.2366 13.3712 17.2013C13.4001 17.5486 13.4387 17.9054 13.4773 18.2527C13.4966 18.436 13.5834 18.5132 13.786 18.5132C14.5674 18.5036 15.3392 18.5132 16.1206 18.5132L16.1303 18.5036ZM9.30966 18.5036C9.55084 18.5036 9.79201 18.5036 10.0235 18.5036C10.3516 18.5036 10.6796 18.5036 11.0076 18.5036C11.2005 18.5036 11.2488 18.436 11.2295 18.2624C11.1909 17.8186 11.1233 17.3749 11.1137 16.9215C11.0944 16.0243 11.0462 15.1174 11.2295 14.2202C11.2584 14.0755 11.2005 14.0176 11.0751 13.9983C11.0076 13.9983 10.9304 13.9983 10.8629 13.9983C9.82095 13.9983 8.7694 13.9983 7.72749 13.9983C7.45736 13.9983 7.39948 14.1238 7.36089 14.2975C7.31265 14.5483 7.23546 14.7989 7.22581 15.0594C7.20652 15.8119 7.19692 16.5645 7.21621 17.317C7.21621 17.616 7.30301 17.915 7.37054 18.2141C7.42843 18.4746 7.5249 18.5229 7.73715 18.5132C8.26775 18.5036 8.78871 18.5132 9.31932 18.5132L9.30966 18.5036ZM22.9702 13.9983C22.8737 13.9983 22.7773 13.9983 22.6808 13.9983C22.2177 13.9983 21.7643 13.9983 21.3012 13.9983C21.0697 13.9983 21.0311 14.0563 21.0697 14.2782C21.1083 14.4807 21.1469 14.6929 21.1565 14.8955C21.1854 16.0242 21.2626 17.1529 21.0601 18.272C21.0408 18.3974 21.0986 18.4649 21.2144 18.4842C21.2819 18.4939 21.3591 18.4842 21.4267 18.4842C22.4686 18.4842 23.5105 18.4842 24.5524 18.4842C24.7936 18.4842 24.89 18.4169 24.9383 18.1854C24.9865 17.9249 25.054 17.674 25.0733 17.4135C25.1794 16.3523 25.1602 15.3007 24.9383 14.2588C24.89 14.0466 24.8032 13.979 24.5909 13.979C24.0507 13.979 23.5105 13.979 22.9799 13.979L22.9702 13.9983ZM16.1496 7.31284C16.0145 7.50579 15.8987 7.64084 15.8119 7.78555C15.5032 8.3258 15.2042 8.86598 14.9147 9.40623C14.5578 10.0912 14.278 10.805 14.0658 11.5382C14.0175 11.7215 14.0368 11.7601 14.2201 11.7601C15.5032 11.7601 16.7959 11.7601 18.079 11.7601C18.2623 11.7601 18.2816 11.7119 18.2237 11.5382C18.1273 11.2488 18.0308 10.9498 17.9247 10.6604C17.7703 10.2745 17.6256 9.87881 17.4423 9.51221C17.1915 9.01056 16.9117 8.51874 16.6319 8.02673C16.4969 7.79519 16.3329 7.57331 16.1592 7.30318L16.1496 7.31284ZM16.1496 25.1891C16.2557 25.0251 16.3329 24.9094 16.4004 24.7936C16.6126 24.4463 16.8538 24.1086 17.0371 23.7516C17.3073 23.221 17.5484 22.6712 17.7896 22.1213C17.944 21.7643 18.0694 21.3882 18.1948 21.0216C18.2817 20.7708 18.243 20.7321 17.9729 20.7321C16.7573 20.7321 15.5322 20.7321 14.3166 20.7321C14.2684 20.7321 14.2105 20.7225 14.1815 20.7418C14.1333 20.7804 14.0658 20.8575 14.0754 20.9057C14.0947 21.0408 14.1526 21.176 14.2008 21.3111C14.307 21.6005 14.4227 21.8898 14.5385 22.1696C14.6446 22.4493 14.7507 22.7292 14.8858 22.9897C15.1366 23.4817 15.4067 23.9641 15.6865 24.4368C15.8216 24.678 15.9856 24.8999 16.1689 25.1796L16.1496 25.1891ZM10.0525 11.7698C10.5349 11.7698 11.0076 11.7698 11.49 11.7698C11.5575 11.7698 11.6636 11.7217 11.6829 11.6638C11.7504 11.4901 11.7987 11.2971 11.8469 11.1235C11.9048 10.9305 11.9627 10.7375 12.0302 10.5445C12.146 10.2165 12.2714 9.88851 12.3968 9.5605C12.5126 9.27108 12.638 8.98176 12.7634 8.69234C12.8695 8.4608 12.9949 8.23895 13.101 8.00742C13.1589 7.882 13.1107 7.82396 12.9756 7.84325C12.9274 7.84325 12.8695 7.86259 12.8213 7.89154C12.5801 8.0073 12.3293 8.13283 12.0881 8.2486C11.5285 8.50908 11.0268 8.84675 10.5445 9.23264C9.72446 9.87901 9.0588 10.6507 8.49926 11.5286C8.46067 11.5865 8.4414 11.6733 8.46069 11.7311C8.47034 11.7601 8.57645 11.7794 8.63434 11.7794C9.10705 11.7794 9.5798 11.7794 10.0525 11.7794V11.7698ZM22.2371 11.7698C22.7098 11.7698 23.1825 11.7698 23.6552 11.7698C23.7227 11.7698 23.7903 11.7408 23.8578 11.7215C23.8385 11.654 23.8385 11.5672 23.7903 11.5093C23.5298 11.1427 23.2789 10.7859 22.9992 10.4386C22.43 9.7343 21.7353 9.15539 20.9732 8.67302C20.6934 8.49937 20.404 8.3257 20.105 8.17134C19.8638 8.04593 19.6033 7.94938 19.3525 7.85291C19.3042 7.83361 19.2271 7.85294 19.1981 7.88188C19.1788 7.90117 19.1982 7.97849 19.2174 8.02673C19.3139 8.22932 19.42 8.4318 19.5069 8.6344C19.7287 9.15535 19.9603 9.66677 20.1629 10.1974C20.3365 10.6604 20.4716 11.1331 20.6067 11.6058C20.6452 11.7409 20.7031 11.7794 20.8285 11.7794C21.3012 11.7794 21.7739 11.7794 22.2467 11.7794L22.2371 11.7698ZM10.0621 20.7321C9.59905 20.7321 9.14563 20.7321 8.68256 20.7321C8.61503 20.7321 8.53788 20.7611 8.47035 20.7804C8.48964 20.8576 8.48965 20.9444 8.53789 21.0119C8.75013 21.311 8.96235 21.6197 9.18424 21.9091C9.76308 22.6712 10.4963 23.279 11.2873 23.7999C11.5768 23.9929 11.8855 24.1665 12.1942 24.3209C12.445 24.4463 12.7055 24.5429 12.966 24.649C13.0045 24.6683 13.0818 24.649 13.1107 24.62C13.13 24.5911 13.1203 24.5138 13.1107 24.4752C13.0142 24.2629 12.8984 24.0508 12.802 23.8385C12.5801 23.3176 12.3486 22.8064 12.1556 22.2758C11.9916 21.8224 11.8565 21.3591 11.7215 20.9057C11.6829 20.7803 11.6154 20.7418 11.49 20.7418C11.0172 20.7418 10.5445 20.7418 10.0718 20.7418L10.0621 20.7321ZM23.877 20.8384C23.8192 20.7998 23.7806 20.7418 23.7227 20.7321C23.6359 20.7128 23.5394 20.7321 23.4526 20.7321C22.5843 20.7321 21.7161 20.7321 20.8478 20.7321C20.7707 20.7321 20.6549 20.7515 20.6356 20.8094C20.5584 20.9445 20.5198 21.0988 20.4716 21.2435C20.3558 21.6101 20.2594 21.9862 20.1243 22.3528C19.9603 22.7966 19.7866 23.2308 19.6033 23.6553C19.4972 23.9061 19.3621 24.157 19.2464 24.4078C19.2174 24.4753 19.2078 24.5525 19.1885 24.62C19.256 24.62 19.3429 24.649 19.4007 24.62C19.6805 24.5043 19.9603 24.3787 20.2207 24.234C20.6645 23.9832 21.1179 23.7325 21.5231 23.4431C22.3817 22.8257 23.0763 22.0538 23.6648 21.1759C23.7324 21.0794 23.7902 20.9734 23.8674 20.8384H23.877Z" fill="#E61C37" />
                </svg> &nbsp; www.khoaikhau.vn
            </div>
            <div class="txt-ft facebook-khoaikhau">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path d="M16.0531 0C24.8321 0 32.0097 7.23538 32.0001 16.0723C32.0001 24.8417 24.7549 32.0096 15.9084 32C7.14864 32 -0.00963755 24.7453 9.73989e-06 15.8891C9.73989e-06 7.17756 7.25479 0 16.0531 0ZM21.6389 25.0154C22.6904 25.0539 22.8834 24.9478 24.2147 23.5876C25.5557 22.2273 25.054 20.2015 23.2404 19.6034C22.7001 19.4297 22.1406 19.3429 21.61 19.1403C20.3462 18.6676 19.3139 18.9376 18.4071 19.9409C18.2334 20.1338 17.751 20.2399 17.5002 20.1531C14.8376 19.2462 13.0238 17.4326 11.9337 14.8471C11.6829 14.2489 11.7118 13.8148 12.2424 13.371C13.0431 12.6957 13.2747 11.8082 12.9756 10.7953C12.773 10.1103 12.609 9.40615 12.3872 8.72119C11.9337 7.33198 10.4287 6.63732 9.17459 7.21616C7.7082 7.89147 6.84957 9.41569 7.04252 11.0268C7.06181 11.1811 7.08111 11.3355 7.1004 11.4898C7.88183 18.9858 14.1043 24.7742 21.6389 25.0154Z" fill="white" />
                    <path d="M21.6389 25.0154C14.1044 24.7742 7.87219 18.9762 7.10041 11.4899C7.08112 11.3355 7.06182 11.1812 7.04253 11.0268C6.84958 9.41572 7.70821 7.89149 9.1746 7.21618C10.4288 6.63734 11.9337 7.332 12.3872 8.72121C12.6091 9.40617 12.773 10.1103 12.9756 10.7953C13.2747 11.8179 13.0432 12.7054 12.2424 13.371C11.7118 13.8148 11.6829 14.249 11.9337 14.8471C13.0142 17.4326 14.8279 19.2463 17.5002 20.1531C17.7607 20.2399 18.2334 20.1338 18.4071 19.9409C19.3139 18.9376 20.3462 18.6676 21.61 19.1403C22.1406 19.3333 22.7001 19.4297 23.2404 19.6034C25.0541 20.1919 25.5557 22.2273 24.2147 23.5876C22.8834 24.9382 22.6904 25.0443 21.6389 25.0154Z" fill="white" />
                    <path d="M13.3422 21.8607C13.3229 20.4233 13.2939 18.9762 13.2746 17.5388C13.2746 17.3458 13.236 17.3169 13.0334 17.3072C12.1073 17.3072 11.1715 17.2976 10.2454 17.2879C9.96558 17.2879 9.94629 17.2686 9.94629 16.9888C9.94629 15.9566 9.95596 14.934 9.9656 13.9017C9.9656 13.6509 9.99452 13.6219 10.2454 13.6219C11.1715 13.6219 12.0976 13.6219 13.0141 13.6219C13.2939 13.6219 13.3035 13.6221 13.3035 13.3423C13.3132 12.3873 13.3325 11.4226 13.3325 10.4675C13.3325 9.93687 13.3904 9.40614 13.5255 8.89484C13.7859 7.9494 14.2876 7.15828 15.1751 6.67591C15.6092 6.44438 16.082 6.30934 16.5643 6.21286C17.9149 5.94274 19.2656 6.07792 20.6162 6.09722C20.896 6.09722 20.9056 6.12599 20.9056 6.40576C20.9056 7.23543 20.9153 8.06517 20.9249 8.89484C20.9249 9.20355 20.9249 9.21327 20.6162 9.21327C20.2303 9.21327 19.8347 9.20365 19.4488 9.23259C19.0822 9.26153 18.706 9.30003 18.3491 9.38686C18.0307 9.47368 17.7124 9.6088 17.5484 9.92716C17.4808 10.0526 17.4422 10.1972 17.4326 10.3419C17.4037 10.9497 17.394 11.548 17.3747 12.1557C17.3747 12.532 17.3747 12.9082 17.3554 13.2844C17.3458 13.4677 17.4229 13.5063 17.5773 13.5063C17.9632 13.5063 18.3587 13.4966 18.7446 13.4966C19.2366 13.4966 19.7286 13.4966 20.2303 13.4966C20.3075 13.4966 20.3847 13.4966 20.4522 13.5063C20.8477 13.5449 20.9056 13.6414 20.8188 14.0273C20.732 14.4132 20.6837 14.799 20.6162 15.1945C20.5487 15.5322 20.4811 15.8796 20.4136 16.2172C20.3557 16.497 20.3075 16.7766 20.2496 17.0564C20.2014 17.3072 20.1917 17.3073 19.9312 17.3169C19.1498 17.3169 18.3587 17.3169 17.5773 17.3169C17.3168 17.3169 17.3072 17.3266 17.3072 17.5774C17.3072 20.4234 17.3072 23.2597 17.3072 26.1057C17.3072 26.4048 17.2782 26.4432 16.9791 26.4432C15.8794 26.4432 14.7796 26.4432 13.6798 26.4432C13.3807 26.4432 13.3614 26.4241 13.3614 26.125C13.3614 24.6972 13.3614 23.2789 13.3614 21.8511C13.3518 21.8511 13.3421 21.8511 13.3228 21.8511L13.3422 21.8607Z" fill="#E61C37" />
                </svg> &nbsp; Facebook.com/khoaikhau.vn
            </div>
        </div>
    </div>

</body>

<script type="text/javascript">
    $(document).ready(function() {
        var slider1 = $('.slides1');
        var slider2 = $('.slides2');
        var progressBar = $('.progress-bar');
        var progressContainer = $('.progress-container');
        var containerWidth = progressContainer.width();
        var isSwiping = false;
        slider1.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            var slideWidth = containerWidth / slick.slideCount;
            var progress = (nextSlide + 1) * slideWidth;
            progressBar.css('width', progress + 'px');
        });
        slider1.slick({
            slidesToShow: 2,
            slidesToScroll: 2,
            autoplay: true,
            autoplaySpeed: 3000,
            prevArrow: '<button type="button" class="slick-prev"><img src="./asset/img/prev-slide.svg" alt="Previous"></button>',
            nextArrow: '<button type="button" class="slick-next"><img src="./asset/img/next-slide.svg" alt="Next"></button>',
            responsive: [{
                breakpoint: 900,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
        slider2.slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            autoplay: true,
            autoplaySpeed: 3000,
            prevArrow: '<button type="button" class="slick-prev"><img src="./asset/img/prev-slide.svg" alt="Previous"></button>',
            nextArrow: '<button type="button" class="slick-next"><img src="./asset/img/next-slide.svg" alt="Next"></button>',
            responsive: [{
                breakpoint: 900,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
        $('.img-slide').on('mousedown', function() {
            isSwiping = false;
        });

        $('.img-slide').on('mousemove', function() {
            isSwiping = true;
        });

        $('.img-slide').on('mouseup', function() {
            if (!isSwiping) {
                const formElement = document.getElementById('form_order');
                formElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
        $('.img-slide').on('touchstart', function() {
            isSwiping = false;
        });
        $('.img-slide').on('touchmove', function() {
            isSwiping = true;
        });
        $('.img-slide').on('touchend', function() {
            if (!isSwiping) {
                const formElement = document.getElementById('form_order');
                formElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    function scollFormOrder() {
        const scrollButtons = document.getElementsByClassName('scrollButton');
        for (let i = 0; i < scrollButtons.length; i++) {
            scrollButtons[i].addEventListener('click', function() {
                const formElement = document.getElementById('form_order');
                formElement.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        }
    }
    scollFormOrder();
</script>

</html>