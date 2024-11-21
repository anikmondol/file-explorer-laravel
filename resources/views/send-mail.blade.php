<div>
    <h1>Add Details for Send Email</h1>
   <form action="send-mail" method="POST">
    @csrf
    <input type="email" placeholder="enter email address" name="to">
    <br>
    <br>
    <input type="text" placeholder="enter email subject" name="subject">
    <br>
    <br>
    <textarea name="message" id="" cols="30" rows="10" placeholder="enter you comment"></textarea>
    <br>
    <br>
    <button>send mail</button>
   </form>
</div>
