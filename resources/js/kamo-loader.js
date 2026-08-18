/**
 * Kamo's Kitchen Loading Screen
 *
 * Handles:
 * - fake initial progress
 * - actual window load
 * - smooth exit animation
 * - prevents the loader from getting stuck
 */

class KamoLoader {
    constructor() {
        this.loader = document.getElementById("kamo-loader");

        this.progressBar = document.getElementById("kamo-loader-progress-bar");

        this.progress = 0;

        this.interval = null;

        this.minimumDisplayTime = 900;

        this.startedAt = Date.now();

        if (!this.loader) {
            return;
        }

        this.init();
    }

    init() {
        this.startProgress();

        window.addEventListener("load", () => this.finish(), { once: true });
    }

    startProgress() {
        this.interval = setInterval(() => {
            /*
             * We intentionally stop around 90%.
             *
             * The final 10% only completes once
             * the page has actually loaded.
             */

            if (this.progress >= 90) {
                clearInterval(this.interval);

                return;
            }

            /*
             * Progress slows down as it approaches 90%.
             */

            const remaining = 90 - this.progress;

            const increment = Math.max(0.5, remaining * 0.08);

            this.progress += increment;

            this.update();
        }, 120);
    }

    update() {
        if (!this.progressBar) {
            return;
        }

        this.progressBar.style.width = `${this.progress}%`;
    }

    finish() {
        const elapsed = Date.now() - this.startedAt;

        const remaining = Math.max(0, this.minimumDisplayTime - elapsed);

        setTimeout(() => {
            this.complete();
        }, remaining);
    }

    complete() {
        clearInterval(this.interval);

        this.progress = 100;

        this.update();

        /*
         * Give the 100% progress animation
         * a moment to complete visually.
         */

        setTimeout(() => {
            this.loader.classList.add("is-complete");

            /*
             * Remove from accessibility tree / DOM
             * after the fade.
             */

            setTimeout(() => {
                this.loader.remove();
            }, 750);
        }, 180);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    new KamoLoader();
});
