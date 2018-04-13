


<div class="container  text-center">

	<h4><?php echo $titulo; ?></h4>


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

				<a href="/newsletter/send/<?php echo $news_item['id_news']; ?>" class="pull-right primary-font">Enviar Newsletter</a>
		       
		    </ul>

    	</div>

   	</div>



<?php endforeach; ?>

</div>






