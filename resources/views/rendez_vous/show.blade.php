@extends('layout.layout')

@section('pageTitle', '')
@section('content')


    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>CABINET_DENTAIRE</title>
        <!-- plugins:css -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="../../vendors/iconfonts/font-awesome/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="../../css/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="http://www.urbanui.com/" />
    </head>
    <div class="col-sm-12 col-xs-1 col-md-10 col-lg-10 ba">
        <div class="container">
            <div class="col-md-12 mt-4">
                <div class="card border-primary rounded-lg p-4" style="background-color: rgb(106, 106, 238); margin: 20px;">
                    <div class="card-header rendezvous-title" style="background-color: rgb(249, 249, 252); padding: 10px 20px;">Meeting</div>
                    <div class="card-body">
                        <div class="card-body">
                            <table class="table table-bordered" style="background-color: rgb(249, 249, 252); max-width: 300px;">
                                <tbody>
                                    <tr>
                                        <th style="color: black; font-weight: bold;">Patient</th>
                                        <td>{{ $rendezvous->patient_id }}</td>
                                    </tr>
                                    <tr>
                                        <th style="color: black; font-weight: bold;">Date</th>
                                        <td>{{ $rendezvous->date }}</td>
                                    </tr>
                                    <tr>
                                        <th style="color: black; font-weight: bold;">Heure</th>
                                        <td>{{ $rendezvous->heure }}</td>
                                    </tr>
                                </tbody>
                            </table>                 
                        </div>
                         <input type="submit" value="PDF" class="btn btn-success"></br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .rendezvous-title {
            max-width: fit-content;
            border: 1px solid rgb(0, 0, 255); 
            border-radius: 10px; 
        }
            .table-bordered {
            max-width: fit-content;
            border: 1px solid rgb(0, 0, 255); 
            border-radius: 10px; 
        }
    </style>
    
    
    
    
    
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <script src="../../vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/misc.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/dashboard.js"></script>
    <!-- End custom js for this page-->
@endsection
