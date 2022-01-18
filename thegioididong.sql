-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 18, 2022 lúc 09:03 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thegioididong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(20) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `startus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id_banner`, `tieude`, `image`, `id_dm`, `startus`) VALUES
(1, 'test1', 's1.png', 0, 0),
(2, 'samsung mới cực hot', 'S21-830-300-830x300.png', 0, 0),
(3, 'iphone mới', 's2.png', 0, 0),
(4, 'vivo v19Neo', 's4.png', 0, 0),
(5, 'test', 'S21-830-300-830x300.png', 0, 0),
(6, 'test', '800-300-800x300-30.png', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(50) NOT NULL,
  `id_sp` int(50) NOT NULL,
  `id_user` int(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `ngaybl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `id_sp`, `id_user`, `hoten`, `noidung`, `ngaybl`, `trangthai`) VALUES
(13, 81, 25, 'Hà nôbi', 'ngay gio', '2022-01-12 09:09:25', 1),
(14, 81, 25, 'Hà nôbi', 'test1', '2020-07-14 18:08:33', 1),
(15, 79, 25, 'Hà nôbi', 'cũng ok', '2020-07-14 18:08:36', 1),
(17, 79, 25, 'Hà nôbi', 'ok', '2020-07-14 18:08:38', 1),
(18, 81, 1, 'Vân Hạ', 'lala\r\n', '2020-07-14 18:08:42', 1),
(19, 81, 1, 'Vân Hạ', 'chắc vui', '2020-07-14 18:08:44', 1),
(21, 81, 25, 'Hà nôbi', 'ok nhá', '2020-07-14 18:08:47', 1),
(40, 47, 25, 'Hà nôbi', 'asdasds', '2020-07-16 11:36:36', 1),
(41, 81, 25, 'Hà nôbi', 'ok nha', '2020-07-16 11:37:01', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `name_brand` varchar(255) DEFAULT NULL,
  `SDT` int(20) DEFAULT NULL,
  `Diachi` varchar(255) DEFAULT NULL,
  `mota` varchar(255) NOT NULL,
  `startus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id_brand`, `name_brand`, `SDT`, `Diachi`, `mota`, `startus`) VALUES
(1, 'Apple', 123456789, 'Hà Nội', 'Bán điện thoại macbook', 0),
(2, 'SamSung', NULL, NULL, '', 0),
(3, 'Xiaomi', NULL, NULL, '', 0),
(5, 'OPPO', NULL, NULL, '', 0),
(6, 'ViVo', 0, 'dsda', 'ád', 0),
(7, 'Asus', NULL, NULL, '', 0),
(8, 'Dell', 9999999, 'Hoa kỳ', 'laptop', 0),
(13, 'AVA', 888999111, 'Trung Quốc', 'Pin dự phòng...', 0),
(14, 'Fenda', 988053966, 'Trung Quốc', 'Loa bluetooth,tai nghe', 0),
(15, 'Khác', 0, 'không ', 'không', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_cthd` int(11) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `hinhanh_sp` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `Phuongthucthanhtoan` int(11) NOT NULL,
  `thanhcong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_cthd`, `id_hd`, `id_sp`, `ten_sp`, `hinhanh_sp`, `soluong`, `gia_sp`, `Phuongthucthanhtoan`, `thanhcong`) VALUES
(22, 30, 47, 'Điện thoại iPhone 11 64GB', 'iphone11.jpg', 1, 19490000, 0, 0),
(23, 30, 48, 'Sam Sung Galaxy A50s', 'samsung-galaxy-a50s-(10).jpg', 1, 3500000, 0, 0),
(24, 32, 48, 'Sam Sung Galaxy A50s', 'samsung-galaxy-a50s-(10).jpg', 1, 3500000, 0, 0),
(25, 32, 47, 'Điện thoại iPhone 11 64GB', 'iphone11.jpg', 1, 19490000, 0, 0),
(26, 32, 46, 'OPPO A91', 'oppo-a91-trang-600x600-400x400.png', 2, 5990000, 0, 0),
(56, 69, 46, 'OPPO A91', 'oppo-a91-trang-600x600-400x400.png', 1, 5990000, 0, 0),
(86, 105, 46, 'OPPO A91', 'oppo-a91-trang-600x600-400x400.png', 1, 5990000, 0, 0),
(87, 106, 92, 'testdsad', 'Untitled-1.jpg', 1, 600000, 1, 0),
(88, 107, 47, 'Điện thoại iPhone 11 64GB', 'iphone11.jpg', 1, 19490000, 1, 0),
(89, 108, 46, 'OPPO A91', 'oppo-a91-trang-600x600-400x400.png', 1, 5990000, 1, 0),
(90, 109, 46, 'OPPO A91', 'oppo-a91-trang-600x600-400x400.png', 1, 5990000, 1, 0),
(91, 110, 47, 'Điện thoại iPhone 11 64GB', 'iphone11.jpg', 1, 19490000, 1, 0),
(92, 111, 48, 'Sam Sung Galaxy A50s', 'samsung-galaxy-a50s-(10).jpg', 1, 3500000, 1, 0),
(93, 112, 88, 'sp4', 'q-q-s374j302y-nam-1-400x400.jpg', 1, 1300000, 1, 0),
(94, 113, 88, 'sp4', 'q-q-s374j302y-nam-1-400x400.jpg', 1, 1300000, 1, 0),
(95, 114, 88, 'sp4', 'q-q-s374j302y-nam-1-400x400.jpg', 1, 1300000, 1, 0),
(96, 115, 90, 'test', 'smile-kid-sl004-01-tre-em-1-400x400.jpg', 1, 600000, 1, 0),
(97, 116, 46, 'OPPO A91', 'oppo-a91-trang-600x600-400x400.png', 1, 5990000, 1, 0),
(98, 117, 91, 'test', 'smile-kid-sl004-01-tre-em-1-400x400.jpg', 1, 1200000, 1, 0),
(99, 118, 46, 'OPPO A91', 'oppo-a91-trang-600x600-400x400.png', 1, 5990000, 1, 0),
(101, 120, 59, 'Máy tính bảng iPad Pro 11 inch Wifi 128GB (2020)', 'ipad-pro-11-inch-2020-xam-400x460-fix-400x460.png', 1, 21490000, 1, 0),
(102, 121, 59, 'Máy tính bảng iPad Pro 11 inch Wifi 128GB (2020)', 'ipad-pro-11-inch-2020-xam-400x460-fix-400x460.png', 1, 21490000, 1, 0),
(103, 122, 46, 'OPPO A91', 'oppo-a91-trang-600x600-400x400.png', 1, 5990000, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL,
  `ten_dm` varchar(255) NOT NULL,
  `dequi` int(255) NOT NULL,
  `startus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `ten_dm`, `dequi`, `startus`) VALUES
(1, 'Điện thoại', 0, 0),
(2, 'Tablet', 0, 0),
(3, 'Laptop', 0, 0),
(4, 'Phụ kiện', 0, 0),
(5, 'Đồng Hồ Thông Minh', 0, 0),
(6, 'Đồng hồ thời trang', 0, 0),
(14, 'Máy in, PC', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hd` int(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `Total` int(255) NOT NULL,
  `ngaydathang` date NOT NULL DEFAULT current_timestamp(),
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_hd`, `id_user`, `hoten`, `diachi`, `dienthoai`, `ghichu`, `Total`, `ngaydathang`, `trangthai`) VALUES
(30, 28, 'Dương', 'Bắc Giang', 988053900, 'giàu quá mà', 22990000, '2020-06-29', 1),
(32, 2, 'Đoàn Đây', 'Bắc Giang', 328275274, 'vì đoàn thích', 34970000, '2020-06-30', 0),
(69, 25, 'Hà', 'Thái Nguyên', 328275274, 'ok', 5990000, '2020-07-04', 0),
(105, 25, 'Hà nôbi', 'thái nguyên quang sinh', 328275274, '', 5990000, '2021-09-07', 0),
(106, 32, 'ha', 'thái nguyên quang vinh', 988585858, '', 600000, '2022-01-11', 0),
(107, 32, 'ha', 'thái nguyên quang vinh', 988585858, 'ko', 19490000, '2022-01-11', 0),
(108, 32, 'ha', 'thái nguyên quang vinh', 988585858, '', 5990000, '2022-01-11', 0),
(109, 32, 'ha', 'thái nguyên quang vinh', 988585858, 'dev', 5990000, '2022-01-11', 0),
(110, 32, 'ha', 'thái nguyên quang vinh', 988585858, 'dsad', 19490000, '2022-01-11', 4),
(111, 32, 'ha', 'thái nguyên quang vinh', 988585858, '', 3500000, '2022-01-11', 2),
(112, 32, 'ha', 'thái nguyên quang vinh', 988585858, 'đeede', 1300000, '2022-01-11', 2),
(113, 32, 'ha', 'vietnam', 988585858, 'aaa', 1300000, '2022-01-11', 2),
(114, 32, 'ha', 'vietnam', 988585858, 'dev', 1300000, '2022-01-11', 2),
(115, 32, 'ha', 'thái nguyên', 988585858, 'test', 600000, '2022-01-11', 0),
(116, 32, 'ha', 'vietnam', 988585858, 'fsfds', 5990000, '2022-01-11', 3),
(117, 32, 'dev test', 'vietnam', 988585858, 'dev', 1200000, '2022-01-11', 2),
(118, 32, 'ha nobi', 'thái nguyên', 988585858, 'đá', 5990000, '2022-01-11', 3),
(120, 32, 'vũ Hà', 'thái nguyên quang vinh', 988585858, 'dsad', 21490000, '2022-01-11', 0),
(121, 32, 'ha', 'vietnam', 988585858, 'dsad', 21490000, '2022-01-11', 0),
(122, 32, 'ha nobi', 'vietnam', 988585858, 'ádsadsad', 5990000, '2022-01-13', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(20) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `ten_sp` varchar(255) DEFAULT NULL,
  `gia_goc` int(255) NOT NULL,
  `gia_sp` int(11) DEFAULT NULL,
  `id_brand` int(11) DEFAULT NULL,
  `hinhanh_sp` varchar(255) DEFAULT NULL,
  `soluong` int(255) DEFAULT NULL,
  `mota_sp` varchar(255) DEFAULT NULL,
  `thongso` varchar(255) NOT NULL,
  `ngaynhapkho_sp` date DEFAULT NULL,
  `startus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `id_dm`, `ten_sp`, `gia_goc`, `gia_sp`, `id_brand`, `hinhanh_sp`, `soluong`, `mota_sp`, `thongso`, `ngaynhapkho_sp`, `startus`) VALUES
(46, 1, 'OPPO A91', 5990000, 5990000, 5, 'oppo-a91-trang-600x600-400x400.png', 3, 'Chụp ảnh siêu nét', 'ok', '2019-12-05', 0),
(47, 1, 'Điện thoại iPhone 11 64GB', 0, 19490000, 1, 'iphone11.jpg', 8, 'Sau bao nhiêu chờ đợi cũng như đồn đoán thì cuối cùng Apple đã chính thức giới thiệu bộ 3 siêu phẩm iPhone 11 mạnh mẽ nhất của mình vào tháng 9/2019.', 'hòa hảo', '2020-02-22', 0),
(48, 1, 'Sam Sung Galaxy A50s', 0, 3500000, 2, 'samsung-galaxy-a50s-(10).jpg', 8, 'Nằm trong sứ mệnh nâng cao khả năng cạnh tranh với các smartphone đến từ nhiều nhà sản xuất Trung Quốc, mới đây Samsung tiếp tục giới thiệu phiên bản Samsung Galaxy A50s với nhiều tính năng mà trước đây chỉ xuất hiện trên dòng cao cấp', 'ok nhá', '2019-01-01', 0),
(49, 1, 'OPPO A9', 0, 2500000, 5, 'oppo-a9-(6).jpg', 10, 'Kế thừa phiên bản OPPO A7 đã từng gây hot trước đó, OPPO A9 (2020) có nhiều sự cải tiến hơn về màn hình, camera và hiệu năng trải nghiệm.', 'mạnh mẽ', '2020-02-01', 0),
(50, 1, 'Sam Sung Galaxy A01', 2500000, 2500000, 2, 'samsung-galaxy-a01-thumbchitiet-400x460.png', 10, 'Samsung Galaxy A01 là một smartphone nhà Samsung mới được ra mắt vào đầu năm 2020. ', '    Màn hình:PLS TFT LCD, 5.7\", HD+\r\n    Hệ điều hành:Android 10\r\n    Camera sau:Chính 13 MP & Phụ 2 MP\r\n    Camera trước:5 MP\r\n    CPU:Snapdragon 439 8 nhân\r\n    RAM:2 GB\r\n    Bộ nhớ trong:16 GB\r\n    Thẻ nhớ:MicroSD, hỗ trợ tối đa 512 GB\r\n    Thẻ SIM:\r\n', '2020-06-01', 0),
(54, 3, 'Dell G3 3579', 0, 20000000, 8, 'dell-dell-g3-15-3590-gaming-laptop-i5-8gb-1tb-hdd-removebg-preview.png', 10, 'i5-8300H,8gb ram,128SSD', '', '2018-05-05', 0),
(55, 1, 'Điên Thoại XiaoMi Redmi Note 8', 0, 5990000, 3, 'xiaomi-redmi-note-8-(11).jpg', 10, 'Mới cập bến về thị trường Việt nam. Đảm bảo chính hãng 100%', '', '2020-01-05', 0),
(57, 3, 'Dell G3 3580', 0, 20000000, 8, 'dell-dell-g3-15-3590-gaming-laptop-i5-8gb-1tb-hdd-removebg-preview.png', 8, 'hàng mỹ tho', 'i5-8300H SSD 128g 1T HDD GTX-1050ti', '2018-07-01', 0),
(58, 2, 'Máy tính bảng iPad 10.2 inch Wifi 32GB (2019)', 0, 9490000, 1, 'ipad-10-2-inch-wifi-32gb-2019-gold-400x460.png', 10, 'Thiết kế sang trọng, màn hình đẹp và một cấu hình đủ dùng cho hầu hết nhu cầu là những ưu điểm mà chiếc máy tính bảng iPad 10.2 inch Wifi 32GB (2019) này sở hữu.', 'Màn hình	LED backlit LCD, 10.2\"\r\nHệ điều hành	iOS 13\r\nCPU	Apple A10 Fusion 4 nhân, 2.34 GHz\r\nRAM	3 GB\r\nBộ nhớ trong	32 GB\r\nCamera sau	8 MP\r\nCamera trước	1.2 MP\r\nKết nối mạng	WiFi, Không hỗ trợ 3G, Không hỗ trợ 4G\r\nĐàm thoại	FaceTime\r\nTrọng lượng	483 g', '2019-07-20', 0),
(59, 2, 'Máy tính bảng iPad Pro 11 inch Wifi 128GB (2020)', 0, 21490000, 1, 'ipad-pro-11-inch-2020-xam-400x460-fix-400x460.png', 8, 'iPad Pro 11 inch 2020 là mẫu iPad mới nhất vừa được Apple ra mắt vào 18/3 với thiết kế gần như không thay đổi so với thế hệ trước, chủ yếu là sự nâng cấp đến từ chip A12Z cho hiệu năng mạnh mẽ và cụm camera có cảm biến mới hỗ trợ tăng cường thực tế ảo.', 'Màn hình	Liquid Retina, 11\"\r\nHệ điều hành	iPadOS 13\r\nCPU:Apple A12Z Bionic, 4 nhân 2.5 GHz & 4 nhân 1.6GHz\r\nRAM:6 GB\r\nBộ nhớ trong	128 GB\r\nCamera sau	Chính 12 MP & Phụ 10 MP, TOF 3D LiDAR\r\nCamera trước	7 MP', '2020-02-09', 0),
(60, 2, 'Máy tính bảng Samsung Galaxy Tab S6', 0, 18490000, 2, 'samsung-galaxy-tab-s6-400x400.jpg', 10, 'Samsung Galaxy Tab S6 là chiếc máy tính bảng 2 trong 1, được thiết kế để giúp cho những người cần một sản phẩm đủ gọn gàng nhưng mạnh mẽ.', 'Màn hình	Super AMOLED, 10.5\" Hệ điều hành Android 9.0 (Pie) CPU Snapdragon 855 8 nhân, 1 nhân 2.84 GHz, 3 nhân 2.41 GHz & 4 nhân 1.78 GHz RAM6  GBBộ nhớ trong 128 GB Camera sau	Chính 13 MP & Phụ 5 MP Camera trước 8 MP\r\nKết nối mạng	WiFi, 3G, 4G LTE', '2020-02-09', 0),
(61, 3, 'Laptop Asus VivoBook X409FA i3 8145U/4GB/256GB/Win10 (EK468T)', 0, 10290000, 7, 'asus-vivobook-x409fa-i3-ek468t-221618-1-400x400.jpg', 10, 'Laptop Asus VivoBook X409FA i3 (EK468T) là mẫu máy tính xách tay học tập văn phòng cơ bản, có cấu hình đủ dùng cho nhu cầu học tập và giải trí thường ngày. Với thiết kế mỏng nhẹ, Asus VivoBook X409FA có thể đồng hành cùng bạn mọi lúc mọi nơi. ', 'CPU:	Intel Core i3 Coffee Lake, 8145U, 2.10 GHz\r\nRAM:	4 GB, DDR4 (On board +1 khe), 2400 MHz\r\nỔ cứng:	SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình:	14 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel UHD Graphics\r\nCổng kết', '2019-02-05', 0),
(66, 2, 'Máy tính bảng Samsung Galaxy Tab A8', 0, 3690000, 2, 'samsung-galaxy-tab-a8-t295-2019-silver-400x460.png', 10, 'Samsung Galaxy Tab A8 8 inch T295 (2019) là một chiếc máy tính bảng gọn nhẹ, với màn hình vừa đủ có thể giúp bạn giải trí hay hỗ trợ trẻ nhỏ trong việc học tập.', 'Màn hình	TFT LCD, 8\"\r\nHệ điều hành	Android 9.0 (Pie)\r\nCPU	Snapdragon 429, 4 nhân 2.0 GHz\r\nRAM	2 GB\r\nBộ nhớ trong	32 GB\r\nCamera sau	8 MP\r\nCamera trước	2 MP\r\nKết nối mạng	WiFi, 3G, 4G LTE\r\nHỗ trợ SIM\r\nNano Sim\r\nHOTSIM Vina Bùm 120 (2GB/ngày)\r\nĐàm thoại	Có', '2019-01-01', 0),
(68, 4, 'Pin sạc dự phòng 7.500mAh AVA LJ JP195', 0, 199000, 13, 'pin-sac-du-phong-7500mah-ava-lj-jp195-add-600x600.jpg', 10, 'Pin sạc dự phòng 7.500 mAh AVA LJ JP195 với thiết kế nhỏ gọn, tiện lợi sử dụng và bỏ túi quần hoặc balo để mang theo mọi lúc mọi nơi', 'Hiệu suất sạc:	64%\r\nDung lượng pin:	7.500 mAh\r\nThời gian sạc đầy pin:	7 - 8 giờ (dùng Adapter 1A)3 - 4 giờ (dùng Adapter 2A)\r\nNguồn vào:	Micro USB: 5V - 2A\r\nNguồn ra:	USB: 5V - 2A\r\nLõi pin:	Pin Li-Ion\r\nCông nghệ/Tiện ích:	Đèn LED báo hiệu\r\nTrọng lượng:	17', '2020-01-01', 0),
(69, 4, 'Loa Bluetooth Fenda W8', 0, 375000, 14, 'loa-bluetooth-fenda-w8-avatar-1-600x600.jpg', 10, '\r\nLoa Bluetooth Fenda W8 có thiết kế rất bắt mắt với các đường cắt vát kim cương', '\r\n    Loại loa:Loa bluetooth\r\n    Tương thích:AndroidWindowsiOS (iPhone)\r\n    Tổng công suất:4 W\r\n    Thời gian sử dụng:Dùng khoảng 3 - 5 tiếngSạc khoảng 2 tiếng\r\n    Kết nối không dây:Bluetooth\r\n    Kết nối khác:Thẻ nhớ Micro SDJack 3.5 mm\r\n    Phím điều', '2019-02-10', 0),
(70, 4, '   Loa Bluetooth Fenda W7', 0, 375000, 14, 'loa-bluetooth-fenda-w7-avatr-600x600.jpg', 10, 'Loa Bluetooth Fenda W8 có thiết kế rất bắt mắt với các đường cắt vát kim cương', '\r\n    Loại loa:Loa bluetooth\r\n    Tương thích:AndroidWindowsiOS (iPhone)\r\n    Tổng công suất:4 W\r\n    Thời gian sử dụng:Dùng khoảng 3 - 5 tiếngSạc khoảng 2 tiếng\r\n    Kết nối không dây:Bluetooth\r\n    Kết nối khác:Thẻ nhớ Micro SDJack 3.5 mm\r\n    Phím điều', '2020-05-05', 0),
(71, 4, '       Pin sạc dự phòng 7.500mAh AVA LA 10K-1', 0, 199000, 13, 'pin-sac-du-phong-7500mah-ava-la-10k-1-ava-600x600.jpg', 10, 'Pin sạc dự phòng 7500mAh AVA LA 10K-1 với thiết kế nhỏ gọn, tiện lợi sử dụng và bỏ túi quần hoặc balo để mang theo mọi lúc mọi nơi', '    Hiệu suất sạc:64%\r\n    Dung lượng pin:7.500 mAh\r\n    Thời gian sạc đầy pin:7 - 8 giờ (dùng Adapter 1A)3 - 4 giờ (dùng Adapter 2A)\r\n    Nguồn vào:Micro USB: 5V - 2A\r\n    Nguồn ra:USB 1: 5V - 2.1AUSB 2: 5V - 2.1A\r\n    Lõi pin:Pin Li-Ion\r\n    Công nghệ', '2020-01-01', 0),
(72, 4, 'Pin sạc dự phòng 7.500 mAh AVA Cat 3S Cam Trắng', 0, 199000, 13, 'pin-sac-du-phong-7500mah-ava-cat-3s-cam-trang-1-600x600.jpg', 10, '\r\nGiới thiệu sản phẩm\r\nPin sạc dự phòng 7.500 mAh AVA Cat 3S cam trắng có kiểu dáng dễ thương, nhỏ gọn, tiện lợi khi mang theo đến nhiều nơi khác nhau', '\r\n    Hiệu suất sạc:64%\r\n    Dung lượng pin:7.500 mAh\r\n    Thời gian sạc đầy pin:7 - 8 giờ (dùng Adapter 1A)3 - 4 giờ (dùng Adapter 2A)\r\n    Nguồn vào:Micro USB: 5V - 2A\r\n    Nguồn ra:USB: 5V - 2AUSB: 5V - 1A\r\n    Lõi pin:Pin Li-Ion\r\n    Công nghệ/Tiện íc', '2020-01-01', 0),
(73, 5, '       Apple Watch S5 40mm viền nhôm dây cao su', 0, 11990000, 1, 'apple-watch-s5-40mm-vien-nhom-day-cao-su10-2-1-600x600.jpg', 10, 'Apple Watch S5 hồng chắc chắn là một trong những chiếc đồng hồ thông minh hiện đại đáng sở hữu nhất hiện nay. Máy được tích hợp màn hình Always-on luôn bật, đồng bộ nhạc với Apple Music, tính năng la bàn,...', '\r\n    Công nghệ màn hình:OLED\r\n    Kích thước màn hình:1.57 inch\r\n    Thời gian sử dụng pin:Khoảng 1.5 ngày\r\n    Hệ điều hành:watchOS 6.0\r\n    Kết nối với hệ điều hành:iOS 13 trở lên\r\n    Chất liệu mặt:Ion-X strengthened glass\r\n    Đường kính mặt:40 mm\r\n ', '2020-05-05', 0),
(74, 5, 'Apple Watch S3 GPS 42mm viền nhôm xám dây cao su', 0, 6490000, 1, 'apple-watch-s3-gps-42mm-vien-nhom-day-cao-su-den-163720-023733-600x600.png', 10, 'Về mặt tổng thể Apple Watch S3 42 mm có kích thước tương tự như Apple Watch Series 2. Sản phẩm chú trọng thêm về mặt thẩm mỹ với thiết kế sang trọng, năng động, dây đeo có nhiều màu sắc khác nhau.', '\r\n    Công nghệ màn hình:AMOLED\r\n    Kích thước màn hình:1.65 inch\r\n    Thời gian sử dụng pin:Khoảng 1.5 ngày\r\n    Hệ điều hành:iOS 13 trở lên\r\n    Chất liệu mặt:Ion-X strengthened glass\r\n    Đường kính mặt:42 mm\r\n    Kết nối:Bluetooth v4.2, GPS\r\n    Ngôn', '2020-01-01', 0),
(75, 5, 'Đồng hồ thông minh Samsung Galaxy Watch Active 2 44mm viền nhôm dây sillicone', 0, 7990000, 2, 'samsung-galaxy-watch-active-2-44-mm-sillicon-thumm-400x400.jpg', 10, 'Đồng hồ thông minh Samsung Galaxy Watch Active 2 cải tiến hơn với màn hình chống chói, hiển thị thông tin sắc nét. Các tiện ích khác cũng được nâng cấp nhằm mang lại sự tiện lợi nhất cho người dùng.', '\r\n    Công nghệ màn hình:SUPER AMOLED\r\n    Kích thước màn hình:1.4 inch\r\n    Thời gian sử dụng pin:Khoảng 1.5 ngày\r\n    Hệ điều hành:OS TIZEN\r\n    Kết nối với hệ điều hành:Android 5.0, iOS 10 trở lên\r\n    Chất liệu mặt:Kính cường lực Gorilla Glass Dx+\r\n  ', '2020-05-05', 0),
(76, 5, 'Vòng tay thông minh Samsung Galaxy Fit R370', 0, 990000, 2, 'samsung-galaxy-fit-r370-3-400x400.jpg', 10, 'Thời trang, cá tính, khỏe mạnh và năng động 24/7 cùng vòng đeo tay thông minh Samsung Galaxy Fit, thiết bị theo dõi sức khỏe chuyên sâu đến từ Samsung.', '\r\n    Công nghệ màn hình:AMOLED\r\n    Kích thước màn hình:0.95 inch\r\n    Thời gian sử dụng pin:Khoảng 7 ngày\r\n    Kết nối được với hệ điều hành:iPhone 7, iOS 10 trở lên, Android 5.0\r\n    Độ dài dây:22.6 cm\r\n    Chất liệu dây:Silicon\r\n    Kết nối:Bluetooth\r', '2019-02-02', 0),
(77, 5, 'Miband 4 ', 300000, 699000, 3, 'mi-band-4-6-400x400.jpg', 9, 'Sáng tạo, năng động, khỏe mạnh với Mi Band 4. Hãy lăn chuột để cùng khám phá những cải tiến đột phá của chiếc vòng tay thông minh Xiaomi rẻ mà chất này', '\r\n    Công nghệ màn hình:AMOLED\r\n    Kích thước màn hình:0.95 inch\r\n    Thời gian sử dụng pin:Khoảng 20 ngày\r\n    Kết nối được với hệ điều hành:Android 4.4 trở lên, iOS 9 trở lên\r\n    Độ dài dây:22.6 cm\r\n    Chất liệu dây:Silicon\r\n    Kết nối:Bluetooth v5', '2019-10-10', 0),
(78, 3, 'Laptop Dell Inspiron 5593', 0, 17990000, 8, 'dell-inspiron-5593-i5-1035g1-8gb-256gb-2gb-mx230-w-213570-400x400.jpg', 9, 'Laptop Dell Inspiron 5593 nằm ở phân khúc laptop cao cấp, là trợ thủ công nghệ đắc lực dành cho những doanh nhân khi sở hữu chiếc laptop có màn hình lớn, thiết kế tinh tế, thời trang và hiệu năng cực đỉnh', '\r\n    CPU:Intel Core i5 Ice Lake, 1035G1, 1.00 GHz\r\n    RAM:8 GB, DDR4 (2 khe), 2666 MHz\r\n    Ổ cứng:SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA\r\n    Màn hình:15.6 inch, Full HD (1920 x 1080)\r\n    Card màn hình:Card đồ họa rời, NVIDIA GeForce MX230 2GB\r\n', '2020-10-05', 0),
(79, 2, 'Máy tính bảng Samsung Galaxy Tab with S Pen', 0, 6999000, 2, 'samsung-galaxy-tab-a8-plus-p205-(6).jpg', 9, 'Samsung Galaxy Tab A Plus 8.0 inch (2019) là một chiếc máy tính bảng có thiết kế đẹp, trọng lượng nhẹ giúp bạn có thể dễ dàng mang theo trong những buổi sáng cafe hay những chuyến đi chơi xa', 'Màn hìnhWUXGA TFT, 8\"\r\nHệ điều hànhAndroid 9.0 (Pie)\r\nCPUExynos 7904 8 nhân, 2 nhân 1.8 GHz & 6 nhân 1.6 GHz\r\nRAM3 GB\r\nBộ nhớ trong32 GB\r\nCamera sau8 MP\r\nCamera trước5 MP\r\nKết nối mạngWiFi, 3G, 4G LTE\r\nHỗ trợ SIM\r\nNano Sim\r\nHOTSIM Vina Bùm 120 (2GB/ngày)\r', '2020-01-01', 0),
(81, 3, 'Laptop Apple MacBook Air 2020 i5 1.1GHz/8GB/256GB', 0, 30990000, 1, 'apple-macbook-air-2020-gold-1-600x600.jpg', 10, 'MacBook Air 2020 là phiên bản có nhiều nâng cấp vượt trội về cấu hình và thiết kế bàn phím, hứa hẹn đem tới trải nghiệm mượt mà, thoải mái hơn tới người dùng. Chiếc máy vẫn là lựa chọn số 1 dành cho các anh em văn phòng muốn sở hữu chiếc laptop mỏng nhẹ, ', '    CPU:Intel Core i5 Thế hệ 10, 1.10 GHz\r\n    RAM:8 GB, LPDDR4X (On board), 3733 MHz\r\n    Ổ cứng:SSD: 256 GB\r\n    Màn hình:13.3 inch, Retina (2560 x 1600)\r\n    Card màn hình:Card đồ họa tích hợp, Intel Iris Plus Graphics\r\n    Cổng kết nối:2 x Thunderbo', '2020-02-05', 0),
(83, 4, 'Tai nghe bluetooth awei a930bs', 0, 200000, 14, 'tai-nghe-bluetooth-awei-a930bs-avatar-600x600.jpg', 10, 'Trẻ trung năng động chất lượng tốt ', 'chống nước chống ồn ', '2019-09-06', 0),
(85, 6, 'Đồng Hồ casino', 0, 600000, 15, 'edifice-casio-ef-334d-7avudf-bac-7-400x400.jpg', 10, 'ok', 'ok', '2021-09-20', 0),
(86, 6, 'sp2 ', 0, 1200000, 15, 'larmes-lm-tf001-glg3g-121-3gg-nam-1-400x400.jpg', 5, 'ok', 'ok', '2021-09-20', 0),
(87, 6, 'sp3', 800000, 600000, 15, 'pierre-cardin-pcx6858l296-nu-1-400x400.jpg', 5, 'ok', 'ok', '2021-09-20', 0),
(88, 6, 'sp4', 0, 1300000, 15, 'q-q-s374j302y-nam-1-400x400.jpg', 7, 'ok', 'ok', '2021-09-20', 0),
(89, 6, 'sp5', 1300000, 1000000, 15, 'smile-kid-sl004-01-tre-em-1-400x400.jpg', 10, 'ok', 'ok', '2021-09-20', 0),
(90, 4, 'test', 0, 600000, 15, 'smile-kid-sl004-01-tre-em-1-400x400.jpg', 4, 'ok', 'ok', '2021-11-04', 0),
(91, 5, 'test', 0, 1200000, 15, 'smile-kid-sl004-01-tre-em-1-400x400.jpg', 4, 'cczxc', 'zxczxc', '2021-11-04', 0),
(92, 1, 'testdsad', 0, 600000, 1, 'Untitled-1.jpg', 0, 'đâsd', 'dsadas', '2022-01-04', 0),
(95, 1, 'test', 1000000, 1000000, 3, '38729514_2162777447314083_4746577948918677504_o.jpg', 5, 'đasad', 'đâsdas', '2022-01-12', 0),
(96, 1, 'test3', 1000000, 1000000, 2, '11401373_109944016008696_214478636523474412_n.jpg', 5, 'dsadsada', 'dsadsadsa', '2022-01-12', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user` char(30) NOT NULL,
  `pass` char(50) NOT NULL,
  `level` int(11) NOT NULL,
  `Hoten` varchar(255) DEFAULT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(255) NOT NULL,
  `email` char(255) NOT NULL,
  `dienthoai` char(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `ngaydangky` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `user`, `pass`, `level`, `Hoten`, `ngaysinh`, `gioitinh`, `email`, `dienthoai`, `diachi`, `ngaydangky`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1, 'Vân Hạ', '1999-09-29', 'nữ', 'hanobi299@gmai.com', '0328275274', 'Thái Nguyên', '2020-05-15'),
(2, 'vanha', '123456', 3, 'Hạ', '1999-06-30', 'nam', 'hanobi299@gmail.com', '0328275274', 'Bắc Giang', '2020-06-17'),
(23, 'doan1', '123', 2, 'Đoàn', '1999-10-22', 'nam', 'doan@gmail.com', '123456789', 'Bắc Giang', '2020-06-18'),
(25, 'ha123', '123', 2, 'Hà nôbi', '1999-08-12', 'Nam', 'hanobi299@gmail.com', '328275274', 'Thái Nguyên', '2020-06-18'),
(27, 'doan3', '123', 2, 'Ha', '1999-09-09', 'Nam', 'doan@gmail.com', '328275274', 'BG', '2020-06-28'),
(28, 'duong', '123', 2, 'Dương baby', '1999-03-03', 'nam', 'duong@gmail.com', '988053900', 'Bắc Giang', '2020-06-29'),
(29, 'doan2', '123', 2, 'đoàn', '1999-02-02', 'nữ', 'doan@gmail.com', '9999999', 'Bắc Giang', '2020-07-09'),
(30, 'ha', '698d51a19d8a121ce581499d7b7016', 2, 'hanobi', '1999-09-29', 'nam', 'hanobi299@gmail.com', '328275274', 'Thái Nguyên', '2021-09-24'),
(31, 'ha111', '698d51a19d8a121ce581499d7b7016', 2, 'ha', '2007-06-12', 'nam', 'hanobi299@gmail.com', '2147483647', 'Thái Nguyên', '2021-09-24'),
(32, 'ha333', 'c4ca4238a0b923820dcc509a6f75849b', 2, 'ha', '2021-12-30', 'nam', 'hanobi299@gmail.com', '0988585858', 'thái nguyên', '2021-12-30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_cthd`),
  ADD KEY `chitiethoadon` (`id_hd`),
  ADD KEY `chitiethoadon2` (`id_sp`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_dm` (`id_dm`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_cthd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon` FOREIGN KEY (`id_hd`) REFERENCES `hoadon` (`id_hd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon2` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
