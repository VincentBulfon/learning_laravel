<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $message;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    //le constructeur récupère un valeur depuis l'appel du composant dans le template balde, la valeur transmise provient de l'attribut qui est donné dans ce template, ensuite le contructeur doit l'associer à une variable publique qui est définie dans l'instance de ce composant
    public function __construct($type, $message = '')
    {
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
