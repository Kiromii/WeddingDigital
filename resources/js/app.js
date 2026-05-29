import "./bootstrap";
import { initLandingPage } from "./components/landing-page-welcome.js";

// Initialize landing page when DOM is ready
if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initLandingPage);
} else {
    initLandingPage();
}
