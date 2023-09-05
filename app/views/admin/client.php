              <div style="display: flex;justify-content: space-between;margin-bottom: 20px;">
                <h3>Clients</h3>
                <button type="button" data-bs-toggle="modal" data-bs-target="#basicModal" class="btn btn-primary">Tambah</button>
              </div>

              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Client Name</th>
                        <th>Client Type</th>
                        <th>Client Status</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php
                      foreach ($data['dataAll'] as $d) :
                      ?>
                        <tr>
                          <td>1</td>
                          <td><?= $d['clientName'] ?></td>
                          <td><?= $d['clientTypeName'] ?></td>
                          <td><?= $d['clientStatusName'] ?></td>
                          <td>
                          <?php endforeach ?>
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
                    </tbody>
                  </table>
                </div>
              </div>


              <!-- modal tambah data -->
              <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= BASEURL ?>/admin/addClient" method="POST">
                      <div class="modal-body">
                        <div class="row">
                          <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Name</label>
                            <input type="text" name="name" id="nameBasic" class="form-control" placeholder="Enter Name" />
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Client Type</label>
                          <select id="defaultSelect" name="markupId" class="form-select">
                            <?php foreach ($data['dataType'] as $d) : ?>
                              <option value="<?= $d['clientMarkupId'] ?>"><?= $d['clientMarkupName'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>

                        <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Client Status</label>
                          <select id="defaultSelect" name="markupId" class="form-select">
                            <?php foreach ($data['dataStatus'] as $d) : ?>
                              <option value="<?= $d['clientStatusId'] ?>"><?= $d['clientStatusName'] ?></option>
                            <?php endforeach ?>
                          </select>
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