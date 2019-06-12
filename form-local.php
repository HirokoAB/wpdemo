
    <div class="container">

    <div class="contact-title">
    <h1>お問い合わせ</h1>
     <h2>当ブログに関するお問い合わせはこちらに入力してください</h2>
    </div>
    <div class="row">
    <div class="col-7 col-sm-offset-3 contact-form">
        <form id="contactForm" role="form" method="post" action="php/contact.php">
            <!-- 名前入力フォーム -->
            <div class="form-group" >
                <label class="sr-only" for="name">お名前</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="お名前" required="required" data-validation-required-message="Please enter your name."/>
                <p class="help-block text-danger"></p>
            </div>
            <!-- E-mail 入力フォーム -->
            <div class="form-group">
                <label class="sr-only" for="email">メールアドレス</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="メールアドレス" required="required"  data-validation-required-message="Please enter your email address."/>
                <p class="help-block text-danger"></p>
            </div>
            <!-- 内容入力フォーム -->
            <div class="form-group">
                <textarea class="form-control" rows="7" id="message" name="message" placeholder="お問い合わせ内容" required="required" data-validation-required-message="Please enter your message."></textarea>
                <p class="help-block text-danger"></p>
            </div>
            <div class="text-center">
                <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">送信</button>
            </div>
    </form>
    </div>
    </div>
    </div>