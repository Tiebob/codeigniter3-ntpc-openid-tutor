<main role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3"><?=$header_title?></h1>
  </div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">

    <div class="col-md-12">

      <h2>學生資料修改</h2>
      <form action="<?=base_url('student/do_update')?>" method="post">
        <input type="hidden" name="id" value="<?=$student['id']?>">
        學號：<input type="text" name="school_id" value="<?=$student['school_id']?>" readonly="readonly"> <br />
        班級：<input type="text" name="class_name" value="<?=$student['class_name']?>"> <br />
        座號：<input type="text" name="class_no" value="<?=$student['class_no']?>"> <br />
        姓名：<input type="text" name="cname" value="<?=$student['cname']?>"> <br />
        住址：<input type="text" name="address" value="<?=$student['address']?>"><br />

        <input type="submit" value="確認修改">
      </form>
    </div>

    <!-- <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div> -->
  </div>

  <hr>

</div> <!-- /container -->

</main>