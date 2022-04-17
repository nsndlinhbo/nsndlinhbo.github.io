<?php
$sql_check_status = hoangphuc("SELECT * FROM `momo` ORDER BY thoigian DESC LIMIT 1");
$check_status = fetch_array($sql_check_status);
?>
  <div class="row justify-content-md-center box-cl">
  <div class="text-center mb-3">
    <h3 class="text-uppercase">TRẠNG THÁI MOMO</h3>
  </div>
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr role="row" style="background-color: #1071a5; color: #fff;">
          <th class="text-center text-white">Số điện thoại</th>
          <th class="text-center text-white">Trạng thái</th>
          <th class="text-center text-white">Thời gian</th>
          <th class="text-center text-white">Hạn mức</th>
        </tr>
      </thead>
      <tbody role="alert" aria-live="polite" aria-relevant="all" id="result-table" class="">
        <tr>
          <td>0926214712</td>
          <td><span class="badge bg-success text-uppercase">Hoạt động</span></td>
          <td><?= date("h:i:s - d/m/Y") ?></td>
          <td><span class="cash-format"><?= formatvnd(30000 + $check_status['amount']); ?> VND</span> / 30.000.000 VND</td>
        </tr>

      </tbody>
    </table>
  </div>
      </div>