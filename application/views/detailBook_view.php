<?php $this->load->view('layout/header'); ?>
<link rel="stylesheet" type="text/css" href="/assets/note.css" >

<?php if($detail_info) : ?>
    
<?php $id = $detail_info-> id; ?>
<?php $title = $detail_info-> title; ?>
<?php $content = $detail_info-> content; ?>

<body>
<h2 class="header-2 list-container">[ 책 상세정보 ]</h2>
<br>
	<div class="disply-flex">
		<div class="disply-flex">
			<button class="createButton">
				<a class="no-underline" href="<?= ('../update/' . $id); ?>">책 수정하기</a>
                
			</button>
            <button class="createButton">
				<a class="no-underline" href="<?= ('../delete/' . $id); ?>">책 삭제하기</a>
                
			</button>
        </div>
    </div>
    <div class="list-container">
        

            <?php echo $id.".".$title."<br><br><br><br>".$content
             ?>
            
    </div>
</div>
</body>
<?php endif ?>