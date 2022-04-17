<?php
$caidat_momo = hoangphuc("SELECT * FROM `caidat_momo` WHERE id=1");
$caidat = fetch_array($caidat_momo);
?>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><b>GAME 1</b></button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true"><b>GAME 2</b></button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#v-pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="true"><b>GAME 3</b></button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-me1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-me1" type="button" role="tab" aria-controls="pills-me1" aria-selected="true"><b>GAME 4</b></button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-me2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-me2" type="button" role="tab" aria-controls="pills-me2" aria-selected="true"><b>GAME 5</b></button>
    </li>
</ul>
<div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="card">
            <h5 class="card-header" style="background-color: #1071a5; color: #fff;"><i class="fa fa-bookmark"></i> Cách chơi</h5>
            <div class="card-body turn active" turn-tab="1000" style="padding-top: 0px;">
                Cách chơi vô cùng đơn giản : <br>
                - Chuyển tiền vào một trong các số momo sau : <code>0926214712</code><br>
                - Nội dung chuyển : <b>A</b> hoặc <b>B</b> (nếu đuôi mã giao dịch có các số sau) <br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover text-center">
                        <thead>
                        <tr role="row" style="background-color: #1071a5;">
                            <th class="text-center text-white">Nội Dung</th>
                            <th class="text-center text-white">Số Cuối Mã GD</th>
                            <th class="text-center text-white">Tiền Nhận</th>

                        </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all" id="result-table" class="">

                        <tr>
                            <td><b>A</b></td>
                            <td><code>0</code> - <code>2</code> - <code>4</code> - <code>6</code> - <code>8</code></td>
                            <td><b>x1.8 tiền gửi</b></td>
                        </tr>
                        <tr>
                            <td><b>B</b></td>
                            <td> <code>1</code> - <code>3</code> - <code>5</code> - <code>7</code> - <code>9</code></td>
                            <td><b>x1.8 tiền gửi</b></td>
                        </tr>


                        </tbody>
                    </table>
                </div>

                - Tiền thắng sẽ = <b>Tiền gửi*1.8 (gửi 100k nhận được 180k)</b> <br>
                - <b><font color="#FF0000">Lưu ý </font> :</b> Số tiền gửi nhỏ nhất là <b><?= formatvnd($caidat['toithieu']) ?> VNĐ</b> và lớn nhất <b><?= formatvnd($caidat['toida']) ?> VNĐ</b>, nếu chuyển nhỏ hơn hoặc lớn hơn sẽ không được hoàn tiền.
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <div class="card">
            <h5 class="card-header" style="background-color: #1071a5; color: #fff;"><i class="fa fa-bookmark"></i> Cách chơi</h5>
            <div class="card-body turn active" turn-tab="1000" style="padding-top: 0px;">
                Cách chơi vô cùng đơn giản : <br>
                - Chuyển tiền vào một trong các tài khoản : <code>0926214712</code><br>
                - Nội dung chuyển : <b>X</b> hoặc <b>Y</b> (nếu đuôi mã giao dịch có các số sau) <br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover text-center">
                        <thead>
                        <tr role="row" style="background-color: #1071a5;">
                            <th class="text-center text-white">Nội dung</th>
                            <th class="text-center text-white">Số</th>
                            <th class="text-center text-white">Tiền nhận</th>

                        </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all" id="result-table" class="">

                        <tr>
                            <td><b>X</b></td>
                            <td> <code>1</code> - <code>2</code> - <code>3</code> - <code>4</code></td>
                            <td><b>x2 tiền gửi</b></td>
                        </tr>
                        <tr>
                            <td><b>Y</b></td>
                            <td><code>5</code> - <code>6</code> - <code>7</code> - <code>8</code></td>
                            <td><b>x2 tiền gửi</b></td>
                        </tr>

                        </tbody>
                    </table>
                </div>

                - Tiền thắng sẽ = <b>Tiền gửi*2 (gửi 100k nhận được 200k)</b> <br>
                - <b><font color="#FF0000">Lưu ý </font>:</b> Số tiền gửi nhỏ nhất là <b><?= formatvnd($caidat['toithieu']) ?> VNĐ</b> và lớn nhất <b><?= formatvnd($caidat['toida']) ?> VNĐ</b>, nếu chuyển nhỏ hơn hoặc lớn hơn sẽ không được hoàn tiền.
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
        <div class="card">
            <h5 class="card-header" style="background-color: #1071a5; color: #fff;"><i class="fa fa-bookmark"></i> Cách chơi</h5>
            <div class="card-body turn active" turn-tab="1000" style="padding-top: 0px;">
                Cách chơi vô cùng đơn giản : <br>
                - Chuyển tiền vào một trong các tài khoản : <code>0926214712</code><br>
                - Nội dung chuyển : <b>T3</b>  (nếu tổng đuôi mã giao dịch bằng số sau) <br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover text-center">
                        <thead>
                        <tr role="row" style="background-color: #1071a5;">
                            <th class="text-center text-white">Nội dung</th>
                            <th class="text-center text-white">Tổng 3 Số Cuối</th>
                            <th class="text-center text-white">Tiền nhận</th>

                        </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all" id="result-table" class="">

                        <tr>
                            <td><b>T3</b></td>
                            <td> <code>7</code></td>
                            <td><b>x2.5 tiền gửi</b></td>
                        </tr>
                        <tr>
                            <td><b>T3</b></td>
                            <td> <code>8</code></td>
                            <td><b>x2.5 tiền gửi</b></td>
                        </tr>
                        <tr>
                            <td><b>T3</b></td>
                            <td> <code>9</code></td>
                            <td><b>x2.5 tiền gửi</b></td>
                        </tr>

                        </tbody>
                    </table>
                </div>

                - Tiền thắng sẽ = <b>Tiền gửi*3 (gửi 100k nhận được 300k)</b> <br>
                - <b><font color="#FF0000">Lưu ý </font> :</b> Số tiền gửi nhỏ nhất là <b><?= formatvnd($caidat['toithieu']) ?> VNĐ</b> và lớn nhất <b><?= formatvnd($caidat['toida']) ?> VNĐ</b>, nếu chuyển nhỏ hơn hoặc lớn hơn sẽ không được hoàn tiền.
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="v-pills-me1" role="tabpanel" aria-labelledby="v-pills-me1-tab">
        <div class="card">
            <h5 class="card-header" style="background-color: #1071a5; color: #fff;"><i class="fa fa-bookmark"></i> Cách chơi</h5>
            <div class="card-body turn active" turn-tab="1000" style="padding-top: 0px;">
                Cách chơi vô cùng đơn giản : <br>
                - Chuyển tiền vào một trong các tài khoản : <code>0926214712</code><br>
                - Nội dung chuyển : <b>C1</b> hoặc <b>C2,C3</b> (nếu đuôi mã giao dịch có các số sau) <br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover text-center">
                        <thead>
                        <tr role="row" style="background-color: #1071a5;">
                            <th class="text-center text-white">Nội dung</th>
                            <th class="text-center text-white">Số</th>
                            <th class="text-center text-white">Tiền nhận</th>

                        </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all" id="result-table" class="">

                        <tr>
                            <td><b>C1</b></td>
                            <td> <code>0</code> - <code>3</code> - <code>6</code> </td>
                            <td><b>x3 tiền gửi</b></td>
                        </tr>
                        <tr>
                            <td><b>C2</b></td>
                            <td><code>1</code> - <code>4</code> - <code>7</code></td>
                            <td><b>x3 tiền gửi</b></td>
                        </tr>
                        <tr>
                            <td><b>C3</b></td>
                            <td><code>2</code> - <code>5</code> - <code>8</code> </td>
                            <td><b>x3 tiền gửi</b></td>
                        </tr>

                        </tbody>
                    </table>
                </div>

                - Tiền thắng sẽ = <b>Tiền gửi*3 (gửi 100k nhận được 300k)</b> <br>
                - <b><font color="#FF0000">Lưu ý </font>:</b> Số tiền gửi nhỏ nhất là <b><?= formatvnd($caidat['toithieu']) ?> VNĐ</b> và lớn nhất <b><?= formatvnd($caidat['toida']) ?> VNĐ</b>, nếu chuyển nhỏ hơn hoặc lớn hơn sẽ không được hoàn tiền.
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="v-pills-me2" role="tabpanel" aria-labelledby="v-pills-me2-tab">
        <div class="card">
            <h5 class="card-header" style="background-color: #1071a5; color: #fff;"><i class="fa fa-bookmark"></i> Cách chơi</h5>
            <div class="card-body turn active" turn-tab="1000" style="padding-top: 0px;">
                Cách chơi vô cùng đơn giản : <br>
                - Chuyển tiền vào một trong các tài khoản : <code>0926214712</code><br>
                - Nội dung chuyển : <b>MAX</b> (nếu đuôi mã giao dịch có các số sau) <br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover text-center">
                        <thead>
                        <tr role="row" style="background-color: #1071a5;">
                            <th class="text-center text-white">Nội dung</th>
                            <th class="text-center text-white">Số</th>
                            <th class="text-center text-white">Tiền nhận</th>

                        </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all" id="result-table" class="">

                        <tr>
                            <td><b>MAX1</b></td>
                            <td> <code>01</code> - <code>21</code> - <code>31</code> - <code>41</code> - <code>51</code> - <code>61</code> - <code>71</code> - <code>81</code> - <code>91</code> <br> <code>00</code> - <code>11</code> - <code>22</code> - <code>33</code> - <code>44</code> - <code>55</code> - <code>66</code> - <code>77</code> - <code>88</code> - <code>99</code> </td>
                            <td><b>x3 tiền gửi</b></td>
                        </tr>
                        <tr>
                            <td><b>MAX2</b></td>
                            <td><code>111</code> - <code>222</code> - <code>333</code> - <code>444</code></td>
                            <td><b>x4 tiền gửi</b></td>
                        </tr>
                        <tr>
                            <td><b>MAX3</b></td>
                            <td> <code>8888</code> </td>
                            <td><b>x5 tiền gửi</b></td>
                        </tr>

                        </tbody>
                    </table>
                </div>

                - Tiền thắng sẽ = <b>Tiền gửi*5 (gửi 100k nhận được 500k)</b> <br>
                - <b><font color="#FF0000">Lưu ý </font>:</b> Số tiền gửi nhỏ nhất là <b><?= formatvnd($caidat['toithieu']) ?> VNĐ</b> và lớn nhất <b><?= formatvnd($caidat['toida']) ?> VNĐ</b>, nếu chuyển nhỏ hơn hoặc lớn hơn sẽ không được hoàn tiền.
            </div>
        </div>
    </div>