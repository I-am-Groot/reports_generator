<html>
  <head>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  </head>
  <body>
    <div class="">
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Item Name</th>
                <th scope="col">Item Price</th>
              </tr>
            </thead>
            <tbody><?php $counter = 0; ?>
              <?php foreach($records as $record): ?>
              <tr>
                <th scope="row"><?php echo $counter + 1; ?></th>
                <td><?php echo $record->item_name; ?></td>
                <td><?php echo $record->item_price; ?></td>
              </tr>
            <?php $counter += 1; ?>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>