<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3>Daftar Ulang</h3>
                        <h3 class="my-4">Data Yang Di Input : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Name</td>
                                <td>{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Registration No.</td>
                                <td>{{ $data->registration_number }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Department</td>
                                <td>{{ $data->department }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Admission Scheme</td>
                                <td>{{ $data->admission_scheme }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Place of Birth</td>
                                <td>{{ $data->place }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Date of Birth</td>
                                <td>{{ $data->date }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Marital status</td>
                                <td>{{ $data->marital_status }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Sex</td>
                                <td>{{ $data->sex }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Religion</td>
                                <td>{{ $data->religion }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Email</td>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">No hp</td>
                                <td>{{ $data->no_hp }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">NIK</td>
                                <td>{{ $data->nik }}</td>
                            </tr>
                           
                            <tr>
                                <td style="width:150px">KTP</td>
                                <td>
                                    <img src="{{ asset('storage/'.$data->image) }}" alt="" width="200px">
                                </td>
                            </tr>
                            <tr>
                                <td style="width:150px">Origin of The School</td>
                                <td>{{ $data->school }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Average school exams</td>
                                <td>{{ $data->score }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Graduate Year</td>
                                <td>{{ $data->year }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
@include('sweetalert::alert')
</html> 