</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="/slick/slick.min.js"></script> -->
<!-- <script src="/js/slimselect.min.js"></script> -->
<!-- <script type="text/javascript" src="/js/summernote.min.js"></script>
<script type="text/javascript" src="/js/summernote-es-ES.min.js"></script> -->
<script type="text/javascript" src="/js/scripts_admin.js"></script>
<?php if(isset($scripts)): ?>
	<?php foreach($scripts as $script): ?>
		<script type="text/javascript" src="/js/<?=$script?>.js"></script>
	<?php endforeach; ?>
<?php endif; ?>
</body>
</html>