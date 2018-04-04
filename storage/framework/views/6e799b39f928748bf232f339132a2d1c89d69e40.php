<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title','home'); ?>

<div class="container-fluid">
    <div class="row">
    <br>
    <div class="col-md-6 col-md-offset-3" style="height:450px;">
    <center><h3><b>Important Police Phone Numbers</b></h3></center>
    <table class="table table-bordered">
    <tr>
    <th>District/Places</th>
    <th>Designation</th>
    <th>Department</th>
    <th>Mobile Numbers</th>
    </tr>
    <?php foreach($results as $key => $value): ?>
    <tr>
    <td><?php echo e($value->division); ?></td>
    <td><?php echo e($value->designation); ?></td>
    <td><?php echo e($value->thana); ?></td>
    <td><?php echo e($value->phone_number); ?></td>
    </tr>
    <?php endforeach; ?>

    </table>
    </div>

   	</div>
</div>
	<br>
		<br>
			<br>

<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>