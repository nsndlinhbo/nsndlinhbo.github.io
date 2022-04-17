<?php 
/*

* @Tác giả      Linh (nsndlinhbo)
* @Email        ninhbg147@gmail.com
* @Momo/phone   0968433144
* @Channel      https://www.youtube.com/channel/UC7KMCQ8chCsgPXcGE8I5Qng
* @Facebook     https://www.facebook.com/profile.php?id=100054244172146
 
 */
error_reporting(0);
include 'hoangphuc@includes/header.php'; 
?>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">CHẲN LẺ MOMO TD</span>
        </div>
    </nav>
    <div class="mb-4"></div>
    <div class="container">
        <div class="h-100 p-5 text-white bg-dark rounded-2">
            <h2>HỆ THỐNG CHẲN LẺ MOMO</h2>
            <p>Uy tín, giao dịch tự động 24/24 !</p>
        </div>
        <div class="card">
            <div class="card-body">
            <?php include 'hoangphuc@includes/guide.php'; ?>
                <br />
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <h5 class="card-header" style="background-color: #1071a5; color: #fff;"><i class="fa fa-exclamation-triangle"></i> Lưu ý</h5>
                            <div class="alert alert-danger">
                                <p>Nội dung chuyển không phân biệt in hoa, thường.</p>
                                <p>Số tiền bạn cược tối thiểu là <b>5.000 VNĐ</b> và tối đa là <b>50.000 VNĐ</b>, nếu chuyển hơn sẽ không được tính và sẽ mất.</p>
                                <p><b>Chẵn lẻ 2</b> chỉ nhận từ 10.000 - 100.000, hơn hoặc thấp hơn sẽ mất.</p>
                                <p>Nếu bạn chiến thắng, vui lòng chờ 1 - 2 phút hệ thống sẽ tự động chuyển tiền cho bạn.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <h5 class="card-header" style="background-color: #1071a5; color: #fff;"><i class="fa fa-crosshairs"></i> BXH</h5>
                            <div class="card-body">
                               <?php $i = 1; foreach(hoangphuc("SELECT * FROM `rank` ORDER BY tiencuoc DESC LIMIT 5 ") as $row){?> <div class="row">
                                    <div class="col-xs-1">
                                        <span class="fa-stack">
                                            <span class="fa fa-circle fa-stack-2x text-danger"></span>
                                            <strong class="fa-stack-1x text-white"><?= $i++; ?></strong>
                                        </span>
                                    </div>

                                    <div class="col-md-2">
                                        <span class="badge bg-success"><?= substr_replace($row['sdt'],'****', 6); ?></span>
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <span class="badge bg-danger"><?= formatvnd($row['tiencuoc']) . ' VNĐ'; ?></span>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                   <div id="trans"></div>
                   <?php include 'status.php'; ?>
                </div>
            </div>
        </div>
    </div>
    <?php include 'hoangphuc@includes/foot.php'; ?>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip()
             setInterval(function () {
    $("#trans").load("trans.php"); 
}, 200);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>

</html>