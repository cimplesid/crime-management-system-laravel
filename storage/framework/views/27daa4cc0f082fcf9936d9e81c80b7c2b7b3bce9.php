<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title','home'); ?>

<div class="container-fluid">
    <div class="row">

     <div class="col-md-6 col-md-offset-3">
            <center><h3><b>Crime Statistics</b></h3></center>
            <hr>

            <table class="table table-hover table-condensed table-bordered">
            <thead>
            <tr class="active">
                <th>Year</th>
                <th>Robbery</th>
                <th>Kidnapping</th>
                <th>Women/child Abuse</th>
                <th>Total Crime</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($datas as $key => $value): ?>
                <tr class="success">
                    <td><?php echo e($value->year); ?></td>
                    <td><?php echo e($value->robbery); ?></td>
                    <td><?php echo e($value->kidnapping); ?></td>
                    <td><?php echo e($value->women_childabuse); ?></td>
                    <td><?php echo e($value->robbery + $value->kidnapping + $value->women_childabuse); ?></td>
                    
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        </div>


	</div>
</div>
	<br>
		<br>
			<br>

<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>