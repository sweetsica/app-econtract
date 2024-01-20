@extends('Layout.LayoutMater')

@section('content')
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <div class="d-flex justify-content-between align-items-center mb-3"> --}}
                        <h4 class="header-title mt-0 mb-3">Danh sách hợp đồng</h4>
                        {{-- <button class="btn btn-danger">Thêm</button> --}}
                        {{-- </div> --}}
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên đối tác</th>
                                    <th>Địa chỉ</th>
                                    <th>Mã hợp đồng</th>
                                    <th>Số điện thoại</th>
                                    <th>Loại hợp đồng</th>
                                    <th>Ngày đăng ký</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Đại lý 01</td>
                                    <td>Hà nội</td>
                                    <td>HD-2022/4-035211</td>
                                    <td>9999</td>
                                    <td>Hợp đồng chính sách mới</td>
                                    <td>19/01/2024</td>
                                    <td>Cấp độ: 1</td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="{{ route('contract.show', 1) }}" class="text-black">
                                                <i data-feather="eye" role="button"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Đại lý 01</td>
                                    <td>Hà nội</td>
                                    <td>HD-2022/4-035211</td>
                                    <td>9999</td>
                                    <td>Hợp đồng chính sách mới</td>
                                    <td>19/01/2024</td>
                                    <td>Cấp độ: 1</td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="{{ route('contract.show', 1) }}" class="text-black">
                                                <i data-feather="eye" role="button"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>
@endsection
