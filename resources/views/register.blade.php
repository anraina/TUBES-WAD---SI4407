<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Register</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
    </head>
    <body style="background-color: #bde6f3">
        <div>
            <a href="{{ route('landing') }}">
                <img src="{{ asset('img/logotravel.png') }}" class="mt-3 mx-auto d-block" 
                alt="Logo alvatours" style="width: 14rem; height: auto;">
            </a>
        </div>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container" style="margin-top: -1.5rem">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    {{-- Error Alert --}}
                                    @if(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{session('error')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Registrasi</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('users.store') }}" method="POST" id="logForm">
                                        @csrf
                                        @method('POST')
                                            <div class="form-group">
                                                {{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                                                    <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div> --}}
                                                <label class="small mb-1">Name</label>
                                                <input
                                                    class="form-control py-4"
                                                    name="name"
                                                    type="text"
                                                    placeholder="Masukkan nama lengkap"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Email</label>
                                                <input
                                                    class="form-control py-4"
                                                    type="text"
                                                    name="email"
                                                    placeholder="Masukkan email"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Username</label>
                                                <input
                                                    class="form-control py-4"
                                                    type="text"
                                                    name="username"
                                                    placeholder="Buat username"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Password</label>
                                                <input
                                                    class="form-control py-4"
                                                    type="password"
                                                    name="password"
                                                    placeholder="Buat password"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control  py-4" id="level" name="level" value="user">
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary btn-block" type="submit" style="border-radius: 0.5rem">Buat Akun</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            <a href="{{url('login')}}">Sudah punya akun? Masuk!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        crossorigin="anonymous"></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="{{url('assets/js/scripts.js')}}"></script>
    </body>
</html>