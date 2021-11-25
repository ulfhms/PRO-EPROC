
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
                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="name" id="exampletName"
                                            placeholder="Nama perusahaan">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampletName"
                                            placeholder="username" name="username">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampletName"
                                            placeholder="email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleAddress"
                                            placeholder="Alamat" name="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="inputCategory">Bidang Usaha</label>
                                    <select id="inputCategory" name="bidangUsaha" class="form-control">
                                      <option selected>Pilih</option>
                                      <option value="1">bri</option>
                                      <option value="2">bca</option>

                                      @foreach ($bingus as $item)
                                      <option value="{{ $item->id }}">{{ ucwords($item->nama) }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="an" class="form-control form-control-user"
                                            id="exampleInputAn" placeholder="No HP atau No Telephone" name="telepon">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleRepeatRekening" placeholder="NPWP" name="npwp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="an" class="form-control form-control-user"
                                            id="exampleInputAn" placeholder="Narahubung" name="narahubung">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleRepeatRekening" placeholder="Nomer Rekening" name="no_rek"> <br>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleRepeatRekening" placeholder="bank" name="bank"> <br>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatRekening" placeholder="Password" name="password"> <br>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    
                                        </div>
                                   
                                   
                                    {{-- <div class="form-group col-sm-6">
                                        <label for="exampleFormControlFile">Logo Perusahaan</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile" name="image">
                                        <small id="emailHelp" class="form-text text-muted">Format JPG | PNG | JPEG.</small>
                                      </div> --}}
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
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




