


<div class="container  text-center">

	<h4><?php echo $titulo; ?></h4>


<?php foreach ($news as $key => $news_item): ?>

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
		       
		    </ul>

    	</div>

   	</div>



<?php endforeach; ?>


</div>

<a href="/xml/import" class="pull-center primary-font">Importar XML para BD</a>





