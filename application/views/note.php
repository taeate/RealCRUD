<?php $this->load->view('layout/header'); ?>
<link rel="stylesheet" type="text/css" href="/assets/note.css" >

<div class="header-2">[ 책을 읽는 습관을 가지자 ]</div>
<div class="home-container">
<div>
	<button class="createButton">
		<a class="no-underline" href="createBook">책 등록하기</a>
	</button>
</div>

<?php foreach ($get_data as $row): ?>

<?php $id = $row-> id; ?>

<?php $title = $row-> title; ?>

<table border="1">
        <tr>
            <th>책번호</th>
            <th>책제목</th>

        </tr>
        <tr>
            <td>
				<?php echo $id ?>
			</td>
            <td>
			<?php echo $title ?>
			</td>
        </tr>
</table>
<?php endforeach; ?>
	

</div>