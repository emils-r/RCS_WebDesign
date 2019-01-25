function get_msg_html(name, msg) {
  var msg_temple = `
  <div class="message_container">
      <div class="message_body">
          <h6 class=""> ${name} </h6><span><p class="message_text">${msg}</p></span>
      </div>`;
return msg_temple;
};

$('#chat__send').on('click', function (){
var name = $('#chat__nickname').val();
var msg = $('#chat__message').val();

if(name == '' || msg == '' ){
  alert('Enter Nickname and Message')
} else{
  $('.messages').append(get_msg_html(name,msg));
}

$('#chat__message').val('');

});