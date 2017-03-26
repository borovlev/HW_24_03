<h1>Form</h1>
    <b><?=getFlash() ?></b>
<style type="text/css">
    .comment {
        border: 1px solid black;
        margin: 0 0 5px 5px;
        padding:10px;
    }

    }
</style>
    <form method="post">
        <input type="name" name="username" value="<?=requestPost('username') ?>"><br>
        <input type="email" name="email" value="<?=requestPost('email') ?>"><br>
        <textarea name="message"><?=requestPost('message') ?></textarea><br>
        <img src="/captcha.php"> <br>
        <input type="text" name="security_number"/><br>
        <button>GO</button>
    </form>
    
    <hr>
<!-- Вывод сообщений из базы данных  -->
<div >
    <?php foreach ($messages as $key => $message) : ?>
        <div class='comment'>
            <div><b><?=$message['name']?></b></div>
            <div><i><?=$message['email']?></i></div>
            <hr>
            <?=$message['comments']?>
            <br>
            <br>


        </div>
    <?php endforeach ?>
</div>
<br clear='both'>