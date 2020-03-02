create database Quanlybanhang
go
use Quanlybanhang
go



--Khach Hang
create table KhachHang(
	MSKH varchar(5)  primary key not null,
	HoTenKH varchar(50) not null default 'No name',
	DiaChi varchar(50) not null default'no name',
	SoDienThoai varchar(10) not null default '0xxxx'
)

--NhanVien
create table NhanVien(
	MSNV varchar(5)  primary key not null,
	HoTenNV varchar(50) not null default 'No name',
	ChucVu varchar(50) not null default 'No name',
	DiaChi varchar(50) default 'No name' ,
	SoDienThoai varchar(10) not null default '0xxxx'
)

--Nhom Hang Hoa
create table NhomHangHoa(
	MaNhom int AUTO_INCREMENT not null primary key,
	TenNhom varchar(50) not null default 'No name',
    ThuTu int  not null default 0
)

--HangHoa
create table HangHoa(
	MSHH int AUTO_INCREMENT not null primary key,
	TenHH varchar(50) not null default 'No name',
	Gia int not null default 0,
	Hinh varchar(50) not null default 'No img',
    MoTaHH varchar(200),
	MaNhom int not null,
    SoLuongHang tinyint not null default 0,
	FOREIGN KEY(MaNhom) REFERENCES NhomHangHoa(MaNhom)
);	

--DatHang
create table DatHang(
	SoDonDH varchar(5) primary key not null,
	MSKH varchar(5) not null, 
	MSNV varchar(5),
	NgayDH Datetime not null, -- dd/yy/mm 
	TrangThai varchar(10) not null default 'Hết Hàng',

	FOREIGN KEY(MSKH) REFERENCES KhachHang(MSKH),
	FOREIGN KEY(MSNV) REFERENCES NhanVien(MSNV)
)	

--ChitietDH
create table ChiTietDatHang(
	SoDonDH varchar(5) not null, 
	MSHH varchar(5) not null, 
	SoLuong tinyint not null default 0,
	GiaDatHang real not null default 0.0,

	FOREIGN KEY(SoDonDH) REFERENCES DatHang(SoDonDH),
	FOREIGN KEY(MSHH) REFERENCES HangHoa(MSHH)
)