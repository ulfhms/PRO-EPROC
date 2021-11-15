<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register | E - Proc</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"><img src="{{asset('template/img/regris-bg.png')}}" class="img-thumbnail" alt="logo"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampletName"
                                            placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleAddress"
                                            placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <label for="inputCategory">Bidang Usaha</label>
                                    <select id="inputCategory" class="form-control">
                                      <option selected>Pengadaan ATK</option>
                                      <option>Kontruksi</option>
                                      <option>Jasa</option>
                                      <option>ABC</option>
                                      <option>DEF</option>
                                    </select>
                                  </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="an" class="form-control form-control-user"
                                            id="exampleInputAn" placeholder="No HP atau No Telephone">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleRepeatRekening" placeholder="NPWP">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="an" class="form-control form-control-user"
                                            id="exampleInputAn" placeholder="Narahubung">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleRepeatRekening" placeholder="Nomer Rekening"> <br>
                                    </div>
                                   
                                    <div class="form-group col-sm-6">
                                        <label for="exampleFormControlFile">Logo Perusahaan</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile">
                                        <small id="emailHelp" class="form-text text-muted">Format JPG | PNG | JPEG.</small>
                                      </div>
                                </div>
                                <a href="{{ route('auth.login') }}" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('auth.forget') }}">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('auth.login') }}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

</body>

</html>