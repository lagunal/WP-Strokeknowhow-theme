import $ from 'jquery';

class WishTree {
  constructor() {
    this.events();
  }

  events() {
    $(".submit-note").on("click", this.createWish.bind(this));
  }

  // Methods will go here
  createWish(e) {
    var ourNewPost = {
      'title': $(".new-note-title").val(),
      'content': $(".new-note-body").val(),
      'status': 'publish'
    }
      if ($(".new-note-title").val() == '' || $(".new-note-body").val() == '') {
          alert('all fields are mandatory.');
      } else {   
          $.ajax({
            beforeSend: (xhr) => {
              xhr.setRequestHeader('X-WP-Nonce', strokeknowhowData.nonce);
            },
            url: strokeknowhowData.root_url + '/wp-json/wp/v2/wish/',
            type: 'POST',
            data: ourNewPost,
            success: (response) => {
              $("#img-tree").attr("src", strokeknowhowData.stylesheet_directory_uri + "/images/Wish–Tree_May.gif");
              $(".new-note-title, .new-note-body").val('');
              $(`
                  <li data-id="${response.id}">
                    <input readonly class="note-title-field" value="${response.title.raw}">
                    <textarea readonly class="note-body-field">${response.content.raw}</textarea>
                  </li>
                `).prependTo("#my-wish").hide().slideDown();
              console.log("Congrats");
              console.log(response);
            },
            error: (response) => {
              if (response.responseText == "You have reached your wish limit.") {
                $(".note-limit-message").addClass("active");
              }
              console.log("Sorry");
              console.log(response);
            }
          });
    }  
  }

}

export default WishTree;