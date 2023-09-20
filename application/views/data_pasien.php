<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pasien</title>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .header-container {
            margin-left:15px;
            margin-top: -15px;
        }

        .body-container {
            margin-top:28px;
            margin-left:75px;
        }

        .logo {
            width: 220px;
        }

        body {
            background-color: rgb(245, 245, 245);
        }

        .title {
            font-weight: bold;
            padding-left: 280px;
            font-size: 40px;
            margin-top: 10px;
        }

        header {
            padding-top: 30px;
        }

        .button-process {
            margin-right:10px; 
            margin-left: 30px;
            font-size:22px; 
            font-weight:bold; 
            width:297px; 
            height:80px; 
            border:none; 
            background-color:rgb(7, 174, 83);
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
        }

        .button-cancel {
            font-size:22px; 
            font-weight:bold; 
            width:160px; 
            height:80px; 
            border:none; 
            background-color:rgb(188, 7, 7);
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
        }

        .custom-label {
            font-size: 18px;
            color: rgb(29, 73, 153); 
            font-weight: bold; 
            margin-top: 12px;
        }

        .custom-input {
            height: 55px;
            margin-left: 10px;
            width: 420px;
            margin-bottom: 20px;
        }

        .custom-input-2 {
            height: 55px;
            margin-left: 10px;
            width: 300px;
            margin-bottom: 20px;
        }

        @keyframes blink {
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }

        h6.blink {
            animation:blink 2s infinite;
        }
    </style>
</head>
<body>
    <header class="text-white">
        <div class="container header-container">
            <div class="row align-items-center">
                <div class="col-lg-auto">
                    <img src="../../images/logo.png" class="logo" alt="Logo" class="img-fluid logo">
                </div>
                <div class="col-lg-auto">
                    <h1 class="text-dark title">DATA PASIEN</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid body-container" style="width: 90%">
        <form>
            <div class="row">
                <div class="col-lg-auto">
                    <div class="col-lg-auto">
                        <div class="row">
                            <label for="nama_pasien" style="margin-right: 12px;" class="col-lg-auto col-lg-form-label custom-label">Nama Pasien</label>
                            <div class="col-lg-auto">
                                <input type="text" class="form-control form-control-lg custom-input" id="nama_pasien" placeholder="NAMA PASIEN">
                            </div>
                            <label for="no_ektp" class="col-lg-auto col-lg-form-label custom-label" style="margin-left: 70px;">No. E-KTP</label>
                            <div class="col-lg-auto">
                                <input style="margin-left: 70px;" id="no_ektp" type="text" class="form-control form-control-lg custom-input-2" id="no_ektp" placeholder="NOMOR KTP">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-auto">
                        <div class="row">
                            <label for="tanggal_lahir" style="margin-right: 8px;" class="col-lg-auto col-lg-form-label custom-label">Tanggal Lahir</label>
                            <div class="col-lg-auto">
                                <input type="text" class="form-control form-control-lg custom-input" id="tanggal_lahir" placeholder="DD-MM-YYYY">
                            </div>
                            <label for="no_rekam_medis" class="col-lg-auto col-lg-form-label custom-label" style="margin-left: 70px; margin-right: 24px;">No. Rekam Medis</label>
                            <div class="col-lg-auto">
                                <input type="text" style="margin-left: -18px;" class="form-control form-control-lg custom-input-2" id="no_rekam_medis" placeholder="NOMOR REKAM MEDIS">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-auto">
                        <div class="row">
                            <label for="Jenis Kelamin" style="margin-right: 8px;" class="col-lg-auto col-lg-form-label custom-label">Jenis Kelamin</label>
                            <div class="col-lg-auto">
                            <select class="form-control form-control-lg custom-input" id="jenis_kelamin">
                                <option value="" disabled selected>JENIS KELAMIN</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            </div>
                            <label for="no_pekerja" class="col-lg-auto col-lg-form-label custom-label" style="margin-left: 70px; margin-right: 24px;">No. Pekerja</label>
                            <div class="col-lg-auto">
                                <input type="text" style="margin-left: 32px;" class="form-control form-control-lg custom-input-2" id="no_pekerja" placeholder="NOMOR PEKERJA">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-auto">
                        <div class="row"> 
                            <label for="alamat_tinggal" style="margin-right: -5px;" class="col-lg-auto col-lg-form-label custom-label">Alamat Tinggal</label>
                            <div class="col-lg-auto">
                                <textarea style="height: 100px;" class="form-control form-control-lg custom-input" id="alamat_tinggal" placeholder="ALAMAT TINGGAL"></textarea>
                            </div>
                            <label for="no_jaminan" class="col-lg-auto col-lg-form-label custom-label" style="margin-left: 70px; margin-right: 28px">No. Jaminan</label>
                            <div class="col-lg-auto">
                                <input type="text" style="margin-left: 18px;" class="form-control form-control-lg custom-input-2" id="no_jaminan" placeholder="NOMOR JAMINAN">
                            </div>
                        </div>
                    </div>     
                    <div class="col-lg-auto">
                        <div class="row">
                            <label for="no_ponsel" style="margin-right: 35px;" class="col-lg-auto col-lg-form-label custom-label">No. Ponsel</label>
                            <div class="col-lg-auto">
                                <input type="text" class="form-control form-control-lg custom-input" id="no_ponsel" placeholder="NOMOR PONSEL">
                            </div>
                            <div class="col-lg-auto">
                                <h6 class="blink" style="margin-left:100px; margin-top:-38px;font-weight:bold;font-size:17px"><img src="../../images/alert.png" alt="Alert" style="margin-left:20px; margin-top:-1px; width:50px">&nbsp&nbsp&nbspHarap pastikan data Anda sudah benar</h6>
                            </div>
                        </div>
                    </div>    
                    <div class="col-lg-auto">
                        <div class="row">
                            <label for="penjaminan" style="margin-right: 26px;" class="col-lg-auto col-lg-form-label custom-label">Penjaminan</label>
                            <div class="col-lg-auto">
                                <select class="form-control form-control-lg custom-input" id="jenis_kelamin">
                                    <option value="" disabled selected>JENIS PENJAMIN (CR)</option>
                                </select>
                            </div>
                            <div class="col-lg-auto">
                                <div style="margin-top: -27px; padding-left:40px">
                                    <button type="button" id="prosesButton" class="btn btn-primary btn-lg btn-block button-process">PROSES</button>
                                    <button type="button" class="btn btn-secondary btn-lg btn-block button-cancel">BATAL</button>
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>
                
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        $(function() {
            $("#tanggal_lahir").datepicker({
                dateFormat: "dd-mm-yy" 
            });
        });
    </script>

</body>
</html>
