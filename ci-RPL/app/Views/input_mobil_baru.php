<section class="input_mobil" style="margin-top: 150px;">
    <div class="container">
        <div class="row">
        <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
        <?php endif;?>
        <form action="/input_mobil/save" method="post">
            <div class="col-md-6">
                <span>Id Mobil</span>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="id_mobil" placeholder="" aria-label="Username" aria-describedby="basic-addon1" value="M<?php echo rand(0,150). date('dm') ?>" readonly>
                </div>
                <span>Type Mobil</span>
                <div class="input-group mb-3">
                    <select class="form-select" aria-label="Default select example" name="tipe_mobil">
                        <option selected>Sedan</option>
                        <option value="Hatchback">Hatchback</option>
                        <option value="LMPV">LMPV</option>
                        <option value="SUV">SUV</option>
                    </select>
                </div>
                <span>Merek</span>
                <div class="input-group mb-3">
                    <select class="form-select" aria-label="Default select example" name="merek">
                        <option selected>Toyota</option>
                        <option value="BMW">BMW</option>
                        <option value="Nissan">Nissan</option>
                        <option value="Daihatsu">Daihatsu</option>
                        <option value="4">...</option>
                    </select>
                </div>
                <span>Model</span>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="model" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <span>Transmisi</span>
                <section class="transmisi mb-3">
                    <div class="input-group mb-3">
                        <select class="form-select" aria-label="Default select example" name="transmisi">
                            <option selected>Transmisi</option>
                            <option value="Transmisi Automatic">Transmisi Automatic</option>
                            <option value="Transmisi Manual">Transmisi Manual</option>
                        </select>
                    </div>
                </section>
                <span>Bahan Bakar</span>
                <section class="transmisi mb-3">
                    <div class="input-group mb-3">
                        <select class="form-select" aria-label="Default select example" name="bahan_bakar">
                            <option selected>Bahan Bakar</option>
                            <option value="Solar">Solar</option>
                            <option value="Bensin">Bensin</option>
                        </select>
                    </div>
                </section>
                <span>Harga</span>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="harga" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <span>Tahun Perakitan</span>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="tahun_perakitan" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <span>Stok Mobil</span>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="stok" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Tambah Mobil</button>
                </div>
            </div>
        </div>
</section>