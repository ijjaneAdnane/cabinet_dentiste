@extends('layout.layout')


@section('content')
    <div class="row grid-margin">
        <div class="col-12">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="statistics-item">
                            <p>
                                <i class="fa fa-user-md" style="font-size:24px"></i>
                                Medecin
                            </p>
                            <h2>{{ \App\Models\Medecin::count() }}</h2>
                            <label class="badge badge-outline-success badge-pill"></label>
                        </div>
                        <div class="statistics-item">
                            <p>
                                <i class='fas fa-user-alt' style='font-size:24px'></i>
                                Patient
                            </p>
                            <h2>{{ \App\Models\Patient::count() }}</h2>
                            <label class="badge badge-outline-danger badge-pill"></label>
                        </div>
                        <div class="statistics-item">
                            <p>
                                <i class='far fa-clock' style='font-size:24px'></i>
                                Meeting
                            </p>
                            <h2>{{ \App\Models\Rendez_vous::count() }}</h2>
                            <label class="badge badge-outline-success badge-pill"></label>
                        </div>
                        <div class="statistics-item">
                            <p>
                                <i class="fa fa-stethoscope" style="font-size:24px"></i>
                                Consultation
                            </p>
                            <h2>{{ \App\Models\Consultation::count() }}</h2>
                            <label class="badge badge-outline-success badge-pill"></label>
                        </div>
                        <div class="statistics-item">
                            <p>
                                <i class='fas fa-folder-open' style='font-size:24px'></i>
                                Ordonnance
                            </p>
                            <h2>{{ \App\Models\Ordonnance::count() }}</h2>
                            <label class="badge badge-outline-success badge-pill"></label>
                        </div>
                        <div class="statistics-item">
                            <p>
                                <i class='far fa-credit-card' style='font-size:24px'></i>
                                Facture
                            </p>
                            <h2>{{ \App\Models\Facture::count() }}</h2>
                            <label class="badge badge-outline-danger badge-pill"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <canvas id="myChart" height="100px"></canvas>
    <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
            <i class="settings-close fa fa-times"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
                <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    var labels = @json($labels);
    var patientCounts = @json($data);
    const data = {
        labels: labels,
        datasets: [{
            label: 'nombre de Patient',
            backgroundColor: 'skyblue',
            borderColor: 'rgb(255, 99, 132)',
            data: patientCounts,
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {}
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
@endsection