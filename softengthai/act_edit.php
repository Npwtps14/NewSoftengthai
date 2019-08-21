<?php
include 'condb.php';
include 'functionx.php';
$fn = new functionx();
// $fn->checkLogin();

$act_id = $_GET['id'];
$fn = new functionx();
$actPlace = $fn->getActAddid($act_id);
?>
<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>  แก้ไขข้อมูลกิจกรรม </title>
        <?php
        include "header.php";
        ?>
    </head>
    <body class="theme-blue" data-page='news'>
        <?php
        include "head.php";
        ?>
        <section class="content">
            <div class="container-fluid">
                <div class="block-header">

                    <h2>ฟอร์มแก้ไขข้อมูลกิจกรรม </h2>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    <a href="activity.php"> 
                                        กลับ
                                    </a>    รายละเอียดของกิจกรรม                                  
                                </h2>

                            </div>
                            <div class="body">
                                <form action="act_del.php?acts=updateAct&id=<?= $act_id ?>" method="post" multipart='' enctype="multipart/form-data">
                                    <div class="col-md-12">
                                        <b>รูปภาพหลัก * </b>
                                        <div class="input-group colorpicker">
                                            <input type="file" name="actpic_view"    accept="image/*">
                                            <div style="padding-top: 10px;">
                                                <?php
                                                if (!empty($actPlace->actpic_view)) {
                                                    echo "<a href='gallery/{$actPlace->actpic_view}' target='_BLANK'><img src='gallery/img/{$actPlace->actpic_view}'> </a>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-9">
                                            <b> ชื่อกิจกรรม *</b>
                                            <div class="input-group colorpicker">
                                                <div class="form-line">
                                                    <input type="text" value="<?= $actPlace->act_name; ?>" required class="form-control" name="act_name" placeholder="ชื่อกิจกรรม">
                                                </div>

                                            </div>
                                        </div>
<!--                                        <div class="col-md-3">
                                            <b>ประเภท *</b>

                                            <div class="input-group colorpicker">
                                                <select class="form-control" name="news_type" required>
                                                     
                                                </select>

                                            </div>
                                        </div>-->

<!--                                        <div class="col-md-9">
                                            <b> พาดหัวข่าว *</b> <small>เนื้อหาบางส่วนเพื่อนำไปแสดงหน้าแรก ประมาณ 2 บรรทัด</small>
                                            <div class="input-group colorpicker">
                                                <div class="form-line">
                                                    <textarea class="form-control" name="news_title" required rows="4"><?= $newsDatail->news_title; ?></textarea>
                                                </div>
                                            </div>
                                        </div>-->

                                        <div class="col-md-9">
                                            <b> สถานที่จัดกิจกรรม *</b>  
                                            <div class="input-group colorpicker">
                                            <div class="form-line">
                                                    <input type="text" value="<?= $actPlace->act_place; ?>" required class="form-control" name="act_place" placeholder="สถานที่จัดกิจกรรม">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-9">                                            
                                            <button type="submit" class="btn bg-green pull-right"> 
                                                <i class="material-icons">save</i>  
                                                <span class="icon-name">บันทึกข้อมูล</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>       
        <?php include 'jsimport.php'; ?>  
    
    </body>
</html>