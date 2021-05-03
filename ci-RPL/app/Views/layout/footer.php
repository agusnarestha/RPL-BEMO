<footer>
    <div class="container-fluid text-center" style="padding: 10px 0;">
        <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-md-3">
                    <h5 class="text-start"><img src=<?= base_url('logo.png') ?> alt="" style="width: 20%;"></h5>
                    <p class="text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Porta nibh venenatis cras sed felis eget.</p>
                </div>
                <div class="col-md-3">
                    <h5 class="text-start">Tautan Cepat</h5>
                    <div class="row">
                        <p class="text-start"><a href="<?php echo base_url('Home/index') ?>">Beranda</a></p>
                        <p class="text-start"><a href="<?php echo base_url('Home/information') ?>">Informasi</a></p>
                        <p class="text-start"><a href="<?php echo base_url('Home/faq') ?>">FAQs</a></p>
                        <p class="text-start"><a href="<?php echo base_url('Home/info') ?>">Artikel</a></p>
                        <p class="text-start"><a href="<?php echo base_url('Home/team') ?>">Tentang Kami</a></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5 class="text-start">Pranala Luar</h5>
                    <div class="row">
                        <p class="text-start"><a href="https://covid19.go.id/">Lorem ipsum dolor sit amet</a></p>
                        <p class="text-start"><a href="https://kawalcovid19.id/">Consectetur adipiscing elit</a></p>
                        <p class="text-start"><a href="https://www.halodoc.com/kesehatan/coronavirus">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</a></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5 class="text-start">Hubungi Kami</h5>
                    <div class="row">
                        <p class="text-start"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg> Jl. Telekomunikasi Jl. Terusan Buah Batu, Sukapura, Kec. Dayeuhkolot, Kota Bandung, Jawa Barat 40257</p>
                        <p class="text-start"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                            </svg> bemo@gmail.com</p>
                        <p class="text-start"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> 021-5210 411</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 10px 0;">
            <span><img src=<?= base_url('image/Bemo.png') ?> alt="" style="width: 5%;"></span>
        </div>
        <div class="row" style="padding: 10px 0;">
            <p>© 2021 Copyright Reserved</p>
        </div>
    </div>
</footer>
<script type="text/javascript">
    $(document).ready(function() {
        $('#display').DataTable({
            fixedHeader: {
                header: true,
                footer: true
            }
        });
    });
</script>
</body>
<html>