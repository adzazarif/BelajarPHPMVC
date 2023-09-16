               <!-- Layout container -->
               <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->

              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <form class="d-flex" action="<?= BASEURL ?>/admin/searchSuplier" method="POST">
                  <input
                    type="text"
                    autocomplete="off"
                    name="keywoard"
                    id="keywoard"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                  <button type="submit" id="buttonSearch" class="btn btn-primary">submit</button>
                  </form>
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <!-- <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  > -->
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              
              <div style="display: flex;justify-content: space-between;margin-bottom: 20px;">
                <h3>Suplier</h3>
                <div>
                <button type="button" data-bs-toggle="modal" data-bs-target="#filter" class="btn btn-info">Filter</button>
                <button type="button" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary">Add</button>
                </div>
              </div>

              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Suplier Name</th>
                        <th>Suplier Type</th>
                        <th>Suplier Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php
                      $no = 1;
                      foreach ($data['dataAll'] as $d) :

                      ?>
                        <tr>
                          <td><?= $no ?></td>
                          <td><?= $d['suplierName'] ?></td>
                          <td><?= $d['suplierTypeName'] ?></td>
                          <td><?= $d['suplierStatusName'] ?></td>
                          <td>
                            <a class="btn btn-success" href="<?= BASEURL ?>/admin/detailSuplier/<?= $d['suplierId'] ?>" role="button">Details</a>
                          </td>
                        </tr>
                        <?php $no++; endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>


              <!-- modal tambah data -->
              <div class="modal fade" id="add" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= BASEURL ?>/admin/addSuplier" method="POST">
                      <div class="modal-body">
                        <div class="row">
                          <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Name</label>
                            <input type="text" name="name" id="nameBasic" class="form-control" placeholder="Enter Name" />
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Suplier Type</label>
                          <select id="defaultSelect" name="typeId" class="form-select">
                            <?php foreach ($data['dataType'] as $d) : ?>
                              <option value="<?= $d['suplierTypeId'] ?>"><?= $d['suplierTypeName'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>

                        <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Suplier Status</label>
                          <select id="defaultSelect" name="statusId" class="form-select">
                            <?php foreach ($data['dataStatus'] as $d) : ?>
                              <option value="<?= $d['suplierStatusId'] ?>"><?= $d['suplierStatusName'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                        </button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              </div>
                 <!-- modal filter -->
                <div class="modal fade" id="filter" tabindex="-2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= BASEURL ?>/admin/addClient" method="POST">
                      <div class="modal-body">
                        <div class="mb-3">
                          <label for="sts" class="form-label">Client Status</label>
                          <select id="sts" name="statusId" class="form-select">
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
                      </div>
                    </form>

                  </div>
                </div>
              </div>