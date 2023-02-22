import "./bootstrap";
import "./elements/turbo-echo-stream-tag";
import "./libs/turbo";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// window.addEventListener("scroll", () => {
//     if (window.scrollY > 12) {
//         navbar.classList.add("backdrop-blur-lg");
//     } else {
//         navbar.classList.remove("backdrop-blur-lg");
//     }
// });
