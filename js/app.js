(()=>{var e,t={80:()=>{window.addEventListener("load",(function(){var e=document.querySelector("#sidebar");document.querySelector("#primary-menu-toggle").addEventListener("click",(function(t){t.preventDefault(),e.classList.toggle("show")})),void 0!==window.orientation||-1!==navigator.userAgent.indexOf("IEMobile")?e.querySelectorAll("a").forEach((function(t){t.addEventListener("click",(function(){e.classList.toggle("show")}))})):document.querySelector("#sidebar-menu-toggle").addEventListener("click",(function(t){t.preventDefault(),console.log(e),e.classList.toggle("show")}));document.querySelectorAll(".wp-element-button");document.querySelectorAll(".wp-block-details").forEach((function(e){var t=e.children[0],n=document.createElement("div");n.classList.add("wp-element-button"),n.classList.add("shrink-0");var o=document.createElement("img");o.alt="Pfeilsymbol",o.className="transition-transform duration-200",o.src="".concat(themeData.templateDirectoryUri,"/resources/images/vielfaeltig_Icon_Plus.svg"),n.appendChild(o),t.appendChild(n),t.addEventListener("click",(function(t){e.classList.toggle("show"),e.classList.contains("show")?o.classList.add("rotate-90"):o.classList.remove("rotate-90")}))}));var t,n=document.querySelector(".home .entry-content");(console.log(n),n)&&(Array.from(n.children).forEach((function(e,o){console.log("currentSection",t,o),e.classList.contains("stick")?(t&&(console.log("if there is already"),n.appendChild(t)),console.log("create element"),(t=document.createElement("div")).className="current-section-".concat(o),t.appendChild(e)):t&&(console.log("add element"),t.appendChild(e))})),t&&n.appendChild(t));document.querySelector("#sticky-menu ul").childNodes.forEach((function(e){var t=e.firstChild;if(t){t.setAttribute("target","_blank");var n=t.innerHTML.split("<br>"),o="<span>".concat(n[0],"</span><br><span>").concat(n[1],"</span>");t.innerHTML=o}}));var o=document.getElementById("popup"),r=document.getElementById("closeButton");r&&r.addEventListener("click",(function(){o.style.display="none"}))}))},662:()=>{},797:()=>{}},n={};function o(e){var r=n[e];if(void 0!==r)return r.exports;var l=n[e]={exports:{}};return t[e](l,l.exports,o),l.exports}o.m=t,e=[],o.O=(t,n,r,l)=>{if(!n){var a=1/0;for(d=0;d<e.length;d++){for(var[n,r,l]=e[d],c=!0,i=0;i<n.length;i++)(!1&l||a>=l)&&Object.keys(o.O).every((e=>o.O[e](n[i])))?n.splice(i--,1):(c=!1,l<a&&(a=l));if(c){e.splice(d--,1);var s=r();void 0!==s&&(t=s)}}return t}l=l||0;for(var d=e.length;d>0&&e[d-1][2]>l;d--)e[d]=e[d-1];e[d]=[n,r,l]},o.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={773:0,842:0,170:0};o.O.j=t=>0===e[t];var t=(t,n)=>{var r,l,[a,c,i]=n,s=0;if(a.some((t=>0!==e[t]))){for(r in c)o.o(c,r)&&(o.m[r]=c[r]);if(i)var d=i(o)}for(t&&t(n);s<a.length;s++)l=a[s],o.o(e,l)&&e[l]&&e[l][0](),e[l]=0;return o.O(d)},n=self.webpackChunktailpress=self.webpackChunktailpress||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))})(),o.O(void 0,[842,170],(()=>o(80))),o.O(void 0,[842,170],(()=>o(662)));var r=o.O(void 0,[842,170],(()=>o(797)));r=o.O(r)})();