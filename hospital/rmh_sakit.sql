SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `form_janji` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL
);

ALTER TABLE `form_janji`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `form_janji`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,;
COMMIT;

CREATE TABLE dokter (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(50) NOT NULL,
  spesialisasi VARCHAR(50) NOT NULL,
  telepon VARCHAR(15) NOT NULL,
  email VARCHAR(50) NOT NULL
);

INSERT INTO dokter (nama, spesialisasi, telepon, email)
VALUES 
  ('Dr. Bambang Wijaya', 'Bedah Umum', '081234567891', 'bambang.wijaya@example.com'),
  ('Dr. Dewi Anggraeni', 'Kardiologi', '081234567892', 'dewi.anggraeni@example.com'),
  ('Dr. Irfan Susanto', 'Gigi dan Mulut', '081234567893', 'irfan.susanto@example.com'),
  ('Dr. Fitriani Nurhayati', 'Obstetri dan Ginekologi', '081234567894', 'fitriani.nurhayati@example.com'),
  ('Dr. Agus Prabowo', 'Anestesiologi', '081234567895', 'agus.prabowo@example.com'),
  ('Dr. Rina Susanti', 'Dermatologi', '081234567896', 'rina.susanti@example.com'),
  ('Dr. Ahmad Wibowo', 'Ortopedi', '081234567897', 'ahmad.wibowo@example.com'),
  ('Dr. Siti Utami', 'Pulmonologi', '081234567898', 'siti.utami@example.com'),
  ('Dr. Joko Sutanto', 'Mata', '081234567899', 'joko.sutanto@example.com'),
  ('Dr. Ani Cahyani', 'Psikiatri', '081234567890', 'ani.cahyani@example.com');

CREATE TABLE ruang_rawat_inap (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nomor_kamar VARCHAR(10) NOT NULL,
  kapasitas INT NOT NULL,
  status ENUM('Tersedia', 'Terisi') NOT NULL
);

INSERT INTO ruang_rawat_inap (nomor_kamar, kapasitas, status) VALUES
('A103', 3, 'Tersedia'),
('B203', 2, 'Terisi'),
('C302', 4, 'Tersedia'),
('D401', 2, 'Terisi'),
('E501', 1, 'Tersedia'),
('F601', 3, 'Tersedia'),
('G701', 2, 'Terisi'),
('H801', 4, 'Tersedia'),
('I901', 2, 'Tersedia'),
('J1001', 3, 'Terisi');

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);


ALTER TABLE form_janji ADD dokter_id INT;
