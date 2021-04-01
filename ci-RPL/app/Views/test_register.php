<section class="register" style="margin-top: 150px;">
    <div class="container">
        <div class="row">
        <form action="/user/save" method="post">
            <div class="col-md-6">
                <span>Nama</span>
                <div class="row g-3 mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First" aria-label="First name" name="nama">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last" aria-label="Last name">
                    </div>
                </div>
                <span>No. KTP</span>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" aria-label="NoKTP" aria-describedby="basic-addon1" name="no_ktp">
                </div>
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label for="">Username</label>
                        <input type="text" class="form-control" placeholder="" aria-label="Username" name="username">
                    </div>
                    <div class="col">
                        <label for="">Password</label>
                        <input type="password" class="form-control" placeholder="" aria-label="Password" name="password">
                    </div>
                </div>
                <span>E-mail</span>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" aria-label="Email" aria-describedby="basic-addon1" name="email">
                </div>
                <span>No.HP</span>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" aria-label="NoHP" aria-describedby="basic-addon1" name="no_hp">
                </div>
                <span>Jenis Kelamin</span>
                <div class="input-group mb-3">
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                        <option selected>Kelamin</option>
                        <option value="1">Laki - Laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                </div>
                <span>Alamat</span>
                <div class="input-group mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</section>


<script>
    $('#datepicker').datepicker();
</script>