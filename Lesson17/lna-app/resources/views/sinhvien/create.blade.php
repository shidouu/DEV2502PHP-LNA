@extends('_layouts.master')
@section('title', 'Danh sách Sinh viên')

@section('content')
    <section class="container my-3">
        <div class="card">
            <form action="{{ route('sinhvien.createSubmit') }}" method="post">
                @csrf
                <div class="card-header">
                    <h3>Thêm mới sinh viên</h3>
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="masv">Mã sinh viên</span>
                        <input type="text" class="form-control" name="MaSV" value="{{ old('MaSV') }}" required />
                        @error('MaSV')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="hosv">Họ sinh viên</span>
                        <input type="text" class="form-control" name="HoSV" value="{{ old('HoSV') }}" />
                        @error('HoSV')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="tensv">Tên sinh viên</span>
                        <input type="text" class="form-control" name="TenSV" value="{{ old('TenSV') }}" />
                        @error('TenSV')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="ngaysinh">Ngày sinh</span>
                        <input type="date" class="form-control" name="NgaySinh" value="{{ old('NgaySinh') }}" />
                        @error('NgaySinh')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="noisinh">Nơi sinh</span>
                        <input type="text" class="form-control" name="NoiSinh" value="{{ old('NoiSinh') }}" />
                        @error('NoiSinh')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="phai">Phái</span>
                        <select class="form-select" name="Phai">
                            <option value="1" {{ old('Phai') == '1' ? 'selected' : '' }}>Nam</option>
                            <option value="0" {{ old('Phai') == '0' ? 'selected' : '' }}>Nữ</option>
                        </select>
                        @error('Phai')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="makh">Mã khoa</span>
                        <input type="text" class="form-control" name="MaKH" value="{{ old('MaKH') }}" />
                        @error('MaKH')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="diemtrungbinh">Điểm trung bình</span>
                        <input type="number" step="0.01" class="form-control" name="DiemTrungBinh"
                            value="{{ old('DiemTrungBinh') }}" />
                        @error('DiemTrungBinh')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="hocbong">Học bổng</span>
                        <input type="number" step="0.01" class="form-control" name="HocBong"
                            value="{{ old('HocBong') }}" />
                        @error('HocBong')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="btnSubmit" value="Ghi lại" />
                    <a href="/sinh-vien" class="btn btn-secondary">Quay lại</a>
                </div>
            </form>
        </div>

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
    </section>
@endsection
