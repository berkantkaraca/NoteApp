<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Proje Hakkında
Stajım sırasında geliştirdiğim temel not alma uygulamasıdır.

Register sayfası ile sisteme kayıt olun.
![image](https://github.com/berkantkaraca/NoteApp/assets/93256643/fb0ce72c-78f2-423c-8527-41a81133fc5a)

Şifreler eşleşmezse uyarı verir ve kayıt işlemi yapılmaz.
![image](https://github.com/berkantkaraca/NoteApp/assets/93256643/d011a94e-1840-4242-8c94-2b7cec107505)

Register işleminden sonra login sayfasına otomatik olarak yönlendirilir. Bilgilerinizi kullanarak giriş yapın.
![image](https://github.com/berkantkaraca/NoteApp/assets/93256643/c0e3b7d8-5b0f-4fff-bd5c-fd663efc8257)

Bilgiler veritabanı ile eşleşmezse ınvalid user hatası verir.
![image](https://github.com/berkantkaraca/NoteApp/assets/93256643/74656b7e-989f-4945-8e51-a3d7de272640)
 
Login işleminden sonra notlarınızın bulunduğu anasayfaya yönlendirilirsiniz. 
![image](https://github.com/berkantkaraca/NoteApp/assets/93256643/c2e806d7-23c0-44b0-bc7a-4b851762d2e5)

## Anasayfadaki işlemler:
## Yeni Not Ekleme
Add Note butonuna tıkladığınızda notunuzu ekleyebileceğiniz bir bölüm açılır. Bu bölümde notunuzun önceliğini (High Preority -> kırmızı renkli işaret, Normal Preority -> sarı renkli işaret, Low Preority -> yeşil renkli işaret), başlığını ve içeriğini yazıp Add butonuna tıkladığınızda notunuz veritabanına eklenir ve anasayfa yenilenir.
![image](https://github.com/berkantkaraca/NoteApp/assets/93256643/7a91b799-0a23-4e95-9585-97e0a6e2194d)
![image](https://github.com/berkantkaraca/NoteApp/assets/93256643/c4301c05-d636-4f3b-ba37-73a6e41b3bcf)

Notunuzu Show butonuna basarak düzenleme ve silme işlemi yapabilirsiniz. Örneğin Deneme 2 başlıklı notun başlığını düzenleyelim.
![image](https://github.com/berkantkaraca/NoteApp/assets/93256643/1a2b491b-ad38-49a1-a708-0c8dfa4ad424)

Update butonuna bastığınızda yaptığınız değişikler uygulanır ve anasayfaya yönlendirilirsiniz. Anasayfada notlarınız en son işlem yapılan en başta olacak şekilde sıralanır.
![image](https://github.com/berkantkaraca/NoteApp/assets/93256643/a0b3e895-0113-476f-9e43-639fe51fe0fa)

Şimdi de Deneme başlıklı notu silelim. Show butonuna tıklayıp notun detayını görüntüleyin. Açılan sayfada Delete butonuna bastığınızda not silinir ve anasayfaya yönlendirilirsiniz.
![image](https://github.com/berkantkaraca/NoteApp/assets/93256643/bf5ac666-566a-45cd-b42d-6f15a0fa0c55)

## Not Arama
Search Note kısmından notlarınızı içeriğine veya önceliğine göre arayabilirsiniz. Aramak istediğiniz kelimeyi yazıp Search butonuna tıklayın. Arama çubuğunu temizlemek için Clear butonuna basabilirsiniz. Clear butonuna tıkladığınızda arama çubuğu temizlenir ve tüm notlarınız tekrardan gözükür.
![image](https://github.com/berkantkaraca/NoteApp/assets/93256643/8ce3a0da-3ae4-4fba-ad24-a546bd5b9912)
![image](https://github.com/berkantkaraca/NoteApp/assets/93256643/04197363-969c-4fb0-83b3-db4a430e0675)

## Profil Bilgisi Güncelleme 
Anasayfada bulunun Welcome (İsim) linkine tıklayarak güncelleme sayfasına ulaşabilirsiniz. Burada kullanıcı adınızı, mail adresinizi ve şifrenizi değiştirebilir ve hesabınızı silebilirsiniz.
![image](https://github.com/berkantkaraca/NoteApp/assets/93256643/06aee700-0194-48b2-8710-b3de1096f120)

## Logout
Anasayfada bulunun Logout’a tıklayarak hesabınızdan çıkış yapabilirisiniz. Butona bastığınızda hesabınızdan çıkış yapılır ve login sayfasına yönlendirilirsiniz.

## Veritabanı Tabloları
users tablosu:
![image](https://github.com/berkantkaraca/NoteApp/assets/93256643/cc667d35-2d30-4f05-a635-21e082d95d30)

notes tablosu:
![image](https://github.com/berkantkaraca/NoteApp/assets/93256643/7dec9d92-bc06-4bd8-acf6-bbe21ca02633)
