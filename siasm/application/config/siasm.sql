CREATE TABLE master_pembayaran (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nama_pembayaran VARCHAR(100) NULL,
  harga DOUBLE NULL,
  PRIMARY KEY(id)
)
;

CREATE TABLE level_user (
  id INTEGER(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  level VARCHAR(10) NOT NULL,
  PRIMARY KEY(id)
)
;

CREATE TABLE prestasi (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  id_siswa INTEGER UNSIGNED NULL,
  nama_prestasi VARCHAR(100) NULL,
  tingkat SMALLINT UNSIGNED NULL,
  tahun YEAR NULL,
  peringkat SMALLINT UNSIGNED NULL,
  PRIMARY KEY(id)
)
;

CREATE TABLE mata_pelajaran (
  id INTEGER(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  mata_pelajaran VARCHAR(50) NULL,
  PRIMARY KEY(id)
)
;

CREATE TABLE guru (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nip VARCHAR(30) NOT NULL,
  nama_lengkap VARCHAR(100) NULL,
  alamat VARCHAR(100) NULL,
  kota_sekarang INTEGER(2) UNSIGNED NULL,
  kota_lahir INTEGER(2) UNSIGNED NULL,
  tanggal_lahir DATE NULL,
  PRIMARY KEY(id),
  UNIQUE INDEX guru_unique_nip(nip)
)
;

CREATE TABLE ekskul (
  id INTEGER(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  nama_ekskul VARCHAR(50) NULL,
  PRIMARY KEY(id)
)
;

CREATE TABLE users (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  username VARCHAR(20) NOT NULL,
  passwrd VARCHAR(40) NOT NULL,
  level_user_id INTEGER(2) UNSIGNED NOT NULL,
  PRIMARY KEY(id),
  UNIQUE INDEX users_unique_username(username),
  INDEX users_FKIndex1(level_user_id),
  FOREIGN KEY(level_user_id)
    REFERENCES level_user(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
)
;

CREATE TABLE kelas (
  id INTEGER(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  guru_id INTEGER UNSIGNED NOT NULL,
  kelas VARCHAR(10) NULL,
  ruangan INTEGER(2) UNSIGNED NULL,
  wali_kelas INTEGER UNSIGNED NULL,
  PRIMARY KEY(id),
  INDEX kelas_FKIndex1(guru_id),
  FOREIGN KEY(guru_id)
    REFERENCES guru(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
)
;

CREATE TABLE guru_has_mata_pelajaran (
  guru_id INTEGER UNSIGNED NOT NULL,
  mata_pelajaran_id INTEGER(3) UNSIGNED NOT NULL,
  PRIMARY KEY(guru_id, mata_pelajaran_id),
  INDEX guru_has_mata_pelajaran_FKIndex1(guru_id),
  INDEX guru_has_mata_pelajaran_FKIndex2(mata_pelajaran_id),
  FOREIGN KEY(guru_id)
    REFERENCES guru(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(mata_pelajaran_id)
    REFERENCES mata_pelajaran(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE siswa (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nis VARCHAR(20) NOT NULL,
  nama_lengkap VARCHAR(50) NULL,
  alamat VARCHAR(100) NULL,
  kota_sekarang INTEGER(2) UNSIGNED NULL,
  kota_lahir INTEGER(2) UNSIGNED NULL,
  tanggal_lahir DATE NULL,
  tahun_masuk YEAR NULL,
  kelas_id INTEGER(2) UNSIGNED NOT NULL,
  PRIMARY KEY(id),
  UNIQUE INDEX siswa_unique_nis(nis),
  INDEX siswa_FKIndex1(kelas_id),
  FOREIGN KEY(kelas_id)
    REFERENCES kelas(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
)
;

CREATE TABLE siswa_has_prestasi (
  siswa_id INTEGER UNSIGNED NOT NULL,
  prestasi_id INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(siswa_id, prestasi_id),
  INDEX siswa_has_prestasi_FKIndex1(siswa_id),
  INDEX siswa_has_prestasi_FKIndex2(prestasi_id),
  FOREIGN KEY(siswa_id)
    REFERENCES siswa(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(prestasi_id)
    REFERENCES prestasi(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE siswa_has_ekskul (
  siswa_id INTEGER UNSIGNED NOT NULL,
  ekskul_id INTEGER(2) UNSIGNED NOT NULL,
  PRIMARY KEY(siswa_id, ekskul_id),
  INDEX siswa_has_ekskul_FKIndex1(siswa_id),
  INDEX siswa_has_ekskul_FKIndex2(ekskul_id),
  FOREIGN KEY(siswa_id)
    REFERENCES siswa(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(ekskul_id)
    REFERENCES ekskul(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE nilai_ekskul (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  ekskul_id INTEGER(2) UNSIGNED NOT NULL,
  siswa_id INTEGER UNSIGNED NOT NULL,
  id_ekskul INTEGER(2) UNSIGNED NULL,
  nilai DOUBLE(4,2) NULL,
  PRIMARY KEY(id),
  INDEX nilai_ekskul_FKIndex1(siswa_id),
  INDEX nilai_ekskul_FKIndex2(ekskul_id),
  FOREIGN KEY(siswa_id)
    REFERENCES siswa(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(ekskul_id)
    REFERENCES ekskul(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
)
;

CREATE TABLE nilai_akademik (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  mata_pelajaran_id INTEGER(3) UNSIGNED NOT NULL,
  guru_id INTEGER UNSIGNED NOT NULL,
  siswa_id INTEGER UNSIGNED NOT NULL,
  semester SMALLINT UNSIGNED NULL,
  nlai DOUBLE(4,2) NULL,
  PRIMARY KEY(id),
  INDEX nilai_akademik_FKIndex1(siswa_id),
  INDEX nilai_akademik_FKIndex2(guru_id),
  INDEX nilai_akademik_FKIndex3(mata_pelajaran_id),
  FOREIGN KEY(siswa_id)
    REFERENCES siswa(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(guru_id)
    REFERENCES guru(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(mata_pelajaran_id)
    REFERENCES mata_pelajaran(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
)
;

CREATE TABLE siswa_has_master_pembayaran (
  siswa_id INTEGER UNSIGNED NOT NULL,
  master_pembayaran_id INTEGER UNSIGNED NOT NULL,
  users_id INTEGER UNSIGNED NOT NULL,
  is_virified CHAR(1) NULL,
  PRIMARY KEY(siswa_id, master_pembayaran_id),
  INDEX siswa_has_master_pembayaran_FKIndex1(siswa_id),
  INDEX siswa_has_master_pembayaran_FKIndex2(master_pembayaran_id),
  INDEX siswa_has_master_pembayaran_FKIndex3(users_id),
  FOREIGN KEY(siswa_id)
    REFERENCES siswa(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(master_pembayaran_id)
    REFERENCES master_pembayaran(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(users_id)
    REFERENCES users(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

