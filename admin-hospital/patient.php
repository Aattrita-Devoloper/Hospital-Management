
<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <?php
    include("includes/head.php");
  ?>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <?php
      include("lib/header.php");
      ?>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <?php
      include("lib/sidebar.php");
      ?>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->

          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
            <div class="col-md-12">
                <!--begin::Quick Example-->
                <div class="card card-info card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">patient</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form class="needs-validation" novalidate>
                    <!--begin::Body-->
                    <div class="card-body">
                      <!--begin::Row-->
                      <div class="row g-3">
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">First name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom01"
                            value=""
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">Last name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom02"
                            value=""
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustomUsername" class="form-label">Address</label>
                          <div class="input-group has-validation">
                            <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                            <input
                              type="text"
                              class="form-control"
                              id="address"
                              name="address";
                              aria-describedby="inputGroupPrepend"
                              required
                            />
                            <div class="invalid-feedback">Please choose address.</div>
                          </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom04" class="form-label">Gender</label>
                          <select class="form-select" id="gender" name="gender" required>
                            <option selected disabled value="">Choose...</option>
                            
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="non-binary">Non-Binary</option>
                            <option value="other">Other</option>
                            <option value="Prefer not to answer">Perfer not to Answer</option>
                          </select>
                          <div class="invalid-feedback">Please select  gender</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom04" class="form-label">Date Of Birth</label>
                          <input type="date" id="birthday" name="birthday"/>

                            <div class="invalid-feedback">Please select date of birth.</div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                            <label for="phone">Phone Number:</label>
                            <div class="input-group has-validation">
                                <input type="tel" id="phone_nmber" name="phone_number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"/>
                                <div class="invalid-feedback">Please enter a valid number.</div>
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-12">
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="invalidCheck"
                              required
                            />
                            <label class="form-check-label" for="invalidCheck">
                               I checked patient all details
                            </label>
                            <div class="invalid-feedback">You must checked before submitting.</div>
                          </div>
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button class="btn btn-info" type="submit">Submit form</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                  <!--begin::JavaScript-->
                  <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (() => {
                      'use strict';

                      // Fetch all the forms we want to apply custom Bootstrap validation styles to
                      const forms = document.querySelectorAll('.needs-validation');

                      // Loop over them and prevent submission
                      Array.from(forms).forEach((form) => {
                        form.addEventListener(
                          'submit',
                          (event) => {
                            if (!form.checkValidity()) {
                              event.preventDefault();
                              event.stopPropagation();
                            }

                            form.classList.add('was-validated');
                          },
                          false,
                        );
                      });
                    })();
                  </script>
                  <!--end::JavaScript-->
                </div>
                <!--end::Quick Example-->

              </div>
              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">Bordered Table</h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Task</th>
                          <th>Progress</th>
                          <th style="width: 40px">Label</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td>1.</td>
                          <td>Update software</td>
                          <td>
                            <div class="progress progress-xs">
                              <div
                                class="progress-bar progress-bar-danger"
                                style="width: 55%"
                              ></div>
                            </div>
                          </td>
                          <td><span class="badge text-bg-danger">55%</span></td>
                        </tr>


                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.card -->

                <!-- /.card -->
              </div>
              <!-- /.col -->

              <!-- /.col -->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <?php
        include("includes/footer.php");
      ?>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <?php
      include("includes/script.php");
    ?>
  </body>
  <!--end::Body-->
</html>
