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

      <form action="<?=base_url('student/lists')?>" method="post">
        <!-- 年級：<input type="text" name="grade" id="grade">
        班級：<input type="text" name="class" id="class"> -->

        年級：
        <select name="grade" id="grade">
          <option value="">--------</option>
          <option value="1">一年級</option>
          <option value="2">二年級</option>
          <option value="3">三年級</option>
          <option value="4">四年級</option>
          <option value="5">五年級</option>
          <option value="6">六年級</option>
        </select>

        年級：
        <select name="class" id="class">
          <option value="">--------</option>
          <option value="1">1班</option>
          <option value="2">2班</option>
          <option value="3">3班</option>
          <option value="4">4班</option>
          <option value="5">5班</option>
          <option value="6">6班</option>          
        </select>


        <input type="submit" value="班級名單查詢">
      </form>

      <h2>學生名單</h2>
        <table style="width:100%">
          <tr>
            <th>姓名</th>
            <th>班級</th>
            <th>住址</th>
            <th>動作</th>
          </tr>
          <?php foreach($students as $student): ?>          
            <tr>
              <td><?=$student['cname']?> <br></td>
              <td><?=$student['class_name']?> <br></td>
              <td><?=$student['address']?> <br></td>
              <td>
                <a class="btn btn-danger btn-sm"  href="<?=base_url('student/del/') .$student['id'] ?>">刪</a>

                <a class="btn btn-primary btn-sm"  href="<?=base_url('student/update/') .$student['id'] ?>">編</a>
              </td>
            </tr>
          <?php endforeach;?>
        </table>
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