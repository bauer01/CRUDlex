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
 * A factory implementation for {@see MySQLData} instances.
 */
class MySQLDataFactory implements DataFactoryInterface {

    /**
     * Holds the Doctrine DBAL instance.
     */
    protected $database;

    /**
     * Flag whether to use UUIDs as primary key.
     */
    protected $useUUIDs;

    /**
     * Constructor.
     *
     * @param $database
     * the Doctrine DBAL instance
     * @param $useUUIDs
     * flag whether to use UUIDs as primary key
     */
    public function __construct($database, $useUUIDs = false) {
        $this->database = $database;
        $this->useUUIDs = $useUUIDs;
    }

    /**
     * {@inheritdoc}
     */
    public function createData(EntityDefinition $definition, FilesystemInterface $filesystem) {
        return new MySQLData($definition, $filesystem, $this->database, $this->useUUIDs);
    }

}
