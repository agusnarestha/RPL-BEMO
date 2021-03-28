<header class="page-header gradient">
    <div class="container pt-3">
        <div class="row align-items-center justify-content-start">
            <div class="col-md-6" style="padding-top: 50px; padding-bottom: 20px;">
                <div class="card" style="background-color:rgba(0, 0, 0, 0); border: none;">
                    <h1 class="text-uppercase fw-bold" style="color: #FFF; font-size: 60px;">Ayo</h1>
                    <h1 class="text-uppercase fw-bold" style="color: #F4E04D; font-size: 72px;">Beli Mobil</h1>
                    <p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src=<?= base_url('image/mobil_depanv2.png') ?> alt="" style="width: 100%;">
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FFFF" fill-opacity="1" d="M0,96L60,85.3C120,75,240,53,360,74.7C480,96,600,160,720,176C840,192,960,160,1080,144C1200,128,1320,128,1380,128L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
</header>

<section class="search-bar" style="padding: 20px 0; margin-bottom: 100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="rekomendasi-mobil" style="margin: 100px 0; padding: 20px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src=<?= base_url('image/list.jpg') ?> class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src=<?= base_url('image/list.jpg') ?> class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src= <?= base_url('image/list.jpg') ?> class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src=<?= base_url('image/list.jpg') ?> class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gejala" style="margin: 100px 0; padding: 20px 0;">
    <!-- <div class="container">
        <div class="row">
            <h3 class="fw-bold">Gejala Infeksi Coronavirus</h3>
            <h5 style="padding-bottom: 60px;">Berikut beberapa gejala virus corona yang terbilang ringan: </h5>
            <div class="row">
                <div class="col-md-2">
                    <div class="row justify-content-center gy-4">
                        <img src=<?= base_url('/png/041-sneezing.png') ?> alt="" style="width: 60%;">
                        <p class="text-center">Hidung beringus</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row justify-content-center gy-4">
                        <img src=<?= base_url('/png/042-dizzy.png') ?> alt="" style="width: 60%;">
                        <p class="text-center">Sakit Kepala</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row justify-content-center gy-4">
                        <img src=<?= base_url('/png/004-difficulty breathing.png') ?> alt="" style="width: 60%;">
                        <p class="text-center">Batuk</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row justify-content-center gy-4">
                        <img src=<?= base_url('/png/023-sore throat.png') ?> alt="" style="width: 60%;">
                        <p class="text-center">Sakit tenggorokan</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row justify-content-center gy-4">
                        <img src=<?= base_url('/png/002-fever.png') ?> alt="" style="width: 60%;">
                        <p class="text-center">Demam</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row justify-content-center gy-4">
                        <img src=<?= base_url('/png/050-weakness.png') ?> alt="" style="width: 60%;">
                        <p class="text-center">Merasa tidak enak badan</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</section>