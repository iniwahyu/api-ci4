<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container my-5">
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

                        <h4>Auth - Sign Up</h4>
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
                        <h4>Auth - Sign In</h4>
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
                        <h4>Pelaporan - Showing Data (Beranda)</h4>
                        <p>Url: https://pmb.masuk.id/sin/api/pelaporan</p>
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
                                <tr>
                                    <th>image</th>
                                    <td>String (Dalam Bentuk nama File, <?php echo base_url('assets/pelaporan') ?>/nama_file)</td>
                                </tr>
                                <tr>
                                    <th>latitude</th>
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <th>longitude</th>
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <th>lokasi</th>
                                    <td>String</td>
                                </tr>
                            </tbody>
                        </table>
                        
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
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <th>longitude</th>
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <th>lokasi</th>
                                    <td>String (Alamat Lengkap)</td>
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
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>