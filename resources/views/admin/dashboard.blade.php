@extends('admin.layouts.app', [
    'page' => 'Dashboard'
])

@section('content')
    <!-- Insights -->
<ul class="insights">
    <li>
        <i class='bx bx-line-chart' ></i>
        <span class="info">
            <h3>
                1,074
            </h3>
            <p>Perkembangan Anak</p>
        </span>
    </li>
    <li>
    <i class='bx bx-injection' ></i>
        <span class="info">
            <h3>
                3,944
            </h3>
            <p>Imunisasi</p>
        </span>
    </li>
    <li>
        <i class='bx bx-female'></i>
        <i class='bx bx-male'></i>
        <span class="info">
            <h3>
                14,721
            </h3>
            <p>Data Orang Tua</p>
        </span>
    </li>
    <li>
    <i class='bx bx-child' ></i>
        <span class="info">
            <h3>
                $6,742
            </h3>
            <p>Data Anak</p>
        </span>
    </li>
</ul>
<!-- End of Insights -->

<div class="bottom-data">
    <div class="orders">
        <div class="header">
            <i class='bx bx-file' ></i>
            <h3>Form Pendaftaran</h3>
            <i class='bx bx-filter'></i>
            <i class='bx bx-search'></i>
        </div>
        
    </div>

    

</div>
@endsection