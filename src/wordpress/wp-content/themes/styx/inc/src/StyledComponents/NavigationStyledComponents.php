<?php

namespace Styx\StyledComponents;


class NavigationStyledComponents extends StyledComponentsBase
{
    const  CONTAINER = 'container';

    public function elements() {
        return [
            [
                'id' => self::CONTAINER,
                'selector' => ''
            ]
        ];
    }

}