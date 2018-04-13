


<div class="container  text-center">

	<h4><?php echo $titulo; ?></h4>


<form action="newsletter/send" method="post" accept-charset="utf-8" name="formulario" onsubmit="return Validate()">

<?php foreach ($news as $news_item): ?>

    <div class="col-lg-6 text-center">
    	<div class="well">

		    <ul data-brackets-id="12674" id="sortable" class="list-unstyled ui-sortable">
		        <strong class="primary-font"><?php echo $news_item['title']; ?></strong>
		        </br>

		                <?php echo $news_item['link']; ?><br>
		                <?php echo $news_item['category1']; ?><br>
		                <?php echo $news_item['category2']; ?><br>

		        <li class="ui-state-default"><?php echo $news_item['description']; ?></li>
		        </br>

		        <input type="checkbox" name="mark[]" value="<?php echo $news_item['id_news']; ?>" class="pull-right primary-font">
		        <span class="pull-right primary-font"> Enviar essa notícia</span>

				
		       
		    </ul>

    	</div>

   	</div>



<?php endforeach; ?>

</div>

<input type="submit" name="submit" value="Enviar" />


</form>




