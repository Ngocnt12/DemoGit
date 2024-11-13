<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">GIỎ HÀNG </div>
            <div class="row boxcontent cart ">
                <table>
                    <tr>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
                    $tong = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $hinh = $img_path . $cart[2];
                        $ttien = $cart[3] * $cart[4];
                        $tong += $ttien;
                        echo '<tr>
                <td><img src="' . $hinh . '" alt="" height="80px"></td>
                <td>' . $cart[1] . '</td>
                <td>' . $cart[3] . '</td>
                <td>' . $cart[4] . '</td>
                <td>' . $ttien . '</td>
                <td><input type="button" value="Xóa"></td>
            </tr>';
                    }
                    echo '<tr>
                    <td colspan="4">Tong don hang</td>
                    <td>' . $tong . '</td>
                    <td></td>
            </tr>';
                    ?>
                    <!-- <tr>
                <td>1</td>
                <td><img src="images/1.jpg" alt="" height="80px"></td>
                <td>Dong ho</td>
                <td>50</td>
                <td>2</td>
                <td>100 VND</td>
                <td><input type="button" value="Xóa"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><img src="images/2.jpg" alt="" height="80px"></td>
                <td>Non</td>
                <td>120</td>
                <td>3</td>
                <td>360 VND</td>
                <td><input type="button" value="Xóa"></td>
            </tr> -->
                </table>
            </div>
        </div>

        <div class="row mb bill">
            <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG">
            <a href="index.php?act=delcart"><input type="button" value="Đồng ý dặt hàng">
                <input type="button" value="XÓA GIỎ HÀNG"></a>
        </div>
        </div>
        <div class="boxphai">
            <?php include "view/boxright.php"; ?>
        </div>
    </div>