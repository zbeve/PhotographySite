<!-- Email Modal -->
<div id="emailModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Get In Touch</h4>
      </div>
      <div class="modal-body">

        <form action="https://formspree.io/zackbeveridge.biz@gmail.com" method="POST">
            <h3 class="email">Name<h3>
            <input type="text" name="name" placeholder="Ex. 'John Smith'">
            <h3 class="email">Email<h3>
            <input type="email" name="_replyto" placeholder="Ex. 'johnsmith@gmail.com'">
            <h3 class="email">Message<h3>
            <textarea name="message" placeholder="I would like to contact you..."></textarea>
            <div class="submit">
              <button type="submit">Send</button>
            </div>
            @php ($date_format = 'm.d.y')
            <input type="hidden" name="_subject" value="SITE CONTACT - {{ date($date_format) }}" />
        </form>

      </div>
    </div>

  </div>
</div>
