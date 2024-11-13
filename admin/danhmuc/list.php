<div class="row">
            <div class="row frmtitle">
                <h1>DANH SACH LOAI HANG</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MA LOAI</th>
                            <th>TEN LOAI</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            $suadm="index.php?act=suadm&id=".$id;
                            $xoadm="index.php?act=xoadm&id=".$id;
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td><a href="'.$suadm.'"><input type="button" value="Sua"></a><a href="'.$xoadm.'"><input type="button" value="Xoa"></a></td>
                        </tr>';
                        }
                        ?>
                        
                        
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chon tat ca">
                    <input type="button" value="Bo chon tat ca">
                    <input type="button" value="Xoa cac muc da chon">
                    <a href="index.php?act=adddm"><input type="button" value="Nhap them"></a>
                </div>
            </div>
        </div>