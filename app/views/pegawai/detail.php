
<div class="container mt-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['emp']['FIRST_NAME'] . $data['emp']['LAST_NAME'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= 'id employee : ' . $data['emp']['EMPLOYEE_ID'] ?></h6>
    <p class="card-text"><?= 'Email : ' . $data['emp']['EMAIL'] . '@gmail.com' ?></p>
    <a href="#" class="card-link">Kembali</a>
    <a href="#" class="card-link">Selanjutnya</a>
  </div>
</div>
</div>