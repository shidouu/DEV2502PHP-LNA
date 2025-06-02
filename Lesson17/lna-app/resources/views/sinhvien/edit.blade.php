@extends('_layouts.master')
@section('title', 'Sửa thông tin sinh viên')

@section('content')
    <section class="container my-3">
        <div class="card">
            <form action="{{ route('sinhvien.editSubmit') }}" method="post">
                @csrf
                <div class="card-header">
                    <h3>Sửa thông tin sinh viên</h3>
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="masv">Mã sinh viên</span>
                        <input type="text" class="form-control" name="MaSV" value="{{ $sinhvien->MaSV }}" readonly />
                        @error('MaSV')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Họ sinh viên</span>
                        <input type="text" class="form-control" name="HoSV" value="{{ $sinhvien->HoSV }}" />
                        @error('HoSV')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Tên sinh viên</span>
                        <input type="text" class="form-control" name="TenSV" value="{{ $sinhvien->TenSV }}" />
                        @error('TenSV')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Ngày sinh</span>
                        <input type="date" class="form-control" name="NgaySinh"
                            value="{{ $sinhvien->NgaySinh ? \Carbon\Carbon::parse($sinhvien->NgaySinh)->format('Y-m-d') : '' }}" />
                        @error('NgaySinh')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Nơi sinh</span>
                        <input type="text" class="form-control" name="NoiSinh" value="{{ $sinhvien->NoiSinh }}" />
                        @error('NoiSinh')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Phái</span>
                        <select class="form-select" name="Phai">
                            <option value="1" {{ $sinhvien->Phai == 1 ? 'selected' : '' }}>Nam</option>
                            <option value="0" {{ $sinhvien->Phai == 0 ? 'selected' : '' }}>Nữ</option>
                        </select>
                        @error('Phai')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Mã khoa</span>
                        <input type="text" class="form-control" name="MaKH" value="{{ $sinhvien->MaKH }}" />
                        @error('MaKH')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Điểm trung bình</span>
                        <input type="number" step="0.01" class="form-control" name="DiemTrungBinh"
                            value="{{ $sinhvien->DiemTrungBinh }}" />
                        @error('DiemTrungBinh')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Học bổng</span>
                        <input type="number" step="0.01" class="form-control" name="HocBong"
                            value="{{ $sinhvien->HocBong }}" />
                        @error('HocBong')
                            <br /><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Ghi lại" />
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
