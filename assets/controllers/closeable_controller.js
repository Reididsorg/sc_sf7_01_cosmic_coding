import { Controller } from '@hotwired/stimulus';

export default class extends Controller {

    // Quand l'animation est terminée, l'élément est supprimé.
    // async puisqu'il y a await à l'intérieur
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
