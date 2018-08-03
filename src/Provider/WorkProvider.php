<?php

namespace App\Provider;

use App\Entity\Project\ProjectClass;
use App\Entity\Project\Worker;

class WorkProvider
{
    public function provideWork()
    {
        $worker = new Worker(1, 'Julien', 'Senior Developer');
        
        return  [
            1 => new Project(
                1,
                'Ninja worker',
                $worker,
                ' dig a hole in the ground and cry ',
                'make a soup, bake eggs, eat monkey',
                'no one know'
            ),
            2 => new Project(
                1,
                'Ninja worker',
                $worker,
                ' dig a hole in the ground and cry ',
                'make a soup, bake eggs, eat monkey',
                'no one know'
            ),
            3 => new Project(
                1,
                'Ninja worker',
                $worker,
                ' dig a hole in the ground and cry ',
                'make a soup, bake eggs, eat monkey',
                'no one know'
            ),
            4 => new Project(
                1,
                'Ninja worker',
                $worker,
                ' dig a hole in the ground and cry ',
                'make a soup, bake eggs, eat monkey',
                'no one know'
            )
        ];
    }
}