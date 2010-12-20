<?php

namespace Application\Service;

use Bisna\Service\AbstractService;

/**
 * TestService class.
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 */
class TestService extends AbstractService
{
    /**
     * Returns some random stuff, this is a sample implementation.
     *
     * @return string
     */
    public function retrieveFooInstance()
    {
        //$em = $this->getEntityManager($this->options['rw']);

        return $this->options['foo']; // returns: "bar"
    }
}
