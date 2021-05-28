@extends('master')

@section('content')
<section class="register" style="margin-top: 150px;">
    <div class="container">
        <div class="row">
            <!-- View ini menggunakan Controller Test_register.php dan menggunakan fungsi register -->
            <form action="/store" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
                    @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_ktp">no_ktp</label>
                    <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="Masukkan no_ktp">
                    @error('no_ktp')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username">
                    @error('username')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Masukkan password">
                    @error('password')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan email">
                    @error('email')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_hp">no_hp</label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan no_hp">
                    @error('no_hp')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">jenis_kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Masukkan jenis_kelamin">
                    @error('jenis_kelamin')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat">
                    @error('alamat')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="x">x</label>
                    <input type="text" class="form-control" name="x" id="x" placeholder="Masukkan x">
                    @error('x')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <!-- <div class="col-md-6">
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
                            <option value="Laki-Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <span>Register sebagai</span>
                    <div class="input-group mb-3">
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option selected>Register sebagai</option>
                            <option value="Pembeli">Pembeli</option>
                            <option value="Penjual">Penjual</option>
                        </select>
                    </div>
                    <span>Alamat</span>
                    <div class="input-group mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
                    </div> -->
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
        <div class="col-md-6">
        </div>
    </div>
</section>


<!-- <script>
    $('#datepicker').datepicker();
</script> -->
@endsection