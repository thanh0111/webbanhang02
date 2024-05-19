<?php
$d=getdate();
$year=$d['year'];
$total = 0; $cost = 0;
for ($i=1; $i <= 12 ; $i++) 
{   
  $list_orrders = $this->Morders->order_follow_month($year, $i);
  $sum = 0;
  foreach ($list_orrders as $row_orrder) 
  {
    $order_detail = $this->Morderdetail->orderdetail_orderid($row_orrder['id']);
    foreach ($order_detail as $value) {
      $sum += $value['count'];
    }
    $total += $row_orrder['money'];
  }
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <!-- Main content -->

  <section class="content">
    <div class="row">
      <!-- /.col (LEFT) -->
      <div class="col-md-12">
        <!-- LINE CHART -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Thống kê doanh thu</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="chart">
              <div id="chart_div" style="width: 100%; height: 250px;"></div>
            </div>
          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-4 col-xs-6">
                <div class="description-block border-right">
                  <h5 class="description-header" style="color: #e90000;"><?php echo number_format($total);?> VNĐ</h5>
                  <span class="description-text">Tổng doanh thu</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <?php
          $d=getdate();
          $year=$d['year'];
          for ($i=1; $i <= 12 ; $i++) 
          {   
            $list_orrders = $this->Morders->order_follow_month($year, $i);
            $total_month = 0;
            foreach ($list_orrders as $row_orrder) 
            {
              $total_month += $row_orrder['money'];
            }
            echo '<div class="col-sm-4 col-xs-6">
                <div class="description-block border-right" style="display: inline-flex;">
                  <span class="description-text">Doanh thu tháng '.$i.' :  </span> 
                  <h5 class="description-header" style="color: #e90000;padding-left: 10px;">'.number_format($total_month).' VNĐ</h5>
                </div>
                <!-- /.description-block -->
              </div>';
          }
          ?>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
      </div> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
   google.charts.load('current', {'packages':['corechart']});
   google.charts.setOnLoadCallback(drawVisualization);

   function drawVisualization() {
    var data = google.visualization.arrayToDataTable([
     ['Month', 'Bán ra', 'Đơn hàng'],
     <?php
     $d=getdate();
     $year=$d['year'];
     for ($i=1; $i <= 12 ; $i++) 
     {   
      $list_orrders = $this->Morders->order_follow_month($year, $i);
      $sum = 0;
      foreach ($list_orrders as $row_orrder) 
      {
        $order_detail = $this->Morderdetail->orderdetail_orderid($row_orrder['id']);
        foreach ($order_detail as $value) {
          $sum += $value['count'];
        }
      }
      if($i >= 1 && $i <=9)
      {
        echo "['0".$i.'/'.$year."',".$sum.",".count($list_orrders)."],";
      }
      else
      {
        echo "['".$i.'/'.$year."',".$sum.",".count($list_orrders)."],";
      }
    }
    ?>

    ]);

    var options = {
      title: 'Số lượng bán ra từ 01/2023 - 12/2023',
      seriesType: 'bars'
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  } 
</script>