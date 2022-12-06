<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Quotation management system</title>


    <style>
        .gradient-custom {

            background-image: conic-gradient(from 180deg, gray, black);
        }
    </style>


</head>

<body>
    <section class="vh-100 gradient-custom">

        <div class="container py-2 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">

                        <div class="card-body p-1 p-md-5">

                            <div class="card-title text-center">
                                <h5>Register New Company</h5>
                            </div>

                            <div class="card-body">

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="row">

                                        <div class="col-md-6">
                                            <!-- <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Name') }}</label> -->
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                        <div class="col-md-6">
                                            <!-- <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('Email') }}</label> -->
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <br>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <!-- <label for="password" class="col-md-6 col-form-label text-md-left">{{ __('Password') }}</label> -->
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <!-- <label for="password-confirm" class="col-md-9 col-form-label text-md-left">{{ __('Verify Password') }}</label> -->
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Verify Password" required autocomplete="new-password">
                                        </div>

                                    </div>

                                    <br>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <!-- <label for="company-name" class="col-md-9 col-form-label text-md-left">{{ __('Company Name') }}</label> -->
                                            <input id="company-name" type="text" class="form-control @error('companyname') is-invalid @enderror" name="companyname" placeholder="Company Name" value="{{ old('companyname') }}" required autocomplete="companyname" autofocus>

                                            @error('companyname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <!-- <label for="company-email" class="col-md-9 col-form-label text-md-left">{{ __('Company Email') }}</label> -->
                                            <input id="company-email" type="email" class="form-control @error('companyemail') is-invalid @enderror" name="companyemail" placeholder="Company Email" value="{{ old('companyemail') }}" required autocomplete="companyemail">

                                            @error('companyemail')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <br>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <!-- <label for="company-phone" class="col-md-9 col-form-label text-md-left">{{ __('Company Phone') }}</label> -->
                                            <input id="company-phone" type="text" class="form-control @error('companyphone') is-invalid @enderror" name="companyphone" placeholder="Company Phone" required>
                                            @error('companyphone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <!-- <label for="company-logo" class="col-md-9 col-form-label text-md-left">{{ __('Company Logo') }}</label> -->
                                            <input id="company-logo" type="file" name="companylogo" class="form-control" required>
                                        </div>

                                    </div>

                                    <br>
                                    <br>

                                    <div class="text-center text-muted">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Create New Company Account') }}
                                            </button>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="text-center text-muted">
                                        Powered By StarAutomation
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>

</body>

</html>