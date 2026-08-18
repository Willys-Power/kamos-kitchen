/**
 * Kamo's Kitchen Simple Loader
 * Shows immediately on page load, completes after max time.
 * Removes from DOM so landing page animations can start.
 */

document.addEventListener("DOMContentLoaded", () => {
    const loader = document.getElementById("kamo-loader");

    if (!loader) return;

    // Show loader immediately
    loader.style.display = "flex";

    // Complete after 3 seconds maximum (no stuck loader)
    setTimeout(() => {
        loader.style.opacity = "0";
        loader.style.pointerEvents = "none";

        // Remove from DOM after fade out
        setTimeout(() => {
            loader.remove();
        }, 100);
    }, 1000);
});