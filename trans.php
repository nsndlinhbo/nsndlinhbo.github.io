<?php
/*

* @Tác giả      Phúc (skrtaa99)
* @Email        hoangphucvn2021@gmail.com
* @Momo/phone   0926214712
* @Channel      https://www.youtube.com/channel/UC7KMCQ8chCsgPXcGE8I5Qng
* @Facebook     https://www.facebook.com/profile.php?id=100054244172146

 */
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$sql = hoangphuc("SELECT * FROM `momo` WHERE nguoigui = '' ORDER BY id DESC LIMIT 10");
?>
<div class="row justify-content-md-center box-cl">
  <div class="mt-5">
    <div class="text-center mb-3">
      <h3 class="text-uppercase">LỊCH SỬ THẮNG</h3>
    </div>
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover text-center">
        <thead>
          <tr role="row" style="background-color: #1071a5; color: #fff;">
            <th class="text-center text-white">Thời gian</th>
            <th class="text-center text-white">Số điện thoại</th>
            <th class="text-center text-white">Tiền cược</th>
            <th class="text-center text-white">Tiền nhận</th>
            <th class="text-center text-white">Trò chơi</th>
            <th class="text-center text-white">Nội dung </th>
            <th class="text-center text-white">Trạng thái</th>
          </tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all" class="" id="loaddata">
          <?php foreach ($sql as $row) {
            $socuoi_3 = substr($row['tranid'], 8, -2);
            $socuoi_2 = substr($row['tranid'], 9, -1);
            $socuoi_1 = substr($row['tranid'], -1);
            $socuoi_max2 = substr($row['tranid'], -2);
            $socuoi_max3 = substr($row['tranid'], -3);
            $socuoi_max4 = substr($row['tranid'], -4);
            $tong3 = $socuoi_1 + $socuoi_2 + $socuoi_3;
          ?>
            <tr>
              <td><?= $row['thoigian'] ?></td>
              <td><?= substr_replace($row['sdt_nguoinhan'], "****", 6); ?></td>
              <td><?= formatvnd($row['amount']) ?></td>
              <td><?php
			  if ($row['loinhan'] == "a" || $row['loinhan'] == "A") {
                    echo formatvnd($row['amount'] * 1.8);
                  }
                  if ($row['loinhan'] == "b" || $row['loinhan'] == "B") {
                    echo formatvnd($row['amount'] * 1.8);
                  }
                  if ($row['loinhan'] == 'x' || $row['loinhan'] == 'X') {
                    echo formatvnd($row['amount'] * 2);
                  }
                  if ($row['loinhan'] == 'y' || $row['loinhan'] == 'Y') {
                    echo formatvnd($row['amount'] * 2);
                  }
                  if ($row['loinhan'] == 't3' || $row['loinhan'] == 'T3') {
                    echo formatvnd($row['amount'] * 3);
                  }
                  if ($row['loinhan'] == 'C1' || $row['loinhan'] == 'c1') {
                    echo formatvnd($row['amount'] * 3);
                  }
                  if ($row['loinhan'] == 'C2' || $row['loinhan'] == 'c2') {
                    echo formatvnd($row['amount'] * 3);
                  }
                  if ($row['loinhan'] == 'C3' || $row['loinhan'] == 'c3') {
                    echo formatvnd($row['amount'] * 3);
                  }
                  if ($row['loinhan'] == 'max1' || $row['loinhan'] == 'Max1') {
                    echo formatvnd($row['amount'] * 3);
                  }
                  if ($row['loinhan'] == 'max2' || $row['loinhan'] == 'Max2') {
                    echo formatvnd($row['amount'] * 4);
                  }
                  if ($row['loinhan'] == 'max3' || $row['loinhan'] == 'Max3') {
                    echo formatvnd($row['amount'] * 5);
                  } ?></td>
              <td><?php
                  if ($row['loinhan'] == "a" || $row['loinhan'] == "A") {
                    echo 'Chẳn lẻ';
                  }
                  if ($row['loinhan'] == "b" || $row['loinhan'] == "B") {
                    echo 'Chẳn lẻ';
                  }
                  if ($row['loinhan'] == 'x' || $row['loinhan'] == 'X') {
                    echo 'Tài xỉu';
                  }
                  if ($row['loinhan'] == 'y' || $row['loinhan'] == 'Y') {
                    echo 'Tài xỉu';
                  }
                  if ($row['loinhan'] == 't3' || $row['loinhan'] == 'T3') {
                    echo 'Tổng số';
                  }
                  if ($row['loinhan'] == 'C1' || $row['loinhan'] == 'c1') {
                    echo 'Liên 1';
                  }
                  if ($row['loinhan'] == 'C2' || $row['loinhan'] == 'c2') {
                    echo 'Liên 2';
                  }
                  if ($row['loinhan'] == 'C3' || $row['loinhan'] == 'c3') {
                    echo 'Liên 3';
                  }
                  if ($row['loinhan'] == 'max1' || $row['loinhan'] == 'Max1') {
                    echo 'Max';
                  }
                  if ($row['loinhan'] == 'max2' || $row['loinhan'] == 'Max2') {
                    echo 'Max';
                  }
                  if ($row['loinhan'] == 'max3' || $row['loinhan'] == 'Max3') {
                    echo 'Max';
                  }
                  ?></td>
              <td><?= $row['loinhan'] ?></td>
              <td><?php
                  if ($row['loinhan'] == "a" || $row['loinhan'] == "A") {
                    if ($row['socuoi'] == 0 || $row['socuoi'] == 2 || $row['socuoi'] == 4 || $row['socuoi'] == 6 || $row['socuoi'] == 8) {
                      echo '<span class="badge bg-success">Thắng</span>';
                    } else {
                      echo '<span class="badge bg-danger">Thua</span>';
                    }
                  }
                  if ($row['loinhan'] == "b" || $row['loinhan'] == "B") {
                    if ($row['socuoi'] == 1 || $row['socuoi'] == 3 || $row['socuoi'] == 5 || $row['socuoi'] == 7 || $row['socuoi'] == 9) {
                      echo '<span class="badge bg-success">Thắng</span>';
                    } else {
                      echo '<span class="badge bg-danger">Thua</span>';
                    }
                  }
                  if ($row['loinhan'] == 'x' || $row['loinhan'] == 'X') {
                    if ($row['socuoi'] == 1 || $row['socuoi'] == 2 || $row['socuoi'] == 3 || $row['socuoi'] == 4) {
                      echo '<span class="badge bg-success">Thắng</span>';
                    } else {
                      echo '<span class="badge bg-danger">Thua</span>';
                    }
                  }
                  if ($row['loinhan'] == 'y' || $row['loinhan'] == 'Y') {
                    if ($row['socuoi'] == 5 || $row['socuoi'] == 6 || $row['socuoi'] == 7 || $row['socuoi'] == 8) {
                      echo '<span class="badge bg-success">Thắng</span>';
                    } else {
                      echo '<span class="badge bg-danger">Thua</span>';
                    }
                  }
                  if ($row['loinhan'] == 't3' || $row['loinhan'] == 'T3') {
                    if ($tong3 == 7 || $tong3 == 8 || $tong3 == 9) {
                      echo '<span class="badge bg-success">Thắng</span>';
                    } else {
                      echo '<span class="badge bg-danger">Thua</span>';
                    }
                  }
                  if ($row['loinhan'] == 'C1' || $row['loinhan'] == 'c1') {
                    if ($row['socuoi'] == 0 || $row['socuoi'] == 3 || $row['socuoi'] == 6) {
                      echo '<span class="badge bg-success">Thắng</span>';
                    } else {
                      echo '<span class="badge bg-danger">Thua</span>';
                    }
                  }
                  if ($row['loinhan'] == 'C2' || $row['loinhan'] == 'c2') {
                    if ($row['socuoi'] == 1 || $row['socuoi'] == 4 || $row['socuoi'] == 7) {
                      echo '<span class="badge bg-success">Thắng</span>';
                    } else {
                      echo '<span class="badge bg-danger">Thua</span>';
                    }
                  }
                  if ($row['loinhan'] == 'C3' || $row['loinhan'] == 'c3') {
                    if ($row['socuoi'] == 2 || $row['socuoi'] == 5 || $row['socuoi'] == 8) {
                      echo '<span class="badge bg-success">Thắng</span>';
                    } else {
                      echo '<span class="badge bg-danger">Thua</span>';
                    }
                  }
                  if ($row['loinhan'] == 'max1' || $row['loinhan'] == 'Max1') {
                    if ($socuoi_max2 == 01 || $socuoi_max2 == 21 || $socuoi_max2 == 31 || $socuoi_max2 == 41 || $socuoi_max2 == 51 || $socuoi_max2 == 61 || $socuoi_max2 == 71 || $socuoi_max2 == 81 || $socuoi_max2 == 91 || $socuoi_max2 == 00 || $socuoi_max2 == 11 || $socuoi_max2 == 22 || $socuoi_max2 == 33 || $socuoi_max2 == 44 || $socuoi_max2 == 55 || $socuoi_max2 == 66 || $socuoi_max2 == 77 || $socuoi_max2 == 88 || $socuoi_max2 == 99) {
                      echo '<span class="badge bg-success">Thắng</span>';
                    } else {
                      echo '<span class="badge bg-danger">Thua</span>';
                    }
                  }
                  if ($row['loinhan'] == 'max2' || $row['loinhan'] == 'Max2') {
                    if ($socuoi_max3 == 111 || $socuoi_max3 == 222 || $socuoi_max3 == 333 || $socuoi_max3 == 444) {
                      echo '<span class="badge bg-success">Thắng</span>';
                    } else {
                      echo '<span class="badge bg-danger">Thua</span>';
                    }
                  }
                  if ($row['loinhan'] == 'max3' || $row['loinhan'] == 'Max3') {
                    if ($socuoi_max4 == 8888) {
                      echo '<span class="badge bg-success">Thắng</span>';
                    } else {
                      echo '<span class="badge bg-danger">Thua</span>';
                    }
                  }
                  ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <hr style="margin-top: 25px; margin-bottom: 25px;">
</div>