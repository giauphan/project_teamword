<?php
require_once __DIR__ . '/wit/header.php';
?>
<div class="container-fluid al">

    <div id="clock"></div>
    <br>
    <div class="chart" style="    width: 500px;height: 50%; margin: 10% 0 0 0 ;">
        <p class="thongke" style="font-weight: 700;"><b>THỐNG KÊ</b></p>

        <canvas id="thongke" style="width: 400px; height: 200px;"></canvas>
    </div>


    <script>
        var canvas = document.getElementById("thongke");
        var ctx = canvas.getContext("2d");

        const today = new Date();
        const year = today.getFullYear();

        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Doanh thu năm ' + year + ' theo tháng',
                    data: [<?php

                            $m1 = 0;
                            $m2 = 0;
                            $m3 = 0;
                            $m4 = 0;
                            $m5 = 0;
                            $m6 = 0;
                            $m7 = 0;
                            $m8 = 0;
                            $m9 = 0;
                            $m10 = 0;
                            $m11 = 0;
                            $m12 = 0;
                            foreach ($thongke as $row) {
                                foreach ($page as $thongke) {

                                    if ($row['ma_sp'] == $thongke['ma_sp'] && $thongke['ma_user'] == $_SESSION['ma_user']) {
                                        $i = $row['ngay_nhap_dh'];

                                        if ($i == 1) {
                                            $m1 +=    $row['gia_dh'];
                                        }
                                        if ($i == 2) {
                                            $m2 +=    $row['gia_dh'];
                                        }
                                        if ($i == 3) {
                                            $m3 +=    $row['gia_dh'];
                                        }
                                        if ($i == 4) {
                                            $m4 +=    $row['gia_dh'];
                                        }
                                        if ($i == 5) {
                                            $m5 +=    $row['gia_dh'];
                                        }
                                        if ($i == 6) {
                                            $m6 +=    $row['gia_dh'];
                                        }
                                        if ($i == 7) {
                                            $m7 +=    $row['gia_dh'];
                                        }
                                        if ($i == 8) {
                                            $m8 +=    $row['gia_dh'];
                                        }
                                        if ($i == 9) {
                                            $m9 +=    $row['gia_dh'];
                                        }
                                        if ($i == 10) {
                                            $m10 +=    $row['gia_dh'];
                                        }
                                        if ($i == 11) {
                                            $m11 +=    $row['gia_dh'];
                                        }
                                        if ($i == 12) {
                                            $m12 +=    $row['gia_dh'];
                                        }
                                    }
                                }
                            }
                            echo $m1 . "," . $m2 . "," . $m3 . "," . $m4 . "," . $m5 . "," . $m6 . "," . $m7 . "," . $m8 . "," . $m9 . "," . $m10 . "," . $m11 . "," . $m12   ?>],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)",
                        "rgba(255, 99, 132, 0.5)",
                        "rgba(54, 162, 235, 0.5)",
                        "rgba(255, 206, 86, 0.5)",
                        "rgba(75, 192, 192, 0.5)",
                        "rgba(153, 102, 255, 0.5)",
                        "rgba(255, 159, 64, 0.5)"
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <?= $thongbao ?>

    <!-- BEGIN: PAGE CONTAINER -->
    <div class="c-layout-page" style="margin-top: 0!important;">
        <!-- BEGIN: PAGE CONTENT -->

        <div class="c-layout-page" style="margin-top: 20px;">
            <div class="container">
                <div class="c-layout-sidebar-menu c-theme ">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-xs-6 m-t-15 m-b-20">
                            <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                            <div class="c-content-title-3 c-title-md c-theme-border">
                                <h3 class="c-left c-font-uppercase">Menu tài khoản</h3>
                                <div class="c-line c-dot c-dot-left "></div>
                            </div>
                            <div class="c-content-ver-nav">
                                <ul class="c-menu c-arrow-dot c-square c-theme">
                                    <li><a href="/profile" class="active">Thông tin tài khoản</a></li>
                                    <li><a href="#" class="p-quantity ">Hộp thư
                                            <span id="quantity_noti" class="quantity">0</span>
                                        </a>
                                    </li>
                                    <!-- <li><a href="#" class="">Lịch sử giao dịch </a></li> -->
                                    <!-- <li>
                                        <a data-toggle="collapse" data-parent="#accordion1" class="cmenu-parrent collapsed" href="#menuchild_roll">Lịch sử vòng quay (0)</a>
                                        <ul id="menuchild_roll" class="children collapse">
                                        </ul>
                                    </li> -->
                                    <!-- <li><a href="/user/withdrawruby/1" class="">Rút quà mở rương (8)</a></li>
                        <li><a href="/user/bank" class="">Tài khoản ngân hàng</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-xs-6 m-t-15">
                            <div class="c-content-title-3 c-title-md c-theme-border">
                                <h3 class="c-left c-font-uppercase">Menu giao dịch</h3>
                                <div class="c-line c-dot c-dot-left "></div>
                            </div>
                            <div class="c-content-ver-nav m-b-20">
                                <ul class="c-menu c-arrow-dot c-square c-theme">
                                    <li><a href="#" class=""><b>Nạp thẻ tự động</b></a></li>
                                    <li><a href="/duan/?act=history_nap" class="">Lịch sử nạp thẻ</a></li>
                                    <!-- <li><a href="/recharge" class="">Nạp Ví / ATM tự động</a></li> -->
                                    <li><a href="/duan/?act=history_bill" class="">Tài khoản đã mua</a></li>
                                    <!-- <li><a href="/tran/acc-hire-purchase" class="">Tài khoản trả góp</a></li> -->
                                    <li><a href="#" class="">Dịch vụ đã mua</a></li>
                                    <li><a href="#" class="">Lịch sử mua phụ kiện</a></li>
                                    <!-- <li><a href="/mua-the/log" class="">Thẻ cào đã mua</a></li>
                        <li><a href="/user/tranfer" class="">Chuyển tiền</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <p class="timkiemnhanvien"><b>TÌM KIẾM Sản phẩm:</b></p>





                    <div class="row  hidden-xs hidden-sm" style="margin-bottom: 15px">
                        <div class="m-l-10 m-r-10">
                            <form action="" method="POST" data-hs-cf-bound="true" class="form-inline m-b-10">
                                <div class="col-md-3 col-sm-4 p-5 field-search">
                                    <div class="input-group c-square">
                                        <span class="input-group-addon">Mã số</span>
                                        <input type="text" class="form-control c-square" value="" placeholder="Mã số" name="id">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                    <div class="input-group c-square">
                                        <span class="input-group-addon">Giá tiền</span>
                                        <select class="form-control c-square" name="price">
                                            <option value="">Tất cả</option>
                                            <option value="0-50000">Dưới 50K</option>
                                            <option value="50000-200000">Từ 50K - 200K</option>
                                            <option value="200000-500000">Từ 200K - 500K</option>
                                            <option value="500000-1000000">Từ 500K - 1 Triệu</option>
                                            <option value="1000000">Trên 1 Triệu</option>
                                            <option value="5000000">Trên 5 Triệu</option>
                                            <option value="10000000">Trên 10 Triệu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 p-5 field-search">
                                    <div class="input-group c-square">
                                        <span class="input-group-addon">Trạng thái</span>
                                        <select class="form-control c-square" name="status">
                                            <option value="">Trạng thái</option>
                                            <option value="0">Chưa bán</option>
                                            <option value="1">Đã bán</option>


                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                    <div class="input-group c-square">
                                        <span class="input-group-addon">Rank</span>
                                        <select name="rank_seach" class="form-control c-square" title="-- Không chọn --">
                                            <option value="">-- Rank --</option>
                                            <option value="dong">Đồng</option>
                                            <option value="bac">Bạc</option>
                                            <option value="vang">Vàng</option>
                                            <option value="Bach Kim">Bạch Kim</option>
                                            <option value="Kim cuong">Kim Cương</option>
                                            <option value="Tinh Anh">Tinh Anh</option>
                                            <option value="Cao Thu">Cao Thủ</option>
                                            <option value="thach Dau">Thách Đấu</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                    <div class="input-group c-square">
                                        <span class="input-group-addon">Ngọc 90</span>
                                        <select name="ngoc_seach" class="form-control c-square" title="-- Không chọn --">
                                            <option value="">-- Ngọc --</option>
                                            <option value="1">Không</option>
                                            <option value="0">Có</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-3 col-sm-4 p-5 no-radius">
                                    <button type="submit" name='submit' class="btn c-square c-theme c-btn-green">Tìm kiếm</button>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="filter-product-mobile hidden-md hidden-lg">
                        <div class="filter-left form-group">
                        </div>
                        <div class="filter-right form-group">
                            <a class="btn btn-success" style="display: block">
                                <i class="fa fa-filter"></i> Tìm kiếm
                            </a>
                        </div>
                        <div id="togger-filter"></div>
                    </div>
                    <div class="form-filter-right hidden-md hidden-lg">
                        <div class="form-filter-content-mobile">
                            <div class="list-product-left">
                                <div class="category-left">
                                    <div class="title-product mb-4">
                                        <span class="c-theme-link close-popup">×</span>
                                        <h2 style="font-size: 16px;text-align: center">Tìm kiếm </h2>
                                    </div>
                                    <div class="category-list-product">
                                    </div>
                                </div>
                                <hr>
                                <div class="search-list-product">
                                    <form class="form-inline m-b-10" role="form" method="POST" data-hs-cf-bound="true">

                                        <div class="col-md-3 col-sm-4 p-5 field-search">
                                            <div class="input-group c-square">
                                                <span class="input-group-addon">Mã số</span>
                                                <input type="text" class="form-control c-square" value="" placeholder="Mã số" name="id">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                            <div class="input-group c-square">
                                                <span class="input-group-addon">Giá tiền</span>
                                                <select class="form-control c-square" name="price">
                                                    <option value="">Tất cả</option>
                                                    <option value="0-50000">Dưới 50K</option>
                                                    <option value="50000-200000">Từ 50K - 200K</option>
                                                    <option value="200000-500000">Từ 200K - 500K</option>
                                                    <option value="500000-1000000">Từ 500K - 1 Triệu</option>
                                                    <option value="1000000">Trên 1 Triệu</option>
                                                    <option value="5000000">Trên 5 Triệu</option>
                                                    <option value="10000000">Trên 10 Triệu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4 p-5 field-search">
                                            <div class="input-group c-square">
                                                <span class="input-group-addon">Trạng thái</span>
                                                <select class="form-control c-square" name="status">
                                                    <option value="">Trạng thái</option>
                                                    <option value="0">Chưa bán</option>
                                                    <option value="1">Đã bán</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                            <div class="input-group c-square">
                                                <span class="input-group-addon">Rank</span>
                                                <select name="rank_seach" class="form-control c-square" title="-- Không chọn --">
                                                    <option value="">-- Rank --</option>
                                                    <option value="dong">Đồng</option>
                                                    <option value="bac">Bạc</option>
                                                    <option value="vang">Vàng</option>
                                                    <option value="Bach Kim">Bạch Kim</option>
                                                    <option value="Kim cuong">Kim Cương</option>
                                                    <option value="Tinh Anh">Tinh Anh</option>
                                                    <option value="Cao Thu">Cao Thủ</option>
                                                    <option value="thach Dau">Thách Đấu</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                            <div class="input-group c-square">
                                                <span class="input-group-addon">Ngọc 90</span>
                                                <select name="ngoc_seach" class="form-control c-square" title="-- Không chọn --">
                                                    <option value="">-- Ngọc --</option>
                                                    <option value="1">Không</option>
                                                    <option value="0">Có</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-3 col-sm-4 p-5 no-radius">
                                            <button type="submit" name='submit' class="btn c-square c-theme c-btn-green">Tìm kiếm</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        .form-filter-right {
                            position: fixed;
                            top: 0;
                            right: -300px;
                            width: 300px;
                            height: 100%;
                            background: #fff;
                            color: #444;
                            z-index: 10;
                            transition: 400ms ease;
                            overflow-y: scroll;
                            transform: translateX(0px);
                            z-index: 10000;
                        }

                        .form-filter-right.open {
                            display: unset;
                            height: 100%;
                            transform: translateX(-300px);
                        }

                        #togger-filter {
                            visibility: hidden;
                            background-color: #000000bf;
                            z-index: 1;
                            height: 100%;
                            width: 100%;
                            left: 0;
                            top: 0;
                            overflow: hidden;
                            position: fixed;
                            z-index: 9999;
                        }

                        #togger-filter.active {
                            transition: 0.4s;
                            visibility: visible;
                            cursor: pointer;
                        }

                        .form-filter-content-mobile {
                            padding: 15px;
                        }

                        .close-popup {
                            color: #818e9a;
                            font-size: 36px;
                            left: 11px;
                            top: 7px;
                            position: absolute;
                            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                        }
                    </style>
                    <script>
                        $('.filter-right').click(function() {
                            $('.form-filter-right').toggleClass('open');
                            $("#togger-filter").toggleClass("active");
                        });
                        $('#togger-filter').click(function(e) {
                            $("#togger-filter").removeClass("active");
                            $('.form-filter-right').removeClass('open');
                        });

                        $('#togger-filter').click(function(e) {
                            $("#togger-filter").removeClass("active");
                            $('.form-filter-right').removeClass('open');
                        });
                        $('.form-filter-right .close-popup').click(function(e) {
                            $("#togger-filter").removeClass("active");
                            $('.form-filter-right').removeClass('open');
                        });
                    </script>
                    <b>CHỨC NĂNG CHÍNH:</b><Br>
                    <!-- them san pham-->
                    <a href="/add-product">
                        <button class="nv btn add-new" type="button" data-toggle="tooltip" data-placement="top" title="Thêm sản phẩm"><i class="fa fa-user-plus"></i></button></a>
                    <!--   end them san pham-->

                    <div class="table-title">
                        <div class="row">

                        </div>
                        <style>
                            th {
                                color: #fff !important;
                            }

                            td {
                                font-size: 14px;
                            }
                        </style>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-module" id="myTable">
                            <thead>
                                <tr class="ex">
                                    <th width="auto">Mã sản phẩm</th>
                                    <!-- <th width="auto">Hình</th> -->
                                    <th width="auto"> Giá</th>

                                    <th width="auto"> Trạng thái</th>
                                    <th width="auto">Giảm giá</th>
                                    <!-- <th width="auto">Mô tả</th> -->
                                    <th width="auto">ngày nhập </th>
                                    <!-- <th width="auto">tài khoản </th>
                    <th width="auto">mật khẩu</th> -->
                                    <th width="auto">Danh mục</th>

                                    <th width="5px; !important">Tính Năng</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                if (isset($page) && sizeof($page)) {
                                    foreach ($page as $row) {

                                        if ($_SESSION['ma_user'] == $row['ma_kh'] && $row['ma_kh'] == $row['ma_user']) {
                                            $trang_thai = ($row['trang_thai_sp'] == 0) ? "Chưa bán" : "Đã bán";
                                            echo ' <tr>
                    <td>' . $row['ma_sp'] . '</td>
                  
                    <td> ' . number_format(($row['giasp'] - ($row['giasp'] * ($row['giam_gia'] * 0.01))), 0, ',', '.') . 'VNĐ</td>

                    <td>' . $trang_thai . '</td>
                    <td>' . ($row['giam_gia']) . '%</td>

                    <td>' . $row['ngay_nhap'] . '</td>
                    <td>' . $row['ten_loai'] . '</td>
                    <td>';
                                            $check_pro = true;

                                            foreach ($check_product as $check) {
                                                if ($check['ma_sp'] == $row['ma_sp']) {
                                                    $check_pro = false;
                                                }
                                            }
                                            if ($check_pro == true) {
                                                echo '
                        <a class="edit" href="/change-product?change=' . $row['ma_sp'] . '" title="" data-toggle="tooltip" data-original-title="Sửa"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a class="delete" href="?de=' . $row['ma_sp'] . '" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o" aria-hidden="true"></i></a>';
                                            } else {
                                                echo ' <a class="delete" href="?de=' . $row['ma_sp'] . '" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o" aria-hidden="true"></i></a>';
                                            }
                                            echo ' 
                    </td>
                </tr>';
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                            <tfoot></tfoot>
                        </table>
                        <tfoot></tfoot>
                    </div>
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END: PAGE CONTENT -->
    </div>
    <!-- Begin: Testimonals 1 component -->
</div>
<style type="text/css">
    .news_image,
    .image,
    .news_title,
    .a-more,
    .news_description {
        position: relative;
        z-index: 200;
    }

    span.sale {
        position: absolute;
        z-index: 1000;
        right: -1px;
        top: -1px;
        background: rgba(255, 212, 36, .9);
        padding: 5px;
        text-align: center;
        color: #ee4d2d;
        width: 50px;
        font-weight: 700;
        font-size: 15px;
    }

    .sale:after {
        content: "";
        width: 0;
        height: 0;
        left: 0;
        bottom: -4px;
        position: absolute;
        border-color: transparent rgba(255, 212, 36, .9);
        border-style: solid;
        border-width: 0 25px 4px;
    }

    .outPrice {
        padding-top: 20px;
        text-align: center;
        width: 100px;
        margin: 0 auto;
        margin-top: 10px;
        display: flex;
        justify-content: center;
    }

    .oldPrice {
        text-decoration: line-through;
        color: #3f0;
        border: 2px solid;
        padding: 5px 15px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: bold;
    }

    .newPrice {
        border: 2px solid red;
        padding: 5px 15px;
        color: red;
        display: inline;
        border-radius: 5px;
        margin-left: 10px;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .game-list .a-more .view {
        margin-top: 20px;
    }

    @media (max-width: 550px) {
        .outPrice {
            flex-direction: column;
        }

        .newPrice {
            margin-left: 0;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    }
</style>

<div id="pageNavPosition" class="text-right"></div>
<script type="text/javascript">
    var pager = new Pager('myTable', 10);
    pager.init();
    pager.showPageNav('pager', 'pageNavPosition');
    pager.showPage(1);
</script>
</div>
<hr class="hr1">
<?php
require_once __DIR__ . '/wit/footer.php';
?>