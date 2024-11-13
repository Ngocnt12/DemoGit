<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../upload/".$img;
if(is_file($hinhpath)){
$hinh="<img src='".$hinhpath."'height='80'>";
}else{
    $hinh="no photo";
}
?>
<div class="row">
            <div class="row frmtitle">
                <h1>CAP NHAT LOAI HANG HOA</h1>
            </div>
            <div class="row frmcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    <select name="iddm">
                         <option value="0" selected>Tat ca</option>
                        <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            if($iddm==$id) $s="selected"; else $s="";
                            echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                        }
                        ?>
                    </select>
                    </div>
                    <div class="row mb10">
                        Ten san pham <br>
                        <input type="text" name="tensp" value="<?=$tensp?>">
                    </div>
                    <div class="row mb10">
                        Gia <br>
                        <input type="text" name="price" value="<?=$price?>">
                    </div>
                    <div class="row mb10">
                        Hinh <br>
                        <input type="file" name="hinh">
                        <?=$hinh?>
                    </div>
                    <div class="row mb10">
                        Mo ta <br>
                        <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="Cap nhat">
                        <input type="reset" value="Nhap lai">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sach"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>