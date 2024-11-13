<div class="row">
            <div class="row frmtitle mb">
                <h1>DANH SACH SAN PHAM</h1>
            </div>                
            <form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw">
                    <select name="iddm">
                         <option value="0" selected>Tat ca</option>
                        <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                        ?>
                    </select>
                    <input type="submit" name="listok" value="GO">
            </form>
                <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MA LOAI</th>
                            <th>TEN SAN PHAM</th>
                            <th>HINH</th>
                            <th>GIA</th>
                            <th>LUOT XEM</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach($listsanpham as $sanpham){
                            extract($sanpham);
                            $suasp="index.php?act=suasp&id=".$id;
                            $xoasp="index.php?act=xoasp&id=".$id;
                            $hinhpath="../upload/".$img;
                            if(is_file($hinhpath)){
                                $hinh="<img src='".$hinhpath."'height='80'>";
                            }else{
                                $hinh="no photo";
                            }
                            echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$tensp.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>'.$price.'</td>
                                    <td>'.$luotxem.'</td>
                                    <td><a href="'.$suasp.'"><input type="button" value="Sua"></a> <a href="'.$xoasp.'"><input type="button" value="Xoa"></a></td>
                                </tr>';
                        }
                        ?>                        
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chon tat ca">
                    <input type="button" value="Bo chon tat ca">
                    <input type="button" value="Xoa cac muc da chon">
                    <a href="index.php?act=addsp"><input type="button" value="Nhap them"></a>
                </div>
            </div>
        </div>