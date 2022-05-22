<!-- Contact -->
<div id="contact" class="contact-home section">
    <div class="category-head">
        <h1>Contact <span class="colored">Us</span></h1>
        <p>Take a moment and share with us your thoughts, using this form. Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
    </div>

    <div class="container">
        <form action="{{route('contact.mail.post')}}" method="post">
            @csrf
            <div class="field">
                <p>Name <span class="colored">*</span></p>
                <input name="name" type="text" class="required" title="Please type your name." placeholder="Name...">
            </div>

            <div class="field">
                <p>Email adress <span class="colored">*</span></p>
                <input name="email" type="text" placeholder="Email...">
            </div>

            <div class="field">
                <p>Subject</p>
                <input name="about" type="text" placeholder="Subject...">
            </div>

            <div class="field">
                <p>Type a message <span class="colored">*</span></p>
                <textarea name="message" cols="15" rows="5" class="required" placeholder="Message..."
                          title="Please type a message."></textarea>
            </div>

            <div class="button-container">
                <button type="submit" name="submit" class="button">Send Message <i class="fa fa-envelope"></i></button>
            </div>

        </form>
    </div>
</div>
