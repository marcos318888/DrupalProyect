namespace Drupal\mi_pagina\Controller;

use Drupal\Core\Controller\ControllerBase;

class MiPaginaController extends ControllerBase {
    public function content() {
        return [
            '#markup' => '<h1>Haz que tus objetivos se conviertan en realidad</h1>',
        ];
    }
}
