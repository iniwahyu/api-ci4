<?php echo $this->extend('template'); ?>

<?php echo $this->section('css'); ?>
<?php echo $this->endSection('css'); ?>

<?php echo $this->section('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <p><label class="fw-bold">Main Color: </label> #1B9CFC / 1B9CFC</p>
                <p><label class="fw-bold">Font Color: </label> #020202 / 020202</p>
                <p><label class="fw-bold">Assets: </label> <a href="https://drive.google.com/drive/folders/1rrcUNGrdRxb-J2hoPdWNnnD_THLroAtW?usp=sharing">https://drive.google.com/drive/folders/1rrcUNGrdRxb-J2hoPdWNnnD_THLroAtW?usp=sharing</a></p>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h3>API</h3>
                <hr>

                <h3 class="bg-dark text-white p-2 my-3">Auth</h3>
                <h4>Sign Up</h4>
                <p>Url: https://pmb.masuk.id/sin/api/signup</p>
                <p>Method: POST</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>fullname</th>
                            <td>String</td>
                        </tr>
                        <tr>
                            <th>phone</th>
                            <td>String (628xxxx)</td>
                        </tr>
                        <tr>
                            <th>password</th>
                            <td>String (Min 3)</td>
                        </tr>
                    </tbody>
                </table>

                <hr>
                <h4>Sign In</h4>
                <p>Url: https://pmb.masuk.id/sin/api/signin</p>
                <p>Method: POST</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>phone</th>
                            <td>String (628xxxx)</td>
                        </tr>
                        <tr>
                            <th>password</th>
                            <td>String (Min 3)</td>
                        </tr>
                    </tbody>
                </table>

                <hr>
                <h3 class="bg-dark text-white p-2 my-3">Pelaporan</h3>
                <h4>Menampilkan Data Semua</h4>
                <p>Url: https://pmb.masuk.id/sin/api/pelaporan</p>
                <p>Method: GET</p>

                <hr>
                <h4>Menampilkan Data Tiap User</h4>
                <p>Url: https://pmb.masuk.id/sin/api/pelaporan/user/{id}</p>
                <p>Url: https://pmb.masuk.id/sin/api/pelaporan/user/1</p>
                <p>Method: GET</p>

                <hr>
                <h4>Menampilkan Data Detail Pelaporan</h4>
                <p>Url: https://pmb.masuk.id/sin/api/pelaporan/show/{id}</p>
                <p>Url: https://pmb.masuk.id/sin/api/pelaporan/show/1</p>
                <p>Method: GET</p>
                <p>Result</p>

                <hr>
                <h4>Lapor (Camera)</h4>
                <p>Url: https://pmb.masuk.id/sin/api/pelaporan/lapor</p>
                <p>Method: POST</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>id</th>
                            <td>Integer (Pake Sharedpreferences after Login)</td>
                        </tr>
                        <tr>
                            <th>image</th>
                            <td>String</td>
                        </tr>
                        <tr>
                            <th>latitude</th>
                            <td>String - Secara Otomatis</td>
                        </tr>
                        <tr>
                            <th>longitude</th>
                            <td>String - Secara Otomatis</td>
                        </tr>
                        <tr>
                            <th>lokasi</th>
                            <td>String - Secara Otomatis</td>
                        </tr>
                        <tr>
                            <th>lokasi_tambahan</th>
                            <td>String - Input Manual</td>
                        </tr>
                    </tbody>
                </table>

                <hr>
                <h4>Update Data Pelaporan</h4>
                <p>Url: https://pmb.masuk.id/sin/api/pelaporan/update/{id}</p>
                <p>Url: https://pmb.masuk.id/sin/api/pelaporan/update/1</p>
                <p>Method: PUT / POST (BEBAS, tapi sih prefer PUT. Serah ding, backendnya aja gaada aturan gituan wkwk) </p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>id</th>
                            <td>Integer (id pelaporan)</td>
                        </tr>
                        <tr>
                            <th>status</th>
                            <td>String - Pilihan Dropdown (Rawan / Tidak <s>Pe</s>Rawan)</td>
                        </tr>
                        <tr>
                            <th>keterangan</th>
                            <td>String - Pilihan Dropdown (Dengan Ambulance / Tanpa Ambulance)</td>
                        </tr>
                    </tbody>
                </table>

                <hr>
                <h4>Hapus Data Pelaporan</h4>
                <p>Url: https://pmb.masuk.id/sin/api/pelaporan/delete/{id}</p>
                <p>Url: https://pmb.masuk.id/sin/api/pelaporan/delete/1</p>
                <p>Method: - </p>

                <hr>
                <h3 class="bg-dark text-white p-2 my-3">Pendukung</h3>
                <h4>Data Rumah Sakit dan Kepolisian</h4>
                <p>Url: https://pmb.masuk.id/sin/api/pendukung/index</p>
                <p>Method: GET</p>

                <hr>
                <h4>Data Rumah Sakit dan Kepolisian (Where)</h4>
                <p>Url: https://pmb.masuk.id/sin/api/pendukung?jenis={jenis}</p>
                <p>Url: https://pmb.masuk.id/sin/api/pendukung?jenis=RS</p>
                <p>Url: https://pmb.masuk.id/sin/api/pendukung?jenis=POLISI</p>
                <p>Method: GET</p>

                <hr>
                <h4>Detail Pendukung</h4>
                <p>Url: https://pmb.masuk.id/sin/api/pendukung/show/{id}</p>
                <p>Url: https://pmb.masuk.id/sin/api/pendukung/show/1</p>
                <p>Method: GET</p>

                <hr>
                <h3 class="bg-dark text-white p-2 my-3">Rawan</h3>
                <hr>
                <h4>Data Rawan</h4>
                <p>Url: https://pmb.masuk.id/sin/api/rawan</p>
                <p>Method: GET</p>

                <hr>
                <h4>Detail Data Rawan</h4>
                <p>Url: https://pmb.masuk.id/sin/api/rawan/show/{id_pelaporan}</p>
                <p>Url: https://pmb.masuk.id/sin/api/rawan/show/1</p>
                <p>Method: GET</p>

                <hr>
                <h3 class="bg-dark text-white p-2 my-3">Ambulance</h3>
                <hr>
                <h4>Data Ambulance</h4>
                <p>Url: https://pmb.masuk.id/sin/api/user/ambulance</p>
                <p>Method: GET</p>

                <hr>
                <h4>Menampilkan Data Tiap Ambulance</h4>
                <p>Url: https://pmb.masuk.id/sin/api/pelaporan/ambulance/{id}</p>
                <p>Url: https://pmb.masuk.id/sin/api/pelaporan/ambulance/8001</p>
                <p>Method: GET</p>

                <hr>
                <h4>Pesan Ambulance</h4>
                <p>Url: https://pmb.masuk.id/sin/api/pelaporan/ambulance/pesan/{id}</p>
                <p>Method: PUT/POST</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>id</th>
                            <td>Integer (id pelaporan)</td>
                        </tr>
                        <tr>
                            <th>id_ambulance</th>
                            <td>Integer</td>
                        </tr>
                    </tbody>
                </table>

                <hr>
                <h3 class="bg-dark text-white p-2 my-3">Prosedur and Help</h3>
                <hr>
                <h4>Prosedur dan Help</h4>
                <p>Url: https://pmb.masuk.id/sin/api/site/list</p>
                <p>Method: GET</p>

                <!-- <hr>
                <h3 class="bg-dark text-white p-2 my-3">Profil</h3>
                <h4>Ubah Data Diri</h4>
                <p>Url: https://pmb.masuk.id/sin/api/profil/update/{id}</p>
                <p>Method: POST</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>id</th>
                            <td>Integer (Pake Sharedpreferences after Login)</td>
                        </tr>
                        <tr>
                            <th>fullname</th>
                            <td>String</td>
                        </tr>
                        <tr>
                            <th>phone</th>
                            <td>String</td>
                        </tr>
                    </tbody>
                </table>

                <hr>
                <h4>Detail Data Diri/Show Data Diri</h4>
                <p>Url: https://pmb.masuk.id/sin/api/profil/{id}</p>
                <p>Method: GET</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>id</th>
                            <td>Integer (Pake Sharedpreferences after Login)</td>
                        </tr>
                    </tbody>
                </table>

                <hr>
                <h4>Profil - Ubah Kata Sandi</h4>
                <p>Url: https://pmb.masuk.id/sin/api/profil/sandi/{id}</p>
                <p>Method: POST</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>id</th>
                            <td>Integer (Pake Sharedpreferences after Login)</td>
                        </tr>
                        <tr>
                            <th>password</th>
                            <td>String</td>
                        </tr>
                    </tbody>
                </table>

                <hr>
                <h4>Profil - Identitas Verif KTP</h4>
                <p>Url: https://pmb.masuk.id/sin/api/profil/identitas/{id}</p>
                <p>Method: POST</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>id</th>
                            <td>Integer (Pake Sharedpreferences after Login)</td>
                        </tr>
                        <tr>
                            <th>ktp</th>
                            <td>String</td>
                        </tr>
                    </tbody>
                </table>

                <hr> -->
                
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection('content'); ?>

<?php echo $this->section('js'); ?>
<?php echo $this->endSection('js'); ?>