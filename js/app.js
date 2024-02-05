/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

window.addEventListener('load', function () {
  /* --- toggle menu --- */
  var main_navigation = document.querySelector('#sidebar');
  document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
    e.preventDefault();
    main_navigation.classList.toggle('show');
  });
  document.querySelector('#sidebar-menu-toggle').addEventListener('click', function (e) {
    e.preventDefault();
    main_navigation.classList.toggle('show');
  });

  /* --- custom buttons --- */
  var buttons = document.querySelectorAll('.wp-element-button');

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
  var details = document.querySelectorAll('.wp-block-details');
  details.forEach(function (detail) {
    var summary = detail.children[0];
    var arrowContainer = document.createElement('div');
    arrowContainer.classList.add('wp-element-button');
    arrowContainer.classList.add('shrink-0');
    var arrowImage = document.createElement('img');
    arrowImage.alt = 'Pfeilsymbol';
    arrowImage.className = 'transition-transform duration-200';
    arrowImage.src = "".concat(themeData.templateDirectoryUri, "/resources/images/vielfaeltig_Icon_Plus.svg");
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
  var contentContainer = document.querySelector('.home .entry-content'); // Replace with the actual class of your content container
  console.log(contentContainer);
  if (contentContainer) {
    var elements = Array.from(contentContainer.children);
    var currentSection;
    elements.forEach(function (element, index) {
      console.log("currentSection", currentSection, index);
      if (element.tagName.toLowerCase() === 'h2') {
        // Close the current section (if exists)
        if (currentSection) {
          console.log("if there is already");
          contentContainer.appendChild(currentSection);
        }

        // Open a new section before the h2
        console.log("create element");
        currentSection = document.createElement('div');
        currentSection.className = "current-section-".concat(index);
        currentSection.appendChild(element);
      } else if (currentSection) {
        console.log("add element");
        // Move the element into the current section
        currentSection.appendChild(element);
      }
    });

    // Close the last section (if exists)
    if (currentSection) {
      contentContainer.appendChild(currentSection);
    }
  }
  var stickyMenu = document.querySelector('#sticky-menu ul');
  stickyMenu.childNodes.forEach(function (child) {
    var anchor = child.firstChild;
    if (anchor) {
      anchor.setAttribute('target', '_blank');
      var arr = anchor.innerHTML.split('<br>');
      var text = "<span>".concat(arr[0], "</span><br><span>").concat(arr[1], "</span>");
      anchor.innerHTML = text;
    }
  });
});

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/editor-style.css":
/*!****************************************!*\
  !*** ./resources/css/editor-style.css ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/editor-style": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunktailpress"] = self["webpackChunktailpress"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/editor-style","css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	__webpack_require__.O(undefined, ["css/editor-style","css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/editor-style","css/app"], () => (__webpack_require__("./resources/css/editor-style.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;