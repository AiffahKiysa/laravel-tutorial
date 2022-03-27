@extends('template')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admission ITX</title>
 
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!-- Styles -->
    <style>
        html {
            height: 100%;
            }
            body {
                
            margin:0;
            padding:0;
            font-family: sans-serif;
            background:#243b55;
            }

            .card-body {
                position:relative;
                padding: 40px;
                background: rgba(0, 0, 0, .5);
                box-sizing:border-box;
                
                box-shadow: 0 15px 25px rgba(0,0,0,.6);
                border-radius: 20px;
                }

            
    </style>

<style>
    body {
        font-family: 'Nunito', sans-serif;
    }
</style>

</head>
<body>
        <div>
            <div class="row justify-content-center py-4">
                <div class="col-lg-6">
                    <div>
                        <div class="card-body">

                            <p style="text-align:center" > <img src="logo.png" alt= "logo" style="width:70px"><br></p>
                            <h2 class="text-center" style="color:whitesmoke">Formulir Daftar Ulang ITX</h2>

                            <!-- form validasi -->
                            <form action="/proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <br>
                                <h4 class="text-left" style="color:whitesmoke">Personal Data</h4>

                                <div class="form-group" style="text-align:left">
                                    <label for="name" style="color:whitesmoke">Name</label>
                                    <input class="form-control" type="text" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group"style="text-align:left">
                                    <label for="registration_number" style="color:whitesmoke">Registration No.</label>
                                    <input class="form-control" type="text" name="registration_number" value="{{ old('registration_number') }}" class="@error('registration_number') is-invalid @enderror">
                                    @error('registration_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group"style="text-align:left">
                                    <label for="department" style="color:whitesmoke">Department</label>
                                    <input class="form-control" type="text" name="department" value="{{ old('department') }}" class="@error('department') is-invalid @enderror">
                                    @error('department')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="@error('admission_scheme') is-invalid @enderror"  style="color:whitesmoke">Admission Scheme</label>
                                    @error('admission_scheme')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" type="radio" value="SNMPTN" id="SNMPTN" name="admission_scheme">
                                            <label class="custom-control-label" for="SNMPTN" style="color:whitesmoke">SNMPTN</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" type="radio" value="SBMPTN" id="SBMPTN" name="admission_scheme">
                                            <label class="custom-control-label" for="SBMPTN" style="color:whitesmoke">SBMPTN</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" type="radio" value="MANDIRI" id="MANDIRI" name="admission_scheme">
                                            <label class="custom-control-label" for="MANDIRI" style="color:whitesmoke">MANDIRI</label>
                                        </div>
                                </div>

                                <br>
                                
                                <div class="form-group">
                                    <label class="@error('marital_status') is-invalid @enderror" style="color:whitesmoke">Marital Status</label>
                                    @error('marital_status')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select name="marital_status" id="marital_status">
                                        <option>---</option>
                                        <option value="Belum Menikah" style="color:#243b55">Belum Menikah</option>
                                        <option value="Menikah" style="color:#243b55">Menikah</option>
                                        <option value="Duda/Janda" style="color:#243b55">Duda / janda</option>
                                    </select>
                                </div>

                                <div class="form-group"style="text-align:left">
                                    <label for="place" style="color:whitesmoke">Place of Birth</label>
                                    <input class="form-control" type="text" name="place" value="{{ old('place') }}" class="@error('place') is-invalid @enderror">
                                    @error('place')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group"style="text-align:left">
                                    <label for="date" style="color:whitesmoke">Date of Birth</label>
                                    <input class="form-control" type="date" name="date" value="{{ old('date') }}" class="@error('date') is-invalid @enderror">
                                    @error('date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label class="@error('sex') is-invalid @enderror" style="color:whitesmoke">Sex</label>
                                    @error('sex')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" type="radio" value="male" id="male" name="sex">
                                            <label class="custom-control-label" for="male" style="color:whitesmoke">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" type="radio" value="female" id="female" name="sex">
                                            <label class="custom-control-label" for="female" style="color:whitesmoke">Female</label>
                                        </div>
                                </div>

                                <div class="form-group">
                                    <label class="@error('religion') is-invalid @enderror" style="color:whitesmoke">Religion</label>
                                    @error('religion')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select name="religion" id="religion" style="color: #243b55">
                                        <option>--Pilih agama--</option>
                                        <option value="islam">Islam</option>
                                        <option value="katolik">Katolik</option>
                                        <option value="protestan">Protestan</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="buddha">Buddha</option>
                                        <option value="konghucu">Konghucu</option>
                                    </select>
                                </div>

                                <br>

                                <div class="form-group"style="text-align:left">
                                    <label for="email" style="color:whitesmoke">Email</label>
                                    <input class="form-control" type="text" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group"style="text-align:left">
                                    <label for="no_hp" style="color:whitesmoke">No hp</label>
                                    <input class="form-control" type="text" name="no_hp" value="{{ old('no_hp') }}" class="@error('no_hp') is-invalid @enderror">
                                    @error('no_hp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group"style="text-align:left">
                                    <label for="nik" style="color:whitesmoke">NIK</label>
                                    <input class="form-control" type="text" name="nik" value="{{ old('nik') }}" class="@error('nik') is-invalid @enderror">
                                    @error('nik')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label" style="color:whitesmoke">KTP</label>
                                    <input class="form-control" type="file" id="image" name="image" value="{{ old('image') }}" class="@error('image') is-invalid @enderror">
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <br>

                                <br>
                                <h4 class="text-left" style="color:whitesmoke">Education</h4>

                                <div class="form-group"style="text-align:left">
                                    <label for="school" style="color:whitesmoke">Origin of the school</label>
                                    <input class="form-control" type="text" name="school" value="{{ old('school') }}" class="@error('school') is-invalid @enderror">
                                    @error('school')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group"style="text-align:left">
                                    <label for="score" style="color:whitesmoke">Average school exams </label>
                                    <input class="form-control" type="text" name="score" value="{{ old('score') }}" class="@error('score') is-invalid @enderror">
                                    @error('score')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group"style="text-align:left">
                                    <label for="year" style="color:whitesmoke">Graduate Year</label>
                                    <input class="form-control" type="text" name="year" value="{{ old('year') }}" class="@error('year') is-invalid @enderror">
                                    @error('year')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input class="btn btn-dark" type="submit" value="Submit">
                                </div>
                            </form>
                            
                            
                            
                        </>
                    </p>
                </div>
            </div>
        </div>
   
</body>
</html>

@endsection