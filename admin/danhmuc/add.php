<div class="row">
            <div class="row frmtitle">
                <h1>THEM MOI LOAI HANG HOA</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Ma loai
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Ten loai
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THEM MOI">
                        <input type="reset" value="NHAP LAI">
                        <a href="index.php?act=lisdm"><input type="button" value="DANH SACH"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>