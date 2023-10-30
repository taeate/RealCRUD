<?php $this->load->view('layout/header'); ?>
<link rel="stylesheet" type="text/css" href="/assets/form.css" >


<body>
<body>
    <div class="form-container">
        <form action="" method="POST" class="book-form">
            <div class="form-group">
                <label for="title">책 제목</label><br>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">책 내용</label><br>
                <textarea id="content" name="content" rows="20" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="수정하기" class="submit-button">
            </div>
        </form>
    </div>
</body>

</body>