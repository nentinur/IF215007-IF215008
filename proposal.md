# Permasalahan
Permasalahan yang terkadang saya keluhkan adalah terkait transportasi, tentang ketidakjelasan jadwal keberangkatan bus, meskipun sudah ada jadwalnya tetap saja terkadang ada saja bus yang terlambat berangkat dari terminal ataupun terjebak macet yang membuat saya harus menunggu sampai berjam-jam. 

# Rancangan Solusi
Saat menunggu bus yang tak kunjung datang itu saya pun terfikirkan untuk membuat aplikasi tracking bus, agar saya bisa tahu posisi bus, apakah sudah berangkat atau sedang terjebak macet, apakah sudah dekat atau masih jauh. Saya juga ingin menambahkan fitur chat dengan pihak bus, juga pemesanan dan pembayaran tiket bus secara online.

# Use Case
- User penumpang dapat login dengan email atau nomor telepon
- User penumpang dapat melihat jadwal keberangkatan bus yang dituju
- User penumpang dapat melakukan chat dengan sopir bus
- User penumpang dapat melihat posisi bus di maps
- User penumpang dapat memesan tiket bus secara online, dan tertera jumlah tarif dan daya tampung bus
- User sopir dapat melihat posisi penumpang yang sudah menunggu di halte atau dipinggir jalan

# Struktur Data
### Penumpang
| Atribut | Tipe Data | Contoh |
|---|---|---|
| ID Penumpang | integer | 233 |
| nama | varchar | nenti |
| password | varchar | jshayuOBmy52nOmsb |
| kontak | varchar | 087712345678 |
### Sopir 
| Atribut | Tipe data | Contoh |
|---|---|---|
| ID Sopir | integer | 12 |
| nama | varchar | sucipto |
| password | varchar | jshayuOBmy52nOmsb |
| kontak | varchar | 089911223344 |
### Bus
| Atribut | Tipe data | Contoh |
|---|---|---|
| no bus | varchar | E3214IF |
| jurusan | varchar | Bandung-Indramayu |
| ID sopir | integer | 12 |
### Tiket 
| Atribut | Tipe data | Contoh |
|---|---|---|
| ID Tiket | integer | 101020221251 |
| ID Penumpang | integer | 233 |
| no bus | varchar | E3214IF |
| ID Sopir | integer | 12 |
| tanggal | date | 2022-10-10 |
| pembayaran | integer | 900000 |
### Trip
| Atribut | Tipe data | Contoh |
|---|---|---|
| no bus | varchar | E3214IF |
| latitude | double | -6.8792624 |
| longitude | double | 107.9745632 |
### Jadwal 
| Atribut | Tipe data | Contoh |
|---|---|---|
| ID Jadwal | integer | 2653 |
| no bus | varchar | E3214IF |
| waktu | datetime | 2022-10-10 14:00 |


# UX Wireframe
![GObus App](https://user-images.githubusercontent.com/81434333/193085030-698c41cf-7c52-4154-809f-9209a387ed06.png)
