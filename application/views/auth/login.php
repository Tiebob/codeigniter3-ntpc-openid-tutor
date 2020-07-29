<main role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3"><?=$header_title?></h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p>
    <form method="post" action="<?=base_url('auth/do_login')?>">
      <input type="submit" class="btn btn-lg btn-success" value="登入" />
    </form>
  </div>
</div>

 <!-- /container -->

</main>