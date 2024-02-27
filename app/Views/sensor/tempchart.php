<div class="panel panel-success">
 
  <div class="panel body card shadow h-100 py-2">
    <!-- canvas for graphic -->
    <canvas id="tempchart"></canvas>

    <!-- graphic image -->
    <script type="text/javascript">
      //read the id of the canvas
      var canvas = document.getElementById('tempchart');
      //date dan temp data for chart
      var data = {
          //sumbu x
          labels : [
              <?php
                  while($data_tanggal = mysqli_fetch_array($recordSensor['date']))
                  {
                      echo '"'.$data_tanggal['date'].'",' ;
                  }
              ?>
          ],
          //sumbu y
          datasets : [{
              label : "Temperature in Celcius",
              backgroundColor : "rgba(63, 208, 201)",
              borderColor : "rgba(2, 53, 60, .4)",
              lineTension : 0.3,
              pointRadius : 5,
              data : [
                  <?php
                      while($data_suhu = mysqli_fetch_array($recordSensor['temp']))
                      {
                         echo $data_suhu['temp'].',' ;
                      }
                  ?>
              ]
          }]

      };

      //chart option
      var option = {
          showLines : true,
          animation : {duration : 0},
      };

      //print chart into canvas
      var myLineChart = new Chart(canvas, {
          type : 'line',
          data : data,
          options : option,
      });
    </script>
  </div>
</div>
