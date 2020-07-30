<main role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3"><?=$header_title?></h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>

    <form action="<?=base_url('auth/do_login')?>" method="POST">
    
    使用者帳號：
    <input type="text" name="username">

    使用者密碼：
    <input type="password" name="pass">

    <input type="submit" value="登入">

    </form>


    <hr>


    <p>


    <form method="post" action="<?=base_url('auth/do_openid_login')?>">
      <input type="submit" class="btn btn-lg btn-success" value="新北市OpenID登入" />
    </form>


  </div>
</div>

 <!-- /container -->

</main>