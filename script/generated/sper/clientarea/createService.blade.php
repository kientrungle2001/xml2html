<div class="container mt-3">
    <ol class="breadcrumb">
        <li>
            <a href="/">
                Trang chủ
            </a>
        </li>
        <li class="active">
             Tài khoản 
        </li>
    </ol>
</div>
<div class="container" ng-controller="Sper.ClientArea.CreateService">
    <div class="row-pd-5 row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading pd-0">
                    <div class="thumbnail mg-0">
                        <img class="img-circle img-responsive" src="http://placehold.it/64x64" />
                        <div class="text-center caption">
                             Đinh Nhật Nam
                            <br />
                             
                            <small>
                                dinhnhatnam@gmail.com
                            </small>
                             
                        </div>
                    </div>
                </div>
                <ul class="account-menu list-group">
                    <li class="active list-group-item">
                        <a href="/clientarea/info">
                            <span class="fa fa-user fa-2x"></span>
                             Thông tin tài khoản
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/changepassword">
                            <span class="fa fa-user fa-2x"></span>
                             Đổi mật khẩu
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/trophy">
                            <span class="fa fa-trophy fa-2x"></span>
                             Điểm thưởng
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/payment">
                            <span class="fa fa-credit-card fa-2x"></span>
                             Thanh toán
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/collection">
                            <span class="fa fa-bookmark fa-2x"></span>
                             Bộ sưu tập
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/service">
                            <span class="fa fa-cubes fa-2x"></span>
                             Dịch vụ của bạn
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/privilege">
                            <span class="fa fa-user fa-2x"></span>
                             Phân quyền chi nhánh
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/feedback">
                            <span class="fa fa-inbox fa-2x"></span>
                             Góp ý
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/history">
                            <span class="fa fa-history fa-2x"></span>
                             Lịch sử
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/logout">
                            <span class="fa fa-power-off fa-2x"></span>
                             Thoát
                        </a>
                    </li>
                </ul>
                <div class="panel-footer pd-0">
                    <a class="btn-block btn btn-success" href="/clientarea/createservice">
                         Tạo dịch vụ 
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                     Tạo dịch vụ 
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <img class="img-responsive" src="http://placehold.it/1366x300" />
                        </div>
                        <div class="form-group">
                            <h2>
                                Mô tả dịch vụ
                            </h2>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nhập tên công ty / cửa hàng / đội nhóm" />
                        </div>
                        <div class="form-group">
                            <select class="form-control" placeholder="Chọn lĩnh vực">
                                <option value="1">
                                    Chọn lĩnh vực
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nhập địa chỉ chính" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Chọn định vị" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Số chi nhánh" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nhập số điện thoại" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nhập Email" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nhập Website" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Mô tả chi tiết" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">
                                Hoàn thành
                            </button>
                            <button class="btn btn-default">
                                Chỉnh sửa
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>