import hljs from 'highlight.js';
import Choices from 'choices.js';

// Create a multiselect element.
window.choices = (element) => {
  return new Choices(element, { maxItemCount: 3, removeItemButton: true });
};

// Syntax highlight code blocks.
window.highlightCode = (element) => {
  element.querySelectorAll('pre code').forEach((block) => {
    hljs.highlightBlock(block);
  });
};

// Create Capitalize string
window.capitalize = (string) => string.replace(/^\w/, (c) => c.toUpperCase());

// Create a snake case string
window.snakeCase = (string) => string && string.match(/[A-Z]{2,}(?=[A-Z][a-z]+[0-9]*|\b)|[A-Z]?[a-z]+[0-9]*|[A-Z]|[0-9]+/g).map(s => s.toLowerCase()).join('_');

// Share a content to social Media
const share = function () {
  function popupCenter (url, title, width, height) {
    let popupWidth = width || 640
    let popupHeight = height || 440
    let windowLeft = window.screenLeft || window.screenX
    let windowTop = window.screenTop || window.screenY
    let windowWidth = window.innerWidth || document.documentElement.clientWidth
    let windowHeight = window.innerHeight || document.documentElement.clientHeight
    let popupLeft = windowLeft + windowWidth / 2 - popupWidth / 2
    let popupTop = windowTop + windowHeight / 2 - popupHeight / 2
    window.open(url, title, 'scrollbars=yes, width=' + popupWidth + ', height=' + popupHeight + ', top=' + popupTop + ', left=' + popupLeft)
  }

  let twitter = document.querySelector('.share_twitter')
  if (twitter) {
    twitter.addEventListener('click', function (e) {
      e.preventDefault()
      let url = this.getAttribute('data-url')
      let shareUrl = 'https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + '&via=laravelcm' + '&url=' + encodeURIComponent(url)
      popupCenter(shareUrl, 'Partager sur Twitter')
    })
  }

  let facebook = document.querySelector('.share_facebook')
  if (facebook) {
    facebook.addEventListener('click', function (e) {
      e.preventDefault()
      let url = this.getAttribute('data-url')
      let shareUrl = 'https://facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url)
      popupCenter(shareUrl, 'Partager sur Facebook')
    })
  }

  let linkedin = document.querySelector('.share_linkedin')
  if (linkedin) {
    linkedin.addEventListener('click', function (e) {
      e.preventDefault()
      let url = this.getAttribute('data-url')
      let shareUrl = 'https://www.linkedin.com/shareArticle?url=' + encodeURIComponent(url)
      popupCenter(shareUrl, 'Partager sur LinkedIn')
    })
  }
}

share()