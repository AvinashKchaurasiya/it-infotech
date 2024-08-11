<?php
include("includes/header.php");
require_once(__DIR__ . '/../Mail/sendMail.php');
?>
<div class="container">
  <div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
      <div>
        <h3 class="fw-bold mb-3">Add Employee</h3>

      </div>
      <div class="ms-md-auto py-2 py-md-0">
        <a href="employees.php" class="btn btn-primary btn-round">Back</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-round">
          <div class="card-header">
            <div class="card-head-row">
              <div class="card-title">Add Employee Form</div>
              <div class="card-tools">
                <span id="sms"></span>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form id="employeeForm" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="firstName">First Name *</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lastName">Last Name *</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="dob">Mobile No *</label>
                    <input type="number" class="form-control" id="number" name="number" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="dob">Date Of Birth *</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="department">Employee Position *</label>
                    <select class="form-control select2" id="department" name="department" required>
                      <option value="">Select Position</option>
                      <option value="web developer">Web Developer</option>
                      <option value="web designer">Web Designer</option>
                      <option value="mobile application developer">Mobile Application Developer</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="salary">Salary *</label>
                    <input type="number" class="form-control" id="salary" name="salary" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="status">Employee Address *</label>
                    <textarea name="address" class="form-control" id="employee_address" placeholder="Employee Address" rows="5"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="image">Profile Image *</label>
                    <div class="card" style="width: 18rem;">
                      <img src=""id="image-preview" class="card-img-top img-thumbnail d-none" alt="Image Preview">
                      <div class="card-body">
                        <div class="custom-file-container" style="display: flex; justify-content:center;">
                          <input type="file" class="custom-file-input" id="image" name="image" required>
                          <button class="btn btn-primary btn-round " type="button" onclick="document.getElementById('image').click()">
                            <i class="fas fa-upload me-2"></i>Choose Image
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="joiningDate">Joining Date *</label>
                    <input type="date" class="form-control" id="joiningDate" name="joiningDate" required>
                  </div>
                </div>
              </div>
              <hr />
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="button" id="saveBtn" class="btn btn-primary btn-round" value="Save Data" name="addEmployee">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    $('#saveBtn').on('click', function(event) {
      event.preventDefault();

      var form = document.getElementById('employeeForm');
      var formData = new FormData(form);

      const saveBtn = document.getElementById('saveBtn');
      saveBtn.value = 'Saving...';
      $.ajax({
        url: 'code/addEmployeeCode.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
          response = JSON.parse(response);
          if (response.status == 'success') {
            saveBtn.value = 'Save Data';
            document.getElementById("sms").textContent = response.message;
            document.getElementById("employeeForm").reset();
            document.getElementById("sms").style.color = "green";
          } else if (response.status == 'error') {
            saveBtn.value = 'Save Data';
            document.getElementById("sms").textContent = response.message;
            document.getElementById("sms").style.color = "red";
          }
        },
        error: function(xhr, status, error) {
          saveBtn.value = 'Save Data';
          document.getElementById("sms").textContent = 'An error occurred while saving the data.';
          document.getElementById("sms").style.color = "red";
        }
      });
    });

    // Image preview
    $('#image').on('change', function() {
      const input = this;
      const imagePreview = document.getElementById('image-preview');

      if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
          imagePreview.src = e.target.result;
          imagePreview.classList.remove('d-none');
        };
        reader.readAsDataURL(input.files[0]);
      }
    });
  });
</script>

<?php
include("includes/footer.php");
?>