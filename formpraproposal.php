<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pengajuan Skripsi</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Righteous&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>


  
  <body>
    <nav class="navbar">
        <div class="filkom">
            <img src="img/filkom.png" >

        </div>
        <h1>Skripsi FILKOM UB</h1>

      <div class="nav-menu">
        <div class="pengumuman">
            <img src="img/pengumuman.png" class="img-fluid">
        </div>
        <div class="chat">
            <img src="img/formprap.png" class="img-fluid">
        </div>
        <div class="pengumuman">
            <img src="img/chat.png" class="img-fluid">
        </div>


        <div class="saya">
                            
                <div class="dropdown">
                  <button class="dropbtn">AUDYVA IREFILEVITASARI ALIFIA</button>
                  <div class="dropdown-content">
                    <a href="#">Logout</a>
                  </div>
                </div>
        </div>
      </div>
    </nav>





    <section class="what-is-container" id="aboutUs">
        <div>
            <div class="judul">
          <h1>PENGAJUAN PRA PROPOSAL</h1><br>
          </div>
          <div class="footer">
            <h2>AUDYVA IREFILEVITASARI ALIFIA</h2>
            <h3>205150207111032</h3>
        </div>





      <!-- FORM -->

        <div class="card">
          <br>
          

            <label for="nama">Pilih Topik Skripsi</label><br>
            <div class="pilihtopik">
            <button class="fa fa-fw fa-search" id="myBtn"> Pilih Topik Skripsi</button>            <div id="demo"></div>

            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="modal-isi">
                      <span class="close">&times;</span>
                        <h2>Topik Skripsi</h2>
                        <p style="text-align:justify">Silakan pilih dari beberapa baris judul sebagai pilihan topik 
                            yang digunakan untuk topik skripsi anda. Kolom Jumlah menampilkan 
                            informasi jumlah mahasiswa yang sudah mengambil topik tersebut. Klik 
                            tombol "Pilih" pada kolom Aksi untuk mengambil topik.</p>

                            <section class="searching">
                                <input id="cari"
                                class="search"
                                  
                                  type="text"                                  
                                  placeholder="Cari Topik"
                                />
                                </section>
                        <div class="modal-body">

                            <table>
                                <tr>
                                  <th>DOSEN</th>
                                  <th>TOPIK</th>
                                  <th>JUMLAH</th>
                                  <th>AKSI</th>
                                </tr>
                                <tr>
                                  <td style="text-align:justify">Bruce Wayne</td>
                                  <td  style="text-align:justify">KLASIFIKASI CITRA MENGGUNAKAN DEEP LEARNING
 

                                    Seiring dengan perkembangan machine learning, Deep Learning mendapatkan atensi luas di kalangan akademisi maupun industri yang bergerak di bidang kecerdasan buatan di seluruh dunia karena kemampuannya untuk melakukan klasifikasi, segmentasi dan prediksi secara akurat menggunakan pelatihan data yang banyak (big data)
                                    
                                    Mempunyai pengalaman melalukan project tugas akhir deep learning sangat menguntungkan di dunia kerja terlebih startup AI di dunia, karena permintaannya besar sekali
                                    
                                    syarat : - disarankan mempunyai PC atau laptop yang ada NVIDIA GPU minimal GEFORCE GTX
                                    
                                                 - pakai pemrograman python
                                    
                                                 - apabila terpaksa tidak ada PC atau laptop GPU gunakan model yang kecil
                                    
                                    kalau siap kita adakan tutorial menggunakan library deep learning pytorch atau chainer (induksi riset)</td>
                                    <td style="text-align:center">12</td>
                                    <td>
                                        <div class="pilih" id="pilih"><button onclick="myFunction()" type="submit" name="submit" class="pilih">Pilih</button></div>
                                    </td>
                                </tr>
                               
                              </table>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            var modal = document.getElementById("myModal");
            var btn = document.getElementById("myBtn");
            var span = document.getElementsByClassName("close")[0];
            var span = document.getElementsByClassName("pilih")[0];
                btn.onclick = function() {
                    modal.style.display = "block";
                }
                        span.onclick = function() {
                            modal.style.display = "none";
                        }
                        window.onclick = function(event) {
                              if (event.target == modal) {
                                    modal.style.display = "none";
                                  }
                                  }
                                  function myFunction() {
                                    document.getElementById("demo").innerHTML = "KLASIFIKASI CITRA MENGGUNAKAN DEEP LEARNING";
                                  }
                                  </script>
                                  </div><br>
                                

            <label for="nama">Masukkan Judul Skripsi</label><br>
            <input type="text" name="judulsk" class="judulsk" ><br><br>

            <label for="nama">Pilih Asal Judul Skripsi</label><br>
            <div class="form-wrapper">
                <select name="" id="" class="form-control">
                <option value="" disabled selected> </option>
                <option value="im">Usulan Sendiri</option>
                <option value="fs">Usulan Pembimbing</option>
                </select>
                </div><br>
            <label for="nama">Pilih Keminatan Program Studi</label><br>
            <div class="form-wrapper">
                <select name="" id="" class="form-control">
                <option value="" disabled selected> </option>
                <option value="im">Interactive Media</option>
                <option value="fs">Full Stack</option>
                <option value="ds">Data Sains</option>
                <option value="kc">Komputasi Cerdas</option>
                <option value="kbj">Komputasi Berbasis Jaringan</option>
                </select>
                </div><br>
            <label for="nama">Pilih Bidang Peminatan Jurusan</label><br>
            <div class="form-wrapper">
                <select name="" id="" class="form-control">
                <option value="" disabled selected> </option>
                <option value="kbj">Komputasi Berbasis Jaringan</option>
                <option value="kc">Komputasi Cerdas</option>
                <option value="mgm">Multimedia, Game, dan Mobile</option>
                <option value="rpl">Rekayasa Perangkat Lunak</option>
                </select>
                </div><br>

            <label for="nama">Pilih Tipe Penelitian</label><br>
            <div class="form-wrapper">
                <select name="" id="" class="form-control">
                <option value="" disabled selected> </option>
                <option value="ipd">Implementatif-Pengembangan (Development)</option>
                <option value="ipl">Implementatif-Pengembangan Lanjut (Enhancement)</option>
                <option value="ipd2">Implementatif-Perancangan (Design)</option>
                <option value="idd">Implementatif-Deskriptif (Descriptive)</option>
                <option value="nia">Non-implementatif-Analitik (Analytical/Explanatory)</option>
                </select>
                </div><br>




                <label for="nama">Pilih Calon DosPem</label><br>
                
            <div class="pilihtopik">
              
            <button onclick="myFunction2()" class="fa fa-fw fa-search" id="myBtn"> Pilih Calon DosPem</button>            <div id="demo2"></div>

            <script>
            
                                  function myFunction2() {
                                    document.getElementById("demo2").innerHTML = "Bruce Wayne";
                                  }
                                  </script>
                                  </div><br>






            <label for="nama">Upload Dokumen Pra Proposal</label><br>
            <div class="unggah">
                <input type="file" class="upload-box" />
            </div>


            <label for="nama">*pdf</label><br>
            <br><br>

          <!-- <div class="up"><button type="submit" name="submit" class="submitBtn">Submit</button></div> -->




          
          <div id="overlay" onclick="off()">
    
      
          </div>
          <div class="modal" id="modal2">
            <div class="header" id="header">
              <span id="modal2" class="close" onclick="off(this.id)"><i class="fas fa-times-circle"></i></span>
              
            </div>
            <div class="body" id="body">
              <div class="modal-content2">
                <div class="modal-isi">
                  <img style="padding-left: 130px;"src="img/centa.png" >
                    <h2 style="text-align: center;">Berhasil</h2>
            
                    <div class="modal-body2" >
                    <h3 style="text-align: center;">Pengajuan Praproposal Berhasil</h3>
                    </div>
                    <div class="tutup" id="tutup" style="padding-left: 130px;"><button type="submit" name="submit" >tutup</button></div>
      
      
                        
                </div>
              </div>
      
            </div>
          </div>
        <div class="main">
          
          <div style="padding:20px; animation: slide_up 1.4s ease;">
            <button id="modal2" onclick="on(this.id)" name="submit" class="up">Submit</button>
      
          </div>
         </div>
         <script>var id_aktif;
          function on(clicked_id) { document.getElementById("overlay").style.display = "block";
          document.getElementById(clicked_id).style.display = "block";
          id_aktif = clicked_id;
          }
          function off() {
          document.getElementById("overlay").style.display = "none";
          document.getElementById(id_aktif).style.display = "none";
          }
          span.onclick = function() {
                            modal.style.display = "none";
                        }
          var span = document.getElementsByClassName("tutup")[0];
      </script>
      
      
      
        </div>
    </section>



   



  </body>




      
            


      

        
       