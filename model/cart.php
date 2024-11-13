<?php
function viewcart(){
    global $img_path;
    $tong = 0;
                    $i = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $hinh = $img_path . $cart[2];
                        $ttien = $cart[3] * $cart[4];
                        $tong += $ttien;

                        $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a>';
                        echo '<tr>
                <td><img src="' . $hinh . '" alt="" height="80px"></td>
                <td>' . $cart[1] . '</td>
                <td>' . $cart[3] . '</td>
                <td>' . $cart[4] . '</td>
                <td>' .$ttien. '</td>
                <td>' .$xoasp. '</td>
            </tr>';
                    $i+=1;
                    }
                    echo '<tr>
                    <td colspan="4">Tong don hang</td>
                    <td>' . $tong . '</td>
                    <td></td>
            </tr>';
}
?>