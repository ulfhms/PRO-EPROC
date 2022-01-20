
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
                                <h1 class="h4 text-gray-900 mb-4">Mulai Mendaftarkan Akun Anda</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('auth.prosesRegistrasi') }}" enctype="multipart/form-data">
                                @csrf
                                <form>
                                    <div class="mb-3">
                                        <input type="name" type="text" placeholder="Nama Perusahaan" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus id="name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                                            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="row g-3 align-items-center">
                                        <div class="col-md-6">
                                            <input id="password" placeholder="Kata Sandi" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <input id="password-confirm" placeholder="Konfirmasi Kata Sandi" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                    <input id="exampleAddress" placeholder="Alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"  value="{{ old('alamat') }}">
                                            
                                            @error('alamat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <select id="inputCategory" name="bidangUsaha" class="form-control" required>
                                        <option selected disabled>Pilih Bidang Usaha</option>
                                        @foreach ($bingus as $item)
                                        <option value="{{ $item->id }}">{{ ucwords($item->nama_bingus) }}</option>
                                        @endforeach
                                        </select>
                                            @error('bidangUsaha')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="formFile" class="form-label">Sisipkan Logo Perusahaan</label><br>
                                        <input class="" type="file" id="formFile" name="logo_supplier">
                                    </div> --}}
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="an" class="form-control  @error('telepon') is-invalid @enderror"
                                                id="exampleInputAn" placeholder="No HP atau No Telephone" name="telepon" value="{{ old('telepon') }}">
                                                @error('telepon')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control  @error('npwp') is-invalid @enderror"
                                                id="exampleRepeatRekening" placeholder="NPWP" name="npwp" value="{{ old('npwp') }}">
                                                @error('npwp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control @error('narahubung') is-invalid @enderror"
                                            id="exampleInputAn" placeholder="Narahubung" name="narahubung" value="{{ old('narahubung') }}">
                                            @error('narahubung')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control  @error('no_rek') is-invalid @enderror"
                                                id="exampleRepeatRekening" placeholder="Nomer Rekening" name="no_rek" value="{{ old('no_rek') }}">
                                                @error('no_rek')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror 
                                        </div>
                                        <div class="col-sm-6">
                                            <select id="inputCategory" name="bank" class="form-control" required>
                                                <option selected disabled>Pilih Bank</option>
                                                @foreach ($banks as $bank)
                                                <option value="{{ $bank->id }}">{{ ucwords($bank->nama_bank) }}</option>
                                                @endforeach
                                            </select>
                                            @error('bank')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="file" class="form-control @error('logo_supplier') is-invalid @enderror"
                                            id="exampleInputAn" placeholder="logo_supplier" name="logo_supplier" value="{{ old('logo_supplier') }}">
                                            @error('logo_supplier')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Saya telah memeriksa data di atas</label>
                                    </div> --}}
                                    <button type="submit" class="btn btn-primary btn-block">Daftarkan</button>
                                </form>
                                <div class="text-center">
                                  <a class="small" href="">Lupa Kata Sandi</a>
                                </div>
                                <div class="text-center">
                                     <a class="small" href="{{ route('login') }}">Sudah memiliki akun? login saja!</a>
                                </div>
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




