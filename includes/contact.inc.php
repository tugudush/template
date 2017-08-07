<?php //display_paths(); ?>
<div id="contact-info">
    <!-- <span>PHONE: +66 2026 0517</span><br> -->
    <span>EMAIL: Goodtimes@Foxzee.Life</span>
</div><!--/contact-info-->

<div id="sent-status">Sent Status</div>

<div id="contact-form-wrap">
    <form id="contact-form" method="post">
        <div class="form-group">
            <input id="sender-name" name="sender_name" type="text" placeholder="Name" required>
            <span class="required-indicator">*</span>
        </div><!--/.form-group-->
        <div class="form-group">
            <input id="sender-email" name="sender_email" type="email" placeholder="Email" required>
            <span class="required-indicator">*</span>
        </div><!--/.form-group-->
        <div class="form-group">
            <input id="sender-subject" name="sender_subject" type="text" placeholder="Subject">
        </div><!--/.form-group-->
        <div class="form-group">
            <textarea id="sender-message" name="sender_message" placeholder="Message" rows="4" required></textarea>
            <span class="required-indicator">*</span>
        </div><!--/.form-group-->
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6Lc4KBYUAAAAABTZMJ99C923lSm9QcseWK5lOlUD"></div>
        </div><!--/.form-group-->
        <div class="form-group">
            <input id="send-message" name="send_message" type="submit" value="Send">
        </div><!--/.form-group-->
    </form><!--/contact-form-->
</div><!--/contact-form-wrap-->
