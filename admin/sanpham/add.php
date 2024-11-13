<div class="row">
            <div class="row frmtitle">
                <h1>THEM MOI SAN PHAM</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Danh muc  <br>
                        <select name="iddm">
                            <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                            ?>
                            
                        </select>
                    </div>
                    <div class="row mb10">
                        Ten san pham <br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                        Gia <br>
                        <input type="text" name="giasp">
                    </div>
                    <div class="row mb10">
                        Hinh <br>
                        <input type="file" name="hinh">
                    </div>
                    <div class="row mb10">
                        Mo ta <br>
                        <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THEM MOI">
                        <input type="reset" value="NHAP LAI">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SACH"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>