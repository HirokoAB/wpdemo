 
<?php get_header(); ?>

<main>

	<div class="breadcrumbs">
     <?php custom_breadcrumb(); ?>
	</div>
<div class="container kaisha-con"> 
<div class="row kaihsa-img">	
<img src="<?php echo get_template_directory_uri(); ?>/img/kaisha.jpg" alt="">
</div>
<h1 class="kaisha-title">会社概要</h1>

<table class="kaisha">
<th>会社名</th>
<td>固定ページのサンプル株式会社</td>
</tr>
<tr>
<th>所在地</th>
<td>愛知県名古屋市〇〇〇〇〇〇</td>
</tr>
<tr>
<th>電話</th>
<td>012-3456-0000</td>
</tr>
<tr>
<th>沿革</th>
<td>会社概要やスタッフの紹介などでページを使います
	<br>
	<br>
	
	<ul class=kaisha-his>
		<li>19○○年	有限会社○○を設立</li>
		<li>○○年	○○サービスを開始</li>
		<li>○○年	株式会社○○に組織変更</li>
		<li>○○年	大阪支店を開設</li>
	</ul>
</td>
</tr>
</table>

<div class="list-btn">
     <a href="<?php echo home_url(); ?>">TOPへ</a>
</div>

</div>

</main>
