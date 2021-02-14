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
                <p>Method: GET</p>
                
                <hr>
                <h4>Menampilkan Data Tiap Ambulance</h4>
                <p>Url: https://pmb.masuk.id/sin/api/pelaporan/ambulance/{id_ambulance atau id_user}</p>
                <p>Method: GET</p>

                <hr>
                <h4>Pelaporan - Lapor (Camera)</h4>
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
                <h4>Profil - Detail Data Diri/Show Data Diri</h4>
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
                <h4>Profil - Ubah Data Diri</h4>
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

                <hr>
                <h4>Pendukung - Data Rumah Sakit dan Kepolisian</h4>
                <p>Url: https://pmb.masuk.id/sin/api/pendukung/</p>
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
                            <th>nama</th>
                            <td>Integer (Pake Sharedpreferences after Login)</td>
                        </tr>
                        <tr>
                            <th>alamat</th>
                            <td>String</td>
                        </tr>
                        <tr>
                            <th>jenis</th>
                            <td>String</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Pendukung - Data Rumah Sakit dan Kepolisian (Where)</h4>
                <p>Url: https://pmb.masuk.id/sin/api/pendukung?jenis={jenis}</p>
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
                            <th>nama</th>
                            <td>Integer (Pake Sharedpreferences after Login)</td>
                        </tr>
                        <tr>
                            <th>alamat</th>
                            <td>String</td>
                        </tr>
                        <tr>
                            <th>jenis</th>
                            <td>Where = 'RS' / 'POLISI'</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection('content'); ?>

<?php echo $this->section('js'); ?>
<?php echo $this->endSection('js'); ?>