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
| ID | integer | 233 |
| nama | varchar | nenti |
| kontak | varchar | 087712345678 |
### Sopir 
| Atribut | Tipe data | Contoh |
|---|---|---|
| ID | integer | 12 |
| nama | varchar | sucipto |
| kontak | varchar | 089911223344 |
| jurusan | varchar | Bandung-Indramayu |
| no. bus | varchar | E3214IF |

# UX Wireframe
![IMG-20220912-WA0001](https://user-images.githubusercontent.com/81434333/189564177-5280d329-0f3d-457c-a3e7-bad560141d58.jpg)
