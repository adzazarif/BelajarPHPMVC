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
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
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
          
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
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