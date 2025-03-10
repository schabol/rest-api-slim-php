<?php declare(strict_types=1);

namespace App\Controller\Note;

use App\Controller\BaseController;
use App\Service\NoteService;
use Slim\Container;

abstract class BaseNote extends BaseController
{
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    protected function getNoteService(): NoteService
    {
        return $this->container->get('note_service');
    }
}
