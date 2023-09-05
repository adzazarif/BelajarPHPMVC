<div style="display: flex;justify-content: space-between;margin-bottom: 20px;">
  <h3>Clients Markup</h3>
  <button type="button" data-bs-toggle="modal" data-bs-target="#basicModal" class="btn btn-primary">Tambah</button>
</div>

<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Client Name</th>
          <th>Percentage</th>
          <th>Amount</th>
          <th>value</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <?php
        $no = 1;
        foreach ($data['dataAll'] as $d) :
        ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $d['clientMarkupName'] ?></td>
            <td><?= $d['percentage'] == 1 ? 'True' : 'False'; ?></td>
            <td><?= $d['amount'] == 1 ? 'True' : 'False'; ?></td>
            <td><?= $d['value'] ?></td>
            <td>
            
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
            </td>
          </tr>
          <?php $no++; endforeach ?>
      </tbody>
    </table>
  </div>
</div>

<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= BASEURL ?>/admin/addClientMarkup" method="POST">
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label for="nameBasic" class="form-label">Name</label>
            <input type="text" name="name" id="nameBasic" class="form-control" placeholder="Enter Name" />
          </div>
        </div>
        <div class="row">
        <label for="nameBasic" class="form-label">Percentage</label>
          <div class="col mb-3">
            <div class="form-check mt-3">
              <input class="form-check-input" name="percentage" type="radio" value="1" />
              <label class="form-check-label"> True </label>
            </div>
          </div>
          <div class="col mb-3">
            <div class="form-check mt-3">
              <input class="form-check-input" name="percentage" type="radio" value="0" />
              <label class="form-check-label" > False </label>
            </div>
          </div>
        </div>
        <div class="row">
        <label for="nameBasic" class="form-label">Amount</label>
          <div class="col mb-3">
            <div class="form-check mt-3">
              <input name="amount" class="form-check-input" type="radio" value="1" " />
              <label class="form-check-label" for="defaultRadio1"> True </label>
            </div>
          </div>
          <div class="col mb-3">
            <div class="form-check mt-3">
              <input name="amount" class="form-check-input" type="radio" value="0" " />
              <label class="form-check-label" for="defaultRadio1"> False </label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="nameBasic" class="form-label">Value</label>
            <input type="number" name="value" id="nameBasic" class="form-control" placeholder="Enter Name" />
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>