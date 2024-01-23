// Navigation toggle
window.addEventListener('load', function () {

      /* Toggle menu */
      
      let main_navigation = document.querySelector('#sidebar');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      });
      document.querySelector('#sidebar-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      });

      /* Custom buttons class */
      
      var buttons = document.querySelectorAll('.wp-element-button');

      // Iterate through each button
      buttons.forEach(function (button) {
            console.log(button)
          // Check if the innerText is "arrow"
          if (button.innerText.trim().toLowerCase() === 'arrow') {
              // Add the "arrow" class
              button.classList.add('arrow');
              var imgElement = document.createElement('img');

              // Set the src attribute to "image.svg"
              imgElement.src = `${themeData.templateDirectoryUri}/resources/images/ENT_vielfaeltig_Arrow.svg`;
      
              // Append the img element to the button
              button.innerHTML = ''; // Remove existing content
              button.appendChild(imgElement);
          }

          if (button.innerText.trim().toLowerCase() === 'instagram') {
            // Add the "arrow" class
            button.classList.add('instagram');

        }
      });
});
