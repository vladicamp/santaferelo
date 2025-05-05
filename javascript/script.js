/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
import VanillaTilt from "vanilla-tilt";
import AOS from "aos";

VanillaTilt.init(document.querySelectorAll(".tilt"), {
    max: 10,
    speed: 400,
    glare: true,
    "max-glare": 0.5,
});

AOS.init();
