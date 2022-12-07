@extends('layouts.main')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>

    <h1 class="display-4 fw-normal text-primary text-center">Welcome to RefilMe</h1><br class="my-4">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">RefilMe</h2>
            <p class="lead">RefilMe merupakan wesbite pembelian isi ulang produk rumah tangga. RefilMe dibuat untuk
                membantu ibu-ibu rumah tangga agar dapat membeli kebutuhan rumah tangga secara online dan hemat plastik.
                Karena limbah plastik rumah tangga sangat mencemari lingkungan. Dengan RefilMe ibu-ibu rumah tangga
                dapat membantu mengurangi sampah plastik dilingkungan sekitar.</p>
        </div>
        <div class="col-md-5">
            <img src="/assets/img/refil.jpg"
                class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice"
                focusable="false"></img>
        </div>
    </div>

    <br class="my-4">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Stop Plastic Polution!</h2>
            <p class="lead">RefilMe mengajak ibu-ibu rumah tangga untuk berhenti limbah plastik yang digunakan dalam
                rumah tangga. RefilMe mengajak agar ibu-ibu rumah tangga dapat hidup sehat dengan mengurangi penggunaan
                plastik dengan membeli kebutuhan rumah tangga dengan isi ulang produk yang dibutuhkan. </p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="/assets/img/isiulang.jpg"
                class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice"
                focusable="false"></img>
        </div>
    </div>

    <br class="my-4">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Enjoy to Order</h2>
            <p class="lead">Dapatkan isi ulang produk rumah tangga favoritmu melalui RefilMe. </p>
        </div>
        <div class="col-md-5">
            <img src="/assets/img/kurir.png"
                class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice"
                focusable="false"></img>

        </div>
    </div>

    <br class="my-4">

    <div class="container marketing">
        <div class="text-center text-dark p-lg-5">
            <h3 class="display-4 fw-normal">Cara Order</h3>
        </div>
        
        <div class="row">
            <div class="col-lg-4">
                <img src="/assets/img/ponsel.png"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto d-block"
                    width="150" height="150" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false"></img>

                <p>Pilih dan checkout produk yang anda butuhkan melalui website RefilMe.</p>
            </div>
            <div class="col-lg-4">
                <img src="/assets/img/kurir2.png"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto d-block"
                    width="195" height="195" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false"></img>

                <p>Kurir kami akan mengantarkan produk pesanan anda hingga rumah anda. Gunakan wadah yang anda punya
                    untuk pengisian produk.</p>
            </div>
            <div class="col-lg-4">
                <img src="/assets/img/invoice.png"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto d-block"
                    width="250" height="250" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false"></img>

                <p>Bayarkan tagihan produkmu kepada kurir secara cash.</p>
            </div>
        </div>

</main>
@endsection