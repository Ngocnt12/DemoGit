<div class="row mb">
            <div class="boxtrai mr">
            <div class="row mb">       
                <div class="boxtitle">DANG KY THANH VIEN</div>
                <div class=" row boxcontent formtaikhoan">
                    <form action="index.php?act=dangky" method="post">
                        <div class="row mb10">
                            Email
                            <input type="email" name="email">
                        </div>
                        <div class="row mb10">
                            Ten dang nhap
                            <input type="text" name="user">
                        </div>
                        <div class="row mb10">
                            Mat khau
                            <input type="password" name="pass">
                        </div>
                        <div class="row mb10">
                        <input type="submit" value="Dang ky" name="dangky">
                        <input type="reset" value="Nhap lai">
                        </div>
                    </form>
                    <h2 class="thongbao">
                    <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                    ?>
                    </h2>
                </div>
            </div>
            
            </div>
            <div class="boxphai">
            <?php include "view/boxright.php";?>
            </div>
            </div>