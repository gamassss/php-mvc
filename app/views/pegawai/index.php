
<div class="container mt-4">
  <div class="row">
    <div class="col-6 mt-4">
      <h2>Daftar Pegawai</h2>
      <ul class="list-group">
        <?php foreach($data['emp'] as $peg) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-center"><?= $peg['FIRST_NAME']?>
          <a href="<?= BASEURL;?>pegawai/detail/<?= $peg['EMPLOYEE_ID']; ?>">
            <span class="badge text-bg-primary ">Detail</span>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>