<div class="row">
    <div class="col-lg-12">           
        <h2>Products CRUD           
            <div class="pull-right">
               <a class="btn btn-primary" href="<?php echo base_url('crops/create') ?>"> Create New Product</a>
            </div>
        </h2>
     </div>
</div>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
      <tr>
          <th>name</th>
          <th>price</th>
          <th>quality</th>
          <th>crop_max_count</th>
          <th>produce_date</th>
          <th>estimate_date</th>
          <th>quantity</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $d) { ?>      
      <tr>
          <td><?php echo $d->name; ?></td>
          <td><?php echo $d->price; ?></td> 
          <td><?php echo $d->quality; ?></td>
          <td><?php echo $d->crop_max_count; ?></td>      
          <td><?php echo $d->produce_date; ?></td>
          <td><?php echo $d->estimte_date; ?></td> 
          <td><?php echo $d->quantity; ?></td> 
      <td>
        <form method="DELETE" action="<?php echo base_url('crops/delete/'.$d->id);?>">
         <a class="btn btn-info btn-xs" href="<?php echo base_url('crops/edit/'.$d->id) ?>"><i class="glyphicon glyphicon-pencil"></i></a>
          <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>
</div>