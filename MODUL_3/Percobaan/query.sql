Create table Mahasiswa(
NIM varchar(10)primary key not null,
Nama char(50)null,
Kelas char(5)null,
Alamat char(50)null
)

Insert into Mahasiswa values ('L200080001','Ari Wibowo','A','Solo')

Select * from Mahasiswa

Insert Into Mahasiswa (NIM, Nama, Kelas) Values ('L200080002','Agustina','B')

Select * from Mahasiswa

Update Mahasiswa Set Nama='Agustina Anggraini' Where Nama='Agustina'

Select * from Mahasiswa

CREATE TABLE Nilai (
    NIM varchar(10)PRIMARY KEY NOT null,
    Nama_MK char(50)null,
    Nilai_Angka int(10)null,
    Nilai_Huruf char(5)null
    )

Insert into Nilai values('L200080002','Kapita Selekta',60,'BC')
Insert into Nilai values('L200080010','Pemrograman Web',87,'A')
Insert into Nilai values('L200080080','Pemrograman Web',90,'A')

Select Mahasiswa.NIM, Mahasiswa.Nama, Nilai.Nama_MK, Nilai.Nilai_Angka, Nilai.Nilai_Huruf from (Mahasiswa JOIN Nilai ON Mahasiswa.NIM=Nilai.NIM)

Select Mahasiswa.NIM, Mahasiswa.Nama, Nilai.Nama_MK, Nilai.Nilai_Angka, Nilai.Nilai_Huruf from (Mahasiswa LEFT JOIN Nilai ON Mahasiswa.NIM=Nilai.NIM)

Select Mahasiswa.NIM, Mahasiswa.Nama, Nilai.Nama_MK, Nilai.Nilai_Angka, Nilai.Nilai_Huruf from (Mahasiswa RIGHT JOIN Nilai ON Mahasiswa.NIM=Nilai.NIM)

Select AVG(Nilai_Angka) 'Rata-Rata Nilai' FROM Nilai

Select SUM(Nilai_Angka) 'Total Nilai' From Nilai 

Create view KHS AS Select Mahasiswa.NIM, Nilai.Nama_MK, Nilai.Nilai_Angka, Nilai.Nilai_Huruf from (Mahasiswa INNER JOIN Nilai ON Mahasiswa.NIM=Nilai.NIM)

Select * from KHS

Update Mahasiswa Set Alamat='Sragen' where NIM='L200080002'