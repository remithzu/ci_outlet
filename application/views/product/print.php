<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		body {
	    margin: 2em;
		}
		section.header {
	    text-align: center;
		}
		.title {
	    font-product: 24px;
	    font-weight: bold;
	    text-decoration: underline;
		}
		.subtitle {
	    font-product: 18px;
		}
		.content {
	    margin: 40px 0;
		}
		.tbl {
	    width: 100%;
	    border-collapse: collapse;
		}
		.tbl-bordered {
	    border: 1px solid;
		}
		.tbl-bordered th,
		.tbl-bordered td{
			border: 1px solid;
		}
		.tbl-centered {
	    text-align: center;
		}
		.space {
			width: 160px;
	    display: inline-block;
		}
	</style>
</head>
<body>
	<section class="header">
		<div class="title">DATA PRODUCT</div>
		<div class="subtitle"></div>
	</section>
	<section class="content">
		<table class="tbl tbl-bordered">
      <thead>
        <tr>
          <th width="1">#</th>
          <th>Kode Barcode</th>
          <th>Product</th>
          <th>Stock</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if ($listdata->result()) {
          	$no = 1;
            foreach ($listdata->result() as $key) {
              echo '<tr>';
              echo '<td>'.$no.'</td>';
              echo '<td>'.$key->kode.'</td>';
              echo '<td>'.$key->product.'</td>';
              echo '<td>'.stock($key->id_product).'</td>';
              echo '</tr>';
              $no++;
            }
          }
          else {
            echo '<tr><td colspan="4" class="center bg-red">Data Kosong</td></tr>';
          }
        ?>
      </tbody>
    </table>
	</section>
	<section class="footer">
	</section>
</body>
</html>