<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <title>Script Pencarian dengan CodeIgniter 4 &raquo; Jaranguda.com</title>
  </head>
  <body>
    <div class="container">
        <br>
        <h3>Pencarian</h3>
        <hr>
        <form  action="<?php echo base_url('user/cari')?>" action="GET">
          <div class="mb-3">
            <label for="cari">data yang dicari</label>
            <input type="text" class="form-control" name="cari" aria-describedby="cari">
          </div>
          <button type="submit" class="btn btn-primary" value="Cari">Submit</button>
        </form>
    </div>
  </body>
</html>