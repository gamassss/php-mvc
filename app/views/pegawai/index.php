  <div class="row">
    <div class="col-6">
      <h2>Daftar Pegawai</h2>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mt-2 mb-4" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Pegawai
      </button>

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



  <!-- Modal -->
  <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="judulModal">Tambah Data Pegawai</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
          <form action="<?= BASEURL; ?>pegawai/tambah" method="post">
            <div class="mb-3">
              <label for="fname" class="form-label">First name</label>
              <input type="text" name="FIRST_NAME" class="form-control" id="fname"
                placeholder="Employee's first name" required>
            </div>

            <div class="mb-3">
              <label for="lname" class="form-label">Last name</label>
              <input type="text" name="LAST_NAME" class="form-control" id="lname"
                placeholder="Employee's last name" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="EMAIL" class="form-control" id="email" placeholder="name@example.com" required>
            </div>

            <label for="jobid" class="form-label">JOB_ID</label>
            <select class="form-select" name="JOB_ID" aria-label="Default select example" id="jobid">
              <option selected value="ST_MAN">ST_MAN</option>
              <option value="AC_ACCOUNT">AC_ACCOUNT</option>
              <option value="AC_MGR">AC_MGR</option>
              <option value="AD_ASST">AD_ASST</option>
              <option value="AD_PRES">AD_PRES</option>
              <option value="AD_VP">AD_VP</option>
              <option value="FI_ACCOUNT">FI_ACCOUNT</option>
              <option value="FI_MGR">FI_MGR</option>
              <option value="HR_REP">HR_REP</option>
              <option value="IT_PROG">IT_PROG</option>
              <option value="MK_MEN">MK_MEN</option>
            </select>

            <div class="mb-3 mt-3">
              <label for="hiredate" class="form-label">Hire date</label>
              <input type="text" name="HIRE_DATE" class="form-control" id="hiredate" placeholder="YYYY-MM-DD" required>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
        </form>
      </div>
    </div>
  </div>