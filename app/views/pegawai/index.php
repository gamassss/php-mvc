<div class="container mt-4">
  <div class="row">
    <div class="col-6 mt-4">
      <h2>Daftar Pegawai</h2>
      <?php foreach($data['emp'] as $peg) : ?>
        <ul>
          <li><?= $peg['nama']?></li>
          <li><?= $peg['job']?></li>
          <li><?= $peg['hire_date']?></li>
          <li><?= $peg['email']?></li>
        </ul>
      <?php endforeach; ?>
    </div>
  </div>
</div>