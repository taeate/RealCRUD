<?php $this->load->view('layout/header'); ?>
<link rel="stylesheet" type="text/css" href="/assets/note.css" >


<div>
	<div><?php $this->load->view('layout/footer'); ?></div>
	<div>
	<div class="header-2">[ 책을 읽는 습관을 가지자 ]</div>
	<div class="home-container">
		<div>
			<button class="createButton">
				<a class="no-underline" href="../Reders/create">책 등록하기</a>
			</button>
		</div>

		<?php foreach ($get_data as $row): ?>

		<?php $id = $row-> id; ?>

		<?php $title = $row-> title; ?>

		<div class="list-container">
			<div>
				<?php echo $id ?>
			
			
				<a class="no-underline texthover" href="Reders/detail/<?=$id?>"><?php echo $title ?></a>



			</div>
			
		</div>
		<?php endforeach; ?>
		

	</div>
	</div>
</div>


