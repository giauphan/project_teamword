<?php
require_once __DIR__ . '/wit/header.php';
?>
<?=
$thongbao
?>
<div class="container-fluid al">
    <div id="clock"></div>
    <Br>
    <p class="timkiemnhanvien"><b>TÌM KIẾM NHÂN VIÊN:</b></p><Br><Br>
    <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Nhập tên nhân viên cần tìm...">
        <i class="fa fa-search" aria-hidden="true"></i> -->

    <form action="">

    </form>
    <b>CHỨC NĂNG CHÍNH:</b><Br>

    <!-- them danh muc-->
    <a href="/wp-admin/add-category">
        <button class="nv btn add-new" type="button" data-toggle="tooltip" data-placement="top" title="Thêm danh mục"><i class="fas fa-user-plus"></i></button></a>
    <!--end them danh muc-->
    <div class="table-title">
        <div class="row">

        </div>

    </div>
    <div class="table-responsive">
    <table class="table table-bordered" id="myTable">
        <thead>
            <tr class="ex">
                <th width="auto">Mã loai</th>
            
                <th width="auto">Tên danh mục</th>



                <th width="5px; !important">Tính Năng</th>
            </tr>
        </thead>

        <tbody>
            <?php
            if (isset($query) && sizeof($query)>0) {
                foreach (   $query  as  $row ) {
 
                    echo ' <tr>
                    <td>' . $row['ma_loai'] . '</td>
                    <td>' . $row['ten_loai']  . '</td>
                 
                    <td>
                    <a class="edit" href="/wp-admin/change-category?change=' . $row['ma_loai'] . '" title="" data-toggle="tooltip" data-original-title="Sửa"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a class="delete" href ="/wp-admin/ql-category?del_category=' . $row['ma_loai'] . '"title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </td>
                
                </tr>';
                  }
            }?>



        </tbody>
        <tfoot></tfoot>
    </table>
</div>
    <div id="pageNavPosition" class="text-right"></div>
    <script type="text/javascript">
        var pager = new Pager('myTable', 5);
        pager.init();
        pager.showPageNav('pager', 'pageNavPosition');
        pager.showPage(1);
    </script>
</div>
<hr class="hr1">
<?php
require_once __DIR__ . '/wit/footer.php';
?>