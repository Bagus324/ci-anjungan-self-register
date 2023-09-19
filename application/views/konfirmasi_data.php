<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konfirmasi Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .header-container {
            margin-left:15px;
            margin-top: -15px;
        }

        .body-container {
            margin-top:47px;
            margin-left:70px;
        }

        .logo {
            width: 220px;
        }

        body {
            background-color: rgb(245, 245, 245);
        }

        .title {
            font-weight: bold;
            padding-left: 230px;
            font-size: 40px;
            margin-top: 10px;
        }

        header {
            padding-top: 30px;
        }

        .button-process {
            margin-right:10px; 
            font-size:22px; 
            font-weight:bold; 
            width:320px; 
            height:80px; 
            border:none; 
            background-color:rgb(7, 174, 83);
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
        }

        .button-cancel {
            font-size:22px; 
            font-weight:bold; 
            width:180px; 
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
            padding-left: -500px;
            margin-top: 12px;
        }

        .custom-input {
            height: 55px;
            margin-left: 10px;
            width: 380px;
            margin-bottom: 20px;
        }

        .custom-confirm-button-class {
            width: 200px; 
            height: 50px;
        }

        .custom-cancel-button-class {
            width: 200px; 
            height: 50px;
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
                    <h1 class="text-dark title">KONFIRMASI DATA</h1>
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
                            <label for="no_rekam_medis" class="col-lg-auto col-lg-form-label custom-label">No. Rekam Medis</label>
                            <div class="col-lg-auto">
                                <input type="text" class="form-control form-control-lg custom-input" id="no_rekam_medis" placeholder="NOMOR REKAM MEDIS">
                            </div>
                            <label for="tgl_kunjungan" class="col-lg-auto col-lg-form-label custom-label" style="margin-left: 60px;">Tgl Kunjungan</label>
                            <div class="col-lg-auto">
                                <input id="tgl_kunjungan" type="date" class="form-control form-control-lg custom-input" id="tgl_kunjungan">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-auto">
                        <div class="row">
                            <label for="nama_pasien" style="margin-right: 40px;" class="col-lg-auto col-lg-form-label custom-label">Nama Pasien</label>
                            <div class="col-lg-auto">
                                <input type="text" class="form-control form-control-lg custom-input" id="nama_pasien" placeholder="NAMA PASIEN">
                            </div>
                            <label for="penjaminan" class="col-lg-auto col-lg-form-label custom-label" style="margin-left: 60px; margin-right: 24px;">Penjaminan</label>
                            <div class="col-lg-auto">
                                <input type="text" class="form-control form-control-lg custom-input" id="penjaminan" placeholder="JENIS PENJAMIN (CR)">
                            </div>
                        </div>
                    </div>

                    <hr style="border: 1px solid; margin-top:15px; margin-bottom: 21px;">

                    <div class="col-lg-auto">
                        <div class="row">
                            <label for="klinik_tujuan" style="margin-right: 40px;" class="col-lg-auto col-lg-form-label custom-label">Klinik Tujuan</label>
                            <div class="col-lg-auto">
                            <input type="text" class="form-control form-control-lg custom-input" id="klinik_tujuan" placeholder="NAMA KLINIK">
                            </div>
                            <label for="no_slot" class="col-lg-auto col-lg-form-label custom-label" style="margin-left: 60px; margin-right: 24px;">Nomor Slot</label>
                            <div class="col-lg-auto">
                                <input type="text" class="form-control form-control-lg custom-input" id="no_slot" placeholder="NOMOR SLOT">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-auto">
                        <div class="row">
                            <label for="dokter_tujuan" style="margin-right: 30px;" class="col-lg-auto col-lg-form-label custom-label">Dokter Tujuan</label>
                            <div class="col-lg-auto">
                                <input type="text" class="form-control form-control-lg custom-input" id="dokter_tujuan" placeholder="NAMA DOKTER">
                            </div>
                            <label for="waktu_slot" class="col-lg-auto col-lg-form-label custom-label" style="margin-left: 60px; margin-right: 28px">Waktu Slot</label>
                            <div class="col-lg-auto">
                                <input type="text" class="form-control form-control-lg custom-input" id="waktu_slot" placeholder="WAKTU SLOT">
                            </div>
                        </div>
                    </div>                   
                    <hr style="border: 1px solid; margin-top:8px; margin-bottom: 48px;">
                </div>

                <div class="d-flex justify-content-center" style="margin-top: -17px;">
                    <button type="button" id="prosesButton" class="btn btn-primary btn-lg btn-block button-process">PROSES</button>
                    <button type="button" class="btn btn-secondary btn-lg btn-block button-cancel">BATAL</button>
                </div>
                
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function fillToday() {
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); 
            var yyyy = today.getFullYear();

            var formattedDate = yyyy + '-' + mm + '-' + dd;
            document.getElementById('tgl_kunjungan').value = formattedDate;
        }

        document.getElementById('prosesButton').addEventListener('click', function() {
            Swal.fire({
                title: 'Konfirmasi Data',
                text: 'Apakah Anda yakin seluruh data Anda sudah sesuai?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: '<b>Ya, Proses</b>', 
                cancelButtonText: '<b>Batal</b>',
                confirmButtonColor: '#07AE53',
                cancelButtonColor: '#BC0707',
                customClass: {
                    confirmButton: 'custom-confirm-button-class',
                    cancelButton: 'custom-cancel-button-class'
                }    
            })
        });

        fillToday();
</script>


</body>
</html>
