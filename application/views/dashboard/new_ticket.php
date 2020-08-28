<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="template-demo">
    </div>
    <div class="row">
      <?php
        if($this->session->flashdata('success')) {
          $message = $this->session->flashdata('success');
          ?>
        <div class="alert alert-success">
        <button class="close" data-dismiss="alert" type="button">×</button>
        <?php echo $message ?>
        </div>
        <?php } ?>
        <?php
        if($this->session->flashdata('failed')) {
          $message = $this->session->flashdata('failed');
          ?>
        <div class="alert alert-danger">
        <button class="close" data-dismiss="alert" type="button">×</button>
        <?php echo $message ?>
        </div>
        <?php } ?>
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <form method="post" class="form-sample" action ="<?=base_url()?>dashboard/add_ticket">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="for-name">Department:</label>
                    <select class="form-control" id="department" name="department" required="" onchange="hide_details()">
                      <option value="PWS Lab">PWS Lab</option>
                      <option value="iSupport">iSupport</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row" id="pws_category_section">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="for-category">Category:</label>
                    <select class="form-control" id="category" name="category">
                      <option value="">Select</option>
                      <option value="New Project">New Project</option>
                      <option value="Docker and Containers">Docker and Containers</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row" id="pws_url_section">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="pro_url">PWSLab Project URL:</label>
                    <input type="text" class="form-control" name="pro_url" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="row" >
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="for-subject">Subject:</label>
                    <input type="text" class="form-control" name="subject" autocomplete="off" required="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="for-description">Description:</label>
                    <textarea class="form-control" name="description" rows="4" required=""></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="for-contact_name">Contact Name:</label>
                    <input type="text" class="form-control" name="contact_name"  autocomplete="off" required="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="for-email_id">Email ID:</label>
                    <input type="email" class="form-control" name="email_id"  autocomplete="off" required="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="for-address">Phone:</label>
                    <input type="text" class="form-control" name="phone"  autocomplete="off" required="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="for-address">Priority:</label>
                    <select class="form-control" name="priority" required="">
                      <option value="">Select</option>
                      <option value="High">High</option>
                      <option value="Medium">Medium</option>
                      <option value="Low">Low</option>
                    </select>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">

    function hide_details(){
      if($('#department').val() != "PWS Lab"){
        $('#pws_url_section').hide();
        $('#pws_category_section').hide();
      }else{
        $('#pws_url_section').show();
        $('#pws_category_section').show();
      }
    }
    
  </script>