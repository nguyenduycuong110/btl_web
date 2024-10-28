<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'components/head.php' ?>
    </head>
    <body>
        <?php require_once 'components/header.php' ?>
        <main id="contact" class="contact">
            <div class="breadcrumb">
                <div class="uk-container uk-container-1440">
                    <ul class="uk-breadcrumb">
                        <li><a href="/wpbingosite.ht/home.php">Home</a></li>
                        <li><a href="/wpbingosite.ht/product.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="contact-page">
                <div class="uk-container uk-container-1440">
                    <div class="panel-body">
                        <div class="uk-grid-medium" uk-grid>
                            <div class="uk-width-1-2@s">
                                <div class="contact-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9729729354644!2d105.82835297503041!3d20.993720480646857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac6246cb7d0b%3A0x5fbe6d54a13793dc!2zMTYgTmcuIDE5OCBMw6ogVHLhu41uZyBU4bqlbiwgxJDhu4tuaCBDw7RuZywgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1730122106270!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <div class="form-contact">
                                    <h2 class="heading-1">Leave us a Message</h2>
                                    <form action="">
                                        <div class="uk-grid-medium mb20" uk-grid>
                                            <div class="uk-width-1-2@s">
                                                <div class="form-ip">
                                                    <label for="">Name</label>
                                                    <input type="text" name="name" class="ip" placeholder="Name *" required>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2@s">
                                                <div class="form-ip">
                                                    <label for="">Email</label>
                                                    <input type="text" name="email" class="ip" placeholder="Email address *" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-ip mb20">
                                            <label for="">Your message</label>
                                            <textarea name="content" id="" class="txt" placeholder="Comment or Message *"></textarea>
                                        </div>
                                        <div class="btn-sub">
                                            <button type="submit" value="" class="btn">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once 'components/footer.php' ?>
        <?php require_once 'components/script.php' ?>
    </body>
</html>


