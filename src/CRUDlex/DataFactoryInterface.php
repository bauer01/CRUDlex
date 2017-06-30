<?php

/*
 * This file is part of the CRUDlex package.
 *
 * (c) Philip Lehmann-Böhm <philip@philiplb.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CRUDlex;
use League\Flysystem\FilesystemInterface;

/**
 * An interface used by the ServiceProvider to construct
 * Data instances. By implementing this and handing it into the service
 * provider, the user can control what database (-variation) he wants to use.
 */
interface DataFactoryInterface {

    /**
     * Creates instances.
     *
     * @param EntityDefinition $definition
     * the definition of the entities managed by the to be created instance
     * @param FilesystemInterface $filesystem
     * the filesystem managing uploaded files
     *
     * @return AbstractData
     * the newly created instance
     */
    public function createData(EntityDefinition $definition, FilesystemInterface $filesystem);

}
