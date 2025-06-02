@extends('_layouts.master')
@section('title', 'Danh sách môn học')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <h1>Danh sách môn học</h1>
                <a href="/mon-hoc/create" class="btn btn-primary">Thêm mới </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã môn học</th>
                            <th>Tên môn học</th>
                            <th>Số tiết</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 0;
                        @endphp
                        @foreach ($monhocs as $item)
                            <tr>
                                <td class="text-center">{{ ++$stt }}</td>
                                <td>{{ $item->MaMH }}</td>
                                <td>{{ $item->TenMH }}</td>
                                <td>{{ $item->Sotiet }}</td>
                                <td class="text-center">
                                    <a href="/mon-hoc/detail/{{ $item->MaMH }}" class="btn btn-success">
                                        Chi tiết</a>
                                    <a href="/mon-hoc/edit/{{ $item->MaMH }}" class="btn btn-primary">
                                        Sửa</a>
                                    {{-- <a href="{{ route('monhoc.delete', ['mamh' => $item->MaMH]) }}" class="btn btn-danger"
                                        onclick="return confirm('Bạn chắc chắn muốn xóa môn học này?');"
                                        >
                                        Xóa</a> --}}
                                    <a href="#"
                                        onclick="confirmDelete('{{ route('monhoc.delete', ['mamh' => $item->MaMH]) }}')"
                                        class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                <h5>Tổng số môn học: <strong class="text-danger">{{ $monhocs->count() }}</strong></h5>
                <p>Môn học có số tiết lớn nhất: <strong class="text-primary">{{ $monhocs->max('Sotiet') }}</strong> </p>
                <p>Môn học có số tiết nhỏ nhất: <strong class="text-secondary">{{ $monhocs->min('Sotiet') }}</strong> </p>
                <p>Số tiết trung bình: <strong
                        class="text-success">{{ number_format($monhocs->avg('Sotiet'), 2) }}</strong>
                </p>
            </div>
        </div>

    </div>

    <script>
        function confirmDelete(url) {
            Swal.fire({
                title: 'Bạn chắc chắn muốn xóa?',
                text: "Sau khi xóa, bạn sẽ không thể khôi phục dữ liệu này!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Vâng, xóa đi!',
                cancelButtonText: 'Không'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            })
        }
    </script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Thành công!',
                text: '{{ session('success') }}',
                timer: 1500,
                showConfirmButton: false
            });
        </script>
    @endif
@endsection
