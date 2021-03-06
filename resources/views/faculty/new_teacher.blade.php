@extends('faculty.layout')
@section('name_page')
  Thêm giảng viên
@endsection
@section('main')
  <ul class="nav nav-tabs" id="tab-01">
    <li class="active"><a href="#tab1hellowWorld">Chọn file excel </a></li>
    <li><a href="#tab1FollowUs">Thêm thủ công</a></li>
  </ul>
  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1hellowWorld">
      <div class="row column-seperation">
        <div class="col-md-12">
          <form id="upload_excel_teacher" class="form-group" method="post" enctype="multipart/form-data">

            <input id="excel_import_new_teacher" type="file" name="excel_import">
            <input id="excel_import_token" name="_token" value="{{csrf_token()}}" hidden>
          </form>
          <div id="show_item_excel">
            <table class="table table-bordered">
                <thead id="thead_import_teacher">
                  
                </thead>
                <tbody id="tbody_excel_teacher">
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane" id="tab1FollowUs" style="height: 549px;">
      <div class="row">
          <div class="col-md-12">
      <div class="grid simple">
        <div class="grid-title no-border">
          <h4><span  class="semi-bold">Thêm giảng viên</span></h4>
          <div class="tools"> <a href="javascript:;" class="remove"></a> </div>
        </div>

        <div class="grid-body">
                      <div class="row">
          <div class="col-md-6">
              <div class="form-group">

              <label class="semi-bold">Họ và tên</label>
              <p id="name_error" class="text-error"></p>
              <input type="text" id="name" class="form-control" placeholder="Họ và tên">
            </div>
            <div class="form-group">
              <label class="semi-bold">Mã giảng viên</label>
              <p id="code_error" class="text-error"></p>
              <input type="text" id="code" class="form-control" placeholder="Mã giảng viên">
            </div>
            <div class="form-group">
              <label class="semi-bold">Học vị</label>
              <p id="degree_error" class="text-error"></p>
              <input type="text" id="degree" class="form-control" placeholder="Học vị">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="semi-bold">Vnu email</label>
              <p id="vnu_email_error" class="text-error"></p>
              <input type="text" id="vnu_email" class="form-control" placeholder="Vnu email">
            </div>
            <div class="row">
                <div class="col-md-12">
                  <label class="semi-bold">Thuộc bộ môn</label>
                  <p id="department_id_error" class="text-error"></p>
                  <select name="department_id" class="form-group" style="width: 100%;">
                    <option class="first_select" value="">Chọn</option>
                    @foreach($departments as $item)
                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                    @endforeach
                  </select>
                </div>
                
                <div class="col-md-12">
                  <label class="semi-bold">Chức vụ trong khoa</label>
                  <p id="chucvu_error" class="text-error"></p>
                  <select name="chucvu" class="form-group" style="width: 100%;">
                    <option class="first_select" value="">Chọn</option>
                    <option value="giang-vien">Giảng viên</option>
                    <option value="pho-khoa">Phó khoa</option>
                    <option value="truong-khoa">Trưởng khoa</option>
                  </select>
                </div>
                </div>
                </div>
            </div>
            <div id="new_teacher_form"><button id="start_new_teacher_form" type="button" class="btn btn-primary">Xong</button> 
            <button id="reset_form" type="button" class="btn btn-primary" >Nhập lại</button></div>
        </div>
      </div>
    </div>
      </div>
    </div>

  </div>
@endsection