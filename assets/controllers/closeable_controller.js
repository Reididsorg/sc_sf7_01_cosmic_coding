import { Controller } from '@hotwired/stimulus';

/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
export default class extends Controller {
    async close() {
        this.element.style.width = '0';

        await this.#waitForAnimation();
        this.element.remove();
    }

    // Demande à l'élément de nous dire quand toute son animation css est terminée (le "#" devant le nom de la fonction indique qu'elle est private).
    #waitForAnimation() {
        return Promise.all(
            this.element.getAnimations().map((animation) => animation.finished),
        );
    }
}
