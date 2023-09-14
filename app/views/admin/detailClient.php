               <!-- Layout container -->
               <div class="layout-page">
          <!-- Navbar -->



          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">

                 
                  <h6 class="text-muted">Client Id : <?= $data['id'] ?></h6>
                  <div class="nav-align-top mb-4">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link active"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-top-home"
                          aria-controls="navs-top-home"
                          aria-selected="true"
                        >
                          details
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-top-profile"
                          aria-controls="navs-top-profile"
                          aria-selected="false"
                        >
                          addres
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-top-messages"
                          aria-controls="navs-top-messages"
                          aria-selected="false"
                        >
                          Contact
                        </button>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                        
                      <table class="table table-borderless">
                        <tr >
                          <td>Name : </td>
                          <td><?= $data['detail']['clientName'] ?></td>
                        </tr>

                        <tr>
                          <td>Status : </td>
                          <td><?= $data['detail']['clientStatusName'] ?></td>
                        </tr>
                       
                        <tr>
                          <td>Type : </td>
                          <td><?= $data['detail']['clientTypeName'] ?></td>
                        </tr>

                        <tr>
                          <td>Markup : </td>
                          <td><?= $data['detail']['clientMarkupName'] ?></td>
                        </tr>
                      </table>
                      </div>
                      <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                      <button type="button" data-bs-toggle="modal" data-bs-target="#addAddress" class="btn btn-primary">Add</button>
                      <table class="table">
                    <thead>
                      <tr>
                        <th>Type</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Phone</th>
                        
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><?= $data['dataAddress']['addressType'] ?></td>
                        <td><?= $data['dataAddress']['addressName'] ?></td>
                        <td><?= $data['dataAddress']['city'] ?></td>
                        <td><?= $data['dataAddress']['phone'] ?></td>
                        </tr>
                    </tbody>
                  </table>
                      </div>
                      <div class="tab-pane fade" id="navs-top-messages" role="tabpanel">
                      <button type="button" data-bs-toggle="modal" data-bs-target="#addContact" class="btn btn-primary">Add</button>
                      <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Position</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><?= $data['dataContact']['contactName'] ?></td>
                        <td><?= $data['dataContact']['title'] ?></td>
                        <td><?= $data['dataContact']['position'] ?></td>
                        </tr>
                    </tbody>
                  </table>
                      <!-- <form action="">
                        <div>
                       
                        </div>
                    
                        <div>
                       
                        </div>

                        <div>
                        <label for="defaultFormControlInput" class="form-label">Position</label>
                        <input
                          type="text"
                          name="city"
                          class="form-control"
                          id="defaultFormControlInput"
                          placeholder=""
                          aria-describedby="defaultFormControlHelp"
                        />
                        </div>
                        
                        <div style="margin-top: 20px; display: flex; justify-content: end;">
                        <button type="button" class="btn btn-primary">Add</button>
                        </div>
                        </form> -->
                      </div>
                    </div>
              
                </div>

                </div>
            
              </div>
              <div class="row">
              </div>

<!-- modal tambah addres -->
              <div class="modal fade" id="addAddress" tabindex="-1" aria-hidden="true">
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
                          <label for="defaultFormControlInput" class="form-label">Addres Type</label>
                        <input
                          type="text"
                          name="addresType"
                          class="form-control"
                          id="defaultFormControlInput"
                          placeholder=""
                          aria-describedby="defaultFormControlHelp"
                        />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                          <label for="defaultFormControlInput" class="form-label">Addres Name</label>
                        <input
                          type="text"
                          name="addresName"
                          class="form-control"
                          id="defaultFormControlInput"
                          placeholder=""
                          aria-describedby="defaultFormControlHelp"
                        />
                          </div>
                        </div>

                        <div class="row">
                          <div class="col mb-3">
                          <label for="defaultFormControlInput" class="form-label">City</label>
                        <input
                          type="text"
                          name="city"
                          class="form-control"
                          id="defaultFormControlInput"
                          placeholder=""
                          aria-describedby="defaultFormControlHelp"
                        />
                          </div>
                        </div>

                        <div class="row">
                          <div class="col mb-3">
                          <label for="defaultFormControlInput" class="form-label">Addres Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          placeholder=""
                          aria-describedby="defaultFormControlHelp"
                        />
                          </div>
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

<!-- modal tambah contact -->
<div class="modal fade" id="addContact" tabindex="-1" aria-hidden="true">
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
                          <label for="defaultFormControlInput" class="form-label">name</label>
                        <input
                          type="text"
                          name="addresType"
                          class="form-control"
                          id="defaultFormControlInput"
                          placeholder=""
                          aria-describedby="defaultFormControlHelp"
                        />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                          <label for="defaultFormControlInput" class="form-label">Title</label>
                        <input
                          type="text"
                          name="addresName"
                          class="form-control"
                          id="defaultFormControlInput"
                          placeholder=""
                          aria-describedby="defaultFormControlHelp"
                        />
                          </div>
                        </div>

                        <div class="row">
                          <div class="col mb-3">
                          <label for="defaultFormControlInput" class="form-label">Position</label>
                        <input
                          type="text"
                          name="city"
                          class="form-control"
                          id="defaultFormControlInput"
                          placeholder=""
                          aria-describedby="defaultFormControlHelp"
                        />
                          </div>
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
        