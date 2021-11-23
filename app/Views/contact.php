<?= $this->extend('layouts/front/app'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layouts/front/breadcrumb', [
    'title' => 'Contact Us',
]) ?>

<section class="contact_section sec_ptb_120 bg_default_gray">
    <div class="container">
        <div class="contact_form bg_white wow fadeInUp" data-wow-delay=".1s">
            <div class="main_contact_info_wrap">
                <div class="contact_info_item">
                    <div class="item_icon"><i class="fal fa-envelope"></i></div>
                    <div class="item_content">
                        <h3 class="item_title text-uppercase">Email Address</h3>
                        <p>yourlovelydev@gmail.com</p>
                    </div>
                </div>
                <div class="contact_info_item">
                    <div class="item_icon"><i class="fal fa-map-marker-alt"></i></div>
                    <div class="item_content">
                        <h3 class="item_title text-uppercase">Our Location</h3>
                        <p>Cirebon Utara, 45151</p>
                    </div>
                </div>
                <div class="contact_info_item">
                    <div class="item_icon"><i class="fal fa-phone"></i></div>
                    <div class="item_content">
                        <h3 class="item_title text-uppercase">Phone Number</h3>
                        <p>(62) 851 5533 2844</p>
                    </div>
                </div>
            </div>
            <form onsubmit="event.preventDefault(); acceptContact()" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form_item">
                            <input type="text" name="name" placeholder="Your name:">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form_item">
                            <input type="email" name="email" placeholder="Your Email:">
                        </div>
                    </div>
                </div>
                <div class="form_item">
                    <input type="text" name="subject" placeholder="Enter Your Subject:">
                </div>
                <div class="form_item">
                    <textarea name="message" placeholder="Your Message:"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn_primary text-uppercase">Send message</button>
                </div>
            </form>
        </div>
    </div>
</section>

<div class="map_section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26645.694339928075!2d108.31500635704457!3d-6.90182491215979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a518bf5e9dd4c49!2zNsKwNTQnMDUuNSJTIDEwOMKwMjAnMDEuMyJF!5e0!3m2!1sid!2sid!4v1637648279061!5m2!1sid!2sid" style="border: 0; width: 100vw; height: 600px;" allowfullscreen="" loading="lazy"></iframe>
</div>

<script>
    function acceptContact()
    {
        swal.fire(
            'Terima Kasih',
            'Pesan Anda telah kami terima. Mohon tunggu respon selanjutnya.',
            'success',
        );
    }
</script>
<?= $this->endSection(); ?>