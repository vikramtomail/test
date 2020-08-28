<div class="main-panel">
  <div class="content-wrapper">
    <div class="template-demo">
    </div>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-12 table-responsive">
            <table id="order-listing" class="table table-bordered table-striped table-hover" style="width:100%;">
              <thead class="bg-primary text-white">
                <tr>
                  <th>Department</th>
                  <th>Name</th>
                  <th>Ticket ID</th>
                  <th>Ticket Status</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($ticket_result as $ticket) { ?>
                <tr>
                  <td><?php echo $ticket['department']?></td>
                  <td><?php echo $ticket['name']?></td>
                  <td><?php echo $ticket['id']?></td>
                  <td><?php echo $ticket['status']?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- content-wrapper ends -->

