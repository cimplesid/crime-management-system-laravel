<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title','home'); ?>

<div class="container-fluid">
    <div class="row">
    <br>
    <div class="col-md-6 col-md-offset-3" style="height:450px;">



  <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  
  
  


    <?php foreach($results as $key => $value): ?>

    <div id="map" style="width:60%;height:180px;"></div>
    <br>
    <script>
      var map;
      

        function initMap() {
        var myLatLng = {lat: <?php echo e($value->lat); ?>, lng: <?php echo e($value->lon); ?>};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ6a69Apj68JRmMyMxV9rPJwZGtKtH74w&callback=initMap"
    async defer></script>

    <b><?php echo e($value->area); ?></b><br>
    <b>Address:&nbsp;&nbsp;</b><?php echo e($value->address); ?><br>
    <b>Duty Officer:&nbsp;&nbsp;</b><?php echo e($value->dutyofficer); ?><br>
    <b>DMP:&nbsp;&nbsp;</b><?php echo e($value->dmp); ?><br>
    <b>T&T:&nbsp;&nbsp;</b><?php echo e($value->tnt); ?><br>
    <b>Cell:&nbsp;&nbsp;</b><?php echo e($value->cell); ?><br><br>
    <b>Inspector Investigation Cell:&nbsp;&nbsp;</b><?php echo e($value->inspectorinvestigationcell); ?><br><br>
    <b>Officers In charge:</b><br>
    <b>DMP:&nbsp;&nbsp;</b><?php echo e($value->inchargedmp); ?><br>
    <b>Cell:&nbsp;&nbsp;</b><?php echo e($value->inchargecell); ?><br>
    <b>Fax:&nbsp;&nbsp;</b><?php echo e($value->inchargefax); ?><br>
    <b>Email:&nbsp;&nbsp;</b><?php echo e($value->inchargeemail); ?>


    <?php endforeach; ?>

    </div>

   	</div>
</div>
	<br>
		<br>
			<br>

<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>