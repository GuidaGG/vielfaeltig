function isMobileDevice() {
  return (typeof window.orientation !== 'undefined') || (navigator.userAgent.indexOf('IEMobile') !== -1);
}

window.addEventListener('load', function () {

  /* --- toggle menu --- */
  let main_navigation = document.querySelector('#sidebar');

  document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
    e.preventDefault();
    main_navigation.classList.toggle('show');
  });

  // Close the sidebar when a link is clicked
  if (isMobileDevice()) {
  main_navigation.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        main_navigation.classList.toggle('show');
      });
  });
  }else{
    document.querySelector('#sidebar-menu-toggle').addEventListener('click', function (e) {
      e.preventDefault();
      console.log(main_navigation)
      main_navigation.classList.toggle('show');
    });
   
  }


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


   /* --- add containers to H2s--- */
   const contentContainer = document.querySelector('.home .entry-content'); // Replace with the actual class of your content container
   console.log(contentContainer)
   if(contentContainer){
      const elements = Array.from(contentContainer.children);
      let currentSection;

      elements.forEach((element, index) => {
        console.log("currentSection", currentSection, index)
        if (element.classList.contains("stick")) {
              // Close the current section (if exists)
              if (currentSection) {
                console.log("if there is already")
                  contentContainer.appendChild(currentSection);
              }

              // Open a new section before the h2
              console.log("create element")
              currentSection = document.createElement('div');
              currentSection.className = `current-section-${index}`
              currentSection.appendChild(element);
          } else if (currentSection) {
            console.log("add element")
              // Move the element into the current section
              currentSection.appendChild(element);
          }
      });


      // Close the last section (if exists)
      if (currentSection) {
          contentContainer.appendChild(currentSection);
      } 
    } 

  const stickyMenu = document.querySelector('#sticky-menu ul');
  stickyMenu.childNodes.forEach(function (child) {
    let anchor = child.firstChild;
    if (anchor) {
      anchor.setAttribute('target', '_blank');
      let arr = anchor.innerHTML.split('<br>');
      let text = `<span>${arr[0]}</span><br><span>${arr[1]}</span>`;
      anchor.innerHTML = text;
    }
  });

  /* Close Popup */ 
  
    const popup = document.getElementById('popup');
    const closeButton = document.getElementById('closeButton');

    // Function to hide the popup
    function hidePopup() {
      popup.style.display = 'none';
    }

    // Event listener for closing button
    if(closeButton){
      closeButton.addEventListener('click', function() {
        hidePopup();
      });
    }

});

