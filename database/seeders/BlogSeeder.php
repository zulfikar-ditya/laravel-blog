<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        blog::create([
            'title' => 'apa itu corona',
            'image' => 'public/images/post/2020-12-02/apa itu corona1606879222.jpg',
            'image_source' => 'pixabay.com',
            'category' => 1,
            'status' => 1,
            'user' => 3,
            'content' => '<p><strong>Virus Corona atau <em>severe acute respiratory syndrome</em> <em>coronavirus 2</em> (SARS-CoV-2) adalah virus yang menyerang sistem pernapasan. </strong><strong>Penyakit karena infeksi virus ini disebut COVID-19. </strong><strong>Virus </strong><strong>Corona </strong><strong>bisa menyebabkan </strong><strong>gangguan ringan pada </strong><strong>sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.</strong></p>
            <p><em>Severe acute respiratory syndrome coronavirus 2</em> (SARS-CoV-2) yang lebih dikenal dengan nama virus Corona adalah jenis baru dari coronavirus yang menular ke manusia. Virus ini bisa menyerang siapa saja, seperti <a href="https://www.alodokter.com/alasan-mengapa-lansia-lebih-rentan-terhadap-virus-corona">lansia</a> (golongan usia lanjut), orang dewasa, <a href="https://www.alodokter.com/waspadai-infeksi-virus-corona-pada-anak">anak-anak</a>, dan <a href="https://www.alodokter.com/lindungi-bayi-anda-dari-virus-corona">bayi</a>, termasuk ibu hamil dan <a href="https://www.alodokter.com/infeksi-virus-corona-pada-ibu-menyusui-ini-yang-perlu-anda-ketahui">ibu menyusui</a>.</p>
            <a><img class="alignnone size-full wp-image-1788064" src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1589160479/attached_image/virus-corona-0-alodokter.jpg" alt="Virus Corona - Alodokter" width="650" height="433"></a>
            <p>Infeksi virus Corona disebut <a href="https://www.alodokter.com/covid-19" target="_blank">COVID-19</a> (<em>Corona Virus Disease 2019</em>) dan pertama kali ditemukan di kota Wuhan, China pada akhir Desember 2019. Virus ini menular dengan sangat cepat dan telah menyebar ke hampir semua negara, termasuk Indonesia, hanya dalam waktu beberapa bulan.</p>
            <p>Hal tersebut membuat beberapa negara menerapkan kebijakan untuk memberlakukan <em><a href="https://www.alodokter.com/memahami-istilah-lockdown-yang-mencuat-di-tengah-pandemi-virus-corona" target="_blank">lockdown</a> </em>dalam rangka mencegah penyebaran virus Corona. Di Indonesia sendiri, diberlakukan kebijakan Pembatasan Sosial Berskala Besar (PSBB) untuk menekan penyebaran virus ini.</p>
            <p>Coronavirus adalah kumpulan virus yang bisa menginfeksi sistem pernapasan. Pada banyak kasus, virus ini hanya menyebabkan infeksi pernapasan ringan, <a href="https://www.alodokter.com/tampak-mirip-ketahui-beda-gejala-virus-corona-dengan-flu-biasa">seperti flu</a>. Namun, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti infeksi paru-paru (pneumonia).</p>
            <p>Virus ini menular melalui percikan dahak (droplet) dari saluran pernapasan, misalnya ketika berada di <a href="https://www.alodokter.com/risiko-penularan-virus-corona" target="_blank">ruang tertutup</a> yang ramai dengan sirkulasi udara yang kurang baik atau kontak langsung dengan droplet.</p>
            <p>Selain virus SARS-CoV-2 atau virus Corona,<strong> </strong>virus yang juga termasuk dalam kelompok ini adalah virus penyebab <em>Severe Acute Respiratory Syndrome</em> (<a href="https://www.alodokter.com/sars">SARS</a>) dan virus penyebab <em>Middle-East Respiratory Syndrome</em> (<a href="https://www.alodokter.com/mers">MERS</a>). Meski disebabkan oleh virus dari kelompok yang sama, yaitu coronavirus, COVID-19 memiliki beberapa <a href="https://www.alodokter.com/ketahui-perbedaan-covid-19-dengan-sars-dan-mers">perbedaan dengan SARS dan MERS</a>, antara lain dalam hal kecepatan penyebaran dan keparahan gejala.</p>
            <h3><strong>Tingkat Kematian Akibat Virus Corona (COVID-19)</strong></h3>
            <p>Virus Corona yang menyebabkan COVID-19 bisa menyerang siapa saja. Menurut data yang dirilis Gugus Tugas Percepatan Penanganan COVID-19 Republik Indonesia, jumlah kasus terkonfirmasi positif hingga 30 November 2020 adalah 534.266 orang dengan jumlah kematian 16.815 orang. Tingkat kematian (<em>case fatality rate</em>) akibat COVID-19 adalah sekitar 3,1%.</p>
            <p>Jika dilihat dari persentase angka kematian yang di bagi menurut golongan usia, maka kelompok usia 46-59 tahun memiliki persentase angka kematian yang lebih tinggi dibandingkan golongan usia lainnya.</p>
            <p>Sedangkan berdasarkan jenis kelamin, 56,7% penderita yang meninggal akibat COVID-19 adalah laki-laki dan 43,3% sisanya adalah perempuan.</p>
            <h3><strong>Gejala Virus Corona (COVID-19)</strong></h3>
            <p><a href="https://www.alodokter.com/kenali-gejala-orang-terinfeksi-virus-corona-di-minggu-pertama" target="_blank">Gejala awal</a> infeksi virus Corona atau COVID-19 bisa menyerupai gejala flu, yaitu demam, pilek, batuk kering, <a href="https://www.alodokter.com/sakit-tenggorokan" target="_blank">sakit tenggorokan</a>, dan sakit kepala. Setelah itu, gejala dapat hilang dan sembuh atau malah memberat. Penderita dengan gejala yang berat bisa mengalami demam tinggi, batuk berdahak bahkan berdarah, sesak napas, dan nyeri dada. Gejala-gejala tersebut muncul ketika <a href="https://www.alodokter.com/ini-reaksi-tubuh-saat-terinfeksi-virus-corona" target="_blank">tubuh bereaksi melawan virus Corona</a>.</p>
            <p>Secara umum, ada 3 <a href="https://www.alodokter.com/berbagai-gejala-infeksi-virus-corona-dari-yang-ringan-hingga-berat" target="_blank">gejala umum</a> yang bisa menandakan seseorang terinfeksi virus Corona, yaitu:</p>
            <ul>
            <li>
            <a href="https://www.alodokter.com/demam">Demam</a> (suhu tubuh di atas 38 derajat Celsius)</li>
            <li>Batuk kering</li>
            <li><a href="https://www.alodokter.com/kenali-penyebab-nafas-pendek">Sesak napas</a></li>
            </ul>
            <p>Ada beberapa gejala lain yang juga bisa muncul pada infeksi virus Corona meskipun lebih jarang, yaitu:</p>
            <ul>
            <li>Diare</li>
            <li>Sakit kepala</li>
            <li><a href="https://www.alodokter.com/konjungtivitis">Konjungtivitis</a></li>
            <li>Hilangnya kemampuan mengecap rasa atau mencium bau</li>
            <li><a href="https://www.alodokter.com/kenali-lebih-jauh-gejala-ruam-kulit-pada-covid-19" target="_blank">Ruam di kulit</a></li>
            </ul>
            <p>Gejala-gejala COVID-19 ini umumnya muncul dalam waktu 2 hari sampai 2 minggu setelah penderita terpapar virus Corona. Sebagian pasien yang terinfeksi virus Corona bisa mengalami penurunan oksigen tanpa adanya gejala apapun. Kondisi ini disebut <a href="https://www.alodokter.com/mengenal-happy-hypoxia-pada-penyakit-covid-19" target="_blank"><em>happy hypoxia</em></a>.</p>
            <p>Guna memastikan apakah gejala-gejala tersebut merupakan gejala dari virus Corona, diperlukan rapid test atau <a href="https://www.alodokter.com/mengenal-tes-pcr-untuk-mendiagnosis-covid-19">PCR</a>. Untuk menemukan tempat melakukan <a href="https://www.alodokter.com/kenali-apa-itu-rapid-test-untuk-virus-corona">rapid test</a> atau PCR di sekitar rumah Anda, klik di <a href="https://www.alodokter.com/cari-rumah-sakit/kedokteran-umum/tes-risiko-covid19">sini</a>.</p>
            <h4><strong>Kapan harus ke dokter</strong></h4>
            <p>Segera lakukan <a href="https://www.alodokter.com/bantu-cegah-penyebaran-covid-19-inilah-protokol-isolasi-mandiri-yang-perlu-diterapkan">isolasi mandiri</a> bila Anda mengalami gejala infeksi virus Corona (COVID-19) seperti yang telah disebutkan di atas, terutama jika dalam 2 minggu terakhir Anda berada di daerah yang memiliki kasus COVID-19 atau kontak dengan penderita COVID-19. Setelah itu, hubungi <em>hotline </em>COVID-19 di 119 Ext. 9 untuk mendapatkan pengarahan lebih lanjut.</p>
            <p>Bila Anda mungkin terpapar virus Corona tapi tidak mengalami gejala apa pun, Anda tidak perlu <a href="https://www.alodokter.com/antisipasi-corona-kapan-harus-memeriksakan-diri-ke-rumah-sakit" target="_blank">memeriksakan diri ke rumah sakit</a>, cukup tinggal di rumah selama 14 hari dan membatasi kontak dengan orang lain. Bila muncul gejala, baru lakukan isolasi mandiri dan tanyakan kepada dokter melalui telepon atau aplikasi mengenai tindakan apa yang perlu Anda lakukan dan obat apa yang perlu Anda konsumsi.</p>
            <p>Bila Anda memerlukan pemeriksaan langsung oleh dokter, jangan langsung ke rumah sakit karena itu akan meningkatkan risiko Anda tertular atau menularkan virus Corona ke orang lain. Anda bisa <a href="https://www.alodokter.com/cari-dokter">membuat janji konsultasi</a> dengan dokter di rumah sakit melalui aplikasi ALODOKTER agar bisa diarahkan ke dokter terdekat yang dapat membantu Anda.</p>
            <p>ALODOKTER juga memiliki fitur untuk membantu Anda memeriksa risiko tertular virus Corona dengan lebih mudah. Untuk menggunakan fitur tersebut, silakan klik gambar di bawah ini.</p>
            <p><a href="https://corona.alodokter.com/cek-risiko-tertular-virus-corona-gratis"><img class="alignnone wp-image-1790415 size-full" src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1589160481/attached_image/virus-corona-1-alodokter.jpg" alt="Cek Risiko Infeksi Virus Corona" width="650" height="111"></a></p>
            <h3>
            <strong>Penyebab Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Infeksi virus Corona atau COVID-19 disebabkan oleh coronavirus, yaitu kelompok virus yang menginfeksi sistem pernapasan. Pada sebagian besar kasus, coronavirus hanya menyebabkan infeksi pernapasan ringan sampai sedang, seperti flu. Akan tetapi, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti pneumonia, <em>Middle-East Respiratory Syndrome</em> (MERS) dan <em>Severe Acute Respiratory Syndrome </em>(SARS).</p>
            <p>Ada dugaan bahwa virus Corona awalnya ditularkan dari hewan ke manusia. Namun, kemudian diketahui bahwa virus Corona juga menular dari manusia ke manusia.</p>
            <p>Seseorang dapat tertular COVID-19 melalui berbagai cara, yaitu:</p>
            <ul>
            <li>Tidak sengaja menghirup percikan ludah (droplet) yang keluar saat penderita COVID-19 batuk atau bersin</li>
            <li>Memegang mulut atau hidung tanpa mencuci tangan terlebih dulu setelah menyentuh benda yang terkena cipratan ludah penderita COVID-19</li>
            <li>Kontak jarak dekat dengan penderita COVID-19</li>
            </ul>
            <p>Virus Corona dapat menginfeksi siapa saja, tetapi <a href="https://www.alodokter.com/ini-reaksi-tubuh-saat-terinfeksi-virus-corona" target="_blank">efeknya</a> akan lebih berbahaya atau bahkan fatal bila terjadi pada orang lanjut usia, <a href="https://www.alodokter.com/infeksi-virus-corona-pada-ibu-hamil" target="_blank">ibu hamil</a>, orang yang memiliki <a href="https://www.alodokter.com/kelompok-penyakit-yang-dapat-meningkatkan-risiko-terkena-covid-19" target="_blank">penyakit tertentu</a>, <a href="https://www.alodokter.com/alasan-mengapa-virus-corona-berbahaya-untuk-perokok" target="_blank">perokok</a>, atau orang yang daya tahan tubuhnya lemah, misalnya pada <a href="https://www.alodokter.com/dampak-covid-19-pada-penderita-kanker-dan-langkah-pencegahannya" target="_blank">penderita kanker</a>.</p>
            <p>Karena mudah menular, virus Corona juga berisiko tinggi menginfeksi para tenaga medis yang merawat pasien COVID-19. Oleh karena itu, para tenaga medis dan orang-orang yang memiliki kontak dengan pasien COVID-19 perlu menggunakan <a href="https://www.alodokter.com/macam-macam-apd-dalam-menghadapi-wabah-covid-19" target="_blank">alat pelindung diri (APD)</a>.</p>
            <h3>
            <strong>Diagnosis Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Untuk menentukan apakah pasien terinfeksi virus Corona, dokter akan menanyakan gejala yang dialami pasien dan apakah pasien baru saja bepergian atau tinggal di daerah yang memiliki kasus infeksi virus Corona sebelum gejala muncul. Dokter juga akan menanyakan apakah pasien ada kontak dengan orang yang menderita atau diduga menderita COVID-19.</p>
            <p>Guna memastikan diagnosis COVID-19, dokter akan melakukan beberapa pemeriksaan berikut:</p>
            <ul>
            <li>
            <em><a href="https://www.alodokter.com/kenali-apa-itu-rapid-test-untuk-virus-corona">Rapid test</a></em> untuk mendeteksi antibodi (IgM dan IgG) yang diproduksi oleh tubuh untuk melawan virus Corona</li>
            <li>
            <em>Swab test</em> atau <a href="https://www.alodokter.com/mengenal-tes-pcr-untuk-mendiagnosis-covid-19" target="_blank">tes PCR (<em>polymerase chain reaction</em>)</a> untuk mendeteksi virus Corona di dalam dahak</li>
            <li>
            <a href="https://www.alodokter.com/ct-scan-ini-yang-harus-anda-ketahui">CT scan</a> atau Rontgen dada untuk mendeteksi infiltrat atau cairan di paru-paru</li>
            </ul>
            <p>Hasil <em>rapid test </em>COVID-19 positif kemungkinan besar menunjukkan bahwa Anda memang sudah terinfeksi virus Corona, namun bisa juga berarti Anda terinfeksi kuman atau virus yang lain. Sebaliknya, hasil <a href="https://www.alodokter.com/hasil-rapid-test-covid-19-negatif-apa-artinya" target="_blank">rapid test COVID-19 negatif</a> belum tentu menandakan bahwa Anda mutlak terbebas dari virus Corona.</p>
            <h3>
            <strong>Pengobatan Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Belum ada obat yang benar-benar efektif untuk mengatasi infeksi virus Corona atau COVID-19. Pilihan pengobatan akan disesuaikan dengan kondisi pasien dan tingkat keparahannya. Beberapa pasien dengan gejala ringan atau tanpa gejala akan di sarankan untuk melakukan protokol isolasi mandiri di rumah sambil tetap melakukan langkah pencegahan penyebaran infeksi virus Corona.</p>
            <p>Selain itu, dokter juga bisa memberikan beberapa beberapa langkah untuk meredakan gejalanya dan mencegah penyebaran virus corona, yaitu:</p>
            <ul>
            <li>Merujuk penderita COVID-19 yang berat untuk menjalani perawatan dan karatina di rumah sakit rujukan</li>
            <li>Memberikan <a href="https://www.alodokter.com/analgetik-antipiretik">obat pereda demam dan nyeri</a> yang aman dan sesuai kondisi penderita</li>
            <li>Menganjurkan penderita COVID-19 untuk melakukan isolasi mandiri dan <a href="https://www.alodokter.com/memenuhi-waktu-tidur-yang-ideal-demi-kesehatan">istirahat yang cukup</a>
            </li>
            <li>Menganjurkan penderita COVID-19 untuk banyak minum air putih untuk menjaga kadar cairan tubuh</li>
            </ul>
            <h3>
            <strong>Komplikasi Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Pada kasus yang parah, infeksi virus Corona bisa menyebabkan beberapa komplikasi berikut ini:</p>
            <ul>
            <li>
            <em><a href="https://www.alodokter.com/pneumonia" target="_blank">Pneumonia</a> </em>(infeksi paru-paru)</li>
            <li>Infeksi sekunder pada organ lain</li>
            <li><a href="https://www.alodokter.com/gagal-ginjal-akut">Gagal ginjal</a></li>
            <li><em>Acute cardiac injury</em></li>
            <li><em><a href="https://www.alodokter.com/acute-respiratory-distress-syndrome">Acute respiratory distress syndrome</a></em></li>
            <li>Kematian</li>
            </ul>
            <p>Selain itu, pada beberapa kasus, seseorang juga bisa mengalami kondisi yang disebut <a href="https://www.alodokter.com/post-acute-covid-19-syndrome-waspada-dan-kenali-gejalanya" target="_blank"><em>post-acute </em>COVID-19<em> syndrome</em></a>, meski telah dinyatakan sembuh dari infeksi virus Corona.</p>
            <h3>
            <strong>Pencegahan Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Sampai saat ini, belum ada vaksin <a href="https://www.alodokter.com/ketahui-cara-untuk-mencegah-penularan-virus-corona" target="_blank">untuk mencegah infeksi virus Corona</a> atau COVID-19. Namun, beberapa perusahaan farmasi dan institusi kesehatan tengah berupaya untuk meneliti dan mengembangkan vaksin COVID-19. Apabila lulus uji klinis dan dinyatakan efektif dan aman untuk mencegah COVID-19, vaksin tersebut akan mulai <a href="https://www.alodokter.com/mengetahui-tahap-pembuatan-vaksin-covid-19" target="_blank">diproduksi lebih banyak</a> agar dapat diberikan pada masyarakat.</p>
            <p>Oleh sebab itu, cara pencegahan yang terbaik adalah dengan menghindari faktor-faktor yang bisa menyebabkan Anda terinfeksi virus ini, yaitu:</p>
            <ul>
            <li>Terapkan <em><a href="https://www.alodokter.com/terapkan-physical-distancing-saat-ini-juga">physical distancing</a></em>, yaitu menjaga jarak minimal 1 meter dari orang lain, dan jangan dulu ke luar rumah kecuali ada keperluan mendesak.</li>
            <li>Gunakan <a href="https://www.alodokter.com/cara-menggunakan-masker-kain-untuk-mencegah-infeksi-virus-corona" target="_blank">masker</a> saat beraktivitas di tempat umum atau keramaian, termasuk saat pergi <a href="https://www.alodokter.com/tips-berbelanja-bahan-makanan-selama-pandemi-covid-19" target="_blank">berbelanja bahan makanan</a> dan mengikuti ibadah di hari raya, misalnya <a href="https://www.alodokter.com/adaptasi-kebiasaan-baru-pada-hari-raya-idul-adha" target="_blank">Idul Adha</a>.</li>
            <li>
            <a href="https://www.alodokter.com/cuci-tangan-dulu">Rutin mencuci tangan</a> dengan air dan sabun atau <em>hand sanitizer</em> yang mengandung alkohol minimal 60%, terutama setelah beraktivitas di luar rumah atau di tempat umum.</li>
            <li>Jangan menyentuh mata, mulut, dan hidung sebelum mencuci tangan.</li>
            <li>
            <a href="https://www.alodokter.com/berbagai-cara-meningkatkan-imunitas-tubuh-agar-tidak-mudah-sakit" target="_blank">Tingkatkan daya tahan tubuh</a> dengan pola hidup sehat, seperti mengonsumsi makanan bergizi, berolahraga secara rutin, beristirahat yang cukup, dan mencegah stres.</li>
            <li>Hindari kontak dengan penderita COVID-19, orang yang dicurigai positif terinfeksi virus Corona, atau orang yang sedang sakit demam, batuk, atau pilek.</li>
            <li>Tutup mulut dan hidung dengan tisu saat batuk atau bersin, kemudian buang tisu ke tempat sampah.</li>
            <li>Jaga kebersihan benda yang sering disentuh dan kebersihan lingkungan, termasuk <a href="https://www.alodokter.com/cegah-penyebaran-virus-corona-dengan-membersihkan-rumah-selama-isolasi-mandiri" target="_blank">kebersihan rumah</a>.</li>
            </ul>
            <p>Untuk orang yang diduga terkena <a href="https://www.alodokter.com/beragam-istilah-terkait-virus-corona-dan-covid-19">COVID-19</a> (termasuk kategori suspek dan <em>probable</em>) yang sebelumnya disebut sebagai ODP (orang dalam pemantauan) maupun PDP (pasien dalam pengawasan), ada beberapa langkah yang bisa dilakukan agar tidak menularkan virus Corona ke orang lain, yaitu:</p>
            <ul>
            <li>Lakukan <a href="https://www.alodokter.com/bantu-cegah-penyebaran-covid-19-inilah-protokol-isolasi-mandiri-yang-perlu-diterapkan">isolasi mandiri</a> dengan cara tinggal terpisah dari orang lain untuk sementara waktu. Bila tidak memungkinkan, gunakan kamar tidur dan kamar mandi yang berbeda dengan yang digunakan orang lain.</li>
            <li>Jangan keluar rumah, kecuali untuk mendapatkan pengobatan.</li>
            <li>Bila ingin ke rumah sakit saat gejala bertambah berat, sebaiknya hubungi dulu pihak rumah sakit untuk menjemput.</li>
            <li>Larang orang lain untuk mengunjungi atau menjenguk Anda sampai Anda benar-benar sembuh.</li>
            <li>Sebisa mungkin jangan melakukan pertemuan dengan orang yang sedang sedang sakit.</li>
            <li>Hindari berbagi penggunaan alat makan dan minum, alat mandi, serta perlengkapan tidur dengan orang lain.</li>
            <li>Pakai masker dan sarung tangan bila sedang berada di tempat umum atau sedang bersama orang lain.</li>
            <li>Gunakan tisu untuk menutup mulut dan hidung bila batuk atau bersin, lalu segera buang tisu ke tempat sampah.</li>
            </ul>
            <p>Kondisi-kondisi yang memerlukan penanganan langsung oleh dokter di rumah sakit, seperti <a href="https://www.alodokter.com/persiapan-melahirkan-di-tengah-pandemi-covid-19" target="_blank">melahirkan</a>, <a href="https://www.alodokter.com/hal-yang-perlu-diperhatikan-saat-merencanakan-operasi-selama-pandemi-covid-19" target="_blank">operasi</a>, cuci darah, atau <a href="https://www.alodokter.com/yuk-tetap-lengkapi-vaksinasi-anak-selama-pandemi-covid-19" target="_blank">vaksinasi anak</a>, perlu ditangani secara berbeda dengan beberapa penyesuaian selama pandemi COVID-19. Tujuannya adalah untuk mencegah penularan virus Corona selama Anda berada di rumah sakit. Konsultasikan dengan dokter mengenai tindakan terbaik yang perlu dilakukan.</p>
            <p>Apabila Anda ingin mendapatkan lebih banyak informasi mengenai gejala, pencegahan, dan penanganan infeksi virus Corona, silakan <em>download</em> aplikasi ALODOKTER di <a href="https://alodokter.onelink.me/1997390319?pid=App-download-text15&amp;is_retargeting=true&amp;af_web_dp=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.alodokter.android" target="_blank">Google Play atau App Store</a>. Melalui aplikasi ALODOKTER, Anda juga bisa <em>chat</em> langsung dengan dokter dan membuat janji konsultasi dengan dokter di rumah sakit.</p>
            <div id="gtx-anchor" style="position: absolute; visibility: hidden; left: 10px; top: 1478.03px; width: 933.35px; height: 41.6px;"></div>
            <div class="jfk-bubble gtx-bubble" style="visibility: visible; left: -21px; top: 1530px; opacity: 1;"></div>
            </body></html>
            </div>
               </div>
            
                <!-- reviewed by & referensi -->
                <!--<div class="sources">
              <div style="padding:5px 0px; border-bottom:solid 1px #ccc;" font-size="14px"> Ditinjau oleh : dr. Merry Dame Cristy Pane </div>
              <h4 id="trigger-sources">Referensi</h4>
              <div class="data-sources" style="display:none;">
                <p>Huang, et al. (2020). Clinical features of patients infected with 2019 novel coronavirus in Wuhan, China. The Lancet, 6736(20), pp. 1-10.
            <br />Wang, et al. (2020). A Novel Coronavirus Outbreak of Global Health Concern. The Lancet, 6736(20), pp. 1-4.
            <br />Centers for Disease Control and Prevention (2020). 2019 Novel Coronavirus, Wuhan, China.
            <br />World Health Organization (2020). Coronavirus.
            <br />World Health Organization (2020). Novel Coronavirus (2019-nCoV).
            <br />Keputusan Menteri Kesehatan Republik Indonesia Nomor HK.01.07/Menkes/413/2020 Tentang Pedoman Pencegahan dan Pengendalian Coronavirus Disease 2019 (COVID-19).
            <br />Gugus Tugas Percepatan Penanganan COVID-19. (2020). Peta Sebaran 
            <br />The Centre of Evidence-Based Medicine develops, promote, and disseminates better evidence for healthcare CEBM. (2020) Global Covid-19 Case Fatality Rates.
            <br />Citroner, G. Healthline (2020). China Coronavirus Outbreak: CDC Issues Warning, Multiple Cases in U.S.
            <br />Evans, M. Patient (2020). Wuhan Coronavirus: What You Need to Know.
            <br />WebMD (2020). Coronavirus.
            </p>
              </div>
            </div>-->
            
            <div class="date-article">
            <!-- Terakhir diperbarui: 30 November 2020 -->
              Terakhir diperbarui: 30 November 2020
            </div> 
            <sources-post
              doctor-name="dr. Merry Dame Cristy Pane"
              sources="&quot;\u003cp\u003eHuang, et al. (2020). Clinical features of patients infected with 2019 novel coronavirus in Wuhan, China. The Lancet, 6736(20), pp. 1-10.\n\u003cbr /\u003eWang, et al. (2020). A Novel Coronavirus Outbreak of Global Health Concern. The Lancet, 6736(20), pp. 1-4.\n\u003cbr /\u003eCenters for Disease Control and Prevention (2020). 2019 Novel Coronavirus, Wuhan, China.\n\u003cbr /\u003eWorld Health Organization (2020). Coronavirus.\n\u003cbr /\u003eWorld Health Organization (2020). Novel Coronavirus (2019-nCoV).\n\u003cbr /\u003eKeputusan Menteri Kesehatan Republik Indonesia Nomor HK.01.07/Menkes/413/2020 Tentang Pedoman Pencegahan dan Pengendalian Coronavirus Disease 2019 (COVID-19).\n\u003cbr /\u003eGugus Tugas Percepatan Penanganan COVID-19. (2020). Peta Sebaran \n\u003cbr /\u003eThe Centre of Evidence-Based Medicine develops, promote, and disseminates better evidence for healthcare CEBM. (2020) Global Covid-19 Case Fatality Rates.\n\u003cbr /\u003eCitroner, G. Healthline (2020). China Coronavirus Outbreak: CDC Issues Warning, Multiple Cases in U.S.\n\u003cbr /\u003eEvans, M. Patient (2020). Wuhan Coronavirus: What You Need to Know.\n\u003cbr /\u003eWebMD (2020). Coronavirus.\n\u003c/p\u003e&quot;"
            >
            </sources-post>',
        ]);
        blog::create([
            'title' => 'apa itu corona',
            'image' => 'public/images/post/2020-12-02/apa itu corona1606879222.jpg',
            'image_source' => 'pixabay.com',
            'category' => 1,
            'status' => 1,
            'user' => 3,
            'content' => '<p><strong>Virus Corona atau <em>severe acute respiratory syndrome</em> <em>coronavirus 2</em> (SARS-CoV-2) adalah virus yang menyerang sistem pernapasan. </strong><strong>Penyakit karena infeksi virus ini disebut COVID-19. </strong><strong>Virus </strong><strong>Corona </strong><strong>bisa menyebabkan </strong><strong>gangguan ringan pada </strong><strong>sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.</strong></p>
            <p><em>Severe acute respiratory syndrome coronavirus 2</em> (SARS-CoV-2) yang lebih dikenal dengan nama virus Corona adalah jenis baru dari coronavirus yang menular ke manusia. Virus ini bisa menyerang siapa saja, seperti <a href="https://www.alodokter.com/alasan-mengapa-lansia-lebih-rentan-terhadap-virus-corona">lansia</a> (golongan usia lanjut), orang dewasa, <a href="https://www.alodokter.com/waspadai-infeksi-virus-corona-pada-anak">anak-anak</a>, dan <a href="https://www.alodokter.com/lindungi-bayi-anda-dari-virus-corona">bayi</a>, termasuk ibu hamil dan <a href="https://www.alodokter.com/infeksi-virus-corona-pada-ibu-menyusui-ini-yang-perlu-anda-ketahui">ibu menyusui</a>.</p>
            <a><img class="alignnone size-full wp-image-1788064" src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1589160479/attached_image/virus-corona-0-alodokter.jpg" alt="Virus Corona - Alodokter" width="650" height="433"></a>
            <p>Infeksi virus Corona disebut <a href="https://www.alodokter.com/covid-19" target="_blank">COVID-19</a> (<em>Corona Virus Disease 2019</em>) dan pertama kali ditemukan di kota Wuhan, China pada akhir Desember 2019. Virus ini menular dengan sangat cepat dan telah menyebar ke hampir semua negara, termasuk Indonesia, hanya dalam waktu beberapa bulan.</p>
            <p>Hal tersebut membuat beberapa negara menerapkan kebijakan untuk memberlakukan <em><a href="https://www.alodokter.com/memahami-istilah-lockdown-yang-mencuat-di-tengah-pandemi-virus-corona" target="_blank">lockdown</a> </em>dalam rangka mencegah penyebaran virus Corona. Di Indonesia sendiri, diberlakukan kebijakan Pembatasan Sosial Berskala Besar (PSBB) untuk menekan penyebaran virus ini.</p>
            <p>Coronavirus adalah kumpulan virus yang bisa menginfeksi sistem pernapasan. Pada banyak kasus, virus ini hanya menyebabkan infeksi pernapasan ringan, <a href="https://www.alodokter.com/tampak-mirip-ketahui-beda-gejala-virus-corona-dengan-flu-biasa">seperti flu</a>. Namun, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti infeksi paru-paru (pneumonia).</p>
            <p>Virus ini menular melalui percikan dahak (droplet) dari saluran pernapasan, misalnya ketika berada di <a href="https://www.alodokter.com/risiko-penularan-virus-corona" target="_blank">ruang tertutup</a> yang ramai dengan sirkulasi udara yang kurang baik atau kontak langsung dengan droplet.</p>
            <p>Selain virus SARS-CoV-2 atau virus Corona,<strong> </strong>virus yang juga termasuk dalam kelompok ini adalah virus penyebab <em>Severe Acute Respiratory Syndrome</em> (<a href="https://www.alodokter.com/sars">SARS</a>) dan virus penyebab <em>Middle-East Respiratory Syndrome</em> (<a href="https://www.alodokter.com/mers">MERS</a>). Meski disebabkan oleh virus dari kelompok yang sama, yaitu coronavirus, COVID-19 memiliki beberapa <a href="https://www.alodokter.com/ketahui-perbedaan-covid-19-dengan-sars-dan-mers">perbedaan dengan SARS dan MERS</a>, antara lain dalam hal kecepatan penyebaran dan keparahan gejala.</p>
            <h3><strong>Tingkat Kematian Akibat Virus Corona (COVID-19)</strong></h3>
            <p>Virus Corona yang menyebabkan COVID-19 bisa menyerang siapa saja. Menurut data yang dirilis Gugus Tugas Percepatan Penanganan COVID-19 Republik Indonesia, jumlah kasus terkonfirmasi positif hingga 30 November 2020 adalah 534.266 orang dengan jumlah kematian 16.815 orang. Tingkat kematian (<em>case fatality rate</em>) akibat COVID-19 adalah sekitar 3,1%.</p>
            <p>Jika dilihat dari persentase angka kematian yang di bagi menurut golongan usia, maka kelompok usia 46-59 tahun memiliki persentase angka kematian yang lebih tinggi dibandingkan golongan usia lainnya.</p>
            <p>Sedangkan berdasarkan jenis kelamin, 56,7% penderita yang meninggal akibat COVID-19 adalah laki-laki dan 43,3% sisanya adalah perempuan.</p>
            <h3><strong>Gejala Virus Corona (COVID-19)</strong></h3>
            <p><a href="https://www.alodokter.com/kenali-gejala-orang-terinfeksi-virus-corona-di-minggu-pertama" target="_blank">Gejala awal</a> infeksi virus Corona atau COVID-19 bisa menyerupai gejala flu, yaitu demam, pilek, batuk kering, <a href="https://www.alodokter.com/sakit-tenggorokan" target="_blank">sakit tenggorokan</a>, dan sakit kepala. Setelah itu, gejala dapat hilang dan sembuh atau malah memberat. Penderita dengan gejala yang berat bisa mengalami demam tinggi, batuk berdahak bahkan berdarah, sesak napas, dan nyeri dada. Gejala-gejala tersebut muncul ketika <a href="https://www.alodokter.com/ini-reaksi-tubuh-saat-terinfeksi-virus-corona" target="_blank">tubuh bereaksi melawan virus Corona</a>.</p>
            <p>Secara umum, ada 3 <a href="https://www.alodokter.com/berbagai-gejala-infeksi-virus-corona-dari-yang-ringan-hingga-berat" target="_blank">gejala umum</a> yang bisa menandakan seseorang terinfeksi virus Corona, yaitu:</p>
            <ul>
            <li>
            <a href="https://www.alodokter.com/demam">Demam</a> (suhu tubuh di atas 38 derajat Celsius)</li>
            <li>Batuk kering</li>
            <li><a href="https://www.alodokter.com/kenali-penyebab-nafas-pendek">Sesak napas</a></li>
            </ul>
            <p>Ada beberapa gejala lain yang juga bisa muncul pada infeksi virus Corona meskipun lebih jarang, yaitu:</p>
            <ul>
            <li>Diare</li>
            <li>Sakit kepala</li>
            <li><a href="https://www.alodokter.com/konjungtivitis">Konjungtivitis</a></li>
            <li>Hilangnya kemampuan mengecap rasa atau mencium bau</li>
            <li><a href="https://www.alodokter.com/kenali-lebih-jauh-gejala-ruam-kulit-pada-covid-19" target="_blank">Ruam di kulit</a></li>
            </ul>
            <p>Gejala-gejala COVID-19 ini umumnya muncul dalam waktu 2 hari sampai 2 minggu setelah penderita terpapar virus Corona. Sebagian pasien yang terinfeksi virus Corona bisa mengalami penurunan oksigen tanpa adanya gejala apapun. Kondisi ini disebut <a href="https://www.alodokter.com/mengenal-happy-hypoxia-pada-penyakit-covid-19" target="_blank"><em>happy hypoxia</em></a>.</p>
            <p>Guna memastikan apakah gejala-gejala tersebut merupakan gejala dari virus Corona, diperlukan rapid test atau <a href="https://www.alodokter.com/mengenal-tes-pcr-untuk-mendiagnosis-covid-19">PCR</a>. Untuk menemukan tempat melakukan <a href="https://www.alodokter.com/kenali-apa-itu-rapid-test-untuk-virus-corona">rapid test</a> atau PCR di sekitar rumah Anda, klik di <a href="https://www.alodokter.com/cari-rumah-sakit/kedokteran-umum/tes-risiko-covid19">sini</a>.</p>
            <h4><strong>Kapan harus ke dokter</strong></h4>
            <p>Segera lakukan <a href="https://www.alodokter.com/bantu-cegah-penyebaran-covid-19-inilah-protokol-isolasi-mandiri-yang-perlu-diterapkan">isolasi mandiri</a> bila Anda mengalami gejala infeksi virus Corona (COVID-19) seperti yang telah disebutkan di atas, terutama jika dalam 2 minggu terakhir Anda berada di daerah yang memiliki kasus COVID-19 atau kontak dengan penderita COVID-19. Setelah itu, hubungi <em>hotline </em>COVID-19 di 119 Ext. 9 untuk mendapatkan pengarahan lebih lanjut.</p>
            <p>Bila Anda mungkin terpapar virus Corona tapi tidak mengalami gejala apa pun, Anda tidak perlu <a href="https://www.alodokter.com/antisipasi-corona-kapan-harus-memeriksakan-diri-ke-rumah-sakit" target="_blank">memeriksakan diri ke rumah sakit</a>, cukup tinggal di rumah selama 14 hari dan membatasi kontak dengan orang lain. Bila muncul gejala, baru lakukan isolasi mandiri dan tanyakan kepada dokter melalui telepon atau aplikasi mengenai tindakan apa yang perlu Anda lakukan dan obat apa yang perlu Anda konsumsi.</p>
            <p>Bila Anda memerlukan pemeriksaan langsung oleh dokter, jangan langsung ke rumah sakit karena itu akan meningkatkan risiko Anda tertular atau menularkan virus Corona ke orang lain. Anda bisa <a href="https://www.alodokter.com/cari-dokter">membuat janji konsultasi</a> dengan dokter di rumah sakit melalui aplikasi ALODOKTER agar bisa diarahkan ke dokter terdekat yang dapat membantu Anda.</p>
            <p>ALODOKTER juga memiliki fitur untuk membantu Anda memeriksa risiko tertular virus Corona dengan lebih mudah. Untuk menggunakan fitur tersebut, silakan klik gambar di bawah ini.</p>
            <p><a href="https://corona.alodokter.com/cek-risiko-tertular-virus-corona-gratis"><img class="alignnone wp-image-1790415 size-full" src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1589160481/attached_image/virus-corona-1-alodokter.jpg" alt="Cek Risiko Infeksi Virus Corona" width="650" height="111"></a></p>
            <h3>
            <strong>Penyebab Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Infeksi virus Corona atau COVID-19 disebabkan oleh coronavirus, yaitu kelompok virus yang menginfeksi sistem pernapasan. Pada sebagian besar kasus, coronavirus hanya menyebabkan infeksi pernapasan ringan sampai sedang, seperti flu. Akan tetapi, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti pneumonia, <em>Middle-East Respiratory Syndrome</em> (MERS) dan <em>Severe Acute Respiratory Syndrome </em>(SARS).</p>
            <p>Ada dugaan bahwa virus Corona awalnya ditularkan dari hewan ke manusia. Namun, kemudian diketahui bahwa virus Corona juga menular dari manusia ke manusia.</p>
            <p>Seseorang dapat tertular COVID-19 melalui berbagai cara, yaitu:</p>
            <ul>
            <li>Tidak sengaja menghirup percikan ludah (droplet) yang keluar saat penderita COVID-19 batuk atau bersin</li>
            <li>Memegang mulut atau hidung tanpa mencuci tangan terlebih dulu setelah menyentuh benda yang terkena cipratan ludah penderita COVID-19</li>
            <li>Kontak jarak dekat dengan penderita COVID-19</li>
            </ul>
            <p>Virus Corona dapat menginfeksi siapa saja, tetapi <a href="https://www.alodokter.com/ini-reaksi-tubuh-saat-terinfeksi-virus-corona" target="_blank">efeknya</a> akan lebih berbahaya atau bahkan fatal bila terjadi pada orang lanjut usia, <a href="https://www.alodokter.com/infeksi-virus-corona-pada-ibu-hamil" target="_blank">ibu hamil</a>, orang yang memiliki <a href="https://www.alodokter.com/kelompok-penyakit-yang-dapat-meningkatkan-risiko-terkena-covid-19" target="_blank">penyakit tertentu</a>, <a href="https://www.alodokter.com/alasan-mengapa-virus-corona-berbahaya-untuk-perokok" target="_blank">perokok</a>, atau orang yang daya tahan tubuhnya lemah, misalnya pada <a href="https://www.alodokter.com/dampak-covid-19-pada-penderita-kanker-dan-langkah-pencegahannya" target="_blank">penderita kanker</a>.</p>
            <p>Karena mudah menular, virus Corona juga berisiko tinggi menginfeksi para tenaga medis yang merawat pasien COVID-19. Oleh karena itu, para tenaga medis dan orang-orang yang memiliki kontak dengan pasien COVID-19 perlu menggunakan <a href="https://www.alodokter.com/macam-macam-apd-dalam-menghadapi-wabah-covid-19" target="_blank">alat pelindung diri (APD)</a>.</p>
            <h3>
            <strong>Diagnosis Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Untuk menentukan apakah pasien terinfeksi virus Corona, dokter akan menanyakan gejala yang dialami pasien dan apakah pasien baru saja bepergian atau tinggal di daerah yang memiliki kasus infeksi virus Corona sebelum gejala muncul. Dokter juga akan menanyakan apakah pasien ada kontak dengan orang yang menderita atau diduga menderita COVID-19.</p>
            <p>Guna memastikan diagnosis COVID-19, dokter akan melakukan beberapa pemeriksaan berikut:</p>
            <ul>
            <li>
            <em><a href="https://www.alodokter.com/kenali-apa-itu-rapid-test-untuk-virus-corona">Rapid test</a></em> untuk mendeteksi antibodi (IgM dan IgG) yang diproduksi oleh tubuh untuk melawan virus Corona</li>
            <li>
            <em>Swab test</em> atau <a href="https://www.alodokter.com/mengenal-tes-pcr-untuk-mendiagnosis-covid-19" target="_blank">tes PCR (<em>polymerase chain reaction</em>)</a> untuk mendeteksi virus Corona di dalam dahak</li>
            <li>
            <a href="https://www.alodokter.com/ct-scan-ini-yang-harus-anda-ketahui">CT scan</a> atau Rontgen dada untuk mendeteksi infiltrat atau cairan di paru-paru</li>
            </ul>
            <p>Hasil <em>rapid test </em>COVID-19 positif kemungkinan besar menunjukkan bahwa Anda memang sudah terinfeksi virus Corona, namun bisa juga berarti Anda terinfeksi kuman atau virus yang lain. Sebaliknya, hasil <a href="https://www.alodokter.com/hasil-rapid-test-covid-19-negatif-apa-artinya" target="_blank">rapid test COVID-19 negatif</a> belum tentu menandakan bahwa Anda mutlak terbebas dari virus Corona.</p>
            <h3>
            <strong>Pengobatan Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Belum ada obat yang benar-benar efektif untuk mengatasi infeksi virus Corona atau COVID-19. Pilihan pengobatan akan disesuaikan dengan kondisi pasien dan tingkat keparahannya. Beberapa pasien dengan gejala ringan atau tanpa gejala akan di sarankan untuk melakukan protokol isolasi mandiri di rumah sambil tetap melakukan langkah pencegahan penyebaran infeksi virus Corona.</p>
            <p>Selain itu, dokter juga bisa memberikan beberapa beberapa langkah untuk meredakan gejalanya dan mencegah penyebaran virus corona, yaitu:</p>
            <ul>
            <li>Merujuk penderita COVID-19 yang berat untuk menjalani perawatan dan karatina di rumah sakit rujukan</li>
            <li>Memberikan <a href="https://www.alodokter.com/analgetik-antipiretik">obat pereda demam dan nyeri</a> yang aman dan sesuai kondisi penderita</li>
            <li>Menganjurkan penderita COVID-19 untuk melakukan isolasi mandiri dan <a href="https://www.alodokter.com/memenuhi-waktu-tidur-yang-ideal-demi-kesehatan">istirahat yang cukup</a>
            </li>
            <li>Menganjurkan penderita COVID-19 untuk banyak minum air putih untuk menjaga kadar cairan tubuh</li>
            </ul>
            <h3>
            <strong>Komplikasi Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Pada kasus yang parah, infeksi virus Corona bisa menyebabkan beberapa komplikasi berikut ini:</p>
            <ul>
            <li>
            <em><a href="https://www.alodokter.com/pneumonia" target="_blank">Pneumonia</a> </em>(infeksi paru-paru)</li>
            <li>Infeksi sekunder pada organ lain</li>
            <li><a href="https://www.alodokter.com/gagal-ginjal-akut">Gagal ginjal</a></li>
            <li><em>Acute cardiac injury</em></li>
            <li><em><a href="https://www.alodokter.com/acute-respiratory-distress-syndrome">Acute respiratory distress syndrome</a></em></li>
            <li>Kematian</li>
            </ul>
            <p>Selain itu, pada beberapa kasus, seseorang juga bisa mengalami kondisi yang disebut <a href="https://www.alodokter.com/post-acute-covid-19-syndrome-waspada-dan-kenali-gejalanya" target="_blank"><em>post-acute </em>COVID-19<em> syndrome</em></a>, meski telah dinyatakan sembuh dari infeksi virus Corona.</p>
            <h3>
            <strong>Pencegahan Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Sampai saat ini, belum ada vaksin <a href="https://www.alodokter.com/ketahui-cara-untuk-mencegah-penularan-virus-corona" target="_blank">untuk mencegah infeksi virus Corona</a> atau COVID-19. Namun, beberapa perusahaan farmasi dan institusi kesehatan tengah berupaya untuk meneliti dan mengembangkan vaksin COVID-19. Apabila lulus uji klinis dan dinyatakan efektif dan aman untuk mencegah COVID-19, vaksin tersebut akan mulai <a href="https://www.alodokter.com/mengetahui-tahap-pembuatan-vaksin-covid-19" target="_blank">diproduksi lebih banyak</a> agar dapat diberikan pada masyarakat.</p>
            <p>Oleh sebab itu, cara pencegahan yang terbaik adalah dengan menghindari faktor-faktor yang bisa menyebabkan Anda terinfeksi virus ini, yaitu:</p>
            <ul>
            <li>Terapkan <em><a href="https://www.alodokter.com/terapkan-physical-distancing-saat-ini-juga">physical distancing</a></em>, yaitu menjaga jarak minimal 1 meter dari orang lain, dan jangan dulu ke luar rumah kecuali ada keperluan mendesak.</li>
            <li>Gunakan <a href="https://www.alodokter.com/cara-menggunakan-masker-kain-untuk-mencegah-infeksi-virus-corona" target="_blank">masker</a> saat beraktivitas di tempat umum atau keramaian, termasuk saat pergi <a href="https://www.alodokter.com/tips-berbelanja-bahan-makanan-selama-pandemi-covid-19" target="_blank">berbelanja bahan makanan</a> dan mengikuti ibadah di hari raya, misalnya <a href="https://www.alodokter.com/adaptasi-kebiasaan-baru-pada-hari-raya-idul-adha" target="_blank">Idul Adha</a>.</li>
            <li>
            <a href="https://www.alodokter.com/cuci-tangan-dulu">Rutin mencuci tangan</a> dengan air dan sabun atau <em>hand sanitizer</em> yang mengandung alkohol minimal 60%, terutama setelah beraktivitas di luar rumah atau di tempat umum.</li>
            <li>Jangan menyentuh mata, mulut, dan hidung sebelum mencuci tangan.</li>
            <li>
            <a href="https://www.alodokter.com/berbagai-cara-meningkatkan-imunitas-tubuh-agar-tidak-mudah-sakit" target="_blank">Tingkatkan daya tahan tubuh</a> dengan pola hidup sehat, seperti mengonsumsi makanan bergizi, berolahraga secara rutin, beristirahat yang cukup, dan mencegah stres.</li>
            <li>Hindari kontak dengan penderita COVID-19, orang yang dicurigai positif terinfeksi virus Corona, atau orang yang sedang sakit demam, batuk, atau pilek.</li>
            <li>Tutup mulut dan hidung dengan tisu saat batuk atau bersin, kemudian buang tisu ke tempat sampah.</li>
            <li>Jaga kebersihan benda yang sering disentuh dan kebersihan lingkungan, termasuk <a href="https://www.alodokter.com/cegah-penyebaran-virus-corona-dengan-membersihkan-rumah-selama-isolasi-mandiri" target="_blank">kebersihan rumah</a>.</li>
            </ul>
            <p>Untuk orang yang diduga terkena <a href="https://www.alodokter.com/beragam-istilah-terkait-virus-corona-dan-covid-19">COVID-19</a> (termasuk kategori suspek dan <em>probable</em>) yang sebelumnya disebut sebagai ODP (orang dalam pemantauan) maupun PDP (pasien dalam pengawasan), ada beberapa langkah yang bisa dilakukan agar tidak menularkan virus Corona ke orang lain, yaitu:</p>
            <ul>
            <li>Lakukan <a href="https://www.alodokter.com/bantu-cegah-penyebaran-covid-19-inilah-protokol-isolasi-mandiri-yang-perlu-diterapkan">isolasi mandiri</a> dengan cara tinggal terpisah dari orang lain untuk sementara waktu. Bila tidak memungkinkan, gunakan kamar tidur dan kamar mandi yang berbeda dengan yang digunakan orang lain.</li>
            <li>Jangan keluar rumah, kecuali untuk mendapatkan pengobatan.</li>
            <li>Bila ingin ke rumah sakit saat gejala bertambah berat, sebaiknya hubungi dulu pihak rumah sakit untuk menjemput.</li>
            <li>Larang orang lain untuk mengunjungi atau menjenguk Anda sampai Anda benar-benar sembuh.</li>
            <li>Sebisa mungkin jangan melakukan pertemuan dengan orang yang sedang sedang sakit.</li>
            <li>Hindari berbagi penggunaan alat makan dan minum, alat mandi, serta perlengkapan tidur dengan orang lain.</li>
            <li>Pakai masker dan sarung tangan bila sedang berada di tempat umum atau sedang bersama orang lain.</li>
            <li>Gunakan tisu untuk menutup mulut dan hidung bila batuk atau bersin, lalu segera buang tisu ke tempat sampah.</li>
            </ul>
            <p>Kondisi-kondisi yang memerlukan penanganan langsung oleh dokter di rumah sakit, seperti <a href="https://www.alodokter.com/persiapan-melahirkan-di-tengah-pandemi-covid-19" target="_blank">melahirkan</a>, <a href="https://www.alodokter.com/hal-yang-perlu-diperhatikan-saat-merencanakan-operasi-selama-pandemi-covid-19" target="_blank">operasi</a>, cuci darah, atau <a href="https://www.alodokter.com/yuk-tetap-lengkapi-vaksinasi-anak-selama-pandemi-covid-19" target="_blank">vaksinasi anak</a>, perlu ditangani secara berbeda dengan beberapa penyesuaian selama pandemi COVID-19. Tujuannya adalah untuk mencegah penularan virus Corona selama Anda berada di rumah sakit. Konsultasikan dengan dokter mengenai tindakan terbaik yang perlu dilakukan.</p>
            <p>Apabila Anda ingin mendapatkan lebih banyak informasi mengenai gejala, pencegahan, dan penanganan infeksi virus Corona, silakan <em>download</em> aplikasi ALODOKTER di <a href="https://alodokter.onelink.me/1997390319?pid=App-download-text15&amp;is_retargeting=true&amp;af_web_dp=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.alodokter.android" target="_blank">Google Play atau App Store</a>. Melalui aplikasi ALODOKTER, Anda juga bisa <em>chat</em> langsung dengan dokter dan membuat janji konsultasi dengan dokter di rumah sakit.</p>
            <div id="gtx-anchor" style="position: absolute; visibility: hidden; left: 10px; top: 1478.03px; width: 933.35px; height: 41.6px;"></div>
            <div class="jfk-bubble gtx-bubble" style="visibility: visible; left: -21px; top: 1530px; opacity: 1;"></div>
            </body></html>
            </div>
               </div>
            
                <!-- reviewed by & referensi -->
                <!--<div class="sources">
              <div style="padding:5px 0px; border-bottom:solid 1px #ccc;" font-size="14px"> Ditinjau oleh : dr. Merry Dame Cristy Pane </div>
              <h4 id="trigger-sources">Referensi</h4>
              <div class="data-sources" style="display:none;">
                <p>Huang, et al. (2020). Clinical features of patients infected with 2019 novel coronavirus in Wuhan, China. The Lancet, 6736(20), pp. 1-10.
            <br />Wang, et al. (2020). A Novel Coronavirus Outbreak of Global Health Concern. The Lancet, 6736(20), pp. 1-4.
            <br />Centers for Disease Control and Prevention (2020). 2019 Novel Coronavirus, Wuhan, China.
            <br />World Health Organization (2020). Coronavirus.
            <br />World Health Organization (2020). Novel Coronavirus (2019-nCoV).
            <br />Keputusan Menteri Kesehatan Republik Indonesia Nomor HK.01.07/Menkes/413/2020 Tentang Pedoman Pencegahan dan Pengendalian Coronavirus Disease 2019 (COVID-19).
            <br />Gugus Tugas Percepatan Penanganan COVID-19. (2020). Peta Sebaran 
            <br />The Centre of Evidence-Based Medicine develops, promote, and disseminates better evidence for healthcare CEBM. (2020) Global Covid-19 Case Fatality Rates.
            <br />Citroner, G. Healthline (2020). China Coronavirus Outbreak: CDC Issues Warning, Multiple Cases in U.S.
            <br />Evans, M. Patient (2020). Wuhan Coronavirus: What You Need to Know.
            <br />WebMD (2020). Coronavirus.
            </p>
              </div>
            </div>-->
            
            <div class="date-article">
            <!-- Terakhir diperbarui: 30 November 2020 -->
              Terakhir diperbarui: 30 November 2020
            </div> 
            <sources-post
              doctor-name="dr. Merry Dame Cristy Pane"
              sources="&quot;\u003cp\u003eHuang, et al. (2020). Clinical features of patients infected with 2019 novel coronavirus in Wuhan, China. The Lancet, 6736(20), pp. 1-10.\n\u003cbr /\u003eWang, et al. (2020). A Novel Coronavirus Outbreak of Global Health Concern. The Lancet, 6736(20), pp. 1-4.\n\u003cbr /\u003eCenters for Disease Control and Prevention (2020). 2019 Novel Coronavirus, Wuhan, China.\n\u003cbr /\u003eWorld Health Organization (2020). Coronavirus.\n\u003cbr /\u003eWorld Health Organization (2020). Novel Coronavirus (2019-nCoV).\n\u003cbr /\u003eKeputusan Menteri Kesehatan Republik Indonesia Nomor HK.01.07/Menkes/413/2020 Tentang Pedoman Pencegahan dan Pengendalian Coronavirus Disease 2019 (COVID-19).\n\u003cbr /\u003eGugus Tugas Percepatan Penanganan COVID-19. (2020). Peta Sebaran \n\u003cbr /\u003eThe Centre of Evidence-Based Medicine develops, promote, and disseminates better evidence for healthcare CEBM. (2020) Global Covid-19 Case Fatality Rates.\n\u003cbr /\u003eCitroner, G. Healthline (2020). China Coronavirus Outbreak: CDC Issues Warning, Multiple Cases in U.S.\n\u003cbr /\u003eEvans, M. Patient (2020). Wuhan Coronavirus: What You Need to Know.\n\u003cbr /\u003eWebMD (2020). Coronavirus.\n\u003c/p\u003e&quot;"
            >
            </sources-post>',
        ]);
        blog::create([
            'title' => 'apa itu corona',
            'image' => 'public/images/post/2020-12-02/apa itu corona1606879222.jpg',
            'image_source' => 'pixabay.com',
            'category' => 1,
            'status' => 1,
            'user' => 3,
            'content' => '<p><strong>Virus Corona atau <em>severe acute respiratory syndrome</em> <em>coronavirus 2</em> (SARS-CoV-2) adalah virus yang menyerang sistem pernapasan. </strong><strong>Penyakit karena infeksi virus ini disebut COVID-19. </strong><strong>Virus </strong><strong>Corona </strong><strong>bisa menyebabkan </strong><strong>gangguan ringan pada </strong><strong>sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.</strong></p>
            <p><em>Severe acute respiratory syndrome coronavirus 2</em> (SARS-CoV-2) yang lebih dikenal dengan nama virus Corona adalah jenis baru dari coronavirus yang menular ke manusia. Virus ini bisa menyerang siapa saja, seperti <a href="https://www.alodokter.com/alasan-mengapa-lansia-lebih-rentan-terhadap-virus-corona">lansia</a> (golongan usia lanjut), orang dewasa, <a href="https://www.alodokter.com/waspadai-infeksi-virus-corona-pada-anak">anak-anak</a>, dan <a href="https://www.alodokter.com/lindungi-bayi-anda-dari-virus-corona">bayi</a>, termasuk ibu hamil dan <a href="https://www.alodokter.com/infeksi-virus-corona-pada-ibu-menyusui-ini-yang-perlu-anda-ketahui">ibu menyusui</a>.</p>
            <a><img class="alignnone size-full wp-image-1788064" src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1589160479/attached_image/virus-corona-0-alodokter.jpg" alt="Virus Corona - Alodokter" width="650" height="433"></a>
            <p>Infeksi virus Corona disebut <a href="https://www.alodokter.com/covid-19" target="_blank">COVID-19</a> (<em>Corona Virus Disease 2019</em>) dan pertama kali ditemukan di kota Wuhan, China pada akhir Desember 2019. Virus ini menular dengan sangat cepat dan telah menyebar ke hampir semua negara, termasuk Indonesia, hanya dalam waktu beberapa bulan.</p>
            <p>Hal tersebut membuat beberapa negara menerapkan kebijakan untuk memberlakukan <em><a href="https://www.alodokter.com/memahami-istilah-lockdown-yang-mencuat-di-tengah-pandemi-virus-corona" target="_blank">lockdown</a> </em>dalam rangka mencegah penyebaran virus Corona. Di Indonesia sendiri, diberlakukan kebijakan Pembatasan Sosial Berskala Besar (PSBB) untuk menekan penyebaran virus ini.</p>
            <p>Coronavirus adalah kumpulan virus yang bisa menginfeksi sistem pernapasan. Pada banyak kasus, virus ini hanya menyebabkan infeksi pernapasan ringan, <a href="https://www.alodokter.com/tampak-mirip-ketahui-beda-gejala-virus-corona-dengan-flu-biasa">seperti flu</a>. Namun, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti infeksi paru-paru (pneumonia).</p>
            <p>Virus ini menular melalui percikan dahak (droplet) dari saluran pernapasan, misalnya ketika berada di <a href="https://www.alodokter.com/risiko-penularan-virus-corona" target="_blank">ruang tertutup</a> yang ramai dengan sirkulasi udara yang kurang baik atau kontak langsung dengan droplet.</p>
            <p>Selain virus SARS-CoV-2 atau virus Corona,<strong> </strong>virus yang juga termasuk dalam kelompok ini adalah virus penyebab <em>Severe Acute Respiratory Syndrome</em> (<a href="https://www.alodokter.com/sars">SARS</a>) dan virus penyebab <em>Middle-East Respiratory Syndrome</em> (<a href="https://www.alodokter.com/mers">MERS</a>). Meski disebabkan oleh virus dari kelompok yang sama, yaitu coronavirus, COVID-19 memiliki beberapa <a href="https://www.alodokter.com/ketahui-perbedaan-covid-19-dengan-sars-dan-mers">perbedaan dengan SARS dan MERS</a>, antara lain dalam hal kecepatan penyebaran dan keparahan gejala.</p>
            <h3><strong>Tingkat Kematian Akibat Virus Corona (COVID-19)</strong></h3>
            <p>Virus Corona yang menyebabkan COVID-19 bisa menyerang siapa saja. Menurut data yang dirilis Gugus Tugas Percepatan Penanganan COVID-19 Republik Indonesia, jumlah kasus terkonfirmasi positif hingga 30 November 2020 adalah 534.266 orang dengan jumlah kematian 16.815 orang. Tingkat kematian (<em>case fatality rate</em>) akibat COVID-19 adalah sekitar 3,1%.</p>
            <p>Jika dilihat dari persentase angka kematian yang di bagi menurut golongan usia, maka kelompok usia 46-59 tahun memiliki persentase angka kematian yang lebih tinggi dibandingkan golongan usia lainnya.</p>
            <p>Sedangkan berdasarkan jenis kelamin, 56,7% penderita yang meninggal akibat COVID-19 adalah laki-laki dan 43,3% sisanya adalah perempuan.</p>
            <h3><strong>Gejala Virus Corona (COVID-19)</strong></h3>
            <p><a href="https://www.alodokter.com/kenali-gejala-orang-terinfeksi-virus-corona-di-minggu-pertama" target="_blank">Gejala awal</a> infeksi virus Corona atau COVID-19 bisa menyerupai gejala flu, yaitu demam, pilek, batuk kering, <a href="https://www.alodokter.com/sakit-tenggorokan" target="_blank">sakit tenggorokan</a>, dan sakit kepala. Setelah itu, gejala dapat hilang dan sembuh atau malah memberat. Penderita dengan gejala yang berat bisa mengalami demam tinggi, batuk berdahak bahkan berdarah, sesak napas, dan nyeri dada. Gejala-gejala tersebut muncul ketika <a href="https://www.alodokter.com/ini-reaksi-tubuh-saat-terinfeksi-virus-corona" target="_blank">tubuh bereaksi melawan virus Corona</a>.</p>
            <p>Secara umum, ada 3 <a href="https://www.alodokter.com/berbagai-gejala-infeksi-virus-corona-dari-yang-ringan-hingga-berat" target="_blank">gejala umum</a> yang bisa menandakan seseorang terinfeksi virus Corona, yaitu:</p>
            <ul>
            <li>
            <a href="https://www.alodokter.com/demam">Demam</a> (suhu tubuh di atas 38 derajat Celsius)</li>
            <li>Batuk kering</li>
            <li><a href="https://www.alodokter.com/kenali-penyebab-nafas-pendek">Sesak napas</a></li>
            </ul>
            <p>Ada beberapa gejala lain yang juga bisa muncul pada infeksi virus Corona meskipun lebih jarang, yaitu:</p>
            <ul>
            <li>Diare</li>
            <li>Sakit kepala</li>
            <li><a href="https://www.alodokter.com/konjungtivitis">Konjungtivitis</a></li>
            <li>Hilangnya kemampuan mengecap rasa atau mencium bau</li>
            <li><a href="https://www.alodokter.com/kenali-lebih-jauh-gejala-ruam-kulit-pada-covid-19" target="_blank">Ruam di kulit</a></li>
            </ul>
            <p>Gejala-gejala COVID-19 ini umumnya muncul dalam waktu 2 hari sampai 2 minggu setelah penderita terpapar virus Corona. Sebagian pasien yang terinfeksi virus Corona bisa mengalami penurunan oksigen tanpa adanya gejala apapun. Kondisi ini disebut <a href="https://www.alodokter.com/mengenal-happy-hypoxia-pada-penyakit-covid-19" target="_blank"><em>happy hypoxia</em></a>.</p>
            <p>Guna memastikan apakah gejala-gejala tersebut merupakan gejala dari virus Corona, diperlukan rapid test atau <a href="https://www.alodokter.com/mengenal-tes-pcr-untuk-mendiagnosis-covid-19">PCR</a>. Untuk menemukan tempat melakukan <a href="https://www.alodokter.com/kenali-apa-itu-rapid-test-untuk-virus-corona">rapid test</a> atau PCR di sekitar rumah Anda, klik di <a href="https://www.alodokter.com/cari-rumah-sakit/kedokteran-umum/tes-risiko-covid19">sini</a>.</p>
            <h4><strong>Kapan harus ke dokter</strong></h4>
            <p>Segera lakukan <a href="https://www.alodokter.com/bantu-cegah-penyebaran-covid-19-inilah-protokol-isolasi-mandiri-yang-perlu-diterapkan">isolasi mandiri</a> bila Anda mengalami gejala infeksi virus Corona (COVID-19) seperti yang telah disebutkan di atas, terutama jika dalam 2 minggu terakhir Anda berada di daerah yang memiliki kasus COVID-19 atau kontak dengan penderita COVID-19. Setelah itu, hubungi <em>hotline </em>COVID-19 di 119 Ext. 9 untuk mendapatkan pengarahan lebih lanjut.</p>
            <p>Bila Anda mungkin terpapar virus Corona tapi tidak mengalami gejala apa pun, Anda tidak perlu <a href="https://www.alodokter.com/antisipasi-corona-kapan-harus-memeriksakan-diri-ke-rumah-sakit" target="_blank">memeriksakan diri ke rumah sakit</a>, cukup tinggal di rumah selama 14 hari dan membatasi kontak dengan orang lain. Bila muncul gejala, baru lakukan isolasi mandiri dan tanyakan kepada dokter melalui telepon atau aplikasi mengenai tindakan apa yang perlu Anda lakukan dan obat apa yang perlu Anda konsumsi.</p>
            <p>Bila Anda memerlukan pemeriksaan langsung oleh dokter, jangan langsung ke rumah sakit karena itu akan meningkatkan risiko Anda tertular atau menularkan virus Corona ke orang lain. Anda bisa <a href="https://www.alodokter.com/cari-dokter">membuat janji konsultasi</a> dengan dokter di rumah sakit melalui aplikasi ALODOKTER agar bisa diarahkan ke dokter terdekat yang dapat membantu Anda.</p>
            <p>ALODOKTER juga memiliki fitur untuk membantu Anda memeriksa risiko tertular virus Corona dengan lebih mudah. Untuk menggunakan fitur tersebut, silakan klik gambar di bawah ini.</p>
            <p><a href="https://corona.alodokter.com/cek-risiko-tertular-virus-corona-gratis"><img class="alignnone wp-image-1790415 size-full" src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1589160481/attached_image/virus-corona-1-alodokter.jpg" alt="Cek Risiko Infeksi Virus Corona" width="650" height="111"></a></p>
            <h3>
            <strong>Penyebab Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Infeksi virus Corona atau COVID-19 disebabkan oleh coronavirus, yaitu kelompok virus yang menginfeksi sistem pernapasan. Pada sebagian besar kasus, coronavirus hanya menyebabkan infeksi pernapasan ringan sampai sedang, seperti flu. Akan tetapi, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti pneumonia, <em>Middle-East Respiratory Syndrome</em> (MERS) dan <em>Severe Acute Respiratory Syndrome </em>(SARS).</p>
            <p>Ada dugaan bahwa virus Corona awalnya ditularkan dari hewan ke manusia. Namun, kemudian diketahui bahwa virus Corona juga menular dari manusia ke manusia.</p>
            <p>Seseorang dapat tertular COVID-19 melalui berbagai cara, yaitu:</p>
            <ul>
            <li>Tidak sengaja menghirup percikan ludah (droplet) yang keluar saat penderita COVID-19 batuk atau bersin</li>
            <li>Memegang mulut atau hidung tanpa mencuci tangan terlebih dulu setelah menyentuh benda yang terkena cipratan ludah penderita COVID-19</li>
            <li>Kontak jarak dekat dengan penderita COVID-19</li>
            </ul>
            <p>Virus Corona dapat menginfeksi siapa saja, tetapi <a href="https://www.alodokter.com/ini-reaksi-tubuh-saat-terinfeksi-virus-corona" target="_blank">efeknya</a> akan lebih berbahaya atau bahkan fatal bila terjadi pada orang lanjut usia, <a href="https://www.alodokter.com/infeksi-virus-corona-pada-ibu-hamil" target="_blank">ibu hamil</a>, orang yang memiliki <a href="https://www.alodokter.com/kelompok-penyakit-yang-dapat-meningkatkan-risiko-terkena-covid-19" target="_blank">penyakit tertentu</a>, <a href="https://www.alodokter.com/alasan-mengapa-virus-corona-berbahaya-untuk-perokok" target="_blank">perokok</a>, atau orang yang daya tahan tubuhnya lemah, misalnya pada <a href="https://www.alodokter.com/dampak-covid-19-pada-penderita-kanker-dan-langkah-pencegahannya" target="_blank">penderita kanker</a>.</p>
            <p>Karena mudah menular, virus Corona juga berisiko tinggi menginfeksi para tenaga medis yang merawat pasien COVID-19. Oleh karena itu, para tenaga medis dan orang-orang yang memiliki kontak dengan pasien COVID-19 perlu menggunakan <a href="https://www.alodokter.com/macam-macam-apd-dalam-menghadapi-wabah-covid-19" target="_blank">alat pelindung diri (APD)</a>.</p>
            <h3>
            <strong>Diagnosis Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Untuk menentukan apakah pasien terinfeksi virus Corona, dokter akan menanyakan gejala yang dialami pasien dan apakah pasien baru saja bepergian atau tinggal di daerah yang memiliki kasus infeksi virus Corona sebelum gejala muncul. Dokter juga akan menanyakan apakah pasien ada kontak dengan orang yang menderita atau diduga menderita COVID-19.</p>
            <p>Guna memastikan diagnosis COVID-19, dokter akan melakukan beberapa pemeriksaan berikut:</p>
            <ul>
            <li>
            <em><a href="https://www.alodokter.com/kenali-apa-itu-rapid-test-untuk-virus-corona">Rapid test</a></em> untuk mendeteksi antibodi (IgM dan IgG) yang diproduksi oleh tubuh untuk melawan virus Corona</li>
            <li>
            <em>Swab test</em> atau <a href="https://www.alodokter.com/mengenal-tes-pcr-untuk-mendiagnosis-covid-19" target="_blank">tes PCR (<em>polymerase chain reaction</em>)</a> untuk mendeteksi virus Corona di dalam dahak</li>
            <li>
            <a href="https://www.alodokter.com/ct-scan-ini-yang-harus-anda-ketahui">CT scan</a> atau Rontgen dada untuk mendeteksi infiltrat atau cairan di paru-paru</li>
            </ul>
            <p>Hasil <em>rapid test </em>COVID-19 positif kemungkinan besar menunjukkan bahwa Anda memang sudah terinfeksi virus Corona, namun bisa juga berarti Anda terinfeksi kuman atau virus yang lain. Sebaliknya, hasil <a href="https://www.alodokter.com/hasil-rapid-test-covid-19-negatif-apa-artinya" target="_blank">rapid test COVID-19 negatif</a> belum tentu menandakan bahwa Anda mutlak terbebas dari virus Corona.</p>
            <h3>
            <strong>Pengobatan Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Belum ada obat yang benar-benar efektif untuk mengatasi infeksi virus Corona atau COVID-19. Pilihan pengobatan akan disesuaikan dengan kondisi pasien dan tingkat keparahannya. Beberapa pasien dengan gejala ringan atau tanpa gejala akan di sarankan untuk melakukan protokol isolasi mandiri di rumah sambil tetap melakukan langkah pencegahan penyebaran infeksi virus Corona.</p>
            <p>Selain itu, dokter juga bisa memberikan beberapa beberapa langkah untuk meredakan gejalanya dan mencegah penyebaran virus corona, yaitu:</p>
            <ul>
            <li>Merujuk penderita COVID-19 yang berat untuk menjalani perawatan dan karatina di rumah sakit rujukan</li>
            <li>Memberikan <a href="https://www.alodokter.com/analgetik-antipiretik">obat pereda demam dan nyeri</a> yang aman dan sesuai kondisi penderita</li>
            <li>Menganjurkan penderita COVID-19 untuk melakukan isolasi mandiri dan <a href="https://www.alodokter.com/memenuhi-waktu-tidur-yang-ideal-demi-kesehatan">istirahat yang cukup</a>
            </li>
            <li>Menganjurkan penderita COVID-19 untuk banyak minum air putih untuk menjaga kadar cairan tubuh</li>
            </ul>
            <h3>
            <strong>Komplikasi Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Pada kasus yang parah, infeksi virus Corona bisa menyebabkan beberapa komplikasi berikut ini:</p>
            <ul>
            <li>
            <em><a href="https://www.alodokter.com/pneumonia" target="_blank">Pneumonia</a> </em>(infeksi paru-paru)</li>
            <li>Infeksi sekunder pada organ lain</li>
            <li><a href="https://www.alodokter.com/gagal-ginjal-akut">Gagal ginjal</a></li>
            <li><em>Acute cardiac injury</em></li>
            <li><em><a href="https://www.alodokter.com/acute-respiratory-distress-syndrome">Acute respiratory distress syndrome</a></em></li>
            <li>Kematian</li>
            </ul>
            <p>Selain itu, pada beberapa kasus, seseorang juga bisa mengalami kondisi yang disebut <a href="https://www.alodokter.com/post-acute-covid-19-syndrome-waspada-dan-kenali-gejalanya" target="_blank"><em>post-acute </em>COVID-19<em> syndrome</em></a>, meski telah dinyatakan sembuh dari infeksi virus Corona.</p>
            <h3>
            <strong>Pencegahan Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Sampai saat ini, belum ada vaksin <a href="https://www.alodokter.com/ketahui-cara-untuk-mencegah-penularan-virus-corona" target="_blank">untuk mencegah infeksi virus Corona</a> atau COVID-19. Namun, beberapa perusahaan farmasi dan institusi kesehatan tengah berupaya untuk meneliti dan mengembangkan vaksin COVID-19. Apabila lulus uji klinis dan dinyatakan efektif dan aman untuk mencegah COVID-19, vaksin tersebut akan mulai <a href="https://www.alodokter.com/mengetahui-tahap-pembuatan-vaksin-covid-19" target="_blank">diproduksi lebih banyak</a> agar dapat diberikan pada masyarakat.</p>
            <p>Oleh sebab itu, cara pencegahan yang terbaik adalah dengan menghindari faktor-faktor yang bisa menyebabkan Anda terinfeksi virus ini, yaitu:</p>
            <ul>
            <li>Terapkan <em><a href="https://www.alodokter.com/terapkan-physical-distancing-saat-ini-juga">physical distancing</a></em>, yaitu menjaga jarak minimal 1 meter dari orang lain, dan jangan dulu ke luar rumah kecuali ada keperluan mendesak.</li>
            <li>Gunakan <a href="https://www.alodokter.com/cara-menggunakan-masker-kain-untuk-mencegah-infeksi-virus-corona" target="_blank">masker</a> saat beraktivitas di tempat umum atau keramaian, termasuk saat pergi <a href="https://www.alodokter.com/tips-berbelanja-bahan-makanan-selama-pandemi-covid-19" target="_blank">berbelanja bahan makanan</a> dan mengikuti ibadah di hari raya, misalnya <a href="https://www.alodokter.com/adaptasi-kebiasaan-baru-pada-hari-raya-idul-adha" target="_blank">Idul Adha</a>.</li>
            <li>
            <a href="https://www.alodokter.com/cuci-tangan-dulu">Rutin mencuci tangan</a> dengan air dan sabun atau <em>hand sanitizer</em> yang mengandung alkohol minimal 60%, terutama setelah beraktivitas di luar rumah atau di tempat umum.</li>
            <li>Jangan menyentuh mata, mulut, dan hidung sebelum mencuci tangan.</li>
            <li>
            <a href="https://www.alodokter.com/berbagai-cara-meningkatkan-imunitas-tubuh-agar-tidak-mudah-sakit" target="_blank">Tingkatkan daya tahan tubuh</a> dengan pola hidup sehat, seperti mengonsumsi makanan bergizi, berolahraga secara rutin, beristirahat yang cukup, dan mencegah stres.</li>
            <li>Hindari kontak dengan penderita COVID-19, orang yang dicurigai positif terinfeksi virus Corona, atau orang yang sedang sakit demam, batuk, atau pilek.</li>
            <li>Tutup mulut dan hidung dengan tisu saat batuk atau bersin, kemudian buang tisu ke tempat sampah.</li>
            <li>Jaga kebersihan benda yang sering disentuh dan kebersihan lingkungan, termasuk <a href="https://www.alodokter.com/cegah-penyebaran-virus-corona-dengan-membersihkan-rumah-selama-isolasi-mandiri" target="_blank">kebersihan rumah</a>.</li>
            </ul>
            <p>Untuk orang yang diduga terkena <a href="https://www.alodokter.com/beragam-istilah-terkait-virus-corona-dan-covid-19">COVID-19</a> (termasuk kategori suspek dan <em>probable</em>) yang sebelumnya disebut sebagai ODP (orang dalam pemantauan) maupun PDP (pasien dalam pengawasan), ada beberapa langkah yang bisa dilakukan agar tidak menularkan virus Corona ke orang lain, yaitu:</p>
            <ul>
            <li>Lakukan <a href="https://www.alodokter.com/bantu-cegah-penyebaran-covid-19-inilah-protokol-isolasi-mandiri-yang-perlu-diterapkan">isolasi mandiri</a> dengan cara tinggal terpisah dari orang lain untuk sementara waktu. Bila tidak memungkinkan, gunakan kamar tidur dan kamar mandi yang berbeda dengan yang digunakan orang lain.</li>
            <li>Jangan keluar rumah, kecuali untuk mendapatkan pengobatan.</li>
            <li>Bila ingin ke rumah sakit saat gejala bertambah berat, sebaiknya hubungi dulu pihak rumah sakit untuk menjemput.</li>
            <li>Larang orang lain untuk mengunjungi atau menjenguk Anda sampai Anda benar-benar sembuh.</li>
            <li>Sebisa mungkin jangan melakukan pertemuan dengan orang yang sedang sedang sakit.</li>
            <li>Hindari berbagi penggunaan alat makan dan minum, alat mandi, serta perlengkapan tidur dengan orang lain.</li>
            <li>Pakai masker dan sarung tangan bila sedang berada di tempat umum atau sedang bersama orang lain.</li>
            <li>Gunakan tisu untuk menutup mulut dan hidung bila batuk atau bersin, lalu segera buang tisu ke tempat sampah.</li>
            </ul>
            <p>Kondisi-kondisi yang memerlukan penanganan langsung oleh dokter di rumah sakit, seperti <a href="https://www.alodokter.com/persiapan-melahirkan-di-tengah-pandemi-covid-19" target="_blank">melahirkan</a>, <a href="https://www.alodokter.com/hal-yang-perlu-diperhatikan-saat-merencanakan-operasi-selama-pandemi-covid-19" target="_blank">operasi</a>, cuci darah, atau <a href="https://www.alodokter.com/yuk-tetap-lengkapi-vaksinasi-anak-selama-pandemi-covid-19" target="_blank">vaksinasi anak</a>, perlu ditangani secara berbeda dengan beberapa penyesuaian selama pandemi COVID-19. Tujuannya adalah untuk mencegah penularan virus Corona selama Anda berada di rumah sakit. Konsultasikan dengan dokter mengenai tindakan terbaik yang perlu dilakukan.</p>
            <p>Apabila Anda ingin mendapatkan lebih banyak informasi mengenai gejala, pencegahan, dan penanganan infeksi virus Corona, silakan <em>download</em> aplikasi ALODOKTER di <a href="https://alodokter.onelink.me/1997390319?pid=App-download-text15&amp;is_retargeting=true&amp;af_web_dp=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.alodokter.android" target="_blank">Google Play atau App Store</a>. Melalui aplikasi ALODOKTER, Anda juga bisa <em>chat</em> langsung dengan dokter dan membuat janji konsultasi dengan dokter di rumah sakit.</p>
            <div id="gtx-anchor" style="position: absolute; visibility: hidden; left: 10px; top: 1478.03px; width: 933.35px; height: 41.6px;"></div>
            <div class="jfk-bubble gtx-bubble" style="visibility: visible; left: -21px; top: 1530px; opacity: 1;"></div>
            </body></html>
            </div>
               </div>
            
                <!-- reviewed by & referensi -->
                <!--<div class="sources">
              <div style="padding:5px 0px; border-bottom:solid 1px #ccc;" font-size="14px"> Ditinjau oleh : dr. Merry Dame Cristy Pane </div>
              <h4 id="trigger-sources">Referensi</h4>
              <div class="data-sources" style="display:none;">
                <p>Huang, et al. (2020). Clinical features of patients infected with 2019 novel coronavirus in Wuhan, China. The Lancet, 6736(20), pp. 1-10.
            <br />Wang, et al. (2020). A Novel Coronavirus Outbreak of Global Health Concern. The Lancet, 6736(20), pp. 1-4.
            <br />Centers for Disease Control and Prevention (2020). 2019 Novel Coronavirus, Wuhan, China.
            <br />World Health Organization (2020). Coronavirus.
            <br />World Health Organization (2020). Novel Coronavirus (2019-nCoV).
            <br />Keputusan Menteri Kesehatan Republik Indonesia Nomor HK.01.07/Menkes/413/2020 Tentang Pedoman Pencegahan dan Pengendalian Coronavirus Disease 2019 (COVID-19).
            <br />Gugus Tugas Percepatan Penanganan COVID-19. (2020). Peta Sebaran 
            <br />The Centre of Evidence-Based Medicine develops, promote, and disseminates better evidence for healthcare CEBM. (2020) Global Covid-19 Case Fatality Rates.
            <br />Citroner, G. Healthline (2020). China Coronavirus Outbreak: CDC Issues Warning, Multiple Cases in U.S.
            <br />Evans, M. Patient (2020). Wuhan Coronavirus: What You Need to Know.
            <br />WebMD (2020). Coronavirus.
            </p>
              </div>
            </div>-->
            
            <div class="date-article">
            <!-- Terakhir diperbarui: 30 November 2020 -->
              Terakhir diperbarui: 30 November 2020
            </div> 
            <sources-post
              doctor-name="dr. Merry Dame Cristy Pane"
              sources="&quot;\u003cp\u003eHuang, et al. (2020). Clinical features of patients infected with 2019 novel coronavirus in Wuhan, China. The Lancet, 6736(20), pp. 1-10.\n\u003cbr /\u003eWang, et al. (2020). A Novel Coronavirus Outbreak of Global Health Concern. The Lancet, 6736(20), pp. 1-4.\n\u003cbr /\u003eCenters for Disease Control and Prevention (2020). 2019 Novel Coronavirus, Wuhan, China.\n\u003cbr /\u003eWorld Health Organization (2020). Coronavirus.\n\u003cbr /\u003eWorld Health Organization (2020). Novel Coronavirus (2019-nCoV).\n\u003cbr /\u003eKeputusan Menteri Kesehatan Republik Indonesia Nomor HK.01.07/Menkes/413/2020 Tentang Pedoman Pencegahan dan Pengendalian Coronavirus Disease 2019 (COVID-19).\n\u003cbr /\u003eGugus Tugas Percepatan Penanganan COVID-19. (2020). Peta Sebaran \n\u003cbr /\u003eThe Centre of Evidence-Based Medicine develops, promote, and disseminates better evidence for healthcare CEBM. (2020) Global Covid-19 Case Fatality Rates.\n\u003cbr /\u003eCitroner, G. Healthline (2020). China Coronavirus Outbreak: CDC Issues Warning, Multiple Cases in U.S.\n\u003cbr /\u003eEvans, M. Patient (2020). Wuhan Coronavirus: What You Need to Know.\n\u003cbr /\u003eWebMD (2020). Coronavirus.\n\u003c/p\u003e&quot;"
            >
            </sources-post>',
        ]);
        blog::create([
            'title' => 'apa itu corona',
            'image' => 'public/images/post/2020-12-02/apa itu corona1606879222.jpg',
            'image_source' => 'pixabay.com',
            'category' => 1,
            'status' => 1,
            'user' => 3,
            'content' => '<p><strong>Virus Corona atau <em>severe acute respiratory syndrome</em> <em>coronavirus 2</em> (SARS-CoV-2) adalah virus yang menyerang sistem pernapasan. </strong><strong>Penyakit karena infeksi virus ini disebut COVID-19. </strong><strong>Virus </strong><strong>Corona </strong><strong>bisa menyebabkan </strong><strong>gangguan ringan pada </strong><strong>sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.</strong></p>
            <p><em>Severe acute respiratory syndrome coronavirus 2</em> (SARS-CoV-2) yang lebih dikenal dengan nama virus Corona adalah jenis baru dari coronavirus yang menular ke manusia. Virus ini bisa menyerang siapa saja, seperti <a href="https://www.alodokter.com/alasan-mengapa-lansia-lebih-rentan-terhadap-virus-corona">lansia</a> (golongan usia lanjut), orang dewasa, <a href="https://www.alodokter.com/waspadai-infeksi-virus-corona-pada-anak">anak-anak</a>, dan <a href="https://www.alodokter.com/lindungi-bayi-anda-dari-virus-corona">bayi</a>, termasuk ibu hamil dan <a href="https://www.alodokter.com/infeksi-virus-corona-pada-ibu-menyusui-ini-yang-perlu-anda-ketahui">ibu menyusui</a>.</p>
            <a><img class="alignnone size-full wp-image-1788064" src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1589160479/attached_image/virus-corona-0-alodokter.jpg" alt="Virus Corona - Alodokter" width="650" height="433"></a>
            <p>Infeksi virus Corona disebut <a href="https://www.alodokter.com/covid-19" target="_blank">COVID-19</a> (<em>Corona Virus Disease 2019</em>) dan pertama kali ditemukan di kota Wuhan, China pada akhir Desember 2019. Virus ini menular dengan sangat cepat dan telah menyebar ke hampir semua negara, termasuk Indonesia, hanya dalam waktu beberapa bulan.</p>
            <p>Hal tersebut membuat beberapa negara menerapkan kebijakan untuk memberlakukan <em><a href="https://www.alodokter.com/memahami-istilah-lockdown-yang-mencuat-di-tengah-pandemi-virus-corona" target="_blank">lockdown</a> </em>dalam rangka mencegah penyebaran virus Corona. Di Indonesia sendiri, diberlakukan kebijakan Pembatasan Sosial Berskala Besar (PSBB) untuk menekan penyebaran virus ini.</p>
            <p>Coronavirus adalah kumpulan virus yang bisa menginfeksi sistem pernapasan. Pada banyak kasus, virus ini hanya menyebabkan infeksi pernapasan ringan, <a href="https://www.alodokter.com/tampak-mirip-ketahui-beda-gejala-virus-corona-dengan-flu-biasa">seperti flu</a>. Namun, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti infeksi paru-paru (pneumonia).</p>
            <p>Virus ini menular melalui percikan dahak (droplet) dari saluran pernapasan, misalnya ketika berada di <a href="https://www.alodokter.com/risiko-penularan-virus-corona" target="_blank">ruang tertutup</a> yang ramai dengan sirkulasi udara yang kurang baik atau kontak langsung dengan droplet.</p>
            <p>Selain virus SARS-CoV-2 atau virus Corona,<strong> </strong>virus yang juga termasuk dalam kelompok ini adalah virus penyebab <em>Severe Acute Respiratory Syndrome</em> (<a href="https://www.alodokter.com/sars">SARS</a>) dan virus penyebab <em>Middle-East Respiratory Syndrome</em> (<a href="https://www.alodokter.com/mers">MERS</a>). Meski disebabkan oleh virus dari kelompok yang sama, yaitu coronavirus, COVID-19 memiliki beberapa <a href="https://www.alodokter.com/ketahui-perbedaan-covid-19-dengan-sars-dan-mers">perbedaan dengan SARS dan MERS</a>, antara lain dalam hal kecepatan penyebaran dan keparahan gejala.</p>
            <h3><strong>Tingkat Kematian Akibat Virus Corona (COVID-19)</strong></h3>
            <p>Virus Corona yang menyebabkan COVID-19 bisa menyerang siapa saja. Menurut data yang dirilis Gugus Tugas Percepatan Penanganan COVID-19 Republik Indonesia, jumlah kasus terkonfirmasi positif hingga 30 November 2020 adalah 534.266 orang dengan jumlah kematian 16.815 orang. Tingkat kematian (<em>case fatality rate</em>) akibat COVID-19 adalah sekitar 3,1%.</p>
            <p>Jika dilihat dari persentase angka kematian yang di bagi menurut golongan usia, maka kelompok usia 46-59 tahun memiliki persentase angka kematian yang lebih tinggi dibandingkan golongan usia lainnya.</p>
            <p>Sedangkan berdasarkan jenis kelamin, 56,7% penderita yang meninggal akibat COVID-19 adalah laki-laki dan 43,3% sisanya adalah perempuan.</p>
            <h3><strong>Gejala Virus Corona (COVID-19)</strong></h3>
            <p><a href="https://www.alodokter.com/kenali-gejala-orang-terinfeksi-virus-corona-di-minggu-pertama" target="_blank">Gejala awal</a> infeksi virus Corona atau COVID-19 bisa menyerupai gejala flu, yaitu demam, pilek, batuk kering, <a href="https://www.alodokter.com/sakit-tenggorokan" target="_blank">sakit tenggorokan</a>, dan sakit kepala. Setelah itu, gejala dapat hilang dan sembuh atau malah memberat. Penderita dengan gejala yang berat bisa mengalami demam tinggi, batuk berdahak bahkan berdarah, sesak napas, dan nyeri dada. Gejala-gejala tersebut muncul ketika <a href="https://www.alodokter.com/ini-reaksi-tubuh-saat-terinfeksi-virus-corona" target="_blank">tubuh bereaksi melawan virus Corona</a>.</p>
            <p>Secara umum, ada 3 <a href="https://www.alodokter.com/berbagai-gejala-infeksi-virus-corona-dari-yang-ringan-hingga-berat" target="_blank">gejala umum</a> yang bisa menandakan seseorang terinfeksi virus Corona, yaitu:</p>
            <ul>
            <li>
            <a href="https://www.alodokter.com/demam">Demam</a> (suhu tubuh di atas 38 derajat Celsius)</li>
            <li>Batuk kering</li>
            <li><a href="https://www.alodokter.com/kenali-penyebab-nafas-pendek">Sesak napas</a></li>
            </ul>
            <p>Ada beberapa gejala lain yang juga bisa muncul pada infeksi virus Corona meskipun lebih jarang, yaitu:</p>
            <ul>
            <li>Diare</li>
            <li>Sakit kepala</li>
            <li><a href="https://www.alodokter.com/konjungtivitis">Konjungtivitis</a></li>
            <li>Hilangnya kemampuan mengecap rasa atau mencium bau</li>
            <li><a href="https://www.alodokter.com/kenali-lebih-jauh-gejala-ruam-kulit-pada-covid-19" target="_blank">Ruam di kulit</a></li>
            </ul>
            <p>Gejala-gejala COVID-19 ini umumnya muncul dalam waktu 2 hari sampai 2 minggu setelah penderita terpapar virus Corona. Sebagian pasien yang terinfeksi virus Corona bisa mengalami penurunan oksigen tanpa adanya gejala apapun. Kondisi ini disebut <a href="https://www.alodokter.com/mengenal-happy-hypoxia-pada-penyakit-covid-19" target="_blank"><em>happy hypoxia</em></a>.</p>
            <p>Guna memastikan apakah gejala-gejala tersebut merupakan gejala dari virus Corona, diperlukan rapid test atau <a href="https://www.alodokter.com/mengenal-tes-pcr-untuk-mendiagnosis-covid-19">PCR</a>. Untuk menemukan tempat melakukan <a href="https://www.alodokter.com/kenali-apa-itu-rapid-test-untuk-virus-corona">rapid test</a> atau PCR di sekitar rumah Anda, klik di <a href="https://www.alodokter.com/cari-rumah-sakit/kedokteran-umum/tes-risiko-covid19">sini</a>.</p>
            <h4><strong>Kapan harus ke dokter</strong></h4>
            <p>Segera lakukan <a href="https://www.alodokter.com/bantu-cegah-penyebaran-covid-19-inilah-protokol-isolasi-mandiri-yang-perlu-diterapkan">isolasi mandiri</a> bila Anda mengalami gejala infeksi virus Corona (COVID-19) seperti yang telah disebutkan di atas, terutama jika dalam 2 minggu terakhir Anda berada di daerah yang memiliki kasus COVID-19 atau kontak dengan penderita COVID-19. Setelah itu, hubungi <em>hotline </em>COVID-19 di 119 Ext. 9 untuk mendapatkan pengarahan lebih lanjut.</p>
            <p>Bila Anda mungkin terpapar virus Corona tapi tidak mengalami gejala apa pun, Anda tidak perlu <a href="https://www.alodokter.com/antisipasi-corona-kapan-harus-memeriksakan-diri-ke-rumah-sakit" target="_blank">memeriksakan diri ke rumah sakit</a>, cukup tinggal di rumah selama 14 hari dan membatasi kontak dengan orang lain. Bila muncul gejala, baru lakukan isolasi mandiri dan tanyakan kepada dokter melalui telepon atau aplikasi mengenai tindakan apa yang perlu Anda lakukan dan obat apa yang perlu Anda konsumsi.</p>
            <p>Bila Anda memerlukan pemeriksaan langsung oleh dokter, jangan langsung ke rumah sakit karena itu akan meningkatkan risiko Anda tertular atau menularkan virus Corona ke orang lain. Anda bisa <a href="https://www.alodokter.com/cari-dokter">membuat janji konsultasi</a> dengan dokter di rumah sakit melalui aplikasi ALODOKTER agar bisa diarahkan ke dokter terdekat yang dapat membantu Anda.</p>
            <p>ALODOKTER juga memiliki fitur untuk membantu Anda memeriksa risiko tertular virus Corona dengan lebih mudah. Untuk menggunakan fitur tersebut, silakan klik gambar di bawah ini.</p>
            <p><a href="https://corona.alodokter.com/cek-risiko-tertular-virus-corona-gratis"><img class="alignnone wp-image-1790415 size-full" src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1589160481/attached_image/virus-corona-1-alodokter.jpg" alt="Cek Risiko Infeksi Virus Corona" width="650" height="111"></a></p>
            <h3>
            <strong>Penyebab Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Infeksi virus Corona atau COVID-19 disebabkan oleh coronavirus, yaitu kelompok virus yang menginfeksi sistem pernapasan. Pada sebagian besar kasus, coronavirus hanya menyebabkan infeksi pernapasan ringan sampai sedang, seperti flu. Akan tetapi, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti pneumonia, <em>Middle-East Respiratory Syndrome</em> (MERS) dan <em>Severe Acute Respiratory Syndrome </em>(SARS).</p>
            <p>Ada dugaan bahwa virus Corona awalnya ditularkan dari hewan ke manusia. Namun, kemudian diketahui bahwa virus Corona juga menular dari manusia ke manusia.</p>
            <p>Seseorang dapat tertular COVID-19 melalui berbagai cara, yaitu:</p>
            <ul>
            <li>Tidak sengaja menghirup percikan ludah (droplet) yang keluar saat penderita COVID-19 batuk atau bersin</li>
            <li>Memegang mulut atau hidung tanpa mencuci tangan terlebih dulu setelah menyentuh benda yang terkena cipratan ludah penderita COVID-19</li>
            <li>Kontak jarak dekat dengan penderita COVID-19</li>
            </ul>
            <p>Virus Corona dapat menginfeksi siapa saja, tetapi <a href="https://www.alodokter.com/ini-reaksi-tubuh-saat-terinfeksi-virus-corona" target="_blank">efeknya</a> akan lebih berbahaya atau bahkan fatal bila terjadi pada orang lanjut usia, <a href="https://www.alodokter.com/infeksi-virus-corona-pada-ibu-hamil" target="_blank">ibu hamil</a>, orang yang memiliki <a href="https://www.alodokter.com/kelompok-penyakit-yang-dapat-meningkatkan-risiko-terkena-covid-19" target="_blank">penyakit tertentu</a>, <a href="https://www.alodokter.com/alasan-mengapa-virus-corona-berbahaya-untuk-perokok" target="_blank">perokok</a>, atau orang yang daya tahan tubuhnya lemah, misalnya pada <a href="https://www.alodokter.com/dampak-covid-19-pada-penderita-kanker-dan-langkah-pencegahannya" target="_blank">penderita kanker</a>.</p>
            <p>Karena mudah menular, virus Corona juga berisiko tinggi menginfeksi para tenaga medis yang merawat pasien COVID-19. Oleh karena itu, para tenaga medis dan orang-orang yang memiliki kontak dengan pasien COVID-19 perlu menggunakan <a href="https://www.alodokter.com/macam-macam-apd-dalam-menghadapi-wabah-covid-19" target="_blank">alat pelindung diri (APD)</a>.</p>
            <h3>
            <strong>Diagnosis Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Untuk menentukan apakah pasien terinfeksi virus Corona, dokter akan menanyakan gejala yang dialami pasien dan apakah pasien baru saja bepergian atau tinggal di daerah yang memiliki kasus infeksi virus Corona sebelum gejala muncul. Dokter juga akan menanyakan apakah pasien ada kontak dengan orang yang menderita atau diduga menderita COVID-19.</p>
            <p>Guna memastikan diagnosis COVID-19, dokter akan melakukan beberapa pemeriksaan berikut:</p>
            <ul>
            <li>
            <em><a href="https://www.alodokter.com/kenali-apa-itu-rapid-test-untuk-virus-corona">Rapid test</a></em> untuk mendeteksi antibodi (IgM dan IgG) yang diproduksi oleh tubuh untuk melawan virus Corona</li>
            <li>
            <em>Swab test</em> atau <a href="https://www.alodokter.com/mengenal-tes-pcr-untuk-mendiagnosis-covid-19" target="_blank">tes PCR (<em>polymerase chain reaction</em>)</a> untuk mendeteksi virus Corona di dalam dahak</li>
            <li>
            <a href="https://www.alodokter.com/ct-scan-ini-yang-harus-anda-ketahui">CT scan</a> atau Rontgen dada untuk mendeteksi infiltrat atau cairan di paru-paru</li>
            </ul>
            <p>Hasil <em>rapid test </em>COVID-19 positif kemungkinan besar menunjukkan bahwa Anda memang sudah terinfeksi virus Corona, namun bisa juga berarti Anda terinfeksi kuman atau virus yang lain. Sebaliknya, hasil <a href="https://www.alodokter.com/hasil-rapid-test-covid-19-negatif-apa-artinya" target="_blank">rapid test COVID-19 negatif</a> belum tentu menandakan bahwa Anda mutlak terbebas dari virus Corona.</p>
            <h3>
            <strong>Pengobatan Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Belum ada obat yang benar-benar efektif untuk mengatasi infeksi virus Corona atau COVID-19. Pilihan pengobatan akan disesuaikan dengan kondisi pasien dan tingkat keparahannya. Beberapa pasien dengan gejala ringan atau tanpa gejala akan di sarankan untuk melakukan protokol isolasi mandiri di rumah sambil tetap melakukan langkah pencegahan penyebaran infeksi virus Corona.</p>
            <p>Selain itu, dokter juga bisa memberikan beberapa beberapa langkah untuk meredakan gejalanya dan mencegah penyebaran virus corona, yaitu:</p>
            <ul>
            <li>Merujuk penderita COVID-19 yang berat untuk menjalani perawatan dan karatina di rumah sakit rujukan</li>
            <li>Memberikan <a href="https://www.alodokter.com/analgetik-antipiretik">obat pereda demam dan nyeri</a> yang aman dan sesuai kondisi penderita</li>
            <li>Menganjurkan penderita COVID-19 untuk melakukan isolasi mandiri dan <a href="https://www.alodokter.com/memenuhi-waktu-tidur-yang-ideal-demi-kesehatan">istirahat yang cukup</a>
            </li>
            <li>Menganjurkan penderita COVID-19 untuk banyak minum air putih untuk menjaga kadar cairan tubuh</li>
            </ul>
            <h3>
            <strong>Komplikasi Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Pada kasus yang parah, infeksi virus Corona bisa menyebabkan beberapa komplikasi berikut ini:</p>
            <ul>
            <li>
            <em><a href="https://www.alodokter.com/pneumonia" target="_blank">Pneumonia</a> </em>(infeksi paru-paru)</li>
            <li>Infeksi sekunder pada organ lain</li>
            <li><a href="https://www.alodokter.com/gagal-ginjal-akut">Gagal ginjal</a></li>
            <li><em>Acute cardiac injury</em></li>
            <li><em><a href="https://www.alodokter.com/acute-respiratory-distress-syndrome">Acute respiratory distress syndrome</a></em></li>
            <li>Kematian</li>
            </ul>
            <p>Selain itu, pada beberapa kasus, seseorang juga bisa mengalami kondisi yang disebut <a href="https://www.alodokter.com/post-acute-covid-19-syndrome-waspada-dan-kenali-gejalanya" target="_blank"><em>post-acute </em>COVID-19<em> syndrome</em></a>, meski telah dinyatakan sembuh dari infeksi virus Corona.</p>
            <h3>
            <strong>Pencegahan Virus Corona </strong><strong>(COVID-19)</strong>
            </h3>
            <p>Sampai saat ini, belum ada vaksin <a href="https://www.alodokter.com/ketahui-cara-untuk-mencegah-penularan-virus-corona" target="_blank">untuk mencegah infeksi virus Corona</a> atau COVID-19. Namun, beberapa perusahaan farmasi dan institusi kesehatan tengah berupaya untuk meneliti dan mengembangkan vaksin COVID-19. Apabila lulus uji klinis dan dinyatakan efektif dan aman untuk mencegah COVID-19, vaksin tersebut akan mulai <a href="https://www.alodokter.com/mengetahui-tahap-pembuatan-vaksin-covid-19" target="_blank">diproduksi lebih banyak</a> agar dapat diberikan pada masyarakat.</p>
            <p>Oleh sebab itu, cara pencegahan yang terbaik adalah dengan menghindari faktor-faktor yang bisa menyebabkan Anda terinfeksi virus ini, yaitu:</p>
            <ul>
            <li>Terapkan <em><a href="https://www.alodokter.com/terapkan-physical-distancing-saat-ini-juga">physical distancing</a></em>, yaitu menjaga jarak minimal 1 meter dari orang lain, dan jangan dulu ke luar rumah kecuali ada keperluan mendesak.</li>
            <li>Gunakan <a href="https://www.alodokter.com/cara-menggunakan-masker-kain-untuk-mencegah-infeksi-virus-corona" target="_blank">masker</a> saat beraktivitas di tempat umum atau keramaian, termasuk saat pergi <a href="https://www.alodokter.com/tips-berbelanja-bahan-makanan-selama-pandemi-covid-19" target="_blank">berbelanja bahan makanan</a> dan mengikuti ibadah di hari raya, misalnya <a href="https://www.alodokter.com/adaptasi-kebiasaan-baru-pada-hari-raya-idul-adha" target="_blank">Idul Adha</a>.</li>
            <li>
            <a href="https://www.alodokter.com/cuci-tangan-dulu">Rutin mencuci tangan</a> dengan air dan sabun atau <em>hand sanitizer</em> yang mengandung alkohol minimal 60%, terutama setelah beraktivitas di luar rumah atau di tempat umum.</li>
            <li>Jangan menyentuh mata, mulut, dan hidung sebelum mencuci tangan.</li>
            <li>
            <a href="https://www.alodokter.com/berbagai-cara-meningkatkan-imunitas-tubuh-agar-tidak-mudah-sakit" target="_blank">Tingkatkan daya tahan tubuh</a> dengan pola hidup sehat, seperti mengonsumsi makanan bergizi, berolahraga secara rutin, beristirahat yang cukup, dan mencegah stres.</li>
            <li>Hindari kontak dengan penderita COVID-19, orang yang dicurigai positif terinfeksi virus Corona, atau orang yang sedang sakit demam, batuk, atau pilek.</li>
            <li>Tutup mulut dan hidung dengan tisu saat batuk atau bersin, kemudian buang tisu ke tempat sampah.</li>
            <li>Jaga kebersihan benda yang sering disentuh dan kebersihan lingkungan, termasuk <a href="https://www.alodokter.com/cegah-penyebaran-virus-corona-dengan-membersihkan-rumah-selama-isolasi-mandiri" target="_blank">kebersihan rumah</a>.</li>
            </ul>
            <p>Untuk orang yang diduga terkena <a href="https://www.alodokter.com/beragam-istilah-terkait-virus-corona-dan-covid-19">COVID-19</a> (termasuk kategori suspek dan <em>probable</em>) yang sebelumnya disebut sebagai ODP (orang dalam pemantauan) maupun PDP (pasien dalam pengawasan), ada beberapa langkah yang bisa dilakukan agar tidak menularkan virus Corona ke orang lain, yaitu:</p>
            <ul>
            <li>Lakukan <a href="https://www.alodokter.com/bantu-cegah-penyebaran-covid-19-inilah-protokol-isolasi-mandiri-yang-perlu-diterapkan">isolasi mandiri</a> dengan cara tinggal terpisah dari orang lain untuk sementara waktu. Bila tidak memungkinkan, gunakan kamar tidur dan kamar mandi yang berbeda dengan yang digunakan orang lain.</li>
            <li>Jangan keluar rumah, kecuali untuk mendapatkan pengobatan.</li>
            <li>Bila ingin ke rumah sakit saat gejala bertambah berat, sebaiknya hubungi dulu pihak rumah sakit untuk menjemput.</li>
            <li>Larang orang lain untuk mengunjungi atau menjenguk Anda sampai Anda benar-benar sembuh.</li>
            <li>Sebisa mungkin jangan melakukan pertemuan dengan orang yang sedang sedang sakit.</li>
            <li>Hindari berbagi penggunaan alat makan dan minum, alat mandi, serta perlengkapan tidur dengan orang lain.</li>
            <li>Pakai masker dan sarung tangan bila sedang berada di tempat umum atau sedang bersama orang lain.</li>
            <li>Gunakan tisu untuk menutup mulut dan hidung bila batuk atau bersin, lalu segera buang tisu ke tempat sampah.</li>
            </ul>
            <p>Kondisi-kondisi yang memerlukan penanganan langsung oleh dokter di rumah sakit, seperti <a href="https://www.alodokter.com/persiapan-melahirkan-di-tengah-pandemi-covid-19" target="_blank">melahirkan</a>, <a href="https://www.alodokter.com/hal-yang-perlu-diperhatikan-saat-merencanakan-operasi-selama-pandemi-covid-19" target="_blank">operasi</a>, cuci darah, atau <a href="https://www.alodokter.com/yuk-tetap-lengkapi-vaksinasi-anak-selama-pandemi-covid-19" target="_blank">vaksinasi anak</a>, perlu ditangani secara berbeda dengan beberapa penyesuaian selama pandemi COVID-19. Tujuannya adalah untuk mencegah penularan virus Corona selama Anda berada di rumah sakit. Konsultasikan dengan dokter mengenai tindakan terbaik yang perlu dilakukan.</p>
            <p>Apabila Anda ingin mendapatkan lebih banyak informasi mengenai gejala, pencegahan, dan penanganan infeksi virus Corona, silakan <em>download</em> aplikasi ALODOKTER di <a href="https://alodokter.onelink.me/1997390319?pid=App-download-text15&amp;is_retargeting=true&amp;af_web_dp=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.alodokter.android" target="_blank">Google Play atau App Store</a>. Melalui aplikasi ALODOKTER, Anda juga bisa <em>chat</em> langsung dengan dokter dan membuat janji konsultasi dengan dokter di rumah sakit.</p>
            <div id="gtx-anchor" style="position: absolute; visibility: hidden; left: 10px; top: 1478.03px; width: 933.35px; height: 41.6px;"></div>
            <div class="jfk-bubble gtx-bubble" style="visibility: visible; left: -21px; top: 1530px; opacity: 1;"></div>
            </body></html>
            </div>
               </div>
            
                <!-- reviewed by & referensi -->
                <!--<div class="sources">
              <div style="padding:5px 0px; border-bottom:solid 1px #ccc;" font-size="14px"> Ditinjau oleh : dr. Merry Dame Cristy Pane </div>
              <h4 id="trigger-sources">Referensi</h4>
              <div class="data-sources" style="display:none;">
                <p>Huang, et al. (2020). Clinical features of patients infected with 2019 novel coronavirus in Wuhan, China. The Lancet, 6736(20), pp. 1-10.
            <br />Wang, et al. (2020). A Novel Coronavirus Outbreak of Global Health Concern. The Lancet, 6736(20), pp. 1-4.
            <br />Centers for Disease Control and Prevention (2020). 2019 Novel Coronavirus, Wuhan, China.
            <br />World Health Organization (2020). Coronavirus.
            <br />World Health Organization (2020). Novel Coronavirus (2019-nCoV).
            <br />Keputusan Menteri Kesehatan Republik Indonesia Nomor HK.01.07/Menkes/413/2020 Tentang Pedoman Pencegahan dan Pengendalian Coronavirus Disease 2019 (COVID-19).
            <br />Gugus Tugas Percepatan Penanganan COVID-19. (2020). Peta Sebaran 
            <br />The Centre of Evidence-Based Medicine develops, promote, and disseminates better evidence for healthcare CEBM. (2020) Global Covid-19 Case Fatality Rates.
            <br />Citroner, G. Healthline (2020). China Coronavirus Outbreak: CDC Issues Warning, Multiple Cases in U.S.
            <br />Evans, M. Patient (2020). Wuhan Coronavirus: What You Need to Know.
            <br />WebMD (2020). Coronavirus.
            </p>
              </div>
            </div>-->
            
            <div class="date-article">
            <!-- Terakhir diperbarui: 30 November 2020 -->
              Terakhir diperbarui: 30 November 2020
            </div> 
            <sources-post
              doctor-name="dr. Merry Dame Cristy Pane"
              sources="&quot;\u003cp\u003eHuang, et al. (2020). Clinical features of patients infected with 2019 novel coronavirus in Wuhan, China. The Lancet, 6736(20), pp. 1-10.\n\u003cbr /\u003eWang, et al. (2020). A Novel Coronavirus Outbreak of Global Health Concern. The Lancet, 6736(20), pp. 1-4.\n\u003cbr /\u003eCenters for Disease Control and Prevention (2020). 2019 Novel Coronavirus, Wuhan, China.\n\u003cbr /\u003eWorld Health Organization (2020). Coronavirus.\n\u003cbr /\u003eWorld Health Organization (2020). Novel Coronavirus (2019-nCoV).\n\u003cbr /\u003eKeputusan Menteri Kesehatan Republik Indonesia Nomor HK.01.07/Menkes/413/2020 Tentang Pedoman Pencegahan dan Pengendalian Coronavirus Disease 2019 (COVID-19).\n\u003cbr /\u003eGugus Tugas Percepatan Penanganan COVID-19. (2020). Peta Sebaran \n\u003cbr /\u003eThe Centre of Evidence-Based Medicine develops, promote, and disseminates better evidence for healthcare CEBM. (2020) Global Covid-19 Case Fatality Rates.\n\u003cbr /\u003eCitroner, G. Healthline (2020). China Coronavirus Outbreak: CDC Issues Warning, Multiple Cases in U.S.\n\u003cbr /\u003eEvans, M. Patient (2020). Wuhan Coronavirus: What You Need to Know.\n\u003cbr /\u003eWebMD (2020). Coronavirus.\n\u003c/p\u003e&quot;"
            >
            </sources-post>',
        ]);
    }
}
