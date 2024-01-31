window.addEventListener('load', function () {

  /* --- toggle menu --- */
  let main_navigation = document.querySelector('#sidebar');

  document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
    e.preventDefault();
    main_navigation.classList.toggle('show');
  });

  document.querySelector('#sidebar-menu-toggle').addEventListener('click', function (e) {
    e.preventDefault();
    main_navigation.classList.toggle('show');
  });


  /* --- custom buttons --- */
  const buttons = document.querySelectorAll('.wp-element-button');

/*   buttons.forEach(function (button) {
    let imgElement = document.createElement('img');

    if (button.innerText.trim().toLowerCase() === 'arrow') {
      button.classList.add('arrow');
      button.innerHTML = '';
      imgElement.src = `${themeData.templateDirectoryUri}/resources/images/ENT_vielfaeltig_Arrow.svg`;
      imgElement.alt = 'Pfeilsymbol'

    }

    if (button.innerText.trim().toLowerCase() === 'whatsapp') {
      button.classList.add('whatsapp');
      button.innerHTML = '';
      imgElement.src = `${themeData.templateDirectoryUri}/resources/images/whatsapp.svg`;
      imgElement.alt = 'Whatsapp Icon'
      imgElement.style.padding = '0.7rem';
      button.setAttribute('href', 'https://wa.me/000');
    }

    if (button.innerText.trim().toLowerCase() === 'instagram') {
      button.classList.add('instagram');
    }

    button.setAttribute('target', '_blank');
    button.appendChild(imgElement);
  }); */

  /* --- drop-down parts --- */
  const details = document.querySelectorAll('.wp-block-details');

  details.forEach(function (detail) {
    let summary = detail.children[0];

    let arrowContainer = document.createElement('div');
    arrowContainer.classList.add('wp-element-button');
    arrowContainer.classList.add('shrink-0');

    let arrowImage = document.createElement('img');
    arrowImage.alt = 'Pfeilsymbol';
    arrowImage.className = 'transition-transform duration-200';
    arrowImage.src = `${themeData.templateDirectoryUri}/resources/images/vielfaeltig_Icon_Plus.svg`;

    arrowContainer.appendChild(arrowImage);
    summary.appendChild(arrowContainer);

    summary.addEventListener('click', function (e) {
      detail.classList.toggle('show');
      if (detail.classList.contains('show')) {
        // img.style.transform = 'rotate(90deg)';
        arrowImage.classList.add('rotate-90');
      } else {
        // img.style.transform = 'rotate(0deg)';
        arrowImage.classList.remove('rotate-90');
      }
    });
  });

  const stickyMenu = document.querySelector('#menu-sticky');
  stickyMenu.childNodes.forEach(function (child) {
    let anchor = child.firstChild;
    if (anchor) {
      anchor.setAttribute('target', '_blank');
      let arr = anchor.innerHTML.split('<br>');
      let text = `<span>${arr[0]}</span><br><span>${arr[1]}</span>`;
      anchor.innerHTML = text;
    }
  });

});