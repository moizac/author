NAMA: MOH. IZZA AULADINA L.
NIM: 185150707111009

LANGKAH-LANGKAH PERCOBAAN
1. Instalasi Projek Lumen di folder Pemint dengan nama projek author
2. Membuat database di phpmyadmin dengan nama author_lumen
3. Mengkonfigurasikan database di file .env
4. Mengaktifkan fitur Facades dan Eloquent dengan cara menghapus comment di app.php
5. Membuat Migration dengan cara membuat tabel author dengan cara menjalankan sintax php artisan make:migrate lalu menambahkan function up dan menjalankan sintax php artisan migrate
6.  Menambahkan data (seeder) di file DatabaseSeeder.php lalu menjalankan sintax php artisan db:Seed
7. Membuat model di direktori model dengan nama Author dan mendefinisikan atribut tabel
8. Mengedit BooksController.php pada diroketori app\Http\Controllers, dengan menambahkan beberapa fungsi
9. Fungsi pertama adalah fungsi store yang mempunyai fungsi untuk menambahkan data, jangan lupa untuk membuat route di direktori routes\web.php
10. Fungsi kedua adalah fungsi update yang mempunyai fungsi untuk memperbarui data, jangan lupa untuk membuat route di direktori routes\web.php
11. Fungsi ketiga adalah fungsi destroy yang mempunyai fungsi untuk menghapus data, jangan lupa untuk membuat route di direktori routes\web.php
12. Fungsi keempat adalah fungsi view yang mempunyai fungsi untuk melihat data, jangan lupa untuk membuat route di direktori routes\web.php
13. Menjalankan server dengan sintax php -S localhost:8000 -t public
14. Menyalakan XAMPP lalu melakukan pengetesan di POSTMAN
15. Apabila ingin menampikan seluruh data author, endpointnya yaitu localhost:8000/author dengan method GET
16. Apabila ingin menampikan data salah satu author, endpointnya yaitu localhost:8000/author/id dengan method GET
17. Apabila ingin membuat data author baru, endpointnya yaitu localhost:8000/author dengan method POST
18. Apabila ingin memperbarui data author, endpointnya yaitu localhost:8000/author/id dengan method PUT
19. Apabila ingin menghapus data salah satu author, endpointnya yaitu localhost:8000/author/id dengan method DELETE
